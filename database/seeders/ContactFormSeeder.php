<?php

namespace Database\Seeders;

use App\Models\ContactForm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'form_title' => 'Bizə yazmaqdan çəkinməyin',
            'form_subtitle' => 'Speak to our Business Director, Steve. With no salespeople, you always get to talk straight to one of our discipline leaders. Help us understand what you need by filling out the form and we’ll be in touch.',

        ];

        ContactForm::create($data);
    }
}
