<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PhotoController extends Controller
{
   
    public function index()
    {
        return  view("page1");
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
    // 
    //--------------------- file uploading
    $destination = "my_folder";
   $myfile->move($destination,$myfile->getClientOriginalName());
    echo "move file success";


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
