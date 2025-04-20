@extends('layouts.app')

@section('title', 'Edit Artikel')

@section('content')
    <h1>Edit Artikel</h1>

    <form>
        <label>Judul:</label><br>
        <input type="text" name="title" value="{{ $article['title'] }}"><br><br>

        <label>Isi:</label><br>
        <textarea name="content" rows="5" cols="40">{{ $article['content'] }}</textarea><br><br>

        <button type="submit" disabled>Simpan (hanya simulasi)</button>
    </form>

    <br>
    <a href="{{ route('articles.show', $article['id']) }}">← Kembali ke detail</a>
@endsection
