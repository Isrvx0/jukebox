<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlists Overzicht</title>
    <style>
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #5BBCFF;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, p{
            color: white;
            text-align: center;
            margin-bottom: 20px;
        }
        h2 {
            color: #7EA1FF;
            margin-bottom: 5px;
        }
        h3 {
            color: #F7F6BB;
            margin-bottom: 10px;
        }
        section {
            background-color: #FFFAB7;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        section:hover {
            transform: translateY(-5px);
        }
        .create-playlist-link {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .create-playlist-link:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Playlists Overzicht</h1>

        <!-- Success message after creating or updating or deleting a playlist -->
        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <!-- Link to create a new playlist -->
        <a class="create-playlist-link" href="{{ route('playlists.create') }}">Create New Playlist</a>

        @foreach($playlists as $playlist)
        <section>
            <h2>{{ $playlist->name }}</h2>
        </section>
        @endforeach

    </div>
</body>
</html>
