<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docenten en Vakken</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Docenten en Vakken</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Naam van de Docent</th>
                    <th>Hobby</th>
                    <th>Vakken</th>
                </tr>
            </thead>
            <tbody>
                @foreach($docenten as $docent)
                    <tr>
                        <td>{{ $docent->naam }}</td>
                        <td>{{ $docent->hobby ?? 'Geen hobby' }}</td>
                        <td>
                            <ul>
                                @foreach($docent->vakken as $vak)
                                    <li>{{ $vak->naam }} - {{ $vak->beschrijving }}</li>
                                @endforeach
                            </ul>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
