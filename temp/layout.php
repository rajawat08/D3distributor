<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('vendor/foundation/css/foundation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/foundation-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/highlight.css') }}">
    <link rel="stylesheet" href="{{ asset('css/actionbox.css') }}">
    <title>TMS{% block title %}{% endblock %}</title>
</head>
<body>
<div class="row">
   {% include('layouts.nav') %}
</div>

{% if (session_has('flash_notice')) %}
    <div class="row">
        <div class="large-12 columns">
            <div class="alert-box radius">{{ session_get('flash_notice') }}</div>
        </div>
    </div>
{% endif %}

{% if (session_has('flash_error')) %}
    <div class="row">
        <div class="large-12 columns">
            <div class="alert-box warning radius">{{ session_get('flash_error') }}</div>
        </div>
    </div>
{% endif %}

<div class="row">
    <div class="large-12 columns">
        <div class="left">
            <h1>{% block heading %}{% endblock %}</h1>
        </div>
    </div>
</div>

{% block content %}{% endblock %}

<div class="row">
    <div class="large-12 columns">
        <p class="text-center">
            <small>Copyright reserved &copy; Personera</small>
        </p>
    </div>
</div>

<script src="{{ url_asset('vendor/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ url_asset('vendor/foundation/js/foundation.js') }}"></script>
<script src="{{ url_asset('vendor/foundation/js/foundation/foundation.abide.js') }}"></script>
<script>
    $(document).foundation();
</script>
{% block javascripts %}{% endblock %}

</body>
</html>








<div class="large-12 columns">
        <nav class="top-bar">
            <section class="top-bar-section">
                <ul class="right">
                    {% if (auth_check()) %}
                        <li>{{ html_link('users', 'Users') }} </li>
                        <li>{{ html_link('jobs', 'Jobs') }} </li>
                        <li class="has-dropdown not-click">
                            {{ html_link('batch', 'Batch') }}
                            <ul class="dropdown">
                              <li>{{ html_link('batch/pdfform', 'PDF') }}</li>
                              <li><a href="#">{{ html_link('batch/ccform', 'Color Centric') }}</a></li>
                             
                            </ul>
                        </li>
                        <li>{{ html_link('auditlogs', 'Logs') }} </li>
                        <li>{{ html_link('fonts', 'Fonts') }} </li>
                        <li>{{ html_link('designs', 'Designs') }}</li>
                        <li>{{ html_link('templates', 'Templates') }}</li>
                         <li>{{ html_link('products', 'Products') }}</li>
                        <li>{{ html_link('orders', 'Orders') }} </li>
                        <li>{{ html_link('users/logout', 'Logout [' ~ auth_user().username ~ ']') }}</li>
                    {% else %}
                        <li>{{ html_link('users/login', 'Login') }}</li>
                    {% endif %}
                       
                    
                </ul>
            </section>
        </nav>
        <hr/>
    </div>