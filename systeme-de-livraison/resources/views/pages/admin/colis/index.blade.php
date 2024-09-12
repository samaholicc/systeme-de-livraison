@extends('layouts.admin.admin')
@section('breads')
    <x-breadcrumb :breads="$breads" />
@endsection
@section('content')
    {{-- @dd($colis) --}}


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
                <div id="modal-body1" class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">


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
                <div class="modal-body scroll-y px-10 px-lg-5 pt-0 pb-5">
                    <div class="card-body" id="kt_drawer_chat_messenger_body">
                        <div class="scroll-y " id="show">
                        </div>
                    </div>
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

    <div class="card card-flush">
        <form method="GET" action="{{ route('colis.indexAdmin') }}">
            <div class="card-header row py-5 gap-2 gap-md-5">
                <div class="card-title col-md-3 ">
                    <!-- Search and filter options -->
                    <div class="d-flex align-items-center position-relative my-1">
                        <span class="svg-icon svg-icon-1 position-absolute ms-4">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                    rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        <input type="text" data-kt-ecommerce-product-filter="search"
                            class="form-control form-control-solid w-250px ps-14" placeholder="Rechercher Colis" />
                    </div>
                </div>

                <div class="form-group col-md-8 row mr-1">
                    <div class="d-flex align-items-center col-md-4 ">
                        <select class="form-control" id="date_filter" name="date_filter" onchange="this.form.submit()">
                            <option value="">Depuis le lancement</option>
                            <option value="today" {{ request('date_filter') == 'today' ? 'selected' : '' }}>Aujourd'hui
                            </option>
                            <option value="yesterday" {{ request('date_filter') == 'yesterday' ? 'selected' : '' }}>Hier
                            </option>
                            <option value="last_7_days" {{ request('date_filter') == 'last_7_days' ? 'selected' : '' }}>7
                                derniers jours</option>
                            <option value="last_30_days" {{ request('date_filter') == 'last_30_days' ? 'selected' : '' }}>
                                30
                                derniers jours</option>
                            <option value="this_month" {{ request('date_filter') == 'this_month' ? 'selected' : '' }}>Ce
                                mois</option>
                            <option value="last_month" {{ request('date_filter') == 'last_month' ? 'selected' : '' }}>Le
                                mois dernier</option>
                            <option value="custom_range" {{ request('date_filter') == 'custom_range' ? 'selected' : '' }}>
                                Plage personnalisée</option>
                        </select>
                    </div>
                    <div class="col-md-4 d-flex align-items-center ">
                        <input type="date" class="form-control " name="start_date" placeholder="Date de début"
                            value="{{ request('start_date') }}"
                            {{ request('date_filter') != 'custom_range' ? 'disabled' : '' }}>
                    </div>
                    <div class="col-md-4 d-flex align-items-center ">
                        <input type="date" class="form-control" name="end_date" placeholder="Date de fin"
                            value="{{ request('end_date') }}"
                            {{ request('date_filter') != 'custom_range' ? 'disabled' : '' }}>
                    </div>
                </div>
                <div class="form-group col-md-3 row mt-3">
                    <div>
                        <select class="form-control" id="status_filter" name="status_filter"
                            onchange="this.form.submit()">
                            <option value="">Tous les statuts</option>
                            @foreach ($status as $st)
                                <option value="{{ $st->status }}"
                                    {{ request('status_filter') == $st->status ? 'selected' : '' }}>{{ $st->status }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-3 row mt-3">
                    <div>
                        <select class="form-control" id="etat_filter" name="etat_filter" onchange="this.form.submit()">
                            <option value="">Tous les états</option>
                            <option value="Paye" {{ request('etat_filter') == 'Paye' ? 'selected' : '' }}>Payé</option>
                            <option value="Non Paye" {{ request('etat_filter') == 'Non Paye' ? 'selected' : '' }}>Non Payé
                            </option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-3 row mt-3">
                    <div>
                        <select class="form-control" id="ville_filter" name="ville_filter"
                            onchange="this.form.submit()">
                            <option value="">Toutes les villes</option>
                            @foreach ($villes as $ville)
                                <option value="{{ $ville->id_V }}"
                                    {{ request('ville_filter') == $ville->id_V ? 'selected' : '' }}>
                                    {{ $ville->villename }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group col-md-3 row mt-3">
                    <div>
                        <select class="form-control" id="zone_filter" name="zone_filter" onchange="this.form.submit()">
                            <option value="">Toutes les zones</option>
                            @foreach ($zones as $zone)
                                <option value="{{ $zone->id_Z }}"
                                    {{ request('zone_filter') == $zone->id_Z ? 'selected' : '' }}>{{ $zone->zonename }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

                    <button class="btn btn-primary">Filtrer Colis</button>
                    <a href="{{ route('colis.indexAdmin') }}" class="btn btn-info">All Colis</a>
                    <a href="{{ route('colis.export') }}" class="btn btn-success">export Colis</a>
                </div>
            </div>
        </form>

        <div class="card-body pt-0">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        {{-- <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                    data-kt-check-target="#kt_ecommerce_products_table .form-check-input"
                                    value="1" />
                            </div>
                        </th> --}}
                        <th class="min-w-100px">Code d'Envoi</th>
                        <th class="min-w-100px">Date d'Expedition</th>
                        <th class="min-w-100px">Telephone</th>
                        <th class="min-w-90px">Nom du Magasin</th>
                        <th class="min-w-70px">Etat</th>
                        <th class="min-w-70px">Status</th>
                        <th class="min-w-70px">Ville</th>
                        <th class="min-w-50px">Prix</th>
                        <th class="min-w-70px">Actions</th>
                        <th class="min-w-70px">Bons</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($colis as $index => $coli)
                        <tr>
                            {{-- <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="{{ $coli->id }}" />
                                </div>
                            </td> --}}
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="code">{{ $coli->code_d_envoi }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="date">{{ $coli->date_d_expedition }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="telephone">{{ $coli->telephone }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="magasin">{{ $coli->client->nommagasin }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold" data-kt-ecommerce-product-filter="etat">{{ $coli->etat }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold" data-order="{{ $coli->status }}"
                                    data-kt-ecommerce-product-filter="status">{{ $coli->status }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="ville">{{ $coli->ville->villename }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold" data-kt-ecommerce-product-filter="prix">{{ $coli->prix }}</span>
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
                                        <a onclick="openModalallinfo('{{ $coli->id }}')" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_new_target1" class="btn menu-link"> <i
                                                class="fas fa-eye"></i> Details Suivi</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a onclick="openModalInfo('{{ $coli->id }}','{{ route('admin.changestatus', $coli->id) }}')"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_new_target"
                                            class="btn menu-link"> <i class="fas fa-info"></i> Information Colis</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a onclick="openModal('{{ $coli->id }}','{{ route('admin.changestatus', $coli->id) }}')"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_new_target"
                                            class="btn menu-link"> <i class="fas fa-pen"></i> changer le statut</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a onclick="openModalPrix('{{ $coli->id }}','{{ route('colis.change.prix', $coli->id) }}')"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_new_target"
                                            class="btn menu-link"> <i class="fas fa-dollar-sign"></i> changer le prix</a>
                                    </div>
                                    <div class="menu-item   px-3">
                                        <a onclick="openModalcolis('{{ $coli->id }}', '{{ route('colis.updateadmin', $coli->id) }}')"
                                            data-bs-toggle="modal" data-bs-target="#kt_modal_new_target2"
                                            class="menu-link btn "><i class="fas fa-pen"></i>Modifier Colis</a>
                                        </a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a class="btn menu-link"
                                            href="{{ route('generate.stikers.colis', ['id' => $coli->id, 'id_BL' => $coli->bonLivraison->id_BL]) }}">
                                            <i class="fas fa-ticket-alt"></i>Voir les etiqutte
                                        </a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a class="btn menu-link"
                                            href="{{ route('generate.etiqueteuse.colis', ['id' => $coli->id, 'id_BL' => $coli->bonLivraison->id_BL]) }}"><i
                                                class="fas fa-ticket-alt"></i> etiquetteuse</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                @if ($coli->bonLivraison)
                                    <a href="{{ route('bon.livraison.getPdf.colis', ['id' => $coli->bonLivraison->id_BL, 'idC' => $coli->id]) }}"
                                        class="menu-link d-block">{{ $coli->bonLivraison->id_BL }}</a>
                                @endif
                                @if ($coli->bonEnvoi)
                                    <a href="{{ route('bon.envoi.getPdf.colis', ['id' => $coli->bonEnvoi->id_BE, 'idC' => $coli->id]) }}"
                                        class="menu-link d-block">{{ $coli->bonEnvoi->id_BE }}</a>
                                @endif

                                @if ($coli->bonDistribution)
                                    <a href="{{ route('bon.distribution.getPdf.colis', ['id' => $coli->bonDistribution->id_BD, 'idC' => $coli->id]) }}"
                                        class="menu-link d-block">{{ $coli->bonDistribution->id_BD }}</a>
                                @endif
                                @if ($coli->bonPaymentLivreur)
                                    <a href="{{ route('bon.payment.livreur.getPdf.colis', ['id' => $coli->bonPaymentLivreur->id_BPL, 'idC' => $coli->id]) }}"
                                        class="menu-link d-block">{{ $coli->bonPaymentLivreur->id_BPL }}</a>
                                @endif
                                @if ($coli->bonPaymentZone)
                                    <a href="{{ route('bon.payment.zone.getPdf.colis', ['id' => $coli->bonPaymentZone->id_BPZ, 'idC' => $coli->id]) }}"
                                        class="menu-link d-block">{{ $coli->bonPaymentZone->id_BPZ }}</a>
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
        var colis = @json($colis);
        var colisinfo = @json($colisinfo);
        var zones = @json($zones);
        var villes = @json($villes);
        $(document).ready(function() {

            $('#kt_ecommerce_products_table tbody tr').each(function() {
                var $thisRow = $(this);
                var zoneStatus = $(this).find('td:eq(6)').text().trim();
                var EtatColi = $(this).find('td:eq(5)').text().trim();
                cl.forEach(element => {
                    if (zoneStatus === element.nom) {
                        $thisRow.find('td:eq(6)').css('color', element
                            .couleur);
                    }
                });
                etat.forEach(element => {
                    if (EtatColi === element.nom) {
                        $thisRow.find('td:eq(5)').css('color', element
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
                    var ville = $(this).find('[data-kt-ecommerce-product-filter="ville"]').text()
                        .toLowerCase();
                    var etat = $(this).find('[data-kt-ecommerce-product-filter="etat"]').text()
                        .toLowerCase();
                    var prix = $(this).find('[data-kt-ecommerce-product-filter="prix"]').text()
                        .toLowerCase();
                    var status = $(this).find('[data-kt-ecommerce-product-filter="status"]').text()
                        .toLowerCase();
                    var id = $(this).find('[data-kt-ecommerce-product-filter="id"]').text().toLowerCase();
                    var code = $(this).find('[data-kt-ecommerce-product-filter="code"]').text()
                        .toLowerCase();
                    var date = $(this).find('[data-kt-ecommerce-product-filter="date"]').text()
                        .toLowerCase();
                    if (ville.includes(searchText) ||
                        etat.includes(searchText) ||
                        prix.includes(searchText) ||
                        status.includes(searchText) ||
                        date.includes(searchText) ||
                        code.includes(searchText) ||
                        id.includes(searchText)) {
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

        function openModal(id, action) {
            let bb = '';
            let item = colis.find(ele => ele.id == id)
            bb += `
                <div class="">
                    <div class="d-flex flex-column ">
                        <div class="d-flex justify-content-center align-items-center  mb-2">
                            <div class="symbol symbol-35px symbol-circle">
                                <h3>Change le statut du colis.</h3>
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
                        <hr>
                        <div class=" rounded text-dark fw-semibold text-start row" data-kt-element="message-text">
                            <form action="${action}" method="POST">
                                @csrf
                                <div class="form-group mb-3 col col-md-12">
                                <label class="fw-bold" for="nom_livreur">Veuillez choisir un statut:</label>
                                <select id="status" class="form-control @error('status') is-invalid @enderror"
                                    name="status">
                                        <option value="">veuillez choisir un status</option>
                                        <option value="Retourne">Retourné</option>
                                        <option value="Livre">Livré</option>
                                        <option value="Reporte">Reporté</option>
                                        <option value="Pas de Reponse">Pas de réponse et envoi SMS</option>
                                        <option value="Injoignable">In joignable</option>
                                        <option value="Hors-Zone">Hors Zone</option>
                                        <option value="Annule">Annulé</option>
                                        <option value="Refuse">Refusé</option>
                                        <option value="Numero Errone">Numero Erroné</option>
                                        <option value="Deuxieme Appel">Deuxieme appel</option>
                                        <option value=""></option>
                                        <option value="Programme">Programmé</option>
                                        <option value="Boite vocale">Boite Vocal</option>
                                        <option value="En voyage">En voyage</option>
                                        <option value="Client interesse">Client Intéressé</option>
                                </select>
                                </div>
                                <div class="form-group mb-3 col col-md-12">
                                    <label class="fw-bold" for="adresse">Commentaire:</label>
                                    <textarea  id="cmt" name="cmt" class="form-control"  ></textarea>
                                </div>
                                <div class="d-flex justify-content-end align-items-end  mb-2">
                                    <input type="submit" class="menu-link px-3 btn btn-primary" value="Enregister">
                                </div>    
                                </form>
                            
                        </div>
                    </div>
                </div>
            `;

            document.getElementById('show').innerHTML = bb;
        }

        function openModalPrix(id, action) {
            var colis = @json($colis);
            let bb = '';
            let item = colis.find(ele => ele.id == id)
            bb += `
                <div class="">
                    <div class="d-flex flex-column ">
                        <div class="d-flex justify-content-center align-items-center  mb-2">
                            <div class="symbol symbol-35px symbol-circle">
                                <h3>Change le statut du colis.</h3>
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
                        <hr>
                        <div class=" rounded text-dark fw-semibold text-start row" data-kt-element="message-text">
                            <form action="${action}" method="POST">
                                @csrf
                                <div class="form-group mb-3 col col-md-12">
                                <label class="fw-bold" for="nom_livreur">Veuillez choisir un statut:</label>
                               <input type='number' class='form-control' value='${item.prix}' name='prix'/>
                                </div>
                                
                                <div class="d-flex justify-content-end align-items-end  mb-2">
                                    <input type="submit" class="menu-link px-3 btn btn-primary" value="Enregister">
                                </div>    
                                </form>
                            
                        </div>
                    </div>
                </div>
            `;

            document.getElementById('show').innerHTML = bb;
        }

        function openModalInfo(id, action) {
            var colis = @json($colis);
            let bb = '';
            let item = colis.find(ele => ele.id == id)
            bb += `
                <div class="">
                    <div class="d-flex flex-column ">
                        <div class="d-flex justify-content-center align-items-center  mb-2">
                            <div class="symbol symbol-35px symbol-circle">
                                <h3>Info du colis.</h3>
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

            document.getElementById('show').innerHTML = bb;
        }


        function openModalallinfo(id) {
            var modal = document.getElementById('modal-body1');
            // console.log(colisinfo.find(e => e.id == id));
            var colisinfos = colisinfo.find(e => e.id == id).info;
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


        function openModalcolis(id, actionUrl) {
    var modal = document.getElementById('modal-body2');
    var coliss = colis.find(element => element.id === id);

    let zoneOptions = zones.map(item =>
        `<option value="${item.id_Z}" ${item.id_Z == coliss.zone ? 'selected' : ''}>${item.zonename}</option>`
    ).join('');
    let villeOptions = villes.map(item =>
        `<option value="${item.id_V}" ${item.id_V == coliss.ville_id ? 'selected' : ''}>${item.villename}</option>`
    ).join('');
    
    let text = `
        <form method="POST" class="form row" action='${actionUrl}'>
            @csrf
            <div class="mb-13 text-center">
                <h1 class="mb-3">Demande de modification du colis : ${coliss.code_d_envoi}</h1>
            </div>
            <hr>
            <div class="col-12 mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Code d'envoi</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                </label>
                <input type="text" class="form-control form-control-solid" value="${coliss.code_d_envoi}" id="code_d_envoi" name="code_d_envoi" readonly />
            </div>
            <div class="col-12 mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Destinataire</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                </label>
                <input type="text" class="form-control form-control-solid" value="${coliss.destinataire}" id="destinataire" name="destinataire" />
            </div>
            <div class="col-6 mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Téléphone</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                </label>
                <input type="text" class="form-control form-control-solid" value="${coliss.telephone}" id="telephone" name="telephone" />
            </div>
            <div class="col-6 mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Marchandise</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                </label>
                <input type="text" class="form-control form-control-solid" value="${coliss.marchandise}" id="marchandise" name="marchandise" />
            </div>
            <div class="col-12 mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Adresse</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                </label>
                <input type="text" class="form-control form-control-solid" value="${coliss.adresse}" id="adresse" name="adresse" />
            </div>
            <div class="col-12 mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Commentaire (Autre téléphone, Date de livraison ...)</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                </label>
                <input type="text" class="form-control form-control-solid" value="${coliss.commentaire}" id="commentaire" name="commentaire" />
            </div>
            <div class="col-6 mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Zone</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                </label>
                <select id="zone" class="form-control @error('zone') is-invalid @enderror" name="zone" disabled>
                    ${zoneOptions}
                </select>
                // <input type="hidden" name="zone" value="${coliss.zone}">
            </div>
            <div class="col-6 mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Ville</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                </label>
                <select id="ville_id" class="form-control @error('ville_id') is-invalid @enderror" name="ville_id">
                    ${villeOptions}
                </select>
            </div>
            <div class="col-6 mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Prix</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                </label>
                <input type="number" class="form-control form-control-solid" value="${coliss.prix}" id="prix" name="prix" />
            </div>
            <div class="col-6 mb-8 fv-row">
                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                    <span class="required">Quantité</span>
                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i>
                </label>
                <input type="number" class="form-control form-control-solid" value="${coliss.quantite}" id="quantite" name="quantite" />
            </div>
            <br>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">
                    <span class="indicator-label">Envoyer la demande</span>
                    <span class="indicator-progress">Please wait...
                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                </button>
            </div>
        </form>
    `;

    modal.innerHTML = text;
}

    </script>
@endsection
