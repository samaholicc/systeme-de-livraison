@extends('layouts.client.admin')
@section('breads')
    <x-breadcrumb :breads="$breads" />
@endsection
@section('content')
    <div class="modal fade" id="kt_modal_new_targetRecColis" tabindex="-1" aria-hidden="true">
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
                    <form id="kt_modal_new_Rec_form" method="POST" class="form"
                        action="{{ route('reclamation.store') }}">
                        @csrf
                        <input type="hidden" name="id_C" id="id_C">
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">Nouvelle reclamation</h1>
                        </div>
                        <div class="row">
                            <div class=" col-md-12 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Objet</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Objet"
                                    id="objet" name="objet" />
                            </div>
                            <div class=" col-md-12 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Message</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Message"
                                    id="message" name="message" />
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
                    <form id="kt_modal_new_message_form" method="POST" class="form" action="">
                        @csrf
                        <div class="card-body" id="kt_drawer_chat_messenger_body">
                            <div class="scroll-y me-n5 pe-5" id="show" style="height: 400px">
                            </div>
                        </div>
                        <div class="card-footer pt-4 row" id="kt_drawer_chat_messenger_footer">

                            <div class="col-10 d-flex flex-stack">
                                <textarea class="col-8 form-control form-control-flush mb-3" name="message" rows="1" data-kt-element="input"
                                    placeholder="Type a message"></textarea>
                            </div>
                            <div class="col-2 d-flex flex-stack">
                                <button class="btn btn-primary" type="submit" data-kt-element="send">Send</button>

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="kt_modal_new_target1" tabindex="-1" aria-hidden="true">
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
                <div id="modal-body" class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">


                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="kt_modal_new_target2" tabindex="-1" aria-hidden="true">
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
                <div id="modal-body2" class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">


                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="kt_modal_info" tabindex="-1" aria-hidden="true">
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
                <div class="modal-body px-10 px-lg-5 pt-0 pb-5">
                    <div class="card-body" id="kt_drawer_chat_messenger_body">
                        <div class="scroll-y " id="showinfo">
                        </div>
                    </div>
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
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                </div>
                <button class="btn btn-primary">Filtrer Colis</button>
            </div>
        </div>

        <div class="card-body pt-0">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                    data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                    value="1" />
                            </div>
                        </th>
                        {{-- <th class="min-w-200px">Id</th> --}}
                        <th class="min-w-100px">Code d'Envoi</th>
                        {{-- <th class="min-w-100px">Date d'Expedition</th> --}}
                        {{-- <th class="min-w-100px">Telephone</th>--}}
          <th class="min-w-100px">Nom du Magasin</th> 
                        <th class="min-w-100px">Etat</th>
                        <th class="min-w-100px">Status</th>
                        <th class="min-w-100px">Ville</th>
                        <th class="min-w-70px">Prix</th>
                        <th class="min-w-70px">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($colis as $index => $coli)
                        <tr>
                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="{{ $coli->id }}" />
                                </div>
                            </td>
                            {{-- <td>
              <div class="">
                <div class="ms-5">
                  <a href="" class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $coli->id }}</a>
                </div>
              </div>
            </td> --}}
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="code">{{ $coli->code_d_envoi }}</span>
                            </td>
                            {{-- <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="date">{{ $coli->date_d_expedition }}</span>
                            </td> --}}
                            {{-- <td class="pe-0">
              <span class="fw-bold" data-kt-ecommerce-product-filter="telephone">{{ $coli->client->telephone }}</span>
            </td>--}}
            <td class="pe-0">
              <span class="fw-bold" data-kt-ecommerce-product-filter="magasin">{{ $coli->client->nommagasin }}</span>
            </td> 
                            <td class="pe-0">
                                <span class="fw-bold" data-kt-ecommerce-product-filter="etat">{{ $coli->etat }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold" data-kt-ecommerce-product-filter="status">{{ $coli->status }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="ville">{{ $coli->ville->villename }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold" data-kt-ecommerce-product-filter="prix">{{ $coli->prix }}</span>
                            </td>
                            <td class="row ">
                                <div class="btn-group btn-group-sm" role="group">
                                    <a onclick="openModalallinfo('{{ $coli->id }}')" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_new_target1" class="btn btn-sm btn-warning"><i
                                            class="fa fa-eye"></i>
                                    </a>
                                    <a onclick="openModalinfo('{{ $coli->id }}')" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_info" class="btn btn-sm btn-info"><i
                                            class="fa fa-info"></i>
                                    </a>


                                    <a data-bs-toggle="modal" onclick="openModalRecColis('{{ $coli->id }}')"
                                        data-bs-target="#kt_modal_new_targetRecColis"class="btn btn-sm btn-primary"><i
                                            class="fa fa-question-circle" aria-hidden="true"></i></a>
                                    {{-- <a href="javascript:ajaxIframeBox('parcels?action=add-claim-coli&amp;parcel-code=colis11');"
                                        class="btn btn-sm btn-primary"><i class="fa fa-question-circle"
                                            aria-hidden="true"></i> --}}
                                    </a>
                                    <a onclick="openModalDMC('{{ $coli->id }}',
                                    '{{ $coli->code_d_envoi }}','{{ $coli->destinataire }}',
                                    '{{ $coli->telephone }}','{{ $coli->marchandise }}'
                                        ,'{{ $coli->prix }}','{{ $coli->quantite }}','{{ $coli->commentaire }}',
                                        '{{ $coli->adresse }}',
                                        '{{ $coli->zone }}','{{ $coli->ville_id }}',
                                        '{{ route('demandemodificationcolis.store', $coli->id) }}')"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_new_target2"
                                        class="btn btn-sm btn-secondary"><i class="fa fa-edit"></i></a>
                                </div>
                            </td>
                            <td>
                                @if ($coli->bonLivraison)
                                    
                                <a href="{{ route('bon.livraison.getPdf',$coli->bonLivraison->id_BL) }}" class="menu-link">{{ $coli->bonLivraison->id_BL }}</a>
                                @endif
                                @if ($coli->bonEnvoi)
                                    
                                <a href="" class="menu-link">{{ $coli->bonEnvoi->id_BL }}</a>
                                @endif
                                  
                                @if ($coli->bonDistribution)
                                    
                                <a href="" class="menu-link">{{ $coli->bonDistribution->id_BL }}</a>
                                @endif
                                @if ($coli->bonPaymentLivreur)
                                    
                                <a href="" class="menu-link">{{ $coli->bonPaymentLivreur->id_BL }}</a>
                                @endif
                                @if ($coli->bonPaymentZone)
                                    
                                <a href="" class="menu-link">{{ $coli->bonPaymentZone->id_BL }}</a>
                                @endif
                                  
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
        var cl = @json($cl);
        var etat = @json($etat);
        console.log(etat);
        $(document).ready(function() {
            $('#kt_ecommerce_products_table tbody tr').each(function() {
                var $thisRow = $(this);
                var zoneStatus = $(this).find('td:eq(4)').text().trim();
                var EtatColi = $(this).find('td:eq(3)').text().trim();
                cl.forEach(element => {
                    if (zoneStatus === element.nom) {
                        $thisRow.find('td:eq(4)').css('color', element
                            .couleur);
                    }
                });
                etat.forEach(element => {
                    if (EtatColi === element.nom) {
                        $thisRow.find('td:eq(3)').css('color', element
                            .couleur);
                    }
                });

            });
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
                // Filter table logic
            }

            // Function to filter table by status
            function filterTableByStatus(status) {
                // Filter table by status logic
            }
        });

        var colisinfo = @json($colisinfo);
        var dmc = @json($demandes);

        function openModalallinfo(id) {
            var modal = document.getElementById('modal-body');
            var colisinfos = colisinfo.find(e => e.id == id ).info;
            // console.log('====================================');
            // console.log(colisinfos);
            // console.log('====================================');
            let text = ''
            text = `<div class="row">
                      <div class="dn-inv-infos-box col-6">
                        
                      </div>
                    </div>


                    <div >
                      <table class="table table-striped table-bordered    mb-0" id='ColiInfo'>
                      <thead>
                      <tr class="dn-inv-table-head">
                        <th>Code d envoi</th>
                        <th>Etat</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Informations</th>
                      </tr>
                      </thead>
                      <tbody>

                      `;
            let allinfo = colisinfos.split('_');
            // console.log(allinfo);
            allinfo.forEach(e => {
                let cc = e.split(',');
                // console.log(cc);
                if (cc != '') {
                    text += `
                <tr>
                        <td>${cc[0]}</td>
                        <td>${cc[1]}</td>
                        <td>${cc[2]}</td>
                        <td>${cc[3]}</td>
                        <td>${cc[4]}</td>
                    </tr>`

                }
            });
            modal.innerHTML = text;
            
            $('#ColiInfo tbody tr').each(function() {
                var $thisRow = $(this);
                var zoneStatus = $(this).find('td:eq(2)').text().trim();
                var EtatColi = $(this).find('td:eq(1)').text().trim();
                cl.forEach(element => {
                    if (zoneStatus === element.nom) {
                        $thisRow.find('td:eq(2)').css('color', element
                            .couleur);
                    }
                });
                etat.forEach(element => {
                    if (EtatColi === element.nom) {
                        $thisRow.find('td:eq(1)').css('color', element
                            .couleur);
                    }
                });

            });
        }

        function openModalDMC(id, code_d_envoi, destinataire, telephone,marchandise, prix,quantite, commentaire, adresse, zone, ville_id,
            action) {
console.log("zaki");
            var modal = document.getElementById('modal-body2');
            if (dmc && dmc.length > 0) {
                var dmcs = dmc.find(element => element.id === id);
            }
            // console.log('====================================');
            // console.log(dmcs);
            // console.log('====================================');
            let text = ''
            if (dmcs) {
                text = `
                        <form method="POST" class="form row" action='${action}' >
                        @csrf
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">Demande de modification du colis :${code_d_envoi}</h1>
                        </div>
                        <hr>
                        <div class="col-6 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Destinataire</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input readOnly type="text" class="form-control form-control-solid" value="${dmcs.destinataire}" id="destinataire" name="destinataire" />
                        </div>
                        <div class="col-6 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Marchandise</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input readOnly type="text" class="form-control form-control-solid" value="${dmcs.marchandise}" id="marchandise" name="marchandise" />
                        </div>
                        <div class="col-6 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Telephone</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input readOnly type="text" class="form-control form-control-solid" value="${dmcs.telephone}" id="telephone" name="telephone" />
                        </div>
                        <div class="col-6 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Adresse</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input readOnly type="text" class="form-control form-control-solid" value="${dmcs.adresse}" id="adresse" name="adresse" />
                        </div>
                        <div class="col-12 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Commentaire ( Autre telephone, Date de livraison ...)</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input readOnly type="text" class="form-control form-control-solid" value="${dmcs.commentaire}" id="commentaire" name="commentaire" />
                        </div>
                        <div class="col-6 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Quantite</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input readOnly type="text" class="form-control form-control-solid" value="${dmcs.quantite}" id="quantite" name="quantite" />
                        </div>
                        <div class="col-6 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Prix</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input readOnly type="text" class="form-control form-control-solid" value="${dmcs.prix}" id="prix" name="prix" />
                        </div>
                        <br>
                        </form>
                                    `;

            } else {

                text = `
                        <form method="POST" class="form row" action='${action}' >
                        @csrf
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">Demande de modification du colis :${code_d_envoi}</h1>
                        </div>
                        <hr>
                        <div class="col-6 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Destinataire</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" value="${destinataire}" id="destinataire" name="destinataire" />
                        </div>
                        <div class="col-6 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Marchandise</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input readOnly type="text" class="form-control form-control-solid" value="${marchandise}" id="marchandise" name="marchandise" />
                        </div>
                        <div class="col-6 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Telephone</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" value="${telephone}" id="telephone" name="telephone" />
                        </div>
                        <div class="col-6 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Adresse</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" value="${adresse}" id="adresse" name="adresse" />
                        </div>
                        <div class="col-12 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Commentaire ( Autre telephone, Date de livraison ...)</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" value="${commentaire}" id="commentaire" name="commentaire" />
                        </div>
                        <div class="col-6 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Quantite</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" value="${quantite}" id="quantite" name="quantite" />
                        </div>
                        <div class="col-6 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Prix</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" value="${prix}" id="prix" name="prix" />
                        </div>
                        <div style='display:none' class="col-6 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">zone</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" value="${zone}" id="zone" name="zone" />
                        </div>
                        <div style='display:none' class="col-6 mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">ville_id</span>
                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                            </label>
                            <input type="text" class="form-control form-control-solid" value="${ville_id}" id="ville_id" name="ville_id" />
                        </div>
                        <br>
                        
                        <div class="text-center">
                            <button type="submit"  class="btn btn-primary">
                            <span class="indicator-label">Envoyer la demande</span>
                            <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                        </form>
                                    `;
            }
            modal.innerHTML = text
        }

        function openModalinfo(id) {
            var colis = @json($colis);
            let bb = '';
            let item = colis.find(ele => ele.id == id)
            // console.log(item);
            bb += `
                <div class="">
                    <div class="d-flex flex-column ">
                        <div class="d-flex justify-content-center align-items-center  mb-2">
                            <div class="symbol symbol-35px symbol-circle">
                                <h3>Information du colis.</h3>
                            </div>
                        </div>
                        <div class=" rounded text-dark fw-semibold text-start row" data-kt-element="message-text">
                            <div class="form-group mb-3 col-6 row">
                                <div class="form-group mb-3 col col-12">
                                <label class="fw-bold" for="nom_livreur">Nom Client:${item.client.nomcomplet}</label>
                                </div>
                                <div class="form-group mb-3 col col-md-12">
                                    <label class="fw-bold" for="nom_livreur">Telephone:${item.client.Phone}</label>
                                </div>    
                            </div>
                            <div class="form-group mb-3 col-6 row">
                                <div class="form-group mb-3 col col-12">
                                <label class="fw-bold" for="nom_livreur">Code d envoie:${item.code_d_envoi}</label>
                                </div>
                                <div class="form-group mb-3 col col-12">
                                    <label class="fw-bold" for="nom_livreur">Destinataire:${item.destinataire}</label>
                                </div>                                    
                                <div class="form-group mb-3 col col-12">
                                    <label class="fw-bold" for="nom_livreur">Telephone:${item.telephone}</label>
                                </div>                                      
                                <div class="form-group mb-3 col col-12">
                                    <label class="fw-bold" for="nom_livreur">Ville:${item.ville.villename}</label>
                                </div>                                    
                                <div class="form-group mb-3 col col-12">
                                    <label class="fw-bold" for="nom_livreur">Adresse:${item.adresse}</label>
                                </div>                                   
                                <div class="form-group mb-3 col col-12">
                                    <label class="fw-bold" for="nom_livreur">Crbt:${item.prix * item.quantite}</label>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            `;

            document.getElementById('showinfo').innerHTML = bb;
        }

        function openModalRecColis(id_C) {
            document.getElementById('id_C').value = id_C;
        }
    </script>
@endsection
