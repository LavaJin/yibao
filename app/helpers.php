<?php

if (! function_exists('tree'))
{
    function tree(array $data,$pid = 0,$level = 0) {
        static $tree = [];

        foreach($data as $k=>$v){
            if($v['pid'] == $pid) {
                $v['level'] = $level;
                $tree[]=$v;
                tree($data, $v['id'], $level + 1);
            }
        }

        return $tree;
     }
}

