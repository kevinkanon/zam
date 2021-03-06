<?php

/* PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig */
class __TwigTemplate_1b2776513686a7577171391f0e40b0c51dde09d86fb5433041411b362ef18ec8 extends Twig_Template
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
        $__internal_45a4bce55599d04dc3dce0b2faf68fdeff5e846f6b39472891bd1f5b647c014e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45a4bce55599d04dc3dce0b2faf68fdeff5e846f6b39472891bd1f5b647c014e->enter($__internal_45a4bce55599d04dc3dce0b2faf68fdeff5e846f6b39472891bd1f5b647c014e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig"));

        $__internal_e6125b00d83377bed5a803939e78b3037706e74a0efeb8435b791d2ca84e20d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6125b00d83377bed5a803939e78b3037706e74a0efeb8435b791d2ca84e20d3->enter($__internal_e6125b00d83377bed5a803939e78b3037706e74a0efeb8435b791d2ca84e20d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig"));

        // line 25
        echo "<div class=\"module-top-menu\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"input-group\" id=\"search-input-group\">
                <input type=\"text\" id=\"module-search-bar\" class=\"form-control\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-primary float-right search-button\" id=\"module-search-button\">
                        <i class=\"material-icons\">search</i>
                        ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search", array(), "Admin.Actions"), "html", null, true);
        echo "
                    </button>
                </div>
            </div>
        </div>

        <div class=\"col-md-4 module-menu-item\">
            ";
        // line 40
        if (array_key_exists("topMenuData", $context)) {
            // line 41
            echo "                ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", 41)->display(array_merge($context, array("topMenuData" => ($context["topMenuData"] ?? $this->getContext($context, "topMenuData")))));
            // line 42
            echo "            ";
        }
        // line 43
        echo "            ";
        if ((array_key_exists("requireFilterStatus", $context) && (($context["requireFilterStatus"] ?? $this->getContext($context, "requireFilterStatus")) == true))) {
            // line 44
            echo "                ";
            $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:dropdown_status.html.twig", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", 44)->display($context);
            // line 45
            echo "            ";
        }
        // line 46
        echo "        </div>
    </div>
</div>

<hr class=\"top-menu-separator\"/>

";
        // line 52
        $context["js_translatable"] = twig_array_merge(array("Search - placeholder" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search modules: keyword, name, author...", array(), "Admin.Modules.Help")),         // line 54
($context["js_translatable"] ?? $this->getContext($context, "js_translatable")));
        
        $__internal_45a4bce55599d04dc3dce0b2faf68fdeff5e846f6b39472891bd1f5b647c014e->leave($__internal_45a4bce55599d04dc3dce0b2faf68fdeff5e846f6b39472891bd1f5b647c014e_prof);

        
        $__internal_e6125b00d83377bed5a803939e78b3037706e74a0efeb8435b791d2ca84e20d3->leave($__internal_e6125b00d83377bed5a803939e78b3037706e74a0efeb8435b791d2ca84e20d3_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 54,  70 => 52,  62 => 46,  59 => 45,  56 => 44,  53 => 43,  50 => 42,  47 => 41,  45 => 40,  35 => 33,  25 => 25,);
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
<div class=\"module-top-menu\">
    <div class=\"row\">
        <div class=\"col-md-8\">
            <div class=\"input-group\" id=\"search-input-group\">
                <input type=\"text\" id=\"module-search-bar\" class=\"form-control\">
                <div class=\"input-group-append\">
                    <button class=\"btn btn-primary float-right search-button\" id=\"module-search-button\">
                        <i class=\"material-icons\">search</i>
                        {{ 'Search'|trans({}, 'Admin.Actions') }}
                    </button>
                </div>
            </div>
        </div>

        <div class=\"col-md-4 module-menu-item\">
            {% if topMenuData is defined %}
                {% include 'PrestaShopBundle:Admin/Module/Includes:dropdown_categories.html.twig' with { 'topMenuData': topMenuData } %}
            {% endif %}
            {% if requireFilterStatus is defined and requireFilterStatus == true %}
                {% include 'PrestaShopBundle:Admin/Module/Includes:dropdown_status.html.twig' %}
            {% endif %}
        </div>
    </div>
</div>

<hr class=\"top-menu-separator\"/>

{% set js_translatable = {
\"Search - placeholder\": \"Search modules: keyword, name, author...\"|trans({}, 'Admin.Modules.Help'),
}|merge(js_translatable) %}
", "PrestaShopBundle:Admin/Module/Includes:menu_top.html.twig", "/home/kanonkevin/public_html/zamoundaofficiel/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/menu_top.html.twig");
    }
}
