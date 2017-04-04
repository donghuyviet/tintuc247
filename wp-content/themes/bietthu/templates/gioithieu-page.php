<?php
/*
	Template Name: Giới Thiệu Page


*/
	?>
<?php get_header(); ?>
    <!--CONTAINER-->
    <div class="container">
        <!--BACKGROUND-->
        <div class="bg-page">
            <div class="color-bg">
                <img src="images/xabout.jpg" alt="Background - Giới thiệu"/>
            </div>
        </div>
        <!--BACKGROUND-->
        <div class="center">
            <h2>Giới thiệu</h2>
            <div class="sub-click"></div>
            <div class="sub-nav">
                <ul>
                    <li class=""><a href="" data-name="aboutus2" data-open="1" data-title="Lịch sử hình thành &amp; phát triển | An Gia Investment" data-description="Thành lập vào năm 2008, An Gia Investment là công ty chuyên đầu tư và phát triển các dự án nhà ở, căn hộ tập trung tại TP.HCM, Phan Thiết, Đồng Nai.">Lịch sử hình thành và phát triển</a>
                    </li>
                    <li><a href="" data-name="aboutus4" data-open="2" data-title="Tầm nhìn - Sứ mệnh - giá trị cốt lõi" data-description="" data-keyword="">Tầm nhìn - Sứ mệnh - giá trị cốt lõi</a>
                    </li>
                    <li><a href="" data-name="aboutus11" data-open="3" data-title="Nguyên tắc hoạt động" data-description="" data-keyword="">Nguyên tắc hoạt động</a>
                    </li>
                    <li><a href="" data-name="aboutus8" data-open="4" data-title="Đối tác chiến lược" data-description="" data-keyword="">Đối tác chiến lược</a>
                    </li>
                </ul>
            </div>
            <div class="content-page">
                <div class="box-content">
                    <div class="colum-box active" id="1">
                        <div class="about-box select">
                            <h3><?php $tt = cs_get_option("box_lichsu"); echo $tt['title_ls'] ;?></h3>
                            <div class="scrollA">
                                <div class="pic-right">
                                    <img src="<?php $image_id = cs_get_option( 'box_lichsu' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_ls'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="Lịch sử hình thành và phát triển">
                                </div>
                                <div class="content history">
                                    <?php $ct = cs_get_option("box_lichsu"); echo $ct['content_ls'] ;?>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white"></div>
                    </div>
                    <div class="colum-box" id="2">
                        <div class="about-box">
                            <h3><?php $tt = cs_get_option("box_tamnhin"); echo $tt['titlebox_tn'] ;?></h3>
                            <div class="scrollA">
                                <div class="content">
                                    <div class="left-col">
                                        <div class="circle-pic">
                                            <img src="<?php $image_id = cs_get_option( 'box_tamnhin' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_ts'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="TẦM NHÌN">

                                        </div>
                                        <div class="text-value">
                                            <p><strong><?php $tt = cs_get_option("box_tamnhin"); echo $tt['title_tn'] ;?></strong>
                                            </p>
                                            <p><?php $ct = cs_get_option("box_tamnhin"); echo $ct['content_ts'] ;?></p>
                                        </div>
                                    </div>
                                    <div class="right-col">
                                        <div class="circle-pic">
                                            <img src="<?php $image_id = cs_get_option( 'box_tamnhin' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_sm'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="SỨ MỆNH">
                                        </div>
                                        <div class="text-value">
                                            <p><strong><?php $tt = cs_get_option("box_tamnhin"); echo $tt['title_sm'] ;?></strong>
                                            </p>
                                            <p><?php $ct = cs_get_option("box_tamnhin"); echo $ct['content_sm'] ;?></p>
                                        </div>
                                    </div>
                                    <div class="center-col">
                                        <div class="circle-pic">
                                            <img src="<?php $image_id = cs_get_option( 'box_tamnhin' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_gt'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="GIÁ TRỊ CỐT LÕI">
                                        </div>
                                        <div class="text-value">
                                            <p><strong><?php $tt = cs_get_option("box_tamnhin"); echo $tt['title_gt'] ;?></strong>
                                            </p>
                                            <?php $ct = cs_get_option("box_tamnhin"); echo $ct['content_gt'] ;?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white"></div>
                    </div>
                    <div class="colum-box" id="3">
                        <div class="about-box">
                            <h3><?php $tt = cs_get_option("box_nguyentac"); echo $tt['title_nt'] ;?></h3>
                            <div class="scrollA">
                                <div class="pic-right">
                                    <img src="<?php $image_id = cs_get_option( 'box_nguyentac' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_nt'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="Nguyên tắc hoạt động" >
                                </div>
                                <div class="content history">
                                    <?php $ct = cs_get_option("box_nguyentac"); echo $ct['content_nt'] ;?>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white"></div>
                    </div>
                    <div class="colum-box" id="4">
                        <div class="about-box">
                            <h3 class="text-center">Đối tác chiến lược</h3>
                            <div class="scrollA">
                                <div class="partner-top">
                                    <div class="partner-name"><?php $ct = cs_get_option("box_doitac"); echo $ct['title_dt'] ;?></div>
                                    <ul>
                                        <li><img src="<?php $image_id = cs_get_option( 'box_doitac' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_dt'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="Đối tác chiến lược">
                                        </li>
                                        <li><img src="<?php $image_id = cs_get_option( 'box_doitac' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_dt2'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="Đối tác chiến lược">
                                        </li>
                                        <li><img src="<?php $image_id = cs_get_option( 'box_doitac' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_dt3'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="Đối tác chiến lược">
                                        </li>
                                        <li><img src="<?php $image_id = cs_get_option( 'box_doitac' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_dt4'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="Đối tác chiến lược">
                                        </li>
                                    </ul>
                                </div>
                                <div class="partner-bottom">
                                    <div class="partner-name"><?php $ct = cs_get_option("box_doitac"); echo $ct['title_nh'] ;?></div>
                                    <ul>
                                        <li><img src="<?php $image_id = cs_get_option( 'box_doitac' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_nh'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="Đối tác chiến lược">
                                        </li>
                                        <li><img src="<?php $image_id = cs_get_option( 'box_doitac' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_nh2'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="Đối tác chiến lược">
                                        </li>
                                    </ul>
                                </div>
                                <div class="partner-top">
                                    <div class="partner-name"><?php $ct = cs_get_option("box_doitac"); echo $ct['title_xd'] ;?></div>
                                    <ul>
                                        <li><img src="<?php $image_id = cs_get_option( 'box_doitac' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_xd'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="Đối tác chiến lược">
                                        </li>
                                        <li><img src="<?php $image_id = cs_get_option( 'box_doitac' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_xd2'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="Đối tác chiến lược">
                                        </li>
                                        <li><img src="<?php $image_id = cs_get_option( 'box_doitac' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_xd3'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="Đối tác chiến lược">
                                        </li>
                                        <li><img src="<?php $image_id = cs_get_option( 'box_doitac' );
                                        $attachment = wp_get_attachment_image_src( $image_id['image_xd4'], 'full' );
                                        echo $attachment[0] ;
                                        ?>" alt="Đối tác chiến lược">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white pattern-02"></div>
                    </div>
                </div>
            </div>
        </div>
        <!--CENTER-->
        <!--BOTTOM-->
      
        <!--BOTTOM-->  
   <?php get_footer(); ?>