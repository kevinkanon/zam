<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e80c903d86cf2a72dc43baf3a307bc0b4d7a117d2967492f0ed29ee2b3906a6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a2514ed12a7c617dce2c466b0c1e0ea2c80b0160249e3bd394793a6f6a624ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a2514ed12a7c617dce2c466b0c1e0ea2c80b0160249e3bd394793a6f6a624ec->enter($__internal_4a2514ed12a7c617dce2c466b0c1e0ea2c80b0160249e3bd394793a6f6a624ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_d5accd0d20ec1d3f3c046e6137a034eed396f9850f58f89ed520b80687ad850a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5accd0d20ec1d3f3c046e6137a034eed396f9850f58f89ed520b80687ad850a->enter($__internal_d5accd0d20ec1d3f3c046e6137a034eed396f9850f58f89ed520b80687ad850a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a2514ed12a7c617dce2c466b0c1e0ea2c80b0160249e3bd394793a6f6a624ec->leave($__internal_4a2514ed12a7c617dce2c466b0c1e0ea2c80b0160249e3bd394793a6f6a624ec_prof);

        
        $__internal_d5accd0d20ec1d3f3c046e6137a034eed396f9850f58f89ed520b80687ad850a->leave($__internal_d5accd0d20ec1d3f3c046e6137a034eed396f9850f58f89ed520b80687ad850a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1c1d71099289a4c964b0a2705a7f621b9518b17720e8164692ccc07aa44d6c13 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1d71099289a4c964b0a2705a7f621b9518b17720e8164692ccc07aa44d6c13->enter($__internal_1c1d71099289a4c964b0a2705a7f621b9518b17720e8164692ccc07aa44d6c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6fba669e7d047c82334efab6e3e60c6392fefc76b7bbb11c9f4e0a1003a31ed2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fba669e7d047c82334efab6e3e60c6392fefc76b7bbb11c9f4e0a1003a31ed2->enter($__internal_6fba669e7d047c82334efab6e3e60c6392fefc76b7bbb11c9f4e0a1003a31ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6fba669e7d047c82334efab6e3e60c6392fefc76b7bbb11c9f4e0a1003a31ed2->leave($__internal_6fba669e7d047c82334efab6e3e60c6392fefc76b7bbb11c9f4e0a1003a31ed2_prof);

        
        $__internal_1c1d71099289a4c964b0a2705a7f621b9518b17720e8164692ccc07aa44d6c13->leave($__internal_1c1d71099289a4c964b0a2705a7f621b9518b17720e8164692ccc07aa44d6c13_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_40cd7e6bb420797161146275db414dcc86278ef08aa3ca9f9d9f8e3c604483a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40cd7e6bb420797161146275db414dcc86278ef08aa3ca9f9d9f8e3c604483a6->enter($__internal_40cd7e6bb420797161146275db414dcc86278ef08aa3ca9f9d9f8e3c604483a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4846a50286a5d0f55d19a36f6795e498f3059cb0ac6067f6fb3bcbfc2cd5dc07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4846a50286a5d0f55d19a36f6795e498f3059cb0ac6067f6fb3bcbfc2cd5dc07->enter($__internal_4846a50286a5d0f55d19a36f6795e498f3059cb0ac6067f6fb3bcbfc2cd5dc07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_4846a50286a5d0f55d19a36f6795e498f3059cb0ac6067f6fb3bcbfc2cd5dc07->leave($__internal_4846a50286a5d0f55d19a36f6795e498f3059cb0ac6067f6fb3bcbfc2cd5dc07_prof);

        
        $__internal_40cd7e6bb420797161146275db414dcc86278ef08aa3ca9f9d9f8e3c604483a6->leave($__internal_40cd7e6bb420797161146275db414dcc86278ef08aa3ca9f9d9f8e3c604483a6_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_69013f9b459be04ee9f1a38c43ed2e963f8fee9da78667cc312b64f6ecf655f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69013f9b459be04ee9f1a38c43ed2e963f8fee9da78667cc312b64f6ecf655f4->enter($__internal_69013f9b459be04ee9f1a38c43ed2e963f8fee9da78667cc312b64f6ecf655f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7f39e694a35acaf1b331dbeb39088cfa753f66747a5b865e688080a9c0a5f2c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f39e694a35acaf1b331dbeb39088cfa753f66747a5b865e688080a9c0a5f2c7->enter($__internal_7f39e694a35acaf1b331dbeb39088cfa753f66747a5b865e688080a9c0a5f2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_7f39e694a35acaf1b331dbeb39088cfa753f66747a5b865e688080a9c0a5f2c7->leave($__internal_7f39e694a35acaf1b331dbeb39088cfa753f66747a5b865e688080a9c0a5f2c7_prof);

        
        $__internal_69013f9b459be04ee9f1a38c43ed2e963f8fee9da78667cc312b64f6ecf655f4->leave($__internal_69013f9b459be04ee9f1a38c43ed2e963f8fee9da78667cc312b64f6ecf655f4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/kanonkevin/public_html/zamoundaofficiel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
