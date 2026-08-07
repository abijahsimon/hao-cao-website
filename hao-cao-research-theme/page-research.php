<?php
/**
 * Template Name: Research
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
		<title>Research | Hao Cao</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta
			name="description"
			content="Research themes in Hao Cao's group at UCLA, including planetary interiors, magnetic fields, ocean worlds, lunar magnetometry, and space-weather instrumentation."
		/>
		<link rel="stylesheet" href="<?php echo esc_url(hao_cao_research_theme_uri('assets/css/main.css?v=20260602-content-edits')); ?>" />
		<noscript><link rel="stylesheet" href="<?php echo esc_url(hao_cao_research_theme_uri('assets/css/noscript.css')); ?>" /></noscript>
			<?php wp_head(); ?>
	</head>
	<body <?php body_class('no-sidebar research-subpage is-preload'); ?>>
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
								<li class="active"><a href="<?php echo esc_url(hao_cao_research_page_url('research')); ?>">Research</a></li>
								<li><a href="<?php echo esc_url(hao_cao_research_page_url('publications')); ?>">Publications</a></li>
								<li><a href="<?php echo esc_url(hao_cao_research_page_url('team')); ?>">Team</a></li>
								<li><a href="<?php echo esc_url(hao_cao_research_page_url('opportunities')); ?>">Opportunities</a></li>
								<li><a href="<?php echo esc_url(hao_cao_research_page_url('teaching')); ?>">Teaching</a></li>
								<li><a href="<?php echo esc_url(hao_cao_research_page_url('curriculum-vitae')); ?>">CV</a></li>
							</ul>
						</nav>

				</div>

			<!-- Main -->
				<div class="wrapper research-page-wrapper">

					<div class="container">
						<article id="main" class="research-page">
							<header>
								<h2>Research</h2>
							</header>
							<?php if (hao_cao_research_has_editor_content()) : ?>
								<?php hao_cao_research_the_editor_content('wordpress-page-content research-editor-content'); ?>
							<?php else : ?>

							<p class="research-intro">
								Hao Cao&apos;s group studies how magnetic fields and gravity reveal the otherwise hidden interiors,
								deep fluid motion, and space environments of planets and moons. The work connects spacecraft
								observations with geophysical theory, numerical modeling, and magnetometer development, so the
								same physical signals can be used to understand both planetary structure and the environments
								through which spacecraft travel.
							</p>

							<section class="research-theme-list" aria-label="Research areas with related context">
								<article id="planetary-interiors" class="research-theme">
									<div class="research-theme-primary">
										<span class="research-theme-index">01</span>
										<div class="research-theme-copy">
											<h3>Planetary Interiors and Deep Fluid Dynamics</h3>
											<p>
												Giant planets are natural laboratories for fluid dynamics at scales that cannot be reproduced
												on Earth. The group uses gravity measurements, magnetic constraints, and dynamical modeling to
												ask how far atmospheric jets extend below the clouds, how deep winds interact with conducting
												interiors, and what those signals reveal about the structure and evolution of Jupiter and
												Saturn.
											</p>
										</div>
									</div>
									<div class="research-theme-links" aria-label="Related content">
										<h4>Related Content</h4>
										<ul class="research-source-list">
											<li>
												<span class="research-source-type">Video</span>
												<a href="https://www.mathinstitutes.org/videos/22687" target="_blank" rel="noopener">Giant Planet Interior Dynamics: Recent Progress and Open Questions</a>
												<span>IPAM/MathInstitutes video of Hao Cao&apos;s January 31, 2025 talk on giant-planet interior dynamics.</span>
											</li>
											<li>
												<a href="https://science.nasa.gov/mission/juno/" target="_blank" rel="noopener">NASA Juno mission overview</a>
												<span>Juno mission context for Jupiter&apos;s interior, atmosphere, gravity, and magnetosphere measurements.</span>
											</li>
											<li>
												<a href="https://www.missionjuno.swri.edu/news/jupiters-jetstreams-are-unearthly" target="_blank" rel="noopener">Juno findings: Jupiter&apos;s jet-streams are unearthly</a>
												<span>NASA/Juno summary of deep atmospheric winds inferred from spacecraft data.</span>
											</li>
											<li>
												<span class="research-source-type">Paper</span>
												<a href="https://doi.org/10.3847/1538-4357/ad0cbb" target="_blank" rel="noopener">Strong resemblance between surface and deep zonal winds inside Jupiter</a>
												<span>Peer-reviewed gravity analysis connecting Jupiter&apos;s visible winds to deep interior flow.</span>
											</li>
										</ul>
									</div>
								</article>
								<article id="planetary-magnetic-fields" class="research-theme">
									<div class="research-theme-primary">
										<span class="research-theme-index">02</span>
										<div class="research-theme-copy">
											<h3>Planetary Magnetic Fields and Secular Variation</h3>
											<p>
												Planetary magnetic fields are generated by moving electrically conducting fluids, and their
												shapes and time variation carry information about deep interiors. Hao&apos;s research combines
												spacecraft magnetometry from missions such as NASA&apos;s Juno and Cassini with dynamo theory to
												study Jupiter, Saturn, Mercury, and Earth, including how magnetic secular variation can trace
												fluid motion below the surface.
											</p>
										</div>
									</div>
									<div class="research-theme-links" aria-label="Related content">
										<h4>Related Content</h4>
										<ul class="research-source-list">
											<li>
												<span class="research-source-type">Video</span>
												<a href="https://www.youtube.com/watch?v=SRmGf0AUHR8" target="_blank" rel="noopener">The Magnetic Fields of Mercury, Ganymede, and Saturn</a>
												<span>Public INI/Newton Institute seminar video by Hao Cao on comparative planetary magnetic fields.</span>
											</li>
											<li>
												<a href="https://www.jpl.nasa.gov/news/nasas-juno-finds-changes-in-jupiters-magnetic-field/" target="_blank" rel="noopener">NASA&apos;s Juno finds changes in Jupiter&apos;s magnetic field</a>
												<span>NASA/JPL overview of Jupiter magnetic secular variation and its likely connection to deep winds.</span>
											</li>
											<li>
												<span class="research-source-type">Video</span>
												<a href="https://svs.gsfc.nasa.gov/13007/" target="_blank" rel="noopener">Jupiter Magnetic Tour</a>
												<span>NASA Scientific Visualization Studio tour of Jupiter&apos;s dynamo and magnetic field.</span>
											</li>
											<li>
												<span class="research-source-type">Paper</span>
												<a href="https://doi.org/10.1038/s41586-024-07046-3" target="_blank" rel="noopener">A rapidly time-varying equatorial jet in Jupiter&apos;s deep interior</a>
												<span>Nature paper connecting Jupiter&apos;s changing magnetic field to a deep equatorial jet.</span>
											</li>
											<li>
												<a href="https://science.nasa.gov/mission/cassini/grand-finale/overview/" target="_blank" rel="noopener">Cassini Grand Finale overview</a>
												<span>NASA context for Saturn gravity and magnetic-field measurements close to the planet.</span>
											</li>
										</ul>
									</div>
								</article>
								<article id="ocean-worlds" class="research-theme">
									<div class="research-theme-primary">
										<span class="research-theme-index">03</span>
										<div class="research-theme-copy">
											<h3>Ocean Worlds and Coupled Interior-Space Environments</h3>
											<p>
												Icy moons can respond electromagnetically to their parent planets and surrounding plasma,
												turning magnetic measurements into probes of subsurface oceans, ice shells, and space
												environments. The group&apos;s mission-connected work includes Europa and the Jupiter system,
												including the European Space Agency&apos;s JUpiter ICy moons Explorer (JUICE) and broader
												Europa-focused geophysical context.
											</p>
										</div>
									</div>
									<div class="research-theme-links" aria-label="Related content">
										<h4>Related Content</h4>
										<ul class="research-source-list">
											<li>
												<a href="https://www.esa.int/Science_Exploration/Space_Science/Juice/Jupiter_and_its_complex_surroundings_What_will_Juice_reveal" target="_blank" rel="noopener">Jupiter and its complex surroundings: what will Juice reveal?</a>
												<span>ESA overview of Juice science across icy moons, Jupiter&apos;s magnetic environment, and coupled plasma systems.</span>
											</li>
											<li>
												<a href="https://science.nasa.gov/missions/europa-clipper/europa-clipper-resources/induced-magnetic-field-from-europas-subsurface-ocean/" target="_blank" rel="noopener">Induced magnetic field from Europa&apos;s subsurface ocean</a>
												<span>NASA explanation of how Europa&apos;s induced magnetic response constrains ocean and ice-shell properties.</span>
											</li>
											<li>
												<span class="research-source-type">Video</span>
												<a href="https://www.jpl.nasa.gov/videos/spacecraft-makers-testing-europa-clippers-magnetometer/" target="_blank" rel="noopener">Testing Europa Clipper&apos;s magnetometer</a>
												<span>JPL video on the instrument that will measure Europa&apos;s magnetic environment.</span>
											</li>
											<li>
												<span class="research-source-type">Paper</span>
												<a href="https://doi.org/10.1007/s11214-024-01085-y" target="_blank" rel="noopener">Geophysical characterization of Ganymede, Callisto, and Europa by Juice</a>
												<span>Space Science Reviews paper on Juice investigations of icy-moon interiors.</span>
											</li>
										</ul>
									</div>
								</article>
								<article id="surface-magnetometry" class="research-theme">
									<div class="research-theme-primary">
										<span class="research-theme-index">04</span>
										<div class="research-theme-copy">
											<h3>Lunar and Planetary Surface Magnetometry</h3>
											<p>
												Long-duration surface magnetometry can help reveal the electrical structure, thermal state,
												and plasma interaction of planetary bodies. Hao is Principal Investigator for NASA&apos;s
												Development and Advancement of Lunar Instrumentation (DALI) L-MAG project, which is developing
												a miniaturized, low-power fluxgate magnetometer system for lunar surface observatories.
											</p>
										</div>
									</div>
									<div class="research-theme-links" aria-label="Related content">
										<h4>Related Content</h4>
										<ul class="research-source-list">
											<li>
												<a href="https://www.nasa.gov/glenn/glenn-expertise-space-exploration/pesto/dali/" target="_blank" rel="noopener">NASA Development and Advancement of Lunar Instrumentation awards</a>
												<span>NASA DALI context for L-MAG and lunar surface instrument development.</span>
											</li>
											<li>
												<a href="https://physicalsciences.ucla.edu/how-to-study-water-on-the-moon/" target="_blank" rel="noopener">How to study water on the Moon</a>
												<span>UCLA overview of Hao Cao&apos;s NASA-funded lunar magnetometer technology work.</span>
											</li>
											<li>
												<span class="research-source-type">Video</span>
												<a href="https://svs.gsfc.nasa.gov/5644/" target="_blank" rel="noopener">The Moon passes through Earth&apos;s magnetotail</a>
												<span>NASA visualization of the lunar space environment relevant to long-duration surface magnetometry.</span>
											</li>
										</ul>
									</div>
								</article>
								<article id="space-weather" class="research-theme">
									<div class="research-theme-primary">
										<span class="research-theme-index">05</span>
										<div class="research-theme-copy">
											<h3>Space-Weather Measurements and Instrument Development</h3>
											<p>
												The same magnetic-field measurements that probe planetary interiors also matter for
												near-Earth space weather. Hao is Deputy Instrument Lead and Co-Investigator for the fluxgate
												magnetometer (MAG) on NASA&apos;s Tandem Reconnection and Cusp Electrodynamics Reconnaissance
												Satellites (TRACERS) mission, which studies how Earth&apos;s magnetosphere responds to the solar
												wind.
											</p>
										</div>
									</div>
									<div class="research-theme-links" aria-label="Related content">
										<h4>Related Content</h4>
										<ul class="research-source-list">
											<li>
												<a href="https://science.nasa.gov/mission/tracers/" target="_blank" rel="noopener">NASA TRACERS mission overview</a>
												<span>NASA mission page for studying magnetic reconnection and space-weather effects near Earth.</span>
											</li>
											<li>
												<a href="https://physicalsciences.ucla.edu/nasa-launches-ucla-instrument-into-space-to-study-effects-of-sunsmagnetic-field-on-earth/" target="_blank" rel="noopener">NASA launches UCLA instrument into space</a>
												<span>UCLA story on the TRACERS fluxgate magnetometer designed and built by the UCLA team.</span>
											</li>
											<li>
												<span class="research-source-type">Video</span>
												<a href="https://svs.gsfc.nasa.gov/20404/" target="_blank" rel="noopener">TRACERS science animations</a>
												<span>NASA Scientific Visualization Studio animations of TRACERS sampling the polar cusp.</span>
											</li>
											<li>
												<span class="research-source-type">Paper</span>
												<a href="https://doi.org/10.1007/s11214-025-01212-3" target="_blank" rel="noopener">The TRACERS Fluxgate Magnetometer (MAG)</a>
												<span>Space Science Reviews paper on the TRACERS magnetic-field instrument.</span>
											</li>
										</ul>
									</div>
								</article>
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
