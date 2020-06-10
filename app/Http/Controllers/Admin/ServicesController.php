<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Service;
use App\Forms\ServiceForm;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Kris\LaravelFormBuilder\FormBuilder;
use Illuminate\Support\Facades\Validator;

class ServicesController extends Controller
{
    private $formBuilder;

    public function __construct(FormBuilder $formBuilder)
    {
        $this->formBuilder = $formBuilder;
    }
    
    public function index(FormBuilder $formBuilder)
    {
        $form = $this->getForm();
        $services = Service::paginate(3);
        return view('admin.services',compact('form','services'));
    }

    public function create()
    {
        $form = $this->getForm();
        return view('admin.services.create', compact('form'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => ['required', 'mimes:jpeg,png,jpg'],
        ]);
        $form = $this->getForm();
        $form->redirectIfNotValid();
        $icon = $request->file('icon');
        
        // Get extension file and file name
        $ext = $icon->getClientOriginalExtension();
        $filename = Str::slug(str_replace('.'.$ext, '', $icon->getClientOriginalName())). '-' .Carbon::now()->timestamp ;
        $url = 'uploads/services/'. Carbon::now()->year .'/'. Carbon::now()->month.'/'. $filename . '.' . $ext;
        
        $form->getModel()->icon = $url;
        // Resize icon with image intervention
        $newIcon = Image::make($icon->getRealPath())->fit(110, 110)->encode('jpg',80);
        // dd($service);
        // Save new icon file and new service
        Storage::disk('public')->put($url,$newIcon);
        $form->getModel()->save();

        return redirect()->route('admin.services.index')->with('success', 'Service crée avec succés');
    }

    public function edit(Service $service)
    {
        $form = $this->getForm($service);
        return view('admin.services.edit', compact('form'));
    }

    public function update(Service $service, Request $request)
    {
        $form = $this->getForm($service);
        $form->redirectIfNotValid();
        $icon = $request->file('icon');

        if($icon !== null){
            // Get extension file and file name
            $ext = $icon->getClientOriginalExtension();
            $filename = Str::slug(str_replace('.'.$ext, '', $icon->getClientOriginalName())). '-' .Carbon::now()->timestamp ;
            $url = 'uploads/services/'. Carbon::now()->year .'/'. Carbon::now()->month.'/'. $filename . '.' . $ext;
    
            if($service->icon !== null) {
                Storage::disk('public')->delete($service->icon);
            }
    
            // Resize icon with image intervention
            $newIcon = Image::make($icon->getRealPath())->fit(110, 110)->encode('jpg',80);
            
            // Save new icon file and new service
            Storage::disk('public')->put($url,$newIcon);
            $form->getModel()->icon = $url;
            $form->getModel()->save();
        }
        

        return redirect()->route('admin.services.index')->with('success','Service Modifié avec succés');
    }

    public function delete(Service $service)
    {
        $service->delete();
        return redirect()->back();
    }

    private function getForm(?Service $service = null)
    {
        $service = $service ?: new Service();
        return $this->formBuilder->create(ServiceForm::class,[
            'model' => $service
        ]);
    }

}
