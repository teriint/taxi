<div class="navbar-custom-menu pull-left">
    <ul class="nav navbar-nav">
        <!-- =================================================== -->
        <!-- ========== Top menu items (ordered left) ========== -->
        <!-- =================================================== -->

        <!-- <li><a href="{{ url('/') }}"><i class="fa fa-home"></i> <span>Home</span></a></li> -->

        <!-- ========== End of top menu left items ========== -->
    </ul>
</div>


<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
      <!-- ========================================================= -->
      <!-- ========== Top menu right items (ordered left) ========== -->
      <!-- ========================================================= -->

@guest
                            <li><a>Здравствуйте, <font color="#ff0000">Гость</font> </a></li>
                          

                            <li><a href="{{ route('login') }}">Войти</a></li>
                            <li><a href="{{ route('register') }}">Зарегестрироваться</a></li>
                        @else
                            <li><a>Здравствуйте, <font color="#ff0000">{{ Auth::user()->name }}</font> </a></li>
                                    	<li><a href="{{ route('list_drafts') }}">Заказы в обработке</a></li>
                                    	<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
    <i class="fa fa-globe"></i> Translations<span class="caret"></span>
  </a>
  <ul class="dropdown-menu" role="menu">
    <li class=""><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language') }}"><i class="fa fa-flag-checkered"></i> Languages</a></li>
    <li class=""><a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language/texts') }}"><i class="fa fa-language"></i> Site texts</a></li>
  </ul>
</li>
                                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">	
                                            Выйти
                                        </a> </li>
								    <li>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                              
                        @endguest
      
      @if (config('backpack.base.setup_auth_routes'))
        @if (Auth::guest())
            <li><a href="{{ route('backpack.auth.login') }}">{{ trans('backpack::base.login') }}</a></li>
            @if (config('backpack.base.registration_open'))
            <li><a href="{{ route('backpack.auth.register') }}">{{ trans('backpack::base.register') }}</a></li>
            @endif
        @else
           
        @endif
       @endif
       <!-- ========== End of top menu right items ========== -->
    </ul>
</div>
