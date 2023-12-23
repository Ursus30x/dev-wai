const list: HTMLElement = document.createElement("li");
const rules: HTMLElement | null = document.getElementById("rules");
const header: HTMLElement = document.createElement("h4");

list.id = "suprise"
rules!.appendChild(list);

const suprise: HTMLElement | null = document.getElementById("suprise");
header.id = "supriseHead";
header.innerText = "????";
suprise!.appendChild(header);

const button: HTMLElement = document.createElement("button");
button.id = "supriseButton"
button.innerText = "click me!";
button.onclick = function() {showSuprise()};
suprise!.appendChild(button);

function showSuprise(){
    const supriseHead:HTMLElement | null = document.getElementById("supriseHead");
    const supriseButton:HTMLElement | null = document.getElementById("supriseButton");
    supriseHead!.innerText = "Inhouse rules!!!";
    supriseButton!.remove();
    const unlist: HTMLElement = document.createElement("ul");
    unlist.id="unlist";
    suprise!.appendChild(unlist);
    const unlistId:HTMLElement | null = document.getElementById("unlist");
    const listElement:HTMLElement = document.createElement("li");
    listElement.innerText = "Remeber that you can always create your own rules!!! This game is about fun and nothing is more fun than some creativity"
    unlistId!.appendChild(listElement);
}