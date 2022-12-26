@extends('layouts.app')
@section('title', 'Cadastrar nova manutenção')

@section('css')
<link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <img class="col-lg-5 d-none d-lg-block" src="{{url('img/undraw_reminder_re_fe15.svg')}}" alt="">

                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Cadastrar Nova Manutenção</h1>
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
                        <form action="{{route('maintenances.store')}}" method="post" class="user">
                            @csrf
                           @include('users.maintenances._partials.form');
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

    @section('js')
<!-- Page level plugins -->
<script src="{{ url('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{ url('js/demo/datatables-demo.js')}}"></script>
@endsection