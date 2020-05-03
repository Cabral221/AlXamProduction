@extends('layouts.admin.app')

@section('container')
<div class="card">
    <div class="card-header card-header-warning">
        <h2 class="card-title">Modification de Service</h2>
        <p class="card-category">Created using Roboto Font Family</p>
    </div>
    <div class="card-body">
        <h3>Modifier ce Service</h3>
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                {!! form_start($form) !!}
                <div class="fileinput fileinput-new text-center w-100" data-provides="fileinput">
                    <div class="fileinput-new thumbnail img-circle">
                        <img src="{{ asset('storage/'.$form->getModel()->icon)}}" alt="...">
                    </div>
                    <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                    <div>
                        <span class="btn btn-round btn-warning btn-file">
                        <span class="fileinput-new">Modifier l'icon</span>
                        <span class="fileinput-exists">Changer</span>
                        <input type="file" name="icon">
                        </span>
                        <br>
                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Supprimer</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        {!! form_row($form->title) !!}
                        {!! form_row($form->price) !!}
                    </div>
                    <div class="col-sm-6">
                        {!! form_row($form->describe) !!}
                    </div>
                </div>
                {!! form_end($form) !!}
            </div>
        </div>
    </div>
</div>
@endsection