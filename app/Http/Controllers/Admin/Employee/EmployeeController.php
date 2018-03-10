<?php

namespace App\Http\Controllers\Admin\Employee;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    /**
     * Display list employee.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return view('admin.employee.employee_index', ['employee' => $employee]);
    }

    /**
     * Show the form for creating a new employ.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.employee_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'email' => 'required|email',
            'phone' => 'required',
            'company_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('admin/employee/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            $new_employ = new Employee();
            $new_employ->first_name = $request->first_name;
            $new_employ->last_name = $request->last_name;
            $new_employ->email = $request->email;
            $new_employ->phone = $request->phone;
            $new_employ->company_id = $request->company_id;
            $new_employ->save();
            return Redirect::route('employee.index');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Employee::destroy($id);
        return Redirect::route('employee.index');
    }
}
