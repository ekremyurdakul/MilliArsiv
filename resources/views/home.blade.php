@extends('layouts.app')

@section('content')
<div class="container">

        <div class="col-md-12">

            <div class="card">
                <div class="card-header">Envanter Arama</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row text-center">
                        <input id="autocomplete" class="form-control" type="text" style="width: 100%;" placeholder="Envanter Arama">
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top: 20px">
                <div class="card-header">Arşivler</div>

                <div class="card-body">

                    <div class="row text-center">
                        <select id="archive_select" class="form-control" type="text" style="width: 100%;" >
                            <option value="" disabled selected>Arşiv Seçiniz</option>

                            @foreach($archives as $archive)

                                <option value="{{$archive->id}}" >{{$archive->name}}</option>

                            @endforeach

                        </select>
                    </div>
                </div>


            </div>

            <div class="card" style="margin-top: 20px">
                <div class="card-header">Depo Yönetimi</div>

                <div class="card-body">
                    <div id="display_depots" class="row">
                    </div>
                </div>
            </div>


        </div>
    <script src="{{ asset('js/autocomplete.js') }}"></script>
    <script>
        $( document ).ready(function() {
            console.log( "ready!" );
            $( "#archive_select" ).change(function() {

                $.get( "/depots/getByArchive/"+ $( "#archive_select" ).val(), function( data ) {
                    data = JSON.parse(data);

                    for(var i in data){
                        $( "#display_depots").append(
                            '<div style="margin-top: 10px" class="col-md-3 text-center"><div class="card" >\n' +
                            '                <div class="card-header">'+data[i]['name']+'</div>\n' +
                            '\n' +
                            '                <div id="display_depots" class="card-body">'+data[i]['description']+'</div>\n' +
                            '            </div><div class="card-footer">' +
                            '<a href="/depot/'+data[i]['id']+'" class="btn btn-primary"><i class="fas fa-arrow-right"></i></a></div></div>'
                        );
                    }

                });

            });

            $('#autocomplete').autocomplete({
                serviceUrl: '/materials/search',
                onSelect: function (suggestion) {
                    window.location.href = "{{ URL::to('/') }}" + "/materials/" + suggestion.data;
                }
            });

        });
    </script>


</div>
@endsection
