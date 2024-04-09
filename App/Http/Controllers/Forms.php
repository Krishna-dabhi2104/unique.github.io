<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Students;
class Forms extends Controller
{
     public function index()
	{
		return view('forms');
	}
	 public function registers(Request $request)
	{
		//print_r($request->all());
		$students = new students();
		$students->name = $request['name'];
		$students->address = $request['address'];
		$students->save();
		return redirect('/registers/view');
		/*$query = DB::table('registers')->insert([
		'name'=>$request->input('name'),
		'address'=>$request->input('address')
		]);
		return redirect('/registers/view');
		
		if($query)
		{
			return back()->with('success','Data have been successfully saved');
		}
		else
		{
			return back()->with('fail','something went wrong');
		}*/
	}
	public function view()
	{
		$registers = students::all();
		$data  = compact('registers');
		return view('customer-view')->with($data);
		echo "<pre>";
		print_r($registers);
		echo"</pre>";
		//return view('customer-view');
	}
	public function edit($id)
	{
		$registers = students::find($id);
		return view ('edit',compact('registers'));
		//return view('customer-view');
	}
	public function update(Request $request,$id)
	{
		$registers = students::find($id);
			$registers->name = $request->input('name');
		$registers->address = $request->input('address');
		$registers->update();
		return redirect('/registers/view');
	}
	public function remove($id)
	{
		$registers = students::find($id);
		$registers->delete();
	return redirect('/registers/view');
		//return view('customer-view');
	}
}

