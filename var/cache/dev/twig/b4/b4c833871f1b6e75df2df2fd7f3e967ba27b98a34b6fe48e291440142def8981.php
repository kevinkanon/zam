<?php

/* @Twig/form_max_length.html.twig */
class __TwigTemplate_15720fae51943173e838f61e97edeb839907304159d92ece559fee31ac3a0a43 extends Twig_Template
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
        $__internal_fd12dd52ae5f5fc6dc64ab9587164c792c0a96575d9b52694ec78fd9fdfd6b8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd12dd52ae5f5fc6dc64ab9587164c792c0a96575d9b52694ec78fd9fdfd6b8b->enter($__internal_fd12dd52ae5f5fc6dc64ab9587164c792c0a96575d9b52694ec78fd9fdfd6b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/form_max_length.html.twig"));

        $__internal_6e028fd6b4bfe19cf3e9557dfb006e7fa518918a65890b7331d0ce08f1a92ccb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e028fd6b4bfe19cf3e9557dfb006e7fa518918a65890b7331d0ce08f1a92ccb->enter($__internal_6e028fd6b4bfe19cf3e9557dfb006e7fa518918a65890b7331d0ce08f1a92ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/form_max_length.html.twig"));

        // line 25
        if ($this->getAttribute(($context["attr"] ?? null), "counter", array(), "any", true, true)) {
            // line 26
            echo "  ";
            $context["isRecommandedType"] = ($this->getAttribute(($context["attr"] ?? null), "counter_type", array(), "any", true, true) && ($this->getAttribute(($context["attr"] ?? $this->getContext($context, "attr")), "counter_type", array()) == "recommended"));
            // line 27
            echo "  <small class=\"form-text text-muted text-right maxLength ";
            echo (( !($context["isRecommandedType"] ?? $this->getContext($context, "isRecommandedType"))) ? ("maxType") : (""));
            echo "\">
      <em>
        ";
            // line 29
            if (($context["isRecommandedType"] ?? $this->getContext($context, "isRecommandedType"))) {
                // line 30
                echo "          ";
                echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1][/1] of [2][/2] characters used (recommended)", array(), "Admin.Catalog.Feature"), array("[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => ("<span class=\"currentTotalMax\">" . $this->getAttribute(                // line 33
($context["attr"] ?? $this->getContext($context, "attr")), "counter", array())), "[/2]" => "</span>"));
                // line 35
                echo "
        ";
            } else {
                // line 37
                echo "          ";
                echo twig_replace_filter($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("[1][/1] of [2][/2] characters allowed", array(), "Admin.Catalog.Feature"), array("[1]" => "<span class=\"currentLength\">", "[/1]" => "</span>", "[2]" => ("<span class=\"currentTotalMax\">" . $this->getAttribute(                // line 40
($context["attr"] ?? $this->getContext($context, "attr")), "counter", array())), "[/2]" => "</span>"));
                // line 42
                echo "
        ";
            }
            // line 44
            echo "      </em>
  </small>
";
        }
        
        $__internal_fd12dd52ae5f5fc6dc64ab9587164c792c0a96575d9b52694ec78fd9fdfd6b8b->leave($__internal_fd12dd52ae5f5fc6dc64ab9587164c792c0a96575d9b52694ec78fd9fdfd6b8b_prof);

        
        $__internal_6e028fd6b4bfe19cf3e9557dfb006e7fa518918a65890b7331d0ce08f1a92ccb->leave($__internal_6e028fd6b4bfe19cf3e9557dfb006e7fa518918a65890b7331d0ce08f1a92ccb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/form_max_length.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 44,  50 => 42,  48 => 40,  46 => 37,  42 => 35,  40 => 33,  38 => 30,  36 => 29,  30 => 27,  27 => 26,  25 => 25,);
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
{% if attr.counter is defined %}
  {% set isRecommandedType = attr.counter_type is defined and attr.counter_type == 'recommended' %}
  <small class=\"form-text text-muted text-right maxLength {{ not(isRecommandedType) ? 'maxType' }}\">
      <em>
        {% if isRecommandedType %}
          {{ '[1][/1] of [2][/2] characters used (recommended)'|trans({}, 'Admin.Catalog.Feature')|replace({
            '[1]': '<span class=\"currentLength\">',
            '[/1]': '</span>',
            '[2]': '<span class=\"currentTotalMax\">'~attr.counter,
            '[/2]': '</span>',
          })|raw }}
        {% else %}
          {{ '[1][/1] of [2][/2] characters allowed'|trans({}, 'Admin.Catalog.Feature')|replace({
            '[1]': '<span class=\"currentLength\">',
            '[/1]': '</span>',
            '[2]': '<span class=\"currentTotalMax\">'~attr.counter,
            '[/2]': '</span>',
          })|raw }}
        {% endif %}
      </em>
  </small>
{% endif %}
", "@Twig/form_max_length.html.twig", "/home/kanonkevin/public_html/zamoundaofficiel/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/form_max_length.html.twig");
    }
}
