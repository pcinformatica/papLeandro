
                        <?php

                        function topind(){
                        ?>
                       <!DOCTYPE HTML>
<html>
	<head>
		<title>PHPJabbers.com | Free Travel Website Template</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../assets/css/main.css" />
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="inner">

							<!-- Logo -->
								<a href="index.php" class="logo">
									<span class="fa fa-anchor"></span> <span class="title">São Pedro de Moel </span>
								</a>

							<!-- Nav -->
								<nav>
									<ul>
										<li><a href="#menu">Menu</a></li>
									</ul>
								</nav>

						</div>
					</header>


<?php
}
?>
                            <?php

                            function Menuind(){
                                ?>
                              	<!-- Menu -->
					<nav id="menu">
						<h2>Menu</h2>
						<ul>
							<li><a href="index.php" class="active">Home</a></li>

							<li><a href="login/colorlib-regform-7/singin.html" >Login</a></li>

							<li><a href="packages.php">Alojamento</a></li>

							<li><a href="blog.php">Blog</a></li>

							<li><a href="packagesrestaurant.php">Restauração</a></li>



							<li>
								<a href="#" class="dropdown-toggle">Descobrir</a>

								<ul>
									<li><a href="about.php">Sobre S. Pedro</a></li>
									<li><a href="testimonials.php">Avaliações</a></li>
									<li><a href="terms.php">Termos</a></li>
                                    <li><a href="pontosdeinteresse.php">Pontos de Interesse</a></li>
								</ul>
							</li>
							<li><a href="contact.php">Contatos</a></li>
						</ul>
					</nav>


                                <?php
                            }
                            ?>
                            <?php

                            function bodyind(){
                                ?>

                             	<!-- Main -->
					<div id="main">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						  <ol class="carousel-indicators">
						    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
						  </ol>
						  <div class="carousel-inner">
						    <div class="carousel-item active">
						      <img class="d-block w-100" src="images//<?=$imagem->getFoto() ?>" alt="First slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/prv1.jpg" alt="Second slide">
						    </div>
						    <div class="carousel-item">
						      <img class="d-block w-100" src="images/fsp2.jpg" alt="Third slide">
						    </div>
						  </div>
						  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
						    <span class="sr-only">Previous</span>
						  </a>
						  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						    <span class="carousel-control-next-icon" aria-hidden="true"></span>
						    <span class="sr-only">Next</span>
						  </a>
						</div>

						<br>
						<br>

						<div class="inner">
							<!-- About Us -->
							<header id="inner">
								<h1>Encontre seu novo lugar para visitar!!</h1>
								<p> Banhando-se nas areias douradas do Atlântico, povoada de belas matas, a aldeia de S. Pedro propicia a quem a visita, locais inesquecíveis e de raro encanto.</p>
							</header>

							<br>

							<h2 class="h2">Alojamento</h2>

							<!-- Packages -->
							<section class="tiles">
								<article class="style1">
									<span class="image">
										<img src="../images/c1.jpg" alt="" />
									</span>
									<a href="package-details.php">
										<h2>Casa para aluguel</h2>

										<p><strong>€1094.00 - €1500.00</strong></p>

										<p>
											<small>
												<i class="fa fa-calendar"></i> Disponibilidade &nbsp;
												<i class="fa fa-cube"></i> Mínimo de 2 diárias &nbsp;
												<i class="fa fa-wifi"></i> Acesso à internet
											</small>
										</p>
									</a>
								</article>
								<article class="style2">
									<span class="image">
										<img src="../images/1a.jpg" alt="" />
									</span>
									<a href="package-details2.php">
										<h2>Mar e Sol Hotel Spa</h2>

										<p><strong>$300.00 - $400.00</strong></p>

										<p>
											<small>
												<i class="fa fa-calendar"></i> Disponibilidade  &nbsp;
												<i class="fa fa-cube"></i>Mínimo de 1 diária
												<i class="fa fa-shower"></i> Spa
											</small>
										</p>
									</a>
								</article>
								<article class="style3">
									<span class="image">
										<img src="../images/1b.jpg " alt="" />
									</span>
									<a href="package-details3.html">
										<h2>HomeMoel</h2>

										<p><strong>$300.00 - $400.00</strong></p>

										<p>
											<small>
												<i class="fa fa-calendar"></i> Disponibilidade
												<i class="fa fa-cube"></i> Mínimo de 1 diária
												<i class="fa fa-coffee"></i> Café da manhã incluído
											</small>
										</p>
									</a>
								</article>

								<article class="style4">
									<span class="image">
										<img src="../images/1c.jpg" alt="" />
									</span>
									<a href="package-details4.html">
										<h2>Hotel Verde Pinho</h2>

										<p><strong>$300.00 - $400.00</strong></p>

										<p>
											<small>
												<i class="fa fa-calendar"></i> Disponibilidade
												<i class="fa fa-cube"></i> Mínimo de 1 diária &nbsp;
												<i class="fa fa-car"></i> Estacionamento
											</small>
										</p>
									</a>
								</article>

								<article class="style5">
									<span class="image">
										<img src="../images/1d.jpg" alt="" />
									</span>
									<a href="teste%20rating/package-details5.html">
										<h2>Hotel Miramar - São Pedro de Moel</h2>

										<p><strong>$300.00 - $400.00</strong></p>

										<p>
											<small>
												<i class="fa fa-calendar"></i> Disponibilidade
												<i class="fa fa-cube"></i> Mínimo de 1 diária &nbsp;
												<i class="fa fa-coffee"></i> Café da manhã incluido
											</small>
										</p>
									</a>
								</article>

								<article class="style6">
									<span class="image">
										<img src="../images/1e.jpg" alt="" />
									</span>
									<a href="teste%20rating3/Better-Rating-Form/package-details6.html">
										<h2>Orbitur S Pedro De Moel</h2>

										<p><strong>$300.00 - $400.00</strong></p>

										<p>
											<small>
												<i class="fa fa-calendar"></i> Disponibilidade&nbsp;
												<i class="fa fa-cube"></i> Mínimo de 1 diária
												<i class="fa fa-life-ring"></i> Piscina
											</small>
										</p>
									</a>
								</article>
							</section>

							<p class="text-center"><a href="packages.php">Ver Alojamento &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

							<br>

                            <h2 class="h2">Restauração</h2>





                            <section class="tiles">
                                <article class="style1">
									<span class="image">
										<img src="../images/2a.jpg" alt="" />
									</span>
                                    <a href="package-details_rest.php">
                                        <h2>Restaurante O Penedo</h2>

                                        <p><strong>€1094.00 - €1500.00</strong></p>

                                        <p>
                                            <small>
                                                <i class="fa fa-calendar"></i> Disponibilidade &nbsp;
                                                <i class="fa fa-cube"></i> Mínimo de 2 diárias &nbsp;
                                                <i class="fa fa-wifi"></i> Acesso à internet
                                            </small>
                                        </p>
                                    </a>
                                </article>
                                <article class="style2">
									<span class="image">
										<img src="../images/2c.jpg" alt="" />
									</span>
                                    <a href="package-details2.html">
                                        <h2>Restaurante Brisamar</h2>

                                        <p><strong>€120.00 - €500.00</strong></p>

                                        <p>
                                            <small>
                                                <i class="fa fa-calendar"></i> Disponibilidade  &nbsp;
                                                <i class="fa fa-cube"></i>Mínimo de 1 diária
                                                <i class="fa fa-shower"></i> Spa
                                            </small>
                                        </p>
                                    </a>
                                </article>
                                <article class="style3">
									<span class="image">
										<img src="../images/r3.jpg " alt="" />
									</span>
                                    <a href="package-details3.html">
                                        <h2>Estrela do Mar</h2>

                                        <p><strong>€300.00 - €400.00</strong></p>

                                        <p>
                                            <small>
                                                <i class="fa fa-calendar"></i> Disponibilidade
                                                <i class="fa fa-cube"></i> Mínimo de 1 diária
                                                <i class="fa fa-coffee"></i> Café da manhã incluído
                                            </small>
                                        </p>
                                    </a>
                                </article>

                                <article class="style4">
									<span class="image">
										<img src="../images/r4.jpg" alt="" />
									</span>
                                    <a href="package-details4.html">
                                        <h2>Restaurante Central</h2>

                                        <p><strong>€120.00 - €400.00</strong></p>

                                        <p>
                                            <small>
                                                <i class="fa fa-calendar"></i> Disponibilidade
                                                <i class="fa fa-cube"></i> Mínimo de 1 diária &nbsp;
                                                <i class="fa fa-car"></i> Estacionamento
                                            </small>
                                        </p>
                                    </a>
                                </article>

                                <article class="style5">
									<span class="image">
										<img src="../images/r5.jpg" alt="" />
									</span>
                                    <a href="teste%20rating/package-details5.html">
                                        <h2>A Fonte</h2>

                                        <p><strong>€300.00 - €400.00</strong></p>

                                        <p>
                                            <small>
                                                <i class="fa fa-calendar"></i> Disponibilidade
                                                <i class="fa fa-cube"></i> Mínimo de 1 diária &nbsp;
                                                <i class="fa fa-coffee"></i> Café da manhã incluido
                                            </small>
                                        </p>
                                    </a>
                                </article>

                                <article class="style6">
									<span class="image">
										<img src="../images/r6.jpg" alt="" />
									</span>
                                    <a href="teste%20rating3/Better-Rating-Form/package-details6.html">
                                        <h2>Ponto de Encontro</h2>

                                        <p><strong>€300.00 - €400.00</strong></p>

                                        <p>
                                            <small>
                                                <i class="fa fa-calendar"></i> Disponibilidade&nbsp;
                                                <i class="fa fa-cube"></i> Mínimo de 1 diária
                                                <i class="fa fa-life-ring"></i> Piscina
                                            </small>
                                        </p>
                                    </a>
                                </article>



                            </section>





                <p class="text-center"><a href="packagesrestaurant.php">Ver Alojamento &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>























                            <br>
							<h2 class="h2">Avaliações</h2>

							<div class="row">
								<div class="col-sm-6 text-center">
									<p class="m-n"><em>"Muito bonita e acolhedora. E numa manhã de Setembro, cheia de nevoeiro, fica ainda mais bonita, e misteriosa."</em></p>

									<p><strong> - John Doe</strong></p>
								</div>

								<div class="col-sm-6 text-center">
									<p class="m-n"><em>"E um lugar onde se admira a natureza e lugar pra refletir."</em></p>

									<p><strong>- Ana Luíza</strong> </p>
								</div>
							</div>

							<p class="text-center"><a href="testimonials.php">Consulte mais informação &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>

							<br>

							<h2 class="h2">Blog</h2>

							<div class="row">
								<div class="col-sm-4 text-center">
									<img src="../images/blog-1-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="#">Famoso fotógrafo chega a São Pedro de Moel</a></h2>

									<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
								</div>

								<div class="col-sm-4 text-center">
									<img src="../images/blog-2-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="#">Projeto "Azul Mar" aprovada pela CMMG</a></h2>

									<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
								</div>

								<div class="col-sm-4 text-center">
									<img src="../images/blog-3-720x480.jpg" class="img-fluid" alt="" />

									<h2 class="m-n"><a href="#">Restaurante "Madeira Pinho" inaugura no Sábado </a></h2>

									<p> John Doe &nbsp;|&nbsp; 12/06/2020 10:30</p>
								</div>
							</div>

							<p class="text-center"><a href="blog.php">Consulte mais informação &nbsp;<i class="fa fa-long-arrow-right"></i></a></p>


						</div>
					</div>

                                <?php
                            }
                            ?>
                                       <?php

                            function footerind(){
                            ?>
                           	<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<section>
								<h2>Contacto</h2>
								<form method="post" action="#">
									<div class="fields">
										<div class="field half">
											<input type="text" name="name" id="name" placeholder="Nome" />
										</div>

										<div class="field half">
											<input type="text" name="email" id="email" placeholder="Email" />
										</div>

										<div class="field">
											<input type="text" name="subject" id="subject" placeholder="Assunto da mensagem" />
										</div>

										<div class="field">
											<textarea name="message" id="message" rows="3" placeholder="Mensagem"></textarea>
										</div>

										<div class="field text-right">
											<label>&nbsp;</label>

											<ul class="actions">
												<li><input type="submit" value="Enviar Mensagem" class="primary" /></li>
											</ul>
										</div>
									</div>
								</form>
							</section>
							<section>
								<h2>Contactos Inf</h2>

								<ul class="alt">
									<li><span class="fa fa-envelope-o"></span> <a href="#">contact@company.com</a></li>
									<li><span class="fa fa-phone"></span> +1 333 4040 5566 </li>
									<li><span class="fa fa-map-pin"></span> 212 Barrington Court New York, ABC 10001 United States of America</li>
								</ul>

								<h2>Siga nas nossas Redes Sociais</h2>

								<ul class="icons">
									<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
									<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
									<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
									<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								</ul>
							</section>

							<ul class="copyright">
								<li>Copyright © 2020 Company Name </li>
								<li>Template by: <a href="https://www.phpjabbers.com/">PHPJabbers.com</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>
                    <?php
                    }
                    ?>

<?php
function getFoto(){
return $this->foto;
}
?>



<?php
 function carregaCaminhoFoto($foto)  {
    $this->foto = $foto;
}




                        ?>