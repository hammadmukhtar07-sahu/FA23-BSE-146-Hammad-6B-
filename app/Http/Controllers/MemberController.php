<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{

public function index()
{
    $members = Member::latest()->get();
    return view('members.index', compact('members'));
}

public function create()
{
    return view('members.create');
}

public function store(Request $request)
{
    $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'phone'=>'required',
        'membership_date'=>'required'
    ]);

    Member::create($request->all());

    return redirect()->route('members.index')
           ->with('success','Member Added Successfully');
}

public function edit($id)
{
    $member = Member::findOrFail($id);
    return view('members.edit', compact('member'));
}

public function update(Request $request,$id)
{
    $member = Member::findOrFail($id);

    $member->update($request->all());

    return redirect()->route('members.index')
           ->with('success','Member Updated Successfully');
}

public function destroy($id)
{
    $member = Member::findOrFail($id);
    $member->delete();

    return redirect()->route('members.index')
           ->with('success','Member Deleted Successfully');
}

}