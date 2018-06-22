<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $search = isset($_GET['search']) ? $_GET['search'] : "";
        $themes = Theme::where('name', 'LIKE', '%'.$search.'%')->orderBy('last_answer', 'desc')->paginate(15);
        $themes->appends(['search' => $search]);
        $data = array(
            'title' => 'Поиск: '.$search,
            'themes' => $themes,
            'search' => $search
        );
        return view('pages.index')->with($data);
    }
}
