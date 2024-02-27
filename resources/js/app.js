import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { Link } from '@inertiajs/vue3'
createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.vue', { eager: true })
    return pages[`./Pages/${name}.vue`]
  },
  setup({ el, App, props, plugin }) {
    const app = createApp({ render: () => h(App, props) })
      .use(plugin);

    // Registra o componente Link globalmente
    app.component('Link', Link);

    // Monta o aplicativo no elemento DOM
    app.mount(el);
  },
})