@extends('layouts.livreur.admin')
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
                <div class="modal-body scroll-y px-10 px-lg-5 pt-0 pb-5">
                    <div class="card-body" id="kt_drawer_chat_messenger_body">
                        <div class="scroll-y " id="show">
                        </div>
                    </div>
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
                <div class="modal-body scroll-y px-10 px-lg-5 pt-0 pb-5">
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
                    <select class="form-select form-select-solid" data-control="select" data-hide-search="true"
                        data-placeholder="Etat" data-kt-ecommerce-product-filter="etat">
                        <option value="all">Etat (Tous)</option>
                        <option value="non paye">Non Payé</option>
                        <option value="paye">Payé</option>
                        <option value="facture">Facturé</option>
                    </select>
                </div>
                <div class="w-100 mw-150px">
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                        data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                        <option></option>
                        <option value="all">Status(Tous)</option>
                        <option value="1">boite vocale</option>
                        <option value="1">Annulé</option>
                        <option value="1">deuxieme appel</option>
                        <option value="1">Mise en distribution</option>
                        <option value="1">Numero erroné</option>
                        <option value="1">client intéressé</option>
                        <option value="1">in progress</option>
                        <option value="1">pas de réponse et envoi SMS</option>
                        <option value="1">Hors zone</option>
                        <option value="1">Ramassé</option>
                        <option value="1">Reporté</option>
                        <option value="1">programmé</option>
                        <option value="1">Recu</option>
                        <option value="1">Refusé</option>
                        <option value="1">Retourné</option>
                        <option value="1">en livraison</option>
                        <option value="1">en voyage</option>
                        <option value="1">injoignable</option>
                    </select>
                </div>
                <button class="btn btn-primary">Filtrer Colis</button>
            </div>
        </div>

        <div class="card-body pt-0">
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        {{-- <th class="w-10px pe-2">
            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
              <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
            </div>
          </th> --}}
                        {{-- <th class="min-w-200px">Id</th> --}}
                        <th class="min-w-100px">Code d'Envoi</th>
                        <th class="min-w-100px">Date d'Expedition</th>
                        <th class="min-w-100px">Telephone</th>
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
                            {{-- <td>
              <div class="form-check form-check-sm form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="{{ $coli->id }}" />
              </div>
            </td>
            <td>
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
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="date">{{ $coli->date_d_expedition }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="telephone">{{ $coli->client->Phone }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="magasin">{{ $coli->client->nommagasin }}</span>
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
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <a onclick="openModalinfo('{{ $coli->id }}')" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_info" class="menu-link px-3">Information du colis</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a onclick="openModal('{{ $coli->id }}','{{route('livreur.changestatus',$coli->id)}}')" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_new_target" class="menu-link px-3">changer le
                                            statut</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        {{-- <form action="{{ route('colis.destroy',$coli->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" class="menu-link px-3 btn text-danger" data-kt-ecommerce-product-filter="delete_row" value="delete">
                  </form> --}}
                                    </div>
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
            $('[data-kt-ecommerce-product-filter="etat"]').on('change', function() {
                var etat = $(this).val();
                filterTableByEtat(etat);
            });
            $('[data-kt-ecommerce-product-filter="status"]').on('change', function() {
                var status = $(this).val();
                filterTableByStatus(status);
            });

            // Function to filter table by search text
            function filterTable(searchText) {
                // Filter table logic
            }

            // Function to filter table by etat
            function filterTableByEtat(etat) {
                if (etat === 'all') {
                    $('#kt_ecommerce_products_table tbody tr').show();
                } else {
                    $('#kt_ecommerce_products_table tbody tr').each(function() {
                        var colietat = $(this).find('td:eq(4)').text().trim().toLowerCase();
                        if (colietat === etat) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                }
            }
            // Function to filter table by status
            function filterTableByStatus(status) {
                if (status === 'all') {
                    $('#kt_ecommerce_products_table tbody tr').show();
                } else {
                    $('#kt_ecommerce_products_table tbody tr').each(function() {
                        var coliStatus = $(this).find('td:eq(5)').text().trim().toLowerCase();
                        console.log(coliStatus);
                        if (coliStatus === status) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                }
            }
        });

        function openModal(id,action) {
            var colis = @json($colis);
            let bb = '';
            let item = colis.find(ele => ele.id == id)
            console.log(item);
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
        function openModalinfo(id) {
            var colis = @json($colis);
            let bb = '';
            let item = colis.find(ele => ele.id == id)
            console.log(item);
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
    </script>
@endsection
