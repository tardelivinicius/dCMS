@include('base/header')
	<div class="container">
		<div class="row">
			
			<div class="col-8">
				<div id="news-content">
					<div class="news-article show" style="background-image:url(img/web_promo/ABBOBADOS_P01.png)">
						<div class="shadow"></div>

						<div class="news-content">
							<div class="news-title">Lorem ipsum</div>
							<div class="news-short-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</div>
						</div>

						<div class="details-box">
							<div class="back-news"><i class="fal fa-angle-left"></i></div>

							<div class="authors-details">
								<div class="written-by">
									<b>Geschrieben von:</b>
									<span>Sonay</span>
								</div>
							</div>

							<a href="news.php" class="btn green news-slider-btn">Weiter lesen</a>

							<div class="next-news"><i class="fal fa-angle-right"></i></div>
						</div>
					</div>
					<div class="news-article show" style="background-image:url(img/web_promo/HWEEN13_Promo03.png)">
						<div class="shadow"></div>

						<div class="news-content">
							<div class="news-title">Lorem ipsum 22222</div>
							<div class="news-short-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.</div>
						</div>

						<div class="details-box">
							<div class="back-news"><i class="fal fa-angle-left"></i></div>

							<div class="authors-details">
								<div class="written-by">
									<b>Escrita por:</b>
									<span>vvalle</span>
								</div>
							</div>

							<a href="news.php" class="btn green news-slider-btn">Ler mais...</a>

							<div class="next-news"><i class="fal fa-angle-right"></i></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-4">
				<iframe src="https://discordapp.com/widget?id=570313601563492353&theme=dark" width="340" height="250" allowtransparency="true" frameborder="0"></iframe>
			</div>
			<div class="col-7">
				<div id="content-box">
					<div class="title-box png20">
						<div class="title">Campanhas</div>
						<div class="desc">Veja o que está rolando de campanhas no {{ $hotel_name }}</div>
					</div>
					<div class="png20">
						<div class="campaigns">
							<a href="">
								<div class="img" style="background-image:url(img/web_promo/HWEEN13_Promo03.png)"></div>
								<div class="details">
									<div class="title">UM NOVO SUPER RARO</div>
									<div class="desc">Vocês não podem ficar longe dessa</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-5">
				<div id="content-box" style="max-height:300px">
					<div class="title-box png20">
						<div class="title">Notícias / Eventos</div>
						<div class="desc">Confira os últimos eventos no {{ $hotel_name }}</div>
					</div>
					<div class="png20">
								<div class="event">
									<div class="icon" style="width:13%"><i class="fa fa-play fa-2x" aria-hidden="true"></i></div>
									<div class="info" style="width:87%">
										<div class="event_title">Encontro dos Gerentes</div>
										<div class="event_date">Inicia em
											<b>13/02/2020</b> às
											<b>21:00 hr</b></div>
										<div style="clear: both"></div>
										<div class="event_desc">Venha bater um papo descontraído, divertido e ainda tenha chances de ganhar prêmios!</div>
									</div>
									<div style="clear: both"></div>
								</div>
					</div>
				</div>
			</div>
@include('base/footer')