@extends('layouts.app')
 
@section('content')
<div class='container' id="adm">
    <div class="content" >
	        <div class='links'>
			  <ul>
                <li>
                    <a href='#old'>Заказать такси</a>
                </li>
                <li>
                    <a href='#new'>Оформить клиентскую карту</a>

                </li>
            </ul>
        </div>
<h2 id='old'><a href='#old' class="lead" id="blink">Закажи такси прямо сейчас!</a></h2>
		<div class='center'>
        <form id="form" class="form-horizontal" role="form" method="post">
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
                    <input id="submit" type="submit" disabled value="Отправить" class="form-control btn btn-block btn-primary">
                </div>
                <div class="col-md-4">
                    <input id="reset" type="button" value="Очистить" class="form-control btn btn-block btn-default">
                </div>
            </div>
    </div>
    </form>
	<h2 id='new'><a href='#new' style=" margin-left: 20%;">Оформление клиентской карты</a></h2>
	<br>
    </div>
</div>
@endsection