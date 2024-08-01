<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Facades\Cache;

class ClientNewsController extends Controller
{
    public function index()
{
    // Caching berita dengan key 'client_news'. Cache berlaku selama 10 menit.
    $news = News::orderBy('created_at', 'desc')->paginate(2);

    return view('client.news.index', compact('news'));
}

    public function show($id)
    {
        // Caching berita individu berdasarkan ID.
        $newsItem = Cache::remember("news_{$id}", 600, function () use ($id) {
            return News::findOrFail($id);
        });

        return view('client.news.show', compact('newsItem'));
    }
}