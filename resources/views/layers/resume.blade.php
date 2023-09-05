@extends('base.main')
@section('content')

<!-- inicio da tabela funcionario -->
<div class="container-fluid pt-4 px-4">
    <div class="bg-secondary rounded p-4">
        <div class="d-flex align-items-center justify-content-between mb-4"> 
            <h4 class="mb-0">Atribuição do Processo</h4>
            <div class="btn-group" role="group">

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
                        <th scope="col">Id</th>
                        <th scope="col">Cliente</th>
                        <th scope="col">Assunto</th>
                    <th scope="col">Ação</th>
                    </tr>
                </thead>

                @foreach ($data as $item)
                <tr>
                <td>{{ $item->id}}</td>
                <td>{{ $item->case->name}}</td>
                <td>{{ $item->case->subject}}</td>
                <td>
                    {{-- <td class="text-center"> --}}
<a href="#"><button class="btn btn-primary btn-sm"><i class="fa-light fa-pen-to-square"></i>Relatorio</button></a>

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