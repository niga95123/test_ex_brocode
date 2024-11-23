<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* developer/show.html.twig */
class __TwigTemplate_9e2f22c129654a08ec77079545f17c3e extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "developer/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "developer/show.html.twig"));

        // line 1
        yield "<!DOCTYPE html>

<title>Developer</title>

";
        // line 5
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "    <h1>Developer</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["developer"]) || array_key_exists("developer", $context) ? $context["developer"] : (function () { throw new RuntimeError('Variable "developer" does not exist.', 12, $this->source); })()), "id", [], "any", false, false, false, 12), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>FullName</th>
                <td>";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["developer"]) || array_key_exists("developer", $context) ? $context["developer"] : (function () { throw new RuntimeError('Variable "developer" does not exist.', 16, $this->source); })()), "fullName", [], "any", false, false, false, 16), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["developer"]) || array_key_exists("developer", $context) ? $context["developer"] : (function () { throw new RuntimeError('Variable "developer" does not exist.', 20, $this->source); })()), "position", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["developer"]) || array_key_exists("developer", $context) ? $context["developer"] : (function () { throw new RuntimeError('Variable "developer" does not exist.', 24, $this->source); })()), "email", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["developer"]) || array_key_exists("developer", $context) ? $context["developer"] : (function () { throw new RuntimeError('Variable "developer" does not exist.', 28, $this->source); })()), "phone", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["developer"]) || array_key_exists("developer", $context) ? $context["developer"] : (function () { throw new RuntimeError('Variable "developer" does not exist.', 32, $this->source); })()), "age", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
            </tr>
            <tr>
                <th>Salary</th>
                <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["developer"]) || array_key_exists("developer", $context) ? $context["developer"] : (function () { throw new RuntimeError('Variable "developer" does not exist.', 36, $this->source); })()), "salary", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
            </tr>
        </tbody>
    </table>

    <a href=\"";
        // line 41
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_developer_index");
        yield "\">back to list</a>

    <a href=\"";
        // line 43
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_developer_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["developer"]) || array_key_exists("developer", $context) ? $context["developer"] : (function () { throw new RuntimeError('Variable "developer" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)]), "html", null, true);
        yield "\">edit</a>

    ";
        // line 45
        yield Twig\Extension\CoreExtension::include($this->env, $context, "developer/_delete_form.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "developer/show.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  146 => 45,  141 => 43,  136 => 41,  128 => 36,  121 => 32,  114 => 28,  107 => 24,  100 => 20,  93 => 16,  86 => 12,  78 => 6,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>

<title>Developer</title>

{% block body %}
    <h1>Developer</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ developer.id }}</td>
            </tr>
            <tr>
                <th>FullName</th>
                <td>{{ developer.fullName }}</td>
            </tr>
            <tr>
                <th>Position</th>
                <td>{{ developer.position }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ developer.email }}</td>
            </tr>
            <tr>
                <th>Phone</th>
                <td>{{ developer.phone }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ developer.age }}</td>
            </tr>
            <tr>
                <th>Salary</th>
                <td>{{ developer.salary }}</td>
            </tr>
        </tbody>
    </table>

    <a href=\"{{ path('app_developer_index') }}\">back to list</a>

    <a href=\"{{ path('app_developer_edit', {'id': developer.id}) }}\">edit</a>

    {{ include('developer/_delete_form.html.twig') }}
{% endblock %}
", "developer/show.html.twig", "/var/www/ex/templates/developer/show.html.twig");
    }
}
