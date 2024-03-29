/* =============================== */
/*     Change header in scroll     */
/* =============================== */

function scrollHeader(){
    const header = document.getElementById('header')
    if(this.scrollY >= 50) header.classList.add('scroll-header'); else header.classList.remove('scroll-header')
}
window.addEventListener('scroll', scrollHeader)

/* =============================== */
/*         Services - Modal        */
/* =============================== */

const modalViews = document.querySelectorAll('.services__modal'),
      modalBtns = document.querySelectorAll('.services__button'),
      modalClose = document.querySelectorAll('.services__modal-close')

let modal = function(modalClick){
    modalViews[modalClick].classList.add('active-modal')
}

modalBtns.forEach((mb, i) => {
    mb.addEventListener('click', () => {
        modal(i)
    })
})

modalClose.forEach((mc) => {
    mc.addEventListener('click', () => {
        modalViews.forEach((mv) => {
            mv.classList.remove('active-modal')
        })
    })
})

/* =============================== */
/*    mixItUp - Portfolio Filter   */
/* =============================== */

let mixerPortfolio = mixitup('.work__container', {
    selectors: {
        target: '.work__card'
    },
    animation: {
        duration: 300
    }
});

/* --------- Active Link --------- */

const linkWork = document.querySelectorAll('.work__item') 

function activeWork(){
    linkWork.forEach(l=> l.classList.remove('active-work'))
    this.classList.add('active-work')
}

linkWork.forEach(l=> l.addEventListener('click', activeWork))

/* =============================== */
/*        Scroll Active Link       */
/* =============================== */

const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight,
              sectionTop = current.offsetTop - 58,
              sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.add('active-link')
        }else{
            document.querySelector('.nav__menu a[href*=' + sectionId + ']').classList.remove('active-link')
        }
    })
}
window.addEventListener('scroll', scrollActive)


/* =============================== */
/*     Light/Dark theme changer    */
/* =============================== */

const themeButton = document.getElementById('theme-button')
const lightTheme = 'light-theme'
const iconTheme = 'bx-sun'

// Previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedIcon = localStorage.getItem('selected-icon')

// We obtain the current theme that the interface has by validating the light-theme class
const getCurrentTheme = () => document.body.classList.contains(lightTheme) ? 'dark' : 'light'
const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx bx-moon' : 'bx bx-sun'

// We validate if the user previously chose a topic
if (selectedTheme) {
  // If the validation is fulfilled, we ask what the issue was to know if we activated or deactivated the light
  document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](lightTheme)
  themeButton.classList[selectedIcon === 'bx bx-moon' ? 'add' : 'remove'](iconTheme)
}

// Activate / deactivate the theme manually with the button
themeButton.addEventListener('click', () => {
    // Add or remove the light / icon theme
    document.body.classList.toggle(lightTheme)
    themeButton.classList.toggle(iconTheme)
    // We save the theme and the current icon that the user chose
    localStorage.setItem('selected-theme', getCurrentTheme())
    localStorage.setItem('selected-icon', getCurrentIcon())
})

/* =============================== */
/*           ScrollReveal          */
/* =============================== */

const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    //reset: true,
})

sr.reveal('.home__data')
sr.reveal('.home__handle', {delay: 700})
sr.reveal('.home__social, .home__scroll', {delay: 900, origin: 'bottom'})

/* ======================================= */
/*                Send Form                */
/* ======================================= */

/* -------------- reCaptcha -------------- */

grecaptcha.ready( () => {
    getToken();
});

const getToken = () => {

    grecaptcha.execute( '6LcWExchAAAAALqiriId33tLAoTOheoeYgNt0g9C', { action:'formulario_principal' } )
        .then( ( token ) => { 
            const itoken = document.getElementById('token');
            const btn = document.getElementById('submit');
            
            itoken.value = token;
            btn.disabled = false;
        })

};

/* -------------- reCaptcha -------------- */

const form = document.querySelector("form");
const statusTxt = form.querySelector(".statusTxt");

form.onsubmit = (e) => {

    e.preventDefault();

    statusTxt.style.display = "block"; //Mostrar mensaje al enviar form

    let xhr = new XMLHttpRequest();
    xhr.open('POST', 'actionForm.php' , true);
    xhr.onload = () => {

        if ( xhr.readyState == 4 && xhr.status == 200 ) {

            let response = xhr.response;

                if ( response.indexOf('El mensaje no pudo ser enviado') != -1 || response.indexOf('The message could not be sent') != -1) {

                    //Modificación para mensajes de error
                    statusTxt.style.fontStyle = 'normal';
                    statusTxt.style.color = '#fd7e14';

                } else if ( response.indexOf('Hubo un problema al enviar el mensaje') != -1 || response.indexOf('Por favor completá todos los campos') != -1 || response.indexOf('Por favor ingresá un email valido') != -1 || response.indexOf('There was a problem sending the message') != -1 || response.indexOf('Please fill out all fields') != -1 || response.indexOf('Please enter a valid email') != -1) {
                    //Modificación para mensajes de error
                    statusTxt.style.fontStyle = 'normal';
                    statusTxt.style.color = '#dc3545';
                    getToken();

                } else {
                    //Modificación para correcto
                    statusTxt.style.fontStyle = 'normal';
                    statusTxt.style.color = "#198754";

                    form.reset();
                    getToken();

                    setTimeout(() => {
                            //Ocultar nuevamente mensaje
                            statusTxt.style.display = "none";
                        }, 3000);
                }
            
            statusTxt.innerText = response;
        }

    }

    let formData = new FormData(form); //Creación de objeto que enviamos

    xhr.send(formData);    

}
