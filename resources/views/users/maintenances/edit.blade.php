@extends('layouts.app')
@section('title', 'Editar Manutenção')

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
                            <h1 class="h4 text-gray-900 mb-4">Editar Manutenção</h1>
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
                        <form action="{{route('maintenances.update',$maintenance->id)}}" method="post" class="user">
                            @csrf
                            <div class="form-group">
                                <label for="model">Data da manutenção:</label>
                                <input type="date" class="form-control form-control-user" id="appointment_to" name="appointment_to"
                                    placeholder="Data" value="{{ $maintenance->appointment_to}}">
                            </div>
                            <div class="form-group">
                                <label for="observation">Obsevação:</label>
                                    <input type="text" class="form-control form-control-user" id="observation" name="observation" placeholder="observação"
                                     value="{{ $maintenance->observation}}">
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <label for="brand">Veículo:</label>
                                    <select class="form-control " name="vehicle_id" id="vehicle_id" placeholder="Selecione">
                                        <option value="{{$maintenance->vehicle_id}}" selected>{{ $maintenance->vehicle->model}}</option>
                                        @foreach($vehicle as $v)
                                        <option value="{{$v->id}}">{{$v->model}}</option>
                                        @endforeach
                                        </select>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Salvar
                            </button>
                            <hr>
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