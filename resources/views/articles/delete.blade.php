@extends('layouts.app')

@section('title', 'Konfirmasi Hapus')

@section('content')
    <h1>Yakin ingin menghapus artikel ini?</h1>

    <p><strong>{{ $article['title'] }}</strong></p>
    <p>{{ $article['content'] }}</p>

    <button disabled>Ya, hapus (hanya simulasi)</button>
    <a href="{{ route('articles.show', $article['id']) }}">← Batal</a>
@endsection
