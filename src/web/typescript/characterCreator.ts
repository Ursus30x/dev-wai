/// <reference types="jquery" />
/// <reference types="jqueryui"/>
interface JQuery {checkboxradio(): JQuery;}//nie wiem czemu musze to dodac, powinno byc w jqueryui?

const generateButton: HTMLElement | null = document.getElementById("generateButton");
generateButton!.style.display = "block";

const bonuses: HTMLCollectionOf<Element> = document.getElementsByClassName('bonus');
for (var i = 0; i < bonuses.length; i ++) {
	var bonus: HTMLElement  = (bonuses[i] as HTMLElement);
    bonus!.style.display = 'block';
}

const abilitiesId: string[] = ["str","dex","con","int","wis","cha"];

$(function () {
    $(document).tooltip();
	$("select").selectmenu();
    $("input[type='checkbox']").checkboxradio();
	$("input[type='radio']").checkboxradio();
});

function updateInterface(): void {
	for(let i: number = 0; i < 6; i++){
		let parent: HTMLElement | null = document.getElementById(abilitiesId[i]);
		let child: HTMLCollectionOf<Element> | undefined = parent?.children;
        if(child){
            let inputChild: HTMLInputElement = (child[1] as HTMLInputElement);
			if(inputChild.value.length !== 0){
				child[3]!.innerHTML = Math.floor(((parseInt(inputChild.value)-10))/2).toString();
			}
			else{
				child[3]!.innerHTML = '0';
			}
        }
		
	}
}

function generateAbilites(): void {
	for(let i: number = 0; i < 6; i++){
		let parent: HTMLElement | null = document.getElementById(abilitiesId[i]);
		let child: HTMLCollectionOf<Element> | undefined = parent?.children;
        if(child){
            let inputChild: HTMLInputElement = (child[1] as HTMLInputElement);
		    let rand: number = (Math.floor(Math.random() * 6)+1) + (Math.floor(Math.random() * 6)+1) + (Math.floor(Math.random() * 6)+1);
		    inputChild.value = rand.toString();
        }
        
	}
	updateInterface();
}