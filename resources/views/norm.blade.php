<!DOCTYPE html>
<html>
<head lang="zh-CN">
    <meta charset="UTF-8">
    <title>我来提名</title>
    <link rel="stylesheet" href="{{asset('css/index.css')}}"/>
    <link rel="stylesheet" href="{{asset('css/norm.css')}}"/>
    <style type="text/css">
        .bk{background: url("{{asset('img/bk.jpg')}}") no-repeat #ce1e35;}
        .nav{background:url("{{asset('img/nav_bk.png')}}") no-repeat;}
        .title_3{background: url("{{asset('img/title_bk.png')}}") no-repeat;}
    </style>
</head>
<body>
<div class="bk">
    <div class="nav">
        <div class="nav_contain">
            <div class="logo">
                <img src="{{asset('img/cq_logo.png')}}" alt="cqupt"/>
                <img src="{{asset('img/cq.png')}}" alt="cqupt"/>
            </div>
            <ul class="nav_list">
                <li><a href="{{route('index')}}" data-left="60">首页</a></li>
                <li><a href="{{route('norm')}}" data-left="164" data-main="1">我来提名</a></li>
                <li><a href="#" data-left="312">网络投票</a></li>
                <li><a href="#" data-left="460">排行榜</a></li>
                <div class="nav_bar"></div>
            </ul>

        </div>

    </div>
    <div class="content">
        <h1 class="title_1">第二届</h1>
        <img class="title_mor" src="{{asset('img/moral.png')}}" alt="moral"/>
        <img class="title_yth" src="{{asset('img/youngth.png')}}" alt="youngth"/>
        <h3 class="title_2">评选表彰活动专题网</h3>
        <h3 class="title_3">
            <span>塑高尚师德模范</span>
            <span>做敬业爱生教师</span>
        </h3>

        <div class="norm shadow">
            <h3 class="norm_h">我来提名</h3>
            <div class="container">
                <form id="norm_form" action="#" method="GET">
                    <h5 class="norm_title">被提名人信息</h5>
                    <div class="norm_team">
                        <label for="norm_name">姓<span class="lab_ju">名</span></label>
                        <input id="norm_name" name="norm_name" type="text" value="被提名人姓名"/>
                    </div>
                    <div class="norm_team">
                        <label for="norm_part">所在单位</label>
                        <input id="norm_part" name="norm_part" type="text" value="被提名人所在单位"/>
                    </div>
                    <div class="norm_team norm_eara">
                        <label for="norm_rea">提名理由</label>
                        <textarea name="norm_rea" id="norm_rea" cols="58" rows="7">请输入提名推荐理由</textarea>
                    </div>
                    <h5 class="norm_title">提名人信息</h5>
                    <div class="norm_team">
                        <label for="name">姓<span class="lab_ju">名</span></label>
                        <input id="name" name="name" type="text" value="提名人姓名"/>
                    </div>
                    <div class="norm_team">
                        <label for="part">所在单位</label>
                        <input id="part" name="part" type="text" value="提名人所在单位（班级或学院）"/>
                    </div>
                    <input class="norm_sub" type="submit" value="提交"/>
                </form>
            </div>

        </div>

    </div>
    <div class="footer">
        <p class="footer_p">地址：重庆市南岸区崇文路2号（重庆邮电大学内） 400065 E-mail:redrock@cqupt.edu.cn (023-62461084)</p>
    </div>
</div>
<script src="{{asset('js/jquery-1.11.3.min.js')}}"></script>
<script src="{{asset('js/index-min.js')}}"></script>
<script>!function(t){function a(t,e){for(var n=!0,i=t.length,o=0;i>o;o++)0===t[o].css("width")&&(n=!1);n?e():setTimeout(function(){a(t,e)},100)}var e=t(".nav_bar"),n=t(".nav_list"),i=t("[data-main]");e.css({left:i.data("left")+"px",width:i.css("width")}),n.on("mouseover",function(a){var n=a.target;if("a"===n.nodeName.toLowerCase()){var i=t(n).data("left")+"px",o=t(n).css("width");e.animate({left:i,width:o},"normal")}return!1}),n.on("mouseleave",function(a){var n=a.target;if("a"===n.nodeName.toLowerCase()){var i=t("[data-main]"),o=i.data("left")+"px",r=i.css("width");e.animate({left:o,width:r},"normal")}});var o=t(".title_mor"),r=t(".title_yth");a([o,r],function(){o.animate({top:"12px"},1500),r.animate({top:"107px"},1500),t(".title_3").animate({opacity:1},1500)})}(jQuery);</script>
</body>
</html>