<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    
    public function index()
    {
        $services = Service::paginate(3);
        return view('admin.services',compact('services'));
    }

    public function store(Request $request)
    {
         // Validation du Request
        $$request->validate([
            'icon' => ['required', 'mimes:jpeg,png,jpg'],
            'title' => ['required','string'],
            'describe' => ['required','min:3','max:1000'],
            'price' => ['required','integer'],
        ]);

        // $user = Auth::guard('artist')->user();
        $icon = $request->file('icon');
        
        // Get extension file and file name
        $ext = $icon->getClientOriginalExtension();
        $filename = Str::slug(str_replace('.'.$ext, '', $icon->getClientOriginalName())). '-' .Carbon::now()->timestamp ;
        $url = 'uploads/services/'. Carbon::now()->year .'/'. Carbon::now()->month.'/'. $filename . '.' . $ext;
        
        // Resize icon with image intervention
        $newIcon = Image::make($icon->getRealPath())->fit(110, 110)->encode('jpg',80);
        
        // Save new icon correct
        Storage::disk('public')->put($url,$newIcon);

        Service::create([
            'icon' => $url,
            'title' => $request->title,
            'describe' => $request->describe,
            'price' => $request->price,
        ]);
        return redirect()->back();
    }

}
