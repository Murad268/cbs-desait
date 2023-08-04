<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'logo' => 'template',
            'keywords' => 'template',
            'site_description' => 'template',
            'phone_number' => 'template',
            'email' => 'template',
            'wp_link' => 'template',
            'insta_link' => 'template',
            'fb_link' => 'template',
            'linkedin_link' => 'template',
            'location' => 'template',
            'map_link' => 'template'
        ];

        Setting::create($data);
    }
}
