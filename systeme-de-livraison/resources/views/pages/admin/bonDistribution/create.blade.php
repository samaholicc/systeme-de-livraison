@extends('layouts.admin.admin')
@section('breads')
    <x-breadcrumb :breads="$breads" />
@endsection
@section('content')
    <form action="{{ route('bon.distribution.index') }}">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Ajouter Bon de distribution </h5>
            </div>

            <div class="card-body">
                <select name="zone" id="zone_select" class="form-select">
                    <option value="" selected disabled>Choisir une zone</option>
                    @foreach ($zones as $item)
                        @if ($item->colis_count >= 1)
                            <option value="{{ $item->id_Z }}">{{ $item->zonename }} ({{ $item->colis_count }} Colis Recu)
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
        </div>
        <div class="card" id="cardLiv" style="display: none">

            <button id="btn" class="btn btn-warning" style="display:block;margin:0px auto"></button>
            <div class="card-body">
                <select name="id_Liv" id="id_Liv" class="form-select">
                    @foreach ($zones as $item)
                        <option value="{{ $item->id_Z }}">{{ $item->zonename }} ({{ $item->colis_count }})</option>
                    @endforeach
                </select>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="display:block;margin:0px auto"><i
                        class="fa fa-plus"></i> Creer bon de distribution</button>
            </div>


        </div>
    </form>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cardLiv = document.getElementById('cardLiv');
            const btn = document.getElementById('btn');
            const zoneSelect = document.getElementById('zone_select');
            const liv = document.getElementById('id_Liv');
            var zones = @json($zones);
            console.log(zones);
            zoneSelect.addEventListener('change', function() {
                cardLiv.style.display = 'block'
                // Get the selected zone ID
                const selectedZoneId = this.value;
                let data = zones.find(ele => ele.id_Z == selectedZoneId)
                btn.innerHTML = `Cette zone a   ${data.colis_count} colis recus`
                console.log(data);

                liv.innerHTML = '';
                data.livreurs.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.id_Liv;
                    option.textContent = city.nomcomplet;
                    liv.appendChild(option);
                });
            });
        });
    </script>
@endsection
