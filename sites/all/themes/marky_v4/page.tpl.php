<!-- Page Stuffs -->
<div class="container">
        <div class="masthead">
            <div class="">
                <h1><?php print $site_name; ?></h1>
            </div>
        </div>
       <div class="row">
           <?php print $main_menu; ?>  
       </div>
        <!-- Content Top -->
        <div class="row">

            <div class="col-lg-12">
                <?php print $page['featured']; ?>
            </div>
        </div>
        <!-- Updates -->
        <div class="row">
            <div class="col-lg-6">
                <?php print $page['midpage_left']; ?>
            </div>
            <div class="col-lg-6">
                <?php print $page['midpage_right']; ?>
            </div>
        </div>
       <!-- Content Summeries -->
        <div class="row">
            <div style="height: 300px;" class="col-lg-4">
                <?php print $page['triptych_first']; ?>
            </div>
            <div style="height: 300px;" class="col-lg-4">
                <?php print $page['triptych_second']; ?>
            </div>
            <div style="height: 300px;" class="col-lg-4">
                <?php print $page['triptych_third']; ?>
            </div>
        </div>
        <!-- Footer -->
        <div class="row">
            <?php print $page['footer']; ?>
            <span>Copyright (c) Mark Simpson 2011</span>
        </div>
    </div>
