@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1>Aktivizo / Caktivizo Monedhat</h1>

                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">Kodi Iso</th>
                        <th scope="col">Emri</th>
                        <th scope="col">Aktive</th>
                    </tr>
                    </thead>
                    <tbody class="h5">
                    @foreach($monedhat as $monedh)
                        @if($monedh->is_enabled)
                            <tr class="table-success">
                        @else
                            <tr class="table-secondary">
                                @endif
                                <?php
                                $code = Str::limit($monedh->iso_code, 2,'');
                                $code = strtolower($code);
                                ?>
                                <td class="w-25"><span class="flag-icon flag-icon-{{$code}} ml-3 mr-3"></span>{{$monedh->iso_code}}</td>
                                <td>{{$monedh->name}}</td>
                                <td>{{$monedh->is_enabled ? 'active' : 'joaktive' }}</td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>

@endsection

