<?php

/* modules/webform-8.x-5.2/webform/templates/webform-submission-information.html.twig */
class __TwigTemplate_b1da6e3a0821b7befd0532f677238a23a62e7b38daf8434899114b700282acac extends Twig_Template
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
        $tags = array("if" => 33);
        $filters = array("t" => 34);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t'),
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

        // line 33
        if (($context["submissions_view"] ?? null)) {
            // line 34
            echo "  <div><b>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Number")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["serial"] ?? null), "html", null, true));
            echo "</div>
  <div><b>";
            // line 35
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission ID")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sid"] ?? null), "html", null, true));
            echo "</div>
  <div><b>";
            // line 36
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission UUID")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["uuid"] ?? null), "html", null, true));
            echo "</div>
  ";
            // line 37
            if (($context["uri"] ?? null)) {
                // line 38
                echo "    <div><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission URI")));
                echo ":</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["uri"] ?? null), "html", null, true));
                echo "</div>
  ";
            }
            // line 40
            echo "  ";
            if (($context["token_update"] ?? null)) {
                // line 41
                echo "    <div><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Update")));
                echo ":</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["token_update"] ?? null), "html", null, true));
                echo "</div>
  ";
            }
            // line 43
            echo "  <br />
  <div><b>";
            // line 44
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Created")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
            echo "</div>
  <div><b>";
            // line 45
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Completed")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["completed"] ?? null), "html", null, true));
            echo "</div>
  <div><b>";
            // line 46
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Changed")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["changed"] ?? null), "html", null, true));
            echo "</div>
  <br />
  <div><b>";
            // line 48
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Remote IP address")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["remote_addr"] ?? null), "html", null, true));
            echo "</div>
  <div><b>";
            // line 49
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submitted by")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["submitted_by"] ?? null), "html", null, true));
            echo "</div>
  <div><b>";
            // line 50
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Language")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["language"] ?? null), "html", null, true));
            echo "</div>
  <br />
  <div><b>";
            // line 52
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Is draft")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["is_draft"] ?? null), "html", null, true));
            echo "</div>
  ";
            // line 53
            if (($context["current_page"] ?? null)) {
                // line 54
                echo "    <div><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Current page")));
                echo ":</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["current_page"] ?? null), "html", null, true));
                echo "</div>
  ";
            }
            // line 56
            echo "  <div><b>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Webform")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["webform"] ?? null), "html", null, true));
            echo "</div>
  ";
            // line 57
            if (($context["submitted_to"] ?? null)) {
                // line 58
                echo "    <div><b>";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submitted to")));
                echo ":</b> ";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["submitted_to"] ?? null), "html", null, true));
                echo "</div>
  ";
            }
            // line 60
            echo "  ";
            if (((($context["sticky"] ?? null) || ($context["locked"] ?? null)) || ($context["notes"] ?? null))) {
                // line 61
                echo "    <br />
    ";
                // line 62
                if (($context["sticky"] ?? null)) {
                    // line 63
                    echo "      <div><b>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Flagged")));
                    echo ":</b> ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["sticky"] ?? null), "html", null, true));
                    echo "</div>
    ";
                }
                // line 65
                echo "    ";
                if (($context["locked"] ?? null)) {
                    // line 66
                    echo "      <div><b>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Locked")));
                    echo ":</b> ";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["locked"] ?? null), "html", null, true));
                    echo "</div>
    ";
                }
                // line 68
                echo "    ";
                if (($context["notes"] ?? null)) {
                    // line 69
                    echo "      <div><b>";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Notes")));
                    echo ":</b><br/>
      <pre>";
                    // line 70
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["notes"] ?? null), "html", null, true));
                    echo "</pre>
      </div>
    ";
                }
                // line 73
                echo "  ";
            }
            // line 74
            echo "
";
        } else {
            // line 76
            echo "  <div><b>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Submission Number")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["serial"] ?? null), "html", null, true));
            echo "</div>
  <div><b>";
            // line 77
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Created")));
            echo ":</b> ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["created"] ?? null), "html", null, true));
            echo "</div>
";
        }
        // line 79
        echo "
";
        // line 80
        if (($context["delete"] ?? null)) {
            // line 81
            echo "  <br/>
  <div>";
            // line 82
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["delete"] ?? null), "html", null, true));
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "modules/webform-8.x-5.2/webform/templates/webform-submission-information.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  229 => 82,  226 => 81,  224 => 80,  221 => 79,  214 => 77,  207 => 76,  203 => 74,  200 => 73,  194 => 70,  189 => 69,  186 => 68,  178 => 66,  175 => 65,  167 => 63,  165 => 62,  162 => 61,  159 => 60,  151 => 58,  149 => 57,  142 => 56,  134 => 54,  132 => 53,  126 => 52,  119 => 50,  113 => 49,  107 => 48,  100 => 46,  94 => 45,  88 => 44,  85 => 43,  77 => 41,  74 => 40,  66 => 38,  64 => 37,  58 => 36,  52 => 35,  45 => 34,  43 => 33,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "modules/webform-8.x-5.2/webform/templates/webform-submission-information.html.twig", "/var/www/html/modules/webform-8.x-5.2/webform/templates/webform-submission-information.html.twig");
    }
}
