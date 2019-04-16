<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7d07827ae4d78e2299879f1a6c01bc1899d4ea86207d0e96a003d8bcfce88371 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ec0f4dc8d7c7ed49b4c73ea267772cbc27d390c24b4eb614506eeb35ead0dbd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec0f4dc8d7c7ed49b4c73ea267772cbc27d390c24b4eb614506eeb35ead0dbd7->enter($__internal_ec0f4dc8d7c7ed49b4c73ea267772cbc27d390c24b4eb614506eeb35ead0dbd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_76874430567d1ef33a2e04158ccee34ca4044b2492b0f7398144a9dfb58f9ae5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76874430567d1ef33a2e04158ccee34ca4044b2492b0f7398144a9dfb58f9ae5->enter($__internal_76874430567d1ef33a2e04158ccee34ca4044b2492b0f7398144a9dfb58f9ae5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ec0f4dc8d7c7ed49b4c73ea267772cbc27d390c24b4eb614506eeb35ead0dbd7->leave($__internal_ec0f4dc8d7c7ed49b4c73ea267772cbc27d390c24b4eb614506eeb35ead0dbd7_prof);

        
        $__internal_76874430567d1ef33a2e04158ccee34ca4044b2492b0f7398144a9dfb58f9ae5->leave($__internal_76874430567d1ef33a2e04158ccee34ca4044b2492b0f7398144a9dfb58f9ae5_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7f4a44f70f6cde4fc34bb7abaa2c59ecf9127a113608f66f6ba84e0dabc4a6ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4a44f70f6cde4fc34bb7abaa2c59ecf9127a113608f66f6ba84e0dabc4a6ac->enter($__internal_7f4a44f70f6cde4fc34bb7abaa2c59ecf9127a113608f66f6ba84e0dabc4a6ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_d377257dcc037a5df283f1b00103636ddc2327279d6fb7d923f1005700f29d85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d377257dcc037a5df283f1b00103636ddc2327279d6fb7d923f1005700f29d85->enter($__internal_d377257dcc037a5df283f1b00103636ddc2327279d6fb7d923f1005700f29d85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_d377257dcc037a5df283f1b00103636ddc2327279d6fb7d923f1005700f29d85->leave($__internal_d377257dcc037a5df283f1b00103636ddc2327279d6fb7d923f1005700f29d85_prof);

        
        $__internal_7f4a44f70f6cde4fc34bb7abaa2c59ecf9127a113608f66f6ba84e0dabc4a6ac->leave($__internal_7f4a44f70f6cde4fc34bb7abaa2c59ecf9127a113608f66f6ba84e0dabc4a6ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/kanonkevin/public_html/zamoundaofficiel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
