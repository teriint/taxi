@extends ('layouts.app')
@section ('content')
<div class='container' id="adm">
    <p class="lead">Оставьте отзыв</p>
    <form id="form" class="form-horizontal" method="post">
        <div class="form-group col-md-12">
            <label for="form_fio">Фамилия Имя Отчество</label>
            <input type="text" name="name" class="form-control" id="form_fio" placeholder="Фамилия Имя Отчество">
        </div>
        <div class="form-group col-md-12">
            <label for="form_email">Email</label>
            <input type="email" name="email" class="form-control" id="form_email" placeholder="Email">
        </div>
        <div class="form-group col-md-12">
            <label for="form_review">Отзыв</label>
            <textarea class="form-control" rows="3" name="review" id="form_review" placeholder="Отзыв"></textarea>
        </div>
        <div class="form-group">
            <div class="col-md-8">
                <input type="submit" id="submit"  value="Отправить" class="form-control btn btn-block btn-primary">
            </div>
            <div class="col-md-4">
                <input id="reset" type="button" value="Очистить" class="form-control btn btn-block btn-default">
            </div>
        </div>
    </form>
	<hr>
    <p class="lead">Оставленные отзывы пользователей</p>
    <table class="table table-bordered table-responsive table-hover">
        <thead>
        <tr>
            <th>№</th>
            <th>Дата</th>
            <th>Ф.И.О.</th>
            <th>Email</th>
            <th>Отзыв</th>
        </tr>
        </thead>
        <tbody>

        </tbody>
    </table>
</div>
@endsection