@extends('layouts.admin.admin')

@section('content')

<div id="kt_app_content_container" class="app-container container-xxl">
  <!--begin::Navbar-->
  <div class="card card-flush mb-9" id="kt_user_profile_panel">
    <!--begin::Hero nav-->
    <div class="card-header rounded-top bgi-size-cover h-200px" style="background-position: 100% 50%; background-image:url('{{ asset('storage/assets/media/misc/profile-head-bg.jpg') }}')"></div>
    <!--end::Hero nav-->
    <!--begin::Body-->
    <div class="card-body mt-n19">
      <!--begin::Details-->
      <div class="m-0">
        <!--begin: Pic-->
        <div class="d-flex flex-stack align-items-end pb-4 mt-n19">
          <div class="symbol symbol-125px symbol-lg-150px symbol-fixed position-relative mt-n3">
            <img src="{{ asset('storage/assets/media/avatars/300-3.jpg') }}" alt="image" class="border border-white border-4" style="border-radius: 20px" />
            <div class="position-absolute translate-middle bottom-0 start-100 ms-n1 mb-9 bg-success rounded-circle h-15px w-15px"></div>
          </div>
          <!--begin::Toolbar-->
          <div class="me-0">
            {{-- <button class="btn btn-icon btn-sm btn-active-color-primary justify-content-end pt-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
              <i class="fonticon-settings fs-2"></i>
            </button> --}}
            <!--begin::Menu 3-->
            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
              <!--begin::Heading-->
              <div class="menu-item px-3">
                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
              </div>
              <!--end::Heading-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">Create Invoice</a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link flex-stack px-3">Create Payment
                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Specify a target name for future usage and reference"></i></a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">Generate Bill</a>
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                <a href="#" class="menu-link px-3">
                  <span class="menu-title">Subscription</span>
                  <span class="menu-arrow"></span>
                </a>
                <!--begin::Menu sub-->
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">Plans</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">Billing</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <a href="#" class="menu-link px-3">Statements</a>
                  </div>
                  <!--end::Menu item-->
                  <!--begin::Menu separator-->
                  <div class="separator my-2"></div>
                  <!--end::Menu separator-->
                  <!--begin::Menu item-->
                  <div class="menu-item px-3">
                    <div class="menu-content px-3">
                      <!--begin::Switch-->
                      <label class="form-check form-switch form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                        <!--end::Input-->
                        <!--end::Label-->
                        <span class="form-check-label text-muted fs-6">Recuring</span>
                        <!--end::Label-->
                      </label>
                      <!--end::Switch-->
                    </div>
                  </div>
                  <!--end::Menu item-->
                </div>
                <!--end::Menu sub-->
              </div>
              <!--end::Menu item-->
              <!--begin::Menu item-->
              <div class="menu-item px-3 my-1">
                <a href="#" class="menu-link px-3">Settings</a>
              </div>
              <!--end::Menu item-->
            </div>
            <!--end::Menu 3-->
          </div>
          <!--end::Toolbar-->
        </div>
        <!--end::Pic-->
        <!--begin::Info-->
        <div class="d-flex flex-stack flex-wrap align-items-end">
          <!--begin::User-->
          <div class="d-flex flex-column">
            <!--begin::Name-->
            <div class="d-flex align-items-center mb-2">
              <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bolder me-1">{{ session('admin')['nomcomplet'] }}</a>
              <a href="#" class="" data-bs-toggle="tooltip" data-bs-placement="right" title="Account is verified">
                <!--begin::Svg Icon | path: icons/duotune/general/gen026.svg-->
                <span class="svg-icon svg-icon-1 svg-icon-primary">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                    <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor" />
                    <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white" />
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </a>
            </div>
            <!--end::Name-->
            <!--begin::Text-->
            {{-- <span class="fw-bold text-gray-600 fs-6 mb-2 d-block">Design is like a fart. If you have to force it, it’s probably shit.</span> --}}
            <!--end::Text-->
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap fw-semibold fs-7 pe-2">
              <a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary">Administrateur</a>
              <span class="bullet bullet-dot h-5px w-5px bg-gray-400 mx-3"></span>
              
            </div>
            <!--end::Info-->
          </div>
          <!--end::User-->
          <!--begin::Actions-->
          <div class="d-flex">
            <a href="{{route('signout')}}" class="btn btn-danger me-3" id="kt_drawer_chat_toggle">Log Out</a>
          </div>
          <!--end::Actions-->
        </div>
        <!--end::Info-->
      </div>
      <!--end::Details-->
    </div>
  </div>
  <!--end::Navbar-->
  <!--begin::Nav items-->
  <div id="kt_user_profile_nav" class="rounded bg-gray-200 d-flex flex-stack flex-wrap mb-9 p-2" data-kt-sticky="true" data-kt-sticky-name="sticky-profile-navs" data-kt-sticky-offset="{default: false, lg: '200px'}" data-kt-sticky-width="{target: '#kt_user_profile_panel'}" data-kt-sticky-left="auto" data-kt-sticky-top="70px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
    <!--begin::Nav-->
    <ul class="nav flex-wrap border-transparent">
      <!--begin::Nav item-->
      <li class="nav-item my-1">
        <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-6 fs-lg-base nav-link px-3 px-lg-4 mx-1 active" href="{{ route('admin.profile.overview') }}">Overview</a>
      </li>
      <li class="nav-item my-1">
        <a class="btn btn-sm btn-color-gray-600 bg-state-body btn-active-color-gray-800 fw-bolder fw-bold fs-6 fs-lg-base nav-link px-3 px-lg-4 mx-1" href="{{ route('editAdPass') }}">Edit Mot de Passe</a>
      </li>
     
    </ul>
    <!--end::Nav-->
  </div>
  <!--end::Nav items-->
  <!--begin::details View-->
  <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
    <!--begin::Card header-->
    <div class="card-header cursor-pointer">
      <!--begin::Card title-->
      <div class="card-title m-0">
        <h3 class="fw-bold m-0">Profile Details</h3>
      </div>
      <!--end::Card title-->
      <!--begin::Action-->
      <a href="{{route('editAd')}}" class="btn btn-sm btn-primary align-self-center">Edit Profile</a>
      <!--end::Action-->
    </div>
    <div class="card-body p-9">
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">Admin ID</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              <span class="fw-bold fs-6 text-gray-800">{{ $admin->id_Ad }}</span>
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">Store Name</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              <span class="fw-bold fs-6 text-gray-800">{{ $admin->nommagasin }}</span>
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">Full Name</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              <span class="fw-bold fs-6 text-gray-800">{{ $admin->nomcomplet }}</span>
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">Email</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              <span class="fw-bold fs-6 text-gray-800">{{ $admin->email }}</span>
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">Phone</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8 d-flex align-items-center">
              <span class="fw-bold fs-6 text-gray-800 me-2">{{ $admin->Phone }}</span>
              <span class="badge badge-success">Verified</span>
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">City</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              <span class="fw-bold fs-6 text-gray-800">{{ $admin->ville }}</span>
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">Address</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              <span class="fw-bold fs-6 text-gray-800">{{ $admin->adress }}</span>
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">Bank Name</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              <span class="fw-bold fs-6 text-gray-800">{{ $admin->nombanque }}</span>
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">Account Number</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              <span class="fw-bold fs-6 text-gray-800">{{ $admin->numerocompte }}</span>
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">Is Admin</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              <span class="fw-bold fs-6 text-gray-800">{{ $admin->isAdmin ? 'Yes' : 'No' }}</span>
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">CIN</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              <span class="fw-bold fs-6 text-gray-800">{{ $admin->cin }}</span>
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">Username</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              <span class="fw-bold fs-6 text-gray-800">{{ $admin->user }}</span>
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">Photo</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              <img src="{{ asset('storage/' . $admin->photo) }}" alt="Photo" class="img-fluid">
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">CIN Recto</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              <img src="{{ asset('storage/' . $admin->cinrecto) }}" alt="CIN Recto" class="img-fluid">
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">CIN Verso</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              <img src="{{ asset('storage/' . $admin->cinverso) }}" alt="CIN Verso" class="img-fluid">
          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
      
      <!--begin::Row-->
      <div class="row mb-7">
          <!--begin::Label-->
          <label class="col-lg-4 fw-semibold text-muted">RIB</label>
          <!--end::Label-->
          <!--begin::Col-->
          <div class="col-lg-8">
              {{-- <span class="fw-bold fs-6 text-gray-800">{{ $admin->RIB }}</span> --}}
              <img src="{{ asset('storage/' . $admin->RIB) }}" alt="RIB" class="img-fluid">

          </div>
          <!--end::Col-->
      </div>
      <!--end::Row-->
  </div>
  
    <!--end::Card body-->
  </div>
 
</div>
@endsection