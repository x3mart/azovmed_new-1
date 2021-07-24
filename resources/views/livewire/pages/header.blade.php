<div>
    {{-- @dump(Route::currentRouteName()) --}}
    @if (Route::is('page.edit') || Route::is('livewire.message'))
    <form wire:submit.prevent='save' style="background:#fff;text-align:center;left:0%;width:100%;height:101px;z-index:99999;border-bottom:1px #efefef -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.13);
    box-shadow: 0 2px 3px rgba(0, 0, 0, 0.13);">
        <div id="indexLayer1_Container"
            style="width:973px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
            <div id="wb_indexText1"
                style="position:absolute;left:19px;top:8px;width:323px;height:43px;z-index:0;text-align:left;">
                <a style="color:#4CAF50; text-decoration: none; border-bottom:1px dotted;;" href="#.">
                    <span style="color:#000000;font-family:'Proxima Nova Th';font-size:35px;">AZO&nbsp;&nbsp;&nbsp;&nbsp; MED</span></a>
            </div>
            <div id="wb_indexText5"
                style="position:absolute;left:619px;top:14px;width:319px;height:28px;text-align:right;z-index:1;">
                <input wire:model.defer="header.wb_indexText5_main_phone" style="color:#000000; font-family: 'Roboto Lt'; line-height: 21px;font-size:20px; font-weight:normal;text-align: right;" value="{{ $header->wb_indexText5_main_phone }}"><br/>
                <input wire:model.defer="header.wb_indexText5_email" style="color:#000000; font-family: 'Roboto Lt'; line-height: 21px;font-size:20px; font-weight:normal;text-align: right;" value="{{ $header->wb_indexText5_email }}"><br/>
                <input wire:model.defer="header.wb_indexText5_text" style="color:#000000; font-family: 'Roboto Lt'; line-height: 21px;font-size:20px; font-weight:normal;text-align: right;" value="{{ $header->wb_indexText5_text }}">
            </div>
            <div id="wb_indexImage2" style="position:absolute;left:93px;top:4px;width:42px;height:42px;z-index:3;">
                <img src="{{ asset('images/checked21.png') }}" id="indexImage2" alt=""></div>
            <div id="wb_indexText3"
                style="position:absolute;left:19px;top:50px;width:421px;height:22px;z-index:4;text-align:left;">
                <input wire:model.defer="header.wb_indexText3"style="color:#000000;font-family:'Roboto Lt';font-size:16px;width: 350px; height: 18px;" value="{{ $header->wb_indexText3 }}">
            </div>
            <div id="wb_indexText4"
                style="position:absolute;left:19px;top:70px;width:421px;height:22px;z-index:5;text-align:left;">
                <input wire:model.defer="header.wb_indexText4" style="color:#000000;font-family:'Roboto Lt';font-size:16px;width: 350px; height: 18px;" value="{{ $header->wb_indexText4 }}">
            </div>

            <ul id="menuTop">
                <li><a href="#.">Каталог товаров</a></li>
                <li><a href="#.">Схема заказа</a></li>
                <li><a href="#.">О нас</a></li>
            </ul>
            <input type="submit" value="Сохранить" class="btn btn-primary" style="position:absolute;right:-90px;top:50px;">
        </div>
    </form >
    @else
    <div style="background:#fff;position:fixed;top:0;text-align:center;left:0%;width:100%;height:101px;z-index:99999;border-bottom:1px #efefef -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0, 0.13);
        box-shadow: 0 2px 3px rgba(0, 0, 0, 0.13);">
        <div id="indexLayer1_Container"
            style="width:973px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
            <div id="wb_indexText1"
                style="position:absolute;left:19px;top:8px;width:323px;height:43px;z-index:0;text-align:left;">
                <a style="color:#4CAF50; text-decoration: none; border-bottom:1px dotted;;" href="/">
                    <span style="color:#000000;font-family:'Proxima Nova Th';font-size:35px;">AZO&nbsp;&nbsp;&nbsp;&nbsp; MED</span>
                </a>
            </div>
            <div id="wb_indexText5"
                style="position:absolute;left:619px;top:14px;width:319px;height:28px;text-align:right;z-index:1;">
                <span style="color:#000000; font-family: 'Roboto Lt'; line-height: 24px;font-size:20px; font-weight:normal">{{ $header->wb_indexText5_main_phone }}<br/>
                    <a style="color:#000000; border-bottom: 1px dotted; text-decoration: none;" href="mailto:{{ $header->wb_indexText5_email }}">{{ $header->wb_indexText5_email }}</a><br/>
                    <a style="color:#000000; border-bottom: 1px dotted;text-decoration: none;" href="#bid-modal" rel="modal:open">{{ $header->wb_indexText5_text }}</a>
                </span>
            </div>
            <div id="wb_indexImage2" style="position:absolute;left:93px;top:4px;width:42px;height:42px;z-index:3;">
                <img src="{{ asset('images/checked21.png') }}" id="indexImage2" alt="">
            </div>
            <div id="wb_indexText3"
                style="position:absolute;left:19px;top:47px;width:421px;height:22px;z-index:4;text-align:left;">
                <span style="color:#000000;font-family:'Roboto Lt';font-size:16px;">{{ $header->wb_indexText3 }}</span>
            </div>
            <div id="wb_indexText4"
                style="position:absolute;left:19px;top:64px;width:421px;height:22px;z-index:5;text-align:left;">
                <span style="color:#000000;font-family:'Roboto Lt';font-size:16px;">{{ $header->wb_indexText4 }}</span>
            </div>
            <ul id="menuTop">
                <li><a href="/#catalog">Каталог товаров</a>
                    <ul>
                        @foreach($categories as $category)
                            <li>
                                <a href="{{ route('category', ['catAlias' => $category->alias]) }}">{{ $category->name }}
                                    оптом
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li><a href="/#howWork">Схема заказа</a></li>
                <li><a href="/#production">О нас</a></li>
            </ul>
        </div>
    </div >
    @endif
</div>
