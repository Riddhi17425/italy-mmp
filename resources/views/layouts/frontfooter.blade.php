  <!-- footer -->
  @php
    $category = DB::select(DB::raw("SELECT id,category_name, category_url from categories WHERE is_delete='0'"));
  @endphp
    @php
    $categories = DB::table('categories')
        ->leftJoin('product', function($join) {
            $join->on('categories.id', '=', 'product.category_id')
                 ->where('product.is_delete', '=', '0');
        })
        ->where('categories.is_delete', '0')
        ->select('categories.id as category_id', 'categories.category_name','categories.category_url', 'product.id as product_id', 'product.product_name', 'product.producturl')
        ->get()
        ->groupBy('category_id');
    @endphp
   @php
      $category = DB::select(DB::raw("SELECT id,category_name, category_url from categories WHERE is_delete='0'"));
      $product = DB::select(DB::raw("SELECT id,product_name from product WHERE is_delete='0'"));
    @endphp
  <footer>       
     <button type="button" class="fixed_btn_1"  data-bs-toggle="modal" data-bs-toggle="modal"data-bs-target="#exampleModal">Richiedi Ora</button>

        <!--<a href="https://api.whatsapp.com/send?phone=919830030614&text=Salve%21%0A%0AVi%20scrivo%20dal%20sito%20italy.mmpfilter.com%20%F0%9F%8C%90%0A%0ASono%20interessato%2Fi%20ai%20vostri%20filtri%20patentati%20per%20acqua%20e%20aria.%0APotreste%20inviarmi%20maggiori%20informazioni%2C%20listino%20prezzi%20o%20un%20preventivo%3F%0A%0AGrazie%20mille%20e%20buona%20giornata%21&lang=it&app_absent=0" target="_blank">-->
        <!--    <img style="cursor: pointer" src="https://www.mmpfilter.com/public/images/whatsapp.png" alt="whatsapp" class="bottom-whatsapp">-->
        <!--</a>-->
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div class="logo-img-footer">
                 <a href="https://mmpfilter.com/">
                    <img
                    src="{{ asset('public/front/images/footer-logo.png') }}"
                    alt="mmp-filter"
                    class="img-fluid"
                  />
              </a>
              
              <p>
                mmp innova soluzioni di filtrazione sostenibili per aria e acqua con l'obiettivo di migliorare la qualità della vita 
              </p>
              <img
              src="{{ asset('public/front/images/nsf-logo.png') }}"
              alt="nsf-logo"
              class="img-fluid"/>
              <p class="pt-2">MB OCEANIC<sup>®</sup> & LAGOON<sup>®</sup></p>
              <div class="social-icon">
                <ul class="d-flex flex-wrap">
                    <li class="mx-2"><a href="https://www.facebook.com/mmpfiltration" target="_blank" rel="nofollow"><img src="{{ asset('public/front/images/facebook.png') }}" alt="facebook"></a></li>
                    <li class="mx-2"><a href="https://www.instagram.com/mmpfiltration/" target="_blank" rel="nofollow"><img src="{{ asset('public/front/images/instagram.png') }}" alt="instagram"></a></li>
                    <li class="mx-2"><a href="https://www.linkedin.com/authwall?trk=bf&trkInfo=AQHilSqrjkZ_kQAAAYuQLTYg99cIu0_PGNw_AlhgxZG1CrZSmxC_CqVln6gn7SxtqA02ph3A-JHlDUln3GGFrrjx704gvihNwYBhH2jIsifmterM3kn2jOOK0g-bZ9c-Cf9Qze8=&original_referer=&sessionRedirect=https%3A%2F%2Fwww.linkedin.com%2Fcompany%2F101063774%2Fadmin%2Ffeed%2Fposts%2F" target="_blank" rel="nofollow"><img src="{{ asset('public/front/images/linkdin.png') }}" alt="linkdin"></a></li>
                    <li class="mx-2"><a href="https://www.youtube.com/@mmpfiltrationpvt.ltd.9372/featured" target="_blank" rel="nofollow"><img src="{{ asset('public/front/images/youtube.png') }}" alt="youtube"></a></li>
    
                </ul>
            </div>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-6">
            <div>
              <h4>Links</h4>
              <ul>
                <li><a href="{{ url('/')}}">Home</a></li>
                <li><a href="{{ route('about') }}">Chi Siamo</a></li>
                <li><a href="{{ route('certifications') }}">Certificazioni</a></li>
                <li><a href="{{ route('machinery') }}">Videos</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('event') }}">Eventi</a></li>
                <li><a href="{{ route('casestudy') }}">Studio di Caso</a></li>
                <li><a href="{{ route('contact') }}">Contattaci</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-6">
            <div>
              <h4>Products</h4>
              <ul>
              @foreach($categories as $category_id => $categoryGroup)
              @php
              $category = $categoryGroup->first();
              $catName = $category->category_name;
              $catUrl = $catUrl = url('prodotto/' . $category->category_url);
          @endphp
                <li><a href="{{ $catUrl }}">
                    {{ $catName }}</a></li>
              @endforeach  
              <li><a href="{{ asset('public/front/images/mmp-master-brochure-2025.pdf') }}" target="_blank">
                  E-Catalogo</a></li>
              
              </ul>

            </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-6">
            <div>
              <h4>Get in Touch</h4>
             <img src="{{ asset('public/front/images/italy_flag.png') }}" alt="italy_flag" class="me-3 mt-2 flag_img">
              
              <p class="mb-3 d-flex align-items-start mt-3"><img src="{{ asset('public/front/images/address.png') }}" alt="indirizzo" class="me-3 mt-2">
                <a target="_blank" class="m-0 address-width"
                href="https://www.google.com/maps/place/Via+Gioacchino+Rossini,+28,+20093+Cologno+Monzese+MI,+Italy/@45.5400419,9.2761878,17z/data=!3m1!4b1!4m6!3m5!1s0x4786b81349604a87:0x44d0319d462f570a!8m2!3d45.5400382!4d9.2787627!16s%2Fg%2F11c2dmrjg_?entry=ttu&g_ep=EgoyMDI1MDkyNC4wIKXMDSoASAFQAw%3D%3D"> 
               Via Rossini 28, Cologno Monzese (MI), Italy.</a>
              </p>
            <div class="mb-3 d-flex align-items-center">
            <img src="{{ asset('public/front/images/massege.png') }}" alt="messaggio" class="me-3 mt-2">
                <a href="mailto:m.radice@mffiltri.com">m.radice@mffiltri.com</a>
            </div>
            <div class="mb-3 d-flex align-items-center"> 
            <img src="{{ asset('public/front/images/phone.png') }}" alt="Telefono" class="me-3 mt-2">
                <a href="tel:+393286959896">+39 3286959896</a>
            </div>
            <!--<h4 class="pt-3">Contact for Dealership</h4>-->
            <!-- <div class="mb-3 d-flex align-items-center"> -->
            <!--<img src="{{ asset('public/front/images/phone.png') }}" alt="Telefono" class="me-3 mt-2">-->
            <!--    <a href="tel:+917043745709">+91 7043745709</a>-->
            <!--</div>-->
            
            <img src="{{ asset('public/front/images/india_flag.png') }}" alt="india_flag" class="me-3 mt-2 flag_img">
              
              <p class="mb-3 d-flex align-items-start mt-3"><img src="{{ asset('public/front/images/address.png') }}" alt="indirizzo" class="me-3 mt-2">
                <a target="_blank" class="m-0 address-width" href="https://www.google.com/maps/search/C3-602+Anushruti+Tower,+SG+Road,+Thaltej,+Ahmedabad+%E2%80%93+380059+Gujarat,+India/@23.053608,72.5150764,17z/data=!3m1!4b1?entry=ttu"> 
              C3-602 Anushruti Tower, SG Road, Thaltej, Ahmedabad – 380059 Gujarat, India</a>
              </p>
            <div class="mb-3 d-flex align-items-center">
            <img src="{{ asset('public/front/images/massege.png') }}" alt="messaggio" class="me-3 mt-2">
                <a href="mailto:ntodi@mmpfilter.com">ntodi@mmpfilter.com</a>
            </div>
            <div class="mb-3 d-flex align-items-center"> 
            <img src="{{ asset('public/front/images/phone.png') }}" alt="Telefono" class="me-3 mt-2">
                <a href="tel:+919830030030">+91 9830030030</a>
            </div>
           
          </div>
        </div>
       
      </div>
      <!--<div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">-->
      <!--  <aside id="nav_menu-2" class="widget widget_nav_menu">-->
      <!--      <div id="toggleLink" class="text-center position-relative" style="cursor: pointer; color:#fff;">-->
      <!--          <span id="linkText"> MMP Globally </span>-->
      <!--          <hr>-->
      <!--      </div>-->
      <!--  </aside>-->
    </div>
    <!-- .cspt-footer-widget -->
</div><!-- .row -->
<!--show more links-->
<!--<div class="container" id="contentToToggle">-->
<!--<div class="row">-->
<!--    <div class="col-xl-12">-->
<!--        <ul>-->
<!--        <li><a href="{{ route('filter-cartridges-in-usa') }}">Filter Cartridges in USA</a></li>-->
<!--        <li><a href="{{ route('melt-blown-filter-cartridges-in-usa') }}">Melt Blown Filter Cartridges in USA</a></li>-->
<!--        <li><a href="{{ route('pp-filtration-yarn-in-usa') }}">PP Filtration Yarn in USA</a></li>-->
<!--          <li><a href="{{ route('wound-filter-cartridges-in-usa') }}">Wound Filter Cartridges in USA</a></li>-->
<!--          <li><a href="{{ route('wound-filter-cartridges-machine-in-usa') }}">Wound Filter Cartridges Machine in USA</a></li>-->
<!--        </ul>-->
<!--    </div>-->
<!--</div>-->
<!--</div>-->
    </footer>
    <div class="copyright-bg">
      <div class="container-fluid p-0">
        <div class="row w-100">
          <div class="col-md-12 p-0">
            <div class="d-flex justify-content-center align-items-center p-3">
              <p class="m-0 text-center"> &#169;Copyright <?php echo date('Y') ?> <a href="https://mmpfilter.com/">mmp Filter.</a> Tutti i diritti riservati.</p>             
            </div>
          </div>
        </div>
      </div>    
    </div>
    
    <button
        type="button"
        class="btn-floating btn-lg"
        id="btn-back-to-top"
        >   
      <i class="fa fa-arrow-up" aria-hidden="true"></i>
    </button>
    @if(!in_array(Route::currentRouteName(), ['contact', 'thank-you']))
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog d-flex">
        <div class="modal-content left_ft_modal">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
            </div>
            <div class="modal-body">
                <h5 class="mb-4 mt-2 ms-2">I nostri Punti di Forza</h5>
                <ol>
                    <li>Oltre 2 decenni di esperienza nelle soluzioni di filtrazione</li>
                    <li>Prodotti certificati NSF</li>
                    <li>Team esperto e dedicato</li>
                    <li>Fornitore di servizi a livello globale</li>
                    <li>Soluzioni di filtrazione personalizzabili</li>
                    <li>Ampia copertura industriale</li>
                </ol>
                <h5 class="mt-5 mb-3"><b>Puoi contattarci anche tramite:</b></h5>
                <h5 class="mb-2 mt-2 ">Italy</h5>
                Email: <a href="mailto:m.radice@mffiltri.com">m.radice@mffiltri.com</a><br>
                Telefono: <a href="tel:+393286959896">+39 3286959896</a>
               
                <h5 class="mb-2 mt-2 ">India</h5>
                 Email: <a href="mailto:ntodi@mmpfilter.com">ntodi@mmpfilter.com</a>
                <br>
                Telefono: <a href="tel:+919830030030">+91 9830030030</a>
            </div>
        </div>

        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="exampleModalLabel"><strong>Modulo di richiesta</strong></p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
            </div>
            <div class="modal-body">
                
                <form method="post" action="{{ route('headerinquiry') }}" id="headerinquiry1">
                    @csrf
                    <input type="text" name="website_url" style="display:none">
        
                    <div class="mb-3">
                        <div class="form-group">
                            <input type="text" placeholder="" required name="name" id="name_set"
                                oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s{2,}/g, ' ').trimStart();" />
                            <label for="name_set">Nome <span style="color:red">*</span></label>
                            <span class="error-message"></span>
                        </div>
                    </div>
        
                    <div class="mb-3">
                        <div class="form-group">
                            <select class="inquiry_select" name="product_type" required id="product_type" onchange="toggleOtherProduct(this.value)">
                                <option value="">Seleziona prodotto <span style="color:red">*</span></option>
                                @foreach ($product as $productname)
                                    <option value="{{ $productname->product_name }}">{{ $productname->product_name }}</option>
                                @endforeach
                                <option value="other">Altro</option>
                            </select>
                            <span class="error-message"></span>
                        </div>
                    </div>
        
                    <div class="mb-3" id="other_product_div" style="display: none;">
                        <div class="form-group">
                            <input type="text" placeholder="" name="other_product" id="other_product_set" />
                            <label for="other_product_set">Inserisci Prodotto <span style="color:red">*</span></label>
                            <span class="error-message"></span>
                        </div>
                    </div>
        
                    <div class="mb-3">
                        <div class="form-group">
                            <input type="email" placeholder="" name="email" required id="email_set" />
                            <label for="email_set">Email <span style="color:red">*</span></label>
                            <span class="error-message"></span>
                        </div>
                    </div>
        
                    <div class="mb-3">
                        <div class="form-group">
                            <input type="text" placeholder="" name="phone" required id="phone_set" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);" />
                            <label for="phone_set">Numero di Telefono <span style="color:red">*</span></label>
                            <span class="error-message"></span>
                        </div>
                    </div>
        
                    <div class="mb-3">
                        <div class="form-group">
                            <input type="text" placeholder="" name="company_name" required id="company_name_set" />
                            <label for="company_name_set">Nome Azienda <span style="color:red">*</span></label>
                            <span class="error-message"></span>
                        </div>
                    </div>
        
                    <div class="mb-3">
                        <div class="form-group">
                            <textarea name="message" id="message_set" required cols="" rows="" class="w-100" placeholder=" "></textarea>
                            <label for="message_set">Messaggio</label>
                        </div>
                    </div>
        
                    <div class="mb-3">
                        <div class="form-group">
                            <div id="captcha-header" data-sitekey="6Lc2cg0sAAAAAKmVVEUvIDR61vxyYWi_BmanSqth"></div>
                            <input type="hidden" id="g-recaptcha-response-header" name="g-recaptcha-response">
                            <div id="captcha-error-header" class="error-message"></div>
                        </div>
                    </div>
        
                    <div class="modal-footer d-flex theme-btn">
                        <button type="button" id="headerinquirysubmit1" class="btn-add">
                            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span><p>Invia Messaggio</p>
                        </button>
                    </div>
                </form>
                
            </div>
        </div>
        </div>
    </div>
    @endif
<!--<div class="modal fade" id="exampleModal-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">-->
<!--  <div class="modal-dialog custom-dialog">-->
<!--    <div class="modal-content">-->
<!--      <div class="modal-header text-center">-->
<!--        <h5 class="modal-title text-center" id="exampleModalLabel">Chat with us on WhatsApp</h5>-->
<!--         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
<!--      </div>-->
<!--      <div class="modal-body">-->
<!--        <form method="POST" action="{{ route('whatsaapinquiry') }}">-->
<!--            @csrf-->
<!--                <div class="mb-3">-->
<!--                        <div class="form-group">-->
<!--                            <textarea placeholder="" required name="message" id="message_set" -->
<!--                                ></textarea>-->
<!--                            <label for="message_set">Message <span style="color:red">*</span></label>-->
<!--                            <span class="error-message"></span>-->
<!--                        </div>-->
<!--                         <div class="mb-3">-->
<!--                        <div class="form-group">-->
<!--                            <input type="text" placeholder="" name="number" required id="number_set" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);" />-->
<!--                            <label for="number_set">Contact No. <span style="color:red">*</span></label>-->
<!--                            <span class="error-message"></span>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                        <button type="submit" class="form-control theme-btn btn">Start Chat with Us</button>-->
<!--                    </div>-->
<!--                    </div>-->
<!--                </div>    -->
<!--        </form>-->
<!--      </div>-->
     
<!--    </div>-->
<!--  </div>-->
<!--</div>-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/css/intlTelInput.css">


<style>
      /* ===== MODAL DESIGN ===== */
      .Whats_mpp_modal .popup-box_whatsapp {
          border-radius: 16px;
          /* overflow: hidden;   */
      }

      /* Header */
      .Whats_mpp_modal .popup-header {
          background: #22285f;
          color: #fff;
          padding: 15px 20px;
      }

      .Whats_mpp_modal .popup-header h5 {
          margin: 0;
          font-weight: 600;
      }

      .Whats_mpp_modal .white-close {
          filter: invert(1);
      }

      /* Body */
      .Whats_mpp_modal .popup-box_whatsapp .modal-body {
          padding: 25px;
      }

      /* Inputs */
      .Whats_mpp_modal .popup-input {
          border-radius: 12px;
          height: 50px;
          border: 1px solid #ddd;
          box-shadow: none !important;
      }

      .Whats_mpp_modal .popup-input:focus {
          border-color: #22285f;
      }

      /* Textarea */
      .Whats_mpp_modal textarea.popup-input {
          height: 90px;
      }

      /* Button */
      .Whats_mpp_modal .popup-btn {
          background: #22285f;
          color: #fff;
          height: 50px;
          border-radius: 12px;
          font-weight: 600;
          border: none;
      }

      .Whats_mpp_modal .popup-btn:hover {
          background: #22285f;
          color: #fff;
      }

      /* intl tel input full width */
      .Whats_mpp_modal .iti {
          width: 100%;
      }

      .Whats_mpp_modal .iti__selected-flag {
          border-radius: 10px 0 0 10px;
      }

      /* Remove modal scroll */
      .Whats_mpp_modal .modal-dialog {
          max-width: 420px;
      }

      .Whats_mpp_modal .modal-content {
          /* overflow: hidden; */
      }
.WhatsAppButton_mpp {
    background: #14a614;
    position: fixed;
    bottom: 35px;
    right: 0px;
    z-index: 9999;
    width: 45px;
    height: 45px;
    border-radius: 5px 0 0 5px;
  cursor: pointer;
    animation: pulse 1.5s infinite;
}

@keyframes pulse {
    0% {
        box-shadow: 0 0 0 0 rgba(20, 166, 20, 0.7);
    }
    70% {
        box-shadow: 0 0 0 15px rgba(20, 166, 20, 0);
    }
    100% {
        box-shadow: 0 0 0 0 rgba(20, 166, 20, 0);
    }
}

.WhatsAppButton_mpp img {
    width: 100%;
    height: 100%;
}

     
  </style>
  
    <div class="modal fade Whats_mpp_modal" id="exampleModal-4" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content popup-box popup-box_whatsapp">

              <!-- HEADER -->
              <div class="modal-header popup-header">
                  <h5>Chatta con noi su WhatsApp</h5>
                  <button type="button" class="btn-close white-close" data-bs-dismiss="modal"></button>
              </div>

              <!-- BODY -->
              <div class="modal-body">
                  <form method="POST" action="{{ route('whatsaapinquiry') }}" id="whatsappForm" target="_blank">
                      @csrf

                      <!-- Message -->
                      <div class="mb-3">
                          <label class="form-label">Messaggio</label>
                          <textarea class="form-control popup-input" name="message" placeholder="Type your message"></textarea>
                      </div>

                      <!-- Phone -->
                      <div class="mb-3">
                          <label class="form-label">Contatto No <span class="text-danger">*</span></label>

                          <input type="tel" id="wa_phone" class="form-control popup-input" required
                              oninput="this.value=this.value.replace(/[^0-9]/g,'').slice(0,15);">

                          <!-- hidden -->
                          <input type="hidden" name="number" id="wa_full_phone">
                          <input type="hidden" name="country" id="wa_country_name">
                      </div>

                      <div class="d-grid">
                          <button type="submit" class="btn popup-btn">
                              Avvia Chat con Noi
                          </button>
                      </div>

                  </form>
              </div>

          </div>
      </div>
  </div>

  <!-- WhatsApp floating button -->
  <div class="WhatsAppButton_mpp">
      <a data-bs-toggle="modal" data-bs-target="#exampleModal-4" target="_blank">
          <img src="https://www.mmpfilter.com/public/images/whatsapp.png" alt="whatsapp">
      </a>
  </div>
    
    

  <script>
      document.addEventListener("DOMContentLoaded", function() {

          const input = document.querySelector("#wa_phone");
          const fullPhone = document.querySelector("#wa_full_phone");
          const countryName = document.querySelector("#wa_country_name");

          const iti = window.intlTelInput(input, {
              initialCountry: "auto",
              separateDialCode: true,
              preferredCountries: ["in", "ae", "us", "gb"],
              geoIpLookup: function(callback) {
                  fetch("https://ipapi.co/json/")
                      .then(res => res.json())
                      .then(data => callback(data.country_code))
                      .catch(() => callback("in"));
              },
              utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/utils.js",
          });

          document.getElementById("whatsappForm").addEventListener("submit", function() {
              const countryData = iti.getSelectedCountryData();
              const number = input.value.replace(/\s+/g, "");

              fullPhone.value = "+" + countryData.dialCode + number;
              countryName.value = countryData.name;
          });

      });
  </script>


<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@25.12.4/build/js/intlTelInput.min.js"></script>
    
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="{{ asset('public/front/js/slick.js') }}"></script>
<script src="{{ asset('public/front/js/slick.min.js') }}"></script>
<script src="{{ asset('public/front/js/fancybox.min.js') }}"></script>
<script src="{{ asset('public/front/js/main.js') }}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://www.google.com/recaptcha/api.js?render=explicit" async defer></script>
   
<!--cache clear js-->
<script>
    function clearBrowserCache() {
    // Clear localStorage
    localStorage.clear();
    
    // Clear sessionStorage
    sessionStorage.clear();
    
    // Clear cookies
    const cookies = document.cookie.split(';');
    for (let i = 0; i < cookies.length; i++) {
        const cookie = cookies[i];
        const eqPos = cookie.indexOf('=');
        const name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
        document.cookie = name + '=;expires=Thu, 01 Jan 1970 00:00:00 GMT;path=/';
    }
    
    // Reload page without cache
    window.location.reload(true);
}

// Add event listener for page reload
window.addEventListener('beforeunload', clearBrowserCache);
</script>


<!--cache clear js--> 
<!--modal open on load-->
<script>
function toggleOtherProduct(value) {
    const otherProductDiv = document.getElementById('other_product_div');
    const otherProductInput = document.getElementById('other_product_set');
    const productTypeSelect = document.getElementById('product_type');
    
    if (value === 'other') {
        otherProductDiv.style.display = 'block';
        otherProductInput.required = true;
        productTypeSelect.name = ''; // Remove name attribute from select when "other" is chosen
        otherProductInput.name = 'product_type'; // Set name attribute for text input
    } else {
        otherProductDiv.style.display = 'none';
        otherProductInput.required = false;
        otherProductInput.value = '';
        productTypeSelect.name = 'product_type'; // Restore name attribute to select
        otherProductInput.name = 'other_product'; // Change name of text input back
    }
}


</script>
<script>
  
// $(document).ready(function() {
//     // Get the current pathname
//     var pathname = window.location.pathname;

//     if (pathname === '/' && !pathname.includes('product-detail') && !pathname.includes('product')) {
//         // For the homepage ('/'), show the modal after 4 seconds
//         setTimeout(function() {
//             $("#exampleModal").modal('show');
//         }, 5000);
//     } else if (pathname !== '/thank-you' && pathname !== '/contact' && !pathname.includes('product-detail') && !pathname.includes('product')) {
//         // For any other page (except '/thank-you'), show the modal after 12 seconds
//         setTimeout(function() {
//             $("#exampleModal").modal('show');
//         }, 7000);
//     }
// });

$(document).ready(function () {
  var pathname = window.location.pathname;

  // Popup already shown check (per page load)
  var popupShown = false;

  // Homepage only
  if (pathname === "/" || pathname === "/index" || pathname === "/index.php") {
    var video = document.querySelector(".heroVideo");

    if (video) {
      video.addEventListener("play", function () {
        video.addEventListener("timeupdate", function handler() {
          var progress = (video.currentTime / video.duration) * 100;

          if (progress >= 70 && !popupShown) {
            $("#exampleModal").modal("show");
            popupShown = true;
            video.removeEventListener("timeupdate", handler);
          }
        });
      });
    } else {
      setTimeout(function () {
        if (!popupShown) {
          $("#exampleModal").modal("show");
          popupShown = true;
        }
      }, 5000);
    }

  } 
  // All other pages (5 seconds delay)
  else {
    setTimeout(function () {
      if (!popupShown) {
        $("#exampleModal").modal("show");
        popupShown = true;
      }
    }, 5000);
  }
});



</script>
<script>
let headerCaptchaRendered = false;
let headerCaptchaId = null;

function resetCaptcha(containerId, widgetIdVar, hiddenInputId, errorContainerId) {
    if (widgetIdVar !== null) {
        grecaptcha.reset(widgetIdVar);
        $(`#${containerId}`).html('');
        $(`#${hiddenInputId}`).val('');
        $(`#${errorContainerId}`).text('');
        return null;
    }
    return widgetIdVar;
}

function renderHeaderCaptcha() {
    if (!headerCaptchaRendered && $('#captcha-header').length) {
        headerCaptchaId = grecaptcha.render('captcha-header', {
            'sitekey': $('#captcha-header').data('sitekey'),
            'callback': function (response) {
                $('#g-recaptcha-response-header').val(response);
                $('#captcha-error-header').text('');
            },
            'expired-callback': function () {
                $('#g-recaptcha-response-header').val('');
                $('#captcha-error-header').text('Il reCAPTCHA è scaduto. Per favore verifica di nuovo.');
            }
        });
        headerCaptchaRendered = true;
    }
}

$('#headerModal').on('shown.bs.modal', function () {
    headerCaptchaId = resetCaptcha('captcha-header', headerCaptchaId, 'g-recaptcha-response-header', 'captcha-error-header');
    headerCaptchaRendered = false;
    renderHeaderCaptcha();
});

$(document).ready(function () {
    const $form = $('#headerinquiry1');
    const $submitButton = $('#headerinquirysubmit1');

    $('#headerinquiry1 input, #headerinquiry1 textarea, #headerinquiry1 select').one('input change', function () {
        renderHeaderCaptcha();
    });

    function validateReCaptcha() {
        const response = grecaptcha.getResponse(headerCaptchaId);
        $('#g-recaptcha-response-header').val(response);
        if (!response) {
            $('#captcha-error-header').text('Verifica di non essere un robot.');
            return false;
        }
        $('#captcha-error-header').text('');
        return true;
    }

    function validateEmail(email) {
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        if (!emailPattern.test(email)) {
            return { valid: false, message: 'Inserisci un indirizzo email valido.' };
        }
        return { valid: true, message: '' };
    }

    function validateField($field, validationRule) {
        const value = $field.val().trim();
        const $errorMessage = $field.siblings('.error-message');
        const isValid = validationRule(value);

        if (!isValid.valid) {
            $errorMessage.text(isValid.message);
        } else {
            $errorMessage.text('');
        }

        return isValid.valid;
    }

    const validationRules = {
        name: (value) => ({ valid: value.length > 0, message: 'Il nome è obbligatorio.' }),
        email: (value) => validateEmail(value),
        phone: (value) => ({
            valid: value.length >= 10 && value.length <= 15,
            message: value.length === 0 ? 'Il numero di telefono è obbligatorio.' : 'Inserisci un numero di telefono valido (10-15 cifre).'
        }),
        company_name: (value) => ({ valid: value.length > 0, message: 'Il nome dell\'azienda è obbligatorio.' }),
        product_type: (value) => ({ valid: value.length > 0, message: 'Seleziona un prodotto.' })
    };

    $submitButton.on('click', function (e) {
        e.preventDefault();
        let formValid = true;
        $('.error-message').text('');

        formValid = validateField($('#name_set'), validationRules.name) && formValid;
        formValid = validateField($('#email_set'), validationRules.email) && formValid;
        formValid = validateField($('#phone_set'), validationRules.phone) && formValid;
        formValid = validateField($('#company_name_set'), validationRules.company_name) && formValid;
        formValid = validateField($('#product_type'), validationRules.product_type) && formValid;

        if ($('#product_type').val() === 'other') {
            formValid = validateField($('#other_product_set'), (value) => ({
                valid: value.length > 0,
                message: 'Specifica il prodotto.'
            })) && formValid;
        }

        formValid = validateReCaptcha() && formValid;

        if (formValid) {
            const response = grecaptcha.getResponse(headerCaptchaId);
            $('#g-recaptcha-response-header').val(response);
            $form.submit();
        }
    });

    $('input, textarea, select').on('input change', function () {
        $(this).siblings('.error-message').text('');
    });
});
</script>



<script>
// Product type toggle function
function toggleOtherProduct(value) {
    const $otherProductDiv = $('#other_product_div');
    const $otherProductInput = $('#other_product_set');
    const $productTypeSelect = $('#product_type');
    
    if (value === 'other') {
        $otherProductDiv.show();
        $otherProductInput.prop('required', true);
        $productTypeSelect.attr('name', '');
        $otherProductInput.attr('name', 'product_type');
    } else {
        $otherProductDiv.hide();
        $otherProductInput.prop('required', false).val('');
        $productTypeSelect.attr('name', 'product_type');
        $otherProductInput.attr('name', 'other_product');
    }
}
</script>




  </body>
</html>
