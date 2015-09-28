@extends('admin.layout')

@section('content')

    <h3>Posts</h3>

    <hr/>

    <a href="{{ route('post.create') }}">
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
            <th>Imagem</th>
            <th class="col-md-4">Descrição</th>
            <th>Ação</th>
        </tr>

        @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->name }}</td>
                <td>{{ $post->category->name }}</td>
                <td><img width="200px" src="{{ url('uploads/' . $post->image) }}"</td>
                <td>{{ $post->description }}</td>
                <td>
                    <a href="{{ route('post.edit', ['id'=>$post->id]) }}">
                        <button class="btn btn-primary">Editar</button>
                    </a>
                    <a href="{{ route('post.destroy', ['id' => $post->id ]) }}">
                        <button class="btn btn-danger">Apagar</button>
                    </a>
                </td>
            </tr>
        @endforeach

    </table>

@endsection