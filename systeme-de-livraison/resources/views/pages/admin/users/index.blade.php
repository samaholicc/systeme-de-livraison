@extends('layouts.admin.admin')
@section('content')
    <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl mw-650px">
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
                        action="{{ route('admin.newuser.store') }}">
                        @csrf
                        <div class="mb-13 text-center">
                            <h1 class="mb-3" id="title">Nouvelle Utilisateur</h1>
                        </div>
                        <div class="row">
                            <div class=" col-md-12 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">photo</span>
                                </label>
                                <input type="file" class="form-control form-control-solid" id="photo"
                                    name="photo" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Nom complet</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Nom complet"
                                    id="nomcomplet" name="nomcomplet" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">CIN</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="CIN"
                                    id="cin" name="cin" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Numero de telephone</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Phone"
                                    id="Phone" name="Phone" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Email</span>
                                </label>
                                <input type="email" class="form-control form-control-solid" placeholder="Email"
                                    id="email" name="email" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Mot de passe</span>
                                </label>
                                <input type="password" class="form-control form-control-solid" placeholder="Mot de passe"
                                    id="password" name="password" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Confirmation de mot de passe</span>
                                </label>
                                <input type="password" class="form-control form-control-solid" placeholder="Mot de passe"
                                    id="cpassword" name="cpassword" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Ville</span>
                                </label>
                                <select name="ville" id="ville" class="form-control form-control-solid">
                                    <option value=""> selecte ville </option>
                                    @foreach ($villes as $item)
                                        <option value="{{ $item->villename }}"> {{ $item->villename }} </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Adresse</span>
                                </label>
                                <input type="text" class="form-control form-control-solid" placeholder="Adresse"
                                    id="adress" name="adress" />
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Nom du banque</span>
                                </label>
                                <select name="nombanque" id="nombanque" class="form-control form-control-solid">
                                    <option value=""> selecte Bank </option>
                                    @foreach ($tb as $item)
                                        <option value="{{ $item->nom }}"> {{ $item->nom }} </option>
                                    @endforeach
                                </select>
                                {{-- <input type="text" class="form-control form-control-solid" placeholder="Nom du banque"
                                    id="nombanque" name="nombanque" /> --}}
                            </div>
                            <div class=" col-md-6 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Numero du compte</span>
                                </label>
                                <input type="text" class="form-control form-control-solid"
                                    placeholder="Numero du compte" id="numerocompte" name="numerocompte" />
                            </div>

                            <!--begin::Input group=-->
                            <div class="fv-row mb-8 col-4">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">CIN Recto</span>
                                </label>
                                <input type="file" name="cinrecto" autocomplete="off" accept="image/*"
                                    class="form-control bg-transparent" />

                            </div>
                            <!--end::Input group=-->
                            <!--begin::Input group=-->
                            <div class="fv-row mb-8 col-4">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">CIN Verso</span>
                                </label>
                                <input type="file" name="cinverso" autocomplete="off" accept="image/*"
                                    class="form-control bg-transparent" />

                            </div>
                            <!--end::Input group=-->
                            <!--begin::Input group=-->
                            <div class="fv-row mb-8 col-4">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">RIB</span>
                                </label>
                                <input type="file" name="RIB" autocomplete="off" accept="image/*"
                                    class="form-control bg-transparent" />

                            </div>
                            <!--end::Input group=-->
                            <div class=" col-md-12 col mb-8 fv-row">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                    <span class="required">Role</span>
                                </label>
                                <select name="role" id="role" class="form-control form-control-solid">
                                    <option value=""> selecte Role </option>
                                    <option value="Admin">Admin</option>
                                    <option value="Moderateur">Moderateur</option>
                                    <option value="Equipe de suivi">Equipe de suivi</option>
                                </select>
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
                        class="form-control form-control-solid w-250px ps-14" placeholder="" />
                </div>
            </div>
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">

                <div class="w-100 mw-150px">
                    <select class="form-select form-select-solid" data-control="ville" data-hide-search="true"
                        data-placeholder="Ville" data-kt-ecommerce-product-filter="ville">
                        <option value="all">Toutes les villes</option>
                        @foreach ($villes as $item)
                            <option value="{{ $item->villename }}">{{ $item->villename }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="w-100 mw-150px">
                    <select class="form-select form-select-solid" data-control="role" data-hide-search="true"
                        data-placeholder="role" data-kt-ecommerce-product-filter="role">
                        <option value="all">Toutes les roles</option>
                        <option value="Admin">Admin</option>
                        <option value="Moderateur">Moderateur</option>
                        <option value="Equipe de suivi">Equipe de suivi</option>
                    </select>
                </div>
                <div class="w-100 mw-150px">
                    <select class="form-select form-select-solid" data-control="admin" data-hide-search="true"
                        data-placeholder="admin" data-kt-ecommerce-product-filter="admin">
                        <option value="all">Admins</option>
                        @foreach ($admins as $item)
                            <option value="{{ $item->nomcomplet }}">{{ $item->nomcomplet }}</option>
                        @endforeach
                    </select>
                </div>
                <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Nouvelle
                    Utilisateur</a>
            </div>
        </div>

        <div class="card-body pt-0">
            <table class="table align-middle table-row-dashed fs-6 gy-5  dataTable" id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Informations</th>
                        <th>role</th>
                        <th class="min-w-150px sorting" tabindex="0" aria-controls="kt_project_users_table"
                            rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending"
                            style="width: 0px;">Accepte par</th>
                        <th>DATE DE CREATION</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($users as $item)
                        <tr id="{{ $item->id_Ad }}" role="row" class="odd">
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <img src="{{ asset('storage/app/' . $item->photo) }}" alt="">
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="">
                                    <div class="ms-5">
                                        <a href="" data-kt-ecommerce-product-filter="nomcomplet"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $item->nomcomplet }}</a>
                                    </div>
                                </div>
                            </td>


                            <td class="pe-0" data-kt-ecommerce-product-filter="information">
                                <span class="fw-bold">Numero de telephone: {{ $item->Phone }} <br>
                                    Email: {{ $item->email }} <br>Adresse: {{ $item->adress }}
                                </span><br>
                                <span class="fw-bold">Ville: {{ $item->ville }} <br>
                                </span>
                            </td>
                            <td data-role="role" data-role-value="{{ strtolower($item->role) }}">
                                <div class="fw-semibold fs-6 text-gray-400">
                                    {{ $item->role ? $item->role : 'N/A' }}
                                </div>
                            </td>
                            <td data-role="admin" data-admin-value="{{ strtolower($item->referrer->nomcomplet) }}">
                                <div class="fw-semibold fs-6 text-gray-400">
                                    {{ $item->user ? $item->referrer->nomcomplet : 'N/A' }}
                                </div>
                            </td>
                            <td class="pe-0"data-kt-ecommerce-product-filter="date">
                                <span class="fw-bold">{{ $item->created_at }}</span>
                            </td>
                            <!--begin::Action=-->
                            <td class="row">
                                <div class="menu-item px-3 col-4">
                                    <a onclick="openModal(
                                        '{{ $item->nomcomplet }}',
                                        '{{ $item->email }}',
                                        '{{ $item->cin }}',
                                        '{{ $item->Phone }}',
                                        '{{ $item->ville }}',
                                        '{{ $item->adress }}',
                                        '{{ $item->nombanque }}',
                                        '{{ $item->numerocompte }}',
                                        '{{ $item->role }}',
                                        '{{ route('admin.newuser.update', $item->id_Ad) }}'
                                    )"
                                        data-bs-toggle="modal" data-bs-target="#kt_modal_new_target"
                                        class="menu-link px-3"><i class="fa fa-edit"></i></a>
                                </div>


                                <div class="menu-item px-3 col-4">
                                    <form action="{{ route('admin.newuser.delete', $item->id_Ad) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="menu-link px-3 btn text-danger"
                                            data-kt-ecommerce-product-filter="delete_row"><i
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
            $('[data-kt-ecommerce-product-filter="ville"]').on('change', function() {
                var selectedCity = $(this).val();
                filterTableByCity(selectedCity);
            });

            $('[data-kt-ecommerce-product-filter="role"]').on('change', function() {
                var selectedRole = $(this).val();
                filterTableByRole(selectedRole);
            });

            $('[data-kt-ecommerce-product-filter="admin"]').on('change', function() {
                var selectedAdmin = $(this).val().toLowerCase();
                filterTableByAdmin(selectedAdmin);
            });
        });

        function filterTableByCity(city) {
            if (city === 'all') {
                $('#kt_ecommerce_products_table tbody tr').show();
            } else {
                $('#kt_ecommerce_products_table tbody tr').each(function() {
                    var rowCity = $(this).find('span:contains("Ville")').text().trim().toLowerCase();
                    if (rowCity.includes(city.toLowerCase())) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        }

        function filterTableByRole(role) {
            if (role === 'all' || role === '') {
                $('#kt_ecommerce_products_table tbody tr').show();
            } else {
                $('#kt_ecommerce_products_table tbody tr').each(function() {
                    var rowRole = $(this).find('td[data-role="role"]').attr('data-role-value').toLowerCase();
                    if (rowRole === role.toLowerCase()) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        }

        function filterTableByAdmin(selectedAdmin) {
            if (selectedAdmin === 'all' || selectedAdmin === '') {
                $('#kt_ecommerce_products_table tbody tr').show();
            } else {
                $('#kt_ecommerce_products_table tbody tr').each(function() {
                    var rowAdmin = $(this).find('td[data-role="admin"]').attr('data-admin-value').toLowerCase();
                    if (rowAdmin === selectedAdmin) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        }


        var users = @json($users);


        function openModal(nomcomplet, email, cin, Phone, ville, adress,
            nombanque, numerocompte,role, actionUrl = "{{ route('newuser.store') }}") {

            document.getElementById('nomcomplet').value = nomcomplet;
            // document.getElementById('nomcomplet').readOnly = true;
            // document.getElementById('email').readOnly = true;
            document.getElementById('email').value = email;
            document.getElementById('cin').value = cin;
            document.getElementById('Phone').value = Phone;
            document.getElementById('ville').value = ville;
            document.getElementById('adress').value = adress;
            document.getElementById('nombanque').value = nombanque;
            document.getElementById('numerocompte').value = numerocompte;
            // document.getElementById('role').value = role;
            document.getElementById('kt_modal_new_target_cancel').style.display = 'none';

            var roleSelect = document.getElementById('role');
            var options = roleSelect.options;

            for (var i = 0; i < options.length; i++) {
                if (options[i].value === role) {
                    roleSelect.selectedIndex = i;
                    break;
                }
            }

            document.getElementById('title').innerHTML = "Modifier les information d'Utilisateur";
            document.getElementById('kt_modal_new_user_form').action = actionUrl;
            // document.getElementById('kt_modal_new_user_form').method = 'put';


        }
    </script>
@endsection
