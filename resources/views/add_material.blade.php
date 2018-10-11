@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Envanter Ekleme -- Depo : {{\App\Depot::find($depot_id)->name}}</h2>
            </div>
            <form action="/materials/add" method="POST">
                {{csrf_field()}}
            <div class="card-body">
                <input name="depot_id" type="hidden" value="{{$depot_id}}">
                <div class="form-group row">

                    <input required name="material_name" type="text" class="form-control" placeholder="Materyal İsmi">

                </div>

                <div class="form-group row">

                    <input required name="material_locator" type="text" class="form-control" placeholder="Materyal Locator">

                </div>
                <div class="row">

                        <select name="material_type_id" class="form-control" id="select_material_type">
                            <option value="" disabled selected>Material Tipi Seçiniz</option>
                            @foreach(\App\MaterialType::all() as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach

                        </select>
                </div>

                    <div style="margin-top: 20px" id="parameters" class="col-md-6">


                    </div>

            </div>
            <div class="card-footer">
                <a href="/depot/{{$depot_id}}" class="btn btn-primary"><i class="fa fa-arrow-left"></i></a>
                <div style="float: right">
                    <input class="btn btn-primary" type="submit" value="Kaydet">
                </div>
            </div>
            </form>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            $( "#select_material_type" ).change(function() {

                $( "#parameters").empty();

                $.get( "/materials/getParameters/"+ $( "#select_material_type" ).val(), function( data ) {
                    data = JSON.parse(data);

                    for(var i in data){
                        $( "#parameters").append(
                            '<div class="form-group row">' +
                            ' <label for="name" class="col-md-4 col-form-label text-md-right">'+data[i]+'</label>' +
                            ' <div class="col-md-8">' +
                            '  <input id="name" type="text" class="form-control" name="data[]" >' +
                            ' </div>' +
                            '</div>'
                        );
                    }

                });

            });
        } );
    </script>

@endsection