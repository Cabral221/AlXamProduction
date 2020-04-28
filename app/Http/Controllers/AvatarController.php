<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Avatar;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AvatarController extends Controller
{
    
    public function uploadAvatar (Request $request)
    {
         // Validation du Request
        $validator = Validator::make($request->all(), [
            'avatar' => ['required','mimes:jpeg,png,jpg'],
        ]);

        if ($validator->fails()) {
            dd($validator->messages());
            // Some logic for return invalid request with response
        }
        // Get user et get avatar file on request

        if(Auth::user() == null){
            $user = Auth::guard('artist')->user();
        }else{
            $user = Auth::user();
        }
        // $user = Auth::guard('artist')->user();
        $avatar = $request->file('avatar');
        
        // Get extension file and file name
        $ext = $avatar->getClientOriginalExtension();
        $filename = Str::slug(str_replace('.'.$ext, '', $avatar->getClientOriginalName())). '-' .Carbon::now()->timestamp ;
        $url = 'uploads/avatars/'. Carbon::now()->year .'/'. Carbon::now()->month.'/'. $filename . '.' . $ext;
        
        // Resize avatar with image intervention
        $newAvatar = Image::make($avatar->getRealPath())->fit(110, 110)->encode('jpg',80);

        // Delete old avatar if exist
        // dd($user->avatar->avata;
        if($user->avatar !== null) {
            Storage::disk('public')->delete($user->avatar->avatar);
            $user->avatar()->delete();
        }
        
        // Save new avatar correct
        // dd($url);
        Storage::disk('public')->put($url,$newAvatar);
        Avatar::create([
            'avatar' => $url,
            'avatarable_id' => $user->id,
            'avatarable_type' => get_class($user)
        ]);
        // $user->update(['avatar' => $url]);

        return redirect()->back();
    }
    
}
