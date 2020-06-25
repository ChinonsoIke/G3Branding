<?php

namespace App\Http\Controllers\Administrator;

use App\Http\Controllers\Controller;
use App\Http\Requests\Administrator\Page\NewPageRequest;
use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::orderBy('id', 'desc')->get();
        return view('backend.pages.index', compact('pages'));
    }

    public function create(NewPageRequest $request)
    {
        $data = $request->only('title', 'content', 'slug');
        Page::create($data);
        return back()->with('success', 'Page created successfully');
    }

    public function update(NewPageRequest $request, Page $page)
    {
        if ($request->isMethod('get')) {
            return view('backend.pages.edit', compact('page'));
        }
        $data = $request->only('title', 'content', 'slug');
        $page->update($data);
        return redirect(route('admin.pages.index'))->with('success', 'Page updated successfully');
    }

    public function delete(Page $page)
    {
        $page->delete();
        return back()->with('success', 'Page deleted successfully');
    }
}
