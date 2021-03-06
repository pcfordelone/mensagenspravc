@extends('admin.layout')

@section('content')

    <h3>Criar nova categoria</h3>

    @if ($errors->any())
        <ul class="alert">
            @foreach($errors->all() as $error)
                <li class="alert-danger">{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    {!! Form::open() !!}

    <!-- Nome Form Input -->
    <div class="form-group">
        {!! Form::label('name', 'Nome:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>

    <!-- Data-filter Form Input -->
    <div class="form-group">
        {!! Form::label('datafilter', 'Data filter:') !!}
        {!! Form::text('datafilter', null, ['class'=>'form-control']) !!}
    </div>

    <!-- Description Form Input -->
    <div class="form-group">
        {!! Form::label('description', 'Descrição:') !!}
        {!! Form::textarea('description', null, ['class'=>'form-control']) !!}
    </div>

    {!! Form::submit('Adicionar Categoria', ['class'=>'btn btn-primary']) !!}

    {!! Form::close() !!}

@endsection