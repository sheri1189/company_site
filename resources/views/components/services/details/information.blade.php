@if (!empty($title) && !empty($description))
    <div class="col-md-4 col-sm-12 mb-5">
        <div class="pbmit-ihbox-style-18" style="height: 384px">
            <div class="pbmit-ihbox-box">
                <div class="pbmit-ihbox-contents">
                    <div class="pbmit-ihbox-icon">
                        <div class="pbmit-ihbox-icon-wrapper text-start">
                            <div class="pbmit-icon-wrapper pbmit-icon-type-icon">
                                <i class="pbmit-xido-icon-global-marketing"></i>
                            </div>
                        </div>
                    </div>
                    <h2 class="pbmit-element-title text-start">{!! $title !!}</h2>
                    <ul class="list-group list-group-borderless mt-3 text-center">
                        @foreach ($description as $value)
                            <li class="list-group-item"><i class="fa fa-check-circle"></i> {{ $value }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif
