<?php if (!defined('FLUX_ROOT')) exit; ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="rtl" lang="ar">

<head>
		<?php if (isset($metaRefresh)): ?>
		<meta http-equiv="refresh" content="<?php echo $metaRefresh['seconds'] ?>; URL=<?php echo $metaRefresh['location'] ?>" />
		<?php endif ?>
		<title><?php echo Flux::config('SiteTitle'); if (isset($title)) echo ": $title" ?> - يجدراسيلو راجناروك أونلاين</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" />
		<link href="//cdnjs.cloudflare.com/ajax/libs/animate.css/3.0.0/animate.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="<?php echo $this->themePath('css/main.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<link href="<?php echo $this->themePath('css/flux/unitip.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
		<?php if (Flux::config('EnableReCaptcha')): ?>
		<link href="<?php echo $this->themePath('css/flux/recaptcha.css') ?>" rel="stylesheet" type="text/css" media="screen" title="" charset="utf-8" />
		<?php endif ?>
		<link rel="stylesheet" href="<?php echo $this->themePath('css/style.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<!--[if IE]>
		<link rel="stylesheet" href="<?php echo $this->themePath('css/flux/ie.css') ?>" type="text/css" media="screen" title="" charset="utf-8" />
		<![endif]-->	
	</head>
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <nav id="main-nav">
        <div class="nav-links">
            <ul>
                <li><a href="#">الشحن</a></li>
                <li><a href="#">الويكي</a></li>
                <li><a href="/download">التحميل</a></li>
                <li><a href="/information">معلومات السيرفر</a></li>
                <li><a href="/index" class="active">الرئيسية</a></li>
            </ul>
		</div>
		<?php
			$onlinecounturl=file_get_contents("?module=server&action=status-xml");
			if($onlinecounturl) {
				$onlinecount = 0;
				$xmlcount = new SimpleXmlElement($onlinecounturl);
			}
			if(isset($xmlcount) && isset($xmlcount->Group)){
				foreach($xmlcount->Group->Server as $serv){
					$onlinecount = $onlinecount + $serv['playersOnline'];
				}
			}
		?>
        <div class="status">
            <div class="player-count">
                <span class="green">المتصلون</span>
                <span><?php echo $onlinecounturl?></span>
                <div class="circle green"></div>
            </div>
            <div class="server-status">
                <img class="server-status-icon" src="imgs/red_gemstone120x156.png" alt="" />
                <span>حالة السيرفر</span>
            </div>
            <div class="register-btn">
                <a href="#" class="primary-btn">التسجيل</a>
            </div>
        </div>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <!-- <i class="fa fa-bars"></i> -->
        </a>
    </nav>
</body>

</html>