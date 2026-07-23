import {Composition, registerRoot} from 'remotion';
import {JovianHero} from './JovianHero';

const Root = () => {
	return (
		<Composition
			id="JovianHero"
			component={JovianHero}
			durationInFrames={121}
			fps={24}
			width={1920}
			height={1080}
		/>
	);
};

registerRoot(Root);
