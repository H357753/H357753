<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta http-equiv="Content-Type" content="text/html" ; charset="gb2312">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>首页</title>
    <link rel="stylesheet" href="font/iconfont.css">
    <link rel="stylesheet" href="lib/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php
    header("Content-Type:text/html;charset=UTF-8");
    $servername = "5p3487z624.zicp.vip:18356";
    $username = "H";
    $password = "123456";
    // $port = "3306";
    $mysql_database = "class 2"; //改成自己的mysql数据库名

    // 创建连接
    $conn = new mysqli($servername, $username, $password, $mysql_database);

    //检测连接
    if ($conn->connect_error) {
        die("连接失败: " . $conn->connect_error);
        echo "<script type='text/javascript'>document.onload = window.close();</script>";
    }
    mysqli_set_charset($conn, "UTF8");
    ?>
    <!--顶部-->
    <div class="top_box">
        <div class="container">
            <div class="clearfix top_in">
                <p class="left dec">个人研发卡牌游戏ing</p>
                <div class="right contact">
                    <!-- <div class="other_contact contact_item">
                           <a href="javascript:;">
                               <i class="iconfont icon-qq1"></i>
                           </a>
                           <a href="javascript:;">
                               <i class="iconfont icon-weibo"></i>
                           </a>
                           <a href="javascript:;">
                               <i class="iconfont icon-weixin"></i>
                           </a>
                       </div> -->
                    <div class="search contact_item">
                        <a href="javascript:;"><i class="iconfont icon-11"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--导航-->
    <div class="top_nav_box">
        <div class="container">
            <div class="clearfix">
                <div class="logo left">
                    <a>
                        <img src="images/LEGO_200_40.png" alt="">
                    </a>
                </div>
                <ul class="nav_list left clearfix">
                    <li class="item active">
                        <a class="nav_name">首页</a>
                    </li>
                    <li class="item">
                        <a href="/news.php?index=1" class="nav_name">最新新闻</a>
                    </li>
                    <!-- <li class="item">
                        <a href="javascript:;" class="nav_name">产品介绍</a>
                    </li> -->
                    <!-- <li class="item">
                        <a href="javascript:;" class="nav_name">风格演示</a>
                    </li> -->
                    <!-- <li class="item">
                        <a href="javascript:;" class="nav_name">服务套餐</a>
                        <ul class="down_list">
                            <li class="down_list_item">
                                <a href="javascript:;">产品套餐</a>
                            </li>
                            <li class="down_list_item">
                                <a href="javascript:;">服务列表</a>
                            </li>
                        </ul>
                    </li> -->
                    <!-- <li class="item">
                        <a href="javascript:;" class="nav_name">游戏列表</a>
                    </li>
                    <li class="item">
                        <a href="javascript:;" class="nav_name">H5平台系统</a>
                    </li>
                    <li class="item">
                        <a href="javascript:;" class="nav_name">云服务器</a>
                    </li> -->
                    <li class="item">
                        <a href="/Join us.php" class="nav_name">加入我们</a>
                    </li>
                </ul>
            </div>

        </div>
        <div class="screen_small">
            <a href="javascript:;" class="small_logo">
                <img src="images/LEGO_200_40.png" alt="">
            </a>
            <span class="screen_small_menu"><i class="iconfont icon-caidan"></i></span>
            <ul class="screen_small_list">
                <li>
                    <a href="#">首页</a>
                </li>
                <li>
                    <a href="#">最新新闻</a>
                </li>
                <li>
                    <a href="#">加入我们</a>
                </li>
                <!-- <li>
                    <a href="#">风格演示</a>
                </li>
                <li class="">
                    <a href="javascript:;">产品套餐</a>
                </li>
                <li class="">
                    <a href="javascript:;">服务列表</a>
                </li>
                <li>
                    <a href="#">游戏列表</a>
                </li>
                <li>
                    <a href="#">H5平台系统</a>
                </li>
                <li>
                    <a href="#">云服务器</a>
                </li>
                <li>
                    <a href="#">联系我们</a>
                </li> -->

            </ul>
        </div>
    </div>
    <!--横幅-->
    <div class="swiper-container banner_container">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <a href="#">
                    <img src="images/banner.jpg" alt="">
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <img src="images/banner.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next banner_next"></div>
        <div class="swiper-button-prev banner_prev"></div>
    </div>
    <!--服务介绍-->
    <div class="service_wrap">
        <div class="title">
            <div class="title_top">
                <h2><span class="color_b">我</span>们的游戏</h2>
            </div>
            <!-- <p class="title_name">服务介绍</p> -->
        </div>
        <div class="container">
            <ul class="service_list clearfix">
                <li class="service_item">
                    <div class="service_title">
                        <p class="default_title">01.《二班大乱斗》</p>
                        <p class="hover_title">
                            <span class="num">01</span>
                            <span class="name">《二班大乱斗》</span>
                        </p>
                    </div>
                    <div class="service_pic">
                        <i class="service_icon"></i>
                    </div>
                    <div class="service_dec">
                        <p>这是我们主推的一款极具有游玩里的游戏</p>
                    </div>
                    <a href="javascript:;" class="more_btn">More</a>
                </li>
                <!-- <li class="service_item">
                    <div class="service_title">
                        <p class="default_title">02. 游戏渠道</p>
                        <p class="hover_title">
                            <span class="num">02</span>
                            <span class="name">游戏渠道</span>
                        </p>
                    </div>
                    <div class="service_pic">
                        <i class="service_icon icon_game"></i>
                    </div>
                    <div class="service_dec">
                        <p>上百款热门火爆页游接入，长期保持接口更新，海量渠道全程协…</p>
                    </div>
                    <a href="javascript:;" class="more_btn">More</a>
                </li>
                <li class="service_item">
                    <div class="service_title">
                        <p class="default_title">03. 运营指导</p>
                        <p class="hover_title">
                            <span class="num">03</span>
                            <span class="name">运营指导</span>
                        </p>
                    </div>
                    <div class="service_pic">
                        <i class="service_icon icon_guide"></i>
                    </div>
                    <div class="service_dec">
                        <p>欣辰科技提供运营方案分析，教用户如何运作游戏平台，让每一位用…</p>
                    </div>
                    <a href="javascript:;" class="more_btn">More</a>
                </li>
                <li class="service_item">
                    <div class="service_title">
                        <p class="default_title">04. 技术维护</p>
                        <p class="hover_title">
                            <span class="num">04</span>
                            <span class="name">技术维护</span>
                        </p>
                    </div>
                    <div class="service_pic">
                        <i class="service_icon icon_skill"></i>
                    </div>
                    <div class="service_dec">
                        <p>提供终身技术支持 服务方式包含：电话、邮件、QQ、工单系统、 …</p>
                    </div>
                    <a href="javascript:;" class="more_btn">More</a>
                </li>
                <li class="service_item">
                    <div class="service_title">
                        <p class="default_title">05. 定制开发</p>
                        <p class="hover_title">
                            <span class="num">05</span>
                            <span class="name">定制开发</span>
                        </p>
                    </div>
                    <div class="service_pic">
                        <i class="service_icon icon_cust"></i>
                    </div>
                    <div class="service_dec">
                        <p>欣辰215YX根据客户需求制作模板，功能定制开发 按工期核算成本…</p>
                    </div>
                    <a href="javascript:;" class="more_btn">More</a> -->
                </li>
            </ul>
        </div>
    </div>
    <!--功能-->
    <!-- <div class="function_wrap">
        <div class="function_l">
            <ul class="function_list clearfix">
                <li class="function_item w156">
                    <span class="fun_icon"></span>
                    <p>CPS推广员系统</p>
                </li> -->
    <!-- <li class="function_item w189">
                    <span class="fun_icon fun_icon2"></span>
                    <p>CPS推广员系统</p>
                </li>
                <li class="function_item w156 border-right-none">
                    <span class="fun_icon fun_icon3"></span>
                    <p>CPS推广员系统</p>
                </li>
                <li class="function_item w156">
                    <span class="fun_icon fun_icon4"></span>
                    <p>CPS推广员系统</p>
                </li>
                <li class="function_item w189">
                    <span class="fun_icon fun_icon5"></span>
                    <p>CPS推广员系统</p>
                </li>
                <li class="function_item w156 border-right-none">
                    <span class="fun_icon fun_icon6"></span>
                    <p>CPS推广员系统</p>
                </li>
                <li class="function_item w156 border-bottom-none">
                    <span class="fun_icon fun_icon7"></span>
                    <p>CPS推广员系统</p>
                </li>
                <li class="function_item w189 border-bottom-none">
                    <span class="fun_icon fun_icon8"></span>
                    <p>CPS推广员系统</p>
                </li>
                <li class="function_item w156 border-right-none border-bottom-none">
                    <span class="fun_icon fun_icon9"></span>
                    <p>CPS推广员系统</p> -->
    <!-- </li>
            </ul>
        </div> -->
    <!-- <div class="container fast_handle_box">

                <div class="fast_handle">
                    <a href="#" class="yanshi">
                        <span class="fast_icon">
                            <i class="iconfont icon-shipin"></i>
                        </span>
                        <p>在线演示</p>
                    </a>
                    <a href="#" class="zixun">
                         <span class="fast_icon">
                            <i class="iconfont icon-zixun"></i>
                        </span>
                        <p>在线咨询</p>
                    </a>
                    <a href="#" class="goumai">
                         <span class="fast_icon">
                            <i class="iconfont icon-goumai"></i>
                        </span>
                        <p>点击购买</p>
                    </a>
                    <a href="#" class="youxi">
                         <span class="fast_icon">
                            <i class="iconfont icon-iconset0263"></i>
                        </span>
                        <p>游戏盒子</p>
                    </a>
                </div>

        </div> -->
    </div>
    <!--合作流程-->
    <!-- <div class="cooperation_wrap">
        <div class="title">
            <div class="title_top">
                <h2><span class="color_b">P</span>ROCESS</h2>
            </div>
            <p class="title_name">合作流程</p>
        </div>
        <div class="container">
            <ul class="cooperation_list clearfix">
                <li class="list_item">
                    <div class="list_item_pic">
                        <span class="bg"></span>
                        <i class="coop_icon"></i>
                    </div>
                    <div class="step_dec">
                        <h3>STEP 01</h3>
                        <p>选购平台套餐 签订合同</p>
                    </div>
                </li>
                <li class="list_item">
                    <div class="list_item_pic">
                        <span class="bg"></span>
                        <i class="coop_icon coop_icon2"></i>
                    </div>
                    <div class="step_dec">
                        <h3>STEP 02</h3>
                        <p>开通服务器 注册域名</p>
                    </div>
                </li>
                <li class="list_item">
                    <div class="list_item_pic">
                        <span class="bg"></span>
                        <i class="coop_icon coop_icon3"></i>
                    </div>
                    <div class="step_dec">
                        <h3>STEP 03</h3>
                        <p>技术沟通交流 安排搭建</p>
                    </div>
                </li>
                <li class="list_item">
                    <div class="list_item_pic">
                        <span class="bg"></span>
                        <i class="coop_icon coop_icon4"></i>
                    </div>
                    <div class="step_dec">
                        <h3>STEP 04</h3>
                        <p>平台建设 游戏接入</p>
                    </div>
                </li>
                <li class="list_item">
                    <div class="list_item_pic">
                        <span class="bg"></span>
                        <i class="coop_icon coop_icon5"></i>
                    </div>
                    <div class="step_dec">
                        <h3>STEP 05</h3>
                        <p>上线运营 售后工作</p>
                    </div>
                </li>
            </ul>
        </div>
    </div> -->
    <!--新闻中心and常见问题-->
    <div class="container">
        <div class="news_wrap clearfix">
            <div class="news left">
                <div class="news_top clearfix">
                    <h2 class="news_title left">新闻动态</h2>
                    <!-- <a href="" class="right more">更多</a> -->
                </div>
                <div class="news_main clearfix">
                    <?php
                    $sql = "SELECT Title,Image,Time,Text,Url FROM web_announcement";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    if ($result->num_rows > 0) {
                        $Title = $row['Title'];
                        $Image = $row['Image'];
                        $Time = $row['Time'];
                        $Url = $row['Url'];
                        echo <<<EOF
                                <div class="news_big left">
                                    <a href="$Url">
                                        <div class="news_pic">
                                            <img src="$Image" alt="">
                                        </div>
                                        <div class="news_info">
                                            <p class="news_name font_sl">$Title</p>
                                            <p class="news_time">$Time</p>.
                                        </div>
                                    </a>  
                                </div>
                            EOF;
                    } else {
                        echo "你没网，或者";
                        echo "bug bug bug";
                    }
                    ?>
                    <!-- <div class="news_big left">
                        <a href="javascript:;">
                            <div class="news_pic">
                                <img src="images/new_pic.png" alt="">
                            </div>
                            <div class="news_info">
                                <p class="news_name font_sl">Web端界面大改动</p>
                                <p class="news_time">2022/5/30</p>
                            </div>
                        </a>
                    </div> -->
                    <ul class="news_list right">
                        <?php
                        while ($row = $result->fetch_assoc()) {
                            $Image = $row['Image'];
                            $Title = $row['Title'];
                            $Time = $row['Time'];
                            $Url = $row['Url'];
                            $Text = $row['Text'];
                            echo <<<EOF
                                <li class="new_item">
                                    <dl class="clearfix">
                                        <dt class="right">
                                            <a href="$Url">
EOF;
                            if ($Image != null) {
                                echo <<<EOF
                                            <img src="$Image" alt="">
                                        </a>
                                    </dt>
                                    <dd class="left">
                                        <p>
                                            <a href="#" class="news_dec">$Title</a>
                                        </p>
                                        <span class="time">$Time</span>
                                    </dd>
                                </dl>
                            </li>
EOF;
                            } else {
                                echo <<<EOF
                                        </a>
                                    </dt>
                                        <dd class="left">
                                            <p>
                                                <a href="#" class="news_dec">$Title</a>
                                            </p>
                                            <span class="time">$Time</span>
                                        </dd>
                                    </dl>
                                </li>
EOF;
                            }
                        }
                        ?>
                        <!-- <li class="new_item">
                            <dl class="clearfix">
                                <dt class="right">
                                    <a href="javascript:;">
                                        <img src="images/news_pic2.png" alt="">
                                    </a>
                                </dt>
                                <dd class="left">
                                    <p>
                                        <a href="#" class="news_dec">《二班大乱斗》已经进入中期开发，一切按部就班</a>
                                    </p>
                                    <span class="time">2022/5/30</span>
                                </dd>
                            </dl>
                        </li> -->
                        <!-- <li class="new_item">
                            <dl class="clearfix">
                                <dt class="right">
                                    <a href="javascript:;">
                                        <img src="images/news_pic2.png" alt="">
                                    </a>
                                </dt>
                                <dd class="left">
                                    <p>
                                        <a href="#" class="news_dec">《剑雨星辰》攻略-剑雨星辰资讯-欣辰科技</a>
                                    </p>
                                    <span class="time">2016/11/07</span>
                                </dd>
                            </dl>
                        </li>
                        <li class="new_item">
                            <dl class="clearfix">
                                <dt class="right">
                                    <a href="javascript:;">
                                        <img src="images/news_pic2.png" alt="">
                                    </a>
                                </dt>
                                <dd class="left">
                                    <p>
                                        <a href="#" class="news_dec">《剑雨星辰》攻略-剑雨星辰资讯-欣辰科技</a>
                                    </p>
                                    <span class="time">2016/11/07</span>
                                </dd>
                            </dl>
                        </li>
                        <li class="new_item">
                            <dl class="clearfix">
                                <dt class="right">
                                    <a href="javascript:;">
                                        <img src="images/news_pic2.png" alt="">
                                    </a>
                                </dt>
                                <dd class="left">
                                    <p>
                                        <a href="#" class="news_dec">《剑雨星辰》攻略-剑雨星辰资讯-欣辰科技</a>
                                    </p>
                                    <span class="time">2016/11/07</span>
                                </dd>
                            </dl>
                        </li> -->
                    </ul>
                </div>

            </div>
            <div class="helps right">
                <div class="news_top clearfix">
                    <h2 class="news_title left">常见问题</h2>
                    <!-- <a href="#" class="right more">更多</a> -->
                </div>
                <ul class="helps_list">
                    <li class="helps_item active">
                        <div class="helps_title">
                            <p class="helps_name font_sl">请问《二班大乱斗》会以什么方式出现？</p>
                            <span class="helps_icon"></span>
                        </div>
                        <div class="helps_dec">
                            <p>《二班大乱斗》目前已经进入中期开发，很快就会在大家眼前亮相，首先会在部分人群中内测，之后...</p>
                            <a href="#" class="color_b">查看详情</a>
                        </div>
                    </li>
                    <!-- <li class="helps_item">
                        <div class="helps_title">
                            <p class="helps_name font_sl">请问欣辰科技 平台系统搭建+网页游戏代理网页游戏代理</p>
                            <span class="helps_icon"></span>
                        </div>
                        <div class="helps_dec">
                            <p>混服运营平台没有直接从游戏开发商代理游戏的权利，是有文网
                                文资质的联运平台提供游戏接口给一些没有资质的小平台，双方
                                合作开服，各拿分成</p>
                            <a href="#" class="color_b">查看详情</a>
                        </div>
                    </li>
                    <li class="helps_item">
                        <div class="helps_title">
                            <p class="helps_name font_sl">请问欣辰科技 平台系统搭建+网页游戏代理网页游戏代理</p>
                            <span class="helps_icon"></span>
                        </div>
                        <div class="helps_dec">
                            <p>混服运营平台没有直接从游戏开发商代理游戏的权利，是有文网
                                文资质的联运平台提供游戏接口给一些没有资质的小平台，双方
                                合作开服，各拿分成</p>
                            <a href="#" class="color_b">查看详情</a>
                        </div>
                    </li>
                    <li class="helps_item">
                        <div class="helps_title">
                            <p class="helps_name font_sl">请问欣辰科技 平台系统搭建+网页游戏代理网页游戏代理</p>
                            <span class="helps_icon"></span>
                        </div>
                        <div class="helps_dec">
                            <p>混服运营平台没有直接从游戏开发商代理游戏的权利，是有文网
                                文资质的联运平台提供游戏接口给一些没有资质的小平台，双方
                                合作开服，各拿分成</p>
                            <a href="#" class="color_b">查看详情</a>
                        </div>
                    </li>
                    <li class="helps_item">
                        <div class="helps_title">
                            <p class="helps_name font_sl">请问欣辰科技 平台系统搭建+网页游戏代理网页游戏代理</p>
                            <span class="helps_icon"></span>
                        </div>
                        <div class="helps_dec">
                            <p>混服运营平台没有直接从游戏开发商代理游戏的权利，是有文网
                                文资质的联运平台提供游戏接口给一些没有资质的小平台，双方
                                合作开服，各拿分成</p>
                            <a href="#" class="color_b">查看详情</a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
    <!--footer-->
    <div class="footer">
        <div class="container">
            <div class="footer_top clearfix">
                <dl class="footer_code left">
                    <dt>
                        <img src="images/code.png" alt="">
                    </dt>
                    <dd>
                        <a href="#"><i class="iconfont icon-xiaoxi"></i>加入我们</a>
                    </dd>
                </dl>
                <!-- <dl class="other_line left">
                    <dt>最新新闻</dt>
                    <dd>
                        <a href="#">购买申请</a>
                    </dd>
                    <dd>
                        <a href="#">产品验证</a>
                    </dd>
                    <dd>
                        <a href="#">合作流程</a>
                    </dd>
                </dl> -->
                <!-- <dl class="other_line left">
                    <dt>服务内容</dt>
                    <dd>
                        <a href="#">游戏代理</a>
                    </dd>
                    <dd>
                        <a href="#">游戏盒子</a>
                    </dd>
                    <dd>
                        <a href="#">H5平台系统</a>
                    </dd>
                </dl>
                <dl class="other_line left">
                    <dt>关于215</dt>
                    <dd>
                        <a href="#">企业介绍</a>
                    </dd>
                    <dd>
                        <a href="#">公司证件</a>
                    </dd>
                    <dd>
                        <a href="#">招聘信息</a>
                    </dd>
                </dl> -->
                <dl class="left footer_contact other_line">
                    <dt>联系方式</dt>
                    <dd>
                        <span class="contact_icon"><i class="iconfont icon-dingwei"></i></span>
                        七年级二班
                    </dd>
                    <dd>
                        <span class="contact_icon"><i class="iconfont icon-dianhua1"></i></span>
                        233333333333
                    </dd>
                    <dd>
                        <span class="contact_icon"><i class="iconfont icon-youxiang"></i></span>
                        二班@erban.com
                    </dd>
                </dl>
            </div>
            <!-- <div class="footer_line">
                    <span>友情链接：</span>
                    <a href="#">百度一下</a> |<a href="#">优酷视频</a> |<a href="#">腾讯视频</a>
            </div> -->
            <div class="footer_ban">
                <div class="left footer_ban_l">
                    <a href="#">版权所有 © <a href="https://www.genban.org/">KK'S_H</a> </a>
                </div>
                <!-- <div class="right footer_ban_r">
                    <img src="images/footer_logo.png" alt=""> |
                    <img src="images/footer_jw.png" alt="">
                </div> -->
            </div>
        </div>
    </div>
    <!--浮层-->
    <div class="float_box">
        <div class="float_up">
            <p>TOP</p>
            <span><i class="iconfont icon-jiantou-up"></i></span>
        </div>
        <!-- <ul class="float_list">
            <li>
                <span><i class="iconfont icon-qq"></i></span>
                <div class="show_box">
                    <a href="javascript:;">立即咨询</a>
                </div>
            </li>
            <li>
                <span><i class="iconfont icon-dianhua"></i></span>
                <div class="show_box">
                    <p>15920618199</p>
                </div>
            </li>
            <li>
                <span><i class="iconfont icon-weixin1"></i></span>
                <div class="show_box">
                    <img src="images/code2.png" alt="" class="code">
                    <p>扫一扫，关注哦~</p>
                </div>
            </li>
        </ul> -->
        <!-- <div class="float_down">
            <span><i class="iconfont icon-jiantou-down"></i></span>
        </div> -->
    </div>
</body>

</html>
<script src="js/jquery.js"></script>
<script src="lib/swiper/js/swiper.min.js"></script>
<script src="js/common.js"></script>
<script>
    $(function() {
        //banner
        var swiper = new Swiper('.banner_container', {
            pagination: '.swiper-pagination',
            paginationClickable: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            onlyExternal: false,
            speed: 1000,
            autoplay: 5000,
            loop: true
        });
        _indexFn._hover('.service_list'); //服务列表
        _indexFn._hover('.cooperation_list'); //合作流程

        _indexFn._hover('.function_list'); //合作流程


        //常见问题
        $('.helps_title').on('click', function() {
            $(this).closest('.helps_item').toggleClass('active');
        });
    });
</script>