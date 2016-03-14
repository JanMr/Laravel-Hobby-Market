<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    // prikazuje podatke na prvi strani 
    public function index(){
        $vendors = Vendor::all();
        return redirect(route('sales'));
    }
}
