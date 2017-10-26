<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8006b7f8fc2624f01b3de6d52decc5ff3e8fa8050fc8435cce232d4e154540ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_622ee79f09d3f2ae22d62aa9c4287ac21227d0fd9f7fca5ee557fd031a8a3b42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622ee79f09d3f2ae22d62aa9c4287ac21227d0fd9f7fca5ee557fd031a8a3b42->enter($__internal_622ee79f09d3f2ae22d62aa9c4287ac21227d0fd9f7fca5ee557fd031a8a3b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_fed465ee2ceff5fc8a36018782dde06e56610a89ab7d3ecc1f138b7766b28ff7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fed465ee2ceff5fc8a36018782dde06e56610a89ab7d3ecc1f138b7766b28ff7->enter($__internal_fed465ee2ceff5fc8a36018782dde06e56610a89ab7d3ecc1f138b7766b28ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_622ee79f09d3f2ae22d62aa9c4287ac21227d0fd9f7fca5ee557fd031a8a3b42->leave($__internal_622ee79f09d3f2ae22d62aa9c4287ac21227d0fd9f7fca5ee557fd031a8a3b42_prof);

        
        $__internal_fed465ee2ceff5fc8a36018782dde06e56610a89ab7d3ecc1f138b7766b28ff7->leave($__internal_fed465ee2ceff5fc8a36018782dde06e56610a89ab7d3ecc1f138b7766b28ff7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_868dd1d077870fd1c2b57a63278481b2f8ecc5988df8e6c235c4fa9e30113b34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_868dd1d077870fd1c2b57a63278481b2f8ecc5988df8e6c235c4fa9e30113b34->enter($__internal_868dd1d077870fd1c2b57a63278481b2f8ecc5988df8e6c235c4fa9e30113b34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c6b9d104bbe152e8f1d0dc4615ce1b10b56a7774870aa308e1882e1f1454f1d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b9d104bbe152e8f1d0dc4615ce1b10b56a7774870aa308e1882e1f1454f1d2->enter($__internal_c6b9d104bbe152e8f1d0dc4615ce1b10b56a7774870aa308e1882e1f1454f1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_c6b9d104bbe152e8f1d0dc4615ce1b10b56a7774870aa308e1882e1f1454f1d2->leave($__internal_c6b9d104bbe152e8f1d0dc4615ce1b10b56a7774870aa308e1882e1f1454f1d2_prof);

        
        $__internal_868dd1d077870fd1c2b57a63278481b2f8ecc5988df8e6c235c4fa9e30113b34->leave($__internal_868dd1d077870fd1c2b57a63278481b2f8ecc5988df8e6c235c4fa9e30113b34_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5052e4d1dc22315745bc17b9c46dcc77ce56076af0c4c1e9951373f4621cf6b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5052e4d1dc22315745bc17b9c46dcc77ce56076af0c4c1e9951373f4621cf6b4->enter($__internal_5052e4d1dc22315745bc17b9c46dcc77ce56076af0c4c1e9951373f4621cf6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_232694c2ea9241db51124c051f368779f3e86b0939e65efefe4084a3f2744011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232694c2ea9241db51124c051f368779f3e86b0939e65efefe4084a3f2744011->enter($__internal_232694c2ea9241db51124c051f368779f3e86b0939e65efefe4084a3f2744011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_232694c2ea9241db51124c051f368779f3e86b0939e65efefe4084a3f2744011->leave($__internal_232694c2ea9241db51124c051f368779f3e86b0939e65efefe4084a3f2744011_prof);

        
        $__internal_5052e4d1dc22315745bc17b9c46dcc77ce56076af0c4c1e9951373f4621cf6b4->leave($__internal_5052e4d1dc22315745bc17b9c46dcc77ce56076af0c4c1e9951373f4621cf6b4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e80591cfc374977bda3303984658a05df6fabb067fb878b809c9848318b2afe2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e80591cfc374977bda3303984658a05df6fabb067fb878b809c9848318b2afe2->enter($__internal_e80591cfc374977bda3303984658a05df6fabb067fb878b809c9848318b2afe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_386c0b80fe449db7833b66e8d7c4d00518bf7e57c75a23a569df691f72cf2c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386c0b80fe449db7833b66e8d7c4d00518bf7e57c75a23a569df691f72cf2c42->enter($__internal_386c0b80fe449db7833b66e8d7c4d00518bf7e57c75a23a569df691f72cf2c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_386c0b80fe449db7833b66e8d7c4d00518bf7e57c75a23a569df691f72cf2c42->leave($__internal_386c0b80fe449db7833b66e8d7c4d00518bf7e57c75a23a569df691f72cf2c42_prof);

        
        $__internal_e80591cfc374977bda3303984658a05df6fabb067fb878b809c9848318b2afe2->leave($__internal_e80591cfc374977bda3303984658a05df6fabb067fb878b809c9848318b2afe2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/devmob/PhpstormProjects/samples/mava/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
