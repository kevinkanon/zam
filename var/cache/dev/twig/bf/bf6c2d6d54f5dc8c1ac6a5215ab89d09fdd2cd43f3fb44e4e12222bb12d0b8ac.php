<?php

/* PrestaShopBundle:Admin:macros.html.twig */
class __TwigTemplate_fa9b7e9385555e399f0b316057ed1326a0208d2d3af59089df70cd0c3bad2a8a extends Twig_Template
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
        $__internal_ac19c9fe4bb9501e9c2d46d15b392d8861aab0ac5a6d2eb8fab9a5f61840a2e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac19c9fe4bb9501e9c2d46d15b392d8861aab0ac5a6d2eb8fab9a5f61840a2e1->enter($__internal_ac19c9fe4bb9501e9c2d46d15b392d8861aab0ac5a6d2eb8fab9a5f61840a2e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:macros.html.twig"));

        $__internal_f099c840779b6d3f4ccefc91dfb03823e5aee777bb1b2713d175e23e54e299e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f099c840779b6d3f4ccefc91dfb03823e5aee777bb1b2713d175e23e54e299e8->enter($__internal_f099c840779b6d3f4ccefc91dfb03823e5aee777bb1b2713d175e23e54e299e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PrestaShopBundle:Admin:macros.html.twig"));

        // line 28
        echo "
";
        // line 32
        echo "
";
        // line 38
        echo "
";
        // line 46
        echo "
";
        // line 54
        echo "
";
        // line 64
        echo "
";
        // line 81
        echo "
";
        
        $__internal_ac19c9fe4bb9501e9c2d46d15b392d8861aab0ac5a6d2eb8fab9a5f61840a2e1->leave($__internal_ac19c9fe4bb9501e9c2d46d15b392d8861aab0ac5a6d2eb8fab9a5f61840a2e1_prof);

        
        $__internal_f099c840779b6d3f4ccefc91dfb03823e5aee777bb1b2713d175e23e54e299e8->leave($__internal_f099c840779b6d3f4ccefc91dfb03823e5aee777bb1b2713d175e23e54e299e8_prof);

    }

    // line 25
    public function getform_label_tooltip($__name__ = null, $__tooltip__ = null, $__placement__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "tooltip" => $__tooltip__,
            "placement" => $__placement__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_39bf43e73e13e3826dfe1636d57d3d1ad7bd71529a93a3918cc834477e9d0b26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_39bf43e73e13e3826dfe1636d57d3d1ad7bd71529a93a3918cc834477e9d0b26->enter($__internal_39bf43e73e13e3826dfe1636d57d3d1ad7bd71529a93a3918cc834477e9d0b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            $__internal_46b20b7a629deb971d5369d9e8ef8c8d034df95fc407c4bf90491a402caaa208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_46b20b7a629deb971d5369d9e8ef8c8d034df95fc407c4bf90491a402caaa208->enter($__internal_46b20b7a629deb971d5369d9e8ef8c8d034df95fc407c4bf90491a402caaa208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "form_label_tooltip"));

            // line 26
            echo "    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["name"] ?? $this->getContext($context, "name")), 'label', array("label_attr" => array("tooltip" => ($context["tooltip"] ?? $this->getContext($context, "tooltip")), "tooltip_placement" => ((array_key_exists("placement", $context)) ? (_twig_default_filter(($context["placement"] ?? $this->getContext($context, "placement")), "top")) : ("top")))));
            echo "
";
            
            $__internal_46b20b7a629deb971d5369d9e8ef8c8d034df95fc407c4bf90491a402caaa208->leave($__internal_46b20b7a629deb971d5369d9e8ef8c8d034df95fc407c4bf90491a402caaa208_prof);

            
            $__internal_39bf43e73e13e3826dfe1636d57d3d1ad7bd71529a93a3918cc834477e9d0b26->leave($__internal_39bf43e73e13e3826dfe1636d57d3d1ad7bd71529a93a3918cc834477e9d0b26_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 29
    public function getcheck($__variable__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "variable" => $__variable__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_a5a5119709f5c81266a99a04318236b103a7ed17b534f5ec7293a8c47112f39c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_a5a5119709f5c81266a99a04318236b103a7ed17b534f5ec7293a8c47112f39c->enter($__internal_a5a5119709f5c81266a99a04318236b103a7ed17b534f5ec7293a8c47112f39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "check"));

            $__internal_a77d81abf94b41a2b8d231dc63f3db259e5fac92c5b968988c7cdfa217b712bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_a77d81abf94b41a2b8d231dc63f3db259e5fac92c5b968988c7cdfa217b712bc->enter($__internal_a77d81abf94b41a2b8d231dc63f3db259e5fac92c5b968988c7cdfa217b712bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "check"));

            // line 30
            echo "  ";
            echo twig_escape_filter($this->env, (((array_key_exists("variable", $context) && (twig_length_filter($this->env, ($context["variable"] ?? $this->getContext($context, "variable"))) > 0))) ? (($context["variable"] ?? $this->getContext($context, "variable"))) : (false)), "html", null, true);
            echo "
";
            
            $__internal_a77d81abf94b41a2b8d231dc63f3db259e5fac92c5b968988c7cdfa217b712bc->leave($__internal_a77d81abf94b41a2b8d231dc63f3db259e5fac92c5b968988c7cdfa217b712bc_prof);

            
            $__internal_a5a5119709f5c81266a99a04318236b103a7ed17b534f5ec7293a8c47112f39c->leave($__internal_a5a5119709f5c81266a99a04318236b103a7ed17b534f5ec7293a8c47112f39c_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function gettooltip($__text__ = null, $__icon__ = null, $__position__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "icon" => $__icon__,
            "position" => $__position__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c83117ad01e81176d99d41406ccb2fa38955c770c0357ef70a72e44ed6f329dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c83117ad01e81176d99d41406ccb2fa38955c770c0357ef70a72e44ed6f329dd->enter($__internal_c83117ad01e81176d99d41406ccb2fa38955c770c0357ef70a72e44ed6f329dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tooltip"));

            $__internal_2e44394da3967949449f707e5c147d1f32e6f54616b5df06c7d6248b35a13cf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_2e44394da3967949449f707e5c147d1f32e6f54616b5df06c7d6248b35a13cf2->enter($__internal_2e44394da3967949449f707e5c147d1f32e6f54616b5df06c7d6248b35a13cf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "tooltip"));

            // line 34
            echo "  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"";
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "\" data-html=\"true\" data-placement=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("position", $context)) ? (_twig_default_filter(($context["position"] ?? $this->getContext($context, "position")), "top")) : ("top")), "html", null, true);
            echo "\">
    <i class=\"material-icons\">";
            // line 35
            echo twig_escape_filter($this->env, ($context["icon"] ?? $this->getContext($context, "icon")), "html", null, true);
            echo "</i>
  </span>
";
            
            $__internal_2e44394da3967949449f707e5c147d1f32e6f54616b5df06c7d6248b35a13cf2->leave($__internal_2e44394da3967949449f707e5c147d1f32e6f54616b5df06c7d6248b35a13cf2_prof);

            
            $__internal_c83117ad01e81176d99d41406ccb2fa38955c770c0357ef70a72e44ed6f329dd->leave($__internal_c83117ad01e81176d99d41406ccb2fa38955c770c0357ef70a72e44ed6f329dd_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 39
    public function getinfotip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5fa841929c66fa84856e1a1a0384c6bc544dc54b0bdafac1430931fb9ac07844 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_5fa841929c66fa84856e1a1a0384c6bc544dc54b0bdafac1430931fb9ac07844->enter($__internal_5fa841929c66fa84856e1a1a0384c6bc544dc54b0bdafac1430931fb9ac07844_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "infotip"));

            $__internal_515340cbb2f362fa7718112208aa5279e314f865a30ac93d7c251999f0a08a78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_515340cbb2f362fa7718112208aa5279e314f865a30ac93d7c251999f0a08a78->enter($__internal_515340cbb2f362fa7718112208aa5279e314f865a30ac93d7c251999f0a08a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "infotip"));

            // line 40
            echo "<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 42
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "
  </p>
</div>
";
            
            $__internal_515340cbb2f362fa7718112208aa5279e314f865a30ac93d7c251999f0a08a78->leave($__internal_515340cbb2f362fa7718112208aa5279e314f865a30ac93d7c251999f0a08a78_prof);

            
            $__internal_5fa841929c66fa84856e1a1a0384c6bc544dc54b0bdafac1430931fb9ac07844->leave($__internal_5fa841929c66fa84856e1a1a0384c6bc544dc54b0bdafac1430931fb9ac07844_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 47
    public function getwarningtip($__text__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f7302f79d339c5aaa918d19529707fa1ffc3164d7759118b5e4c503a3129da91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_f7302f79d339c5aaa918d19529707fa1ffc3164d7759118b5e4c503a3129da91->enter($__internal_f7302f79d339c5aaa918d19529707fa1ffc3164d7759118b5e4c503a3129da91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warningtip"));

            $__internal_da01ba5b46fc3abb77cc254a902169e4dccad3d473d6d33e3bb510aef05402c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_da01ba5b46fc3abb77cc254a902169e4dccad3d473d6d33e3bb510aef05402c1->enter($__internal_da01ba5b46fc3abb77cc254a902169e4dccad3d473d6d33e3bb510aef05402c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "warningtip"));

            // line 48
            echo "<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    ";
            // line 50
            echo twig_escape_filter($this->env, ($context["text"] ?? $this->getContext($context, "text")), "html", null, true);
            echo "
  </p>
</div>
";
            
            $__internal_da01ba5b46fc3abb77cc254a902169e4dccad3d473d6d33e3bb510aef05402c1->leave($__internal_da01ba5b46fc3abb77cc254a902169e4dccad3d473d6d33e3bb510aef05402c1_prof);

            
            $__internal_f7302f79d339c5aaa918d19529707fa1ffc3164d7759118b5e4c503a3129da91->leave($__internal_f7302f79d339c5aaa918d19529707fa1ffc3164d7759118b5e4c503a3129da91_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 55
    public function getlabel_with_help($__label__ = null, $__help__ = null, $__class__ = "", ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "help" => $__help__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_3f253a634e4e956f7246150e2789e896b4f52e6dbf893e8823dde8d7a92045e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_3f253a634e4e956f7246150e2789e896b4f52e6dbf893e8823dde8d7a92045e1->enter($__internal_3f253a634e4e956f7246150e2789e896b4f52e6dbf893e8823dde8d7a92045e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_with_help"));

            $__internal_df4fc1c863e30d979e4be30a0dd9a38613a17fd5df9504a1f61a09eb3f34dacf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_df4fc1c863e30d979e4be30a0dd9a38613a17fd5df9504a1f61a09eb3f34dacf->enter($__internal_df4fc1c863e30d979e4be30a0dd9a38613a17fd5df9504a1f61a09eb3f34dacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label_with_help"));

            // line 56
            echo "<label class=\"form-control-label ";
            echo twig_escape_filter($this->env, ($context["class"] ?? $this->getContext($context, "class")), "html", null, true);
            echo "\">
  ";
            // line 57
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "
  <span class=\"help-box\" data-toggle=\"popover\"
    data-title=\"";
            // line 59
            echo twig_escape_filter($this->env, ($context["label"] ?? $this->getContext($context, "label")), "html", null, true);
            echo "\"
    data-content=\"";
            // line 60
            echo twig_escape_filter($this->env, ($context["help"] ?? $this->getContext($context, "help")), "html", null, true);
            echo "\">
  </span>
</label>
";
            
            $__internal_df4fc1c863e30d979e4be30a0dd9a38613a17fd5df9504a1f61a09eb3f34dacf->leave($__internal_df4fc1c863e30d979e4be30a0dd9a38613a17fd5df9504a1f61a09eb3f34dacf_prof);

            
            $__internal_3f253a634e4e956f7246150e2789e896b4f52e6dbf893e8823dde8d7a92045e1->leave($__internal_3f253a634e4e956f7246150e2789e896b4f52e6dbf893e8823dde8d7a92045e1_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getsortable_column_header($__title__ = null, $__sortColumnName__ = null, $__orderBy__ = null, $__sortOrder__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "sortColumnName" => $__sortColumnName__,
            "orderBy" => $__orderBy__,
            "sortOrder" => $__sortOrder__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_766004e6ad9d16148660dd1538e44cff8ee2a8428570833709f838f0e42db410 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_766004e6ad9d16148660dd1538e44cff8ee2a8428570833709f838f0e42db410->enter($__internal_766004e6ad9d16148660dd1538e44cff8ee2a8428570833709f838f0e42db410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            $__internal_b268bf523c35f3b3a64df760714cda6f69abd066b559e5590561a98605f96f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_b268bf523c35f3b3a64df760714cda6f69abd066b559e5590561a98605f96f00->enter($__internal_b268bf523c35f3b3a64df760714cda6f69abd066b559e5590561a98605f96f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "sortable_column_header"));

            // line 67
            echo "  ";
            list($context["sortOrder"], $context["orderBy"]) =             array(((array_key_exists("sortOrder", $context)) ? (_twig_default_filter(($context["sortOrder"] ?? $this->getContext($context, "sortOrder")), "")) : ("")), ((array_key_exists("orderBy", $context)) ? (_twig_default_filter(($context["orderBy"] ?? $this->getContext($context, "orderBy")), "")) : ("")));
            // line 68
            echo "    <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"";
            // line 70
            echo twig_escape_filter($this->env, ($context["sortColumnName"] ?? $this->getContext($context, "sortColumnName")), "html", null, true);
            echo "\"
      ";
            // line 71
            if ((($context["orderBy"] ?? $this->getContext($context, "orderBy")) == ($context["sortColumnName"] ?? $this->getContext($context, "sortColumnName")))) {
                // line 72
                echo "        data-sort-is-current=\"true\"
        data-sort-direction=\"";
                // line 73
                echo (((($context["sortOrder"] ?? $this->getContext($context, "sortOrder")) == "desc")) ? ("desc") : ("asc"));
                echo "\"
      ";
            }
            // line 75
            echo "    >
      <span role=\"columnheader\">";
            // line 76
            echo twig_escape_filter($this->env, ($context["title"] ?? $this->getContext($context, "title")), "html", null, true);
            echo "</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", array(), "Admin.Actions"), "html", null, true);
            echo "\"></span>
    </div>
  </th>
";
            
            $__internal_b268bf523c35f3b3a64df760714cda6f69abd066b559e5590561a98605f96f00->leave($__internal_b268bf523c35f3b3a64df760714cda6f69abd066b559e5590561a98605f96f00_prof);

            
            $__internal_766004e6ad9d16148660dd1538e44cff8ee2a8428570833709f838f0e42db410->leave($__internal_766004e6ad9d16148660dd1538e44cff8ee2a8428570833709f838f0e42db410_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 83
    public function getimport_file_sample($__label__ = null, $__filename__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "filename" => $__filename__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_05ab73daf0c92d148e45604e0e2c64f2518f97e7d848c04d49157e7451be4f22 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_05ab73daf0c92d148e45604e0e2c64f2518f97e7d848c04d49157e7451be4f22->enter($__internal_05ab73daf0c92d148e45604e0e2c64f2518f97e7d848c04d49157e7451be4f22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "import_file_sample"));

            $__internal_dfd423c23de02a31dc06cbb20acd98b5cd7f981296ad432ef4f85e7414ce910c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_dfd423c23de02a31dc06cbb20acd98b5cd7f981296ad432ef4f85e7414ce910c->enter($__internal_dfd423c23de02a31dc06cbb20acd98b5cd7f981296ad432ef4f85e7414ce910c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "import_file_sample"));

            // line 84
            echo "    <a class=\"list-group-item list-group-item-action _blank\" href=\"../../../../docs/csv_import/";
            echo twig_escape_filter($this->env, ($context["filename"] ?? $this->getContext($context, "filename")), "html", null, true);
            echo ".csv\">
        ";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), "Admin.Advparameters.Feature"), "html", null, true);
            echo "
    </a>
";
            
            $__internal_dfd423c23de02a31dc06cbb20acd98b5cd7f981296ad432ef4f85e7414ce910c->leave($__internal_dfd423c23de02a31dc06cbb20acd98b5cd7f981296ad432ef4f85e7414ce910c_prof);

            
            $__internal_05ab73daf0c92d148e45604e0e2c64f2518f97e7d848c04d49157e7451be4f22->leave($__internal_05ab73daf0c92d148e45604e0e2c64f2518f97e7d848c04d49157e7451be4f22_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "PrestaShopBundle:Admin:macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  442 => 85,  437 => 84,  418 => 83,  393 => 77,  389 => 76,  386 => 75,  381 => 73,  378 => 72,  376 => 71,  372 => 70,  368 => 68,  365 => 67,  344 => 66,  319 => 60,  315 => 59,  310 => 57,  305 => 56,  285 => 55,  260 => 50,  256 => 48,  238 => 47,  213 => 42,  209 => 40,  191 => 39,  167 => 35,  160 => 34,  140 => 33,  116 => 30,  98 => 29,  74 => 26,  54 => 25,  43 => 81,  40 => 64,  37 => 54,  34 => 46,  31 => 38,  28 => 32,  25 => 28,);
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
{% macro form_label_tooltip(name, tooltip, placement) %}
    {{ form_label(name, null, {'label_attr': {'tooltip': tooltip, 'tooltip_placement': placement|default('top')}}) }}
{% endmacro %}

{% macro check(variable) %}
  {{ variable is defined and variable|length > 0 ? variable : false }}
{% endmacro %}

{% macro tooltip(text, icon, position) %}
  <span data-toggle=\"pstooltip\" class=\"label-tooltip\" data-original-title=\"{{ text }}\" data-html=\"true\" data-placement=\"{{ position|default('top') }}\">
    <i class=\"material-icons\">{{ icon }}</i>
  </span>
{% endmacro %}

{% macro infotip(text)%}
<div class=\"alert alert-info\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro warningtip(text)%}
<div class=\"alert alert-warning\" role=\"alert\">
  <p class=\"alert-text\">
    {{ text }}
  </p>
</div>
{% endmacro %}

{% macro label_with_help(label, help, class = '') %}
<label class=\"form-control-label {{ class }}\">
  {{ label }}
  <span class=\"help-box\" data-toggle=\"popover\"
    data-title=\"{{ label }}\"
    data-content=\"{{ help }}\">
  </span>
</label>
{% endmacro %}

{# Table column headers with sorting indicators #}
{% macro sortable_column_header(title, sortColumnName, orderBy, sortOrder) %}
  {% set sortOrder, orderBy = sortOrder|default(''), orderBy|default('') %}
    <div
      class=\"ps-sortable-column\"
      data-sort-col-name=\"{{ sortColumnName }}\"
      {% if orderBy == sortColumnName %}
        data-sort-is-current=\"true\"
        data-sort-direction=\"{{ sortOrder == 'desc' ? 'desc' : 'asc' }}\"
      {% endif %}
    >
      <span role=\"columnheader\">{{ title }}</span>
      <span role=\"button\" class=\"ps-sort\" aria-label=\"{{ 'Sort by'|trans({}, 'Admin.Actions') }}\"></span>
    </div>
  </th>
{% endmacro %}

{# Show link to import file sample #}
{% macro import_file_sample(label, filename) %}
    <a class=\"list-group-item list-group-item-action _blank\" href=\"../../../../docs/csv_import/{{ filename }}.csv\">
        {{ label|trans({}, 'Admin.Advparameters.Feature') }}
    </a>
{% endmacro %}
", "PrestaShopBundle:Admin:macros.html.twig", "/home/kanonkevin/public_html/zamoundaofficiel/src/PrestaShopBundle/Resources/views/Admin/macros.html.twig");
    }
}
