@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                   <h1>{{$article->title}}</h1>
                   <p>
                    {{$article->body}}
                   </p>
                   @can('manage', $article)
                       <hr>
                       <a href="{{route('edit_article', ['id' => $article->id])}}" class="btn btn-info">Edit Article</a>
                   @endcan
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
