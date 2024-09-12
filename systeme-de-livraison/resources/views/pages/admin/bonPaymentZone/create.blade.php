@extends('layouts.admin.admin')
@section('breads')
<x-breadcrumb :breads="$breads" />

@endsection
@section('content')
<form action="{{ route('bon.payment.zone.index') }}">
  <div class="card">
    <div class="card-header">
      <h5 class="card-title" >Ajouter Bon de payment pour zone </h5>
    </div>
    <div class="card-body">
        <select name="zone" id="zone_select" class="form-select" >
          <option value="" selected disabled>Choisir une zone</option>
          @foreach ($zones as $item )
            <option value="{{ $item->id_Z }}">{{ $item->zonename }} ({{ $item->colis_count }} Colis livrer non paye)</option>
          @endforeach
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
      console.log(zones);
      zoneSelect.addEventListener('change', function() {
        cardLiv.style.display='block'
        const selectedZoneId = this.value;
        let data= zones.find(ele=>ele.id_Z==selectedZoneId)
        
          console.log(data);
          
          liv.innerHTML = '';
            data.livreurs.forEach(city => {
              console.log(city);
                const option = document.createElement('option');
                option.value = city.id_Liv;
                option.textContent = city.nomcomplet+ ' (Colis non pays)'
                liv.appendChild(option)
            });
  });
  });
</script>
@endsection