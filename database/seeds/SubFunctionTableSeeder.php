<?php

use Illuminate\Database\Seeder;

class SubFunctionTableSeeder extends Seeder
{
    protected $fillable = ['name', 'sort_no'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = date('Y-m-d H:i:s');
        $records = [
            ['name' => '功能管理',   'sort_no' => 1, 'created_at' => $now, 'updated_at' => $now, 'main_id' => 1, 'url' => 'func'],
            ['name' => '使用者管理', 'sort_no' => 2, 'created_at' => $now, 'updated_at' => $now, 'main_id' => 1, 'url' => 'user'],
        ];

        App\SubFunction::insert($records);
    }
}
