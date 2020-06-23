<?php

namespace App\Http\Controllers\Administrator;

use App\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:faqs-management');
        $this->middleware('permission:add-faqs')->only('create');
        $this->middleware('permission:edit-faqs')->only('update');
        $this->middleware('permission:delete-faqs')->only('delete');
    }

    public function index()
    {
        $faqs = Faq::orderBy('id', 'desc')->get();
        return view('backend.faq.index', compact('faqs'));
    }

    public function create(Request $request)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        Faq::create($data);
        return back()->with('success', 'Faq created successfully');
    }

    public function update(Request $request, Faq $faq)
    {
        $data = $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        $faq->update($data);
        return back()->with('success', 'Faq updated successfully');
    }

    public function delete(Faq $faq)
    {
        $faq->delete();
        return back()->with('success', 'Faq deleted successfully');
    }
}
