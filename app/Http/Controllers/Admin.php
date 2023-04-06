<?php

namespace App\Http\Controllers;

use App\Models\employee;

use Illuminate\Http\Request;

class Admin extends Controller
{
    //index Function
    public function index()
    {
        $employee_details = new employee;   // variable define
        $url = url('/Form');
        $title = "Register Employee Details";
        $data = compact('url', 'title', 'employee_details');
        return view('Admin.Form')->with($data);
    }

    //Function perform store data in database
    public function store(Request $request)
    {
        //    Insert Query
        $employee_details = new employee;   // variable define
        $employee_details->fname = $request['fname']; //using that name which you pass on form name
        $employee_details->lname = $request['lname']; //using that name which you pass on form name
        $employee_details->email = $request['email']; //using that name which you pass on form name
        $employee_details->mob = $request['mob'];     //using that name which you pass on form name
        $employee_details->job = $request['job'];     //using that name which you pass on form name
        $employee_details->ans = $request['ans'];     //using that name which you pass on form name
        $employee_details->save();          //save data in database After that called
        //redirect View page
        return redirect('/view');
    }

    //Function perform Store data to view in it
    public function view()
    {
        // All employee data can fetch there
        $employee_details = employee::all();
        return view('Admin.Interface', ['employee_details' => $employee_details]);
    }

    //Function perform a task to delete Employee data which you dont want
    public function delete($id)
    {
        // variable define
        $employee_details = employee::find($id);
        // conditions
        if (!is_null($employee_details)) {
            $employee_details->delete();
        }
        return redirect('/view');
    }

    //Edit function perform a task to edit
    public function edit($id)
    {
        $employee_details = employee::find($id);  // variable define & find Data with Id
        if (is_null($employee_details)) {
            //not found
            return redirect('employee_details');
        } else {
            //found
            $title = "Update Employee Details";
            $url = url('/employee/update') . "/" . $id;
            $data = compact('employee_details', 'url', 'title');
            return view('Admin.Form')->with($data);
        }
    }

    //This function perform task edit some employee data and update into database and view page also
    public function update($id, Request $request)
    {
        $employee_details = employee::find($id);  // variable define & find Data with Id And Update that
        $employee_details->fname = $request['fname'];
        $employee_details->lname = $request['lname'];
        $employee_details->email = $request['email'];
        $employee_details->mob = $request['mob'];
        $employee_details->job = $request['job'];
        $employee_details->ans = $request['ans'];
        $employee_details->save();

        //Redirect a View page after update data
        return redirect('/view');
    }
}
