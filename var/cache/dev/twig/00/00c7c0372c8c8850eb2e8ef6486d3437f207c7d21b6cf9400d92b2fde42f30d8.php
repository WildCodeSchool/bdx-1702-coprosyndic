<?php

/* AKYOSEasyCoproBundle:FrontOffice:index.html.twig */
class __TwigTemplate_e9fa0ce097ef3763b31fed429e7b494320805a6d6d926a603ef353d5db0de6ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0c64f5774d008e8900fdf274e5c5724621dbe9edebc340c45487912bd8bd7990 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c64f5774d008e8900fdf274e5c5724621dbe9edebc340c45487912bd8bd7990->enter($__internal_0c64f5774d008e8900fdf274e5c5724621dbe9edebc340c45487912bd8bd7990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKYOSEasyCoproBundle:FrontOffice:index.html.twig"));

        $__internal_2d42ac41fae8e19f3dccbd65c0aac991ef9139bcb4d8fb21cb847c9fe9c78f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d42ac41fae8e19f3dccbd65c0aac991ef9139bcb4d8fb21cb847c9fe9c78f2b->enter($__internal_2d42ac41fae8e19f3dccbd65c0aac991ef9139bcb4d8fb21cb847c9fe9c78f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AKYOSEasyCoproBundle:FrontOffice:index.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Ma Copropriété</title>

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway:400,700\">
    <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/media-queries.css"), "html", null, true);
        echo "\">

    <!-- Favicon and touch icons -->
    <link rel=\"shortcut icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/favicon.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-144-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-114-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-72-precomposed.png"), "html", null, true);
        echo "\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/ico/apple-touch-icon-57-precomposed.png"), "html", null, true);
        echo "\">

</head>

<body>

<!-- Top menu -->
<nav class=\"navbar navbar-inverse\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#top-navbar-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\">Ma Copropriété</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"top-navbar-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a class=\"scroll-link\" href=\"#features\">Fonctionnalités</a></li>
                <li><a class=\"scroll-link\" href=\"#how-it-works\">Démo</a></li>
                <li><a class=\"scroll-link\" href=\"#testimonials\">Tarifs</a></li>
                <li><a class=\"scroll-link\" href=\"#contact\">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Top content -->
<div class=\"top-content\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-sm-8 col-sm-offset-2 text\">
                <h1 class=\"wow fadeInLeftBig\">Gérez vos copropriétés en toute simplicité</h1>
                <div class=\"description wow fadeInLeftBig\">
                    <p>
                        En quelques clics, vous configurez ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                        Ut wisi enim ad minim veniam, quis nostrud tempor incididunt ut labore.
                    </p>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-6 col-sm-offset-3 r-form-1-box wow fadeInUp\">
                <div class=\"r-form-1-top\">
                    <div class=\"r-form-1-top-left\">
                        <h3>Connectez-vous</h3>
                        <p>Remplissez le formulaire ci-dessous avec les identifiants délivrés par votre Syndic :</p>
                    </div>
                    <div class=\"r-form-1-top-right\">
                        <i class=\"fa fa-pencil\"></i>
                    </div>
                </div>
                <div class=\"r-form-1-bottom\">
                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("FOSUserBundle:Security:login"));
        echo "
                    ";
        // line 94
        echo "                    <p><center><a href=\"\">Demande d'accès</a></center></p>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- Features -->
<div class=\"features-container section-container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 features section-description wow fadeIn\">
                <h2>Pourquoi choisir EasyCopro ?</h2>
                <div class=\"divider-1 wow fadeInUp\">. . . . . . . . . .</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud tempor incididunt ut labore et.</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4 features-box wow fadeInUp\">
                <div class=\"features-box-icon\"><i class=\"fa fa-file-pdf-o\"></i></div>
                <h3>Une plateforme facile à utiliser</h3>
                <p>Facilitez-vous la gestion grâce à une interface web claire et intuitive.
                    Gérez la globalité de votre activité de syndic simplement. Partagez facilement les informations et documents sur la plateforme. </p>
            </div>
            <div class=\"col-sm-4 features-box wow fadeInDown\">
                <div class=\"features-box-icon\"><i class=\"fa fa-cog\"></i></div>
                <h3>Gestion des copropriétés</h3>
                <p>Tout en simplicité, gérer les copropriétaires grâce à un annuaire classé par Résidence, créez vos lots et copropriétés et mettez à disposition les documents légaux.</p>
            </div>
            <div class=\"col-sm-4 features-box wow fadeInUp\">
                <div class=\"features-box-icon\"><i class=\"fa fa-commenting\"></i></div>
                <h3>Messagerie interne</h3>
                <p>Connectez-vous 24h/24, oû que vous soyez! Même de votre mobile Iphone ou Android et contactez vos copropriétaires ou faites des demandes de devis en ligne par le biais d'un annuaire artisan.</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12 section-bottom-button wow fadeInUp\">
                <a class=\"btn btn-link-1 scroll-link\" href=\"#top-content\">Abonnez-vous<i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- How it works -->
<div class=\"how-it-works-container section-container section-container-gray-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-5 how-it-works-box wow fadeInLeft\">
                <div class=\"embed-responsive embed-responsive-16by9\">
                    <iframe class=\"embed-responsive-item\" src=\"https://player.vimeo.com/video/115014610?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=e36da1\"
                            webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
            <div class=\"col-sm-6 col-sm-offset-1 how-it-works-box how-it-works-box-right wow fadeInUp\">
                <h3>Démonstration d'utilisation</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
                </p>
                <p>
                    Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Ut wisi enim ad minim veniam, quis nostrud.
                </p>
                <p>
                    <a class=\"learn-more scroll-link\" href=\"#top-content\">Abonnez-vous</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Tarifs -->
<div class=\"price-table testimonials-container section-container section-container-image-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 testimonials section-description wow fadeIn\">
                <h2>Nos Tarifs</h2>
                <p>Trois prestations différentes :</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 col-md-4 testimonial-list wow fadeInUp\">
                    <div class=\"pricing text-center\">
                        <div class=\"pricing-top\">
                            <p><em>15 <sup>€</sup></em>/an</p>
                            <span>Basic</span>
                        </div>
                        <ul>
                            <li>Html5 + Css3</li>
                            <li>Bootstrap</li>
                            <li>Java script</li>
                            <li>Jquery</li>
                            <li>php</li>
                            <li>More..</li>
                        </ul>
                        <div class=\"btn btn-link-1 scroll-link\">Order Now</div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4 testimonial-list wow fadeInUp\">
                    <div class=\"pricing text-center\">
                        <div class=\"pricing-top\">
                            <p><em>35 <sup>€</sup></em>/an</p>
                            <span>Basic</span>
                        </div>
                        <ul>
                            <li>Html5 + Css3</li>
                            <li>Bootstrap</li>
                            <li>Java script</li>
                            <li>Jquery</li>
                            <li>php</li>
                            <li>More..</li>
                        </ul>
                        <div class=\"btn btn-link-1 scroll-link\">Order Now</div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4 testimonial-list wow fadeInUp\">
                    <div class=\"pricing text-center\">
                        <div class=\"pricing-top\">
                            <p><em>35 <sup>€</sup></em>/an</p>
                            <span>Basic</span>
                        </div>
                        <ul>
                            <li>Html5 + Css3</li>
                            <li>Bootstrap</li>
                            <li>Java script</li>
                            <li>Jquery</li>
                            <li>php</li>
                            <li>More..</li>
                        </ul>
                        <div class=\"btn btn-link-1 scroll-link\">Order Now</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
<div class=\"contact-container section-container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 contact section-description wow fadeIn\">
                <h2>Contactez-nous</h2>
                <div class=\"divider-1 wow fadeInUp\">. . . . . . . . . .</div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud tempor incididunt ut labore et.
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-8\">
                <form name=\"sentMessage\" id=\"contactForm\" novalidate=\"\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Votre Nom *\" id=\"name\" required=\"\" data-validation-required-message=\"Votre nom...\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" class=\"form-control\" placeholder=\"YVotre Email *\" id=\"email\" required=\"\" data-validation-required-message=\"Please enter your email address.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"tel\" class=\"form-control\" placeholder=\"Votre téléphone *\" id=\"phone\" required=\"\" data-validation-required-message=\"Entrez votre numéro de téléphone.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" placeholder=\"Votre Message *\" id=\"message\" required=\"\" data-validation-required-message=\"Entrez votre message.\" rows=\"5\"></textarea>
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"col-lg-12 text-center\">
                            <div id=\"success\"></div>
                            <button type=\"submit\" class=\"btn btn-link-1 scroll-link envoi-btn\">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"col-md-4 contactbox\">
                <p class=\"pcontact\">
                    <strong><i class=\"fa fa-map-marker\"></i> Adresse</strong><br>
                    AKYOS : Parc Valmy - 8F rue Jeanne Barret - 21000 DIJON
                </p>
                <p class=\"pcontact\"><strong><i class=\"fa fa-phone\"></i> Téléphone</strong><br>
                    03 80 10 23 57</p>
                <p class=\"pcontact\">
                    <strong><i class=\"fa fa-envelope\"></i> Email</strong><br>
                    info@akyos.com</p>
                <p></p>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4 footer-about wow fadeInUp\">
                <h3>A propos de nous</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
                </p>
                <p>
                    <a class=\"scroll-link\" href=\"#about-us\">En savoir plus</a>
                </p>
            </div>
            <div class=\"col-sm-4 footer-contact-info wow fadeInDown\">
                <h3>Easy Copro</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
                </p>
            </div>
            <div class=\"col-sm-4 footer-social wow fadeInUp\">
                <h3>Liens sociaux</h3>
                <p>
                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6 footer-copyright\">
                &copy; Easy Copro by <a href=\"http://www.akyos.com\">AKYOS</a>
            </div>
            <div class=\"col-sm-6 footer-menu\">
                <ul>
                    <li><a class=\"scroll-link\" href=\"#top-content\">Contact</a></li>
                    <li><a class=\"scroll-link\" href=\"#features\">Mentions légales</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- Javascript -->
<script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery-1.11.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 347
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.backstretch.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 349
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/retina-1.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/scripts.js"), "html", null, true);
        echo "\"></script>

<!--[if lt IE 10]>
<script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/placeholder.js"), "html", null, true);
        echo "\"></script>
<![endif]-->

</body>

</html>";
        
        $__internal_0c64f5774d008e8900fdf274e5c5724621dbe9edebc340c45487912bd8bd7990->leave($__internal_0c64f5774d008e8900fdf274e5c5724621dbe9edebc340c45487912bd8bd7990_prof);

        
        $__internal_2d42ac41fae8e19f3dccbd65c0aac991ef9139bcb4d8fb21cb847c9fe9c78f2b->leave($__internal_2d42ac41fae8e19f3dccbd65c0aac991ef9139bcb4d8fb21cb847c9fe9c78f2b_prof);

    }

    public function getTemplateName()
    {
        return "AKYOSEasyCoproBundle:FrontOffice:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 354,  416 => 351,  412 => 350,  408 => 349,  404 => 348,  400 => 347,  396 => 346,  142 => 94,  138 => 82,  77 => 24,  73 => 23,  69 => 22,  65 => 21,  61 => 20,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>Ma Copropriété</title>

    <!-- CSS -->
    <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css?family=Raleway:400,700\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/bootstrap/css/bootstrap.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/font-awesome/css/font-awesome.min.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/animate.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/media-queries.css') }}\">

    <!-- Favicon and touch icons -->
    <link rel=\"shortcut icon\" href=\"{{ asset('assets/ico/favicon.png') }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"144x144\" href=\"{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"114x114\" href=\"{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}\">
    <link rel=\"apple-touch-icon-precomposed\" sizes=\"72x72\" href=\"{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}\">
    <link rel=\"apple-touch-icon-precomposed\" href=\"{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}\">

</head>

<body>

<!-- Top menu -->
<nav class=\"navbar navbar-inverse\" role=\"navigation\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#top-navbar-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"index.html\">Ma Copropriété</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"top-navbar-1\">
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a class=\"scroll-link\" href=\"#features\">Fonctionnalités</a></li>
                <li><a class=\"scroll-link\" href=\"#how-it-works\">Démo</a></li>
                <li><a class=\"scroll-link\" href=\"#testimonials\">Tarifs</a></li>
                <li><a class=\"scroll-link\" href=\"#contact\">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Top content -->
<div class=\"top-content\">
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-sm-8 col-sm-offset-2 text\">
                <h1 class=\"wow fadeInLeftBig\">Gérez vos copropriétés en toute simplicité</h1>
                <div class=\"description wow fadeInLeftBig\">
                    <p>
                        En quelques clics, vous configurez ... Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                        Ut wisi enim ad minim veniam, quis nostrud tempor incididunt ut labore.
                    </p>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-6 col-sm-offset-3 r-form-1-box wow fadeInUp\">
                <div class=\"r-form-1-top\">
                    <div class=\"r-form-1-top-left\">
                        <h3>Connectez-vous</h3>
                        <p>Remplissez le formulaire ci-dessous avec les identifiants délivrés par votre Syndic :</p>
                    </div>
                    <div class=\"r-form-1-top-right\">
                        <i class=\"fa fa-pencil\"></i>
                    </div>
                </div>
                <div class=\"r-form-1-bottom\">
                    {{ render(controller(\"FOSUserBundle:Security:login\")) }}
                    {#<form role=\"form\" action=\"\" method=\"post\">
                        <div class=\"form-group\">
                            <label class=\"sr-only\" for=\"r-form-1-first-name\">Identifiant</label>
                            <input type=\"text\" name=\"r-form-1-first-name\" placeholder=\"Identifiant...\" class=\"r-form-1-first-name form-control\" id=\"r-form-1-first-name\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"sr-only\" for=\"r-form-1-last-name\">Mot de passe</label>
                            <input type=\"text\" name=\"r-form-1-last-name\" placeholder=\"Mot de passe...\" class=\"r-form-1-last-name form-control\" id=\"r-form-1-last-name\">
                        </div>
                        <button type=\"submit\" class=\"btn\">Se Connecter</button>
                    </form>#}
                    <p><center><a href=\"\">Demande d'accès</a></center></p>

                </div>
            </div>
        </div>

    </div>
</div>

<!-- Features -->
<div class=\"features-container section-container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 features section-description wow fadeIn\">
                <h2>Pourquoi choisir EasyCopro ?</h2>
                <div class=\"divider-1 wow fadeInUp\">. . . . . . . . . .</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud tempor incididunt ut labore et.</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-4 features-box wow fadeInUp\">
                <div class=\"features-box-icon\"><i class=\"fa fa-file-pdf-o\"></i></div>
                <h3>Une plateforme facile à utiliser</h3>
                <p>Facilitez-vous la gestion grâce à une interface web claire et intuitive.
                    Gérez la globalité de votre activité de syndic simplement. Partagez facilement les informations et documents sur la plateforme. </p>
            </div>
            <div class=\"col-sm-4 features-box wow fadeInDown\">
                <div class=\"features-box-icon\"><i class=\"fa fa-cog\"></i></div>
                <h3>Gestion des copropriétés</h3>
                <p>Tout en simplicité, gérer les copropriétaires grâce à un annuaire classé par Résidence, créez vos lots et copropriétés et mettez à disposition les documents légaux.</p>
            </div>
            <div class=\"col-sm-4 features-box wow fadeInUp\">
                <div class=\"features-box-icon\"><i class=\"fa fa-commenting\"></i></div>
                <h3>Messagerie interne</h3>
                <p>Connectez-vous 24h/24, oû que vous soyez! Même de votre mobile Iphone ou Android et contactez vos copropriétaires ou faites des demandes de devis en ligne par le biais d'un annuaire artisan.</p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-12 section-bottom-button wow fadeInUp\">
                <a class=\"btn btn-link-1 scroll-link\" href=\"#top-content\">Abonnez-vous<i class=\"fa fa-angle-right\"></i></a>
            </div>
        </div>
    </div>
</div>

<!-- How it works -->
<div class=\"how-it-works-container section-container section-container-gray-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-5 how-it-works-box wow fadeInLeft\">
                <div class=\"embed-responsive embed-responsive-16by9\">
                    <iframe class=\"embed-responsive-item\" src=\"https://player.vimeo.com/video/115014610?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=e36da1\"
                            webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                </div>
            </div>
            <div class=\"col-sm-6 col-sm-offset-1 how-it-works-box how-it-works-box-right wow fadeInUp\">
                <h3>Démonstration d'utilisation</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
                </p>
                <p>
                    Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                    Ut wisi enim ad minim veniam, quis nostrud.
                </p>
                <p>
                    <a class=\"learn-more scroll-link\" href=\"#top-content\">Abonnez-vous</a>
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Tarifs -->
<div class=\"price-table testimonials-container section-container section-container-image-bg\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 testimonials section-description wow fadeIn\">
                <h2>Nos Tarifs</h2>
                <p>Trois prestations différentes :</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 col-md-4 testimonial-list wow fadeInUp\">
                    <div class=\"pricing text-center\">
                        <div class=\"pricing-top\">
                            <p><em>15 <sup>€</sup></em>/an</p>
                            <span>Basic</span>
                        </div>
                        <ul>
                            <li>Html5 + Css3</li>
                            <li>Bootstrap</li>
                            <li>Java script</li>
                            <li>Jquery</li>
                            <li>php</li>
                            <li>More..</li>
                        </ul>
                        <div class=\"btn btn-link-1 scroll-link\">Order Now</div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4 testimonial-list wow fadeInUp\">
                    <div class=\"pricing text-center\">
                        <div class=\"pricing-top\">
                            <p><em>35 <sup>€</sup></em>/an</p>
                            <span>Basic</span>
                        </div>
                        <ul>
                            <li>Html5 + Css3</li>
                            <li>Bootstrap</li>
                            <li>Java script</li>
                            <li>Jquery</li>
                            <li>php</li>
                            <li>More..</li>
                        </ul>
                        <div class=\"btn btn-link-1 scroll-link\">Order Now</div>
                    </div>
                </div>

                <div class=\"col-sm-6 col-md-4 testimonial-list wow fadeInUp\">
                    <div class=\"pricing text-center\">
                        <div class=\"pricing-top\">
                            <p><em>35 <sup>€</sup></em>/an</p>
                            <span>Basic</span>
                        </div>
                        <ul>
                            <li>Html5 + Css3</li>
                            <li>Bootstrap</li>
                            <li>Java script</li>
                            <li>Jquery</li>
                            <li>php</li>
                            <li>More..</li>
                        </ul>
                        <div class=\"btn btn-link-1 scroll-link\">Order Now</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact -->
<div class=\"contact-container section-container\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-12 contact section-description wow fadeIn\">
                <h2>Contactez-nous</h2>
                <div class=\"divider-1 wow fadeInUp\">. . . . . . . . . .</div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud tempor incididunt ut labore et.
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-8\">
                <form name=\"sentMessage\" id=\"contactForm\" novalidate=\"\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Votre Nom *\" id=\"name\" required=\"\" data-validation-required-message=\"Votre nom...\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"email\" class=\"form-control\" placeholder=\"YVotre Email *\" id=\"email\" required=\"\" data-validation-required-message=\"Please enter your email address.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                            <div class=\"form-group\">
                                <input type=\"tel\" class=\"form-control\" placeholder=\"Votre téléphone *\" id=\"phone\" required=\"\" data-validation-required-message=\"Entrez votre numéro de téléphone.\">
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <textarea class=\"form-control\" placeholder=\"Votre Message *\" id=\"message\" required=\"\" data-validation-required-message=\"Entrez votre message.\" rows=\"5\"></textarea>
                                <p class=\"help-block text-danger\"></p>
                            </div>
                        </div>
                        <div class=\"clearfix\"></div>
                        <div class=\"col-lg-12 text-center\">
                            <div id=\"success\"></div>
                            <button type=\"submit\" class=\"btn btn-link-1 scroll-link envoi-btn\">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class=\"col-md-4 contactbox\">
                <p class=\"pcontact\">
                    <strong><i class=\"fa fa-map-marker\"></i> Adresse</strong><br>
                    AKYOS : Parc Valmy - 8F rue Jeanne Barret - 21000 DIJON
                </p>
                <p class=\"pcontact\"><strong><i class=\"fa fa-phone\"></i> Téléphone</strong><br>
                    03 80 10 23 57</p>
                <p class=\"pcontact\">
                    <strong><i class=\"fa fa-envelope\"></i> Email</strong><br>
                    info@akyos.com</p>
                <p></p>
            </div>
        </div>
    </div>
</div>


<!-- Footer -->
<footer>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4 footer-about wow fadeInUp\">
                <h3>A propos de nous</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
                </p>
                <p>
                    <a class=\"scroll-link\" href=\"#about-us\">En savoir plus</a>
                </p>
            </div>
            <div class=\"col-sm-4 footer-contact-info wow fadeInDown\">
                <h3>Easy Copro</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper.
                </p>
            </div>
            <div class=\"col-sm-4 footer-social wow fadeInUp\">
                <h3>Liens sociaux</h3>
                <p>
                    <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-google-plus\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                    <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                </p>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-sm-6 footer-copyright\">
                &copy; Easy Copro by <a href=\"http://www.akyos.com\">AKYOS</a>
            </div>
            <div class=\"col-sm-6 footer-menu\">
                <ul>
                    <li><a class=\"scroll-link\" href=\"#top-content\">Contact</a></li>
                    <li><a class=\"scroll-link\" href=\"#features\">Mentions légales</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>


<!-- Javascript -->
<script src=\"{{ asset('assets/js/jquery-1.11.1.min.js') }}\"></script>
<script src=\"{{ asset('assets/bootstrap/js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/jquery.backstretch.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/wow.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/retina-1.1.0.min.js') }}\"></script>
<script src=\"{{ asset('assets/js/scripts.js') }}\"></script>

<!--[if lt IE 10]>
<script src=\"{{ asset('assets/js/placeholder.js') }}\"></script>
<![endif]-->

</body>

</html>", "AKYOSEasyCoproBundle:FrontOffice:index.html.twig", "/Applications/MAMP/htdocs/Symfony/bdx-1702-coprosyndic/src/AKYOS/EasyCoproBundle/Resources/views/FrontOffice/index.html.twig");
    }
}