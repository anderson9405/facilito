<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
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
       if(Auth::user()->role->name != 'Administrador'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
       }
        // $categories = Category::all();
        $categories = Category::paginate(10);
        return view('elements.categories.index')->with('categories', $categories);
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->role->name != 'Administrador'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
       }

        return view('elements.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        if(Auth::user()->role->name != 'Administrador'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
       }
        $category = new Category;

        $category->name = $request->name;
        $category->description = $request->description;

        if($category->save()){
            return redirect('categories')->with('message','La categoría: '.$category->name.' ha sido creada exitosamente.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(Auth::user()->role->name != 'Administrador'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
       }
        $category = Category::find($id);
        return view('elements.categories.show')->with('category',$category);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(Auth::user()->role->name != 'Administrador'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
       }
        $category = Category::find($id);
        
        return view('elements.categories.edit')->with('category',$category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, string $id)
    {
        if(Auth::user()->role->name != 'Administrador'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
       }
        $category = Category::find($id);

        $category->name = $request->name;
        $category->description = $request->description;

        if($category->save()){
            return redirect('categories')->with('message','La categoría: '.$category->name.' ha sido actualizada exitosamente.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if(Auth::user()->role->name != 'Administrador'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
       }

        if($category->delete()){
            return redirect('categories')->with('message','La categoría: '.$category->name.' ha sido eliminada exitosamente.');
        }
    }
}
