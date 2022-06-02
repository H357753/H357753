<!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta http-equiv="Content-Type" content="text/html" ; charset="gb2312">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>WEB新闻</title>
    <link rel="stylesheet" href="font/iconfont.css">
    <link rel="stylesheet" href="lib/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/news.css">
</head>

<body>
    <?php
    if (isset($_GET["index"])) {
        if ($_GET["index"] <= 0) {
            header("Location: /news_web.php?index=1");
        }
        $index = $_GET["index"];
    } else
        $index = 1;
    $index_plus = $index + 1;
    $index_minus = $index - 1;

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
        exit;
    }
    mysqli_set_charset($conn, "UTF8");
    $sql = "SELECT Title,Image,Time,Text,Url FROM web_announcement";
    $result = $conn->query($sql);
    $number = $result->num_rows;
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
                    <a href="/index.php">
                        <img src="images/LEGO_200_40.png" alt="">
                    </a>
                </div>
                <ul class="nav_list left clearfix">
                    <li class="item">
                        <a href="/index.php" class="nav_name">首页</a>
                    </li>
                    <li class="item active">
                        <a class="nav_name">最新新闻</a>
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
    <!--企业简介-->
    <div class="about_banner">
        <img src="images/about_banner.png" alt="">
    </div>
    <div class="container">
        <div class="about_title">
            <h2>最新新闻</h2>
        </div>
        <div class="about_top">
            <div class="about_nav">
                <!-- <a href="javascript:;" class="">企业简介</a>
                <a href="javascript:;">公司证件</a> -->
                <a class="active">WEB开发</a>
                <a href="/news.php">全部新闻</a>
                <a href="/news_class2.php">《二班大乱斗》</a>
            </div>
        </div>
    </div>
    <!--新闻中心-->
    <div class="news_box">
        <ul class="news_list">
            <?php
            $index_front = ($index - 1) * 3;
            $index_sql = $index - 1;
            $sql = "SELECT * FROM web_announcement limit " . $index_sql . ",357753";
            $result = $conn->query($sql);
            $count = 0;
            $count_index = 0;
            while ($row = $result->fetch_assoc()) {
                if ($row['Class'] == "Web") {
                    $count_index++; //用于判断第几个
                    if ($count_index >= $index_front) {
                        $Title = $row['Title'];
                        $Image = $row['Image'];
                        $Time = $row['Time'];
                        $Url = $row['Url'];
                        $Text = $row['Text'];
                        echo <<<EOF
                    <li class="news_item">
                        <a href="$Url">
                            <div class="container clearfix">
                                <div class="left news_info">
                                    <h2 class="news_name">$Title</h2>
                                    <p class="news_text">$Text</p>
                                    <p class="news_time">
                                        <span> <i class="iconfont icon-shijian"></i>$Time</span>
                                    </p>
                                </div>
                                <div class="right news_pic">
                                    <img src="$Image" alt="">
                                </div>
                            </div>
                            
                        </a>
                    </li>
EOF;
                        $count++;
                        if ($count == 3)
                            break;
                    }
                }
            }
            ?>
        </ul>
        <div class="page_box">
            <?php                    //PHP
            $index_sql = $index * 3 + 1;
            $sql = "SELECT * FROM web_announcement limit " . $index_sql . ",357753";
            $result = $conn->query($sql);
            function pd($result)
            {
                while ($row = $result->fetch_assoc()) {
                    if (!empty($row))
                        if ($row["Class"] == "Web") {
                            return true;
                        }
                }
                return false;
            }
            // echo $sql;

            if ($index != 1) {
                echo <<<EOF
                <a href="/news_web.php?index=$index_minus" class="prev">←</a>
EOF;
            }
            if ($index_minus != 0) {
                echo <<<EOF
                <a href="/news_web.php?index=$index_minus">$index_minus</a>
EOF;
            }
            echo <<<EOF
            <a href="#" class="active">$index</a>
EOF;
            if (pd($result)) {
                echo <<<EOF
                <a href="/news_web.php?index=$index_plus">$index_plus</a>
                <a href="/news_web.php?index=$index_plus" class="next">→</a>
                EOF;
            } else {
                echo <<<EOF
                <a class="next_lucency">→</a>
                EOF;
            }
            ?>
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