<?php
/**
 * Template Name: Recorded Talks
 */
?>
<!DOCTYPE HTML>
<!--
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Recorded Talks | Hao Cao</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta
			name="description"
			content="Recorded invited talks by Hao Cao on planetary interiors, magnetic fields, and dynamo science."
		/>
		<link rel="stylesheet" href="<?php echo esc_url(hao_cao_research_theme_uri('assets/css/main.css?v=20260808-heading-spacing-preview')); ?>" />
		<noscript><link rel="stylesheet" href="<?php echo esc_url(hao_cao_research_theme_uri('assets/css/noscript.css')); ?>" /></noscript>
			<?php wp_head(); ?>
	</head>
	<body <?php body_class('no-sidebar is-preload'); ?>>
		<?php wp_body_open(); ?>
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="<?php echo esc_url(hao_cao_research_page_url('')); ?>" id="logo">Hao Cao</a></h1>
								<p>Planetary magnetism, interiors,<span class="tagline-wrap"> and space environment</span></p>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="<?php echo esc_url(hao_cao_research_page_url('')); ?>">Home</a></li>
								<li><a href="<?php echo esc_url(hao_cao_research_page_url('research')); ?>">Research</a></li>
								<li><a href="<?php echo esc_url(hao_cao_research_page_url('publications')); ?>">Publications</a></li>
								<li><a href="<?php echo esc_url(hao_cao_research_page_url('team')); ?>">Team</a></li>
								<li><a href="<?php echo esc_url(hao_cao_research_page_url('opportunities')); ?>">Opportunities</a></li>
								<li><a href="<?php echo esc_url(hao_cao_research_page_url('teaching')); ?>">Teaching</a></li>
								<li><a href="<?php echo esc_url(hao_cao_research_page_url('curriculum-vitae')); ?>">CV</a></li>
								<li class="active"><a href="<?php echo esc_url(hao_cao_research_page_url('recorded-talks')); ?>">Recorded Talks</a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<div class="wrapper">

					<div class="container">
						<article id="main" class="simple-content-page recorded-talks-page">
							<header>
								<h2>Recorded Talks</h2>
								<p>
									Selected recorded invited talks by Hao Cao on planetary magnetic fields, interiors, and dynamo
									science.
								</p>
							</header>
							<?php if (hao_cao_research_has_editor_content()) : ?>
								<?php hao_cao_research_the_editor_content('wordpress-page-content recorded-talks-editor-content'); ?>
							<?php else : ?>

							<section class="publication-section" id="invited-talks">
								<header>
									<h3>Invited Talks</h3>
								</header>
								<div class="publication-list">
									<article class="publication-entry">
										<p class="publication-authors">Invited 2025 &middot; IPAM/MathInstitutes</p>
										<p class="publication-title">
											<a href="https://www.mathinstitutes.org/videos/22687" target="_blank" rel="noopener">Giant Planet Interior Dynamics: Recent Progress and Open Questions</a>
										</p>
										<p class="publication-details">
											Recorded January 31, 2025. Hao Cao discusses recent progress and open questions in
											giant-planet interior dynamics.
										</p>
									</article>

									<article class="publication-entry">
										<p class="publication-authors">Invited 2022 &middot; INI</p>
										<p class="publication-title">
											<a href="https://www.youtube.com/watch?v=SRmGf0AUHR8" target="_blank" rel="noopener">The Magnetic Fields of Mercury, Ganymede, and Saturn</a>
										</p>
										<p class="publication-details">
											Recorded September 13, 2022. Hao Cao presents comparative planetary magnetic-field
											science for Mercury, Ganymede, and Saturn.
										</p>
									</article>
								</div>
							</section>
							<?php endif; ?>
						</article>
					</div>

				</div>

			<!-- Footer -->
				<div id="footer">
					<div class="container">
						<div class="row">
							<div class="col-12">

								<!-- Contact -->
									<section class="contact">
										<header>
											<h3>Contact</h3>
										</header>
										<p>
											Hao Cao<br />
											Associate Professor, Department of Earth, Planetary, and Space Sciences<br />
											University of California, Los Angeles<br />
											Email: hcao [at] epss.ucla.edu | Tel: <a href="tel:+13107949467">310-794-9467</a> | 4859 Slichter Hall, 595 Charles Young Drive East, Los Angeles, CA 90095-1567
										</p>
										<ul class="icons">
											<li><span class="icon solid fa-envelope footer-static-icon"><span class="label">Email</span></span></li>
											<li><a href="tel:+13107949467" class="icon solid fa-phone"><span class="label">Phone</span></a></li>
											<li><a href="https://sites.epss.ucla.edu/hcao/" target="_blank" rel="noopener" class="icon solid fa-globe"><span class="label">Research Website</span></a></li>
											<li><a href="https://epss.ucla.edu/hao-cao/" target="_blank" rel="noopener" class="icon solid fa-building"><span class="label">EPSS Profile</span></a></li>
										</ul>
									</section>

								<!-- Copyright -->
									<div class="copyright">
										<ul class="menu">
											<li>&copy; Hao Cao. Planetary magnetism and interiors research at UCLA.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
										</ul>
									</div>

							</div>

						</div>
					</div>
				</div>

		</div>

			<!-- Scripts -->
				<script src="<?php echo esc_url(hao_cao_research_theme_uri('assets/js/jquery.min.js')); ?>"></script>
				<script src="<?php echo esc_url(hao_cao_research_theme_uri('assets/js/jquery.scrolly.min.js')); ?>"></script>
				<script src="<?php echo esc_url(hao_cao_research_theme_uri('assets/js/breakpoints.min.js')); ?>"></script>
				<script src="<?php echo esc_url(hao_cao_research_theme_uri('assets/js/util.js')); ?>"></script>
				<script src="<?php echo esc_url(hao_cao_research_theme_uri('assets/js/main.js')); ?>"></script>

		<?php wp_footer(); ?>
	</body>
</html>
