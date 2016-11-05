<?php 

function flash($key=null, $data=null)
{
    $flash = app(\App\Classes\Flash::class);// new \App\Classes\Flash();
    
    if(is_null($key)){
        return $flash;
    }
    
    return $flash->success($key, $data);
}