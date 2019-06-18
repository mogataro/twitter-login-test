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
              'src' => '@/assets/img/gif/flyingneko.gif'
            ],
            [
              'name' => 'dog1',
              'src' => '@/assets/img/gif/runningdog.gif'
            ],
            [
              'name' => 'cat2',
              'src' => '@/assets/img/gif/flyingneko.gif'
            ],
            [
              'name' => 'dog2',
              'src' => '@/assets/img/gif/runningdog.gif'
            ],
            [
              'name' => 'cat3',
              'src' => '@/assets/img/gif/flyingneko.gif'
            ]
          ]);
    }
}
