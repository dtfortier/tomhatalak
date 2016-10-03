<?php require_once("../../../resources/templates/header-case-study.php"); ?>

<body>
    
    <?php require_once("../../../resources/templates/port-nav.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="portfolio page-header">Navigation
                   
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="../../../resources/img/portfolio/le-dash/SN-final.png" alt="">
            </div>

            <div class="col-md-4">
                <h3>Project Description</h3>
                <p>The concept of this navigation adjustment was to move the application links from the front page to a side navigation to allow for each application to become accessible from anywhere in the dashboard. This created more efficiency and ease of use for the users.</p>
            </div>

        </div>
        <!-- /.row -->
        
        
             <!-- Process -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Process</h3>
            </div>
            
            <div class="col-sm-3 col-xs-6">
                <a href="#original" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive portfolio-item" src="../../../resources/img/portfolio/le-dash/SN-original.png" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#process1" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive portfolio-item" src="../../../resources/img/portfolio/le-dash/SN-process1.png" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#process2" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive portfolio-item" src="../../../resources/img/portfolio/le-dash/SN-process2.png" alt="">
                </a>
            </div>

            <!--<div class="col-sm-3 col-xs-6">
                <a href="case-study-4/" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive portfolio-item" src="http://placehold.it/500x300" alt="">
                </a>
            </div>-->

        </div>
        <!-- /.row 1-->
        
 
        <!-- Process Modals -->
    <div class="portfolio-modal modal fade" id="original" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Original Dashboard (Customer Launchpad)</h2>
                            <hr class="star-primary">
                            <img src="../../../resources/img/portfolio/le-dash/SN-original.png" class="img-responsive img-centered" alt="">
                            <p>This was the dashboard before the new design.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <div class="portfolio-modal modal fade" id="process1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>First Concept Mockup</h2>
                            <hr class="star-primary">
                            <img src="../../../resources/img/portfolio/le-dash/SN-process1.png" class="img-responsive img-centered" alt="">
                            <p>The first concept was to create a pop-out navigation feature. Due to the nature of each application however, this concept was bulky and in some cases caused for more clicking than necessary. </p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="process2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <h2>Second Concept Mockup</h2>
                            <hr class="star-primary">
                            <img src="../../../resources/img/portfolio/le-dash/SN-process2.png" class="img-responsive img-centered" alt="">
                            <p>The next design concept was to use the accordian functionality in the side navigation. This is the concept we went with. In this design I incorporated individual icons for each application, but that started to create an unnecessary complexity, so the final design only has icons for the top parent links.</p>
                            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
     <hr>

<?php require_once("../../../resources/templates/footer.php"); ?>