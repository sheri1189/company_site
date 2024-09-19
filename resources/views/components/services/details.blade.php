@if (!empty($title) && !empty($description) && !empty($class))
    <div class="portfolio-challange">
        <div class="row">
            <div class="col-md-6 text-justify ps-5 pe-5">
                <h3 class="fw-bold">{!! $title !!}</h3>
                <p style="text-align: justify">{!! $description !!}</p>
            </div>
            <div class="{{ $class }}">
            </div>
        </div>
    </div>
@endif
