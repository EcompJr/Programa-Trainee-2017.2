function botao() {
    document.getElementById("titulo").innerHTML = "Hello";
}
function pa() {
    alert("E aew man");
}
function clicar(ID) {
    if (document.getElementById(ID).value == "b1") {
        document.getElementById(ID).value = "Inativo";
    }
    else {
        document.getElementById(ID).value = "b1";
    }
}


var lampQueb = "";
var lapmqueb2 = "";

function geral(ID, ini) {

    if (ID != lampQueb && ID != lapmqueb2) {
        if (ini == "asc") {
            if (ID == "img1") {
                document.getElementById("img1").src = "imagens/ybxlO.jpg";
            } else {
                document.getElementById("img2").src = "imagens/ybxlO.jpg";
            }
        }
        else if (ini == "apa") {
            if (ID == "img1") {
                document.getElementById("img1").src = "imagens/b983w.jpg";
            } else {
                document.getElementById("img2").src = "imagens/b983w.jpg";
            }

        } else {
            if (ID == "img1") {
                document.getElementById("img1").src = "imagens/lampadaquebrada.jpg";
                lampQueb = ID;            
            } else {
                document.getElementById("img2").src = "imagens/lampadaquebrada.jpg";
                lapmqueb2 = ID;                

            }
        }
    }
 
}