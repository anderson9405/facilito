<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if(Auth::user()->role->name != 'Administrador'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
       }

        $users = User::all();

        $users = User::paginate(10);
        return view('elements.users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if(Auth::user()->role->name != 'Administrador'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
       }
       
        $roles = Role::all();
        return view('elements.users.create')->with('roles',$roles);
                                            // ->with('message','Exito');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserRequest $request)
    {
        if(Auth::user()->role->name != 'Administrador'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
       }

        $user = new User;
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        if ($request->hasFile('photo')) {
            $file = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images/uploads/'), $file);
            $user->photo= 'images/uploads/'.$file;
        }
        $user->address = $request->address;
        $user->role_id = $request->role_id;
        if($user->save()){
            return redirect('users')->with('message','El usuario: '.$user->fullname.' ha sido creado exitosamente');
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

        $user = User::find($id);
        return view('elements.users.show')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        if(Auth::user()->role->name != 'Administrador'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
       }

        $user = User::find($id);
        $roles = Role::all();
        return view('elements.users.edit')->with('user',$user)->with('roles',$roles);
        dd($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if(Auth::user()->role->name != 'Administrador'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
       }

        $user = User::find($id);
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->birthday = $request->birthday;
        $user->phone = $request->phone;
        if ($request->hasFile('photo')) {
            $file = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('images/uploads'), $file);
            $user->photo= 'images/uploads/'.$file;
        }
        $user->address = $request->address;
        $user->role_id = $request->role_id;
        if($user->save()){
            return redirect('users')->with('message','El usuario: '.$user->fullname.' ha sido actualizado exitosamente');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if(Auth::user()->role->name != 'Administrador'){
            return redirect('home')->with('error','No puede acceder a este recurso.');
       }
       
        $file=public_path().'/'.$user->photo;
        if (!str_contains($user->photo, 'https') && getimagesize($file) && $user->photo != 'images/no-profile.png') {
            unlink($file);
        }

        if ($user->delete()) {
            return redirect('users')->with('message','El usuario: '.$user->fullname.' ha sido eliminado exitosamente');
        };
    }
}
