@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('update_article', ['id' => $article->id]) }}">
                        @csrf
                        @include("articles._fields")

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                                @can('manage', $article)
                                    <a href="{{route('delete_article', ['id' => $article->id])}}" class="btn btn-danger">
                                        Delete
                                    </a>
                                @endcan
                            </div>


                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
