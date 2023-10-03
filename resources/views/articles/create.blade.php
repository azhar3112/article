@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Article') }}</div>

                <div class="card-body">
                <form action=""{{route('articles.store')}} " method="POST">
                @csrf

                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control">
                        <br>
                        <label for="body">Body</label >
                        <textarea name="body" class="form-control"></textarea>
                        <br>
                        <input type="submit" value="submit" class="btn btn-primary mb-2">
                        <a href="{{ route('articles.index')}}" class="btn btn-link">Cancel</a>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection