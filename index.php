<?php

$body = file_get_contents((isset($_GET['q']) ? $_GET['q'] : 'homepage') . '.html');

$html = '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh" xml:lang="zh">
<head>
  <title>KDE 中国 - 自由体验！</title>

<style type="text/css">
  .cp-doNotDisplay { display: none; }
  @media aural, braille, handheld, tty { .cp-doNotDisplay { display: inline; speak: normal; }}
  .cp-edit { text-align: right; }
  @media print, embossed { .cp-edit { display: none; }}
</style>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <link rel="meta" href="http://www.kde.org/labels.rdf" type="application/rdf+xml" title="ICRA labels" />
  <meta name="trademark" content="KDE e.V." />
<meta name="description" content="KDE-China Homepage, kde-china.org" />
  <meta name="MSSmartTagsPreventParsing" content="true" />
  <meta name="robots" content="all" />
  <meta name="no-email-collection" content="http://www.unspam.com/noemailcollection" />
<link rel="icon" href="https://www.kde.org/media/images/favicon.ico" /><link rel="shortcut icon" href="https://www.kde.org/media/images/favicon.ico" />
  	<link rel="stylesheet" media="screen" type="text/css" title="KDE Stylesheet" href="https://www.kde.org/media/includes/chihuahua/css.php" />
	<link rel="stylesheet" media="screen" type="text/css" title="KDE Stylesheet" href="https://www.kde.org/media/styles/plasmaMenu.css" />
	<style type="text/css">

.mainmenu_community { 
background-image: url(\'https://www.kde.org/media/images/plasmaMenu/green.icon.png\'); 
background-repeat: no-repeat; 
background-position: 0 0; 
position: relative; 
z-index: 95; 
}

.mainmenu_community:hover { 
text-shadow: #acff08 0px 0px 8px; 
}

.mainmenu_community_sub { 
margin-top: 0px; 
position: absolute; 
}

.mainmenu_community_animation { 
position: absolute; 
left: 0px; 
opacity: 0; 
}

.mainmenu_workspaces { 
background-image: url(\'https://www.kde.org/media/images/plasmaMenu/orange.icon.png\'); 
background-repeat: no-repeat; 
background-position: 0 0; 
position: relative; 
z-index: 95; 
}

.mainmenu_workspaces:hover { 
text-shadow: #ffae00 0px 0px 8px; 
}

.mainmenu_workspaces_sub { 
margin-top: 0px; 
position: absolute; 
}

.mainmenu_workspaces_animation { 
position: absolute; 
left: 0px; 
opacity: 0; 
}

.mainmenu_applications { 
background-image: url(\'https://www.kde.org/media/images/plasmaMenu/red.icon.png\'); 
background-repeat: no-repeat; 
background-position: 0 0; 
position: relative; 
z-index: 95; 
}

.mainmenu_applications:hover { 
text-shadow: #ff96af 0px 0px 8px; 
}

.mainmenu_applications_sub { 
margin-top: 0px; 
position: absolute; 
}

.mainmenu_applications_animation { 
position: absolute; 
left: 0px; 
opacity: 0; 
}

.mainmenu_developer_platform { 
background-image: url(\'https://www.kde.org/media/images/plasmaMenu/gray.icon.png\'); 
background-repeat: no-repeat; 
background-position: 0 0; 
position: relative; 
z-index: 95; 
}

.mainmenu_developer_platform:hover { 
text-shadow: #aaa 0px 0px 8px; 
}

.mainmenu_developer_platform_sub { 
margin-top: 0px; 
position: absolute; 
}

.mainmenu_developer_platform_animation { 
position: absolute; 
left: 0px; 
opacity: 0; 
}

.mainmenu_support { 
background-image: url(\'https://www.kde.org/media/images/plasmaMenu/purple.icon.png\');
background-repeat: no-repeat;
background-position: 0 0;
position: relative;
z-index: 95;
}

.mainmenu_support:hover { 
text-shadow: #e285ff 0px 0px 8px; 
}

.mainmenu_support_sub { 
margin-top: 0px; 
position: absolute; 
}

.mainmenu_support_animation { 
position: absolute; 
left: 0px; 
opacity: 0; 
}

</style>	<!--[if lte IE 7]>
		<style type="text/css">
			html .jqueryslidemenu{height: 1%;} /*Holly Hack for IE7 and below*/
		</style>
	<![endif]-->
</head>

<body  id="cp-site-wwwkdeorg">

<ul class="cp-doNotDisplay">
  <li><a href="index.html#cp-content" accesskey="2">Skip to content</a></li>
  <li><a href="index.html#cp-menu" accesskey="5">Skip to link menu</a></li>
</ul>


    <div class="root">
    	<div class="header">
    		<div class="toolbox">
    		 <div id="location"><img src="https://www.kde.org/media/images/kde.png" id="site_logo" alt="Logo" /><div class="toolboxtext"><a href="./">KDE 中国</a></div></div>
			</div>
			<div class="plasmamenu_box">
<div id="mainmenu_community" class="mainmenu_community">
<h2>社区</h2>
<div class="mainmenu_community_sub plasmamenu_box_submenu">
<div class="menubox_top"></div>
<div class="menubox_body">
<div class="mainmenu_community_animation"></div>
<div class="mainmenu_community_content">
<ul class="menubox_title"><li class="index"><a href="./?q=community/index">社区</a></li></ul>
<img class="menubox_sep" src="https://www.kde.org/media/images/plasmaMenu/menubox_hr.png" alt="" />
<ul>
<li class="index mainmenu_community_about_kde menubox_subhover">
<h3><a href="./?q=community/whatiskde/index">关于 KDE</a></h3>
<img class="menubox_subarr" src="https://www.kde.org/media/images/plasmaMenu/menubox_arrow.png" alt="" /><div class="mainmenu_community_about_kde_sub menubox_subparent">
<div class="menubox_top"></div>
<div class="menubox_body">
<ul>
<li class="noindex">
<a href="https://www.kde.org/community/whatiskde/softwarecompilation.php">软件集</a>
</li> <li class="noindex">
<a href="https://www.kde.org/community/whatiskde/management.php">项目管理</a>
</li> <li class="noindex">
<a href="https://www.kde.org/community/whatiskde/devmodel.php">开发模式</a>
</li> <li class="noindex">
<a href="https://www.kde.org/community/whatiskde/i18n.php">国际化</a>
</li> <li class="noindex">
<a href="https://ev.kde.org">KDE 法律和财务实体</a>
</li> <li class="noindex">
<a href="https://www.kde.org/community/whatiskde/kdefreeqtfoundation.php">KDE 自由 Qt 基金会</a>
</li> <li class="noindex">
<a href="https://www.kde.org/community/history/">历史</a>
</li> <li class="noindex">
<a href="https://www.kde.org/community/awards/">奖项</a>
</li> <li class="noindex">
<a href="https://www.kde.org/contact/">联系方式</a>
</li> </ul></div><div class="menubox_bottom"></div></div></li>
<li class="index">
<a href="https://www.kde.org/announcements/">公告</a>
</li><li class="index">
<a href="http://www.kde.org/events/">活动</a>
</li><li class="index">
<a href="http://community.kde.org/Get_Involved/">参与其中</a>
</li><li class="index">
<a href="https://www.kde.org/community/donations/index.php">捐赠</a>
</li><li class="index">
<a href="https://relate.kde.org/civicrm/contribute/transact?reset=1&amp;id=5">加入游戏</a>
</li><li class="index">
<a href="https://www.kde.org/code-of-conduct/">行为守则</a>
</li><li class="index">
<a href="https://www.kde.org/presspage/">页面</a>
</li><li class="index">
<a href="https://www.kde.org/thanks.php">鸣谢</a>
</li><li class="index">
<a href="http://manifesto.kde.org/">宣言</a>
</li></ul></div></div><div class="menubox_bottom"></div></div></div><div id="mainmenu_workspaces" class="mainmenu_workspaces">
<h2>工作区</h2>
<div class="mainmenu_workspaces_sub plasmamenu_box_submenu">
<div class="menubox_top"></div>
<div class="menubox_body">
<div class="mainmenu_workspaces_animation"></div>
<div class="mainmenu_workspaces_content">
<ul class="menubox_title"><li class="index"><a href="https://www.kde.org/workspaces/">工作区</a></li></ul>
<img class="menubox_sep" src="https://www.kde.org/media/images/plasmaMenu/menubox_hr.png" alt="" />
<ul>
<li class="index">
<a href="https://www.kde.org/workspaces/plasmadesktop/">Plasma 桌面</a>
</li></ul></div></div><div class="menubox_bottom"></div></div></div><div id="mainmenu_applications" class="mainmenu_applications">
<h2>应用</h2>
<div class="mainmenu_applications_sub plasmamenu_box_submenu">
<div class="menubox_top"></div>
<div class="menubox_body">
<div class="mainmenu_applications_animation"></div>
<div class="mainmenu_applications_content">
<ul class="menubox_title"><li class="index"><a href="https://www.kde.org/applications/">应用</a></li></ul>
<img class="menubox_sep" src="https://www.kde.org/media/images/plasmaMenu/menubox_hr.png" alt="" />
<ul>
<li class="index">
<a href="https://www.kde.org/applications/development/">开发</a>
</li><li class="index">
<a href="https://www.kde.org/applications/education/">教育</a>
</li><li class="index">
<a href="https://www.kde.org/applications/games/">游戏</a>
</li><li class="index">
<a href="https://www.kde.org/applications/graphics/">图像</a>
</li><li class="index">
<a href="https://www.kde.org/applications/internet/">互联网</a>
</li><li class="index">
<a href="https://www.kde.org/applications/multimedia/">多媒体</a>
</li><li class="index">
<a href="https://www.kde.org/applications/office/">办公</a>
</li><li class="index">
<a href="https://www.kde.org/applications/system/">系统</a>
</li><li class="index">
<a href="https://www.kde.org/applications/utilities/">工具</a>
</li></ul></div></div><div class="menubox_bottom"></div></div></div><div id="mainmenu_developer_platform" class="mainmenu_developer_platform">
<h2>开发者平台</h2>
<div class="mainmenu_developer_platform_sub plasmamenu_box_submenu">
<div class="menubox_top"></div>
<div class="menubox_body">
<div class="mainmenu_developer_platform_animation"></div>
<div class="mainmenu_developer_platform_content">
<ul class="menubox_title"><li class="index"><a href="https://www.kde.org/developerplatform/">开发平台</a></li></ul>
<img class="menubox_sep" src="https://www.kde.org/media/images/plasmaMenu/menubox_hr.png" alt="" />
<ul>
<li class="index">
<a href="http://techbase.kde.org/">技术维基</a>
</li><li class="index">
<a href="http://api.kde.org/">API 文档</a>
</li><li class="index">
<a href="http://techbase.kde.org/Development/Tutorials/">教程</a>
</li></ul></div></div><div class="menubox_bottom"></div></div></div><div id="mainmenu_support" class="mainmenu_support">
<h2>支持</h2>
<div class="mainmenu_support_sub plasmamenu_box_submenu">
<div class="menubox_top"></div>
<div class="menubox_body">
<div class="mainmenu_support_animation"></div>
<div class="mainmenu_support_content">
<ul class="menubox_title"><li class="index"><a href="https://www.kde.org/support/">支持</a></li></ul>
<img class="menubox_sep" src="https://www.kde.org/media/images/plasmaMenu/menubox_hr.png" alt="" />
<ul>
<li class="index">
<a href="https://www.kde.org/support/international.php">国际站点</a>
</li><li class="index">
<a href="http://docs.kde.org/">文档</a>
</li><li class="index">
<a href="http://userbase.kde.org/">用户维基</a>
</li><li class="index">
<a href="http://techbase.kde.org/SysAdmin">系统管理维基</a>
</li><li class="index">
<a href="http://forum.kde.org/">论坛</a>
</li><li class="index">
<a href="https://bugs.kde.org/">提交缺陷</a>
</li><li class="index">
<a href="https://www.kde.org/support/mailinglists/">邮件列表</a>
</li><li class="index">
<a href="https://www.kde.org/info/security/">安全公告</a>
</li></ul></div></div><div class="menubox_bottom"></div></div></div></div>		</div>' . $body . '
	
	<div class="footer">
	</div><div style="clear: both;"></div>
</div>
<div class="cp-doNotDisplay">
  <h2>Global navigation links</h2>
  <ul>
    <li><a href="index.html" accesskey="8">KDE Home</a></li>
    <li><a href="http://accessibility.kde.org/" accesskey="9">KDE Accessibility Home</a></li>
    <li><a href="https://www.kde.org/media/accesskeys.php" accesskey="0">Description of Access Keys</a></li>
    <li><a href="index.html#cp-content">Back to content</a></li>
    <li><a href="index.html#cp-menu">Back to menu</a></li>
  </ul>
</div>

    <div id="footer"><div id="footer_text">
        由 <a href="mailto:master@kde-china.org">KDE 中国</a> 维护<br />
KDE<sup>&#174;</sup> 和 <a href="https://www.kde.org/media/images/trademark_kde_gear_black_logo.png">K 桌面环境<sup>&#174;</sup> 商标</a> 是 <a href="http://ev.kde.org/" title="KDE 非盈利组织的主页">KDE e.V.</a> 注册商标 |
        <a href="http://www.kde.org/community/whatiskde/impressum.php">Legal</a>
    </div></div>

<!--
WARNING: DO NOT SEND MAIL TO THE FOLLOWING EMAIL ADDRESS! YOU WILL
BE BLOCKED INSTANTLY AND PERMANENTLY!
<a href="mailto:aaaatrap-57e88c0b72f7dfe2@kde.org">Block me</a>
WARNING END
-->


<!-- Piwik -->
<script type="text/javascript">
  var pkBaseURL = "https://stats.kde.org/";
  document.write(unescape("%3Cscript src=\'" + pkBaseURL + "piwik.js\' type=\'text/javascript\'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
  piwik_action_name = \'Experience Freedom!\';
  piwik_idsite = 1;
  piwik_url = pkBaseURL + "piwik.php";
  piwik_log(piwik_action_name, piwik_idsite, piwik_url);
</script>
<script type="text/javascript" src="https://www.kde.org/media/javascripts/piwikbanner.js"></script>
<object><noscript><p>Analytics <img src="https://stats.kde.org/piwik.php?idsite=1" style="border:0" alt=""/></p></noscript></object>
<!-- End Piwik Tag -->


</body>
</html>';

echo $html;

?>
