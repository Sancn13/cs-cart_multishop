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

/* __string_template__d85eacea56d41f8742a8ebe234799cc345f85b244daeb1c483152476198b859e */
class __TwigTemplate_27f2080e6a30cbbabe8236932a9a3c021019e24a3f0060a039b9ddc8011bb00f extends \Twig\Template
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
        if ((($context["status_to"] ?? null) == "D")) {
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_disabled_subj");
        } elseif ((($context["status_to"] ?? null) == "P")) {
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_pending_subj");
        } elseif ((($context["status_to"] ?? null) == "A")) {
            echo "    ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "text_company_status_active_subj");
        }
    }

    public function getTemplateName()
    {
        return "__string_template__d85eacea56d41f8742a8ebe234799cc345f85b244daeb1c483152476198b859e";
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
        return new Source("{% if (status_to == \"D\") %}    {{ __(\"text_company_status_disabled_subj\") }}{% elseif status_to == \"P\" %}    {{ __(\"text_company_status_pending_subj\") }}{% elseif (status_to == \"A\") %}    {{ __(\"text_company_status_active_subj\") }}{% endif %}", "__string_template__d85eacea56d41f8742a8ebe234799cc345f85b244daeb1c483152476198b859e", "");
    }
}
