<?php

use \Illuminate\Support\Facades\Auth;

if( !function_exists("checkPermission"))
{
    /**
     * @param $permissions
     * @return bool
     */
    function checkPermission($permissions)
    {
        $userAccess = getUserType();
        foreach ($permissions as $key => $value) {
            if($value == $userAccess) return true;
        }
        return false;
    }
}

if( !function_exists('getUserName') )
{
    /**
     * @return bool
     */
    function getUserName()
    {
        if(Auth::check()) return Auth::user()->name;
        return false;
    }
}

if ( !function_exists('getUserType') )
{
    /**
     * @return bool
     */
    function getUserType()
    {
        if(Auth::check()) return Auth::user()->user_type;
        return false;
    }
}

if ( !function_exists('getTypeCustomer') )
{
    /**
     * @return mixed
     */
    function getTypeCustomer()
    {
        return config('constants.user_types')[2];
    }
}

if ( !function_exists('getTypeHallOwner') )
{
    /**
     * @return mixed
     */
    function getTypeHallOwner()
    {
        return config('constants.user_types')[1];
    }
}


