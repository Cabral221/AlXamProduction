@extends('layouts.admin.app')

@section('container')
<div class="card">
    <div class="card-header card-header-warning">
        <h2 class="card-title">Gestion des Services</h2>
        <p class="card-category">Created using Roboto Font Family</p>
    </div>
    <div class="card-body">
        <h3>Gestion des Services</h3>
        <a href="{{ route('admin.services.create') }}" class="btn btn-outline-info btn-lg">Ajouter un service</a>
        <hr>
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                <div class="card">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">assignment</i>
                        </div>
                        <h4 class="card-title">Liste des services</h4>
                    </div>
                    <div class="card-body">
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                        </div>
                        <div class="material-datatables">
                            <div id="datatables_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="dataTables_length" id="datatables_length">
                                            <label>Show 
                                                <select name="datatables_length" aria-controls="datatables" class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="-1">All</option>
                                                </select> entries
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div id="datatables_filter" class="dataTables_filter">
                                            <label>
                                                <span class="bmd-form-group bmd-form-group-sm">
                                                    <input type="search" class="form-control form-control-sm" placeholder="Search records" aria-controls="datatables">
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 160px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">icon</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 235px;" aria-label="Position: activate to sort column ascending">Titre</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 119px;" aria-label="Office: activate to sort column ascending">Date Creation</th>
                                                    <th class="disabled-sorting text-right sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 187px;" aria-label="Actions: activate to sort column ascending">Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th rowspan="1" colspan="1">Icon</th>
                                                    <th rowspan="1" colspan="1">Titre</th>
                                                    <th rowspan="1" colspan="1">Date Creation</th>
                                                    <th class="text-right" rowspan="1" colspan="1">Actions</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach ($services as $service)
                                                    <tr role="row" class="even">
                                                        <td class="sorting_1" tabindex="0">
                                                            <img src="{{ asset('storage/'.$service->icon) }}" width="39px" alt="" srcset="">
                                                        </td>
                                                        <td>{{ $service->title }}</td>
                                                        <td>{{ $service->created_at }}</td>
                                                        <td class="text-right">
                                                            <a href="{{ route('admin.services.edit',$service) }}" class="btn btn-link btn-warning btn-just-icon edit">
                                                                <i class="material-icons">edit</i>
                                                            </a>
                                                            <a href="#" onclick="event.preventDefault();document.getElementById('services-form-delete-{{ $service->id }}').submit();" class="btn btn-link btn-danger btn-just-icon remove">
                                                                <i class="material-icons">delete</i>
                                                            </a>
                                                            <form id="services-form-delete-{{ $service->id }}" action="{{ route('admin.services.delete', $service) }}" method="post" class="d-none">
                                                                @csrf
                                                                @method('DELETE')
                                                            </form>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="datatables_info" role="status" aria-live="polite">Showing 1 to 10 of 40 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_full_numbers" id="datatables_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item first disabled" id="datatables_first">
                                                    <a href="#" aria-controls="datatables" data-dt-idx="0" tabindex="0" class="page-link">First</a>
                                                </li>
                                                <li class="paginate_button page-item previous disabled" id="datatables_previous">
                                                    <a href="#" aria-controls="datatables" data-dt-idx="1" tabindex="0" class="page-link">Prev</a>
                                                </li>
                                                <li class="paginate_button page-item active">
                                                    <a href="#" aria-controls="datatables" data-dt-idx="2" tabindex="0" class="page-link">1</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="datatables" data-dt-idx="3" tabindex="0" class="page-link">2</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="datatables" data-dt-idx="4" tabindex="0" class="page-link">3</a>
                                                </li>
                                                <li class="paginate_button page-item ">
                                                    <a href="#" aria-controls="datatables" data-dt-idx="5" tabindex="0" class="page-link">4</a>
                                                </li>
                                                <li class="paginate_button page-item next" id="datatables_next">
                                                    <a href="#" aria-controls="datatables" data-dt-idx="6" tabindex="0" class="page-link">Next</a>
                                                </li>
                                                <li class="paginate_button page-item last" id="datatables_last">
                                                    <a href="#" aria-controls="datatables" data-dt-idx="7" tabindex="0" class="page-link">Last</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <!-- end content-->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection