//Función que me aplica el estilo a la opciòn seleccionada y quita la previamente seleccionada
function seleccionar(link) {
    var opciones = document.querySelectorAll('#links  a');
    opciones[0].className = "";
    opciones[1].className = "";
    opciones[2].className = "";
    opciones[3].className = "";
    opciones[4].className = "";
    link.className = "seleccionado";

    //Hacemos desaparecer el menu una vez que se ha seleccionado una opcion
    //en modo responsive
    var x = document.getElementById("nav");
    x.className = "";
}

//función que muestra el menu responsive
function responsiveMenu() {
    var x = document.getElementById("nav");
    if (x.className === "") {
        x.className = "responsive";
    } else {
        x.className = "";
    }
}

//detecto el scrolling para aplicar la animación del la barra de habilidades
window.onscroll = function() { efectoHabilidades() };
//funcion que aplica la animación de la barra de habilidades
function efectoHabilidades() {
    var skills = document.getElementById("skills");
    var distancia_skills = window.innerHeight - skills.getBoundingClientRect().top;
    if (distancia_skills >= 300) {
        document.getElementById("html").classList.add("barra-progreso1");
        document.getElementById("js").classList.add("barra-progreso2");
        document.getElementById("bd").classList.add("barra-progreso3");
        document.getElementById("ps").classList.add("barra-progreso4");
        document.getElementById("git").classList.add("barra-progreso5");
        document.getElementById("uml").classList.add("barra-progreso6");

    }
}
function EnviarFormulario(){
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("formulario").innerHTML = this.response;
            document.getElementById("nombre").value = "";
            document.getElementById("direccion").value = "";
            document.getElementById("tema").value = "";
            document.getElementById("mensaje").value = "";
        }
    }
    xhttp.open("POST","./consultas.php",true);
    data = new FormData();
    data.append("nombre", document.getElementById("nombre").value);
    data.append("direccion", document.getElementById("direccion").value);
    data.append("tema", document.getElementById("tema").value);
    data.append("mensaje", document.getElementById("mensaje").value);
    xhttp.send(data);
}