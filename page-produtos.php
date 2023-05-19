<?php
// Template Name: Produtos e Serviços
get_header();
?>
    <?php if(have_posts()) { while (have_posts()) { the_post(); ?>
        <main>
            <section class="banner">
                <div class="content__banner">
                    <img class="imagem__desktop" src="<?php the_field('banner_internas_green', 'option'); ?>" alt="<?php the_title(); ?>">
                    <img class="imagem__mobile" src="<?php the_field('banner_internas_mobile_green', 'option'); ?>" alt="<?php the_title(); ?>">
                    
                    <div class="shell">
                        <h1 class="canal"><?php the_title(); ?></h1>
                    </div>
                </div>
            </section>

            <section class="produtos">
                <div class="shell">
                    <div class="content__produtos">
                        <h2><?php the_field('titulo'); ?></h2>
                        <h3><?php the_field('sub_titulo'); ?></h3>

                        <div class="inner__produtos">
                            <div class="accordeon">
                                <details>
                                    <summary>
                                        <h3>Cimento Asfáltico de Petróleo</h3>

                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                        </div>
                                    </summary>

                                    <div class="content__details">
                                        <div class="text">
                                            <p>O Cimento Asfáltico de Petróleo (CAP) é um líquido viscoso semi-sólido ou sólido à temperatura ambiente, que apresenta comportamento termoplástico: torna-se líquido quando aquecido e sólido após o resfriamento. Ele é obtido por meio de diversos processos de destilação do petróleo e é quase totalmente solúvel em benzeno, tricloroetileno e em bissulfeto de carbono.</p>
                                            <p>É a matéria-prima de asfaltos diluídos, emulsões asfálticas, asfaltos modificados, asfalto espuma e asfalto borracha. Além de matéria prima para outros produtos asfálticos, o CAP tem seu maior uso na produção de misturas asfálticas a quente, como concreto asfáltico.</p>
                                        </div>

                                        <div class="produtos">
                                            <?php
                                                $args = array (
                                                    'post_type' => 'produtos',
                                                    'showposts' => 100,
                                                    'order' => 'ASC',
                                                    'cat' => '1', 
                                                );
                                                $the_query = new WP_Query ( $args );
                                            ?>

                                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                                <?php include(TEMPLATEPATH . '/include/produto.php'); ?>
                                            <?php endwhile; else : endif; ?>
                                            <?php  wp_reset_postdata(); ?>
                                        </div>
                                    </div>
                                </details>
                            </div>

                            <div class="accordeon">
                                <details>
                                    <summary>
                                        <h3>Asfaltos modificados por polímeros elastoméricos</h3>

                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                        </div>
                                    </summary>

                                    <div class="content__details">
                                        <div class="text">
                                            <p>Os ligantes modificados por polímero da CBAA são fabricados utilizando polímero SBS (estireno-butadieno- estireno) para melhorar o desempenho dos ligantes asfálticos e consequentemente dos pavimentos, reduzindo assim a frequência das manutenções e aumentando a vida útil dos pavimentos. Os asfaltos modificados por polímero CBAA proporcionam a sua obra melhorias no desempenho das misturas asfálticas usinadas, tanto em relação à deformação permanente quanto à fadiga e são produtos estáveis física e quimicamente, mantendo suas propriedades durante a estocagem, aplicação e serviço ao longo de todas as etapas e não necessitar de temperaturas muito diferenciadas para aplicação.</p>
                                        </div>

                                        <div class="produtos">
                                            <?php
                                                $args = array (
                                                    'post_type' => 'produtos',
                                                    'showposts' => 100,
                                                    'order' => 'ASC',
                                                    'cat' => '5', 
                                                );
                                                $the_query = new WP_Query ( $args );
                                            ?>

                                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                                <?php include(TEMPLATEPATH . '/include/produto.php'); ?>
                                            <?php endwhile; else : endif; ?>
                                            <?php  wp_reset_postdata(); ?>
                                        </div>
                                    </div>
                                </details>
                            </div>

                            <div class="accordeon">
                                <details>
                                    <summary>
                                        <h3>Asfalto modificado por borracha</h3>

                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                        </div>
                                    </summary>

                                    <div class="content__details">
                                        <div class="text">
                                            <p>O Asfalto Modificado por Borracha é uma mistura de cimento asfáltico, borracha de pneu reciclada e outros aditivos que melhoram seu desempenho. A borracha é mais resistente a rachaduras, deformação permanente e outras patologias em comparação com o asfalto tradicional. Além de sua durabilidade, o asfalto borracha também é um produto sustentável. Ao usar borracha de pneu reciclada, esse material é destinado à produção e reduz a quantidade de resíduos, que levariam centenas de anos para se decompor e conservar recursos naturais.</p>
                                        </div>

                                        <div class="produtos">
                                            <?php
                                                $args = array (
                                                    'post_type' => 'produtos',
                                                    'showposts' => 100,
                                                    'order' => 'ASC',
                                                    'cat' => '6', 
                                                );
                                                $the_query = new WP_Query ( $args );
                                            ?>

                                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                                <?php include(TEMPLATEPATH . '/include/produto.php'); ?>
                                            <?php endwhile; else : endif; ?>
                                            <?php  wp_reset_postdata(); ?>
                                        </div>
                                    </div>
                                </details>
                            </div>

                            <div class="accordeon">
                                <details>
                                    <summary>
                                        <h3>Asfálticos Diluídos</h3>

                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                        </div>
                                    </summary>

                                    <div class="content__details">
                                        <div class="text">
                                            <p>Asfalto diluído é o material resultante da diluição de um cimento asfáltico adequado proveniente do petróleo, com um destilado médio conveniente. Usa-se o produto para aplicação do material sobre a superfície da base concluída, antes da execução do revestimento asfáltico.</p>
                                        </div>
                                        <div class="produtos">
                                            <?php
                                                $args = array (
                                                    'post_type' => 'produtos',
                                                    'showposts' => 100,
                                                    'order' => 'ASC',
                                                    'cat' => '7', 
                                                );
                                                $the_query = new WP_Query ( $args );
                                            ?>

                                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                                <?php include(TEMPLATEPATH . '/include/produto.php'); ?>
                                            <?php endwhile; else : endif; ?>
                                            <?php  wp_reset_postdata(); ?>
                                        </div>
                                    </div>
                                </details>
                            </div>

                            <div class="accordeon">
                                <details>
                                    <summary>
                                        <h3>Emulsões Convencionais</h3>

                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                        </div>
                                    </summary>

                                    <div class="content__details">
                                        <div class="text">
                                            <p>A emulsão asfáltica é definida como sendo uma mistura heterogênea de dois ou mais líquidos, que normalmente não se dissolvem um no outro, mas quando são mantidos em suspensão por agitação ou, mais frequentemente, por pequenas quantidades de substâncias conhecidas por emulsificantes, formam uma mistura estável. As Convencionais, não possuem a adição de polímeros elastoméricos.</p>
                                            <p>Classifica-se as emulsões nos seguintes tipos em relação ao tempo de ruptura:</p>
                                            <p>• RR - Ruptura rápida</p>
                                            <p>• RM - Ruptura Média </p>
                                            <p>• RL - Ruptura Lenta</p>
                                            <p>• RC - Ruptura Controlada</p>
                                        </div>
                                        <div class="produtos">
                                            <?php
                                                $args = array (
                                                    'post_type' => 'produtos',
                                                    'showposts' => 100,
                                                    'order' => 'ASC',
                                                    'cat' => '8', 
                                                );
                                                $the_query = new WP_Query ( $args );
                                            ?>

                                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                                <?php include(TEMPLATEPATH . '/include/produto.php'); ?>
                                            <?php endwhile; else : endif; ?>
                                            <?php  wp_reset_postdata(); ?>
                                        </div>
                                    </div>
                                </details>
                            </div>

                            <div class="accordeon">
                                <details>
                                    <summary>
                                        <h3>Emulsões Modificadas por Polímeros Elastoméricos</h3>

                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                        </div>
                                    </summary>

                                    <div class="content__details">
                                        <div class="text">
                                            <p>As emulsões modificadas por polímeros SBS e SBR apresentam, entre outras propriedades, melhor adesão e coesão aos agregados, menor susceptibilidade térmica, maior ponto de amolecimento e resistência ao envelhecimento. Também aumentam a recuperação elástica do ligante asfáltico residual e, consequentemente, a flexibilidade e a durabilidade dos revestimentos asfálticos delgados.</p>
                                        </div>

                                        <div class="produtos">
                                            <?php
                                                $args = array (
                                                    'post_type' => 'produtos',
                                                    'showposts' => 100,
                                                    'order' => 'ASC',
                                                    'cat' => '9', 
                                                );
                                                $the_query = new WP_Query ( $args );
                                            ?>

                                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                                <?php include(TEMPLATEPATH . '/include/produto.php'); ?>
                                            <?php endwhile; else : endif; ?>
                                            <?php  wp_reset_postdata(); ?>
                                        </div>
                                    </div>
                                </details>
                            </div>

                            <div class="accordeon">
                                <details>
                                    <summary>
                                        <h3>Melhorador de Adesividade</h3>

                                        <div class="icon">
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/arrow-down.svg" alt="arrow">
                                        </div>
                                    </summary>

                                    <div class="content__details">
                                        <div class="text">
                                            <p>O ECO-DOPE CBAA é um aditivo químico com alta estabilidade térmica, resistente à altas temperaturas, que melhora consideravelmente a adesividade na intenção do ligante asfáltico / agregado. A formulação contém componentes químicos que proporcionam a melhor afinidade entre agregados e ligantes asfálticos na presença de água, impedindo o deslocamento da película asfáltica que recobre o agregado.</p>
                                        </div>

                                        <div class="produtos">
                                            <?php
                                                $args = array (
                                                    'post_type' => 'produtos',
                                                    'showposts' => 100,
                                                    'order' => 'ASC',
                                                    'cat' => '10', 
                                                );
                                                $the_query = new WP_Query ( $args );
                                            ?>

                                            <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                                <?php include(TEMPLATEPATH . '/include/produto.php'); ?>
                                            <?php endwhile; else : endif; ?>
                                            <?php  wp_reset_postdata(); ?>
                                        </div>
                                    </div>
                                </details>
                            </div>
                        </div>

                        <h4><?php the_field('texto_acima_do_botao'); ?></h4>

                        <a href="" class="btn btn__primary">Catálogo completo</a>
                    </div>
                </div>
            </section>

            <section class="banner__produto">
                <div class="shell">
                    <div class="description">
                        <h2><?php the_field('titulo_banner'); ?></h2>
                        <div class="text">
                            <?php the_field('texto_banner'); ?>
                        </div>

                        <div class="buttons">
                            <a href="/centro-tecnologico" class="btn btn__primary">Centro tecnológico</a>
                            <a href="/contato" class="btn btn__white">Entre em contato</a>
                        </div>
                    </div>
                </div>

                <div class="image__desktop">
                    <img src="<?php the_field('banner_produtos_desktop'); ?>" alt="<?php the_field('titulo_banner'); ?>">
                </div>

                <div class="image__mobile">
                    <img src="<?php the_field('banner_produtos_mobile'); ?>" alt="<?php the_field('titulo_banner'); ?>">
                </div>
            </section>

            <section class="servicos__produtos">
                <div class="shell">
                    <h2><span>NOSSOS</span> SERVIÇOS</h2>

                    <div class="content__servicos">
                        <?php if(have_rows('nossos_servicos')): while(have_rows('nossos_servicos')) : the_row(); ?>
                            <div class="row">
                                <div class="description">
                                    <h3><?php the_sub_field('titulo'); ?></h3>

                                    <div class="text">
                                        <?php the_sub_field('texto'); ?>
                                    </div>
                                </div>

                                <div class="image">
                                    <img src="<?php the_sub_field('imagem'); ?>" alt="<?php the_sub_field('titulo'); ?>">
                                </div>
                            </div>
                        <?php endwhile; else : endif; ?>
                    </div>

                    <a href="/contato" class="btn btn__secondary">Entre em contato</a>
                </div>
            </section>
        </main>
    <?php } } ?>

<?php get_footer(); ?>