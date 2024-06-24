const monedasElemento = document.querySelector(".seleccionMoneda");


monedasElemento.addEventListener("change",()=>{
    const url = new URL(document.URL);
    url.searchParams.set('mon',monedasElemento.value);
    window.history.replaceState('','',url);
    location.reload();
})


const flagsElement = document.querySelector(".flags");
const textsToChange = document.querySelectorAll("[data-section]");

const changeLanguage = async (language)=>{
    const requestJson = await fetch(`./languages/${language}.json`);
    const texts = await requestJson.json();

    for(const textToChange of textsToChange){
        const section = textToChange.dataset.section;
        const value = textToChange.dataset.value;
        textToChange.innerHTML=texts[section][value];
    }
};

flagsElement.addEventListener('click', (e) => {
    const url = new URL(document.URL);
    // console.log(e.target.parentElement.dataset.language);
    idioma_elegido = e.target.parentElement.dataset.language;
    sessionStorage.idioma = idioma_elegido;
    idioma = sessionStorage.idioma;
    // console.log(idioma);
    // console.log(this.idioma_elegido);
    //changeLanguage(e.target.parentElement.dataset.language);
    url.searchParams.set('lan',idioma);
    window.history.replaceState('','',url);
    location.reload();
    changeLanguage(idioma);
});
changeLanguage(sessionStorage.idioma);

const formularioOrden = document.getElementById("formularioOrden");
const orden = document.getElementById("orden");
if(document.getElementById("formularioOrden")){
    orden.addEventListener("change",()=>{
        const url = new URL(document.URL);
        url.searchParams.set('orden',orden.value);
        window.history.replaceState('','',url);
        location.reload();
    })
}
