@extends('layouts.app')
@section('title', 'Manutenções') 

@section('css')
<link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manutenções</h1>
    <p class="mb-4">Lista de manutenções agendadas para os veículos cadastrados para o usuário: {{$user->name}}.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Modelo</th>
                            <th>Marca</th>
                            <th>Versão</th>
                            <th>Ano</th>
                            <th>Data Agendamento</th>
                            <th>Obsevação</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Modelo</th>
                            <th>Marca</th>
                            <th>Versão</th>
                            <th>Ano</th>
                            <th>Data Agendamento</th>
                            <th>Obsevação</th>
                            <th>Ações</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($maintenances as $maintenance)
                        <tr>
                            <td>{{ $maintenance->vehicle->model}}</td>
                            <td>{{ $maintenance->vehicle->brand }}</td>
                            <td>{{ $maintenance->vehicle->version }}</td>
                            <td>{{ $maintenance->vehicle->year }}</td>
                            <td>{{ $maintenance->appointment_to }}</td>
                            <td>{{ $maintenance->observation }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle arrow" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Opções
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                                        <a class="dropdown-item" href="/maintenances/{{$maintenance->id}}">Editar</a>
                                        <a class="dropdown-item" href="/maintenances/delete/{{$maintenance->id}}">Deletar</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
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