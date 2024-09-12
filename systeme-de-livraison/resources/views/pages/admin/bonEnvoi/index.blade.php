@extends('layouts.admin.admin')
@section('breads')
<x-breadcrumb :breads="$breads" />

@endsection
@section('content')
 


  <div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title"><b>Date de creation:</b> {{ $bonLivraison->created_at }}</h5>
                </div>
            </div>
        </div>
    </div>
  </div>

<div class="container-fluid mt-4">
  <form action="{{ route('bon.envoi.update.all',$bonLivraison->id_BE) }}" method="POST">
  @csrf
  <div class="card">
    <div class="card-header">
      <h5 class="card-title"><b>List des nouveaux colis</b></h5>
    </div>
    <div class="card-body">
      
      <table  class="table table-striped    dataTable " >
        <thead>
          <tr role="row">
            <th >
              <input type="checkbox" id="checkAll">
            </th>
            <th >Code d envoi</th>
            <th >Destinataire</th>
            <th >Date de creation</th>
            <th >Prix</th>
            <th >Ville</th>
            <th >Actions</th>
          </tr>
        </thead>
        <tbody>

          @foreach ($colis as $i=>$item )
          <tr id="new-parcel-Autedelenitidelect" role="row" class="odd">
            <td><input class="table-add-checkbox" name="colis[{{ $i }}]" value="{{ $item->id }}" type="checkbox" ></td>
            <td><b>{{ $item->code_d_envoi }}</b></td>
            <td>{{ $item->destinataire }}</td>
            <td>{{ $item->created_at }}</td>
            <td>{{ $item->prix }}</td>
            <td>{{ $item->villename }}</td>
            <td>
              
              <a href="{{ route('bon.envoi.update',['id'=>$item->id,'id_BE'=>$bonLivraison->id_BE]) }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></a>
            </td>
          </tr>
          @endforeach

        </tbody>
      </table>
    </div>
    <div class="card-footer row">  
      <div class="search-bar col-8">
       
          <input type="text" id="query" class="form-control"   name="query" placeholder="Click Ici avant de scanner le barcode " 
          title="Enter search keyword" autocomplete="off">
       
      </div>
      <div class="col-4 ">
        <div class="text-right float-end">

          <button type="submit" id="btnSubmit
          " class="btn btn-primary" ><i class="fa fa-plus"></i> Ajouter</button>
        </div>
      </div>
    </div>
  </div>
</form>
</div>

<div class="container-fluid mt-4">
  <form action="{{ route('bon.envoi.updateDelete.all',$bonLivraison->id_BE) }}" method="POST">
  @csrf
  <div class="card">
    <div class="card-header">
      <h5 class="card-title"><b>List des colis ajoutes</b></h5>
    </div>
    <div class="card-body">
      <table class="table table-striped dataTable" >
        <thead>
          <tr role="row">
            <td>

              <input type="checkbox" id="checkDeleteAll">
            </td>
            <th >Code d envoi</th>
            <th>Destinataire</th>
            <th>Date de creation</th>
            <th >Prix</th>
            <th >Ville</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          {{-- @dd($bonLivraison->colis) --}}
          @foreach ($colisBon as $i=>$item )
            <tr id="new-parcel-Autedelenitidelect" role="row" class="odd">
            <td><input class="table-delete-checkbox" name="colisDelete[{{ $i }}]" value="{{ $item->id }}" type="checkbox" ></td>

              <td><b>{{ $item->code_d_envoi }}</b></td>
              <td>{{ $item->destinataire }}</td>
              <td>{{ $item->created_at }}</td>
              <td>{{ $item->prix }}</td>
              <td>{{ $item->villename }}</td>
              <td>
                <a href="{{ route('bon.envoi.updateDelete',['id'=>$item->id,'id_BE'=>$bonLivraison->id_BE]) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="card-footer row"> 
      <div class="search-bar col-8">
       
        <input type="text" id="query" class="form-control"   name="query" placeholder="Click Ici avant de scanner le barcode " 
        title="Enter search keyword" autocomplete="off">
      
      </div>
      <div class="col-4 ">
        <div class="text-right float-end">

          <button type="submit" id="btnSubmit
          " class="btn btn-danger" ><i class="fa fa-times"></i> annuler</button>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
  

<script>
  // JavaScript code to handle checkbox click event
  document.addEventListener('DOMContentLoaded', function () {
      const checkAll = document.getElementById('checkAll');
      const checkboxes = document.querySelectorAll('.table-add-checkbox');

      checkAll.addEventListener('change', function () {
          checkboxes.forEach(checkbox => {
              checkbox.checked = checkAll.checked;
          });
      });

      const btnSubmit = document.getElementById('btnSubmit');
      btnSubmit.addEventListener('click', function () {
          const checkedIds = [];
          checkboxes.forEach(checkbox => {
              if (checkbox.checked) {
                  checkedIds.push(checkbox.value);
              }
          });

      });
  });
  document.addEventListener('DOMContentLoaded', function () {
      const checkAll = document.getElementById('checkDeleteAll');
      const checkboxes = document.querySelectorAll('.table-delete-checkbox');

      checkAll.addEventListener('change', function () {
          checkboxes.forEach(checkbox => {
              checkbox.checked = checkAll.checked;
          });
      });

      const btnSubmit = document.getElementById('btnSubmit');
      btnSubmit.addEventListener('click', function () {
          const checkedIds = [];
          checkboxes.forEach(checkbox => {
              if (checkbox.checked) {
                  checkedIds.push(checkbox.value);
              }
          });

      });
  });
</script>
@endsection