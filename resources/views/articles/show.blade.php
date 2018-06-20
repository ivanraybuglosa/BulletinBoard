@extends('master')

@section('content')
<div class="d-flex">
    <div class="card mx-auto">
        <div class="card-header">
            <div class="row">
                <div class="col-lg-10">
                    <h1>{{ $article->title}}</h1>
                    <small>{{ $article->created_at->format('F j, Y') }}</small>
                </div>
                <div class="col-lg-2">
                    <a href="{{route('articles.index')}}" class="btn btn-outline-info mt-3 float-right">Back</a>
                </div>
            </div>
            
        </div>
        <div class="card-body">
            <p>{{ $article->content }}</p>
        </div>
    </div>
</div>

@endsection