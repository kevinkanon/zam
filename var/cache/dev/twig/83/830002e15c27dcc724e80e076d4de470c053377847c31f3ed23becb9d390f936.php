<?php

/* PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig */
class __TwigTemplate_efc756d0bda0db2df2b652206d49c503122ada68736db1a17fd0faf6eabe6264 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:card_list.html.twig", "PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig", 25);
        $this->blocks = array(
            'addon_version' => array($this, 'block_addon_version'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_20a5d5f1261704517e6fc22ef7b6b18eef5410266a34b4f43af567fa51eefb3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20a5d5f1261704517e6fc22ef7b6b18eef5410266a34b4f43af567fa51eefb3b->enter($__internal_20a5d5f1261704517e6fc22ef7b6b18eef5410266a34b4f43af567fa51eefb3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig"));

        $__internal_e7b029eb51c5e97823ed98f3fd2b1d18fd6e8446c306aaa1ca6a2780f78fb407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b029eb51c5e97823ed98f3fd2b1d18fd6e8446c306aaa1ca6a2780f78fb407->enter($__internal_e7b029eb51c5e97823ed98f3fd2b1d18fd6e8446c306aaa1ca6a2780f78fb407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20a5d5f1261704517e6fc22ef7b6b18eef5410266a34b4f43af567fa51eefb3b->leave($__internal_20a5d5f1261704517e6fc22ef7b6b18eef5410266a34b4f43af567fa51eefb3b_prof);

        
        $__internal_e7b029eb51c5e97823ed98f3fd2b1d18fd6e8446c306aaa1ca6a2780f78fb407->leave($__internal_e7b029eb51c5e97823ed98f3fd2b1d18fd6e8446c306aaa1ca6a2780f78fb407_prof);

    }

    // line 30
    public function block_addon_version($context, array $blocks = array())
    {
        $__internal_8449f4d8479bf19ca54fae46e8f81a2496ace7317c200ceb66577f10fcd672e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8449f4d8479bf19ca54fae46e8f81a2496ace7317c200ceb66577f10fcd672e4->enter($__internal_8449f4d8479bf19ca54fae46e8f81a2496ace7317c200ceb66577f10fcd672e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_version"));

        $__internal_562c709c9a8282a777d37289231fb99378ef5313406b553336d06a0e7b2f0f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562c709c9a8282a777d37289231fb99378ef5313406b553336d06a0e7b2f0f11->enter($__internal_562c709c9a8282a777d37289231fb99378ef5313406b553336d06a0e7b2f0f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_version"));

        // line 31
        echo "  ";
        if (($this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "productType", array()) == "service")) {
            // line 32
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Service by %author%", array("%author%" => (("<b>" . $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "author", array())) . "</b>")), "Admin.Modules.Feature");
            echo "
  ";
        } else {
            // line 34
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("v%version% - by %author%", array("%version%" => $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "version", array()), "%author%" => (("<b>" . $this->getAttribute($this->getAttribute(($context["module"] ?? $this->getContext($context, "module")), "attributes", array()), "author", array())) . "</b>")), "Admin.Modules.Feature");
            echo "
  ";
        }
        
        $__internal_562c709c9a8282a777d37289231fb99378ef5313406b553336d06a0e7b2f0f11->leave($__internal_562c709c9a8282a777d37289231fb99378ef5313406b553336d06a0e7b2f0f11_prof);

        
        $__internal_8449f4d8479bf19ca54fae46e8f81a2496ace7317c200ceb66577f10fcd672e4->leave($__internal_8449f4d8479bf19ca54fae46e8f81a2496ace7317c200ceb66577f10fcd672e4_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 34,  52 => 32,  49 => 31,  40 => 30,  11 => 25,);
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
{% extends \"PrestaShopBundle:Admin/Module/Includes:card_list.html.twig\" %}

{# Twig extension for \"Addons to update\" part in notification page #}

{# Display database version #}
{% block addon_version %}
  {% if module.attributes.productType == \"service\" %}
    {{ 'Service by %author%'|trans({'%author%' : '<b>' ~ module.attributes.author ~ '</b>'}, 'Admin.Modules.Feature')|raw }}
  {% else %}
    {{ 'v%version% - by %author%'|trans({ '%version%' : module.attributes.version, '%author%' : '<b>' ~ module.attributes.author ~ '</b>' }, 'Admin.Modules.Feature')|raw }}
  {% endif %}
{% endblock %}

", "PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig", "/home/kanonkevin/public_html/zamoundaofficiel/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/card_manage_installed.html.twig");
    }
}
