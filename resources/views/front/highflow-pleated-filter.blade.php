@include('layouts.frontheader')
<!-- banner -->
<style>
    .set-content p{
        color: #fff;
        margin-bottom: 30px;
    }
    
</style>
<!-- banner -->
<section class="contact-banner position-relative">
    <img src="{{ asset('public/front/images/Highflow_Pleated_Filter_Cartridge.jpg') }}" alt="Highflow Banner" class="img-fluid mobile-img" />
  <div class="container-fluid p-0">
    <img src="{{ asset('public/front/images/highflow-banner.jpg') }}" alt="Highflow Banner" class="img-fluid product-page-header" />
    <div class="contact-head product-contact-head">
      <h1>{{ $category->category_name}}</h1>
      <!--<nav aria-label="breadcrumb">-->
      <!--  <ol class="breadcrumb">-->
      <!--    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>-->
      <!--    <li class="breadcrumb-item" aria-current="page">-->
      <!--    Products-->
      <!--    </li>-->
      <!--    <li class="breadcrumb-item active" aria-current="page">-->
      <!--    {{ $category->category_name}}-->
      <!--    </li>-->
      <!--  </ol>-->
      <!--</nav>-->
        <div class="row">
          <div class="col-md-9">
              <div class="set-content">
                    <p>Engineered for <b>Maximum Flow, High Dirt Holding,</b> and <b>Efficient Pleated Filtration.</b></p>
                    </div>
                    <div class="theme-btn justify-content-start ">
                      <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-toggle="modal"
                        data-bs-target="#inquiryModal" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right"
                            aria-hidden="true"></i></span>
                        <p>Enquire Now</p>
                      </button>
                    </div>
          </div>
      </div>
    </div>
  </div>
</section>
<!-- banner end -->

<!-- filter-inner -->
<section class="filter-inner">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="m-add">
                    <p>
                    High Flow Pleated Filter is renowned worldwide for efficient performance, featuring a multi-layered design, wide chemical compatibility, and robust construction for high dirt-holding capacity.
                    These systems ensure reliable and effective filtration for various applications. 
                    </p>
                   
                    <!--<p>-->
                    <!--   High Flow filter cartridges are used in a wide variety of applications where high flow rates and long Service life are primary requirements.-->
                    <!--</p>-->
                    <!--<div class="theme-btn justify-content-start ">-->
                    <!--  <button type="button" class="btn-add" data-bs-toggle="modal" data-bs-toggle="modal"-->
                    <!--    data-bs-target="#inquiryModal" data-bs-whatever="@mdo"><span><i class="fa fa-angle-right"-->
                    <!--        aria-hidden="true"></i></span>-->
                    <!--    <p>Enquire Now</p>-->
                    <!--  </button>-->
                    <!--</div>-->
                    <div class="modal fade" id="inquiryModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">

                   <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Inquire Form</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('productinquiry') }}" id="productinquiry">
                                        @csrf
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="" required name="name" id="name" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();" />
                                                <label for="name">Name</label>
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="" id="product_name" required name="product_name" 
                                                    value="{{ $category->category_name }}" readonly />
                                                <label for="floatingSelect">Product Name</label>
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <input type="email" placeholder="" name="email" required id="email" />
                                                <label for="inputField">Email</label>
                                                <span class="error-message" id="email-error"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="" name="phone" required id="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 15);" />
                                                <label for="">Contact No.</label>
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="" name="city" required id="city" oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s+/g, ' ').trimStart();"/>
                                                <label for="">City</label>
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <textarea name="message" id="message" required cols="" rows="" class="w-100" placeholder=""></textarea>
                                                <label for="">Message</label>
                                                <span class="error-message"></span>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <div class="form-group">
                                                <div class="g-recaptcha" data-sitekey="6Lcrw_4pAAAAAKFnbxxXtyUZUa12DlHursCRjuak" id="captcha_productinquiry"></div>
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
                </div>              
            </div>
        </div>
        <div class="row">
            <div class="col-md-5">
                <div class="product-detail">
                    <div><img src="{{ asset('public/Product_Images/highflow-product.jpg') }}" alt="highflow Product" class="img-fluid" ></div>
                   </div>
            </div>
            <div class="col-md-7">
               <p>High Flow filter systems are successfully used around the world, is constructed with a high surface area melt-blown polypropylene media for low 
initial pressure drop, high dirt holding capacity, and high-efficiency performance.</p>
               <!--<p>MMP is the first manufacturer of wound polypropylene filter cartridge in india, and as on 2015, backward integrated, and started manufacturing the polypropylene yarn using the friction spinning technology.</p>-->
              <h2 class="dref-text">Features And Benefits</h2>
               <ul class="dref-spinning">
                <li> Multiple pleated layer construction, filtration configuration in-out</li>
                <li>High filtration area up to 9m2</li>
                <li>Wide range chemical compatibility</li>
                <li>  Nominally rated with retention ratings between High flow rate up to 113m3/hr (500GPM).  
 Inner core for high mechanical strength, outer cage to protect the pleated media, Robust outer cage.</li>
                <li>Wide chemical compatibility.</li>
                <li>End connections to fit all standard </li>
              
              </ul>
            </div>
            <div class="col-md-7">
            <h3 class="dref-text">Application</h3>
               <ul class="dref-spinning">
                  <li>Sea water desalination</li>
                  <li>Oil & Chemical</li>
                  <li>Food and Beverages</li>
                  <li>White Fuels</li>
                  <li>Process Water</li>
                  <li>Amine, Glycol</li>
                  <li>Power plant water treatment</li>
                  <li>Naphtha, HC Condensate</li>
                  <li>RO Guard Pre-filtration</li>
                  <li>Steel mill water treatment</li>
                </ul>
            </div>
             <div class="col-md-5">
                <div class="product-detail">
                    <div><img src="{{ asset('public/front/images/data.png') }}" alt="Ordering Information" class="img-fluid" ></div>
                   </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.frontfooter')
<script>
    $('#productinquirysubmit').on('click', function(event) {
        let isValid = true;

        // Name validation
        // if ($('#name').val().trim() === '') {
        //     $('#name').siblings('.error-message').text('This field is required.');
        //     isValid = false;
        // }
        
        // Name validation
        let name = $('#name').val().trim();
        if (name === '' || containsSpamContent(name)) {
            $('#name').siblings('.error-message').text('Enter valid name.');
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
        
        // Message validation
        let message = $('#message').val().trim();
        if (message === '' || containsSpamContent(message)) {
            $('#message').siblings('.error-message').text('Enter valid message.');
            isValid = false;
        }

        // City validation
        let city = $('#city').val().trim();
        if (city === '' || containsSpamContent(city)) {
            $('#city').siblings('.error-message').text('Enter valid city name.');
            isValid = false;
        }
        
        // // Message validation
        // if ($('#message').val().trim() === '') {
        //     $('#message').siblings('.error-message').text('This field is required.');
        //     isValid = false;
        // }
        // // City validation
        // if ($('#city').val().trim() === '') {
        //     $('#city').siblings('.error-message').text('This field is required.');
        //     isValid = false;
        // }

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
    function validateEmail(email)
     {
            var emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
            var spamPatterns = [
                // /^[a-zA-Z]{8,}[0-9]{3,}@/,
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
        // Spam content validation
        function containsSpamContent(input) {
        let cleaned = input.trim().toLowerCase();
    
        // Reject if only special characters or if special characters repeated more than once
        if (/^[\s\*\#@!$%^&()_+\-=\[\]{};':"\\|,.<>\/?`~]+$/.test(cleaned)) {
            return true;
        }
    
        // Reject if same special character used more than once continuously
        if (/([#@!$%^&*()_+={}\[\]|\\:;"'<>,.?/~`-])\1{1,}/.test(cleaned)) {
            return true;
        }
    
        // Block content with just link(s) and short spammy content
        if (/^(https?:\/\/|www\.|<a\s+href=)/i.test(cleaned) && cleaned.length < 40) {
            return true;
        }
    
        // Custom spammy content patterns
        const spamPatterns = [
            /<a\s+href=/i,
            /snag\s+your\s+free/i,
            /hs=[a-z0-9]{20,}/i,
            /xxx/i,
            /^\*{3,}$/  // Only asterisks
        ];
    
        return spamPatterns.some(pattern => pattern.test(cleaned));
    }

</script>