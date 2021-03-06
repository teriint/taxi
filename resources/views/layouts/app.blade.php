<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>"Гончие" | Служба заказа такси</title>
<style>
#aside1 {  /* селектор блока, который будет оставаться на месте */
  position: fixed;
  z-index: 101;
}

</style>
    <!-- Styles -->	
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="/css/layout.css" rel="stylesheet">
      <link href="/css/layout.css" rel="stylesheet">
</head>
<body>
 
  
    <div id="app">
        <nav  class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div  class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="/" style=""><img src="http://fortros.ru/attach/25954.jpg" alt="UPTAXI" width="124" height="36"></a>
                    <a  class="navbar-brand"  href="{{ url('/') }}">
                        Такси "Гончие" - Мчи к мечте	
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right ">
                        <!-- Authentication Links -->
                        @guest
                            <li ><a >Здравствуйте, <font color="#ff0000">Гость</font> </a></li>
                            <li><a  href="{{ route('login') }}">Войти</a></li>
                            <li><a href="{{ route('register') }}">Зарегестрироваться</a></li>
                            <li><a href="/en">EN</a></li>
        					<li><a href="/">RU</a></li>
                        @else
                            <li><a> <font color="#ff0000">{{ Auth::user()->name }}</font> </a></li>
                            @if  (Auth::user()->id == 1)	 
                             <li><a href="/admin/">Администрирование</a></li>
                            
                             @else
                             @endif
                                    	<li><a href="{{ route('list_drafts') }}">Заказы в обработке</a></li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">	
                                            Выйти
                                        </a> </li>
                                        
                                      

        <li><a href="/en">EN</a></li>
        <li><a href="/">RU</a></li>

								    <li>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                              
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <header class='container' id="tax" >
    <div class='page-header'>
        <img id="avatar" src='/img/ava.jpg' alt='Фотография'>
      
        <div style="color: #07f1f8; " >
             <h1>Служба радиотакси "Гончие"</h1>
        </div>
        <div class="nav navbar-nav navbar-right col-md-3" style="">
<div class="list-group" style=""><a href="tel:+79788094802" class="list-group-item btn_number" style="color:#1e0000"><i class="fa fa-phone fr" style=""></i> +7 (978) 8094-802</a></div>
<div class="list-group" style=""><a href="tel:+79788094801" class="list-group-item btn_number" style="background:#4601fe; color:#1e0000"><i class="fa fa-phone fr" style=""></i> +7 (978) 8094-801</a></div>
<div class="list-group" style="text-color: black"><a href="tel:+79788094803" class="list-group-item btn_number" style="background: #fd1c02; color:#1e0000"><i class="fa fa-phone fr" style=""></i> +7 (978) 8094-803</a></div>

    </div>
</header>
	<main >
	<div style="margin-left: 2%"   id="aside1">
		<ul class="nav ">
			<li><a  href="https://vk.com/gonchie_sev" ><img  style="width: 30px; height: 30px;" src='/img/vk.png'></a>
			<li><a  href="http://mlgame.ru/?return=%24miner_ru_22" ><img  style="width: 30px; height: 30px;" src='/img/ml.png'></a>
			<li><a  href="https://github.com/teriint/semestr7" ><img  style="width: 30px; height: 30px;" src='/img/gh.jpg'></a>
		</ul>
	</div>
	
        <div class='container' id="headid">
        <div class='header' >
            <ul class="nav nav-pills " >
                <li><a href="/">Главная страница</a></li>
                <li ><a href="/interests" >Условия заказа</a></li>
                <li><a href="/study">Контакты</a></li>
                <li><a href="/contact">О компании</a></li>
                <li><a href="/posts/input"> Форма ввода в БД</a></a></li>
                @auth
                @if  (Auth::user()->id == 1)	 
                           
                             <li><a href="/watchHistory">История просмотров</a></li>
                             @else
                             @endif
                @endauth
                <li><a href="/guestBook">Гостевая книга</a></li> 
                
            </ul>
        </div>
        </div>
        </main>
 	 <div >
 	
 	@yield('content')

 	</div>
        
    </div>
		  
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/js/jquery-3.2.0.js"></script>
<script src="/js/time.js"></script>
<script src="/js/navigation.js"></script>
<script src="/js/calendar.js"></script>
<script src="/js/functions.js"></script>
<script src="/js/modalWindow.js"></script>
<script src="/js/validationMessage.js"></script>
<script src="/js/contact.js"></script>
<script src="/js/history.js"></script>
</body>
</html>