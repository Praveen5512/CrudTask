
@extends('layouts.app')

@section('content')
    <h1 class="text-center">Create</h1>
    <div style="height: 50vh" class="d-flex justify-content-center align-items-center">
        <form action="" method="POST" class="bg-dark p-3 rounded">
            @csrf
            <input type="text" name="name" id="name" placeholder="Name" class="form-control my-2" required>
            <input type="email" name="email" id="email" placeholder="Email" class="form-control my-2" required>
            <input type="text" name="phone" id="phone" placeholder="Phone " class="form-control my-2" required>
            <div class="d-flex justify-content-center"><button class="btn btn-success">Submit</button></div>
        </form>

    </div>
    <div class="d-flex justify-content-center">
        <a href={{route('read')}} class="mx-2">Read</a>
        <a href={{route('update')}} class="mx-2">Update</a>
        
    </div>
@endsection
