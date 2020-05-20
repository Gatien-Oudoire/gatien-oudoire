const navSlide = () => {
    const menu = document.querySelector('.menu-barres');
    const nav = document.querySelector('.nav-liens');
    const navLinks = document.querySelectorAll('.nav-liens li');
    const img_cercle = document.getElementById('img_cercle');
    const img_email = document.getElementById('img_email');
    const main = document.getElementById('main');
    const html_princip = document.getElementById("htmlprincip");

    menu.addEventListener('click', () => {
        nav.classList.toggle('nav-actif');
        if (getComputedStyle(img_cercle).display != "none"){
        html_princip.style.overflowX = "hidden";
        html_princip.style.overflowZ = "hidden";
        main.style.visibility = "hidden";
        img_cercle.style.display = "none";
        img_email.style.display = "none";    // comme .img_cercle {opacity = 0;}
        }
        else 
        {
        html_princip.style.overflowX = "visible";
        html_princip.style.overflowZ = "visible";
        main.style.visibility = "visible";
        img_cercle.style.display = "inline";
        img_email.style.display = "inline";
        }
    });

    navLinks.forEach((link, index) => {
        link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7}s`
    }); 
}

navSlide();


