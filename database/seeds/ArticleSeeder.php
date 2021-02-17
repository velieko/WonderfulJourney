<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \App\Article::create([
            'user_id'=> 1,
            'category_id'=> 1,
            'title'=> 'Kuta Beach',
            'description' => 'Kuta Beach Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'image'=> '1.jpg'
            ]);
            \App\Article::create([
                'user_id'=> 1,
                'category_id'=> 1,
                'title'=> 'Nusa Dua Beach',
                'description' => 'Nusa Dua Beach Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                'image'=> '2.jpg'
                ]);
                \App\Article::create([
                    'user_id'=> 1,
                    'category_id'=> 1,
                    'title'=> 'Kuta Beach',
                    'description' => 'Kuta Beach Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'image'=> '1.jpg'
                    ]);
                \App\Article::create([
                    'user_id'=> 1,
                    'category_id'=> 1,
                    'title'=> 'Nusa Dua Beach',
                    'description' => 'Nusa Dua Beach Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                    'image'=> '2.jpg'
                    ]);
                    \App\Article::create([
                        'user_id'=> 3,
                        'category_id'=> 2,
                        'title'=> 'Nusa Dua Mountain',
                        'description' => 'Nusa Dua Mountain Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
                        'image'=> '2.jpg'
                        ]);
    }
}
