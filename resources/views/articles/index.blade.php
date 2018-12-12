@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2>All Articles</h2>
                  <ul>
                    @foreach ($articles as $article)
                        <li><a href="{{route('view_article', ['id' => $article->id])}}">{{$article->title}}</a> by <a href="{{route('show_user_profile', ['id' => $article->author->id])}}">{{$article->author->name}}</a></li>
                    @endforeach
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
