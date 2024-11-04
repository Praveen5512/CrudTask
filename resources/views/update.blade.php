
@extends('layouts.app')

@section('content')
    <h1 class="text-center">Update</h1>
    <div class="d-flex justify-content-center bg-dark py-2">
    <form action={{route('update')}} method="GET">
        @csrf
        <input type="text" name="id" class="form-control " placeholder="Enter ID to Update" required></div>
    </form>

   @foreach ($data as $d )
   <div style="height: 100vh" class="d-flex justify-content-center align-items-center">
    <form action={{route('update')}} method="POST" class="bg-dark p-3 rounded">
        @csrf
        <input type="text" name="id" id="id" placeholder="Name" class="form-control my-2"  value="{{$d->id}}">
        <input type="text" name="name" id="name" placeholder="Name" class="form-control my-2"  value="{{$d->Name}}">
        <input type="email" name="email" id="email" placeholder="Email" class="form-control my-2"  value="{{$d->Email}}">
        <input type="text" name="phone" id="phone" placeholder="Phone " class="form-control my-2" value="{{$d->Phone}}" >
        <div class="d-flex justify-content-center"><button class="btn btn-success">Submit</button></div>
    </form>

</div>
   @endforeach

    <div class="d-flex">
        <a href={{route('read')}}>Read</a>
    </div>
@endsection
