<style>
.myClientsWrapper{
    margin: 60px 0;
}
.myClientSection{
    padding: 35px 0;
}
.myClientHeadingMainWrapper{
    display: flex;
    justify-content: center;
}
.myClientHeadingWrapper{
    position: relative;
    display: inline-block;
    /* justify-content: center; */
    padding: 0 25px;
}
.myClientIconWrapper{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 35px auto;
    max-width: 1300px;
}
.myClientIconWrap{
    margin: 20px 0;
    min-width: 300px;
    text-align:center;
}
.myClientIconWrap img{
    max-width: 100%;
}
.myClientHeading{
    font-size: 32px;
    font-weight: 700;
    color: #0025a6;
}
.myClientStroke{
    height: 5px;
    background: #e0e4f4;
    position: absolute;
    width: 100%;
    top: 50%;
    left: 0;
    z-index: -1;
    transform: translate(0, -50%);
}
@media(max-width:600px){
    .myClientIconWrap{
        width:100%;
        max-width:100%;
        min-width: auto;
        text-align:center;
    }
}
</style>

<div class="myClientsWrapper">
    <div class="container">
    <div class="myClientSection">
        <div class="myClientHeadingMainWrapper">
            <div class="myClientHeadingWrapper">
                <div class="myClientStroke"></div>
                <h4 class="myClientHeading">I have been fortunate to work for</h4>
            </div>
        </div>

        <div class="myClientIconWrapper">
            <?php foreach($brand_icons as $brand_icon){
                $brand_icon_array = json_decode(json_encode($brand_icon), true);
            ?>
                <div class="myClientIconWrap">
                    <img src="<?php echo base_url('/assets/images/brandIcons') . '/' .$brand_icon_array['brand.img']; ?>" alt="" class="myClientIconImg"/>
                </div>
            <?php } ?>
        </div>
    </div>
    </div>
</div>