<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::where('email', 'admin@nepalawash.com')->first()) {
            User::create([
                'name' => config('app.name'),
                'email' => 'admin@nepalawash.com',
                'password' => bcrypt('nepalawash!@#123')
            ]);
        }
    }
}
