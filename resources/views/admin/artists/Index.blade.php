@extends('layouts.admin.app')

@section('container')
<div class="section">
    <div class="alert alert-white">
        <a href="{{ route('admin.index') }}" class="btn btn-outline-info btn-sm">Retour</a>
    </div>
</div>
<div class="card">
    <div class="card-header card-header-warning">
        <h2 class="card-title">Gestion des artistes</h2>
        {{-- <p class="card-category">Created using Roboto Font Family</p> --}}
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <h3>Les derniers artistes.</h3>
                
                <table class="table table-hover">
                    <thead class="text-warning">
                        <th>ID</th>
                        <th>Date inscrite</th>
                        <th>Nom</th>
                        <th>Type</th>
                        <th>Détails</th>
                    </thead>
                    <tbody>
                        @foreach ($artists as $artist)
                            <tr>
                                <td>{{ $artist->id }}</td>
                                <td>{{ $artist->Created_at->diffForHumans() }}</td>
                                <td>{{ $artist->name }}</td>
                                <td>{{ $artist->typeArtist->libele }}</td>
                                <td>
                                    <a href="#"><i class="material-icons">details</i> Détails</a>
                                </td>
                            </tr>                                    
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Les types d'artistes</h4>
                        {{-- <p class="card-category">New employees on 15th September, 2016</p> --}}
                    </div>
                    <div class="card-body table-responsive">
                        <div>
                             <h4>Creation d'un type artiste.</h4>
                            <form action="{{ route('admin.typeartists.create') }}" method="post" class="form">
                                @csrf
                                <div class="form-group">
                                    <label for="libele">Saisir un nom pour ce type</label>
                                    <input type="text" name="libele" id="libele" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Créer</button>
                                </div>
                            </form>
                        </div>
                        <table class="table table-hover">
                            <thead class="text-warning">
                                <th>#</th>
                                <th>Libele</th>
                                <th>n° artists</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                <?php $i = 1 ?>
                                @foreach ($typeArtists as $type)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $type->libele }}</td>
                                        <td>{{ $type->artists->count() }}</td>
                                        <td>
                                            @if ($type->id !== 1)
                                                <form action="{{ route('admin.typeartists.delete', [ 'id' => $type->id ]) }}" class="hidden" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                                        <i class="material-icons">close</i>
                                                    </button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>                                    
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection