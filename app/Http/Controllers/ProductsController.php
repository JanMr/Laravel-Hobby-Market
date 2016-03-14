<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Inventory;
use App\PackUnit;
use App\Product;
use App\Supplier;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductsController extends Controller
{
    public function productsSite()
    {
        $products = Product::all();
        return view('pages.products', ['products' => $products]);
    }
    
    // dodaj podropnosti o izdelku 
    public function addProductDetails()
    {
        $packingUnits = PackUnit::all();
        $suppliers = Supplier::all();

        return view('pages.add_product', ['packingUnits' => $packingUnits, 'suppliers' => $suppliers]);
    }
    
    // srani podatke o izdelku 
    public function storeProductDetails(StoreProductRequest $request)
    {
        $product = new Product;

        $packingUnit = $request->get('productUnits');

        $supplier = $request->get('suppliers');
        
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->packing_unit_id = $packingUnit[0];
        $product->unit_price = $request->get('unit_price');
        $product->supplier_id = $supplier[0];
        $product->img_url = $request->get('img_url');
        
        $product->save();

        return redirect('/')->with('status', 'Podatki so bili uspešno shranjeni');

    }
    // izdelek podrobnosti
    public function productDetails($id)
    {
        $product = Product::find($id);
        return view('pages.product_details', ['product' => $product]);
    }
}
