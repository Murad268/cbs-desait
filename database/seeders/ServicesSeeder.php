<?php

namespace Database\Seeders;


use App\Models\Services;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

                'name' => 'Digər Xidmətlər',
                'service_id' => '0',
                'services_item_icons' => 'template',
                'about_service' => 'template',

        ];

            Services::create($data);


    }
}
