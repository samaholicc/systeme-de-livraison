<div class="sidebar-modal">  
  <div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
              <i class="bx bx-x"></i>
            </span>
          </button>
          <h2 class="modal-title" style="background-color: #aaa;height:130px"  id="myModalLabel2">
            <a class="side-bar-header" href="">
              <img src="{{ asset('storage/images/l.png') }}" height="300" style="width: 400px" class="logo-header" alt="Logo">
              
            </a>
          </h2>
        </div>
        <div class="modal-body">
          <div class="sidebar-modal-widget">
            <h3 class="title">À propos de nous</h3>
            <p>Livraison œuvre avec rapidité et agilité et assure une distribution transparente de bout en bout avec passion et engagement.</p>
          </div>
          <div class="sidebar-modal-widget">
            <h3 class="title">Liens supplémentaires</h3>
            <ul>
              <li>
                <a href="{{ route('auth.client.signIn') }}">Espace client</a>
              </li>
              <li>
                <a href="{{ route('auth.client.signUp') }}">Devenir client</a>
              </li>
            
            </ul>
          </div>
          <div class="sidebar-modal-widget">
            <h3 class="title">Contact Info</h3>
            <ul class="contact-info">
              <li>
                <i class="bx bx-location-plus"></i>
                ADRESSE
                <span>Fes</span>
              </li>
              <li>
                <i class="bx bx-envelope"></i>
                Email
                <span>contact@livraison.ma</span>
              </li>
              <li>
                <i class="bx bxs-phone-call"></i>
                TÉLÉPHONE
                              
                <span>0600000000</span>
              </li>
            </ul>
          </div>
          <div class="sidebar-modal-widget">
            <h3 class="title">Connecte-toi avec nous</h3>
            <ul class="social-list">
            
           <li>
          <a href="">
            <i class="bx bxl-facebook"></i>
          </a>
        </li>
        <li>
          <a href="">
            <i class="bx bxl-instagram"></i>
          </a>
        </li>
      
        <li>
          <a href="">
            <i class="bx bxl-youtube"></i>
          </a>
        </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>