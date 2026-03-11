# Manual Técnico - Golampi

## Arquitectura del sistema

El sistema está dividido en cuatro componentes principales:

1. Lexer
2. Parser
3. Análisis Semántico
4. Ejecución

---

# Tecnologías utilizadas

- PHP
- ANTLR4
- JavaScript
- HTML
- CSS

---

# Estructura del proyecto


---

# Análisis Léxico

El lexer es generado automáticamente por ANTLR4 a partir de la gramática.

Su función es convertir el código fuente en tokens.


---

# Análisis Sintáctico

El parser analiza la estructura del programa utilizando la gramática definida.

El resultado es un **árbol de derivación (parse tree)**.

---

# Análisis Semántico

El análisis semántico valida:

- tipos de variables
- declaraciones duplicadas
- uso de variables no declaradas
- compatibilidad de tipos

Esto se implementa mediante el **SemanticVisitor**.

---

# Tabla de símbolos

La tabla de símbolos almacena información sobre:

- nombre de variable
- tipo
- alcance


---

# Ejecución del programa

La ejecución es realizada por el **ExecutionVisitor**.

Este visitor recorre el árbol de sintaxis y evalúa:

- expresiones
- asignaciones
- llamadas a funciones
- estructuras de control

Los valores de las variables se almacenan en una estructura llamada **memory**.

---

# Flujo del sistema

Código fuente
↓
Lexer
↓
Parser
↓
SemanticVisitor
↓
ExecutionVisitor
↓
Salida
