<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_001ec319e56b05cdf9c9542561587dc367de6b139dec9406243e318a64bdc777 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9802ab7e58d8c7a24e812758226734754c43754cf125abb6ba1eea6a95408ab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9802ab7e58d8c7a24e812758226734754c43754cf125abb6ba1eea6a95408ab3->enter($__internal_9802ab7e58d8c7a24e812758226734754c43754cf125abb6ba1eea6a95408ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d5e9ef640cb6aa9319a0c94b39e50f7a83207c7a0cc2f941852a96ef28e79743 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e9ef640cb6aa9319a0c94b39e50f7a83207c7a0cc2f941852a96ef28e79743->enter($__internal_d5e9ef640cb6aa9319a0c94b39e50f7a83207c7a0cc2f941852a96ef28e79743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9802ab7e58d8c7a24e812758226734754c43754cf125abb6ba1eea6a95408ab3->leave($__internal_9802ab7e58d8c7a24e812758226734754c43754cf125abb6ba1eea6a95408ab3_prof);

        
        $__internal_d5e9ef640cb6aa9319a0c94b39e50f7a83207c7a0cc2f941852a96ef28e79743->leave($__internal_d5e9ef640cb6aa9319a0c94b39e50f7a83207c7a0cc2f941852a96ef28e79743_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_31eb0b89596dd69fa0418013cf3067d6c404e84489d4ab33ef545ac175e6908e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31eb0b89596dd69fa0418013cf3067d6c404e84489d4ab33ef545ac175e6908e->enter($__internal_31eb0b89596dd69fa0418013cf3067d6c404e84489d4ab33ef545ac175e6908e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_3f6e965c59c2485b300ac6dffe53457ffb1cf3324ff801f6c4f90810e0f9a2fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f6e965c59c2485b300ac6dffe53457ffb1cf3324ff801f6c4f90810e0f9a2fc->enter($__internal_3f6e965c59c2485b300ac6dffe53457ffb1cf3324ff801f6c4f90810e0f9a2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_3f6e965c59c2485b300ac6dffe53457ffb1cf3324ff801f6c4f90810e0f9a2fc->leave($__internal_3f6e965c59c2485b300ac6dffe53457ffb1cf3324ff801f6c4f90810e0f9a2fc_prof);

        
        $__internal_31eb0b89596dd69fa0418013cf3067d6c404e84489d4ab33ef545ac175e6908e->leave($__internal_31eb0b89596dd69fa0418013cf3067d6c404e84489d4ab33ef545ac175e6908e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/Users/devmob/PhpstormProjects/samples/mava/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
