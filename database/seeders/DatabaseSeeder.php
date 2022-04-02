<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(['name' => 'John Doe', 'email' => 'test@test.com', 'password' => bcrypt('1234')]);

        $this->call(AddressTableSeeder::class);
        $this->call(CountryLangTableSeeder::class);
        $this->call(CustomerTableSeeder::class);
        $this->call(OrderDetailTableSeeder::class);
        $this->call(OrderStateLangTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
    }
}
