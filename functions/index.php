<?php

function dump()
{
    foreach (func_get_args() as $obj)
    {
        echo'<pre>';
        var_dump($obj);
        echo'</pre>';
    }
}