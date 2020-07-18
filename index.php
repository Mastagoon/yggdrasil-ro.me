<?php if (!defined('FLUX_ROOT')) exit; ?>

<body>
    <style>
        body {
            height: 100vh;
            background: url("../imgs/bg.jpg");
            position: relative;
            background-size: cover;
            z-index: 10;
            overflow: hidden;
            -webkit-animation: changeColor 2s forwards;
            /* for less modern browsers */
            animation: changeColor 2s forwards;
            -webkit-animation-name: changeColor;
            animation-name: changeColor;
        }
        
        @-webkit-keyframes changeColor {
            from {
                background-color: rgba(255, 255, 255, 0.2);
            }
            to {
                background-color: rgba(0, 0, 0, 0.8);
            }
        }
        
        @keyframes changeColor {
            from {
                background-color: rgba(255, 255, 255, 0.2);
            }
            to {
                background-color: rgba(0, 0, 0, 0.8);
            }
        }
        
        body::before {
            z-index: -1;
            content: "";
            height: 100vh;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background-color: rgba(255, 255, 255, 0.2);
            -webkit-animation: changeColor 2s forwards;
            /* for less modern browsers */
            animation: changeColor 2s forwards;
        }
    </style>
 <!--  <nav id="main-nav">
        <div class="nav-links">
            <ul>
                <li><a href="#">الشحن</a></li>
                <li><a href="#">الويكي</a></li>
                <li><a href="#">التحميل</a></li>
                <li><a href="#">معلومات السيرفر</a></li>
                <li><a href="#" class="active">الرئيسية</a></li>
            </ul>
        </div>
        <div class="status">
            <div class="player-count">
                <span class="green">أونلاين</span>
                <span>1234</span>
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
            <!-- <i class="fa fa-bars"></i>
        </a>
    </nav>-->

	<!-- Register/Login form -->
	
    <div class="login-section">
        <img src="/imgs/succubus.png" alt="" class="succubus" />
		<img src="/imgs/logo.png" alt="" class="logo-form" />
		<?php if ($session->isLoggedIn()): ?>
			مرحباً <strong><?php echo htmlspecialchars($session->account->userid) ?></strong>,<br /><br />
				<ul>
					<li><a href="<?php echo $this->url('account', 'view') ?>">الحساب &amp; بيانات الشخصية</a></li>
					<li><a href="<?php echo $this->url('achievements', 'index') ?>">الإنجازات</a></li>
					<li><a href="<?php echo $this->url('servicedesk', 'index') ?>">الخدمات</a></li>
					<li><a href="<?php echo $this->url('account', 'logout') ?>">تسجيل الخروج</a></li>
				</ul>
		<?php else: ?>

        <div class="form">
            <form action="<?php echo $this->url('account', 'login', array('return_url' => $params->get('return_url'))) ?>" method="post">
                <h2>تسجيل الدخول</h2>
                <label for="username">اسم المستخدم</label>
                <input type="text" name="username" id="username-login" value="<?php echo htmlspecialchars($params->get('username')) ?>"/>
                <label for="password">كلمة المرور</label>
                <input type="password" name="password" id="password-login" />
                <div class="align-checkbox">
                    <input id="checkid" type="checkbox" value="test" />
                    <label for="checkid">تذكرني</label>
				</div>
				<input type="hidden" name="server" value="<?php echo htmlspecialchars($session->loginAthenaGroup->serverName) ?>">
                <input type="submit" value="تسجيل الدخول" class="btn-login" />
                <p>ليس لديك حساب؟ سجل <a href="#">هنا</a></p>
            </form>
		</div>
		<?php endif ?>
    </div>
</body>

</html>