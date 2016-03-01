<?php

use Illuminate\Database\Seeder;

class FuncBtnTableSeeder extends Seeder
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
            ['name' => '查詢',   'sort_no' => 1, 'created_at' => $now, 'updated_at' => $now, 'main_id' => 1, 'sub_id' => 1],
        ];

        App\FuncBtn::insert($records);
    }
}
