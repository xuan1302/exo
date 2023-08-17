<?php
//Template Name: About us
get_header();
$list_active = get_field( "list_item_active" );
$expect_item = get_field("expect_item");
$partner_image = get_field("partner-image");
$profile_list = get_field("profile_list");
$expect_description = get_field("expect-description");
$section_mobile = get_field("section_mobile");
$shortcode_form = get_field( "shortcode_form" );
?>
<div class="template-about-us">
    <div class="content-about-us">
        <section id='about-us'>
            <div class="container">
                <div class="title-primary">
                    <h1>Về NovaBeauty</h1>
                </div>
                <div class="row">
                    <div class="section-left col-xl-5 col-12">
                        <div class="inner">
                            <img class="image-active" src="<?php echo $list_active[0]['icon']['url']?>"/>
                        </div>
                    </div>
                    <div class="section-right col-xl-7 col-12">
                        <nav class="about-us-nav">
                            <ul class="nav-list">
                            <?php
                            if(count($list_active) > 0){
                                foreach($list_active as $item){?>
                                    <li class="list-item" data-img="<?php echo $item['icon']['url']?>">
                                        <span class="title"><?php echo $item['title'] ?></span>
                                        <div class="des">
                                            <p><?php echo $item['description'] ?></p>
                                        </div>
                                    </li>

                            <?php }
                            }?>
                            </ul>
                            <div class="storynav__progress">
                                <span class="storynav__progressline storynav__progressline--dashed"></span>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section id="expert">
            <div class="container expert-container">
                <div class="expect-title">
                    <h1>Hội đồng chuyên gia</h1>
                    <p><?php echo $expect_description ?></p>
                </div>
                <div class="row">
                    <?php
                    if(count($expect_item) > 0){
                        foreach($expect_item as $item){?>
                            <div class="col-xl-4 item">
                                <div class="img">
                                    <img src="<?php echo $item['image']['url']?>" alt=""/>
                                </div>
                                <div class="inner">
                                    <div class="name">
                                        <span><?php echo $item['name'] ?></span>
                                    </div>
                                    <div class="position">
                                        <span><?php echo $item['position'] ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    }?>
                </div>
            </div>
        </section>
        <section id="partner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-12">
                        <div class="partner-title">
                            <h2>Đối tác chiến lược</h2>
                        </div>
                    </div>
                    <div class="col-xl-8 col-12">
                        <div class="container-icon">
                        <?php
                        if(count($partner_image) > 0){
                            foreach($partner_image as $item){?>
                                <div class="contain">
                                    <img src="<?php echo $item['icon']['url']?>" alt=""/>
                                </div>
                            <?php }
                        }?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="profile">
            <div class="container profile-container">
                <div class="profile-title">
                    <h1>Hồ sơ pháp lý</h1>
                </div>
                <div class="row multiple-items">
                        <?php
                        if(count($profile_list) > 0){
                            foreach($profile_list as $item){?>
                                <div class="col-xl-4 item">
                                    <img src="<?php echo $item['img']['url']?>" alt="" />
                                </div>
                            <?php }
                        }?>
                </div>
            </div>
        </section>
        <?php
        if($shortcode_form){ ?>
        <div class="shortcode-form">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <?php
                        echo do_shortcode($shortcode_form);
                        ?>
                    </div>
                </div>
            </div>
    </div>
    <?php }
    ?>
    </div>
</div>
<?php get_footer();
