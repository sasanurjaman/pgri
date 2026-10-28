<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.gallery.index', [
            'galleries' => Gallery::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GalleryRequest $request)
    {
        $validatedData = $request->validated();

        $path = $request->file('gallery_image')->store('galleries', 'public');

        $gallery = Gallery::create([
            'gallery_name'  => $request->gallery_name,
            'gallery_image' => $path,
        ]);

        return response()->json([
            'success' => true,
            'id'      => $gallery->id,
            'path'    => $path,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gallery $gallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gallery $gallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
        $gallery->delete();

        if ($gallery->gallery_image && Storage::disk('public')->exists($gallery->gallery_image)) {
            Storage::disk('public')->delete($gallery->gallery_image);
        }

        return redirect()->route('gallery.index')->with('success', 'Berhasil menghapus galeri.');
    }
}
