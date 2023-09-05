@extends('base.main')
@section('content')

<body>
    <!-- Other Elements Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col-sm-12 col-xl-12">
            
            <div class="bg-secondary rounded h-400 p-4">
            
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="{{asset('assets/img/advocacia.jpg')}}" class="d-block w-100" alt="..." style="width: 440px; height: 620px;">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Assossiação dos Advogados</h5>
                          <p>A Ordem dos Advogados de Moçambique, é uma assossiação de direito público representativa dos profissionais em Direito que, em conformidade com as disposições legais aplicáveis, exercem os serviços de advocacia.</p>
                          <p>A Ordem dos Advogados é independente dos órgãos do Estado, sendo livre e autónoma nas suas regras e funcionamento.</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img src="{{asset('assets/img/trabalhista.png')}}" class="d-block w-100" alt="..." style="width: 440px; height: 620px;">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Assossiação dos Advogados</h5>
                          <p>Tem a sua sede na cidade de Maputo, exerce em todo o território nacional as atribuições e competências que o Estatuto lhe confere e é territorialmente estruturada em Conselhos Provinciais e Delegados.</p>
                        </div>
                      </div>

                      <div class="carousel-item">
                        <img src="{{asset('assets/img/book.png')}}" class="d-block w-100" alt="..." style="width: 440px; height: 620px;">
                        <div class="carousel-caption d-none d-md-block">
                          <h5>Assossiação dos Advogados</h5>
                          <p>Tem a sua sede na cidade de Maputo, exerce em todo o território nacional as atribuições e competências que o Estatuto lhe confere e é territorialmente estruturada em Conselhos Provinciais e Delegados.</p>
                        </div>
                      </div>

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
                
            </div>
        </div>

        <div class="col-sm-12 col-xl-4">
            <div class="bg-secondary bordered h-100 p-4">
                <h6 class="mb-4">Missão</h6>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item bg-transparent">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOn" aria-expanded="false" aria-controls="collapseOn">
                                Nossa Missão
                            </button>
                        </h2>
                        <div id="collapseOn" class="accordion-collapse collapse hidden"
                            aria-labelledby="headingOn" data-bs-parent="#accordionExample">
                            <div class="accordion-body" Align="justify">
                                <p>Contribuir de uma forma mais eficiente e eficaz para a consolidação do Estado de Direito Democrático;</p>
                                <br><p>Ser mais actuante em tornar a Justiça mais acessível ao cidadão;</p><br>
                                <p>Defender a Constituição, os direitos fundamentais dos cidadãos e a dignidade e prestígio da profissão de Advogado através do respeito, promoção e defesa dos seus princípios deontológicos.</p>
                                
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-xl-4">
            <div class="bg-secondary bordered h-100 p-4">
                <h6 class="mb-4">Visão</h6>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item bg-transparent">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                Nossa Visão
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse hidden"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body" Align="justify">
                               <p>Ser reconhecida como um parceiro estratégico do Estado, indispensável na defesa da ordem jurídica nacional, na defesa das instituições democráticas, na defesa dos direitos dos cidadãos e na promoção dos princípios de justiça social.</p><br>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem optio consequuntur quas distinctio laboriosam voluptates sint ducimus impedit earum.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="col-sm-12 col-xl-4">
            <div class="bg-secondary bordered h-100 p-4">
                <h6 class="mb-4">Valor</h6>
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item bg-transparent">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Nossos Valores
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse hidden"
                            aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body" Align="justify">
                                <h6>1. Compromisso social;</h6>
                                <h6>2. Aprimoramento permanente;</h6>
                                <h6>3. Foco no processo e resultados:</h6>
                                <br>      3.1. Eficiência
                                <br>      3.2. Eficácia
                                <br>      3.3. Efectividade<br>
                                <br>
                                <h6>4. Ética profissional:</h6>
                                          4.1. Imparcialidade
                                    <br>      4.2. Impessoalidade
                                    <br>      4.3. Independência
                                    <br>      4.4. Transparência
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Other Elements End -->

<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
    <h1> Nossa Equipa</h1>
    <h5>Para melhor prestar os serviços e responder às necessidades dos nossos clientes dispomos de uma equipa de advogados profissionais.</h5>

        <div class="col-sm-6 col-xl-3">
            <img src="{{asset('assets/img/Elton.jpg')}}" class="d-block w-130" alt="..." style="width: 295px; height: 330px;">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <div class="ms-3">
                    <h4 class="mb-2">Elton Nahntumbo</h4>
                    <h6 class="mb-0">Advogado</h6>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <img src="{{asset('assets/img/vitoria.jpg')}}" class="d-block w-130" alt="..." style="width: 295px; height: 330px;">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <div class="ms-3">
                    <h4 class="mb-2">Vitória Adolfo</h4>
                    <h6 class="mb-0">Advogada</h6>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <img src="{{asset('assets/img/Marcia.jpg')}}" class="d-block w-130" alt="..." style="width: 295px; height: 330px;">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <div class="ms-3">
                    <h4 class="mb-2">Marcia Saveca</h4>
                    <h6 class="mb-0">Advogada</h6>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6 col-xl-3">
            <img src="{{asset('assets/img/gerson.jpg')}}" class="d-block w-130" alt="..." style="width: 295px; height: 330px;">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <div class="ms-3">
                    <h4 class="mb-2">Gerson Tembe</h4>
                    <h6 class="mb-0">Advogado</h6>
                </div>
            </div>
        </div>

    </div>
</div> 

<div class="container-fluid pt-4 px-4">
    <div class="row g-4">

        <div class="col-sm-6 col-xl-3">
            <img src="{{asset('assets/img/audy.jpg')}}" class="d-block w-130" alt="..." style="width: 295px; height: 330px;">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <div class="ms-3">
                    <h4 class="mb-2">Audencia Quive</h4>
                    <h6 class="mb-0">Advogada</h6>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <img src="{{asset('assets/img/Adelino.jpg')}}" class="d-block w-130" alt="..." style="width: 295px; height: 330px;">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <div class="ms-3">
                    <h4 class="mb-2">Adelino Timbe</h4>
                    <h6 class="mb-0">Advogado</h6>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-xl-3">
            <img src="{{asset('assets/img/lac.jpg')}}" class="d-block w-130" alt="..." style="width: 295px; height: 330px;">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <div class="ms-3">
                    <h4 class="mb-2">Dinho Lacerda</h4>
                    <h6 class="mb-0">Advogado</h6>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6 col-xl-3">
            <img src="{{asset('assets/img/dda.jpg')}}" class="d-block w-130" alt="..." style="width: 295px; height: 330px;">
            <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                <div class="ms-3">
                    <h4 class="mb-2">David Mandlate</h4>
                    <h6 class="mb-0">Advogado</h6>
                </div>
            </div>
        </div>

    </div>
</div><!-- Sale & Revenue Start -->



    </div>
    <!-- Content End -->

</div>
@endsection