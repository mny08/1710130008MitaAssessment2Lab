<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $status = [
            [
                'id'             => 0, 
                'created_at'     => '2020-04-19 12:08:28',
				'name'           => 'active',
                'updated_at'     => '2020-04-19 12:08:28',
            ],
            [
                'id'             =>1,
                'created_at'     => '2020-04-19 12:08:28',
                'name'           => 'batal',
                'updated_at'     => '2020-04-19 12:08:28',
            ],
            
        ];

        App\Status::insert($status);
    
    }
}
