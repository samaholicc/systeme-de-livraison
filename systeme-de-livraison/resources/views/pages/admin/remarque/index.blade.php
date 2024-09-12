@extends('layouts.admin.admin')
@section('breads')
    <x-breadcrumb :breads="$breads" />
@endsection
@section('content')
    <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
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

                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <form id="kt_modal_new_Rec_form" method="POST" class="form" action="{{ route('remarque.store') }}">
                        @csrf
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">Nouvelle Remarque</h1>
                        </div>
                        <div class="row">
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Type</span>
                                </label>
                                <select name="type" id="type" class="form-control form-control-solid">
                                    <option value="Information"> Information </option>
                                    <option value="Important"> Important </option>
                                    <option value="Urgence"> Urgence </option>
                                </select>
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Cible</span>
                                </label>
                                <select name="cible" id="cible" class="form-control form-control-solid">
                                    <option value="Vendeur"> Vendeur </option>
                                    <option value="Livreur"> Livreur </option>
                                    <option value="Moderateur"> Moderateur </option>
                                    <option value="Equipe de suivi"> Equipe de suivi </option>
                                </select>
                            </div>
                            <div class=" col-md-12 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Section</span>
                                </label>
                                <select name="section" id="section" class="form-control form-control-solid">
                                    <option value="Accueil"> Accueil </option>
                                    <option value="Reclamations"> Reclamations </option>
                                    <option value="List Colis"> List Colis </option>
                                    <option value="Bons de livraison"> Bons de livraison </option>
                                    <option value="Bon de retour"> Bon de retour </option>
                                    <option value="Factures"> Factures </option>
                                </select>
                            </div>
                            <div class=" col-md-12 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Remarque</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Remarque"
                                    id="remarque" name="remarque" />
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_cancel"
                                class="btn btn-light me-3">Cancel</button>
                            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                <span class="indicator-label">Enregister</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-flush">
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <div class="card-title">
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
                        class="form-control form-control-solid w-250px ps-14" placeholder="Recgercher Remarque" />
                </div>
            </div>
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <div class="w-100 mw-150px">
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Type" data-kt-ecommerce-product-filter="status">
                      <option></option>
                      <option value="all">All</option>
                      <option value="important">Important</option>
                      <option value="information">Information</option>
                      <option value="urgence">Urgence</option>
                    </select>
                  </div>

                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Nouvelle
                    reclamation</a>
            </div>
        </div>

        <div class="card-body pt-0">
            <table class="table align-middle table-row-dashed fs-6 gy-5  dataTable" id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th>Role</th>
                        <th>Section</th>
                        <th>Type</th>
                        <th>Text</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($remarques as $item)
                        <tr id="{{ $item->id_Rem }}" role="row" class="odd">
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href=""
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold"data-kt-ecommerce-product-filter="cible">{{ $item->cible }}</a>
                                    </div>
                                </div>
                            </td>

                            <td class="pe-0">
                                <span class="fw-bold" data-kt-ecommerce-product-filter="section">{{ $item->section }}
                                </span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold" data-order="{{ $item->type }}"
                                    data-kt-ecommerce-product-filter="type">{{ $item->type }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="remarque">{{ $item->remarque }}</span>
                            </td>
                            <!--begin::Action=-->
                            <td class="row ">
                                <div class="menu-item px-3 col-6">
                                    <a onclick="openModal('{{ $item->id_Rem }}' ,'{{ $item->cible }}',
                                    '{{ $item->section }}','{{ $item->type }}','{{ $item->remarque }}'
                                     ,'{{ route('remarque.update', $item->id_Rem) }}')"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_new_target"
                                        class="menu-link px-3"><i class="fa fa-pen"></i></a>
                                </div>
                                <div class="menu-item px-3 col-6">
                                    <form action="{{ route('remarque.destroy', $item->id_Rem) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="menu-link px-3 btn text-danger"
                                            data-kt-ecommerce-product-filter="delete_row" value=""><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

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

            // Function to filter table by search text
            function filterTable(searchText) {
    $('#kt_ecommerce_products_table tbody tr').each(function() {
        var cible = $(this).find('[data-kt-ecommerce-product-filter="cible"]').text().toLowerCase();
        var remarque = $(this).find('[data-kt-ecommerce-product-filter="remarque"]').text().toLowerCase();
        var type = $(this).find('[data-kt-ecommerce-product-filter="type"]').text().toLowerCase();
        var section = $(this).find('[data-kt-ecommerce-product-filter="section"]').text().toLowerCase();
         if (
          remarque.includes(searchText) || 
          type.includes(searchText) || 
          section.includes(searchText) || 
          cible.includes(searchText) ) {
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
        var rowStatus = $(this).find('[data-kt-ecommerce-product-filter="type"]').text().trim().toLowerCase();
        if (rowStatus === status) {
          $(this).show();
        } else {
          $(this).hide();
        }
      });
    }
  }
        });

        function openModal(id_Rem, cible, section, type, remarque, action) {
            console.log(cible);
            console.log(section);
            console.log(type);
            console.log(remarque);
            document.getElementById('cible').value = cible;
            document.getElementById('section').value = section;
            document.getElementById('type').value = type;
            document.getElementById('remarque').value = remarque;


            document.getElementById('kt_modal_new_target_form').action = action;

            // document.getElementById('show').innerHTML = bb;
            // document.getElementById('kt_modal_new_message_form').action = action;
        }
    </script>
@endsection
