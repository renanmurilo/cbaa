    <footer class="footer">
        <div class="shell">
            <div class="content__footer">
                <div class="widget">
                    <div class="logo">
                        <img src="<?php the_field('logo_footer', 'option'); ?>" alt="Logo white">
                    </div>

                    <div class="sociais">
                        <a href="<?php the_field('link_do_linkedin', 'option'); ?>" target="_blank">
                            <img src="<?php the_field('linkedin', 'option'); ?>" alt="">
                        </a>

                        <a href="<?php the_field('link_do_facebook', 'option'); ?>" target="_blank">
                            <img src="<?php the_field('facebook', 'option'); ?>" alt="">
                        </a>

                        <a href="<?php the_field('link_do_instagram', 'option'); ?>" target="_blank">
                            <img src="<?php the_field('instagram', 'option'); ?>" alt="">
                        </a>

                        <a href="<?php the_field('link_dio_whatsapp', 'option'); ?>" target="_blank">
                            <img src="<?php the_field('whatsapp', 'option'); ?>" alt="">
                        </a>
                    </div>
                </div>

                <div class="widget">
                    <h3>Contato</h3>
                    <ul>
                        <li>
                            <p><?php the_field('telefone', 'option'); ?></p>
                        </li>
                        
                        <li>
                            <a href="mailto:<?php the_field('email', 'option'); ?>" class="mail"><?php the_field('email', 'option'); ?></a>
                        </li>

                        <li class="link">
                            <a href="<?php echo get_home_url(); ?>" >Política de privacidade</a>
                        </li>

                        <li class="link">
                            <a href="<?php echo get_home_url(); ?>">Ouvidoria</a>
                        </li>
                    </ul>
                </div>

                <div class="widget">
                    <h3>Endereço</h3>
                    <ul>
                        <li>
                            <p><?php the_field('endereco', 'option'); ?></p>
                        </li>

                        <li class="link">
                            <a href="<?php echo get_home_url(); ?>">Filiais</a>
                        </li>
                    </ul>
                </div>

                <div class="widget">
                    <h3>Assine nossa Newsletter</h3>
                    <div class="news">
                        <?php echo do_shortcode('[contact-form-7 id="72" title="Newsletter"]'); ?>
                    </div>
                </div>
            </div>

            <div class="copy">
                <p>© Todos os Direitos Reservados - CBAA - Asfaltos LTDA - Design by <a href="http://" target="_blank" rel="noopener noreferrer">Eólica.</a></p>
            </div>
        </div>
        
        <div class="box-cookies hide">
            <div class="shell">
                <div class="container--cookies">
                    <div class="text">
                        <p class="msg-cookies">Utilizamos cookies para melhorar a sua experiência em nosso site. Ao continuar navegando você concorda com a nossa <a href="<?php echo get_home_url(); ?>/politica-de-privacidade">política de privacidade</a>. </p>
                    </div>
                    <button class="btn btn__primary btn-cookies">CONTINUAR E FECHAR</button>
                </div>
            </div>
		</div>
    </footer>
    
    <!-- Inicio Wordpress Footer -->
	    <?php wp_footer(); ?>
	<!-- Final Wordpress Footer -->
    
    </body>
</html>