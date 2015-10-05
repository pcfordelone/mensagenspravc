@extends('site.layout')

@section('content')
    <section id="img_gallery">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Mensagens Recentes</h2>
            </div>

            <div class="text-center">
                <ul class="img_gallery-filter">
                    <li><a class="active" href="#" data-filter="*">Todas as mensagens</a></li>
                    @foreach($categories as $category)
                        <li><a href="#" data-filter=".{{ $category->datafilter }}">{{ $category->name }}</a></li>
                    @endforeach
                </ul><!--/#img_gallery-filter-->
            </div>

            @include('site.partial.posts')

        </div><!--/.container-->
    </section><!--/#img_gallery-->

@endsection



