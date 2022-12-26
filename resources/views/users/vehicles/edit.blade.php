@extends('layouts.app')
@section('title', 'Cadastrar novo veículo')
@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Cadastre seu carro!</h1>
                        </div>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <form action="" method="post" class="user">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <input type="text" class="form-control form-control-user" id="brand" name="brand"
                                        placeholder="Marca">
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="model" name="model"
                                    placeholder="Modelo">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="model" name="version"
                                    placeholder="Versão">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 ">
                                    <input type="number" class="form-control form-control-user" name="year" placeholder="Ano">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Cadastrar
                            </button>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection