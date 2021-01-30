<?php
include('db.php');
?>
<!DOCTYPE html>
<html lang="en-US" data-menu="classicmenu">
<head>

    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <link rel="shortcut icon" href="upload/logo.jpg"/>

    <title>Văn hóa ẩm thực</title>

    <link rel='stylesheet' href='css/settings.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/reset.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/wordpress.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/animation.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/magnific-popup.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/ui-custom.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/mediaelementplayer-legacy.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/flexslider.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/tooltipster.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/odometer-theme-minimal.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/hw-parallax.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/screen.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/kirki-styles.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/grid.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='css/style.css' type='text/css' media='all'/>

    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Playfair+Display%3A400%2C700%2C400italic&#038;subset=latin%2Ccyrillic-ext%2Cgreek-ext%2Ccyrillic' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%3A100%2C200%2C300%2C400%2C600%2C700%2C800%2C900%2C400italic&#038;subset=latin%2Ccyrillic-ext%2Cgreek-ext%2Ccyrillic' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Kristi%3A100%2C200%2C300%2C400%2C600%2C700%2C800%2C900%2C400italic&#038;subset=latin%2Ccyrillic-ext%2Cgreek-ext%2Ccyrillic' type='text/css' media='all'/>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Lato%7CKristi&#038;subset' type='text/css' media='all'/>
    <link href="http://fonts.googleapis.com/css?family=Kristi:400%7CLato:300%2C400" rel="stylesheet" property="stylesheet" type="text/css" media="all">

</head>

<body class="home page-template-default page page-id-2 woocommerce-no-js">

    <input type="hidden" id="pp_menu_layout" name="pp_menu_layout" value="classicmenu"/>
    <input type="hidden" id="pp_enable_right_click" name="pp_enable_right_click" value=""/>
    <input type="hidden" id="pp_enable_dragging" name="pp_enable_dragging" value=""/>
    <input type="hidden" id="pp_image_path" name="pp_image_path" value="images/"/>
    <input type="hidden" id="pp_homepage_url" name="pp_homepage_url" value="index.html"/>
    <input type="hidden" id="pp_ajax_search" name="pp_ajax_search" value="1"/>
    <input type="hidden" id="pp_fixed_menu" name="pp_fixed_menu" value="1"/>
    <input type="hidden" id="pp_topbar" name="pp_topbar" value="1"/>
    <input type="hidden" id="post_client_column" name="post_client_column" value="4"/>
    <input type="hidden" id="pp_back" name="pp_back" value="Back"/>
    <input type="hidden" id="pp_page_title_img_blur" name="pp_page_title_img_blur" value="1"/>
    <input type="hidden" id="tg_project_filterable_link" name="tg_project_filterable_link" value=""/>
    <input type="hidden" id="pp_reservation_start_time" name="pp_reservation_start_time" value="11:00"/>
    <input type="hidden" id="pp_reservation_end_time" name="pp_reservation_end_time" value="21:00"/>
    <input type="hidden" id="pp_reservation_time_step" name="pp_reservation_time_step" value="30"/>
    <input type="hidden" id="pp_reservation_date_format" name="pp_reservation_date_format" value="mm/dd/yy"/>
    <input type="hidden" id="pp_footer_style" name="pp_footer_style" value="4"/>

    <!-- Begin mobile menu -->
    <div class="mobile_menu_wrapper">
        <a id="close_mobile_menu" href="javascript:;"><i class="fa fa-close"></i></a>
        <form role="search" method="get" name="searchform" id="searchform" action="#">
            <div>
                <input type="text" value="" name="s" id="s" autocomplete="off" placeholder="Search..."/>
                <button>
                <i class="fa fa-search"></i>
                </button>
            </div>
            <div id="autocomplete">
            </div>
        </form>
        <div class="menu-side-menu-container">
            <ul id="mobile_main_menu" class="mobile_main_nav">
                <li class="menu-item"><a href="index.html">Trang chủ</a>
               
                </li>
                <li class="menu-item menu-item-has-children"><a href="our-menu-mixed.html">Thực đơn</a>
                <ul class="sub-menu">
                    <li class="menu-item"><a href="our-menu-classic.html">Khuyến mãi</a></li>
                </ul>
               
            </ul>
        </div>
        <!-- Begin Reservation -->
        <a href="javascript:;" id="tg_sidemenu_reservation" class="button ">Đặt bàn</a>
        <!-- End Reservation -->
        <!-- Begin side menu sidebar -->
        <div class="page_content_wrapper">
            <div class="sidebar_wrapper">
                <div class="sidebar">
                    <div class="content">
                        <ul class="sidebar_widget">
                            <li id="custom_flickr-7" class="widget Custom_Flickr">
                            <h2 class="widgettitle"></h2>
                            <ul class="flickr">
                                <li>
                                <a class="img_frame" target="_blank" href="upload/47015511494_a45979912a_b.jpg" title="roasted rhubarb with yogurt, mint, pistachio"><img src="upload/47015511494_a45979912a_s.jpg" alt="roasted rhubarb with yogurt, mint, pistachio" width="75" height="75"/></a>
                                </li>
                                <li>
                                <a class="img_frame" target="_blank" href="upload/46968818334_b4bb23dc19_b.jpg" title="radish pod and tomato salad"><img src="upload/46968818334_b4bb23dc19_s.jpg" alt="radish pod and tomato salad" width="75" height="75"/></a>
                                </li>
                                <li>
                                <a class="img_frame" target="_blank" href="upload/40747094363_16c3b23b2f_b.jpg" title="macarons and tea"><img src="upload/40747094363_16c3b23b2f_s.jpg" alt="macarons and tea" width="75" height="75"/></a>
                                </li>
                                <li>
                                <a class="img_frame" target="_blank" href="upload/33827445818_dac37b2303_b.jpg" title="macaron- commercial &amp; editorial"><img src="upload/33827445818_dac37b2303_s.jpg" alt="macaron- commercial &amp; editorial" width="75" height="75"/></a>
                                </li>
                                <li>
                                <a class="img_frame" target="_blank" href="upload/40713766323_618893a490_b.jpg" title="tomato with (thick) soy sauce, sugar and grated ginger"><img src="upload/40713766323_618893a490_s.jpg" alt="tomato with (thick) soy sauce, sugar and grated ginger" width="75" height="75"/></a>
                                </li>
                                <li>
                                <a class="img_frame" target="_blank" href="upload/46721156475_f02fc75334_b.jpg" title="summer corn soup"><img src="upload/46721156475_f02fc75334_s.jpg" alt="summer corn soup" width="75" height="75"/></a>
                                </li>
                                <li>
                                <a class="img_frame" target="_blank" href="upload/47631045331_46341532c8_b.jpg" title="roasted sweet potato"><img src="upload/47631045331_46341532c8_s.jpg" alt="roasted sweet potato" width="75" height="75"/></a>
                                </li>
                                <li>
                                <a class="img_frame" target="_blank" href="upload/46670903915_a22e6c2472_b.jpg" title="tea eggs"><img src="upload/46670903915_a22e6c2472_s.jpg" alt="tea eggs" width="75" height="75"/></a>
                                </li>
                            </ul>
                            <br class="clear"/>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End side menu sidebar -->
    </div>
    <!-- End mobile menu -->
    <!-- Begin template wrapper -->
    <div id="wrapper" class="hasbg">
        <div class="header_style_wrapper">
            <!-- Begin top bar -->
            <div class="above_top_bar">
                <div class="page_content_wrapper">
                    <div class="social_wrapper">
                        <ul>
                            <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a target="_blank" href="http://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                            <li class="youtube"><a target="_blank" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="pinterest"><a target="_blank" title="Pinterest" href="http://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="instagram"><a target="_blank" title="Instagram" href="http://instagram.com/#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="extend_top_contact_info top_contact_info">
                        <span id="top_contact_address"><i class="fa fa-map-marker"></i>Trần Đại Nghĩa, Hòa Qúy, Ngũ hành Sơn, TP Đà Nẵng</span>
                        <span id="top_contact_number"><a href="tel:+65.4566743"><i class="fa fa-phone"></i>+0378.797979</a></span>
                    </div>
                </div>
            </div>
            <!-- End top bar -->
            <div class="top_bar hasbg">
                <div id="menu_wrapper">
                    <!-- Begin logo -->
                    <div id="logo_normal" class="logo_container">
                        <div class="logo_align">
                            <a id="custom_logo" class="logo_wrapper hidden" href="index.html">
                            </a>
                        </div>
                    </div>
                    <div id="logo_transparent" class="logo_container">
                        <div class="logo_align">
                            <a id="custom_logo_transparent" class="logo_wrapper default" href="index.html">
                            <img src="upload/logonho.jpg" alt="Grand Restaurant | Restaurant Theme" width="100" height="100" style="width:101px;height:34px;"/>
                            </a>
                        </div>
                    </div>
                    <!-- End logo -->
                    <!-- Begin side menu button -->
                    <div class="menu_buttons_container">
                        <div class="menu_buttons_content">
                            <!-- Begin Reservation -->
                            <a href="javascript:;" id="tg_reservation" class="button ">Đặt bàn</a>
                            <!-- End Reservation -->
                            <!-- Begin side menu -->
                            <a href="javascript:;" id="mobile_nav_icon"></a>
                            <!-- End side menu -->
                        </div>
                    </div>
                    <!-- End side menu button -->
                    <!-- Begin main nav -->
                    <div id="nav_wrapper">
                        <div class="nav_wrapper_inner">
                            <div id="menu_border_wrapper">
                                <div class="menu-main-menu-container">
                                    <ul id="main_menu" class="nav">
                                        <li class="menu-item"><a href="index.php">Trang chủ</a>
                                        
                                        </li>
                                        <li class="menu-item menu-item-has-children arrow"><a href="#">Thực đơn</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="a_menu.php">Menu</a></li>
                                        </ul>
                                        </li>
                                        <li class="megamenu col3 menu-item menu-item-has-children arrow "><a href="#">Thông tin</a>
                                        <ul class="sub-menu">
                                            <li class="menu-item"><a href="a_video.php">Video</a></li>
                                            </li>
                                            <li class="menu-item"><a href="a_contact.php">Đóng góp ý kiến</a></li>
                                            </li>
                                            <li class="menu-item"><a href="a_mapdiachinhahang.php">Map nhà hàng</a></li>
                                        </li>
                                        </ul>
                                        </li>
                                        <li class="menu-item"><a href="a_khuyenmai.php">Khuyến mãi</a></li>
                                        <li class="menu-item"><a href="a_vanhoaamthuc.php">Văn hóa ẩm thực</a></li>
                                       
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End main nav -->
                </div>
            </div>
        </div>
        <div id="reservation_wrapper">
            <div class="reservation_content">
                <div class="reservation_form">
                    <div class="reservation_form_wrapper">
                        <a id="reservation_cancel_btn" href="javascript:;"><i class="fa fa-close"></i></a>
                        <div id="reponse_msg">
                            <ul>
                            </ul>
                        </div>
                        <form action="" method="post">
                            <input type="hidden" id="action" name="action" value="tg_reservation_mailer"/>
                            <div class="one_third">
                                <label for="your_name">Họ tên*</label>
                                <input id="your_name" name="your_name" type="text" class="required_field"/>
                            </div>
                            <div class="one_third">
                                <label for="email">Email*</label>
                                <input id="email" name="email" type="text" class="required_field"/>
                            </div>
                            <div class="one_third last">
                                <label for="phone">SĐT*</label>
                                <input id="phone" name="phone" type="text" class="required_field"/>
                            </div>
                            <br class="clear"/>
                            <br/>
                            <div class="one_third">
                                <label for="date" class="hidden">Ngày*</label>
                                <input type="text" class="pp_date required_field" id="date" name="date" value="05/10/2019">
                            </div>
                            <div class="one_third">
                                <label for="time">Thời gian*</label>
                                <input type="text" class="pp_time required_field" id="time" name="time" value="06:00 PM"/>
                            </div>
                            <div class="one_third last">
                                <label for="seats">Số lượng người*</label>
                                <select id="seats" name="seats" class="required_field" style="width:99%">
                                    <option value="1">1 người</option>
                                    <option value="2">2 người</option>
                                    <option value="3">3 người</option>
                                    <option value="4">4 người</option>
                                    <option value="5">5 người</option>
                                    <option value="6">6 người</option>
                                    <option value="7">7 người</option>
                                    <option value="8">8 người</option>
                                    <option value="9">9 người</option>
                                    <option value="10">10 người</option>
                                    <option value="11">11 người</option>
                                    <option value="12">12 người</option>
                                    <option value="13">13 người</option>
                                    <option value="14">14 người</option>
                                    <option value="15">15 người</option>
                                    <option value="16">16 người</option>
                                    <option value="17">17 người</option>
                                    <option value="18">18 người</option>
                                    <option value="19">19 người</option>
                                    <option value="20">20+ người</option>
                                </select>
                            </div>
                            <br class="clear"/>
                            <br/>
                            <div class="one">
                                <label for="message">Nội dung*</label>
                                <textarea id="message" name="message" rows="7" cols="10"></textarea>
                            </div>
                            <br class="clear"/>
                            <br/>
                            <div class="one">
                                <p>
                                    <input id="reservation_submit_btn" name="datban" type="submit" value="Đặt bàn"/>
                                </p>
                            </div>
                            <br class="clear"/>
                        </form>
                    </div>
                </div>
            </div>
            <div class="parallax_overlay_header">
            </div>
        </div>

        <div class="ppb_wrapper ">
            <div class="one fullwidth ">
                <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-source="gallery" style="background:#262626;padding:0px;">
                    <!-- START REVOLUTION SLIDER 5.4.8 fullscreen mode -->
                    <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.8">
                        <ul>
                            <!-- SLIDE  -->
                            <li data-index="rs-1" data-transition="zoomin" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="upload/slide1_bg-100x50.jpg" data-rotate="0" data-saveperformance="on" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="upload/HELLO.jpg" alt="" title="slide1_bg" width="1300" height="867" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption title-first-word tp-resizeme" id="slide-1-layer-1" data-x="90" data-y="center" data-voffset="20" data-width="auto" data-height="auto" data-type="text" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":300,"to":"","delay":450,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"auto:auto;","ease":"nothing"}]' data-textalign="['','','','']" style="z-index: 5; white-space: nowrap;text-transform:left;">
                                Welcome to
                            </div>
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption title tp-resizeme" id="slide-1-layer-2" data-x="90" data-y="center" data-voffset="80" data-width="auto" data-height="auto" data-type="text" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":300,"to":"","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"auto:auto;","ease":"nothing"}]' data-textalign="['','','','']" style="z-index: 6; white-space: nowrap; color: #ffffff;text-transform:left;">
                                <strong>Seafood VANTINH</strong>
                            </div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption sub-title tp-resizeme" id="slide-1-layer-3" data-x="90" data-y="center" data-voffset="150" data-width="auto" data-height="auto" data-type="text" data-responsive_offset="on" data-frames='[{"from":"opacity:0;","speed":300,"to":"","delay":500,"ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"to":"auto:auto;","ease":"nothing"}]' data-textalign="['','','','']" style="z-index: 7; white-space: nowrap; color: #ffffff;text-transform:left;">
                                Ăn cực ngon, giá cực rẻ
                            </div>
                            </li>
                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;">
                        </div>
                    </div>

                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
            <div class="one withsmallpadding ppb_text" style="text-align:center;padding-bottom:0 !important;padding:50px 0 50px 0;">
                <div class="standard_wrapper">
                    <div class="page_content_wrapper">
                        <div class="inner">
                            <div style="margin:auto;width:60%">
                            </p>
                            <div style="font-size:30px;text-transform:uppercase;letter-spacing:-1px;font-weight:300;">
                                <h2 class="ppb_title"><span class="ppb_title_first">Văn hóa</span></h2> 
                            </div>
                            <h2><strong><u>Ẩm thực</u></strong></h2>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div id="page_content_wrapper" class="hasbg withtopbar ">
            <div class="inner">
    
                <!-- Begin main content -->
                <div class="inner_wrapper">
    
                    <div class="page_content_wrapper"></div>
                    <div class="sidebar_wrapper  left_sidebar">
    
                        <div class="sidebar_top"></div>
    
                        <div class="sidebar">
    
                            <div class="content">
    
                                <ul class="sidebar_widget">
                                    <li id="text-3" class="widget widget_text">
                                        <h2 class="widgettitle"><u>Về chúng tôi</u></h2>
                                        <div class="textwidget">
                                            <p>Bước sang năm 2021, Hải sản VT tiếp tục mở rộng cơ sở trên khắp các quận thành với sự ra đời của cơ sở 8 tại 60 Vũ Trọng Khánh vào ngày 16/5. Mang hơi thở và tâm hồn của biển cùng sự biến tấu mới mẻ, Thế Giới Hải Sản 60 Vũ Trọng Khánh là chốn bình yên, an nhiên, tịnh tại cho những người yêu biển, yêu thủ đô và yêu thích những món ăn chế biến từ hải sản.

                                            </p>
                                        </div>
                                    </li>
                                    <li id="categories-3" class="widget widget_categories">
                                        <h2 class="widgettitle"><u>Các loại</u></h2>
                                        <ul>
                                            <li class="cat-item cat-item-17"><a href="#">Đồ uống</a> (1)
                                            </li>
                                            <li class="cat-item cat-item-12"><a href="#">Hải sản</a> (3)
                                            </li>
                                            <li class="cat-item cat-item-8"><a href="#">Món truyền thống</a> (2)
                                            </li>
                                            <li class="cat-item cat-item-9"><a href="#">Món hiện đại</a> (1)
                                            
                                        </ul>
                                    </li>
                                    <li id="tag_cloud-2" class="widget widget_tag_cloud">
                                        <h2 class="widgettitle">Tags</h2>
                                        <div class="tagcloud">
                                            <a href="#" class="tag-cloud-link tag-link-23 tag-link-position-1" style="font-size: 13px;">doan</a>
                                            <a href="#" class="tag-cloud-link tag-link-24 tag-link-position-2" style="font-size: 13px;">haisan</a>
                                            <a href="#" class="tag-cloud-link tag-link-25 tag-link-position-3" style="font-size: 13px;">thegioihaisan</a>
                                            <a href="#" class="tag-cloud-link tag-link-20 tag-link-position-4" style="font-size: 13px;">anngon</a>
                                            <a href="#" class="tag-cloud-link tag-link-26 tag-link-position-5" style="font-size: 13px;">giare</a>
                                            <a href="#" class="tag-cloud-link tag-link-22 tag-link-position-6" style="font-size: 13px;">tomhung</a>
                                            <a href="#" class="tag-cloud-link tag-link-21 tag-link-position-7" style="font-size: 13px;">cuahoangde</a></div>
                                    </li>
                                    
                                </ul>
    
                            </div>
    
                        </div>
                        <br class="clear" />
    
                        <div class="sidebar_bottom"></div>
                    </div>
    
                    <div class="sidebar_content  left_sidebar">
    
                        <!-- Begin each blog post -->
                        <div id="post-490" class="post-490 post type-post status-publish format-standard has-post-thumbnail hentry category-italine tag-recipe tag-shrimp tag-spaghetti">
    
                            <div class="post_wrapper">
    
                                <div class="post_content_wrapper">
    
                                    <div class="post_header">
                                        <div class="post_header_title">
                                            <h5><a href="#" title="Black Spaghetti with Rock Shrimp">Sashimi Chúa tể biển khơi thanh mát giữa nắng hè</a></h5>
                                            <div class="post_detail">

                                            </div>
                                        </div>
    
                                        <div class="post_img static">
                                            <img src="upload/suri1.jpg" alt="" class="" style="width:960px;height:365px;" />
                                        </div>
    
                                        <br class="clear" />
    
                                        <p>Được chế biến từ nguồn nguyên liệu đang bơi như: Cá hồi, tu hài, sò dương, bào ngư xanh và đặc biệt được thổi hồn bởi nguyên liệu Tôm hùm Canada hay Tôm hùm bông đã nâng tầm giá trị cho món ăn. Sự xuất hiện của Tôm hùm Canada hay Tôm hùm bông giống như “ chìa khóa” mở cửa trái tim thực khách đối với set Sashimi Chúa tể biển khơi này.</p>
                                    </div>
                                    <div class="post_share_bubble">
                                        <div class="post_share_bubble_wrapper">
                                            <div id="share_post_490" class="social_share_bubble inline">
                                                <ul>
                                                    <li><a title="Share On Facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="Share On Twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="Share On Pinterest" target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a title="Share On Google+" target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="post_share" data-share="share_post_490" data-parent="post-490"><i class="fa fa-share-alt"></i></a>
                                    </div>
    
                                </div>
    
                            </div>
    
                        </div>
                        <br class="clear" />
                        <!-- End each blog post -->
    
                        <!-- Begin each blog post -->
                        <div id="post-490" class="post-490 post type-post status-publish format-standard has-post-thumbnail hentry category-italine tag-recipe tag-shrimp tag-spaghetti">
    
                            <div class="post_wrapper">
    
                                <div class="post_content_wrapper">
    
                                    <div class="post_header">
                                        <div class="post_header_title">
                                            <h5><a href="#" title="Black Spaghetti with Rock Shrimp">Sashimi hải sản thanh mát ngày hè</a></h5>
                                            <div class="post_detail">

                                            </div>
                                        </div>
    
                                        <div class="post_img static">
                                            <img src="upload/suri2.jpg" alt="" class="" style="width:960px;height:365px;" />
                                        </div>
    
                                        <br class="clear" />
    
                                        <p>Sashimi là món ăn sống được chế biến từ các loại hải sản tươi ngon. Trong văn hoá ẩm thực Nhật Bản, người Nhật cho rằng Sashimi là món ăn tượng trưng cho sự tinh tế, may mắn và hạnh phúc. Bên cạnh đó, Sashimi là hình thức chế biến giữ được độ thanh mát, trọn vị tươi ngon thuần khiết nhất.</p>
                                    </div>
                                    <div class="post_share_bubble">
                                        <div class="post_share_bubble_wrapper">
                                            <div id="share_post_490" class="social_share_bubble inline">
                                                <ul>
                                                    <li><a title="Share On Facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="Share On Twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="Share On Pinterest" target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a title="Share On Google+" target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="post_share" data-share="share_post_490" data-parent="post-490"><i class="fa fa-share-alt"></i></a>
                                    </div>
    
                                </div>
    
                            </div>
    
                        </div>
                        <br class="clear" />
                        <!-- End each blog post -->
    
                        <!-- Begin each blog post -->
                        <div id="post-490" class="post-490 post type-post status-publish format-standard has-post-thumbnail hentry category-italine tag-recipe tag-shrimp tag-spaghetti">
    
                            <div class="post_wrapper">
    
                                <div class="post_content_wrapper">
    
                                    <div class="post_header">
                                        <div class="post_header_title">
                                            <h5><a href="http://themes.themegoods.com/grandrestaurant/demo1/black-spaghetti-with-rock-shrimp/" title="Black Spaghetti with Rock Shrimp">Bật mí giá trị dinh dưỡng có 1 không 2 từ tôm hùm bông</a></h5>
                                            <div class="post_detail">

                                            </div>
                                        </div>
    
                                        <div class="post_img static">
                                            <img src="upload/suri3.jpg" alt="" class="" style="width:960px;height:365px;" />
                                        </div>
    
                                        <br class="clear" />
    
                                        <p>Từ xưa đến nay, tôm hùm bông vẫn luôn đứng trong top các loài hải sản quý giá và được xếp vào hàng cực phẩm trong mỗi bữa tiệc. Nhà hàng Thế giới hải sản đã lựa chọn những chú tôm hùm bông to khỏe, có chất lượng thịt ngon nhất để làm nguyên liệu chế biến cho từng món ăn.</p>
                                    </div>
                                    <div class="post_share_bubble">
                                        <div class="post_share_bubble_wrapper">
                                            <div id="share_post_490" class="social_share_bubble inline">
                                                <ul>
                                                    <li><a title="Share On Facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="Share On Twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="Share On Pinterest" target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a title="Share On Google+" target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="post_share" data-share="share_post_490" data-parent="post-490"><i class="fa fa-share-alt"></i></a>
                                    </div>
    
                                </div>
    
                            </div>
    
                        </div>
                        <br class="clear" />
                        <!-- End each blog post -->
    
                        <!-- Begin each blog post -->
                        <div id="post-490" class="post-490 post type-post status-publish format-standard has-post-thumbnail hentry category-italine tag-recipe tag-shrimp tag-spaghetti">
    
                            <div class="post_wrapper">
    
                                <div class="post_content_wrapper">
    
                                    <div class="post_header">
                                        <div class="post_header_title">
                                            <h5><a href="#" title="Black Spaghetti with Rock Shrimp">Khám phá 3 loại cá thượng hạng có tại Thế giới hải sản</a></h5>
                                            <div class="post_detail">

                                            </div>
                                        </div>
    
                                        <div class="post_img static">
                                            <img src="upload/suri4.jpg" alt="" class="" style="width:960px;height:365px;" />
                                        </div>
    
                                        <br class="clear" />
    
                                      <p>Cá được cho là loại hải sản đa dạng nhất của biển khơi ban tặng cho con người. Trong thế giới của các loài hải sản, có rất nhiều loại cá với các size, trong đó có 3 loại cá được Thế giới hải sản – một trong những nhà hàng hải sản lớn nhất tại Hà Nội chọn lọc thu mua để mang đến những bữa ăn giàu chất dinh dưỡng nhất cho thực khác chính là: Cá bơn Vàng, cá song đen/cá trân trâu, cá tuyết.</p>                                    </div>
                                    <div class="post_share_bubble">
                                        <div class="post_share_bubble_wrapper">
                                            <div id="share_post_490" class="social_share_bubble inline">
                                                <ul>
                                                    <li><a title="Share On Facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="Share On Twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="Share On Pinterest" target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a title="Share On Google+" target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="post_share" data-share="share_post_490" data-parent="post-490"><i class="fa fa-share-alt"></i></a>
                                    </div>
    
                                </div>
    
                            </div>
    
                        </div>
                        <br class="clear" />
                        <!-- End each blog post -->
    
                        <!-- Begin each blog post -->
                        <div id="post-490" class="post-490 post type-post status-publish format-standard has-post-thumbnail hentry category-italine tag-recipe tag-shrimp tag-spaghetti">
    
                            <div class="post_wrapper">
    
                                <div class="post_content_wrapper">
    
                                    <div class="post_header">
                                        <div class="post_header_title">
                                            <h5><a href="http://themes.themegoods.com/grandrestaurant/demo1/black-spaghetti-with-rock-shrimp/" title="Black Spaghetti with Rock Shrimp">Doanh nghiệp dịch vụ ăn uống nỗ lực cầm cự đi qua đại dịch Covid-19</a></h5>
                                            <div class="post_detail">

                                            </div>
                                        </div>
    
                                        <div class="post_img static">
                                            <img src="upload/suri5.jpg" alt="" class="" style="width:960px;height:365px;" />
                                        </div>
    
                                        <br class="clear" />
    
                                        <p>Nhà hàng cũng thường xuyên động viên người lao động chung tay cùng doanh nghiệp vượt khó với tiêu chí CBCNV là tài sản quý nhất của doanh nghiệp; Tăng thêm các trương trình khuyến mãi như chương trình “Blue Weekend”: Vào thứ 7, Chủ Nhật giảm giá tới 30, 50, 70% một số mặt hàng được khách hàng ưa chuộng. Đề nghị đối tác hỗ trợ giảm giá cho thuê mặt bằng trong tình trạng bất khả kháng do dịch bệnh. Trong trường hợp phải đóng cửa theo yêu cầu của cơ quan chính quyền, duy trì bảo dưỡng, bảo trì toàn bộ cơ sở vật chất và công cụ dụng cụ. Đặc biệt, nhanh chóng tái cơ cấu, tổ chức và đẩy mạnh việc bán hàng online, chế biến và phục vụ khách hàng tại nhà…</p>
                                    </div>
                                    <div class="post_share_bubble">
                                        <div class="post_share_bubble_wrapper">
                                            <div id="share_post_490" class="social_share_bubble inline">
                                                <ul>
                                                    <li><a title="Share On Facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a title="Share On Twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a title="Share On Pinterest" target="_blank" href="#"><i class="fa fa-pinterest"></i></a></li>
                                                    <li><a title="Share On Google+" target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div> <a href="javascript:;" class="post_share" data-share="share_post_490" data-parent="post-490"><i class="fa fa-share-alt"></i></a>
                                    </div>
    
                                </div>
    
                            </div>
    
                        </div>
                        <br class="clear" />
                        <!-- End each blog post -->
    
                        <!-- Begin each blog post -->
                        
                        <br class="clear" />
                        <!-- End each blog post -->
    
                        <br class="clear" />
                        <div class="pagination"><span class="current">1</span><a href='#' class="inactive">2</a></div>
                        <div class="pagination_detail">
                            Page 1 of 2 </div>
    
                    </div>
    
                </div>
    
                <!-- End main content -->
    
            </div>
            <br class="clear" />
            <br/>
        </div>
        
        <div class="divider one">
            &nbsp;
        </div>
    </div>
    <div class="footer_bar ">
        <div id="footer_before_widget_text">
        </div>
        <div id="footer" class="">
            <ul class="sidebar_widget four">
                <li id="text-13" class="widget widget_text">
                <div class="textwidget">
                    <p>
                        <img src="upload/logonho.jpg" alt="" width="100" height="34"/>
                    </p>
                    <p>
                        Sự hài lòng của quý khách là niềm hạnh phúc của chúng tôi!
                    </p>
                    <div class="social_wrapper shortcode dark ">
                        <ul>
                            <li class="facebook"><a target="_blank" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="twitter"><a target="_blank" title="Twitter" href="http://twitter.com/#"><i class="fa fa-twitter"></i></a></li>
                            <li class="youtube"><a target="_blank" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></li>
                            <li class="pinterest"><a target="_blank" title="Pinterest" href="http://pinterest.com/#"><i class="fa fa-pinterest"></i></a></li>
                            <li class="instagram"><a target="_blank" title="Instagram" href="http://instagram.com/#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                </li>
                <li id="custom_recent_posts-2" class="widget Custom_Recent_Posts">
                <h2 class="widgettitle">Ăn không ngon, không lấy tiền</h2>
                <ul class="posts blog ">
                    <li><a href="http://themes.themegoods.com/grandrestaurant/demo1/black-spaghetti-with-rock-shrimp/">Mở cửa</a>
                    <div class="post_attribute">
                        Thứ hai - Chủ nhật: 9:00am - 22:00pm
                    </div>
                    <div class="post_attribute">
                        Phục vụ tất cả ngày lễ trong tuần
                    </div>
                    </li>
                    
                </ul>
                </li>
                <li id="custom_flickr-9" class="widget Custom_Flickr">
                <h2 class="widgettitle">Logo</h2>
                <ul class="flickr">
                    <li>
                    <a class="img_frame" target="_blank" href="upload/47015511494_a45979912a_b.jpg" title="roasted rhubarb with yogurt, mint, pistachio"><img src="upload/logo.jpg" alt="roasted rhubarb with yogurt, mint, pistachio" width="75" height="75"/></a>
                    </li>
                    <li>
                    <a class="img_frame" target="_blank" href="upload/46968818334_b4bb23dc19_b.jpg" title="radish pod and tomato salad"><img src="upload/logo.jpg" alt="radish pod and tomato salad" width="75" height="75"/></a>
                    </li>
                    <li>
                    <a class="img_frame" target="_blank" href="upload/40747094363_16c3b23b2f_b.jpg" title="macarons and tea"><img src="upload/logo.jpg" alt="macarons and tea" width="75" height="75"/></a>
                    </li>
                    <li>
                    <a class="img_frame" target="_blank" href="upload/33827445818_dac37b2303_b.jpg" title="macaron- commercial &amp; editorial"><img src="upload/logo.jpg" alt="macaron- commercial &amp; editorial" width="75" height="75"/></a>
                    </li>
                    <li>
                    <a class="img_frame" target="_blank" href="upload/40713766323_618893a490_b.jpg" title="tomato with (thick) soy sauce, sugar and grated ginger"><img src="upload/logo.jpg" alt="tomato with (thick) soy sauce, sugar and grated ginger" width="75" height="75"/></a>
                    </li>
                    <li>
                    <a class="img_frame" target="_blank" href="upload/46721156475_f02fc75334_b.jpg" title="summer corn soup"><img src="upload/logo.jpg" alt="summer corn soup" width="75" height="75"/></a>
                    </li>
                </ul>
                <br class="clear"/>
                </li>
                <li id="text-14" class="widget widget_text">
                <h2 class="widgettitle">Liên hệ</h2>
                <div class="textwidget">
                    <p>
                        <i class="fa fa-map-marker marginright"></i>Trần Đại Nghĩa, Hòa Qúy, Ngũ hành Sơn, TP Đà Nẵng
                    </p>
                    <p>
                        <i class="fa fa-phone marginright"></i><a href="tel:+65.4566743">0378797979</a>
                    </p>
                    <p>
                        <i class="fa fa-envelope marginright"></i><a href="mailto:info@grandrestauranttheme.com">vantinh.info@gmail.com</a>
                    </p>
                    <p>
                        <i class="fa fa-globe marginright"></i>haisanvt.com
                    </p>
                </div>
                </li>
            </ul>
        </div>
        <br class="clear"/>
        <div class="footer_bar_wrapper ">
            <div class="menu-footer-menu-container">
                <ul id="footer_menu" class="footer_nav">
                    <li class="menu-item"><a href="about-us.html">About Us</a></li>
                    <li class="menu-item"><a href="our-chefs.html">Our Chefs</a></li>
                    <li class="menu-item"><a href="blog.html">News</a></li>
                    <li class="menu-item"><a href="delivery.html">Delivery</a></li>
                </ul>
            </div>
            <div id="copyright">
                ©Copyright: Văn Tính - 17IT3
            </div>
            <br class="clear"/>
            <a id="toTop"><i class="fa fa-angle-up"></i></a>
        </div>
    </div>
    </div>
    <div id="overlay_background">
    </div>


    <script src='js/jquery.js'></script>
    <script src='js/jquery-migrate.min.js'></script>
    <script src='js/plugins/revslider/public/assets/js/jquery.themepunch.tools.min.js'></script>
    <script src='js/plugins/revslider/public/assets/js/jquery.themepunch.revolution.min.js'></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.parallax.min.js"></script>  
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.actions.min.js"></script> 
    <script src="js/plugins/revslider/public/assets/js/extensions/revolution.extension.video.min.js"></script>
    <script src='js/plugins/jquery.blockUI.min.js'></script>
    <script src='js/plugins/js.cookie.min.js'></script>
    <script src='js/plugins/jquery.magnific-popup.js'></script>
    <script src='js/plugins/jquery.easing.js'></script>
    <script src='js/plugins/waypoints.min.js'></script>
    <script src='js/plugins/jquery.isotope.js'></script>
    <script src='js/plugins/jquery.masory.js'></script>
    <script src='js/plugins/jquery.tooltipster.min.js'></script>
    <script src='js/plugins/hw-parallax.js'></script>
    <script src='js/plugins/jquery.stellar.min.js'></script>
    <script src='js/plugins/jquery.resizeimagetoparent.min.js'></script>
    <script src='js/plugins/custom_plugins.js'></script>
    <script src='js/plugins/custom.js'></script>
    <script src='js/plugins/core.min.js'></script>
    <script src='js/plugins/datepicker.min.js'></script>
    <script src='js/plugins/custom-date.js'></script>
    <script src='js/plugins/jquery.timepicker.js'></script>
    <script src='js/plugins/custom-time.js'></script>
    <script src='js/plugins/jquery.validate.js'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var tgAjax = {
            "ajaxurl": "#",
            "ajax_nonce": "c5281db0c2"
        };
        /* ]]> */
    </script>
    <script src='js/plugins/custom_onepage.js'></script>

    <script type="text/javascript">
        function setREVStartSize(e) {
            try {
                e.c = jQuery(e.c);
                var i = jQuery(window).width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                        f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                    }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), jQuery(window).height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
    </script>
    <script>
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = ".tp-caption.title-first-word,.title-first-word{font-size:60px;line-height:50px;font-family:Kristi;color:#cfa670;text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-shadow:none}.tp-caption.title,.title{font-size:65px;font-weight:300;font-family:Lato;color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-shadow:none;text-transform:uppercase;letter-spacing:-3px}.tp-caption.sub-title,.sub-title{font-size:20px;line-height:24px;font-weight:400;font-family:Lato;color:rgb(255,255,255);text-decoration:none;background-color:transparent;border-width:0px;border-color:rgb(0,0,0);border-style:none;text-shadow:none;text-transform:uppercase;letter-spacing:-1px}";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>
    <script type="text/javascript">
            if (setREVStartSize !== undefined) setREVStartSize({
                c: '#rev_slider_1_1',
                gridwidth: [1425],
                gridheight: [650],
                sliderLayout: 'fullscreen',
                fullScreenAutoWidth: 'off',
                fullScreenAlignForce: 'off',
                fullScreenOffsetContainer: '',
                fullScreenOffset: ''
            });
            var revapi1,
                tpj;
            (function() {
                if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
                else onLoad();
                function onLoad() {
                    if (tpj === undefined) {
                        tpj = jQuery;
                        if ("on" == "on") tpj.noConflict();
                    }
                    if (tpj("#rev_slider_1_1").revolution == undefined) {
                        revslider_showDoubleJqueryError("#rev_slider_1_1");
                    } else {
                        revapi1 = tpj("#rev_slider_1_1").show().revolution({
                            sliderType: "standard",
                            jsFileLocation: "js/plugins/revslider/public/assets/js/",
                            sliderLayout: "fullscreen",
                            dottedOverlay: "none",
                            delay: 7000,
                            navigation: {
                                keyboardNavigation: "off",
                                keyboard_direction: "horizontal",
                                mouseScrollNavigation: "off",
                                mouseScrollReverse: "default",
                                onHoverStop: "off",
                                touch: {
                                    touchenabled: "on",
                                    touchOnDesktop: "off",
                                    swipe_threshold: 75,
                                    swipe_min_touches: 1,
                                    swipe_direction: "horizontal",
                                    drag_block_vertical: false
                                }
                            },
                            visibilityLevels: [1240, 1024, 778, 480],
                            gridwidth: 1425,
                            gridheight: 650,
                            lazyType: "none",
                            shadow: 0,
                            spinner: "spinner3",
                            stopLoop: "off",
                            stopAfterLoops: -1,
                            stopAtSlide: -1,
                            shuffle: "off",
                            autoHeight: "off",
                            fullScreenAutoWidth: "off",
                            fullScreenAlignForce: "off",
                            fullScreenOffsetContainer: "",
                            fullScreenOffset: "",
                            disableProgressBar: "on",
                            hideThumbsOnMobile: "off",
                            hideSliderAtLimit: 0,
                            hideCaptionAtLimit: 0,
                            hideAllCaptionAtLilmit: 0,
                            debugMode: false,
                            fallbacks: {
                                simplifyAll: "off",
                                nextSlideOnWindowFocus: "off",
                                disableFocusListener: false,
                            }
                        });
                    }; /* END OF revapi call */
                }; /* END OF ON LOAD FUNCTION */
            }()); /* END OF WRAPPING FUNCTION */
        </script>
    <script>
        var htmlDivCss = '  #rev_slider_1_1_wrapper .tp-loader.spinner3 div { background-color: #444444 !important; } ';
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    </script>    
</body>
</html>
<?php
if(isset($_POST["datban"])==true){
    if($_POST["your_name"]==""||$_POST["email"]==""||$_POST["phone"]==""||$_POST["date"]==""||$_POST["time"]==""||$_POST["seats"]==""||$_POST["message"]==""){
        echo'<script> alert("Vui lòng điền đủ thông tin") </script>';
        return ; 
    }
    $sql = "INSERT INTO datban (fullname, email, phone,date_,time_,people,content)
    VALUES ('".$_POST["your_name"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["date"]."','".$_POST["time"]."','".$_POST["seats"]."','".$_POST["message"]."')";
    if (mysqli_query($conn, $sql)) {
        echo'<script> alert("Đặt bàn thành công") </script>';
    } else {
        echo '<script> alert("Đặt bàn thất bại") </script>';
    }
    }
    mysqli_close($conn);
?> 