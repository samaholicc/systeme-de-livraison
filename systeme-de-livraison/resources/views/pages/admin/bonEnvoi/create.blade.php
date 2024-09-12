@extends('layouts.admin.admin')
@section('breads')
    <x-breadcrumb :breads="$breads" />
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Ajouter Bon d'envoi </h5>
        </div>
        <form action="{{ route('bon.envoi.index') }}">

            <div class="card-body">
                <select name="zone" id="" class="form-select">
                    @foreach ($zones as $item)
                        @if ($item->colis_count >= 1)
                            <option value="{{ $item->id_Z }}">{{ $item->zonename }} ({{ $item->colis_count }})</option>
                        @endif
                    @endforeach
                </select>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary" style="display:block;margin:0px auto"><i
                        class="fa fa-plus"></i> Creer bon de'envoi</button>
            </div>
        </form>


    </div>
@endsection
