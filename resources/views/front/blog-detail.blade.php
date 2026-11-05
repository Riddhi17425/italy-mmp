
@include('layouts.frontheader')

@php
    $createdAt = !empty($blogdetail->created_at) ? \Carbon\Carbon::parse($blogdetail->created_at) : null;

    if (!empty($blogdetail->publish_date)) {
        $publishedCarbon = \Carbon\Carbon::parse($blogdetail->publish_date);
        if ($createdAt) {
            $publishedCarbon->setTimeFrom($createdAt);
        }
    } else {
        $publishedCarbon = $createdAt;
    }

    $modifiedCarbon = !empty($blogdetail->updated_at)
        ? \Carbon\Carbon::parse($blogdetail->updated_at)
        : $publishedCarbon;

    $datePublished = $publishedCarbon ? $publishedCarbon->format('Y-m-d\TH:i:sP') : null;
    $dateModified  = $modifiedCarbon ? $modifiedCarbon->format('Y-m-d\TH:i:sP') : $datePublished;

    $blogSchema = [
        '@context' => 'https://schema.org',
        '@type' => 'BlogPosting',
        'mainEntityOfPage' => [
            '@type' => 'WebPage',
            '@id' => url('/dettaglio-blog/' . $blogdetail->url),
        ],
        'headline' => $blogdetail->title,
        'description' => !empty($blogdetail->meta_description) ? $blogdetail->meta_description : $blogdetail->title,
        'image' => asset('public/blog/' . $blogdetail->image),
        'author' => [
            '@type' => 'Organization',
            'name' => 'mmp Filter',
        ],
        'publisher' => [
            '@type' => 'Organization',
            'name' => 'mmp Filter',
            'logo' => [
                '@type' => 'ImageObject',
                'url' => 'https://italy.mmpfilter.com/public/front/images/logo.png',
            ],
        ],
        'datePublished' => $datePublished,
        'dateModified' => $dateModified,
    ];

    $faqItems = [];
    if (!empty($blogdetail->title_desc)) {
        $decodedFaq = json_decode($blogdetail->title_desc, true);
        if (is_array($decodedFaq)) {
            foreach ($decodedFaq as $faqRow) {
                if (!empty($faqRow['question']) && !empty($faqRow['answer'])) {
                    $faqItems[] = [
                        '@type' => 'Question',
                        'name' => trim(strip_tags($faqRow['question'])),
                        'acceptedAnswer' => [
                            '@type' => 'Answer',
                            'text' => trim(strip_tags($faqRow['answer'])),
                        ],
                    ];
                }
            }
        }
    }

    $faqSchema = !empty($faqItems) ? [
        '@context' => 'https://schema.org',
        '@type' => 'FAQPage',
        'mainEntity' => $faqItems,
    ] : null;
@endphp

<script type="application/ld+json">
{!! json_encode($blogSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@if($faqSchema)
<script type="application/ld+json">
{!! json_encode($faqSchema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
</script>
@endif

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
        <div class="row d-flex justify-content-center">
            @if(!empty($blogdetail->cta_image))
            <div class="col-md-12">
                <div class="flato-img mt-4">
                 <a href="{{ url('contatto') }}" target="_blank">   <img src="{{ asset('public/blog_cta_image/'. $blogdetail->cta_image) }}" alt="{{ $blogdetail->title }}" class="img-fluid mb-3"></a>
                </div>
            </div>
            @endif
            @if(!empty($blogdetail->conclusion)) 
            <div class="col-md-12">
                <div>
                    <p>{!! $blogdetail->conclusion !!}</p>
                </div>
            </div>
            @endif
        </div>
    
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
