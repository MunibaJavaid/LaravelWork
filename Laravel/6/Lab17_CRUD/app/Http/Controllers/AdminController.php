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
        DB::table('employee')->where('emp_id', $id)->delete();   
        return redirect()->action('AdminController@index');
    }
}
