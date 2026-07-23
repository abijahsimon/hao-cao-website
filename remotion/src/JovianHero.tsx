import React from 'react';
import {
	AbsoluteFill,
	Img,
	OffthreadVideo,
	Sequence,
	interpolate,
	staticFile,
	useCurrentFrame,
} from 'remotion';

const referenceClip = 'jupiter-europa-ganymede-reference.mp4';
const cleanPlate = 'continuation/clean-end-plate.png';
const europaSprite = 'continuation/europa-sprite.png';
const ganymedeSprite = 'continuation/ganymede-sprite.png';

const referenceClipFrames = 121;
const extensionFrames = 240;

const clamp01 = (value: number) => Math.min(1, Math.max(0, value));
const easeInOut = (value: number) => 0.5 - Math.cos(clamp01(value) * Math.PI) / 2;

const bezier = (t: number, start: number, controlA: number, controlB: number, end: number) => {
	const inverse = 1 - t;

	return (
		inverse ** 3 * start +
		3 * inverse ** 2 * t * controlA +
		3 * inverse * t ** 2 * controlB +
		t ** 3 * end
	);
};

const Europa = ({progress}: {progress: number}) => {
	const trajectory = progress;
	const eased = easeInOut(progress);
	const x = bezier(trajectory, 279, 339, 400, 460);
	const y = bezier(trajectory, 368, 362, 356, 350);
	const scale = interpolate(eased, [0, 1], [1, 0.94]);
	const opacity = interpolate(eased, [0, 0.82, 1], [1, 0.96, 0.86]);

	return (
		<Img
			src={staticFile(europaSprite)}
			style={{
				position: 'absolute',
				left: 0,
				top: 0,
				width: 70,
				height: 72,
				opacity,
				transform: `translate(${(x - 35).toFixed(2)}px, ${(y - 36).toFixed(2)}px) scale(${scale.toFixed(4)})`,
				transformOrigin: 'center',
				filter: 'drop-shadow(0 0 14px rgba(172, 190, 214, 0.16))',
			}}
		/>
	);
};

const GanymedeWake = ({x, y, progress}: {x: number; y: number; progress: number}) => {
	const arc = Math.sin(progress * Math.PI);
	const opacity = interpolate(progress, [0, 0.58, 1], [0.92, 0.72, 0.34]);
	const lift = interpolate(progress, [0, 1], [0, -54]);

	return (
		<svg
			viewBox="0 0 1280 720"
			width="1280"
			height="720"
			style={{
				position: 'absolute',
				inset: 0,
				opacity,
				mixBlendMode: 'screen',
			}}
		>
			<defs>
				<filter id="continuationWakeGlow" x="-20%" y="-80%" width="170%" height="260%">
					<feGaussianBlur stdDeviation="8" result="blur" />
					<feColorMatrix
						in="blur"
						type="matrix"
						values="0 0 0 0 0.44 0 0 0 0 0.24 0 0 0 0 0.96 0 0 0 0.86 0"
						result="color"
					/>
					<feMerge>
						<feMergeNode in="color" />
						<feMergeNode in="SourceGraphic" />
					</feMerge>
				</filter>
				<linearGradient id="continuationWakeFill" x1="0%" y1="0%" x2="100%" y2="0%">
					<stop offset="0%" stopColor="#c29cff" stopOpacity="0.2" />
					<stop offset="44%" stopColor="#8b5ae0" stopOpacity="0.28" />
					<stop offset="100%" stopColor="#4d5ada" stopOpacity="0.03" />
				</linearGradient>
				<mask id="continuationWakeMask">
					<rect width="1280" height="720" fill="white" />
					<circle cx="850" cy="310" r="205" fill="black" />
				</mask>
			</defs>
			<g filter="url(#continuationWakeGlow)" mask="url(#continuationWakeMask)">
				<path
					d={[
						`M ${(x + 5).toFixed(2)} ${(y - 38).toFixed(2)}`,
						`C ${(x + 128).toFixed(2)} ${(y - 106 + lift).toFixed(2)}, ${(x + 342).toFixed(2)} ${(y - 82 + arc * 20).toFixed(2)}, 1280 ${(y - 6 + lift * 0.2).toFixed(2)}`,
						`C ${(x + 498).toFixed(2)} ${(y + 54 + arc * 12).toFixed(2)}, ${(x + 158).toFixed(2)} ${(y + 36).toFixed(2)}, ${(x - 22).toFixed(2)} ${(y + 8).toFixed(2)}`,
						`C ${(x + 34).toFixed(2)} ${(y - 10).toFixed(2)}, ${(x + 28).toFixed(2)} ${(y - 20).toFixed(2)}, ${(x + 5).toFixed(2)} ${(y - 38).toFixed(2)}`,
					].join(' ')}
					fill="url(#continuationWakeFill)"
				/>
				{[-38, -12, 18, 48].map((offset, index) => (
					<path
						key={offset}
						d={`M ${(x - 4).toFixed(2)} ${(y + offset).toFixed(2)} C ${(x + 132).toFixed(2)} ${(y + offset * 2.05 + lift).toFixed(2)}, ${(x + 352).toFixed(2)} ${(y - offset * 0.52 + arc * 24).toFixed(2)}, 1280 ${(y + offset * 0.88 + lift * 0.3).toFixed(2)}`}
						fill="none"
						stroke={index === 2 ? 'rgba(219, 176, 255, 0.8)' : 'rgba(128, 116, 238, 0.5)'}
						strokeLinecap="round"
						strokeWidth={index === 2 ? 2.1 : 1.15}
						opacity={index === 2 ? 0.8 : 0.52}
					/>
				))}
			</g>
		</svg>
	);
};

const Ganymede = ({progress}: {progress: number}) => {
	const trajectory = progress;
	const eased = easeInOut(progress);
	const x = bezier(trajectory, 756, 637, 494, 375);
	const y = bezier(trajectory, 466, 442, 404, 380);
	const scale = interpolate(eased, [0, 1], [1, 0.95]);
	const opacity = interpolate(eased, [0, 0.78, 1], [1, 0.96, 0.9]);

	return (
		<>
			<GanymedeWake x={x} y={y} progress={progress} />
			<Img
				src={staticFile(ganymedeSprite)}
				style={{
					position: 'absolute',
					left: 0,
					top: 0,
					width: 124,
					height: 126,
					opacity,
					transform: `translate(${(x - 62).toFixed(2)}px, ${(y - 63).toFixed(2)}px) scale(${scale.toFixed(4)})`,
					transformOrigin: 'center',
					filter: 'drop-shadow(0 14px 26px rgba(0, 0, 0, 0.44)) drop-shadow(0 0 24px rgba(139, 108, 215, 0.18))',
				}}
			/>
		</>
	);
};

const Continuation = () => {
	const frame = useCurrentFrame();
	const progress = clamp01(frame / (extensionFrames - 1));
	const cameraDrift = easeInOut(progress);
	const scale = interpolate(cameraDrift, [0, 1], [1, 1.018]);
	const x = interpolate(cameraDrift, [0, 1], [0, -12]);
	const y = interpolate(cameraDrift, [0, 1], [0, -5]);

	return (
		<AbsoluteFill style={{backgroundColor: '#020511', overflow: 'hidden'}}>
			<Img
				src={staticFile(cleanPlate)}
				style={{
					width: '100%',
					height: '100%',
					objectFit: 'cover',
					transform: `translate(${x.toFixed(2)}px, ${y.toFixed(2)}px) scale(${scale.toFixed(4)})`,
					transformOrigin: 'center',
				}}
			/>
			<AbsoluteFill>
				<Europa progress={progress} />
				<Ganymede progress={progress} />
			</AbsoluteFill>
		</AbsoluteFill>
	);
};

export const JovianHero = () => {
	return (
		<AbsoluteFill style={{backgroundColor: '#020511'}}>
			<Sequence durationInFrames={referenceClipFrames}>
				<OffthreadVideo
					src={staticFile(referenceClip)}
					muted
					style={{
						width: '100%',
						height: '100%',
						objectFit: 'cover',
					}}
				/>
			</Sequence>
			<Sequence from={referenceClipFrames} durationInFrames={extensionFrames}>
				<Continuation />
			</Sequence>
		</AbsoluteFill>
	);
};
