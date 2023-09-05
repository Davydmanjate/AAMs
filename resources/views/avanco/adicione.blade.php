@extends('base.main')
@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            
            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h4 class="mb-4">Atribuição do Advogado</h4>
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    {{-- <form method="POST" action="{{route ('avance.save')}}" class="row g-3"> --}}
                    <form method="POST" action="{{route ('avance.upate', $data->id)}}" class="row g-3">
                        @csrf

                        <div class="col-md-6">
                            <label for="case_id">Nome do Cliente</label>
                                <select name="case_id" id="case_id" class="form-control" value="{{ $data->case_id }}" required>
                                <option value="">Nome do Cliente</option>
                                    @foreach ($case as $case)
                                    {{-- <option value="{{ $case->id }}">{{$case->name}}</option> --}}
                                    <option value="{{ $case->id }}" {{$case->id == $data->case_id? 'selected':''}}>{{$case->id}}</option>
                                    @endforeach
                            </select>
                            @csrf
                            @method('PUT')
                        </div>

                        <div class="col-md-6">
                            <label for="custum_id">Nº Processo</label>
                            <select name="custum_id" id="custum_id" class="form-control" value="{{ $data->custum_id }}" required>
                                <option value="">Nº Processo</option>
                                @foreach ($custum as $custum)
                                    <option value="{{ $custum->id }}" {{$custum->id == $data->custum_id? 'selected':''}}>{{$custum->id}}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="message" name="message" class="form-label">Nome do Advogado</label>
                            <select name="layer_id" id="layer_id" class="form-control" selected>
                                <option value="">Selecione um Advogado</option>
                                    @foreach ($layer as $layer)
                                    <option value="{{ $layer->id }}">{{$layer->name}}</option>
                                    @endforeach
                            </select>
                        </div>

						<div class="col-md-6">
                            <label for="status" class="form-label">Estado</label>
                            <select id="status" name="status" class="form-select" value="{{old('status')}}">
                                <option selected>Escolher ...</option>
                                <option>Pendente</option>
								<option>Em andamento</option>
                                <option>Concluído</option>
                                <option>Cancelado</option>
                            </select>
                            @error('status')
                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        </div>

                </div>
            </div>
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
        </form>
    </div>
    <!-- Form End -->
@endsection