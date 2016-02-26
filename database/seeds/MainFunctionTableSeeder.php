<?php

use Illuminate\Database\Seeder;
// use App\MainFunction;

class MainFunctionTableSeeder extends Seeder
{
    protected $fillable = ['name', 'sort_no'];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // // 1 建立兩個instance
        // $main_function = new MainFunction;
        // $main_function->name = '使用者管理';
        // $main_function->sort_no = 1;
        // $main_function->save();

        // $main_function = new MainFunction;
        // $main_function->name = '功能管理';
        // $main_function->sort_no = 2;
        // $main_function->save();

        // 2 不標timestamps 可一次多筆
        // $now = date('Y-m-d H:i:s');
        // $records = [
        //     ['name' => '使用者管理', 'sort_no' => 1, 'created_at' => $now, 'updated_at' => $now],
        //     ['name' => '功能管理',   'sort_no' => 2, 'created_at' => $now, 'updated_at' => $now],
        // ];

        // App\MainFunction::insert($records);

        // 3 會標timestamps 但要多次
        App\MainFunction::create(['name' => '系統管理', 'sort_no' => 1]);

        // // 4 不標timestamps 可一次多筆
        // DB::table('main_functions')->insert([
        //     ['name' => '使用者管理', 'sort_no' => 1],
        //     ['name' => '功能管理',   'sort_no' => 2],
        // ]);
    }
}
