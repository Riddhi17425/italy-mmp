@include('layouts.frontheader')
<style>
.map-img-contact{
    width: 100%;
    /*height: auto;*/
    display: block;
}
</style>
<section class="contact-banner position-relative">
  <div class="container-fluid p-0">
    <img src="{{ asset('public/front/images/contact-banner-bg.jpg') }}" alt="Contatto Banner" class="img-fluid product-page-header" />
    <div class="contact-head">
      <h1>Contattaci</h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contattaci</li>
        </ol>
      </nav>
    </div>
  </div>
</section>
<?php //dd($productname); ?>
<section class="lets-talk">
  <div class="container">
    <h3 class="mb-3">Parliamo</h3>
    <div class="row">
        <div class="col-md-6">
            <form method="post" action="{{ route('contactstore') }}" enctype="multipart/form-data" class="my-4">
                @csrf
                <div class="form-container">
        
                    <!-- Nome -->
                    <div class="form-group">
                        <input type="text" placeholder="" id="name" name="name"
                            oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();" />
                        <label for="name">Nome</label>
                        <div id="name-error" class="text-danger"></div>
                    </div>
        
                    <!-- Email -->
                    <div class="form-group">
                        <input type="email" placeholder=" " id="inputField" name="email" />
                        <label for="inputField">Email</label>
                        <div id="email-error" class="text-danger"></div>
                    </div>
        
                    <!-- Telefono -->
                    <div class="form-group">
                        <input type="text" placeholder=" " id="phone" name="phone"
                            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);" />
                        <label for="phone">Numero di Telefono</label>
                        <div id="phone-error" class="text-danger"></div>
                    </div>
        
                    <!-- Azienda -->
                    <div class="form-group">
                        <input type="text" placeholder=" " id="company_name" name="company_name"
                            oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();" />
                        <label for="company_name">Nome Azienda</label>
                        <div id="company_name-error" class="text-danger"></div>
                    </div>
        
                    <!-- Città -->
                    <div class="form-group">
                        <input type="text" placeholder=" " id="city" name="city"
                            oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();" />
                        <label for="city">Città</label>
                        <div id="city-error" class="text-danger"></div>
                    </div>
        
                    <!-- Tipo di Prodotto -->
                    <div class="form-group">
                        <select class="inquiry_select" id="product_type" name="product_type">
                            <option value="">Seleziona</option>
                            @foreach($productname as $val)
                                <option value="{{ $val->product_name }}">{{ $val->product_name }}</option>
                            @endforeach
                        </select>
                        <label for="product_type">Tipologia di Prodotto</label>
                        <div id="product-type-error" class="text-danger"></div>
                    </div>
        
                    <!-- Messaggio -->
                    <div class="form-group">
                        <textarea name="message" id="message" rows="5" class="w-100" placeholder=" "></textarea>
                        <label for="message">Messaggio</label>
                        <div id="message-error" class="text-danger"></div>
                    </div>
        
                    <!-- reCAPTCHA -->
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6Lc2cg0sAAAAAKmVVEUvIDR61vxyYWi_BmanSqth"></div>
                        <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                        <div id="captcha-error" class="text-danger"></div>
                    </div>
        
                    <!-- Pulsante invio -->
                    <button class="submit-button" type="submit">Invia</button>
                </div>
            </form>
        </div>
        <div class="col-md-6 mb-3 mt-3">
            <div class=" d-flex flex-column justify-content-between">
            <div>
                <b>Italy Office</b>
                <ul class="p-0">
                  <li class="d-flex align-items-start mb-3">
                    <div class="me-2"
                      ><img
                        src="{{ asset('public/front/images/contact-map.png') }}"
                        alt="Contatto Mappa"
                        
                    /></div>
                     <a class="m-0" target="_blank" href="https://maps.app.goo.gl/WaRmXrb2yTRQKZAR8">
                     Via Rossini 28, Cologno Monzese (MI), Italy</a>
                   
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    <span
                      ><img
                        src="{{ asset('public/front/images/contact-phone.png') }}"
                        alt="Contatto Telefono"
                        class="img-fluid me-2"
                    /></span>
                     <a href="tel:+393286959896 ">+39 3286959896 </a>
                  <!--  <li class="contact-2">-->
                   <!--<a href="tel:+02502452075">+0250-2452075/80</a>,-->
                  <!--</li>-->
                  </li>
                  
                  <!--<li class="d-flex align-items-start mb-3">-->
                  <!--  <span-->
                  <!--    ><img-->
                  <!--      src="{{ asset('public/front/images/contact-mail.png') }}"-->
                  <!--      alt="Contact Mail"-->
                  <!--      class="img-fluid me-2"-->
                  <!--  /></span>-->
                  <!--  <a href="mailto:mumbai@mmpfilter.com">mumbai@mmpfilter.com</a>-->
                  <!--</li>-->
                </ul>
              </div>
             <div>
                <div class="mapouter">
                  <div class="gmap_canvas">
                      <a class="m-0" target="_blank" href="https://maps.app.goo.gl/WaRmXrb2yTRQKZAR8"><img src ="{{ asset('public/front/images/map.png') }}" alt="map" class="map-img-contact"></a>
               
                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2794.5186721377086!2d9.276333075407582!3d45.53989072838647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786b813483b83bd%3A0x20fa116cfb6d635c!2sM.f.%20Filtri%20S.r.l.!5e0!3m2!1sen!2sin!4v1755931511282!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->

                    <!--<a href="https://connectionsgame.org/">Connections NYT</a>-->
                  </div>
                </div>
              </div>
        </div>
        
      </div>

    </div>
    <div class="row align-items: end; mt-1">
      <div class="col-md-6 mb-2">
         <div>
          <b>SEDE CENTRALE (KOLKATA)</b>
          <ul class="p-0">
            <li class="d-flex align-items-start mb-3">
              <span
                ><img
                  src="{{ asset('public/front/images/contact-map.png') }}"
                  alt="Contatto Mappa"
                  class="img-fluid me-2"im
              /></span>
               <a target="_blank" class="m-0" href="https://www.google.com/maps/place/34c,+Grey+St,+Raja+Nabakrishna+Street,+Sovabazar,+Darjipara,+Shobhabazar,+Kolkata,+West+Bengal+700005/@22.5954936,88.3657081,17z/data=!4m6!3m5!1s0x3a027633a36d6fcb:0x30b918d03a92edee!8m2!3d22.5954936!4d88.3657081!16s%2Fg%2F11v06pksdn"> 34 C, Sri Aurobindo Sarani Kolkata – 700005 West Bengal, India</a>
            </li>
            <li class="d-flex align-items-start mb-3">
              <span
                ><img
                  src="{{ asset('public/front/images/contact-phone.png') }}"
                  alt="Contatto Telefono"
                  class="img-fluid me-2"
              /></span>
              <!--<a href="tel:+91-9051821218" class="me-1">+91-9051821218</a><span>-->
              <!--</span>  -->
              <!--<a href="tel:+91 9051821219" class="ms-1">  +91 9051821219</a>-->
              <a href="tel:919830030614">+91 9830030614</a>
            </li>
            <li class="d-flex align-items-start mb-3">
              <span
                ><img
                  src="{{ asset('public/front/images/contact-mail.png') }}"
                  alt="Contatto Posta"
                  class="img-fluid me-2"
              /></span>
              <a href="mailto:sales@mmpfilter.com">sales@mmpfilter.com</a>
            </li>
          </ul>
        </div>
         <div>
          <div class="mapouter">
            <div class="gmap_canvas">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7367.123219131235!2d88.365708!3d22.595494!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a027633a30d9d9b%3A0x7e529ad96c65cac0!2sMMP%20Filtration%20Private%20Limited!5e0!3m2!1sen!2sin!4v1698930200879!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe><a href="https://connectionsgame.org/">Connections NYT</a>
            </div>
          </div>
        </div>
       
      </div>
      <!--<div class="col-md-4 mb-3">-->
      <!--  <div class="h-100 d-flex flex-column justify-content-between">-->
      <!--      <div>-->
      <!--          <b>Chennai Office</b>-->
      <!--          <ul class="p-0">-->
      <!--            <li class="d-flex align-items-start mb-3">-->
      <!--              <div class="me-2"-->
      <!--                ><img-->
      <!--                  src="{{ asset('public/front/images/contact-map.png') }}"-->
      <!--                  alt="Contatto Mappa"-->
                        
      <!--              /></div>-->
      <!--               <a class="m-0" target="_blank" href="https://www.google.com/maps/search/Anantha+Nilayam,Ground+Floor,+No.19,+NSK+Street,+Ambal+Nagar,+Ramapuram,+Chennai+%E2%80%93+600089+Tamil+Nadu/@13.0915761,80.1893327,17z/data=!3m1!4b1?entry=ttu">-->
      <!--                Anantha Nilayam, Ground Floor, No.19, NSK Street, Ambal Nagar, Ramapuram, Chennai – 600089 Tamil Nadu, India-->
      <!--              </a>-->
                   
      <!--            </li>-->
      <!--            <li class="d-flex align-items-start mb-3">-->
      <!--              <span-->
      <!--                ><img-->
      <!--                  src="{{ asset('public/front/images/contact-phone.png') }}"-->
      <!--                  alt="Contatto Telefono"-->
      <!--                  class="img-fluid me-2"-->
      <!--              /></span>-->
      <!--              <a href="tel:919830566648" title="919830566648" data-other="1" onclick="gtag('event', 'Clicked to Call 919830566648', { 'event_category' : 'Phone Number (919830566648)' });" aria-label="call 919830566648" data-uw-rm-vglnk="" uw-rm-vague-link-id="tel:919830566648$call 919830566648">+91-9830566648</a>-->
                   
      <!--            </li>-->
      <!--            <li class="d-flex align-items-start mb-3">-->
      <!--              <span-->
      <!--                ><img-->
      <!--                  src="{{ asset('public/front/images/contact-mail.png') }}"-->
      <!--                  alt="Contatto Posta"-->
      <!--                  class="img-fluid me-2"-->
      <!--              /></span>-->
      <!--              <a href="mailto:chennai@mmpfilter.com">chennai@mmpfilter.com</a>-->
      <!--            </li>-->
      <!--          </ul>-->
      <!--        </div>-->
      <!--        <div>-->
      <!--          <div class="mapouter">-->
      <!--            <div class="gmap_canvas">-->
      <!--              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7774.013592396861!2d80.17587500000002!3d13.035239!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52667260382ba9%3A0x355765de517fadcd!2sMmp%20Filtration%20Private%20Limited!5e0!3m2!1sen!2sin!4v1698405699332!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
      <!--              <a href="https://connectionsgame.org/">Connections NYT</a>-->
      <!--            </div>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--  </div>-->
       
      <!--</div>-->
      <!--<div class="col-md-4 mb-3">-->
      <!--  <div class="h-100 d-flex flex-column justify-content-between">-->
      <!--      <div>-->
      <!--          <b>Mumbai Office</b>-->
      <!--          <ul class="p-0">-->
      <!--            <li class="d-flex align-items-start mb-3">-->
      <!--              <div class="me-2"-->
      <!--                ><img-->
      <!--                  src="{{ asset('public/front/images/contact-map.png') }}"-->
      <!--                  alt="Contatto Mappa"-->
                        
      <!--              /></div>-->
      <!--             <a class="m-0" target="_blank" href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.165937600323!2d72.84678207434239!3d19.405235041555997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a92ac394ece9%3A0xc823aa971154105c!2sRange%20Office!5e0!3m2!1sen!2sin!4v1701243277806!5m2!1sen!2sin">-->
      <!--                101, Doms Industrial Complex,-->
      <!--                Range Office, Vasai East, Palghar-->
      <!--                Maharashtra - 401208, India-->
      <!--              </a>-->
      <!--            </li>-->
      <!--            <li class="d-flex align-items-start mb-3">-->
      <!--              <span-->
      <!--                ><img-->
      <!--                  src="{{ asset('public/front/images/contact-phone.png') }}"-->
      <!--                  alt="Contatto Telefono"-->
      <!--                  class="img-fluid me-2"-->
      <!--              /></span>-->
      <!--               <a href="tel:917738823434">+91-7738823434</a>-->
                  <!--  <li class="contact-2">-->
                   <!--<a href="tel:+02502452075">+0250-2452075/80</a>,-->
                  <!--</li>-->
      <!--            </li>-->
                  
      <!--            <li class="d-flex align-items-start mb-3">-->
      <!--              <span-->
      <!--                ><img-->
      <!--                  src="{{ asset('public/front/images/contact-mail.png') }}"-->
      <!--                  alt="Contatto Posta"-->
      <!--                  class="img-fluid me-2"-->
      <!--              /></span>-->
      <!--              <a href="mailto:mumbai@mmpfilter.com">mumbai@mmpfilter.com</a>-->
      <!--            </li>-->
      <!--          </ul>-->
      <!--        </div>-->
      <!--        <div>-->
                
                
      <!--           <div class="mapouter">-->
      <!--            <div class="gmap_canvas">-->
      <!--             <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7526.282364350818!2d72.849844!3d19.406305!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c86e0f3ea19d%3A0x5676e85c8ddfaf63!2sMmp%20Filtration%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1698405649237!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->

      <!--              <a href="https://connectionsgame.org/">Connections NYT</a>-->
      <!--            </div>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--  </div>-->
       
      <!--</div>-->
      <!--      <div class="col-md-4 mb-3 mt-3">-->
      <!--  <div class="h-100 d-flex flex-column justify-content-between">-->
      <!--      <div>-->
      <!--          <b>US Office</b>-->
      <!--          <ul class="p-0">-->
      <!--            <li class="d-flex align-items-start mb-3">-->
      <!--              <div class="me-2"-->
      <!--                ><img-->
      <!--                  src="{{ asset('public/front/images/contact-map.png') }}"-->
      <!--                  alt="Contact Map"-->
                        
      <!--              /></div>-->
      <!--               <a class="m-0" target="_blank" href="https://maps.app.goo.gl/fJMVvq921uMmeYgZA">-->
      <!--               1372 Main St, Coventry, RI 02816, United States</a>-->
                   
      <!--            </li>-->
      <!--            <li class="d-flex align-items-start mb-3">-->
      <!--              <span-->
      <!--                ><img-->
      <!--                  src="{{ asset('public/front/images/contact-phone.png') }}"-->
      <!--                  alt="Contact Phone"-->
      <!--                  class="img-fluid me-2"-->
      <!--              /></span>-->
      <!--               <a href="tel:1(401)8719315">+1 (401) 871-9315</a>-->
                  <!--  <li class="contact-2">-->
                   <!--<a href="tel:+02502452075">+0250-2452075/80</a>,-->
                  <!--</li>-->
      <!--            </li>-->
                  
                  <!--<li class="d-flex align-items-start mb-3">-->
                  <!--  <span-->
                  <!--    ><img-->
                  <!--      src="{{ asset('public/front/images/contact-mail.png') }}"-->
                  <!--      alt="Contact Mail"-->
                  <!--      class="img-fluid me-2"-->
                  <!--  /></span>-->
                  <!--  <a href="mailto:mumbai@mmpfilter.com">mumbai@mmpfilter.com</a>-->
                  <!--</li>-->
      <!--          </ul>-->
      <!--        </div>-->
      <!--        <div>-->
                
                
      <!--           <div class="mapouter">-->
      <!--            <div class="gmap_canvas">-->
      <!--         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11916.655284009861!2d-71.58302811821515!3d41.69539905926616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e435810b34373b%3A0x1fe99da1413c5030!2sAquaTex%20Solutions%20Veteran%20owned!5e0!3m2!1sen!2sin!4v1761649733216!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
              

      <!--              <a href="https://connectionsgame.org/">Connections NYT</a>-->
      <!--            </div>-->
      <!--          </div>-->
      <!--        </div>-->
      <!--  </div>-->
       
      <!--</div>-->

<!--      <div class="col-md-4 mb-3 mt-3">-->
<!--        <div class="h-100 d-flex flex-column justify-content-between">-->
<!--            <div>-->
<!--                <b>USA Office</b>-->
<!--                <ul class="p-0">-->
<!--                  <li class="d-flex align-items-start mb-3">-->
<!--                    <div class="me-2"-->
<!--                      ><img-->
<!--                        src="{{ asset('public/front/images/contact-map.png') }}"-->
<!--                        alt="Contatto Mappa"-->
                        
<!--                    /></div>-->
<!--                     <a class="m-0" target="_blank" href="https://maps.app.goo.gl/TJsvz9RXz3QcqjKP9">-->
<!--                      50 Division St-->
<!--Pawtucket, RI 02860, USA</a>-->
                   
<!--                  </li>-->
<!--                  <li class="d-flex align-items-start mb-3">-->
<!--                    <span-->
<!--                      ><img-->
<!--                        src="{{ asset('public/front/images/contact-phone.png') }}"-->
<!--                        alt="Contatto Telefono"-->
<!--                        class="img-fluid me-2"-->
<!--                    /></span>-->
<!--                     <a href="tel:(401)7225600">(401) 722-5600</a>-->
                  <!--  <li class="contact-2">-->
                   <!--<a href="tel:+02502452075">+0250-2452075/80</a>,-->
                  <!--</li>-->
<!--                  </li>-->
                  
                  <!--<li class="d-flex align-items-start mb-3">-->
                  <!--  <span-->
                  <!--    ><img-->
                  <!--      src="{{ asset('public/front/images/contact-mail.png') }}"-->
                  <!--      alt="Contact Mail"-->
                  <!--      class="img-fluid me-2"-->
                  <!--  /></span>-->
                  <!--  <a href="mailto:mumbai@mmpfilter.com">mumbai@mmpfilter.com</a>-->
                  <!--</li>-->
<!--                </ul>-->
<!--              </div>-->
<!--              <div>-->
                
                
<!--                 <div class="mapouter">-->
<!--                  <div class="gmap_canvas">-->
               
<!--                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2970.9180541544383!2d-71.3869580225156!3d41.873109502184214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e45caab36b0b15%3A0xf6e01c6e52f30733!2s50%20Division%20St%2C%20Pawtucket%2C%20RI%2002860%2C%20USA!5e0!3m2!1sen!2sin!4v1737373395690!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->

<!--                    <a href="https://connectionsgame.org/">Connections NYT</a>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--        </div>-->
       
<!--      </div>-->
          
      <div class="col-md-6 mb-2">
       <div class="h-100 d-flex flex-column justify-content-between">
            <div> 
                <b>Ahmedabad Office</b>
                <ul class="p-0">
                  <li class="d-flex align-items-start mb-3">
                    <div class=" me-2"
                      ><img
                        src="{{ asset('public/front/images/contact-map.png') }}"
                        alt="Contatto Mappa"
                        
                    /></div>
                     <a target="_blank" href="https://www.google.com/maps/search/C3-602+Anushruti+Tower,+SG+Road,+Thaltej,+Ahmedabad+%E2%80%93+380059+Gujarat,+India/@23.053608,72.5150764,17z/data=!3m1!4b1?entry=ttu" class="m-0">
                    C3-602 Anushruti Tower, SG Road, Thaltej, Ahmedabad – 380059 Gujarat, India
                    </a>
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    <span
                      ><img
                        src="{{ asset('public/front/images/contact-phone.png') }}"
                        alt="Contatto Telefono"
                        class="img-fluid me-2"
                    /></span>
                    <a href="tel:917043745709">+91-7043745709</a>
                  </li>
                  <li class="d-flex align-items-start mb-3">
                    <span
                      ><img
                        src="{{ asset('public/front/images/contact-mail.png') }}"
                        alt="Contatto Posta"
                        class="img-fluid me-2"
                    /></span>
                    <a href="mailto:ahmd-sales@mmpfilter.com">ahmd-sales@mmpfilter.com</a>
                  </li>
                </ul>
              </div>
              <div>
                <div class="mapouter">
                  <div class="gmap_canvas">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7342.373829144561!2d72.517651!3d23.053608!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b550038f8d7%3A0xc0331137ca911044!2sMMP%20FILTRATION%20PVT%20LTD!5e0!3m2!1sen!2sin!4v1698405731520!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    ><a href="https://connectionsgame.org/">Connections NYT</a>
                  </div>
                </div>
              </div>
        </div>
       
      </div>
      
    </div>
  </div>
</section>
<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelector("form").addEventListener("submit", function (event) {
        let isValid = true;

        // Nome
        let name = document.getElementById("name");
        let nameError = document.getElementById("name-error");
        if (name.value.trim() === "") {
            nameError.innerText = "Il nome è obbligatorio.";
            isValid = false;
        } else {
            nameError.innerText = "";
        }

        // Email
        let email = document.getElementById("inputField");
        let emailError = document.getElementById("email-error");
        let emailValidation = validateEmail(email.value.trim());
        if (!emailValidation.valid) {
            emailError.innerText = emailValidation.message;
            isValid = false;
        } else {
            emailError.innerText = "";
        }

        // Telefono
        let phone = document.getElementById("phone");
        let phoneError = document.getElementById("phone-error");
        if (phone.value.trim().length < 10 || containsSpamContent(phone.value)) {
            phoneError.innerText = "Inserisci un numero di telefono valido.";
            isValid = false;
        } else {
            phoneError.innerText = "";
        }

        // Tipo di Prodotto
        let productType = document.getElementById("product_type");
        let productTypeError = document.getElementById("product-type-error");
        if (productType.value.trim() === "") {
            productTypeError.innerText = "Seleziona un tipo di prodotto.";
            isValid = false;
        } else {
            productTypeError.innerText = "";
        }

        // Nome Azienda
        let companyName = document.getElementById("company_name");
        let companyNameError = document.getElementById("company_name-error");
        if (companyName.value.trim() === "") {
            companyNameError.innerText = "Il nome dell'azienda è obbligatorio.";
            isValid = false;
        } else {
            companyNameError.innerText = "";
        }

        // Città
        let city = document.getElementById("city");
        let cityError = document.getElementById("city-error");
        if (city.value.trim() === "" || containsSpamContent(city.value)) {
            cityError.innerText = "Inserisci una città valida.";
            isValid = false;
        } else {
            cityError.innerText = "";
        }

        // Messaggio
        let message = document.getElementById("message");
        let messageError = document.getElementById("message-error");
        if (message.value.trim() === "" || containsSpamContent(message.value)) {
            messageError.innerText = "Inserisci un messaggio valido.";
            isValid = false;
        } else {
            messageError.innerText = "";
        }

        // reCAPTCHA
        let captchaResponse = grecaptcha.getResponse();
        let captchaError = document.getElementById("captcha-error");
        if (captchaResponse.length === 0) {
            captchaError.innerText = "Completa il CAPTCHA.";
            isValid = false;
        } else {
            captchaError.innerText = "";
        }

        if (!isValid) {
            event.preventDefault();
        }
    });
});

// Funzione validazione email
function validateEmail(email) {
    var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    var spamPatterns = [
        /^[0-9]+@/,
        /(temp-mail|10minutemail|mailinator|guerrillamail|yopmail|throwawaymail|form-check.online|nuself.eu|seismologiomail.com|ru|mailport.lat)/i,
        /^(test|demo|example|noreply|fake|admin|info|random|dummy)/i,
        /^(.)(\1){5,}@/
    ];

    if (!emailPattern.test(email)) {
        return { valid: false, message: "Inserisci un indirizzo email valido." };
    }

    for (let pattern of spamPatterns) {
        if (pattern.test(email)) {
            return { valid: false, message: "Questo indirizzo email non è consentito." };
        }
    }

    return { valid: true, message: "" };
}

// Funzione controllo contenuti spam
function containsSpamContent(input) {
    let cleaned = input.trim().toLowerCase();

    if (/^[\s\*\#@!$%^&()_+\-=\[\]{};':"\\|,.<>\/?`~]+$/.test(cleaned)) {
        return true;
    }

    if (/([#@!$%^&*()_+={}\[\]|\\:;"'<>,.?/~`-])\1{1,}/.test(cleaned)) {
        return true;
    }

    if (/^(https?:\/\/|www\.|<a\s+href=)/i.test(cleaned) && cleaned.length < 40) {
        return true;
    }

    const spamPatterns = [
        /<a\s+href=/i,
        /snag\s+your\s+free/i,
        /hs=[a-z0-9]{20,}/i,
        /xxx/i,
        /^\*{3,}$/
    ];

    return spamPatterns.some(pattern => pattern.test(cleaned));
}
</script>



@include('layouts.frontfooter')
