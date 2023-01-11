let menuVisivle = false;

function mostrarOcultarMenu (){
    if (menuVisivle) {
        document.getElementById("nav").classList = "";
        menuVisivle = false
    }else {
        document.getElementById("nav").classList = "responsive";
        menuVisivle = true
    }
}

const seleccionar = () => {
    document.getElementById("nav").classList = "";
    menuVisivle = false
}


