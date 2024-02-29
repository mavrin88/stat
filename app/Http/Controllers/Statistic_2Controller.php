<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Direction;

class Statistic_2Controller extends Controller
{
    public function index()
    {
        return Inertia::render('Statistics_2/Index', [

        ]);
    }

}
