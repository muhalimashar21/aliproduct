<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function upload(){
		$product = Product::get();
		return view('upload',['product_image' => $gambar]);
	}
 
	public function proses_upload(Request $request){
		$this->validate($request, [
            'product_name' => 'required',
            'product_description' => 'required',
            'product_point' => 'required',
			'product_image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'data_file';
		$file->move($tujuan_upload,$nama_file);
 
		Product::create([
			'product_image' => $nama_file,
			'product_name' => $request->product_name,
			'product_description' => $request->product_description,
			'product_point' => $request->product_point,
		]);
 
		return redirect()->back();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);

        return view('products.index', compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_name' => 'required',
            'product_description' => 'required',
            'product_point' => 'required',
            'product_image' => 'required'
		]);

		// menyimpan data file yang diupload ke variabel $file
        // $file = $request->file('product_image');
        // $nama_file = time()."_".$request->product_image->extension();
      	//  // isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = 'data_file';
        // $file->move($tujuan_upload,$nama_file);
        // dd($request->file('product_image'));
        $nama_file = $request->file('product_image')->store('public/images');
        $nama_file = str_replace('public/', '', $nama_file);
		Product::create([
			'product_image' => $nama_file,
			'product_name' => $request->product_name,
			'product_description' => $request->product_description,
			'product_point' => $request->product_point,
		]);
        // Product::create($request->all());
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(int $product)
    {
        $data = Product::where('product_id', $product)->first();
        return view('products.show', ["product" => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(int $product)
    {
        $data = Product::where('product_id', $product)->first();
        return view('products.edit', ["product" => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            // 'product_image' => 'required',
            'product_point' => 'required'
        ]);
        
        if ($request->product_image) {
            $nama_file = $request->file('product_image')->store('public/images');
            $nama_file = str_replace('public/', '', $nama_file);
            
            $product = Product::where('product_id',$id)->update([
                'product_name' => $request->input('product_name'),
                'product_description' => $request->input('product_description'),
                'product_image' => $nama_file,
                'product_point' => $request->input('product_point'),
            ]);
        
        } else {

            $product = Product::where('product_id',$id)->update([
                'product_name' => $request->input('product_name'),
                'product_description' => $request->input('product_description'),
                // 'product_image' => $request->input('product_image'),
                'product_point' => $request->input('product_point'),
            ]);

        }


        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $product = Product::where('product_id', $id);
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }

}
