<?php

namespace App\Forms;

use Illuminate\Http\UploadedFile;

class Form extends \Kris\LaravelFormBuilder\Form 
{

    protected $resource = ''; 

    public function buildForm()
    {

        if($this->getModel() && $this->getModel()->id){
            $method = 'PUT';
            $url = route('admin.services.update', $this->getModel());
        }else{
            $method = 'POST';
            $url = route('admin.services.store');
        }

        $this->formOptions = [
            'method' => $method,
            'url' => $url,
            'attr' => ['enctype' => 'multipart/form-data']
        ];

        parent::buildForm();
    }

    public function redirectIfNotValid($destination = null)
    {
        $values = $this->getFieldValues();

        $value = array_filter($values, function ($value) {
            return !is_null($value) && (!is_object($value) || !$value instanceof UploadedFile);
        });
        

        foreach ($values as $name => $value) {
            $this->getModel()->$name = $value;
        }
        parent::redirectIfNotValid($destination);
    }
}