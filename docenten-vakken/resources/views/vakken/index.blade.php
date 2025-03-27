<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vakken en Docenten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h1>Vakken en de Docenten die ze Geven</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Naam van het Vak</th>
                    <th>Beschrijving</th>
                    <th>Docent</th>
                </tr>
            </thead>
            <tbody>
                @foreach($vakken as $vak)
                    <tr>
                        <td>{{ $vak->naam }}</td>
                        <td>{{ $vak->beschrijving }}</td>
                        <td>{{ $vak->docent->naam }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
