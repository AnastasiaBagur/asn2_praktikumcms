<!DOCTYPE html>
<html>
<head>
    <title>Tambah Artikel</title>
</head>
<body>
    <h1>Tambah Artikel</h1>
    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <label for="title">Judul:</label>
        <input type="text" name="title" required>
        <label for="content">Konten:</label>
        <textarea name="content" required></textarea>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>