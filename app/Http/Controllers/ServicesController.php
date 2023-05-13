<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ServicesController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('services.index', compact('services'));
    }

    public function dentail($id)
    {

        $service = DB::table('services')->where('id', $id)->first();
        switch($id):
            case 1:
                return view('services.dentail1');
            case 2:
                return view('services.dentail2');
            case 3:
                return view('services.dentail3');
            case 4:
                return view('services.dentail4');
            case 5:
                return view('services.dentail5');
            default:
                abort(404);
        endswitch;
    }
}
