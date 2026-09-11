@include('layouts.frontheader')
<section class="contact-banner position-relative">
    <div class="container-fluid p-0">
         <img src="{{ asset('public/front/images/Food and Beverage Industry.png') }}" alt="industria alimentare e delle bevande" class="img-fluid product-page-header" />
        <div class="contact-head ">
            <h1>Industria alimentare e delle bevande</h1>
             <div class="set-content">
                    <p>Eleva il tuo successo: alza gli standard di qualità per il settore Food & Beverage con la filtrazione <b>mmp</b>.</p>
                    </div>
                     <div class="theme-btn justify-content-start ">
                      <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-toggle="modal"
                        data-bs-target="#inquiryModal" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                        <p>Richiedi Ora</p>
                      </button>
                    </div>
            <!--<nav aria-label="breadcrumb">-->
            <!--    <ol class="breadcrumb">-->
            <!--        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
            <!--        <li class="breadcrumb-item"><a href="javascript:void(0)">Industries we serve</a></li>-->
            <!--        <li class="breadcrumb-item active" aria-current="page">-->
            <!--           Food and Beverage Industry-->
            <!--        </li>-->
            <!--    </ol>-->
            <!--</nav>-->
        </div>
    </div>
</section>
<section class="navigating">
    <div class="container">
        <h2 class="coustom_industry">Eccellenza Nella Filtrazione Per il Settore Food & Beverage
        </h2>
        <div class="row">
            <div class="col-lg-4">
                 <img class="img-fluid" src="{{ asset('public/front/images/Food and Beverages Industry1.png') }}" alt="sfide nella filtrazione di alimenti e bevande">
            </div>
            <div class="col-lg-8">
                <div class="nvgg_content">
                    <p class="navigation_pera">Nell’industria alimentare e delle bevande, mantenere la purezza è un requisito imprescindibile. La filtrazione <b>mmp</b> offre apparecchiature perfette per garantire una filtrazione conforme agli standard del settore, fornendo un sistema di filtrazione solido e affidabile. Qualsiasi compromesso può influire su gusto, aspetto e sicurezza.
                    </p>
                    <h3 class="custom_pera">Sfide nella filtrazione per il settore alimentare e delle bevande:</h3>
                    <p class="navigation_pera">Individuare problematiche come la contaminazione microbica e una filtrazione inefficace è fondamentale. Se non affrontate, queste sfide possono portare a prodotti contaminati, mancata conformità normativa e danni alla reputazione del marchio.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="mmp_solutions">
    <div class="container">
   
        <div class="row">
            <div class="col-lg-6">
                <a href="{{ url('dettaglio-prodotto/cartucce-pleat-pp')}}" target="_blank">
                 <h3 class="custom_pera title-link">Cartucce filtranti pieghettate in PP</h3>
                </a>
                <p class="navigation_pera">Progettate per garantire precisione e purezza, catturano i contaminanti assicurando l’integrità del prodotto.</p>

                <a href="{{ url('dettaglio-prodotto/cartucce-filtranti-soffiate-a-fusione')}}" target="_blank">
                <h3 class="custom_pera title-link">Cartucce filtranti melt-blown</h3>
                </a>
                <p class="navigation_pera">Eccezionale capacità di trattenere le particelle per una filtrazione in profondità superiore, garantendo la rimozione delle impurità nei processi alimentari e delle bevande.</p>

                <a href="{{ url('dettaglio-prodotto/cartucce-filtranti-avvolte')}}" target="_blank">
                <h3 class="custom_pera title-link">Cartucce filtranti Per Ferite</h3>
                </a>
                <p class="navigation_pera">Offrono una filtrazione in profondità affidabile per il controllo qualità, salvaguardando la sicurezza e la qualità dei prodotti alimentari e delle bevande.</p>
                
                <a href="{{ url('dettaglio-prodotto/cartucce-pleat-pp')}}" target="_blank">
                <h3 class="custom_pera title-link">Cartucce filtranti pieghettate</h3>
                </a>
                <p class="navigation_pera">Migliorano l’efficienza nella raccolta delle polveri, catturando le particelle fini e prolungando la vita operativa delle apparecchiature.</p>
            </div>
            <div class="col-lg-6">
                <div class="mg_area">
                    <div class="row">
                        <div class="col-lg-12 col-md-12">
                            <img class="img-fluid" src="{{ asset('public/front/images/food-industry-filtration.jpg') }}" alt="filtrazione nell’industria alimentare">
                         
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>

        <div class="benefits_pharma">
            <h2 class="coustom_industry">Vantaggi delle soluzioni di filtrazione <b>mmp</b>:</h2>
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid" src="{{ asset('public/front/images/food-filtration-solutions.png') }}" alt="soluzioni di filtrazione alimentare">
                </div>
                <div class="col-lg-6">
                    <div class="nvgg_content">
                        
                        <ul class="point_benefit">
                            <li><i class="fa fa-light fa-angle-right angle-arrow"></i>Conservazione della qualità del prodotto: garantisce igiene rimuovendo i contaminanti.</li>
                            <li><i class="fa fa-light fa-angle-right angle-arrow"></i>Conformità agli standard di settore: si allinea alle normative per garantire la conformità regolatoria.</li>
                            <li><i class="fa fa-light fa-angle-right angle-arrow"></i>Maggiore durata delle apparecchiature: migliora la qualità dell’aria e riduce i costi di manutenzione.</li>
                            
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

<section class="iltration_pharma">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h2 class="coustom_industry">Migliora la filtrazione di cibi e bevande</h2>
                <p class="navigation_pera">Nel dinamico settore alimentare e delle bevande, le soluzioni di filtrazione <b>mmp</b> si distinguono, garantendo qualità e sicurezza del prodotto. Scopri oggi la nostra gamma per elevare i tuoi processi e soddisfare i più alti standard del settore. Contattaci per una filtrazione affidabile, dove precisione ed eccellenza si incontrano.</p>
                <div class="ym_add">
                    <div class="theme-btn justify-content-start">
                       <button href="#" type="button" class="btn-add" data-bs-toggle="modal" data-bs-toggle="modal"
                        data-bs-target="#exampleModal" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                        <p>Get  a Quote</p>
                      </button>
                    </div>
                  </div>
            </div>
            <div class="col-lg-6">
                <img class="img-fluid pharm_mg" src="{{ asset('public/front/images/food-and-beverage-filtration.png') }}" alt="filtrazione di alimenti e bevande">
            </div>
        </div>
    </div>
</section>

<!-- our customer -->
<section class="customer">
  <div class="container">
  <h3 class="inner-head">Our Customers</h3>
     <div class="cust_slid">
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg1.png') }}" alt="Reliance Industries Limited">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg2.png') }}" alt="Otsuka Holdings">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg3.png') }}" alt="Ramdev Chemical Industries">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg4.png') }}" alt="Adani">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg5.png') }}" alt="Indian Oil">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg6.png') }}" alt="ONGC">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg7.png') }}" alt="HP">
        </div>
        <div class="slid_mg">
          <img src="{{ asset('public/front/images/mg8.png') }}" alt="Murugappa Group">
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
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Chiudi"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('productinquiry') }}" id="productinquiry">
                    @csrf
                    <div class="mb-3">
                        <div class="form-group">
                            <input type="text" placeholder="" name="name" id="name" />
                            <label for="name">Nome</label>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <input type="text" placeholder="" id="product_name" name="product_name"
                                value="Industria Alimentare e delle Bevande" readonly />
                            <label for="floatingSelect">Nome Industria</label>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <input type="email" placeholder="" name="email" id="email" />
                            <label for="inputField">Email</label>
                            <span class="error-message" id="email-error"></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <input type="text" placeholder="" name="phone" id="phone" />
                            <label for="">Telefono</label>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <input type="text" placeholder="" name="city" id="city" />
                            <label for="">Città</label>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <textarea name="message" id="message" cols="" rows="" class="w-100" placeholder=""></textarea>
                            <label for="">Messaggio</label>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6Lc2cg0sAAAAAKmVVEUvIDR61vxyYWi_BmanSqth"
                                id="captcha_productinquiry"></div>
                            <span class="error-message" id="captcha-error"></span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer d-flex justify-content-center theme-btn">
                <button type="button" id="productinquirysubmit" class="btn-add">
                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                    <p>Invia Messaggio</p>
                </button>
            </div>
        </div>
    </div>

</div>

@include('layouts.frontfooter')

<script>
    $('#productinquirysubmit').on('click', function (event) {
        let isValid = true;

        // Validazione Nome
        if ($('#name').val().trim() === '') {
            $('#name').siblings('.error-message').text('Questo campo è obbligatorio.');
            isValid = false;
        }

        // Validazione Email
        let email = $('#email').val().trim();
        let emailValidation = validateEmail(email);
        if (!emailValidation.valid) {
            $('#email-error').text(emailValidation.message);
            isValid = false;
        } else {
            $('#email-error').text('');
        }

        // Validazione Telefono
        if ($('#phone').val().trim().length < 10) {
            $('#phone').siblings('.error-message').text('Inserisci un numero di telefono valido.');
            isValid = false;
        }

        // Validazione Città
        if ($('#city').val().trim() === '') {
            $('#city').siblings('.error-message').text('Questo campo è obbligatorio.');
            isValid = false;
        }

        // Validazione Messaggio
        if ($('#message').val().trim() === '') {
            $('#message').siblings('.error-message').text('Questo campo è obbligatorio.');
            isValid = false;
        }

        // Validazione reCAPTCHA
        var recaptchaResponse = grecaptcha.getResponse();
        if (recaptchaResponse.length === 0) {
            $('#captcha-error').text('Per favore verifica il CAPTCHA.');
            isValid = false;
        } else {
            $('#captcha-error').text('');
        }

        // Blocca l'invio se non valido
        if (!isValid) {
            event.preventDefault();
        } else {
            $('#productinquiry').submit();
        }
    });

    // Pulisce gli errori al digitare
    $('input, textarea').on('input', function () {
        $(this).siblings('.error-message').text('');
    });

    // Funzione validazione email
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
            return { valid: false, message: "Per favore inserisci un indirizzo email valido." };
        }

        for (let pattern of spamPatterns) {
            if (pattern.test(email)) {
                return { valid: false, message: "Questa email non è consentita." };
            }
        }

        return { valid: true, message: "" };
    }
</script>
