@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $article['title'] }}</h1>
    <p>{{ $article['content'] }}</p>

    <a href="{{ route('articles.index') }}" class="btn btn-primary">Back to Articles</a>
    <a href="{{ route('articles.edit', $article['id']) }}" class="btn btn-warning">Edit</a>

    <form action="{{ route('articles.destroy', $article['id']) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this article?');">Delete</button>
    </form>
</div>
@endsection
