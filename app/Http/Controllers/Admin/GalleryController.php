<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.galleries.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.galleries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        $imagePath = $request->file('image')->store('public/galleries');

        Gallery::create([
            'title' => $request->title,
            'image' => $imagePath,
        ]);

        return redirect()->route('admin.galleries.index')->with('success', 'Berhasil Menambahkan Galeri');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        $data = [
            'title' => $request->title,
        ];

        if ($request->hasFile('image')) {
            Storage::delete($gallery->image);
            $data['image'] = $request->file('image')->store('public/galleries');
        }

        $gallery->update($data);

        return redirect()->route('admin.galleries.index')->with('success', 'Berhasil Edit Galeri');
    }

    public function destroy(Gallery $gallery)
    {
        Storage::delete($gallery->image);
        $gallery->delete();
        return redirect()->route('admin.galleries.index')->with('success', 'Berhasil Menghapus Galeri');
    }
}