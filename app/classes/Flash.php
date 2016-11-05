<?php 

namespace App\Classes;

class Flash
{
    private function setFlash($key, $data, $type)
    {
        session()->flash($key, [
            'type' => $type,
            'message' => $data
        ]);
    }

    public function __call($type, $args)
    {
        $this->setFlash($args[0], $args[1], $type);
    }
    
    /*public function success($key, $data)
    {
        $this->setFlash($key, $data, 'success');
    }
    
    public function error($key, $data)
    {
        $this->setFlash($key, $data, 'error');
    }
    
    public function warn($key, $data)
    {
        $this->setFlash($key, $data, 'warn');
    }*/
}