<?php
    include('include/header.php');
?>
        <!-- Featured Title -->
        <div id="featured-title" class="featured-title clearfix">
            <div id="featured-title-inner" class="container clearfix">
                <div class="featured-title-inner-wrap">                    
                    <div id="breadcrumbs">
                        <div class="breadcrumbs-inner">
                            <div class="breadcrumb-trail">
                                <a href="index.php" class="trail-begin">Home</a>
                                <span class="sep">|</span>
                                <span class="trail-end">Projects</span>
                            </div>
                        </div>
                    </div>
                    <div class="featured-title-heading-wrap">
                        <h1 class="feautured-title-heading">
                            Projects Grid
                        </h1>
                    </div>
                </div><!-- /.featured-title-inner-wrap -->
            </div><!-- /#featured-title-inner -->            
        </div>
        <!-- End Featured Title -->

<section class="search-sec">
    <div class="container">
        <form action="search_result.php" method="post">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" style="padding-top: 15px;">
                        <div class="col-lg-9 col-md-6 col-sm-12 p-0">
                            <input type="text" name="keyword" class="form-control search-slt" placeholder="Enter Keyword" required="true">
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                            <button type="submit" name="submit" class="btn wrn-btn" >Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
            <div id="content-wrap">
                <div id="site-content" class="site-content clearfix">
                    <div id="inner-content" class="inner-content-wrap">
                       <div class="page-content">
                            <!-- SERVICES -->
                            <div class="row-services">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="themesflat-spacer clearfix" data-desktop="40" data-mobile="35" data-smobile="35"></div>
                                            <div class="themesflat-project style-2 isotope-project has-margin mg15 data-effect clearfix">
                                                <?php
                                                    $data = mysqli_query($sql_con,"SELECT * from work where status='2' ORDER BY id DESC Limit 9");
                                                    while ($row=mysqli_fetch_array($data)) {
                                                        $img = $row['img'];
                                                        $title = $row['title'];
                                                        $category_id = $row['category'];
                                                        $amount = $row['amount'];
                                                        $des = $row['des'];

                                                        $data2 = mysqli_query($sql_con,"SELECT * from categories where id='$category_id'");
                                                        $row2 = mysqli_fetch_array($data2);
                                                        $category = $row2['cat_name'];

                                                ?>
                                                <div class="project-item green villa">
                                                    <div class="inner">
                                                        <div class="thumb data-effect-item has-effect-icon w40 offset-v-19 offset-h-49">
                                                            <img src="clients/<?php echo $img?>" alt="Image"> 
                                                            <div class="overlay-effect bg-color-3"></div>
                                                        </div>
                                                        <div class="text-wrap">                                                                        
                                                            <h5 class="heading"><a href="#"><?php echo $title?></a></h5>
                                                            <div class="elm-meta">
                                                                <span><a href="#"><?php echo $category?></a></span>
                                                                <span><a href="#">Rs <?php echo $amount?></a></span>
                                                                <span><a href="#"><?php echo $des?></a></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-item -->
                                            <?php }?>
                                            </div><!-- /.themesflat-project -->
                                            <div class="button-wrap has-icon icon-left size-14 pf21 text-center">
                                            </div>                                           
                                            <div class="themesflat-spacer clearfix" data-desktop="72" data-mobile="60" data-smobile="60"></div>
                                        </div><!-- /.col-md-12 -->
                                    </div><!-- /.row -->
                                </div><!-- /.container -->
                            </div>
                            <!-- END SERVICES -->
                       </div><!-- /.page-content -->
                    </div><!-- /#inner-content -->
                </div><!-- /#site-content -->
            </div><!-- /#content-wrap -->
        </div><!-- /#main-content -->
<?php
    include('include/footer.php');
?>

<!-- Javascript -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/tether.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/animsition.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/countto.js"></script>
<script src="assets/js/equalize.min.js"></script>
<script src="assets/js/jquery.isotope.min.js"></script>
<script src="assets/js/owl.carousel2.thumbs.js"></script>

<script src="assets/js/jquery.cookie.js"></script>
<script src="assets/js/gmap3.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIEU6OT3xqCksCetQeNLIPps6-AYrhq-s&amp;region=GB"></script>
<script src="assets/js/shortcodes.js"></script>
<script src="assets/js/main.js"></script>

<!-- Revolution Slider -->
<script src="includes/rev-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="includes/rev-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="assets/js/rev-slider.js"></script>
<!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->  
<script src="includes/rev-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="includes/rev-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>


</html>

