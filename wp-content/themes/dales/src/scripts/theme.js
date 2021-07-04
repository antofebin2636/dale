import "../styles/theme.scss";

const appearTitles = require("./modules/animate").default;
const appearBox = require("./modules/action").default;

appearTitles();
appearBox();

/* ----------------------------------------------------------------------
| 📦 Modules - dynamically imported modules
|--------------------------------------------------------------------- */

document.addEventListener("DOMContentLoaded", () => {
    document.querySelectorAll("[data-module]").forEach((el) => {
        const name = el.getAttribute("data-module");
        const moduleInit = require(`./modules/${name}`).default;
        // console.log(name);
        moduleInit({ el });
    });
});