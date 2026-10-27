<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blog.index', [
            'blogs' => Blog::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['blog_slug'] = Str::slug($request->blog_title);
        $image = $request->file('blog_image');

        if ($request->hasFile('blog_image')) {


            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

            $validatedData['blog_image'] = $image->storeAs(
                'blog-images',
                $imageName,
                'public'
            );
        }

        Blog::create($validatedData);

        return redirect()->route('blog.index')->with('success', 'Berhasil menambahkan berita.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        $validatedData = $request->validated();

        $validatedData['blog_slug'] = Str::slug($request->blog_title);

        if ($request->hasFile('blog_image')) {
            if ($blog->blog_image && Storage::disk('public')->exists($blog->blog_image)) {
                Storage::disk('public')->delete($blog->blog_image);
            }

            $image = $request->file('blog_image');

            $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

            $validatedData['blog_image'] = $image->storeAs(
                'blog-images',
                $imageName,
                'public'
            );
        }

        $blog->update($validatedData);

        return redirect()->route('blog.index')->with('success', 'Berhasil mengubah berita.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        if ($blog->blog_image && Storage::disk('public')->exists($blog->blog_image)) {
            Storage::disk('public')->delete($blog->blog_image);
        }

        $blog->delete();

        return redirect()->route('blog.index')->with('success', 'Berhasil menghapus berita.');
    }
}
