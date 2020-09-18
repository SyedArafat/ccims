<?php

namespace App\Http\Controllers;

use App\CCIMS\Files\FileManager;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    use FileManager;

    public function index()
    {
        $user = User::find(auth()->id());
        return view('website.profile.index', compact('user'));
    }

    /**
     * @param User $user
     * @param Request $request
     * @return array
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateProfilePhoto(User $user, Request $request)
    {
        $this->validate($request, [
            'profile_photo' => 'required|file|max:5000'
        ]);

        $image = $this->storeFile($request, 'profile_photo','profile_photos');
        dd($image);
    }

    public function updateProfileInfo(User $user, Request $request)
    {

    }
}
