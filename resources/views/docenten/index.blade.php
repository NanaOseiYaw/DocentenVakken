<!DOCTYPE html>
<html>
<head>
    <title>Docenten</title>
</head>
<body>
    <h1>Overzicht van Docenten</h1>
    <ul>
        @foreach($docenten as $docent)
            <li>
                {{ $docent->name }} (Hobby's: {{ $docent->hobby ?? 'Geen' }})
                <ul>
                    @foreach($docent->vakken as $vak)
                        <li>{{ $vak->name }} - {{ $vak->description }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
