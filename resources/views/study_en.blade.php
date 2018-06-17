@extends ('layouts.app_en')
 
@section ('content')

<div class = 'container' id = "adm">
    <div class = "wrapper">
<div class = "article">
<div class = "wrapper">
<div id = "col1" class = "left span6">

<h2 style = "text-align: center"> Contacts </ h2>
<div class = "block_content" style = "text-align: center">
<article> <p> <strong> Quality Service: </ strong> <br />
<br />
bodies: 7 (978) 80948-02 <br />
round-the-clock (without days off) <br />
</ p>

<p> &nbsp; </ p>

<p> <strong> Corporate Services: </ strong> &nbsp; &nbsp; &nbsp; <br />
(BUSINESS-GUNCH program): </ p>

<p> Tel. 7 (978) 80948-01 &nbsp; (9:00 to 18:00) </ p>	

<p> e-mail: &nbsp; wolfain@mail.ru </ p>

<hr>

<p> <strong> Marketing: </ strong> &nbsp; &nbsp; &nbsp; </ p>

<div> tel: 7 (978) 80948-03 &nbsp; (9:00 to 18:00) &nbsp; <br />
<p> e-mail: wolfain_marketolog @ gmail.com </ p>

<div> &nbsp; </ div>

<div> &nbsp; </ div>
</ div>

<p> <strong> Conclusion of cooperation agreements with carriers: </ strong> &nbsp; </ p>

<p style = "font-family: Verdana; font-size: 14px;"> g. Sevastopol, University, &nbsp; 26, of. &nbsp; 1, &nbsp; daily (9:00 to 21:00) &nbsp; </ p>

<p style = "font-family: Verdana; font-size: 14px;"> phone &nbsp; 7 (978) 80948-02 </ p>

<p> <br />
&nbsp; </ p>
</ article>
</ div>

</ div>
<hr>
<h2 style = "text-align: center"> Directions </ h2>
<div class="block_content" >
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
			<script>
				var a = $('#col1'), b = $('#col2'); 
				$(window).on('article.resize',function(){
					$('#col1 >.wrapper,#col2 >.wrapper')
						.css('height','auto')
						.height((Math.max(a.height(),b.height()))+'px'); 
				});
				$(window).load(function(){
					$(window).trigger('article.resize'); 
				});
				$(window).resize(function(){
					$(window).trigger('article.resize'); 
				});
				$('img').load(function(){
					$(window).trigger('article.resize'); 
				});
				$(window).trigger('article.resize');
			</script>
			<div class="clearex"></div>
	
				</div>
</ div>
</ div>
@endsection