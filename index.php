<?php include('dataConfig.php'); ?>
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8" />

        <!-- Set the viewport width to device width for mobile -->
        <meta name="viewport" content="width=device-width" />

        <title><?php echo $config['site.title']; ?></title>
        <meta name=”description” content="<?php echo $config['site.desc']; ?>" />
        <meta name="robots" content="<?php echo $config['site.robots']; ?>" />
        <meta name=”keywords” content="<?php echo $config['site.keyworks']; ?>" />
        <meta property="og:image" content="images/logo.png"/>
        <meta property="og:title" content="<?php echo $config['site.title']; ?>"/>
        <meta property="og:url" content="http://www.sampajs.com.br"/>
        <meta property="og:site_name" content="SampaJS"/>
        <meta property="og:type" content="event"/>
        <!-- Included CSS Files (Uncompressed) -->
        <!--
        <link rel="stylesheet" href="stylesheets/foundation.css">
        -->

        <!-- Included CSS Files (Compressed) -->
        <link rel="stylesheet" href="stylesheets/foundation.css">
        <link rel="stylesheet" href="stylesheets/app.css">

        <script src="javascripts/modernizr.foundation.js"></script>
    </head>
    <body>
        <header class="bgPonte">
            <div class="container">

                <h1 class="logo">
                    SampaJS
                </h1>
                <div class="share">
                    <!-- AddThis Button BEGIN -->
                    <div class="addthis_toolbox addthis_default_style add_this">
                        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                        <a class="addthis_button_tweet"></a>
                        <a class="addthis_button_pinterest_pinit"></a>
                        <a class="addthis_counter addthis_pill_style"></a>
                    </div>
                    <script type="text/javascript">var addthis_config = {"data_track_addressbar": true};</script>
                    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51a27e31494a2843"></script>
                    <!-- AddThis Button END -->
                </div>
                <nav class="navsite">

                    <a href="#sobre" title="Sobre o Evento">
                        Sobre o evento
                    </a>
                    <a href="#palestras" title="Palestras">
                        Palestras
                    </a>
                    <a href="#local" title="local">
                        Local
                    </a>
                    <a href="#patrocinadores" title="Patrocinadores">
                        Patrocinadores
                    </a>
                    <a href="#contato" title="local">
                        Contato
                    </a>
                </nav>
                <br class="clear" />
                <p class="title">
                    <span class="big">
                        Participe do SAMPA JS,
                    </span>
                    o melhor evento de JavaScript de São Paulo.
                </p>
                <p class="local">
                    Dia 08 de Junho, na PUC Consolação - São Paulo
                </p>

                <a href="http://bonoevento.com/sampajsv31" title="Comprar" class="buy" target='_blank'>
                    INGRESSOS LIMITADOS - INSCREVA-SE
                </a>
                <p class="price">
                    R$ 50,00 ATÉ DIA 31/05
                </p>
            </div>

        </header>

        <div class="sobre" id='sobre'>
            <div class="container">
                <h2>
                    SampaJS 3.1
                </h2>
                <h3>O Primeiro evento focado em JavaScript de São Paulo</h3>
                <p>
                    <?php echo $config['site.desc'] ?>
                </p>
            </div>
        </div>

        <div class="palestras" id='palestras'>
            <div class="container">
                <h2>Palestras</h2>
                <h3>Confira a programação do evento:</h3>
                <hr />

                <div id="container_palestras"><!-- ajax --></div>
            </div>
        </div>

        <div class="local" id='local'>
            <div class="container">
                <h2>
                    Local
                </h2>
                <h3>Veja como é fácil chegar ao evento!</h3>
                <div class="map">
                    <iframe
                        width="100%"
                        height="450"
                        frameborder="0"
                        scrolling="no"
                        marginheight="0"
                        marginwidth="0"
                        src="https://www.google.com/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=PUC,+Consola%C3%A7%C3%A3o,+S%C3%A3o+Paulo,+Rep%C3%BAblica+Federativa+do+Brasil&amp;aq=0&amp;oq=Puc+Consola&amp;sll=37.0625,-95.677068&amp;sspn=34.861942,79.013672&amp;ie=UTF8&amp;hq=PUC,&amp;hnear=Consola%C3%A7%C3%A3o,+S%C3%A3o+Paulo,+Rep%C3%BAblica+Federativa+do+Brasil&amp;ll=-23.549367,-46.650055&amp;spn=0.006295,0.033123&amp;t=m&amp;output=embed">

                    </iframe>
                    <br />
                    <small>
                        <a
                            href="https://www.google.com/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=PUC,+Consola%C3%A7%C3%A3o,+S%C3%A3o+Paulo,+Rep%C3%BAblica+Federativa+do+Brasil&amp;aq=0&amp;oq=Puc+Consola&amp;sll=37.0625,-95.677068&amp;sspn=34.861942,79.013672&amp;ie=UTF8&amp;hq=PUC,&amp;hnear=Consola%C3%A7%C3%A3o,+S%C3%A3o+Paulo,+Rep%C3%BAblica+Federativa+do+Brasil&amp;ll=-23.549367,-46.650055&amp;spn=0.019711,0.038581&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=4364350801819954388">
                            Exibir mapa ampliado
                        </a>
                    </small>
                </div>

                <p>
                    <strong>
                        PUC - Consolação. <br />
                        Rua Marques de Paranaguá, 1111. São Paulo, São Paulo
                    </strong>
                </p>
                <p>
                    Horario: 9h as 18:00 <br />
                    Dúvidas? Entre em<strong> <a href="#contato">contato</a>!
                </p>

            </div>
        </div>
        <div class="patrocinadores" id='patrocinadores'>
            <div class="container">
                <h2>Patrocinadores</h2>

                <a href="http://www.techinsider.com.br" title="TechInsider" target="_blank">
                    <img src="images/techinsider.png" alt="TechInsider" />
                </a>


                <a href="http://www.akna.com.br" title="Akna - Relacionamento Digital Inteligente" target="_blank">
                    <img src="images/akna.jpg" alt="Akna - Relacionamento Digital Inteligente" />
                </a>
            </div>
        </div>
        <footer id='contato'>
            <div class="yellow">
                <div class="container">
                    <h2>Entre em contato</h2>
                    <h3>
                        TIRE SUAS DÚVIDAS, SEJA NOSSO PATROCINADOR <br />
                        OU DEIXE APENAS UM OI. =d
                    </h3>
                    <br />
                    <form method="post" id='contact'>
                        <div class="row">
                            <div class="large-6 columns">
                                <input type="text" name="nome" id='name' placeholder="Seu nome" />
                                <input type="email" name="email" id='email' placeholder="Seu email@provedor" />
                            </div>
                            <div class="large-6 columns">
                                <textarea name='message' id='message' placeholder="Sua mensagem!"></textarea>
                            </div>
                        </div>
                        <div class="align-right">
                            <p class='validation'>Tudo pronto, agora só enviar :) </p><a href="#" class="button" id='send'>Enviar</a>
                        </div>
                    </form>
                    <br />

                    <a href="http://bonoevento.com/sampajsv31" title="Comprar" class="buy" target='_blank'>
                        INGRESSOS LIMITADOS - INSCREVA-SE
                    </a>

                    <div class="row socialmidias">
                        <div class="large-4 columns social">
                            Acompanhe nossas redes sociais
                            e fique por dentro das novidades!
                        </div>
                        <div class="large-4 columns">
                            <a href="" class="ico facebook">
                                Facebook
                            </a>
                            <a href="" class="ico twitter">
                                Twitter
                            </a>
                        </div>
                        <div class="large-4 columns btns-share">
                            <!-- AddThis Button BEGIN -->
                            <div class="addthis_toolbox addthis_default_style add_this">
                                <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
                                <a class="addthis_button_tweet"></a>
                                <a class="addthis_button_pinterest_pinit"></a>
                                <a class="addthis_counter addthis_pill_style"></a>
                            </div>
                            <script type="text/javascript">var addthis_config = {"data_track_addressbar": true};</script>
                            <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51a27e31494a2843"></script>
                            <!-- AddThis Button END -->
                        </div>
                        <div class="large-4 columns">
                        </div>
                    </div>
                    <p class="creditos-site">
                        © 2013 - Sampa JS - Todos os direitos reservados. <br />
                        Design <a href="http://www.ladodesign.com.br"> Diogo Rodrigues / Lado Design </a>
                    </p>
                </div>
            </div>
        </footer>

        <div class="btn-topo"><a href="#"> TOPO </a> </div>

        <!-- Included JS Files (Uncompressed) -->
        <!--

        <script src="javascripts/jquery.event.move.js"></script>
        <script src="javascripts/jquery.event.swipe.js"></script>
        <script src="javascripts/jquery.foundation.reveal.js"></script>
        <script src="javascripts/jquery.foundation.orbit.js"></script>
        <script src="javascripts/jquery.foundation.navigation.js"></script>
        <script src="javascripts/jquery.foundation.buttons.js"></script>
        <script src="javascripts/jquery.foundation.tabs.js"></script>
        <script src="javascripts/jquery.foundation.tooltips.js"></script>
        <script src="javascripts/jquery.foundation.accordion.js"></script>
        <script src="javascripts/jquery.placeholder.js"></script>
        <script src="javascripts/jquery.foundation.alerts.js"></script>
        <script src="javascripts/jquery.foundation.topbar.js"></script>
        <script src="javascripts/jquery.foundation.joyride.js"></script>
        <script src="javascripts/jquery.foundation.clearing.js"></script>
        <script src="javascripts/jquery.foundation.magellan.js"></script>

        -->

        <!-- jquery -->
        <script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>

        <!-- Included JS Files (Compressed) -->
        <script src="javascripts/foundation.min.js"></script>
        <script src="javascripts/jquery.foundation.forms.js"></script>
        <script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
        <script src="javascripts/jquery.foundation.forms.js"></script>

        <!-- Initialize JS Plugins -->
        <script src="javascripts/app.js"></script>
        <script src="javascripts/sampa.js"></script>


        <script>
            $(window).load(function() {
                $("#featured").orbit();
            });
        </script>

        <div id="item_list" class="item" style="display: none;">
            <figure>
                <img alt="" />
            </figure>
            <div class="data">
                <h2>
                    <span rel="hour" class="hour"></span> <span rel="title"></span>
                </h2>
                <h3 rel="subtitle">

                </h3>
                <p rel="description">

                </p>
            </div>
        </div>
    </body>
</html>