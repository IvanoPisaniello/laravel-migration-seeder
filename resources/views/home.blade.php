@extends("layouts.public")

@section("content")
<table class="p-5">
    <thead>
        <tr>
            <th class="p-3 border">Azienda</th>
            <th class="p-3 border">Stazione di Partenza</th>
            <th class="p-3 border">Stazione di Arrivo</th>
            <th class="p-3 border">Data di Partenza</th>
            <th class="p-3 border">Orario di Partenza</th>
            <th class="p-3 border">Orario di Arrivo</th>
            <th class="p-3 border">Codice Treno</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
        <tr>
            <td class="p-3 border">{{ $train->azienda }}</td>
            <td class="p-3 border">{{ $train->stazione_di_partenza }}</td>
            <td class="p-3 border">{{ $train->stazione_di_arrivo }}</td>
            <td class="p-3 border">{{ $train->data_di_partenza }}</td>
            <td class="p-3 border">{{ $train->orario_di_partenza }}</td>
            <td class="p-3 border">{{ $train->orario_di_arrivo }}</td>
            <td class="p-3 border">{{ $train->codice_treno }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection