<?php

namespace App\Http\Controllers;

use App\CCIMS\Files\FileManager;
use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    use FileManager;

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $user = User::find(auth()->id());
        return view('website.profile.index', compact('user'));
    }

    /**
     * @param User $user
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function updateProfilePhoto(User $user, Request $request)
    {
        $this->validate($request, [
            'profile_photo' => 'required|file|max:5000'
        ]);

        if($user->profile->profile_photo)
            $this->deleteFile($user->profile->profile_photo);

        $image = $this->storeFile($request, 'profile_photo','profile_photos');
        if($image) {
            $user->profile->profile_photo = $image;
            $user->profile->save();
            Session::flash('success', "Profile picture updated");
        }
        return redirect()->route('user.profile');
    }

    public function updateProfileInfo(User $user, Request $request)
    {
        $this->validate($request, $this->updatePhotoInfoRules());
        $user->name   = $request->name;
        $user->mobile = $request->mobile;
        $user->save();
        if($request->hasAny(['address', 'bio'])) $this->updateUserProfile($user->profile, $request);
        Session::flash('success', "Information updated successfully");
        return redirect()->route('user.profile');
    }

    private function updatePhotoInfoRules()
    {
        return [
            'name' => 'required',
            'mobile' => 'required'
        ];
    }

    private function updateUserProfile(Profile $profile, Request $request)
    {
        $profile->bio = $request->bio;
        $profile->address = $request->address;
        $profile->save();
    }
}
