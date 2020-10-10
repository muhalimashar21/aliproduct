<?php

namespace App\Http\Controllers;

use App\Models\ProductDetail;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productdetails = ProductDetail::latest()->paginate(5);

        return view('productdetails.index', compact('productdetails'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('productdetails.create');
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_detail_prod_id' => 'required',
            'product_detail_cust_id' => 'required',
            'product_detail_price_distributor' => 'required',
            'product_detail_price_agentunggal' => 'required',
            'product_detail_price_agenregular' => 'required',
            'product_detail_price_reseller' => 'required',
            'product_detail_price_end_user' => 'required',
            'product_detail_volume' => 'required',
            'product_detail_available' => 'required'
        ]);

        ProductDetail::create($request->all());

        return redirect()->route('productdetails.index')
            ->with('success', 'Product Detail created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function show(int $productDetail)
    {
        $data = ProductDetail::where('product_detail_id', $productDetail)->first();
        return view('productdetails.show', ["product" => $data]);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(int $productDetail)
    {
        $data = ProductDetail::where('product_detail_id', $productDetail)->first();
        return view('productdetails.edit', ["product_detail_id" => $data]);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'product_detail_prod_id' => 'required',
            'product_detail_cust_id' => 'required',
            'product_detail_price_distributor' => 'required',
            'product_detail_price_agentunggal' => 'required',
            'product_detail_price_agenregular' => 'required',
            'product_detail_price_reseller' => 'required',
            'product_detail_price_end_user' => 'required',
            'product_detail_volume' => 'required',
            'product_detail_available' => 'required'
        ]);
        $productdetail = ProductDetail::where('product_detail_id', $id)->update([
            'product_detail_prod_id' => $request->input('product_detail_prod_id'),
            'product_detail_cust_id' => $request->input('product_detail_cust_id'),
            'product_detail_price_distributor' => $request->input('product_detail_price_distributor'),
            'product_detail_price_agentunggal' => $request->input('product_detail_price_agentunggal'),
            'product_detail_price_agenregular' => $request->input('product_detail_price_agenregular'),
            'product_detail_price_reseller' => $request->input('product_detail_price_reseller'),
            'product_detail_price_end_user' => $request->input('product_detail_price_end_user'),
            'product_detail_volume' => $request->input('product_detail_volume'),
            'product_detail_available' => $request->input('product_detail_available'),
        ]);

        return redirect()->route('productdetails.index')
            ->with('success', 'Product Detail updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductDetail  $productDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $productdetail = ProductDetail::where('product_detail_id', $id);
        $productdetail->delete();

        return redirect()->route('productdetails.index')
            ->with('success', 'Product Detail deleted successfully');
    }
}
