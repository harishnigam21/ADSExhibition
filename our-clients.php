<!-- including header secition -->
<?php
$title="Our Clients || ADS Exhibition";
$dir="clients";
 include('structure/header.php'); ?>
<!-- End of Header -->
        <link href="assets/cubeportfolio/css/cubeportfolio.min.css" rel='stylesheet'>
<!-- including Menu secition -->
<?php include('structure/menu.php'); ?>
<!-- End of Menu -->

<!-- CODE HERE -->

 <section id="content-region-3" class="padding-40 page-tree-bg">
            <div class="container">
                <h3 class="page-tree-text">
                Our Clients
                </h3>
            </div>
        </section><!--page-tree end here-->

        <div class="space-70"></div>
        <div class="container">
        <div id="js-grid-awesome-work" class="cbp cbp-l-grid-work">
            <div class="cbp-item identity">
                <span class="cbp-caption" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img/clients/cl1.png" alt="BRAIN CHILD">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </span >
                <span class="cbp-l-grid-work-title" rel="nofollow">BRAIN CHILD</span >
            </div>
            
            <div class="cbp-item identity">
                <span class="cbp-caption" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img/clients/cl2.png" alt="STEEL BIRD">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </span >
                <span class="cbp-l-grid-work-title" rel="nofollow">STEEL BIRD</span >
            </div>
            
            <div class="cbp-item identity">
                <span class="cbp-caption" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img/clients/cl3.png" alt="BRICK SPACE">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </span >
                <span class="cbp-l-grid-work-title" rel="nofollow">BRICK SPACE</span >
            </div>
            
            <div class="cbp-item identity">
                <span class="cbp-caption" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img/clients/cl4.png" alt="SAMARIKA PHARMA">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </span >
                <span class="cbp-l-grid-work-title" rel="nofollow">SAMARIKA PHARMA</span >
            </div>
            
            <div class="cbp-item identity">
                <span class="cbp-caption" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img/clients/cl5.png" alt="NEW MAX INDUSTRIES">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </span >
                <span class="cbp-l-grid-work-title" rel="nofollow">NEW MAX INDUSTRIES</span >
            </div>
            
            <div class="cbp-item identity">
                <span class="cbp-caption" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img/clients/cl6.png" alt="RAJAT OVERSEAS">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </span >
                <span class="cbp-l-grid-work-title" rel="nofollow">RAJAT OVERSEAS</span >
            </div>
            
            <div class="cbp-item identity">
                <span class="cbp-caption" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img/clients/cl7.png" alt="BANDHINI HOME">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </span >
                <span class="cbp-l-grid-work-title" rel="nofollow">BANDHINI HOME</span >
            </div>
            
            <div class="cbp-item identity">
                <span class="cbp-caption" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img/clients/cl8.png" alt="SEGEL INDIA">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </span >
                <span class="cbp-l-grid-work-title" rel="nofollow">SEGEL INDIA</span >
            </div>
            
            <div class="cbp-item identity">
                <span class="cbp-caption" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img/clients/cl9.png" alt="FAIRTRADE NAAP">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </span >
                <span class="cbp-l-grid-work-title" rel="nofollow">FAIRTRADE NAAP</span >
            </div>
            
            <div class="cbp-item identity">
                <span class="cbp-caption" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img/clients/cl10.png" alt="PANEMOR">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </span >
                <span class="cbp-l-grid-work-title" rel="nofollow">PANEMOR</span >
            </div>
            
            <div class="cbp-item identity">
                <span class="cbp-caption" rel="nofollow">
                    <div class="cbp-caption-defaultWrap">
                        <img src="assets/img/clients/cl11.png" alt="IDM">
                    </div>
                    <div class="cbp-caption-activeWrap"></div>
                </span >
                <span class="cbp-l-grid-work-title" rel="nofollow">IDM</span >
            </div>
            
            

           
            
            
        </div><!--/portfolio-->
        </div>
         <div class="space-70"></div>



<!-- including Footer secition -->
<?php include('structure/footer.php'); ?>
<!-- End of Footer -->

<script src="assets/js/plugins/plugins.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/cubeportfolio/js/jquery.cubeportfolio.min.js"></script> 
        <script>
            (function ($, window, document, undefined) {
                'use strict';

                // init cubeportfolio
                $('#js-grid-awesome-work').cubeportfolio({
                    filters: '#js-filters-awesome-work',
                    layoutMode: 'grid',
                    defaultFilter: '*',
                    animationType: 'scaleSides',
                    gapHorizontal: 0,
                    gapVertical: 0,
                    gridAdjustment: 'responsive',
                    mediaQueries: [{
                            width: 1500,
                            cols: 4
                        }, {
                            width: 1100,
                            cols: 3
                        }, {
                            width: 480,
                            cols: 2,
                            options: {
                                gapHorizontal: 15,
                                gapVertical: 15
                            }
                        }],
                    caption: 'zoom',
                    displayType: 'fadeIn',
                    displayTypeSpeed: 400,
                    // singlePage popup
                    singlePageDelegate: '.cbp-singlePage',
                    singlePageDeeplinking: true,
                    singlePageStickyNavigation: true,
                    singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>'
                });
            })(jQuery, window, document);
        </script>
    </body>
