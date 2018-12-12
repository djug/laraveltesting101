@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2>{{$user->name}}</h2>
                  <ul>
                   <li>Email: {{$user->email}}</li>
                   <li>Member since: {{$user->created_at->diffForHumans()}}</li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
