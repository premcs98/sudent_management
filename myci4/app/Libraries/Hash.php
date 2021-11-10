<?php
namespace App\Libraries;
class Hash
{
    public static function make($new_password){
        return password_hash($new_password,PASSWORD_BCRYPT);
    }
    public static function check($entered_password,$db_password)
    {
        if(password_verify($entered_password,$db_password))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}
?>