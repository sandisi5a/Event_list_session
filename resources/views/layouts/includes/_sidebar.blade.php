<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li>
							<a href="#subPages" data-toggle="collapse"  class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Master</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="/event" >Event</a></li>
								</ul>
							</div>
						</li>
						@if(auth()->user()->position=='Admin')
						<li>
							<a href="#sub" data-toggle="collapse"  class="collapsed"><i class="lnr lnr-file-empty"></i> <span>User</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="sub" class="collapse ">
							
								<ul class="nav">
									<li><a href="/user" >User</a></li>
								</ul>
							</div>
						</li>
						@endif
					</ul>
				</nav>
			</div>
		</div>