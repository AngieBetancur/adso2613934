<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Games</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Developer</th>
            <th>Releasedate</th>
            <th>Price</th>
            <th>Genre</th>
            <th>Description</th>
            <th>Image</th>
        </tr>
        @foreach ($games as $game)
        <tr>
            <td>{{ $game->id }}</td>
            <td>{{ $game->title }}</td>
            <td>{{ $game->developer }}</td>
            <td>{{ $game->releasedate }}</td>
            <td>{{ $game->price }}</td>
            <td>{{ $game->genre }}</td>
            <td>{{ $game->description }}</td>
            <td><img src="{{ public_path().'/images/'.$game->image }}" width="40px"></td>
        </tr>            
        @endforeach
    </table>
</body>
</html>