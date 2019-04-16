<?php

/* modules/webform-8.x-5.2/webform/templates/webform-composite-name.html.twig */
class __TwigTemplate_233be983db5050712ab8334da843891f7cccf66ae24ff4c6754affc21e5e2859 extends Twig_Template
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
        $tags = array("if" => 16);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 16
        if (($context["flexbox"] ?? null)) {
            // line 17
            echo "  <div class=\"webform-flexbox\">
    ";
            // line 18
            if ($this->getAttribute(($context["content"] ?? null), "title", array())) {
                // line 19
                echo "      <div class=\"webform-flex webform-flex--2\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "title", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 21
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "first", array())) {
                // line 22
                echo "      <div class=\"webform-flex webform-flex--3\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "first", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 24
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "middle", array())) {
                // line 25
                echo "      <div class=\"webform-flex webform-flex--2\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "middle", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 27
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "last", array())) {
                // line 28
                echo "      <div class=\"webform-flex webform-flex--3\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "last", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 30
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "suffix", array())) {
                // line 31
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "suffix", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 33
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "degree", array())) {
                // line 34
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "degree", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 36
            echo "  </div>
";
        } else {
            // line 38
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/webform-8.x-5.2/webform/templates/webform-composite-name.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 38,  101 => 36,  95 => 34,  92 => 33,  86 => 31,  83 => 30,  77 => 28,  74 => 27,  68 => 25,  65 => 24,  59 => 22,  56 => 21,  50 => 19,  48 => 18,  45 => 17,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/webform-8.x-5.2/webform/templates/webform-composite-name.html.twig", "/var/www/html/modules/webform-8.x-5.2/webform/templates/webform-composite-name.html.twig");
    }
}
