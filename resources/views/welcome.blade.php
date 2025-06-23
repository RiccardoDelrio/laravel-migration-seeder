@extends('layout.master')

@section(section: "content")
    <div class="container py-5">
        <h1 class="mb-4 text-center fw-bold tabellone-title">
            Tabellone Partenze Treni
        </h1>
        <div class="row g-4 justify-content-center">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle shadow-lg tabellone-table">
                        <thead>
                            <tr>
                                <th>Azienda</th>
                                <th>Stazione Partenza</th>
                                <th>Stazione Arrivo</th>
                                <th>Orario Partenza</th>
                                <th>Orario Arrivo</th>
                                <th>Codice Treno</th>
                                <th>Totale Carrozze</th>
                                <th>In Orario</th>
                                <th>Cancellato</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($trains as $train)
                                <tr>
                                    <td>{{ $train->azienda }}</td>
                                    <td>{{ $train->stazione_partenza }}</td>
                                    <td>{{ $train->stazione_arrivo }}</td>
                                    <td>{{ $train->orario_partenza }}</td>
                                    <td>{{ $train->orario_arrivo }}</td>
                                    <td>{{ $train->codice_treno }}</td>
                                    <td>{{ $train->totale_carrozze }}</td>
                                    <td class="fw-bold {{ $train->in_orario ? 'text-success' : 'text-danger' }}">
                                        {{ $train->in_orario ? 'Sì' : 'No' }}
                                    </td>
                                    <td class="fw-bold {{ $train->cancellato ? 'text-danger' : 'text-success' }}">
                                        {{ $train->cancellato ? 'Sì' : 'No' }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .tabellone-title {
            letter-spacing: 2px;
            font-family: 'Share Tech Mono', monospace;
            color: #222;
        }

        .tabellone-table {
            background: #222;
            color: #ffe066;
            font-family: 'Share Tech Mono', monospace;
            font-size: 1.1rem;
            border-radius: 10px;
            overflow: hidden;
        }

        .tabellone-table th {
            background: #222;
            color: #ffe066;
            font-size: 1.15rem;
            text-transform: uppercase;
            border-bottom: 2px solid #ffe066;
        }

        .tabellone-table td {
            color: #ffe066;
            vertical-align: middle;
        }

        .tabellone-table tr {
            transition: background 0.2s;
        }

        .tabellone-table tr:hover {
            background: #333;
        }

        .text-success {
            color: #51cf66 !important;
        }

        .text-danger {
            color: #ff6b6b !important;
        }
    </style>
@endpush