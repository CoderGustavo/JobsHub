document.addEventListener("DOMContentLoaded", ()=>{
    const input = document.querySelector(".buscartxt")
    const placeholder = document.querySelector(".placeholder")
    const txtsede = document.querySelector(".txtsede")
    const busca = document.querySelector(".busca")
    const navbar = document.querySelector("#navbar")
    const sede = document.querySelector(".sede")
    const acessar_vagas = document.querySelectorAll(".acessar-vaga")
    const grayout = document.querySelector(".grayout")
    const modal = document.querySelector(".modal")
    const voltar = document.querySelector(".voltar")
    const greyout = document.querySelector(".grayout")
    const openMenu = document.querySelector(".openMenu")
    const menuMobile = document.querySelector(".menu-mobile")

    input.addEventListener("focus", ()=>{
        placeholder.style.top = "-1.2rem";
        placeholder.style.left = "0.5rem";
    });

    input.addEventListener("keyup", ()=>{
        if (input.value) {  
            busca.style.top = "2rem";
            navbar.style.height = "25vh";
            sede.style.background = "none";
            sede.style.height = "25vh";
            txtsede.style.transform = "translateY(-100vh)";
            txtsede.style.margin = "0";
            txtsede.style.height = "0"
        }
    });

    input.addEventListener("blur", ()=>{
        if (!input.value) {           
            navbar.style.height = "10vh";
            sede.style.height = "90vh";
            sede.style.background = "";
            txtsede.style.transform = "translateY(0)";
            txtsede.style.margin = "";
            txtsede.style.hieght = "";
            placeholder.style.top = ".7rem";
            placeholder.style.left = "1rem";
        }
    });

    acessar_vagas.forEach(element => {
        element.addEventListener("click", (e)=>{
            e.preventDefault();
            grayout.style.display = "block";
            modal.style.display = "block";
        });
    });

    voltar.addEventListener("click", (e)=>{
        e.preventDefault();
        modal.style.display = "none";
        grayout.style.display = "none";
    });

    greyout.addEventListener("click", ()=>{
        modal.style.display = "none";
        grayout.style.display = "none";
        menuMobile.style.display = "none";
    });

    openMenu.addEventListener("click", ()=>{
        grayout.style.display = "block";
        menuMobile.style.display = "flex"
    });
});
