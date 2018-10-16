@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Excel Aktarma -- Depo : {{$depot->name}}
                    </div>
                    <div class="card-body">
                        <form action="/materials/import" method="POST" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="hidden" name="depot_id" value="{{$depot->id}}">
                            <div class="form-row col-md-12">
                                <div class="form-group col-md-12">
                                    <label for="excel">Materyal Tipi :</label>
                                    <select name="material_type_id" class="form-control" id="select_material_type">
                                        <option value="" disabled selected>Material Tipi Seçiniz</option>
                                        @foreach(\App\MaterialType::all() as $type)
                                            <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="excel">Excel Dosyası :</label>
                                    <input type="file" name='excel' class="form-control" id="excel" >
                                </div>
                                <div class="form-group col-md-12">

                                    <input type="submit" class="form-control btn btn-primary" value="Aktar" >
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection