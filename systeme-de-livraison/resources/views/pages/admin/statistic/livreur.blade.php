@extends('layouts.admin.admin')
@section('breads')
<x-breadcrumb :breads="$breads" />

@endsection
@section('filter')
<form method="GET" id="formFilter" action="{{ route('admin.statistic.livreur') }}">
  <div class="form-group row">
    <div class="col-md-3">

      <select name="liv_id" id="liv_id" class="form-control " onchange="this.form.submit()">
        <option value="">All Livreurs</option>
        @foreach($livs as $liv)
            <option value="{{ $liv->id_Liv }}" {{ request('liv_id') == $liv->id_Liv ? 'selected' : '' }}>
                {{ $liv->nomcomplet }} <!-- Adjust attribute to match your client's name attribute -->
            </option>
        @endforeach
    </select>
    </div>
      <div class="col-md-3">
          <select class="form-control" id="date_filter" name="date_filter" onchange="this.form.submit()">
            <option disabled selected>Filtrer avec : </option>
              <option value="">Depuis le lancement</option>
              <option value="today" {{ request('date_filter') == 'today' ? 'selected' : '' }}>Aujourd'hui</option>
              <option value="yesterday" {{ request('date_filter') == 'yesterday' ? 'selected' : '' }}>Hier</option>
              <option value="last_7_days" {{ request('date_filter') == 'last_7_days' ? 'selected' : '' }}>7 derniers jours</option>
              <option value="last_30_days" {{ request('date_filter') == 'last_30_days' ? 'selected' : '' }}>30 derniers jours</option>
              <option value="this_month" {{ request('date_filter') == 'this_month' ? 'selected' : '' }}>Ce mois</option>
              <option value="last_month" {{ request('date_filter') == 'last_month' ? 'selected' : '' }}>Le mois dernier</option>
              <option value="custom_range" {{ request('date_filter') == 'custom_range' ? 'selected' : '' }}>Plage personnalisée</option>
          </select>
      </div>
      <div class="col-md-3">
          <input type="date" class="form-control" name="start_date" placeholder="Date de début" value="{{ request('start_date') }}" 
                 {{ request('date_filter') != 'custom_range' ? 'disabled' : '' }}>
      </div>
      <div class="col-md-3">
          <input type="date" class="form-control" name="end_date" placeholder="Date de fin" value="{{ request('end_date') }}" 
                 {{ request('date_filter') != 'custom_range' ? 'disabled' : '' }}>
      </div>
  </div>
</form>
@endsection
@section('content')
<style>
  table{
    color: #14a1f3
  }
</style>
<div class="container">
  <div class="row">
    @foreach ($colisStatus as $item )
      
    <div class="col-md-3 mb-4">
      <a href="#" class="card hover-elevate-up shadow-sm parent-hover">
        <div class="card-body d-flex justify-content-between align-items">
            <span class="svg-icon fs-1">
              <svg xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path fill="#87b6fc"
                      d="M50.7 58.5L0 160H208V32H93.7C75.5 32 58.9 42.3 50.7 58.5zM240 160H448L397.3 58.5C389.1 42.3 372.5 32 354.3 32H240V160zm208 32H0V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V192z" />
              </svg>
            </span>
    
            <span class="ms-3 text-gray-700 parent-hover-primary fs-6 fw-bold">
                <div class="d-flex flex-column">
                  <span class="me-2">{{ $item->status }}</span>
                  <span class="me-2 text-end">{{ $item->total }}</span>
                </div>
            </span>
        </div>
      </a>
    </div>
    @endforeach
  </div>

  
  <div class="card mt-5">
    <div class="card-header">
      <div class="card-title">
        <h1 class="main-box-title" style="margin-bottom:1%;margin-top:1%;">
          <i class="fas fa-chart-line"></i> 
          <i class="fa fa-chevron-right"></i> Statistiques 
          <i class="fa fa-chevron-right"></i> Bons de payment (<b>Pour livreur</b>)
        </h1>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-striped table-analytics">
        <thead>
          <tr>
            <th>Statut</th>
            <th>Bon de payement</th>
            <th>Colis</th>
            <th>Total Crbt</th>
            <th>Frais</th>
            <th>Total</th>
          </tr>
        </thead>	
        <tbody>
          @if ($livBonAttent)
              
          <tr>
            <td><b>Attente &nbsp;Paiement</b></td>
            <td>{{ $livBonAttent->bons_count }} </td>
            <td>{{ $livBonAttent->colis_count }} </td>
            <td>{{ $livBonAttent->prix_total }} Dhs</td>
            <td><b>-</b>{{ $livBonAttent->frais_total }} Dhs</td>
            <td>{{ $livBonAttent->prix_total - $livBonAttent->frais_total }} Dhs</td>
          </tr>
          @else
          <tr>
            <td><b>Attente &nbsp;Paiement</b></td>
            <td>0 </td>
            <td>0</td>
            <td>0 Dhs</td>
            <td>0 Dhs</td>
            <td>0 Dhs</td>
          </tr>
              
          @endif
          @if ($livBonPaye)
              
          <tr>
            <td><b>Paye</b></td>
            <td>{{ $livBonPaye->bons_count }} </td>
            <td>{{ $livBonPaye->colis_count }} </td>
            <td>{{ $livBonPaye->prix_total }} Dhs</td>
            <td><b>-</b>{{ $livBonPaye->frais_total }} Dhs</td>
            <td>{{ $livBonPaye->prix_total - $livBonPaye->frais_total }} Dhs</td>
          </tr>
          @else
          <tr>
            <td><b>Paye</b></td>
            <td>0 </td>
            <td>0</td>
            <td>0 Dhs</td>
            <td>0 Dhs</td>
            <td>0 Dhs</td>
          </tr>
              
          @endif
          @if ($livBonTotal)
              
          <tr>
            <td><b>Total</b></td>
            <td>{{ $livBonTotal->bons_count }} </td>
            <td>{{ $livBonTotal->colis_count }} </td>
            <td>{{ $livBonTotal->prix_total }} Dhs</td>
            <td><b>-</b>{{ $livBonTotal->frais_total }} Dhs</td>
            <td>{{ $livBonTotal->prix_total - $livBonTotal->frais_total }} Dhs</td>
          </tr>
          @else
          <tr>
            <td><b>Total</b></td>
            <td>0 </td>
            <td>0</td>
            <td>0 Dhs</td>
            <td>0 Dhs</td>
            <td>0 Dhs</td>
          </tr>
              
          @endif
          
        </tbody>	
      </table>
    </div>
  </div>
  
</div>


@endsection

