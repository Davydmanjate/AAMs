@extends('base.main')
@section('content')

<div class="container-fluid pt-2 px-2">
    <div class="bg-secondary text-center rounded p-2">
        <div class="d-flex align-items-center justify-content-between mb-2"> 
            <h4 class="mb-0">Tabela Clientes</h4>
            <div class="btn-group" role="group">
                <a href="{{route('avance.add')}}"><button class="btn btn-outline-warning m-2">Avanço</button></a>
            <a href="{{route ('case.add')}}"><button class="btn btn-outline-primary m-2">Adicionar</button></a>
            <a href="{{route('case.generate-pdf')}}"><button class="btn btn-outline-info m-2">PDF</button></a>
        </div>
    </div>
        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
        @endif
        <div class="table-responsive">
            <table class="table table-bordered">
            <tbody>
                <thead>
                    <tr class="text-white">
                        <th scope="col">Id</th>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Provincia</th>
                        <th scope="col">Data Audiência</th>
                        <th scope="col">Estado Civil</th>
                        <th scope="col">Idade</th>
                        <th scope="col">Assunto</th>
                        <th scope="col">Mensagem</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                @foreach ($data as $item)
                <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $item->custum_id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->province }}</td>
                <td>{{ $item->audience }}</td>
                <td>{{ $item->marital_status }}</td>
                <td>{{ $item->age }}</td>
                <td>{{ $item->subject }}</td>
                <td>{{ $item->message }}</td>
                <td>
<a href="{{url('case.delete/'.$item->id)}}"><button class="btn btn-info btn-sm"><i class="fa-solid fa-trash-can"></i>Apagar</button></a>
<a href="{{url('avance.adicione')}}"><button class="btn btn-success btn-sm"><i class="fa-solid fa-trash-can"></i>Avanço</button></a>
                </td>
                <tr>                    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection