<?php

namespace App\Http\Controllers;

use App\Models\employee;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function index()
    {
        $employee_details = new employee;
        $url = url('/Form');
        $title = "Register Employee Details";
        $data = compact('url', 'title', 'employee_details');
        return view('Admin.Form')->with($data);
    }

    public function store(Request $request)
    {
        //    Insert Query
        $employee_details = new employee;
        $employee_details->fname = $request['fname'];
        $employee_details->lname = $request['lname'];
        $employee_details->email = $request['email'];
        $employee_details->mob = $request['mob'];
        $employee_details->job = $request['job'];
        $employee_details->ans = $request['ans'];
        $employee_details->save();

        return redirect('/view');
    }
    public function view()
    {
        $employee_details = employee::all();
        return view('Admin.Interface', ['employee_details' => $employee_details]);
    }

    public function delete($id)
    {
        $employee_details = employee::find($id);
        if (!is_null($employee_details)) {
            $employee_details->delete();
        }
        return redirect('/view');
    }

    public function edit($id)
    {
        $employee_details = employee::find($id);
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

    public function update($id, Request $request)
    {
        $employee_details = employee::find($id);
        $employee_details->fname = $request['fname'];
        $employee_details->lname = $request['lname'];
        $employee_details->email = $request['email'];
        $employee_details->mob = $request['mob'];
        $employee_details->job = $request['job'];
        $employee_details->ans = $request['ans'];
        $employee_details->save();

        return redirect('/view');
    }
}
