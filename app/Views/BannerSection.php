<style>
.bannerSectionImageWrapper img{
    max-width: 100%;
}
.bannerSectionImageTag{
    width: 100%;
}
/* ----Media Query------- */
@media (max-width: 992px){
    .imPravanImgBox{
        display: none;
    }
    .imPranavImageTag{
        max-width: 100%;
    }
  }
</style>
<div class="bannerSectionContainerWrapper">
    <div class="container">
    <div class="bannerSectionWrapper">
        <div class="bannerSectionTextWrapper">
        <div class="sectionBannerImageWrapper">
            <?php foreach($banners as $banner){
                $bannerarray = json_decode(json_encode($banner), true);
                ?>
                
                <div class="bannerSectionImageWrapper">
                    <div class="bannerSectionImage">
                        <img class="bannerSectionImageTag w-100 mw-100" src="<?php echo base_url('/assets/images/banners') . '/' . $bannerarray['image_name']; ?>" alt=""/>
                    </div>                 
                </div>
               
            <?php } ?>
        </div>
        </div>
        
    </div>
    </div>
</div>