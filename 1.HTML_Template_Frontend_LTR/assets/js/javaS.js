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
let btnDropdown = document.querySelectorAll('.question');
let answer = document.querySelectorAll('.answer');
let parrafo = document.querySelectorAll('.answer p');

let hideAll = () => {
    for (let y=0; y<answer.length; y++) {
      answer[y].style.height = `0`;
      question[y].style.marginBottom = '0';
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
            switchc ++;
        } 
        
        else if (switchc == 1) {
            answer[i].style.height = `0`;
            question[i].style.marginBottom = '0';
            switchc --;
        }   
    })
}

let animado = document.querySelectorAll(".animado");
function mostrarScroll(params) {
    let scrollTop = document.documentElement.scrollTop;
    for (var i = 0; i < animado.length; i++) {
        let alturaAnimado = animado[i].offsetTop;
        if (alturaAnimado - 300 < scrollTop) {
            animado[i].style.opacity=1;
            animado[i].classList.add("mostrarArriba");
        }
    }
}

window.addEventListener('scroll', mostrarScroll);

if(document.getElementById('registrationForm')){
    
    document.getElementById('registrationForm').addEventListener('submit', function(event) {
        event.preventDefault();
        const form = event.target;
        const nombre = form.nombre.value.trim();
        const email = form.email.value.trim();
        const telefono = form.telefono.value.trim();
        const fechaNacimiento = form.fecha_nacimiento.value.trim();
        const nacionalidad = form.nacionalidad.value.trim();
        const password = form.contrasena.value.trim();
        const confirmPassword = form.contrasena2.value.trim();
        const agree = form.agree.checked;
    
        if (!nombre || !email || !fechaNacimiento || !nacionalidad || !password || !confirmPassword) {
            showModal('Todos los campos marcados con * son obligatorios.');
            return;
        }
    
        if (!validateEmail(email)) {
            showModal('Por favor, ingresa un email válido.');
            return;
        }
    
        if (password !== confirmPassword) {
            showModal('Las contraseñas no coinciden.');
            return;
        }
    
        if (!agree) {
            showModal('Debes aceptar los términos y condiciones.');
            return;
        }
    
        // Si todo es válido, puedes enviar el formulario
        form.submit();
    });
    
    function validateEmail(email) {
        const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return re.test(String(email).toLowerCase());
    }
    
    function showModal(message) {
        const modal = document.getElementById("myModal");
        const modalMessage = document.getElementById("modalMessage");
        modalMessage.textContent = message;
        modal.style.display = "block";
    }
    
    document.querySelector(".close").onclick = function() {
        closeModal();
    }
    
    window.onclick = function(event) {
        const modal = document.getElementById("myModal");
        if (event.target == modal) {
            closeModal();
        }
    }
    
    function closeModal() {
        const modal = document.getElementById("myModal");
        modal.style.animation = "fadeOut 0.5s, slideOut 0.5s";
        setTimeout(() => {
            modal.style.display = "none";
            modal.style.animation = "";
        }, 500);
    }
}

document.getElementById('shippingForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const form = event.target;
    // const email = form.email.value.trim();
    const nombre = form.nombre.value.trim();
    const apellido = form.apellido.value.trim();
    const direccion1 = form.direccion1.value.trim();
    const pais = form.pais.value.trim();
    const ciudad = form.ciudad.value.trim();
    const codigoPostal = form.codigo_postal.value.trim();
    const celular = form.celular.value.trim();

    if (!nombre || !apellido || !direccion1 || !pais || !ciudad || !codigoPostal || !celular) {
        showModal('Todos los campos marcados con * son obligatorios.');
        return;
    }

    // Validación adicional de formato de email u otros campos si fuera necesario

    form.submit();
});

function showModal(message) {
    const modal = document.getElementById("myModal");
    const modalMessage = document.getElementById("modalMessage");
    modalMessage.textContent = message;
    modal.style.display = "block";
}

document.querySelector(".close").onclick = function() {
    closeModal();
}

window.onclick = function(event) {
    const modal = document.getElementById("myModal");
    if (event.target == modal) {
        closeModal();
    }
}

function closeModal() {
    const modal = document.getElementById("myModal");
    modal.style.animation = "fadeOut 0.5s, slideOut 0.5s";
    setTimeout(() => {
        modal.style.display = "none";
        modal.style.animation = "";
    }, 500);
}