<?php

use Illuminate\Database\Seeder;
use Charis\Entity;
use Charis\EntityTarget;
use Charis\EntityActivity;

class EntityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table(Entity::TABLE_NAME)->delete();
        factory(Entity::class, 100)->create();
    }
}
