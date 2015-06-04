@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<div class="panel panel-default">	
					<div class="panel-heading"><h4>Latest News</h4></div>
					<div class="panel-body">
					<?php foreach($posts as $post): ?> 
						<div class="well">
							<div class="post-header"><img src="http://placehold.it/450x250"></div>
							<div><h4 style="display:inline-block;">  <a href="post/<?php echo $post->id; ?>"> <?php echo $post->title; ?> </a> </h4>	
							<h4 style="float:right"> <?php echo $post->created_at; ?></h4>	</div>
							<div class="">
							 	<h3><a href="" target="_blank"></a></h3>
						 		<P><?php echo Functions::word_limiter($post->content); ?> 
						 		<a href="post/<?php echo $post->id; ?>"><span style="display:inline-block;"> Continue Reading</a></span> </P>
							 	<h4>Written by: <a style="display:inline-block;" href='<?php echo URL('/?user=');?>'> <?php echo $post->name; ?> </a></h4>
							 	<h4 style="display:inline-block;">Categories:</h4>

							 	<?php foreach($post->Categories as $category):  ?>
							 		<span> <a href='<?php echo URL('/?category=');?>'><?php echo $category->name; ?></a></span>
							 	<?php endforeach; ?>

							</div>
						</div>
					<?php endforeach; ?> 
					</div>
				</div>
			</div>

<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-heading">Most Popular</div>
					<div class="panel-body">
						<ul> 
							<li> list 1 </li>
							<li> list 1 </li>
							<li> list 1 </li>
						</ul>
					</div>
				</div>
			</div>


			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="post-header"><img style="margin:auto;" src="http://placehold.it/230x200"></div>						
					</div>
					<div class="panel-footer"> <h4> <a href="#"> Shit hot stuff you really need to check out! </a></h4> </div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="post-header"><img style="margin:auto;" src="http://placehold.it/230x200"></div>						
					</div>
					<div class="panel-footer"> <h4> <a href="#"> Even more shit hot stuff you really need to check out! </a></h4></div>
				</div>
			</div>

			<div class="col-md-3">
			<div class="panel panel-default">
			  <!-- Default panel contents -->
			  <div class="panel-heading">A list of movies</div>
			  <!-- List group -->
			  <ul class="list-group">
			    <li class="list-group-item"> <a href="#">Cras justo odio</a></li> 
			    <li class="list-group-item"> <a href="#">Dapibus ac facilisis in</a></li>
			    <li class="list-group-item"> <a href="#">Morbi leo risus</a></li>
			    <li class="list-group-item"> <a href="#">Porta ac consectetur ac</a></li>
			    <li class="list-group-item"> <a href="#">Vestibulum at eros</a></li>
			  </ul>
			</div>
			</div>

			<div class="col-md-3">
			<div class="panel panel-default">
			  <!-- Default panel contents -->
			  <div class="panel-heading">A list of movies</div>
			  <div class="panel-body">
			    <p>With a little bit of info here. I like the idea of each section below highlighting on mouse hover</p>
			  </div>
			  <!-- List group -->
			  <ul class="list-group">
			    <a href="#"> <li class="list-group-item">Cras justo odio</li> </a>
			    <li class="list-group-item">Dapibus ac facilisis in</li>
			    <li class="list-group-item">Morbi leo risus</li>
			    <li class="list-group-item">Porta ac consectetur ac</li>
			    <li class="list-group-item">Vestibulum at eros</li>
			  </ul>
			</div>
			</div>


		</div>
	</div>

@endsection
