<!DOCTYPE html>
<html>
<head>
    <title>Lista de Categorías</title>
</head>
<body>
    <h1>Lista de Categorías</h1>
    <ul>
        @foreach($categories as $category)
            <li>{{ $category }}</li>
        @endforeach
    </ul>
</body>
</html>