<?php

namespace App\Http\Controllers;

use App\Models\News;

class NewsController extends Controller
{
    public function getNews()
    {
        $result = News::all();

        return response()->json($result);
    }
}
