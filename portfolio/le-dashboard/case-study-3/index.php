<?php require_once("../../../resources/templates/header-case-study.php"); ?>

<body>
    
    <?php require_once("../../../resources/templates/port-nav.php"); ?>

    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="portfolio page-header">Package Details
                   
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="../../../resources/img/portfolio/le-dash/PD-final.png" alt="">
            </div>

            <div class="col-md-4">
                <h3>Project Description</h3>
                <p>Package details is a newer functionality added to the dashboard meant for internal usage and customers to have easy access to important application details such as domains, search keywords, and categories, etc. Users can view their current apps and apps they have owned and deactivated in the past. </p>
                
                
            </div>

        </div>
        <!-- /.row -->
        
       <!-- Process -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Process</h3>
            </div>
            
            <div class="col-sm-3 col-xs-6">
                <a href="#process1" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive portfolio-item" src="../../../resources/img/portfolio/le-dash/PD-process1.png" alt="">
                </a>
            </div>

            <div class="col-sm-3 col-xs-6">
                <a href="#process2" class="portfolio-link" data-toggle="modal">
                    <img class="img-responsive portfolio-item" src="../../../resources/img/portfolio/le-dash/PD-process2.png" alt="">
                </a>
            </div>

           

        </div>
        <!-- /.row 1-->
        
 
        <!-- Process Modals -->
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
                            <h2>First Package Details Concept</h2>
                            <hr class="star-primary">
                            <img src="../../../resources/img/portfolio/le-dash/PD-process1.png" class="img-responsive img-centered" alt="">
                            <p>The need was for a place to show a user's applications details, and the source details about each application. The idea behind the desgin was to make this information element easily accessible without taking away valuable space. Making this a modal was the best option. I used the same concept as the accordian navigation design and incorporated it into this modal to easily organize each application and their details. All accordians are closed when one is opened so that it is easier to read and distiguish between the other applications in the list. </p>
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
                            <h2>Second Package Details Mockup</h2>
                            <hr class="star-primary">
                            <img src="../../../resources/img/portfolio/le-dash/PD-process2.png" class="img-responsive img-centered" alt="">
                            <p>Orange was incorporated as the action color around this time, so I changed the gray to white and used the orange as the highlight for which application is being viewed to further the look of where the user's focus should be when the item is clicked. The name was also changed to Package Details. </p>
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