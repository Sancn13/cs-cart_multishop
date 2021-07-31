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

/* __string_template__84c00f716d98a520b6811bde739df0494788309be28a63fd2feb33c06208ed73 */
class __TwigTemplate_a04a46987d0c28a75c5e40ad42ead58ae27f1ffa8e33526e04acd41d01590fb9 extends \Twig\Template
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
        echo "<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "ship_to");
        echo "</h2>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        <strong>";
        // line 3
        echo $this->getAttribute(($context["u"] ?? null), "firstname", []);
        echo " ";
        echo $this->getAttribute(($context["u"] ?? null), "lastname", []);
        echo "</strong>
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 6
        echo $this->getAttribute(($context["u"] ?? null), "s_address", []);
        echo " <br>";
        echo $this->getAttribute(($context["u"] ?? null), "s_address_2", []);
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 9
        echo $this->getAttribute(($context["u"] ?? null), "s_city", []);
        echo ", ";
        echo $this->getAttribute(($context["u"] ?? null), "s_state_descr", []);
        echo " ";
        echo $this->getAttribute(($context["u"] ?? null), "s_zipcode", []);
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        ";
        // line 12
        echo $this->getAttribute(($context["u"] ?? null), "s_country_descr", []);
        echo "
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        <bdi>";
        // line 15
        echo $this->getAttribute(($context["u"] ?? null), "phone", []);
        echo "</bdi>
    </p>
";
    }

    public function getTemplateName()
    {
        return "__string_template__84c00f716d98a520b6811bde739df0494788309be28a63fd2feb33c06208ed73";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 15,  62 => 12,  52 => 9,  44 => 6,  36 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h2 style=\"margin: 0px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; color: #444444; text-transform: uppercase; padding-bottom: 20px; border-bottom: 3px solid #e8e8e8; margin-bottom: 20px;\">{{__(\"ship_to\")}}</h2>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        <strong>{{u.firstname}} {{u.lastname}}</strong>
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        {{u.s_address}} <br>{{u.s_address_2}}
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        {{u.s_city}}, {{u.s_state_descr}} {{u.s_zipcode}}
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        {{u.s_country_descr}}
    </p>
    <p style=\"margin: 0px; padding-bottom: 5px; font-family: Helvetica, Arial, sans-serif;\">
        <bdi>{{u.phone}}</bdi>
    </p>
", "__string_template__84c00f716d98a520b6811bde739df0494788309be28a63fd2feb33c06208ed73", "");
    }
}
