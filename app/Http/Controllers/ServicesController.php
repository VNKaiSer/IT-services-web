<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ServicesController extends Controller
{
    public function index()
    {
        $services = DB::table('services')->get();
        return view('services', ['services' => $services]);
    }
}
