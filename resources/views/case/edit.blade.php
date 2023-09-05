@extends('base1.main')
@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">

            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h4 class="mb-4">Actualizr causas</h4>
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <form method="POST" action="{{url ('case.update')}}" class="row g-3">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="col-md-7">
                            <label for="first_name" class="form-label">Primeiro Nome</label>
                            <input type="text" name="first_name" class="form-control" value="{{$data->first_name}}" autofocus>
                            @error('first_name')
                                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                                @enderror
                        </div>

                        <div class="col-md-5">
                            <label for="last_name" class="form-label">Apelido</label>
                            <input type="text" name="last_name" class="form-control" value="{{$data->last_name}}">
                            @error('last_name')
                                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                                @enderror
                        </div>
                        
                        <div class="col-8">
                            <label for="email" class="form-label">E-mail</label>
                            <input type="email" name="email" class="form-control" value="{{$data->email}}"> </label>
                        </div>

                        <div class="col-md-4">
                            <label for="phone" class="form-label">Telefone</label>
                            <input type="text" name="phone" class="form-control" value="{{$data->phone}}">
                            @error('phone')
                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        </div>

						<div class="col-md-4">
                            <label for="province" class="form-label">Provincia</label>
                            <select id="province" name="province" class="form-select" value="{{$data->province}}">
                                <option selected>Escolher ...</option>
                                <option>Maputo</option>
								<option>Maputo-Cidade</option>
                                <option>Gaza</option>
                                <option>Inhambane</option>
                                <option>Manica</option>
								<option>Sofala</option>
								<option>Zambézia</option>
								<option>Nampula</option>
								<option>Tete</option>
								<option>Niassa</option>
								<option>Cabo Delgado</option>
                            </select>
                            @error('province')
                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="district" class="form-label">Distrito</label>
                            <input type="text" name="district" class="form-control" value="{{$data->district}}">
                            @error('district')
                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="city" class="form-label">Cidade</label>
                            <input type="text" name="city" class="form-control" value="{{$data->city}}">
                            @error('city')
                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="audience" class="form-label">Data de Audiência</label>
                            <input type="date" name="audience" class="form-control" value="2023-05-24" value="{{$data->audience}}">
                            @error('audience')
                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        </div>
							  
                        <div class="col-md-4">
                            <label for="marital_status" class="form-label">Estado Civil</label>
                            <select id="marital_status" name="marital_status" class="form-select" value="{{$data->marital_status}}">
                                <option selected>Escolher ...</option>
                                <option>Solteiro/a</option>
                                <option>Casado/a</option>
                                <option>Divorciado/a</option>
                                <option>Viúvo/a</option>
                            </select>
                            @error('marital_status')
                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="age" class="form-label">Idade</label>
                            <input type="number" name="age" class="form-control" value="{{$data->age}}" id="age">
                            @error('age')
                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="subject" class="form-label">Selecione o Assunto</label>
                            <select id="subject" name="subject" class="form-select" value="{{$data->subject}}">
                                <option selected> .....</option>
                                <option>Requisição de um Defensor</option>
                                <option>Pedido de Assessoria</option>
                            </select>
                            @error('subject')
                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="message" name="message" class="form-label">Selecione um Advogado</label>
                            <select name="layer_id" id="layer_id" class="form-control" value="{{$data->layer_id}}" required>
                                <option value="">Selecione um Advogado</option>
                                    @foreach ($layer as $layer)
                                    <option value="{{ $layer->id }}">{{$layer->name}}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="message" name="message" class="form-label">Confirma Nome</label>
                            <select name="custum_id" id="custum_id" class="form-control" value="{{$data->custum_id}}" required>
                                <option value="">Confirma Nome</option>
                                    @foreach ($custum as $custum)
                                    <option value="{{ $custum->id }}">{{$custum->name}}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="message" name="message" class="form-label">Mensagem</label>
                            <input type="text" name="message" class="form-control" value="{{$data->message}}" id="message" style="height: 200px;">
                                @error('message')
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