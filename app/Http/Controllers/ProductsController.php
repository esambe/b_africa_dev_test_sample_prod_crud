<?php

namespace App\Http\Controllers;

//use App\Http\Controllers\Controller;
use App\Models\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth:sanctum']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        ////
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'title' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $prod = new Product;

        if($request->file('image')) {

            $originalImage  = $request->file('image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath  = public_path().'/thumbnail/';
            $originalPath   = public_path().'/uploads/';
            $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());

            $thumbnailImage->resize(150,150);
            $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

            $prod->image   = time().$originalImage->getClientOriginalName();
        }
        $prod->title = $request->title;
        $prod->vendor_id = $request->vendor_id;
        $prod->price = $request->price;
        $prod->is_published = $request->is_published ? 1 : 0;
        $prod->is_discount = $request->is_discount ? 1 : 0;
        $prod->is_service = $request->is_service ? 1 : 0;
        $prod->in_stock = $request->in_stock ? 1 : 0;
        $prod->slug = Str::slug($request->title) .'-'. time();
        $prod->description = $request->description;
        $prod->save();

        return back()->with('status', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $prod = Product::find($id);

        if($request->file('image')) {
            $originalImage  = $request->file('image');
            $thumbnailImage = Image::make($originalImage);
            $thumbnailPath  = public_path().'/thumbnail/';
            $originalPath   = public_path().'/uploads/';
            $thumbnailImage->save($originalPath.time().$originalImage->getClientOriginalName());

            $thumbnailImage->resize(150,150);
            $thumbnailImage->save($thumbnailPath.time().$originalImage->getClientOriginalName());

            $prod->image   = time().$originalImage->getClientOriginalName();
        }

        $prod->title = $request->title;
        $prod->vendor_id = $request->vendor_id;
        $prod->price = $request->price;
        $prod->slug = Str::slug($request->title).'-'. time();
        $prod->is_published = $request->is_published ? 1 : 0;
        $prod->is_discount = $request->is_discount ? 1 : 0;
        $prod->is_service = $request->is_service ? 1 : 0;
        $prod->in_stock = $request->in_stock ? 1 : 0;
        $prod->description = $request->description;
        $prod->save();
        // $thumbnailImage->destroy();

        return back()->with('status', $prod->title .', updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Product::find($id);
        $prod->delete();
        return back()->with('danger', 'Product deleted successfully');
    }
}
