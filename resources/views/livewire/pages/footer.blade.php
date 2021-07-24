<div id="indexLayer14" style="height: 313px;">
    <div id="indexLayer14_Container"
         style="width:976px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
         @if (Route::is('page.edit') || Route::is('livewire.message'))
        <form action="" wire:submit.prevent='save'>
            <div id="wb_indexText35"
                 style="position:absolute;left:625px;top:110px;width:319px;height:70px;text-align:right;z-index:76;">
                <textarea wire:model.defer='footer.wb_indexText35' style="color:#FFFFFF;font-family:'Roboto Th';font-size:21px;background:transparent; width:100%; height:100%;text-align:right;font-weight: 800;">{!! $footer->wb_indexText35 !!}</textarea>
            </div>
            <div id="wb_indexText124"
                 style="position:absolute;left:350px;top:151px;width:270px;height:28px;z-index:77;text-align:left;">
                <span style="color:#FFFFFF;font-family:Roboto;font-size:21px;">Мы перезвоним Вам!</span></div>
            <div id="wb_indexText125"
                 style="position:absolute;left:349px;top:128px;width:300px;height:22px;z-index:78;text-align:left;">
                <span style="color:#FFFFFF;font-family:'Roboto Lt';font-size:16px;">Приём заявок круглосуточно</span>
            </div>
            <div id="wb_indexText34"
                 style="position:absolute;left:350px;top:52px;width:615px;height:39px;z-index:80;text-align:left;">
                <span style="color:#FFFFFF;font-family:'Proxima Nova Th';font-size:32px;">О С Т А Л И С Ь&nbsp;&nbsp; В О П Р О С Ы ?</span>
            </div>
            <div id="wb_indexShape17"
                 style="position:absolute;left:349px;top:209px;width:222px;height:47px;z-index:81;">
                <a href="#bid-modal" rel="modal:open"><img class="hover"
                                                           src="/images/img0021_hover.png"
                                                           alt=""
                                                           style="border-width:0;width:222px;height:47px;"><span><img
                                src="/images/img0021.png" id="indexShape17" alt=""
                                style="width:222px;height:47px;"></span></a></div>
            <div id="wb_indexText36"
                 style="position:absolute;left:625px;top:181px;width:319px;height:28px;text-align:right;z-index:82;">
                <input wire:model.defer='footer.wb_indexText36' type="text" value="{{ $footer->wb_indexText36 }}" style="color:#FFFFFF;font-family:'Roboto Th';font-size:21px;background:transparent; width:100%; height:100%;text-align:right;font-weight: 800;">
            </div>
            <div style="position:absolute;left:625px;top:242px;width:319px;height:28px;text-align:right;color:rgba(255, 255, 255, 0.3)">
            <i class="fas fa-code"></i> <i class="fas fa-arrow-right"></i> <i class="fas fa-heart"></i> <i class="fas fa-arrow-right"></i> <a style="text-decoration:none;color:rgba(255, 255, 255, 0.3);" target="blank" href="http://slownut.com">SlowNut</a>
            </div>
            <input type="submit" value="Сохранить" class="btn btn-primary" style="position:absolute;right:-90px;top:50px;">
        </form>
        @else
        <div id="wb_indexText35"
             style="position:absolute;left:625px;top:128px;width:319px;height:56px;text-align:right;z-index:76;">
            <span style="color:#FFFFFF;font-family:'Roboto Th';font-size:21px;"><strong>{!! nl2br($footer->wb_indexText35) !!}</strong></span>
        </div>
        <div id="wb_indexText124"
             style="position:absolute;left:350px;top:151px;width:270px;height:28px;z-index:77;text-align:left;">
            <span style="color:#FFFFFF;font-family:Roboto;font-size:21px;">Мы перезвоним Вам!</span></div>
        <div id="wb_indexText125"
             style="position:absolute;left:349px;top:128px;width:300px;height:22px;z-index:78;text-align:left;">
            <span style="color:#FFFFFF;font-family:'Roboto Lt';font-size:16px;">Приём заявок круглосуточно</span>
        </div>
        <div id="wb_indexText34"
             style="position:absolute;left:350px;top:52px;width:615px;height:39px;z-index:80;text-align:left;">
            <span style="color:#FFFFFF;font-family:'Proxima Nova Th';font-size:32px;">О С Т А Л И С Ь&nbsp;&nbsp; В О П Р О С Ы ?</span>
        </div>
        <div id="wb_indexShape17"
             style="position:absolute;left:349px;top:209px;width:222px;height:47px;z-index:81;">
            <a href="#bid-modal" rel="modal:open"><img class="hover"
                                                       src="/images/img0021_hover.png"
                                                       alt=""
                                                       style="border-width:0;width:222px;height:47px;"><span><img
                            src="/images/img0021.png" id="indexShape17" alt=""
                            style="width:222px;height:47px;"></span></a></div>
        <div id="wb_indexText36"
             style="position:absolute;left:625px;top:181px;width:319px;height:28px;text-align:right;z-index:82;">
                <span style="color:#FFFFFF;font-family:'Roboto Th';font-size:21px;"><strong><a
                                href="mailto:{{ $footer->wb_indexText36 }}"
                                class="style1">{{ $footer->wb_indexText36 }}</a></strong></span></div>
        <div style="position:absolute;left:625px;top:242px;width:319px;height:28px;text-align:right;color:rgba(255, 255, 255, 0.3)">
        <i class="fas fa-code"></i> <i class="fas fa-arrow-right"></i> <i class="fas fa-heart"></i> <i class="fas fa-arrow-right"></i> <a style="text-decoration:none;color:rgba(255, 255, 255, 0.3);" target="blank" href="http://slownut.com">SlowNut</a>
        </div>
        @endif
    </div>
</div>
