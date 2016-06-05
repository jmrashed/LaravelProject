<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Employee;
class EmployeeController extends Controller
{
     




    public function edit($id)
    {

    	$employee=Employee::find($id);

    	return view('employee.edit',compact('employee'));
}




    public function create()
    {

    	return view('employee.create');
    }

    public function destroy($id)
    {
 		$data = Employee::find($id);
 		$data->delete();

 		return redirect('employee');
    }





    public function update(Request $request, $id)
    {
 		$input= $request ->all();
 		$data= Employee::find($id);
 		$data->update($input);

 		return redirect('employee');
    }


  public function login()
    { 
 		 return view('employee.login');

    }


  public function afterlogin()
    { 
 		 echo "I am here after Login.........";

    }



    public function index()
    {
 		 $alldata= Employee::all();
 		 return view('employee.index',compact('alldata'));

    }




    public function store( Request $request)
    {
 		$input= $request ->all();
 		Employee::create($input);
 		return redirect('employee');


    }
















}
