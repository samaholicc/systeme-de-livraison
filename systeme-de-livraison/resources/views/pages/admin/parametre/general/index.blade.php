@extends('layouts.admin.admin')
@section('content')
<div class="container m-5">
  <div class="page-body">
      
    <div class="row">
        <div class="col-6">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title" class="card-title">LOGO</h5>
                            </div>
                            <div class="card-body">
                                <form class="edit-logo-form" action="" method="POST" enctype="multipart/form-data" id="ajax-form-logo">
                                    @csrf
                                    <img class="form-img-type-1" style="display:block;margin:0px auto" width="80" src="{{ asset('storage/images/logo.png') }}">
                                    <input onchange="readURLLogoGeneral(this);" type="file" name="company_logo" style="display:none" accept="image/x-png,image/jpg,image/jpeg">
                                    <br>
                                    <div class="form-actions">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-info" onclick="document.querySelector('[name=company_logo]').click()">Choisir un fichier</button>
                                            <button type="submit" class="btn btn-info">Mettre à jour</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Favicon</h5>
                            </div>
                            <div class="card-body">
                                <form class="edit-favicon-form" action="" method="POST" enctype="multipart/form-data" id="ajax-form-favicon">
                                    @csrf
                                    <img class="form-img-type-1" style="display:block;margin:0px auto" width="80" src="{{ asset('storage/images/logo.png') }}">
                                    <input onchange="readURLFavicon(this);" type="file" name="company_favicon" style="display:none" accept="image/x-png,image/jpg,image/jpeg">
                                    <br>
                                    <div class="form-actions">
                                        <div class="text-center">
                                            <button type="button" class="btn btn-info" onclick="document.querySelector('[name=company_favicon]').click()">Choisir un fichier</button>
                                            <button type="submit" class="btn btn-info">Mettre à jour</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Informations</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" id="ajax-form-infos">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 m-auto">
                                    <div class="form-group">
                                        <label>Nom de l'entreprise</label>
                                        <input type="text" class="form-control" name="company_name" value="Sebbar Livraison" placeholder="Nom de l'entreprise">
                                    </div>
                                </div>
                                <div class="col-md-6 m-auto">
                                    <div class="form-group">
                                        <label>Web site</label>
                                        <input type="text" class="form-control" name="company_website" value="https://sebbarlivraison.com/demo/" placeholder="Web site">
                                    </div>
                                </div>
                                <div class="col-md-12 m-auto">
                                    <div class="form-group">
                                        <label>Adresse de l'entreprise</label>
                                        <input type="text" class="form-control" name="company_address" value="Casablanca" placeholder="Adresse de l'entreprise">
                                    </div>
                                </div>
                                <div class="col-md-6 m-auto">
                                    <div class="form-group">
                                        <label>Telephone de l'entreprise</label>
                                        <input type="text" class="form-control" name="company_phone" value="0663605392" placeholder="Telephone de l'entreprise">
                                    </div>
                                </div>
                                <div class="col-md-6 m-auto">
                                    <div class="form-group">
                                        <label>Email de l'entreprise</label>
                                        <input type="text" class="form-control" name="company_email" value="Contact@sebbarlivraison.com" placeholder="Email de l'entreprise">
                                    </div>
                                </div>
                                <div class="col-md-6 m-auto">
                                    <div class="form-group">
                                        <label>Monnaie de l'application</label>
                                        <input type="text" class="form-control" name="app_currency" value="Dhs" placeholder="Monnaie de l'application">
                                    </div>
                                </div>
                                <div class="col-md-6 m-auto">
                                    <div class="form-group">
                                        <label>Lien de site Web</label>
                                        <input type="text" class="form-control" name="app_website_link" value="https://sebbarlivraison.com/demo/" placeholder="Lien de site Web">
                                    </div>
                                </div>
                                <div class="col-md-6 m-auto">
                                    <div class="form-group">
                                        <label>Lien administrateur</label>
                                        <input type="text" class="form-control" name="app_admin_link" value="https://sebbarlivraison.com/demo/panel/" placeholder="Lien administrateur">
                                    </div>
                                </div>
                                <div class="col-md-6 m-auto">
                                    <div class="form-group">
                                        <label>Lien clients</label>
                                        <input type="text" class="form-control" name="app_customer_link" value="https://sebbarlivraison.com/demo/clients/" placeholder="Lien clients">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info">Mettre à jour</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Remarque Header</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" id="ajax-form-notice">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 m-auto">
                                    <div class="form-group">
                                        <label>Remarque</label>
                                        <input type="text" class="form-control" name="notic_msg" value="My Colis" placeholder="Remarque">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info">Mettre à jour</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Reseaux sociaux</h5>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST" id="ajax-form-social">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 m-auto">
                                    <div class="form-group">
                                        <label>Facebook</label>
                                        <input type="text" class="form-control" name="social_fb" value="https://www.facebook.com/" placeholder="Facebook">
                                    </div>
                                </div>
                                <div class="col-md-12 m-auto">
                                    <div class="form-group">
                                        <label>Instagram</label>
                                        <input type="text" class="form-control" name="social_insta" value="https://instagram.com/" placeholder="Instagram">
                                    </div>
                                </div>
                                <div class="col-md-12 m-auto">
                                    <div class="form-group">
                                        <label>Youtube</label>
                                        <input type="text" class="form-control" name="social_yt" value="https://www.youtube.com/" placeholder="Youtube">
                                    </div>
                                </div>
                                <div class="col-md-12 m-auto">
                                    <div class="form-group">
                                        <label>Twitter</label>
                                        <input type="text" class="form-control" name="social_tw" value="" placeholder="Twitter">
                                    </div>
                                </div>
                                <div class="col-md-12 m-auto">
                                    <div class="form-group">
                                        <label>LinkedIn</label>
                                        <input type="text" class="form-control" name="social_lnkd" value="" placeholder="LinkedIn">
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="text-center">
                                    <button type="submit" class="btn btn-info">Mettre à jour</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

</div>


@endsection
