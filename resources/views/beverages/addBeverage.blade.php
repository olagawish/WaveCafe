<!DOCTYPE html>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Add Beverage</title>

	<!-- Bootstrap -->
	<link href="{{ asset('assets/admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="{{ asset('assets/admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<!-- NProgress -->
	<link href="{{ asset('assets/admin/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
	<!-- iCheck -->
	<link href="{{ asset('assets/admin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">
	<!-- bootstrap-wysiwyg -->
	<link href="{{ asset('assets/admin/vendors/google-code-prettify/bin/prettify.min.css') }}" rel="stylesheet">
	<!-- Select2 -->
	<link href="{{ asset('assets/admin/vendors/select2/dist/css/select2.min.css') }}" rel="stylesheet">
	<!-- Switchery -->
	<link href="{{ asset('assets/admin/vendors/switchery/dist/switchery.min.css') }}" rel="stylesheet">
	<!-- starrr -->
	<link href="{{ asset('assets/admin/vendors/starrr/dist/starrr.css') }}" rel="stylesheet">
	<!-- bootstrap-daterangepicker -->
	<link href="{{ asset('assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="{{ asset('assets/admin/build/css/custom.min.css') }}" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="{{ route('beverages.create') }}" class="site_title"><i class="fa fa-graduation-cap"></i> <span>Beverages Admin</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
                    @include('includesAdmin.quickInfo')
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					@include('includesAdmin.sidebarMenu')
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
                    @include('includesAdmin.footerButtons')
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
            @include('includesAdmin.topNav')
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Manage Beverages</h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5  form-group pull-right top_search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="Search for...">
									<span class="input-group-btn">
										<button class="btn btn-default" type="button">Go!</button>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Add Beverage</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
										<li class="dropdown">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
											<ul class="dropdown-menu" role="menu">
												<li><a class="dropdown-item" href="#">Settings 1</a>
												</li>
												<li><a class="dropdown-item" href="#">Settings 2</a>
												</li>
											</ul>
										</li>
										<li><a class="close-link"><i class="fa fa-close"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<br />
									<form action="{{ route('beverages.store') }}" method="POST">
                                    @csrf
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" id="title" required="required" class="form-control ">
												<p style="color:red">
													@error('title')
													{{ $message }}
													@enderror
												</p>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="content">Content <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<textarea id="content" name="content" required="required" class="form-control"></textarea>
												<p style="color:red">
													@error('content')
													{{ $message }}
													@enderror
												</p>
											</div>
										</div>
										<div class="item form-group">
											<label for="price" class="col-form-label col-md-3 col-sm-3 label-align">Price <span class="required">*</span></label>
											<div class="col-md-6 col-sm-6 ">
												<input id="price" class="form-control" type="number" name="price" required="required">
												<p style="color:red">
													@error('price')
													{{ $message }}
													@enderror
												</p>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Published</label>
											<div class="checkbox">
												<label>
													<input type="checkbox" class="flat">
												</label>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align">Special</label>
											<div class="checkbox">
												<label>
													<input type="checkbox" class="flat">
												</label>
											</div>
										</div>
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Image <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="file" id="image" name="image" required="required" class="form-control">
												<p style="color:red">
													@error('image')
													{{ $message }}
													@enderror
												</p>
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Category <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<p style="color:red">
													@error('category')
													{{ $message }}
													@enderror
												</p>
												<select class="form-control" name="category" id="">
													<option value=" ">Select Category</option>
													<option value="cat1">Category 1</option>
													<option value="cat2">Category 2</option>
												</select>
											</div>
										</div>
										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<button class="btn btn-primary" type="button">Cancel</button>
												<button type="submit" class="btn btn-success">Add</button>
											</div>
										</div>

									</form>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<!-- /page content -->

			<!-- footer content -->
			@include('includesAdmin.footerContent')
			<!-- /footer content -->
		</div>
	</div>

	@include('includesAdmin.footerJSAdd')
	
</body>
</html>