<?php

namespace App\Http\Controllers;

use App\Exports\ExportStudents;
use App\Http\Resources\Statistic2Resource;
use App\Models\Belt;
use App\Models\User;
use App\Models\Rank;
use App\Models\Direction;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;
use Inertia\Inertia;
use Maatwebsite\Excel\Facades\Excel;

class Statistic_1Controller extends Controller
{
    public function index()
    {
        return Inertia::render('Statistics_1/Index', [

        ]);
    }

}
