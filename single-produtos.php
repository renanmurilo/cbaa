<?php
    get_header(); 
?>
    <main>
        <section class="banner">
            <div class="content__banner">
                <img class="imagem__desktop" src="<?php the_field('banner_internas_green', 'option'); ?>" alt="<?php the_title(); ?>">
                <img class="imagem__mobile" src="<?php the_field('banner_internas_mobile_green', 'option'); ?>" alt="<?php the_title(); ?>">
                
                <div class="shell">
                    <h1>Produtos</h1>
                </div>
            </div>
        </section>

        <section class="dados__produto">
            <div class="shell">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="<?php echo get_home_url(); ?>/produtos-e-servicos">Produtos</a>
                        </li>

                        <li>
                            <p><?php the_field('tipo'); ?> <?php the_field('nome'); ?></p>
                        </li>
                    </ul>
                </div>

                <div class="content__dados__produto">
                    <div class="dados">
                        <h2><?php the_field('nome'); ?></h2>
                        <h3><?php the_field('tipo'); ?></h3>
                        <div class="text">
                            <?php the_field('informacao'); ?>
                        </div>

                        <div class="row__buttons">
                            <a href="<?php the_field('ficha_tecnica'); ?>" class="btn btn__primary" download>Ficha técnica</a>
                            <a href="<?php the_field('fispq'); ?>" class="btn btn__secondary" download>Fispq</a>
                        </div>
                    </div>

                    <div class="image">
                        <img src="<?php the_field('imagem'); ?>" alt="<?php the_field('nome'); ?>">
                    </div>
                </div>
            </div>
        </section>

        <section class="descricoes">
            <div class="shell">
                <h2>Especificações técnicas</h2>

                <div class="content__descricoes">
                    <div class="accordeon">
                        <details>
                            <summary>
                                <div class="title">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico-descricao.svg" alt="Descrição">
                                    </div>
                                    <h3>Descrição</h3>
                                </div>

                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                </div>
                            </summary>

                            <div class="content__details">
                                <div class="text">
                                    <?php the_field('descricao'); ?>
                                </div>
                            </div>
                        </details>

                        <details>
                            <summary>
                                <div class="title">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico-usos.svg" alt="Usos">
                                    </div>
                                    <h3>Usos</h3>
                                </div>

                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                </div>
                            </summary>

                            <div class="content__details">
                                <div class="text">
                                    <?php the_field('usos'); ?>
                                </div>
                            </div>
                        </details>

                        <details>
                            <summary>
                                <div class="title">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico-aplicacao.svg" alt="Aplicação">
                                    </div>
                                    <h3>Aplicação</h3>
                                </div>

                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                </div>
                            </summary>

                            <div class="content__details">
                                <div class="text">
                                    <?php the_field('aplicacao'); ?>
                                </div>
                            </div>
                        </details>

                        <details>
                            <summary>
                                <div class="title">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico-caracteristicas.svg" alt="Caracteristicas">
                                    </div>
                                    <h3>Características</h3>
                                </div>

                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                </div>
                            </summary>

                            <div class="content__details">
                                <div class="text">
                                    <?php the_field('caracteristicas'); ?>
                                </div>
                            </div>
                        </details>

                        <details>
                            <summary>
                                <div class="title">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico-apresentacao.svg" alt="Apresentação">
                                    </div>
                                    <h3>Apresentação</h3>
                                </div>

                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                </div>
                            </summary>

                            <div class="content__details">
                                <div class="text">
                                    <?php the_field('apresentacao'); ?>
                                </div>
                            </div>
                        </details>

                        <details>
                            <summary>
                                <div class="title">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico-recomendacoes.svg" alt="Recomendações">
                                    </div>
                                    <h3>Recomendações</h3>
                                </div>

                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                </div>
                            </summary>

                            <div class="content__details">
                                <div class="text">
                                    <?php the_field('recomendacoes'); ?>
                                </div>
                            </div>
                        </details>

                        <details>
                            <summary>
                                <div class="title">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico-restricao.svg" alt="Restrições">
                                    </div>
                                    <h3>Restrição ao emprego</h3>
                                </div>

                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                </div>
                            </summary>

                            <div class="content__details">
                                <div class="text">
                                    <?php the_field('restricao_ao_emprego'); ?>
                                </div>
                            </div>
                        </details>

                        <details>
                            <summary>
                                <div class="title">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico-manuseio.svg" alt="Manuseio">
                                    </div>
                                    <h3>Manuseio</h3>
                                </div>

                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                </div>
                            </summary>

                            <div class="content__details">
                                <div class="text">
                                    <?php the_field('manuseio'); ?>
                                </div>
                            </div>
                        </details>

                        <details>
                            <summary>
                                <div class="title">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/ico-estocagem.svg" alt="Estocagem">
                                    </div>
                                    <h3>Estocagem</h3>
                                </div>

                                <div class="icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                </div>
                            </summary>

                            <div class="content__details">
                                <div class="text">
                                    <?php the_field('estocagem'); ?>
                                </div>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </section>

        <section class="banner__final">
            <div class="shell">
                <div class="description">
                    <h2>Dúvidas? <br>Entre em contato</h2>
                    <a href="/contato" class="btn btn__secondary">Contato</a>
                </div>
            </div>

            <div class="image__desktop">
                <img src="<?php the_field('banner_interna_produto_desktop', 'option'); ?>" alt="Dúvidas? Entre em contato">
            </div>

            <div class="image__mobile">
                <img src="<?php the_field('banner_interna_produto_mobile', 'option'); ?>" alt="Dúvidas? Entre em contato">
            </div>
        </section>
    </main>
<?php get_footer(); ?>