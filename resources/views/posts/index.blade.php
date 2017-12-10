@extends('layouts.app')
 
@section('content')

<div class="container"  id="adm">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        @guest
 <div class="content" >
	       
<h2 class="col-md-10 col-md-offset-4"><p >Закажи такси прямо сейчас!</p></h2>
		<div class='center'>
        <form id="form" class="form-horizontal"  >
            <div class="form-group">
                <label for="form_fio" class="col-md-2 cont	rol-label">Ф.И.О.:</label>
                <div class="col-md-10">
                    <input type="text" name="name" class="form-control" id="form_fio"
                           placeholder="Фамилия Имя Отчество">
                </div>
            </div>
            <div class="form-group">
                <label for="form_email" class="col-md-2 control-label">Email:</label>
                <div class="col-md-10">
                    <input type="email" name="email" class="form-control" id="form_email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="form_phone" class="col-md-2 control-label">Телефон:</label>
                <div class="col-md-10">
                    <input type="text" name="phone" class="form-control" id="form_phone" placeholder="Телефон">
                </div>
            </div>
			 <div class="form-group">
                <label for="form_adr_otpr" class="col-md-2 control-label">Откуда:</label>
                <div class="col-md-10">
                    <input type="text" name="adr_otpr" class="form-control" id="form_adr"
                           placeholder="Адрес отбытия">
                </div>
             </div>
			 <div class="form-group">
                <label for="form_adr_prib" class="col-md-2 control-label">Куда:</label>
                <div class="col-md-10">
                    <input type="text" name="adr_prib" class="form-control" id="form_adr"
                           placeholder="Адрес прибытия">
                </div>
             </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-6">
                    <button  class="form-control btn btn-block btn-default">
                                    <a  href="{{ route('login') }} ">Создать</a>
                                </button>
                </div>
                <div class="col-md-4">
                    <input  type="button" value="Очистить" class="form-control btn btn-block btn-default">
                </div>
            </div>
    </div>
    </form>
	
	<br>
    </div>
		
		
      <div class="hrgin" style=""><hr style=""></div>
     	
      <p style="">БОНУСЫ И СКИДКИ  — по окончании первой поездки 
пассажиру открывается Бонусный счёт (БОНУС СЧЁТ) и на него зачисляется 
от 25 бонусов. За каждую следующую успешную поездку начисляется от 3 
бонусов. При накоплении суммы кратной 10 бонусы можно использовать в 
качестве скидки на поездку из расчета 1 бонус = 1 рубль, скачав 
приложение GoNChiE для Android или GoNChiE для iOS, но не более 50 на одну
 поездку.
Так же существует автоскидка. При накоплении достаточной суммы система 
может автоматически сделать скидку и списывает при этом не более 15 
бонусов.
</p><p style="">
Обращаем ваше внимание :
Бонус - условная единица, зачисляемая  на Бонусный счет и списываемая  с
 Бонусного счета  в соответствии с указанными выше правилами и дающая 
право на получение Бонусного поощрения. Бонусы используются только в 
учетных целях и не являются и не могут являться средством платежа, 
каким-либо видом валюты или ценной бумагой, не могут быть обналичены, 
подарены третьим лицам или переданы по наследству.
</p>
<div class="hrgin" style=""><hr style=""></div>
<table class="table nonetab" style=""> 
  <thead style=""> 
    <tr style=""> 
      <th style="">Услуга</th> 
      <th class="right" style="">Цена</th> 
      <th class="u1-block right" style="">Дополнительно</th> 
    </tr> 
  </thead> 
  <tbody style=""> 
    <tr class="success" style=""> 
      <td style=""><b style="color:#1e0000">Мин. проезд</b></td> 
      <td class="right" style=""><b style="color:#1e0000">70 руб.</b></td> 
      <td class="u1-block right" style=""><b style="color:#1e0000"	>посадка</b>
        <br style=""> <p class="warning-1" style="color:#1e0000">(Обращаем Ваше 
внимание, что посадка имеет динамический характер и может быть увеличена
 от 5 до 30 руб, в зависимости от загруженности перевозчиков. Просьба 
уточнять данную информацию у операторов.)</p>
      </td> 
    </tr> 
     <tr style=""> 
    <td style=""><b style="">Проезд по городу</b></td> 
    <td class="right" style=""><b style="">15 руб.</b></td> 
    <td class="u1-block right" style=""><b style="">за 1 км</b></td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style=""><b style="">Простой (ожидание)</b></td> 
    <td class="right" style=""><b style="">3 руб.</b></td> 
    <td class="u1-block right" style=""><b style="">Цена за 1 мин.<br style=""> 
(первые 5 мин. бесплатно)</b></td>
  </tr> 
    <tr style=""> 
    <td style="">Предварительные заказы с 1 минуты</td> 
    <td class="right" style="">3 руб.</td> 
    <td class="u1-block right" style="">-</td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style="">Почасовая оплата</td> 
    <td class="right" style="">300 руб.</td> 
    <td class="u1-block right" style="">1 час до 20 км. <br style="">
Свыше 20 км. +16 РУБ. (за 1 км.)</td> 
  </tr> 
    <tr style=""> 
    <td style="">ДОСТАВКА</td> 
    <td class="right" style="">+100 руб. к тарифу</td> 
    <td class="u1-block right" style="">(до двери квартиры +50р.)<br style="">
ВНИМАНИЕ! Перевозка доставкой не считается.</td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style="">Встреча с табличкой в Аэропорту</td> 
    <td class="right" style="">+100 руб. к тарифу</td> 
    <td class="u1-block right" style="">-</td> 
  </tr> 
    <tr style=""> 
    <td style="">Доставка забытых вещей в салоне авто</td> 
    <td class="right" style="">150 руб.</td> 
    <td class="u1-block right" style="">-</td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style="">Багаж</td> 
    <td class="right" style="">БЕСПЛАТНО</td> 
    <td class="u1-block right" style="">Если поместился в багажник и салон, <br style="">
но при этом не мешает водительскому<br style="">
управлению и обзору зеркал</td> 
  </tr> 
    <tr style=""> 
    <td style="">Верхний багажник</td> 
    <td class="right" style="">1,5 тарифа</td> 
    <td class="u1-block right" style="">негабарит</td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style="">Перевоз животных с переноской</td> 
    <td class="right" style="">бесплатно</td> 
    <td class="u1-block right" style="">Спец. контейнер</td> 
  </tr> 
    <tr style=""> 
    <td style="">Перевоз животных без переноски</td> 
    <td class="right" style="">1,5 тарифа</td> 
    <td class="u1-block right" style="">Без спец. контейнер</td> 
  </tr> 
  <tr class="success" style="color:#1e0000"> 
    <td style="">Минивэн</td> 
    <td class="right" style="">1,5 тарифа</td> 
    <td class="u1-block right" style="">5 и более пассажиров</td> 
  </tr> 
    <tr style=""> 
    <td style="">Помощь</td> 
    <td class="right" style="">+100 РУБ. к тарифу</td> 
    <td class="u1-block right" style="">"прикурить", замена колеса и т.д.</td> 
  </tr> 
  <tr class="success" style="color:#1e0000"> 
    <td style="">Буксировка</td> 
    <td class="right" style="">2й тариф</td> 
    <td class="u1-block right" style="">-</td> 
  </tr> 
    <tr style=""> 
    <td style="">Перегон авто</td> 
    <td class="right" style="">3й тариф</td> 
    <td class="u1-block right" style="">Штраф за страховку<br style="">
оплачивает клиент</td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style="">Неустойка</td> 
    <td class="right" style="">50 руб.</td> 
    <td class="u1-block right" style="">ОТКАЗ пассажира от заказа</td> 
  </tr> 
    <tr style=""> 
    <td style="">Наценка за срочность</td> 
    <td class="right" style="">+30 руб. к тарифу</td> 
    <td class="u1-block right" style="">Наценка добавляется клиентом</td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style="">Автомобиль с кондиционером</td> 
    <td class="right" style="">+10% к тарифу</td> 
    <td class="u1-block right" style="">-</td> 
  </tr> 
    <tr style=""> 
    <td style="">Экстремальные условия</td> 
    <td class="right" style="">+ от 15руб до 50% к тарифу</td> 
    <td class="u1-block right" style="">Сложные или экстремальные погодные <br style="">
и техногенные условия, связанные с риском<br style="">
для жизни и сохранности автомобиля <br style="">
( гололед, ливень, пиковые нагрузки в <br style="">
праздники и часы -пик)</td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style="">Праздничные дни (Новый Год, день ВМФ)</td> 
    <td class="right" style="">2й тариф</td> 
    <td class="u1-block right" style="">-</td> 
  </tr> 
</tbody> 
</table>
<p class="p-u1" style="">*<span class="ps	-u1" style="">Водитель имеет 
право взять оплату наперед (авансом) в случае если предварительная 
стоимость поездки свыше 250 руб. , почасовая или межгород.</span></p>
<p class="p-u1" style="">**<span class="ps-u1" style="">Не забывайте о 
том, что окончательная стоимость по фактическому пробегу на таксометре у
 водителя. То же относится и к стоимости рассчитанной из приложения 
клиента «Вызов такси» — рассчитывается примерная, предварительная 
стоимость, а оплачивается фактический пробег и время, согласно показаний
 таксометра. Уважаемые клиенты, еще раз обращаем ваше внимание, что все 
расчеты которые вы получаете от диспетчера или в программе, являются 
предварительными и не могут служить основанием для оплаты, окончательная
 оплата происходит по окончании поездки в соответствии с показаниями 
таксометра.</span></p>
<p class="p-u1" style="">***<span class="ps-u1" style="">По окончании поездки стоимость на таксометре озвучивается роботом, не водителем!</span></p>
		@else
            <div class="panel panel-default">
                <div class="panel-heading">
                Имеющиеся заказы
                    @can('create-post')
                    <a class="pull-right btn btn-sm btn-primary" href="{{ route('create_post') }}">Создать новый заказ</a>
                    @endcan	
                </div>
    

                <div class="panel-body">
                    <div class="row">

                    @foreach($posts as $post)

                                <div class="col-sm-4 col-md-offset-1">
                            <div class="thumbnail">
                            <div class="caption">

                                <a href="{{ route('show_post', ['id' => $post->id]) }}"> Заказ № {{ $post->id }}</a>	
                                <p>{{ str_limit($post->p_o, 50) }} - {{ str_limit($post->p_p	, 50) }}</p>
                                <p><font color="#ff0000" size=4>{{ $post->stat }}</font></p>
                                
                                
                                @can('update-post', $post)
                                <p>
                                <a href="{{ route('show_post', ['id' => $post->id]) }}" class="btn btn-sm btn-default" role="button">Просмотреть заказ</a> 
                                </p>
                                @endcan

								
								
								
								@can('update-post', $post)
                                <p>
                                    <a href="{{ route('edit_post', ['id' => $post->id]) }}" class="btn btn-sm btn-default" role="button">Редактировать заказ</a> 
                                </p>
                                @endcan
								
                                @can('update-status-post', $post)
                                <p>
                                <a href="{{ route('edit_status_post', ['id' => $post->id]) }}" class="btn btn-sm btn-default" role="button">Принять</a> 
                                </p>
                                @endcan

                                @can('update-ok-post', $post)
                                <p>
                                <a href="{{ route('edit_ok_post', ['id' => $post->id]) }}" class="btn btn-sm btn-default" role="button">Завершить</a>
                                </p>
                                
                                @endcan

                            </div>
                            
                            </div>
                        </div>
								

                    @endforeach

                    </div>
                </div>
            </div>
            @endguest
        </div>
    </div>
</div>

@endsection
