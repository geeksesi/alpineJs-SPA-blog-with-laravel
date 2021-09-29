import Alpine from "alpinejs";
import { AlpinePlugins } from "./Morakab";

AlpinePlugins.forEach((plugin) => {
    Alpine.plugin(plugin);
});

window.Alpine = Alpine;
Alpine.start();
