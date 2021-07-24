@extends('layouts.admin')

<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script>tinymce.init({selector: 'textarea'});</script>

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Model Edit</div>
                    <div class="col-md-12">
                        <form action="{{ route('offer.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <h3>от</h3>
                            <input type="text" name="from" class="form-control">
                            <br>
                            <h3>текст</h3>
                            <textarea name="body" style="height:500px;" id="article-ckeditor">

                                    Прайс-лист в приложении. Вы можете по нему рассчитать стоимость заказа, заполнив необходимые позиции.

                                    <h2>Условия сотрудничества с оптовыми покупателями:</h2>

                                    <h3>Заказ и оплата:</h3>
                                    <ol type="1">
                                        <li>Минимальная сумма заказа  от 20 000 руб., любыми позициями и любым количеством; При заказе от 150 000 руб. скидка - 3%, от 300 000 руб. - 5%;</li>
                                        <li>Возможные формы оплаты – наличный и безналичный расчет;</li>
                                        <li>При оплате заказа по безналичному расчету: предоплата 100%;</li>
                                        <li>Мы работаем без НДС, по УСН;</li>
                                        <li>Мы запрещаем торговлю нашими товарами на маркетплейсах.</li>
                                    </ol>

                                    <h3>Сроки и условия доставки заказа:</h3>
                                    <ol type="1">
                                        <li>Срок комплектации заказа 3-5 рабочих дней со дня поступления денег на наш расчетный счет;</li>
                                        <li>Доставка до транспортной компании "Деловые линии" осуществляется бесплатно;</li>
                                        <li>При заказе от 50 000 бесплатная доставка по Москве.</li>
                                    </ol>

                                    <h3>Приняв решение работать с нашей компанией, Вы приобретаете следующие преимущества:</h3>

                                    <ol type="1">
                                        <li>Все наши изделия продаются в аптеках и имеют весь необходимый  комплект документов;</li>
                                        <li>Изделия от производителя, пользующиеся активным спросом на протяжении 20 лет;</li>
                                        <li>Выгодные оптовые цены, напрямую от производителя;</li>
                                        <li>Мы продаём медицинские изделия только собственного производства, поэтому полностью контролируем качество своей продукции.</li>
                                    </ol>
                                    <h3>Если вы заинтересовались перспективой партнерства с нами, свяжитесь с нами по телефону прямо сейчас +7 (926)
                                        891-15-77 или напишите на почту azovmed@bk.ru. Будем рады сотрудничеству!</h3>

                                    С уважением,<br/>
                                    Азовцев Валерий Сергеевич.<br/>
                                    <b>+7 (926) 891-15-77</b><br/>
                                    azovmed@bk.ru<br/>
                                    <a target="_blank" href="http://www.azovmed.com">www.azovmed.com</a>
                            </textarea>
                            <br>
                            <h3>коммерческое предложение</h3>
                            <input type="file" name="kpfile" class="btn btn-primary">
                            <br>
                            <h3>карточка ИП</h3>
                            <input type="file" name="ipcard" class="btn btn-primary">
                            <br>
                            <input type="submit" value="Добавить" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
