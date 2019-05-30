<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MerchantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $merchants[] = ['name' => 'P. Terry\'s', 'slug' => 'p-terrys', 'active' => 1];
        $merchants[] = ['name' => 'Waterloo Records', 'slug' => 'waterloo-records', 'active' => 1];
        $merchants[] = ['name' => 'Alamo Drafthouse', 'slug' => 'alamo-drafthouse', 'active' => 1];
        $merchants[] = ['name' => 'Umlauf Sculpture Garden &amp; Museum', 'slug' => 'umlauf', 'active' => 1];
        $merchants[] = ['name' => 'Wink', 'slug' => 'wink', 'active' => 0];

        $faker = Faker::create();

        foreach($merchants as $merchant) {
            DB::table('merchants')->insert([
                'name' => $merchant['name'],
                'slug' => $merchant['slug'],
                'description' => $faker->paragraphs(5, true),
                'is_active' => $merchant['active']
            ]);
        }
    }
}
