<?php

use Illuminate\Database\Seeder;

class TodolistTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todolists')->insert([
            ['content' => '测试数据1'],
            ['content' => '测试数据2'],
        ]);
    }
}
