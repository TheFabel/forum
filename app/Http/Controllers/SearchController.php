<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $search = "";
        if(isset($_GET['search']))
            $search = $_GET['search'];
        $themes = Theme::where('name', 'LIKE', '%'.$search.'%')->orderBy('last_answer', 'desc')->paginate(15);
        $themes->appends(['search' => $search]);
        $time = microtime(true);
        $data = array(
            'title' => 'Поиск: '.$search,
            'themes' => $themes,
            'time' => $time,
            'search' => $search
        );
        return view('pages.index')->with($data);
    }
}
