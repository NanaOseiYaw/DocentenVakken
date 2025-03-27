<!DOCTYPE html>
<html>
<head>
    <title>Vakken</title>
</head>
<body>
    <h1>Overzicht van Vakken</h1>
    <ul>
        @foreach($vakken as $vak)
            <li>
                {{ $vak->name }} - {{ $vak->bescription }} (Docent: {{ $vak->docent->name }})
            </li>
        @endforeach
    </ul>
</body>
</html>
