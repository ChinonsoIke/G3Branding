<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Testimony;

class TestimoniesController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:testimonies-management');
        $this->middleware('permission:add-testimonies')->only('create');
        $this->middleware('permission:edit-testimonies')->only('update');
        $this->middleware('permission:delete-testimonies')->only('delete');
    }

    public function index()
    {
        $testimonies = Testimony::all();
        return view('backend.testimonies.index',compact('testimonies'));
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            'fullname' => 'required',
            'caption' => 'required',
            'testimony' => 'required'
        ]);
        Testimony::create($data);
        return back()->with('success', 'Testimony created successfully');
    }

    public function update(Request $request, Testimony $testimony)
    {
        $request->input('key')->with('');
        $data = $this->validate($request, [
            'fullname' => 'required',
            'caption' => 'required',
            'testimony' => 'required'
        ]);
        $testimony->update($data);
        return back()->with('success', 'Testimony updated successfully');
    }

    public function delete(Testimony $testimony)
    {
        $testimony->delete();
        return back()->with('success', 'Testimony deleted successfully');
    }
}
