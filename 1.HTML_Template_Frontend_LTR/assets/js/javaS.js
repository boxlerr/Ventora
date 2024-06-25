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

let question = document.querySelectorAll('.question');
let btnDropdown = document.querySelectorAll('.question .more');
let answer = document.querySelectorAll('.answer');
let parrafo = document.querySelectorAll('.answer p');

let hideAll = () => {
    for (let y=0; y<answer.length; y++) {
      answer[y].style.height = `0`;
      question[y].style.marginBottom = '0';
      btnDropdown[y].innerHTML = '<i>+</i>';
    }
}

for (let i = 0; i < btnDropdown.length; i ++) {
    let altoParrafo = parrafo[i].clientHeight;
    let switchc = 0;

    btnDropdown[i].addEventListener('click', () => {
        if (switchc == 0) {
            hideAll();
            answer[i].style.height = `${altoParrafo}px`;
            question[i].style.marginBottom = '10px';
            btnDropdown[i].innerHTML = '<i>-</i>';
            switchc ++;
        } 
        
        else if (switchc == 1) {
            answer[i].style.height = `0`;
            question[i].style.marginBottom = '0';
            btnDropdown[i].innerHTML = '<i>+</i>';
            switchc --;
        }   
    })
}

