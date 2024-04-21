<?php

use App\Models\footerr;
use App\Models\section;
use App\Models\experiences;

function get_footerr_value($key){
    $data = footerr::where('key', $key)->first();
    if(isset($data->value)){
        return $data->value;
    }else{
        return 'empty';
    }

}

function get_section_data($key){
    $data = section::where('post_as',$key)->first();
    if(isset($data)){
        return $data;
    }
}

function get_experiences(){
    $data = experiences::all();
    return $data;
}