"use strict";
const list = document.createElement("li");
const rules = document.getElementById("rules");
const header = document.createElement("h4");
list.id = "suprise";
rules.appendChild(list);
const suprise = document.getElementById("suprise");
header.id = "supriseHead";
header.innerText = "????";
suprise.appendChild(header);
const button = document.createElement("button");
button.id = "supriseButton";
button.innerText = "click me!";
button.onclick = function () { showSuprise(); };
suprise.appendChild(button);
function showSuprise() {
    const supriseHead = document.getElementById("supriseHead");
    const supriseButton = document.getElementById("supriseButton");
    supriseHead.innerText = "Inhouse rules!!!";
    supriseButton.remove();
    const unlist = document.createElement("ul");
    unlist.id = "unlist";
    suprise.appendChild(unlist);
    const unlistId = document.getElementById("unlist");
    const listElement = document.createElement("li");
    listElement.innerText = "Remeber that you can always create your own rules!!! This game is about fun and nothing is more fun than some creativity";
    unlistId.appendChild(listElement);
}
