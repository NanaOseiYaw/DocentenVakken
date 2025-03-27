<!DOCTYPE html>
<html>
<head>
    <title>Vakken</title>
</head>
<body>
    <h1>Overzicht van Vakken</h1>
    <ul>
        @foreach($vakken as $subject) <!-- Loop through $vakken -->
            <li>
                {{ $subject->name }} - {{ $subject->description }} (Docent: {{ $subject->teacher->name }})
            </li>
        @endforeach
    </ul>
</body>
</html>
