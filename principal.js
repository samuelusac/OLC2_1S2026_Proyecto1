const editor = document.getElementById("editor");
const numerosLinea = document.getElementById("numerosLinea");
const consoleOutput = document.getElementById("salidaConsola");
let ultimoReporteErrores = "";
let tablasimboloGlobal = [];

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
            tablaSimbolosGlobal = resultado.symbols || [];
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
            let textoFormateado = resultado.output.replace(/\\n/g, "\n").replace(/\\t/g, "\t");
            consoleOutput.innerText = textoFormateado;
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


function descargarTablaSimbolos() {

    if (!tablaSimbolosGlobal || tablaSimbolosGlobal.length === 0) {
        alert("No hay tabla de símbolos.");
        return;
    }

    let filas = "";

    tablaSimbolosGlobal.forEach(sim => {
        filas += `
        <tr>
            <td>${sim.name}</td>
            <td>${sim.type}</td>
            <td>${sim.scope}</td>
            <td>${sim.const}</td>
        </tr>`;
    });

    const html = `
    <html>
    <head>
        <meta charset="UTF-8">
        <title>Tabla de Símbolos</title>
        <style>
            body { font-family: Arial; padding: 20px; }
            table { border-collapse: collapse; width: 100%; }
            th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
            th { background: #f4f4f4; }
        </style>
    </head>
    <body>
        <h1>Tabla de Símbolos</h1>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Scope</th>
                <th>Constante</th>
            </tr>
            ${filas}
        </table>
    </body>
    </html>
    `;

    const blob = new Blob([html], { type: "text/html" });
    const url = URL.createObjectURL(blob);

    const a = document.createElement("a");
    a.href = url;
    a.download = "tabla_simbolos.html";
    a.click();

    URL.revokeObjectURL(url);
}