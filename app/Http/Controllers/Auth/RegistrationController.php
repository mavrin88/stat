<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Contact;
use App\Models\Partner;
use App\Models\Source;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Inertia\Inertia;

class RegistrationController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        return Inertia::render('Auth/Register');
    }

    public function store(RegisterRequest $request)
    {
        $passwordHash = Hash::make($request->getPassword());

        $partner = null;
        $latestRecord = Partner::latest('id')->first('id');

        if ($latestRecord) {
            $newId = $latestRecord->id + 1;

            $partner = Partner::create([
                'id' => $newId,
                'name' => $request->getName(),
                'email' => $request->getEmail(),
                'password' => $passwordHash,
            ]);

        }

        $source = null;
        $latestRecord = Source::latest('id')->first('id');

        if ($partner) {
            $newId = $latestRecord->id + 1;

            $source = Source::create([
                'id' => $newId,
                'name' => substr(Str::uuid()->toString(), 0, 8),
                'partner_id' => $partner->id
            ]);
        } else {

        }

        $user = null;
        $latestRecord = User::latest('id')->first();

        if ($source) {
            $newId = $latestRecord->id + 1;

            $user = User::create([
                'id' => $newId,
                'name' => $request->getName(),
                'email' => $request->getEmail(),
                'password' => $passwordHash,
                'source_id' => $source->id,
                'partner_id' => $partner->id,
                'telegram' => $partner->id
            ]);
        } else {

        }
        return redirect('/login');
    }

}


