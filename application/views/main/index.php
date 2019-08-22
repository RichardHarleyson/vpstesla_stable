<div class="modal fade" id="testdrive_modal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content bg-dark text-white">
			<div class="modal-header">
				<h3 class="modal-title text-white">Запись на тест драйв</h3>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body bg-dark">
				<form id="testdrive_form">
					<div class="form-group">
						<label>Имя</label>
						<input type="text" name="uname" class="form-control">
					</div>
					<div class="form-group">
						<label>Телефон</label>
						<input required type="text" name="uphone" class="form-control">
					</div>
					<div class="text-center">
						<a onclick="testdrive_send()" class="btn btn-lg btn-d btn-rd tesla-wire-button-white d-inline-block w-50 my-1" >Отправить</a>
					</div>
					<div class="test_drive_status text-center my-3">

					</div>
				</form>
			</div>
		</div>
	</div>
</div>
	<!-- Main container -->
	<div class="page-container">
			<!-- model-y -->
			<div class="bloc bloc-fill-screen full-width-bloc bgc-black tc-white tesla-hero-background d-bloc " id="model-y">
					<div class="container fill-bloc-top-edge">
							<div class="row">
									<div class="col-12">
											<nav class="navbar row navbar-expand-md navbar-dark" role="navigation">
													<a class="navbar-brand" href="/"><img src="/public/media/img/logo.png" alt="logo" /></a>
													<button id="nav-toggle" type="button" class="ui-navbar-toggler navbar-toggler border-0 p-0 mr-md-0 ml-auto" data-toggle="collapse" data-target=".navbar-1" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
													<div class="collapse navbar-collapse navbar-1  sidebar-nav">
															<ul class="site-navigation nav navbar-nav ml-auto">
																	<li class="nav-item"><a href="/" class="nav-link tesla-navigation" >Главная</a></li>
																	<li class="nav-item"><a href="/instock" class="nav-link tesla-navigation" >В Наличии</a></li>
																	<li class="nav-item"><a href="/services" class="nav-link tesla-navigation" >Сервис</a></li>
																	<li class="nav-item"><a href="/accessories" class="nav-link tesla-navigation" >Аксессуары</a></li>
																	<!-- <li class="nav-item"><a href="https://eldargezalov.com" class="nav-link tesla-navigation" >Designer</a></li>
																	<li class="nav-item"><a href="https://blocstemplates.com/nikola.html" class="nav-link tesla-navigation" >Download</a></li> -->
															</ul>
													</div>
											</nav>
									</div>
									<div class="col-lg-12 tesla-hero-titlte">
											<h4 class="text-center mg-clear sm-shadow animated fadeInUp animDelay08" data-appear-anim-style="fadeInUp">VPSTESLA</h4>
											<h1 class="text-center mg-clear sm-shadow none animated fadeInUp animDelay08 d-none d-md-block" data-appear-anim-style="fadeInUp">
												<a href="/instock" class="btn btn-lg btn-d btn-rd tesla-wire-button-white d-inline-block" style="width: 200px;" >Авто в Наличии</a>
												<a href="/services" class="btn btn-lg btn-d btn-rd tesla-wire-button-white d-inline-block" style="width: 200px;" >Сервис</a>
											</h1></div>
							</div>
					</div>
					<div class="container">
							<div class="row">
									<div class="col-lg-12">
											<div>
													<ul class="snap-scroll-pagination snap-scroll-paginate-dashes" data-min-breakpoint="768"></ul>
											</div>
									</div>
							</div>
					</div>
					<div class="container fill-bloc-bottom-edge mb-sm-3 mb-lg-5">
							<div class="row no-gutters">
									<div class="col-12 offset-lg-0 col-lg-12">
											<div class="card border-0 card-sq bgc-white tesla-hero-bottom d-none d-md-block">
													<div class="row no-gutters rounded" style="background-color: rgba(0, 0, 0, 0);">
															<div class="col-lg-4 col-md-4 col-sm-10 mx-auto border-right border-white align-self-center tesla-card-no-padding col-10 animated fadeIn animDelay04" data-appear-anim-style="fadeIn">
																<h2 class="text-center tc-white mg-clear sm-shadow">Vehicles</h2>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-10 mx-auto border-right border-white align-self-center tesla-card-no-padding col-10 animated fadeIn animDelay06" data-appear-anim-style="fadeIn">
																<h2 class="text-center tc-white mg-clear sm-shadow">Parts</h2>
															</div>
															<div class="col-lg-4 col-md-4 col-sm-10 mx-auto align-self-center tesla-card-no-padding col-10 animated fadeIn animDelay08" data-appear-anim-style="fadeIn">
																<h2 class="text-center tc-white mg-clear sm-shadow">Service</h2>
															</div>
															<!-- <div class="col-lg-3 col-md-3 align-self-center tesla-hero-button-column animated fadeIn animDelay1" data-appear-anim-style="fadeIn">
																	<div class="text-center"><a href="#services" class="btn btn-d btn-lg tesla-wire-button-white" >Подробней</a></div>
															</div> -->
													</div>
											</div>
											<div class="card border-0 card-sq bgc-white tesla-hero bottom text-center d-block d-md-none">
												<div class="text-center">
													<a href="/services" class="btn btn-lg btn-d btn-rd tesla-wire-button-white d-inline-block w-75 my-1" >Сервис</a>
													<a href="/instock" class="btn btn-lg btn-d btn-rd tesla-wire-button-white d-inline-block w-75 my-1" >Авто в Наличии</a>
												</div>
											</div>
									</div>
									<div class="col-12 tesla-bottom-arrow">
											<div class="text-center"><a href="services" data-scroll-speed="1000" onclick="scrollToTarget('0',this)"><span class="fa fa-angle-down icon-md icon-white animLoopInfinite animated pulse none" data-appear-anim-style="pulse"></span></a></div>
									</div>
							</div>
					</div>
			</div>
			<!-- model-y END -->

			<!-- Test Drive -->
			<div class="container-fluid text-center my-5">
				<h2 class=" mb-4">Запишись на тест драйв и почувствуй разницу</h2>
				<a data-target="#testdrive_modal" data-toggle="modal" class="btn btn-lg btn-d btn-rd tesla-wire-button-black d-inline-block">Запись на Тест Драйв</a>
			</div>
			<hr class="w-50">
			<!-- Test Drive END -->

			<!-- Service -->
			<div class="container mb-5">
				<div class="text-center my-5">
					<h2 id="services">Сервисные Услуги</h2>
				</div>
				<div class="row text-center mb-3">
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 col-10 mx-auto my-3">
						<i class="text-d fas fa-cog fa-3x"></i>
						<p class="my-2"><span>Заказ и замена запчастей</span></p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 col-10 mx-auto my-3">
						<i class="text-d fas fa-exclamation-triangle fa-3x"></i>
						<p class="my-2"><span>Устранение ошибок</span></p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 col-10 mx-auto my-3">
						<i class="text-d fas fa-language fa-3x"></i>
						<p class="my-2"><span>Русификация системы</span></p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 col-10 mx-auto my-3">
						<i class="text-d far fa-thumbs-up fa-3x"></i>
						<p class="my-2"><span>Обновление прошивки</span></p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 col-10 mx-auto my-3">
						<i class="text-d fas fa-key fa-3x"></i>
						<p class="my-2"><span>Добавление новых ключей</span></p>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-10 col-10 mx-auto my-3">
						<i class="text-d fas fa-map fa-3x"></i>
						<p class="my-2"><span>Установка и активация навигационных карт</span></p>
					</div>
				</div>
				<div class="text-center">
					<!-- <button class="btn btn-primary btn-lg">Полный Список Сервисных Услуг</button> -->
					<a href="/services" class="btn btn-lg btn-d btn-rd tesla-wire-button-black d-inline-block" >Полный Список Сервисных Услуг</a>
				</div>
			</div>
			<!-- Service END -->

			<!-- safety -->
			<div class="bloc none full-width-bloc tc-dark-jungle-green bloc-fill-screen nikola-bloc-padding bgc-white-smoke" id="safety">
					<div class="container">
							<div class="row no-gutters nikola-safety-row align-items-end">
									<div class="col-lg-3 order-md-2 order-lg-1 order-sm-2 order-2">
											<div class="row no-gutters nikola-sidebar">
													<div class="col-12 order-lg-1 order-sm-1 order-1 col-lg-12 align-self-start col-md-12">
															<!-- <p class="tesla-uptitle-extra-light mg-clear mg-clear-md mg-clear-sm">Безопасность</p> -->
															<h3 class="tc-black mg-clear tesla-heading-padding mg-clear-sm mg-clear-md mg-clear-xs">Оригинальные Комплектующие</h3>
															<p class="mg-md-xs mg-md-sm mg-clear mg-clear-md">VPSTesla предлагает только оригинальные запчасти. Высокое качество для высококласного автомобиля, никаких компромисов.
																	<br>
															</p>
															<div class="text-center">
																<a href="" class="btn btn-d btn-rd tesla-wire-button-black d-inline-block mt-4" >Подробней</a>
															</div>
													</div>
													<div class="col-12 offset-md-0 order-sm-3 order-3 order-lg-2 col-lg-12 align-self-end col-md-12 order-md-2 none"></div>
											</div>
									</div>
									<div class="col-lg-9 col-md-12 order-md-1 order-lg-2 order-sm-1 order-1 align-self-center">
											<!-- <div class="embed-responsive embed-responsive-16by9 nikola-video-safety"> -->
												<img class="img-fluid" src="/public/media/img/swap/tesla_repair.png" alt="">
													<!-- <video class="embed-responsive-item" playsinline="true" muted="true" autoplay="autoplay">
															<source src="vid/safety.mp4" type="video/mp4" />Your browser does not support HTML5 video.</video> -->
											<!-- </div> -->
									</div>
							</div>
					</div>
			</div>
			<!-- safety END -->

			<!-- Veh Ready -->
			<div class="container my-4">
					<div class="text-center my-3">
						<h2>Авто в Наличии</h2>
					</div>
					<div class="carousel_desktop">
						<div class="">
							<div class="card mx-auto text-center" style="width: 19rem;">
								<img class="card-img-top" src="/public/media/img/swap/head_2_lg_compressed.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Tesla Model S</h5>
									<div class="card-text">
										<div class="row">
											<div class="col">
												<i class="far fa-calendar-alt"></i>
												<p>2013г</p>
											</div>
											<div class="col">
												<i class="fas fa-road"></i>
												<p>23000км</p>
											</div>
											<div class="col">
												<i class="fas fa-dollar-sign"></i>
												<p>39000$</p>
											</div>
										</div>
									</div>
									<a href="" class="btn btn-d btn-rd tesla-wire-button-black d-inline-block mt-4" >Подробней</a>
								</div>
							</div>
						</div>
						<div class="">
							<div class="card mx-auto text-center" style="width: 19rem;">
								<img class="card-img-top" src="/public/media/img/swap/head_2_lg_compressed.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Tesla Model 3</h5>
									<div class="card-text">
										<div class="row">
											<div class="col">
												<i class="far fa-calendar-alt"></i>
												<p>2013г</p>
											</div>
											<div class="col">
												<i class="fas fa-road"></i>
												<p>23000км</p>
											</div>
											<div class="col">
												<i class="fas fa-dollar-sign"></i>
												<p>39000$</p>
											</div>
										</div>
									</div>
									<a href="" class="btn btn-d btn-rd tesla-wire-button-black d-inline-block mt-4" >Подробней</a>
								</div>
							</div>
						</div>
						<div class="">
							<div class="card mx-auto text-center" style="width: 19rem;">
								<img class="card-img-top" src="/public/media/img/swap/head_2_lg_compressed.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Tesla Model X</h5>
									<div class="card-text">
										<div class="row">
											<div class="col">
												<i class="far fa-calendar-alt"></i>
												<p>2013г</p>
											</div>
											<div class="col">
												<i class="fas fa-road"></i>
												<p>23000км</p>
											</div>
											<div class="col">
												<i class="fas fa-dollar-sign"></i>
												<p>39000$</p>
											</div>
										</div>
									</div>
									<a href="" class="btn btn-d btn-rd tesla-wire-button-black d-inline-block mt-4" >Подробней</a>
								</div>
							</div>
						</div>
						<div class="">
							<div class="card mx-auto text-center" style="width: 19rem;">
								<img class="card-img-top" src="/public/media/img/swap/head_2_lg_compressed.jpg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Tesla Model Z</h5>
									<div class="card-text">
										<div class="row">
											<div class="col">
												<i class="far fa-calendar-alt"></i>
												<p>2013г</p>
											</div>
											<div class="col">
												<i class="fas fa-road"></i>
												<p>23000км</p>
											</div>
											<div class="col">
												<i class="fas fa-dollar-sign"></i>
												<p>39000$</p>
											</div>
										</div>
									</div>
									<a href="/instock" class="btn btn-d btn-rd tesla-wire-button-black d-inline-block mt-4" >Подробней</a>
								</div>
							</div>
						</div>
					</div>
			</div>
			<!-- Veh Ready End -->

			<!-- Model Info -->
			<div class="container my-4">
				<div class="text-center my-3">
					<h2>Модельный Ряд Tesla</h2>
				</div>
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mx-auto my-3">
							<img class="img-fluid" src="/public/media/img/swap/tesla_s_small_compressed.jpg" alt="">
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mx-auto my-3">
						<div class="text-center">
							<h3>Tesla Model S</h3>
						</div>
						<p>Неповторимый оригинал компании Tesla Motors начиная с 2012г. Именно этот автомобиль поднял планку для электромобилей класса Lux. Базовая комплектация данной модели имеет двигатель мощностью 60кВт/ч и задний привод, что позволяет брать 100км/ч всего за 5,9 секунд. Электрокар так же отлично подходит для дальних поездок, что существенно расширяет перспективу его применений и по сей день.</p>
						<div class="text-center">
							<a href="/instock" class="btn btn-d btn-rd tesla-wire-button-black d-inline-block mt-4" >Авто в Наличии</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mx-auto my-3">
							<img class="img-fluid" src="/public/media/img/swap/tesla_3_small_compressed.jpg" alt="">
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mx-auto my-3">
						<div class="text-center">
								<h3>Tesla Model 3</h3>
						</div>
						<p>Tesla Model 3 поражает всеми своими аспектами. У нее стильный и стремительный дизайн, который как нельзя лучше подчеркнет характер и статус своего владельца в обществе. Внутри вы найдете массу хитроумных систем и полезных устройств, призванных сделать вашу поездку комфортной, интересной, а самое главное- безопасной. Производитель прекрасно понимает, что автомобиль- это не высокотехнологичная игрушка и в первую очередь он должен дарить удовольствие от вождения. Именно поэтому, седан оснащен инновационной силовой установкой, являющейся прекрасным аналогом традиционным двигателем внутреннего сгорания. Tesla Model 3 прослужит вам многие километры и подарит незабываемые эмоции от поездки.
						</p>
						<div class="text-center">
							<a href="/instock" class="btn btn-d btn-rd tesla-wire-button-black d-inline-block mt-4" >Авто в Наличии</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mx-auto my-3">
							<img class="img-fluid" src="/public/media/img/swap/tesla_x_small2_compressed.jpg" alt="">
					</div>
					<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mx-auto my-3">
						<div class="text-center">
								<h3>Tesla Model X</h3>
						</div>
						<p>Вопреки расхожему мнению, Model 3 не имеет почти ничего общего с Model S – это совершенно разные электромобили, у которых намного больше различий, чем сходства. Причём как в мелочах вроде дверных ручек, кнопок открытия дверей и салонного зеркала заднего вида, так и в конструкции всех основных частей и элементов. Кузов данного электрокара целиком стальной. По скоростным и динамическим характеристикам новинка Tesla не сильно проигрывает Model S: Model 3 разгоняется до 100 км/ч за 5,1 с и способна развить максимальную скорость 225 км/ч!
						</p>
						<div class="text-center">
							<a href="/instock" class="btn btn-d btn-rd tesla-wire-button-black d-inline-block mt-4" >Авто в Наличии</a>
						</div>
					</div>
				</div>
			</div>
			<hr class="w-50">
			<!-- Model Info End -->

	<div class="container my-3">
		<div class="text-center my-3">
			<h2>Официальные аксессуары Tesla</h2>
		</div>
		<div class="text-center">
			<h4>От зарядок и адаптеров до ковриков и футболок</h4>
			<div class="photos">
				<a href="/accessories">
					<img class="img-fluid" src="/public/media/img/swap/tesla_adapters.jpg" alt="">
				</a>
			</div>
			<a href="/accessories" class="btn btn-d btn-rd tesla-wire-button-black d-inline-block my-4" >Каталог Аксессуаров</a>
		</div>
	</div>

	</div>
