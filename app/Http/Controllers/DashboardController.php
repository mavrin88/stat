<?php

namespace App\Http\Controllers;

use App\Models\Payment_log;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $authUser = \auth()->user();
        $user = User::with('source')->where('id', $authUser->id)->first();

        // Виджет текущего баланса за весь период:
        $totalIncome = Payment_log::query()
            ->join('users as u', 'u.id', '=', 'payment_logs.user_id')
            ->join('sources as s', function ($join) {
                $join->on(DB::raw('s.name'), '=', DB::raw("cast(u.registered_params as jsonb) ->> 'source'"));
            })
//            ->join('partners as pp', 'pp.id', '=', 's.partner_id')
            ->where('payment_logs.status', true)
            ->where('u.id', $authUser->id)
            ->selectRaw('SUM(payment_logs.income)/2 as total_income')
            ->first()
            ->total_income;

        // Виджет кол-ва подписчиков за весь период:
        $allUsers = DB::table('users as u')
            ->select('u.id as partner_id', 'pp.name as partner_name', DB::raw("CAST(u.registered_params AS jsonb) ->> 'source' as src"))
            ->join('partners as pp', 'pp.id', '=', 'u.partner_id')
            ->join('sources as s', function ($join) {
                $join->on(DB::raw("CAST(u.registered_params AS jsonb) ->> 'source'"), '=', 's.name');
            })
            ->leftJoin('payment_logs as p', 'u.id', '=', 'p.user_id')
            ->where('s.offer_id', 6)
            ->where('pp.id', $authUser->id)
            ->whereNotNull('pp.name')
            ->where('p.status', true)
            ->where('p.payment_type', '=', 'subscription')
            ->get();

        $subscriptions = $allUsers->count();


        return Inertia::render('Dashboard/Index', ['source_name' => $user->source->name, 'widget_total_income' => $totalIncome, 'widget_subscribed' => $subscriptions]);
    }
}
