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
  <form action="{{ route('factures.update.all',$bonLivraison->id_F) }}" method="POST">
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
            <th >Code d'envoi</th>
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
              
              <a href="{{ route('factures.update',['id'=>$item->id,'id_F'=>$bonLivraison->id_F]) }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i></a>
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

          <button type="submit" id="btnSubmit" class="btn btn-primary" ><i class="fa fa-plus"></i> Ajouter</button>
        </div>
      </div>
    </div>
  </div>
</form>
</div>

<div class="container-fluid mt-4">
  <form action="{{ route('factures.updateDelete.all',$bonLivraison->id_F) }}" method="POST">
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
                <a href="{{ route('factures.updateDelete',['id'=>$item->id,'id_F'=>$bonLivraison->id_F]) }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a>
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

          <button type="submit" id="btnSubmit2" class="btn btn-danger" ><i class="fa fa-times"></i> annuler</button>
        </div>
      </div>
    </div>
  </div>
</form>
</div>
<div class="container-fluid">
  <div class="row">
      <div class="col-12">
          <div class="card">
              <div class="card-header">
                  <h5 class="card-title"><b>Autres frais</b><!--5-->
              </h5></div>

              <div class="text-right float-end text-end" style="margin-right: 30px">

                <button  class="btn btn-primary" onclick="ajouterFrais()"><i class="fa fa-plus"></i> Ajouter</button>
              </div>
              <div class="card-body">
                  
                <div class="row">
                  <div class="col-xs-12 col-sm-12">
                    <form action="{{ route('factures.frais.store',$bonLivraison->id_F) }}" method='post'>
                      @csrf
                    <table class="table table-striped   " >
                      <thead>
                        <tr role="row"><th class="sorting" tabindex="0" aria-controls="inv_extra_fees_table" rowspan="1" colspan="1" aria-label="Designation: activate to sort column ascending" style="width: 205.859px;">Designation</th><th class="sorting" tabindex="0" aria-controls="inv_extra_fees_table" rowspan="1" colspan="1" aria-label="Quantite: activate to sort column ascending" style="width: 163.469px;">Quantite</th><th class="sorting" tabindex="0" aria-controls="inv_extra_fees_table" rowspan="1" colspan="1" aria-label="Prix unitaire: activate to sort column ascending" style="width: 213.156px;">Prix unitaire</th><th class="sorting" tabindex="0" aria-controls="inv_extra_fees_table" rowspan="1" colspan="1" aria-label="Total: activate to sort column ascending" style="width: 108.625px;">Total</th><th class="sorting" tabindex="0" aria-controls="inv_extra_fees_table" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 140.906px;">Actions</th></tr>
                      </thead>
                      <tbody id="tbody">
                        @foreach ($frais as $item )
                        <tr id="add-new-extra">
                          <td ><input readonly class='form-control' type='text' value="{{ $item->title }}" /></td>
                          <td ><input readonly type='number'class='form-control' value="{{ $item->quntite }}" /></td>
                          <td ><input readonly type='number' class='form-control'  value="{{ $item->prix }}" /></td>
                          <td >{{ $item->quntite*$item->prix }}DH</td>
                          <td  ><a href="{{ route('factures.frais.delete',$item->id_Fr) }}" type='submit' class="btn btn-sm btn-danger"><i class="fa fa-times"></i></a></td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    </form>
          
                  </div>
                </div>
              </div>
          </div>
      </div>
  </div>
</div>

<script>
function generateRandomString(length) {
  const randomValues = new Uint8Array(length);
  window.crypto.getRandomValues(randomValues);
  const randomString = Array.from(randomValues).map(x => x.toString(16).padStart(2, '0')).join('');
  return randomString;
}


// Usage
function ajouterFrais(){
  var tbody=document.getElementById('tbody')
  const randomString = generateRandomString(10);

      var tr=`
    
      <tr id="add-new-extra">
            <td ><input class='form-control' type='text' name='title' value="" /></td>
            <td ><input type='number'class='form-control' name='quntite' value="1" /></td>
            <td ><input type='number' class='form-control' name='prix' value="0" /></td>
            <td ></td>
            <td  ><input type='submit' class='btn btn-info'  value="Ajouter" /></td>
            </tr>
      `
        tbody.innerHTML=tr
    
  }
  
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

      const btnSubmit = document.getElementById('btnSubmit2');
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