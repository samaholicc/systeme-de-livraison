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
                        <th>CLient</th>
                        <th>OBJET</th>
                        <th>COLI</th>
                        <th>ETAT</th>
                        <th>DATE D AJOUT</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($reclamations as $item)
                        <tr id="{{ $item->id_Rec }}" role="row" class="odd">
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href=""
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="nomcomplet">{{ $item->client->nomcomplet }}</a>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href="" data-kt-ecommerce-product-filter="objet"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->objet }}</a>
                                    </div>
                                </div>
                            </td>

                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="colis">{{ $item->id ? $item->id : 'General' }}
                                </span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold" data-order="{{ $item->etat }}"
                                    data-kt-ecommerce-product-filter="etat">{{ $item->etat === 0 ? 'Reponse de client en attente' : 'Reclamation traite' }}</span>
                            </td>
                            <td class="pe-0">
                                <span class="fw-bold"
                                    data-kt-ecommerce-product-filter="date">{{ $item->created_at }}</span>
                            </td>
                            <!--begin::Action=-->
                            <td class="">
                                <div class="menu-item px-3">
                                    <a onclick="openModal('{{ $item->id_Rec }}' ,'{{ $item->etat }}' ,'{{ route('message.store', $item->id_Rec) }}')"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_new_target"
                                        class="menu-link px-3"><i class="fa fa-eye"></i></a>
                                </div>

                                <div class="menu-item px-3" @if ($item->etat == 1) style='display:none;' @endif>
                                    <form action="{{ route('reclamation.traiteRec', $item->id_Rec) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="menu-link px-3 btn text-danger"
                                            data-kt-ecommerce-product-filter="delete_row"><i
                                                class="fa fa-check"></i></button>
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
                    var objet = $(this).find('[data-kt-ecommerce-product-filter="objet"]').text().toLowerCase();
                    var etat = $(this).find('[data-kt-ecommerce-product-filter="etat"]').text().toLowerCase();
                    var colis = $(this).find('[data-kt-ecommerce-product-filter="colis"]').text().toLowerCase();
                    var date = $(this).find('[data-kt-ecommerce-product-filter="date"]').text().toLowerCase();
                    var nomcomplet = $(this).find('[data-kt-ecommerce-product-filter="nomcomplet"]').text().toLowerCase();
                    if (nomcomplet.includes(searchText) ||
                    etat.includes(searchText) || 
                    colis.includes(searchText) || 
                    date.includes(searchText) || 
                    objet.includes(searchText) ) {
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
                        var rowStatus = $(this).find('[data-kt-ecommerce-product-filter="etat"]').attr('data-order');
                        
                    if (rowStatus == status) {
                    $(this).show();
                    } else {
                    $(this).hide();
                    }
                });
                }
            }
        });

        var reclamations = @json($reclamations);

        function openModal(id_Rec, etat, action) {
            var messages = reclamations.find(element => element.id_Rec == id_Rec).message;
          
            let bb = '';
            if (etat == 1) {
                document.getElementById('kt_drawer_chat_messenger_footer').style.display = 'none';
            }
            messages.forEach(ele => {
                if (!ele.id_Ad) {
                    bb += `<div class="d-flex justify-content-start mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    {{-- <div class="d-flex align-items-center mb-2">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="assets/media/avatars/300-25.jpg">
                                                </div>
                                                <!--end::Avatar-->
                                                <!--begin::Details-->
                                                <div class="ms-3">
                                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                                    <span class="text-muted fs-7 mb-1">2 mins</span>
                                                </div>
                                                <!--end::Details-->
                                            </div> --}}
                                    <!--end::User-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                                                        data-kt-element="message-text">
                                                                        ${ele['message']}
                                                                        </div>
                                                                       </div>
                                <!--end::Wrapper-->
                            </div> `;
                } else {
                    bb += `<div class="d-flex justify-content-end mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">${calculateElapsedTime(ele.created_at)}</span>
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <i class="bi bi-person-circle"></i>
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                        data-kt-element="message-text">${ele['message']}</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>`;
                }
            });
         
            document.getElementById('show').innerHTML = bb;
            document.getElementById('kt_modal_new_message_form').action = action;
            


        }

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
    </script>
@endsection
