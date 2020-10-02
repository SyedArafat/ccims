<?php

namespace App\Http\Controllers;

use App\Favourite;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    public function change($venue_id, $user_id)
    {
        try {
            $exist = (bool)$this->find($venue_id, $user_id)->count();
            if (!$exist) $this->store($venue_id, $user_id);
            else $this->delete($venue_id, $user_id);
            return response()->json(["code" => 200, "message" => "success"]);
        } catch (\Exception $exception) {
            return $exception->getMessage();
        }

    }

    private function store($venue_id, $user_id)
    {
        $favourite = new Favourite();
        $favourite->venue_id      = $venue_id;
        $favourite->user_id       = $user_id;
        $favourite->created_by_id = Auth::id();
        $favourite->save();
    }

    private function delete($venue_id, $user_id)
    {
        $this->find($venue_id, $user_id)->delete();
    }

    private function find($venue_id, $user_id)
    {
        return Favourite::where('venue_id', $venue_id)->where('user_id', $user_id);
    }

}
