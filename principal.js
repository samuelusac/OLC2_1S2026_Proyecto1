const editor = document.getElementById("editor");
const numerosLinea = document.getElementById("numerosLinea");
const consoleOutput = document.getElementById("salidaConsola");

/* Numeración de líneas */
function actualizarNumerosLinea() {
    const lineas = editor.value.split('\n').length;
    let numeros = "";
    for (let i = 1; i <= lineas; i++) {
        numeros += i + "<br>";
    }
    numerosLinea.innerHTML = numeros;
}

editor.addEventListener("input", actualizarNumerosLinea);
editor.addEventListener("scroll", () => {
    numerosLinea.scrollTop = editor.scrollTop;
});

actualizarNumerosLinea();
