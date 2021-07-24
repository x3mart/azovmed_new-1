<div style="height:864px;">
    {{-- @dump(Route::currentRouteName()) --}}
    @if (Route::is('page.edit') || Route::is('livewire.message'))
    <form action="" wire:submit.prevent='save'>
        <div id="indexLayer2" style="height:645px;">
            <div id="indexLayer2_Container"
                 style="width:973px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
                <div id="wb_indexImage1" style="position:absolute;left:19px;top:0px;width:426px;height:644px;z-index:6;">
                    <img src="/images/123.png" id="indexImage1" alt=""></div>
                <div id="wb_indexShape3" style="position:absolute;left:0px;top:67px;width:609px;height:66px;z-index:7;">
                    <img src="/images/img0002.png" id="indexShape3" alt="" style="width:609px;height:66px;">
                </div>
                <div id="wb_indexShape4" style="position:absolute;left:0px;top:132px;width:609px;height:57px;z-index:8;">
                    <img src="/images/img0003.png" id="indexShape4" alt="" style="width:609px;height:57px;">
                </div>
                <div id="wb_indexText7"
                     style="position:absolute;top:75px;width:609px;height:52px;z-index:9;text-align:center;">
                    <input wire:model.defer='overview.wb_indexText7' type="text" style="color:#FFFFFF;font-family:'Proxima Nova Th';font-size: 43px;background: transparent; width: 609px; text-align: center;" value="{{ $overview->wb_indexText7 }}"/>
                </div>
                <div id="wb_indexText2"
                     style="position:absolute;top:134px;width:609px;height:43px;z-index:310;text-align:center;">
                    <input wire:model.defer='overview.wb_indexText2' type="text" style="color:#FFFFFF;font-family:'Roboto Lt';font-size:32px;background: transparent;width: 609px; text-align: center;" value="{{ $overview->wb_indexText2 }}"/>
                </div>
                <input type="submit" value="Сохранить" class="btn btn-primary" style="position:absolute;right:-90px;top:50px;">
            </div>
        </div>
        <div id="indexLayer4" style="position:absolute;text-align:center;left:0%;top:301px;width:100%;height:505px;z-index:215;">
            <div id="indexLayer4_Container" style="width:972px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
                <div id="wb_indexShape6" style="position:absolute;left:494px;top:168px;width:396px;height:325px;filter:alpha(opacity=95);opacity:0.95;z-index:22;">
                    <img src="{{ asset('images/img0006.png') }}" id="indexShape6" alt="" style="width:396px;height:325px;"></div>
                <div id="wb_indexText10" style="position:absolute;left:501px;top:254px;width:377px;height:26px;text-align:center;z-index:23;">
                    <input wire:model.defer='overview.wb_indexText10' type="text" style="color:#000000;font-family:'Roboto Lt';font-size:16px;background: transparent; width: 100%;text-align:center;" value="{{ $overview->wb_indexText10 }}"/>
                    </div>
                <div id="wb_indexImage3" style="position:absolute;left:430px;top:95px;width:147px;height:148px;z-index:24;">
                    <img src="{{ asset('images/labl12%202.png') }}" id="indexImage3" alt=""></div>
                <div id="wb_indexText8" style="position:absolute;left:433px;top:152px;width:140px;height:28px;text-align:center;z-index:25;">
                    <span style="color:#FFFFFF;font-family:'Roboto Lt';font-size:21px;">в России</span></div>
                <div id="wb_indexText37" style="position:absolute;left:433px;top:121px;width:140px;height:28px;text-align:center;z-index:26;">
                    <span style="color:#000000;font-family:'Roboto Lt';font-size:21px;">Сделано</span></div>
                <div id="wb_indexText9" style="position:absolute;left:501px;top:190px;width:377px;height:50px;text-align:center;z-index:27;">
                    <input wire:model.defer='overview.wb_indexText9' type="text" style="color:#000000;font-family:Roboto;font-size:37px;text-align:center;background:transparent;width: 100%;" value="{{ $overview->wb_indexText9 }}"/>
                </div>
                <div id="wb_indexForm3" style="position:absolute;left:539px;top:277px;width:293px;height:196px;z-index:28;">
                    <div name="sendBid" method="post" action="/sendBid" accept-charset="UTF-8" id="indexForm1">
                        <input type="text" id="indexEditbox1" style="position:absolute;left:27px;top:16px;width:249px;height:43px;line-height:43px;z-index:31;" name="name" placeholder="Ваше имя">
                        <input type="email" id="indexEditbox2" style="position:absolute;left:28px;top:68px;width:249px;height:43px;line-height:43px;z-index:30;" name="email" placeholder="Ваш e-mail">
                        <input type="button" id="indexButton1" value="Заказать"onclick="event.preventDefault();" style="position:absolute;left:27px;top:121px;width:249px;height:50px;z-index:29;">
                    </div>
                </div>
            </div>
        </div>
        <div id="indexLayer5"
             style="position:absolute;text-align:center;left:0%;top:635px;width:100%;height:331px;z-index:214;">
            <div id="indexLayer5_Container" style="width:972px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
                <div id="wb_indexText6" style="position:absolute;left:16px;top:183px;width:216px;height:58px;text-align:center;z-index:11;">
                    <input wire:model.defer='overview.wb_indexText6_digit'type="text" style="color:#FFFFFF;font-family:'Proxima Nova Th';font-size:48px;background:transparent;width: 40%;height: 56px;" value="{{ $overview->wb_indexText6_digit }}"/>
                    <input wire:model.defer='overview.wb_indexText6_text'type="text" style="color:#FFFFFF;font-family:'Proxima Nova Th';font-size:35px;background:transparent;width: 58%;height: 40px;" value="{{ $overview->wb_indexText6_text }}"/>
                </div>
                <div id="wb_indexText11"
                     style="position:absolute;left:3px;top:238px;width:243px;height:28px;text-align:center;z-index:12;">
                    <input wire:model.defer='overview.wb_indexText11'type="text" style="color:#FFFFFF;font-family:'Roboto Lt';font-size:21px;text-align:center;background:transparent;width: 100%;" value="{{ $overview->wb_indexText11 }}"/>
                </div>
                <div id="wb_indexText55"
                     style="position:absolute;left:364px;top:238px;width:243px;height:28px;text-align:center;z-index:13;">
                    <input wire:model.defer='overview.wb_indexText55'type="text" style="color:#FFFFFF;font-family:'Roboto Lt';font-size:21px;text-align:center;background:transparent;width: 100%;height:29px" value="{{ $overview->wb_indexText55 }}"/>
                </div>
                <div id="wb_indexText56"
                     style="position:absolute;left:377px;top:183px;width:216px;height:58px;text-align:center;z-index:14;">
                    <input wire:model.defer='overview.wb_indexText56'type="text" style="color:#FFFFFF;font-family:'Proxima Nova Th';font-size:48px;text-align:center;background:transparent;width: 100%;height: 56px;" value="{{ $overview->wb_indexText56 }}"/>
                </div>
                <div id="wb_indexText57"
                     style="position:absolute;left:364px;top:270px;width:243px;height:28px;text-align:center;z-index:15;">
                    <input wire:model.defer='overview.wb_indexText57'type="text" style="color:#FFFFFF;font-family:'Roboto Lt';font-size:21px;text-align:center;background:transparent;width: 100%;height:29px" value="{{ $overview->wb_indexText57 }}"/>
                </div>
                <div id="wb_indexText12"
                     style="position:absolute;left:728px;top:238px;width:243px;height:28px;text-align:center;z-index:16;">
                    <input wire:model.defer='overview.wb_indexText12'type="text" style="color:#FFFFFF;font-family:'Roboto Lt';font-size:21px;text-align:center;background:transparent;width: 100%;height:29px" value="{{ $overview->wb_indexText12 }}"/>
                </div>
                <div id="wb_indexText13"
                     style="position:absolute;left:741px;top:183px;width:216px;height:58px;text-align:center;z-index:17;">
                    <input wire:model.defer='overview.wb_indexText13'type="text" style="color:#FFFFFF;font-family:'Proxima Nova Th';font-size:48px;text-align:center;background:transparent;width: 100%;height: 56px;" value="{{ $overview->wb_indexText13 }}"/>
                </div>
                <div id="wb_indexText59"
                     style="position:absolute;left:728px;top:270px;width:243px;height:28px;text-align:center;z-index:18;">
                    <input wire:model.defer='overview.wb_indexText59'type="text" style="color:#FFFFFF;font-family:'Roboto Lt';font-size:21px;text-align:center;background:transparent;width: 100%;height:29px" value="{{ $overview->wb_indexText59 }}"/>
                </div>
            </div>
        </div>
    </form>
    @else
    <div id="indexLayer2" style="height:645px;">
        <div id="indexLayer2_Container"
             style="width:973px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
            <div id="wb_indexImage1" style="position:absolute;left:19px;top:0px;width:426px;height:644px;z-index:6;">
                <img src="/images/123.png" id="indexImage1" alt=""></div>
            <div id="wb_indexShape3" style="position:absolute;left:0px;top:67px;width:609px;height:66px;z-index:7;">
                <img src="/images/img0002.png" id="indexShape3" alt="" style="width:609px;height:66px;">
            </div>
            <div id="wb_indexShape4" style="position:absolute;left:0px;top:132px;width:609px;height:57px;z-index:8;">
                <img src="/images/img0003.png" id="indexShape4" alt="" style="width:609px;height:57px;">
            </div>
            <div id="wb_indexText7"
                 style="position:absolute;top:75px;width:609px;height:52px;z-index:9;text-align:center;">
                <span style="color:#FFFFFF;font-family:'Proxima Nova Th';font-size:43px;">{{ nl2br($overview->wb_indexText7) }}</span>
            </div>
            <div id="wb_indexText2"
                 style="position:absolute;top:134px;width:609px;height:43px;z-index:10;text-align:center;">
                <span style="color:#FFFFFF;font-family:'Roboto Lt';font-size:32px;">{{ nl2br($overview->wb_indexText2) }}</span>
            </div>
        </div>
    </div>
    <div id="indexLayer4" style="position:absolute;text-align:center;left:0%;top:301px;width:100%;height:505px;z-index:215;">
        <div id="indexLayer4_Container" style="width:972px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
            <div id="wb_indexShape6" style="position:absolute;left:494px;top:168px;width:396px;height:325px;filter:alpha(opacity=95);opacity:0.95;z-index:22;">
                <img src="images/img0006.png" id="indexShape6" alt="" style="width:396px;height:325px;"></div>
            <div id="wb_indexText10" style="position:absolute;left:481px;top:254px;width:421px;height:26px;text-align:center;z-index:23;">
                <span style="color:#000000;font-family:'Roboto Lt';font-size:16px;">{{ nl2br($overview->wb_indexText10) }}</span></div>
            <div id="wb_indexImage3" style="position:absolute;left:430px;top:95px;width:147px;height:148px;z-index:24;">
                <img src="images/labl12%202.png" id="indexImage3" alt=""></div>
            <div id="wb_indexText8" style="position:absolute;left:433px;top:152px;width:140px;height:28px;text-align:center;z-index:25;">
                <span style="color:#FFFFFF;font-family:'Roboto Lt';font-size:21px;">в России</span></div>
            <div id="wb_indexText37" style="position:absolute;left:433px;top:121px;width:140px;height:28px;text-align:center;z-index:26;">
                <span style="color:#000000;font-family:'Roboto Lt';font-size:21px;">Сделано</span></div>
            <div id="wb_indexText9" style="position:absolute;left:470px;top:208px;width:444px;height:50px;text-align:center;z-index:27;">
                <span style="color:#000000;font-family:Roboto;font-size:37px;">{{ nl2br($overview->wb_indexText9) }}</span></div>
            <div id="wb_indexForm3" style="position:absolute;left:539px;top:277px;width:293px;height:196px;z-index:28;">
                @include('form.bid')
            </div>
        </div>
    </div>
    <div id="indexLayer5"
         style="position:absolute;text-align:center;left:0%;top:635px;width:100%;height:331px;z-index:214;">
        <div id="indexLayer5_Container"
             style="width:972px;position:relative;margin-left:auto;margin-right:auto;text-align:left;">
            <div id="wb_indexText6"
                 style="position:absolute;left:16px;top:183px;width:216px;height:58px;text-align:center;z-index:11;">
                <span style="color:#FFFFFF;font-family:'Proxima Nova Th';font-size:48px;">{{ nl2br($overview->wb_indexText6_digit) }}</span><span
                        style="color:#FFFFFF;font-family:'Proxima Nova Th';font-size:35px;">{{ $overview->wb_indexText6_text }}</span></div>
            <div id="wb_indexText11"
                 style="position:absolute;left:3px;top:238px;width:243px;height:28px;text-align:center;z-index:12;">
                <span style="color:#FFFFFF;font-family:'Roboto Lt';font-size:21px;">{{ $overview->wb_indexText11 }}</span></div>
            <div id="wb_indexText55"
                 style="position:absolute;left:364px;top:238px;width:243px;height:28px;text-align:center;z-index:13;">
                <span style="color:#FFFFFF;font-family:'Roboto Lt';font-size:21px;">{{ $overview->wb_indexText55 }}</span></div>
            <div id="wb_indexText56"
                 style="position:absolute;left:377px;top:183px;width:216px;height:58px;text-align:center;z-index:14;">
                <span style="color:#FFFFFF;font-family:'Proxima Nova Th';font-size:48px;">{{ $overview->wb_indexText56 }}</span></div>
            <div id="wb_indexText57"
                 style="position:absolute;left:364px;top:260px;width:243px;height:28px;text-align:center;z-index:15;">
                <span style="color:#FFFFFF;font-family:'Roboto Lt';font-size:21px;">{{ $overview->wb_indexText57 }}</span></div>
            <div id="wb_indexText12"
                 style="position:absolute;left:728px;top:238px;width:243px;height:28px;text-align:center;z-index:16;">
                <span style="color:#FFFFFF;font-family:'Roboto Lt';font-size:21px;">{{ $overview->wb_indexText12 }}</span></div>
            <div id="wb_indexText13"
                 style="position:absolute;left:741px;top:183px;width:216px;height:58px;text-align:center;z-index:17;">
                <span style="color:#FFFFFF;font-family:'Proxima Nova Th';font-size:48px;">{{ $overview->wb_indexText13 }}</span></div>
            <div id="wb_indexText59"
                 style="position:absolute;left:728px;top:260px;width:243px;height:28px;text-align:center;z-index:18;">
                <span style="color:#FFFFFF;font-family:'Roboto Lt';font-size:21px;">{{ $overview->wb_indexText59 }}</span></div>
        </div>
    </div>
    @endif
</div>
