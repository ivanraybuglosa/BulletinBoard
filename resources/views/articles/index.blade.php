@extends('master')

@section('content')

    <div class="container-fluid">

        @if(Session::has('message'))
            <div class="alert alert-success text-center">
                {{ Session::get('message') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-lg-10">
                        <h1>Bulletin Board</h1>
                    </div>
                    <div class="col-lg 2">
                        <a href="{{route('articles.create')}}" class="btn btn-primary float-right">Create New</a>
                    </div>
                </div>
                
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    @if(empty($articles))
                    <h1>No data Found.</h1>
                        @else
                        <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>Created at</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($articles as $article)
                                <tr>
                                    <td>{{ $article->id }}</td>
                                    <td><a href="{{route('articles.show', $article->id)}}">{{ $article->title }}</a></td>
                                    <td>{{ $article->content }}</td>
                                    <td>{{ $article->created_at->format('F j,Y H:i:s') }}</td>
                                    <td>
                                        <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-info">Edit</a>
                                        <form action="{{route('articles.destroy', $article->id)}}" method="post" class="d-inline-block">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection