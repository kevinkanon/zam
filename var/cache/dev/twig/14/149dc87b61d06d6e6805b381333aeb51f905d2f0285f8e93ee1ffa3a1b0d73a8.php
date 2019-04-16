<?php

/* @PrestaShop/Admin/Configure/ShopParameters/maintenance.html.twig */
class __TwigTemplate_6bcaf68be23c37f384e47c05f9f20d518dafde5f14bae87817f1ec9862dd7ef8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("@PrestaShop/Admin/layout.html.twig", "@PrestaShop/Admin/Configure/ShopParameters/maintenance.html.twig", 25);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'maintenance_form_general' => array($this, 'block_maintenance_form_general'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@PrestaShop/Admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1666e679f8799ab4ea4ea862f2417137119af7d468ba50a2a93e507153e97bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1666e679f8799ab4ea4ea862f2417137119af7d468ba50a2a93e507153e97bd->enter($__internal_b1666e679f8799ab4ea4ea862f2417137119af7d468ba50a2a93e507153e97bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/maintenance.html.twig"));

        $__internal_22f009a9f7768447d1b8d4c000768526db275e8dbd1be2b16c497c6e49309e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f009a9f7768447d1b8d4c000768526db275e8dbd1be2b16c497c6e49309e6f->enter($__internal_22f009a9f7768447d1b8d4c000768526db275e8dbd1be2b16c497c6e49309e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@PrestaShop/Admin/Configure/ShopParameters/maintenance.html.twig"));

        // line 29
        $context["generalForm"] = $this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "general", array());
        // line 25
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1666e679f8799ab4ea4ea862f2417137119af7d468ba50a2a93e507153e97bd->leave($__internal_b1666e679f8799ab4ea4ea862f2417137119af7d468ba50a2a93e507153e97bd_prof);

        
        $__internal_22f009a9f7768447d1b8d4c000768526db275e8dbd1be2b16c497c6e49309e6f->leave($__internal_22f009a9f7768447d1b8d4c000768526db275e8dbd1be2b16c497c6e49309e6f_prof);

    }

    // line 32
    public function block_content($context, array $blocks = array())
    {
        $__internal_edbe43990affb8ef8c41750c13126b6ea1c7169d45c0b7e3301a0d6024ee1e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edbe43990affb8ef8c41750c13126b6ea1c7169d45c0b7e3301a0d6024ee1e3e->enter($__internal_edbe43990affb8ef8c41750c13126b6ea1c7169d45c0b7e3301a0d6024ee1e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_38889ba8f1d47867313575baec1c67809c27336c7cc9765e0444f3c86edda85c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38889ba8f1d47867313575baec1c67809c27336c7cc9765e0444f3c86edda85c->enter($__internal_38889ba8f1d47867313575baec1c67809c27336c7cc9765e0444f3c86edda85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 33
        echo "    <div class=\"container\">
        ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form")));
        echo "
        <div class=\"row\">
            ";
        // line 36
        $this->displayBlock('maintenance_form_general', $context, $blocks);
        // line 71
        echo "
        </div>
        ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_38889ba8f1d47867313575baec1c67809c27336c7cc9765e0444f3c86edda85c->leave($__internal_38889ba8f1d47867313575baec1c67809c27336c7cc9765e0444f3c86edda85c_prof);

        
        $__internal_edbe43990affb8ef8c41750c13126b6ea1c7169d45c0b7e3301a0d6024ee1e3e->leave($__internal_edbe43990affb8ef8c41750c13126b6ea1c7169d45c0b7e3301a0d6024ee1e3e_prof);

    }

    // line 36
    public function block_maintenance_form_general($context, array $blocks = array())
    {
        $__internal_e48988557aa9de714b0142debd46e5ccb1c8c5efa1dfe74c0eabe6e7634b6f1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e48988557aa9de714b0142debd46e5ccb1c8c5efa1dfe74c0eabe6e7634b6f1e->enter($__internal_e48988557aa9de714b0142debd46e5ccb1c8c5efa1dfe74c0eabe6e7634b6f1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maintenance_form_general"));

        $__internal_a590c9c49d0a614d2fb616fe1487374a47633fa6935f5a6fadc43541d3cabe4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a590c9c49d0a614d2fb616fe1487374a47633fa6935f5a6fadc43541d3cabe4d->enter($__internal_a590c9c49d0a614d2fb616fe1487374a47633fa6935f5a6fadc43541d3cabe4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maintenance_form_general"));

        // line 37
        echo "            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">business_center</i> ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("General", array(), "Admin.Global"), "html", null, true);
        echo "
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Enable Shop", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Activate or deactivate your shop (It is a good idea to deactivate your shop while you perform maintenance. Please note that the webservice will not be disabled).", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "enable_shop", array()), 'errors');
        echo "
                                ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "enable_shop", array()), 'widget');
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Maintenance IP", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("IP addresses allowed to access the front office even if the shop is disabled. Please use a comma to separate them (e.g. 42.24.4.2,127.0.0.1,99.98.97.96)", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "maintenance_ip", array()), 'errors');
        echo "
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "maintenance_ip", array()), 'widget', array("currentIp" => ($context["currentIp"] ?? $this->getContext($context, "currentIp"))));
        echo "
                            </div>
                            <div class=\"form-group\">
                                ";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute(($context["ps"] ?? $this->getContext($context, "ps")), "label_with_help", array(0 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Custom maintenance text", array(), "Admin.Shopparameters.Feature"), 1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Custom text displayed on maintenance page while shop is deactivated.", array(), "Admin.Shopparameters.Help")), "method"), "html", null, true);
        echo "
                                ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "maintenance_text", array()), 'errors');
        echo "
                                ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["generalForm"] ?? $this->getContext($context, "generalForm")), "maintenance_text", array()), 'widget');
        echo "
                            </div>
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["generalForm"] ?? $this->getContext($context, "generalForm")), 'rest');
        echo "
                        </div>
                    </div>

                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-end\">
                            <button class=\"btn btn-primary\">";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
                        </div>
                    </div>
                </div>
            </div>
            ";
        
        $__internal_a590c9c49d0a614d2fb616fe1487374a47633fa6935f5a6fadc43541d3cabe4d->leave($__internal_a590c9c49d0a614d2fb616fe1487374a47633fa6935f5a6fadc43541d3cabe4d_prof);

        
        $__internal_e48988557aa9de714b0142debd46e5ccb1c8c5efa1dfe74c0eabe6e7634b6f1e->leave($__internal_e48988557aa9de714b0142debd46e5ccb1c8c5efa1dfe74c0eabe6e7634b6f1e_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17c913fb73af5e13f79a743b43b93e85980f2fe6e77abc73b85e8c7b9b159b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c913fb73af5e13f79a743b43b93e85980f2fe6e77abc73b85e8c7b9b159b0b->enter($__internal_17c913fb73af5e13f79a743b43b93e85980f2fe6e77abc73b85e8c7b9b159b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_0dff36ed18ae3e10cbe404efb79df20645331f184230a53181c988382b3515cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dff36ed18ae3e10cbe404efb79df20645331f184230a53181c988382b3515cd->enter($__internal_0dff36ed18ae3e10cbe404efb79df20645331f184230a53181c988382b3515cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/tiny_mce/tiny_mce.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce.inc.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("../js/admin/tinymce_loader.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0dff36ed18ae3e10cbe404efb79df20645331f184230a53181c988382b3515cd->leave($__internal_0dff36ed18ae3e10cbe404efb79df20645331f184230a53181c988382b3515cd_prof);

        
        $__internal_17c913fb73af5e13f79a743b43b93e85980f2fe6e77abc73b85e8c7b9b159b0b->leave($__internal_17c913fb73af5e13f79a743b43b93e85980f2fe6e77abc73b85e8c7b9b159b0b_prof);

    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Configure/ShopParameters/maintenance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 81,  187 => 80,  183 => 79,  178 => 78,  169 => 77,  153 => 65,  144 => 59,  139 => 57,  135 => 56,  131 => 55,  125 => 52,  121 => 51,  117 => 50,  111 => 47,  107 => 46,  103 => 45,  95 => 40,  90 => 37,  81 => 36,  68 => 73,  64 => 71,  62 => 36,  57 => 34,  54 => 33,  45 => 32,  35 => 25,  33 => 29,  11 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/OSL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   https://opensource.org/licenses/OSL-3.0 Open Software License (OSL 3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *#}
{% extends '@PrestaShop/Admin/layout.html.twig' %}
{% trans_default_domain \"Admin.Shopparameters.Feature\" %}

{%
    set generalForm = form.general
%}

{% block content %}
    <div class=\"container\">
        {{ form_start(form, {'attr' : {'class': 'form'} }) }}
        <div class=\"row\">
            {% block maintenance_form_general %}
            <div class=\"col\">
                <div class=\"card\">
                    <h3 class=\"card-header\">
                        <i class=\"material-icons\">business_center</i> {{ 'General'|trans({}, 'Admin.Global') }}
                    </h3>
                    <div class=\"card-block\">
                        <div class=\"card-text\">
                            <div class=\"form-group\">
                                {{ ps.label_with_help(('Enable Shop'|trans), ('Activate or deactivate your shop (It is a good idea to deactivate your shop while you perform maintenance. Please note that the webservice will not be disabled).'|trans({}, 'Admin.Shopparameters.Help'))) }}
                                {{ form_errors(generalForm.enable_shop) }}
                                {{ form_widget(generalForm.enable_shop) }}
                            </div>
                            <div class=\"form-group\">
                                {{ ps.label_with_help(('Maintenance IP'|trans), ('IP addresses allowed to access the front office even if the shop is disabled. Please use a comma to separate them (e.g. 42.24.4.2,127.0.0.1,99.98.97.96)'|trans({}, 'Admin.Shopparameters.Help'))) }}
                                {{ form_errors(generalForm.maintenance_ip) }}
                                {{ form_widget(generalForm.maintenance_ip, { 'currentIp': currentIp}) }}
                            </div>
                            <div class=\"form-group\">
                                {{ ps.label_with_help(('Custom maintenance text'|trans), ('Custom text displayed on maintenance page while shop is deactivated.'|trans({}, 'Admin.Shopparameters.Help'))) }}
                                {{ form_errors(generalForm.maintenance_text) }}
                                {{ form_widget(generalForm.maintenance_text) }}
                            </div>
                            {{ form_rest(generalForm) }}
                        </div>
                    </div>

                    <div class=\"card-footer\">
                        <div class=\"d-flex justify-content-end\">
                            <button class=\"btn btn-primary\">{{ 'Save'|trans({}, 'Admin.Actions') }}</button>
                        </div>
                    </div>
                </div>
            </div>
            {% endblock %}

        </div>
        {{ form_end(form) }}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script src=\"{{ asset('../js/tiny_mce/tiny_mce.js') }}\"></script>
    <script src=\"{{ asset('../js/admin/tinymce.inc.js') }}\"></script>
    <script src=\"{{ asset('../js/admin/tinymce_loader.js') }}\"></script>
{% endblock %}
", "@PrestaShop/Admin/Configure/ShopParameters/maintenance.html.twig", "/home/kanonkevin/public_html/zamoundaofficiel/src/PrestaShopBundle/Resources/views/Admin/Configure/ShopParameters/maintenance.html.twig");
    }
}
