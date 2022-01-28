<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/zen/STARTERKIT/templates/layout/html.html.twig */
class __TwigTemplate_57e687c6f199932090ce7fb662d3a5a1c1b03235f0c78e31172ecc5e212e154c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@STARTERKIT/base/root/base-root.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => [0 => ((        // line 29
($context["logged_in"] ?? null)) ? ("is-logged-in-user") : ("")), 1 => (( !        // line 30
($context["root_path"] ?? null)) ? ("is-path-frontpage") : (("is-path-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["root_path"] ?? null), 30, $this->source))))), 2 => ((        // line 31
($context["node_type"] ?? null)) ? (("is-page-node-type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["node_type"] ?? null), 31, $this->source)))) : ("")), 3 => ((        // line 32
($context["db_offline"] ?? null)) ? ("is-db-offline") : (""))]], "method", false, false, true, 28);
        // line 35
        $context["title"] = $this->extensions['Drupal\Core\Template\TwigExtension']->safeJoin($this->env, $this->sandbox->ensureToStringAllowed(($context["head_title"] ?? null), 35, $this->source), " | ");
        // line 1
        $this->parent = $this->loadTemplate("@STARTERKIT/base/root/base-root.twig", "themes/zen/STARTERKIT/templates/layout/html.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 37
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        echo "  <head-placeholder token=\"";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 38, $this->source));
        echo "\">
  ";
        // line 39
        $this->displayParentBlock("head", $context, $blocks);
        echo "
  <css-placeholder token=\"";
        // line 40
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 40, $this->source));
        echo "\">
  <js-placeholder token=\"";
        // line 41
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 41, $this->source));
        echo "\">
";
    }

    // line 44
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 45
        echo "  ";
        // line 46
        $this->loadTemplate("@STARTERKIT/navigation/skip-link/skip-link.twig", "themes/zen/STARTERKIT/templates/layout/html.html.twig", 46)->display(twig_to_array(["modifier_class" => "visually-hidden visually-hidden--focusable", "url" => "#main-content", "text" => t("Skip to main content")]));
        // line 52
        echo "  ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_top"] ?? null), 52, $this->source), "html", null, true);
        echo "
  ";
        // line 53
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page"] ?? null), 53, $this->source), "html", null, true);
        echo "
  ";
        // line 54
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["page_bottom"] ?? null), 54, $this->source), "html", null, true);
        echo "
  <js-bottom-placeholder token=\"";
        // line 55
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->sandbox->ensureToStringAllowed(($context["placeholder_token"] ?? null), 55, $this->source));
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "themes/zen/STARTERKIT/templates/layout/html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 55,  98 => 54,  94 => 53,  89 => 52,  87 => 46,  85 => 45,  81 => 44,  75 => 41,  71 => 40,  67 => 39,  62 => 38,  58 => 37,  53 => 1,  51 => 35,  49 => 32,  48 => 31,  47 => 30,  46 => 29,  45 => 28,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/zen/STARTERKIT/templates/layout/html.html.twig", "C:\\xampp\\htdocs\\drupal\\themes\\zen\\STARTERKIT\\templates\\layout\\html.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 28, "include" => 46);
        static $filters = array("clean_class" => 30, "safe_join" => 35, "raw" => 38, "t" => 49, "escape" => 52);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'include'],
                ['clean_class', 'safe_join', 'raw', 't', 'escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
