<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PhotoController extends Controller
{
   
    public function index()
    {
        $pic_records = DB::table('pro_pic')->get();
        return view("page1",['pic_key'=> $pic_records]);
    }
    public function create()
    {
       return view("page2");
    }

  
    public function store(Request $request)
    {
       //---------------------getClientOriginalName() (filename get)
         $myfile = $request->file('pic_upload');
    //     echo 'File name '. $myfile->getClientOriginalName();
    //     echo '<br>';
    //      //---------------------getClientOriginalExtension() (extension get)
    //      echo 'File extension '. $myfile->getClientOriginalExtension();

    //      echo '<br>';
    //      //--------------------- size get
    //      echo 'File size '. $myfile->getSize();

    //      echo '<br>';
    //      //--------------------- file path
    //      echo 'File path '. $myfile->getRealPath();

    //      echo '<br>';
    //      //--------------------- file type
    //      echo 'File type '. $myfile->getMimeType();
    // // 
    //--------------------- file uploading
    $destination = "images";
    $myfile->move($destination,$myfile->getClientOriginalName());
    //echo "move file success";

    $data = array();
    $data["pic_image"] =  $myfile->getClientOriginalName();
    DB::table('pro_pic')->insert($data);
    return redirect()->action('App\Http\Controllers\PhotoController@index');
}

    
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
