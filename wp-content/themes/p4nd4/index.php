<?php
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
                        <li><a href="#">Home 1</a></li>
                        <li><a href="#">Home 2</a></li>
                        <li><a href="#">Home 3</a></li>
                    </ul>
                </li>

                <li><a href="#">About</a></li>
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





            <h2>Collapsible Sidebar Using Bootstrap 4</h2>
	    <p>Some Page Content</p>
            <div class="line"></div>

        </div>
        <!-- Content ENDS -->

    </div>




<!--
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
                <h3><?php the_title()?></h3>
        <?php endwhile;

else :
        echo '<p>There are no posts!</p>';

endif;
?>
-->











<?php 
get_footer();
?>
