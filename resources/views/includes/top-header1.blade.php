<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="top-bar animate-dropdown">
	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">





				<li>@if(!Auth::user())

					<a href="#"><i class="icon fa fa-user"></i>Welcome</a></li>

					@endif

					<li>@if(Auth::user())

					<a href="#"><i class="icon fa fa-user"></i>Welcome - {{Auth::user()->name}}</a></li>

					@endif
				

					<li> @if(!Auth::user())
						

							
							<a href= "{{route ('medical.create')}}">

							

						<i class="fa fa-user"></i> My Account</a></li>

						@endif

						@if(Auth::user())
						

							
							<a href= "{{route('medical.edit', Auth::user()->id)}}">

							

						<i class="fa fa-user"></i> My Account</a></li>

						@endif
					
					<li><a href="{{route('request.list')}}"><i class="fa fa-sort"></i></i> Request List
						<span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span></a></li>
					<li><a href="{{route('get.history')}}"><i class="fa fa-history"></i> Request History</a></li>
                    



                     @if(!Auth::user())
                     
                     
                     
                     <li><a href="{{route('medical.create')}}"><i class="icon fa fa-sign-in"></i>Login</a></li>
                     @endif

	
				@if(Auth::user())
				<li>

					<a class="icon fa fa-sign-out" href="
				/test5/public/userlogout"
                                       >
                                        {{ __('Logout') }}
                                    </a>


                                </li>

                                

                                    @else
                                    @endif

				
				</ul>
			</div><!-- /.cnt-account -->

<div class="cnt-block">
				<ul class="list-unstyled list-inline">
					<li class="dropdown dropdown-small">
						
						
					</li>

				
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->