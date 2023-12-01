<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('pages.index', compact('pages'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            // Add validation rules for other fields
        ]);

        $data = $request->all();
        $data['user-id'] = auth()->id();

        Page::create($data);

        return redirect()->route('pages.index')->with('success', 'Page created successfully');
    }

    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }

    public function show(Page $page){
        return view('pages.show', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            // Add validation rules for other fields
        ]);

        $page->update($request->all());

        return redirect()->route('pages.index')->with('success', 'Page updated successfully');
    }

    public function destroy(Page $page)
    {
        $page->delete();

        return redirect()->route('pages.index')->with('success', 'Page deleted successfully');
    }
}
