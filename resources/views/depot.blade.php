@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div style="float: left">
                        <h2>Depo : {{$depot->name}}</h2>
                    </div>
                <div style="float: right">
                    <a href="/depots/addMaterial/{{$depot->id}}">
                        <button class="btn btn-primary"><i class="fas fa-plus"></i>
                        </button>
                    </a>
                </div>
                </div>
                <div class="card-body">
                    <table id="materials" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Materyal Adı</th>
                                <th>Lokasyonu</th>
                                <th>Tipi</th>
                                <th>Grup</th>
                                <th>İşlemler</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($depot->materials()->get() as $material)
                            <tr>
                                <td>{{$material->name}}</td>
                                <td>{{$material->locator}}</td>
                                <td>{{$material->material_type()->first()->name}}</td>
                                <td></td>
                                <td>
                                    <a href="/materials/delete/{{$material->id}}/{{$depot->id}}" class="btn btn-danger"><i class="fas fa-trash"></i>

                                    </a>

                                    <a href="/materials/{{$material->id}}" class="btn btn-primary"><i class="fas fa-arrow-right"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#materials').DataTable();
        } );
    </script>




</div>
@endsection
