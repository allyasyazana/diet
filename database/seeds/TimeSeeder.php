<?php

use Illuminate\Database\Seeder;
use App\Time;

class TimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data_seeds = [
            ['id' => '1', 'name' => '8.00 AM'],
            ['id' => '2', 'name' => '8.30 AM'],
            ['id' => '3', 'name' => '9.00 AM'],
            ['id' => '4', 'name' => '9.30 AM'],
            ['id' => '5', 'name' => '10.00 AM'],
            ['id' => '6', 'name' => '10.30 AM'],
            ['id' => '7', 'name' => '11.00 AM'],
            ['id' => '8', 'name' => '11.30 AM'],
            ['id' => '9', 'name' => '12.00 PM'],
            ['id' => '10', 'name' => '12.30 PM'],
            ['id' => '11', 'name' => '2.30 PM'],
            ['id' => '12', 'name' => '3.00 PM'],
            ['id' => '13', 'name' => '3.30 PM'],
            ['id' => '14', 'name' => '4.00 PM'],
            ['id' => '15', 'name' => '4.30 PM'],
        ];      

        foreach($data_seeds as $seed)
        {
            Time::firstOrCreate($seed);
        }
    }
}
