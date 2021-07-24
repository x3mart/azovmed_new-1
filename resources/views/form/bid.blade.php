<form name="sendBid" method="post" action="/sendBid" accept-charset="UTF-8" id="indexForm1">
    @csrf
    <input type="hidden" name="referrer" value="{{ Request::url() }}">
    <input type="text" id="indexEditbox1" style="position:absolute;left:27px;top:16px;width:249px;height:43px;line-height:43px;z-index:31;" name="name" placeholder="Ваше имя" required/>
    <input type="email" id="indexEditbox2" style="position:absolute;left:28px;top:68px;width:249px;height:43px;line-height:43px;z-index:30;" name="email" placeholder="Ваш e-mail" required/>
    <input type="submit" id="indexButton1" value="Заказать"onclick="event.preventDefault(); this.parentNode.submit(); this.setAttribute('disabled', true); this.value='Идет отправка!';" style="position:absolute;left:27px;top:121px;width:249px;height:50px;z-index:29;">
</form>
