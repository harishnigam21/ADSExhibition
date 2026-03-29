<!-- including header secition -->
<?php 
$title="About Us || ADS EXHIBITION AND EVENTS SOLUTION";
$dir="aboutus";
include('structure/header.php'); ?>
<!-- End of Header -->

<!--cube portfolio-->
<link href="assets/cubeportfolio/css/cubeportfolio.min.css" rel='stylesheet'>

<!-- including Menu secition -->
<?php include('structure/menu.php'); ?>
<!-- End of Menu -->

<!-- CODE HERE -->

<section id="content-region-3" class="padding-40 page-tree-bg">
            <div class="container">
                <h3 class="page-tree-text">
                    About Us
                </h3>
            </div>
</section><!--page-tree end here-->

<div class="space-70"></div>    
<div class="container">
            <div class="row align-items-center">
                <div class="flex">
                    <h4 class="heading-mini">About our company</h4>
                    <p>
                        We are small, but one of the most experienced company in India in all aspects of design, production and marketing, we have nearly 6 years of successful experience in creating.
                    </p>
                    <p>
                        Over the past 6 years we have executed several award winning trade exhibits for various corporate companies, we will take care of the trade exhibit end-to- end from concept, design execution, complying with regularity needs, collaterals, graphics, manpower etc. We have a dedicated and experienced design and visualizer team with latest 3D CAD software and tools for supporting smooth designing and execution regardless of budget, our clients, ranging from small companies to large multinational companies have found our service exemplary leading to repeat job over the year. No matter what your budget, it we will be able to provide best solution and best services.
                    </p>
                   <p>our design team have made print collaterals like broachers, product catalogue, advertisement material, newsletters,direct mailers training documents etc, making us complete marketing and communication agency,we are one stop shop and rest assured, you will not have to look beyond us for your communicationneeds……….</p>
                    <br>
                    <!--<ul class="icon-list list-unstyled">-->
                    <!--    <li><i class="ion-checkmark-round"></i> Logistics Designed for You</li>-->
                    <!--    <li><i class="ion-checkmark-round"></i> Complete Chain of Custody</li>-->
                    <!--  	<li><i class="ion-checkmark-round"></i> Pickup Facility</li>-->
                        
                    <!--</ul>-->
                </div>
            </div> 

</div>

        <script src="assets/cubeportfolio/js/jquery.cubeportfolio.min.js"></script> 
        <script>
            (function ($, window, document, undefined) {
                'use strict';

                // init cubeportfolio
                $('#js-grid-slider-thumbnail').cubeportfolio({
                    layoutMode: 'slider',
                    drag: true,
                    auto: false,
                    autoTimeout: 5000,
                    autoPauseOnHover: true,
                    showNavigation: false,
                    showPagination: false,
                    rewindNav: true,
                    scrollByPage: true,
                    gridAdjustment: 'responsive',
                    mediaQueries: [{
                            width: 0,
                            cols: 1,
                        }],
                    gapHorizontal: 0,
                    gapVertical: 0,
                    caption: '',
                    displayType: 'fadeIn',
                    displayTypeSpeed: 400,
                    plugins: {
                        slider: {
                            pagination: '#js-pagination-slider',
                            paginationClass: 'cbp-pagination-active',
                        }
                    },
                });
            })(jQuery, window, document);
        </script>


<!-- including Footer secition -->
<?php include('structure/footer.php'); ?>
<!-- End of Footer -->

