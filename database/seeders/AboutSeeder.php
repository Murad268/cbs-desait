<?php

namespace Database\Seeders;

use App\Models\AbaoutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'about_img' => 'example photo',
            'about_top' => 'BİZİ DAHA YAXINDAN TANIYIN',
            'about_title' => 'Rəqəmsal həllər ilə hər zaman yanınızdayıq',
            'about_text' => 'Kreativ(bacarıqlı) komandamız və strateji həllərimiz 6 illik fəaliyyət müddətində onlarla tərəfdaşımızın inkişafına, satışlarının artımına və tanınmasına səbəbdir!
            Tərəfdaşlarımızın inkişafını növbəti səviyyəyə qaldırmaq üçün uzunmüddətli təcrübəmizə əsaslanaraq dizayn, marketinq və biznes problemlərinin öhdəsindən gəlməyi sevirik!',
        ];

        AbaoutUs::create($data);
    }
}
