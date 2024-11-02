<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class PopularController extends Controller
{
    public function index(){
        $articles = Article::orderBy('created_at', 'asc')->limit(6)->get();

        $articles = new LengthAwarePaginator(
            $articles->forPage(request('page', 1), 3),
            $articles->count(),
            3,
            request('page', 1),
            ['path' => request()->url(), 'query' => request()->query()]
        );

        return view('popular', compact('articles'));
    }
}
