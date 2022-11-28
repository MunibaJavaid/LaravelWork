<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class AdminController extends Controller
{
    public function index()
    {
        $emp_records = DB::table('employee')->get();
        return view("showpage",['record_key'=> $emp_records]);
    }
    public function create()
    {
        return  view("indexpage");
    }
    public function store(Request $request)
    {
        $data = array();
        $data["emp_fn"]     = $request["fullName"];
        $data["emp_email"]  = $request["email"];
        $data["emp_mobile"] = $request["mobile"];
        $data["emp_city"]   = $request["city"];
        if($data != null)
        {
            DB::table('employee')->insert($data);
            return redirect()->action('AdminController@index');
        }
    }       

   
    public function show($id)
    {
        $empview = DB::table('employee')->where('emp_id', $id)->get();
        return view("recordview",['view_key'=> $empview]);
    }

  
    public function edit($id)
    {
        //get record against id

        $single_record = DB::table('employee')->where('emp_id',$id)->first();
        return view("editpage")->with(['one_record'=>$single_record]);
    }

  
    public function update(Request $request, $id)
    {
       //update operation perform

       $data = array();
        $data["emp_fn"]     = $request["fullName"];
        $data["emp_email"]  = $request["email"];
        $data["emp_mobile"] = $request["mobile"];
        $data["emp_city"]   = $request["city"];
        if($data != null)
        {
            DB::table('employee')
              ->where('emp_id', $id)
              ->update($data);
            return redirect()->action('AdminController@index');
        }
    }

  
    public function destroy($id)
    {
        DB::table('employee')->where('emp_id', $id)->delete();   
        return redirect()->action('AdminController@index');
    }
}
