<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Songs Overzicht</title>
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
            text-align: left;
            margin-bottom: 20px;
        }
        h2 {
            color: #7EA1FF;
            margin-bottom: 5px;
        }
        h3 {
            margin-bottom: 10px;
        }
        section {
            background-color: #FFFAB7;
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            cursor: pointer; /* Toegevoegd om aan te geven dat het klikbaar is */
        }

        section:hover {
            transform: translateY(-5px);
        }
        a {
            text-decoration: none; /* Removes underline */
            color: inherit; /* Inherits the color from its parent */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">Songs Overzicht</h1>

        @foreach($songs as $song)
        <section>
            <h2> <a href="{{ route('songs.show', $song) }}">{{ $song->name }}</a> </h2>
            <h3>{{ $song->author }}</h3>
            <p>
            </p>
        </section>
        @endforeach

    </div>
</body>
</html>
