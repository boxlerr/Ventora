const monedasElemento = document.querySelector(".seleccionMoneda");


monedasElemento.addEventListener("change",()=>{
    const url = new URL(document.URL);
    url.searchParams.set('mon',monedasElemento.value);
    window.history.replaceState('','',url);
    location.reload();
})