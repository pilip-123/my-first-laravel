<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>date</th>
                <th>desc</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $index => $movie)

            <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $movie->name }}</td>
                    <td>{{ $movie->date }}</td>
                    <td>{{ $movie->desc }}</td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</body>
</html>
