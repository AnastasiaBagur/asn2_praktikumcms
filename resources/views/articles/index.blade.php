<!DOCTYPE html>
<html>
<head>
    <title>Daftar Artikel</title>
</head>
<body>
    <h1>Daftar Artikel</h1>
    <a href="{{ route('articles.create') }}">Tambah Artikel</a>
    <ul>
        @foreach ($articles as $article)
            <li>
                {{ $article['title'] }} 
                <a href="{{ route('articles.edit', $article['id']) }}">Edit</a>
                <form action="{{ route('articles.destroy', $article['id']) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>