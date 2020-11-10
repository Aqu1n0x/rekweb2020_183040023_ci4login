<?php

namespace App\Database\Seeds;

use CodeIgniter\I18n\Time;

class OrangSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        // $data = [
        //     [

        //         'nama' => 'Nathan',
        //         'alamat'    => 'JL. loken No 12',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [

        //         'nama' => 'Kiel',
        //         'alamat'    => 'JL. Sekar No 65',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        //     [

        //         'nama' => 'Eterna',
        //         'alamat'    => 'JL. lisane No 122',
        //         'created_at' => Time::now(),
        //         'updated_at' => Time::now()
        //     ],
        // ];

        $faker = \Faker\Factory::create('id_ID');

        for ($i = 0; $i < 25; $i++) {


            $data = [
                'nama' => $faker->name,
                'alamat'    => $faker->address,
                'created_at' => Time::createFromTimestamp($faker->unixTime()),
                'updated_at' => Time::now()
            ];
            $this->db->table('orang')->insert($data);
        }


        // // Simple Queries
        // $this->db->query(
        //     "INSERT INTO orang (nama, alamat, created_at, updated_at) VALUES(:nama:, :alamat:, :created_at:,:updated_at:)",
        //     $data
        // );

        // Using Query Builder
        //$this->db->table('orang')->insertBatch($data);
    }
}
