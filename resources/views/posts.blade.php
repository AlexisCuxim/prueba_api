<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts API</title>
</head>
<body>
    
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Cuerpo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $post)
                <tr>
                    <th>{{ $post['id'] }}</th>
                    <th>{{ $post['title'] }}</th>
                    <th>{{ $post['body'] }}</th>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>