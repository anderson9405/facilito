@extends('layouts.app')

@section('content')

<div>
    <div class="container">
        <table class="table">

            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Lastname</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Photo</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
            <tr>
                <th>{{ $user->id }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{ $user->photo }}</td>
              </tr>
            @endforeach
            </tbody>
          </table>
    </div>
</div>

@endsection