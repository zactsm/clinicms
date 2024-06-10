<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;

class StaffController extends Controller
{

    public function index()
    {
        $staffs = Staff::all();
        return view("staffs.index", compact("staffs"));
    }

    public function staffAdd(Request $request)
    {
        $staff = new Staff();
        $staff->sFName = $request->input('sFName');
        $staff->sLName = $request->input('sLName');
        $staff->staffDept = $request->input('staffDept');
        $staff->staffEmail = $request->input('staffEmail');
        $staff->staffPhoneNo = $request->input('staffPhoneNo');


        $staff->save();

        $staffs = Staff::all();
        return view("staffs.index", compact("staffs"));
    }

    public function staffDetail($id)
    {
        $staff = Staff::where('staffID', $id)->firstOrFail();
        return view('staffs.details', compact("staff"));
    }

    public function staffUpdate(Request $request, $id)
    {
        $staff = Staff::where('staffID', $id)->firstOrFail();
        $staff->sFName = $request->input('sFName');
        $staff->sLName = $request->input('sLName');
        $staff->staffDept = $request->input('staffDept');
        $staff->staffEmail = $request->input('staffEmail');
        $staff->staffPhoneNo = $request->input('staffPhoneNo');
        $staff->save();

        return view('staffs.details', compact('staff'));
    }

    public function staffDelete($id)
    {
        $staff = Staff::where('staffID', $id)->firstOrFail();
        $staff->delete();

        $staffs = Staff::all();
        return view('staffs.index', compact('staffs'));

    }
}
