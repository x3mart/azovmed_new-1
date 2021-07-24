@if($products)
    @foreach($products as $product)
        <div style="background:#fff;display:block; margin: 5px; float:left; height:280px; width:170px; padding:5px; -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px; border:1px #4CAF50 solid; position:relative;">
            @if($product->is_sale)
                <div style="background: rgba(0, 128, 0, 0.55);position: absolute;top: 20px;right: 0;color: #fff;padding: 0px 7px;">
                    Акция
                </div>
            @endif
            <div style="width:170px; height:150px; line-height:135px; overflow: hidden">
                <a href="{{ route('product', ['productAlias' => $product->alias, 'catAlias' => $product->category->alias]) }}">
                    @if($product->images->isNotEmpty())
                    <img title="{{ $product->name }} оптом, от производителя"
                         alt="{{ $product->name }} оптом, от производителя"
                         style="width:170px; max-height: 150px;"
                         src="{{ asset($product->images->first()->name) }}">
                    @endif
                </a>
            </div>
            <a style="height: 70px; font-size:18px; display: block; margin-top:10px; text-align: center; text-decoration: none; color:#000; font-weight: normal;font-family: 'Roboto Lt';"
               href="{{ route('product', ['productAlias' => $product->alias, 'catAlias' => $product->category->alias]) }}">{{ $product->name }}</a>
            <a style="margin:10px 0 0 18px" class="btnMore"
               href="{{ route('product', ['productAlias' => $product->alias, 'catAlias' => $product->category->alias]) }}">Купить
                оптом</a>
        </div>
    @endforeach
@endif
