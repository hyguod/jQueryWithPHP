
<div class="login-page">
	
	<div class="profile-display">
		<div class="profile-phtot-uploaded">
            <img width="46" id="user-comment-photo" height="46" src="images/default_photo.png" />   
        </div>
        <div class="profile-display-name">
        	<span>Carl Wong</span>
        </div>
	</div>

	<div class="logo-area">
		<img width="100%" height="16.666667%" src="images/xiaocai_logo.svg" />
	</div>

	<div class="lo-re-area">
		<a class="button button-caution button-pill">登录</a>
		<div class="fast-register">快速注册</div>
	</div>
	<div class="column-menu">
		<ul>
			<li class="left-menu-reading"><span><img src="images/reading_red.png"></span>阅读列表</li>
			<li class="left-menu-foodlist"><span><img src="images/foodlist_red.png"></span>食材采购清单</li>
			<li class="left-menu-reversion">
				<span><img src="images/response_red.png"></span>
				收到的回复
			</li>
			<li class="left-menu-setting"><span><img src="images/setting_red.png"></span>设置<div style="opacity:0;" id="response-flag"><span>·</span></div></li>
		</ul>
	</div>
	<div class="stem-shadow">
	</div>
</div>

<div class="login-page-navigate"></div>

	<script type="text/javascript">

		if(localStorage.isReply=='1'){
			$('#response-flag').css('opacity','1');
		}else{
			$('#response-flag').css('opacity','0');
		}

		$('.login-page-navigate').click(function(){
			$('.nav-menu').click();
		});

		$('.profile-display-name').css({
			'left':$('.profile-phtot-uploaded').width()+30,
			'top':'24px'
		});

	</script>
