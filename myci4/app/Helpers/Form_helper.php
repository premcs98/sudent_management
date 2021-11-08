<?php
    function display_error($validaion,$field)
    {
        if($validation->hasError($field))
        {
            return $validation->getError($field);
        }
        else
        {
            return false;    
        }
    }
?>