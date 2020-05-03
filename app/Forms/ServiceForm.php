<?php

namespace App\Forms;

class ServiceForm extends Form
{
    protected $resource = 'services';

    public function buildForm()
    {
        parent::buildForm();
        $this
            ->add('title','text',[
                'label' => 'Titre du service',
                'rules' => 'required|string|min:5'
            ])
            ->add('describe', 'textarea',[
                'label' => 'Description du service',
                'rules' => 'required|string|min:5',
                'attr' => ['rows' => '4']
            ])
            ->add('price','number',[
                'label' => 'Prix du service',
                'rules' => 'required|integer'
            ])
            ->add('submit','submit',[
                'label' => 'Creer un Service',
                'attr' => ['class' => 'btn btn-info btn-block']
            ]);
    }
}
