@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{$material->name}} // {{$material->locator}}</h2>
            </div>
            <div class="card-body">
                <div class="row text-center ">
                    <h3>Meta Data Özeti</h3>
                </div>
                <form action="/materials/update" method="POST">
                    <input name="material_id" type="hidden" value="{{$material->id}}">
                    {{ csrf_field() }}
                    @php $i = 0  @endphp
                    @foreach($material->metadata() as $key => $value)

                        <div class="form-row col-md-12">
                            <div class="form-group col-md-3">
                                <label for="{{$key}}">{{$key}}</label>
                                <input name='{{$i}}' class="form-control" id="entry_date" value="{{$value}}" >
                            </div>
                        </div>
                    @php $i++; @endphp
                    @endforeach

            </div>
            <div class="card-footer">
                <a class="btn btn-primary" href="/depot/{{$material->depot_id}}"><i class="fa fa-arrow-left"></i></a>
                <div style="float: right">
                    <input class="btn btn-primary" type="submit" value="Kaydet">
                </div>
            </div>
            </form>
        </div>
    </div>


@endsection