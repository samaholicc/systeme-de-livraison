@extends('layouts.admin.admin')
@section('breads')
<x-breadcrumb :breads="$breads" />

@endsection
@section('content')
<form action="{{ route('bon.payment.livreur.index') }}">
  <div class="card">
    <div class="card-header">
      <h5 class="card-title">Ajouter Bon de Payment Livreur </h5>
    </div>
    
    <div class="card-body">
        <select name="zone" id="zone_select" class="form-select" >
          <option value="" selected disabled>Choisir une zone</option>
          @foreach ($zones as $item )
            <option value="{{ $item->id_Z }}">{{ $item->zonename }} ({{ $item->colis_count }} Colis livrer non paye)</option>
          @endforeach
        </select>
    </div>
  </div>
  <div class="card" id="cardLiv" style="display: none">
    
    <button id="btn"  class="btn btn-warning" style="display:block;margin:0px auto">Veuiller choisir un livreur</button>
    <div class="card-body">
        <select name="id_Liv" id="id_Liv" class="form-select" >
          
        </select>
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary" style="display:block;margin:0px auto"><i class="fa fa-plus"></i> Creer bon de payment</button>
    </div>
    
    
  </div>
</form>
<script>
  document.addEventListener('DOMContentLoaded', function() {
      const cardLiv = document.getElementById('cardLiv');
      const zoneSelect = document.getElementById('zone_select');
      const liv = document.getElementById('id_Liv');
      var zones = @json($zones);
      zoneSelect.addEventListener('change', function() {
        cardLiv.style.display='block'
        const selectedZoneId = this.value;
        let data= zones.find(ele=>ele.id_Z==selectedZoneId)
        
          liv.innerHTML = '';
                  data.livreurs.forEach(liv_item => {
                      const option = document.createElement('option');
                      option.value = liv_item.id_Liv;
                      option.textContent = liv_item.nomcomplet+ ' (Colis '+liv_item.colis_livre+' non pays)'
                      liv.appendChild(option)
                  });
  });
  });
</script>
@endsection