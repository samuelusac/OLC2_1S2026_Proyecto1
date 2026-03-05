<?php

/*
 * Generated from Golampi.g4 by ANTLR 4.13.2
 */

namespace {
	use Antlr\Antlr4\Runtime\Atn\ATN;
	use Antlr\Antlr4\Runtime\Atn\ATNDeserializer;
	use Antlr\Antlr4\Runtime\Atn\ParserATNSimulator;
	use Antlr\Antlr4\Runtime\Dfa\DFA;
	use Antlr\Antlr4\Runtime\Error\Exceptions\FailedPredicateException;
	use Antlr\Antlr4\Runtime\Error\Exceptions\NoViableAltException;
	use Antlr\Antlr4\Runtime\PredictionContexts\PredictionContextCache;
	use Antlr\Antlr4\Runtime\Error\Exceptions\RecognitionException;
	use Antlr\Antlr4\Runtime\RuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\TokenStream;
	use Antlr\Antlr4\Runtime\Vocabulary;
	use Antlr\Antlr4\Runtime\VocabularyImpl;
	use Antlr\Antlr4\Runtime\RuntimeMetaData;
	use Antlr\Antlr4\Runtime\Parser;

	final class GolampiParser extends Parser
	{
		public const T__0 = 1, T__1 = 2, T__2 = 3, T__3 = 4, T__4 = 5, T__5 = 6, 
               T__6 = 7, T__7 = 8, T__8 = 9, T__9 = 10, T__10 = 11, T__11 = 12, 
               T__12 = 13, T__13 = 14, T__14 = 15, T__15 = 16, T__16 = 17, 
               T__17 = 18, T__18 = 19, T__19 = 20, T__20 = 21, T__21 = 22, 
               T__22 = 23, T__23 = 24, T__24 = 25, T__25 = 26, T__26 = 27, 
               T__27 = 28, T__28 = 29, T__29 = 30, T__30 = 31, T__31 = 32, 
               T__32 = 33, T__33 = 34, T__34 = 35, T__35 = 36, T__36 = 37, 
               T__37 = 38, T__38 = 39, T__39 = 40, T__40 = 41, T__41 = 42, 
               T__42 = 43, T__43 = 44, T__44 = 45, T__45 = 46, T__46 = 47, 
               T__47 = 48, T__48 = 49, T__49 = 50, T__50 = 51, T__51 = 52, 
               ID = 53, INT = 54, FLOAT = 55, STRING = 56, CHAR = 57, COMMENT = 58, 
               MULTICOMMENT = 59, WS = 60;

		public const RULE_program = 0, RULE_declaration = 1, RULE_varDecl = 2, 
               RULE_shortVarDecl = 3, RULE_idList = 4, RULE_exprList = 5, 
               RULE_constDecl = 6, RULE_funcDecl = 7, RULE_paramList = 8, 
               RULE_param = 9, RULE_returnTypes = 10, RULE_block = 11, RULE_statement = 12, 
               RULE_assignment = 13, RULE_assignOp = 14, RULE_lvalue = 15, 
               RULE_incDecStmt = 16, RULE_ifStmt = 17, RULE_switchStmt = 18, 
               RULE_caseClause = 19, RULE_defaultClause = 20, RULE_forStmt = 21, 
               RULE_forClassic = 22, RULE_simpleVarDecl = 23, RULE_simpleShortVarDecl = 24, 
               RULE_simpleAssignment = 25, RULE_simpleIncDec = 26, RULE_forWhile = 27, 
               RULE_forInfinite = 28, RULE_breakStmt = 29, RULE_continueStmt = 30, 
               RULE_returnStmt = 31, RULE_expressionStmt = 32, RULE_type = 33, 
               RULE_arrayType = 34, RULE_pointerType = 35, RULE_expression = 36, 
               RULE_logicalOr = 37, RULE_logicalAnd = 38, RULE_equality = 39, 
               RULE_relational = 40, RULE_additive = 41, RULE_multiplicative = 42, 
               RULE_unary = 43, RULE_primary = 44, RULE_functionCall = 45, 
               RULE_arrayAccess = 46, RULE_literal = 47;

		/**
		 * @var array<string>
		 */
		public const RULE_NAMES = [
			'program', 'declaration', 'varDecl', 'shortVarDecl', 'idList', 'exprList', 
			'constDecl', 'funcDecl', 'paramList', 'param', 'returnTypes', 'block', 
			'statement', 'assignment', 'assignOp', 'lvalue', 'incDecStmt', 'ifStmt', 
			'switchStmt', 'caseClause', 'defaultClause', 'forStmt', 'forClassic', 
			'simpleVarDecl', 'simpleShortVarDecl', 'simpleAssignment', 'simpleIncDec', 
			'forWhile', 'forInfinite', 'breakStmt', 'continueStmt', 'returnStmt', 
			'expressionStmt', 'type', 'arrayType', 'pointerType', 'expression', 'logicalOr', 
			'logicalAnd', 'equality', 'relational', 'additive', 'multiplicative', 
			'unary', 'primary', 'functionCall', 'arrayAccess', 'literal'
		];

		/**
		 * @var array<string|null>
		 */
		private const LITERAL_NAMES = [
		    null, "'var'", "'='", "';'", "':='", "','", "'const'", "'func'", "'('", 
		    "')'", "'{'", "'}'", "'+='", "'-='", "'*='", "'/='", "'*'", "'++'", 
		    "'--'", "'if'", "'else'", "'switch'", "'case'", "':'", "'default'", 
		    "'for'", "'break'", "'continue'", "'return'", "'int'", "'float'", 
		    "'bool'", "'string'", "'rune'", "'['", "']'", "'||'", "'&&'", "'=='", 
		    "'!='", "'>'", "'<'", "'>='", "'<='", "'+'", "'-'", "'/'", "'%'", 
		    "'!'", "'&'", "'true'", "'false'", "'nil'"
		];

		/**
		 * @var array<string>
		 */
		private const SYMBOLIC_NAMES = [
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, null, null, 
		    null, null, null, null, null, null, null, null, null, "ID", "INT", 
		    "FLOAT", "STRING", "CHAR", "COMMENT", "MULTICOMMENT", "WS"
		];

		private const SERIALIZED_ATN =
			[4, 1, 60, 427, 2, 0, 7, 0, 2, 1, 7, 1, 2, 2, 7, 2, 2, 3, 7, 3, 2, 4, 
		    7, 4, 2, 5, 7, 5, 2, 6, 7, 6, 2, 7, 7, 7, 2, 8, 7, 8, 2, 9, 7, 9, 
		    2, 10, 7, 10, 2, 11, 7, 11, 2, 12, 7, 12, 2, 13, 7, 13, 2, 14, 7, 
		    14, 2, 15, 7, 15, 2, 16, 7, 16, 2, 17, 7, 17, 2, 18, 7, 18, 2, 19, 
		    7, 19, 2, 20, 7, 20, 2, 21, 7, 21, 2, 22, 7, 22, 2, 23, 7, 23, 2, 
		    24, 7, 24, 2, 25, 7, 25, 2, 26, 7, 26, 2, 27, 7, 27, 2, 28, 7, 28, 
		    2, 29, 7, 29, 2, 30, 7, 30, 2, 31, 7, 31, 2, 32, 7, 32, 2, 33, 7, 
		    33, 2, 34, 7, 34, 2, 35, 7, 35, 2, 36, 7, 36, 2, 37, 7, 37, 2, 38, 
		    7, 38, 2, 39, 7, 39, 2, 40, 7, 40, 2, 41, 7, 41, 2, 42, 7, 42, 2, 
		    43, 7, 43, 2, 44, 7, 44, 2, 45, 7, 45, 2, 46, 7, 46, 2, 47, 7, 47, 
		    1, 0, 1, 0, 5, 0, 99, 8, 0, 10, 0, 12, 0, 102, 9, 0, 1, 0, 1, 0, 1, 
		    1, 1, 1, 1, 1, 3, 1, 109, 8, 1, 1, 2, 1, 2, 1, 2, 1, 2, 1, 2, 3, 2, 
		    116, 8, 2, 1, 2, 1, 2, 1, 3, 1, 3, 1, 3, 1, 3, 1, 3, 1, 4, 1, 4, 1, 
		    4, 5, 4, 128, 8, 4, 10, 4, 12, 4, 131, 9, 4, 1, 5, 1, 5, 1, 5, 5, 
		    5, 136, 8, 5, 10, 5, 12, 5, 139, 9, 5, 1, 6, 1, 6, 1, 6, 1, 6, 1, 
		    6, 1, 6, 1, 6, 1, 7, 1, 7, 1, 7, 1, 7, 3, 7, 152, 8, 7, 1, 7, 1, 7, 
		    3, 7, 156, 8, 7, 1, 7, 1, 7, 1, 8, 1, 8, 1, 8, 5, 8, 163, 8, 8, 10, 
		    8, 12, 8, 166, 9, 8, 1, 9, 1, 9, 1, 9, 1, 10, 1, 10, 1, 10, 1, 10, 
		    1, 10, 5, 10, 176, 8, 10, 10, 10, 12, 10, 179, 9, 10, 1, 10, 1, 10, 
		    3, 10, 183, 8, 10, 1, 11, 1, 11, 5, 11, 187, 8, 11, 10, 11, 12, 11, 
		    190, 9, 11, 1, 11, 1, 11, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 
		    1, 12, 1, 12, 1, 12, 1, 12, 1, 12, 3, 12, 205, 8, 12, 1, 13, 1, 13, 
		    1, 13, 1, 13, 1, 13, 1, 14, 1, 14, 1, 15, 1, 15, 1, 15, 1, 15, 3, 
		    15, 218, 8, 15, 1, 16, 1, 16, 1, 16, 1, 16, 1, 17, 1, 17, 1, 17, 1, 
		    17, 1, 17, 1, 17, 3, 17, 230, 8, 17, 3, 17, 232, 8, 17, 1, 18, 1, 
		    18, 1, 18, 1, 18, 5, 18, 238, 8, 18, 10, 18, 12, 18, 241, 9, 18, 1, 
		    18, 3, 18, 244, 8, 18, 1, 18, 1, 18, 1, 19, 1, 19, 1, 19, 1, 19, 5, 
		    19, 252, 8, 19, 10, 19, 12, 19, 255, 9, 19, 1, 20, 1, 20, 1, 20, 5, 
		    20, 260, 8, 20, 10, 20, 12, 20, 263, 9, 20, 1, 21, 1, 21, 1, 21, 1, 
		    21, 1, 21, 1, 21, 3, 21, 271, 8, 21, 1, 22, 1, 22, 1, 22, 3, 22, 276, 
		    8, 22, 1, 22, 1, 22, 3, 22, 280, 8, 22, 1, 22, 1, 22, 1, 22, 3, 22, 
		    285, 8, 22, 1, 22, 1, 22, 1, 23, 1, 23, 1, 23, 1, 23, 1, 23, 3, 23, 
		    294, 8, 23, 1, 24, 1, 24, 1, 24, 1, 24, 1, 25, 1, 25, 1, 25, 1, 25, 
		    1, 26, 1, 26, 1, 26, 1, 27, 1, 27, 1, 27, 1, 28, 1, 28, 1, 29, 1, 
		    29, 1, 29, 1, 30, 1, 30, 1, 30, 1, 31, 1, 31, 3, 31, 320, 8, 31, 1, 
		    31, 1, 31, 1, 32, 1, 32, 1, 32, 1, 33, 1, 33, 1, 33, 1, 33, 1, 33, 
		    1, 33, 1, 33, 3, 33, 334, 8, 33, 1, 34, 1, 34, 1, 34, 1, 34, 1, 34, 
		    1, 35, 1, 35, 1, 35, 1, 36, 1, 36, 1, 37, 1, 37, 1, 37, 5, 37, 349, 
		    8, 37, 10, 37, 12, 37, 352, 9, 37, 1, 38, 1, 38, 1, 38, 5, 38, 357, 
		    8, 38, 10, 38, 12, 38, 360, 9, 38, 1, 39, 1, 39, 1, 39, 5, 39, 365, 
		    8, 39, 10, 39, 12, 39, 368, 9, 39, 1, 40, 1, 40, 1, 40, 5, 40, 373, 
		    8, 40, 10, 40, 12, 40, 376, 9, 40, 1, 41, 1, 41, 1, 41, 5, 41, 381, 
		    8, 41, 10, 41, 12, 41, 384, 9, 41, 1, 42, 1, 42, 1, 42, 5, 42, 389, 
		    8, 42, 10, 42, 12, 42, 392, 9, 42, 1, 43, 1, 43, 1, 43, 3, 43, 397, 
		    8, 43, 1, 44, 1, 44, 1, 44, 1, 44, 1, 44, 1, 44, 1, 44, 1, 44, 3, 
		    44, 407, 8, 44, 1, 45, 1, 45, 1, 45, 3, 45, 412, 8, 45, 1, 45, 1, 
		    45, 1, 46, 1, 46, 1, 46, 1, 46, 1, 46, 4, 46, 421, 8, 46, 11, 46, 
		    12, 46, 422, 1, 47, 1, 47, 1, 47, 0, 0, 48, 0, 2, 4, 6, 8, 10, 12, 
		    14, 16, 18, 20, 22, 24, 26, 28, 30, 32, 34, 36, 38, 40, 42, 44, 46, 
		    48, 50, 52, 54, 56, 58, 60, 62, 64, 66, 68, 70, 72, 74, 76, 78, 80, 
		    82, 84, 86, 88, 90, 92, 94, 0, 8, 2, 0, 2, 2, 12, 15, 1, 0, 17, 18, 
		    1, 0, 38, 39, 1, 0, 40, 43, 1, 0, 44, 45, 2, 0, 16, 16, 46, 47, 3, 
		    0, 16, 16, 45, 45, 48, 49, 2, 0, 50, 52, 54, 57, 438, 0, 100, 1, 0, 
		    0, 0, 2, 108, 1, 0, 0, 0, 4, 110, 1, 0, 0, 0, 6, 119, 1, 0, 0, 0, 
		    8, 124, 1, 0, 0, 0, 10, 132, 1, 0, 0, 0, 12, 140, 1, 0, 0, 0, 14, 
		    147, 1, 0, 0, 0, 16, 159, 1, 0, 0, 0, 18, 167, 1, 0, 0, 0, 20, 182, 
		    1, 0, 0, 0, 22, 184, 1, 0, 0, 0, 24, 204, 1, 0, 0, 0, 26, 206, 1, 
		    0, 0, 0, 28, 211, 1, 0, 0, 0, 30, 217, 1, 0, 0, 0, 32, 219, 1, 0, 
		    0, 0, 34, 223, 1, 0, 0, 0, 36, 233, 1, 0, 0, 0, 38, 247, 1, 0, 0, 
		    0, 40, 256, 1, 0, 0, 0, 42, 270, 1, 0, 0, 0, 44, 275, 1, 0, 0, 0, 
		    46, 288, 1, 0, 0, 0, 48, 295, 1, 0, 0, 0, 50, 299, 1, 0, 0, 0, 52, 
		    303, 1, 0, 0, 0, 54, 306, 1, 0, 0, 0, 56, 309, 1, 0, 0, 0, 58, 311, 
		    1, 0, 0, 0, 60, 314, 1, 0, 0, 0, 62, 317, 1, 0, 0, 0, 64, 323, 1, 
		    0, 0, 0, 66, 333, 1, 0, 0, 0, 68, 335, 1, 0, 0, 0, 70, 340, 1, 0, 
		    0, 0, 72, 343, 1, 0, 0, 0, 74, 345, 1, 0, 0, 0, 76, 353, 1, 0, 0, 
		    0, 78, 361, 1, 0, 0, 0, 80, 369, 1, 0, 0, 0, 82, 377, 1, 0, 0, 0, 
		    84, 385, 1, 0, 0, 0, 86, 396, 1, 0, 0, 0, 88, 406, 1, 0, 0, 0, 90, 
		    408, 1, 0, 0, 0, 92, 415, 1, 0, 0, 0, 94, 424, 1, 0, 0, 0, 96, 99, 
		    3, 2, 1, 0, 97, 99, 3, 24, 12, 0, 98, 96, 1, 0, 0, 0, 98, 97, 1, 0, 
		    0, 0, 99, 102, 1, 0, 0, 0, 100, 98, 1, 0, 0, 0, 100, 101, 1, 0, 0, 
		    0, 101, 103, 1, 0, 0, 0, 102, 100, 1, 0, 0, 0, 103, 104, 5, 0, 0, 
		    1, 104, 1, 1, 0, 0, 0, 105, 109, 3, 4, 2, 0, 106, 109, 3, 12, 6, 0, 
		    107, 109, 3, 14, 7, 0, 108, 105, 1, 0, 0, 0, 108, 106, 1, 0, 0, 0, 
		    108, 107, 1, 0, 0, 0, 109, 3, 1, 0, 0, 0, 110, 111, 5, 1, 0, 0, 111, 
		    112, 3, 8, 4, 0, 112, 115, 3, 66, 33, 0, 113, 114, 5, 2, 0, 0, 114, 
		    116, 3, 10, 5, 0, 115, 113, 1, 0, 0, 0, 115, 116, 1, 0, 0, 0, 116, 
		    117, 1, 0, 0, 0, 117, 118, 5, 3, 0, 0, 118, 5, 1, 0, 0, 0, 119, 120, 
		    3, 8, 4, 0, 120, 121, 5, 4, 0, 0, 121, 122, 3, 10, 5, 0, 122, 123, 
		    5, 3, 0, 0, 123, 7, 1, 0, 0, 0, 124, 129, 5, 53, 0, 0, 125, 126, 5, 
		    5, 0, 0, 126, 128, 5, 53, 0, 0, 127, 125, 1, 0, 0, 0, 128, 131, 1, 
		    0, 0, 0, 129, 127, 1, 0, 0, 0, 129, 130, 1, 0, 0, 0, 130, 9, 1, 0, 
		    0, 0, 131, 129, 1, 0, 0, 0, 132, 137, 3, 72, 36, 0, 133, 134, 5, 5, 
		    0, 0, 134, 136, 3, 72, 36, 0, 135, 133, 1, 0, 0, 0, 136, 139, 1, 0, 
		    0, 0, 137, 135, 1, 0, 0, 0, 137, 138, 1, 0, 0, 0, 138, 11, 1, 0, 0, 
		    0, 139, 137, 1, 0, 0, 0, 140, 141, 5, 6, 0, 0, 141, 142, 5, 53, 0, 
		    0, 142, 143, 3, 66, 33, 0, 143, 144, 5, 2, 0, 0, 144, 145, 3, 72, 
		    36, 0, 145, 146, 5, 3, 0, 0, 146, 13, 1, 0, 0, 0, 147, 148, 5, 7, 
		    0, 0, 148, 149, 5, 53, 0, 0, 149, 151, 5, 8, 0, 0, 150, 152, 3, 16, 
		    8, 0, 151, 150, 1, 0, 0, 0, 151, 152, 1, 0, 0, 0, 152, 153, 1, 0, 
		    0, 0, 153, 155, 5, 9, 0, 0, 154, 156, 3, 20, 10, 0, 155, 154, 1, 0, 
		    0, 0, 155, 156, 1, 0, 0, 0, 156, 157, 1, 0, 0, 0, 157, 158, 3, 22, 
		    11, 0, 158, 15, 1, 0, 0, 0, 159, 164, 3, 18, 9, 0, 160, 161, 5, 5, 
		    0, 0, 161, 163, 3, 18, 9, 0, 162, 160, 1, 0, 0, 0, 163, 166, 1, 0, 
		    0, 0, 164, 162, 1, 0, 0, 0, 164, 165, 1, 0, 0, 0, 165, 17, 1, 0, 0, 
		    0, 166, 164, 1, 0, 0, 0, 167, 168, 5, 53, 0, 0, 168, 169, 3, 66, 33, 
		    0, 169, 19, 1, 0, 0, 0, 170, 183, 3, 66, 33, 0, 171, 172, 5, 8, 0, 
		    0, 172, 177, 3, 66, 33, 0, 173, 174, 5, 5, 0, 0, 174, 176, 3, 66, 
		    33, 0, 175, 173, 1, 0, 0, 0, 176, 179, 1, 0, 0, 0, 177, 175, 1, 0, 
		    0, 0, 177, 178, 1, 0, 0, 0, 178, 180, 1, 0, 0, 0, 179, 177, 1, 0, 
		    0, 0, 180, 181, 5, 9, 0, 0, 181, 183, 1, 0, 0, 0, 182, 170, 1, 0, 
		    0, 0, 182, 171, 1, 0, 0, 0, 183, 21, 1, 0, 0, 0, 184, 188, 5, 10, 
		    0, 0, 185, 187, 3, 24, 12, 0, 186, 185, 1, 0, 0, 0, 187, 190, 1, 0, 
		    0, 0, 188, 186, 1, 0, 0, 0, 188, 189, 1, 0, 0, 0, 189, 191, 1, 0, 
		    0, 0, 190, 188, 1, 0, 0, 0, 191, 192, 5, 11, 0, 0, 192, 23, 1, 0, 
		    0, 0, 193, 205, 3, 4, 2, 0, 194, 205, 3, 6, 3, 0, 195, 205, 3, 26, 
		    13, 0, 196, 205, 3, 32, 16, 0, 197, 205, 3, 34, 17, 0, 198, 205, 3, 
		    36, 18, 0, 199, 205, 3, 42, 21, 0, 200, 205, 3, 58, 29, 0, 201, 205, 
		    3, 60, 30, 0, 202, 205, 3, 62, 31, 0, 203, 205, 3, 64, 32, 0, 204, 
		    193, 1, 0, 0, 0, 204, 194, 1, 0, 0, 0, 204, 195, 1, 0, 0, 0, 204, 
		    196, 1, 0, 0, 0, 204, 197, 1, 0, 0, 0, 204, 198, 1, 0, 0, 0, 204, 
		    199, 1, 0, 0, 0, 204, 200, 1, 0, 0, 0, 204, 201, 1, 0, 0, 0, 204, 
		    202, 1, 0, 0, 0, 204, 203, 1, 0, 0, 0, 205, 25, 1, 0, 0, 0, 206, 207, 
		    3, 30, 15, 0, 207, 208, 3, 28, 14, 0, 208, 209, 3, 72, 36, 0, 209, 
		    210, 5, 3, 0, 0, 210, 27, 1, 0, 0, 0, 211, 212, 7, 0, 0, 0, 212, 29, 
		    1, 0, 0, 0, 213, 218, 5, 53, 0, 0, 214, 218, 3, 92, 46, 0, 215, 216, 
		    5, 16, 0, 0, 216, 218, 3, 72, 36, 0, 217, 213, 1, 0, 0, 0, 217, 214, 
		    1, 0, 0, 0, 217, 215, 1, 0, 0, 0, 218, 31, 1, 0, 0, 0, 219, 220, 3, 
		    30, 15, 0, 220, 221, 7, 1, 0, 0, 221, 222, 5, 3, 0, 0, 222, 33, 1, 
		    0, 0, 0, 223, 224, 5, 19, 0, 0, 224, 225, 3, 72, 36, 0, 225, 231, 
		    3, 22, 11, 0, 226, 229, 5, 20, 0, 0, 227, 230, 3, 34, 17, 0, 228, 
		    230, 3, 22, 11, 0, 229, 227, 1, 0, 0, 0, 229, 228, 1, 0, 0, 0, 230, 
		    232, 1, 0, 0, 0, 231, 226, 1, 0, 0, 0, 231, 232, 1, 0, 0, 0, 232, 
		    35, 1, 0, 0, 0, 233, 234, 5, 21, 0, 0, 234, 235, 3, 72, 36, 0, 235, 
		    239, 5, 10, 0, 0, 236, 238, 3, 38, 19, 0, 237, 236, 1, 0, 0, 0, 238, 
		    241, 1, 0, 0, 0, 239, 237, 1, 0, 0, 0, 239, 240, 1, 0, 0, 0, 240, 
		    243, 1, 0, 0, 0, 241, 239, 1, 0, 0, 0, 242, 244, 3, 40, 20, 0, 243, 
		    242, 1, 0, 0, 0, 243, 244, 1, 0, 0, 0, 244, 245, 1, 0, 0, 0, 245, 
		    246, 5, 11, 0, 0, 246, 37, 1, 0, 0, 0, 247, 248, 5, 22, 0, 0, 248, 
		    249, 3, 10, 5, 0, 249, 253, 5, 23, 0, 0, 250, 252, 3, 24, 12, 0, 251, 
		    250, 1, 0, 0, 0, 252, 255, 1, 0, 0, 0, 253, 251, 1, 0, 0, 0, 253, 
		    254, 1, 0, 0, 0, 254, 39, 1, 0, 0, 0, 255, 253, 1, 0, 0, 0, 256, 257, 
		    5, 24, 0, 0, 257, 261, 5, 23, 0, 0, 258, 260, 3, 24, 12, 0, 259, 258, 
		    1, 0, 0, 0, 260, 263, 1, 0, 0, 0, 261, 259, 1, 0, 0, 0, 261, 262, 
		    1, 0, 0, 0, 262, 41, 1, 0, 0, 0, 263, 261, 1, 0, 0, 0, 264, 265, 5, 
		    25, 0, 0, 265, 271, 3, 44, 22, 0, 266, 267, 5, 25, 0, 0, 267, 271, 
		    3, 54, 27, 0, 268, 269, 5, 25, 0, 0, 269, 271, 3, 56, 28, 0, 270, 
		    264, 1, 0, 0, 0, 270, 266, 1, 0, 0, 0, 270, 268, 1, 0, 0, 0, 271, 
		    43, 1, 0, 0, 0, 272, 276, 3, 46, 23, 0, 273, 276, 3, 48, 24, 0, 274, 
		    276, 3, 50, 25, 0, 275, 272, 1, 0, 0, 0, 275, 273, 1, 0, 0, 0, 275, 
		    274, 1, 0, 0, 0, 275, 276, 1, 0, 0, 0, 276, 277, 1, 0, 0, 0, 277, 
		    279, 5, 3, 0, 0, 278, 280, 3, 72, 36, 0, 279, 278, 1, 0, 0, 0, 279, 
		    280, 1, 0, 0, 0, 280, 281, 1, 0, 0, 0, 281, 284, 5, 3, 0, 0, 282, 
		    285, 3, 50, 25, 0, 283, 285, 3, 52, 26, 0, 284, 282, 1, 0, 0, 0, 284, 
		    283, 1, 0, 0, 0, 284, 285, 1, 0, 0, 0, 285, 286, 1, 0, 0, 0, 286, 
		    287, 3, 22, 11, 0, 287, 45, 1, 0, 0, 0, 288, 289, 5, 1, 0, 0, 289, 
		    290, 3, 8, 4, 0, 290, 293, 3, 66, 33, 0, 291, 292, 5, 2, 0, 0, 292, 
		    294, 3, 10, 5, 0, 293, 291, 1, 0, 0, 0, 293, 294, 1, 0, 0, 0, 294, 
		    47, 1, 0, 0, 0, 295, 296, 3, 8, 4, 0, 296, 297, 5, 4, 0, 0, 297, 298, 
		    3, 10, 5, 0, 298, 49, 1, 0, 0, 0, 299, 300, 3, 30, 15, 0, 300, 301, 
		    3, 28, 14, 0, 301, 302, 3, 72, 36, 0, 302, 51, 1, 0, 0, 0, 303, 304, 
		    3, 30, 15, 0, 304, 305, 7, 1, 0, 0, 305, 53, 1, 0, 0, 0, 306, 307, 
		    3, 72, 36, 0, 307, 308, 3, 22, 11, 0, 308, 55, 1, 0, 0, 0, 309, 310, 
		    3, 22, 11, 0, 310, 57, 1, 0, 0, 0, 311, 312, 5, 26, 0, 0, 312, 313, 
		    5, 3, 0, 0, 313, 59, 1, 0, 0, 0, 314, 315, 5, 27, 0, 0, 315, 316, 
		    5, 3, 0, 0, 316, 61, 1, 0, 0, 0, 317, 319, 5, 28, 0, 0, 318, 320, 
		    3, 10, 5, 0, 319, 318, 1, 0, 0, 0, 319, 320, 1, 0, 0, 0, 320, 321, 
		    1, 0, 0, 0, 321, 322, 5, 3, 0, 0, 322, 63, 1, 0, 0, 0, 323, 324, 3, 
		    90, 45, 0, 324, 325, 5, 3, 0, 0, 325, 65, 1, 0, 0, 0, 326, 334, 5, 
		    29, 0, 0, 327, 334, 5, 30, 0, 0, 328, 334, 5, 31, 0, 0, 329, 334, 
		    5, 32, 0, 0, 330, 334, 5, 33, 0, 0, 331, 334, 3, 68, 34, 0, 332, 334, 
		    3, 70, 35, 0, 333, 326, 1, 0, 0, 0, 333, 327, 1, 0, 0, 0, 333, 328, 
		    1, 0, 0, 0, 333, 329, 1, 0, 0, 0, 333, 330, 1, 0, 0, 0, 333, 331, 
		    1, 0, 0, 0, 333, 332, 1, 0, 0, 0, 334, 67, 1, 0, 0, 0, 335, 336, 5, 
		    34, 0, 0, 336, 337, 3, 72, 36, 0, 337, 338, 5, 35, 0, 0, 338, 339, 
		    3, 66, 33, 0, 339, 69, 1, 0, 0, 0, 340, 341, 5, 16, 0, 0, 341, 342, 
		    3, 66, 33, 0, 342, 71, 1, 0, 0, 0, 343, 344, 3, 74, 37, 0, 344, 73, 
		    1, 0, 0, 0, 345, 350, 3, 76, 38, 0, 346, 347, 5, 36, 0, 0, 347, 349, 
		    3, 76, 38, 0, 348, 346, 1, 0, 0, 0, 349, 352, 1, 0, 0, 0, 350, 348, 
		    1, 0, 0, 0, 350, 351, 1, 0, 0, 0, 351, 75, 1, 0, 0, 0, 352, 350, 1, 
		    0, 0, 0, 353, 358, 3, 78, 39, 0, 354, 355, 5, 37, 0, 0, 355, 357, 
		    3, 78, 39, 0, 356, 354, 1, 0, 0, 0, 357, 360, 1, 0, 0, 0, 358, 356, 
		    1, 0, 0, 0, 358, 359, 1, 0, 0, 0, 359, 77, 1, 0, 0, 0, 360, 358, 1, 
		    0, 0, 0, 361, 366, 3, 80, 40, 0, 362, 363, 7, 2, 0, 0, 363, 365, 3, 
		    80, 40, 0, 364, 362, 1, 0, 0, 0, 365, 368, 1, 0, 0, 0, 366, 364, 1, 
		    0, 0, 0, 366, 367, 1, 0, 0, 0, 367, 79, 1, 0, 0, 0, 368, 366, 1, 0, 
		    0, 0, 369, 374, 3, 82, 41, 0, 370, 371, 7, 3, 0, 0, 371, 373, 3, 82, 
		    41, 0, 372, 370, 1, 0, 0, 0, 373, 376, 1, 0, 0, 0, 374, 372, 1, 0, 
		    0, 0, 374, 375, 1, 0, 0, 0, 375, 81, 1, 0, 0, 0, 376, 374, 1, 0, 0, 
		    0, 377, 382, 3, 84, 42, 0, 378, 379, 7, 4, 0, 0, 379, 381, 3, 84, 
		    42, 0, 380, 378, 1, 0, 0, 0, 381, 384, 1, 0, 0, 0, 382, 380, 1, 0, 
		    0, 0, 382, 383, 1, 0, 0, 0, 383, 83, 1, 0, 0, 0, 384, 382, 1, 0, 0, 
		    0, 385, 390, 3, 86, 43, 0, 386, 387, 7, 5, 0, 0, 387, 389, 3, 86, 
		    43, 0, 388, 386, 1, 0, 0, 0, 389, 392, 1, 0, 0, 0, 390, 388, 1, 0, 
		    0, 0, 390, 391, 1, 0, 0, 0, 391, 85, 1, 0, 0, 0, 392, 390, 1, 0, 0, 
		    0, 393, 394, 7, 6, 0, 0, 394, 397, 3, 86, 43, 0, 395, 397, 3, 88, 
		    44, 0, 396, 393, 1, 0, 0, 0, 396, 395, 1, 0, 0, 0, 397, 87, 1, 0, 
		    0, 0, 398, 407, 3, 94, 47, 0, 399, 407, 5, 53, 0, 0, 400, 407, 3, 
		    90, 45, 0, 401, 407, 3, 92, 46, 0, 402, 403, 5, 8, 0, 0, 403, 404, 
		    3, 72, 36, 0, 404, 405, 5, 9, 0, 0, 405, 407, 1, 0, 0, 0, 406, 398, 
		    1, 0, 0, 0, 406, 399, 1, 0, 0, 0, 406, 400, 1, 0, 0, 0, 406, 401, 
		    1, 0, 0, 0, 406, 402, 1, 0, 0, 0, 407, 89, 1, 0, 0, 0, 408, 409, 5, 
		    53, 0, 0, 409, 411, 5, 8, 0, 0, 410, 412, 3, 10, 5, 0, 411, 410, 1, 
		    0, 0, 0, 411, 412, 1, 0, 0, 0, 412, 413, 1, 0, 0, 0, 413, 414, 5, 
		    9, 0, 0, 414, 91, 1, 0, 0, 0, 415, 420, 5, 53, 0, 0, 416, 417, 5, 
		    34, 0, 0, 417, 418, 3, 72, 36, 0, 418, 419, 5, 35, 0, 0, 419, 421, 
		    1, 0, 0, 0, 420, 416, 1, 0, 0, 0, 421, 422, 1, 0, 0, 0, 422, 420, 
		    1, 0, 0, 0, 422, 423, 1, 0, 0, 0, 423, 93, 1, 0, 0, 0, 424, 425, 7, 
		    7, 0, 0, 425, 95, 1, 0, 0, 0, 37, 98, 100, 108, 115, 129, 137, 151, 
		    155, 164, 177, 182, 188, 204, 217, 229, 231, 239, 243, 253, 261, 270, 
		    275, 279, 284, 293, 319, 333, 350, 358, 366, 374, 382, 390, 396, 406, 
		    411, 422];
		protected static $atn;
		protected static $decisionToDFA;
		protected static $sharedContextCache;

		public function __construct(TokenStream $input)
		{
			parent::__construct($input);

			self::initialize();

			$this->interp = new ParserATNSimulator($this, self::$atn, self::$decisionToDFA, self::$sharedContextCache);
		}

		private static function initialize(): void
		{
			if (self::$atn !== null) {
				return;
			}

			RuntimeMetaData::checkVersion('4.13.2', RuntimeMetaData::VERSION);

			$atn = (new ATNDeserializer())->deserialize(self::SERIALIZED_ATN);

			$decisionToDFA = [];
			for ($i = 0, $count = $atn->getNumberOfDecisions(); $i < $count; $i++) {
				$decisionToDFA[] = new DFA($atn->getDecisionState($i), $i);
			}

			self::$atn = $atn;
			self::$decisionToDFA = $decisionToDFA;
			self::$sharedContextCache = new PredictionContextCache();
		}

		public function getGrammarFileName(): string
		{
			return "Golampi.g4";
		}

		public function getRuleNames(): array
		{
			return self::RULE_NAMES;
		}

		public function getSerializedATN(): array
		{
			return self::SERIALIZED_ATN;
		}

		public function getATN(): ATN
		{
			return self::$atn;
		}

		public function getVocabulary(): Vocabulary
        {
            static $vocabulary;

			return $vocabulary = $vocabulary ?? new VocabularyImpl(self::LITERAL_NAMES, self::SYMBOLIC_NAMES);
        }

		/**
		 * @throws RecognitionException
		 */
		public function program(): Context\ProgramContext
		{
		    $localContext = new Context\ProgramContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 0, self::RULE_program);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(100);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 9007199760744642) !== 0)) {
		        	$this->setState(98);
		        	$this->errorHandler->sync($this);

		        	switch ($this->getInterpreter()->adaptivePredict($this->input, 0, $this->ctx)) {
		        		case 1:
		        		    $this->setState(96);
		        		    $this->declaration();
		        		break;

		        		case 2:
		        		    $this->setState(97);
		        		    $this->statement();
		        		break;
		        	}
		        	$this->setState(102);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(103);
		        $this->match(self::EOF);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function declaration(): Context\DeclarationContext
		{
		    $localContext = new Context\DeclarationContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 2, self::RULE_declaration);

		    try {
		        $this->setState(108);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__0:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(105);
		            	$this->varDecl();
		            	break;

		            case self::T__5:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(106);
		            	$this->constDecl();
		            	break;

		            case self::T__6:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(107);
		            	$this->funcDecl();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function varDecl(): Context\VarDeclContext
		{
		    $localContext = new Context\VarDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 4, self::RULE_varDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(110);
		        $this->match(self::T__0);
		        $this->setState(111);
		        $this->idList();
		        $this->setState(112);
		        $this->type();
		        $this->setState(115);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__1) {
		        	$this->setState(113);
		        	$this->match(self::T__1);
		        	$this->setState(114);
		        	$this->exprList();
		        }
		        $this->setState(117);
		        $this->match(self::T__2);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function shortVarDecl(): Context\ShortVarDeclContext
		{
		    $localContext = new Context\ShortVarDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 6, self::RULE_shortVarDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(119);
		        $this->idList();
		        $this->setState(120);
		        $this->match(self::T__3);
		        $this->setState(121);
		        $this->exprList();
		        $this->setState(122);
		        $this->match(self::T__2);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function idList(): Context\IdListContext
		{
		    $localContext = new Context\IdListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 8, self::RULE_idList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(124);
		        $this->match(self::ID);
		        $this->setState(129);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(125);
		        	$this->match(self::T__4);
		        	$this->setState(126);
		        	$this->match(self::ID);
		        	$this->setState(131);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function exprList(): Context\ExprListContext
		{
		    $localContext = new Context\ExprListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 10, self::RULE_exprList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(132);
		        $this->expression();
		        $this->setState(137);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(133);
		        	$this->match(self::T__4);
		        	$this->setState(134);
		        	$this->expression();
		        	$this->setState(139);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function constDecl(): Context\ConstDeclContext
		{
		    $localContext = new Context\ConstDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 12, self::RULE_constDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(140);
		        $this->match(self::T__5);
		        $this->setState(141);
		        $this->match(self::ID);
		        $this->setState(142);
		        $this->type();
		        $this->setState(143);
		        $this->match(self::T__1);
		        $this->setState(144);
		        $this->expression();
		        $this->setState(145);
		        $this->match(self::T__2);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function funcDecl(): Context\FuncDeclContext
		{
		    $localContext = new Context\FuncDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 14, self::RULE_funcDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(147);
		        $this->match(self::T__6);
		        $this->setState(148);
		        $this->match(self::ID);
		        $this->setState(149);
		        $this->match(self::T__7);
		        $this->setState(151);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::ID) {
		        	$this->setState(150);
		        	$this->paramList();
		        }
		        $this->setState(153);
		        $this->match(self::T__8);
		        $this->setState(155);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 33822933248) !== 0)) {
		        	$this->setState(154);
		        	$this->returnTypes();
		        }
		        $this->setState(157);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function paramList(): Context\ParamListContext
		{
		    $localContext = new Context\ParamListContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 16, self::RULE_paramList);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(159);
		        $this->param();
		        $this->setState(164);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__4) {
		        	$this->setState(160);
		        	$this->match(self::T__4);
		        	$this->setState(161);
		        	$this->param();
		        	$this->setState(166);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function param(): Context\ParamContext
		{
		    $localContext = new Context\ParamContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 18, self::RULE_param);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(167);
		        $this->match(self::ID);
		        $this->setState(168);
		        $this->type();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function returnTypes(): Context\ReturnTypesContext
		{
		    $localContext = new Context\ReturnTypesContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 20, self::RULE_returnTypes);

		    try {
		        $this->setState(182);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__15:
		            case self::T__28:
		            case self::T__29:
		            case self::T__30:
		            case self::T__31:
		            case self::T__32:
		            case self::T__33:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(170);
		            	$this->type();
		            	break;

		            case self::T__7:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(171);
		            	$this->match(self::T__7);
		            	$this->setState(172);
		            	$this->type();
		            	$this->setState(177);
		            	$this->errorHandler->sync($this);

		            	$_la = $this->input->LA(1);
		            	while ($_la === self::T__4) {
		            		$this->setState(173);
		            		$this->match(self::T__4);
		            		$this->setState(174);
		            		$this->type();
		            		$this->setState(179);
		            		$this->errorHandler->sync($this);
		            		$_la = $this->input->LA(1);
		            	}
		            	$this->setState(180);
		            	$this->match(self::T__8);
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function block(): Context\BlockContext
		{
		    $localContext = new Context\BlockContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 22, self::RULE_block);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(184);
		        $this->match(self::T__9);
		        $this->setState(188);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 9007199760744450) !== 0)) {
		        	$this->setState(185);
		        	$this->statement();
		        	$this->setState(190);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(191);
		        $this->match(self::T__10);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function statement(): Context\StatementContext
		{
		    $localContext = new Context\StatementContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 24, self::RULE_statement);

		    try {
		        $this->setState(204);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 12, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(193);
		        	    $this->varDecl();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(194);
		        	    $this->shortVarDecl();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(195);
		        	    $this->assignment();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(196);
		        	    $this->incDecStmt();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(197);
		        	    $this->ifStmt();
		        	break;

		        	case 6:
		        	    $this->enterOuterAlt($localContext, 6);
		        	    $this->setState(198);
		        	    $this->switchStmt();
		        	break;

		        	case 7:
		        	    $this->enterOuterAlt($localContext, 7);
		        	    $this->setState(199);
		        	    $this->forStmt();
		        	break;

		        	case 8:
		        	    $this->enterOuterAlt($localContext, 8);
		        	    $this->setState(200);
		        	    $this->breakStmt();
		        	break;

		        	case 9:
		        	    $this->enterOuterAlt($localContext, 9);
		        	    $this->setState(201);
		        	    $this->continueStmt();
		        	break;

		        	case 10:
		        	    $this->enterOuterAlt($localContext, 10);
		        	    $this->setState(202);
		        	    $this->returnStmt();
		        	break;

		        	case 11:
		        	    $this->enterOuterAlt($localContext, 11);
		        	    $this->setState(203);
		        	    $this->expressionStmt();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assignment(): Context\AssignmentContext
		{
		    $localContext = new Context\AssignmentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 26, self::RULE_assignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(206);
		        $this->lvalue();
		        $this->setState(207);
		        $this->assignOp();
		        $this->setState(208);
		        $this->expression();
		        $this->setState(209);
		        $this->match(self::T__2);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function assignOp(): Context\AssignOpContext
		{
		    $localContext = new Context\AssignOpContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 28, self::RULE_assignOp);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(211);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 61444) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function lvalue(): Context\LvalueContext
		{
		    $localContext = new Context\LvalueContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 30, self::RULE_lvalue);

		    try {
		        $this->setState(217);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 13, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(213);
		        	    $this->match(self::ID);
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(214);
		        	    $this->arrayAccess();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(215);
		        	    $this->match(self::T__15);
		        	    $this->setState(216);
		        	    $this->expression();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function incDecStmt(): Context\IncDecStmtContext
		{
		    $localContext = new Context\IncDecStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 32, self::RULE_incDecStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(219);
		        $this->lvalue();
		        $this->setState(220);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__16 || $_la === self::T__17)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		        $this->setState(221);
		        $this->match(self::T__2);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function ifStmt(): Context\IfStmtContext
		{
		    $localContext = new Context\IfStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 34, self::RULE_ifStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(223);
		        $this->match(self::T__18);
		        $this->setState(224);
		        $this->expression();
		        $this->setState(225);
		        $this->block();
		        $this->setState(231);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__19) {
		        	$this->setState(226);
		        	$this->match(self::T__19);
		        	$this->setState(229);
		        	$this->errorHandler->sync($this);

		        	switch ($this->input->LA(1)) {
		        	    case self::T__18:
		        	    	$this->setState(227);
		        	    	$this->ifStmt();
		        	    	break;

		        	    case self::T__9:
		        	    	$this->setState(228);
		        	    	$this->block();
		        	    	break;

		        	default:
		        		throw new NoViableAltException($this);
		        	}
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function switchStmt(): Context\SwitchStmtContext
		{
		    $localContext = new Context\SwitchStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 36, self::RULE_switchStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(233);
		        $this->match(self::T__20);
		        $this->setState(234);
		        $this->expression();
		        $this->setState(235);
		        $this->match(self::T__9);
		        $this->setState(239);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__21) {
		        	$this->setState(236);
		        	$this->caseClause();
		        	$this->setState(241);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		        $this->setState(243);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__23) {
		        	$this->setState(242);
		        	$this->defaultClause();
		        }
		        $this->setState(245);
		        $this->match(self::T__10);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function caseClause(): Context\CaseClauseContext
		{
		    $localContext = new Context\CaseClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 38, self::RULE_caseClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(247);
		        $this->match(self::T__21);
		        $this->setState(248);
		        $this->exprList();
		        $this->setState(249);
		        $this->match(self::T__22);
		        $this->setState(253);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 9007199760744450) !== 0)) {
		        	$this->setState(250);
		        	$this->statement();
		        	$this->setState(255);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function defaultClause(): Context\DefaultClauseContext
		{
		    $localContext = new Context\DefaultClauseContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 40, self::RULE_defaultClause);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(256);
		        $this->match(self::T__23);
		        $this->setState(257);
		        $this->match(self::T__22);
		        $this->setState(261);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 9007199760744450) !== 0)) {
		        	$this->setState(258);
		        	$this->statement();
		        	$this->setState(263);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forStmt(): Context\ForStmtContext
		{
		    $localContext = new Context\ForStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 42, self::RULE_forStmt);

		    try {
		        $this->setState(270);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 20, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(264);
		        	    $this->match(self::T__24);
		        	    $this->setState(265);
		        	    $this->forClassic();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(266);
		        	    $this->match(self::T__24);
		        	    $this->setState(267);
		        	    $this->forWhile();
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(268);
		        	    $this->match(self::T__24);
		        	    $this->setState(269);
		        	    $this->forInfinite();
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forClassic(): Context\ForClassicContext
		{
		    $localContext = new Context\ForClassicContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 44, self::RULE_forClassic);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(275);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 21, $this->ctx)) {
		            case 1:
		        	    $this->setState(272);
		        	    $this->simpleVarDecl();
		        	break;

		            case 2:
		        	    $this->setState(273);
		        	    $this->simpleShortVarDecl();
		        	break;

		            case 3:
		        	    $this->setState(274);
		        	    $this->simpleAssignment();
		        	break;
		        }
		        $this->setState(277);
		        $this->match(self::T__2);
		        $this->setState(279);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 287984085547155712) !== 0)) {
		        	$this->setState(278);
		        	$this->expression();
		        }
		        $this->setState(281);
		        $this->match(self::T__2);
		        $this->setState(284);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 23, $this->ctx)) {
		            case 1:
		        	    $this->setState(282);
		        	    $this->simpleAssignment();
		        	break;

		            case 2:
		        	    $this->setState(283);
		        	    $this->simpleIncDec();
		        	break;
		        }
		        $this->setState(286);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function simpleVarDecl(): Context\SimpleVarDeclContext
		{
		    $localContext = new Context\SimpleVarDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 46, self::RULE_simpleVarDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(288);
		        $this->match(self::T__0);
		        $this->setState(289);
		        $this->idList();
		        $this->setState(290);
		        $this->type();
		        $this->setState(293);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if ($_la === self::T__1) {
		        	$this->setState(291);
		        	$this->match(self::T__1);
		        	$this->setState(292);
		        	$this->exprList();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function simpleShortVarDecl(): Context\SimpleShortVarDeclContext
		{
		    $localContext = new Context\SimpleShortVarDeclContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 48, self::RULE_simpleShortVarDecl);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(295);
		        $this->idList();
		        $this->setState(296);
		        $this->match(self::T__3);
		        $this->setState(297);
		        $this->exprList();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function simpleAssignment(): Context\SimpleAssignmentContext
		{
		    $localContext = new Context\SimpleAssignmentContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 50, self::RULE_simpleAssignment);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(299);
		        $this->lvalue();
		        $this->setState(300);
		        $this->assignOp();
		        $this->setState(301);
		        $this->expression();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function simpleIncDec(): Context\SimpleIncDecContext
		{
		    $localContext = new Context\SimpleIncDecContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 52, self::RULE_simpleIncDec);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(303);
		        $this->lvalue();
		        $this->setState(304);

		        $_la = $this->input->LA(1);

		        if (!($_la === self::T__16 || $_la === self::T__17)) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forWhile(): Context\ForWhileContext
		{
		    $localContext = new Context\ForWhileContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 54, self::RULE_forWhile);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(306);
		        $this->expression();
		        $this->setState(307);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function forInfinite(): Context\ForInfiniteContext
		{
		    $localContext = new Context\ForInfiniteContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 56, self::RULE_forInfinite);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(309);
		        $this->block();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function breakStmt(): Context\BreakStmtContext
		{
		    $localContext = new Context\BreakStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 58, self::RULE_breakStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(311);
		        $this->match(self::T__25);
		        $this->setState(312);
		        $this->match(self::T__2);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function continueStmt(): Context\ContinueStmtContext
		{
		    $localContext = new Context\ContinueStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 60, self::RULE_continueStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(314);
		        $this->match(self::T__26);
		        $this->setState(315);
		        $this->match(self::T__2);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function returnStmt(): Context\ReturnStmtContext
		{
		    $localContext = new Context\ReturnStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 62, self::RULE_returnStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(317);
		        $this->match(self::T__27);
		        $this->setState(319);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 287984085547155712) !== 0)) {
		        	$this->setState(318);
		        	$this->exprList();
		        }
		        $this->setState(321);
		        $this->match(self::T__2);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expressionStmt(): Context\ExpressionStmtContext
		{
		    $localContext = new Context\ExpressionStmtContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 64, self::RULE_expressionStmt);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(323);
		        $this->functionCall();
		        $this->setState(324);
		        $this->match(self::T__2);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function type(): Context\TypeContext
		{
		    $localContext = new Context\TypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 66, self::RULE_type);

		    try {
		        $this->setState(333);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__28:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(326);
		            	$this->match(self::T__28);
		            	break;

		            case self::T__29:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(327);
		            	$this->match(self::T__29);
		            	break;

		            case self::T__30:
		            	$this->enterOuterAlt($localContext, 3);
		            	$this->setState(328);
		            	$this->match(self::T__30);
		            	break;

		            case self::T__31:
		            	$this->enterOuterAlt($localContext, 4);
		            	$this->setState(329);
		            	$this->match(self::T__31);
		            	break;

		            case self::T__32:
		            	$this->enterOuterAlt($localContext, 5);
		            	$this->setState(330);
		            	$this->match(self::T__32);
		            	break;

		            case self::T__33:
		            	$this->enterOuterAlt($localContext, 6);
		            	$this->setState(331);
		            	$this->arrayType();
		            	break;

		            case self::T__15:
		            	$this->enterOuterAlt($localContext, 7);
		            	$this->setState(332);
		            	$this->pointerType();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayType(): Context\ArrayTypeContext
		{
		    $localContext = new Context\ArrayTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 68, self::RULE_arrayType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(335);
		        $this->match(self::T__33);
		        $this->setState(336);
		        $this->expression();
		        $this->setState(337);
		        $this->match(self::T__34);
		        $this->setState(338);
		        $this->type();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function pointerType(): Context\PointerTypeContext
		{
		    $localContext = new Context\PointerTypeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 70, self::RULE_pointerType);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(340);
		        $this->match(self::T__15);
		        $this->setState(341);
		        $this->type();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function expression(): Context\ExpressionContext
		{
		    $localContext = new Context\ExpressionContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 72, self::RULE_expression);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(343);
		        $this->logicalOr();
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function logicalOr(): Context\LogicalOrContext
		{
		    $localContext = new Context\LogicalOrContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 74, self::RULE_logicalOr);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(345);
		        $this->logicalAnd();
		        $this->setState(350);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__35) {
		        	$this->setState(346);
		        	$this->match(self::T__35);
		        	$this->setState(347);
		        	$this->logicalAnd();
		        	$this->setState(352);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function logicalAnd(): Context\LogicalAndContext
		{
		    $localContext = new Context\LogicalAndContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 76, self::RULE_logicalAnd);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(353);
		        $this->equality();
		        $this->setState(358);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__36) {
		        	$this->setState(354);
		        	$this->match(self::T__36);
		        	$this->setState(355);
		        	$this->equality();
		        	$this->setState(360);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function equality(): Context\EqualityContext
		{
		    $localContext = new Context\EqualityContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 78, self::RULE_equality);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(361);
		        $this->relational();
		        $this->setState(366);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__37 || $_la === self::T__38) {
		        	$this->setState(362);

		        	$_la = $this->input->LA(1);

		        	if (!($_la === self::T__37 || $_la === self::T__38)) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(363);
		        	$this->relational();
		        	$this->setState(368);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function relational(): Context\RelationalContext
		{
		    $localContext = new Context\RelationalContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 80, self::RULE_relational);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(369);
		        $this->additive();
		        $this->setState(374);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 16492674416640) !== 0)) {
		        	$this->setState(370);

		        	$_la = $this->input->LA(1);

		        	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 16492674416640) !== 0))) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(371);
		        	$this->additive();
		        	$this->setState(376);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function additive(): Context\AdditiveContext
		{
		    $localContext = new Context\AdditiveContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 82, self::RULE_additive);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(377);
		        $this->multiplicative();
		        $this->setState(382);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while ($_la === self::T__43 || $_la === self::T__44) {
		        	$this->setState(378);

		        	$_la = $this->input->LA(1);

		        	if (!($_la === self::T__43 || $_la === self::T__44)) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(379);
		        	$this->multiplicative();
		        	$this->setState(384);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function multiplicative(): Context\MultiplicativeContext
		{
		    $localContext = new Context\MultiplicativeContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 84, self::RULE_multiplicative);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(385);
		        $this->unary();
		        $this->setState(390);
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        while (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 211106232598528) !== 0)) {
		        	$this->setState(386);

		        	$_la = $this->input->LA(1);

		        	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 211106232598528) !== 0))) {
		        	$this->errorHandler->recoverInline($this);
		        	} else {
		        		if ($this->input->LA(1) === Token::EOF) {
		        		    $this->matchedEOF = true;
		        	    }

		        		$this->errorHandler->reportMatch($this);
		        		$this->consume();
		        	}
		        	$this->setState(387);
		        	$this->unary();
		        	$this->setState(392);
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function unary(): Context\UnaryContext
		{
		    $localContext = new Context\UnaryContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 86, self::RULE_unary);

		    try {
		        $this->setState(396);
		        $this->errorHandler->sync($this);

		        switch ($this->input->LA(1)) {
		            case self::T__15:
		            case self::T__44:
		            case self::T__47:
		            case self::T__48:
		            	$this->enterOuterAlt($localContext, 1);
		            	$this->setState(393);

		            	$_la = $this->input->LA(1);

		            	if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 879609302286336) !== 0))) {
		            	$this->errorHandler->recoverInline($this);
		            	} else {
		            		if ($this->input->LA(1) === Token::EOF) {
		            		    $this->matchedEOF = true;
		            	    }

		            		$this->errorHandler->reportMatch($this);
		            		$this->consume();
		            	}
		            	$this->setState(394);
		            	$this->unary();
		            	break;

		            case self::T__7:
		            case self::T__49:
		            case self::T__50:
		            case self::T__51:
		            case self::ID:
		            case self::INT:
		            case self::FLOAT:
		            case self::STRING:
		            case self::CHAR:
		            	$this->enterOuterAlt($localContext, 2);
		            	$this->setState(395);
		            	$this->primary();
		            	break;

		        default:
		        	throw new NoViableAltException($this);
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function primary(): Context\PrimaryContext
		{
		    $localContext = new Context\PrimaryContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 88, self::RULE_primary);

		    try {
		        $this->setState(406);
		        $this->errorHandler->sync($this);

		        switch ($this->getInterpreter()->adaptivePredict($this->input, 34, $this->ctx)) {
		        	case 1:
		        	    $this->enterOuterAlt($localContext, 1);
		        	    $this->setState(398);
		        	    $this->literal();
		        	break;

		        	case 2:
		        	    $this->enterOuterAlt($localContext, 2);
		        	    $this->setState(399);
		        	    $this->match(self::ID);
		        	break;

		        	case 3:
		        	    $this->enterOuterAlt($localContext, 3);
		        	    $this->setState(400);
		        	    $this->functionCall();
		        	break;

		        	case 4:
		        	    $this->enterOuterAlt($localContext, 4);
		        	    $this->setState(401);
		        	    $this->arrayAccess();
		        	break;

		        	case 5:
		        	    $this->enterOuterAlt($localContext, 5);
		        	    $this->setState(402);
		        	    $this->match(self::T__7);
		        	    $this->setState(403);
		        	    $this->expression();
		        	    $this->setState(404);
		        	    $this->match(self::T__8);
		        	break;
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function functionCall(): Context\FunctionCallContext
		{
		    $localContext = new Context\FunctionCallContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 90, self::RULE_functionCall);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(408);
		        $this->match(self::ID);
		        $this->setState(409);
		        $this->match(self::T__7);
		        $this->setState(411);
		        $this->errorHandler->sync($this);
		        $_la = $this->input->LA(1);

		        if (((($_la) & ~0x3f) === 0 && ((1 << $_la) & 287984085547155712) !== 0)) {
		        	$this->setState(410);
		        	$this->exprList();
		        }
		        $this->setState(413);
		        $this->match(self::T__8);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function arrayAccess(): Context\ArrayAccessContext
		{
		    $localContext = new Context\ArrayAccessContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 92, self::RULE_arrayAccess);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(415);
		        $this->match(self::ID);
		        $this->setState(420); 
		        $this->errorHandler->sync($this);

		        $_la = $this->input->LA(1);
		        do {
		        	$this->setState(416);
		        	$this->match(self::T__33);
		        	$this->setState(417);
		        	$this->expression();
		        	$this->setState(418);
		        	$this->match(self::T__34);
		        	$this->setState(422); 
		        	$this->errorHandler->sync($this);
		        	$_la = $this->input->LA(1);
		        } while ($_la === self::T__33);
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}

		/**
		 * @throws RecognitionException
		 */
		public function literal(): Context\LiteralContext
		{
		    $localContext = new Context\LiteralContext($this->ctx, $this->getState());

		    $this->enterRule($localContext, 94, self::RULE_literal);

		    try {
		        $this->enterOuterAlt($localContext, 1);
		        $this->setState(424);

		        $_la = $this->input->LA(1);

		        if (!(((($_la) & ~0x3f) === 0 && ((1 << $_la) & 278097276990128128) !== 0))) {
		        $this->errorHandler->recoverInline($this);
		        } else {
		        	if ($this->input->LA(1) === Token::EOF) {
		        	    $this->matchedEOF = true;
		            }

		        	$this->errorHandler->reportMatch($this);
		        	$this->consume();
		        }
		    } catch (RecognitionException $exception) {
		        $localContext->exception = $exception;
		        $this->errorHandler->reportError($this, $exception);
		        $this->errorHandler->recover($this, $exception);
		    } finally {
		        $this->exitRule();
		    }

		    return $localContext;
		}
	}
}

namespace Context {
	use Antlr\Antlr4\Runtime\ParserRuleContext;
	use Antlr\Antlr4\Runtime\Token;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeVisitor;
	use Antlr\Antlr4\Runtime\Tree\TerminalNode;
	use Antlr\Antlr4\Runtime\Tree\ParseTreeListener;
	use GolampiParser;
	use GolampiVisitor;
	use GolampiListener;

	class ProgramContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_program;
	    }

	    public function EOF(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::EOF, 0);
	    }

	    /**
	     * @return array<DeclarationContext>|DeclarationContext|null
	     */
	    public function declaration(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(DeclarationContext::class);
	    	}

	        return $this->getTypedRuleContext(DeclarationContext::class, $index);
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterProgram($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitProgram($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitProgram($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DeclarationContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_declaration;
	    }

	    public function varDecl(): ?VarDeclContext
	    {
	    	return $this->getTypedRuleContext(VarDeclContext::class, 0);
	    }

	    public function constDecl(): ?ConstDeclContext
	    {
	    	return $this->getTypedRuleContext(ConstDeclContext::class, 0);
	    }

	    public function funcDecl(): ?FuncDeclContext
	    {
	    	return $this->getTypedRuleContext(FuncDeclContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterDeclaration($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitDeclaration($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitDeclaration($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class VarDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_varDecl;
	    }

	    public function idList(): ?IdListContext
	    {
	    	return $this->getTypedRuleContext(IdListContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterVarDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitVarDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitVarDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ShortVarDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_shortVarDecl;
	    }

	    public function idList(): ?IdListContext
	    {
	    	return $this->getTypedRuleContext(IdListContext::class, 0);
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterShortVarDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitShortVarDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitShortVarDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IdListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_idList;
	    }

	    /**
	     * @return array<TerminalNode>|TerminalNode|null
	     */
	    public function ID(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTokens(GolampiParser::ID);
	    	}

	        return $this->getToken(GolampiParser::ID, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIdList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIdList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIdList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExprListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_exprList;
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterExprList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitExprList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitExprList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ConstDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_constDecl;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterConstDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitConstDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitConstDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FuncDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_funcDecl;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function paramList(): ?ParamListContext
	    {
	    	return $this->getTypedRuleContext(ParamListContext::class, 0);
	    }

	    public function returnTypes(): ?ReturnTypesContext
	    {
	    	return $this->getTypedRuleContext(ReturnTypesContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterFuncDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitFuncDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitFuncDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParamListContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_paramList;
	    }

	    /**
	     * @return array<ParamContext>|ParamContext|null
	     */
	    public function param(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ParamContext::class);
	    	}

	        return $this->getTypedRuleContext(ParamContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterParamList($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitParamList($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitParamList($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ParamContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_param;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterParam($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitParam($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitParam($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReturnTypesContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_returnTypes;
	    }

	    /**
	     * @return array<TypeContext>|TypeContext|null
	     */
	    public function type(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(TypeContext::class);
	    	}

	        return $this->getTypedRuleContext(TypeContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReturnTypes($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReturnTypes($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReturnTypes($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BlockContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_block;
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterBlock($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitBlock($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitBlock($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class StatementContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_statement;
	    }

	    public function varDecl(): ?VarDeclContext
	    {
	    	return $this->getTypedRuleContext(VarDeclContext::class, 0);
	    }

	    public function shortVarDecl(): ?ShortVarDeclContext
	    {
	    	return $this->getTypedRuleContext(ShortVarDeclContext::class, 0);
	    }

	    public function assignment(): ?AssignmentContext
	    {
	    	return $this->getTypedRuleContext(AssignmentContext::class, 0);
	    }

	    public function incDecStmt(): ?IncDecStmtContext
	    {
	    	return $this->getTypedRuleContext(IncDecStmtContext::class, 0);
	    }

	    public function ifStmt(): ?IfStmtContext
	    {
	    	return $this->getTypedRuleContext(IfStmtContext::class, 0);
	    }

	    public function switchStmt(): ?SwitchStmtContext
	    {
	    	return $this->getTypedRuleContext(SwitchStmtContext::class, 0);
	    }

	    public function forStmt(): ?ForStmtContext
	    {
	    	return $this->getTypedRuleContext(ForStmtContext::class, 0);
	    }

	    public function breakStmt(): ?BreakStmtContext
	    {
	    	return $this->getTypedRuleContext(BreakStmtContext::class, 0);
	    }

	    public function continueStmt(): ?ContinueStmtContext
	    {
	    	return $this->getTypedRuleContext(ContinueStmtContext::class, 0);
	    }

	    public function returnStmt(): ?ReturnStmtContext
	    {
	    	return $this->getTypedRuleContext(ReturnStmtContext::class, 0);
	    }

	    public function expressionStmt(): ?ExpressionStmtContext
	    {
	    	return $this->getTypedRuleContext(ExpressionStmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterStatement($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitStatement($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitStatement($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AssignmentContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_assignment;
	    }

	    public function lvalue(): ?LvalueContext
	    {
	    	return $this->getTypedRuleContext(LvalueContext::class, 0);
	    }

	    public function assignOp(): ?AssignOpContext
	    {
	    	return $this->getTypedRuleContext(AssignOpContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAssignment($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAssignment($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAssignment($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AssignOpContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_assignOp;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAssignOp($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAssignOp($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAssignOp($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LvalueContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_lvalue;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function arrayAccess(): ?ArrayAccessContext
	    {
	    	return $this->getTypedRuleContext(ArrayAccessContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLvalue($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLvalue($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLvalue($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IncDecStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_incDecStmt;
	    }

	    public function lvalue(): ?LvalueContext
	    {
	    	return $this->getTypedRuleContext(LvalueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIncDecStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIncDecStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIncDecStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class IfStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_ifStmt;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<BlockContext>|BlockContext|null
	     */
	    public function block(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(BlockContext::class);
	    	}

	        return $this->getTypedRuleContext(BlockContext::class, $index);
	    }

	    public function ifStmt(): ?IfStmtContext
	    {
	    	return $this->getTypedRuleContext(IfStmtContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterIfStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitIfStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitIfStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SwitchStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_switchStmt;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    /**
	     * @return array<CaseClauseContext>|CaseClauseContext|null
	     */
	    public function caseClause(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(CaseClauseContext::class);
	    	}

	        return $this->getTypedRuleContext(CaseClauseContext::class, $index);
	    }

	    public function defaultClause(): ?DefaultClauseContext
	    {
	    	return $this->getTypedRuleContext(DefaultClauseContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterSwitchStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitSwitchStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitSwitchStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class CaseClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_caseClause;
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterCaseClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitCaseClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitCaseClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class DefaultClauseContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_defaultClause;
	    }

	    /**
	     * @return array<StatementContext>|StatementContext|null
	     */
	    public function statement(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(StatementContext::class);
	    	}

	        return $this->getTypedRuleContext(StatementContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterDefaultClause($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitDefaultClause($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitDefaultClause($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forStmt;
	    }

	    public function forClassic(): ?ForClassicContext
	    {
	    	return $this->getTypedRuleContext(ForClassicContext::class, 0);
	    }

	    public function forWhile(): ?ForWhileContext
	    {
	    	return $this->getTypedRuleContext(ForWhileContext::class, 0);
	    }

	    public function forInfinite(): ?ForInfiniteContext
	    {
	    	return $this->getTypedRuleContext(ForInfiniteContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForClassicContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forClassic;
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

	    public function simpleVarDecl(): ?SimpleVarDeclContext
	    {
	    	return $this->getTypedRuleContext(SimpleVarDeclContext::class, 0);
	    }

	    public function simpleShortVarDecl(): ?SimpleShortVarDeclContext
	    {
	    	return $this->getTypedRuleContext(SimpleShortVarDeclContext::class, 0);
	    }

	    /**
	     * @return array<SimpleAssignmentContext>|SimpleAssignmentContext|null
	     */
	    public function simpleAssignment(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(SimpleAssignmentContext::class);
	    	}

	        return $this->getTypedRuleContext(SimpleAssignmentContext::class, $index);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function simpleIncDec(): ?SimpleIncDecContext
	    {
	    	return $this->getTypedRuleContext(SimpleIncDecContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForClassic($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForClassic($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForClassic($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SimpleVarDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_simpleVarDecl;
	    }

	    public function idList(): ?IdListContext
	    {
	    	return $this->getTypedRuleContext(IdListContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterSimpleVarDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitSimpleVarDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitSimpleVarDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SimpleShortVarDeclContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_simpleShortVarDecl;
	    }

	    public function idList(): ?IdListContext
	    {
	    	return $this->getTypedRuleContext(IdListContext::class, 0);
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterSimpleShortVarDecl($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitSimpleShortVarDecl($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitSimpleShortVarDecl($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SimpleAssignmentContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_simpleAssignment;
	    }

	    public function lvalue(): ?LvalueContext
	    {
	    	return $this->getTypedRuleContext(LvalueContext::class, 0);
	    }

	    public function assignOp(): ?AssignOpContext
	    {
	    	return $this->getTypedRuleContext(AssignOpContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterSimpleAssignment($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitSimpleAssignment($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitSimpleAssignment($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class SimpleIncDecContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_simpleIncDec;
	    }

	    public function lvalue(): ?LvalueContext
	    {
	    	return $this->getTypedRuleContext(LvalueContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterSimpleIncDec($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitSimpleIncDec($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitSimpleIncDec($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForWhileContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forWhile;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForWhile($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForWhile($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForWhile($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ForInfiniteContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_forInfinite;
	    }

	    public function block(): ?BlockContext
	    {
	    	return $this->getTypedRuleContext(BlockContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterForInfinite($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitForInfinite($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitForInfinite($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class BreakStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_breakStmt;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterBreakStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitBreakStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitBreakStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ContinueStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_continueStmt;
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterContinueStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitContinueStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitContinueStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ReturnStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_returnStmt;
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterReturnStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitReturnStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitReturnStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionStmtContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_expressionStmt;
	    }

	    public function functionCall(): ?FunctionCallContext
	    {
	    	return $this->getTypedRuleContext(FunctionCallContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterExpressionStmt($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitExpressionStmt($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitExpressionStmt($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class TypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_type;
	    }

	    public function arrayType(): ?ArrayTypeContext
	    {
	    	return $this->getTypedRuleContext(ArrayTypeContext::class, 0);
	    }

	    public function pointerType(): ?PointerTypeContext
	    {
	    	return $this->getTypedRuleContext(PointerTypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_arrayType;
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterArrayType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitArrayType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArrayType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PointerTypeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_pointerType;
	    }

	    public function type(): ?TypeContext
	    {
	    	return $this->getTypedRuleContext(TypeContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterPointerType($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitPointerType($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitPointerType($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ExpressionContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_expression;
	    }

	    public function logicalOr(): ?LogicalOrContext
	    {
	    	return $this->getTypedRuleContext(LogicalOrContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterExpression($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitExpression($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitExpression($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LogicalOrContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_logicalOr;
	    }

	    /**
	     * @return array<LogicalAndContext>|LogicalAndContext|null
	     */
	    public function logicalAnd(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(LogicalAndContext::class);
	    	}

	        return $this->getTypedRuleContext(LogicalAndContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLogicalOr($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLogicalOr($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLogicalOr($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LogicalAndContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_logicalAnd;
	    }

	    /**
	     * @return array<EqualityContext>|EqualityContext|null
	     */
	    public function equality(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(EqualityContext::class);
	    	}

	        return $this->getTypedRuleContext(EqualityContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLogicalAnd($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLogicalAnd($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLogicalAnd($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class EqualityContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_equality;
	    }

	    /**
	     * @return array<RelationalContext>|RelationalContext|null
	     */
	    public function relational(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(RelationalContext::class);
	    	}

	        return $this->getTypedRuleContext(RelationalContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterEquality($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitEquality($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitEquality($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class RelationalContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_relational;
	    }

	    /**
	     * @return array<AdditiveContext>|AdditiveContext|null
	     */
	    public function additive(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(AdditiveContext::class);
	    	}

	        return $this->getTypedRuleContext(AdditiveContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterRelational($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitRelational($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitRelational($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class AdditiveContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_additive;
	    }

	    /**
	     * @return array<MultiplicativeContext>|MultiplicativeContext|null
	     */
	    public function multiplicative(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(MultiplicativeContext::class);
	    	}

	        return $this->getTypedRuleContext(MultiplicativeContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterAdditive($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitAdditive($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitAdditive($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class MultiplicativeContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_multiplicative;
	    }

	    /**
	     * @return array<UnaryContext>|UnaryContext|null
	     */
	    public function unary(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(UnaryContext::class);
	    	}

	        return $this->getTypedRuleContext(UnaryContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterMultiplicative($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitMultiplicative($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitMultiplicative($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class UnaryContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_unary;
	    }

	    public function unary(): ?UnaryContext
	    {
	    	return $this->getTypedRuleContext(UnaryContext::class, 0);
	    }

	    public function primary(): ?PrimaryContext
	    {
	    	return $this->getTypedRuleContext(PrimaryContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterUnary($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitUnary($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitUnary($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class PrimaryContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_primary;
	    }

	    public function literal(): ?LiteralContext
	    {
	    	return $this->getTypedRuleContext(LiteralContext::class, 0);
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function functionCall(): ?FunctionCallContext
	    {
	    	return $this->getTypedRuleContext(FunctionCallContext::class, 0);
	    }

	    public function arrayAccess(): ?ArrayAccessContext
	    {
	    	return $this->getTypedRuleContext(ArrayAccessContext::class, 0);
	    }

	    public function expression(): ?ExpressionContext
	    {
	    	return $this->getTypedRuleContext(ExpressionContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterPrimary($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitPrimary($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitPrimary($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class FunctionCallContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_functionCall;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    public function exprList(): ?ExprListContext
	    {
	    	return $this->getTypedRuleContext(ExprListContext::class, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterFunctionCall($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitFunctionCall($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitFunctionCall($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class ArrayAccessContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_arrayAccess;
	    }

	    public function ID(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::ID, 0);
	    }

	    /**
	     * @return array<ExpressionContext>|ExpressionContext|null
	     */
	    public function expression(?int $index = null)
	    {
	    	if ($index === null) {
	    		return $this->getTypedRuleContexts(ExpressionContext::class);
	    	}

	        return $this->getTypedRuleContext(ExpressionContext::class, $index);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterArrayAccess($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitArrayAccess($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitArrayAccess($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 

	class LiteralContext extends ParserRuleContext
	{
		public function __construct(?ParserRuleContext $parent, ?int $invokingState = null)
		{
			parent::__construct($parent, $invokingState);
		}

		public function getRuleIndex(): int
		{
		    return GolampiParser::RULE_literal;
	    }

	    public function INT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::INT, 0);
	    }

	    public function FLOAT(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::FLOAT, 0);
	    }

	    public function STRING(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::STRING, 0);
	    }

	    public function CHAR(): ?TerminalNode
	    {
	        return $this->getToken(GolampiParser::CHAR, 0);
	    }

		public function enterRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->enterLiteral($this);
		    }
		}

		public function exitRule(ParseTreeListener $listener): void
		{
			if ($listener instanceof GolampiListener) {
			    $listener->exitLiteral($this);
		    }
		}

		public function accept(ParseTreeVisitor $visitor): mixed
		{
			if ($visitor instanceof GolampiVisitor) {
			    return $visitor->visitLiteral($this);
		    }

			return $visitor->visitChildren($this);
		}
	} 
}