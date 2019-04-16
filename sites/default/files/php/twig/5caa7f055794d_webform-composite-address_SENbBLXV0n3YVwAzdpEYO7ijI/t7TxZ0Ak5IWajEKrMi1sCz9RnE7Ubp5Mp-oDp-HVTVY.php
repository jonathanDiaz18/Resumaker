<?php

/* modules/webform-8.x-5.2/webform/templates/webform-composite-address.html.twig */
class __TwigTemplate_c301c887fc70d1a5b5476fe3ca2270e53d64c3681dd7638f508eacb159dfc2dc extends Twig_Template
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
            echo "
  ";
            // line 18
            if ($this->getAttribute(($context["content"] ?? null), "address", array())) {
                // line 19
                echo "    <div class=\"webform-flexbox\">
      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                // line 20
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "address", array()), "html", null, true));
                echo "</div></div>
    </div>
  ";
            }
            // line 23
            echo "
  ";
            // line 24
            if ($this->getAttribute(($context["content"] ?? null), "address_2", array())) {
                // line 25
                echo "    <div class=\"webform-flexbox\">
      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                // line 26
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "address_2", array()), "html", null, true));
                echo "</div></div>
    </div>
  ";
            }
            // line 29
            echo "
  <div class=\"webform-flexbox\">
    ";
            // line 31
            if ($this->getAttribute(($context["content"] ?? null), "city", array())) {
                // line 32
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "city", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 34
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "state_province", array())) {
                // line 35
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "state_province", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 37
            echo "    ";
            if ($this->getAttribute(($context["content"] ?? null), "postal_code", array())) {
                // line 38
                echo "      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "postal_code", array()), "html", null, true));
                echo "</div></div>
    ";
            }
            // line 40
            echo "  </div>

  ";
            // line 42
            if ($this->getAttribute(($context["content"] ?? null), "country", array())) {
                // line 43
                echo "    <div class=\"webform-flexbox\">
      <div class=\"webform-flex webform-flex--1\"><div class=\"webform-flex--container\">";
                // line 44
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content"] ?? null), "country", array()), "html", null, true));
                echo "</div></div>
    </div>
  ";
            }
            // line 47
            echo "
";
        } else {
            // line 49
            echo "  ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "modules/webform-8.x-5.2/webform/templates/webform-composite-address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 49,  118 => 47,  112 => 44,  109 => 43,  107 => 42,  103 => 40,  97 => 38,  94 => 37,  88 => 35,  85 => 34,  79 => 32,  77 => 31,  73 => 29,  67 => 26,  64 => 25,  62 => 24,  59 => 23,  53 => 20,  50 => 19,  48 => 18,  45 => 17,  43 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/webform-8.x-5.2/webform/templates/webform-composite-address.html.twig", "/var/www/html/modules/webform-8.x-5.2/webform/templates/webform-composite-address.html.twig");
    }
}
