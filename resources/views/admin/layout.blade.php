<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Mensagens Pra Vc!!!</title>

    <meta name="description" content="">
    <meta name="author" content="Fordelone Solutions">

    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="/css/style.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.11.3.min.js"></script>

</head>
<body>

<header id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12 topo">
                <nav class="navbar navbar-default navbar-inverse menu" role="navigation">
                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span><span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            Mensagens pra vc!!!
                        </a>

                    </div>

                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Home</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorias<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Mensagens Recentes</a></li>

                                    <li class="divider"></li>

                                    <li><a href="#">Paz e Amor</a></li>
                                    <li><a href="#">Religião</a></li>
                                    <li><a href="#">Futebol</a></li>
                                </ul>
                            </li>
                        </ul>

                        <ul class="nav navbar-nav navbar-right">

                            <form class="navbar-form navbar-left" role="search">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="o que procura?" />
                                </div>
                                <button type="submit" class="btn btn-default">
                                    Buscar
                                </button>
                            </form>

                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<section id="conteudo">
    <div class="container">
        <div class="row">
            <div id="content" class="col-md-12">
                @yield('content')
            </div>
        </div>
    </div>
</section>

<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/scripts.js"></script>
<script src="/js/jquery.dataTables.min.js"></script>

</body>
</html>