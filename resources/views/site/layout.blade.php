<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Fordelone Solutions">

    @if (isset($post))
        <title>Mensagens Pra Vc - {{ $post->name }}</title>

        <meta property="og:locale" content="pt_BR">
        <meta property="og:url" content={{ url('http://localhost:8000/post'.$post->id) }}>
        <meta property="og:title" content={{ 'Mensagens pra vc - '.$post->name }}>
        <meta property="og:site_name" content="Mensagens Pra Vc!!!">
        <meta property="og:description" content={{ $post->description }}>
        <meta property="og:image" content={{ url('http://localhost:8000/uploads/'.$post->image) }}>
        <meta property="og:image:type" content="image/jpeg">
        <meta property="og:image:width" content="500"> /** PIXELS **/
        <meta property="og:image:height" content="500"> /** PIXELS **/
    @else
        <title>Mensagens Pra Vc!!!</title>
    @endif


    <link href="{{ elixir('css/all.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">



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
                            <li class="active"><a href="{{ route('site.index') }}">Home</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categorias<strong class="caret"></strong></a>
                                <ul class="dropdown-menu">
                                    @foreach($categories as $category)
                                        <li><a href="{{ url($category->id.'/posts') }}">{{ $category->name }}</a></li>
                                    @endforeach
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

{{--<script src="{{ elixir('js/all.js') }}"--}}

<script src="/js/jquery.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/mousescroll.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script>
<script src="/js/jquery.isotope.min.js"></script>
<script src="/js/jquery.inview.min.js"></script>
<script src="/js/wow.min.js"></script>
<script src="/js/main.js"></script>

</body>
</html>