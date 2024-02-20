<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Comics</h1>

  @foreach ($comics as $comic)
  <div>
    <h2>{{ $comic->title }}</h2>
    <p> {{ $comic->description }}</p>
    <a href="{{ route('comics.show', $comic->id) }}">View Details</a>
  </div>
  @endforeach

</body>
</html>