<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Theme;

class ThemesController extends Controller
{
    static function index()
    {
        return Theme::orderBy('last_answer', 'desc')->paginate(15);
    }
    static function addView($theme)
    {
        $theme->views = $theme->views + 1;
        $theme->save();
    }
}
