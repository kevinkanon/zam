<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d499aac9d3a1a37e8840d205fe66f4f6172f49e281a5bdb2a4adaa60ec626437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_504e708f6e43404846677105b999a6c2fcfb4b8fa995af7f1f4348ec855309fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_504e708f6e43404846677105b999a6c2fcfb4b8fa995af7f1f4348ec855309fb->enter($__internal_504e708f6e43404846677105b999a6c2fcfb4b8fa995af7f1f4348ec855309fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a031b53f81ed72c3172ac0cfb7de257207c3c30bc487638ce728fbba9a3fb1cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a031b53f81ed72c3172ac0cfb7de257207c3c30bc487638ce728fbba9a3fb1cc->enter($__internal_a031b53f81ed72c3172ac0cfb7de257207c3c30bc487638ce728fbba9a3fb1cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_504e708f6e43404846677105b999a6c2fcfb4b8fa995af7f1f4348ec855309fb->leave($__internal_504e708f6e43404846677105b999a6c2fcfb4b8fa995af7f1f4348ec855309fb_prof);

        
        $__internal_a031b53f81ed72c3172ac0cfb7de257207c3c30bc487638ce728fbba9a3fb1cc->leave($__internal_a031b53f81ed72c3172ac0cfb7de257207c3c30bc487638ce728fbba9a3fb1cc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_da386e88a9a4c6dbb4db8d725f88a7f38e42eee6e58d96765a69bf00bf07d912 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da386e88a9a4c6dbb4db8d725f88a7f38e42eee6e58d96765a69bf00bf07d912->enter($__internal_da386e88a9a4c6dbb4db8d725f88a7f38e42eee6e58d96765a69bf00bf07d912_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_770bb63dca62c2308c380b538b2606cb01b77871cae258d3e2148e54c3743a2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_770bb63dca62c2308c380b538b2606cb01b77871cae258d3e2148e54c3743a2b->enter($__internal_770bb63dca62c2308c380b538b2606cb01b77871cae258d3e2148e54c3743a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_770bb63dca62c2308c380b538b2606cb01b77871cae258d3e2148e54c3743a2b->leave($__internal_770bb63dca62c2308c380b538b2606cb01b77871cae258d3e2148e54c3743a2b_prof);

        
        $__internal_da386e88a9a4c6dbb4db8d725f88a7f38e42eee6e58d96765a69bf00bf07d912->leave($__internal_da386e88a9a4c6dbb4db8d725f88a7f38e42eee6e58d96765a69bf00bf07d912_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_06d5ff3de16004e6e9552bec70afb9177815c8b51d8aab1809df3d748c37c9c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06d5ff3de16004e6e9552bec70afb9177815c8b51d8aab1809df3d748c37c9c5->enter($__internal_06d5ff3de16004e6e9552bec70afb9177815c8b51d8aab1809df3d748c37c9c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fb61e27a691f4840d8b5bb9726aa7dca7d74b2491203af2b5d92c5c82efadfa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb61e27a691f4840d8b5bb9726aa7dca7d74b2491203af2b5d92c5c82efadfa3->enter($__internal_fb61e27a691f4840d8b5bb9726aa7dca7d74b2491203af2b5d92c5c82efadfa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fb61e27a691f4840d8b5bb9726aa7dca7d74b2491203af2b5d92c5c82efadfa3->leave($__internal_fb61e27a691f4840d8b5bb9726aa7dca7d74b2491203af2b5d92c5c82efadfa3_prof);

        
        $__internal_06d5ff3de16004e6e9552bec70afb9177815c8b51d8aab1809df3d748c37c9c5->leave($__internal_06d5ff3de16004e6e9552bec70afb9177815c8b51d8aab1809df3d748c37c9c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7e8089b8c6d86a0f20488552029904d423bf70a6f391ad72a9472e41f0a9c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e8089b8c6d86a0f20488552029904d423bf70a6f391ad72a9472e41f0a9c1f->enter($__internal_b7e8089b8c6d86a0f20488552029904d423bf70a6f391ad72a9472e41f0a9c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1bbc5adfa88d6a29880af68be0ffd8ed4234cb54db3cf9c2f9f211b1c8aef00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bbc5adfa88d6a29880af68be0ffd8ed4234cb54db3cf9c2f9f211b1c8aef00f->enter($__internal_1bbc5adfa88d6a29880af68be0ffd8ed4234cb54db3cf9c2f9f211b1c8aef00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1bbc5adfa88d6a29880af68be0ffd8ed4234cb54db3cf9c2f9f211b1c8aef00f->leave($__internal_1bbc5adfa88d6a29880af68be0ffd8ed4234cb54db3cf9c2f9f211b1c8aef00f_prof);

        
        $__internal_b7e8089b8c6d86a0f20488552029904d423bf70a6f391ad72a9472e41f0a9c1f->leave($__internal_b7e8089b8c6d86a0f20488552029904d423bf70a6f391ad72a9472e41f0a9c1f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/kanonkevin/public_html/zamoundaofficiel/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
