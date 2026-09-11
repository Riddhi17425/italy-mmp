@include('layouts.frontheader')
<section class="contact-banner position-relative">
    <div class="container-fluid p-0">
         <img src="{{ asset('public/front/images/Dairy-industry-filtration.jpg') }}" alt="Industria Lattiero-Casearia" class="img-fluid product-page-header" />
        <div class="contact-head">
            <h1>Industria Lattiero-Casearia</h1>
             <div class="set-content">
                    <p>Aumenta l’efficienza, riduci i costi: scopri le soluzioni di filtrazione durevoli di <b>mmp</b> per un’industria lattiero-casearia di successo.</p>
                    </div>
                     <div class="theme-btn justify-content-start ">
                      <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-toggle="modal"
                        data-bs-target="#inquiryModal" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                        <p>Richiedi Ora</p>
                      </button>
                    </div>
         
           
        </div>
    </div>

</section>
<section class="navigating">
    <div class="container">
         <h2 class="coustom_industry">Filtrazione di alta qualità per l'industria lattiero-casearia moderna</h2>
        <div class="row">
            <div class="col-lg-4">
                 <img class="img-fluid" src="{{ asset('public/front/images/filtration-for-the-modern-dairy-industry.png') }}" alt="Filtrazione per l’Industria Casearia Moderna">
            </div>
            <div class="col-lg-8">
                <div class="nvgg_content">
                    <p class="navigation_pera">Nella produzione di latticini, la ricerca di pulizia e purezza è fondamentale. I filtri, veri e propri alleati silenziosi del processo, svolgono un ruolo decisivo nel garantire la sicurezza e la qualità dei prodotti lattiero-caseari. Scopri come i filtri <b>mmp</b> si affermino come leader nell’assicurare la purezza e la perfezione degli alimenti caseari, eliminando gli elementi indesiderati e mantenendo un equilibrio ottimale.

                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mmp_solutions">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h3 class="custom_pera">Soluzioni su misura <b>mmp</b> per l’eccellenza lattiero-casearia</h3>
                <p class="navigation_pera"><b>mmp</b>  riveste un ruolo essenziale nel settore lattiero-caseario, offrendo soluzioni avanzate per migliorare la qualità della filtrazione dei liquidi. Dalle sacche filtranti per liquidi a una gamma di prodotti innovativi progettati per soddisfare le esigenze specifiche dell’industria lattiera.</p>

                <h3 class="custom_pera">Sacche filtranti premium: eccezionali nel garantire la pulizia</h3>
                <p class="navigation_pera">Scegli le nostre sacche filtranti di alta qualità per innalzare lo standard dei tuoi prodotti caseari. Realizzate con cura e precisione, queste sacche fissano un nuovo punto di riferimento per la rimozione delle sostanze indesiderate, contribuendo all’eccellenza dei prodotti lattiero-caseari.</p>

                <a href="{{ url('dettaglio-prodotto/gabbie-filtranti-raccogli-polvere')}}" target="_blank">
                <h3 class="custom_pera title-link">Sacche raccoglipolvere: standard igienici elevati</h3>
                </a>
                <p class="navigation_pera">Nel processo di produzione dei latticini, mantenere la massima pulizia è imprescindibile. Le nostre sacche raccoglipolvere svolgono un ruolo cruciale, garantendo un ambiente privo di polvere e preservando la perfezione dei prodotti lattiero-caseari.</p>
            </div>
            <div class="col-lg-6">
                <div class="mg_area">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <img class="img-fluid" src="{{ asset('public/front/images/dairy-industry-filtration-products.jpg') }}" alt="Industria Lattiero-Casearia">
                          
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
        <div class="benefits_pharma">
            <h2 class="coustom_industry">Vantaggi della filtrazione <b>mmp</b> nell'industria lattiero-casearia</h2>
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('public/front/images/mmp-filtration-in-dairy-Industry.png') }}" alt="Industria Lattiero-Casearia">
                </div>
                <div class="col-lg-6">
                    <div class="nvgg_content">
                       
                        <ul class="point_benefit">
                            <li><i class="fa fa-light fa-angle-right angle-arrow"></i>Sacche filtranti per liquidi: progettate per le esigenze specifiche dell’industria lattiero-casearia.</li>
                            <li><i class="fa fa-light fa-angle-right angle-arrow"></i>Sacche filtranti premium: elevano lo standard, garantendo la rimozione delle sostanze indesiderate.</li>
                            <li><i class="fa fa-light fa-angle-right angle-arrow"></i>Sacche raccoglipolvere: fondamentali per mantenere la massima pulizia, assicurando un ambiente privo di polvere.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pioneers_industry">
    <div class="container">
        <h3>Pionieri nel settore.</h3>
        <p>Entra in una nuova era della filtrazione, dove l'eccellenza incontra la semplicità.</p>
        <hr class="line">
        <h2>Pronto per l'aggiornamento?</h2>
        <p>Scegli l'eccellenza nella filtrazione quando la precisione è ciò che conta di più.</p>
        <a href="{{ route('contact') }}">Contattaci</a>
    </div>
</section>

<!-- our customer -->
<section class="customer">
  <div class="container">
  <h3 class="inner-head">Our Customers</h3>
    <div class="cust_slid">
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg1.png') }}" alt="Industria Lattiero-Casearia">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg2.png') }}" alt="Industria Lattiero-Casearia">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg3.png') }}" alt="Industria Lattiero-Casearia">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg4.png') }}" alt="Industria Lattiero-Casearia">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg5.png') }}" alt="Industria Lattiero-Casearia">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg6.png') }}" alt="Industria Lattiero-Casearia">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg7.png') }}" alt="Industria Lattiero-Casearia">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg8.png') }}" alt="Industria Lattiero-Casearia">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg9.png') }}" alt="RSWM Limited">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg10.png') }}" alt="RSPL">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg11.png') }}" alt="Allied Blenders & Distillers">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg12.png') }}" alt="Bayer">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg13.png') }}" alt="GFL - Gujarat Fluorochemicals Limited ">
        </div>
     </div>
  </div>
</section>
<!-- our customer -->
 <div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">

                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modulo di Richiesta</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('productinquiry') }}" id="productinquiry">
                                    @csrf
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <input type="text" placeholder=""  name="name" id="name" />
                                            <label for="name">Name</label>
                                            <span class="error-message"></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <input type="text" placeholder="" id="product_name"  name="product_name" 
                                            value="Dairy Industry" readonly />
                                            <label for="floatingSelect">Industry Name</label>
                                            <span class="error-message"></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <input type="email" placeholder="" name="email"  id="email" />
                                            <label for="inputField">Email</label>
                                            <span class="error-message" id="email-error"></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <input type="text" placeholder="" name="phone"  id="phone" />
                                            <label for="">Contact No.</label>
                                            <span class="error-message"></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <input type="text" placeholder="" name="city" id="city" />
                                            <label for="">City</label>
                                            <span class="error-message"></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <textarea name="message" id="message"  cols="" rows="" class="w-100" placeholder=""></textarea>
                                            <label for="">Message</label>
                                            <span class="error-message"></span>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="6Lc2cg0sAAAAAKmVVEUvIDR61vxyYWi_BmanSqth" id="captcha_productinquiry"></div>
                                            <span class="error-message" id="captcha-error"></span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer d-flex justify-content-center theme-btn">
                                <button type="button" id="productinquirysubmit" class="btn-add">
                                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span><p>Send message</p>
                                </button>
                            </div>
                        </div>
                    </div>

                  </div>

@include('layouts.frontfooter')
<script>
    $('#productinquirysubmit').on('click', function(event) {
        let isValid = true;

        // Name validation
        if ($('#name').val().trim() === '') {
            $('#name').siblings('.error-message').text('This field is required.');
            isValid = false;
        }

        // Email validation
        let email = $('#email').val().trim();
        let emailValidation = validateEmail(email);
        if (!emailValidation.valid) {
            $('#email-error').text(emailValidation.message);
            isValid = false;
        } else {
            $('#email-error').text('');
        }

        // Phone validation
        if ($('#phone').val().trim().length < 10) {
            $('#phone').siblings('.error-message').text('Enter a valid phone number.');
            isValid = false;
        }
        
        // City validation
        if ($('#city').val().trim() === '') {
            $('#city').siblings('.error-message').text('This field is required.');
            isValid = false;
        }

        // Message validation
        if ($('#message').val().trim() === '') {
            $('#message').siblings('.error-message').text('This field is required.');
            isValid = false;
        }

        // reCAPTCHA validation
        var recaptchaResponse = grecaptcha.getResponse();
        if (recaptchaResponse.length === 0) {
            $('#captcha-error').text('Please verify the CAPTCHA.');
            isValid = false;
        } else {
            $('#captcha-error').text('');
        }

        // Stop form submission if validation fails
        if (!isValid) {
            event.preventDefault();
        } else {
            $('#productinquiry').submit();
        }
    });

    // Clear error messages on input
    $('input, textarea').on('input', function() {
        $(this).siblings('.error-message').text('');
    });

    // Email validation function
    function validateEmail(email) {
        var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
         var spamPatterns = [
            /^[a-zA-Z]{8,}[0-9]{6,}@/,
            /^[0-9]+@/,
            /(temp-mail|10minutemail|mailinator|guerrillamail|yopmail|throwawaymail|form-check.online|nuself.eu|seismologiomail.com|ru|mailport.lat)/i,
            /^(test|demo|example|noreply|fake|admin|info|random|dummy)/i,
            /^(.)(\1){5,}@/
        ];

        if (!emailPattern.test(email)) {
            return { valid: false, message: "Please enter a valid email address." };
        }

        for (let pattern of spamPatterns) {
            if (pattern.test(email)) {
                return { valid: false, message: "This email is not allowed." };
            }
        }

        return { valid: true, message: "" };
    }
</script>