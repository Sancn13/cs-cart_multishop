<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__f2322ce41b73850daec63de4d32ef247ba6ca64eaba895956a3c6de0e1486be0 */
class __TwigTemplate_5b5b8d60c05410dd085982d5b176cfec67d48dd187dd89514eb384814ef5aa2f extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        if (((((($context["status_from"] ?? null) == "A") && (($context["status_to"] ?? null) == "D")) || ((($context["status_from"] ?? null) == "P") && (($context["status_to"] ?? null) == "D"))) || ((($context["status_from"] ?? null) == "D") && (($context["status_to"] ?? null) == "P")))) {
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_disabled_subj");
        } elseif (((($context["status_from"] ?? null) == "A") && (($context["status_to"] ?? null) == "P"))) {
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_pending_subj");
        } elseif (((($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "A"))) {
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_new_to_active_subj");
        } elseif (((($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "D"))) {
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_new_to_disable_subj");
        } elseif (((($context["status_from"] ?? null) == "N") && (($context["status_to"] ?? null) == "P"))) {
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_new_to_active_subj");
        } elseif ((((($context["status_from"] ?? null) == "P") && (($context["status_to"] ?? null) == "A")) || ((($context["status_from"] ?? null) == "D") && (($context["status_to"] ?? null) == "A")))) {
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_active_subj");
        }
    }

    public function getTemplateName()
    {
        return "__string_template__f2322ce41b73850daec63de4d32ef247ba6ca64eaba895956a3c6de0e1486be0";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{% if (status_from == \"A\" and status_to == \"D\") or (status_from == \"P\" and status_to == \"D\") or (status_from == \"D\" and status_to == \"P\") %}    {{ __(\"text_company_status_disabled_subj\") }}{% elseif status_from == \"A\" and status_to == \"P\" %}    {{ __(\"text_company_status_pending_subj\") }}{% elseif status_from == \"N\" and status_to == \"A\" %}    {{ __(\"text_company_status_new_to_active_subj\") }}{% elseif status_from == \"N\" and status_to == \"D\" %}    {{ __(\"text_company_status_new_to_disable_subj\") }}{% elseif status_from == \"N\" and status_to == \"P\" %}    {{ __(\"text_company_status_new_to_active_subj\") }}{% elseif (status_from == \"P\" and status_to == \"A\") or (status_from == \"D\" and status_to == \"A\") %}    {{ __(\"text_company_status_active_subj\") }}{% endif %}", "__string_template__f2322ce41b73850daec63de4d32ef247ba6ca64eaba895956a3c6de0e1486be0", "");
    }
}
