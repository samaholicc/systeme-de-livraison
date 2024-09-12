@extends('layouts.client.admin')
@section('breads')
    <x-breadcrumb :breads="$breads" />
@endsection
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="container">
        <div class="card">
            <div class="card-header "><div class="card-title">{{ __('Create Colis') }}</div></div>

            <div class="card-body">
                <form method="POST" action="{{ route('colis.store') }}">
                    @csrf
                    <div class="form-group row">
                      


                        <div class="form-group col-md-6 ">
                            <label for="destinataire"
                                class="col-md-4 col-form-label text-md-right">{{ __('Destinataire') }}</label>

                            <div class="">
                                <input id="destinataire" type="text"
                                    class="form-control @error('destinataire') is-invalid @enderror" name="destinataire"
                                    value="{{ old('destinataire') }}" required autocomplete="destinataire">
                                <x-error field='destinataire' />
                            </div>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="marchandise"
                                class="col-md-4 col-form-label text-md-right">{{ __('Marchandise') }}</label>

                            <div class="">
                                <input id="marchandise" type="text"
                                    class="form-control @error('marchandise') is-invalid @enderror" name="marchandise"
                                    value="{{ old('marchandise') }}" required autocomplete="marchandise">
                                <x-error field='marchandise' />
                            </div>
                        </div>

                        <div class="form-group col-md-4 ">
                            <label for="telephone"
                                class="col-md-4 col-form-label text-md-right">{{ __('Telephone') }}</label>

                            <div class="">
                                <input id="telephone" type="text"
                                    class="form-control @error('telephone') is-invalid @enderror" name="telephone"
                                    value="{{ old('telephone') }}" required autocomplete="telephone">
                                <x-error field='telephone' />
                            </div>
                        </div>

                        

                        <div class="form-group col-md-4 ">
                            <label for="quantite" class="col-md-4 col-form-label text-md-right">{{ __('Quantite') }}</label>

                            <div class="">
                                <input id="quantite" type="number"
                                    class="form-control @error('quantite') is-invalid @enderror" name="quantite"
                                    value="{{ old('quantite') }}" required autocomplete="quantite">
                                <x-error field='quantite' />
                            </div>
                        </div>

                        <div class="form-group col-md-4 ">
                            <label for="prix" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>

                            <div class="">
                                <input id="prix" type="number"
                                    class="form-control @error('prix') is-invalid @enderror" name="prix"
                                    value="{{ old('prix') }}" required>
                                <x-error field='prix' />
                            </div>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="zone" class="col-md-4 col-form-label text-md-right">{{ __('Zone') }}</label>

                            <div class="">
                                <select id="zone" class="form-control @error('zone') is-invalid @enderror"
                                    name="zone">
                                    <option value="">Select Zone</option>
                                    @foreach ($zones as $item)
                                        <option value="{{ $item->id_Z }}">{{ $item->zonename }}</option>
                                    @endforeach
                                </select>
                                <x-error field='zone' />
                            </div>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="ville_id" class="col-md-4 col-form-label text-md-right">{{ __('Ville') }}</label>

                            <div class="">
                                <select id="ville_id" class="form-control @error('ville_id') is-invalid @enderror"
                                    name="ville_id">
                                    <option value="">Select Ville</option>
                                    {{-- @foreach ($villes as $item)
                                        <option value="{{ $item->id_V }}">{{ $item->villename }}</option>
                                    @endforeach --}}
                                </select>
                                <x-error field='ville_id' />
                            </div>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="zone" class="col-md-4 col-form-label text-md-right">{{ __('Adress') }}</label>

                            <div class="">
                                <textarea name="adresse" rows="2" class="form-control @error('prix') is-invalid @enderror" id="" cols=""
                                    rows="1">{{ old('prix') }}</textarea>
                                <x-error field='adresse' />
                            </div>
                        </div>
                        <div class="form-group col-md-6 ">
                            <label for="zone"
                                class="col-md-4 col-form-label text-md-right">{{ __('commentaire') }}</label>

                            <div class="">
                                <textarea name="commentaire" rows="2"  class="form-control @error('prix') is-invalid @enderror" cols="" rows="1">{{ old('prix') }}</textarea>
                                <x-error field='commentaire' />
                            </div>
                        </div>

                        
                        <div class="form-group ">
                            <div class=" mt-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        var villes = @json($villes);
        const zoneSelect = document.getElementById('zone');
        const villeSelect = document.getElementById('ville_id');

        zoneSelect.addEventListener('change', () => {
            const selectedZoneId = zoneSelect.value; 
            const matchingVilles = villes.filter(ville => ville.id_Z === selectedZoneId);
            villeSelect.innerHTML = '<option value="">Select Ville</option>';

            if (matchingVilles.length > 0) {
                const options = matchingVilles.map(ville => (
                    `<option value="${ville.id_V}">${ville.villename}</option>`
                ));
                villeSelect.innerHTML = options.join('');
            } else {
                villeSelect.innerHTML = '<option value="">No villes found</option>';
            }
        });
    </script>
@endsection
