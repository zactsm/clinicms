<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use App\Models\Patient;

class AdminController extends Controller
{
    public function addview(){

        return view('admin.addstaff'); // Render the add_staff view for the admin
    }

    public function store(Request $request)

    {
        $staff=new Staff();
        $staff->sFName = $request -> sFName;
        $staff->sLName = $request -> sLName;
        $staff->staffDept = $request -> staffDept;
        $staff->staffEmail = $request -> staffEmail;
        $staff->staffPhoneNo = $request -> staffPhoneNo;

        $staff->save();

        return redirect()->back()->with('message', 'Staff added succesfully');
    }

    public function showstaff()
    {

        $staff=Staff::all();

        return view('admin.stafflist',compact('staff'));
    }

    public function deletestaff($staff_id)
    {
        $data=Staff::find($staff_id);
        $data->delete();
        return redirect()->back()->with('message', 'Staff Data Deleted');;

    }

}
