<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Admission;
use App\Models\Region;
use App\Models\District;


class AdmissionController extends Controller
{
	function index()
	{
		$region = Region::all();
		$district = District::all();

		return view('welcome', compact('region', 'district'));
	}
	function view_admissions()
	{
		$allAdmission = Admission::all();
	    return view('admin.viewAddmission', compact('allAdmission'));
	}

	function saveAdmit(Request $req)
	{
		if(Admission::insert([$req->all()]))
		{
			return redirect('http://www.ihsanschools.ac.tz/index.php/admission/how-to-apply');
		}
	}	

}