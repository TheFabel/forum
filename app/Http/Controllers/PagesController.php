<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Theme;
use App\Answer;

class PagesController extends Controller
{
    public function index()
    {
        $themes = ThemesController::index();
        $time = microtime(true);
        $data = array(
            'title' => 'Главная страница',
            'themes' => $themes,
            'time' => $time
        );
        return view('pages.index')->with($data);
    }
    public function theme($id)
    {
        if (filter_var($id, FILTER_VALIDATE_INT) === false)
            echo "There's been an error";
        $theme = Theme::find($id);
        $comments = $theme->getCommentsList();
        $data = array(
            'title' => $theme->name,
            'theme' => $theme,
            'comments' => $comments
        );
        ThemesController::addView($theme);
        return view('pages.theme')->with($data);
    }
}
