function afficherCarres(nombreInitial, nombreFinal) {
    if (nombreInitial <= nombreFinal) {
        let nombre = nombreInitial;

        while (nombre <= nombreFinal) {
            let carre = nombre ** 2;
            console.log(`Le carré de ${nombre} est ${carre}`);
            nombre++;
        }
    } else {
        console.log("Le nombre initial doit être inférieur ou égal au nombre final.");
    }
}

let nombreInitial = parseInt(prompt("Entrez le nombre initial :"));

let nombreFinal = parseInt(prompt("Entrez le nombre final :"));

afficherCarres(nombreInitial, nombreFinal);
