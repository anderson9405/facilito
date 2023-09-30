<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_products = Product::paginate(10);
        $seller_products = Product::where('user_id', Auth::user()->id)->paginate(10);


        if(Auth::user()->role->name == "Administrador"){
            $products= $all_products;
            return view('elements.products.index')->with('products', $products);

        } elseif (Auth::user()->role->name == "Vendedor"){
            $products= $seller_products;
            return view('elements.products.index')->with('products', $seller_products);

        }else{
            return redirect('home')->with('error', 'no puede acceder a este recurso');

        }



    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->role->name != 'Administrador' && Auth::user()->role->name =! 'Vendedor'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
       }

        $users = User::where('role_id','1')->get();
        $categories = Category::all();
        return view('elements.products.create')->with('categories',$categories)
                                                ->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if(Auth::user()->role->name != 'Administrador' && Auth::user()->role->name =! 'Vendedor'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
        }

        $product = new Product;

        $product->name = $request->name;
        $product->description = $request->description;
        $product->brand = $request->brand;
        $product->price = $request->price;
        if($request->hasFile('image')){
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/products/'), $file);
            $product->image = 'images/products/'.$file;
        }

        $product->stock = $request->stock;
        $product->slide = $request->slide;
        $product->user_id = Auth::user()->id;
        $product->category_id = $request->category_id;

        if($product->save()){
            return redirect('products')->with('message', 'El producto: '.$product->name.' fue creado con éxito.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        if(Auth::user()->role->name != 'Administrador' && Auth::user()->role->name =! 'Vendedor'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
        }

        $product = Product::find($id);
        return view('elements.products.show')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        if(Auth::user()->role->name != 'Administrador' && Auth::user()->role->name =! 'Vendedor'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
        }

        $product = Product::find($id);
        // $users = User::where('role_id','1')->get();
        $users = User::all();
        $categories = Category::all();
        return view('elements.products.edit')->with('product',$product)
                                            ->with('categories',$categories)
                                            ->with('users',$users);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        
        if(Auth::user()->role->name != 'Administrador' && Auth::user()->role->name =! 'Vendedor'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
        }

        $product = Product::find($id);

        $product->name = $request->name;
        $product->description = $request->description;
        $product->brand = $request->brand;
        $product->price = $request->price;
        if($request->hasFile('image')){
            $file = time().'.'.$request->image->extension();
            $request->image->move(public_path('images/products/'), $file);
            $product->image = 'images/products/'.$file;
        }

        $product->stock = $request->stock;
        $product->slide = $request->slide;
        $product->user_id = Auth::user()->id;
        $product->category_id = $request->category_id;

        if($product->save()){
            return redirect('products')->with('message', 'El producto: '.$product->name.' fue actualizado con éxito.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {        
        if(Auth::user()->role->name != 'Administrador' && Auth::user()->role->name =! 'Vendedor'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
        }

        $product = Product::find($id);
        $file = public_path().'/'.$product->image;
        if (getimagesize($file) && $product->image != 'images/no-image.png') {
            unlink($file);
        }

        if($product->delete()){
            return redirect('products')->with('message', 'El product: '.$product->name.' fue eliminado con éxito!!');
        }
    }
}
