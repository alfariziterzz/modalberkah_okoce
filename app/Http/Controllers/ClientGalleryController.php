<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class ClientGalleryController extends Controller
{
    public function index()
    {
        // Mengambil galeri dengan pagination, 12 item per halaman
        $galleries = Gallery::orderBy('created_at', 'desc')->paginate(9);

        return view('client.galleries.index', compact('galleries'));
    }
}