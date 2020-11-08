<form name="sendBid" method="post" action="/sendBid" accept-charset="UTF-8" id="indexForm1">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="referrer" value="{{ Request::url() }}">
    <input type="text" id="indexEditbox1" style="position:absolute;left:27px;top:16px;width:249px;height:43px;line-height:43px;z-index:31;" name="name" required placeholder="Имя">
    <input type="text" id="indexEditbox2" style="position:absolute;left:28px;top:68px;width:249px;height:43px;line-height:43px;z-index:30;" name="email" required placeholder="Ваш e-mail или телефон">
    <input type="submit" id="indexButton1" value="Заказать" style="position:absolute;left:27px;top:121px;width:249px;height:50px;z-index:29;">
</form>