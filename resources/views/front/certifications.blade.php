@include('layouts.frontheader')

    <!-- about-banner -->
    <section class="inner-banner-certification">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div>
                        <h1 class="text-start">Certificazioni</h1>
                    </div>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Certificazioni</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- about-banner end -->

    <!-- certification -->
    <div class="certification-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><b>mmp</b> Filtration Pvt Ltd certificata NSF per le sue cartucce melt blown OCEANIC<sup>®</sup> e LAGOON<sup>®</sup> , conformi ai requisiti NSF/ANSI/CAN-61 e 372 per i componenti dei sistemi di acqua potabile.</p>
                </div>
            </div>
       <div class="certificate-gallery">
        <div class="row">
            @foreach ($data['certificates'] as $key => $val)
            <div class="col-md-4">
                <img src="{{ asset('public/CertificateFiles/'.$val->certificate_file) }}" style="width:100%" onclick="openModal({{ $key }});currentSlide({{ $key + 1 }})" alt="{{ $val->certificate_name }}">
                <h3>{{ $val->certificate_name }}</h3>
            </div>
            @endforeach
        </div>
        </div>


         <div id="myModal" class="modal z-3" style="z-index: 999999;">
            <span class="close cursor" onclick="closeModal()">&times;</span>
            <div class="modal-content">
                @foreach ($data['certificates'] as $key => $val)
                <div class="mySlides">
                    <img src="{{ asset('public/CertificateFiles/'.$val->certificate_file) }}" style="width:100%" alt="{{ $val->certificate_name }}">
                </div>
                @endforeach
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
         </div>
    </div>
    </div>
    <!-- certification-end -->
@include('layouts.frontfooter')