<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{

    public function companyIndex()
    {
    	$companies = Company::all();
    	return view('admin.companies.index', compact('companies'));
    }

    public function saveCompany(Request $request)
    {
    	$company = new Company();
    	$company->comapny_name = $request->comapny_name;
    	$company->company_location = $request->company_location;
    	$company->company_logo = $this->saveLogo($request);
    	$company->company_contact = $request->company_contact;
    	$company->company_detail = $request->company_detail;

    	if($company->save())
    	{
			return redirect()->back()->with('success', 'Company added successfully!');
    	}
    	else
    	{
			return redirect()->back()->with('failure', 'Failed to add Company!');
    	}

    }

    public function editCompany()
    {


    }

    public function updateCompany(Request $request)
    {


    }

    public function saveLogo($request)
    {
    	// Get the uploaded file
        $file = $request->file('company_logo');
        // Generate a unique filename
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();

        // Store the file locally in the storage/app/public directory
        $file->storeAs('company_logos', $filename);

        return $filename;
    }

}
