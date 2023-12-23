"use strict";
/// <reference types="jquery" />
/// <reference types="jqueryui"/>
const generateButton = document.getElementById("generateButton");
generateButton.style.display = "block";
const bonuses = document.getElementsByClassName('bonus');
for (var i = 0; i < bonuses.length; i++) {
    var bonus = bonuses[i];
    bonus.style.display = 'block';
}
const abilitiesId = ["str", "dex", "con", "int", "wis", "cha"];
$(function () {
    $(document).tooltip();
    $("select").selectmenu();
    $("input[type='checkbox']").checkboxradio();
    $("input[type='radio']").checkboxradio();
});
function updateInterface() {
    for (let i = 0; i < 6; i++) {
        let parent = document.getElementById(abilitiesId[i]);
        let child = parent === null || parent === void 0 ? void 0 : parent.children;
        if (child) {
            let inputChild = child[1];
            if (inputChild.value.length !== 0) {
                child[3].innerHTML = Math.floor(((parseInt(inputChild.value) - 10)) / 2).toString();
            }
            else {
                child[3].innerHTML = '0';
            }
        }
    }
}
function generateAbilites() {
    for (let i = 0; i < 6; i++) {
        let parent = document.getElementById(abilitiesId[i]);
        let child = parent === null || parent === void 0 ? void 0 : parent.children;
        if (child) {
            let inputChild = child[1];
            let rand = (Math.floor(Math.random() * 6) + 1) + (Math.floor(Math.random() * 6) + 1) + (Math.floor(Math.random() * 6) + 1);
            inputChild.value = rand.toString();
        }
    }
    updateInterface();
}
