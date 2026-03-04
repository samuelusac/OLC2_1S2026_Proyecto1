<?php

/*
 * Generated from Golampi.g4 by ANTLR 4.13.2
 */

use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;

/**
 * This interface defines a complete listener for a parse tree produced by
 * {@see GolampiParser}.
 */
interface GolampiListener extends ParseTreeListener {
	/**
	 * Enter a parse tree produced by {@see GolampiParser::program()}.
	 * @param $context The parse tree.
	 */
	public function enterProgram(Context\ProgramContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::program()}.
	 * @param $context The parse tree.
	 */
	public function exitProgram(Context\ProgramContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::declaration()}.
	 * @param $context The parse tree.
	 */
	public function enterDeclaration(Context\DeclarationContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::declaration()}.
	 * @param $context The parse tree.
	 */
	public function exitDeclaration(Context\DeclarationContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::varDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterVarDecl(Context\VarDeclContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::varDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitVarDecl(Context\VarDeclContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::shortVarDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterShortVarDecl(Context\ShortVarDeclContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::shortVarDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitShortVarDecl(Context\ShortVarDeclContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::idList()}.
	 * @param $context The parse tree.
	 */
	public function enterIdList(Context\IdListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::idList()}.
	 * @param $context The parse tree.
	 */
	public function exitIdList(Context\IdListContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::exprList()}.
	 * @param $context The parse tree.
	 */
	public function enterExprList(Context\ExprListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::exprList()}.
	 * @param $context The parse tree.
	 */
	public function exitExprList(Context\ExprListContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::constDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterConstDecl(Context\ConstDeclContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::constDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitConstDecl(Context\ConstDeclContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::funcDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterFuncDecl(Context\FuncDeclContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::funcDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitFuncDecl(Context\FuncDeclContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::paramList()}.
	 * @param $context The parse tree.
	 */
	public function enterParamList(Context\ParamListContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::paramList()}.
	 * @param $context The parse tree.
	 */
	public function exitParamList(Context\ParamListContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::param()}.
	 * @param $context The parse tree.
	 */
	public function enterParam(Context\ParamContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::param()}.
	 * @param $context The parse tree.
	 */
	public function exitParam(Context\ParamContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::returnTypes()}.
	 * @param $context The parse tree.
	 */
	public function enterReturnTypes(Context\ReturnTypesContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::returnTypes()}.
	 * @param $context The parse tree.
	 */
	public function exitReturnTypes(Context\ReturnTypesContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::block()}.
	 * @param $context The parse tree.
	 */
	public function enterBlock(Context\BlockContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::block()}.
	 * @param $context The parse tree.
	 */
	public function exitBlock(Context\BlockContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function enterStatement(Context\StatementContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::statement()}.
	 * @param $context The parse tree.
	 */
	public function exitStatement(Context\StatementContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::assignment()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignment(Context\AssignmentContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::assignment()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignment(Context\AssignmentContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::assignOp()}.
	 * @param $context The parse tree.
	 */
	public function enterAssignOp(Context\AssignOpContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::assignOp()}.
	 * @param $context The parse tree.
	 */
	public function exitAssignOp(Context\AssignOpContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::lvalue()}.
	 * @param $context The parse tree.
	 */
	public function enterLvalue(Context\LvalueContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::lvalue()}.
	 * @param $context The parse tree.
	 */
	public function exitLvalue(Context\LvalueContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::incDecStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIncDecStmt(Context\IncDecStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::incDecStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIncDecStmt(Context\IncDecStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::ifStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterIfStmt(Context\IfStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::ifStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitIfStmt(Context\IfStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::switchStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterSwitchStmt(Context\SwitchStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::switchStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitSwitchStmt(Context\SwitchStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::caseClause()}.
	 * @param $context The parse tree.
	 */
	public function enterCaseClause(Context\CaseClauseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::caseClause()}.
	 * @param $context The parse tree.
	 */
	public function exitCaseClause(Context\CaseClauseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::defaultClause()}.
	 * @param $context The parse tree.
	 */
	public function enterDefaultClause(Context\DefaultClauseContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::defaultClause()}.
	 * @param $context The parse tree.
	 */
	public function exitDefaultClause(Context\DefaultClauseContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterForStmt(Context\ForStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::forStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitForStmt(Context\ForStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::forClassic()}.
	 * @param $context The parse tree.
	 */
	public function enterForClassic(Context\ForClassicContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::forClassic()}.
	 * @param $context The parse tree.
	 */
	public function exitForClassic(Context\ForClassicContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::simpleVarDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleVarDecl(Context\SimpleVarDeclContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::simpleVarDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleVarDecl(Context\SimpleVarDeclContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::simpleShortVarDecl()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleShortVarDecl(Context\SimpleShortVarDeclContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::simpleShortVarDecl()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleShortVarDecl(Context\SimpleShortVarDeclContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::simpleAssignment()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleAssignment(Context\SimpleAssignmentContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::simpleAssignment()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleAssignment(Context\SimpleAssignmentContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::simpleIncDec()}.
	 * @param $context The parse tree.
	 */
	public function enterSimpleIncDec(Context\SimpleIncDecContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::simpleIncDec()}.
	 * @param $context The parse tree.
	 */
	public function exitSimpleIncDec(Context\SimpleIncDecContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::forWhile()}.
	 * @param $context The parse tree.
	 */
	public function enterForWhile(Context\ForWhileContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::forWhile()}.
	 * @param $context The parse tree.
	 */
	public function exitForWhile(Context\ForWhileContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::forInfinite()}.
	 * @param $context The parse tree.
	 */
	public function enterForInfinite(Context\ForInfiniteContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::forInfinite()}.
	 * @param $context The parse tree.
	 */
	public function exitForInfinite(Context\ForInfiniteContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::breakStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterBreakStmt(Context\BreakStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::breakStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitBreakStmt(Context\BreakStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::continueStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterContinueStmt(Context\ContinueStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::continueStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitContinueStmt(Context\ContinueStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::returnStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterReturnStmt(Context\ReturnStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::returnStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitReturnStmt(Context\ReturnStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::expressionStmt()}.
	 * @param $context The parse tree.
	 */
	public function enterExpressionStmt(Context\ExpressionStmtContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::expressionStmt()}.
	 * @param $context The parse tree.
	 */
	public function exitExpressionStmt(Context\ExpressionStmtContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function enterType(Context\TypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::type()}.
	 * @param $context The parse tree.
	 */
	public function exitType(Context\TypeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::arrayType()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayType(Context\ArrayTypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::arrayType()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayType(Context\ArrayTypeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::pointerType()}.
	 * @param $context The parse tree.
	 */
	public function enterPointerType(Context\PointerTypeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::pointerType()}.
	 * @param $context The parse tree.
	 */
	public function exitPointerType(Context\PointerTypeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function enterExpression(Context\ExpressionContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::expression()}.
	 * @param $context The parse tree.
	 */
	public function exitExpression(Context\ExpressionContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::logicalOr()}.
	 * @param $context The parse tree.
	 */
	public function enterLogicalOr(Context\LogicalOrContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::logicalOr()}.
	 * @param $context The parse tree.
	 */
	public function exitLogicalOr(Context\LogicalOrContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::logicalAnd()}.
	 * @param $context The parse tree.
	 */
	public function enterLogicalAnd(Context\LogicalAndContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::logicalAnd()}.
	 * @param $context The parse tree.
	 */
	public function exitLogicalAnd(Context\LogicalAndContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::equality()}.
	 * @param $context The parse tree.
	 */
	public function enterEquality(Context\EqualityContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::equality()}.
	 * @param $context The parse tree.
	 */
	public function exitEquality(Context\EqualityContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::relational()}.
	 * @param $context The parse tree.
	 */
	public function enterRelational(Context\RelationalContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::relational()}.
	 * @param $context The parse tree.
	 */
	public function exitRelational(Context\RelationalContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::additive()}.
	 * @param $context The parse tree.
	 */
	public function enterAdditive(Context\AdditiveContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::additive()}.
	 * @param $context The parse tree.
	 */
	public function exitAdditive(Context\AdditiveContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::multiplicative()}.
	 * @param $context The parse tree.
	 */
	public function enterMultiplicative(Context\MultiplicativeContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::multiplicative()}.
	 * @param $context The parse tree.
	 */
	public function exitMultiplicative(Context\MultiplicativeContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::unary()}.
	 * @param $context The parse tree.
	 */
	public function enterUnary(Context\UnaryContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::unary()}.
	 * @param $context The parse tree.
	 */
	public function exitUnary(Context\UnaryContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function enterPrimary(Context\PrimaryContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::primary()}.
	 * @param $context The parse tree.
	 */
	public function exitPrimary(Context\PrimaryContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function enterFunctionCall(Context\FunctionCallContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::functionCall()}.
	 * @param $context The parse tree.
	 */
	public function exitFunctionCall(Context\FunctionCallContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::arrayAccess()}.
	 * @param $context The parse tree.
	 */
	public function enterArrayAccess(Context\ArrayAccessContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::arrayAccess()}.
	 * @param $context The parse tree.
	 */
	public function exitArrayAccess(Context\ArrayAccessContext $context): void;
	/**
	 * Enter a parse tree produced by {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function enterLiteral(Context\LiteralContext $context): void;
	/**
	 * Exit a parse tree produced by {@see GolampiParser::literal()}.
	 * @param $context The parse tree.
	 */
	public function exitLiteral(Context\LiteralContext $context): void;
}