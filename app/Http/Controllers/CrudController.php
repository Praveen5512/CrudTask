<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudController extends Controller
{
    public function create(Request $request){

        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;

        DB::table('crud')->insert([
            'Name' =>$name,
            'Email'=>$email,
            'Phone'=>$phone
        ]);
        return redirect()->back();

    }
    public function read()
    {
        $data = DB::table('crud')->get();
        return view('read', compact('data'));


    }

    public function getData(Request $request)
    {
        $id=$request->id;


        $data = DB::table('crud')->where('id',$id)->get();


        return view('update', compact('data'));
    }

    public function update(Request $request)
    {

        $id=$request->id;
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;

        DB::table('crud')->where('id',$id)->update(
            [
                'Name'=>$name,
                'Email'=>$email,
                'Phone'=>$phone

            ]
        );

        return redirect()->to('/read');


    }
    public function delete(Request $request)
    {

        $id = $request->id;
        DB::table('crud')->where('id',$id)->delete();
        return redirect()->back();
    }

}
