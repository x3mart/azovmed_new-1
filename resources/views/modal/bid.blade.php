<div style="display: none" id="bid-modal" class="modal">
    <div id="wb_indexShape1" style="width:510px;height:340px;">
        <img src="/images/img0063.png" id="indexShape1" alt="" style="width:510px;height:340px;">
    </div>
    <div id="wb_indexText1"
         style="position:absolute;left:25px;top:46px;width:514px;height:57px;text-align:center;z-index:4;">
        <span style="color:#000000;font-family:Roboto;font-size:43px;">{{ App\Models\Page\Overview::first()->wb_indexText9 }}</span>
        <br/>
        <span style="color:#000000;font-family:'Roboto Lt';font-size:22px;">{{ App\Models\Page\Overview::first()->wb_indexText10 }}</span>

    </div>
    <div id="wb_indexForm3" style="position:absolute;left:130px;top:132px;width:410px;height:178px;z-index:5;">
        @include('form.bid')
    </div>
</div>
