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
//        try {
//            $tableScribers = Payment_log::where('user_id', 34773
//
//            )->get();
////            $tableScribers = Payment_log::all();
//        } catch (\Exception $e) {
//            dd($e->getMessage());
//        }

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
        $allsubScribers = DB::table('users as u')
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
//            ->groupBy('pp.name')
            ->get();

        $all_subscriptions = $allsubScribers->count();

        // Виджет кол-ва активных подписчиков
        $activeScribers = DB::table('users as u')
            ->select('u.id as partner_id', 'pp.name as partner_name', 'u.status AS status,', DB::raw("CAST(u.registered_params AS jsonb) ->> 'source' as src"))
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
//            ->addSelect(DB::raw('u.pid'))
            ->whereIn('u.status', ['subscribed', 'lite'])
//            ->groupBy('pp.name')
            ->get();

        $acive_subscriptions = $activeScribers->count();


        // Виджет Доступные балансы:

//        WITH data AS (
//    SELECT
//    p.user_id as pid,
//    p.income,
//    ptp.amount
//   FROM payment_logs p
//   JOIN users u ON u.id = p.user_id
//   JOIN sources s on s.name=cast(u.registered_params as jsonb) ->> 'source'
//   JOIN partners pp on pp.id=s.partner_id
//   JOIN payment_to_partners ptp on pp.id = ptp.partner_id
//   WHERE p.status = TRUE
//    AND pp.id = <ID партнера>
//     )
//SELECT
//    sum(d.income)/2 - d.amount as available_balance
//FROM data d
//group by d.amount

        $available_balances = '';


        // Таблица подписчиков


//        $tableScribers = DB::table('payment_logs as p')
//            ->select(
//                DB::raw("CAST(u.registered_params as jsonb) ->> 'source' as src"),
//                'p.user_id',
//                'p.income',
//                DB::raw("DATE(p.created_at) as day"),
//                'p.payment_type',
//                DB::raw("CAST(u.registered_params as jsonb) ->> 's1' as s1"),
//                DB::raw("CAST(u.registered_params as jsonb) ->> 's2' as s2"),
//                DB::raw("CAST(u.registered_params as jsonb) ->> 's3' as s3"),
//                DB::raw("CAST(u.registered_params as jsonb) ->> 's4' as s4"),
//                DB::raw("CAST(u.registered_params as jsonb) ->> 's5' as s5")
//            )
//            ->join('users as u', 'u.id', '=', 'p.user_id')
//            ->join('sources as s', 's.name', '=', DB::raw("CAST(u.registered_params as jsonb) ->> 'source'"))
//            ->join('partners as pp', 'pp.id', '=', 's.partner_id')
//            ->where('pp.id', $authUser->id)
//            ->where('p.status', true)
//            ->get();




//        dd($tableScribers);

        return Inertia::render('Dashboard/Index', ['source_name' => $user->source->name, 'widget_total_income' => $totalIncome, 'widget_available_balances'=> $available_balances, 'widget_period_subscribed' => $all_subscriptions, 'widget_active_subscribed' => $acive_subscriptions, 'tableScribers' => '$tableScribers']);

    }
}
