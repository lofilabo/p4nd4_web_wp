<?php
if ( get_query_var('p') ) {
    $p = get_query_var('p');

    $current_post = get_post( $p );
    //var_dump($current_post);
}


get_header();
?>


   <div class="wrapper">

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>p4nd4</h3>
            </div>

            <ul class="list-unstyled components">
                <p>All Articles</p>

                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li><a href="#">Home 2</a></li>
                        <li><a href="#">Home 3</a></li>
                    </ul>
                </li>

                <li><a href="#">About</a></li>

<?php
$args = array(
'post_type'=> 'post',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'ASC',
'posts_per_page' => -1 // this will retrive all the post that is published
);
$result = new WP_Query( $args );


if ( $result->have_posts() ) :
        while ( $result->have_posts() ) : $result->the_post(); ?>
            <li><a href="<?php the_permalink() ?>"><?php the_title()  ?></a></li>
        <?php endwhile;

endif;
?>



        </nav>
        <!-- Sidebar End -->



        <!-- Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active"><a class="nav-link" href="#">Page</a></li>
                            <li class="nav-item active"><a class="nav-link" href="#">Page</a></li>
                            <li class="nav-item active"><a class="nav-link" href="#">Page</a></li>
                            <li class="nav-item active"><a class="nav-link" href="#">Page</a></li>
                        </ul>
                    </div>
                </div>
            </nav>




		<div class= 'narrow-page-container'>
            		<h2>  
			<?php echo( $current_post->post_title ); ?>
			</h2>
	    		<p>
			<?php echo( $current_post->post_content ); ?>
	    		</p>
            		
			<div class="line"></div>
			<h6>
<?php
  echo( "ID : " . $current_post->ID . "<br/>" );
  echo( "author : " . $current_post->post_author . "<br/>" );
  echo( "date : " . $current_post->post_date . "<br/>" );
  echo( "gmt : " . $current_post->post_date_gmt . "<br/>" );
  echo( "excerpt : " . $current_post->post_excerpt . "<br/>" );
  echo( "status : " . $current_post->post_status . "<br/>" );
  echo( "comment status : " . $current_post->comment_status . "<br/>" );
  echo( "ping status : " . $current_post->ping_status . "<br/>" );
  echo( "name : " . $current_post->post_name . "<br/>" );
  echo( "parent : " . $current_post->post_parent . "<br/>" );
  echo( "guid : " . $current_post->guid . "<br/>" );
  echo( "menu : " . $current_post->menu_order . "<br/>" );
  echo( "type : " . $current_post->post_type . "<br/>" );
  echo( "mime type : " . $current_post->post_mime_type . "<br/>" );
  echo( "comment count : " . $current_post->comment_count . "<br/>" );
  echo( "filter : " . $current_post->filter . "<br/>" );


?>
			</h6>
		</div>
        </div>
        <!-- Content ENDS -->

    </div>




<?php 
get_footer();
?>
