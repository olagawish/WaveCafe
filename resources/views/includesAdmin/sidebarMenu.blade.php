<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-users"></i> Users <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{ route('users.create') }}">Add User</a></li>
										<li><a href="{{ route('users.index') }}">Users List</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-edit"></i> Categories <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{ route('categories.create') }}">Add Category</a></li>
										<li><a href="{{ route('categories.index') }}">Categories List</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Beverages <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="{{ route('beverages.create') }}">Add Beverage</a></li>
										<li><a href="{{ route('beverages.index') }}">Beverages List</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-desktop"></i> Messages <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="messages.html">Messages List</a></li>
									</ul>
								</li>
							</ul>
						</div>

					</div>