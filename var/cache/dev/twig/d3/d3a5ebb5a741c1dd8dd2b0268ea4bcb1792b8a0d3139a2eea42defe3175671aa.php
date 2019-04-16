<?php

/* __string_template__93609ca1375fdf68e7b232a8013e7f03dee4b230d20e28c162bf45e252d03206 */
class __TwigTemplate_53da2194cfe33b290fc6d886e2bb27560166730414ace374a532b0aada78912c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'extra_stylesheets' => array($this, 'block_extra_stylesheets'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'content_footer' => array($this, 'block_content_footer'),
            'sidebar_right' => array($this, 'block_sidebar_right'),
            'javascripts' => array($this, 'block_javascripts'),
            'extra_javascripts' => array($this, 'block_extra_javascripts'),
            'translate_javascripts' => array($this, 'block_translate_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b4bfcf209570513b9a73c05e2a383ccfa1c772c7633e20eae90123e3864f9a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b4bfcf209570513b9a73c05e2a383ccfa1c772c7633e20eae90123e3864f9a6->enter($__internal_4b4bfcf209570513b9a73c05e2a383ccfa1c772c7633e20eae90123e3864f9a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__93609ca1375fdf68e7b232a8013e7f03dee4b230d20e28c162bf45e252d03206"));

        $__internal_409a8783b9f8298179a3fb69ebe1c3f46bbf95a06a167a899cc43f72a74e7b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_409a8783b9f8298179a3fb69ebe1c3f46bbf95a06a167a899cc43f72a74e7b27->enter($__internal_409a8783b9f8298179a3fb69ebe1c3f46bbf95a06a167a899cc43f72a74e7b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "__string_template__93609ca1375fdf68e7b232a8013e7f03dee4b230d20e28c162bf45e252d03206"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/zamoundaofficiel/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/zamoundaofficiel/img/app_icon.png\" />

<title>Performances • zamoundaofficiel</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.4.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '9a9b2dad8815b4eb89aa9601db1784f2';
    var token_admin_orders = '044a37114618a15aa197fde3647d1bf0';
    var token_admin_customers = '778e9b7bf80b1d4b1221b3e7bace6dd2';
    var token_admin_customer_threads = 'a49ff134a2245755c6179f99eee9614d';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '35230a101a4619c5b4c5f6cbcb5391d7';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/zamoundaofficiel/admin397kwnoux/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4';
    var tab_modules_list = 'a2hosting,oneandonehosting,ns8csp,jmango360_api';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/zamoundaofficiel/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/zamoundaofficiel/admin397kwnoux/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/zamoundaofficiel/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/zamoundaofficiel/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/zamoundaofficiel/admin397kwnoux/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/zamoundaofficiel\\/admin397kwnoux\\/\";
var baseDir = \"\\/zamoundaofficiel\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"\";
var show_new_messages = false;
var show_new_orders = \"\";
</script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/admin397kwnoux/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/admin.js?v=1.7.4.2\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/tools.js?v=1.7.4.2\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/admin397kwnoux/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/admin397kwnoux/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminGamification&token=80a88beb5cfaf011752ec6aa4464c373';
\t\t\t\tvar current_id_tab = 101;
\t\t\t</script>

";
        // line 82
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>
<body class=\"lang-fr adminperformance\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminDashboard&amp;token=72887a3393ce429b17c465c00a8d8c49\"></a>
    <span id=\"shop_version\">1.7.4.2</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminOrders&amp;token=044a37114618a15aa197fde3647d1bf0\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=fe41a37cf4355326648ec118a5e3b9db\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item\"
         href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php/module/manage?token=62eba78649f0a1b3bfa5616c62aa7f56\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=b8d195b743a0b988526022230a2361f4\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php/product/new?token=62eba78649f0a1b3bfa5616c62aa7f56\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCategories&amp;addcategory&amp;token=25900102578ebfee76ec3b468fa46990\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
          <a class=\"dropdown-item\"
         href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?http://zamoundaofficiel.fr?controller=AdminModules&amp;&amp;configure=xipblog&amp;token=acf9310615e31859b5ca960bee837c8c\"
                 data-item=\"XipBlog Settings\"
      >XipBlog Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"121\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminQuickAccesses&token=ac9a71a00c1f223985e1a06b3e97ecfa\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Performances - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminQuickAccesses&token=ac9a71a00c1f223985e1a06b3e97ecfa\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminSearch&amp;token=827ff0763f9feff4f7708f1f252d4370\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

          <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
        <a class=\"link shop-state\"
           id=\"debug-mode\"
           data-toggle=\"pstooltip\"
           data-placement=\"bottom\"
           data-html=\"true\"
           title=\"<p class='text-left'><strong>Votre boutique est en mode de débogage.</strong></p><p class='text-left'>Tous les messages et erreurs PHP sont affichés. Lorsque vous n'en avez plus besoin, <strong>désactivez</strong> ce mode.</p>\"
           href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/performance?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\"
        >
          <i class=\"material-icons\">bug_report</i>
          <span>Mode debug</span>
        </a>
      </div>
              <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
        <a class=\"link shop-state\"
           id=\"maintenance-mode\"
           data-toggle=\"pstooltip\"
           data-placement=\"bottom\"
           data-html=\"true\"
           title=\"<p class='text-left'><strong>Votre boutique est en maintenance.</strong></p><p class='text-left'>Vos clients et visiteurs ne peuvent y accéder actuellement. &lt;br /&gt; Vous pouvez gérer les paramètres de maintenance dans l'onglet Maintenance de la page Paramètres de la boutique.</p>\" href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/shop/maintenance?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\"
        >
          <i class=\"material-icons\">build</i>
          <span>Mode maintenance</span>
        </a>
      </div>
        <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Voir ma boutique
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                                          <div class=\"tab-pane active empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>



  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/kanonkevin%40yahoo.fr.jpg\" />
      <span>Kevin KANON</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminEmployees&amp;token=35230a101a4619c5b4c5f6cbcb5391d7&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i>
      Votre profil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminLogin&amp;token=c384bfd3b127a58fae7158f7c396822b&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminDashboard&amp;token=72887a3393ce429b17c465c00a8d8c49\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminOrders&amp;token=044a37114618a15aa197fde3647d1bf0\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Commandes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminOrders&amp;token=044a37114618a15aa197fde3647d1bf0\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminInvoices&amp;token=21fdf28e67865a1cd698971cf5c37ea4\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminSlip&amp;token=e754e714c1673d8ce40dbb54a741b9fb\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminDeliverySlip&amp;token=4b13784ac28825d3ccdc3f1b5fa6938f\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCarts&amp;token=a30d75e9874f7c33b0abc4a96a957690\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/product/catalog?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalogue
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/product/catalog?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCategories&amp;token=25900102578ebfee76ec3b468fa46990\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminTracking&amp;token=b2e0e6a6aa933538cce2b2e328bb9448\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminAttributesGroups&amp;token=6e7a983d352ab123269ab4cbc4194c28\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminManufacturers&amp;token=5002807ea2b05e45c4b372baff9ddd2f\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminAttachments&amp;token=9699a2ba02ccac8d07d6f56cbf19b32e\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCartRules&amp;token=b8d195b743a0b988526022230a2361f4\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/stock/?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCustomers&amp;token=778e9b7bf80b1d4b1221b3e7bace6dd2\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clients
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCustomers&amp;token=778e9b7bf80b1d4b1221b3e7bace6dd2\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminAddresses&amp;token=5602673ebbaf77c920cca0da5b6ea0ec\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCustomerThreads&amp;token=a49ff134a2245755c6179f99eee9614d\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    SAV
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCustomerThreads&amp;token=a49ff134a2245755c6179f99eee9614d\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminOrderMessage&amp;token=595ecc48a124b61d78aa262a4bf22fe6\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminReturn&amp;token=6c99cec989bc646c237ab0eab1a090c6\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminStats&amp;token=fe41a37cf4355326648ec118a5e3b9db\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistiques
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/module/manage?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/module/manage?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Modules et services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/module/addons-store?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminThemes&amp;token=9599b3b60783c5ee6a078ca99c002d55\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Apparence
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"121\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminThemes&amp;token=9599b3b60783c5ee6a078ca99c002d55\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminThemesCatalog&amp;token=b9bb12e0bd754a45b370baec5d5f4691\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCmsContent&amp;token=d082e5200443dce92cb793e616aab984\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminModulesPositions&amp;token=724e31874e792bc329d062ae58eb1a93\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminImages\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminImages&amp;token=a31af3fc57e7af631863404960b57a9e\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"120\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminLinkWidget&amp;token=7fadec6a5ace9aa20b0f3acf06d84955\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCarriers&amp;token=f96596cbd7f916c75db37e23a1276523\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Livraison
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCarriers&amp;token=f96596cbd7f916c75db37e23a1276523\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminShipping\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminShipping&amp;token=0fc5d69807245f61eb1f10b18ea3e208\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"59\" id=\"subtab-AdminParentPayment\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminPayment&amp;token=a0f85c57627bc85a7dda94e1fe6cdd69\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Paiement
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminPayment\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminPayment&amp;token=a0f85c57627bc85a7dda94e1fe6cdd69\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminPaymentPreferences&amp;token=09e1ce50f023792c0b07c9356223d633\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"62\" id=\"subtab-AdminInternational\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminLocalization&amp;token=ae9ffe24f172a1f5f1d4d085b80554b7\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-62\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminLocalization&amp;token=ae9ffe24f172a1f5f1d4d085b80554b7\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminZones&amp;token=0b32b6d7658d27392c230110de117aed\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminTaxes&amp;token=ad10ad03a039a8cfcbc881aa83b7b395\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminTranslations\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminTranslations&amp;token=c7ebb88e5a1e1dccd814d78698803e89\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"127\" id=\"subtab-Adminxprtblogdashboard\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=Adminxippost&amp;token=700d0046bab6dec9af0a6f3065cb3b7a\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Xpert Blog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-127\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"128\" id=\"subtab-Adminxippost\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=Adminxippost&amp;token=700d0046bab6dec9af0a6f3065cb3b7a\" class=\"link\"> Blog Posts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"129\" id=\"subtab-Adminxipcategory\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=Adminxipcategory&amp;token=2b68b092d9a6268bf63ce262e6f68dfc\" class=\"link\"> Blog Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-Adminxipcomment\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=Adminxipcomment&amp;token=a5de4ce476a54a8104b587fd46f89f6c\" class=\"link\"> Blog Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"131\" id=\"subtab-Adminxipimagetype\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=Adminxipimagetype&amp;token=9845d92c1a8a3be051fb4e1ca66f507b\" class=\"link\"> Blog Image Type
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"76\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"77\" id=\"subtab-ShopParameters\">
                  <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/shop/preferences?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Paramètres de la boutique
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-77\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/shop/preferences?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminOrderPreferences&amp;token=7c10a4007e151a08aaad0cff695a0ccf\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"84\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/shop/product_preferences?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/shop/customer_preferences?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminContacts&amp;token=0449aee83646b9df0870bee26f3f79c6\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\" id=\"subtab-AdminParentMeta\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminMeta&amp;token=dd33ef1cc22e2935651fc10cedf545a3\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminSearchConf&amp;token=5bb21f0874f49024689e277a0665d922\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminGamification\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminGamification&amp;token=80a88beb5cfaf011752ec6aa4464c373\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"99\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/system_information?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Paramètres avancés
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-99\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminInformation\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/system_information?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"101\" id=\"subtab-AdminPerformance\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/performance?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/administration?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminEmails\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminEmails&amp;token=845450d1543d91e8923800fc189299ed\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminImport\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/import?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminEmployees&amp;token=35230a101a4619c5b4c5f6cbcb5391d7\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminRequestSql&amp;token=c642433ecefba1bdd0c029bf12c5e300\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"112\" id=\"subtab-AdminLogs\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminLogs&amp;token=a68a13e24e3fbc65307ab503d8d8525e\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminWebservice&amp;token=32a882b5850402af5922137eb0de7f71\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"117\" id=\"tab-DEFAULT\">
              <span class=\"title\">Détails</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"132\" id=\"subtab-AdminSelfUpgrade\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminSelfUpgrade&amp;token=ed250c0462f6b8520d2a00584cfe6a79\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    1-Click Upgrade
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Paramètres avancés</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/performance?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" aria-current=\"page\">Performances</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performances          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/clear_cache?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\"                  title=\"Vider le cache\"                >
                  <i class=\"material-icons\">delete</i>
                  Vider le cache
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/zamoundaofficiel/admin397kwnoux/index.php/module/catalog?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\"                title=\"Modules recommandés\"
                              >
                Modules recommandés
              </a>
                        
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/zamoundaofficiel/admin397kwnoux/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminPerformance%253Fversion%253D1.7.4.2%2526country%253Dfr/Aide?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=kanonkevin%40yahoo.fr&amp;firstname=Kevin&amp;lastname=KANON&amp;website=http%3A%2F%2Fwww.zamoundaofficiel.fr%2Fzamoundaofficiel%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/zamoundaofficiel/admin397kwnoux/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=kanonkevin%40yahoo.fr&amp;firstname=Kevin&amp;lastname=KANON&amp;website=http%3A%2F%2Fwww.zamoundaofficiel.fr%2Fzamoundaofficiel%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div  \">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1178
        $this->displayBlock('content_header', $context, $blocks);
        // line 1179
        echo "                 ";
        $this->displayBlock('content', $context, $blocks);
        // line 1180
        echo "                 ";
        $this->displayBlock('content_footer', $context, $blocks);
        // line 1181
        echo "                 ";
        $this->displayBlock('sidebar_right', $context, $blocks);
        // line 1182
        echo "
          
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminDashboard&amp;token=72887a3393ce429b17c465c00a8d8c49\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=kanonkevin%40yahoo.fr&amp;firstname=Kevin&amp;lastname=KANON&amp;website=http%3A%2F%2Fwww.zamoundaofficiel.fr%2Fzamoundaofficiel%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/zamoundaofficiel/admin397kwnoux/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=kanonkevin%40yahoo.fr&amp;firstname=Kevin&amp;lastname=KANON&amp;website=http%3A%2F%2Fwww.zamoundaofficiel.fr%2Fzamoundaofficiel%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

";
        // line 1291
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>
</html>";
        
        $__internal_4b4bfcf209570513b9a73c05e2a383ccfa1c772c7633e20eae90123e3864f9a6->leave($__internal_4b4bfcf209570513b9a73c05e2a383ccfa1c772c7633e20eae90123e3864f9a6_prof);

        
        $__internal_409a8783b9f8298179a3fb69ebe1c3f46bbf95a06a167a899cc43f72a74e7b27->leave($__internal_409a8783b9f8298179a3fb69ebe1c3f46bbf95a06a167a899cc43f72a74e7b27_prof);

    }

    // line 82
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d431b608d1aaf1801708507185bbd77c68c6ef3996b9ac3c0f44819e0eda8449 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d431b608d1aaf1801708507185bbd77c68c6ef3996b9ac3c0f44819e0eda8449->enter($__internal_d431b608d1aaf1801708507185bbd77c68c6ef3996b9ac3c0f44819e0eda8449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_008e14c7548b860cbdb2b77631e580d7a3a30a1bd6fad3b6f2677295c8e64ffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_008e14c7548b860cbdb2b77631e580d7a3a30a1bd6fad3b6f2677295c8e64ffc->enter($__internal_008e14c7548b860cbdb2b77631e580d7a3a30a1bd6fad3b6f2677295c8e64ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_008e14c7548b860cbdb2b77631e580d7a3a30a1bd6fad3b6f2677295c8e64ffc->leave($__internal_008e14c7548b860cbdb2b77631e580d7a3a30a1bd6fad3b6f2677295c8e64ffc_prof);

        
        $__internal_d431b608d1aaf1801708507185bbd77c68c6ef3996b9ac3c0f44819e0eda8449->leave($__internal_d431b608d1aaf1801708507185bbd77c68c6ef3996b9ac3c0f44819e0eda8449_prof);

    }

    public function block_extra_stylesheets($context, array $blocks = array())
    {
        $__internal_2a794e3c39ed997e8c6a39bd71820da0fb2d83a6a32057eb15f2ba72a225447c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a794e3c39ed997e8c6a39bd71820da0fb2d83a6a32057eb15f2ba72a225447c->enter($__internal_2a794e3c39ed997e8c6a39bd71820da0fb2d83a6a32057eb15f2ba72a225447c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        $__internal_dfb32a12760643521ab526ec0ba584f75befbeb709cf4bc3cf2bf8cab6cf1a2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb32a12760643521ab526ec0ba584f75befbeb709cf4bc3cf2bf8cab6cf1a2e->enter($__internal_dfb32a12760643521ab526ec0ba584f75befbeb709cf4bc3cf2bf8cab6cf1a2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_stylesheets"));

        
        $__internal_dfb32a12760643521ab526ec0ba584f75befbeb709cf4bc3cf2bf8cab6cf1a2e->leave($__internal_dfb32a12760643521ab526ec0ba584f75befbeb709cf4bc3cf2bf8cab6cf1a2e_prof);

        
        $__internal_2a794e3c39ed997e8c6a39bd71820da0fb2d83a6a32057eb15f2ba72a225447c->leave($__internal_2a794e3c39ed997e8c6a39bd71820da0fb2d83a6a32057eb15f2ba72a225447c_prof);

    }

    // line 1178
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_e142221d8e5bd27e998542bd2fc984f15b0d6f936caad1f94853251a6c20a936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e142221d8e5bd27e998542bd2fc984f15b0d6f936caad1f94853251a6c20a936->enter($__internal_e142221d8e5bd27e998542bd2fc984f15b0d6f936caad1f94853251a6c20a936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        $__internal_24798a1d66f27a165f5a15cb1b565916c2dc3f6393378fcb8305385c783d1b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24798a1d66f27a165f5a15cb1b565916c2dc3f6393378fcb8305385c783d1b12->enter($__internal_24798a1d66f27a165f5a15cb1b565916c2dc3f6393378fcb8305385c783d1b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        
        $__internal_24798a1d66f27a165f5a15cb1b565916c2dc3f6393378fcb8305385c783d1b12->leave($__internal_24798a1d66f27a165f5a15cb1b565916c2dc3f6393378fcb8305385c783d1b12_prof);

        
        $__internal_e142221d8e5bd27e998542bd2fc984f15b0d6f936caad1f94853251a6c20a936->leave($__internal_e142221d8e5bd27e998542bd2fc984f15b0d6f936caad1f94853251a6c20a936_prof);

    }

    // line 1179
    public function block_content($context, array $blocks = array())
    {
        $__internal_2331eee6528e695722c9ab3d1e9e48a324453fa14e165daa502ae77c3d466490 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2331eee6528e695722c9ab3d1e9e48a324453fa14e165daa502ae77c3d466490->enter($__internal_2331eee6528e695722c9ab3d1e9e48a324453fa14e165daa502ae77c3d466490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_93cf4feae8808fc6191a28ca4704f254b6aa315619082b231d24f3f7fe30074c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93cf4feae8808fc6191a28ca4704f254b6aa315619082b231d24f3f7fe30074c->enter($__internal_93cf4feae8808fc6191a28ca4704f254b6aa315619082b231d24f3f7fe30074c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_93cf4feae8808fc6191a28ca4704f254b6aa315619082b231d24f3f7fe30074c->leave($__internal_93cf4feae8808fc6191a28ca4704f254b6aa315619082b231d24f3f7fe30074c_prof);

        
        $__internal_2331eee6528e695722c9ab3d1e9e48a324453fa14e165daa502ae77c3d466490->leave($__internal_2331eee6528e695722c9ab3d1e9e48a324453fa14e165daa502ae77c3d466490_prof);

    }

    // line 1180
    public function block_content_footer($context, array $blocks = array())
    {
        $__internal_a1b0e8a04a03ae78578136ac36dc77fd091f360d9113b69710a7b24c680ee12d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b0e8a04a03ae78578136ac36dc77fd091f360d9113b69710a7b24c680ee12d->enter($__internal_a1b0e8a04a03ae78578136ac36dc77fd091f360d9113b69710a7b24c680ee12d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        $__internal_639a6f189060b72e9cb2e13d6ce53fdb3d5784aa247e1260b06cebd18b69b5ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_639a6f189060b72e9cb2e13d6ce53fdb3d5784aa247e1260b06cebd18b69b5ad->enter($__internal_639a6f189060b72e9cb2e13d6ce53fdb3d5784aa247e1260b06cebd18b69b5ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_footer"));

        
        $__internal_639a6f189060b72e9cb2e13d6ce53fdb3d5784aa247e1260b06cebd18b69b5ad->leave($__internal_639a6f189060b72e9cb2e13d6ce53fdb3d5784aa247e1260b06cebd18b69b5ad_prof);

        
        $__internal_a1b0e8a04a03ae78578136ac36dc77fd091f360d9113b69710a7b24c680ee12d->leave($__internal_a1b0e8a04a03ae78578136ac36dc77fd091f360d9113b69710a7b24c680ee12d_prof);

    }

    // line 1181
    public function block_sidebar_right($context, array $blocks = array())
    {
        $__internal_52baec32c5218ff095d53101bd765ef33add8cd761aa2d73ce06b607bdc54423 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52baec32c5218ff095d53101bd765ef33add8cd761aa2d73ce06b607bdc54423->enter($__internal_52baec32c5218ff095d53101bd765ef33add8cd761aa2d73ce06b607bdc54423_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        $__internal_fa34b373c6653ae78a7d1d016633a97e0b79ccd014ac5591e9dc3af6a9cfc782 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa34b373c6653ae78a7d1d016633a97e0b79ccd014ac5591e9dc3af6a9cfc782->enter($__internal_fa34b373c6653ae78a7d1d016633a97e0b79ccd014ac5591e9dc3af6a9cfc782_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar_right"));

        
        $__internal_fa34b373c6653ae78a7d1d016633a97e0b79ccd014ac5591e9dc3af6a9cfc782->leave($__internal_fa34b373c6653ae78a7d1d016633a97e0b79ccd014ac5591e9dc3af6a9cfc782_prof);

        
        $__internal_52baec32c5218ff095d53101bd765ef33add8cd761aa2d73ce06b607bdc54423->leave($__internal_52baec32c5218ff095d53101bd765ef33add8cd761aa2d73ce06b607bdc54423_prof);

    }

    // line 1291
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_85b77bed059c592623602f2a378b5887afeba392642ae5361eb7341a4e081980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85b77bed059c592623602f2a378b5887afeba392642ae5361eb7341a4e081980->enter($__internal_85b77bed059c592623602f2a378b5887afeba392642ae5361eb7341a4e081980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_88455f5e4b432fe7706a4758b637cba47e630e5b89bff63bfbf0d6521a7a48e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88455f5e4b432fe7706a4758b637cba47e630e5b89bff63bfbf0d6521a7a48e7->enter($__internal_88455f5e4b432fe7706a4758b637cba47e630e5b89bff63bfbf0d6521a7a48e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_88455f5e4b432fe7706a4758b637cba47e630e5b89bff63bfbf0d6521a7a48e7->leave($__internal_88455f5e4b432fe7706a4758b637cba47e630e5b89bff63bfbf0d6521a7a48e7_prof);

        
        $__internal_85b77bed059c592623602f2a378b5887afeba392642ae5361eb7341a4e081980->leave($__internal_85b77bed059c592623602f2a378b5887afeba392642ae5361eb7341a4e081980_prof);

    }

    public function block_extra_javascripts($context, array $blocks = array())
    {
        $__internal_dc6613f9d69e1d600388d872223f8cf71750acf9a89348c9908d580cdaf11a06 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc6613f9d69e1d600388d872223f8cf71750acf9a89348c9908d580cdaf11a06->enter($__internal_dc6613f9d69e1d600388d872223f8cf71750acf9a89348c9908d580cdaf11a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        $__internal_45e5b372d6476867d8b69b194b5dd9fe1626c61225dbccccf63f4d5cdccb71d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e5b372d6476867d8b69b194b5dd9fe1626c61225dbccccf63f4d5cdccb71d7->enter($__internal_45e5b372d6476867d8b69b194b5dd9fe1626c61225dbccccf63f4d5cdccb71d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "extra_javascripts"));

        
        $__internal_45e5b372d6476867d8b69b194b5dd9fe1626c61225dbccccf63f4d5cdccb71d7->leave($__internal_45e5b372d6476867d8b69b194b5dd9fe1626c61225dbccccf63f4d5cdccb71d7_prof);

        
        $__internal_dc6613f9d69e1d600388d872223f8cf71750acf9a89348c9908d580cdaf11a06->leave($__internal_dc6613f9d69e1d600388d872223f8cf71750acf9a89348c9908d580cdaf11a06_prof);

    }

    public function block_translate_javascripts($context, array $blocks = array())
    {
        $__internal_118ca47d1aedd9a42b30c32f5385bd6bbea7be296c2bf7e57421f97dce936bfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_118ca47d1aedd9a42b30c32f5385bd6bbea7be296c2bf7e57421f97dce936bfd->enter($__internal_118ca47d1aedd9a42b30c32f5385bd6bbea7be296c2bf7e57421f97dce936bfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        $__internal_08185f852e828b7ff540ca01cb8e425e7abca513b1e809c4c5054cf08e247ff3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08185f852e828b7ff540ca01cb8e425e7abca513b1e809c4c5054cf08e247ff3->enter($__internal_08185f852e828b7ff540ca01cb8e425e7abca513b1e809c4c5054cf08e247ff3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_javascripts"));

        
        $__internal_08185f852e828b7ff540ca01cb8e425e7abca513b1e809c4c5054cf08e247ff3->leave($__internal_08185f852e828b7ff540ca01cb8e425e7abca513b1e809c4c5054cf08e247ff3_prof);

        
        $__internal_118ca47d1aedd9a42b30c32f5385bd6bbea7be296c2bf7e57421f97dce936bfd->leave($__internal_118ca47d1aedd9a42b30c32f5385bd6bbea7be296c2bf7e57421f97dce936bfd_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__93609ca1375fdf68e7b232a8013e7f03dee4b230d20e28c162bf45e252d03206";
    }

    public function getDebugInfo()
    {
        return array (  1454 => 1291,  1437 => 1181,  1420 => 1180,  1403 => 1179,  1386 => 1178,  1353 => 82,  1339 => 1291,  1228 => 1182,  1225 => 1181,  1222 => 1180,  1219 => 1179,  1217 => 1178,  117 => 82,  34 => 1,);
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
<html lang=\"fr\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=0\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/zamoundaofficiel/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/zamoundaofficiel/img/app_icon.png\" />

<title>Performances • zamoundaofficiel</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'fr';
    var lang_is_rtl = '0';
    var full_language_code = 'fr';
    var full_cldr_language_code = 'fr-FR';
    var country_iso_code = 'FR';
    var _PS_VERSION_ = '1.7.4.2';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Une nouvelle commande a été passée sur votre boutique.';
    var order_number_msg = 'Numéro de commande : ';
    var total_msg = 'Total : ';
    var from_msg = 'Du ';
    var see_order_msg = 'Afficher cette commande';
    var new_customer_msg = 'Un nouveau client s\\\\\\'est inscrit sur votre boutique';
    var customer_name_msg = 'Nom du client : ';
    var new_msg = 'Un nouveau message a été posté sur votre boutique.';
    var see_msg = 'Lire le message';
    var token = '9a9b2dad8815b4eb89aa9601db1784f2';
    var token_admin_orders = '044a37114618a15aa197fde3647d1bf0';
    var token_admin_customers = '778e9b7bf80b1d4b1221b3e7bace6dd2';
    var token_admin_customer_threads = 'a49ff134a2245755c6179f99eee9614d';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '35230a101a4619c5b4c5f6cbcb5391d7';
    var choose_language_translate = 'Choisissez la langue';
    var default_language = '1';
    var admin_modules_link = '/zamoundaofficiel/admin397kwnoux/index.php/module/catalog/recommended?route=admin_module_catalog_post&_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4';
    var tab_modules_list = 'a2hosting,oneandonehosting,ns8csp,jmango360_api';
    var update_success_msg = 'Mise à jour réussie';
    var errorLogin = 'PrestaShop n\\\\\\'a pas pu se connecter à Addons. Veuillez vérifier vos identifiants et votre connexion Internet.';
    var search_product_msg = 'Rechercher un produit';
  </script>

      <link href=\"/zamoundaofficiel/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/zamoundaofficiel/admin397kwnoux/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/zamoundaofficiel/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/zamoundaofficiel/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/zamoundaofficiel/admin397kwnoux/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/zamoundaofficiel\\/admin397kwnoux\\/\";
var baseDir = \"\\/zamoundaofficiel\\/\";
var currency = {\"iso_code\":\"EUR\",\"sign\":\"\\u20ac\",\"name\":\"euro\",\"format\":\"#,##0.00\\u00a0\\u00a4\"};
var host_mode = false;
var show_new_customers = \"\";
var show_new_messages = false;
var show_new_orders = \"\";
</script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/jquery/jquery-1.11.0.min.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/jquery/jquery-migrate-1.2.1.min.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/admin397kwnoux/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/admin.js?v=1.7.4.2\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/cldr.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/tools.js?v=1.7.4.2\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/admin397kwnoux/public/bundle.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascript\" src=\"/zamoundaofficiel/admin397kwnoux/themes/default/js/vendor/nv.d3.min.js\"></script>

  <script>
\t\t\t\tvar ids_ps_advice = new Array();
\t\t\t\tvar admin_gamification_ajax_url = 'http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminGamification&token=80a88beb5cfaf011752ec6aa4464c373';
\t\t\t\tvar current_id_tab = 101;
\t\t\t</script>

{% block stylesheets %}{% endblock %}{% block extra_stylesheets %}{% endblock %}</head>
<body class=\"lang-fr adminperformance\">


<header id=\"header\">
  <nav id=\"header_infos\" class=\"main-header\">

    <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

        
        <i class=\"material-icons js-mobile-menu\">menu</i>
    <a id=\"header_logo\" class=\"logo float-left\" href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminDashboard&amp;token=72887a3393ce429b17c465c00a8d8c49\"></a>
    <span id=\"shop_version\">1.7.4.2</span>

    <div class=\"component\" id=\"quick-access-container\">
      <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Accès rapide
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item\"
         href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminOrders&amp;token=044a37114618a15aa197fde3647d1bf0\"
                 data-item=\"Commandes\"
      >Commandes</a>
          <a class=\"dropdown-item\"
         href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=fe41a37cf4355326648ec118a5e3b9db\"
                 data-item=\"Évaluation du catalogue\"
      >Évaluation du catalogue</a>
          <a class=\"dropdown-item\"
         href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php/module/manage?token=62eba78649f0a1b3bfa5616c62aa7f56\"
                 data-item=\"Modules installés\"
      >Modules installés</a>
          <a class=\"dropdown-item\"
         href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=b8d195b743a0b988526022230a2361f4\"
                 data-item=\"Nouveau bon de réduction\"
      >Nouveau bon de réduction</a>
          <a class=\"dropdown-item\"
         href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php/product/new?token=62eba78649f0a1b3bfa5616c62aa7f56\"
                 data-item=\"Nouveau produit\"
      >Nouveau produit</a>
          <a class=\"dropdown-item\"
         href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCategories&amp;addcategory&amp;token=25900102578ebfee76ec3b468fa46990\"
                 data-item=\"Nouvelle catégorie\"
      >Nouvelle catégorie</a>
          <a class=\"dropdown-item\"
         href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?http://zamoundaofficiel.fr?controller=AdminModules&amp;&amp;configure=xipblog&amp;token=acf9310615e31859b5ca960bee837c8c\"
                 data-item=\"XipBlog Settings\"
      >XipBlog Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"121\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminQuickAccesses&token=ac9a71a00c1f223985e1a06b3e97ecfa\"
        data-prompt-text=\"Veuillez nommer ce raccourci :\"
        data-link=\"Performances - Liste\"
      >
        <i class=\"material-icons\">add_circle</i>
        Ajouter cette page à l'Accès Rapide
      </a>
        <a class=\"dropdown-item\" href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminQuickAccesses&token=ac9a71a00c1f223985e1a06b3e97ecfa\">
      <i class=\"material-icons\">settings</i>
      Gérer les accès rapides
    </a>
  </div>
</div>
    </div>
    <div class=\"component\" id=\"header-search-container\">
      <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminSearch&amp;token=827ff0763f9feff4f7708f1f252d4370\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Rechercher (ex. : référence produit, nom du client, etc.)\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Partout
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Partout\" href=\"#\" data-value=\"0\" data-placeholder=\"Que souhaitez-vous trouver ?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Partout</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalogue\" href=\"#\" data-value=\"1\" data-placeholder=\"Nom du produit, unité de gestion des stocks (SKU), référence...\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalogue</a>
        <a class=\"dropdown-item\" data-item=\"Clients par nom\" href=\"#\" data-value=\"2\" data-placeholder=\"E-mail, nom...\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clients par nom</a>
        <a class=\"dropdown-item\" data-item=\"Clients par adresse IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clients par adresse IP</a>
        <a class=\"dropdown-item\" data-item=\"Commandes\" href=\"#\" data-value=\"3\" data-placeholder=\"ID commande\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Commandes</a>
        <a class=\"dropdown-item\" data-item=\"Factures\" href=\"#\" data-value=\"4\" data-placeholder=\"Numéro de facture\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i></i> Factures</a>
        <a class=\"dropdown-item\" data-item=\"Paniers\" href=\"#\" data-value=\"5\" data-placeholder=\"ID panier\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Paniers</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Nom du module\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">RECHERCHE</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
    </div>

          <div class=\"component hide-mobile-sm\" id=\"header-debug-mode-container\">
        <a class=\"link shop-state\"
           id=\"debug-mode\"
           data-toggle=\"pstooltip\"
           data-placement=\"bottom\"
           data-html=\"true\"
           title=\"<p class='text-left'><strong>Votre boutique est en mode de débogage.</strong></p><p class='text-left'>Tous les messages et erreurs PHP sont affichés. Lorsque vous n'en avez plus besoin, <strong>désactivez</strong> ce mode.</p>\"
           href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/performance?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\"
        >
          <i class=\"material-icons\">bug_report</i>
          <span>Mode debug</span>
        </a>
      </div>
              <div class=\"component hide-mobile-sm\" id=\"header-maintenance-mode-container\">
        <a class=\"link shop-state\"
           id=\"maintenance-mode\"
           data-toggle=\"pstooltip\"
           data-placement=\"bottom\"
           data-html=\"true\"
           title=\"<p class='text-left'><strong>Votre boutique est en maintenance.</strong></p><p class='text-left'>Vos clients et visiteurs ne peuvent y accéder actuellement. &lt;br /&gt; Vous pouvez gérer les paramètres de maintenance dans l'onglet Maintenance de la page Paramètres de la boutique.</p>\" href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/shop/maintenance?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\"
        >
          <i class=\"material-icons\">build</i>
          <span>Mode maintenance</span>
        </a>
      </div>
        <div class=\"component\" id=\"header-shop-list-container\">
        <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      Voir ma boutique
    </a>
  </div>
    </div>
          <div class=\"component header-right-component\" id=\"header-notifications-container\">
        <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                                          <div class=\"tab-pane active empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              Pas de nouveau message pour l'instant.<br>
              On dirait que vos clients sont satisfaits :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>



  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
      </div>
        <div class=\"component\" id=\"header-employee-container\">
      <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div class=\"text-center employee_avatar\">
      <img class=\"avatar rounded-circle\" src=\"http://profile.prestashop.com/kanonkevin%40yahoo.fr.jpg\" />
      <span>Kevin KANON</span>
    </div>
    <a class=\"dropdown-item employee-link profile-link\" href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminEmployees&amp;token=35230a101a4619c5b4c5f6cbcb5391d7&amp;id_employee=1&amp;updateemployee\">
      <i class=\"material-icons\">settings_applications</i>
      Votre profil
    </a>
    <a class=\"dropdown-item employee-link\" id=\"header_logout\" href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminLogin&amp;token=c384bfd3b127a58fae7158f7c396822b&amp;logout\">
      <i class=\"material-icons\">power_settings_new</i>
      <span>Déconnexion</span>
    </a>
  </div>
</div>
    </div>

      </nav>
  </header>

<nav class=\"nav-bar d-none d-md-block\">
  <span class=\"menu-collapse\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <ul class=\"main-menu\">

          
                
                
        
          <li class=\"link-levelone \" data-submenu=\"1\" id=\"tab-AdminDashboard\">
            <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminDashboard&amp;token=72887a3393ce429b17c465c00a8d8c49\" class=\"link\" >
              <i class=\"material-icons\">trending_up</i> <span>Tableau de bord</span>
            </a>
          </li>

        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"2\" id=\"tab-SELL\">
              <span class=\"title\">Vendre</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminOrders&amp;token=044a37114618a15aa197fde3647d1bf0\" class=\"link\">
                    <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                    <span>
                    Commandes
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminOrders&amp;token=044a37114618a15aa197fde3647d1bf0\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminInvoices&amp;token=21fdf28e67865a1cd698971cf5c37ea4\" class=\"link\"> Factures
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminSlip&amp;token=e754e714c1673d8ce40dbb54a741b9fb\" class=\"link\"> Avoirs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminDeliverySlip&amp;token=4b13784ac28825d3ccdc3f1b5fa6938f\" class=\"link\"> Bons de livraison
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCarts&amp;token=a30d75e9874f7c33b0abc4a96a957690\" class=\"link\"> Paniers
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                  <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/product/catalog?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\">
                    <i class=\"material-icons mi-store\">store</i>
                    <span>
                    Catalogue
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/product/catalog?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCategories&amp;token=25900102578ebfee76ec3b468fa46990\" class=\"link\"> Catégories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminTracking&amp;token=b2e0e6a6aa933538cce2b2e328bb9448\" class=\"link\"> Suivi
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminAttributesGroups&amp;token=6e7a983d352ab123269ab4cbc4194c28\" class=\"link\"> Attributs &amp; caractéristiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminManufacturers&amp;token=5002807ea2b05e45c4b372baff9ddd2f\" class=\"link\"> Marques et fournisseurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminAttachments&amp;token=9699a2ba02ccac8d07d6f56cbf19b32e\" class=\"link\"> Fichiers
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCartRules&amp;token=b8d195b743a0b988526022230a2361f4\" class=\"link\"> Promotions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/stock/?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Stocks
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCustomers&amp;token=778e9b7bf80b1d4b1221b3e7bace6dd2\" class=\"link\">
                    <i class=\"material-icons mi-account_circle\">account_circle</i>
                    <span>
                    Clients
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCustomers&amp;token=778e9b7bf80b1d4b1221b3e7bace6dd2\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminAddresses&amp;token=5602673ebbaf77c920cca0da5b6ea0ec\" class=\"link\"> Adresses
                              </a>
                            </li>

                                                                                                                          </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCustomerThreads&amp;token=a49ff134a2245755c6179f99eee9614d\" class=\"link\">
                    <i class=\"material-icons mi-chat\">chat</i>
                    <span>
                    SAV
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCustomerThreads&amp;token=a49ff134a2245755c6179f99eee9614d\" class=\"link\"> SAV
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminOrderMessage&amp;token=595ecc48a124b61d78aa262a4bf22fe6\" class=\"link\"> Messages prédéfinis
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminReturn&amp;token=6c99cec989bc646c237ab0eab1a090c6\" class=\"link\"> Retours produits
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminStats&amp;token=fe41a37cf4355326648ec118a5e3b9db\" class=\"link\">
                    <i class=\"material-icons mi-assessment\">assessment</i>
                    <span>
                    Statistiques
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"42\" id=\"tab-IMPROVE\">
              <span class=\"title\">Personnaliser</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                  <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/module/manage?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    Modules
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/module/manage?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Modules et services
                              </a>
                            </li>

                                                                                                                              
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"49\" id=\"subtab-AdminAddonsCatalog\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/module/addons-store?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Catalogue de modules
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentThemes\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminThemes&amp;token=9599b3b60783c5ee6a078ca99c002d55\" class=\"link\">
                    <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                    <span>
                    Apparence
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"121\" id=\"subtab-AdminThemesParent\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminThemes&amp;token=9599b3b60783c5ee6a078ca99c002d55\" class=\"link\"> Thème et logo
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"52\" id=\"subtab-AdminThemesCatalog\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminThemesCatalog&amp;token=b9bb12e0bd754a45b370baec5d5f4691\" class=\"link\"> Catalogue de thèmes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"53\" id=\"subtab-AdminCmsContent\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCmsContent&amp;token=d082e5200443dce92cb793e616aab984\" class=\"link\"> Pages
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"54\" id=\"subtab-AdminModulesPositions\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminModulesPositions&amp;token=724e31874e792bc329d062ae58eb1a93\" class=\"link\"> Positions
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"55\" id=\"subtab-AdminImages\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminImages&amp;token=a31af3fc57e7af631863404960b57a9e\" class=\"link\"> Images
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"120\" id=\"subtab-AdminLinkWidget\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminLinkWidget&amp;token=7fadec6a5ace9aa20b0f3acf06d84955\" class=\"link\"> Link Widget
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminParentShipping\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCarriers&amp;token=f96596cbd7f916c75db37e23a1276523\" class=\"link\">
                    <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                    <span>
                    Livraison
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"57\" id=\"subtab-AdminCarriers\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminCarriers&amp;token=f96596cbd7f916c75db37e23a1276523\" class=\"link\"> Transporteurs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"58\" id=\"subtab-AdminShipping\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminShipping&amp;token=0fc5d69807245f61eb1f10b18ea3e208\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"59\" id=\"subtab-AdminParentPayment\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminPayment&amp;token=a0f85c57627bc85a7dda94e1fe6cdd69\" class=\"link\">
                    <i class=\"material-icons mi-payment\">payment</i>
                    <span>
                    Paiement
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-59\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"60\" id=\"subtab-AdminPayment\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminPayment&amp;token=a0f85c57627bc85a7dda94e1fe6cdd69\" class=\"link\"> Modes de paiement
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"61\" id=\"subtab-AdminPaymentPreferences\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminPaymentPreferences&amp;token=09e1ce50f023792c0b07c9356223d633\" class=\"link\"> Préférences
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"62\" id=\"subtab-AdminInternational\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminLocalization&amp;token=ae9ffe24f172a1f5f1d4d085b80554b7\" class=\"link\">
                    <i class=\"material-icons mi-language\">language</i>
                    <span>
                    International
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-62\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"63\" id=\"subtab-AdminParentLocalization\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminLocalization&amp;token=ae9ffe24f172a1f5f1d4d085b80554b7\" class=\"link\"> Localisation
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"68\" id=\"subtab-AdminParentCountries\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminZones&amp;token=0b32b6d7658d27392c230110de117aed\" class=\"link\"> Zones géographiques
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"72\" id=\"subtab-AdminParentTaxes\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminTaxes&amp;token=ad10ad03a039a8cfcbc881aa83b7b395\" class=\"link\"> Taxes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"75\" id=\"subtab-AdminTranslations\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminTranslations&amp;token=c7ebb88e5a1e1dccd814d78698803e89\" class=\"link\"> Traductions
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"127\" id=\"subtab-Adminxprtblogdashboard\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=Adminxippost&amp;token=700d0046bab6dec9af0a6f3065cb3b7a\" class=\"link\">
                    <i class=\"material-icons mi-\"></i>
                    <span>
                    Xpert Blog
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-127\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"128\" id=\"subtab-Adminxippost\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=Adminxippost&amp;token=700d0046bab6dec9af0a6f3065cb3b7a\" class=\"link\"> Blog Posts
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"129\" id=\"subtab-Adminxipcategory\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=Adminxipcategory&amp;token=2b68b092d9a6268bf63ce262e6f68dfc\" class=\"link\"> Blog Categories
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"130\" id=\"subtab-Adminxipcomment\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=Adminxipcomment&amp;token=a5de4ce476a54a8104b587fd46f89f6c\" class=\"link\"> Blog Comments
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"131\" id=\"subtab-Adminxipimagetype\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=Adminxipimagetype&amp;token=9845d92c1a8a3be051fb4e1ca66f507b\" class=\"link\"> Blog Image Type
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title -active\" data-submenu=\"76\" id=\"tab-CONFIGURE\">
              <span class=\"title\">Configurer</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone has_submenu\" data-submenu=\"77\" id=\"subtab-ShopParameters\">
                  <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/shop/preferences?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\">
                    <i class=\"material-icons mi-settings\">settings</i>
                    <span>
                    Paramètres de la boutique
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-77\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"78\" id=\"subtab-AdminParentPreferences\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/shop/preferences?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Paramètres généraux
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"81\" id=\"subtab-AdminParentOrderPreferences\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminOrderPreferences&amp;token=7c10a4007e151a08aaad0cff695a0ccf\" class=\"link\"> Commandes
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"84\" id=\"subtab-AdminPPreferences\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/shop/product_preferences?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Produits
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"85\" id=\"subtab-AdminParentCustomerPreferences\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/shop/customer_preferences?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Clients
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"89\" id=\"subtab-AdminParentStores\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminContacts&amp;token=0449aee83646b9df0870bee26f3f79c6\" class=\"link\"> Contact
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"92\" id=\"subtab-AdminParentMeta\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminMeta&amp;token=dd33ef1cc22e2935651fc10cedf545a3\" class=\"link\"> Trafic et SEO
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"96\" id=\"subtab-AdminParentSearchConf\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminSearchConf&amp;token=5bb21f0874f49024689e277a0665d922\" class=\"link\"> Rechercher
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"125\" id=\"subtab-AdminGamification\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminGamification&amp;token=80a88beb5cfaf011752ec6aa4464c373\" class=\"link\"> Merchant Expertise
                              </a>
                            </li>

                                                                        </ul>
                                    </li>
                                        
                
                                                
                                                    
                <li class=\"link-levelone has_submenu -active open ul-open\" data-submenu=\"99\" id=\"subtab-AdminAdvancedParameters\">
                  <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/system_information?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\">
                    <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                    <span>
                    Paramètres avancés
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_up
                                                        </i>
                                        </a>
                                          <ul id=\"collapse-99\" class=\"submenu panel-collapse\">
                                                  
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"100\" id=\"subtab-AdminInformation\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/system_information?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Informations
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo -active\" data-submenu=\"101\" id=\"subtab-AdminPerformance\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/performance?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Performances
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"102\" id=\"subtab-AdminAdminPreferences\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/administration?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Administration
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"103\" id=\"subtab-AdminEmails\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminEmails&amp;token=845450d1543d91e8923800fc189299ed\" class=\"link\"> Email
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"104\" id=\"subtab-AdminImport\">
                              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/import?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" class=\"link\"> Importer
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"105\" id=\"subtab-AdminParentEmployees\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminEmployees&amp;token=35230a101a4619c5b4c5f6cbcb5391d7\" class=\"link\"> Équipe
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"109\" id=\"subtab-AdminParentRequestSql\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminRequestSql&amp;token=c642433ecefba1bdd0c029bf12c5e300\" class=\"link\"> Base de données
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"112\" id=\"subtab-AdminLogs\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminLogs&amp;token=a68a13e24e3fbc65307ab503d8d8525e\" class=\"link\"> Logs
                              </a>
                            </li>

                                                                            
                            
                                                        
                            <li class=\"link-leveltwo \" data-submenu=\"113\" id=\"subtab-AdminWebservice\">
                              <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminWebservice&amp;token=32a882b5850402af5922137eb0de7f71\" class=\"link\"> Webservice
                              </a>
                            </li>

                                                                                                                                                                            </ul>
                                    </li>
                          
        
                
                                  
                
        
          <li class=\"category-title \" data-submenu=\"117\" id=\"tab-DEFAULT\">
              <span class=\"title\">Détails</span>
          </li>

                          
                
                                                
                
                <li class=\"link-levelone\" data-submenu=\"132\" id=\"subtab-AdminSelfUpgrade\">
                  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminSelfUpgrade&amp;token=ed250c0462f6b8520d2a00584cfe6a79\" class=\"link\">
                    <i class=\"material-icons mi-extension\">extension</i>
                    <span>
                    1-Click Upgrade
                    </span>
                                                <i class=\"material-icons sub-tabs-arrow\">
                                                                keyboard_arrow_down
                                                        </i>
                                        </a>
                                    </li>
                          
        
            </ul>
  
</nav>

<div id=\"main-div\">

  
    
<div class=\"header-toolbar\">
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Paramètres avancés</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/performance?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\" aria-current=\"page\">Performances</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Performances          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                                                    <a
                  class=\"btn btn-primary  pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/zamoundaofficiel/admin397kwnoux/index.php/configure/advanced/clear_cache?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\"                  title=\"Vider le cache\"                >
                  <i class=\"material-icons\">delete</i>
                  Vider le cache
                </a>
                                                                  <a
                class=\"btn btn-outline-secondary \"
                id=\"page-header-desc-configuration-modules-list\"
                href=\"/zamoundaofficiel/admin397kwnoux/index.php/module/catalog?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\"                title=\"Modules recommandés\"
                              >
                Modules recommandés
              </a>
                        
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Aide\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/zamoundaofficiel/admin397kwnoux/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Ffr%252Fdoc%252FAdminPerformance%253Fversion%253D1.7.4.2%2526country%253Dfr/Aide?_token=Gm29Iu7tZZdHE30p_xgz2QaF07w14G5GrGyYybT2km4\"
                   id=\"product_form_open_help\"
                >
                  Aide
                </a>
                                    </div>
        </div>
      
    </div>
  </div>

  
    
</div>
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=kanonkevin%40yahoo.fr&amp;firstname=Kevin&amp;lastname=KANON&amp;website=http%3A%2F%2Fwww.zamoundaofficiel.fr%2Fzamoundaofficiel%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/zamoundaofficiel/admin397kwnoux/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=kanonkevin%40yahoo.fr&amp;firstname=Kevin&amp;lastname=KANON&amp;website=http%3A%2F%2Fwww.zamoundaofficiel.fr%2Fzamoundaofficiel%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    <div class=\"content-div  \">

      

      
                        
      <div class=\"row \">
        <div class=\"col-sm-12\">
          <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  {% block content_header %}{% endblock %}
                 {% block content %}{% endblock %}
                 {% block content_footer %}{% endblock %}
                 {% block sidebar_right %}{% endblock %}

          
        </div>
      </div>

    </div>

  
</div>

<div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh non !</h1>
  <p class=\"mt-3\">
    La version mobile de cette page n'est pas encore disponible.
  </p>
  <p class=\"mt-2\">
    En attendant que cette page soit adaptée au mobile, vous êtes invité à la consulter sur ordinateur.
  </p>
  <p class=\"mt-2\">
    Merci.
  </p>
  <a href=\"http://www.zamoundaofficiel.fr/zamoundaofficiel/admin397kwnoux/index.php?controller=AdminDashboard&amp;token=72887a3393ce429b17c465c00a8d8c49\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Précédent
  </a>
</div>
<div class=\"mobile-layer\"></div>

  <div id=\"footer\" class=\"bootstrap\">
    
</div>


  <div class=\"bootstrap\">
    <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-FR&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/fr/login?email=kanonkevin%40yahoo.fr&amp;firstname=Kevin&amp;lastname=KANON&amp;website=http%3A%2F%2Fwww.zamoundaofficiel.fr%2Fzamoundaofficiel%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/zamoundaofficiel/admin397kwnoux/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Connectez-vous à la place de marché de PrestaShop afin d'importer automatiquement tous vos achats.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Vous n'avez pas de compte ?</h4>
\t\t\t\t\t\t<p class='text-justify'>Les clés pour réussir votre boutique sont sur PrestaShop Addons ! Découvrez sur la place de marché officielle de PrestaShop plus de 3 500 modules et thèmes pour augmenter votre trafic, optimiser vos conversions, fidéliser vos clients et vous faciliter l’e-commerce.</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Connectez-vous à PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/fr/forgot-your-password\">Mot de passe oublié</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/fr/login?email=kanonkevin%40yahoo.fr&amp;firstname=Kevin&amp;lastname=KANON&amp;website=http%3A%2F%2Fwww.zamoundaofficiel.fr%2Fzamoundaofficiel%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-FR&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCréer un compte
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Connexion
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

  </div>

{% block javascripts %}{% endblock %}{% block extra_javascripts %}{% endblock %}{% block translate_javascripts %}{% endblock %}</body>
</html>", "__string_template__93609ca1375fdf68e7b232a8013e7f03dee4b230d20e28c162bf45e252d03206", "");
    }
}
