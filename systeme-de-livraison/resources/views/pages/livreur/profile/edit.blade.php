@extends('layouts.livreur.admin')
@section('breads')
    <x-breadcrumb :breads="$breads" />
@endsection
@section('content')


<div class="container">
    <div class="w-lg-100 p-10">
        <form action="{{ route('updateLiv', $livreur->id_Liv) }}" method="post" class="form w-100 row"
            enctype="multipart/form-data" id="kt_sign_up_form">
            @csrf
            @method('PUT')
            <div class="text-center mb-11">
                <h1 class="text-dark fw-bolder mb-3">Informations livreur</h1>
            </div>
            <div class="fv-row mb-8 col-6">
                <label class="fw-bold" for="nom_livreur">Nom Livreur:</label>
                <input type="text" placeholder="Nom Complet" name="nomcomplet" value="{{ $livreur->nomcomplet }}"
                    class="form-control bg-transparent" />
            </div>
            <div class="fv-row mb-8 col-6"> <label class="fw-bold" for="cin">CIN:</label>

                <input type="text" placeholder="CIN" name="cin" value="{{ $livreur->cin }}"
                    class="form-control bg-transparent" />
            </div>
            <div class="fv-row mb-8 col-6"> <label class="fw-bold" for="phone">Numero de telephone:</label>

                <input type="text" placeholder="Numero de telephone" value="{{ $livreur->Phone }}" name="Phone"
                    class="form-control bg-transparent" />
            </div>
            <div class="fv-row mb-8 col-6"> <label class="fw-bold" for="email">Adresse electronique:</label>

                <input type="text" placeholder="Email" name="email" value="{{ $livreur->email }}"
                    class="form-control bg-transparent" />
            </div>
            <div class="fv-row mb-8 col-6"> <label class="fw-bold" for="id_Z">Zone:</label>
                <select name="id_Z" id="id_Z" class="form-select">
                    @foreach ($zone as $zitem)
                        <option {{$livreur->id_Z === $zitem->id_Z? 'selected' :''}} value="{{ $zitem->id_Z }}">{{ $zitem->zonename }}</option>
                    @endforeach
                </select>
            </div>
            <div class="fv-row mb-8 col-6"> <label class="fw-bold" for="ville">Ville:</label>
                <select name="ville" id="ville_select" value="{{old('ville')}}" class="form-select">
                    <option value="{{ $livreur->ville }}">
                        {{ $livreur->ville }}</option>
                </select>
                {{-- <input type="text" placeholder="Ville" name="ville" value="{{ $livreur->ville }}"
                    class="form-control bg-transparent" /> --}}
            </div>
            <div class="fv-row mb-8 col-12"> <label class="fw-bold" for="adresse">Adresse:</label>

                <input type="text" placeholder="Adresse" name="adress" value="{{ $livreur->adress }}"
                    class="form-control bg-transparent" />
            </div>
            <div class="fv-row mb-8 col-6"> <label class="fw-bold" for="nombanque">Bank:</label>
                <select name="nombanque" id="nombanque" class="form-select">
                    @foreach ($tb as $item)
                        <option {{$livreur->nombanque === $item->nom? 'selected' :''}} value="{{ $item->nom }}">{{ $item->nom }}</option>
                    @endforeach
                </select>
                {{-- <input type="text" placeholder="Banque" name="nombanque" value="{{ $livreur->nombanque }}"
                    class="form-control bg-transparent" /> --}}
            </div>
            <div class="fv-row mb-8 col-6"> <label class="fw-bold" for="numerocompte">Numero compte:</label>

                <input type="text" placeholder="Numero du compte" name="numerocompte"
                    value="{{ $livreur->numerocompte }}" class="form-control bg-transparent" />
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
    const zoneSelect = document.getElementById('id_Z');
    const villeSelect = document.getElementById('ville_select');
    var zones = @json($zone);
    zoneSelect.addEventListener('change', function() {
        const selectedZoneId = this.value;
        let data = zones.find(ele => ele.id_Z == selectedZoneId).ville;
        villeSelect.innerHTML = '';
        data.forEach(city => {
            const option = document.createElement('option');
            option.value = city.villename;
            option.textContent = city.villename;
            villeSelect.appendChild(option);
        });
    });
</script>
@endsection