<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Http\Requests\StoreCostumerRequest;
use App\Product;
use App\Sale;
use App\Vendor;
use Illuminate\Support\Facades\Request;



class SalesController extends Controller
{
    // zavihek prodaja 
    public function salesSite()
    {
        $customers = Customer::all();
        $sales = Sale::all();
        return view('pages.sales', ['customers' => $customers, 'sales' => $sales]);
    }
    
    // dodaj novega kupca
    public function addCustomer()
    {
        return view('pages.add_customer');
    }

    // srhani podatke o kupcu
    public function storeCustomer(StoreCostumerRequest $request)
    {
        $customer = new Customer;
        $customer->name = $request->get('name');
        $customer->surname = $request->get('surname');
        $customer->email = $request->get('email');
        $customer->address = $request->get('address');
        $customer->zip = $request->get('zip');
        $customer->city = $request->get('city');
        $customer->save();

        return redirect(route('sales'))->with('status','Podatki so bili uspešno shranjeni');
    }
    // vesi podatke o prodaji 
    public function addSale()
    {
        $vendors = Vendor::all();
        $customers = Customer::all();
        $products = Product::all();
        
        return view('pages.add_sale', ['vendors' => $vendors, 'customers' => $customers, 'products' => $products]);
        
    }
    // srani podatke o prodaji
    public function storeSale()
    {
        // podatki iz obrazca
        $vendor = Request::get('vendors');
        $customer = Request::get('customers');
        $soldProduct = Request::get('products');
        $quantity = Request::get('quantity');
        $date = Request::get('sale_date');
        
        // podatki sa  sale sum_total 
        $quantity = floatval($quantity);
        $product = Product::where('id', '=', $soldProduct[0])->get()->first();
        
        $unitPrice = $product->unit_price;
        $unitPrice = floatval($unitPrice);
        $sum_total = $quantity * $unitPrice;

        $sale = new Sale;
        // srani podatke v tabelo sales
        $sale->customer_id = $customer[0];
        $sale->vendor_id = $vendor[0];
        $sale->sale_date = $date;
        $sale->sum_total = $sum_total;
        $sale->save();
        // podatki za povezovalno tabelo products_sales
        $product->sales()->attach($sale->id,['quantity' => $quantity]);
        // evidentiranje zaloge - v izdelavi

        return redirect('/');

        




    }
}
