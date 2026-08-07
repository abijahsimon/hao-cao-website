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
		<link rel="stylesheet" href="<?php echo esc_url(hao_cao_research_theme_uri('assets/css/main.css?v=20260807-publication-author-contrast')); ?>" />
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

								<section class="research-theme-list" aria-label="Research areas with related context">
									<article id="planetary-interiors" class="research-theme">
										<div class="research-theme-primary">
											<div class="research-theme-copy">
												<h3>Planetary Interiors</h3>
												<p>
													Gravity and magnetic measurements reveal deep winds, electrical structure, and interior
													dynamics. Spacecraft gravity fields, magnetic constraints, and geophysical modeling help infer
													how atmospheric jets extend below cloud tops, how conducting fluids move inside giant planets,
													and what those hidden motions reveal about planetary structure and evolution.
												</p>
											</div>
										</div>
										<details class="research-theme-links" aria-label="Related links">
											<summary>Related links</summary>
											<div class="research-related-grid">
												<section class="research-related-column" aria-label="Links">
													<h4>Links</h4>
													<ul class="research-source-list">
														<li>
															<span class="research-source-type">Video</span>
															<a href="https://www.mathinstitutes.org/videos/22687" target="_blank" rel="noopener">Giant Planet Interior Dynamics: Recent Progress and Open Questions</a>
															<span>IPAM/MathInstitutes video of Hao Cao&apos;s January 31, 2025 talk on giant-planet interior dynamics.</span>
														</li>
														<li>
															<a href="https://www.missionjuno.swri.edu/news/jupiters-jetstreams-are-unearthly" target="_blank" rel="noopener">Juno findings: Jupiter&apos;s jet-streams are unearthly</a>
															<span>NASA/Juno summary of spacecraft gravity results related to deep atmospheric winds.</span>
														</li>
														<li>
															<a href="https://science.nasa.gov/mission/juno/" target="_blank" rel="noopener">NASA Juno mission overview</a>
															<span>Mission context for the magnetic and gravity measurements used in Hao Cao&apos;s Jupiter interior work.</span>
														</li>
													</ul>
												</section>
												<section class="research-related-column research-related-publications" aria-label="Publications">
													<h4>Publications</h4>
													<ul class="research-source-list research-publication-list">
														<li>
															<a href="https://doi.org/10.3847/1538-4357/ad0cbb" target="_blank" rel="noopener"><span class="research-publication-authors"><strong>Cao, H.</strong>, Bloxham, J., Park, R.S., Militzer, B., Yadav, R.K., Kulowski, L., Stevenson, D.J. and Bolton, S.J., 2023.</span> <span class="research-publication-title">Strong resemblance between surface and deep zonal winds inside Jupiter revealed by high-degree gravity moments.</span> <span class="research-publication-journal"><em>The Astrophysical Journal</em> 959, 78.</span></a>
															<span class="research-publication-note">Uses high-degree Juno gravity moments to connect visible winds with deep interior flow.</span>
														</li>
														<li>
															<a href="https://doi.org/10.1029/2021JE007138" target="_blank" rel="noopener"><span class="research-publication-authors">Bloxham, J., Moore, K.M., Kulowski, L., <strong>Cao, H.</strong>, Yadav, R.K., Stevenson, D.J., Connerney, J.E.P. and Bolton, S., 2022.</span> <span class="research-publication-title">Differential Rotation in Jupiter&apos;s Interior Revealed by Simultaneous Inversion for the Magnetic Field and Zonal Flux Velocity.</span> <span class="research-publication-journal"><em>Journal of Geophysical Research: Planets</em> 127, e2021JE007138.</span></a>
															<span class="research-publication-note">Combines magnetic-field inversion and zonal-flow modeling to constrain Jupiter&apos;s interior rotation.</span>
														</li>
														<li>
															<a href="https://doi.org/10.1029/2019JE006165" target="_blank" rel="noopener"><span class="research-publication-authors">Kulowski, L., <strong>Cao, H.</strong>, Bloxham, J., 2020.</span> <span class="research-publication-title">Contributions to Jupiter&apos;s gravity field from dynamics in the dynamo region.</span> <span class="research-publication-journal"><em>Journal of Geophysical Research: Planets</em> 125, e2019JE006165.</span></a>
															<span class="research-publication-note">Links gravity signals to dynamics in Jupiter&apos;s electrically conducting dynamo region.</span>
														</li>
													</ul>
												</section>
											</div>
										</details>
									</article>
									<article id="planetary-magnetic-fields" class="research-theme">
										<div class="research-theme-primary">
											<div class="research-theme-copy">
												<h3>Planetary Magnetic Fields</h3>
												<p>
													Dynamo models and spacecraft magnetometry connect evolving fields to fluid motion inside
													planets. Magnetic-field geometry and time variation from missions such as Juno and Cassini
													provide constraints on planetary dynamos, secular variation, and the electrically conducting
													regions where deep flows generate observable magnetic signals.
												</p>
											</div>
										</div>
										<details class="research-theme-links" aria-label="Related links">
											<summary>Related links</summary>
											<div class="research-related-grid">
												<section class="research-related-column" aria-label="Links">
													<h4>Links</h4>
													<ul class="research-source-list">
														<li>
															<span class="research-source-type">Video</span>
															<a href="https://www.youtube.com/watch?v=SRmGf0AUHR8" target="_blank" rel="noopener">The Magnetic Fields of Mercury, Ganymede, and Saturn</a>
															<span>Public INI/Newton Institute seminar video by Hao Cao on comparative planetary magnetic fields.</span>
														</li>
														<li>
															<a href="https://www.jpl.nasa.gov/news/nasas-juno-finds-changes-in-jupiters-magnetic-field/" target="_blank" rel="noopener">NASA&apos;s Juno finds changes in Jupiter&apos;s magnetic field</a>
															<span>NASA/JPL overview of Jupiter magnetic secular variation and its connection to deep winds.</span>
														</li>
														<li>
															<span class="research-source-type">Video</span>
															<a href="https://svs.gsfc.nasa.gov/13007/" target="_blank" rel="noopener">Jupiter Magnetic Tour</a>
															<span>NASA Scientific Visualization Studio tour of Jupiter&apos;s dynamo and magnetic-field geometry.</span>
														</li>
														<li>
															<a href="https://science.nasa.gov/mission/cassini/grand-finale/overview/" target="_blank" rel="noopener">Cassini Grand Finale overview</a>
															<span>NASA context for the close-in Saturn magnetic-field measurements behind Hao Cao&apos;s Cassini work.</span>
														</li>
													</ul>
												</section>
												<section class="research-related-column research-related-publications" aria-label="Publications">
													<h4>Publications</h4>
													<ul class="research-source-list research-publication-list">
														<li>
															<a href="https://doi.org/10.1038/s41586-024-07046-3" target="_blank" rel="noopener"><span class="research-publication-authors">Bloxham, J., <strong>Cao, H.</strong>, Stevenson, D.J., Connerney, J.E. and Bolton, S.J., 2024.</span> <span class="research-publication-title">A rapidly time-varying equatorial jet in Jupiter&apos;s deep interior.</span> <span class="research-publication-journal"><em>Nature</em> 627, 64-66.</span></a>
															<span class="research-publication-note">Interprets Juno magnetic-field variation as evidence for a deep, time-varying equatorial jet.</span>
														</li>
														<li>
															<a href="https://doi.org/10.1038/s41550-019-0772-5" target="_blank" rel="noopener"><span class="research-publication-authors">Moore, K.M., <strong>Cao, H.</strong>, Bloxham, J., Stevenson, D.J., Connerney, J.E.P. and Bolton, S.J., 2019.</span> <span class="research-publication-title">Time-variation of Jupiter&apos;s internal magnetic field consistent with zonal wind advection.</span> <span class="research-publication-journal"><em>Nature Astronomy</em> 3, 730-735.</span></a>
															<span class="research-publication-note">Connects secular variation in Jupiter&apos;s internal field to zonal wind advection.</span>
														</li>
														<li>
															<a href="https://doi.org/10.1016/j.icarus.2019.113541" target="_blank" rel="noopener"><span class="research-publication-authors"><strong>Cao, H.</strong>, Dougherty, M.K., Hunt, G.J., Provan, G., Cowley, S.W.H., Bunce, E.J., Kellock, S. and Stevenson, D.J., 2020.</span> <span class="research-publication-title">The landscape of Saturn&apos;s internal magnetic field from the Cassini Grand Finale.</span> <span class="research-publication-journal"><em>Icarus</em> 344, 113541.</span></a>
															<span class="research-publication-note">Uses Cassini Grand Finale magnetometry to resolve fine-scale structure in Saturn&apos;s internal magnetic field.</span>
														</li>
														<li>
															<a href="https://doi.org/10.1126/science.aat5434" target="_blank" rel="noopener"><span class="research-publication-authors">Dougherty, M.K., <strong>Cao, H.</strong>, Khurana, K.K., et al., 2018.</span> <span class="research-publication-title">Saturn&apos;s magnetic field revealed by the Cassini Grand Finale.</span> <span class="research-publication-journal"><em>Science</em> 362, eaat5434.</span></a>
															<span class="research-publication-note">Reports the close-in Saturn magnetic-field measurements central to Hao Cao&apos;s dynamo work.</span>
														</li>
														<li>
															<a href="https://doi.org/10.1002/2014GL060196" target="_blank" rel="noopener"><span class="research-publication-authors"><strong>Cao, H.</strong>, Aurnou, J.M., Wicht, J., Dietrich, W., Soderlund, K.M. and Russell, C.T., 2014.</span> <span class="research-publication-title">A dynamo explanation for Mercury&apos;s anomalous magnetic field.</span> <span class="research-publication-journal"><em>Geophysical Research Letters</em> 41, 4127-4134.</span></a>
															<span class="research-publication-note">Extends comparative planetary dynamo work to Mercury&apos;s unusual magnetic-field geometry.</span>
														</li>
													</ul>
												</section>
											</div>
										</details>
									</article>
									<article id="ocean-worlds" class="research-theme">
										<div class="research-theme-primary">
											<div class="research-theme-copy">
												<h3>Ocean Worlds</h3>
												<p>
													Magnetic induction and plasma interactions probe icy moons and coupled interior-space
													environments. Electromagnetic responses help characterize subsurface oceans, ice shells, and the
													plasma environments around moons such as Europa, Ganymede, and Callisto, linking interior
													structure with the surrounding magnetospheric system.
												</p>
											</div>
										</div>
										<details class="research-theme-links" aria-label="Related links">
											<summary>Related links</summary>
											<div class="research-related-grid">
												<section class="research-related-column" aria-label="Links">
													<h4>Links</h4>
													<ul class="research-source-list">
														<li>
															<a href="https://www.esa.int/Science_Exploration/Space_Science/Juice/Jupiter_and_its_complex_surroundings_What_will_Juice_reveal" target="_blank" rel="noopener">Jupiter and its complex surroundings: what will Juice reveal?</a>
															<span>ESA context for the Juice geophysics work on Ganymede, Callisto, Europa, and Jupiter&apos;s magnetic environment.</span>
														</li>
														<li>
															<a href="https://science.nasa.gov/missions/europa-clipper/europa-clipper-resources/induced-magnetic-field-from-europas-subsurface-ocean/" target="_blank" rel="noopener">Induced magnetic field from Europa&apos;s subsurface ocean</a>
															<span>NASA background on magnetic induction methods used to infer subsurface oceans and ice-shell properties.</span>
														</li>
														<li>
															<span class="research-source-type">Video</span>
															<a href="https://www.jpl.nasa.gov/videos/spacecraft-makers-testing-europa-clippers-magnetometer/" target="_blank" rel="noopener">Testing Europa Clipper&apos;s magnetometer</a>
															<span>JPL video on the instrument that will measure Europa&apos;s magnetic environment.</span>
														</li>
													</ul>
												</section>
												<section class="research-related-column research-related-publications" aria-label="Publications">
													<h4>Publications</h4>
													<ul class="research-source-list research-publication-list">
														<li>
															<a href="https://doi.org/10.1007/s11214-024-01085-y" target="_blank" rel="noopener"><span class="research-publication-authors">Van Hoolst, T., Tobie, G., Vallat, C., Altobelli, N., Bruzzone, L., <strong>Cao, H.</strong>, et al., 2024.</span> <span class="research-publication-title">Geophysical Characterization of the Interiors of Ganymede, Callisto and Europa by ESA&apos;s JUpiter ICy moons Explorer.</span> <span class="research-publication-journal"><em>Space Science Reviews</em> 220, 54.</span></a>
															<span class="research-publication-note">Frames how Juice will use geophysical measurements to characterize Ganymede, Callisto, and Europa interiors.</span>
														</li>
														<li>
															<a href="https://doi.org/10.1029/2025JA034657" target="_blank" rel="noopener"><span class="research-publication-authors">Hadid, L.Z., Chust, T., Wahlund, J.-E., <strong>Cao, H.</strong>, Kurth, W.S. and Dougherty, M.K., 2026.</span> <span class="research-publication-title">Evidence of an extended Alfv&eacute;n wing system at Enceladus: Cassini&apos;s multi-instrument observations.</span> <span class="research-publication-journal"><em>Journal of Geophysical Research: Space Physics</em> 131, e2025JA034657.</span></a>
															<span class="research-publication-note">Uses Cassini observations at Enceladus to connect moon-plasma interactions with ocean-world environments.</span>
														</li>
													</ul>
												</section>
											</div>
										</details>
									</article>
									<article id="surface-magnetometry" class="research-theme">
										<div class="research-theme-primary">
											<div class="research-theme-copy">
												<h3>Surface Magnetometry</h3>
												<p>
													Instrument development supports long-duration magnetic measurements on the lunar surface. The
													miniaturized, low-power fluxgate magnetometer systems built for surface observatories provide
													sustained magnetic records for investigating electrical structure, thermal state, and
													interactions with plasma environments.
												</p>
											</div>
										</div>
										<details class="research-theme-links" aria-label="Related links">
											<summary>Related links</summary>
											<div class="research-related-grid">
												<section class="research-related-column" aria-label="Links">
													<h4>Links</h4>
													<ul class="research-source-list">
														<li>
															<a href="https://physicalsciences.ucla.edu/how-to-study-water-on-the-moon/" target="_blank" rel="noopener">How to study water on the Moon</a>
															<span>UCLA overview of Hao Cao&apos;s NASA-funded lunar magnetometer technology work.</span>
														</li>
														<li>
															<a href="https://www.nasa.gov/glenn/glenn-expertise-space-exploration/pesto/dali/" target="_blank" rel="noopener">NASA Development and Advancement of Lunar Instrumentation awards</a>
															<span>NASA DALI context for Hao Cao&apos;s miniaturized lunar magnetometer project.</span>
														</li>
														<li>
															<span class="research-source-type">Video</span>
															<a href="https://svs.gsfc.nasa.gov/5644/" target="_blank" rel="noopener">The Moon passes through Earth&apos;s magnetotail</a>
															<span>NASA visualization of external magnetic fields that lunar surface observatories must measure and separate.</span>
														</li>
													</ul>
												</section>
												<section class="research-related-column research-related-publications" aria-label="Publications">
													<h4>Publications</h4>
													<ul class="research-source-list research-publication-list">
														<li>
															<a href="<?php echo esc_url(hao_cao_research_page_url('publications') . '#reports-white-papers'); ?>"><span class="research-publication-authors"><strong>Cao, H.</strong>, Kuang, W., Cheng, J.S. and Aurnou, J.M., 2024.</span> <span class="research-publication-title">Revealing whole Earth dynamics through geomagnetism: From core to magnetosphere.</span> <span class="research-publication-journal">White paper for NASA Earth Science CORE 2.0 Report.</span></a>
															<span class="research-publication-note">Connects magnetic observations from surface platforms to broad geophysical inference.</span>
														</li>
														<li>
															<a href="https://doi.org/10.1073/pnas.1717454115" target="_blank" rel="noopener"><span class="research-publication-authors"><strong>Cao, H.</strong>, Yadav, Y. and Aurnou, J.M., 2018.</span> <span class="research-publication-title">Geomagnetic polar minima do not arise from steady meridional circulation.</span> <span class="research-publication-journal"><em>Proceedings of the National Academy of Sciences</em> 115, 11186-11191.</span></a>
															<span class="research-publication-note">Develops magnetic-field interpretation methods relevant to separating interior dynamics from measured surface signals.</span>
														</li>
													</ul>
												</section>
											</div>
										</details>
									</article>
									<article id="space-weather" class="research-theme">
										<div class="research-theme-primary">
											<div class="research-theme-copy">
												<h3>Space Weather</h3>
												<p>
													Fluxgate magnetometers help measure Earth&apos;s near-space response to solar-wind forcing. The
													TRACERS mission and related instrument work apply magnetic-field measurements to study
													reconnection, polar cusp dynamics, and the way solar-wind energy enters Earth&apos;s magnetosphere.
												</p>
											</div>
										</div>
										<details class="research-theme-links" aria-label="Related links">
											<summary>Related links</summary>
											<div class="research-related-grid">
												<section class="research-related-column" aria-label="Links">
													<h4>Links</h4>
													<ul class="research-source-list">
														<li>
															<a href="https://physicalsciences.ucla.edu/nasa-launches-ucla-instrument-into-space-to-study-effects-of-sunsmagnetic-field-on-earth/" target="_blank" rel="noopener">NASA launches UCLA instrument into space</a>
															<span>UCLA story on the TRACERS fluxgate magnetometer designed and built by the UCLA team.</span>
														</li>
														<li>
															<a href="https://science.nasa.gov/mission/tracers/" target="_blank" rel="noopener">NASA TRACERS mission overview</a>
															<span>Mission context for reconnection and cusp measurements supported by UCLA magnetometer work.</span>
														</li>
														<li>
															<span class="research-source-type">Video</span>
															<a href="https://svs.gsfc.nasa.gov/20404/" target="_blank" rel="noopener">TRACERS science animations</a>
															<span>NASA animations showing the polar-cusp sampling strategy used to study space-weather coupling.</span>
														</li>
													</ul>
												</section>
												<section class="research-related-column research-related-publications" aria-label="Publications">
													<h4>Publications</h4>
													<ul class="research-source-list research-publication-list">
														<li>
															<a href="https://doi.org/10.1007/s11214-025-01212-3" target="_blank" rel="noopener"><span class="research-publication-authors">Strangeway, R.J., <strong>Cao, H.</strong>, Orrill, E., Caron, R.P., Pierce, D., et al., 2025.</span> <span class="research-publication-title">The TRACERS Fluxgate Magnetometer (MAG).</span> <span class="research-publication-journal"><em>Space Science Reviews</em> 221, 84.</span></a>
															<span class="research-publication-note">Describes the fluxgate magnetometer hardware supporting TRACERS measurements of Earth&apos;s near-space magnetic environment.</span>
														</li>
														<li>
															<a href="https://doi.org/10.1007/s11214-025-01184-4" target="_blank" rel="noopener"><span class="research-publication-authors">Miles, D.M., Kletzing, C.A., Fuselier, S.A., Goodrich, K.A., Bonnell, J.W., Bounds, S., <strong>Cao, H.</strong>, et al., 2025.</span> <span class="research-publication-title">The Tandem Reconnection And Cusp Electrodynamics Reconnaissance Satellites (TRACERS) Mission.</span> <span class="research-publication-journal"><em>Space Science Reviews</em> 221, 61.</span></a>
															<span class="research-publication-note">Provides mission context for two-satellite cusp measurements using the UCLA magnetometer payload.</span>
														</li>
														<li>
															<a href="https://doi.org/10.1029/2026GL123732" target="_blank" rel="noopener"><span class="research-publication-authors">Shen, Y., Strangeway, R.J., <strong>Cao, H.</strong>, et al., 2026.</span> <span class="research-publication-title">TRACERS small-scale field-aligned currents and intense GPS amplitude and phase scintillations in the nightside auroral region.</span> <span class="research-publication-journal"><em>Geophysical Research Letters</em> 53, e2026GL123732.</span></a>
															<span class="research-publication-note">Connects TRACERS magnetic-field observations to auroral currents and GPS scintillation.</span>
														</li>
														<li>
															<a href="https://doi.org/10.1029/2026GL123404" target="_blank" rel="noopener"><span class="research-publication-authors">&Oslash;ieroset, M., Fuselier, S.A., Bonnell, J.B., <strong>Cao, H.</strong>, Chen, L.-J., Conner, H.K., et al., 2026.</span> <span class="research-publication-title">Simultaneous TRACERS and THEMIS observations of reversed cusp ion dispersions and dual-lobe reconnection.</span> <span class="research-publication-journal"><em>Geophysical Research Letters</em> 53, e2026GL123404.</span></a>
															<span class="research-publication-note">Uses coordinated spacecraft observations to interpret cusp reconnection in the TRACERS science context.</span>
														</li>
													</ul>
												</section>
											</div>
										</details>
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
