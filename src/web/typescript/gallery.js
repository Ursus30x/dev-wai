"use strict";
/// <reference types="jquery" />
$(window).ready(function () {
    const jsGallery = document.getElementById("jsGallery");
    jsGallery.style.display = "block";
    $("#jsGallery").lightSlider({
        pager: false,
        item: 2,
        loop: true,
        keyPress: true,
        enableTouch: false,
        enableDrag: false
    });
});
