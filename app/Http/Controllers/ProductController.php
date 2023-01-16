<?php

namespace App\Http\Controllers;

use App\Models\Ingredient;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pizzas = Product::all();
        return view('products.pizzas', ['pizzas' => $pizzas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $description = $request->input('description');
        $image = $request->input('image');
        $price = $request->input('price');
        $category_id = $request->input('category_id');

        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);
        Product::create($request->only(['name', 'image','v', 'category_id']));

        return redirect()->route('products.pizzas');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pizza = Product::find($id);
        return view('products.show', ['pizza' => $pizza,'ingredients' => Ingredient::all()]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pizza = Product::find($id);
        return view('products.edit', ['pizza' => $pizza,'ingredients' => Ingredient::all()]);
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
        $validated = $request->validate([
            'name' => 'required',
            'image' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);
        Product::find($id)->update($request -> only('name', 'image', 'price', 'category_id'));
        return redirect()->route('products.show', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pizza = Product::destroy('id', $id);
        $pizzas = Product::all();
        return view('products.pizzas', ['pizzas' => $pizzas]);
    }
}
