@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="panel panel-default">	
					<div class="panel-heading"><h4> <?php echo $post->title; ?> </h4></div>
					<div class="panel-body">
						<div class="well">
							<div class="post-header"><img src="http://placehold.it/775x150"></div>
							<div><h4 style="display:inline-block;"> <?php echo $post->title; ?> </h4>	<h4 style="float:right"> <?php echo $post->created_at; ?></h4>	</div>
							 	<h3><a href="" target="_blank"></a></h3>
						 		<P><?php echo $post->content; ?> 
							 			
							 	<h4>Posted by: <a style="display:inline-block;" href='<?php echo URL('/?user=');?>'> <?php echo $post->name; ?> </a></h4>
							 	<h4 style="display:inline-block;">Categories:</h4>

							 	<?php foreach($post->Categories as $category):  ?>
							 		<span> <a href='<?php echo URL('/?category=');?>'><?php echo $category->name; ?></a></span>
							 	<?php endforeach; ?>
						 		
						 		<div class="col-md-3" style="float:right;">
								   <a class="btn btn-block btn-social btn-twitter">
								    <i class="fa fa-twitter"></i> Share on Twitter
								  </a>
							  </div>
								
								<br >
								<nav>
									<ul class="pager">
										<li class="previous"><a href="<?php echo url('/post/'.($post->id-1)); ?>"><span aria-hidden="true">&larr;</span> Older</a></li>
										<li class="next"><a href="<?php echo url('/post/'.($post->id+1)); ?>">Newer <span aria-hidden="true">&rarr;</span></a></li>
									</ul>
								</nav>
							  <hr>	 
				 		
							 	 <!-- Add Comment -->
							 	 <div style="margin-top:50;" class="jumbotron">
							 		  <h1>Add a comment</h1>
							 		<form class="form-horizontal" action="<?php echo URL('/comment/create'); ?>" method="post" >
										<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
									  	<input type="hidden" name="comment[post_id]" value="<?php echo $post->id; ?>">
									  <div class="form-group">
									    <label for="comment[name]" class="col-sm-2 control-label">Name</label>
									    <div class="col-sm-10">
									      <input type="text" class="form-control" name="comment[name]" placeholder="Required">
									    </div>
									  </div>
									 
									  <div class="form-group">
									    <label for="comment[email]" class="col-sm-2 control-label">Email</label>
									    <div class="col-sm-10">
									      <input type="text" class="form-control" name="comment[email]" placeholder="(Will not be displayed)">
									    </div>
									  </div>
									  
									  <div class="form-group">
									    <label for="comment[comment]" class="col-sm-2 control-label">Comment</label>
									    <div class="col-sm-10">
									  	  <textarea name="comment[comment]" class="form-control" rows="3"></textarea>
									    </div>
									  </div>

									  <div class="form-group">
									    <div class="col-sm-offset-2 col-sm-10">
									      <div class="checkbox">
									        <label>
									          <input name="comment[notify]"  type="checkbox"> Notify me of followup comments via e-mail
									        </label>
									      </div>
									    </div>
									  </div>

									  <div class="form-group">
									    <div class="col-sm-offset-2 col-sm-10">
									      <button type="submit" class="btn btn-primary btn-lg">Comment</button>
									    </div>
									  </div>

									</form>
								</div><!-- /End Add Comments -->

								<!-- Display Comments -->

								<?php foreach ($post->Comments as $comment): ?>
									<div class="panel panel-info">
										<div class="panel-heading"><?php echo $comment->name; ?></div>
										<div class="panel-body">
											<?php echo $comment->comment; ?>
										</div>
										<div class="panel-footer"><?php echo $comment->created_at; ?></div>
									</div>
								<?php endforeach; ?>
								<!-- /End Display Comments -->
								 
						</div>
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
<div class="col-md-3">
			 
  
    <div class="thumbnail">
      <img src="http://placehold.it/240x200" alt="...">
      <div class="caption">
        <h3>Lorem ipsum dolor</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum varius fermentum. Mauris blandit turpis quis laoreet rhoncus.</p>
        <p><a href="#" class="btn btn-primary" role="button">Like</a> <a href="#" class="btn btn-default" role="button">Dislike</a></p>
  
  </div>
</div>
</div>

<div class="col-md-3">
<div class="list-group">
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">List group item heading</h4>
    <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum varius fermentum. Mauris blandit turpis quis laoreet rhoncus.</p>
  </a>
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">List group item heading</h4>
    <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum varius fermentum. Mauris blandit turpis quis laoreet rhoncus.</p>
  </a>
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">List group item heading</h4>
    <p class="list-group-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum varius fermentum. Mauris blandit turpis quis laoreet rhoncus.</p>
  </a>
</div>
</div>

		</div>
	</div>

@endsection
