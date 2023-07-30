<?php

namespace Database\Seeders;

use App\Models\Still;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'still_title' => 'About Us',
            'still_description' => 'We’ve helped some of the UK’s most successful businesses with their digital products. Knowing the right approach and then executing isn’t easy. Whatever your need, we’ll be happy to give you the right advice and explore how we can best help.',

        ];

        Still::create($data);
    }
}
