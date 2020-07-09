<?php get_header(); ?>
    <!-- About-->
    <section class="page-section bg-primary  col-sm-12" id="section2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Nós temos o que voce precisa!</h2>
                    <hr class="divider light my-4">
                    <p class="text-white-50 mb-4">Nós temos o que voce precisa para concluir o seu projeto! Mão de obra qualificada e de confiança.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <h2 class="text-center mt-4">Lista de Serviços</h2>
            <p class="text-center mt-2">Confira alguns dos nossos serviços prestados</p>
            <hr class="divider my-4">
            <div class="row " id="container-services">   
                <div class="card text-center">
                    <img class="card-img-top" src="images/serveces-hidraulica.png" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="h4 mb-2">Hidráulica</h3>
                        <p class="text-muted mb-0">Problemas com tubulações ? Vazamantos?</p>
                    </div>
                </div>
                
                
                <div class="card text-center">
                    <img class="card-img-top" src="images/pintura-service.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="h4 mb-2">Pintura</h3>
                        <p class="text-muted mb-0">Precisando dar uma repaginada na sua casa ? Aquela Decoração em gesso que sempre quis ?</p>
                    </div>
                </div>
                <div class="card text-center">
                    <img class="card-img-top" src="images/services-gesso.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="h4 mb-2">Gesso</h3>
                        <p class="text-muted mb-0">Que tal Aquela decoração feita em gesso que voce sempre quis ?</p>
                    </div>
                </div>
                
                <div class="card text-center">
                    <img class="card-img-top" src="images/services-alvenaria.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="h4 mb-2">Alvenaria</h3>
                        <p class="text-muted mb-0">Pensando em Aumentar os comodos da sua casa ?</p>
                    </div>
                </div>
                
                <div class="card text-center">
                    <img class="card-img-top" src="images/services-revestimento.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="h4 mb-2">Pisos/Revestimentos</h3>
                        <p class="text-muted mb-0">Que tal botar aquele revestimento para facilitar a Higiene ?</p>
                    </div>
                </div>
                
                <div class="card text-center">
                    <img class="card-img-top" src="images/services-eletrica.jpg" alt="Card image cap">
                    <div class="card-body">
                        <h3 class="h4 mb-2">Elétrica</h3>
                        <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio-->
    <section class="page-section text-white mt-5" id="section3">
        <div class="container col-12 col-md-12 row d-flex justify-content-center">
            <div class="col-lg-5 align-bottom">
                <div class="align-bottom">
                    <h2 class="text-center ">Quem Sou</h2>
                    <p class="text-center mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa sit quibusdam veniam officia numquam. Voluptatum eaque nostrum veritatis alias earum laboriosam quam suscipit, consectetur at distinctio aspernatur hic officia numquam.</p>
                    <hr class="divider my-4">
                </div>
            </div>
            <div class="card  " id="img-quemsomos">
                <img class="card-img-top" src="images/services-eletrica.jpg" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text text-dark">Jorgeadasdasdasdsdadasadssdaasdasdasdasdsdads</p>
                </div>
            </div>
        </div>
    </section>
    <section class="page-section mb-50">
        <div class="container" id="portfolio">
            <div class="container-fluid p-0 " >
                <h2 class="text-center mt-4">Galeria</h2>
                <p class="text-center mt-2">Confira um pouco do nosso trabalho</p>
                <hr class="divider my-4">
                <div class="row" id="container-galeria">


                    <div class="row no-gutters img-galeria"  >
                        <div class="col-lg-10 col-sm-6">
                           
                        </div>
                    </div>

                    <!--<div class="row no-gutters img-galeria"  >
                        <div class="col-lg-10 col-sm-6">
                            <a class="portfolio-box" href="assets/img/portfolio/fullsize/1.jpg">
                                <img class="img-fluid w-100" src="images/services-revestimento.jpg" alt="">
                            </a>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <!-- Call to action-->
    
    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
                            <?php 
							// Se houver algum post
							if( have_posts() ):
								// Enquanto houver posts, mostre-os pra gente
								while( have_posts() ): the_post();
							?>

							<article>
								
								<?php the_content(); ?>
							</article>

							<?php 
								endwhile;
							else:
							?>

							 <p>There's nothing yet to be displayed...</p>

							<?php endif; ?>
                            
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="mt-0 text-white">Quer marcar um orçamento gratis ?</h2>
                    <hr class="divider my-4">
                    <p class=" mb-5 text-white">Entre em contato por Telefone/Whatsapp/Email ou deixe seu contato no formulário que nós te contatamos</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center mb-5 mb-lg-0">
                    <svg class="svg-inline--fa fa-phone fa-w-16 fa-3x mb-3 text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg><!-- <i class="fas fa-phone fa-3x mb-3 text-muted"></i> -->
                    <p class="text-white">465456646</p>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <svg class="svg-inline--fa fa-envelope fa-w-16 fa-3x mb-3 text-white" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z"></path></svg><!-- <i class="fas fa-envelope fa-3x mb-3 text-muted"></i> -->
                    <!-- Make sure to change the email address in BOTH the anchor text and the link target below!-->
                    <a class="d-block" href="mailto:contact@yourwebsite.com">contact@yourwebsite.com</a>
                </div>
            </div>
        </div>
    
        <?php get_footer(); ?>