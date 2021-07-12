@extends('layouts.main')
@section('title','Michel Versiani Developer')

@section('content')



    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">Michel Versiani Dev</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link" href="#inicio">Inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#about-session">Sobre mim</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#conhecimentos">Conhecimento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#projetos-session">Projetos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#sessao-contato">Contato</a>
                </li>
            </ul>
        </div>
    </nav>

    <section class="sessao-carregando">
        <div class="lds-heart"><div></div></div>
    </section>

    @if(Session::has('error'))
        <div class="alert alert-danger" id="error">
            {{Session::get('error')}}
        </div>
    @endif

    @if(Session::has('success'))
        <div class="alert alert-success" id="success">
            {{Session::get('success')}}
        </div>
    @endif

    <header id="inicio">
        <div class="container-fluid cover-image">
            <div class="image-wrapper">
                <img src="{{secure_asset('images/bg.jpg')}}" alt="Um macbook pro Aberto">
            </div>
        </div>
        <div class="banner">
            <h1>Michel Versiani</h1>
            <p>Desenvolvedor Web Fullstack</p>
        </div>
    </header>

    <!-- CONTENT -->
    <div class="container-fluid" id="about-session">
            <div class="about-me">
                <h1>Sobre Mim</h1>
            </div>

            <div class="profile-wrapper">
                <img src="{{secure_asset('images/profilePic.jpg')}}" alt="">
            </div>

            <div class="aboutDescription">
                <p>Me chamo Michel , 24 anos , e sou Desenvolvedor de Software a 1 ano e meio quase...  Comecei aprendendo a linguagem C por conta própria , depois migrei para o C++ e logo após para o C#. Em 2018 me matriculei em um curso de ADS na Instituição Estácio De Sá , e em 2020 tive a oportunidade de estagiar no Tribunal de Justiça Militar , onde pude trabalhar com a linguagem PHP , e os frameworks Laravel e Codeigniter. Atualmente trabalho como Desenvolvedor Júnior em uma Travel Tech que amo, chamada Onfly. Aqui as ferramentas que utilizo são: Laravel , Vue Js , Docker e Quasar Framework. Aqui também tenho aprendido as melhores práticas de programação , e como fazer um código de qualidade , que funcione , seja performático , e que possa ser facilmente entendido por outras pessoas. Sou muito grato a toda equipe pela oportunidade!</p>
            </div>
    </div>

    <section class="sessao-conhecimentos">
        <div class="container-fluid" id="conhecimentos">
            <div class="conhecimentos-header">
                <h1>Conhecimentos</h1>
            </div>

            <div class="container-fluid conhecimentos-content">
                <div class="card conhecimentos-card">
                    <div class="img-wrapper">
                        <img src="{{secure_asset('images/backend.jpg')}}" class="card-img-top" alt="">
                    </div>
                    <div class="card-info">
                        <h2><i class="fas fa-cogs"></i> Backend</h2>
                        <h5><i class="fab fa-php" id="php"></i> PHP</h5>
                        <h5><i class="fab fa-laravel"></i> Laravel</h5>
                    </div>
                </div>

                <div class="card conhecimentos-card">
                    <div class="img-wrapper">
                        <img src="{{secure_asset('images/frontend.jpg')}}" class="card-img-top" alt="">
                    </div>
                    <div class="card-info">
                        <h2><i class="fas fa-code"></i> Frontend</h2>
                        <h5><i class="fab fa-js"></i> JavaScript</h5>
                        <h5><i class="fab fa-vuejs"></i> Vue Js</h5>
                    </div>
                </div>

                <div class="card conhecimentos-card">
                    <div class="img-wrapper">
                        <img src="{{secure_asset('images/database.jpg')}}" class="card-img-top" alt="">
                    </div>
                    <div class="card-info">
                        <h2><i class="fas fa-database"></i> Banco de Dados</h2>
                        <h5><i class="fas fa-database"></i> Mysql</h5>
                        <h5><i class="fas fa-database"></i> Sqlsrv</h5>
                    </div>
                </div>

                <div class="card conhecimentos-card">
                    <div class="img-wrapper">
                        <img src="{{secure_asset('images/versionamento.jpg')}}" class="card-img-top" alt="">
                    </div>
                    <div class="card-info">
                        <h2><i class="fas fa-code-branch"></i> Controle de Versão</h2>
                        <h5><i class="fab fa-gitlab"></i> GitLab</h5>
                        <h5><i class="fab fa-github"></i> GitHub</h5>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <div class="container-fluid" >
        <div class="projetos-header"id="projetos-session">
            <h1>Projetos</h1>
        </div>
        <div class="projetos">
            <div class="card-deck">

                <div class="card">
                    <div class="container project-img">
                        <a href="{{secure_asset('images/ApoieoCorpo.jpg')}}" data-toggle="lightbox" data-gallery="projects" data-type="image">
                            <img src="{{secure_asset('images/ApoieoCorpo.jpg')}}" class="card-img-top" alt="...">
                        </a>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Apoie o Corpo</h5>
                        <p class="card-text">Um portal criado com o intuito de ajudar micro empreendedores a divulgar seus negócios de forma gratuita.</p>
                        <a class="btn btn-sm btn-dark" href="https://github.com/Deathpk/ApoieoCorpo">Saiba Mais</a>
                    </div>
                </div>

                <div class="card">
                    <div class="container project-img">
                        <a href="{{secure_asset('images/SistemaLanchonete.jpg')}}" data-toggle="lightbox" data-gallery="projects" data-type="image">
                            <img src="{{secure_asset('images/SistemaLanchonete.jpg')}}" class="card-img-top" alt="...">
                        </a>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Sistema Lanchonete PDV</h5>
                        <p class="card-text">Um Sistema PDV para Lanchonetes.</p>
                        <a class="btn btn-sm btn-dark" href="https://github.com/Deathpk/SistemaLanchonete-1.0">Saiba Mais</a>
                    </div>
                </div>

                <div class="card">
                    <div class="container project-img">
                        <a href="{{secure_asset('images/Xadrez.jpg')}}" data-toggle="lightbox" data-gallery="projects" data-type="image">
                                <img src="{{secure_asset('images/Xadrez.jpg')}}" class="card-img-top" alt="...">
                        </a>
                    </div>
                   <div class="card-body">
                        <h5 class="card-title">Xadrez In Console</h5>
                        <p class="card-text">Um jogo de Xadrez pelo console , feito em C#</p>
                        <a class="btn btn-sm btn-dark" href="https://github.com/Deathpk/XadrezConsole">Saiba Mais</a>
                   </div>
                </div>

            </div>
        </div>
    </div>

    <section class="sessao-contato" id="sessao-contato">
        <div class="contato-wrapper">
            <div class="contato-left">

            </div>
            <div class="contato-right">
                <h1>Contato</h1>
                <form action="{{route('sendMessage')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="Nome">Nome</label>
                        <input type="text" class="form-control" name="nome" required minlength="3" id="nome"aria-describedby="Nome">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="mensagem">Mensagem</label>
                        <textarea class="form-control" id="mensagem" required minlength="40" name="mensagem" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-submit">Enviar</button>
                </form>
            </div>
        </div>
    </section>

@endsection
