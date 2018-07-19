<?php if(!class_exists('Rain\Tpl')){exit;}?>
	<!--Início do Slider Bootstrap Carousel-->
	<div id="slider">
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	    </ol>
	    <!-- Wrapper for slides -->
	    <div class="carousel-inner">
	      <div class="item active">
	        <img src="/res/site/images/banner-tecnico.jpg" alt="Técnico em Enfermagem" style="width: 1349px; height: 400px">
	        <div class="carousel-caption">
	          <h1>Técnico em Enfermagem</h1>
	          <h4>Seja um profissional da saúde!</h4>
	        </div>
	      </div>
	      <div class="item">
	        <img src="/res/site/images/banner-uti.jpg" alt="UTI Adulto" style="width: 1349px; height: 400px">
	        <div class="carousel-caption">
	          <!--<h3>Chicago</h3>
	          <p>Thank you, Chicago!</p>-->
	        </div>
	      </div>
	      <div class="item">
	        <img src="/res/site/images/banner-trabalho.jpg" alt="Enfermagem do Trabalho" style="width: 1349px; height: 400px">
	        <div class="carousel-caption">
	          <!--<h3>New York</h3>
	          <p>We love the Big Apple!</p>-->
	        </div>
	      </div>
	      <div class="item">
	        <img src="/res/site/images/banner-medicina.jpg" alt="Enfermagem com amor" style="width: 1349px; height: 400px">
	        <div class="carousel-caption">
	          <!--<h3>New York</h3>
	          <p>We love the Big Apple!</p>-->
	        </div>
	      </div>
	    </div>
	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right"></span>
	      <span class="sr-only">Next</span>
	    </a>
	 </div>
	</div>
	<section class="container" id="servicos">
		<header class="content">
			<h2 class="heading">
				<span></span>
				Nossos Cursos
				<div id="linha"></div>
			</h2>
		</header>
		<div class="content" id="servicos__itens">
			<div class="servicos__item">
				<a href="#">
					<span class="icon imgnurse"><img src="/res/site/images/imgnurse.png" alt="Técnico em Enfermagem"></span>
					<span class="icon imgnurse-hover"><img src="/res/site/images/imgnurse-hover.png" alt="Técnico em Enfermagem"></span>
					<span class="title">Técnico em Enfermagem</span>
					<!--<div class="imgnurse"><img src="images/imgnurse.png" alt="Técnico em Enfermagem"></div>-->
				</a>
			</div>
			<div class="servicos__item">
				<a href="#">
					<span class="icon imgtrabalho"><img src="/res/site/images/imgtrabalho.png" alt="Enfermagem do Trabalho"></span>
					<span class="icon imgtrabalho-hover"><img src="/res/site/images/imgtrabalho-hover.png" alt="Enfermagem do Trabalho"></span>
					<span class="title">Enfermagem do Trabalho</span>
				</a>
			</div>
			<div class="servicos__item">
				<a href="#">
					<span class="icon imguti"><img src="/res/site/images/imguti.png" alt="UTI Adulto"></span>
					<span class="icon imguti-hover"><img src="/res/site/images/imguti-hover.png" alt="UTI Adulto"></span>
					<span class="title">UTI Adulto</span>
				</a>
			</div>
		</div>
	</section>

	<section class="container" id="produtos">
		<header class="content">
				<h2 class="heading">
					<span></span>
					Sobre nós
					<div id="linha"></div>
				</h2>
		</header>
		<div class="content" id="produtos__itens">
			<div class="produtos__item">
				<img src="/res/site/images/card02.jpg" class="img-responsive" alt="Produtos" title="Produtos">
				<h2>Nossa história</h2>
				<p>Lorem ipsum dolor sit amet, 
				consectetur adipiscing elit, 
				sed do eiusmod tempor incid...</p>
				<a href="#" class="read_more">SAIBA +</a>
			</div>
			<div class="produtos__item">
				<img src="/res/site/images/card02.jpg" class="img-responsive" alt="Produtos" title="Produtos">
				<h2>Instalações</h2>
				<p>Lorem ipsum dolor sit amet, 
				consectetur adipiscing elit, 
				sed do eiusmod tempor incid...</p>
				<a href="#" class="read_more">SAIBA +</a>
			</div>
			<div class="produtos__item">
				<img src="/res/site/images/card02.jpg" class="img-responsive" alt="Produtos" title="Produtos">
				<h2>Material didático</h2>
				<p>Lorem ipsum dolor sit amet, 
				consectetur adipiscing elit, 
				sed do eiusmod tempor incid...</p>
				<a href="#" class="read_more">SAIBA +</a>
			</div>
			<div class="produtos__item">
				<img src="/res/site/images/card02.jpg" class="img-responsive" alt="Produtos" title="Produtos">
				<h2>Laboratório</h2>
				<p>Lorem ipsum dolor sit amet, 
				consectetur adipiscing elit, 
				sed do eiusmod tempor incid...</p>
				<a href="#" class="read_more">SAIBA +</a>
			</div>
		</div>
	</section>

	<section class="container" id="blog">
		<header class="content">
				<h2 class="heading">
					<span></span>
					BLOG
					<div id="linha"></div> 
				</h2>
		</header>
		<div class="content">
			<div id="posts">
				<div class="posts__item clearfix">
					<img src="/res/site/images/bg-post.png" class="img-responsive" alt="Título da postagem" title="Título da postagem">
					<h2>Título da postagem</h2>
					<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
					<a href="#" class="read_more">Continue lendo &raquo;</a>
				</div>
				<div class="posts__item clearfix">
					<img src="/res/site/images/bg-post.png" class="img-responsive" alt="Título da postagem" title="Título da postagem">
					<h2>Título da postagem</h2>
					<p>Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor. This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor.</p>
					<a href="#" class="read_more">Continue lendo &raquo;</a>
				</div>
			</div>

			<div id="sidebar">
				<div class="widget">
					<h3 class="widget__title">
						<span></span> Galeria de Fotos
						<div id="linha_widget"></div>
					</h3>
					<div class="footer-widget">
					<ul class="clearfix" id="fotos">
					    <li>
					    	<a href="#">
					    		<img src="/res/site/images/card01.jpg" class="img-responsive" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
					    	</a>
						</li>
						<li>
					    	<a href="#">
					    		<img src="/res/site/images/card01.jpg" class="img-responsive" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
					    	</a>
						</li>
						<li>
					    	<a href="#">
					    		<img src="/res/site/images/card01.jpg" class="img-responsive" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
					    	</a>
						</li>
						<li>
					    	<a href="#">
					    		<img src="/res/site/images/card01.jpg" class="img-responsive" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
					    	</a>
						</li>
						<li>
					    	<a href="#">
					    		<img src="/res/site/images/card01.jpg" class="img-responsive" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
					    	</a>
						</li>
						<li>
					    	<a href="#">
					    		<img src="/res/site/images/card01.jpg" class="img-responsive" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
					    	</a>
						</li>
						<li>
					    	<a href="#">
					    		<img src="/res/site/images/card01.jpg" class="img-responsive" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
					    	</a>
						</li>
						<li>
					    	<a href="#">
					    		<img src="/res/site/images/card01.jpg" class="img-responsive" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
					    	</a>
						</li>
						<li>
					    	<a href="#">
					    		<img src="/res/site/images/card01.jpg" class="img-responsive" alt="Fotos Escola Ciclo Vittal" title="Fotos Escola Ciclo Vittal">
					    	</a>
						</li>
					</div>
					<div class="foto_gallery" id="foto_onclick">
						<a href="#">
							<img src="/res/site/images/card01.jpg" alt="" style="height: 230px">
						</a>	
					</div>
				</div>
			</div>
	</section>
	