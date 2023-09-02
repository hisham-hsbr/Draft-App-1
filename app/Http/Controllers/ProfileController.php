<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Spatie\Permission\Models\Permission;
use App\Http\Requests\ProfileAvatarRequest;
use App\Http\Requests\ProfileUpdateRequest;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */

     public function __construct()
     {
         $this->middleware('auth');
     }
    public function edit(Request $request): View
    {

        $permissions = Permission::all()->groupBy('parent');
        return view('back-end.profile.edit',compact('permissions'));

        // return view('back-end.profile.edit', [
        //     'user' => $request->user(),
        // ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        dd("update");
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }
    public function avatar(ProfileAvatarRequest $request): RedirectResponse
    {
        if($oldAvatar = $request->user()->avatar){
            Storage::disk('public')->delete($oldAvatar);
        }

        $path = Storage::disk('public')->put('avatars',$request->file('avatar'));
        Auth::user()->update(['avatar'=>$path]);


        return Redirect::route('profile.edit')->with('status', 'profile-avatar-updated');
    }
    public function avatarDelete(request $request): RedirectResponse
    {
        $oldAvatar = $request->user()->avatar;
        Storage::disk('public')->delete($oldAvatar);

        $path = "";
        Auth::user()->update(['avatar'=>$path]);

        return Redirect::route('profile.edit')->with('status', 'profile avatar Delete');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
