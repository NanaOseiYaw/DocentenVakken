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
                {{ $teacher->name }} (Hobby's: {{ $teacher->hobby ?? 'Geen' }})
                <ul>
                    @foreach($teacher->subjects as $subject)
                        <li>{{ $subject->name }} - {{ $subject->description }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>
</body>
</html>
