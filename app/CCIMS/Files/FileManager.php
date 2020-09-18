<?php

namespace App\CCIMS\Files;

use Illuminate\Http\Request;

trait FileManager
{
    /**
     * This method is used to store files inside the project and return the name
     *
     * @param Request $request
     * @param $key
     * @param $folder_name
     * @return string
     */
    protected function storeFile(Request $request, $key, $folder_name)
    {
        if($file = $request->file($key)){
            $name=time().".".$file->getClientOriginalExtension();
            $directory = (config('constants.resource_storage')."/$folder_name");
            $file->move($directory, $name);
            return $directory.$name;
        }

        return false;
    }
}
