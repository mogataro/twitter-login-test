<?php

use Illuminate\Database\Seeder;

class RunnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('runners')->insert([
            [
              'name' => 'cat1',
              'src' => 'flyingneko.gif',
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s")
            ],
            [
              'name' => 'dog1',
              'src' => 'runningdog.gif',
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s")
            ],
            [
              'name' => 'cat2',
              'src' => 'flyingneko.gif',
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s")
            ],
            [
              'name' => 'dog2',
              'src' => 'runningdog.gif',
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s")
            ],
            [
              'name' => 'cat3',
              'src' => 'flyingneko.gif',
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s")
            ]
          ]);
    }
}
