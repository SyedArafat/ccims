<?php

if( !function_exists("checkPermission")) {

    /**
     * @param $permissions
     * @return bool
     */
    function checkPermission($permissions)
    {
        $userAccess = auth()->user()->user_type;
        foreach ($permissions as $key => $value) {
            if($value == $userAccess){
                return true;
            }
        }
        return false;
    }
}


