const editor = document.getElementById("editor");
const numerosLinea = document.getElementById("numerosLinea");
const consoleOutput = document.getElementById("salidaConsola");
let ultimoReporteErrores = "";

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

//Ejecutar codigo

async function ejecutarCodigo() {

    const codigo = document.getElementById("editor").value;

    try {

        const respuesta = await fetch("analyze.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify({ code: codigo })
        });

        const texto = await respuesta.text();

        let resultado;

        try {
            resultado = JSON.parse(texto);
        } catch (e) {
            consoleOutput.innerText = "ERROR DEL SERVIDOR:\n\n" + texto;
            return;
        }

        if (resultado.status === "ok") {
            consoleOutput.innerText = resultado.output;
        }

        else if (resultado.status === "semantic_error") {
            consoleOutput.innerText = JSON.stringify(resultado.errors, null, 2);
        }

        else if (resultado.status === "error") {
            consoleOutput.innerText =
                "ERROR:\n" +
                resultado.message +
                "\nLinea: " + resultado.line;
        }

        else {
            consoleOutput.innerText = texto;
        }

        ultimoReporteErrores = consoleOutput.innerText;

    } catch (error) {

        consoleOutput.innerText = "ERROR DE RED:\n\n" + error;

    }
}

//Descargar Errores
function descargarErrores() {

    if (!ultimoReporteErrores || ultimoReporteErrores.includes("✔")) {
        alert("No hay errores para descargar.");
        return;
    }

    const contenidoHTML = `
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Reporte de Errores</title>
        <style>
            body { font-family: Arial; padding: 20px; }
            h1 { color: red; }
            pre {
                background: #f4f4f4;
                padding: 15px;
                border: 1px solid #ccc;
            }
        </style>
    </head>
    <body>
        <h1>Reporte de Errores - Golampi</h1>
        <pre>${ultimoReporteErrores}</pre>
    </body>
    </html>
    `;

    const blob = new Blob([contenidoHTML], { type: "text/html" });
    const url = URL.createObjectURL(blob);

    const a = document.createElement("a");
    a.href = url;
    a.download = "reporte_errores.html";
    a.click();

    URL.revokeObjectURL(url);
}
