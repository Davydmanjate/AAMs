@extends('base.main')
@section('content')
    
<!-- inicio da tabela funcionario -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary text-center rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4"> 
            <h4 class="mb-0">Tabela Advogados</h4>
            <div class="btn-group" role="group">
            <a href="{{route ('layers.add') }}"><button class="btn btn-outline-primary m-2">Adicionar</button></a>
            <a href="{{route ('layers.generate-pdf') }}"><button class="btn btn-outline-light m-2">PDF</button></a>
        </div> 
    </div>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
            <tbody>
                <thead>
                    <tr class="text-white">
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Morada</th>
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
                <td>{{ $item->category }}</td>
                <td>{{ $item->address }}</td>
                <td>
                    
<a href="{{url('layers.edit/'.$item->id)}}"><button class="btn btn-warning btn-sm"><i class="fa-light fa-pen-to-square"></i>Editar</button></a>
<a href="{{url('layers.delete/'.$item->id)}}"><button class="btn btn-info btn-sm"><i class="fa-solid fa-trash-can"></i>Apagar</button></a>
<a href="{{url('layers.show/'.$item->id)}}"><button class="btn btn-success btn-sm"><i class="fa-solid fa-trash-can"></i>Ver...</button></a>
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