<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>{{ $comic->title }}</h1>

  <p>{{ $comic->description }}</p>
  <p>Price: {{ $comic->price }}</p>
  <p>Series: {{ $comic->series }}</p>
  <p>Sale Date: {{ $comic->sale_date }}</p>
  <p>Type: {{ $comic->type }}</p>

  <h2>Artists</h2>
  <ul>
    @foreach (json_decode($comic->artists) as $artist)
    <li>{{ $artist }}</li>
    @endforeach
  </ul>

  <h2>Writers</h2>
  <ul>
    @foreach (json_decode($comic->writers) as $writer)
    <li>{{ $writer }}</li>
    @endforeach
  </ul>

  <a href="{{ route('comics.index') }}">Back to Comics</a>
</body>
</html>