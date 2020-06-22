<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create([
            'jenis'=>1,
            'title'=>'Makan enak aja kuy',
            'slug_title'=>'makan-enak-aja-kuy',
            'deskripsi'=>'<p>halo ges hehehe. selamat malam dunia</p>'
        ]);
    }
}
