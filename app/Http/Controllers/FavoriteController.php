<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->role->name == "Cliente"){

            $favorites = Favorite::where('user_id', Auth::user()->id)->get();
            $product_ids = $favorites->pluck('product_id');

            // código profe
            // foreach ($favorites as $favorite) {
            //     dd($favorite->product->name);
            // }

            $products = [];
            $total = 0;
            
            foreach ($product_ids as $product_id) {
                $product = Product::find($product_id);
                if ($product) {
                    array_push($products, $product);
                    $total += $product->price;
                }
            }
            return view('elements.products.cart')->with('products', $products)
                                                ->with('total', $total);

        } else{
            return redirect('home')->with('error', 'no puede acceder a este recurso');
        }
       

        
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if(Auth::user()->role->name != "Cliente"){
            return redirect('/')->with('error', 'Ingrese o registrese como cliente para acceder al carrito.');

        }


        $favorite = new Favorite();
        $favorite->user_id = $request->user_id;
        $favorite->product_id = $request->product_id;

        $product = Product::find($request->product_id);

        if($favorite->save()){
            return redirect('/')->with('message', 'El producto: '.$product->name.' fue agregado al carrito.');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {        
        // if(Auth::user()->role->name != 'Cliente'){
        //     return redirect('home')->with('error','No puede acceder a este recurso.');
        // }

        // $product = Product::find($id);
        // $file = public_path().'/'.$product->image;
        // if (getimagesize($file) && $product->image != 'images/no-image.png') {
        //     unlink($file);
        // }

        // if($product->delete()){
        //     return redirect('products')->with('message', 'El product: '.$product->name.' fue eliminado con éxito!!');
        // }
    }
}

