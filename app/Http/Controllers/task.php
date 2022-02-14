<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\test;
use App\Http\Requests\TaskRequest​;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

use function GuzzleHttp\Promise\taskcontroller;

class task extends Controller
{
    public function getAllPost ()
    {
        $data = test::all();
        return view('task',compact("data"));
    }
    public function add (Request $request)
    {

        $request->validate([
            'Categories'=>'required' ,
            'BookName'=>'required' ,
            'Author'=>'required' ,
            'Publisher'=>'required' ,
            'ISBN'=>'required' ,
            'KeyWord'=>'required' ,
            
        ]);

        $data = new test ;
        $data->Categories=$request->Categories;
        $data->BookName=$request->BookName;
        $data->Author=$request->Author;
        $data->Publisher=$request->Publisher;
        $data->ISBN=$request->ISBN;
        $data->Barcode=$request->Barcode;
        $data->KeyWord=$request->KeyWord;
        $data->Description=$request->Description;

        $data->save();
        return redirect()->back();
    }

    public function editview($id)
    {
        $data=test::find($id);
        return view("editview",compact("data"));
    }

    public function update(Request $request ,$id)
    {
        $data= test::find($id);
        $data->Categories=$request->Categories;
        $data->BookName=$request->BookName;

        $data->save();
        return redirect('task');

    }

    public function search(Request $req)
    {
        $data = test::where('BookName' , 'like', '%' . $req->input('query') . '%')
        ->orWhere('Categories' , 'like', '%' . $req->input('query') . '%')
        ->get();
        return view('search', ['data' => $data]);
    }


}
