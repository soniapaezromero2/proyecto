
// (or assets/bootstrap.js - and then import it from app.js)

import { startStimulusApp } from '@symfony/stimulus-bridge';

export const app = startStimulusApp(require.context(
    '@symfony/stimulus-bridge/lazy-controller-loader!./controllers',
    true,
    /\.(j|t)sx?$/
));
// register any custom, 3rd party controllers here
// app.register('some_controller_name', SomeImportedController);