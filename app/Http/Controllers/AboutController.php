<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.about.index', [
            'abouts' => About::latest()->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, About $about)
    {
        $validatedData = $request->validate([
            'about_title' => 'required',
            'about_description' => 'required',
        ]);

        $about->update($validatedData);

        return redirect()->route('about.index')->with('success', $about->about_title . ' berhasil diperbarui.');
    }
}
