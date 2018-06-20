@extends('master')

@section('content')
    <div class="d-flex">
            <div class="container-fluid" style="border: 1px solid #111111; border-radius: 25px; width:450px;">
                    <h1 class="text-center mt-2">Create an article</h1>
                    <hr>
                    @if($errors)
                        @foreach($errors->all() as $error) 
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ $error }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    @endif
                    <form action="{{route('articles.store')}}" method="post">
                        @csrf
            
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Article Title"/>
                        </div>
            
                        <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" cols="50" rows="15" class="form-control" placeholder="Article Content"></textarea>
                                <small class="text-muted">Maximum of 191 characters only.</small>
                        </div>
            
                        <div class="form-group text-center">
                                <a href="{{route('articles.index') }}" class="btn btn-outline-warning">Back</a>
                            <button type="submit" class="btn btn-primary">Post</button>
                        </div>
                    </form>
                </div>
    </div>
    
@endsection