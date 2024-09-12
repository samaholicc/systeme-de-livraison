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
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div id="customers_table_json_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12">
                                        <table id="customers_table_json"
                                            class="table table-striped table-bordered table-sm mb-0 no-footer "
                                            role="grid" aria-describedby="customers_table_json_info"
                                            style="width: 864px;">
                                            <thead>
                                                <tr role="row">
                                                    <th>Vendeur</th>
                                                    <th>Informations</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($list as $item)
                                                    <tr id="{{ $item->id_Cl }}" role="row" class="odd">
                                                        <td><b>Nom du magasin : </b>{{ $item->nommagasin }}<br>
                                                            <b>Nom complet : </b>{{ $item->nomcomplet }}<br>
                                                            {{-- <b>Type d entereprise : </b>{{ $item->typeentreprise }}<br> --}}
                                                            {{-- <b>CIN : </b>{{ $item->cin }}<br> --}}
                                                            {{-- <b>Site web : </b>{{ $item->siteweb }}<br> --}}
                                                            {{-- <b>Registre de commerce : {{ $item->siteweb }}</b> --}}
                                                        </td>
                                                        <td><b>Adresse electronique : </b>{{ $item->email }}<br>
                                                            {{-- <b>Mot de passe : </b>{{ $item->password }}<br> --}}
                                                            <b>Numero de telephone : </b>?{{ $item->Phone }}?<br>
                                                            {{-- <b>Ville : </b>{{ $item->ville }}<br> --}}
                                                            {{-- <b>Adresse : </b>{{ $item->adress }} --}}
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            <div class="btn-group" role="group">
                                                                <button onclick="openModal('{{ $item->id_Cl }}')"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#kt_modal_new_target" class="btn"><i
                                                                        class="fa fa-eye"></i></button>
                                                                <a href="{{ route('accept.profile', $item->id_Cl) }}"
                                                                    class="btn btn-primary">
                                                                    <i class="fa fa-plus"></i>
                                                                </a>
                                                                <form action="{{ route('deleteclient', $item->id_Cl) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" class="btn btn-danger">
                                                                        <i class="fa fa-trash"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                        <div id="customers_table_json_processing"
                                            class="dataTables_processing panel panel-default" style="display: none;">
                                            Processing...</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="customers_table_json_info" role="status"
                                            aria-live="polite">Affichage 1 a 1 de 1 entrees</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers"
                                            id="customers_table_json_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="customers_table_json_previous"><a href="#"
                                                        aria-controls="customers_table_json" data-dt-idx="0" tabindex="0"
                                                        class="page-link">Precedent</a></li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="customers_table_json" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item next disabled"
                                                    id="customers_table_json_next"><a href="#"
                                                        aria-controls="customers_table_json" data-dt-idx="2" tabindex="0"
                                                        class="page-link">Suivant</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
        <script>
            $(function() {
                tableNewCstmrs('customers_table_json');
            });

            function openModal(id) {


                var users = @json($list);
                if (users && users.length > 0) {
                    let bb = '';
                    // let id = /* the id you are looking for */ ;
                    let item = users.find(ele => ele.id_Cl == id);
                    if (item) {
                        bb += `
                <div class="">
                    <div class="d-flex flex-column ">
                        <div class="d-flex justify-content-center align-items-center  mb-2">
                            <div class="symbol symbol-35px symbol-circle">
                                <img src="{{ asset('storage/images/profile.jpg') }}" alt="image">

                            </div>
                        </div>
                        <div class=" rounded text-dark fw-semibold text-start row" data-kt-element="message-text">
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="nomcomplet">Nom Client:</label>
                                <input type="text" id="nomcomplet" class="form-control" value="${item.nomcomplet}" readonly>
                            </div>
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="nommagasin">Nom magasin:</label>
                                <input type="text" id="nommagasin" class="form-control" value="${item.nommagasin}" readonly>
                            </div>
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="typeentreprise">Type entreprise:</label>
                                <input type="text" id="typeentreprise" class="form-control" value="${item.typeentreprise}" readonly>
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
                            <div class="form-group mb-3 col col-md-12">
                                <label class="fw-bold" for="adresse">Adresse:</label>
                                <textarea  id="adresse" class="form-control"  readonly> ${item.adress}</textarea>
                            </div>
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="ville">Ville:</label>
                                <input type="text" id="ville" class="form-control" value="${item.cville.villename}" readonly>
                            </div>
                            <div class="form-group mb-3 col col-md-6">
                                <label class="fw-bold" for="siteweb">Site web:</label>
                                <input  type='text' id="siteweb" class="form-control" value="${item.siteweb}"  readonly>
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
                        // You might want to insert the generated HTML into the DOM
                        document.getElementById('show').innerHTML = bb;
                    } else {
                        console.log('User with specified id not found');
                    }
                } else {
                    console.log('No users available');
                }
                document.getElementById('show').innerHTML = bb;
            }
        </script>
    </div>
@endsection
