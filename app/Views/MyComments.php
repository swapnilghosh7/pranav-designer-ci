<style>
.myCommentsWrapper{
    padding: 100px 0;
}
.quote{
    position: relative;
    top: -80px;
}
.carouselContentWrap{
    padding: 80px 0;
}
.carouselContent{
    display: flex;
}
.carousel-indicators{
    left: auto;
    margin: 0;
}
.carousel-indicators li{
    display: inline-block;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #ccc;
    opacity: 1;
    border: none;
}
.reviewUserNameWrap{
    display: flex;
    text-align: left;
    float: left;
    padding-left: 85px;
    margin-top: 30px;
}
.userNameDesignationWrapper .userName{
    font-size: 26px;
    font-weight: 600;
}
.carousel-indicators .active {
    background: #000;
}
.reviewText{
    font-size: 28px;
    line-height: 40px;
    text-align: left;
}
.userProfileImage{
    height: 65px;
    width: 65px;
    min-width: 65px;
    margin-right: 20px;
    border-radius: 50%;
    border: 2px solid #0025a6;
}
.userProfileImage img{
    height: 100%;
    width: 100%;
    border-radius: 50%;
}
@media(max-width:600px){
    .myCommentsWrapper{
        padding: 50px 0;
    }
    .reviewText {
        line-height: 24px;
        text-align: left;
        font-size: 16px;
    }
    .quote {
        position: relative;
        top: -20px;
        
        display: inline-block;
    }
    .quote img{
        width: 15px;
        height: 40px;
    }
    .reviewUserNameWrap{
        padding-left: 5px;
    }
    .userNameDesignationWrapper .userName{
        font-size: 16px;
    }
    .userDesignation{
        font-size:14px;
    }
    .carousel-indicators{
        display: none;
    }
}
</style>

<div class="myCommentsWrapper">
    <div class="container">
        <div class="myCommentsSection">


            <div id="demo" class="carousel slide" data-ride="carousel">

                <!-- Indicators -->
                <ul class="carousel-indicators">
                <?php foreach($my_comments as $key=>$my_comment){ ?>
                    <li data-target="#demo" data-slide-to="<?php echo $key; ?>" class="<?php echo $key == 0 ? 'active' : ''; ?>"></li>
                <?php } ?>
                </ul>


                <div class="carousel-inner">
                    <?php foreach($my_comments as $key=>$my_comment){
                        $my_comment_array = json_decode(json_encode($my_comment), true);
                        ?>
                    <div class="carousel-item <?php echo $key == 0 ? 'active' : ''; ?>">
                        <div class="myCommentsIconWrapper">
                            <div class="carouselContentWrap">
                                <div class="carouselContent">
                                    <span class="quote"><img src="<?php echo base_url('/assets/images') . '/Quote.svg'; ?>" alt=""/></span>
                                    <div class="reviewText"><?php echo $my_comment_array['my_reviews.text']; ?></div>
                                </div>
                                <div class="reviewUserNameWrap">
                                    <div class="userProfileImage">
                                        <img src="<?php echo base_url('/assets/images/user_img') . '/' .$my_comment_array['my_reviews.user_img']; ?>" alt=""/>
                                    </div>
                                    <div class="userNameDesignationWrapper">
                                        <div class="userName"><?php echo $my_comment_array['my_reviews.name']; ?></div>
                                        <div class="userDesignation"><?php echo $my_comment_array['my_reviews.designation']; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>