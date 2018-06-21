<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Answer;
use App\Theme;

class AnswersController extends Controller
{
    public function add()
    {
        if(isset($_GET['comment']) && $_GET['comment'] != "")
        {
            $answer = new Answer();
            $answer->text = $_GET['comment'];
            $answer->theme_id = $_GET['theme_id'];
            $date = time();
            $answer->date = $date;
            $saved = $answer->save();
            if(!$saved)
                return "Произошла ошибка";
            else
            {
                $theme = Theme::find($_GET['theme_id']);
                $theme->comment_count++;
                $theme->last_answer = time();
                $theme->save();
                return "OK";
            }
        }
        else
            return "Произошла ошибка";
    }
}
