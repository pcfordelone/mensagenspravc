@extends('site.layout')

@section('content')
    <section>
        <div class="container">
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
                <div class="section-header">
                    <h2 >Post - {{ $post->name }}</h2>
                </div>
                <img src="{{ url('uploads/'.$post->image) }}" /><br/><br/>
                <p><strong>Mensagem:</strong> {{ $post->description }}</p>
            </div>
            <div class="col-md-6">
            </div>
        </div>
    </section>
@endsection



