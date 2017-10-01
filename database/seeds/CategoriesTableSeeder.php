<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->delete();

        \DB::table('categories')->insert(array(
            0 =>
                array(
                    'id'          => 1,
                    'parent_id'   => 0,
                    'post_count'  => 0,
                    'weight'      => 100,
                    'name'        => '招聘',
                    'slug'        => 'zhao-pin',
                    'description' => '猫友会',
                    'created_at'  => '2017-10-01 10:00:00',
                    'updated_at'  => '2017-10-01 10:00:00',
                    'deleted_at'  => null,
                ),
            1 =>
                array(
                    'id'          => 2,
                    'parent_id'   => 0,
                    'post_count'  => 0,
                    'weight'      => 98,
                    'name'        => '相亲&交友',													                   'slug'        => 'jiao-you',
                    'description' => '相亲&交友',
                    'created_at'  => '2017-10-01 10:00:00',
                    'updated_at'  => '2017-10-01 10:00:00',
                    'deleted_at'  => null,
                ),
            2 =>
                array(
                    'id'          => 3,
                    'parent_id'   => 0,
                    'post_count'  => 0,
                    'weight'      => 98,
                    'name'        => '房产&落户',
                    'slug'        => 'fang-chan',
                    'description' => '房产，落户',
                    'created_at'  => '2017-10-01 10:00:00',
                    'updated_at'  => '2017-10-01 10:00:00',
                    'deleted_at'  => null,
                ),
        ));
    }
}
