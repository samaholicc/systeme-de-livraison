
@extends('layouts.admin.admin')
@section('content')
    <div id="kt_app_content" class="app-content flex-column-fluid">
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container container-xxl">
            <form id="kt_modal_new_message_form" method="POST" class="form" action="{{route('message.sendSMS')}}">
                @csrf
                <div class="card-footer pt-4 row" id="kt_drawer_chat_messenger_footer">
                    <div class="col-10 d-flex flex-stack">
                        <input class="col-8 form-control form-control-flush mb-3" name="to"
                            placeholder="Type to" >
                    </div>
                    <div class="col-10 d-flex flex-stack">
                        <textarea class="col-8 form-control form-control-flush mb-3" name="text" rows="1" data-kt-element="input"
                            placeholder="Type a message"></textarea>
                    </div>
                    <div class="col-2 d-flex flex-stack">
                        <button class="btn btn-primary" type="submit" data-kt-element="send">Send</button>

                    </div>
                </div>

            </form>
        </div>
        <!--end::Content container-->
    </div>
@endsection
