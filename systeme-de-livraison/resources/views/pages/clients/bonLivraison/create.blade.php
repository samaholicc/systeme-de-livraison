@extends('layouts.client.admin')
@section('breads')
    <x-breadcrumb :breads="$breads" />
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">Ajouter Bon de livraison<!--5-->
            </h5>
        </div>

        <div class="card-body">

            <button class="btn btn-outline-primary " style="display:block;margin:0px auto">Vous avez
                <b>({{ $colis }})</b> nouveaux colis </button>

        </div>

        <div class="card-footer">
            @if ($colis !== 0)
                <a class="btn btn-primary" style="display:block;margin:0px auto" href="{{ route('bon.livraison.index') }}"><i
                        class="fa fa-plus"></i> Creer bon de livraison</a>
            @else
                <a class="btn btn-primary" style="display:block;margin:0px auto" href="{{ route('colis.create') }}"><i
                        class="fa fa-plus"></i> Ajouter Colis</a>
            @endif

        </div>

    </div>
@endsection
