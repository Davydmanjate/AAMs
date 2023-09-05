@extends('base.main')
@section('content')
    
<!-- inicio da tabela funcionario -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4"> 
            <h4 class="mb-0">Atribuição do Processo</h4>
            <div class="btn-group" role="group">
            {{-- <a href="{{route ('avanco.edit')}}"><button class="btn btn-outline-primary m-2">Adicionar</button></a> --}}
            <a href="#"><button class="btn btn-outline-info m-2">PDF</button></a>
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
                        <th scope="col">Nome</th>
                        <th scope="col">Nº Processo</th>
                        <th scope="col">Assunto</th>
                        <th scope="col">Advogado</th>
                        <th scope="col">Estado</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>

                @foreach ($data as $item)
                <tr>
                <td>{{ $item->case->name}}</td>
                <td class="text-center">{{ $item->custum_id}}</td>
                <td>{{ $item->case->subject}}</td>
                <td>{{ $item->layer->name}}</td>
                <td>{{ $item->status}}</td>
                <td>
                    
<a href="{{url('avanco.edit/'.$item->id)}}"><button class="btn btn-warning btn-sm"><i class="fa-light fa-pen-to-square"></i>Editar</button></a>
<a href="{{url('layers.delete/'.$item->id)}}"><button class="btn btn-info btn-sm"><i class="fa-solid fa-trash-can"></i>Apagar</button></a>
<a href="{{route('layer.resume')}}"><button class="btn btn-success btn-sm"><i class="fa-solid fa-trash-can"></i>Resumo</button></a>
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