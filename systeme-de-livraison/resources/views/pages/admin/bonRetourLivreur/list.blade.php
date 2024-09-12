@extends('layouts.admin.admin')
@section('breads')
    <x-breadcrumb :breads="$breads" />
@endsection
@section('content')
    <div class="modal  fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content rounded">
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1"
                                    transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                    </div>
                </div>
                <div id="modal-body" class="modal-body scroll-y px-5 px-lg-5 pt-0 pb-15">


                </div>
            </div>
        </div>
    </div>

    <div class="card card-flush">
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <div class="card-title">
                <!-- Search and filter options -->
                <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                    <input type="text" data-kt-ecommerce-product-filter="search"
                        class="form-control form-control-solid w-250px ps-14" placeholder="Search Product" />
                </div>
            </div>
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <div class="w-100 mw-150px">
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                        data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                        <option></option>
                        <option value="all">All</option>
                        <option value="nouveau">Nouveau</option>
                        <option value="recu">recu</option>
                    </select>
                </div>
                <a href="{{ route('bon.retour.livreur.create') }}" class="btn btn-primary">Ajouter Bon Retour Livreur</a>
            </div>
        </div>

        <div class="card-body pt-0">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">

                        <th class="min-w-200px">reference</th>
                        <th class="min-w-70px">Zone</th>
                        <th class="min-w-100px">Livreurs</th>
                        <th class="min-w-100px">Date de creation</th>
                        <th class="min-w-100px">statut</th>
                        <th class="min-w-100px">colis</th>
                        <th class="min-w-70px">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($bons as $index => $item)
                        <tr>
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href="" class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                            data-kt-ecommerce-product-filter="code">{{ $item->reference }}</a>
                                    </div>
                                </div>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold" data-kt-ecommerce-product-filter="zonename">{{ $item->zone }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="nomcomplet">{{ $item->liv_nomcomplet }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold" data-kt-ecommerce-product-filter="date">{{ $item->created_at }}</span>
                            </td>

                            <td class="pe-0">
                                <span class="fw-bold" data-order="{{ $item->status }}"
                                    data-kt-ecommerce-product-filter="status">{{ $item->status }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="colis_count">{{ $item->colis_count }}</span>
                            </td>

                            <td>
                                <a href="#" class="btn btn-sm btn-light btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>
                                </a>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-250px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a class="btn" onclick="openModal('{{ $item->id_BRL }}')"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_new_target"><i
                                                class="fa fa-eye"></i>Details du bon</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a class="btn"
                                            href="{{ route('bon.retour.livreur.exportColis', $item->id_BRL) }}"><i
                                                class="far fa-file-excel"></i>Exporter les colis</a>
                                    </div>
                                    @if ($item->status != 'Recu')
                                        <div class="menu-item px-3">
                                            <form action="{{ route('bon.retour.livreur.recu', $item->id_BRL) }}"
                                                method="post">
                                                @csrf
                                                <button type="submit"class="btn">
                                                    <i class="fa fa-check"></i>bon bien recu
                                                </button>
                                            </form>
                                        </div>
                                        @else
                                        <div class="menu-item px-3">
                                            <form action="{{ route('bon.retour.livreur.nonrecu', $item->id_BRL) }}"
                                                method="post">
                                                @csrf
                                                <button type="submit"class="btn">
                                                    <i class="fa fa-check"></i>non recu
                                                </button>
                                            </form>
                                        </div>
                                    @endif
                                    @if ($item->status == 'Nouveau')
                                        <div class="menu-item px-3">
                                                <a href="{{ route('bon.retour.livreur.index',$item->id_BRL) }}" class="btn">
                                                    <i class="fa fa-pen"></i>Modifier Le Bon
                                                </a>
                                        </div>
                                    @endif
                                    <div class="menu-item px-3">
                                        <a class="btn"
                                            href="{{ route('bon.retour.livreur.getPdf', $item->id_BRL) }}"><i
                                                class="far fa-file-pdf"></i>Voir en Pdf</a>
                                    </div>
                                    {{-- @if ($item->colis->count() == 0)
                                        <div class="menu-item  text-hover-danger px-3">
                                            <a href="{{ route('bon.retour.livreur.destroy', $item->id_BRL) }}"
                                                class="btn">
                                                <i class="fa fa-trash"></i>Delete
                                            </a>
                                        </div>
                                    @endif --}}
                                    @if ($item->colis->count() == 0)
  <div class="menu-item text-hover-danger px-3">
    <form action="{{ route('bon.retour.livreur.destroy', $item->id_BRL) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
      @csrf
      @method('DELETE')
      <button type="submit" class="btn">
        <i class="fa fa-trash"></i> Delete
      </button>
    </form>
  </div>
@endif


                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            // Filter by search input
            $('[data-kt-ecommerce-product-filter="search"]').on('input', function() {
                var searchText = $(this).val().toLowerCase();
                filterTable(searchText);
            });

            // Filter by status select
            $('[data-kt-ecommerce-product-filter="status"]').on('change', function() {
                var status = $(this).val();
                filterTableByStatus(status);
            });

            function filterTable(searchText) {
                $('#kt_ecommerce_products_table tbody tr').each(function() {
                    var code = $(this).find('[data-kt-ecommerce-product-filter="code"]').text()
                    .toLowerCase();
                    var colis_count = $(this).find('[data-kt-ecommerce-product-filter="colis_count"]')
                    .text().toLowerCase();
                    var zonename = $(this).find('[data-kt-ecommerce-product-filter="zonename"]').text()
                        .toLowerCase();
                    var status = $(this).find('[data-kt-ecommerce-product-filter="status"]').text()
                        .toLowerCase();
                    var date = $(this).find('[data-kt-ecommerce-product-filter="date"]').text()
                    .toLowerCase();
                    var nomcomplet = $(this).find('[data-kt-ecommerce-product-filter="nomcomplet"]').text()
                        .toLowerCase();
                    if (nomcomplet.includes(searchText) ||
                        colis_count.includes(searchText) ||
                        zonename.includes(searchText) ||
                        status.includes(searchText) ||
                        date.includes(searchText) ||
                        code.includes(searchText)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }

            function filterTableByStatus(status) {
                if (status === 'all') {
                    $('#kt_ecommerce_products_table tbody tr').show();
                } else {
                    $('#kt_ecommerce_products_table tbody tr').each(function() {
                        var rowStatus = $(this).find('[data-kt-ecommerce-product-filter="status"]').text()
                            .trim().toLowerCase();
                        if (rowStatus === status) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                }
            }
        });

        var cl = @json($cl);
        var etat = @json($etat);

        function openModal(id) {
            // Set the default values or update them based on the clicked item
            var modal = document.getElementById('modal-body');
            let bons = @json($bons);
            console.log(bons);
            let BD = bons.find(ele => ele.id_BRL == id)
            console.log(BD);
            let text = ''
            text = `<div class="row">
    <div class="dn-inv-infos-box col-6">
      <b>Bon d envoie : </b> ${BD.id_BRL}<br>
      <b>Date :</b>${BD.created_at}<br>
      <b>Colis :</b> ${BD.colis_count}<br>
      <b>Total :</b> ${BD.total_prix} Dhs
    </div>
  </div>


  <div >
    <table class="table table-striped table-bordered    mb-0" id='infoColi'>
    <thead>
    <tr class="dn-inv-table-head">
      <th>N°</th>
      <th>Code d envoi</th>
      <th>Telephone</th>
      <th>Ville</th>
      <th>Adresse</th>
      <th>Commentaire</th>
      <th>Status</th>
      <th>Crbt</th>
    </tr>
    </thead>
    <tbody>

    `
            BD.colis.forEach(element => {

                text += `
          <tr>
                  <td>${element.id}</td>
                  <td>${element.code_d_envoi}</td>
                  <td>${element.telephone}</td>
                  <td>${element.ville.villename}</td>
                  <td>${element.adresse}  </td>
                  <td>${element.commentaire}  </td>
            <td ><span class="badge" style="color:#835476; border:1px solid #835476">${element.status}</span></td>
                  <td>${element.prix} Dhs</td>
              </tr>`
            });

            text += `           
              <tr class="dn-inv-table-body">
              <td colspan="6" style="text-align:right"><b>Total</b></td>
              <td>${BD.total_prix} Dhs</td>
            </tr>
            </tbody>
            </table>
          </div>`;


            modal.innerHTML = text;
            $('#infoColi tbody tr').each(function() {
                var $thisRow = $(this);
                var Status = $(this).find('td:eq(6) span').text().trim();
                cl.forEach(element => {
                    if (Status === element.nom) {
                        $thisRow.find('td:eq(6) span').css('color', element
                            .couleur);
                        $thisRow.find('td:eq(6) span').css('border', '1px solid' + element
                            .couleur);
                    }
                });

            });
        }
    </script>
@endsection
