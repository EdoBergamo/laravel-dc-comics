<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Create Comic</h1>
  <form action="{{ route('comics.store') }}" method="post">
    @csrf

    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ old('title') }}" required>

    <label for="description">Description:</label>
    <textarea name="description" required>{{ old('description') }}</textarea>

    <label for="thumb">Thumbnail URL:</label>
    <input type="text" name="thumb" value="{{ old('thumb') }}" required>

    <label for="price">Price:</label>
    <input type="text" name="price" value="{{ old('price') }}" required>

    <label for="series">Series:</label>
    <input type="text" name="series" value="{{ old('series') }}" required>

    <label for="sale_date">Sale Date:</label>
    <input type="date" name="sale_date" value="{{ old('sale_date') }}" required>

    <label for="type">Type:</label>
    <input type="text" name="type" value="{{ old('type') }}" required>

    <label for="artists">Artists:</label>
    <input type="text" name="artists" value="{{ old('artists') }}" required>

    <label for="writers">Writers:</label>
    <input type="text" name="writers" value="{{ old('writers') }}" required>

    <button type="submit">Create Comic</button>
  </form>
</body>
</html>