const fileInput: HTMLInputElement | null = document.querySelector("input[type=file]");
const output: HTMLImageElement | null = document.querySelector(".output");

fileInput?.addEventListener("change", async () => {
  const fileArr:FileList | null = fileInput?.files;
  if(fileArr){
    const file: Blob = fileArr[0];
    if (file) {
      output!.src = await URL.createObjectURL(file);
    }
  }
  return 0;
});