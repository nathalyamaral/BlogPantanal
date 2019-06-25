	<!doctype html>
<html lang="en">

<head>
		<title>Colorlib Wordify &mdash; Minimal Blog Template</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300, 400,700|Inconsolata:400,700" rel="stylesheet">

		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/animate.css">
		<link rel="stylesheet" href="css/owl.carousel.min.css">

		<link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
		<link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
		<!-- Theme Style -->
		<link rel="stylesheet" href="css/style.css">

		<link type="text/css" rel="stylesheet" media="screen" href="{{asset('admin/assets/vendors/bootstrap3-wysihtml5-bower/css/bootstrap3-wysihtml5.min.css')}}"/>
    	<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/vendors/summernote/css/summernote.css')}}"/>
    	<!--End of plugin styles-->
    	<link type="text/css" rel="stylesheet" href="{{asset('admin/assets/css/pages/form_elements.css')}}"/>
    	<script type="text/css">
    		.hidden{display:none;}
    	</script>
</head>

<body>
	<div class="wrap">
		<header role="banner">
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-9 social">
							<a href="#"><span class="fa fa-twitter"></span></a>
							<a href="#"><span class="fa fa-facebook"></span></a>
							<a href="#"><span class="fa fa-instagram"></span></a>
							<a href="#"><span class="fa fa-youtube-play"></span></a>
						</div>
						<div class="col-3 search-top">
							<!-- <a href="#"><span class="fa fa-search"></span></a> -->
							<form action="#" class="search-top-form">
								<span class="icon fa fa-search"></span>
								<input type="text" id="s" placeholder="Type keyword to search...">
							</form>
						</div>
					</div>
				</div>
			</div>

				
			<div class="container logo-wrap">
				<div class="row pt-5">
					<div class="col-12 text-center">
						<a class="absolute-toggle d-block d-md-none" data-toggle="collapse" href="#navbarMenu" role="button" aria-expanded="false" aria-controls="navbarMenu"><span class="burger-lines"></span></a>
						<h1 class="site-logo"><a href="index.html">Pantanal Blog</a></h1>
					</div>
				</div>
			</div>

			<nav class="navbar navbar-expand-md  navbar-light bg-light">
				<div class="container">

					<div class="collapse navbar-collapse" id="navbarMenu">
						<ul class="navbar-nav mx-auto">
							<li class="nav-item">
								<a class="nav-link active" href="/">Home</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Posts</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="category.html" id="dropdown05" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categorias</a>
								<div class="dropdown-menu" aria-labelledby="dropdown05">
									@foreach($categories as $cat)
										<a class="dropdown-item" href="#">{{$cat->name}}</a>
									@endforeach
								</div>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="about.blade.php">Sobre</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="contact.blade.php">Contato</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- END header -->

		<section class="site-section py-lg">
			@foreach($posts as $post)
				<div class="container">
					<div class="row blog-entries element-animate">
						<div class="col-md-12 col-lg-8 main-content">
							<img src="{{$post->image_slug}}" width="100%" alt="Image" class="img-fluid mb-5">
							<div class="post-meta">
								<span class="author mr-2"><img src="images/person_1.jpg" alt="Colorlib" class="mr-2"> {{$post->user->name}}</span>&bullet;
								<span class="mr-2">{{$post["created_at"]}}</span> &bullet;
								<span class="ml-2"><span class="fa fa-comments"></span> 3</span>
							</div>
							<h1 class="mb-4">{{$post["title"]}}</h1>
							<a class="category mb-5" href="#">{{$post->category->name}}</a> 

							<div class="post-content-body">
								<p>{!!$post["body"]!!}</p>
							</div>

							<div class="pt-5">
								<p>Category: <a href="#">{{$post->category->name}}</a>
							</div>
							
							@endforeach
							<div class="pt-5">
								<h3 class="mb-5">{{$comments->count()}} Comentários</h3>
								<ul class="comment-list">
									@forelse ($comments as $comment)
									<li class="comment">
										<div class="vcard">
											<img src="images/person_1.jpg" alt="Image placeholder">
										</div>
										<div class="comment-body">
										<h3>{{ $comment->user->name }}</h3>
										<div class="meta">{{$comment->created_at}}</div>
										<p>{!!$comment->body!!}</p> 
										@can('updatePost', $post)
											<a href="#">Deletar</a>
										@endcan
									</li>
									@empty
										<p>Este post não possui comentários</p>
									@endforelse
								</ul>
									<!-- END comment-list -->

								<div class="comment-form-wrap pt-5">
									<h3 class="mb-5">Deixe um Comentário</h3>
									@if (Auth::check())
									<form method="POST" class="form-horizontal" id="tryitForm" action={{route('comment', ['post' => $post->id])}}>
                    					@csrf
										<div class="form-group">
											<textarea name="body" id="" cols="30" rows="10"></textarea>
 											 <input name="image" type="file" id="upload" class="d-none" onchange="">
										</div>
										<div class="form-group">
											<button type="submit"> Comentar </button>	
										</div>

										</form>
									@else
										<div class="form-group"> Faça <a href="{{route ('login')}}"> Login </a> para comentar</div>
										
									@endif


								</div>
							</div>
						</div>

							<!-- END main-content -->

						<div class="col-md-12 col-lg-4 sidebar">
							<div class="sidebar-box search-form-wrap">
								<form action="#" class="search-form">
									<div class="form-group">
										<span class="icon fa fa-search"></span>
										<input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
									</div>
								</form>
							</div>
								<!-- END sidebar-box -->
							@foreach($posts as $postt)
							<div class="sidebar-box">
								<div class="bio text-center">
									<img src="images/person_2.jpg" alt="Image Placeholder" class="img-fluid">
									<div class="bio-body">
										<h2>{{$postt->user->name}}</h2>
										<p>sobre o author</p>
										<p class="social">
											<a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
											<a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
											<a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
											<a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
										</p>
									</div>
								</div>
							</div>

							@endforeach
								<!-- END sidebar-box -->
							<div class="sidebar-box">
								<h3 class="heading">Popular Posts</h3>
								<div class="post-entry-sidebar">
									<ul>
										<li>
											<a href="">
												<img src="images/img_1.jpg" alt="Image placeholder" class="mr-4">
												<div class="text">
													<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
													<div class="post-meta">
														<span class="mr-2">March 15, 2018 </span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="">
												<img src="images/img_1.jpg" alt="Image placeholder" class="mr-4">
												<div class="text">
													<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
													<div class="post-meta">
														<span class="mr-2">March 15, 2018 </span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="">
												<img src="images/img_1.jpg" alt="Image placeholder" class="mr-4">
												<div class="text">
													<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
													<div class="post-meta">
														<span class="mr-2">March 15, 2018 </span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
									<!-- END sidebar-box -->

							<div class="sidebar-box">
								<h3 class="heading">Categorias</h3>
								<ul class="categories">
									@foreach($categories as $category)
									<li style="text-transform: uppercase;"><a href="#">{{$category->name}}</a></li>
									@endforeach
								</ul>
							</div>
							<!-- END sidebar-box -->
						</div>
							<!-- END sidebar -->
					</div>
				</div>
		</section>

		<section class="py-5">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="mb-3 ">Related Post</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-lg-4">
						<a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('images/img_2.jpg'); ">
							<div class="text">
								<div class="post-meta">
									<span class="category">Lifestyle</span>
									<span class="mr-2">March 15, 2018 </span> &bullet;
									<span class="ml-2"><span class="fa fa-comments"></span> 3</span>
								</div>
								<h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
							</div>
						</a>
					</div>
					<div class="col-md-6 col-lg-4">
						<a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('images/img_3.jpg'); ">
							<div class="text">
								<div class="post-meta">
									<span class="category">Travel</span>
									<span class="mr-2">March 15, 2018 </span> &bullet;
									<span class="ml-2"><span class="fa fa-comments"></span> 3</span>
								</div>
								<h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
							</div>
						</a>
					</div>
					<div class="col-md-6 col-lg-4">
						<a href="#" class="a-block sm d-flex align-items-center height-md" style="background-image: url('images/img_4.jpg'); ">
							<div class="text">
								<div class="post-meta">
									<span class="category">Food</span>
									<span class="mr-2">March 15, 2018 </span> &bullet;
									<span class="ml-2"><span class="fa fa-comments"></span> 3</span>
								</div>
								<h3>There’s a Cool New Way for Men to Wear Socks and Sandals</h3>
							</div>
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- END section -->

		<footer class="site-footer">
			<div class="container">
				<div class="row mb-5">
					<div class="col-md-4">
						<h3>About Us</h3>
						<p class="mb-4">
							<img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid">
						</p>

						<p>Lorem ipsum dolor sit amet sa ksal sk sa, consectetur adipisicing elit. Ipsa harum inventore reiciendis. <a href="#">Read More</a></p>
					</div>
					<div class="col-md-6 ml-auto">
						<div class="row">
							<div class="col-md-7">
								<h3>Latest Post</h3>
								<div class="post-entry-sidebar">
									<ul>
										<li>
											<a href="">
												<img src="images/img_6.jpg" alt="Image placeholder" class="mr-4">
												<div class="text">
													<h4>How to Find the Video Games of Your Youth</h4>
													<div class="post-meta">
														<span class="mr-2">March 15, 2018 </span> &bullet;
														<span class="ml-2"><span class="fa fa-comments"></span> 3</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="">
												<img src="images/img_3.jpg" alt="Image placeholder" class="mr-4">
												<div class="text">
													<h4>How to Find the Video Games of Your Youth</h4>
													<div class="post-meta">
														<span class="mr-2">March 15, 2018 </span> &bullet;
														<span class="ml-2"><span class="fa fa-comments"></span> 3</span>
													</div>
												</div>
											</a>
										</li>
										<li>
											<a href="">
												<img src="images/img_4.jpg" alt="Image placeholder" class="mr-4">
												<div class="text">
													<h4>How to Find the Video Games of Your Youth</h4>
													<div class="post-meta">
														<span class="mr-2">March 15, 2018 </span> &bullet;
														<span class="ml-2"><span class="fa fa-comments"></span> 3</span>
													</div>
												</div>
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="col-md-1"></div>

							<div class="col-md-4">
								<div class="mb-5">
									<h3>Quick Links</h3>
									<ul class="list-unstyled">
										<li><a href="#">About Us</a></li>
										<li><a href="#">Travel</a></li>
										<li><a href="#">Adventure</a></li>
										<li><a href="#">Courses</a></li>
										<li><a href="#">Categories</a></li>
									</ul>
								</div>

								<div class="mb-5">
									<h3>Social</h3>
									<ul class="list-unstyled footer-social">
										<li><a href="#"><span class="fa fa-twitter"></span> Twitter</a></li>
										<li><a href="#"><span class="fa fa-facebook"></span> Facebook</a></li>
										<li><a href="#"><span class="fa fa-instagram"></span> Instagram</a></li>
										<li><a href="#"><span class="fa fa-vimeo"></span> Vimeo</a></li>
										<li><a href="#"><span class="fa fa-youtube-play"></span> Youtube</a></li>
										<li><a href="#"><span class="fa fa-snapchat"></span> Snapshot</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p class="small">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
							<script>
								document.write(new Date().getFullYear());
							</script> All Rights Reserved | This template is made with <i class="fa fa-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</footer>
		<!-- END footer -->
	</div>

		<!-- loader -->
	<div id="loader" class="show fullscreen">
		<svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" />
		</svg>
	</div>


	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/jquery-migrate-3.0.0.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript" src="{{asset('admin/assets/vendors/tinymce/js/tinymce.min.js')}}"></script>
	<script src="admin/assets/vendors/bootstrap3-wysihtml5-bower/js/bootstrap3-wysihtml5.all.min.js"></script>
	<script src="admin/assets/js/pages/form_editors.js"></script>

</body>

<script type="text/javascript">
		$(document).ready(function() {
			tinymce.init({
				selector: "textarea",
				theme: "modern",
				paste_data_images: true,
				plugins: [
				"advlist autolink lists link image charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars code fullscreen",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons template paste textcolor colorpicker textpattern"
				],
				toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
				toolbar2: "print preview media | forecolor backcolor emoticons",
				image_advtab: true,
				file_picker_callback: function(callback, value, meta) {
					if (meta.filetype == 'image') {
						$('#upload').trigger('click');
						$('#upload').on('change', function() {
							var file = this.files[0];
							var reader = new FileReader();
							reader.onload = function(e) {
								callback(e.target.result, {
									alt: ''
								});
							};
							reader.readAsDataURL(file);
						});
					}
				},
				templates: [{
					title: 'Test template 1',
					content: 'Test 1'
				}, {
					title: 'Test template 2',
					content: 'Test 2'
				}]
			});
		});
	</script>
</html>