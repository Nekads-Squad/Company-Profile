<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Contact::created([
            'email_place' => 'EightyEight@Kasablanka',
            'alamat1' => 'Office Tower, 10th Floor Unit E',
            'alamat2' => 'Jalan Casablanca Kav.88',
            'alamat3' => 'DKI Jakarta, Indonesia',
            'phone' => '0212-9631-657',
            'email' => 'natanael@bisakan.id',
        ]);
    }
}
