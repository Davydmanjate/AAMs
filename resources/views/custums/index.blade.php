@extends('base.main')
@section('content')
    
<!-- inicio da tabela funcionario -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4"> 
            <h4 class="mb-0">Tabela Clientes</h4>
            <a href="{{route('custums.add') }}"><button class="btn btn-primary btn-lg font-weight-medium auth-form-btn">Adicionar</button></a>
        </div>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover">
            <tbody>
                <thead>
                    <tr class="text-white">
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Password</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                @foreach ($data as $item)
                <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->telefone }}</td>
                <td>{{ $item->password }}</td>
                <td>
                    
<a href="{{url('custums.edit/'.$item->id)}}"><button class="btn btn-success btn-sm"><i class="fa-light fa-pen-to-square"></i>Editar</button></a>
<a href="{{url('custums.delete/'.$item->id)}}"><button class="btn btn-info btn-sm"><i class="fa-solid fa-trash-can"></i>Apagar</button></a>
                </td>
                <tr>                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Fim da tabela funcionario -->

@endsection