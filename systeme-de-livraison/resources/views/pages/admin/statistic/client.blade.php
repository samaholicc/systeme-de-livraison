@extends('layouts.admin.admin')
@section('breads')
<x-breadcrumb :breads="$breads" />

@endsection
@section('filter')
<form method="GET" id="formFilter" action="{{ route('admin.statistic.client') }}">
  <div class="form-group row">
    <div class="col-md-3">

      <select name="client_id" id="client_id" class="form-control " onchange="this.form.submit()">
          <option value="">All Clients</option>
          @foreach($clients as $client)
              <option value="{{ $client->id_Cl }}" {{ request('client_id') == $client->id_Cl ? 'selected' : '' }}>
                  {{ $client->nomcomplet }} <!-- Adjust attribute to match your client's name attribute -->
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
           <i class="fa fa-chevron-right"></i> Factures Statistiques
        </h1>
      </div>
    </div>
    <div class="card-body">
      <table class="table table-striped table-analytics">
        <thead>
          <tr>
            <th>Statut</th>
            <th>Factures</th>
            <th>Colis</th>
            <th>Total Crbt</th>
            <th>Frais</th>
            <th>Remise</th>
            <th>Autres frais</th>
            <th>Benefice</th>
            <th>Total</th>
          </tr>
        </thead>	
        <tbody>
          @if ($facturesBrouillon)
            <tr>
              <td><b>Brouillon</b></td>
              <td>{{ $facturesBrouillon->factures_count ?? 0 }}</td>
              <td>{{ $facturesBrouillon->colis_count ?? 0 }}</td>
              <td>{{ $facturesBrouillon->prix_total ?? 0 }} Dhs</td>
              <td><b>-</b>{{ $facturesBrouillon->frais ?? 0 }} Dhs</td>
              <td><b>+</b>{{ $facturesBrouillon->remis ?? 0 }} Dhs</td>
              <td><b>-</b>{{ $facturesBrouillon->frais_total ?? 0 }} Dhs</td>
              <td><b>{{ $facturesBrouillon->frais + $facturesBrouillon->frais_total ?? 0 }} Dhs</b></td>
              <td>{{ $facturesBrouillon->prix_total - ($facturesBrouillon->frais ?? 0) - ($facturesBrouillon->frais_total ?? 0) }} Dhs</td>
            </tr>
          @else
            <tr>
              <td><b>Brouillon</b></td>
              <td>0</td>
              <td>0</td>
              <td>0 Dhs</td>
              <td><b>-</b>0 Dhs</td>
              <td><b>+</b>0 Dhs</td>
              <td><b>-</b>0Dhs</td>
              <td><b>0 Dhs</b></td>
              <td>0 Dhs</td>
            </tr>
          @endif
          @if ($facturesEnregistre)
            <tr>
              <td><b>Enregistre</b></td>
              <td>{{ $facturesEnregistre->factures_count ?? 0 }}</td>
              <td>{{ $facturesEnregistre->colis_count ?? 0 }}</td>
              <td>{{ $facturesEnregistre->prix_total ?? 0 }} Dhs</td>
              <td><b>-</b>{{ $facturesEnregistre->frais ?? 0 }} Dhs</td>
              <td><b>+</b>{{ $facturesEnregistre->remis ?? 0 }} Dhs</td>
              <td><b>-</b>{{ $facturesEnregistre->frais_total ?? 0 }} Dhs</td>
              <td><b>{{ $facturesEnregistre->frais + $facturesEnregistre->frais_total ?? 0 }} Dhs</b></td>
              <td>{{ $facturesEnregistre->prix_total - ($facturesEnregistre->frais ?? 0) - ($facturesEnregistre->frais_total ?? 0) }} Dhs</td>
            </tr>
          @else
            <tr>
              <td><b>Enregistre</b></td>
              <td>0</td>
              <td>0</td>
              <td>0 Dhs</td>
              <td><b>-</b>0 Dhs</td>
              <td><b>+</b>0 Dhs</td>
              <td><b>-</b>0Dhs</td>
              <td><b>0 Dhs</b></td>
              <td>0 Dhs</td>
            </tr>
          @endif
          @if ($facturesPaye)
            <tr>
              <td><b>Paye</b></td>
              <td>{{ $facturesPaye->factures_count ?? 0 }}</td>
              <td>{{ $facturesPaye->colis_count ?? 0 }}</td>
              <td>{{ $facturesPaye->prix_total ?? 0 }} Dhs</td>
              <td><b>-</b>{{ $facturesPaye->frais ?? 0 }} Dhs</td>
              <td><b>+</b>{{ $facturesPaye->remis ?? 0 }} Dhs</td>
              <td><b>-</b>{{ $facturesPaye->frais_total ?? 0 }} Dhs</td>
              <td><b>{{ $facturesPaye->frais + $facturesPaye->frais_total ?? 0 }} Dhs</b></td>
              <td>{{ $facturesPaye->prix_total - ($facturesPaye->frais ?? 0) - ($facturesPaye->frais_total ?? 0) }} Dhs</td>
            </tr>
          @else
            <tr>
              <td><b>Paye</b></td>
              <td>0</td>
              <td>0</td>
              <td>0 Dhs</td>
              <td><b>-</b>0 Dhs</td>
              <td><b>+</b>0 Dhs</td>
              <td><b>-</b>0Dhs</td>
              <td><b>0 Dhs</b></td>
              <td>0 Dhs</td>
            </tr>
          @endif
         
          @if ($total)
            <tr>
              <td><b>Total</b></td>
              <td>{{ $total->factures_count ?? 0 }}</td>
              <td>{{ $total->colis_count ?? 0 }}</td>
              <td>{{ $total->prix_total ?? 0 }} Dhs</td>
              <td><b>-</b>{{ $total->frais ?? 0 }} Dhs</td>
              <td><b>+</b>{{ $total->remis ?? 0 }} Dhs</td>
              <td><b>-</b>{{ $frais_total ?? 0 }} Dhs</td>
              <td><b>{{ $total->frais + $frais_total  }} Dhs</b></td>
              <td>{{ $total->prix_total - ($total->frais ?? 0) - ($frais_total ?? 0) }} Dhs</td>
            </tr>
          @else
            <tr>
              <td><b>Total</b></td>
              <td>0</td>
              <td>0</td>
              <td>0 Dhs</td>
              <td><b>-</b>0 Dhs</td>
              <td><b>+</b>0 Dhs</td>
              <td><b>-</b>0Dhs</td>
              <td><b>0 Dhs</b></td>
              <td>0 Dhs</td>
            </tr>
          @endif
         
        </tbody>	
      </table>
    </div>
  </div>
  
</div>


@endsection

