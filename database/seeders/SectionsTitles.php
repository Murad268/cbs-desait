<?php

namespace Database\Seeders;


use App\Models\SectionTitles;
use Illuminate\Database\Seeder;

class SectionsTitles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'section__desc' => 'template',
            ],
            [
                'section__desc' => 'template',
            ],
            [
                'section__desc' => 'template',
            ],
            [
                'section__desc' => 'template',
            ]
        ];
        foreach($data as $item) {
            SectionTitles::create($item);
        }

    }
}
