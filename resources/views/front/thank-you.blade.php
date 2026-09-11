@include('layouts.frontheader')
  <section class="thankyou-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center thank-contect">
                    <h3>Grazie</h3>
                    <p>La tua richiesta è stata inviata con successo.</p>
                    <p class="mb-5">Ti contatteremo al più presto.</p>
                     <div class="theme-btn">
                      <a href="{{ url('/') }}" class="btn-add"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                        <p>Vai alla Home</p>
                      </a>
            </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.frontfooter')