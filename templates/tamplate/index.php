<?php defined ("_JEXEC") or die(); ?>

<?php
$app = JFactory::getApplication();
$params = $app->getTemplate(true)->params;
$doc = JFactory::getDocument();

// style
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/bootstrap.min.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/style.css');
$doc->addStyleSheet(JUri::base().'templates/'.$doc->template.'/css/all.min.css');

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
			<div class="row justify-content-center ">
				<div class="col-3 header__top__logo">
					<img src="templates/<?php echo $this->template; ?>/images/logo.png" alt="logo">
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
									<jdoc:include type="modules" name="position-0" style="xhtml" class="menu__item"/>
								<?php endif; ?>
							</div>
						</div>
					</nav>
				</div>
				<div class="col-2 header__top__time">
					<p><span>пн-пт: </span>10.00 - 18.00</p>
					<p><span>сб: </span>10.00 - 16.00</p>
					<p><span>вс: </span>выходной</p>
				</div>
			</div>
		</div>
		<div class="container header__center">
			<div class="row justify-content-center">
				<div class="col-3 header__top__soc soc">
					<ul class="soc__list">
						<li class="soc__item"><a href="#" class="soc__link"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li class="soc__item"><a href="#" class="soc__link"><i class="fa-brands fa-twitter"></i></a></li>
						<li class="soc__item"><a href="#" class="soc__link"><i class="fa-brands fa-telegram"></i></a></li>
					</ul>
				</div>
				<div class="col-6 search">

					<input type="text" class="search__input" placeholder="Поиск...">
					<button class="search__button">
						<i class="fa-solid fa-magnifying-glass"></i>
					</button>
				</div>
				<div class="col-2 cart ">
					<p class="cart__info">
						<i class="fa-solid fa-cart-shopping cart__info__text"></i> товаров:
						<span class="cart__info__number-of-products">0</span>
					</p>
					
				</div>
			</div>
		</div>
	</header>
	<main class="main">
		<section class="main__first">
			<div class="container">
				<div class="row">
					<div class="col">
						<jdoc:include type="component" />
					</div>
				</div>
			</div>	
		</section>
		
	</main>
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-3 line-rigth">
					<nav class="menu">
						<ul>
							<li class="menu__item"><a href="#" class="link">Главная</a></li>
							<li class="menu__item"><a href="#" class="link">Каталог</a></li>
							<li class="menu__item"><a href="#" class="link">О нас</a></li>
							<li class="menu__item"><a href="#" class="link">Новости</a></li>
							<li class="menu__item"><a href="#" class="link">Контакты</a></li>
						</ul>
					</nav>
				</div>
				<div class="col-3 line-rigth">
					<div class="register menu">
						<ul>
							<li class="menu__item"><a href="#" class="link">Вход</a></li>
							<li class="menu__item"><a href="#" class="link">Регистрация</a></li>
						</ul>
					</div>
				</div>
				<div class="col-3 line-rigth">
					<div class="footer__searth searth">
						<input type="text" class="search__input" placeholder="Поиск...">
						<button class="search__button">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</div>
				</div>
				<div class="col-3">
					<div class="footer__logo">
						<img src="templates/<?php echo $this->template; ?>/images/logo.png" alt="logo">
						<div class="footer__phone phone">
							<div class="phone__number"><i class="fa-solid fa-phone"></i> 8(800)000-00-00</div>
						</div>
						<div class="footer__logo__soc soc">
							<ul class="soc__list">
								<li class="menu__item" style="display: inline-block;padding: 0 10px 0 0;"><a href="#" class="link">info@mail.com</a></li>
								<li class="soc__item"><a href="#" class="soc__link"><i class="fa-brands fa-facebook-f"></i></a></li>
								<li class="soc__item"><a href="#" class="soc__link"><i class="fa-brands fa-twitter"></i></a></li>
								<li class="soc__item"><a href="#" class="soc__link"><i class="fa-brands fa-telegram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>