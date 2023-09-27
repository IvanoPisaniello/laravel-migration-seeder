@extends("layouts.public")

@section("content")
<table>
    <thead>
        <tr>
            <th>Azienda</th>
            <th>Stazione di Partenza</th>
            <th>Stazione di Arrivo</th>
            <th>Data di Partenza</th>
            <th>Orario di Partenza</th>
            <th>Orario di Arrivo</th>
            <th>Codice Treno</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
        <tr>
            <td>{{ $train->azienda }}</td>
            <td>{{ $train->stazione_di_partenza }}</td>
            <td>{{ $train->stazione_di_arrivo }}</td>
            <td>{{ $train->data_di_partenza }}</td>
            <td>{{ $train->orario_di_partenza }}</td>
            <td>{{ $train->orario_di_arrivo }}</td>
            <td>{{ $train->codice_treno }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection