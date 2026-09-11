@include('layouts.frontheader')
    <!-- about-banner -->
    <section class="contact-banner position-relative">

        <img src="{{ asset('public/front/images/case_studie_banner.png') }}" alt="Studio di Caso" class="img-fluid product-page-header" />
        <div class="contact-head">
            <h1>Studio di Caso</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Studio di Caso</li>
                </ol>
            </nav>
        </div>
        
    
</section>
    <section class="blog-content">
        <div class="container">
            <div class="row g-md-5">
                 @foreach($casestudy as $val)
                    <div class="col-md-6">
                        <div class="blog-img position-relative">
                            
                                
                                <img src="{{ asset('public/casestudy_banner/'.$val->banner_image) }}" alt="{{ $val->title }}" class="mb-4 w-100 img-fluid"></a>
                                
                                <h4 class="mb-3">{{ $val->title }}</h4>
                                <div class="casestudy-short-desc">{!! $val->short_description !!}</div>
                            
                            <div class="theme-btn justify-content-start">
                                <a href="{{ url('/dettaglio-casi-studio/'.$val->url) }}" class="nav-link btn-add">
                                    <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                                <p>Leggi di più</p>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                
            </div>
        </div>
    </section>
    <!-- end -->

@include('layouts.frontfooter')
