<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7 ]> <html class="no-js ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">

        <base href="<?php echo base_url() . index_page(); if (index_page() !== '') { echo '/'; } echo $this->config->item('skylight_url_prefix'); echo '/' ?>">

        <title><?php echo $page_title; ?></title>

        <link rel="pingback" href="<?php echo base_url() . index_page(); if (index_page() !== '') { echo '/'; } echo 'pingback'; ?>" />

		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
		Remove this if you use the .htaccess -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="description" content="">
		<meta name="author" content="">
        <meta name="title" content="<?= str_replace('"', '&quot;', $page_title); ?>">

		<!-- Mobile viewport optimized: j.mp/bplateviewport -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
		<link rel="shortcut icon" href="./favicon.ico">
		<link rel="apple-touch-icon" href="./apple-touch-icon.png">


		<!-- CSS: implied media="all" -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>theme/uoalibrary/css/style.css?v=2">

		<!-- Uncomment if you are specifically targeting less enabled mobile browsers
		<link rel="stylesheet" media="handheld" href="css/handheld.css?v=2">  -->

		<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
		<script src="<?php echo base_url(); ?>assets/modernizr/modernizr-1.7.min.js"></script>

        <?php if (isset($solr)) { ?><link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
        <link rel="schema.DCTERMS" href="http://purl.org/dc/terms/" />

        <?php

            foreach($metafields as $label => $element) {
                $field = "";
                if(isset($recorddisplay[$label])) {
                    $field = $recorddisplay[$label];
                    if(isset($solr[$field])) {
                        $values = $solr[$field];
                        foreach($values as $value) {
                            ?>  <meta name="<?php echo $element; ?>" content="<?php echo $value; ?>"> <?php
                        }
                    }
                }
            }

        } ?>

        <!-- Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo $ga_code ?>"></script>
    	<script>
      		window.dataLayer = window.dataLayer || [];
      		function gtag(){dataLayer.push(arguments);}
      		gtag('js', new Date());

      		gtag('config', '<?php echo $ga_code ?>');
    	</script>	
        <!-- End Google Analytics -->

	</head>

	<body>

		<div id="container">

			<header>
				<p class="collection-title"><?php echo $site_title ?></p>
				<a href="http://www.library.auckland.ac.nz/" class="logo">The University of Auckland Library</a>
                <form action="./redirect/" method="post">
                    <fieldset class="search">
                        <input type="text" name="q" value="<?php if (isset($searchbox_query)) echo urldecode($searchbox_query); ?>" id="q" />
                        <input type="submit" name="submit_search" class="btn" value="Search" id="submit_search" />
                        <a href="./advanced" class="advanced">Advanced search</a>
                    </fieldset>
                </form>
				<nav class="header-links">
					<a href="./">Home</a>
					<a href="./about/">About this site</a>
					<a href="./feedback/" class="last">Feedback</a>
				</nav>
			</header>

            <div id="main" role="main" class="clearfix">
