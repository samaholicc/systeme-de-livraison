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
                <div class="modal-body scroll-y px-10 px-lg-5 pt-0 pb-5">
                    <div class="card-body" id="kt_drawer_chat_messenger_body">
                        <div class="scroll-y " id="show">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="kt_modal_new_target_MC" tabindex="-1" aria-hidden="true">
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
                    <form id="kt_modal_new_user_form" method="POST" class="form" enctype="multipart/form-data"
                        action="">
                        @method('PUT')
                        @csrf
                        <div class="mb-13 text-center">
                            <h1 class="mb-3">Modifier les information de Livreur</h1>
                        </div>
                        <div class="row">
                            <div class=" col-md-12 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Nom Magasin</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Nom Magasin"
                                    id="M_nommagasin" name="nommagasin" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Nom complet</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Nom complet"
                                    id="M_nomcomplet" name="nomcomplet" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">CIN</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="CIN"
                                    id="M_cin" name="cin" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Numero de telephone</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Phone"
                                    id="M_Phone" name="Phone" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Email</span>
                                </label>
                                <input type="email" class="form-control form-control-solid" placeholder="Email"
                                    id="M_email" name="email" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Mot de passe</span>
                                </label>
                                <input type="password" class="form-control form-control-solid" placeholder="Mot de passe"
                                    id="M_password" name="password" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Adresse</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Adresse"
                                    id="M_adress" name="adress" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Nom du banque</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Nom du banque"
                                    id="M_nombanque" name="nombanque" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Numero du compte</span>
                                </label>
                                <input type="text" class="form-control form-control-solid"
                                    placeholder="Numero du compte" id="M_numerocompte" name="numerocompte" />
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_MC_cancel"
                                class="btn btn-light me-3">Cancel</button>
                            <button type="submit" id="kt_modal_new_target_MC_submit" class="btn btn-primary">
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
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <!--begin::Toolbar-->
            <div class="d-flex flex-wrap flex-stack pb-7">
                <!--begin::Title-->
                <div class="d-flex flex-wrap align-items-center my-1">
                    <h3 class="fw-bold me-5 my-1">Livreurs ({{ $users->count() }})</h3>
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                        <span class="svg-icon svg-icon-3 position-absolute ms-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2"
                                    rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor"></rect>
                                <path
                                    d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                        <input type="text" id="kt_filter_search"
                            class="form-control form-control-sm border-body bg-body w-150px ps-10" placeholder="Search">
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Title-->
                <!--begin::Controls-->
                <div class="d-flex flex-wrap my-1">
                    <!--begin::Tab nav-->
                    <ul class="nav nav-pills me-6 mb-2 mb-sm-0" role="tablist">
                        <li class="nav-item m-0" role="presentation">
                            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary me-3 "
                                data-bs-toggle="tab" href="#kt_project_users_card_pane" aria-selected="true"
                                role="tab">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                        viewBox="0 0 24 24">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1"
                                                fill="currentColor"></rect>
                                            <rect x="14" y="5" width="5" height="5" rx="1"
                                                fill="currentColor" opacity="0.3"></rect>
                                            <rect x="5" y="14" width="5" height="5" rx="1"
                                                fill="currentColor" opacity="0.3"></rect>
                                            <rect x="14" y="14" width="5" height="5" rx="1"
                                                fill="currentColor" opacity="0.3"></rect>
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                        </li>
                        <li class="nav-item m-0" role="presentation">
                            <a class="btn btn-sm btn-icon btn-light btn-color-muted btn-active-primary active"
                                data-bs-toggle="tab" href="#kt_project_users_table_pane" aria-selected="false"
                                tabindex="-1" role="tab">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                            fill="currentColor"></path>
                                        <path opacity="0.3"
                                            d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </a>
                        </li>
                    </ul>
                    <!--end::Tab nav-->
                </div>
                <!--end::Controls-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Tab Content-->
            <div class="tab-content">
                <!--begin::Tab pane-->
                <div id="kt_project_users_card_pane" class="tab-pane fade  " role="tabpanel">
                    <!--begin::Row-->
                    <div class="row g-6 g-xl-9">
                        @foreach ($users as $item)
                            <div class="col-md-6 col-xxl-4">
                                <!--begin::Card-->
                                <div class="card">
                                    <!--begin::Card body-->
                                    <div class="card-body d-flex flex-center flex-column pt-12 p-9">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-65px symbol-circle mb-5">
                                            <img src="{{ $item->img ? '' : asset('storage/images/profile.jpg') }}"
                                                alt="image">
                                            <div
                                                class="bg-success position-absolute border border-4 border-body h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3">
                                            </div>
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Name-->
                                        <a href="#"
                                            class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">{{ $item->nomcomplet }}</a>
                                        <!--end::Name-->
                                        <!--begin::Position-->
                                        <div class="fw-semibold text-gray-400 mb-6">{{ $item->nommagasin }}.</div>
                                        <!--end::Position-->
                                        <!--begin::Info-->
                                        <div class="d-flex flex-center flex-wrap">
                                            <button onclick="openModal('{{ $item->id_Cl }}')" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_new_target" class="btn"><i
                                                    class="fa fa-eye"></i></button>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>
                        @endforeach
                    </div>
                </div>
                <!--end::Tab pane-->
                <!--begin::Tab pane-->
                <div id="kt_project_users_table_pane" class="tab-pane  show active " role="tabpanel">
                    <!--begin::Card-->
                    <div class="card card-flush">
                        <!--begin::Card body-->
                        <div class="card-body pt-0">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <div id="kt_project_users_table_wrapper"
                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="table-responsive">
                                        <table id="kt_project_users_table"
                                            class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bold dataTable no-footer">
                                            <!--begin::Head-->
                                            <thead class="fs-7 text-gray-400 text-uppercase">
                                                <tr>
                                                    <th class="min-w-250px sorting" tabindex="0"
                                                        aria-controls="kt_project_users_table" rowspan="1"
                                                        colspan="1"
                                                        aria-label="Livreur: activate to sort column ascending"
                                                        style="width: 0px;">Livreur</th>
                                                    <th class="min-w-50px text-end sorting_disabled" rowspan="1"
                                                        colspan="1" aria-label="Details" style="width: 0px;">Actions
                                                    </th>
                                                </tr>
                                            </thead>
                                            <!--end::Head-->
                                            <!--begin::Body-->
                                            <tbody class="fs-6">
                                                @foreach ($users as $item)
                                                    <tr class="odd">
                                                        <td>
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-5 position-relative">
                                                                    <!--begin::Avatar-->
                                                                    <div class="symbol symbol-35px symbol-circle">
                                                                        <img src="{{ $item->img ? '' : asset('storage/images/profile.jpg') }}"
                                                                            alt="image">

                                                                    </div>
                                                                    <!--end::Avatar-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                                <!--begin::Info-->
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <div class="mb-1 text-gray-800 text-hover-primary">
                                                                        {{ $item->nomcomplet }}
                                                                    </div>
                                                                </div>
                                                                <!--end::Info-->
                                                            </div>
                                                            <!--end::User-->
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center justify-content-between">
                                                                <div class="menu-item px-3">
                                                                    <button onclick="openModal('{{ $item->id_Liv }}')"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#kt_modal_new_target"
                                                                        class="btn">
                                                                        <i class="fa fa-eye"></i>
                                                                    </button>
                                                                </div>
                                                                
                                                                <div class="menu-item px-3">
                                                                    <a href="{{route('admin.livreur.edit',$item->id_Liv)}}"
                                                                        class="menu-link px-3">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="menu-item px-3">
                                                                    <a href="{{route('admin.livreur.editPass',$item->id_Liv)}}"
                                                                        class="menu-link px-3">
                                                                        <i class="fa-solid fa-key"></i>
                                                                    </a>
                                                                </div>
                                                                {{-- <div class="menu-item px-3">
                                                                    <a onclick="openModalModify(
                                                                        '{{ $item->nommagasin }}',
                                                                        '{{ $item->nomcomplet }}',
                                                                        '{{ $item->email }}',
                                                                        '{{ $item->cin }}',
                                                                        '{{ $item->Phone }}',
                                                                        '{{ $item->adress }}',
                                                                        '{{ $item->nombanque }}',
                                                                        '{{ $item->numerocompte }}',
                                                                        '{{ route('admin.Livreur.update', $item->id_Cl) }}'
                                                                    )"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#kt_modal_new_target_MC"
                                                                        class="menu-link px-3">
                                                                        <i class="fa fa-edit"></i>
                                                                    </a>
                                                                </div>
                                                                @if ($item->isActive == 0)
                                                                    <div class="menu-item px-3">
                                                                        <form
                                                                            action="{{ route('admin.Livreur.activer', $item->id_Cl) }}"
                                                                            method="POST">
                                                                            @method('PUT')
                                                                            @csrf
                                                                            <button type="submit"
                                                                                class="menu-link px-3 btn text-danger"
                                                                                data-kt-ecommerce-product-filter="delete_row">
                                                                                <i class="fa fa-check"></i>
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                @endif

                                                                @if ($item->isActive == 1)
                                                                    <div class="menu-item px-3">
                                                                        <form
                                                                            action="{{ route('admin.Livreur.desactiver', $item->id_Cl) }}"
                                                                            method="POST">
                                                                            @method('PUT')
                                                                            @csrf
                                                                            <button type="submit"
                                                                                class="menu-link px-3 btn"
                                                                                data-kt-ecommerce-product-filter="delete_row">
                                                                                <i class="fa fa-times"></i>
                                                                            </button>
                                                                        </form>
                                                                    </div>
                                                                @endif --}}
                                                                <div class="menu-item px-3">
                                                                    {{-- <form action="{{ route('admin.newuser.delete', $item->id_Cl) }}" method="POST">

                                                                        @method('DELETE')
                                                                        @csrf
                                                                        <button type="submit" class="menu-link px-3 btn text-danger" data-kt-ecommerce-product-filter="delete_row">
                                                                            <i class="fa fa-trash"></i>
                                                                        </button>
                                                                    </form> --}}

                                                                    {{-- <div class="menu-item px-3 col-4">
                                                                        <a onclick="openModal('{{ $item->nomcomplet }}','{{ $item->email }}','{{ route('newuser.update', $item->id_Cl) }}')"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#kt_modal_new_target"
                                                                            class="menu-link px-3"><i
                                                                                class="fa fa-edit"></i></a>
                                                                    </div> --}}
                                                                </div>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <!--end::Body-->
                                        </table>
                                    </div>
                                </div>
                                <!--end::Table-->
                            </div>
                            <!--end::Table container-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Tab pane-->
            </div>
        </div>
        <!--end::Content container-->
    </div>
    <script>
        $(document).ready(function() {
            $('#kt_filter_search').on('input', function() {
                filterLivreurs();
            });

            function filterLivreurs() {
                var searchText = $('#kt_filter_search').val().toLowerCase();
                // Filter card view
                // $('#kt_project_users_card_pane .card').each(function() {
                //     var cardText = $(this).text().toLowerCase();
                //     if ((cardText.includes(searchText) || searchText === '') &&
                //         (cardStatus === status || status === 'all')) {
                //         $(this).show();
                //     } else {
                //         $(this).hide();
                //     }
                // });

                // Filter table view
                $('#kt_project_users_table tbody tr').each(function() {
                    var rowText = $(this).text().toLowerCase();
                    console.log(rowText);
                    if ((rowText.includes(searchText) || searchText === '')) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });

        function openModal(id) {
            var users = @json($users);
            let bb = '';
            let item = users.find(ele => ele.id_Liv == id)
            bb += `
                <div class="">
                    <div class="d-flex flex-column ">
                        <div class="d-flex justify-content-center align-items-center  mb-2">
                            <div class="symbol symbol-35px symbol-circle">
                                <img src="{{asset('storage/images/profile.jpg') }}" alt="image">

                            </div>
                        </div>
                        <div class=" rounded text-dark fw-semibold text-start row" data-kt-element="message-text">
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="nom_livreur">Nom Livreur:</label>
                                <input type="text" id="nom_livreur" class="form-control" value="${item.nomcomplet}" readonly>
                            </div>
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="cin">CIN:</label>
                                <input type="text" id="cin" class="form-control" value="${item.cin}" readonly>
                            </div>
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="email">Adresse electronique:</label>
                                <input type="text" id="email" class="form-control" value="${item.email}" readonly>
                            </div>
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="phone">Numero de telephone:</label>
                                <input type="text" id="phone" class="form-control" value="${item.Phone}" readonly>
                            </div>
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="zone">Zone:</label>
                                <input  type='text' id="zone" class="form-control" value="${item.zone.zonename}" readonly>
                            </div>
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="ville">Ville:</label>
                                <input type="text" id="ville" class="form-control" value="${item.ville}" readonly>
                            </div>
                            <div class="form-group mb-3 col col-md-12">
                                <label class="fw-bold" for="adresse">Adresse:</label>
                                <textarea  id="adresse" class="form-control"  readonly> ${item.adress}</textarea>
                            </div>
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="fraislivraison">Frais livraison:</label>
                                <input  type='text' id="fraislivraison" class="form-control" value="${item.fraislivraison}"  readonly>
                            </div>
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="fraisrefus">Frais refus:</label>
                                <input  type='text'  id="fraisrefus" class="form-control" value="${item.fraisrefus}"  readonly>
                            </div>
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="nombanque">Bank:</label>
                                <input type="text" id="nombanque" class="form-control" value="${item.nombanque}" readonly>
                            </div>
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="numerocompte">Numero compte:</label>
                                <input type="text" id="numerocompte" class="form-control" value="${item.numerocompte}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            `;

            document.getElementById('show').innerHTML = bb;
        }

        function openModalModify(nommagasin,nomcomplet, email, cin, Phone, adress,
            nombanque, numerocompte, actionUrl) {
            // Set the zone name input value
            console.log(adress);
            document.getElementById('M_nommagasin').value = nommagasin;
            document.getElementById('M_nomcomplet').value = nomcomplet;
            document.getElementById('M_nommagasin').readOnly = true;
            document.getElementById('M_nomcomplet').readOnly = true;
            document.getElementById('M_email').readOnly = true;
            document.getElementById('M_email').value = email;
            document.getElementById('M_cin').value = cin;
            document.getElementById('M_Phone').value = Phone;
            document.getElementById('M_adress').value = adress;
            document.getElementById('M_nombanque').value = nombanque;
            document.getElementById('M_numerocompte').value = numerocompte;
            // document.getElementById('M_kt_modal_new_target_MC_cancel').style.display = 'none';


            document.getElementById('kt_modal_new_user_form').action = actionUrl;
            // document.getElementById('kt_modal_new_user_form').method = 'put';


        }
    </script>
@endsection
