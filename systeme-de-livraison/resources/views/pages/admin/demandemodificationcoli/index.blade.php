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
                <div id="show" class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    
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
                        class="form-control form-control-solid w-250px ps-14" placeholder="Search Product" />
                </div>
            </div>
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <div class="w-100 mw-150px">
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                        data-placeholder="Etat" data-kt-ecommerce-product-filter="status">
                        <option></option>
                        <option value="all">All</option>
                        <option value="0">En Reponse</option>
                        <option value="1">Traité</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card-body pt-0">
            <table class="table align-middle table-row-dashed fs-6 gy-5  dataTable" id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th>Code d'Envoi</th>
                        <th>Demande</th>
                        <th>Nom de Magasin</th>
                        <th>Telephone</th>
                        <th>Etat</th>
                        <th>Status</th>
                        <th>Ville</th>
                        <th>Prix</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($demandes as $item)
                        <tr id="{{ $item->id_DMC }}" role="row" class="odd">
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href="" class="text-gray-800 text-hover-primary fs-5 fw-bold"
                                            data-kt-ecommerce-product-filter="nomcomplet">{{ $item->colis->code_d_envoi }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href="" data-kt-ecommerce-product-filter="objet"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->isAccepted }}</a>
                                    </div>
                                </div>
                            </td>

                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="colis">{{ $item->colis->client->nommagasin }}
                                </span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="etat">{{ $item->colis->client->Phone }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="date">{{ $item->colis->etat }}</span>
                            </td>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="date">{{ $item->colis->status }}</span>
                            </td>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="date">{{ $item->colis->ville->villename }}</span>
                            </td>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="date">{{ $item->colis->prix }}</span>
                            </td>
                            <!--begin::Action=-->
                            <td class="">
                                <div class="menu-item px-3">
                                    <a onclick="openModal('{{ $item->id_DMC }}' ,'{{ route('message.store', $item->id_DMC) }}')"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_new_target"
                                        class="menu-link px-3"><i class="fa fa-eye"></i></a>
                                </div>

                                <div class="menu-item px-3" @if ($item->etat == 1) style='display:none;' @endif>
                                    {{-- <form action="{{ route('reclamation.traiteRec', $item->id_DMC) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="menu-link px-3 btn text-danger"
                                            data-kt-ecommerce-product-filter="delete_row"><i
                                                class="fa fa-check"></i></button>
                                    </form> --}}
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
        var cl = @json($cl);
        var etat = @json($etat);
        $(document).ready(function() {

            $('#kt_ecommerce_products_table tbody tr').each(function() {
                var $thisRow = $(this);
                var zoneStatus = $(this).find('td:eq(5)').text().trim();
                var EtatColi = $(this).find('td:eq(4)').text().trim();
                cl.forEach(element => {
                    if (zoneStatus === element.nom) {
                        $thisRow.find('td:eq(5)').css('color', element
                            .couleur);
                    }
                });
                etat.forEach(element => {
                    if (EtatColi === element.nom) {
                        $thisRow.find('td:eq(4)').css('color', element
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
                $('#kt_ecommerce_products_table tbody tr').each(function() {
                    var objet = $(this).find('[data-kt-ecommerce-product-filter="objet"]').text()
                        .toLowerCase();
                    var etat = $(this).find('[data-kt-ecommerce-product-filter="etat"]').text()
                        .toLowerCase();
                    var colis = $(this).find('[data-kt-ecommerce-product-filter="colis"]').text()
                        .toLowerCase();
                    var date = $(this).find('[data-kt-ecommerce-product-filter="date"]').text()
                        .toLowerCase();
                    var nomcomplet = $(this).find('[data-kt-ecommerce-product-filter="nomcomplet"]').text()
                        .toLowerCase();
                    if (nomcomplet.includes(searchText) ||
                        etat.includes(searchText) ||
                        colis.includes(searchText) ||
                        date.includes(searchText) ||
                        objet.includes(searchText)) {
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
                        var rowStatus = $(this).find('[data-kt-ecommerce-product-filter="etat"]').attr(
                            'data-order');

                        if (rowStatus == status) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                }
            }
        });


        function calculateElapsedTime(created_at) {
            const createdAtDate = new Date(created_at);
            const currentDate = new Date();
            const timeDifference = currentDate - createdAtDate;
            const seconds = Math.floor(timeDifference / 1000);
            if (seconds < 60) {
                return `${seconds} second${seconds !== 1 ? 's' : ''} `;
            } else if (seconds < 3600) {
                const minutes = Math.floor(seconds / 60);
                return `${minutes} minute${minutes !== 1 ? 's' : ''} `;
            } else if (seconds < 86400) {
                const hours = Math.floor(seconds / 3600);
                return `${hours} hour${hours !== 1 ? 's' : ''} `;
            } else {
                const days = Math.floor(seconds / 86400);
                return `${days} day${days !== 1 ? 's' : ''} `;
            }
        }


        var demandes = @json($demandes);
        function openModal(id_DMC, action) {
    var item = demandes.find(element => element.id_DMC == id_DMC);
    var accept = "{{ route('demandemodificationcolis.accepte', ['id' => 'ELEMENT_ID']) }}";
    let acceptUrl = accept.replace('ELEMENT_ID', item.id_DMC);
    var refuse = "{{ route('demandemodificationcolis.refuse', ['id' => 'ELEMENT_ID']) }}";
    let refuseUrl = refuse.replace('ELEMENT_ID', item.id_DMC);

    let bb = '';

    bb += `
    <div class="">
        <div class="d-flex flex-column">
            <div class="d-flex justify-content-center align-items-center mb-2">
                <div class="symbol symbol-35px symbol-circle">
                    <h3>Information du colis.</h3>
                </div>
            </div>
            <hr>
            <div class="rounded text-dark fw-semibold text-start row" data-kt-element="message-text">
                <div class="form-group mb-3 col-6 row">
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">Nom Client: ${item.colis.client.nomcomplet}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">Telephone: ${item.colis.client.Phone}</label>
                    </div>
                </div>
                <div class="form-group mb-3 col-6 row">
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">Code d'envoie: ${item.colis.code_d_envoi}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">Destinataire: ${item.colis.destinataire}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">Telephone: ${item.colis.telephone}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">Ville: ${item.colis.ville.villename}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">Adresse: ${item.colis.adresse}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">Prix: ${item.colis.prix}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">Crbt: ${item.colis.prix * item.colis.quantite}</label>
                    </div>
                </div>
            </div>
            <h1>Nouvelle informations du colis</h1>
            <hr>
            <div class="rounded text-dark fw-semibold text-start row" data-kt-element="message-text">
                <div class="form-group mb-3 col-6 row">
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">Destinataire: ${item.destinataire}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">marchandise: ${item.marchandise}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">Telephone: ${item.telephone}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">Adresse: ${item.adresse}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">Commentaire: ${item.commentaire}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">zone: ${item.zone.zonename}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">ville: ${item.ville.villename}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">Prix: ${item.prix}</label>
                    </div>
                    <div class="form-group mb-3 col col-12">
                        <label class="fw-bold" for="nom_livreur">quantite: ${item.quantite}</label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="text-center">
                <br>
                <div class="btn-group btn-group-lg" role="group">
                    ${item.isAccepted !== 'Accepte' && item.isAccepted !== 'Annule' ? `
                    <form action="${acceptUrl}" method="get">
                        <button type="submit" class="btn btn-success"><i class="fa fa-check"></i></button>
                    </form>
                    <form action="${refuseUrl}" method="get">
                        <button type="submit" class="btn btn-danger"><i class="fa fa-times"></i></button>
                    </form>
                    ` : ''}
                </div>
            </div>
        </div>
    </div>
`;
    document.getElementById('show').innerHTML = bb;
    document.getElementById('kt_modal_new_message_form').action = action;
}

    </script>
@endsection
