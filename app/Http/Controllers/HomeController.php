<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['welcome','filter']]);;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(Auth::user()->role->name =='Administrador'){
            return view('dashboard-admin');
        }else if(Auth::user()->role->name =='Vendedor'){
            return view('dashboard-seller');
        }else if(Auth::user()->role->name =='Cliente'){
            return view('dashboard-customer');
        }
    }


    public function welcome()
    {
        $products= Product::All();
        $categories =Category::All();
        $slider_products = Product::where('slide','Si')->get();

        return view('welcome')->with('products', $products)
                                ->with('categories', $categories)
                                ->with('slider_products', $slider_products);

    }


    public function filter(Request $request){
        if($request->category_id >= 0){
            $products = Product::where('category_id',$request->category_id)->get();
            $categories = Category::where('id',$request->category_id)->get();

        }else{
            $products = Product::all();
            $categories = Category::all();
        }

        return view('filter')->with('products',$products)
                            ->with('categories', $categories);
    }




}
