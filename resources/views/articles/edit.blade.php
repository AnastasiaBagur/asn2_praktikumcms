<!DOCTYPE html>
<html>
<head>
    <title>Edit Artikel</title>
</head>
<body>
    <h1>Edit Artikel</h1>
    <form action="{{ route('articles.update', $article['id']) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Judul:</label>
        <input type="text" name="title" value="{{ $article['title'] }}" required>
        <label for="content">Konten:</label>
        <textarea name="content" required>{{ $article['content'] }}</textarea>
        <button type="submit">Update</button>
    </form>
</body>
</html>