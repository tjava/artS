<?php

namespace App\Http\Controllers;

use Session;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $new = DB::table('products')->orderBy('id', 'DESC')->get()->take(4);
        
        return view('product')->with('products', Product::paginate(3));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
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
            'title' => 'required',
            'price' => 'required',
            'image1' => 'required|image',
            'image2' => 'required|image',
            'image3' => 'required|image',
            'description' => 'required'
        ]);

        $image1 = $request->image1;
        $image2 = $request->image2;
        $image3 = $request->image3;

        $image_new_name1 = time().$image1->getClientOriginalName();
        $image_new_name2 = time().$image2->getClientOriginalName();
        $image_new_name3 = time().$image3->getClientOriginalName();

        $image1->move('uploads', $image_new_name1);
        $image2->move('uploads', $image_new_name2);
        $image3->move('uploads', $image_new_name3);

        $product = Product::create([
            'title' => $request->title,
            'price' => $request->price,
            'image1' => 'uploads/' . $image_new_name1,
            'image2' => 'uploads/' . $image_new_name2,
            'image3' => 'uploads/' . $image_new_name3,
            'description' => $request->description
        ]);

        Session::flash('success', 'Art succesfully upload.');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $single = Product::find($id);

        return view('single')->with('single', $single)->with('products', Product::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Product::find($id);

        return view('admin.products.edit')->with('edit', $edit);
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

        $this->validate($request, [
            'title' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);

        $product = Product::find($id);

        if($request->hasFile('image1'))
        {
            $image1 = $request->image1;

            $image_new_name1 = time().$image1->getClientOriginalName();

            $image1->move('uploads', $image_new_name1);

            $product->image1 = 'uploads/' . $image_new_name1;
        }

        if($request->hasFile('image2'))
        {
            $image2 = $request->image2;

            $image_new_name2 = time().$image2->getClientOriginalName();

            $image2->move('uploads', $image_new_name2);

            $product->image2 = 'uploads/' . $image_new_name2;
        }

        if($request->hasFile('image3'))
        {
            $image3 = $request->image3;

            $image_new_name3 = time().$image3->getClientOriginalName();

            $image3->move('uploads', $image_new_name3);

            $product->image3 = 'uploads/' . $image_new_name3;
        }
        
        $product->title = $request->title;
        $product->price = $request->price;
        $product->description = $request->description;

        $product->save();

        Session::flash('success', 'Art succesfully update.');

        return redirect()->route('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        Session::flash('success', 'Art succesfully deleted.');

        return redirect()->route('home');
    }

    public function search(Request $request)
    {

        $search = $request->get('search');

        $search = DB::table('products')->where('title', 'like', '%' . $search . '%')->paginate(2);
        
        return view('search')->with('searchs', $search);
    }
}
