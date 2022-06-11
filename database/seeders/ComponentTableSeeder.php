<?php

namespace Database\Seeders;

use App\Models\Component;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'About Us',
            'Address',
            'Email',
            "Breadcrumb",
            'Footer About',
            'Contact Number',
            'Contact Us',
            'Receiving Mail Address',
            'Facebook Link',
            'Instagram Link',
            'LinkedIn Link',
            'Map',
            'Why Us Banner',
            'Terms & Conditions',
            'Privacy Policy',
        ];
        foreach ($data as $d) {
            if (!Component::where('slug', Str::slug($d))->first()) {
                Component::create([
                    'title' => $d,
                    'slug' => Str::slug($d),
                    'image' => null,
                    'synopsis' => $d,
                    'description' => $d
                ]);
            }
        }
    }
}
