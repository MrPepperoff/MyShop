<?php defined ("_JEXEC") or die(); ?>

<?php
$app = JFactory::getApplication();
$params = $app->getTemplate(true)->params;
$doc = JFactory::getDocument();

// style
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/bootstrap.min.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/style.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/all.min.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/fonts.css');

//scripts
$doc->addScript(JUri::base().'templates/'.$doc->template.'/js/myscript.js');
?>
<!doctype html>

<html lang="ru">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<jdoc:include type="head"/>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="<?php echo $favicon; ?>" type="image/x-icon">

	


	<script src="templates/<?php echo $this->template; ?>/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="templates/<?php echo $this->template; ?>/js/main.js" type="text/javascript"></script>
</head>
<body>
	<div class="delivery">
		<div class="container">
			<div class="row">
				<div class="col delivery__item">
					<span><i class="fa-solid fa-truck fa-flip-horizontal"></i> Бесплатная доставка</span>
					<span>при заказе от</span>
					<span>5000 руб.</span>
				</div>
			</div>
		</div>
	</div>
	<header class="header">
		<div class="container header__top">
			<div class="row justify-content-between">
				<div class="col-3 header__top__logo">
					<a href="/">
						<img src="templates/<?php echo $this->template; ?>/images/logo.png" alt="logo">
					</a>
				</div>
				<div class="col-6 header__top__phone phone">
					<div class="phone__number"><i class="fa-solid fa-phone"></i> 8(800)000-00-00</div>

					<nav class="navbar navbar-expand-lg">
						<div class="container-fluid">
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
							
								<?php if($doc-> countModules('position-0')) :?>
									<jdoc:include type="modules" name="position-0" style="xhtml" />
								<?php endif; ?>
							</div>
						</div>
					</nav>
				</div>
				<div class="col-lg-2 d-lg-block d-md-none d-sm-none d-xs-none header__top__time">
					<p><span>пн-пт: </span>10.00 - 18.00</p>
					<p><span>сб: </span>10.00 - 16.00</p>
					<p><span>вс: </span>выходной</p>
				</div>
			</div>
		</div>
		<div class="container header__center">
			<div class="row justify-content-between flex_add">
				<div class="col-3 header__top__soc soc">
					<ul class="soc__list">
						<li class="soc__item"><a href="#" class="soc__link"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li class="soc__item"><a href="#" class="soc__link"><i class="fa-brands fa-twitter"></i></a></li>
						<li class="soc__item"><a href="#" class="soc__link"><i class="fa-brands fa-telegram"></i></a></li>
					</ul>
				</div>
				<div class="col-6 search">
					<?php if($doc-> countModules('position-1')) :?>
						<jdoc:include type="modules" name="position-1" style="xhtml"/>
					<?php endif; ?>
				</div>
				<div class="col-2 cart">
					<?php if($doc-> countModules('position-2')) :?>
						<jdoc:include type="modules" name="position-2" style="xhtml"/>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</header>
	<div class="bac">
		<div class="container">
			<div class="row">
				<nav class="col-lg-3 col-md-12 col-sm-12 col-xs-12 left_block">
					<?php if($doc-> countModules('position-3')) :?>
						<jdoc:include type="modules" name="position-3" style="xhtml"/>
					<?php endif; ?>
				</nav>
				<div class="col-lg-9 col-md-12 col-sm-12 col-xs-12 main_block">
					<div class="main_slider">
						<?php if($doc-> countModules('position-4')) :?>
							<jdoc:include type="modules" name="position-4" style="xhtml"/>
						<?php endif; ?>
					</div>
					<div class="content">
						<jdoc:include type="component" />
					
					<div class="main_tabs">
						<ul class="nav nav-tabs" id="myTab" role="tablist">
							<li class="nav-item" role="presentation">
								<button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Хиты продаж</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="sales-tab" data-bs-toggle="tab" data-bs-target="#sales-tab-pane" type="button" role="tab" aria-controls="sales-tab-pane" aria-selected="false">Скидки</button>
							</li>
							<li class="nav-item" role="presentation">
								<button class="nav-link" id="new-tab" data-bs-toggle="tab" data-bs-target="#new-tab-pane" type="button" role="tab" aria-controls="new-tab-pane" aria-selected="false">Новинки</button>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
								<?php if($doc-> countModules('position-5')) :?>
									<jdoc:include type="modules" name="position-5" style="xhtml"/>
								<?php endif; ?>
							</div>
							<div class="tab-pane fade" id="sales-tab-pane" role="tabpanel" aria-labelledby="sales-tab" tabindex="0">
								<?php if($doc-> countModules('position-10')) :?>
									<jdoc:include type="modules" name="position-10" style="xhtml"/>
								<?php endif; ?>
							</div>
							<div class="tab-pane fade" id="new-tab-pane" role="tabpanel" aria-labelledby="new-tab" tabindex="0">
								<?php if($doc-> countModules('position-11')) :?>
									<jdoc:include type="modules" name="position-11" style="xhtml"/>
								<?php endif; ?>
							</div>
						</div>
					</div>
					</div>
				</div>
			</div>
		</div>	
	</div>

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 line-rigth footer1_menu">
					<nav class="footer__menu">
						<?php if($doc-> countModules('position-6')) :?>
							<jdoc:include type="modules" name="position-6" style="xhtml" class="menu__item"/>
						<?php endif; ?>
					</nav>
				</div>
				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 line-rigth footer2_menu">
					<nav class="footer__menu">
						<?php if($doc-> countModules('position-7')) :?>
							<jdoc:include type="modules" name="position-7" style="xhtml" class="menu__item"/>
						<?php endif; ?>
					</nav>
				</div>
				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 line-rigth vk">
					<?php if($doc-> countModules('position-8')) :?>
						<jdoc:include type="modules" name="position-8" style="xhtml" class="menu__item"/>
					<?php endif; ?>
				</div>
				<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 ">
					<?php if($doc-> countModules('position-9')) :?>
						<jdoc:include type="modules" name="position-9" style="xhtml" class="menu__item"/>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col">
						<p>&#169; 2023 MyShop</p>
					</div>
					
				</div>
			</div>
		</div>
	</footer>

</body>
</html>