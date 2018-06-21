<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Answer;

class Theme extends Model
{
    protected $table = 'themes';

    public $primaryKey = 'id';

    public function getCommentsList()
    {
        return Answer::where('theme_id', $this->id)->orderBy('date', 'asc')->paginate(10);
    }
}
