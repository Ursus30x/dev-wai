/// <reference types="jquery" />

interface JQuery {lightSlider(arg: any): JQuery;}

$(window).ready(function() {
    const jsGallery: HTMLElement | null = document.getElementById("jsGallery");
    jsGallery!.style.display = "block";
    $("#jsGallery").lightSlider({
         pager: false,
         item:2  ,
         loop:true,
         keyPress:true,
         enableTouch:false,
         enableDrag:false

    });
});