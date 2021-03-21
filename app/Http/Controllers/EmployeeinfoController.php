<?php

namespace App\Http\Controllers;

use App\Models\Employeeinfo;
use Illuminate\Http\Request;

class EmployeeinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employeeinfos = Employeeinfo::latest()->paginate(5);

        return view('employeeinfo.index', compact('employeeinfos'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employeeinfo.create');
    }



    public function create1(Employeeinfo $employeeinfo)
    {
        return view('employeeinfo.create1',compact('employeeinfo'));
    }



    public function search(Request $request)
    {
        $search=$request->get('search');
        $employeeinfos=\DB::table('employeeinfos')->where('name','like', '%' .$search. '%')->paginate(5);
        return view('employeeinfo.index',['employeeinfos' => $employeeinfos]);

    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required'
            
        ]);

        Employeeinfo::create($request->all());

        return redirect()->route('employeeinfo.index')
            ->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function show(Employee $employee)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee $employee)
    {
         
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
       
    }
}
