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

    const respuesta = await fetch("analyze.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify({ code: codigo })
    });

    const resultado = await respuesta.json();

    document.getElementById("salidaConsola").innerText = resultado.output;
     
    // Guardamos errores para reporte
    ultimoReporteErrores = resultado.output;
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
