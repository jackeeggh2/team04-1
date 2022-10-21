<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {}
        public function generateRandomString($length = 10) {
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            return $randomString;
        

      DB::table('cars')->insert([
        'type'=>'轎車',
        'bid'=>'TOYOTA',
        'horsepower'=>107,
        'torque'=>14.3/4200,
      ]);
        //  $this->call(CarsTableSeeder::class);
        //$this->call(BrandsTableSeeder::class);
    }
}
