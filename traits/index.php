<?php

trait helper
{
    public function loadMe($data)
    {
        if(!$data)
            return $this;
        foreach ($this as $key => $value)
            if(isset($data[$key]))
                $this->{$key} = $data[$key];
        $this->onLoadMe();
        return $this;
    }

    public function onLoadMe()
    {
    }


    /**
     * @return array
     */
    public function myFields()
    {
        return (array)$this;
    }
}