@include('layouts.frontheader')

<!-- about-banner -->
<section class="contact-banner position-relative">
  <div class="container-fluid p-0">
      <img src="{{ asset('public/front/images/Blog.jpg') }}" alt="Blog" class="img-fluid" />
    <!--<img src="{{ asset('public/blog_banner/'.$blogdetail->banner_image) }}" alt="" class="img-fluid" />-->
    <div class="contact-head position-absolute">
      <h4 class="blog-page-head">Blog</h4>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            <li class="breadcrumb-item" aria-current="page"><a href="{{ url('blogs') }}">Blog</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $blogdetail->title }}</li>
        </ol>
    </nav>
    </div>
  </div>
</section>
<!-- about-banner end -->
<style>
p{
line-height: 28px !important;
}

.blog-detail ul {
  list-style: none !important;
}

.blog-detail ul li::before {
  content: "• ";
  color:  #00a3ff; 
}
.blog-page-head{
    color:#fff;
    font-size:60px;
    font-weight:700;
}
</style>
<!-- blog-detail -->
<section class="blog-detail">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><b class="blog-head">{{ $blogdetail->title }}</b></h1>
                <p>{{date('M',strtotime($blogdetail->publish_date))}}
                          {{date('d',strtotime($blogdetail->publish_date))}} 
                          {{date('Y',strtotime($blogdetail->publish_date))}}</p>
            </div>
        </div>
        
        <div class="row d-flex justify-content-center">
            <div class="col-md-12">
                <div class="flato-img">
                    <img src="{{ asset('public/blog/'. $blogdetail->image) }}" alt="{{ $blogdetail->alt }}" class="img-fluid mb-3">
                </div>
            </div>
            <div class="col-md-12">
                <div>
                    <p>{!! $blogdetail->description !!}</p>
                </div>
            </div>
        </div>
        <?php
         if ($blogdetail->url == 'La-filtrazione-è-una-parte-molto-importante-della-vita') {  ?>
          <div class="col-md-12 show_cfc">
           <img src="{{ asset('public/blog/FILATO-22-SPECIFICATIONS-pdf.jpg-1-1.png') }}" alt="flato pdf" class="img-fluid mb-3">
          <div>
        <?php  }  ?>
    </div>
</section>
<div class="container">
    @if($blogdetail->title_desc)
    <div class="FAQ_productList mb-5">
            <h4 class="mb-5">Domande Frequenti (FAQ)
            </h4>
        <div class="accordion" id="accordionExample">
                @foreach(json_decode($blogdetail->title_desc, true) as $key => $item)
                    <div class="accordion-item">
                        <h5 class="accordion-header" id="heading{{ $key }}">
                            <button class="accordion-button {{ $key == 0 ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $key }}" aria-expanded="{{ $key == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $key }}">
                                {{ $item['question'] }}
                            </button>
                        </h5>
                        <div id="collapse{{ $key }}" class="accordion-collapse collapse  {{ $key == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $key }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                {{ $item['answer'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
    @endif
</div>
<!-- blog-detail-end -->

@include('layouts.frontfooter')
