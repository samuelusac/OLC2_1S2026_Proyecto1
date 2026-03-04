grammar Golampi;

/* Principal */
program
    : (declaration | statement)* EOF
    ;
/* Declaraciones */
declaration
    : varDecl
    | constDecl
    | funcDecl
    ;

/* Declaraciones y asignacion */
varDecl
    : 'var' idList type ('=' exprList)? ';'
    ;

/* Declaracion corta de variables */
shortVarDecl
    : idList ':=' exprList ';'
    ;

/* Declaraciones multiple */
idList
    : ID (',' ID)*
    ;

/* Expreciones */
exprList
    : expression (',' expression)*
    ;

/* Declaraciones constantess */
constDecl
    : 'const' ID type '=' expression ';'
    ;

/* Declaraciones de funciones */
funcDecl
    : 'func' ID '(' paramList? ')' returnTypes? block
    ;

/* Parametros */
paramList
    : param (',' param)*
    ;

/* Parametro */
param
    : ID type
    ;

/* Retorno */
returnTypes
    : type
    | '(' type (',' type)* ')'
    ;

/* Bloques y sentencias */

block
    : '{' statement* '}'
    ;

statement
    : varDecl
    | shortVarDecl
    | assignment
    | incDecStmt
    | ifStmt
    | switchStmt
    | forStmt
    | breakStmt
    | continueStmt
    | returnStmt
    | expressionStmt
    ;

/* Asignaciones */

assignment
    : lvalue assignOp expression ';'
    ;

assignOp
    : '='
    | '+='
    | '-='
    | '*='
    | '/='
    ;

lvalue
    : ID
    | arrayAccess
    | '*' expression
    ;

incDecStmt
    : lvalue ('++' | '--') ';'
    ;

/* Sentencias de control de flujo */

ifStmt
    : 'if' expression block ('else' (ifStmt | block))?
    ;

switchStmt
    : 'switch' expression '{' caseClause* defaultClause? '}'
    ;

caseClause
    : 'case' exprList ':' statement*
    ;

defaultClause
    : 'default' ':' statement*
    ;
forStmt
    : 'for' forClassic
    | 'for' forWhile
    | 'for' forInfinite
    ;

forClassic
    : (simpleVarDecl | simpleShortVarDecl | simpleAssignment)? ';'
      expression? ';'
      (simpleAssignment | simpleIncDec)?
      block
    ;

simpleVarDecl
    : 'var' idList type ('=' exprList)?
    ;

simpleShortVarDecl
    : idList ':=' exprList
    ;

simpleAssignment
    : lvalue assignOp expression
    ;

simpleIncDec
    : lvalue ('++' | '--')
    ;

forWhile
    : expression block
    ;

forInfinite
    : block
    ;

/* Sentencias de control de transferencia */

breakStmt
    : 'break' ';'
    ;

continueStmt
    : 'continue' ';'
    ;

returnStmt
    : 'return' exprList? ';'
    ;

expressionStmt
    : functionCall ';'
    ;

/* Tipos */

type
    : 'int'
    | 'float'
    | 'bool'
    | 'string'
    | 'rune'
    | arrayType
    | pointerType
    ;

arrayType
    : '[' expression  ']' type
    ;

pointerType
    : '*' type
    ;

/* Expresiones */
expression
    : logicalOr
    ;

logicalOr
    : logicalAnd ( '||' logicalAnd )*
    ;

logicalAnd
    : equality ( '&&' equality )*
    ;

equality
    : relational ( ('==' | '!=') relational )*
    ;

relational
    : additive ( ('>' | '<' | '>=' | '<=') additive )*
    ;

additive
    : multiplicative ( ('+' | '-') multiplicative )*
    ;

multiplicative
    : unary ( ('*' | '/' | '%') unary )*
    ;

unary
    : ('!' | '-' | '*' | '&') unary
    | primary
    ;

primary
    : literal
    | ID
    | functionCall
    | arrayAccess
    | '(' expression ')'
    ;

/* Llamadas  */

functionCall
    : ID '(' exprList? ')'
    ;

/* Arreglos */
arrayAccess
    : ID ('[' expression ']')+
    ;

/* Literales */

literal
    : INT
    | FLOAT
    | STRING
    | CHAR
    | 'true'
    | 'false'
    | 'nil'
    ;

/* Lexico */

ID      : [a-zA-Z_][a-zA-Z0-9_]* ;
INT     : [0-9]+ ;
FLOAT   : [0-9]+ '.' [0-9]+ ;
STRING  : '"' .*? '"' ;
CHAR    : '\'' . '\'' ;

COMMENT     : '//' ~[\r\n]* -> skip ;
MULTICOMMENT: '/*' .*? '*/' -> skip ;
WS          : [ \t\r\n]+ -> skip ;