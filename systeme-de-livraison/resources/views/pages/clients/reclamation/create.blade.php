@extends('layouts.client.admin')
@section('breads')
<x-breadcrumb :breads="$breads" />

@endsection
@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Nouvelle reclamation<!--5-->
                            </h5>
                        </div>

                        <div class="card-body">

                            <form class="add-claim-form" action="claims?action=add-action" method="POST" id="ajax-form">

                                <div class="col-md-12 m-auto">
                                    <div class="form-group">
                                        <label>Objet</label>
                                        <input type="text" class="form-control" name="claim_object" value=""
                                            placeholder="Objet">
                                    </div>
                                </div>

                                <div class="col-md-12 ">
                                    <div class="form-group">
                                        <label>Message *</label>
                                        <textarea class="form-control" name="claim_msg" rows="1" placeholder="Message *"></textarea>
                                    </div>
                                </div>


                                <div class="form-actions">
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-info">Enregister</button>
                                        <button type="reset" class="btn btn-dark">Reset</button>
                                    </div>
                                </div>

                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
