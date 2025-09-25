<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Full throttle -Port Forio-</title>
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<link rel="stylesheet" href="index_parts/css/full/common.css" media="screen and (min-width: 1024px)">
		<link rel="stylesheet" href="index_parts/css/middle/common_middle.css" media="screen and (min-width:481px) and (max-width:1023px)">
		<link rel="stylesheet" href="index_parts/css/mobile/common_mobile.css" media="screen and (max-width:480px)">
		<link rel="stylesheet" href="index_parts/css/full/main.css" media="screen and (min-width: 1024px)">
		<link rel="stylesheet" href="index_parts/css/middle/main_middle.css" media="screen and (min-width:481px) and (max-width:1023px)">
		<link rel="stylesheet" href="index_parts/css/mobile/main_mobile.css" media="screen and (max-width:480px)">
		<link rel="shortcut icon" href="index_parts/images/contents/favicon.ico">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Kosugi+Maru&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c&family=Noto+Sans+JP:wght@500&family=Rock+Salt&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@700&display=swap" rel="stylesheet">
		<script src="../jQuery.js"></script>
		<script src="../typist.js"></script>
		<script src="index_parts/full_throttle.js"></script>
	</head>


	<body>
		<!--==[ローディング]==-->
		<div id="loading-containar">
			<img src="index_parts/images/title/bike_icon.png" id="bike-icon" alt="bike_icon">
			<span id="center-line"></span>
			<div id="loading-txt-outer">
				<p id="loading-txt"><!--typist.js--></p>
			</div>
			<!--上に上がるエリア-->
			<div class="load-wrapper cover-up"></div>
			<!--下に下がるエリア-->
			<div class="load-wrapper cover-down"></div>
		</div>


		<!--==[ヘッダー]==-->
		<header>
			<!--ロゴ-->
			<a href="#title-container" id="head-logo">
				<img src="index_parts/images/title/title.png" id="head-logo-img" alt="head_logo">
			</a>
			<!--[メニュー]-->
			<ul id="menu-list-outer">
				<li class="menu-list"><a href="#title-container" class="menu-item">top</a></li>
				<li class="menu-list"><a href="#about-container" class="menu-item">about</a></li>
				<li class="menu-list"><a href="#plofile-containar" class="menu-item">plofile</a></li>
				<li class="menu-list"><a href="#skill-containar" class="menu-item">skill</a></li>
				<li class="menu-list"><a href="#works-containar" class="menu-item">works</a></li>
			</ul>

			<!--メニューボタン(モバイル)-->
			<button type="button" id="menu-btn">
				<span id="menu-btn-outer">
					<span class="menu-btn-line"></span>
					<span class="menu-btn-line"></span>
					<span class="menu-btn-line"></span>
				</span>
			</button>

			<!--[メニュー(モバイル)]-->
			<div id="menu-list-mobile-outer">
				<div id="menu-list-mobile">
					<a href="#title-container" class="menu-item-mobile">top</a>
					<a href="#about-container" class="menu-item-mobile">about</a>
					<a href="#plofile-containar" class="menu-item-mobile">plofile</a>
					<a href="#skill-containar" class="menu-item-mobile">skill</a>
					<a href="#works-containar" class="menu-item-mobile">works</a>
				</div>
			</div>
		</header>


		<!--==[メインコンテンツ]==-->
		<main>
			<!--=[return_topアイコン]=-->
			<div id="return-top-icon">
				<img src="index_parts/images/contents/top_circle.png" id="outer-circle-img" alt="outer_circle">
				<div id="return_bike_outer">
					<img src="index_parts/images/contents/bike_body.png" id="return-bike-body" alt="bike_body">
					<img src="index_parts/images/contents/tire_f.png" id="tire-f" alt="tire_f">
					<img src="index_parts/images/contents/tire_r.png" id="tire-r" alt="tire_r">
				</div>
			</div>

			<!--(モバイル専用背景)-->
			<div id="main-wrapper-mobile"></div>

			<!--=[page1 タイトル]=-->
			<div id="title-container">
				<img src="index_parts/images/title/title.png" id="title-logo" alt="title">
				<button id="info-btn" class="local-btn">click</button>
			</div>


			<div id="contents-container">
				<!--コンテンツ内shadow-->
				<div class="window-shadow-l"></div>
				<div class="window-shadow-r"></div>

				<!--=[page2 about]=-->
				<div id="about-container" class="contents-outer">
					<!--付箋-->
					<div class="postit-outer">
						<div class="postit">about</div>
					</div>

					<!--自己紹介-->
					<div id="about-contents" class="contents-inner">
						<p id="about-name">仲澤勇樹</p>
						<p id="name-ruby">Nakazawa Yuuki</p>
						<!--テキスト-->
						<div id="about-txt">
							北海道江別市出身。短大の自動車工業科に通い、卒業後に自動車ディーラーに就職。
							<br>
							約１２年間、自動車整備士・自動車検査員として勤務。機械工学、電子制御などの様々なスキルを習得しました。
							<br>
							その後、数社の転職を経て「鉄道・船舶・バイク・電動自転車など」多岐に渡る業界を経験し成長することができました。
							<br>
							しかし、その間に元々持っていた障害が悪化。そのため一旦、立ち止まり身体と環境を立て直すことに。
							<br>
							現在はwebエンジニアを目指し日々、学習を続けています。
							<!--写真-->
							<img src="index_parts/images/about/gface.jpg" id="about-photo" alt="ganpura">
						</div>
					</div>
				</div>


				<!--=[page3 プロフィール]=-->
				<div id="plofile-containar" class="contents-outer">
					<!--付箋-->
					<div class="postit-outer">
						<div class="postit">plofile</div>
					</div>

					<!--紹介文-->
					<div class="contents-inner">
						<p id="plofile-title">人生をまとめてみました</p>
						<!--時系列-->
						<div class="plofile-inner-l">
							<!--写真-->
							<img src="index_parts/images/plofile/hiyoko.jpg" class="plofile-photo" alt="chick">
							<img src="index_parts/images/contents/line_L.png" class="arrow-img" alt="line_l">
							<!--テキスト-->
							<div class="plofile-txt-outer">
								<p class="plofile-txt-head">北海道江別市にて生を受ける</p>
								<span class="plofile-txt-line"></span>
								<p class="plofile-txt-foot"></p>
							</div>
						</div>

						<div class="plofile-inner-r">
							<!--写真-->
							<img src="index_parts/images/plofile/baseball_kids.jpg" class="plofile-photo" alt="baseball_boy">
							<img src="index_parts/images/contents/line_R.png" class="arrow-img" alt="line_r">
							<!--テキスト-->
							<div class="plofile-txt-outer">
								<p class="plofile-txt-head">小・中学校と野球に励む</p>
								<span class="plofile-txt-line"></span>
								<p class="plofile-txt-foot">小学６年の時に全道大会で優勝できたことは、一生の思い出です。</p>
							</div>
						</div>

						<div class="plofile-inner-l">
							<!--写真-->
							<img src="index_parts/images/plofile/guiter_man.jpg" class="plofile-photo" alt="guitar">
							<img src="index_parts/images/contents/line_L.png" class="arrow-img" alt="line_l">
							<!--テキスト-->
							<div class="plofile-txt-outer">
								<p class="plofile-txt-head">高校・短大時代はバイトとライブの日々</p>
								<span class="plofile-txt-line"></span>
								<p class="plofile-txt-foot">
									働くことが楽しく、毎日アルバイトばかりしていました。
									<br>
									魚屋・たいやき屋・解体業 etc..
									<br>
									中でも、マグロの解体ショーを任された時は緊張しました。
								</p>
							</div>
						</div>

						<div class="plofile-inner-r">
							<!--写真-->
							<img src="index_parts/images/plofile/mechanic.jpg" class="plofile-photo" alt="maintenance">
							<img src="index_parts/images/contents/line_R.png" class="arrow-img" alt="line_r">
							<!--テキスト-->
							<div class="plofile-txt-outer">
								<p class="plofile-txt-head">自動車整備士として</p>
								<span class="plofile-txt-line"></span>
								<p class="plofile-txt-foot">
									整備士・検査員業務で、ほぼ毎日遅くまで残業の激務でした。
									<br>
									ですが、この期間で体験は自分の中で大きく、知識や経験、考え方、人脈など財産を得ることができました。
								</p>
							</div>
						</div>

						<div class="plofile-inner-l">
							<!--写真-->
							<img src="index_parts/images/plofile/wedding.png" class="plofile-photo" alt="marriage">
							<img src="index_parts/images/contents/line_L.png" class="arrow-img" alt="line_l">
							<!--テキスト-->
							<div class="plofile-txt-outer">
								<p class="plofile-txt-head">結婚</p>
								<span class="plofile-txt-line"></span>
								<p class="plofile-txt-foot">
									結婚１年後に長男が生まれました。
								</p>
							</div>
						</div>

						<div class="plofile-inner-r">
							<!--写真-->
							<img src="index_parts/images/plofile/business.png" class="plofile-photo" alt="business">
							<img src="index_parts/images/contents/line_R.png" class="arrow-img" alt="line_r">
							<!--テキスト-->
							<div class="plofile-txt-outer">
								<p class="plofile-txt-head">サービスエンジニア</p>
								<span class="plofile-txt-line"></span>
								<p class="plofile-txt-foot">
									この間、数社を経験。様々な業界で新たな知識を取得。
									<br>
									そして、修理業務の他にクレーム処理や事務作業、技術講師、営業などいろいろな経験をしました。
								</p>
							</div>
						</div>

						<div class="plofile-inner-l">
							<!--写真-->
							<img src="index_parts/images/plofile/cry_man.jpg" class="plofile-photo" alt="despair">
							<img src="index_parts/images/contents/line_L.png" class="arrow-img" alt="line_l">
							<!--テキスト-->
							<div class="plofile-txt-outer">
								<p class="plofile-txt-head">障がいが悪化</p>
								<span class="plofile-txt-line"></span>
								<p class="plofile-txt-foot">
									元々持っていた障がい(本態性振戦)が悪化。普段の業務にも支障をきたし努力したが退職することに。
									<br>
									その後リハビリや通院を経て回復。
								</p>
							</div>
						</div>

						<div class="plofile-inner-r">
							<!--写真-->
							<img src="index_parts/images/plofile/programming.png" class="plofile-photo" alt="coding">
							<!--テキスト-->
							<div class="plofile-txt-outer">
								<p class="plofile-txt-head">新たな人生へ</p>
								<span class="plofile-txt-line"></span>
								<p class="plofile-txt-foot">
									以前から興味があったプログラミングに触れて衝撃が走る。
									<br>
									「好きこそ物の上手なれ」
									<br>
									現在はエンジニアを目指し努力の日々です。
								</p>
							</div>
						</div>
					</div>
				</div>


				<!--(page4 skill)-->
				<div id="skill-containar" class="contents-outer">
					<!--付箋-->
					<div class="postit-outer">
						<div class="postit">skill</div>
					</div>

					<div id="skill-contents" class="contents-inner">
						<div id="skill-list">
							<div id="skill-item-1" class="skill-item">
								<img src="index_parts/images/skill/htmlcss.png" class="skill-img" alt="html">
								<div class="skill-cont">
									<p class="skill-label">HTML/CSS</p>
									<p class="skill-txt">
										基本を理解し、手書きでのコーディングをメインで行っております。
										<br>
										SEO対策も学習しています。
										<br>
										UI/UXを意識したレスポンシブ対応の
											<a class="skill-link" href="index_parts/about_works/fiction.html">ホームページ</a>
										作成も問題なくできます。
									</p>
								</div>
							</div>

							<div id="skill-item-2" class="skill-item">
								<img src="index_parts/images/skill/js_jq.png" class="skill-img" alt="js">
								<div class="skill-cont">
									<p class="skill-label">JavaScript
										<small>(jQuery)</small>
									</p>
									<p class="skill-txt">
										配列・データの処理やオブジェクト操作、ページ上の要素の操作やアニメーション機能の実装なども行うことができます。
										<br>
										ライブラリは主にjQueryを使用しています。
										<br>
										Ajaxを使用した実装も行うことができます。
									</p>
								</div>
							</div>

							<div id="skill-item-3" class="skill-item">
								<img src="index_parts/images/skill/php.png" class="skill-img" alt="php">
								<div class="skill-cont">
									<p class="skill-label">PHP</p>
									<p class="skill-txt">
										データの処理機能や、データベースとの連携やセキュリティ観点も考慮し実装・構築することができます。
										<br>
										UI/UXを意識した簡単な掲示板などの作成が可能です。
										<br>
										※制作物の
											<a class="skill-link" href="index_parts/about_works/sowsow.html">簡易掲示板</a>
										をご参照下さい。
										<br>
										MySQLの基本構文の実装や基本的なDB設計も行うことができます。
									</p>
								</div>
							</div>

							<div id="skill-item-4" class="skill-item">
								<img src="index_parts/images/skill/python.png" class="skill-img" alt="php">
								<div class="skill-cont">
									<p class="skill-label">Python</p>
									<p class="skill-txt">
										基本的な操作やオブジェクトを理解し実装することができます。
										<br>
										外部ライブラリを使用した設計も可能です。
										<br>
										制作物として、Raspberry Piを用いて自動車の『キーレス連動ドアミラー自動開閉システム』を作成しました。
									</p>
								</div>
							</div>

							<div id="skill-item-5" class="skill-item">
								<img src="index_parts/images/skill/other.png" class="skill-img" alt="other">
								<div class="skill-cont">
									<p class="skill-label">Others</p>
									<div class="others-outer">
										<ul class="others-list">Microsoft office</ul>
											<li class="others-txt">在庫管理・顧客情報管理。</li>
											<li class="others-txt">見積書など基本的な文書の作成。</li>
											<li class="others-txt">プレゼン資料や講習会資料の作成。</li>

									</div>
									<div class="others-outer">
										<ul class="others-list">検索力</ul>
										<li class="others-txt-sub">今回のポートフォリオやPCの環境構築など、不明点は適切なキーワードや検索オプションを設定し、Web検索にて自己解決をすることができます。</li>
									</div>
								</div>
							</div>
						</div>

						<div id="license-cont">
							<div id="license-inner">
								<div id="license-head">
									保有資格
								</div>
								<P id="license-txt">
									普通自動車免許第一種
									<br>
									中型・大型自動二輪免許
									<br>
									国家２級自動車整備士 / 自動車検査員
									<br>
									ガス / アーク溶接技能者
									<br>
									玉掛技能者 / 床上操作式クレーン
									<br>
									低電圧取扱責任者 / 損害保険募集人
								</p>
							</div>
						</div>
					</div>
				</div>


				<!--(page5 works)-->
				<div id="works-containar" class="contents-outer">
					<!--付箋-->
					<div class="postit-outer">
						<div class="postit">works</div>
					</div>

					<div class="contents-inner">
						<div id="works-list">
							<div class="works-item">
								<a href="index_parts/about_works/full_throttle.html" class="works-link">
									<img src="index_parts/images/about_works/Full_throtle_img1.png" class="works-img" alt="this_img">
								</a>
								<a href="#" class="works-title-link">
									<p class="works-heading">ポートフォリオ</p>
									<p class="works-title-child">Full throttle</p>
								</a>
							</div>

							<div class="works-item">
								<a href="index_parts/about_works/sowsow.html" class="works-link">
									<img src="index_parts//images/works/sowsow.png" class="works-img" alt="sowsow_img">
								</a>
								<a href="index_parts/about_works/sowsow.html" class="works-title-link">
									<p class="works-heading">簡易掲示板</p>
									<p class="works-title-child">草々 -sowsow-</p>
								</a>
							</div>

							<div class="works-item">
								<a href="index_parts/about_works/fiction.html" class="works-link">
									<img src="index_parts//images/works/fiction.png" class="works-img" alt="corp_img">
								</a>
								<a href="index_parts/about_works/fiction.html" class="works-title-link">
									<p class="works-heading">架空企業サイト</p>
									<p class="works-title-child">株式会社 fiction</p>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>


		<!--==[フッター]==-->
		<footer>
			<p id="copy-right">&copy;Nakazawa Yuuki 2022</p>
		</footer>


		<!--==[モーダル]==-->
		<div id="over-lay">
			<div id="info-container">
				<p id="info-txt">
					ご覧いただきありがとうございます
					<br>
					こちらは仲澤勇樹のポートフォリオです
					<br>
					タイトルの『Full throtle(フルスロットル)』
					<br>
					は、仕事も遊びも妥協せず
					<br>
					全開に取り組む自分にちなみつけました
					<br>
					一生懸命、制作しましたので
					<br>
					最後までご覧いただけましたら幸いです
				</p>
				<img src="index_parts/images/contents/ojigi_neko.png" id="neko" alt="neko">
			</div>
			<nav id="modal-nav" class="flash-nav">画面クリックでメインへ戻ります</nav>
		</div>
	</body>

</html>
