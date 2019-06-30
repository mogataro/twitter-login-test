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
              'name' => 'ねこまん',
              'src' => 'flyingneko.gif',
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s")
            ],
            [
              'name' => 'いっぬ',
              'src' => 'runningdog.gif',
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s")
            ],
            [
              'name' => 'うっま',
              'src' => 'pica.gif',
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s")
            ],
            [
              'name' => 'やまだ',
              'src' => 'yamada.gif',
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s")
            ],
            [
              'name' => 'バブ',
              'src' => 'yanmi.gif',
              'created_at' => date("Y-m-d H:i:s"),
              'updated_at' => date("Y-m-d H:i:s")
            ]
          ]);
    }
}
