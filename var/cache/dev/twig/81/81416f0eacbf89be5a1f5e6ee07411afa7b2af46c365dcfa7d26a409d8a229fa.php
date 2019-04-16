<?php

/* PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig */
class __TwigTemplate_325f8f13108fdcd3ce87535047cfd77767775b4fadb15466d039cac67a20a42f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig", 25);
        // line 25
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->loadTemplate("PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig", 26);
        // line 26
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_tree_widget' => array($this, 'block_choice_tree_widget'),
                'choice_tree_item_widget' => array($this, 'block_choice_tree_item_widget'),
                'translatefields_widget' => array($this, 'block_translatefields_widget'),
                'translate_fields_widget' => array($this, 'block_translate_fields_widget'),
                'translate_text_widget' => array($this, 'block_translate_text_widget'),
                'date_picker_widget' => array($this, 'block_date_picker_widget'),
                'switch_widget' => array($this, 'block_switch_widget'),
                '_form_step6_attachments_widget' => array($this, 'block__form_step6_attachments_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c240c6a998a4406737aac3392b9b1c2eb6936854a7b95a5a83bd9446b6779af0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c240c6a998a4406737aac3392b9b1c2eb6936854a7b95a5a83bd9446b6779af0->enter($__internal_c240c6a998a4406737aac3392b9b1c2eb6936854a7b95a5a83bd9446b6779af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig"));

        $__internal_e4f1f4ee80a2f90b1689f2a1b541ca426424d3632cd2e408ca5b98338df6dea7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4f1f4ee80a2f90b1689f2a1b541ca426424d3632cd2e408ca5b98338df6dea7->enter($__internal_e4f1f4ee80a2f90b1689f2a1b541ca426424d3632cd2e408ca5b98338df6dea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig"));

        // line 27
        echo "
";
        // line 29
        echo "
";
        // line 30
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('button_widget', $context, $blocks);
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('money_widget', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 86
        echo "
";
        // line 87
        $this->displayBlock('date_widget', $context, $blocks);
        // line 105
        echo "
";
        // line 106
        $this->displayBlock('time_widget', $context, $blocks);
        // line 120
        echo "
";
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 158
        echo "
";
        // line 159
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('choice_tree_widget', $context, $blocks);
        // line 180
        echo "
";
        // line 181
        $this->displayBlock('choice_tree_item_widget', $context, $blocks);
        // line 219
        echo "
";
        // line 220
        $this->displayBlock('translatefields_widget', $context, $blocks);
        // line 245
        echo "
";
        // line 246
        $this->displayBlock('translate_fields_widget', $context, $blocks);
        // line 252
        echo "
";
        // line 253
        $this->displayBlock('translate_text_widget', $context, $blocks);
        // line 290
        echo "
";
        // line 291
        $this->displayBlock('date_picker_widget', $context, $blocks);
        // line 304
        echo "
";
        // line 305
        $this->displayBlock('switch_widget', $context, $blocks);
        // line 317
        echo "
";
        // line 318
        $this->displayBlock('_form_step6_attachments_widget', $context, $blocks);
        // line 347
        echo "
";
        // line 349
        echo "
";
        // line 350
        $this->displayBlock('form_label', $context, $blocks);
        // line 354
        echo "
";
        // line 355
        $this->displayBlock('choice_label', $context, $blocks);
        // line 360
        echo "
";
        // line 361
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 364
        echo "
";
        // line 365
        $this->displayBlock('radio_label', $context, $blocks);
        // line 368
        echo "
";
        // line 369
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 387
        echo "
";
        // line 389
        echo "
";
        // line 390
        $this->displayBlock('form_row', $context, $blocks);
        // line 397
        echo "
";
        // line 398
        $this->displayBlock('button_row', $context, $blocks);
        // line 403
        echo "
";
        // line 404
        $this->displayBlock('choice_row', $context, $blocks);
        // line 408
        echo "
";
        // line 409
        $this->displayBlock('date_row', $context, $blocks);
        // line 413
        echo "
";
        // line 414
        $this->displayBlock('time_row', $context, $blocks);
        // line 418
        echo "
";
        // line 419
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 423
        echo "
";
        // line 424
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 430
        echo "
";
        // line 431
        $this->displayBlock('radio_row', $context, $blocks);
        // line 437
        echo "
";
        // line 439
        echo "
";
        // line 440
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_c240c6a998a4406737aac3392b9b1c2eb6936854a7b95a5a83bd9446b6779af0->leave($__internal_c240c6a998a4406737aac3392b9b1c2eb6936854a7b95a5a83bd9446b6779af0_prof);

        
        $__internal_e4f1f4ee80a2f90b1689f2a1b541ca426424d3632cd2e408ca5b98338df6dea7->leave($__internal_e4f1f4ee80a2f90b1689f2a1b541ca426424d3632cd2e408ca5b98338df6dea7_prof);

    }

    // line 30
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_105a433202b1618222868302c4e7fb818394ba4aeeafb6fa929bf8490983b161 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_105a433202b1618222868302c4e7fb818394ba4aeeafb6fa929bf8490983b161->enter($__internal_105a433202b1618222868302c4e7fb818394ba4aeeafb6fa929bf8490983b161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_cb1d201257d5c3dc064049a33d6a6da5ad3266bf94a7f90be4f4001cbee47d18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1d201257d5c3dc064049a33d6a6da5ad3266bf94a7f90be4f4001cbee47d18->enter($__internal_cb1d201257d5c3dc064049a33d6a6da5ad3266bf94a7f90be4f4001cbee47d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 31
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? $this->getContext($context, "type"))))) {
            // line 32
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 34
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cb1d201257d5c3dc064049a33d6a6da5ad3266bf94a7f90be4f4001cbee47d18->leave($__internal_cb1d201257d5c3dc064049a33d6a6da5ad3266bf94a7f90be4f4001cbee47d18_prof);

        
        $__internal_105a433202b1618222868302c4e7fb818394ba4aeeafb6fa929bf8490983b161->leave($__internal_105a433202b1618222868302c4e7fb818394ba4aeeafb6fa929bf8490983b161_prof);

    }

    // line 37
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_5d9d78a197757dc99c56ce5ae4a870cf9ad07baba9a5d730fb1e0ed399037d08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d9d78a197757dc99c56ce5ae4a870cf9ad07baba9a5d730fb1e0ed399037d08->enter($__internal_5d9d78a197757dc99c56ce5ae4a870cf9ad07baba9a5d730fb1e0ed399037d08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_19156d33d431aa4be1381ae6df4c50524ced27eabaacc87044157cf29279bcac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19156d33d431aa4be1381ae6df4c50524ced27eabaacc87044157cf29279bcac->enter($__internal_19156d33d431aa4be1381ae6df4c50524ced27eabaacc87044157cf29279bcac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 38
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 39
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_19156d33d431aa4be1381ae6df4c50524ced27eabaacc87044157cf29279bcac->leave($__internal_19156d33d431aa4be1381ae6df4c50524ced27eabaacc87044157cf29279bcac_prof);

        
        $__internal_5d9d78a197757dc99c56ce5ae4a870cf9ad07baba9a5d730fb1e0ed399037d08->leave($__internal_5d9d78a197757dc99c56ce5ae4a870cf9ad07baba9a5d730fb1e0ed399037d08_prof);

    }

    // line 42
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_946ada79d89b5ed93b4f9172b81067c994e77406a1526e3f8a18a101fdc0121a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_946ada79d89b5ed93b4f9172b81067c994e77406a1526e3f8a18a101fdc0121a->enter($__internal_946ada79d89b5ed93b4f9172b81067c994e77406a1526e3f8a18a101fdc0121a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_7bd0726f0678aa22f32b5ba3ba6b45f871b77f25fd482cbcf1df0fbd4b9f168d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bd0726f0678aa22f32b5ba3ba6b45f871b77f25fd482cbcf1df0fbd4b9f168d->enter($__internal_7bd0726f0678aa22f32b5ba3ba6b45f871b77f25fd482cbcf1df0fbd4b9f168d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 43
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 44
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_7bd0726f0678aa22f32b5ba3ba6b45f871b77f25fd482cbcf1df0fbd4b9f168d->leave($__internal_7bd0726f0678aa22f32b5ba3ba6b45f871b77f25fd482cbcf1df0fbd4b9f168d_prof);

        
        $__internal_946ada79d89b5ed93b4f9172b81067c994e77406a1526e3f8a18a101fdc0121a->leave($__internal_946ada79d89b5ed93b4f9172b81067c994e77406a1526e3f8a18a101fdc0121a_prof);

    }

    // line 47
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_aef0995ae5fdd62b07ea0b072bd14e9e3cacaf9d592ad45aacab1c023b5805a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aef0995ae5fdd62b07ea0b072bd14e9e3cacaf9d592ad45aacab1c023b5805a7->enter($__internal_aef0995ae5fdd62b07ea0b072bd14e9e3cacaf9d592ad45aacab1c023b5805a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_866528249002b54a3eae9404f2459974d1a4cb82551e8fd248dd6eb519e161f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_866528249002b54a3eae9404f2459974d1a4cb82551e8fd248dd6eb519e161f1->enter($__internal_866528249002b54a3eae9404f2459974d1a4cb82551e8fd248dd6eb519e161f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 48
        echo "<div class=\"input-group money-type\">
        ";
        // line 49
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 50
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 51
            echo "            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">";
            // line 52
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 55
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 56
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 57
            echo "            <div class=\"input-group-append\">
                <span class=\"input-group-text\">";
            // line 58
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 61
        echo "    </div>";
        
        $__internal_866528249002b54a3eae9404f2459974d1a4cb82551e8fd248dd6eb519e161f1->leave($__internal_866528249002b54a3eae9404f2459974d1a4cb82551e8fd248dd6eb519e161f1_prof);

        
        $__internal_aef0995ae5fdd62b07ea0b072bd14e9e3cacaf9d592ad45aacab1c023b5805a7->leave($__internal_aef0995ae5fdd62b07ea0b072bd14e9e3cacaf9d592ad45aacab1c023b5805a7_prof);

    }

    // line 64
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_b566b4b2827e2b36e58bde34df64f201a5ca51aaafa7467524a91efb965d9cef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b566b4b2827e2b36e58bde34df64f201a5ca51aaafa7467524a91efb965d9cef->enter($__internal_b566b4b2827e2b36e58bde34df64f201a5ca51aaafa7467524a91efb965d9cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_3f3d6faf57b29fd7b72c7db83d5702a3b961179cb6d1266792ea781091e5a846 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3d6faf57b29fd7b72c7db83d5702a3b961179cb6d1266792ea781091e5a846->enter($__internal_3f3d6faf57b29fd7b72c7db83d5702a3b961179cb6d1266792ea781091e5a846_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 65
        echo "<div class=\"input-group\">";
        // line 66
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 67
        echo "<div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>";
        
        $__internal_3f3d6faf57b29fd7b72c7db83d5702a3b961179cb6d1266792ea781091e5a846->leave($__internal_3f3d6faf57b29fd7b72c7db83d5702a3b961179cb6d1266792ea781091e5a846_prof);

        
        $__internal_b566b4b2827e2b36e58bde34df64f201a5ca51aaafa7467524a91efb965d9cef->leave($__internal_b566b4b2827e2b36e58bde34df64f201a5ca51aaafa7467524a91efb965d9cef_prof);

    }

    // line 73
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_894b9ca55b4c8a37332bd0bae486f310a78ab6202cbef498d9190a053a23e2fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_894b9ca55b4c8a37332bd0bae486f310a78ab6202cbef498d9190a053a23e2fb->enter($__internal_894b9ca55b4c8a37332bd0bae486f310a78ab6202cbef498d9190a053a23e2fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_9cbd46e73d960337d602a5c0e4cb9bd0bc771e32a812e3c66aff707645c23061 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbd46e73d960337d602a5c0e4cb9bd0bc771e32a812e3c66aff707645c23061->enter($__internal_9cbd46e73d960337d602a5c0e4cb9bd0bc771e32a812e3c66aff707645c23061_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 74
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 75
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 77
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 78
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 81
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 82
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 83
            echo "</div>";
        }
        
        $__internal_9cbd46e73d960337d602a5c0e4cb9bd0bc771e32a812e3c66aff707645c23061->leave($__internal_9cbd46e73d960337d602a5c0e4cb9bd0bc771e32a812e3c66aff707645c23061_prof);

        
        $__internal_894b9ca55b4c8a37332bd0bae486f310a78ab6202cbef498d9190a053a23e2fb->leave($__internal_894b9ca55b4c8a37332bd0bae486f310a78ab6202cbef498d9190a053a23e2fb_prof);

    }

    // line 87
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_2680af06a02d77e0ad7c38845d4b4c26ae59716214663e196763aaaae9ca8abe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2680af06a02d77e0ad7c38845d4b4c26ae59716214663e196763aaaae9ca8abe->enter($__internal_2680af06a02d77e0ad7c38845d4b4c26ae59716214663e196763aaaae9ca8abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_63bb5316ddffb1eae6e7a91432f453d1872e9a1dbc4420edbc8de6715f67fed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63bb5316ddffb1eae6e7a91432f453d1872e9a1dbc4420edbc8de6715f67fed1->enter($__internal_63bb5316ddffb1eae6e7a91432f453d1872e9a1dbc4420edbc8de6715f67fed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 88
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 89
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 91
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 92
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 93
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 95
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 96
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 97
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 98
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 100
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 101
                echo "</div>";
            }
        }
        
        $__internal_63bb5316ddffb1eae6e7a91432f453d1872e9a1dbc4420edbc8de6715f67fed1->leave($__internal_63bb5316ddffb1eae6e7a91432f453d1872e9a1dbc4420edbc8de6715f67fed1_prof);

        
        $__internal_2680af06a02d77e0ad7c38845d4b4c26ae59716214663e196763aaaae9ca8abe->leave($__internal_2680af06a02d77e0ad7c38845d4b4c26ae59716214663e196763aaaae9ca8abe_prof);

    }

    // line 106
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_f04dd994b71bd6d26cdc2f41398d0909e3b3089724e743bfa63bb9dca5aa629c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04dd994b71bd6d26cdc2f41398d0909e3b3089724e743bfa63bb9dca5aa629c->enter($__internal_f04dd994b71bd6d26cdc2f41398d0909e3b3089724e743bfa63bb9dca5aa629c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_8541be6c24361753d2998662b671e86c0844184f309194b09c1a4f05b01557cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8541be6c24361753d2998662b671e86c0844184f309194b09c1a4f05b01557cc->enter($__internal_8541be6c24361753d2998662b671e86c0844184f309194b09c1a4f05b01557cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 107
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 108
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 110
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 111
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 112
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 114
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            echo ":";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 115
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 116
                echo "</div>";
            }
        }
        
        $__internal_8541be6c24361753d2998662b671e86c0844184f309194b09c1a4f05b01557cc->leave($__internal_8541be6c24361753d2998662b671e86c0844184f309194b09c1a4f05b01557cc_prof);

        
        $__internal_f04dd994b71bd6d26cdc2f41398d0909e3b3089724e743bfa63bb9dca5aa629c->leave($__internal_f04dd994b71bd6d26cdc2f41398d0909e3b3089724e743bfa63bb9dca5aa629c_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_3e03b58fc452b67aaf7faf786469ac2b6ee765d68695f692f1ab777477a91a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e03b58fc452b67aaf7faf786469ac2b6ee765d68695f692f1ab777477a91a0c->enter($__internal_3e03b58fc452b67aaf7faf786469ac2b6ee765d68695f692f1ab777477a91a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_b03462acfb03ef05ff064e9033f54d99438d019eb3aa76dbedaf389040861780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b03462acfb03ef05ff064e9033f54d99438d019eb3aa76dbedaf389040861780->enter($__internal_b03462acfb03ef05ff064e9033f54d99438d019eb3aa76dbedaf389040861780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " custom-select"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_b03462acfb03ef05ff064e9033f54d99438d019eb3aa76dbedaf389040861780->leave($__internal_b03462acfb03ef05ff064e9033f54d99438d019eb3aa76dbedaf389040861780_prof);

        
        $__internal_3e03b58fc452b67aaf7faf786469ac2b6ee765d68695f692f1ab777477a91a0c->leave($__internal_3e03b58fc452b67aaf7faf786469ac2b6ee765d68695f692f1ab777477a91a0c_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_b6b50fbd2bd72b365e07c2d989c7b1b21c849a36cd2346fba1a7785830fa53e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6b50fbd2bd72b365e07c2d989c7b1b21c849a36cd2346fba1a7785830fa53e0->enter($__internal_b6b50fbd2bd72b365e07c2d989c7b1b21c849a36cd2346fba1a7785830fa53e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_7f958596979a0486866caa2da8cd712ca9a2cd0f3877b1de4f5e074a96d94547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f958596979a0486866caa2da8cd712ca9a2cd0f3877b1de4f5e074a96d94547->enter($__internal_7f958596979a0486866caa2da8cd712ca9a2cd0f3877b1de4f5e074a96d94547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 127
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            echo "<div class=\"control-group\">";
            // line 129
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 130
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 131
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 132
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "</div>";
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 139
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 140
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 141
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 144
            echo "</div>";
        }
        
        $__internal_7f958596979a0486866caa2da8cd712ca9a2cd0f3877b1de4f5e074a96d94547->leave($__internal_7f958596979a0486866caa2da8cd712ca9a2cd0f3877b1de4f5e074a96d94547_prof);

        
        $__internal_b6b50fbd2bd72b365e07c2d989c7b1b21c849a36cd2346fba1a7785830fa53e0->leave($__internal_b6b50fbd2bd72b365e07c2d989c7b1b21c849a36cd2346fba1a7785830fa53e0_prof);

    }

    // line 148
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_b86c857d73bc63c0fabb7b5d9c399d08e0f330279814463671ee9dda2bcfc6a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b86c857d73bc63c0fabb7b5d9c399d08e0f330279814463671ee9dda2bcfc6a4->enter($__internal_b86c857d73bc63c0fabb7b5d9c399d08e0f330279814463671ee9dda2bcfc6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_708a00444710d4d508f38e5adafbd9bd183521b3008f1c95afeb032b0ba8ca6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_708a00444710d4d508f38e5adafbd9bd183521b3008f1c95afeb032b0ba8ca6d->enter($__internal_708a00444710d4d508f38e5adafbd9bd183521b3008f1c95afeb032b0ba8ca6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 149
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 150
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 151
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 153
            echo "<div class=\"checkbox\">";
            // line 154
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 155
            echo "</div>";
        }
        
        $__internal_708a00444710d4d508f38e5adafbd9bd183521b3008f1c95afeb032b0ba8ca6d->leave($__internal_708a00444710d4d508f38e5adafbd9bd183521b3008f1c95afeb032b0ba8ca6d_prof);

        
        $__internal_b86c857d73bc63c0fabb7b5d9c399d08e0f330279814463671ee9dda2bcfc6a4->leave($__internal_b86c857d73bc63c0fabb7b5d9c399d08e0f330279814463671ee9dda2bcfc6a4_prof);

    }

    // line 159
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b758f9d0426fc095aff38d79b9d55482d27e3258aac66be056a81c49795a545f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b758f9d0426fc095aff38d79b9d55482d27e3258aac66be056a81c49795a545f->enter($__internal_b758f9d0426fc095aff38d79b9d55482d27e3258aac66be056a81c49795a545f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_0271ae1cf44494c1d6d4e8ef88031273ddf5014df1b488f7011e7af17ccd772c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0271ae1cf44494c1d6d4e8ef88031273ddf5014df1b488f7011e7af17ccd772c->enter($__internal_0271ae1cf44494c1d6d4e8ef88031273ddf5014df1b488f7011e7af17ccd772c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 160
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 161
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 162
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 164
            echo "<div class=\"radio\">";
            // line 165
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 166
            echo "</div>";
        }
        
        $__internal_0271ae1cf44494c1d6d4e8ef88031273ddf5014df1b488f7011e7af17ccd772c->leave($__internal_0271ae1cf44494c1d6d4e8ef88031273ddf5014df1b488f7011e7af17ccd772c_prof);

        
        $__internal_b758f9d0426fc095aff38d79b9d55482d27e3258aac66be056a81c49795a545f->leave($__internal_b758f9d0426fc095aff38d79b9d55482d27e3258aac66be056a81c49795a545f_prof);

    }

    // line 170
    public function block_choice_tree_widget($context, array $blocks = array())
    {
        $__internal_0ad38d7218382ad98221afeebff25e07967cc7205b2b5b067978591f96531f66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ad38d7218382ad98221afeebff25e07967cc7205b2b5b067978591f96531f66->enter($__internal_0ad38d7218382ad98221afeebff25e07967cc7205b2b5b067978591f96531f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        $__internal_5cdc7a8eebadf4bf1387227b1a5fcc15e4d7c2c9de248dd965b08e58e2eab727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cdc7a8eebadf4bf1387227b1a5fcc15e4d7c2c9de248dd965b08e58e2eab727->enter($__internal_5cdc7a8eebadf4bf1387227b1a5fcc15e4d7c2c9de248dd965b08e58e2eab727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_widget"));

        // line 171
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo " class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Main category", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</li>";
        // line 174
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 175
            echo "            ";
            $this->displayBlock("choice_tree_item_widget", $context, $blocks);
            echo "
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 177
        echo "</ul>
    </div>";
        
        $__internal_5cdc7a8eebadf4bf1387227b1a5fcc15e4d7c2c9de248dd965b08e58e2eab727->leave($__internal_5cdc7a8eebadf4bf1387227b1a5fcc15e4d7c2c9de248dd965b08e58e2eab727_prof);

        
        $__internal_0ad38d7218382ad98221afeebff25e07967cc7205b2b5b067978591f96531f66->leave($__internal_0ad38d7218382ad98221afeebff25e07967cc7205b2b5b067978591f96531f66_prof);

    }

    // line 181
    public function block_choice_tree_item_widget($context, array $blocks = array())
    {
        $__internal_0e89b24c629e6856a7ff36af7f65cf81a76f7072fcd47e4bbb716e70363549e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e89b24c629e6856a7ff36af7f65cf81a76f7072fcd47e4bbb716e70363549e8->enter($__internal_0e89b24c629e6856a7ff36af7f65cf81a76f7072fcd47e4bbb716e70363549e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        $__internal_45926ec370063bead07f5fd6a34ad0964e1487baafefddf419259a49b26dacba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45926ec370063bead07f5fd6a34ad0964e1487baafefddf419259a49b26dacba->enter($__internal_45926ec370063bead07f5fd6a34ad0964e1487baafefddf419259a49b26dacba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_tree_item_widget"));

        // line 182
        echo "<li>
        ";
        // line 183
        $context["checked"] = ((($this->getAttribute($this->getAttribute(($context["form"] ?? null), "vars", array(), "any", false, true), "submitted_values", array(), "any", true, true) && $this->getAttribute(($context["submitted_values"] ?? null), $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), array(), "array", true, true))) ? ("checked=\"checked\"") : (""));
        // line 184
        echo "        ";
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 185
            echo "<div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "full_name", array()), "html", null, true);
            echo "[tree][]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
            echo "\" class=\"category\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
            echo ">
                    ";
            // line 188
            if (($this->getAttribute(($context["child"] ?? null), "active", array(), "any", true, true) && ($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "active", array()) == 0))) {
                // line 189
                echo "                        <i>";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
                echo "</i>";
            } else {
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
                echo "
                    ";
            }
            // line 193
            echo "                    ";
            if (array_key_exists("defaultCategory", $context)) {
                // line 194
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 196
            echo "                </label>
            </div>";
        } else {
            // line 199
            echo "<div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[";
            // line 201
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "][tree]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
            echo "\" ";
            echo twig_escape_filter($this->env, ($context["checked"] ?? $this->getContext($context, "checked")), "html", null, true);
            echo " class=\"category\">
                    ";
            // line 202
            echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "name", array()), "html", null, true);
            echo "
                    ";
            // line 203
            if (array_key_exists("defaultCategory", $context)) {
                // line 204
                echo "                        <input type=\"radio\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "id_category", array()), "html", null, true);
                echo "\" name=\"ignore\" class=\"default-category\" />
                    ";
            }
            // line 206
            echo "                </label>
            </div>";
        }
        // line 209
        echo "        ";
        if ($this->getAttribute(($context["child"] ?? null), "children", array(), "any", true, true)) {
            // line 210
            echo "            <ul>
                ";
            // line 211
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["child"] ?? $this->getContext($context, "child")), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 212
                echo "                    ";
                $context["child"] = $context["item"];
                // line 213
                echo "                    ";
                $this->displayBlock("choice_tree_item_widget", $context, $blocks);
                echo "
                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 215
            echo "</ul>
        ";
        }
        // line 217
        echo "    </li>";
        
        $__internal_45926ec370063bead07f5fd6a34ad0964e1487baafefddf419259a49b26dacba->leave($__internal_45926ec370063bead07f5fd6a34ad0964e1487baafefddf419259a49b26dacba_prof);

        
        $__internal_0e89b24c629e6856a7ff36af7f65cf81a76f7072fcd47e4bbb716e70363549e8->leave($__internal_0e89b24c629e6856a7ff36af7f65cf81a76f7072fcd47e4bbb716e70363549e8_prof);

    }

    // line 220
    public function block_translatefields_widget($context, array $blocks = array())
    {
        $__internal_97d8a54757c0729ff8e9564a2a9c7b4c29c5fd1829a08bb8445e39c344c2a553 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97d8a54757c0729ff8e9564a2a9c7b4c29c5fd1829a08bb8445e39c344c2a553->enter($__internal_97d8a54757c0729ff8e9564a2a9c7b4c29c5fd1829a08bb8445e39c344c2a553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translatefields_widget"));

        $__internal_9f4d33c6750e64e2a4382c889ca02f6912023eb4f16ac68a44f857ea4c3a071f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f4d33c6750e64e2a4382c889ca02f6912023eb4f16ac68a44f857ea4c3a071f->enter($__internal_9f4d33c6750e64e2a4382c889ca02f6912023eb4f16ac68a44f857ea4c3a071f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translatefields_widget"));

        // line 221
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"translations tabbable\" id=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\">
        ";
        // line 223
        if (((($context["hideTabs"] ?? $this->getContext($context, "hideTabs")) == false) && (twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 1))) {
            // line 224
            echo "        <ul class=\"translationsLocales nav nav-pills\">
            ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
                // line 226
                echo "                <li class=\"nav-item\">
                    <a href=\"#\" class=\"";
                // line 227
                if (($this->getAttribute(($context["defaultLocale"] ?? $this->getContext($context, "defaultLocale")), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                    echo "active";
                }
                echo " nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
                echo "\">
                        ";
                // line 228
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array())), "html", null, true);
                echo "
                    </a>
                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "        </ul>
        ";
        }
        // line 234
        echo "
        <div class=\"translationsFields tab-content\">
            ";
        // line 236
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translationsFields"]) {
            // line 237
            echo "                <div class=\"translationsFields-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "id", array()), "html", null, true);
            echo " tab-pane translation-field ";
            if (((($context["hideTabs"] ?? $this->getContext($context, "hideTabs")) == false) && (twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 1))) {
                echo "panel panel-default";
            }
            echo " ";
            if (($this->getAttribute(($context["defaultLocale"] ?? $this->getContext($context, "defaultLocale")), "id_lang", array()) == $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "name", array()))) {
                echo "show active";
            }
            echo " ";
            if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "valid", array())) {
                echo "field-error";
            }
            echo " translation-label-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["translationsFields"], "vars", array()), "label", array()), "html", null, true);
            echo "\">
                    ";
            // line 238
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'errors');
            echo "
                    ";
            // line 239
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translationsFields"], 'widget');
            echo "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translationsFields'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 242
        echo "        </div>
    </div>
";
        
        $__internal_9f4d33c6750e64e2a4382c889ca02f6912023eb4f16ac68a44f857ea4c3a071f->leave($__internal_9f4d33c6750e64e2a4382c889ca02f6912023eb4f16ac68a44f857ea4c3a071f_prof);

        
        $__internal_97d8a54757c0729ff8e9564a2a9c7b4c29c5fd1829a08bb8445e39c344c2a553->leave($__internal_97d8a54757c0729ff8e9564a2a9c7b4c29c5fd1829a08bb8445e39c344c2a553_prof);

    }

    // line 246
    public function block_translate_fields_widget($context, array $blocks = array())
    {
        $__internal_30341bc311a9cbf054070583d3b65f510ff011cef04dd75f04031dd5d2a2544b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_30341bc311a9cbf054070583d3b65f510ff011cef04dd75f04031dd5d2a2544b->enter($__internal_30341bc311a9cbf054070583d3b65f510ff011cef04dd75f04031dd5d2a2544b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        $__internal_29ed8d257357ce42318c7b4457ab7603df2cdb883f216dbe94ea6b2473b2439f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29ed8d257357ce42318c7b4457ab7603df2cdb883f216dbe94ea6b2473b2439f->enter($__internal_29ed8d257357ce42318c7b4457ab7603df2cdb883f216dbe94ea6b2473b2439f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_fields_widget"));

        // line 247
        if (( !array_key_exists("type", $context) || ("file" != ($context["type"] ?? $this->getContext($context, "type"))))) {
            // line 248
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 250
        $this->displayParentBlock("translate_fields_widget", $context, $blocks);
        
        $__internal_29ed8d257357ce42318c7b4457ab7603df2cdb883f216dbe94ea6b2473b2439f->leave($__internal_29ed8d257357ce42318c7b4457ab7603df2cdb883f216dbe94ea6b2473b2439f_prof);

        
        $__internal_30341bc311a9cbf054070583d3b65f510ff011cef04dd75f04031dd5d2a2544b->leave($__internal_30341bc311a9cbf054070583d3b65f510ff011cef04dd75f04031dd5d2a2544b_prof);

    }

    // line 253
    public function block_translate_text_widget($context, array $blocks = array())
    {
        $__internal_5a92eb280d62e86efa0ed9260220c8b8660872da4750110f0de781c9077b04f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a92eb280d62e86efa0ed9260220c8b8660872da4750110f0de781c9077b04f9->enter($__internal_5a92eb280d62e86efa0ed9260220c8b8660872da4750110f0de781c9077b04f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_text_widget"));

        $__internal_fce7739717da7cf8518a28756abbd7d2cb7a263fdea538900f001aa950e53eab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fce7739717da7cf8518a28756abbd7d2cb7a263fdea538900f001aa950e53eab->enter($__internal_fce7739717da7cf8518a28756abbd7d2cb7a263fdea538900f001aa950e53eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "translate_text_widget"));

        // line 254
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    <div class=\"input-group locale-input-group js-locale-input-group\">
        ";
        // line 256
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["translateField"]) {
            // line 257
            echo "            ";
            $context["classes"] = ((($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["translateField"], "vars", array(), "any", false, true), "attr", array(), "any", false, true), "class", array()), "")) : ("")) . " js-locale-input");
            // line 258
            echo "            ";
            $context["classes"] = ((($context["classes"] ?? $this->getContext($context, "classes")) . " js-locale-") . $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "label", array()));
            // line 259
            echo "
            ";
            // line 260
            if (($this->getAttribute(($context["default_locale"] ?? $this->getContext($context, "default_locale")), "id_lang", array()) != $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "name", array()))) {
                // line 261
                echo "                ";
                $context["classes"] = (($context["classes"] ?? $this->getContext($context, "classes")) . " d-none");
                // line 262
                echo "            ";
            }
            // line 263
            echo "
            ";
            // line 264
            $context["attr"] = $this->getAttribute($this->getAttribute($context["translateField"], "vars", array()), "attr", array());
            // line 265
            echo "
            ";
            // line 266
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["translateField"], 'widget', array("attr" => array("class" => twig_trim_filter(($context["classes"] ?? $this->getContext($context, "classes"))))));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['translateField'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 268
        echo "
        ";
        // line 269
        if ( !($context["hide_locales"] ?? $this->getContext($context, "hide_locales"))) {
            // line 270
            echo "        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"";
            // line 276
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "\"
            >
                ";
            // line 278
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "default_locale", array()), "iso_code", array()), "html", null, true);
            echo "
            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"";
            // line 281
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
            echo "\">
                ";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["locales"] ?? $this->getContext($context, "locales")));
            foreach ($context['_seq'] as $context["_key"] => $context["locale"]) {
                // line 283
                echo "                    <span class=\"dropdown-item js-locale-item\" data-locale=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "iso_code", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["locale"], "name", array()), "html", null, true);
                echo "</span>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['locale'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            echo "            </div>
        </div>
        ";
        }
        // line 288
        echo "    </div>";
        
        $__internal_fce7739717da7cf8518a28756abbd7d2cb7a263fdea538900f001aa950e53eab->leave($__internal_fce7739717da7cf8518a28756abbd7d2cb7a263fdea538900f001aa950e53eab_prof);

        
        $__internal_5a92eb280d62e86efa0ed9260220c8b8660872da4750110f0de781c9077b04f9->leave($__internal_5a92eb280d62e86efa0ed9260220c8b8660872da4750110f0de781c9077b04f9_prof);

    }

    // line 291
    public function block_date_picker_widget($context, array $blocks = array())
    {
        $__internal_0d49659ad680ece3fbc033795852780eb9152909fe9d7763a8fa0f887b3c58f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d49659ad680ece3fbc033795852780eb9152909fe9d7763a8fa0f887b3c58f6->enter($__internal_0d49659ad680ece3fbc033795852780eb9152909fe9d7763a8fa0f887b3c58f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_picker_widget"));

        $__internal_5dfa578f78324ac2ca9df1ec42a1ae4936c8eaf778e0fdf4dfa2f1a65f5eb964 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dfa578f78324ac2ca9df1ec42a1ae4936c8eaf778e0fdf4dfa2f1a65f5eb964->enter($__internal_5dfa578f78324ac2ca9df1ec42a1ae4936c8eaf778e0fdf4dfa2f1a65f5eb964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_picker_widget"));

        // line 292
        echo "    ";
        ob_start();
        // line 293
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " datepicker"))));
        // line 294
        echo "        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" ";
        // line 295
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty(($context["value"] ?? $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>
            <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                    <i class=\"material-icons\">date_range</i>
                </div>
            </div>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_5dfa578f78324ac2ca9df1ec42a1ae4936c8eaf778e0fdf4dfa2f1a65f5eb964->leave($__internal_5dfa578f78324ac2ca9df1ec42a1ae4936c8eaf778e0fdf4dfa2f1a65f5eb964_prof);

        
        $__internal_0d49659ad680ece3fbc033795852780eb9152909fe9d7763a8fa0f887b3c58f6->leave($__internal_0d49659ad680ece3fbc033795852780eb9152909fe9d7763a8fa0f887b3c58f6_prof);

    }

    // line 305
    public function block_switch_widget($context, array $blocks = array())
    {
        $__internal_e2b61ae976820ce7533138e28e45c50bba37ee8249de7b0d4894cbadfb8ba8e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2b61ae976820ce7533138e28e45c50bba37ee8249de7b0d4894cbadfb8ba8e8->enter($__internal_e2b61ae976820ce7533138e28e45c50bba37ee8249de7b0d4894cbadfb8ba8e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        $__internal_b52795c366302ca0c5816ab0a1bfaf3b9ad5fac80567fb7b957afeadca1cb715 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b52795c366302ca0c5816ab0a1bfaf3b9ad5fac80567fb7b957afeadca1cb715->enter($__internal_b52795c366302ca0c5816ab0a1bfaf3b9ad5fac80567fb7b957afeadca1cb715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "switch_widget"));

        // line 306
        echo "    ";
        ob_start();
        // line 307
        echo "    <span class=\"ps-switch\">
        ";
        // line 308
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["choices"] ?? $this->getContext($context, "choices")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["choice"]) {
            // line 309
            echo "            ";
            $context["inputId"] = ((($context["id"] ?? $this->getContext($context, "id")) . "_") . $this->getAttribute($context["choice"], "value", array()));
            // line 310
            echo "            <input id=\"";
            echo twig_escape_filter($this->env, ($context["inputId"] ?? $this->getContext($context, "inputId")), "html", null, true);
            echo "\" ";
            $this->displayBlock("attributes", $context, $blocks);
            echo " name=\"";
            echo twig_escape_filter($this->env, ($context["full_name"] ?? $this->getContext($context, "full_name")), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
            echo "\"";
            if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], ($context["value"] ?? $this->getContext($context, "value")))) {
                echo "checked=\"\"";
            }
            if (($context["disabled"] ?? $this->getContext($context, "disabled"))) {
                echo "disabled=\"\"";
            }
            echo "type=\"radio\">
            <label for=\"";
            // line 311
            echo twig_escape_filter($this->env, ($context["inputId"] ?? $this->getContext($context, "inputId")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), ($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))), "html", null, true);
            echo "</label>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 313
        echo "        <span class=\"slide-button\"></span>
    </span>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_b52795c366302ca0c5816ab0a1bfaf3b9ad5fac80567fb7b957afeadca1cb715->leave($__internal_b52795c366302ca0c5816ab0a1bfaf3b9ad5fac80567fb7b957afeadca1cb715_prof);

        
        $__internal_e2b61ae976820ce7533138e28e45c50bba37ee8249de7b0d4894cbadfb8ba8e8->leave($__internal_e2b61ae976820ce7533138e28e45c50bba37ee8249de7b0d4894cbadfb8ba8e8_prof);

    }

    // line 318
    public function block__form_step6_attachments_widget($context, array $blocks = array())
    {
        $__internal_00d27ef4b4648a29ad5ca7df0894a039c8745fb02f02067f2281f3f5410c9627 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d27ef4b4648a29ad5ca7df0894a039c8745fb02f02067f2281f3f5410c9627->enter($__internal_00d27ef4b4648a29ad5ca7df0894a039c8745fb02f02067f2281f3f5410c9627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        $__internal_34789260bbcb02d069ab95fb1c4e1b6ec26c1744004fd5341b0afa0c22ec06a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34789260bbcb02d069ab95fb1c4e1b6ec26c1744004fd5341b0afa0c22ec06a1->enter($__internal_34789260bbcb02d069ab95fb1c4e1b6ec26c1744004fd5341b0afa0c22ec06a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "_form_step6_attachments_widget"));

        // line 319
        echo "    <div class=\"js-options-no-attachments ";
        echo (((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) > 0)) ? ("hide") : (""));
        echo "\">
        <small>";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("There is no attachment yet.", array(), "Admin.Catalog.Notification"), "html", null, true);
        echo "</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments ";
        // line 323
        echo (((twig_length_filter($this->env, ($context["form"] ?? $this->getContext($context, "form"))) == 0)) ? ("hide") : (""));
        echo "\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\" /> ";
        // line 328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-6\">";
        // line 329
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("File name", array(), "Admin.Global"), "html", null, true);
        echo "</th>
                <th class=\"col-md-2\">";
        // line 330
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Type", array(), "Admin.Catalog.Feature"), "html", null, true);
        echo "</th>
              </tr>
            </thead>
            <tbody>";
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 335
            echo "              <tr>
                <td class=\"col-md-3\">";
            // line 336
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            echo "</td>
                <td class=\"col-md-6 file-name\"><span>";
            // line 337
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "file_name", array(), "array"), "html", null, true);
            echo "</span></td>
                <td class=\"col-md-2\">";
            // line 338
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "attr", array()), "data", array()), $this->getAttribute($context["loop"], "index0", array()), array(), "array"), "mime", array(), "array"), "html", null, true);
            echo "</td>
              </tr>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 341
        echo "</tbody>
          </table>
        </div>
      </div>
    </div>
";
        
        $__internal_34789260bbcb02d069ab95fb1c4e1b6ec26c1744004fd5341b0afa0c22ec06a1->leave($__internal_34789260bbcb02d069ab95fb1c4e1b6ec26c1744004fd5341b0afa0c22ec06a1_prof);

        
        $__internal_00d27ef4b4648a29ad5ca7df0894a039c8745fb02f02067f2281f3f5410c9627->leave($__internal_00d27ef4b4648a29ad5ca7df0894a039c8745fb02f02067f2281f3f5410c9627_prof);

    }

    // line 350
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_061c186e71f83b68242272e9c5ad878393d4b0f35245263a1ca05a3099ba2bb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061c186e71f83b68242272e9c5ad878393d4b0f35245263a1ca05a3099ba2bb0->enter($__internal_061c186e71f83b68242272e9c5ad878393d4b0f35245263a1ca05a3099ba2bb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c8db4310b666fec011b5b0b379be5d33567aebb5db58e1e43eb185095928a74a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8db4310b666fec011b5b0b379be5d33567aebb5db58e1e43eb185095928a74a->enter($__internal_c8db4310b666fec011b5b0b379be5d33567aebb5db58e1e43eb185095928a74a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 351
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 352
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c8db4310b666fec011b5b0b379be5d33567aebb5db58e1e43eb185095928a74a->leave($__internal_c8db4310b666fec011b5b0b379be5d33567aebb5db58e1e43eb185095928a74a_prof);

        
        $__internal_061c186e71f83b68242272e9c5ad878393d4b0f35245263a1ca05a3099ba2bb0->leave($__internal_061c186e71f83b68242272e9c5ad878393d4b0f35245263a1ca05a3099ba2bb0_prof);

    }

    // line 355
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_a33f2a3a63f126e0f7bbdd4743a6373c33361469a93b0d1a7bf1653e93fe0980 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a33f2a3a63f126e0f7bbdd4743a6373c33361469a93b0d1a7bf1653e93fe0980->enter($__internal_a33f2a3a63f126e0f7bbdd4743a6373c33361469a93b0d1a7bf1653e93fe0980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e1496386cbf17230324ab7382178a4e004f17ff695ae6f7d7d8f426ac434c5f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1496386cbf17230324ab7382178a4e004f17ff695ae6f7d7d8f426ac434c5f7->enter($__internal_e1496386cbf17230324ab7382178a4e004f17ff695ae6f7d7d8f426ac434c5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 357
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 358
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e1496386cbf17230324ab7382178a4e004f17ff695ae6f7d7d8f426ac434c5f7->leave($__internal_e1496386cbf17230324ab7382178a4e004f17ff695ae6f7d7d8f426ac434c5f7_prof);

        
        $__internal_a33f2a3a63f126e0f7bbdd4743a6373c33361469a93b0d1a7bf1653e93fe0980->leave($__internal_a33f2a3a63f126e0f7bbdd4743a6373c33361469a93b0d1a7bf1653e93fe0980_prof);

    }

    // line 361
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_a3efa9acf0d59f629516a7f70d5a58a70eb9c00607fd7832f5673e55edf91db7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3efa9acf0d59f629516a7f70d5a58a70eb9c00607fd7832f5673e55edf91db7->enter($__internal_a3efa9acf0d59f629516a7f70d5a58a70eb9c00607fd7832f5673e55edf91db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6ef77d91c3f194ac700a9c10547ade5cfe81b163f55840ddcb52533c43509c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ef77d91c3f194ac700a9c10547ade5cfe81b163f55840ddcb52533c43509c1d->enter($__internal_6ef77d91c3f194ac700a9c10547ade5cfe81b163f55840ddcb52533c43509c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 362
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6ef77d91c3f194ac700a9c10547ade5cfe81b163f55840ddcb52533c43509c1d->leave($__internal_6ef77d91c3f194ac700a9c10547ade5cfe81b163f55840ddcb52533c43509c1d_prof);

        
        $__internal_a3efa9acf0d59f629516a7f70d5a58a70eb9c00607fd7832f5673e55edf91db7->leave($__internal_a3efa9acf0d59f629516a7f70d5a58a70eb9c00607fd7832f5673e55edf91db7_prof);

    }

    // line 365
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_626152c5b2f62231f778603ce6a325adac4f3fe874c75ec54a5d813c36dea3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_626152c5b2f62231f778603ce6a325adac4f3fe874c75ec54a5d813c36dea3b3->enter($__internal_626152c5b2f62231f778603ce6a325adac4f3fe874c75ec54a5d813c36dea3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_6c51e9670336e379d0a83657bdd363a8b46ee2e751205d40d9988628b38b930b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c51e9670336e379d0a83657bdd363a8b46ee2e751205d40d9988628b38b930b->enter($__internal_6c51e9670336e379d0a83657bdd363a8b46ee2e751205d40d9988628b38b930b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 366
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6c51e9670336e379d0a83657bdd363a8b46ee2e751205d40d9988628b38b930b->leave($__internal_6c51e9670336e379d0a83657bdd363a8b46ee2e751205d40d9988628b38b930b_prof);

        
        $__internal_626152c5b2f62231f778603ce6a325adac4f3fe874c75ec54a5d813c36dea3b3->leave($__internal_626152c5b2f62231f778603ce6a325adac4f3fe874c75ec54a5d813c36dea3b3_prof);

    }

    // line 369
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_ee0bfdc8fc86ccd271273db04da0469103f0b0467110347916107168d5fe6cab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee0bfdc8fc86ccd271273db04da0469103f0b0467110347916107168d5fe6cab->enter($__internal_ee0bfdc8fc86ccd271273db04da0469103f0b0467110347916107168d5fe6cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f264195b666a47d69824a5b1e1b79bac76182586c834cca3c9407ae8d3943af5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f264195b666a47d69824a5b1e1b79bac76182586c834cca3c9407ae8d3943af5->enter($__internal_f264195b666a47d69824a5b1e1b79bac76182586c834cca3c9407ae8d3943af5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 370
        echo "    ";
        // line 371
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 372
            echo "        ";
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 373
                echo "    ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 375
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 376
                echo "    ";
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 378
            echo "        ";
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 379
                echo "    ";
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
            // line 381
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 382
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            // line 383
            echo (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : (($context["label"] ?? $this->getContext($context, "label"))))) : (""));
            // line 384
            echo "</label>
    ";
        }
        
        $__internal_f264195b666a47d69824a5b1e1b79bac76182586c834cca3c9407ae8d3943af5->leave($__internal_f264195b666a47d69824a5b1e1b79bac76182586c834cca3c9407ae8d3943af5_prof);

        
        $__internal_ee0bfdc8fc86ccd271273db04da0469103f0b0467110347916107168d5fe6cab->leave($__internal_ee0bfdc8fc86ccd271273db04da0469103f0b0467110347916107168d5fe6cab_prof);

    }

    // line 390
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_1b0851939ce685183e6a340dc27ac8ee62f9034b7075a2696f43c99474ff95b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b0851939ce685183e6a340dc27ac8ee62f9034b7075a2696f43c99474ff95b4->enter($__internal_1b0851939ce685183e6a340dc27ac8ee62f9034b7075a2696f43c99474ff95b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a7063d7096078aa0f396edfe7e119acdea2933f21249f1f076bb6a50de056332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7063d7096078aa0f396edfe7e119acdea2933f21249f1f076bb6a50de056332->enter($__internal_a7063d7096078aa0f396edfe7e119acdea2933f21249f1f076bb6a50de056332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 391
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 392
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 393
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 394
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 395
        echo "</div>";
        
        $__internal_a7063d7096078aa0f396edfe7e119acdea2933f21249f1f076bb6a50de056332->leave($__internal_a7063d7096078aa0f396edfe7e119acdea2933f21249f1f076bb6a50de056332_prof);

        
        $__internal_1b0851939ce685183e6a340dc27ac8ee62f9034b7075a2696f43c99474ff95b4->leave($__internal_1b0851939ce685183e6a340dc27ac8ee62f9034b7075a2696f43c99474ff95b4_prof);

    }

    // line 398
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0334e9720edb7dc13324d5a13d6dd2c07aee0556f17d4364168d4c7692c8c5cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0334e9720edb7dc13324d5a13d6dd2c07aee0556f17d4364168d4c7692c8c5cf->enter($__internal_0334e9720edb7dc13324d5a13d6dd2c07aee0556f17d4364168d4c7692c8c5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_db41d5ce6914aec0856982e53fa32c73409b1bf76af3b7097f9fb24b763e94b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db41d5ce6914aec0856982e53fa32c73409b1bf76af3b7097f9fb24b763e94b9->enter($__internal_db41d5ce6914aec0856982e53fa32c73409b1bf76af3b7097f9fb24b763e94b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 399
        echo "<div class=\"form-group\">";
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 401
        echo "</div>";
        
        $__internal_db41d5ce6914aec0856982e53fa32c73409b1bf76af3b7097f9fb24b763e94b9->leave($__internal_db41d5ce6914aec0856982e53fa32c73409b1bf76af3b7097f9fb24b763e94b9_prof);

        
        $__internal_0334e9720edb7dc13324d5a13d6dd2c07aee0556f17d4364168d4c7692c8c5cf->leave($__internal_0334e9720edb7dc13324d5a13d6dd2c07aee0556f17d4364168d4c7692c8c5cf_prof);

    }

    // line 404
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_e3b757b642227a915a176d625dcea9d54b066370d0a3c819363c01e0d9e5808f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3b757b642227a915a176d625dcea9d54b066370d0a3c819363c01e0d9e5808f->enter($__internal_e3b757b642227a915a176d625dcea9d54b066370d0a3c819363c01e0d9e5808f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_aa07af3674759064da5dfabc2c888781db56b9735adddcf7030749a8e8f05968 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa07af3674759064da5dfabc2c888781db56b9735adddcf7030749a8e8f05968->enter($__internal_aa07af3674759064da5dfabc2c888781db56b9735adddcf7030749a8e8f05968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 405
        $context["force_error"] = true;
        // line 406
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_aa07af3674759064da5dfabc2c888781db56b9735adddcf7030749a8e8f05968->leave($__internal_aa07af3674759064da5dfabc2c888781db56b9735adddcf7030749a8e8f05968_prof);

        
        $__internal_e3b757b642227a915a176d625dcea9d54b066370d0a3c819363c01e0d9e5808f->leave($__internal_e3b757b642227a915a176d625dcea9d54b066370d0a3c819363c01e0d9e5808f_prof);

    }

    // line 409
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_355e0c185f8f7793889986f720ca8e7f28dc20a83506736b003a652847db41ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_355e0c185f8f7793889986f720ca8e7f28dc20a83506736b003a652847db41ba->enter($__internal_355e0c185f8f7793889986f720ca8e7f28dc20a83506736b003a652847db41ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_716337d1c3efd0c3e8f607f8ae53f8e92fecd7d35f469bbaabcd47fdadec7a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_716337d1c3efd0c3e8f607f8ae53f8e92fecd7d35f469bbaabcd47fdadec7a6b->enter($__internal_716337d1c3efd0c3e8f607f8ae53f8e92fecd7d35f469bbaabcd47fdadec7a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 410
        $context["force_error"] = true;
        // line 411
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_716337d1c3efd0c3e8f607f8ae53f8e92fecd7d35f469bbaabcd47fdadec7a6b->leave($__internal_716337d1c3efd0c3e8f607f8ae53f8e92fecd7d35f469bbaabcd47fdadec7a6b_prof);

        
        $__internal_355e0c185f8f7793889986f720ca8e7f28dc20a83506736b003a652847db41ba->leave($__internal_355e0c185f8f7793889986f720ca8e7f28dc20a83506736b003a652847db41ba_prof);

    }

    // line 414
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c6be9bade90629dcf0b7bc93fad489468537e300678f26f1b6bb74904438f7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6be9bade90629dcf0b7bc93fad489468537e300678f26f1b6bb74904438f7e7->enter($__internal_c6be9bade90629dcf0b7bc93fad489468537e300678f26f1b6bb74904438f7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_f92708fc3aad7153084374122b17469b6a1a33d4710d3691ac2d47556491ff70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f92708fc3aad7153084374122b17469b6a1a33d4710d3691ac2d47556491ff70->enter($__internal_f92708fc3aad7153084374122b17469b6a1a33d4710d3691ac2d47556491ff70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 415
        $context["force_error"] = true;
        // line 416
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f92708fc3aad7153084374122b17469b6a1a33d4710d3691ac2d47556491ff70->leave($__internal_f92708fc3aad7153084374122b17469b6a1a33d4710d3691ac2d47556491ff70_prof);

        
        $__internal_c6be9bade90629dcf0b7bc93fad489468537e300678f26f1b6bb74904438f7e7->leave($__internal_c6be9bade90629dcf0b7bc93fad489468537e300678f26f1b6bb74904438f7e7_prof);

    }

    // line 419
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_4e0001985069edadc77285cd3f9ac819a2f551ab25985d88f776363bc40bbd7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e0001985069edadc77285cd3f9ac819a2f551ab25985d88f776363bc40bbd7d->enter($__internal_4e0001985069edadc77285cd3f9ac819a2f551ab25985d88f776363bc40bbd7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_fa22520cbd844ba53c89857032ae6489b34d5d3d461c6b316b62c13a7411764b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa22520cbd844ba53c89857032ae6489b34d5d3d461c6b316b62c13a7411764b->enter($__internal_fa22520cbd844ba53c89857032ae6489b34d5d3d461c6b316b62c13a7411764b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 420
        $context["force_error"] = true;
        // line 421
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_fa22520cbd844ba53c89857032ae6489b34d5d3d461c6b316b62c13a7411764b->leave($__internal_fa22520cbd844ba53c89857032ae6489b34d5d3d461c6b316b62c13a7411764b_prof);

        
        $__internal_4e0001985069edadc77285cd3f9ac819a2f551ab25985d88f776363bc40bbd7d->leave($__internal_4e0001985069edadc77285cd3f9ac819a2f551ab25985d88f776363bc40bbd7d_prof);

    }

    // line 424
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_af6b2c3ad9aa5f649aba65a8b498627f99036893336ccc4af8101b753632b468 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af6b2c3ad9aa5f649aba65a8b498627f99036893336ccc4af8101b753632b468->enter($__internal_af6b2c3ad9aa5f649aba65a8b498627f99036893336ccc4af8101b753632b468_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_81af683ea26f0c4d6ea2172f4625c996538e6e286b810c03c68d1c72fb6e5044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81af683ea26f0c4d6ea2172f4625c996538e6e286b810c03c68d1c72fb6e5044->enter($__internal_81af683ea26f0c4d6ea2172f4625c996538e6e286b810c03c68d1c72fb6e5044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 425
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 426
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 427
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 428
        echo "</div>";
        
        $__internal_81af683ea26f0c4d6ea2172f4625c996538e6e286b810c03c68d1c72fb6e5044->leave($__internal_81af683ea26f0c4d6ea2172f4625c996538e6e286b810c03c68d1c72fb6e5044_prof);

        
        $__internal_af6b2c3ad9aa5f649aba65a8b498627f99036893336ccc4af8101b753632b468->leave($__internal_af6b2c3ad9aa5f649aba65a8b498627f99036893336ccc4af8101b753632b468_prof);

    }

    // line 431
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e14db4fdf40ca46dd0ab79fe7b2ae5b832c5b1266f29ff9f055b5a9fb572b874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e14db4fdf40ca46dd0ab79fe7b2ae5b832c5b1266f29ff9f055b5a9fb572b874->enter($__internal_e14db4fdf40ca46dd0ab79fe7b2ae5b832c5b1266f29ff9f055b5a9fb572b874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_a8b251d5ea3c12b4c7ed451c6ffc9a28b74c90f5df033dc3ff2c8bd9c1b935ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8b251d5ea3c12b4c7ed451c6ffc9a28b74c90f5df033dc3ff2c8bd9c1b935ab->enter($__internal_a8b251d5ea3c12b4c7ed451c6ffc9a28b74c90f5df033dc3ff2c8bd9c1b935ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 432
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 433
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 434
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 435
        echo "</div>";
        
        $__internal_a8b251d5ea3c12b4c7ed451c6ffc9a28b74c90f5df033dc3ff2c8bd9c1b935ab->leave($__internal_a8b251d5ea3c12b4c7ed451c6ffc9a28b74c90f5df033dc3ff2c8bd9c1b935ab_prof);

        
        $__internal_e14db4fdf40ca46dd0ab79fe7b2ae5b832c5b1266f29ff9f055b5a9fb572b874->leave($__internal_e14db4fdf40ca46dd0ab79fe7b2ae5b832c5b1266f29ff9f055b5a9fb572b874_prof);

    }

    // line 440
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_365711d5c98bd7754be6551a2932279fda9cd07c6daf1a8ca45f0c8cfca43cde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_365711d5c98bd7754be6551a2932279fda9cd07c6daf1a8ca45f0c8cfca43cde->enter($__internal_365711d5c98bd7754be6551a2932279fda9cd07c6daf1a8ca45f0c8cfca43cde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c477bfed43823236573222b3c97fff3522e8f27e098f3bb95dd6624ad42ab8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c477bfed43823236573222b3c97fff3522e8f27e098f3bb95dd6624ad42ab8b8->enter($__internal_c477bfed43823236573222b3c97fff3522e8f27e098f3bb95dd6624ad42ab8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 441
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 442
            echo "<div class=\"alert alert-danger\">";
            // line 443
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 1)) {
                // line 444
                echo "<ul class=\"alert-text\">";
                // line 445
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 446
                    echo "<li> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 447
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 448
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 449
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 450
                    echo "
                    </li>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 453
                echo "</ul>";
            } else {
                // line 455
                echo "<div class=\"alert-text\">";
                // line 456
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
                foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                    // line 457
                    echo "<p> ";
                    echo twig_escape_filter($this->env, (((null === $this->getAttribute(                    // line 458
$context["error"], "messagePluralization", array()))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(                    // line 459
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error")) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice($this->getAttribute(                    // line 460
$context["error"], "messageTemplate", array()), $this->getAttribute($context["error"], "messagePluralization", array()), $this->getAttribute($context["error"], "messageParameters", array()), "form_error"))), "html", null, true);
                    // line 461
                    echo "
                </p>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 464
                echo "</div>";
            }
            // line 466
            echo "</div>";
        }
        
        $__internal_c477bfed43823236573222b3c97fff3522e8f27e098f3bb95dd6624ad42ab8b8->leave($__internal_c477bfed43823236573222b3c97fff3522e8f27e098f3bb95dd6624ad42ab8b8_prof);

        
        $__internal_365711d5c98bd7754be6551a2932279fda9cd07c6daf1a8ca45f0c8cfca43cde->leave($__internal_365711d5c98bd7754be6551a2932279fda9cd07c6daf1a8ca45f0c8cfca43cde_prof);

    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1746 => 466,  1743 => 464,  1736 => 461,  1734 => 460,  1733 => 459,  1732 => 458,  1730 => 457,  1726 => 456,  1724 => 455,  1721 => 453,  1714 => 450,  1712 => 449,  1711 => 448,  1710 => 447,  1708 => 446,  1704 => 445,  1702 => 444,  1700 => 443,  1698 => 442,  1696 => 441,  1687 => 440,  1677 => 435,  1675 => 434,  1673 => 433,  1667 => 432,  1658 => 431,  1648 => 428,  1646 => 427,  1644 => 426,  1638 => 425,  1629 => 424,  1619 => 421,  1617 => 420,  1608 => 419,  1598 => 416,  1596 => 415,  1587 => 414,  1577 => 411,  1575 => 410,  1566 => 409,  1556 => 406,  1554 => 405,  1545 => 404,  1535 => 401,  1533 => 400,  1531 => 399,  1522 => 398,  1512 => 395,  1510 => 394,  1508 => 393,  1506 => 392,  1500 => 391,  1491 => 390,  1479 => 384,  1477 => 383,  1475 => 382,  1460 => 381,  1456 => 379,  1453 => 378,  1449 => 376,  1446 => 375,  1442 => 373,  1439 => 372,  1436 => 371,  1434 => 370,  1425 => 369,  1415 => 366,  1406 => 365,  1396 => 362,  1387 => 361,  1377 => 358,  1375 => 357,  1366 => 355,  1356 => 352,  1354 => 351,  1345 => 350,  1330 => 341,  1313 => 338,  1309 => 337,  1305 => 336,  1302 => 335,  1285 => 334,  1279 => 330,  1275 => 329,  1271 => 328,  1263 => 323,  1257 => 320,  1252 => 319,  1243 => 318,  1230 => 313,  1212 => 311,  1194 => 310,  1191 => 309,  1174 => 308,  1171 => 307,  1168 => 306,  1159 => 305,  1134 => 295,  1131 => 294,  1128 => 293,  1125 => 292,  1116 => 291,  1106 => 288,  1101 => 285,  1090 => 283,  1086 => 282,  1082 => 281,  1076 => 278,  1071 => 276,  1063 => 270,  1061 => 269,  1058 => 268,  1050 => 266,  1047 => 265,  1045 => 264,  1042 => 263,  1039 => 262,  1036 => 261,  1034 => 260,  1031 => 259,  1028 => 258,  1025 => 257,  1021 => 256,  1016 => 254,  1007 => 253,  997 => 250,  994 => 248,  992 => 247,  983 => 246,  971 => 242,  962 => 239,  958 => 238,  939 => 237,  935 => 236,  931 => 234,  927 => 232,  917 => 228,  909 => 227,  906 => 226,  902 => 225,  899 => 224,  897 => 223,  893 => 222,  888 => 221,  879 => 220,  869 => 217,  865 => 215,  848 => 213,  845 => 212,  828 => 211,  825 => 210,  822 => 209,  818 => 206,  812 => 204,  810 => 203,  806 => 202,  798 => 201,  794 => 199,  790 => 196,  784 => 194,  781 => 193,  776 => 191,  771 => 189,  769 => 188,  761 => 187,  757 => 185,  754 => 184,  752 => 183,  749 => 182,  740 => 181,  729 => 177,  712 => 175,  695 => 174,  692 => 173,  686 => 171,  677 => 170,  666 => 166,  664 => 165,  662 => 164,  659 => 162,  657 => 161,  655 => 160,  646 => 159,  635 => 155,  633 => 154,  631 => 153,  628 => 151,  626 => 150,  624 => 149,  615 => 148,  604 => 144,  598 => 141,  597 => 140,  596 => 139,  592 => 138,  588 => 137,  585 => 135,  579 => 132,  578 => 131,  577 => 130,  573 => 129,  571 => 128,  569 => 127,  560 => 126,  550 => 123,  548 => 122,  539 => 121,  527 => 116,  524 => 115,  516 => 114,  511 => 112,  509 => 111,  507 => 110,  504 => 108,  502 => 107,  493 => 106,  481 => 101,  479 => 100,  477 => 98,  476 => 97,  475 => 96,  474 => 95,  469 => 93,  467 => 92,  465 => 91,  462 => 89,  460 => 88,  451 => 87,  440 => 83,  438 => 82,  436 => 81,  434 => 80,  432 => 79,  428 => 78,  426 => 77,  423 => 75,  421 => 74,  412 => 73,  399 => 67,  397 => 66,  395 => 65,  386 => 64,  376 => 61,  370 => 58,  367 => 57,  365 => 56,  363 => 55,  357 => 52,  354 => 51,  351 => 50,  349 => 49,  346 => 48,  337 => 47,  327 => 44,  325 => 43,  316 => 42,  306 => 39,  304 => 38,  295 => 37,  285 => 34,  282 => 32,  280 => 31,  271 => 30,  261 => 440,  258 => 439,  255 => 437,  253 => 431,  250 => 430,  248 => 424,  245 => 423,  243 => 419,  240 => 418,  238 => 414,  235 => 413,  233 => 409,  230 => 408,  228 => 404,  225 => 403,  223 => 398,  220 => 397,  218 => 390,  215 => 389,  212 => 387,  210 => 369,  207 => 368,  205 => 365,  202 => 364,  200 => 361,  197 => 360,  195 => 355,  192 => 354,  190 => 350,  187 => 349,  184 => 347,  182 => 318,  179 => 317,  177 => 305,  174 => 304,  172 => 291,  169 => 290,  167 => 253,  164 => 252,  162 => 246,  159 => 245,  157 => 220,  154 => 219,  152 => 181,  149 => 180,  147 => 170,  144 => 169,  142 => 159,  139 => 158,  137 => 148,  134 => 147,  132 => 126,  129 => 125,  127 => 121,  124 => 120,  122 => 106,  119 => 105,  117 => 87,  114 => 86,  112 => 73,  109 => 72,  107 => 64,  104 => 63,  102 => 47,  99 => 46,  97 => 42,  94 => 41,  92 => 37,  89 => 36,  87 => 30,  84 => 29,  81 => 27,  21 => 26,  14 => 25,);
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
{% use \"PrestaShopBundle:Admin/TwigTemplateForm:form_div_layout.html.twig\" %}
{% use 'PrestaShopBundle:Admin/TwigTemplateForm:typeahead.html.twig' %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group money-type\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"input-group-prepend\">
                <span class=\"input-group-text\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if prepend %}
            <div class=\"input-group-append\">
                <span class=\"input-group-text\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <div class=\"input-group-append\">
            <span class=\"input-group-text\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
        {{- date_pattern|replace({
            '{{ year }}': form_widget(form.year),
            '{{ month }}': form_widget(form.month),
            '{{ day }}': form_widget(form.day),
        })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}:{{ form_widget(form.minute) }}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' custom-select')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        <div class=\"control-group\">
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default('') -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{% block choice_tree_widget -%}
    <div {{ block('widget_container_attributes') }} class=\"category-tree-overflow\">
        <ul class=\"category-tree\">
            <li class=\"form-control-label text-right main-category\">{{ \"Main category\"|trans({}, 'Admin.Catalog.Feature') }}</li>
            {%- for child in choices %}
            {{ block('choice_tree_item_widget') }}
        {% endfor -%}
        </ul>
    </div>
{%- endblock choice_tree_widget %}

{% block choice_tree_item_widget -%}
    <li>
        {% set checked = (form.vars.submitted_values is defined and submitted_values[child.id_category] is defined) ? 'checked=\"checked\"' : '' %}
        {% if multiple -%}
            <div class=\"checkbox\">
                <label>
                    <input type=\"checkbox\" name=\"{{ form.vars.full_name }}[tree][]\" value=\"{{ child.id_category }}\" class=\"category\" {{ checked }}>
                    {% if child.active is defined and child.active == 0 %}
                        <i>{{ child.name }}</i>
                    {%- else -%}
                        {{ child.name }}
                    {% endif %}
                    {% if defaultCategory is defined %}
                        <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
                    {% endif %}
                </label>
            </div>
        {%- else -%}
            <div class=\"radio\">
                <label>
                    <input type=\"radio\" name=\"form[{{ form.vars.id }}][tree]\" value=\"{{ child.id_category }}\" {{ checked }} class=\"category\">
                    {{ child.name }}
                    {% if defaultCategory is defined %}
                        <input type=\"radio\" value=\"{{ child.id_category }}\" name=\"ignore\" class=\"default-category\" />
                    {% endif %}
                </label>
            </div>
        {%- endif %}
        {% if child.children is defined %}
            <ul>
                {% for item in child.children %}
                    {% set child = item %}
                    {{ block('choice_tree_item_widget') }}
                {% endfor -%}
            </ul>
        {% endif %}
    </li>
{%- endblock choice_tree_item_widget %}

{% block translatefields_widget %}
    {{ form_errors(form) }}
    <div class=\"translations tabbable\" id=\"{{ form.vars.id }}\">
        {% if hideTabs == false and form|length > 1 %}
        <ul class=\"translationsLocales nav nav-pills\">
            {% for translationsFields in form %}
                <li class=\"nav-item\">
                    <a href=\"#\" class=\"{% if defaultLocale.id_lang == translationsFields.vars.name %}active{% endif %} nav-link\" data-toggle=\"tab\" data-target=\".translationsFields-{{ translationsFields.vars.id }}\">
                        {{ translationsFields.vars.label|capitalize }}
                    </a>
                </li>
            {% endfor %}
        </ul>
        {% endif %}

        <div class=\"translationsFields tab-content\">
            {% for translationsFields in form %}
                <div class=\"translationsFields-{{ translationsFields.vars.id }} tab-pane translation-field {% if hideTabs == false and form|length > 1 %}panel panel-default{% endif %} {% if defaultLocale.id_lang == translationsFields.vars.name %}show active{% endif %} {% if not form.vars.valid %}field-error{% endif %} translation-label-{{ translationsFields.vars.label }}\">
                    {{ form_errors(translationsFields) }}
                    {{ form_widget(translationsFields) }}
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}

{% block translate_fields_widget -%}
    {% if type is not defined or 'file' != type %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock translate_fields_widget %}

{% block translate_text_widget -%}
    {{ form_errors(form) }}
    <div class=\"input-group locale-input-group js-locale-input-group\">
        {% for translateField in form %}
            {% set classes = translateField.vars.attr.class|default('') ~ ' js-locale-input'%}
            {% set classes = classes ~ ' js-locale-' ~ translateField.vars.label %}

            {% if default_locale.id_lang != translateField.vars.name %}
                {% set classes = classes ~ ' d-none' %}
            {% endif %}

            {% set attr = translateField.vars.attr %}

            {{ form_widget(translateField, {attr: {'class': classes|trim}}) }}
        {% endfor %}

        {% if not hide_locales %}
        <div class=\"dropdown\">
            <button class=\"btn btn-outline-secondary dropdown-toggle js-locale-btn\"
                    type=\"button\"
                    data-toggle=\"dropdown\"
                    aria-haspopup=\"true\"
                    aria-expanded=\"false\"
                    id=\"{{ form.vars.id }}\"
            >
                {{ form.vars.default_locale.iso_code }}
            </button>

            <div class=\"dropdown-menu\" aria-labelledby=\"{{ form.vars.id }}\">
                {% for locale in locales %}
                    <span class=\"dropdown-item js-locale-item\" data-locale=\"{{ locale.iso_code }}\">{{ locale.name }}</span>
                {% endfor %}
            </div>
        </div>
        {% endif %}
    </div>
{%- endblock translate_text_widget %}

{% block date_picker_widget %}
    {% spaceless %}
        {%  set attr = attr|merge({'class': ((attr.class|default('') ~ ' datepicker')|trim)}) %}
        <div class=\"input-group datepicker\">
            <input type=\"text\" class=\"form-control\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
            <div class=\"input-group-append\">
                <div class=\"input-group-text\">
                    <i class=\"material-icons\">date_range</i>
                </div>
            </div>
        </div>
    {% endspaceless %}
{% endblock date_picker_widget %}

{% block switch_widget %}
    {% spaceless %}
    <span class=\"ps-switch\">
        {% for choice in choices %}
            {% set inputId = id ~'_' ~ choice.value %}
            <input id=\"{{inputId}}\" {{ block('attributes') }} name=\"{{ full_name }}\" value=\"{{ choice.value }}\" {%- if choice is selectedchoice(value) -%}checked=\"\" {%- endif -%} {%- if disabled -%}disabled=\"\" {%- endif -%} type=\"radio\">
            <label for=\"{{inputId}}\">{{ choice.label|trans({}, choice_translation_domain) }}</label>
        {% endfor %}
        <span class=\"slide-button\"></span>
    </span>
    {% endspaceless %}
{% endblock switch_widget %}

{% block _form_step6_attachments_widget %}
    <div class=\"js-options-no-attachments {{ form|length > 0 ? 'hide' : '' }}\">
        <small>{{ 'There is no attachment yet.'|trans({}, 'Admin.Catalog.Notification') }}</small>
    </div>
    <div id=\"product-attachments\" class=\"panel panel-default\">
      <div class=\"panel-body js-options-with-attachments {{ form|length == 0 ? 'hide' : '' }}\">
        <div>
          <table id=\"product-attachment-file\" class=\"table\">
            <thead class=\"thead-default\">
              <tr>
                <th class=\"col-md-3\"><input type=\"checkbox\" id=\"product-attachment-files-check\" /> {{ 'Title'|trans({}, 'Admin.Global') }}</th>
                <th class=\"col-md-6\">{{ 'File name'|trans({}, 'Admin.Global') }}</th>
                <th class=\"col-md-2\">{{ 'Type'|trans({}, 'Admin.Catalog.Feature') }}</th>
              </tr>
            </thead>
            <tbody>
            {%- for child in form %}
              <tr>
                <td class=\"col-md-3\">{{ form_widget(child) }}</td>
                <td class=\"col-md-6 file-name\"><span>{{ form.vars.attr.data[loop.index0]['file_name'] }}</span></td>
                <td class=\"col-md-2\">{{ form.vars.attr.data[loop.index0]['mime'] }}</td>
              </tr>
            {% endfor -%}
            </tbody>
          </table>
        </div>
      </div>
    </div>
{% endblock %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
    {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
{% endif %}
        {% if parent_label_class is defined %}
    {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
{% endif %}
        {% if label is not same as(false) and label is empty %}
    {% set label = name|humanize %}
{% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw -}}
            {{- label is not same as(false) ? (translation_domain is same as(false) ? label|raw : label|raw) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    <div class=\"alert alert-danger\">
        {%- if errors|length > 1 -%}
            <ul class=\"alert-text\">
                {%- for error in errors -%}
                    <li> {{
                        error.messagePluralization is null
                        ? error.messageTemplate|trans(error.messageParameters, 'form_error')
                        : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
                        }}
                    </li>
                {%- endfor -%}
            </ul>
        {%- else -%}
            <div class=\"alert-text\">
            {%- for error in errors -%}
                <p> {{
                    error.messagePluralization is null
                    ? error.messageTemplate|trans(error.messageParameters, 'form_error')
                    : error.messageTemplate|transchoice(error.messagePluralization, error.messageParameters, 'form_error')
                    }}
                </p>
            {%- endfor -%}
            </div>
        {%- endif -%}
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "PrestaShopBundle:Admin/TwigTemplateForm:bootstrap_4_layout.html.twig", "/home/kanonkevin/public_html/zamoundaofficiel/src/PrestaShopBundle/Resources/views/Admin/TwigTemplateForm/bootstrap_4_layout.html.twig");
    }
}
