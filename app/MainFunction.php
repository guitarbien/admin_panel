<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class MainFunction extends Model
{
    public static function sidebar()
    {
        $sql = "select mf.name as main_name,
                       sf.name as sub_name,
                       sf.url
                from main_functions mf
                join sub_functions sf on mf.id = sf.main_id
                where mf.status = '1'
                and sf.status   = '1'
                ";

        $result = DB::select($sql);

        $output = [];
        foreach ($result as $row)
        {
            $output[$row->main_name][] = ['sub_name' => $row->sub_name, 'url' => $row->url];
        }

        return $output;
    }
}
