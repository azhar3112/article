@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Article Lists') }}

                    <a href="{{ route('articles.create') }}" class="btn btn-primary" style="float: right">Add Article</a>
                </div>

                <div class="card-body">
                            <table class="table">

                                <tr>
                                    <th>No.</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($articles as $article)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $article->title }}</td>
                                        <td><a href="{{ route('articles.edit', $article) }}" class="btn-secondary mb-2">Edit</a> 
                                            <a href="{{ route('articles.delete', $article) }}" class="btn-warning mb-2"
                                            onclick="return confirm('Are you sure want to delete?')">Delete</a>
                                    </td>
                                    </tr>
                                    @endforeach
                            </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection