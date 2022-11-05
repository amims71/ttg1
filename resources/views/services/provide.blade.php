<section class="services-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="section-title">
                    <h6>What We Offer</h6>
                    <h2>Virtual Team Support</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach(config('service') as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="single-services-item">
                        <div class="services-icon">
                            <i class="{{$service['icon']}}"></i>
                        </div>
                        <h3>{{$service['name']}}</h3>
                        <p>{{$service['summary']}}</p>
                        <div class="services-btn-link">
                            <a href="#" class="services-link">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
