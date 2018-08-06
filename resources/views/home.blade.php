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
                        <input class="form-control" type="text" style="width: 100%;" placeholder="Envanter Arama">
                    </div>
                </div>
            </div>

            <div class="card" style="margin-top: 20px">
                <div class="card-header">Depo Yönetimi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row text-center">
                        <select class="form-control" type="text" style="width: 100%;" >
                            <option value="" disabled selected>Depo Seçiniz</option>
                        </select>


                    </div>
                </div>
            </div>

        </div>

</div>
@endsection
