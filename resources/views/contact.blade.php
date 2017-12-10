@extends('layouts.app')
 <style type="text/css">#ok_group_widget {
    position: relative;
    left:-9px;
    margin-top:-1px;
   
  }
  .traffic {
    border-radius:0;
  }
  #ymaps-map-id_95905086 {
    height: 350px !important;
  }
  .teaser_box .teaser {
    text-align: center;
    float: left;
    width: 25%;
    padding: 20px 10px;
}
</style>
</p>
<style type="text/css">div:not(.home_phones).short_phones i {
    background: none;
    position: relative;
    width: 0;
  }
  div:not(.home_phones).short_phones i:before {
    content: '' ;
    display: inline-block;
    margin-top: 13px;
    position: absolute;
    color: #505050;
    font-size: 15px;
}
  div:not(.home_phones).short_phones a:last-child {
    margin-right: 0;
}
  div:not(.home_phones).short_phones a {
    margin-right: 10px;
  }
  div:not(.home_phones).short_phones i.operator-mts:before{
    content: 'мтс';
    margin-left: 10px;
  }
  div:not(.home_phones).short_phones i.operator-beeline:before{
    content: 'билайн';
    margin-left: -3px;
  }
</style>
@section('content')
<div class='container' id="adm">
    <div id="main_box">
							<div class="wrapper">
						<div id="col1" class="article">
		<div class="wrapper" style="padding:20px">
			<h1 style="text-align:center">Гончие. Заказ такси. Преимущества</h1>
			<div class="block_content">
				<article><p><span class="leader_middle"><strong>1.&nbsp;Звонок по&nbsp;номерам (978) 809-48-02, (978) 809-48-01, (978) 809-48-03</strong></span></p>

<p><span class="leader_middle">Вы моментально узнаете точную стоимость Вашего заказа по заданному маршруту. Стоимость заказа считает программа по кратчайшему пути. Изменения суммы поездки возможны только при изменении Вами маршрута или в случае простоя. Компьютерная система оперативно передаст Ваш заказ ближайшему к Вам перевозчику;  проинформирует Вас о прибытии такси.&nbsp;</span></p>

<hr />
<p><span class="leader_middle"><strong>2. Заказ через ИНТЕРНЕТ</strong><br />
<br />
Для Вашего удобства создан заказ такси через ИНТЕРНЕТ, автоматически дающий&nbsp;<strong>скидку 25% от тарифов перевозчиков, которым передается Ваш заказ.&nbsp;</strong>Заказ через ИНТЕРНЕТ моментально попадает в программу и является приоритетным в выполнении. Создайте личный кабинет с привязкой к мобильному телефону.</span></p>

<hr />
<p><span class="leader_middle"><strong>3.</strong>&nbsp;<strong>Мобильный Пульт</strong><br />
<br />
&nbsp;Заказ такси через приложение&nbsp;в Вашем мобильном телефоне без звонка в диспетчерскую службу. Скачать приложение Вы можете&nbsp;<a href="https://vk.com/doc355859215_453874815?hash=81c3a198171a2149aa&dl=089425ebef2395b300&wnd=1&module=public&mp4=1">здесь</a>&nbsp;.&nbsp;Автоматическая скидка 25% от тарифов перевозчиков,&nbsp;которым передается Ваш заказ.</span></p>

<hr />
<p><span class="leader_middle"><strong>4.</strong>&nbsp;<strong>Организация перевозок&nbsp;по безналичному расчету</strong><br />
<br />
Для компаний, корпоративных клиентов действует удобная услуга &laquo;БИЗНЕС ГОНЧИХ&raquo; - круглосуточная организация перевозок&nbsp;по безналичному расчету. Поездки осуществляются при помощи пластиковой карты с индивидуальным номером и паролем. При помощи Личного Кабинета на сайте http://blog, Вы можете легко и эффективно контролировать маршруты поездок и расходы своих сотрудников.</span></p>

<hr />
<p><br />
<span class="leader_middle"><strong>5.&nbsp;Бесплатный* короткий&nbsp;номер&nbsp;для абонентов Билайн</strong><br />
- Абоненты &quot;<strong>Билайн</strong>&quot;, набрав короткий номер&nbsp;<strong>0585</strong>, смогут бесплатно оставить заказ в диспетчерской службе &quot;Гончие.Заказ такси&quot;.</span></p>

<p><span class="leader_middle">- Абоненты <strong>&quot;МТС&quot;</strong>, набрав короткий номер&nbsp;<strong>0807</strong>, смогут бесплатно оставить заказ в диспетчерской службе &quot;Лидер.Заказ такси&quot;<font face="Calibry, Verdana"><span style="font-size: 12px; background-color: rgb(255, 255, 255);">.</span></font></span></p>

<p><span class="leader_middle">Подробную информацию об услугах &laquo;Гончие. Заказ такси&raquo; Вы можете получить по телефону: 7 (978) 809-48-02</span></p>

<p><span ><span>* в &quot;домашнем регионе , в роуминге звонок может тарифицироваться.</span></span></p>
</article>
			</div>
		</div>
	</div>
				</div>
					</div>
		
			<div class="panel">
			<div class="wrapper">
				
<script type="text/javascript" src="//vk.com/js/api/openapi.js?150"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 4, wide: 1, width: "1135", height: "400"}, 158162600);
</script>
<br>
<br>
<br>
<br>
<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (начало) -->
<div style="width: 1135px;height: 240px" id="mapr2l61tm8"></div>
<script>function YandexReadyHandlerr2l61tm8() {
var map = new ymaps.Map("mapr2l61tm8", {
center: [44.580855990030976, 33.48810643754557],
zoom: 11,
controls: ["zoomControl","typeSelector"],
type: "yandex#map"
},{
suppressMapOpenBlock: true
});
map.geoObjects.add(new ymaps.GeoObject({
geometry: {
type: "Point",
coordinates: [44.588477650002076,33.47922067871861],
hideIconOnBalloonOpen: false
},
properties: {
balloonContent:decodeURIComponent("%D0%9C%D1%8B%20%D0%B7%D0%B4%D0%B5%D1%81%D1%8C%3Cbr%3E"),
iconCaption:decodeURIComponent("%D0%A2%D0%BE%D1%87%D0%BA%D0%B0%20%D0%BE%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F"),
hintCaption:decodeURIComponent("%D0%A2%D0%BE%D1%87%D0%BA%D0%B0%20%D0%BE%D1%82%D0%BF%D1%80%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F"),
}
}, {
iconLayout:"default#image",
iconImageSize:[35,35],
iconImageOffset:[-17.5,-17.5],
iconImageHref:"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACMAAAAjCAYAAAAe2bNZAAAB8UlEQVRYheWXwZHCMAxF3UQsN5A+tonUkBKYsXSlgTTAPQ3QQGawTjTAPQWkAPawJhhHIc7iwM6sZ3wIEPIifX3JSi2sglxpkI+AfAXkQaM7LN2z2QLkswcZ90eACnJlDOJ3/79hlPpDaVJqjE4I1H4E5LYMcqWJa01cfxREoztEaboU5Mq3g/gUDYKAL2+HEaIyboN8fBuIodOXFJHoev8emHsLuG9yHZDrHsp8a1Fr4nouPR4mjNBg6PS1GUzoK1KE/GehsLepMGN59/BgWTtng1xtLmhA3scPkGDi327SJiK9tM9glJqWv7G8ywYTdepbBGZhlJpU3mCQq2xAgTj7FBj/AvcKI9flhBmrKQUmAOoB+QqWm2wwYdhFz3ny5gW5UqM7ZDNDDzBIJZzy5rcZKAtMuAC5jWAGg3xccl1jeZc1XR6mF9y3h4SJD8h12ZxZSlF4hlq8/8e984ypcykKrhdHCLDcZBHzkxTNlrj4P6/6jtQgNXEdd/GU8cEgVy/1LbDcRDC9UtOunqoJsNz8eu6B6YjZBt+Fs8yQUjHee9aLWUpR2PwEYSfNwpq4Xt3VhRQ9HE2Ekk8+uoDlZpX3QHy+Fpx0UmmJeijIlaucOYIRNTEZqlbMMIC8TxazT0PvhSrqoSBXBseW1cKU4L8BAGIDezokb9wAAAAASUVORK5CYII=",
})
); return map;
}</script>
<script src="//api-maps.yandex.ru/2.1/?lang=ru&onload=YandexReadyHandlerr2l61tm8" type="text/javascript"></script>
<div style="text-align: right;"><a href="https://maps-creator.com" target="_blank" style="color: #ccc; font: 13px Arial, Helvetica, sans-serif;">создано с помощью конструктора maps-creator.com</a></div>
<!-- Этот блок кода нужно вставить в ту часть страницы, где вы хотите разместить карту (конец) -->
		</div>
	</div>
</div>
@endsection