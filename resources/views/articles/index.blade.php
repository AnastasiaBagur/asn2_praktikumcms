@extends('layouts.app')

@section('title', 'Daftar Artikel')

@section('content')
    <h1>Daftar Artikel</h1>

    @if(count($articles) > 0)
        <ul>
            @foreach($articles as $article)
                <li>
                    <a href="{{ route('articles.show', $article['id']) }}">{{ $article['title'] }}</a>
                </li>
            @endforeach
        </ul>
    @else
        <p>Tidak ada artikel.</p>
    @endif
@endsection
