@extends('layouts.admin.admin')
@section('breads')
    <x-breadcrumb :breads="$breads" />
@endsection
@section('content')
    <div class="container">
        <div class="w-lg-100 p-10">
            <form action="{{ route('admin.client.updateclientPassword', $client->id_Cl) }}" method="post" class="form w-100 row"
                enctype="multipart/form-data" id="kt_sign_up_form">
                @csrf
                @method('PUT')
                <div class="text-center mb-11">
                    <h1 class="text-dark fw-bolder mb-3">Edit Mot de Passe de client</h1>
                </div>
                <div class="fv-row mb-8 col-12">
                    <label class="fw-bold" for="nom_client">Nom client:</label>
                    <input type="text" placeholder="Nom Complet" name="nomcomplet" value="{{ $client->nomcomplet }}"
                      readonly  class="form-control bg-transparent" />
                </div>
                
                <div class="fv-row mb-8 col-6"> 
                    <label class="fw-bold" for="password">Password:</label>

                    <input type="password" placeholder="Password" name="password"
                    value="{{old('password')}}" class="form-control bg-transparent" />
                </div>
                <div class="fv-row mb-8 col-6"> 
                    <label class="fw-bold" for="confirmpassword">Confirm Password:</label>

                    <input type="password" placeholder="Confirm Password" name="confirmpassword"
                    value="{{old('confirmpassword')}}" class="form-control bg-transparent" />
                </div>
                <div class="d-grid mb-10">
                    <button type="submit" class="btn btn-primary">
                        <span class="indicator-label">Edit Mot de Passe</span>
                        <span class="indicator-progress">Please wait...<span
                                class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                </div>
            </form>

        </div>
    </div>

@endsection
