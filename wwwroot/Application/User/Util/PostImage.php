<?php

namespace User\Uti;

class PostImage{
    static public function save($path){
        $firstKey = '';
        foreach($_FILES as $key=>$val){
            $firstKey = $key;
            break;
        }

        //开始移动文件到相应的文件夹
        move_uploaded_file($_FILES[$firstKey]['tmp_name'],$path);
    }

    static public function getExt()
    {
        $firstKey = '';
        foreach($_FILES as $key=>$val){
            $firstKey = $key;
            break;
        }


        $string = strrev($_FILES[$firstKey]['name']);
        $array = explode('.',$string);
        return strrev($array[0]);
    }
}