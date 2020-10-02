
<?php //print_r($banners); ?>
<div class="homePageWrapper">
    <!-- I am Pranav section -->
    <?php echo view('IMPranav'); ?>
    <!-- I am Pranav section End -->

    <!-- Banner Section -->
    <?php $view_data['banners'] =  $banners;
    echo view('BannerSection',$view_data); ?>
    <!-- Banner Section End-->

    <?php $view_data['brand_icons'] =  $brand_icons;
    echo view('MyClients',$view_data); ?>
    
    <!-- My comments Section -->
    <?php $view_data['my_comments'] =  $my_comments;
    echo view('MyComments',$view_data); ?>
    <!-- My comments Section End -->
</div>

