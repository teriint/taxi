@extends('layouts.app_en')
 
@section('content')

<div class="container"  id="adm">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
        @guest
 <div class="content" >
	       
<h2 class="col-md-10 col-md-offset-4"><p >Order a taxi right now!</p></h2>
		<div class='center'>
        <form id="form" class="form-horizontal"  >
            <div class="form-group">
                <label for="form_fio" class="col-md-2 cont	rol-label">F.I.O:</label>
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
                <label for="form_phone" class="col-md-2 control-label">Phone</label>
                <div class="col-md-10">
                    <input type="text" name="phone" class="form-control" id="form_phone" placeholder="Телефон">
                </div>
            </div>
			 <div class="form-group">
                <label for="form_adr_otpr" class="col-md-2 control-label">Location:</label>
                <div class="col-md-10">
                    <input type="text" name="adr_otpr" class="form-control" id="form_adr"
                           placeholder="Адрес отбытия">
                </div>
             </div>
			 <div class="form-group">
                <label for="form_adr_prib" class="col-md-2 control-label">Where:</label>
                <div class="col-md-10">
                    <input type="text" name="adr_prib" class="form-control" id="form_adr"
                           placeholder="Адрес прибытия">
                </div>
             </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-6">
                    <button  class="form-control btn btn-block btn-default">
                                    <a  href="{{ route('login') }} ">Create</a>
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
     	
      <p style="">BONUSES AND DISCOUNTS - at the end of the first trip
a bonus account is opened for the passenger (BONUS ACCOUNT) and is credited to it
from 25 bonuses. For each next successful trip is charged from 3
bonuses. If you accumulate a multiple of 10, you can use the bonuses in
as a discount for the trip at the rate of 1 bonus = 1 ruble, after downloading
GoNChiE for Android or GoNChiE for iOS, but not more than 50 for one
 trip.
There is also an auto-discount. When a sufficient amount is accumulated, the system
can automatically make a discount and write off at the same time no more than 15
bonuses.
</p> <p style = "">
Draw your attention to :
Bonus is a conventional unit credited to the Bonus Account and debited from
 Bonus account in accordance with the above rules and giving
the right to receive a Bonus Award. Bonuses are only used in
accounting purposes and are not and can not be a means of payment,
any kind of currency or a security, can not be cashed,
donated to third parties or inherited.
</p>
<div class="hrgin" style=""><hr style=""></div>
<table class="table nonetab" style=""> 
  <thead style=""> 
    <tr style=""> 
      <th style="">Service</th> 
      <th class="right" style="">Price</th> 
      <th class="u1-block right" style="">Additionally</th> 
    </tr> 
  </thead> 
  <tbody style=""> 
    <tr class="success" style=""> 
      <td style=""><b style="color:#1e0000">Min. travel</b></td> 
      <td class="right" style=""><b style="color:#1e0000">70 rub.</b></td> 
      <td class="u1-block right" style=""><b style="color:#1e0000"	>landing</b>
        <br style=""> <p class="warning-1" style="color:#1e0000">(We draw your
attention that the landing is dynamic and can be increased
  from 5 to 30 rubles, depending on the load of carriers. Request
specify this information from the operators.)</p>
      </td> 
    </tr> 
     <tr style=""> 
    <td style=""><b style="">Travel around the city</b></td> 
    <td class="right" style=""><b style="">15 rub.</b></td> 
    <td class="u1-block right" style=""><b style="">per 1 km</b></td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style=""><b style="">Simple (waiting)</b></td> 
    <td class="right" style=""><b style="">3 rub.</b></td> 
    <td class="u1-block right" style=""><b style="">Price for 1 min.<br style=""> 
(first 5 minutes free of charge)</b></td>
  </tr> 
    <tr style=""> 
    <td style="">Preliminary orders from 1 minute</td> 
    <td class="right" style="">3 rub.</td> 
    <td class="u1-block right" style="">-</td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style="">Hourly payment</td> 
    <td class="right" style="">300 rub.</td> 
    <td class="u1-block right" style="">1 час до 20 км. <br style="">
Свыше 20 км. +16 rub. (за 1 км.)</td> 
  </tr> 
    <tr style=""> 
    <td style="">DELIVERY</td> 
    <td class="right" style="">+ 100 rub. to the tariff</td> 
    <td class="u1-block right" style="">(up to the apartment door + 50p.)<br style="">
ATTENTION! Transportation by delivery is not considered.</td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style="">Meeting with a sign in the Airport</td> 
    <td class="right" style="">+ 100 rub. to the tariff </td> 
    <td class="u1-block right" style="">-</td> 
  </tr> 
    <tr style=""> 
    <td style="">Delivery of forgotten things in the car salon</td> 
    <td class="right" style="">150 rub.</td> 
    <td class="u1-block right" style="">-</td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style="">Baggage</td> 
    <td class="right" style="">FREE OF CHARGE</td> 
    <td class="u1-block right" style=""> If you fit in the trunk and interior, <br style="">
but it does not interfere with the driver's style<br style="">
управлению и обзору зеркал</td> 
  </tr> 
    <tr style=""> 
    <td style="">Upper trunk </td> 
    <td class="right" style="">1.5 fare </td> 
    <td class="u1-block right" style="">oversize </td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style="">Transportation of animals with a carry</td> 
    <td class="right" style=""> free</td> 
    <td class="u1-block right" style="">Special. container</td> 
  </tr> 
    <tr style=""> 
    <td style="">Transport of animals without carrying</td> 
    <td class="right" style="">1.5 fare</td> 
    <td class="u1-block right" style="">Without spec. container</td> 
  </tr> 
  <tr class="success" style="color:#1e0000"> 
    <td style="">Minivan</td> 
    <td class="right" style="">1.5 fare</td> 
    <td class="u1-block right" style="">5 or more passengers</td> 
  </tr> 
    <tr style=""> 
    <td style="">Help</td> 
    <td class="right" style="">+100 rub.to the tariff </td> 
    <td class="u1-block right" style="">"light up," wheel replacement, etc.</td> 
  </tr> 
  <tr class="success" style="color:#1e0000"> 
    <td style="">Towing</td> 
    <td class="right" style=""> 2nd rate</td> 
    <td class="u1-block right" style="">-</td> 
  </tr> 
    <tr style=""> 
    <td style="">Driving a car</td> 
    <td class="right" style="">3rd rate </td> 
    <td class="u1-block right" style="">Fine for insurance <br style="">
оплачивает клиент</td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style="">Penalty </td> 
    <td class="right" style="">50 rub.</td> 
    <td class="u1-block right" style="">Failure of the passenger from the order </td> 
  </tr> 
    <tr style=""> 
    <td style=""> Margin for urgency</td> 
    <td class="right" style="">+30 rub. to the tariff</td> 
    <td class="u1-block right" style="">The margin is added by the client</td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style="">A car with air conditioning</td> 
    <td class="right" style="">+10% to the tariff</td> 
    <td class="u1-block right" style="">-</td> 
  </tr> 
    <tr style=""> 
    <td style="">Extreme conditions	</td> 
    <td class="right" style="">+ from 15 to 50% to the tariff </td> 
    <td class="u1-block right" style="">Complicated or extreme weather <br style="">
and technogenic conditions associated with riskи техногенные условия, связанные с риском<br style="">
for the life and safety of the car <br style="">
(ice, rainfall, peak loads in <br style="">
holidays and watch-peak)</td> 
  </tr> 
  <tr  class="success" style="color:#1e0000"> 
    <td style="">Holidays (New Year, Navy Day) </td> 
    <td class="right" style="">2nd rate</td> 
    <td class="u1-block right" style="">-</td> 
  </tr> 
</tbody> 
</table>
<p class="p-u1" style="">*<span class="ps	-u1" style="">The driver has
the right to take payment in advance (in advance) if the preliminary
the cost of the trip is more than 250 rub. , hourly or intercity.</span></p>
<p class="p-u1" style="">**<span class="ps-u1" style="">Do not forget about
that the final cost for the actual mileage at the taximeter is
 driver. The same applies to the value calculated from the application
client "Calling a taxi" - an approximate, preliminary
cost, and paid for the actual mileage and time, according to the testimony
 a taximeter. Dear customers, we once again draw your attention to the fact that all
calculations that you receive from the dispatcher or in the program are
preliminary and can not serve as a basis for payment, the final
 Payment is made at the end of the trip in accordance with the testimony
a taximeter.</span></p>
<p class="p-u1" style="">***<span class="ps-u1" style="">At the end of the trip, the cost on the taximeter is sounded by a robot, not a driver!</span></p>
		@else
            <div class="panel panel-default">
                <div class="panel-heading">
                Available Orders
                    @can('create-post')
                    <a class="pull-right btn btn-sm btn-primary" href="{{ route('create_post_en') }}">Create new order</a>
                    @endcan	
                </div>
    

                <div class="panel-body">
                    <div class="row">

                    @foreach($posts as $post)

                                <div class="col-sm-4 col-md-offset-1">
                            <div class="thumbnail">
                            <div class="caption">

                                <a href="{{ route('show_post_en', ['id' => $post->id]) }}"> Order № {{ $post->id }}</a>	
                                <p>{{ str_limit($post->p_o, 50) }} - {{ str_limit($post->p_p	, 50) }}</p>
                                <p><font color="#ff0000" size=4>{{ $post->stat }}</font></p>
                                
                                
                                @can('update-post', $post)
                                <p>
                                <a href="{{ route('show_post_en', ['id' => $post->id]) }}" class="btn btn-sm btn-default" role="button">View order</a> 
                                </p>
                                @endcan

								
								
								
								@can('update-post', $post)
                                <p>
                                    <a href="{{ route('edit_post_en', ['id' => $post->id]) }}" class="btn btn-sm btn-default" role="button">Edit an order</a> 
                                </p>
                                @endcan
								
                                @can('update-status-post', $post)
                                <p>
                                <a href="{{ route('edit_status_post_en', ['id' => $post->id]) }}" class="btn btn-sm btn-default" role="button">To accept</a> 
                                </p>
                                @endcan

                                @can('update-ok-post', $post)
                                <p>
                                <a href="{{ route('edit_ok_post_en', ['id' => $post->id]) }}" class="btn btn-sm btn-default" role="button">Complete</a>
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
