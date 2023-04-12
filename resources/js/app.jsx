import './bootstrap';

import ReactDOM from 'react-dom/client';        
import Home from './Page/Home';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

ReactDOM.createRoot(document.getElementById('agradawebbase')).render(     
    <Home />        
);