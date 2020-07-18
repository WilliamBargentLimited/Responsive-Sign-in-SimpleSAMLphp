<?php

$this->data['htmlinject'] = [
    'htmlContentPre' => [],
    'htmlContentPost' => [],
    'htmlContentHead' => [],
];

if (array_key_exists('pageid', $this->data)) {
    $hookinfo = [
        'pre' => &$this->data['htmlinject']['htmlContentPre'],
        'post' => &$this->data['htmlinject']['htmlContentPost'],
        'head' => &$this->data['htmlinject']['htmlContentHead'],
        'page' => $this->data['pageid']
    ];
    SimpleSAML\Module::callHooks('htmlinject', $hookinfo);
}

header('X-Frame-Options: SAMEORIGIN');

$onLoad = '';
if (array_key_exists('autofocus', $this->data)) {
    $onLoad .= ' onload="SimpleSAML_focus(\'' . $this->data['autofocus'] . '\');"';
}
?>
 
<!DOCTYPE html>
<html lang="en-gb">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <meta name="googlebot" content="noindex, nofollow">
        <meta http-equiv="Cache-control" content="public">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sign-in."/>
        <meta name="keywords" content="Sign-in Signin Login William Bargent WB"/>
        <meta name="author" content="William Bargent">
        <meta name="application-name" content="Sign-in - William Bargent"/>
        <meta name="title" content="Sign-in - William Bargent"/>
        <title>Sign-in - William Bargent</title>

        <link rel="dns-prefetch" href="https://assets.williambargent.co.uk">
        <!--<link rel="dns-prefetch" href="https://fonts.googleapis.com">-->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">

        <link rel="manifest" href="https://assets.williambargent.co.uk/favicon/manifest.json">
        <link rel="icon" type="image/png" sizes="32x32" href="https://assets.williambargent.co.uk/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="https://assets.williambargent.co.uk/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="https://assets.williambargent.co.uk/favicon/favicon-16x16.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="https://assets.williambargent.co.uk/favicon/android-icon-192x192.png">
        <link rel="apple-touch-icon" sizes="57x57" href="https://assets.williambargent.co.uk/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="https://assets.williambargent.co.uk/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="https://assets.williambargent.co.uk/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="https://assets.williambargent.co.uk/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="https://assets.williambargent.co.uk/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="https://assets.williambargent.co.uk/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="https://assets.williambargent.co.uk/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="https://assets.williambargent.co.uk/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="https://assets.williambargent.co.uk/favicon/apple-icon-180x180.png">
        <meta name="msapplication-TileImage" content="https://assets.williambargent.co.uk/favicon/ms-icon-144x144.png">
        <meta name="msapplication-TileColor" content="#7437d0">
        <meta name="theme-color" content="#7437d0" />

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="https://assets.williambargent.co.uk/third-party/fontawesome-5.12.1/css/fontawesome.min.css">
        <link rel="stylesheet" type="text/css" href="https://assets.williambargent.co.uk/sign-in/v1/css/main.css">
    </head>
    <body<?= $onLoad; ?>>
        <div id="page-wrapper">
            <main>
                <div class="fluid-container">
                    <div class="card">
                        <div class="card-header">
                            <div class="brand">
                                <a href="https://williambargent.co.uk">< WilliamBargent /></a>
                            </div> <!-- END brand -->
                        </div> <!-- END card-header -->
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                    <?php
                                        if (!empty($this->data['htmlinject']['htmlContentPre'])) {
                                            foreach ($this->data['htmlinject']['htmlContentPre'] as $c) {
                                                echo $c;
                                            }
                                        }
                                        $config = \SimpleSAML\Configuration::getInstance();
                                        if(! $config->getBoolean('production', true)) {
                                            echo '<div class="caution">' . $this->t('{preprodwarning:warning:warning}'). '</div>';
                                        }
