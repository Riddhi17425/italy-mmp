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
  	<a href="https://wa.me/919830030614?text=Inquiry%20from%20the%20website.%20" target="_blank"> <img src="https://www.mmpfilter.com/public/images/whatsapp.png" alt="whatsapp" class="bottom-whatsapp"></a>
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
                mmp Innovates Sustainable Filtration Solutions For Air And Water
                With The Goal Of Enhancing Quality Of Life
              </p>
              <img
              src="{{ asset('public/front/images/nsf-logo.png') }}"
              alt="nsf-logo"
              class="img-fluid"/>
              <p class="pt-2">MB OCEANIC<sup>®</sup> & LAGOON<sup>®</sup></p>
            </div>
          </div>
          <div class="col-xl-2 col-lg-2 col-md-6">
            <div>
              <h4>Links</h4>
              <ul>
                <li><a href="{{ url('/')}}">Home</a></li>
                <li><a href="{{ route('about') }}">About Us</a></li>
                <li><a href="{{ route('certifications') }}">Certifications</a></li>
                <li><a href="{{ route('machinery') }}">Videos</a></li>
                <li><a href="{{ route('blog') }}">Blogs</a></li>
                <li><a href="{{ route('event') }}">Events</a></li>
                <li><a href="{{ route('contact') }}">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6">
            <div>
              <h4>Products</h4>
              <ul>
              @foreach($categories as $category_id => $categoryGroup)
              @php
              $category = $categoryGroup->first();
              $catName = $category->category_name;
              $catUrl = $catUrl = url('product/' . $category->category_url);
          @endphp
                <li><a href="{{ $catUrl }}">
                    {{ $catName }}</a></li>
              @endforeach  
              <li><a href="{{ url('/pph') }}">
                  PPH One Piece Filter Housing</a></li>
              <li><a href="{{ asset('public/front/images/mmp-master-brochure-2025.pdf') }}" target="_blank">
                  E-Catalogue</a></li>
              
              </ul>

            </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6">
            <div>
              <h4>Get in Touch</h4>
              <p class="mb-3 d-flex align-items-start"><img src="{{ asset('public/front/images/address.png') }}" alt="address" class="me-3 mt-2">
                <a target="_blank" class="m-0 address-width"
                href="https://www.google.com/maps/search/C3-602+Anushruti+Tower,+SG+Road,+Thaltej,+Ahmedabad+%E2%80%93+380059+Gujarat,+India/@23.053608,72.5150764,17z/data=!3m1!4b1?entry=ttu"> 
                C3-602 Anushruti Tower, SG Road, Thaltej, Ahmedabad – 380059 Gujarat, India</a>
              </p>
            <div class="mb-3 d-flex align-items-center">
            <img src="{{ asset('public/front/images/massege.png') }}" alt="massege" class="me-3 mt-2">
                <a href="mailto:sales@mmpfilter.com">sales@mmpfilter.com</a>
            </div>
            <div class="mb-3 d-flex align-items-center"> 
            <img src="{{ asset('public/front/images/phone.png') }}" alt="phone" class="me-3 mt-2">
                <a href="tel:+919830030614">+91 9830030614</a>
            </div>

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
       
      </div>
      <div class="cspt-footer-widget col-md-12 col-lg-12 mt-5">
        <aside id="nav_menu-2" class="widget widget_nav_menu">
            <div id="toggleLink" class="text-center position-relative" style="cursor: pointer; color:#fff;">
                <span id="linkText"> MMP Globally </span>
                <hr>
            </div>
        </aside>
    </div>
    <!-- .cspt-footer-widget -->
</div><!-- .row -->
<!--show more links-->
<div class="container" id="contentToToggle">
<div class="row">
    <div class="col-xl-12">
        <ul>
        <li><a href="{{ route('filter-cartridges-in-usa') }}">Filter Cartridges in USA</a></li>
        <li><a href="{{ route('melt-blown-filter-cartridges-in-usa') }}">Melt Blown Filter Cartridges in USA</a></li>
        <li><a href="{{ route('pp-filtration-yarn-in-usa') }}">PP Filtration Yarn in USA</a></li>
          <li><a href="{{ route('wound-filter-cartridges-in-usa') }}">Wound Filter Cartridges in USA</a></li>
          <li><a href="{{ route('wound-filter-cartridges-machine-in-usa') }}">Wound Filter Cartridges Machine in USA</a></li>
        </ul>
    </div>
</div>
</div>
    </footer>
    <div class="copyright-bg">
      <div class="container-fluid p-0">
        <div class="row w-100">
          <div class="col-md-12 p-0">
            <div class="d-flex justify-content-center align-items-center p-3">
              <p class="m-0 text-center"> &#169;Copyright <?php echo date('Y') ?> <a href="https://mmpfilter.com/">mmp Filter.</a> All Rights Reserved.</p>             
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
    
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog d-flex">
        <div class="modal-content left_ft_modal">
            <div class="modal-header border-0">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
            </div>
            <div class="modal-body">
                <h5 class="mb-4 mt-2 ms-2">Our USPs</h5>
                <ol>
                    <li>More than 2 Decades of Experience in Filtration Solutions</li>
                    <li>NSF Certified Products</li>
                    <li>Experienced and Dedicated Team</li>
                    <li>Global Service Provider</li>
                    <li>Customizable Filtration Solutions</li>
                    <li>Wide Industry Coverage</li>
                </ol>
                <h5 class="mt-5 mb-3"><b>You can also reach us via</b></h5>
                Email: <a href="mailto:sales@mmpfilter.com">sales@mmpfilter.com</a><br>
                Phone Number: <a href="tel:+91 9830030614">+91 9830030614</a>
            </div>
        </div>
        <div class="modal-content">
            <div class="modal-header">
                <p class="modal-title" id="exampleModalLabel"><strong>Inquiry Form</strong></p>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('headerinquiry') }}" id="headerinquiry1">
                    @csrf
                    <input type="text" name="website_url" style="display:none">

                    <div class="mb-3">
                        <div class="form-group">
                            <input type="text" placeholder="" required name="name" id="name_set" 
                                oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '').replace(/\s{2,}/g, ' ').trimStart();" />
                            <label for="name_set">Name <span style="color:red">*</span></label>
                            <span class="error-message"></span>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-group">
                            <select class="inquiry_select" name="product_type" required id="product_type" onchange="toggleOtherProduct(this.value)">
                                <option value="">Select product <span style="color:red">*</span></option>
                                @foreach ($product as $productname)
                                    <option value="{{ $productname->product_name }}">{{ $productname->product_name }}</option>
                                @endforeach
                                <option value="other">Other</option>
                            </select>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="mb-3" id="other_product_div" style="display: none;">
                        <div class="form-group">
                            <input type="text" placeholder="" name="other_product" id="other_product_set" />
                            <label for="other_product_set">Enter Product <span style="color:red">*</span></label>
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
                            <label for="phone_set">Contact No. <span style="color:red">*</span></label>
                            <span class="error-message"></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <input type="text" placeholder="" name="company_name" required id="company_name_set" />
                            <label for="company_name_set">Company Name <span style="color:red">*</span></label>
                            <span class="error-message"></span>
                        </div>
                        <!--<div class="form-group">-->
                        <!--    <input type="text" placeholder="" name="city" id="city_set" />-->
                        <!--    <label for="city_set">City <span style="color:red">*</span></label>-->
                        <!--    <span class="error-message"></span>-->
                        <!--</div>-->
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <textarea name="message" id="message_set" required cols="" rows="" class="w-100" placeholder=" "></textarea>
                            <label for="message_set">Message 
                                <!--<span style="color:red">*</span>-->
                            </label>
                            <!--<span class="error-message"></span>-->
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <!--<div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site') }}" id="captcha-header"></div>-->
                            <!--<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response-header">-->
                            <!--<div id="captcha-error-header" class="text-danger"></div>-->
                             <div id="captcha-header" data-sitekey="6Lcrw_4pAAAAAKFnbxxXtyUZUa12DlHursCRjuak"></div>
                                  <input type="hidden" id="g-recaptcha-response-header" name="g-recaptcha-response">
                                  <div id="captcha-error-header" class="error-message"></div>

                        </div>
                    </div>
                    <div class="modal-footer d-flex theme-btn">
                        <button type="button" id="headerinquirysubmit1" class="btn-add">
                            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span><p>Send message</p>
                        </button>
                    </div>
                </form>
            </div>
                
            </div>
        </div>
    </div>

    
    
    <!--anchor fixed button-->
    <!--<div class="fixed-side">-->
        <a class="fixed_btn_1" href="javascript:void(0)"  data-bs-toggle="modal" data-bs-toggle="modal"data-bs-target="#exampleModal">Enquire Now</a>
    <!--</div>-->
    <!-- footer and -->

   <!--<script src="{{ asset('public/front/js/jquery.js') }}"></script>-->
   <!--<script src="{{ asset('public/front/js/jquery-3.7.1.js') }}"></script>-->
   
<!--<script src="{{ asset('public/front/js/bootstrap.min.js') }}"></script>-->
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

// Modified form submission handler
// document.getElementById('headerinquirysubmit').addEventListener('click', function(e) {
//     e.preventDefault();
//     const productTypeSelect = document.getElementById('product_type');
//     const otherProductInput = document.getElementById('other_product_set');
    
//     if (productTypeSelect.value === 'other') {
//         if (!otherProductInput.value.trim()) {
//             return false;
//         }
//     }
    
//     // Submit the form
//     document.getElementById('headerinquiry1').submit();
// });</script>

<!--<script>-->
<!--    document.getElementById('toggleLink').addEventListener('click', function () {-->
<!--        var content = document.getElementById('contentToToggle');-->
<!--        var linkText = document.getElementById('linkText');-->
<!--        content.style.display = content.style.display === 'none' ? 'block' : 'none';-->
<!--        linkText.textContent = content.style.display === 'none' ? '- Show Links -' : '- Hide Links -';-->

<!--    });-->
<!--</script>-->
<script>
    // $(document).ready(function () {
    //     $("#exampleModal").modal('show');
    // });
$(document).ready(function() {
    // Get the current pathname
    var pathname = window.location.pathname;

    if (pathname === '/' && !pathname.includes('product-detail') && !pathname.includes('product')) {
        // For the homepage ('/'), show the modal after 4 seconds
        setTimeout(function() {
            $("#exampleModal").modal('show');
        }, 5000);
    } else if (pathname !== '/thank-you' && pathname !== '/contact' && !pathname.includes('product-detail') && !pathname.includes('product')) {
        // For any other page (except '/thank-you'), show the modal after 12 seconds
        setTimeout(function() {
            $("#exampleModal").modal('show');
        }, 7000);
    }
});
</script>
<script>

let headerCaptchaRendered = false;
let headerCaptchaId = null;

function resetCaptcha(containerId, widgetIdVar, hiddenInputId, errorContainerId) {
    if (widgetIdVar !== null) {
        grecaptcha.reset(widgetIdVar);
        $(`#${containerId}`).html('');  // Remove CAPTCHA from DOM
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
                $('#captcha-error-header').text('reCAPTCHA has expired. Please verify again.');
            }
        });
        headerCaptchaRendered = true;
    }
}

// When modal is shown
$('#headerModal').on('shown.bs.modal', function () {
    headerCaptchaId = resetCaptcha('captcha-header', headerCaptchaId, 'g-recaptcha-response-header', 'captcha-error-header');
    headerCaptchaRendered = false;
    renderHeaderCaptcha();
});

// Validation script
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
            $('#captcha-error-header').text('Please verify that you are not a robot.');
            return false;
        }
        $('#captcha-error-header').text('');
        return true;
    }

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
            return { valid: false, message: 'Please enter a valid email address.' };
        }

        for (let pattern of spamPatterns) {
            if (pattern.test(email)) {
                return { valid: false, message: 'This email is not allowed.' };
            }
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
        name: (value) => ({ valid: value.length > 0, message: 'Name is required.' }),
        email: (value) => validateEmail(value),
        phone: (value) => ({
            valid: value.length >= 10 && value.length <= 15,
            message: value.length === 0 ? 'Phone number is required.' : 'Please enter a valid phone number (10-15 digits).'
        }),
        company_name: (value) => ({ valid: value.length > 0, message: 'Company name is required.' }),
        product_type: (value) => ({ valid: value.length > 0, message: 'Please select a product.' })
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
                message: 'Please specify the product.'
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
