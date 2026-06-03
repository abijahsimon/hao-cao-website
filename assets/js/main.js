/*
	Helios by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	var	$window = $(window),
		$body = $('body');

	// Breakpoints.
		breakpoints({
			wide:      [ '1281px',  '1680px' ],
			normal:    [ '961px',   '1280px' ],
			narrow:    [ '841px',   '960px'  ],
			narrower:  [ '737px',   '840px'  ],
			mobile:    [ null,      '736px'  ]
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Scrolly.
		$('.scrolly').scrolly();

	// Local nav anchors.
		var scrollToLocalAnchor = function(hash) {

			var	$target = $(hash),
				offset = 32;

			if ($target.length === 0)
				return false;

			$('html, body')
				.stop()
				.animate({
					scrollTop: Math.max($target.offset().top - offset, 0)
				}, 500, 'swing');

			if (window.history && window.history.pushState)
				window.history.pushState(null, '', hash);
			else
				window.location.hash = hash;

			return true;

		};

	// Nav.

		// Button.
			$(
				'<div id="navButton">' +
					'<a href="#navPanel" class="toggle"></a>' +
				'</div>'
			)
				.appendTo($body);

		// Panel.
			$(
				'<div id="navPanel">' +
					'<nav>' +
						$('#nav').navList() +
					'</nav>' +
				'</div>'
			)
				.appendTo($body)
				.panel({
					delay: 500,
					hideOnClick: true,
					hideOnSwipe: true,
					resetScroll: true,
					resetForms: true,
					target: $body,
					visibleClass: 'navPanel-visible'
				});

		$('#nav, #navPanel').on('click', 'a[href^="#"]', function(event) {

			var hash = $(this).attr('href');

			if (hash === '#' || hash === '#navPanel')
				return;

			if (scrollToLocalAnchor(hash))
				event.preventDefault();

		});

	// Homepage Jovian hero.
		(function() {

			var hero = document.querySelector('.jovian-hero'),
				svg = document.getElementById('magneticHero'),
				jupiterLinesGroup = document.getElementById('jupiterFieldLines'),
				jupiterFootpointGroup = document.getElementById('jupiterFieldFootpoints'),
				ganymedeLinesGroups = document.querySelectorAll('.ganymede-field-system');

			if (!hero || !svg || !jupiterLinesGroup)
				return;

			var ns = 'http://www.w3.org/2000/svg',
				jupiterCx = parseFloat(svg.getAttribute('data-jupiter-cx')) || 1045,
				jupiterCy = parseFloat(svg.getAttribute('data-jupiter-cy')) || 485,
				jupiterRadius = parseFloat(svg.getAttribute('data-jupiter-radius')) || 155,
				ganymedeRadius = parseFloat(svg.getAttribute('data-ganymede-radius')) || 15;

			function rotatePoint(x, y, angleDeg, originX, originY) {
				var a = angleDeg * Math.PI / 180,
					dx = x - originX,
					dy = y - originY;

				return {
					x: originX + dx * Math.cos(a) - dy * Math.sin(a),
					y: originY + dx * Math.sin(a) + dy * Math.cos(a)
				};
			}

			function dipolePoint(L, theta, options) {
				var r = L * Math.pow(Math.sin(theta), 2),
					x = options.cx + options.side * options.scaleX * r * Math.sin(theta),
					y = options.cy - options.scaleY * r * Math.cos(theta);

				return rotatePoint(x, y, options.tiltDeg, options.cx, options.cy);
			}

			function distanceFromDipoleCenter(point, options) {
				return Math.hypot(point.x - options.cx, point.y - options.cy);
			}

			function findSurfaceTheta(L, options) {
				var lo = 0.001,
					hi = null,
					previousTheta = lo,
					previousDist = distanceFromDipoleCenter(dipolePoint(L, previousTheta, options), options),
					steps = 140,
					i;

				for (i = 1; i <= steps; i++) {
					var theta = (Math.PI / 2) * (i / steps),
						dist = distanceFromDipoleCenter(dipolePoint(L, theta, options), options);

					if (previousDist < options.radius && dist >= options.radius) {
						lo = previousTheta;
						hi = theta;
						break;
					}

					previousTheta = theta;
					previousDist = dist;
				}

				if (hi === null)
					return null;

				for (i = 0; i < 36; i++) {
					var mid = (lo + hi) / 2,
						dist = distanceFromDipoleCenter(dipolePoint(L, mid, options), options);

					if (dist < options.radius)
						lo = mid;
					else
						hi = mid;
				}

				return hi;
			}

			function generateDipolePoints(L, options) {
				var thetaMin = findSurfaceTheta(L, options),
					thetaMax,
					steps = 300,
					points = [],
					i;

				if (thetaMin === null)
					return [];

				thetaMax = Math.PI - thetaMin;

				for (i = 0; i <= steps; i++) {
					var theta = thetaMin + (thetaMax - thetaMin) * (i / steps),
						point = dipolePoint(L, theta, options);

					points.push([point.x, point.y]);
				}

				return points;
			}

			function pointsToPath(points) {
				if (points.length < 2)
					return '';

				var d = 'M ' + points[0][0].toFixed(2) + ' ' + points[0][1].toFixed(2),
					i;

				for (i = 1; i < points.length; i++)
					d += ' L ' + points[i][0].toFixed(2) + ' ' + points[i][1].toFixed(2);

				return d;
			}

			function appendDipoleLines(targetGroup, values, options) {
				targetGroup.innerHTML = '';

				if (options.surfaceGroup)
					options.surfaceGroup.innerHTML = '';

				values.forEach(function(L, lineIndex) {
					var lineSides = options.sides || [-1, 1],
						surfaceSides = options.surfaceSides || lineSides;

					lineSides.forEach(function(side, sideIndex) {
						var path = document.createElementNS(ns, 'path'),
							pathOptions = Object.assign({}, options, { side: side }),
							points = generateDipolePoints(L, pathOptions);

						if (points.length < 2)
							return;

						path.setAttribute('d', pointsToPath(points));
						path.setAttribute('class', options.className);
						path.style.setProperty('--field-delay', (-0.18 * (lineIndex + (sideIndex / 4))).toFixed(2) + 's');
						targetGroup.appendChild(path);
					});

					if (!options.surfaceGroup)
						return;

					surfaceSides.forEach(function(side, sideIndex) {
						var pathOptions = Object.assign({}, options, { side: side }),
							points = generateDipolePoints(L, pathOptions),
							segmentLength = options.surfaceSegmentPoints || 20,
							northSegment,
							southSegment;

						if (points.length < 2)
							return;

						northSegment = document.createElementNS(ns, 'path');
						northSegment.setAttribute('d', pointsToPath(points.slice(0, segmentLength)));
						northSegment.setAttribute('class', options.surfaceClassName || options.className);
						northSegment.style.setProperty('--field-delay', (-0.18 * (lineIndex + (sideIndex / 4))).toFixed(2) + 's');
						options.surfaceGroup.appendChild(northSegment);

						southSegment = document.createElementNS(ns, 'path');
						southSegment.setAttribute('d', pointsToPath(points.slice(Math.max(0, points.length - segmentLength))));
						southSegment.setAttribute('class', options.surfaceClassName || options.className);
						southSegment.style.setProperty('--field-delay', (-0.18 * (lineIndex + (sideIndex / 4))).toFixed(2) + 's');
						options.surfaceGroup.appendChild(southSegment);
					});
				});
			}

			appendDipoleLines(jupiterLinesGroup, [560, 720, 940, 1250, 1720, 2400], {
				cx: jupiterCx,
				cy: jupiterCy,
				radius: jupiterRadius,
				scaleX: 0.68,
				scaleY: 1.16,
				tiltDeg: 0,
				sides: [-1, 1],
				surfaceSides: [-0.72, -0.42, -0.18, 0.18, 0.42, 0.72],
				className: 'jupiter-dipole-line',
				surfaceClassName: 'jupiter-dipole-footpoint',
				surfaceGroup: jupiterFootpointGroup,
				surfaceSegmentPoints: 7
			});

			ganymedeLinesGroups.forEach(function(ganymedeLinesGroup) {
				appendDipoleLines(ganymedeLinesGroup, [30, 42, 56], {
					cx: 0,
					cy: 0,
					radius: ganymedeRadius,
					scaleX: 0.6,
					scaleY: 0.88,
					tiltDeg: 8,
					className: 'ganymede-dipole-line'
				});
			});

		})();

})(jQuery);
