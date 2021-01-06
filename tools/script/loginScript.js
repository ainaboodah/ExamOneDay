// function
function contenirElementString(string, charCheck) {
    let nombre = 0;
    let exist = false;
    for (let i = 0; i < string.length; i++) {
        if (string.charAt(i) == charCheck) {
            exist = true;
            nombre++;
        }
    }
    if (exist == true && nombre == 1) {
        return true;
    } else {
        return false;
    }
}

function checkMailValid() {
    let mail = this.value;
    if (mail == "") {
        alert(this.placeholder + " vide");
    } else {
        if (contenirElementString(mail, "@") == false) {
            alert(this.placeholder + " invalide");
        }
    }
}

function checkInputVide() {
    if (this.value == "") {
        alert(this.placeholder + " vide");
    }
}

//script
document.getElementById("mail").addEventListener("focusout", checkMailValid);
document.getElementById("passwd").addEventListener("focusout", checkInputVide);