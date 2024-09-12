@extends('layouts.admin.admin')
@section('breads')
    <x-breadcrumb :breads="$breads" />
@endsection
@section('content')
    <form action="{{ route('bon.retour.zone.index') }}">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Ajouter Bon de Retour Zone </h5>
            </div>

            <div class="card-body">
                <select name="client" id="zone_select" class="form-select">
                    <option value="" selected disabled>Choisir zone</option>
                    @foreach ($zones as $item)
                        @if ($item->colis_count >= 1)
                            <option value="{{ $item->id_Z }}">{{ $item->zonename }} ({{ $item->colis_count }} Colis retourné)
                            </option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="display:block;margin:0px auto"><i
                        class="fa fa-plus"></i> Creer bon de Retour Zone</button>
            </div>
        </div>
      
    </form>
  
@endsection
