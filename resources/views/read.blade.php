
@extends('layouts.app')

@section('content')
   <div class="container">
    <h1 class="text-center">Read</h1>
    @if (sizeof($data)==0)
        <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
            <div>
                <div class="text-center">No data Found</div>
                <div class="text-center"><a href={{route('create')}}>click here to add data</a></div>
            </div>
        </div>

    @endif
    <div class="" style="height: 100vh; overflow-Y:auto; Scrollbar-width:none" >
        <div class=" text-light">

            @foreach ($data as $d )

                <div class="row bg-dark my-2">
                    <div class="col">{{$d->id}}</div>
                    <div class="col">{{$d->Name}}</div>
                    <div class="col">{{$d->Email}}</div>
                    <div class="col">{{$d->Phone}}</div>
                    <div class="col d-flex">
                        <div class="p-2 bg-info rounded mx-2" style="width:fit-content;">
                            <form action={{route('update')}} method="GET">
                                @csrf
                                <button><i class="fa-regular fa-pen-to-square fa-2x"></i></button>
                            </form>
                        </div>
                        <div class="p-2 bg-info rounded mx-2" style="width:fit-content;">
                            <form action={{route('delete')}} method="POST">
                                @csrf
                                <input type="hidden" name="id" value={{$d->id}}>
                                <button><i class="fa-solid fa-trash fa-2x fa-2x"></i></button>
                            </form>
                        </div>

                    </div>
                </div>

            @endforeach
        </div>
    </div>
   </div>
@endsection
