import Alpine from "alpinejs";
import Morakab from "./Morakab";

Object.keys(Morakab.AlpinePlugins).forEach((plugin) => {
    Alpine.plugin(Morakab.AlpinePlugins[plugin]);
});

window.Alpine = Alpine;
Alpine.start();
