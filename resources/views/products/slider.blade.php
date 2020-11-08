@if($images)
    <div id="wb_orto1Carousel1"
         style="position:relative;width:461px;height:270px;z-index:11;overflow:hidden; float:left; margin-right:25px">
        <div id="orto1Carousel1" style="position:absolute; top:20px; left:20px;">
            @foreach($images as $key => $image)
                <div class="frame">
                    <div
                            style="width:416px;height:223px; text-align:center; background:#fff;">
                        <img style="max-width:416px;"
                             title="{{ $product->name }} оптом, от производителя, фото #{{ $key + 1 }}"
                             alt="{{ $product->name }} оптом, от производителя, фото #{{ $key + 1 }}"
                             src="{{ asset($image->name) }}"></div>
                </div>
            @endforeach
        </div>
        <div id="orto1Carousel1_back"
             style="position:absolute;left:4px;top:39%;width:21px;height:67px;z-index:999"><a
                    style="cursor:pointer"><img alt="Back" style="border-width:0" src="/images/l1.png"></a>
        </div>
        <div id="orto1Carousel1_next"
             style="position:absolute;right:4px;top:39%;width:21px;height:67px;z-index:999"><a
                    style="cursor:pointer"><img alt="Next" style="border-width:0" src="/images/r1.png"></a>
        </div>
    </div>
@endif
