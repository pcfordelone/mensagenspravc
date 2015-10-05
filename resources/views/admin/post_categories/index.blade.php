@extends('admin.layout')

@section('content')

    <h3>Categorias</h3>

    <hr/>

    <a href="{{ route('admin.categories.create') }}">
        <button class="btn btn-primary">
            Criar Nova Categoria
        </button>
    </a>
    <br/>
    <br/>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ação</th>
        </tr>

        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('admin.categories.edit', ['id'=>$category->id]) }}">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                    <a href="{{ route('admin.categories.destroy', ['id'=>$category->id]) }}">
                        <button class="btn btn-danger">Apagar</button>
                    </a>
                </td>
            </tr>
        @endforeach

    </table>

@endsection