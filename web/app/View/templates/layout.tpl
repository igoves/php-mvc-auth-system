<!DOCTYPE html>
<html lang="{$lang}">
<head>
    {block name=title}{/block}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/images/favicon.png" rel="shortcut icon">
    <link rel="stylesheet" href="/assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/nprogress/nprogress.css">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body class="bg-light">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{$main_url}">{APP_NAME}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul id="top_menu" class="navbar-nav mr-auto">
                {if !$is_logged}
                    <li class="nav-item">
                        <a class="nav-link" href="{$lang_prefix}/registration">{#registration#}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{$lang_prefix}/login">{#login#}</a>
                    </li>
                {/if}
            </ul>
            <ul id="lang_menu" class="navbar-nav my-2 my-lg-0 ">
                <li class="nav-item">
                    <a data-ajax="no" class="nav-link" href="#">{#eng#}</a>
                </li>
                <li class="nav-item">
                    <a data-ajax="no" class="nav-link" href="#">{#rus#}</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-3">
    <div id="mc">
        {if $danger}
            <div class="alert alert-danger" role="alert"><strong>{#danger#}!</strong> {$danger}</div>
        {/if}
        {if $info}
            <div class="alert alert-info" role="alert"><strong>{#info#}!</strong> {$info}</div>
        {/if}
        {if $success}
            <div class="alert alert-success" role="alert"><strong>{#success#}!</strong> {$success}</div>
        {/if}
        {if $warning}
            <div class="alert alert-warning" role="alert"><strong>{#warning#}!</strong> {$warning}</div>
        {/if}
        {if $errors}
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <h4>{#errors#}:</h4>
                <ul>
                    {foreach from=$errors item=values}
                        {foreach from=$values item=value}
                            <li>{$value}</li>
                        {/foreach}
                    {/foreach}
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        {/if}
        {block name=content}{/block}
    </div>
</div>

<script>var lang = '{$lang}';</script>
<script src="/assets/jquery-3.4.1.min.js"></script>
<script src="/assets/bootstrap/bootstrap.min.js"></script>
<script src="/assets/nprogress/nprogress.js"></script>
<script src="/assets/jquery.validate.min.js"></script>
<script src="/assets/jquery.mask.min.js"></script>
<script src="/assets/jquery.pjax.js"></script>
<script src="/js/main.js"></script>
</body>
</html>
