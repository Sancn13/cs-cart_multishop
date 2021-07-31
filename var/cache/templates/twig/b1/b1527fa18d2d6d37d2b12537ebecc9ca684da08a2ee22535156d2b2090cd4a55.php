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

/* __string_template__553b3f3a56fdb1b4b6ccda6bf18b594eac5d89a7685721f2145cce3c0170de6b */
class __TwigTemplate_644158dd87a2fc2ccb64db8951a4b028dd96b87adef17ce88bb3444447f4e50f extends \Twig\Template
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
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "header", ["title" => $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "new_profile_notification")]);
        echo "
    ";
        // line 2
        if ($this->getAttribute(($context["user_data"] ?? null), "firstname", [])) {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello_name", ["[name]" => $this->getAttribute(($context["user_data"] ?? null), "firstname", [])]);
            echo " ";
        } else {
            echo " ";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "hello");
            echo ", ";
        }
        // line 3
        echo "    <br>
    <br>
    ";
        // line 5
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "create_profile_notification_header");
        echo "
    <br>
    <br>
    <table border=\"0\" class=\"info\">
      <tr>
        <td align=\"right\"><b>";
        // line 10
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "login_url");
        echo ":</b></td>
        <td><a href=\"";
        // line 11
        echo ($context["login_url"] ?? null);
        echo "\">";
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->punyDecodeFilter(($context["login_url"] ?? null));
        echo "</a></td>
      </tr>
      <tr>
        <td align=\"right\"><b>";
        // line 14
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "email");
        echo ":</b></td>
        <td><a>";
        // line 15
        echo $this->getAttribute(($context["user_data"] ?? null), "email", []);
        echo "</a></td>
      </tr>
      <tr>
        <td align=\"right\"><b>";
        // line 18
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "password");
        echo ":</b></td>
        <td>
";
        // line 20
        if (($context["password"] ?? null)) {
            // line 21
            echo "    ";
            echo ($context["password"] ?? null);
            echo "
";
        } else {
            // line 23
            echo "    *********** (<a href=\"";
            echo ($context["forgot_pass_url"] ?? null);
            echo "\">";
            echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->translateFunction($this->env, $context, "forgot_password_question");
            echo "</a>)
";
        }
        // line 24
        echo "</td>
      </tr>
    </table>
  ";
        // line 27
        echo $this->env->getExtension('Tygh\Twig\TwigCoreExtension')->snippetFunction($this->env, $context, "footer");
    }

    public function getTemplateName()
    {
        return "__string_template__553b3f3a56fdb1b4b6ccda6bf18b594eac5d89a7685721f2145cce3c0170de6b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  99 => 24,  91 => 23,  85 => 21,  83 => 20,  78 => 18,  72 => 15,  68 => 14,  60 => 11,  56 => 10,  48 => 5,  44 => 3,  34 => 2,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("{{ snippet(\"header\", {\"title\": __(\"new_profile_notification\")} ) }}
    {% if user_data.firstname %} {{__(\"hello_name\", {\"[name]\" : user_data.firstname})}} {% else %} {{ __(\"hello\") }}, {% endif %}
    <br>
    <br>
    {{ __(\"create_profile_notification_header\") }}
    <br>
    <br>
    <table border=\"0\" class=\"info\">
      <tr>
        <td align=\"right\"><b>{{ __(\"login_url\") }}:</b></td>
        <td><a href=\"{{ login_url }}\">{{ login_url|puny_decode }}</a></td>
      </tr>
      <tr>
        <td align=\"right\"><b>{{ __(\"email\") }}:</b></td>
        <td><a>{{ user_data.email }}</a></td>
      </tr>
      <tr>
        <td align=\"right\"><b>{{ __(\"password\") }}:</b></td>
        <td>
{% if password %}
    {{ password }}
{% else %}
    *********** (<a href=\"{{ forgot_pass_url }}\">{{ __(\"forgot_password_question\") }}</a>)
{% endif %}</td>
      </tr>
    </table>
  {{ snippet(\"footer\") }}", "__string_template__553b3f3a56fdb1b4b6ccda6bf18b594eac5d89a7685721f2145cce3c0170de6b", "");
    }
}
