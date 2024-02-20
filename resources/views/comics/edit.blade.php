<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Edit Comic</h1>
  <form action="{{ route('comics.update', $comic->id) }}" method="post">
    @csrf
    @method('PUT')

    <label for="title">Title:</label>
    <input type="text" name="title" value="{{ old('title', $comic->title) }}" required>

    <label for="description">Description:</label>
    <textarea name="description" required>{{ old('description', $comic->description) }}</textarea>

    <label for="thumb">Thumbnail URL:</label>
    <input type="url" name="thumb" value="{{ old('thumb', $comic->thumb) }}" required>

    <label for="price">Price:</label>
    <input type="number" name="price" value="{{ old('price', $comic->price) }}" required>

    <label for="series">Series:</label>
    <input type="text" name="series" value="{{ old('series', $comic->series) }}" required>

    <label for="sale_date">Sale Date:</label>
    <input type="date" name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" required>

    <label for="type">Type:</label>
    <input type="text" name="type" value="{{ old('type', $comic->type) }}" required>

    <label for="artists">Artists (comma-separated):</label>
    <input type="text" name="artists" value="{{ old('artists', implode(', ', json_decode($comic->artists))) }}" required>

    <label for="writers">Writers (comma-separated):</label>
    <input type="text" name="writers" value="{{ old('writers', implode(', ', json_decode($comic->writers))) }}" required>

    <button type="submit">Update Comic</button>
  </form>
</body>

</html>