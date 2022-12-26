@extends('layouts.app')
@section('title', 'Cadastrar novo veículo')

@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <img class="col-lg-5 d-none d-lg-block" src="{{url('/img/undraw_by_my_car_re_g0c3.svg')}}" alt="">

                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Cadastrar veículo</h1>
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
                        <form action="{{route('vehicles.store')}}" method="post" class="user">
                            @csrf
                            @include('users.vehicles._partials.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection