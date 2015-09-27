@extends('admin.layout')

@section('content')

    <h3>Posts</h3>

    <hr/>

    <a href="{{ route('posts.create') }}">
        <button class="btn btn-primary">
            Criar Novo Post
        </button>
    </a>
    <br/>
    <br/>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Categoria</th>
            <th class="col-md-6">Descrição</th>
            <th>Ação</th>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->category->name }}</td>
                <td>{{ $post->description }}</td>
                <td>
                    <a href="{{ route('categories.create', ['id'=>$post->id]) }}">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                    <a href="#">
                        <button class="btn btn-danger">Apagar</button>
                    </a>
                </td>
            </tr>
        @endforeach

    </table>

@endsection