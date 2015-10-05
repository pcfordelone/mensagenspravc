@extends('site.layout')

@section('content')
    <section id="img_gallery">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Mensagens Recentes</h2>
            </div>

            @include('site.partial.posts')

        </div><!--/.container-->
    </section><!--/#img_gallery-->
@endsection



