let isTransformed: number = 0;

function panelTransform(): void {
    const sidePanel: HTMLElement | null = document.getElementById("side-panel");
    const panelBg: HTMLElement | null = document.getElementById("panel-bg");
  if (isTransformed == 0) {
    sidePanel!.style.width = "60%";
    panelBg!.style.width = "100%";
    isTransformed = 1;
  } else if (isTransformed == 1) {
    sidePanel!.style.width = "0%";
    panelBg!.style.width = "0%";
    isTransformed = 0;
  }
}

function noJsDisplay():void  {
  const hamburger: HTMLElement | null = document.getElementById("hamburger");
  hamburger!.style.display = "block";
}

function hideNoJsGallery(){
  const jsGallery: HTMLElement | null = document.getElementById("jsGallery");
  jsGallery!.style.display = "block";
}

function noJsDisplayTabs() {
  var noJs: HTMLElement | null = document.getElementById("tabsTop");
  noJs!.style.display = "block";
}
