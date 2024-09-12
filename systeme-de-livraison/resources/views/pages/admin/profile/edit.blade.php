@extends('layouts.admin.admin')
@section('breads')
    <x-breadcrumb :breads="$breads" />
@endsection
@section('content')
    <div class="container">
        <div class="w-lg-100 p-10">
            <form action="{{ route('updateAd', $admin->id_Cl) }}" method="post" class="form w-100 row"
                enctype="multipart/form-data" id="kt_sign_up_form">
                @csrf
                @method('PUT')
                <div class="text-center mb-11">
                    <h1 class="text-dark fw-bolder mb-3">Informations admin</h1>
                </div>
                <div class="fv-row mb-8 col-6">
                    <label class="fw-bold" for="nom_admin">Nom admin:</label>
                    <input type="text" placeholder="Nom Complet" name="nomcomplet" value="{{ $admin->nomcomplet }}"
                        class="form-control bg-transparent" />
                </div>
                <div class="fv-row mb-8 col-6"> <label class="fw-bold" for="cin">CIN:</label>

                    <input type="text" placeholder="CIN" name="cin" value="{{ $admin->cin }}"
                        class="form-control bg-transparent" />
                </div>
                <div class="fv-row mb-8 col-6"> <label class="fw-bold" for="phone">Numero de telephone:</label>

                    <input type="text" placeholder="Numero de telephone" value="{{ $admin->Phone }}" name="Phone"
                        class="form-control bg-transparent" />
                </div>
                <div class="fv-row mb-8 col-6"> <label class="fw-bold" for="email">Adresse electronique:</label>

                    <input type="text" placeholder="Email" name="email" value="{{ $admin->email }}"
                        class="form-control bg-transparent" />
                </div>
                <div class="fv-row mb-8 col-6"> <label class="fw-bold" for="ville">Ville:</label>
                    <select name="ville" id="ville_select" value="{{ old('ville') }}" class="form-select">
                        <option value="{{ $admin->ville }}">
                            {{ $admin->ville }}</option>
                    </select>
                    {{-- <input type="text" placeholder="Ville" name="ville" value="{{ $admin->ville }}"
                    class="form-control bg-transparent" /> --}}
                </div>
                <div class="fv-row mb-8 col-6"> <label class="fw-bold" for="adresse">Adresse:</label>

                    <input type="text" placeholder="Adresse" name="adress" value="{{ $admin->adress }}"
                        class="form-control bg-transparent" />
                </div>
                <div class="fv-row mb-8 col-6"> <label class="fw-bold" for="nombanque">Bank:</label>
                    <select name="nombanque" id="nombanque" class="form-select">
                        @foreach ($tb as $item)
                            <option {{ $admin->nombanque === $item->nom ? 'selected' : '' }} value="{{ $item->nom }}">
                                {{ $item->nom }}</option>
                        @endforeach
                    </select>
                    {{-- <input type="text" placeholder="Banque" name="nombanque" value="{{ $admin->nombanque }}"
                    class="form-control bg-transparent" /> --}}
                </div>
                <div class="fv-row mb-8 col-6"> <label class="fw-bold" for="numerocompte">Numero compte:</label>

                    <input type="text" placeholder="Numero du compte" name="numerocompte"
                        value="{{ $admin->numerocompte }}" class="form-control bg-transparent" />
                </div>
                <div class="d-grid mb-10">
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Edit Info</span>
                        <span class="indicator-progress">Please wait...<span
                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </form>

        </div>
    </div>
    <script>
        const villeSelect = document.getElementById('ville_select');
        var villes = @json($ville);
        villes.forEach(city => {
            const option = document.createElement('option');
            option.value = city.villename;
            option.textContent = city.villename;
            villeSelect.appendChild(option);
        });
    </script>
@endsection
