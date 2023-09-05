@extends('base.main')
@section('content')

    <!-- Form Start -->
    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
			<h4><i>Bem vindo a Plataforma de Advogancia</i></h4>
                <strong>Caro Cidadão!</strong> Introduza seus dados válidos para facilitar o contactar com a nossa
                equipa.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>

            <div class="col-sm-12 col-xl-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h4 class="mb-4">Campo de Cadastro</h4>
                    @if(Session::has('success'))
                    <div class="alert alert-success" role="alert">
                        {{Session::get('success')}}
                    </div>
                    @endif
                    <form method="POST" action="{{route ('case.save')}}" class="row g-3">
                        @csrf
                        <div class="col-md-8">
                            <label for="name" class="form-label">Nome</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}" autofocus>
                            @error('name')
                                    <div class="alert alert-danger" role="alert">{{$message}}</div>
                                @enderror
                        </div>

						<div class="col-md-4">
                            <label for="province" class="form-label">Provincia</label>
                            <select id="province" name="province" class="form-select" value="{{old('province')}}">
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
                            <label for="audience" class="form-label">Data de Audiência</label>
                            <input type="date" name="audience" class="form-control" value="2023-05-24">
                            @error('audience')
                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        </div>
							  
                        <div class="col-md-4">
                            <label for="marital_status" class="form-label">Estado Civil</label>
                            <select id="marital_status" name="marital_status" class="form-select">
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
                            <input type="number" name="age" class="form-control" id="age">
                            @error('age')
                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="subject" class="form-label">Selecione o Assunto</label>
                            <select id="subject" name="subject" class="form-select">
                                <option selected> .....</option>
                                <option>Requisição de um Defensor</option>
                                <option>Pedido de Assessoria</option>
                            </select>
                            @error('subject')
                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                        </div>

                        <div class="col-md-4">
                            <label for="message" name="message" class="form-label">Confirma Nº</label>
                            <select name="custum_id" id="custum_id" class="form-control" required>
                                <option value="">Confirma Nº</option>
                                    @foreach ($custum as $custum)
                                    <option value="{{ $custum->id }}">{{$custum->id}}</option>
                                    @endforeach
                            </select>
                        </div>

                        <div class="col-md-12">
                            <label for="message" name="message" class="form-label">Mensagem</label>
                            <input type="text" name="message" class="form-control" id="message" style="height: 200px;">
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