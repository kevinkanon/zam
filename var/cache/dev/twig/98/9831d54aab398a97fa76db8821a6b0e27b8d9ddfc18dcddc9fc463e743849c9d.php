<?php

/* PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig */
class __TwigTemplate_aef5945a7adb47c5f71f4e3e03d3c220ec79c96736e0674bef87766e0ac819a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 25
        $this->parent = $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:grid.html.twig", "PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", 25);
        $this->blocks = array(
            'addon_card' => array($this, 'block_addon_card'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PrestaShopBundle:Admin/Module/Includes:grid.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5e9e179d2f7e4246054815dfdc3a6efa9587ec66d09d3f91af0f16695431a60f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e9e179d2f7e4246054815dfdc3a6efa9587ec66d09d3f91af0f16695431a60f->enter($__internal_5e9e179d2f7e4246054815dfdc3a6efa9587ec66d09d3f91af0f16695431a60f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig"));

        $__internal_b91e05d477ce4b362c6256af25bcc6491539d7a6dd749e9e21d4fc7e2a43029d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91e05d477ce4b362c6256af25bcc6491539d7a6dd749e9e21d4fc7e2a43029d->enter($__internal_b91e05d477ce4b362c6256af25bcc6491539d7a6dd749e9e21d4fc7e2a43029d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e9e179d2f7e4246054815dfdc3a6efa9587ec66d09d3f91af0f16695431a60f->leave($__internal_5e9e179d2f7e4246054815dfdc3a6efa9587ec66d09d3f91af0f16695431a60f_prof);

        
        $__internal_b91e05d477ce4b362c6256af25bcc6491539d7a6dd749e9e21d4fc7e2a43029d->leave($__internal_b91e05d477ce4b362c6256af25bcc6491539d7a6dd749e9e21d4fc7e2a43029d_prof);

    }

    // line 27
    public function block_addon_card($context, array $blocks = array())
    {
        $__internal_59ac1832032738582dfd30b74b29d545b9c1d01bca02863c1be9b41c7e5a79c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ac1832032738582dfd30b74b29d545b9c1d01bca02863c1be9b41c7e5a79c8->enter($__internal_59ac1832032738582dfd30b74b29d545b9c1d01bca02863c1be9b41c7e5a79c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_card"));

        $__internal_74cb43bcaf85a1e509f75b230291a8b4aab5ae2a2223878ec2b9577588ea59b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cb43bcaf85a1e509f75b230291a8b4aab5ae2a2223878ec2b9577588ea59b1->enter($__internal_74cb43bcaf85a1e509f75b230291a8b4aab5ae2a2223878ec2b9577588ea59b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "addon_card"));

        // line 28
        echo "  ";
        $this->loadTemplate("PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig", "PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", 28)->display(array_merge($context, array("display_type" => ($context["display_type"] ?? $this->getContext($context, "display_type")), "module" => ($context["module"] ?? $this->getContext($context, "module")), "origin" => ((array_key_exists("origin", $context)) ? (_twig_default_filter(($context["origin"] ?? $this->getContext($context, "origin")), "none")) : ("none")))));
        
        $__internal_74cb43bcaf85a1e509f75b230291a8b4aab5ae2a2223878ec2b9577588ea59b1->leave($__internal_74cb43bcaf85a1e509f75b230291a8b4aab5ae2a2223878ec2b9577588ea59b1_prof);

        
        $__internal_59ac1832032738582dfd30b74b29d545b9c1d01bca02863c1be9b41c7e5a79c8->leave($__internal_59ac1832032738582dfd30b74b29d545b9c1d01bca02863c1be9b41c7e5a79c8_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 28,  40 => 27,  11 => 25,);
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
{% extends \"PrestaShopBundle:Admin/Module/Includes:grid.html.twig\" %}

{% block addon_card %}
  {% include 'PrestaShopBundle:Admin/Module/Includes:card_manage_installed.html.twig' with { 'display_type': display_type, 'module': module, 'origin': origin|default('none') } %}
{% endblock %}
", "PrestaShopBundle:Admin/Module/Includes:grid_manage_installed.html.twig", "/home/kanonkevin/public_html/zamoundaofficiel/src/PrestaShopBundle/Resources/views/Admin/Module/Includes/grid_manage_installed.html.twig");
    }
}
