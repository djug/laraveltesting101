<div class="form-group">
    <label for="title" class="col-sm-12 col-form-label text-md-left">Title</label>
    <div class="col-md-12">
        <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title', $article->title ?? "") }}" required autofocus>
       @include("_has_errors", ['field' => "title"])
    </div>
</div>

<div class="form-group">
    <label for="body" class="col-sm-12 col-form-label text-md-left">Body</label>
    <div class="col-md-12">
        <textarea id="body" class="form-control{{ $errors->has('body') ? ' is-invalid' : '' }}" name="body" required autofocus> {{ old('body', $article->body ?? "") }}</textarea>
        @include("_has_errors", ['field' => "body"])
    </div>
</div>

