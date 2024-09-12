@extends('layouts.admin.admin')
@section('breads')
    <x-breadcrumb :breads="$breads" />
@endsection
@section('content')
    {{-- <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
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
    </div> --}}

    <div class="card card-flush">
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <div class="card-title">
                <div class="d-flex align-items-center position-relative my-1">
                    <span class="svg-icon svg-icon-1 position-absolute ms-4">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
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
                    <select class="form-select form-select-solid"  data-control="select2" data-hide-search="true" data-placeholder="Etat" data-kt-ecommerce-product-filter="status">
                        <option></option>
                        <option value="all">All</option>
                        <option value="Nouvelle Demande">Nouvelle Demande</option>
                        <option value="demande recue">Recu</option>
                        <option value="demande traitee">Traite</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="card-body pt-0">
            <table class="table align-middle table-row-dashed fs-6 gy-5  dataTable" id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th>TYPE</th>
                        <th>MAGASINS</th>
                        <th>REMARQUES</th>
                        <th>TELEPHONE</th>
                        <th>VILLE</th>
                        <th>ADRESSE</th>
                        <th>DATE D AJOUT</th>
                        <th>ETAT</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($ramassages as $item)
                        <tr id="{{ $item->id_Ram }}" role="row" class="odd">
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href="" data-kt-ecommerce-product-filter="type" 
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->type }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href="" data-kt-ecommerce-product-filter="magasin" 
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->client->nommagasin }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href="" data-kt-ecommerce-product-filter="remarque" 
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->remarque }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href="" data-kt-ecommerce-product-filter="telephone" 
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->telephone }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href="" data-kt-ecommerce-product-filter="ville" 
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->ville }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href=""data-kt-ecommerce-product-filter="adresse" 
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->adresse }}</a>
                                    </div>
                                </div>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="date">{{ $item->created_at }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold" data-order="{{ $item->etat }}"
                                    data-kt-ecommerce-product-filter="etat" id="etat{{$item->id_Ram}}">{{ $item->etat }}</span>
                            </td>
                            <!--begin::Action=-->
                            <td class="">
                                <div class="menu-item px-3">
                                    <select class="form-select form-select-solid" id="{{ $item->id_Ram }}"
                                        onchange="change(this)">
                                        <option @if ($item->etat === 'Nouvelle demande') selected @endif value="Nouvelle demande">
                                            Nouvelle demande</option>
                                        <option @if ($item->etat === 'Demande recue') selected @endif value="Demande recue">
                                            Demande recue</option>
                                        <option @if ($item->etat === 'Demande traitee') selected @endif value="Demande traitee">
                                            Demande traitee</option>
                                    </select>
                                    {{-- <form action="{{ route('reclamation.traiteRec', $item->id_Rec) }}" method="POST">
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
        function change(selectElement) {
            // Get the new value of 'etat colis'
            var newEtatColis = selectElement.value;
            var id = selectElement.id;
            var csrfToken = '{{ csrf_token() }}';
            console.log(newEtatColis);
            console.log(selectElement.id);
            // Send AJAX request to update 'etat' in the database
            $.ajax({
                url: '{{ route('ramassagecolis.update') }}',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': csrfToken // Include the CSRF token in the headers
                },
                data: {
                    newEtat: newEtatColis, // Pass the new 'etat' value
                    itemId: id // Pass the ID of the item being updated
                },
                success: function(response) {
                    console.log('Etat updated successfully');
                    document.getElementById(`etat${id}`).innerHTML = newEtatColis;
                },
                error: function(xhr, status, error) {
                    console.error('Error updating etat:', error);
                }
            });
            // });
        }
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
                    var type = $(this).find('[data-kt-ecommerce-product-filter="type"]').text().toLowerCase();
                    var remarque = $(this).find('[data-kt-ecommerce-product-filter="remarque"]').text().toLowerCase();
                    var magasin = $(this).find('[data-kt-ecommerce-product-filter="magasin"]').text().toLowerCase();
                    var etat = $(this).find('[data-kt-ecommerce-product-filter="etat"]').text().toLowerCase();
                    var date = $(this).find('[data-kt-ecommerce-product-filter="date"]').text().toLowerCase();
                    var adresse = $(this).find('[data-kt-ecommerce-product-filter="adresse"]').text().toLowerCase();
                    var ville = $(this).find('[data-kt-ecommerce-product-filter="ville"]').text().toLowerCase();
                    var telephone = $(this).find('[data-kt-ecommerce-product-filter="telephone"]').text().toLowerCase();
                    if (adresse.includes(searchText) ||
                    remarque.includes(searchText) || 
                    magasin.includes(searchText) || 
                    etat.includes(searchText) || 
                    date.includes(searchText) || 
                    telephone.includes(searchText) || 
                    ville.includes(searchText) || 
                    type.includes(searchText) ) {
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
                    var rowStatus = $(this).find('[data-kt-ecommerce-product-filter="etat"]').text().trim().toLowerCase();
                    if (rowStatus === status) {
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
