<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVendorRequest;
use App\Sale;
use App\Vendor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

use App\Http\Requests;

class VendorsController extends Controller
{
    // pregled prodajalci 
    public function vendorManagement(){
        $vendors = Vendor::all();
        return view('pages.vendor_management', ['vendors' => $vendors]);
    }
    
    // dodaj podatke za novega prodajalca 
    public function addVendor(){
        return view('pages.add_vendor');
    }
    
    // srani podatke o prodajalcu 
    public function storeVendor(StoreVendorRequest $request){
        $vendor = new  Vendor;
        
        $vendor->name = $request->get('name');
        $vendor->surname = $request->get('surname');
        $vendor->email = $request->get('email');
        $vendor->phone = $request->get('phone');
        
        $vendor->save();
        return redirect(route('vendors'))->with('status', 'Podatki so bili uspešno shranjeni');

    }
    
    // podrobnosti o prodajalcu - podrbonosti prodaje prodajalca 

    public function  vendorDetails($id)
    {
        // vrednost prodaje po mesecih za prodajalca
        $monthSales =array();
        for($m = 1; $m<=12; $m++)
        {
            $data = DB::table('sales')
                ->whereMonth('sale_date', '=', $m)
                ->where('vendor_id', '=', $id)
                ->get();
            $mTotal = 0;
            foreach ($data as $sale)
            {
                $mTotal = $mTotal + $sale->sum_total;
                $monthSales[$m] = $mTotal;
            }
        }
        
        $sales = Sale::where('vendor_id', '=', $id)->get();
        $vendor = Vendor::find($id);
        // skupna vrednost celotne prodaje za prodajalca
        $total = 0;
        foreach ($sales as $sale)
        {
            $total = $total + $sale->sum_total;
        }
        return view('pages.vendor_details', ['vendor' => $vendor, 'sales' => $sales, 'total' => $total, 'monthSales'=> $monthSales]);
    }
}
