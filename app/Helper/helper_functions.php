<?php

use Illuminate\Database\Schema\Blueprint;
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

if ( !function_exists('commonDbFields') )
{
    /**
     * @param Blueprint $table
     * @param int $precision
     * @return mixed
     */
    function commonDbFields($table, $precision = 0)
    {
        $table->integer('created_by_id')->nullable();
        $table->integer('updated_by_id')->nullable();
        $table->timestamp('created_at', $precision)->nullable();
        $table->timestamp('updated_at', $precision)->nullable();
    }
}


