"use strict";
let isTransformed = 0;
function panelTransform() {
    const sidePanel = document.getElementById("side-panel");
    const panelBg = document.getElementById("panel-bg");
    if (isTransformed == 0) {
        sidePanel.style.width = "60%";
        panelBg.style.width = "100%";
        isTransformed = 1;
    }
    else if (isTransformed == 1) {
        sidePanel.style.width = "0%";
        panelBg.style.width = "0%";
        isTransformed = 0;
    }
}
function noJsDisplay() {
    const hamburger = document.getElementById("hamburger");
    hamburger.style.display = "block";
}
function hideNoJsGallery() {
    const jsGallery = document.getElementById("jsGallery");
    jsGallery.style.display = "block";
}
function noJsDisplayTabs() {
    var noJs = document.getElementById("tabsTop");
    noJs.style.display = "block";
}
