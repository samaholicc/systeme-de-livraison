@extends('layouts.client.admin')
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

                <div class="modal-body px-10 px-lg-10 pt-0 pb-10">
                    <form id="kt_modal_new_Rec_form" method="POST" class="form"
                        action="{{ route('ramassagecolis.store') }}">
                        @csrf
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">Nouvelle Ramassage</h1>
                        </div>
                        <div class="row">
                            <div class=" col-md-12 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Votre remarque</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Votre remarque"
                                    id="remarque" name="remarque" />
                            </div>
                            <div class=" col-md-12 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Telephone</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Telephone"
                                    id="telephone" name="telephone" />
                            </div>
                        </div>
                        <div class=" col-md-12 col mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Adresse</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" placeholder="Adresse"
                                id="adresse" name="adresse" />
                        </div>
                </div>

                <div class="text-center pb-5">
                    <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
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
                        class="form-control form-control-solid w-250px ps-14" placeholder="Rechercher Ramassage Coli" />
                </div>
            </div>
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <div class="w-100 mw-150px">
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                        data-placeholder="Etat" data-kt-ecommerce-product-filter="etat">
                        <option></option>
                        <option value="Nouvelle demande">Nouvelle demande</option>
                        <option value="Demande recue">Demande recue</option>
                        <option value="Demande traitee">Demande traitee</option>
                    </select>
                </div>
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Nouvelle
                    Ramassage</a>
            </div>
        </div>

        <div class="card-body pt-0">
            <table class="table align-middle table-row-dashed fs-6 gy-5  dataTable" id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th>TYPE</th>
                        <th>REMARQUES</th>
                        <th>TELEPHONE</th>
                        <th>VILLE</th>
                        <th>ADRESSE</th>
                        <th>DATE D AJOUT</th>
                        <th>ETAT</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($Ramassages as $item)
                        <tr id="{{ $item->id_Ram }}" role="row" class="odd">
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href=""
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->type }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href=""
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->remarque }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href=""
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->telephone }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href=""
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->ville }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href=""
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->adresse }}</a>
                                    </div>
                                </div>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="objet">{{ $item->created_at }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-etat-product-filter="etat">{{ $item->etat }}</span>
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

            // Filter by etat select
            $('[data-kt-ecommerce-product-filter="etat"]').on('change', function() {
                var etat = $(this).val();
                filterTableByetat(etat);
            });

            // Function to filter table by search text
            function filterTable(searchText) {
                $('#kt_ecommerce_products_table tbody tr').each(function() {
                    var villename = $(this).find('[data-kt-ecommerce-product-filter="villename"]').text()
                        .toLowerCase();
                    if (villename.includes(searchText)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }

            // Function to filter table by etat
            // function filterTableByetat(etat) {
            //     if (etat === 'all') {
            //         $('#kt_ecommerce_products_table tbody tr').show();
            //     } else {
            //         $('#kt_ecommerce_products_table tbody tr').each(function() {
            //             var zoneetat = $(this).find('td:eq(3)').text().trim().toLowerCase();
            //             if (zoneetat === etat) {
            //                 $(this).show();
            //             } else {
            //                 $(this).hide();
            //             }
            //         });
            //     }
            // }
            // function filterTableByetat(etat) {
            //     $('#kt_ecommerce_products_table tbody tr').each(function() {
            //         if (etat === $(this).val) {
            //             console.log(etat);
            //         }
            //         if (etat === 'Demande traitee' ) {
            //             $(this).show();
            //         } else if (etat === 'Demande recue' ) {
            //             $(this).show();
            //         } else if (etat === 'Nouvelle demande') {
            //             $(this).show();
            //         } else {
            //             $(this).hide();
            //         }
            //     });

            // }
            function filterTableByetat(etat) {
                if (etat === 'all') {
                    $('#kt_ecommerce_products_table tbody tr').show();
                } else {
                    $('#kt_ecommerce_products_table tbody tr').each(function() {
                        var rowetat = $(this).find('[data-kt-etat-product-filter="etat"]').text()
                            .trim();
                        if (rowetat === etat) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                }
            }
        });
    </script>
@endsection
