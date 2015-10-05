@extends('admin.layout')

@section('content')

    <h3>Editar Post</h3>

    @if ($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li class="alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open(['enctype' => 'multipart/form-data']) !!}

        <!-- Nome Form Input -->
        <div class="form-group">
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', $post->name, ['class'=>'form-control']) !!}
        </div>

        <!-- Category Form Input -->
        <div class="form-group">
            {!! Form::label('category_id', 'Categoria:') !!}
            {!! Form::select('category_id', $categories, $post->category->id, ['class'=>'form-control']) !!}
        </div>

        <!-- Image Form Input -->
        <div class="form-group">
            {!! Form::label('img', 'Imagem:') !!}
            {!! Form::file('img', null, ['class'=>'form-control']) !!}

            <br/>
            <strong>Imagem Atual:</strong><br/>
            <img src="{{ url('uploads/'.$post->image) }}" />
        </div>

        <!-- Description Form Input -->
        <div class="form-group">
            {!! Form::label('description', 'Descrição:') !!}
            {!! Form::textarea('description', $post->description, ['class'=>'form-control']) !!}
        </div>

        {!! Form::submit('Atualizar Produto', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}

@endsection