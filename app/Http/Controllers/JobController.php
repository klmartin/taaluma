<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;

class JobController extends Controller
{
    //
    public function addJob()
    {
    	$jobs = JobPost::all();
    	return view('admin.jobs.add_job', compact('jobs'));
    }

    public function saveJob(Request $request )
    {
    	$job = new JobPost;
    	$job->title = $request->title;
    	$job->company = $request->company;
    	$job->location = $request->location;
    	$job->category = $request->category;
    	$job->nature = $request->nature;
    	$job->deadline = $request->deadline;
    	$job->salary = $request->salary;
    	$job->vacancy = $request->vacancy;
    	$job->description = $request->description;
    	$job->responsibility = $request->responsibility;
    	$job->qualification = $request->qualification;
    	$job->apply_link = $request->apply_link;
    	$job->apply_instrutions = $request->apply_instrutions;

    	if($job->save()) {
    		return redirect()->back()->with('success', 'Job added successfully!');
    	}
    	else {
    		return redirect()->back()->with('failure', 'Failed to add Job!');
    	}

    }

    public function jobList()
    {
    	$jobs = JobPost::all();
    	return view('website.job_list', compact('jobs'));
    }
}
