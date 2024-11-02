<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index($category){
        $category = Category::where('name', $category)->first();

        if(!$category) abort(404);

        $articles = Article::with(['writer', 'category'])
        ->where('category_id', $category->id)
        ->get();

        $categoryName = $category->name;

        return view('category', compact('categoryName', 'articles'));
    }

    public function getArticle($category, $article){
        $article = Article::where('title', $article)->first();

        return view('category-article', compact('article', 'category'));
    }
}
