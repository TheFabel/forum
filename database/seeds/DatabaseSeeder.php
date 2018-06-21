<?php

use Illuminate\Database\Seeder;
use App\Theme;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        for($i = 0; $i <= 1000; $i++)
//        {
        factory(App\Answer::class, 102000)->create()->each(function($answer)
        {
            $theme = Theme::find($answer->theme_id);
            $theme->comment_count = $theme->comment_count + 1;
            $theme->save();
        });
//        }
    }
}
