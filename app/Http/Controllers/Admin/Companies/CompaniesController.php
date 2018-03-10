<?php

namespace App\Http\Controllers\Admin\Companies;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class CompaniesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view('admin.companies.companies_index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.companies.company_create');
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
            'name' => 'required|max:100',
            'email' => 'required|email',
            'logo' => 'image',
            'website' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('admin/companies/create')
                ->withErrors($validator)
                ->withInput();
        } else {
            $new_company = new Company();
            $new_company->name = $request->name;
            $new_company->email = $request->email;
            $new_company->logo = $new_company->uploadLogoCompany($request->logo);
            $new_company->website = $request->website;
            if ($new_company->save()) {
            //return back with error
            }
            return Redirect::route('companies.index');
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
        $company = Company::findOrFail($id);
        if (!$company) {
            return redirect()->back()->getTargetUrl();
        }
        return view('admin.companies.company_edit', compact('company'));
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
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'email' => 'required|email',
            'logo' => 'image',
            'website' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect('admin/companies/edit')
                ->withErrors($validator)
                ->withInput();
        } else {
            $edit_company = Company::findOrFail($id);
            if (!$edit_company) {
                return redirect()->back()->getTargetUrl();
            }
            $edit_company->deleteLogo($edit_company->logo);
            $edit_company->name = $request->name;
            $edit_company->email = $request->email;
            $edit_company->logo = $edit_company->uploadLogoCompany($request->logo);
            $edit_company->website = $request->website;
            if(!$edit_company->save()){
                //return back with error
            }
            return Redirect::route('companies.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy_company = Company::find($id);
        if (!$destroy_company) {
            return redirect()->back()->getTargetUrl();
        }
        $destroy_company->deleteLogo($destroy_company->logo);
        $destroy_company->destroy($id);
        return Redirect::route('companies.index');
    }
}
