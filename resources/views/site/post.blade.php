@extends('site.layout')

@section('content')
    <article>
        <div class="container">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
                <div class="section-header">
                    <h2 >Post - {{ $post->name }}</h2>
                </div>
                <img src="{{ url('uploads/'.$post->image) }}" /><br/><br/>
                <p><strong>Mensagem:</strong> {{ $post->description }}</p>
                <hr/>
                <p>Compartilhe:</p>
                <a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost:8000/post/{{ $post->id }}">
                    <button class="btn btn-primary btn-sm">
                        <i class="fa fa-facebook"></i>
                        facebook
                    </button>
                </a>
                <a href="#">
                    <button class="btn btn-default btn-sm">
                        <i class="fa fa-instagram"></i>
                        instagram
                    </button>
                </a>
                <a href="#">
                    <button class="btn btn-danger btn-sm">
                        <i class="fa fa-google"></i>
                        google +
                    </button>
                </a>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </article>
@endsection



