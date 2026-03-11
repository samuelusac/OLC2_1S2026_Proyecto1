// Generated from /var/www/OLC2_1S2026_Proyecto1/Grammar/Golampi.g4 by ANTLR 4.13.1
import org.antlr.v4.runtime.atn.*;
import org.antlr.v4.runtime.dfa.DFA;
import org.antlr.v4.runtime.*;
import org.antlr.v4.runtime.misc.*;
import org.antlr.v4.runtime.tree.*;
import java.util.List;
import java.util.Iterator;
import java.util.ArrayList;

@SuppressWarnings({"all", "warnings", "unchecked", "unused", "cast", "CheckReturnValue"})
public class GolampiParser extends Parser {
	static { RuntimeMetaData.checkVersion("4.13.1", RuntimeMetaData.VERSION); }

	protected static final DFA[] _decisionToDFA;
	protected static final PredictionContextCache _sharedContextCache =
		new PredictionContextCache();
	public static final int
		T__0=1, T__1=2, T__2=3, T__3=4, T__4=5, T__5=6, T__6=7, T__7=8, T__8=9, 
		T__9=10, T__10=11, T__11=12, T__12=13, T__13=14, T__14=15, T__15=16, T__16=17, 
		T__17=18, T__18=19, T__19=20, T__20=21, T__21=22, T__22=23, T__23=24, 
		T__24=25, T__25=26, T__26=27, T__27=28, T__28=29, T__29=30, T__30=31, 
		T__31=32, T__32=33, T__33=34, T__34=35, T__35=36, T__36=37, T__37=38, 
		T__38=39, T__39=40, T__40=41, T__41=42, T__42=43, T__43=44, T__44=45, 
		T__45=46, T__46=47, T__47=48, T__48=49, T__49=50, T__50=51, T__51=52, 
		ID=53, INT=54, FLOAT=55, STRING=56, CHAR=57, DOT=58, COMMENT=59, MULTICOMMENT=60, 
		WS=61;
	public static final int
		RULE_program = 0, RULE_declaration = 1, RULE_varDecl = 2, RULE_shortVarDecl = 3, 
		RULE_idList = 4, RULE_exprList = 5, RULE_constDecl = 6, RULE_funcDecl = 7, 
		RULE_paramList = 8, RULE_param = 9, RULE_returnTypes = 10, RULE_block = 11, 
		RULE_statement = 12, RULE_assignment = 13, RULE_assignOp = 14, RULE_lvalue = 15, 
		RULE_incDecStmt = 16, RULE_ifStmt = 17, RULE_switchStmt = 18, RULE_caseClause = 19, 
		RULE_defaultClause = 20, RULE_forStmt = 21, RULE_forClassic = 22, RULE_simpleVarDecl = 23, 
		RULE_simpleShortVarDecl = 24, RULE_simpleAssignment = 25, RULE_simpleIncDec = 26, 
		RULE_forWhile = 27, RULE_forInfinite = 28, RULE_breakStmt = 29, RULE_continueStmt = 30, 
		RULE_returnStmt = 31, RULE_expressionStmt = 32, RULE_type = 33, RULE_arrayType = 34, 
		RULE_pointerType = 35, RULE_expression = 36, RULE_logicalOr = 37, RULE_logicalAnd = 38, 
		RULE_equality = 39, RULE_relational = 40, RULE_additive = 41, RULE_multiplicative = 42, 
		RULE_unary = 43, RULE_primary = 44, RULE_functionCall = 45, RULE_arrayAccess = 46, 
		RULE_literal = 47;
	private static String[] makeRuleNames() {
		return new String[] {
			"program", "declaration", "varDecl", "shortVarDecl", "idList", "exprList", 
			"constDecl", "funcDecl", "paramList", "param", "returnTypes", "block", 
			"statement", "assignment", "assignOp", "lvalue", "incDecStmt", "ifStmt", 
			"switchStmt", "caseClause", "defaultClause", "forStmt", "forClassic", 
			"simpleVarDecl", "simpleShortVarDecl", "simpleAssignment", "simpleIncDec", 
			"forWhile", "forInfinite", "breakStmt", "continueStmt", "returnStmt", 
			"expressionStmt", "type", "arrayType", "pointerType", "expression", "logicalOr", 
			"logicalAnd", "equality", "relational", "additive", "multiplicative", 
			"unary", "primary", "functionCall", "arrayAccess", "literal"
		};
	}
	public static final String[] ruleNames = makeRuleNames();

	private static String[] makeLiteralNames() {
		return new String[] {
			null, "'var'", "'='", "':='", "','", "'const'", "'func'", "'('", "')'", 
			"'{'", "'}'", "'+='", "'-='", "'*='", "'/='", "'*'", "'++'", "'--'", 
			"'if'", "'else'", "'switch'", "'case'", "':'", "'default'", "'for'", 
			"';'", "'break'", "'continue'", "'return'", "'int'", "'float'", "'bool'", 
			"'string'", "'rune'", "'['", "']'", "'||'", "'&&'", "'=='", "'!='", "'>'", 
			"'<'", "'>='", "'<='", "'+'", "'-'", "'/'", "'%'", "'!'", "'&'", "'true'", 
			"'false'", "'nil'", null, null, null, null, null, "'.'"
		};
	}
	private static final String[] _LITERAL_NAMES = makeLiteralNames();
	private static String[] makeSymbolicNames() {
		return new String[] {
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, null, null, null, null, null, null, null, 
			null, null, null, null, null, "ID", "INT", "FLOAT", "STRING", "CHAR", 
			"DOT", "COMMENT", "MULTICOMMENT", "WS"
		};
	}
	private static final String[] _SYMBOLIC_NAMES = makeSymbolicNames();
	public static final Vocabulary VOCABULARY = new VocabularyImpl(_LITERAL_NAMES, _SYMBOLIC_NAMES);

	/**
	 * @deprecated Use {@link #VOCABULARY} instead.
	 */
	@Deprecated
	public static final String[] tokenNames;
	static {
		tokenNames = new String[_SYMBOLIC_NAMES.length];
		for (int i = 0; i < tokenNames.length; i++) {
			tokenNames[i] = VOCABULARY.getLiteralName(i);
			if (tokenNames[i] == null) {
				tokenNames[i] = VOCABULARY.getSymbolicName(i);
			}

			if (tokenNames[i] == null) {
				tokenNames[i] = "<INVALID>";
			}
		}
	}

	@Override
	@Deprecated
	public String[] getTokenNames() {
		return tokenNames;
	}

	@Override

	public Vocabulary getVocabulary() {
		return VOCABULARY;
	}

	@Override
	public String getGrammarFileName() { return "Golampi.g4"; }

	@Override
	public String[] getRuleNames() { return ruleNames; }

	@Override
	public String getSerializedATN() { return _serializedATN; }

	@Override
	public ATN getATN() { return _ATN; }

	public GolampiParser(TokenStream input) {
		super(input);
		_interp = new ParserATNSimulator(this,_ATN,_decisionToDFA,_sharedContextCache);
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ProgramContext extends ParserRuleContext {
		public TerminalNode EOF() { return getToken(GolampiParser.EOF, 0); }
		public List<DeclarationContext> declaration() {
			return getRuleContexts(DeclarationContext.class);
		}
		public DeclarationContext declaration(int i) {
			return getRuleContext(DeclarationContext.class,i);
		}
		public List<StatementContext> statement() {
			return getRuleContexts(StatementContext.class);
		}
		public StatementContext statement(int i) {
			return getRuleContext(StatementContext.class,i);
		}
		public ProgramContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_program; }
	}

	public final ProgramContext program() throws RecognitionException {
		ProgramContext _localctx = new ProgramContext(_ctx, getState());
		enterRule(_localctx, 0, RULE_program);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(100);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 9007199742623842L) != 0)) {
				{
				setState(98);
				_errHandler.sync(this);
				switch ( getInterpreter().adaptivePredict(_input,0,_ctx) ) {
				case 1:
					{
					setState(96);
					declaration();
					}
					break;
				case 2:
					{
					setState(97);
					statement();
					}
					break;
				}
				}
				setState(102);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(103);
			match(EOF);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class DeclarationContext extends ParserRuleContext {
		public VarDeclContext varDecl() {
			return getRuleContext(VarDeclContext.class,0);
		}
		public ConstDeclContext constDecl() {
			return getRuleContext(ConstDeclContext.class,0);
		}
		public FuncDeclContext funcDecl() {
			return getRuleContext(FuncDeclContext.class,0);
		}
		public DeclarationContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_declaration; }
	}

	public final DeclarationContext declaration() throws RecognitionException {
		DeclarationContext _localctx = new DeclarationContext(_ctx, getState());
		enterRule(_localctx, 2, RULE_declaration);
		try {
			setState(108);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__0:
				enterOuterAlt(_localctx, 1);
				{
				setState(105);
				varDecl();
				}
				break;
			case T__4:
				enterOuterAlt(_localctx, 2);
				{
				setState(106);
				constDecl();
				}
				break;
			case T__5:
				enterOuterAlt(_localctx, 3);
				{
				setState(107);
				funcDecl();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class VarDeclContext extends ParserRuleContext {
		public IdListContext idList() {
			return getRuleContext(IdListContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ExprListContext exprList() {
			return getRuleContext(ExprListContext.class,0);
		}
		public VarDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_varDecl; }
	}

	public final VarDeclContext varDecl() throws RecognitionException {
		VarDeclContext _localctx = new VarDeclContext(_ctx, getState());
		enterRule(_localctx, 4, RULE_varDecl);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(110);
			match(T__0);
			setState(111);
			idList();
			setState(112);
			type();
			setState(115);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__1) {
				{
				setState(113);
				match(T__1);
				setState(114);
				exprList();
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ShortVarDeclContext extends ParserRuleContext {
		public IdListContext idList() {
			return getRuleContext(IdListContext.class,0);
		}
		public ExprListContext exprList() {
			return getRuleContext(ExprListContext.class,0);
		}
		public ShortVarDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_shortVarDecl; }
	}

	public final ShortVarDeclContext shortVarDecl() throws RecognitionException {
		ShortVarDeclContext _localctx = new ShortVarDeclContext(_ctx, getState());
		enterRule(_localctx, 6, RULE_shortVarDecl);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(117);
			idList();
			setState(118);
			match(T__2);
			setState(119);
			exprList();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IdListContext extends ParserRuleContext {
		public List<TerminalNode> ID() { return getTokens(GolampiParser.ID); }
		public TerminalNode ID(int i) {
			return getToken(GolampiParser.ID, i);
		}
		public IdListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_idList; }
	}

	public final IdListContext idList() throws RecognitionException {
		IdListContext _localctx = new IdListContext(_ctx, getState());
		enterRule(_localctx, 8, RULE_idList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(121);
			match(ID);
			setState(126);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__3) {
				{
				{
				setState(122);
				match(T__3);
				setState(123);
				match(ID);
				}
				}
				setState(128);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ExprListContext extends ParserRuleContext {
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public ExprListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_exprList; }
	}

	public final ExprListContext exprList() throws RecognitionException {
		ExprListContext _localctx = new ExprListContext(_ctx, getState());
		enterRule(_localctx, 10, RULE_exprList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(129);
			expression();
			setState(134);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__3) {
				{
				{
				setState(130);
				match(T__3);
				setState(131);
				expression();
				}
				}
				setState(136);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ConstDeclContext extends ParserRuleContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public ConstDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_constDecl; }
	}

	public final ConstDeclContext constDecl() throws RecognitionException {
		ConstDeclContext _localctx = new ConstDeclContext(_ctx, getState());
		enterRule(_localctx, 12, RULE_constDecl);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(137);
			match(T__4);
			setState(138);
			match(ID);
			setState(139);
			type();
			setState(140);
			match(T__1);
			setState(141);
			expression();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class FuncDeclContext extends ParserRuleContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ParamListContext paramList() {
			return getRuleContext(ParamListContext.class,0);
		}
		public ReturnTypesContext returnTypes() {
			return getRuleContext(ReturnTypesContext.class,0);
		}
		public FuncDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_funcDecl; }
	}

	public final FuncDeclContext funcDecl() throws RecognitionException {
		FuncDeclContext _localctx = new FuncDeclContext(_ctx, getState());
		enterRule(_localctx, 14, RULE_funcDecl);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(143);
			match(T__5);
			setState(144);
			match(ID);
			setState(145);
			match(T__6);
			setState(147);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==ID) {
				{
				setState(146);
				paramList();
				}
			}

			setState(149);
			match(T__7);
			setState(151);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 33822900352L) != 0)) {
				{
				setState(150);
				returnTypes();
				}
			}

			setState(153);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ParamListContext extends ParserRuleContext {
		public List<ParamContext> param() {
			return getRuleContexts(ParamContext.class);
		}
		public ParamContext param(int i) {
			return getRuleContext(ParamContext.class,i);
		}
		public ParamListContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_paramList; }
	}

	public final ParamListContext paramList() throws RecognitionException {
		ParamListContext _localctx = new ParamListContext(_ctx, getState());
		enterRule(_localctx, 16, RULE_paramList);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(155);
			param();
			setState(160);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__3) {
				{
				{
				setState(156);
				match(T__3);
				setState(157);
				param();
				}
				}
				setState(162);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ParamContext extends ParserRuleContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ParamContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_param; }
	}

	public final ParamContext param() throws RecognitionException {
		ParamContext _localctx = new ParamContext(_ctx, getState());
		enterRule(_localctx, 18, RULE_param);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(163);
			match(ID);
			setState(164);
			type();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ReturnTypesContext extends ParserRuleContext {
		public List<TypeContext> type() {
			return getRuleContexts(TypeContext.class);
		}
		public TypeContext type(int i) {
			return getRuleContext(TypeContext.class,i);
		}
		public ReturnTypesContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_returnTypes; }
	}

	public final ReturnTypesContext returnTypes() throws RecognitionException {
		ReturnTypesContext _localctx = new ReturnTypesContext(_ctx, getState());
		enterRule(_localctx, 20, RULE_returnTypes);
		int _la;
		try {
			setState(178);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__14:
			case T__28:
			case T__29:
			case T__30:
			case T__31:
			case T__32:
			case T__33:
				enterOuterAlt(_localctx, 1);
				{
				setState(166);
				type();
				}
				break;
			case T__6:
				enterOuterAlt(_localctx, 2);
				{
				setState(167);
				match(T__6);
				setState(168);
				type();
				setState(173);
				_errHandler.sync(this);
				_la = _input.LA(1);
				while (_la==T__3) {
					{
					{
					setState(169);
					match(T__3);
					setState(170);
					type();
					}
					}
					setState(175);
					_errHandler.sync(this);
					_la = _input.LA(1);
				}
				setState(176);
				match(T__7);
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BlockContext extends ParserRuleContext {
		public List<StatementContext> statement() {
			return getRuleContexts(StatementContext.class);
		}
		public StatementContext statement(int i) {
			return getRuleContext(StatementContext.class,i);
		}
		public BlockContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_block; }
	}

	public final BlockContext block() throws RecognitionException {
		BlockContext _localctx = new BlockContext(_ctx, getState());
		enterRule(_localctx, 22, RULE_block);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(180);
			match(T__8);
			setState(184);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 9007199742623746L) != 0)) {
				{
				{
				setState(181);
				statement();
				}
				}
				setState(186);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(187);
			match(T__9);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class StatementContext extends ParserRuleContext {
		public VarDeclContext varDecl() {
			return getRuleContext(VarDeclContext.class,0);
		}
		public ShortVarDeclContext shortVarDecl() {
			return getRuleContext(ShortVarDeclContext.class,0);
		}
		public AssignmentContext assignment() {
			return getRuleContext(AssignmentContext.class,0);
		}
		public IncDecStmtContext incDecStmt() {
			return getRuleContext(IncDecStmtContext.class,0);
		}
		public IfStmtContext ifStmt() {
			return getRuleContext(IfStmtContext.class,0);
		}
		public SwitchStmtContext switchStmt() {
			return getRuleContext(SwitchStmtContext.class,0);
		}
		public ForStmtContext forStmt() {
			return getRuleContext(ForStmtContext.class,0);
		}
		public BreakStmtContext breakStmt() {
			return getRuleContext(BreakStmtContext.class,0);
		}
		public ContinueStmtContext continueStmt() {
			return getRuleContext(ContinueStmtContext.class,0);
		}
		public ReturnStmtContext returnStmt() {
			return getRuleContext(ReturnStmtContext.class,0);
		}
		public ExpressionStmtContext expressionStmt() {
			return getRuleContext(ExpressionStmtContext.class,0);
		}
		public StatementContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_statement; }
	}

	public final StatementContext statement() throws RecognitionException {
		StatementContext _localctx = new StatementContext(_ctx, getState());
		enterRule(_localctx, 24, RULE_statement);
		try {
			setState(200);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,12,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(189);
				varDecl();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(190);
				shortVarDecl();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(191);
				assignment();
				}
				break;
			case 4:
				enterOuterAlt(_localctx, 4);
				{
				setState(192);
				incDecStmt();
				}
				break;
			case 5:
				enterOuterAlt(_localctx, 5);
				{
				setState(193);
				ifStmt();
				}
				break;
			case 6:
				enterOuterAlt(_localctx, 6);
				{
				setState(194);
				switchStmt();
				}
				break;
			case 7:
				enterOuterAlt(_localctx, 7);
				{
				setState(195);
				forStmt();
				}
				break;
			case 8:
				enterOuterAlt(_localctx, 8);
				{
				setState(196);
				breakStmt();
				}
				break;
			case 9:
				enterOuterAlt(_localctx, 9);
				{
				setState(197);
				continueStmt();
				}
				break;
			case 10:
				enterOuterAlt(_localctx, 10);
				{
				setState(198);
				returnStmt();
				}
				break;
			case 11:
				enterOuterAlt(_localctx, 11);
				{
				setState(199);
				expressionStmt();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AssignmentContext extends ParserRuleContext {
		public LvalueContext lvalue() {
			return getRuleContext(LvalueContext.class,0);
		}
		public AssignOpContext assignOp() {
			return getRuleContext(AssignOpContext.class,0);
		}
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public AssignmentContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_assignment; }
	}

	public final AssignmentContext assignment() throws RecognitionException {
		AssignmentContext _localctx = new AssignmentContext(_ctx, getState());
		enterRule(_localctx, 26, RULE_assignment);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(202);
			lvalue();
			setState(203);
			assignOp();
			setState(204);
			expression();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AssignOpContext extends ParserRuleContext {
		public AssignOpContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_assignOp; }
	}

	public final AssignOpContext assignOp() throws RecognitionException {
		AssignOpContext _localctx = new AssignOpContext(_ctx, getState());
		enterRule(_localctx, 28, RULE_assignOp);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(206);
			_la = _input.LA(1);
			if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 30724L) != 0)) ) {
			_errHandler.recoverInline(this);
			}
			else {
				if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
				_errHandler.reportMatch(this);
				consume();
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class LvalueContext extends ParserRuleContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public ArrayAccessContext arrayAccess() {
			return getRuleContext(ArrayAccessContext.class,0);
		}
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public LvalueContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_lvalue; }
	}

	public final LvalueContext lvalue() throws RecognitionException {
		LvalueContext _localctx = new LvalueContext(_ctx, getState());
		enterRule(_localctx, 30, RULE_lvalue);
		try {
			setState(212);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,13,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(208);
				match(ID);
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(209);
				arrayAccess();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(210);
				match(T__14);
				setState(211);
				expression();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IncDecStmtContext extends ParserRuleContext {
		public LvalueContext lvalue() {
			return getRuleContext(LvalueContext.class,0);
		}
		public IncDecStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_incDecStmt; }
	}

	public final IncDecStmtContext incDecStmt() throws RecognitionException {
		IncDecStmtContext _localctx = new IncDecStmtContext(_ctx, getState());
		enterRule(_localctx, 32, RULE_incDecStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(214);
			lvalue();
			setState(215);
			_la = _input.LA(1);
			if ( !(_la==T__15 || _la==T__16) ) {
			_errHandler.recoverInline(this);
			}
			else {
				if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
				_errHandler.reportMatch(this);
				consume();
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class IfStmtContext extends ParserRuleContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public List<BlockContext> block() {
			return getRuleContexts(BlockContext.class);
		}
		public BlockContext block(int i) {
			return getRuleContext(BlockContext.class,i);
		}
		public IfStmtContext ifStmt() {
			return getRuleContext(IfStmtContext.class,0);
		}
		public IfStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_ifStmt; }
	}

	public final IfStmtContext ifStmt() throws RecognitionException {
		IfStmtContext _localctx = new IfStmtContext(_ctx, getState());
		enterRule(_localctx, 34, RULE_ifStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(217);
			match(T__17);
			setState(218);
			expression();
			setState(219);
			block();
			setState(225);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__18) {
				{
				setState(220);
				match(T__18);
				setState(223);
				_errHandler.sync(this);
				switch (_input.LA(1)) {
				case T__17:
					{
					setState(221);
					ifStmt();
					}
					break;
				case T__8:
					{
					setState(222);
					block();
					}
					break;
				default:
					throw new NoViableAltException(this);
				}
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SwitchStmtContext extends ParserRuleContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public List<CaseClauseContext> caseClause() {
			return getRuleContexts(CaseClauseContext.class);
		}
		public CaseClauseContext caseClause(int i) {
			return getRuleContext(CaseClauseContext.class,i);
		}
		public DefaultClauseContext defaultClause() {
			return getRuleContext(DefaultClauseContext.class,0);
		}
		public SwitchStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_switchStmt; }
	}

	public final SwitchStmtContext switchStmt() throws RecognitionException {
		SwitchStmtContext _localctx = new SwitchStmtContext(_ctx, getState());
		enterRule(_localctx, 36, RULE_switchStmt);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(227);
			match(T__19);
			setState(228);
			expression();
			setState(229);
			match(T__8);
			setState(233);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__20) {
				{
				{
				setState(230);
				caseClause();
				}
				}
				setState(235);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			setState(237);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__22) {
				{
				setState(236);
				defaultClause();
				}
			}

			setState(239);
			match(T__9);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class CaseClauseContext extends ParserRuleContext {
		public ExprListContext exprList() {
			return getRuleContext(ExprListContext.class,0);
		}
		public List<StatementContext> statement() {
			return getRuleContexts(StatementContext.class);
		}
		public StatementContext statement(int i) {
			return getRuleContext(StatementContext.class,i);
		}
		public CaseClauseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_caseClause; }
	}

	public final CaseClauseContext caseClause() throws RecognitionException {
		CaseClauseContext _localctx = new CaseClauseContext(_ctx, getState());
		enterRule(_localctx, 38, RULE_caseClause);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(241);
			match(T__20);
			setState(242);
			exprList();
			setState(243);
			match(T__21);
			setState(247);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 9007199742623746L) != 0)) {
				{
				{
				setState(244);
				statement();
				}
				}
				setState(249);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class DefaultClauseContext extends ParserRuleContext {
		public List<StatementContext> statement() {
			return getRuleContexts(StatementContext.class);
		}
		public StatementContext statement(int i) {
			return getRuleContext(StatementContext.class,i);
		}
		public DefaultClauseContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_defaultClause; }
	}

	public final DefaultClauseContext defaultClause() throws RecognitionException {
		DefaultClauseContext _localctx = new DefaultClauseContext(_ctx, getState());
		enterRule(_localctx, 40, RULE_defaultClause);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(250);
			match(T__22);
			setState(251);
			match(T__21);
			setState(255);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 9007199742623746L) != 0)) {
				{
				{
				setState(252);
				statement();
				}
				}
				setState(257);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForStmtContext extends ParserRuleContext {
		public ForClassicContext forClassic() {
			return getRuleContext(ForClassicContext.class,0);
		}
		public ForWhileContext forWhile() {
			return getRuleContext(ForWhileContext.class,0);
		}
		public ForInfiniteContext forInfinite() {
			return getRuleContext(ForInfiniteContext.class,0);
		}
		public ForStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forStmt; }
	}

	public final ForStmtContext forStmt() throws RecognitionException {
		ForStmtContext _localctx = new ForStmtContext(_ctx, getState());
		enterRule(_localctx, 42, RULE_forStmt);
		try {
			setState(264);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,20,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(258);
				match(T__23);
				setState(259);
				forClassic();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(260);
				match(T__23);
				setState(261);
				forWhile();
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(262);
				match(T__23);
				setState(263);
				forInfinite();
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForClassicContext extends ParserRuleContext {
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public SimpleVarDeclContext simpleVarDecl() {
			return getRuleContext(SimpleVarDeclContext.class,0);
		}
		public SimpleShortVarDeclContext simpleShortVarDecl() {
			return getRuleContext(SimpleShortVarDeclContext.class,0);
		}
		public List<SimpleAssignmentContext> simpleAssignment() {
			return getRuleContexts(SimpleAssignmentContext.class);
		}
		public SimpleAssignmentContext simpleAssignment(int i) {
			return getRuleContext(SimpleAssignmentContext.class,i);
		}
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public SimpleIncDecContext simpleIncDec() {
			return getRuleContext(SimpleIncDecContext.class,0);
		}
		public ForClassicContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forClassic; }
	}

	public final ForClassicContext forClassic() throws RecognitionException {
		ForClassicContext _localctx = new ForClassicContext(_ctx, getState());
		enterRule(_localctx, 44, RULE_forClassic);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(269);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,21,_ctx) ) {
			case 1:
				{
				setState(266);
				simpleVarDecl();
				}
				break;
			case 2:
				{
				setState(267);
				simpleShortVarDecl();
				}
				break;
			case 3:
				{
				setState(268);
				simpleAssignment();
				}
				break;
			}
			setState(272);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 287984085547122816L) != 0)) {
				{
				setState(271);
				expression();
				}
			}

			setState(274);
			match(T__24);
			setState(277);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,23,_ctx) ) {
			case 1:
				{
				setState(275);
				simpleAssignment();
				}
				break;
			case 2:
				{
				setState(276);
				simpleIncDec();
				}
				break;
			}
			setState(279);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SimpleVarDeclContext extends ParserRuleContext {
		public IdListContext idList() {
			return getRuleContext(IdListContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ExprListContext exprList() {
			return getRuleContext(ExprListContext.class,0);
		}
		public SimpleVarDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_simpleVarDecl; }
	}

	public final SimpleVarDeclContext simpleVarDecl() throws RecognitionException {
		SimpleVarDeclContext _localctx = new SimpleVarDeclContext(_ctx, getState());
		enterRule(_localctx, 46, RULE_simpleVarDecl);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(281);
			match(T__0);
			setState(282);
			idList();
			setState(283);
			type();
			setState(286);
			_errHandler.sync(this);
			_la = _input.LA(1);
			if (_la==T__1) {
				{
				setState(284);
				match(T__1);
				setState(285);
				exprList();
				}
			}

			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SimpleShortVarDeclContext extends ParserRuleContext {
		public IdListContext idList() {
			return getRuleContext(IdListContext.class,0);
		}
		public ExprListContext exprList() {
			return getRuleContext(ExprListContext.class,0);
		}
		public SimpleShortVarDeclContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_simpleShortVarDecl; }
	}

	public final SimpleShortVarDeclContext simpleShortVarDecl() throws RecognitionException {
		SimpleShortVarDeclContext _localctx = new SimpleShortVarDeclContext(_ctx, getState());
		enterRule(_localctx, 48, RULE_simpleShortVarDecl);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(288);
			idList();
			setState(289);
			match(T__2);
			setState(290);
			exprList();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SimpleAssignmentContext extends ParserRuleContext {
		public LvalueContext lvalue() {
			return getRuleContext(LvalueContext.class,0);
		}
		public AssignOpContext assignOp() {
			return getRuleContext(AssignOpContext.class,0);
		}
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public SimpleAssignmentContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_simpleAssignment; }
	}

	public final SimpleAssignmentContext simpleAssignment() throws RecognitionException {
		SimpleAssignmentContext _localctx = new SimpleAssignmentContext(_ctx, getState());
		enterRule(_localctx, 50, RULE_simpleAssignment);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(292);
			lvalue();
			setState(293);
			assignOp();
			setState(294);
			expression();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class SimpleIncDecContext extends ParserRuleContext {
		public LvalueContext lvalue() {
			return getRuleContext(LvalueContext.class,0);
		}
		public SimpleIncDecContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_simpleIncDec; }
	}

	public final SimpleIncDecContext simpleIncDec() throws RecognitionException {
		SimpleIncDecContext _localctx = new SimpleIncDecContext(_ctx, getState());
		enterRule(_localctx, 52, RULE_simpleIncDec);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(296);
			lvalue();
			setState(297);
			_la = _input.LA(1);
			if ( !(_la==T__15 || _la==T__16) ) {
			_errHandler.recoverInline(this);
			}
			else {
				if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
				_errHandler.reportMatch(this);
				consume();
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForWhileContext extends ParserRuleContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ForWhileContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forWhile; }
	}

	public final ForWhileContext forWhile() throws RecognitionException {
		ForWhileContext _localctx = new ForWhileContext(_ctx, getState());
		enterRule(_localctx, 54, RULE_forWhile);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(299);
			expression();
			setState(300);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ForInfiniteContext extends ParserRuleContext {
		public BlockContext block() {
			return getRuleContext(BlockContext.class,0);
		}
		public ForInfiniteContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_forInfinite; }
	}

	public final ForInfiniteContext forInfinite() throws RecognitionException {
		ForInfiniteContext _localctx = new ForInfiniteContext(_ctx, getState());
		enterRule(_localctx, 56, RULE_forInfinite);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(302);
			block();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class BreakStmtContext extends ParserRuleContext {
		public BreakStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_breakStmt; }
	}

	public final BreakStmtContext breakStmt() throws RecognitionException {
		BreakStmtContext _localctx = new BreakStmtContext(_ctx, getState());
		enterRule(_localctx, 58, RULE_breakStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(304);
			match(T__25);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ContinueStmtContext extends ParserRuleContext {
		public ContinueStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_continueStmt; }
	}

	public final ContinueStmtContext continueStmt() throws RecognitionException {
		ContinueStmtContext _localctx = new ContinueStmtContext(_ctx, getState());
		enterRule(_localctx, 60, RULE_continueStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(306);
			match(T__26);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ReturnStmtContext extends ParserRuleContext {
		public ExprListContext exprList() {
			return getRuleContext(ExprListContext.class,0);
		}
		public ReturnStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_returnStmt; }
	}

	public final ReturnStmtContext returnStmt() throws RecognitionException {
		ReturnStmtContext _localctx = new ReturnStmtContext(_ctx, getState());
		enterRule(_localctx, 62, RULE_returnStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(308);
			match(T__27);
			setState(310);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,25,_ctx) ) {
			case 1:
				{
				setState(309);
				exprList();
				}
				break;
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ExpressionStmtContext extends ParserRuleContext {
		public FunctionCallContext functionCall() {
			return getRuleContext(FunctionCallContext.class,0);
		}
		public ExpressionStmtContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_expressionStmt; }
	}

	public final ExpressionStmtContext expressionStmt() throws RecognitionException {
		ExpressionStmtContext _localctx = new ExpressionStmtContext(_ctx, getState());
		enterRule(_localctx, 64, RULE_expressionStmt);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(312);
			functionCall();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class TypeContext extends ParserRuleContext {
		public ArrayTypeContext arrayType() {
			return getRuleContext(ArrayTypeContext.class,0);
		}
		public PointerTypeContext pointerType() {
			return getRuleContext(PointerTypeContext.class,0);
		}
		public TypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_type; }
	}

	public final TypeContext type() throws RecognitionException {
		TypeContext _localctx = new TypeContext(_ctx, getState());
		enterRule(_localctx, 66, RULE_type);
		try {
			setState(321);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__28:
				enterOuterAlt(_localctx, 1);
				{
				setState(314);
				match(T__28);
				}
				break;
			case T__29:
				enterOuterAlt(_localctx, 2);
				{
				setState(315);
				match(T__29);
				}
				break;
			case T__30:
				enterOuterAlt(_localctx, 3);
				{
				setState(316);
				match(T__30);
				}
				break;
			case T__31:
				enterOuterAlt(_localctx, 4);
				{
				setState(317);
				match(T__31);
				}
				break;
			case T__32:
				enterOuterAlt(_localctx, 5);
				{
				setState(318);
				match(T__32);
				}
				break;
			case T__33:
				enterOuterAlt(_localctx, 6);
				{
				setState(319);
				arrayType();
				}
				break;
			case T__14:
				enterOuterAlt(_localctx, 7);
				{
				setState(320);
				pointerType();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ArrayTypeContext extends ParserRuleContext {
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public ArrayTypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrayType; }
	}

	public final ArrayTypeContext arrayType() throws RecognitionException {
		ArrayTypeContext _localctx = new ArrayTypeContext(_ctx, getState());
		enterRule(_localctx, 68, RULE_arrayType);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(323);
			match(T__33);
			setState(324);
			expression();
			setState(325);
			match(T__34);
			setState(326);
			type();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class PointerTypeContext extends ParserRuleContext {
		public TypeContext type() {
			return getRuleContext(TypeContext.class,0);
		}
		public PointerTypeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_pointerType; }
	}

	public final PointerTypeContext pointerType() throws RecognitionException {
		PointerTypeContext _localctx = new PointerTypeContext(_ctx, getState());
		enterRule(_localctx, 70, RULE_pointerType);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(328);
			match(T__14);
			setState(329);
			type();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ExpressionContext extends ParserRuleContext {
		public LogicalOrContext logicalOr() {
			return getRuleContext(LogicalOrContext.class,0);
		}
		public ExpressionContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_expression; }
	}

	public final ExpressionContext expression() throws RecognitionException {
		ExpressionContext _localctx = new ExpressionContext(_ctx, getState());
		enterRule(_localctx, 72, RULE_expression);
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(331);
			logicalOr();
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class LogicalOrContext extends ParserRuleContext {
		public List<LogicalAndContext> logicalAnd() {
			return getRuleContexts(LogicalAndContext.class);
		}
		public LogicalAndContext logicalAnd(int i) {
			return getRuleContext(LogicalAndContext.class,i);
		}
		public LogicalOrContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_logicalOr; }
	}

	public final LogicalOrContext logicalOr() throws RecognitionException {
		LogicalOrContext _localctx = new LogicalOrContext(_ctx, getState());
		enterRule(_localctx, 74, RULE_logicalOr);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(333);
			logicalAnd();
			setState(338);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__35) {
				{
				{
				setState(334);
				match(T__35);
				setState(335);
				logicalAnd();
				}
				}
				setState(340);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class LogicalAndContext extends ParserRuleContext {
		public List<EqualityContext> equality() {
			return getRuleContexts(EqualityContext.class);
		}
		public EqualityContext equality(int i) {
			return getRuleContext(EqualityContext.class,i);
		}
		public LogicalAndContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_logicalAnd; }
	}

	public final LogicalAndContext logicalAnd() throws RecognitionException {
		LogicalAndContext _localctx = new LogicalAndContext(_ctx, getState());
		enterRule(_localctx, 76, RULE_logicalAnd);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(341);
			equality();
			setState(346);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__36) {
				{
				{
				setState(342);
				match(T__36);
				setState(343);
				equality();
				}
				}
				setState(348);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class EqualityContext extends ParserRuleContext {
		public List<RelationalContext> relational() {
			return getRuleContexts(RelationalContext.class);
		}
		public RelationalContext relational(int i) {
			return getRuleContext(RelationalContext.class,i);
		}
		public EqualityContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_equality; }
	}

	public final EqualityContext equality() throws RecognitionException {
		EqualityContext _localctx = new EqualityContext(_ctx, getState());
		enterRule(_localctx, 78, RULE_equality);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(349);
			relational();
			setState(354);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while (_la==T__37 || _la==T__38) {
				{
				{
				setState(350);
				_la = _input.LA(1);
				if ( !(_la==T__37 || _la==T__38) ) {
				_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(351);
				relational();
				}
				}
				setState(356);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class RelationalContext extends ParserRuleContext {
		public List<AdditiveContext> additive() {
			return getRuleContexts(AdditiveContext.class);
		}
		public AdditiveContext additive(int i) {
			return getRuleContext(AdditiveContext.class,i);
		}
		public RelationalContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_relational; }
	}

	public final RelationalContext relational() throws RecognitionException {
		RelationalContext _localctx = new RelationalContext(_ctx, getState());
		enterRule(_localctx, 80, RULE_relational);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(357);
			additive();
			setState(362);
			_errHandler.sync(this);
			_la = _input.LA(1);
			while ((((_la) & ~0x3f) == 0 && ((1L << _la) & 16492674416640L) != 0)) {
				{
				{
				setState(358);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 16492674416640L) != 0)) ) {
				_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(359);
				additive();
				}
				}
				setState(364);
				_errHandler.sync(this);
				_la = _input.LA(1);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class AdditiveContext extends ParserRuleContext {
		public List<MultiplicativeContext> multiplicative() {
			return getRuleContexts(MultiplicativeContext.class);
		}
		public MultiplicativeContext multiplicative(int i) {
			return getRuleContext(MultiplicativeContext.class,i);
		}
		public AdditiveContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_additive; }
	}

	public final AdditiveContext additive() throws RecognitionException {
		AdditiveContext _localctx = new AdditiveContext(_ctx, getState());
		enterRule(_localctx, 82, RULE_additive);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(365);
			multiplicative();
			setState(370);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,31,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(366);
					_la = _input.LA(1);
					if ( !(_la==T__43 || _la==T__44) ) {
					_errHandler.recoverInline(this);
					}
					else {
						if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
						_errHandler.reportMatch(this);
						consume();
					}
					setState(367);
					multiplicative();
					}
					} 
				}
				setState(372);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,31,_ctx);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class MultiplicativeContext extends ParserRuleContext {
		public List<UnaryContext> unary() {
			return getRuleContexts(UnaryContext.class);
		}
		public UnaryContext unary(int i) {
			return getRuleContext(UnaryContext.class,i);
		}
		public MultiplicativeContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_multiplicative; }
	}

	public final MultiplicativeContext multiplicative() throws RecognitionException {
		MultiplicativeContext _localctx = new MultiplicativeContext(_ctx, getState());
		enterRule(_localctx, 84, RULE_multiplicative);
		int _la;
		try {
			int _alt;
			enterOuterAlt(_localctx, 1);
			{
			setState(373);
			unary();
			setState(378);
			_errHandler.sync(this);
			_alt = getInterpreter().adaptivePredict(_input,32,_ctx);
			while ( _alt!=2 && _alt!=org.antlr.v4.runtime.atn.ATN.INVALID_ALT_NUMBER ) {
				if ( _alt==1 ) {
					{
					{
					setState(374);
					_la = _input.LA(1);
					if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 211106232565760L) != 0)) ) {
					_errHandler.recoverInline(this);
					}
					else {
						if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
						_errHandler.reportMatch(this);
						consume();
					}
					setState(375);
					unary();
					}
					} 
				}
				setState(380);
				_errHandler.sync(this);
				_alt = getInterpreter().adaptivePredict(_input,32,_ctx);
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class UnaryContext extends ParserRuleContext {
		public UnaryContext unary() {
			return getRuleContext(UnaryContext.class,0);
		}
		public PrimaryContext primary() {
			return getRuleContext(PrimaryContext.class,0);
		}
		public UnaryContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_unary; }
	}

	public final UnaryContext unary() throws RecognitionException {
		UnaryContext _localctx = new UnaryContext(_ctx, getState());
		enterRule(_localctx, 86, RULE_unary);
		int _la;
		try {
			setState(384);
			_errHandler.sync(this);
			switch (_input.LA(1)) {
			case T__14:
			case T__44:
			case T__47:
			case T__48:
				enterOuterAlt(_localctx, 1);
				{
				setState(381);
				_la = _input.LA(1);
				if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 879609302253568L) != 0)) ) {
				_errHandler.recoverInline(this);
				}
				else {
					if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
					_errHandler.reportMatch(this);
					consume();
				}
				setState(382);
				unary();
				}
				break;
			case T__6:
			case T__49:
			case T__50:
			case T__51:
			case ID:
			case INT:
			case FLOAT:
			case STRING:
			case CHAR:
				enterOuterAlt(_localctx, 2);
				{
				setState(383);
				primary();
				}
				break;
			default:
				throw new NoViableAltException(this);
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class PrimaryContext extends ParserRuleContext {
		public LiteralContext literal() {
			return getRuleContext(LiteralContext.class,0);
		}
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public FunctionCallContext functionCall() {
			return getRuleContext(FunctionCallContext.class,0);
		}
		public ArrayAccessContext arrayAccess() {
			return getRuleContext(ArrayAccessContext.class,0);
		}
		public ExpressionContext expression() {
			return getRuleContext(ExpressionContext.class,0);
		}
		public PrimaryContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_primary; }
	}

	public final PrimaryContext primary() throws RecognitionException {
		PrimaryContext _localctx = new PrimaryContext(_ctx, getState());
		enterRule(_localctx, 88, RULE_primary);
		try {
			setState(394);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,34,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(386);
				literal();
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(387);
				match(ID);
				}
				break;
			case 3:
				enterOuterAlt(_localctx, 3);
				{
				setState(388);
				functionCall();
				}
				break;
			case 4:
				enterOuterAlt(_localctx, 4);
				{
				setState(389);
				arrayAccess();
				}
				break;
			case 5:
				enterOuterAlt(_localctx, 5);
				{
				setState(390);
				match(T__6);
				setState(391);
				expression();
				setState(392);
				match(T__7);
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class FunctionCallContext extends ParserRuleContext {
		public List<TerminalNode> ID() { return getTokens(GolampiParser.ID); }
		public TerminalNode ID(int i) {
			return getToken(GolampiParser.ID, i);
		}
		public ExprListContext exprList() {
			return getRuleContext(ExprListContext.class,0);
		}
		public TerminalNode DOT() { return getToken(GolampiParser.DOT, 0); }
		public FunctionCallContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_functionCall; }
	}

	public final FunctionCallContext functionCall() throws RecognitionException {
		FunctionCallContext _localctx = new FunctionCallContext(_ctx, getState());
		enterRule(_localctx, 90, RULE_functionCall);
		int _la;
		try {
			setState(410);
			_errHandler.sync(this);
			switch ( getInterpreter().adaptivePredict(_input,37,_ctx) ) {
			case 1:
				enterOuterAlt(_localctx, 1);
				{
				setState(396);
				match(ID);
				setState(397);
				match(T__6);
				setState(399);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 287984085547122816L) != 0)) {
					{
					setState(398);
					exprList();
					}
				}

				setState(401);
				match(T__7);
				}
				break;
			case 2:
				enterOuterAlt(_localctx, 2);
				{
				setState(402);
				match(ID);
				setState(403);
				match(DOT);
				setState(404);
				match(ID);
				setState(405);
				match(T__6);
				setState(407);
				_errHandler.sync(this);
				_la = _input.LA(1);
				if ((((_la) & ~0x3f) == 0 && ((1L << _la) & 287984085547122816L) != 0)) {
					{
					setState(406);
					exprList();
					}
				}

				setState(409);
				match(T__7);
				}
				break;
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class ArrayAccessContext extends ParserRuleContext {
		public TerminalNode ID() { return getToken(GolampiParser.ID, 0); }
		public List<ExpressionContext> expression() {
			return getRuleContexts(ExpressionContext.class);
		}
		public ExpressionContext expression(int i) {
			return getRuleContext(ExpressionContext.class,i);
		}
		public ArrayAccessContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_arrayAccess; }
	}

	public final ArrayAccessContext arrayAccess() throws RecognitionException {
		ArrayAccessContext _localctx = new ArrayAccessContext(_ctx, getState());
		enterRule(_localctx, 92, RULE_arrayAccess);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(412);
			match(ID);
			setState(417); 
			_errHandler.sync(this);
			_la = _input.LA(1);
			do {
				{
				{
				setState(413);
				match(T__33);
				setState(414);
				expression();
				setState(415);
				match(T__34);
				}
				}
				setState(419); 
				_errHandler.sync(this);
				_la = _input.LA(1);
			} while ( _la==T__33 );
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	@SuppressWarnings("CheckReturnValue")
	public static class LiteralContext extends ParserRuleContext {
		public TerminalNode INT() { return getToken(GolampiParser.INT, 0); }
		public TerminalNode FLOAT() { return getToken(GolampiParser.FLOAT, 0); }
		public TerminalNode STRING() { return getToken(GolampiParser.STRING, 0); }
		public TerminalNode CHAR() { return getToken(GolampiParser.CHAR, 0); }
		public LiteralContext(ParserRuleContext parent, int invokingState) {
			super(parent, invokingState);
		}
		@Override public int getRuleIndex() { return RULE_literal; }
	}

	public final LiteralContext literal() throws RecognitionException {
		LiteralContext _localctx = new LiteralContext(_ctx, getState());
		enterRule(_localctx, 94, RULE_literal);
		int _la;
		try {
			enterOuterAlt(_localctx, 1);
			{
			setState(421);
			_la = _input.LA(1);
			if ( !((((_la) & ~0x3f) == 0 && ((1L << _la) & 278097276990128128L) != 0)) ) {
			_errHandler.recoverInline(this);
			}
			else {
				if ( _input.LA(1)==Token.EOF ) matchedEOF = true;
				_errHandler.reportMatch(this);
				consume();
			}
			}
		}
		catch (RecognitionException re) {
			_localctx.exception = re;
			_errHandler.reportError(this, re);
			_errHandler.recover(this, re);
		}
		finally {
			exitRule();
		}
		return _localctx;
	}

	public static final String _serializedATN =
		"\u0004\u0001=\u01a8\u0002\u0000\u0007\u0000\u0002\u0001\u0007\u0001\u0002"+
		"\u0002\u0007\u0002\u0002\u0003\u0007\u0003\u0002\u0004\u0007\u0004\u0002"+
		"\u0005\u0007\u0005\u0002\u0006\u0007\u0006\u0002\u0007\u0007\u0007\u0002"+
		"\b\u0007\b\u0002\t\u0007\t\u0002\n\u0007\n\u0002\u000b\u0007\u000b\u0002"+
		"\f\u0007\f\u0002\r\u0007\r\u0002\u000e\u0007\u000e\u0002\u000f\u0007\u000f"+
		"\u0002\u0010\u0007\u0010\u0002\u0011\u0007\u0011\u0002\u0012\u0007\u0012"+
		"\u0002\u0013\u0007\u0013\u0002\u0014\u0007\u0014\u0002\u0015\u0007\u0015"+
		"\u0002\u0016\u0007\u0016\u0002\u0017\u0007\u0017\u0002\u0018\u0007\u0018"+
		"\u0002\u0019\u0007\u0019\u0002\u001a\u0007\u001a\u0002\u001b\u0007\u001b"+
		"\u0002\u001c\u0007\u001c\u0002\u001d\u0007\u001d\u0002\u001e\u0007\u001e"+
		"\u0002\u001f\u0007\u001f\u0002 \u0007 \u0002!\u0007!\u0002\"\u0007\"\u0002"+
		"#\u0007#\u0002$\u0007$\u0002%\u0007%\u0002&\u0007&\u0002\'\u0007\'\u0002"+
		"(\u0007(\u0002)\u0007)\u0002*\u0007*\u0002+\u0007+\u0002,\u0007,\u0002"+
		"-\u0007-\u0002.\u0007.\u0002/\u0007/\u0001\u0000\u0001\u0000\u0005\u0000"+
		"c\b\u0000\n\u0000\f\u0000f\t\u0000\u0001\u0000\u0001\u0000\u0001\u0001"+
		"\u0001\u0001\u0001\u0001\u0003\u0001m\b\u0001\u0001\u0002\u0001\u0002"+
		"\u0001\u0002\u0001\u0002\u0001\u0002\u0003\u0002t\b\u0002\u0001\u0003"+
		"\u0001\u0003\u0001\u0003\u0001\u0003\u0001\u0004\u0001\u0004\u0001\u0004"+
		"\u0005\u0004}\b\u0004\n\u0004\f\u0004\u0080\t\u0004\u0001\u0005\u0001"+
		"\u0005\u0001\u0005\u0005\u0005\u0085\b\u0005\n\u0005\f\u0005\u0088\t\u0005"+
		"\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006\u0001\u0006"+
		"\u0001\u0007\u0001\u0007\u0001\u0007\u0001\u0007\u0003\u0007\u0094\b\u0007"+
		"\u0001\u0007\u0001\u0007\u0003\u0007\u0098\b\u0007\u0001\u0007\u0001\u0007"+
		"\u0001\b\u0001\b\u0001\b\u0005\b\u009f\b\b\n\b\f\b\u00a2\t\b\u0001\t\u0001"+
		"\t\u0001\t\u0001\n\u0001\n\u0001\n\u0001\n\u0001\n\u0005\n\u00ac\b\n\n"+
		"\n\f\n\u00af\t\n\u0001\n\u0001\n\u0003\n\u00b3\b\n\u0001\u000b\u0001\u000b"+
		"\u0005\u000b\u00b7\b\u000b\n\u000b\f\u000b\u00ba\t\u000b\u0001\u000b\u0001"+
		"\u000b\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f\u0001\f"+
		"\u0001\f\u0001\f\u0001\f\u0003\f\u00c9\b\f\u0001\r\u0001\r\u0001\r\u0001"+
		"\r\u0001\u000e\u0001\u000e\u0001\u000f\u0001\u000f\u0001\u000f\u0001\u000f"+
		"\u0003\u000f\u00d5\b\u000f\u0001\u0010\u0001\u0010\u0001\u0010\u0001\u0011"+
		"\u0001\u0011\u0001\u0011\u0001\u0011\u0001\u0011\u0001\u0011\u0003\u0011"+
		"\u00e0\b\u0011\u0003\u0011\u00e2\b\u0011\u0001\u0012\u0001\u0012\u0001"+
		"\u0012\u0001\u0012\u0005\u0012\u00e8\b\u0012\n\u0012\f\u0012\u00eb\t\u0012"+
		"\u0001\u0012\u0003\u0012\u00ee\b\u0012\u0001\u0012\u0001\u0012\u0001\u0013"+
		"\u0001\u0013\u0001\u0013\u0001\u0013\u0005\u0013\u00f6\b\u0013\n\u0013"+
		"\f\u0013\u00f9\t\u0013\u0001\u0014\u0001\u0014\u0001\u0014\u0005\u0014"+
		"\u00fe\b\u0014\n\u0014\f\u0014\u0101\t\u0014\u0001\u0015\u0001\u0015\u0001"+
		"\u0015\u0001\u0015\u0001\u0015\u0001\u0015\u0003\u0015\u0109\b\u0015\u0001"+
		"\u0016\u0001\u0016\u0001\u0016\u0003\u0016\u010e\b\u0016\u0001\u0016\u0003"+
		"\u0016\u0111\b\u0016\u0001\u0016\u0001\u0016\u0001\u0016\u0003\u0016\u0116"+
		"\b\u0016\u0001\u0016\u0001\u0016\u0001\u0017\u0001\u0017\u0001\u0017\u0001"+
		"\u0017\u0001\u0017\u0003\u0017\u011f\b\u0017\u0001\u0018\u0001\u0018\u0001"+
		"\u0018\u0001\u0018\u0001\u0019\u0001\u0019\u0001\u0019\u0001\u0019\u0001"+
		"\u001a\u0001\u001a\u0001\u001a\u0001\u001b\u0001\u001b\u0001\u001b\u0001"+
		"\u001c\u0001\u001c\u0001\u001d\u0001\u001d\u0001\u001e\u0001\u001e\u0001"+
		"\u001f\u0001\u001f\u0003\u001f\u0137\b\u001f\u0001 \u0001 \u0001!\u0001"+
		"!\u0001!\u0001!\u0001!\u0001!\u0001!\u0003!\u0142\b!\u0001\"\u0001\"\u0001"+
		"\"\u0001\"\u0001\"\u0001#\u0001#\u0001#\u0001$\u0001$\u0001%\u0001%\u0001"+
		"%\u0005%\u0151\b%\n%\f%\u0154\t%\u0001&\u0001&\u0001&\u0005&\u0159\b&"+
		"\n&\f&\u015c\t&\u0001\'\u0001\'\u0001\'\u0005\'\u0161\b\'\n\'\f\'\u0164"+
		"\t\'\u0001(\u0001(\u0001(\u0005(\u0169\b(\n(\f(\u016c\t(\u0001)\u0001"+
		")\u0001)\u0005)\u0171\b)\n)\f)\u0174\t)\u0001*\u0001*\u0001*\u0005*\u0179"+
		"\b*\n*\f*\u017c\t*\u0001+\u0001+\u0001+\u0003+\u0181\b+\u0001,\u0001,"+
		"\u0001,\u0001,\u0001,\u0001,\u0001,\u0001,\u0003,\u018b\b,\u0001-\u0001"+
		"-\u0001-\u0003-\u0190\b-\u0001-\u0001-\u0001-\u0001-\u0001-\u0001-\u0003"+
		"-\u0198\b-\u0001-\u0003-\u019b\b-\u0001.\u0001.\u0001.\u0001.\u0001.\u0004"+
		".\u01a2\b.\u000b.\f.\u01a3\u0001/\u0001/\u0001/\u0000\u00000\u0000\u0002"+
		"\u0004\u0006\b\n\f\u000e\u0010\u0012\u0014\u0016\u0018\u001a\u001c\u001e"+
		" \"$&(*,.02468:<>@BDFHJLNPRTVXZ\\^\u0000\b\u0002\u0000\u0002\u0002\u000b"+
		"\u000e\u0001\u0000\u0010\u0011\u0001\u0000&\'\u0001\u0000(+\u0001\u0000"+
		",-\u0002\u0000\u000f\u000f./\u0003\u0000\u000f\u000f--01\u0002\u00002"+
		"469\u01b5\u0000d\u0001\u0000\u0000\u0000\u0002l\u0001\u0000\u0000\u0000"+
		"\u0004n\u0001\u0000\u0000\u0000\u0006u\u0001\u0000\u0000\u0000\by\u0001"+
		"\u0000\u0000\u0000\n\u0081\u0001\u0000\u0000\u0000\f\u0089\u0001\u0000"+
		"\u0000\u0000\u000e\u008f\u0001\u0000\u0000\u0000\u0010\u009b\u0001\u0000"+
		"\u0000\u0000\u0012\u00a3\u0001\u0000\u0000\u0000\u0014\u00b2\u0001\u0000"+
		"\u0000\u0000\u0016\u00b4\u0001\u0000\u0000\u0000\u0018\u00c8\u0001\u0000"+
		"\u0000\u0000\u001a\u00ca\u0001\u0000\u0000\u0000\u001c\u00ce\u0001\u0000"+
		"\u0000\u0000\u001e\u00d4\u0001\u0000\u0000\u0000 \u00d6\u0001\u0000\u0000"+
		"\u0000\"\u00d9\u0001\u0000\u0000\u0000$\u00e3\u0001\u0000\u0000\u0000"+
		"&\u00f1\u0001\u0000\u0000\u0000(\u00fa\u0001\u0000\u0000\u0000*\u0108"+
		"\u0001\u0000\u0000\u0000,\u010d\u0001\u0000\u0000\u0000.\u0119\u0001\u0000"+
		"\u0000\u00000\u0120\u0001\u0000\u0000\u00002\u0124\u0001\u0000\u0000\u0000"+
		"4\u0128\u0001\u0000\u0000\u00006\u012b\u0001\u0000\u0000\u00008\u012e"+
		"\u0001\u0000\u0000\u0000:\u0130\u0001\u0000\u0000\u0000<\u0132\u0001\u0000"+
		"\u0000\u0000>\u0134\u0001\u0000\u0000\u0000@\u0138\u0001\u0000\u0000\u0000"+
		"B\u0141\u0001\u0000\u0000\u0000D\u0143\u0001\u0000\u0000\u0000F\u0148"+
		"\u0001\u0000\u0000\u0000H\u014b\u0001\u0000\u0000\u0000J\u014d\u0001\u0000"+
		"\u0000\u0000L\u0155\u0001\u0000\u0000\u0000N\u015d\u0001\u0000\u0000\u0000"+
		"P\u0165\u0001\u0000\u0000\u0000R\u016d\u0001\u0000\u0000\u0000T\u0175"+
		"\u0001\u0000\u0000\u0000V\u0180\u0001\u0000\u0000\u0000X\u018a\u0001\u0000"+
		"\u0000\u0000Z\u019a\u0001\u0000\u0000\u0000\\\u019c\u0001\u0000\u0000"+
		"\u0000^\u01a5\u0001\u0000\u0000\u0000`c\u0003\u0002\u0001\u0000ac\u0003"+
		"\u0018\f\u0000b`\u0001\u0000\u0000\u0000ba\u0001\u0000\u0000\u0000cf\u0001"+
		"\u0000\u0000\u0000db\u0001\u0000\u0000\u0000de\u0001\u0000\u0000\u0000"+
		"eg\u0001\u0000\u0000\u0000fd\u0001\u0000\u0000\u0000gh\u0005\u0000\u0000"+
		"\u0001h\u0001\u0001\u0000\u0000\u0000im\u0003\u0004\u0002\u0000jm\u0003"+
		"\f\u0006\u0000km\u0003\u000e\u0007\u0000li\u0001\u0000\u0000\u0000lj\u0001"+
		"\u0000\u0000\u0000lk\u0001\u0000\u0000\u0000m\u0003\u0001\u0000\u0000"+
		"\u0000no\u0005\u0001\u0000\u0000op\u0003\b\u0004\u0000ps\u0003B!\u0000"+
		"qr\u0005\u0002\u0000\u0000rt\u0003\n\u0005\u0000sq\u0001\u0000\u0000\u0000"+
		"st\u0001\u0000\u0000\u0000t\u0005\u0001\u0000\u0000\u0000uv\u0003\b\u0004"+
		"\u0000vw\u0005\u0003\u0000\u0000wx\u0003\n\u0005\u0000x\u0007\u0001\u0000"+
		"\u0000\u0000y~\u00055\u0000\u0000z{\u0005\u0004\u0000\u0000{}\u00055\u0000"+
		"\u0000|z\u0001\u0000\u0000\u0000}\u0080\u0001\u0000\u0000\u0000~|\u0001"+
		"\u0000\u0000\u0000~\u007f\u0001\u0000\u0000\u0000\u007f\t\u0001\u0000"+
		"\u0000\u0000\u0080~\u0001\u0000\u0000\u0000\u0081\u0086\u0003H$\u0000"+
		"\u0082\u0083\u0005\u0004\u0000\u0000\u0083\u0085\u0003H$\u0000\u0084\u0082"+
		"\u0001\u0000\u0000\u0000\u0085\u0088\u0001\u0000\u0000\u0000\u0086\u0084"+
		"\u0001\u0000\u0000\u0000\u0086\u0087\u0001\u0000\u0000\u0000\u0087\u000b"+
		"\u0001\u0000\u0000\u0000\u0088\u0086\u0001\u0000\u0000\u0000\u0089\u008a"+
		"\u0005\u0005\u0000\u0000\u008a\u008b\u00055\u0000\u0000\u008b\u008c\u0003"+
		"B!\u0000\u008c\u008d\u0005\u0002\u0000\u0000\u008d\u008e\u0003H$\u0000"+
		"\u008e\r\u0001\u0000\u0000\u0000\u008f\u0090\u0005\u0006\u0000\u0000\u0090"+
		"\u0091\u00055\u0000\u0000\u0091\u0093\u0005\u0007\u0000\u0000\u0092\u0094"+
		"\u0003\u0010\b\u0000\u0093\u0092\u0001\u0000\u0000\u0000\u0093\u0094\u0001"+
		"\u0000\u0000\u0000\u0094\u0095\u0001\u0000\u0000\u0000\u0095\u0097\u0005"+
		"\b\u0000\u0000\u0096\u0098\u0003\u0014\n\u0000\u0097\u0096\u0001\u0000"+
		"\u0000\u0000\u0097\u0098\u0001\u0000\u0000\u0000\u0098\u0099\u0001\u0000"+
		"\u0000\u0000\u0099\u009a\u0003\u0016\u000b\u0000\u009a\u000f\u0001\u0000"+
		"\u0000\u0000\u009b\u00a0\u0003\u0012\t\u0000\u009c\u009d\u0005\u0004\u0000"+
		"\u0000\u009d\u009f\u0003\u0012\t\u0000\u009e\u009c\u0001\u0000\u0000\u0000"+
		"\u009f\u00a2\u0001\u0000\u0000\u0000\u00a0\u009e\u0001\u0000\u0000\u0000"+
		"\u00a0\u00a1\u0001\u0000\u0000\u0000\u00a1\u0011\u0001\u0000\u0000\u0000"+
		"\u00a2\u00a0\u0001\u0000\u0000\u0000\u00a3\u00a4\u00055\u0000\u0000\u00a4"+
		"\u00a5\u0003B!\u0000\u00a5\u0013\u0001\u0000\u0000\u0000\u00a6\u00b3\u0003"+
		"B!\u0000\u00a7\u00a8\u0005\u0007\u0000\u0000\u00a8\u00ad\u0003B!\u0000"+
		"\u00a9\u00aa\u0005\u0004\u0000\u0000\u00aa\u00ac\u0003B!\u0000\u00ab\u00a9"+
		"\u0001\u0000\u0000\u0000\u00ac\u00af\u0001\u0000\u0000\u0000\u00ad\u00ab"+
		"\u0001\u0000\u0000\u0000\u00ad\u00ae\u0001\u0000\u0000\u0000\u00ae\u00b0"+
		"\u0001\u0000\u0000\u0000\u00af\u00ad\u0001\u0000\u0000\u0000\u00b0\u00b1"+
		"\u0005\b\u0000\u0000\u00b1\u00b3\u0001\u0000\u0000\u0000\u00b2\u00a6\u0001"+
		"\u0000\u0000\u0000\u00b2\u00a7\u0001\u0000\u0000\u0000\u00b3\u0015\u0001"+
		"\u0000\u0000\u0000\u00b4\u00b8\u0005\t\u0000\u0000\u00b5\u00b7\u0003\u0018"+
		"\f\u0000\u00b6\u00b5\u0001\u0000\u0000\u0000\u00b7\u00ba\u0001\u0000\u0000"+
		"\u0000\u00b8\u00b6\u0001\u0000\u0000\u0000\u00b8\u00b9\u0001\u0000\u0000"+
		"\u0000\u00b9\u00bb\u0001\u0000\u0000\u0000\u00ba\u00b8\u0001\u0000\u0000"+
		"\u0000\u00bb\u00bc\u0005\n\u0000\u0000\u00bc\u0017\u0001\u0000\u0000\u0000"+
		"\u00bd\u00c9\u0003\u0004\u0002\u0000\u00be\u00c9\u0003\u0006\u0003\u0000"+
		"\u00bf\u00c9\u0003\u001a\r\u0000\u00c0\u00c9\u0003 \u0010\u0000\u00c1"+
		"\u00c9\u0003\"\u0011\u0000\u00c2\u00c9\u0003$\u0012\u0000\u00c3\u00c9"+
		"\u0003*\u0015\u0000\u00c4\u00c9\u0003:\u001d\u0000\u00c5\u00c9\u0003<"+
		"\u001e\u0000\u00c6\u00c9\u0003>\u001f\u0000\u00c7\u00c9\u0003@ \u0000"+
		"\u00c8\u00bd\u0001\u0000\u0000\u0000\u00c8\u00be\u0001\u0000\u0000\u0000"+
		"\u00c8\u00bf\u0001\u0000\u0000\u0000\u00c8\u00c0\u0001\u0000\u0000\u0000"+
		"\u00c8\u00c1\u0001\u0000\u0000\u0000\u00c8\u00c2\u0001\u0000\u0000\u0000"+
		"\u00c8\u00c3\u0001\u0000\u0000\u0000\u00c8\u00c4\u0001\u0000\u0000\u0000"+
		"\u00c8\u00c5\u0001\u0000\u0000\u0000\u00c8\u00c6\u0001\u0000\u0000\u0000"+
		"\u00c8\u00c7\u0001\u0000\u0000\u0000\u00c9\u0019\u0001\u0000\u0000\u0000"+
		"\u00ca\u00cb\u0003\u001e\u000f\u0000\u00cb\u00cc\u0003\u001c\u000e\u0000"+
		"\u00cc\u00cd\u0003H$\u0000\u00cd\u001b\u0001\u0000\u0000\u0000\u00ce\u00cf"+
		"\u0007\u0000\u0000\u0000\u00cf\u001d\u0001\u0000\u0000\u0000\u00d0\u00d5"+
		"\u00055\u0000\u0000\u00d1\u00d5\u0003\\.\u0000\u00d2\u00d3\u0005\u000f"+
		"\u0000\u0000\u00d3\u00d5\u0003H$\u0000\u00d4\u00d0\u0001\u0000\u0000\u0000"+
		"\u00d4\u00d1\u0001\u0000\u0000\u0000\u00d4\u00d2\u0001\u0000\u0000\u0000"+
		"\u00d5\u001f\u0001\u0000\u0000\u0000\u00d6\u00d7\u0003\u001e\u000f\u0000"+
		"\u00d7\u00d8\u0007\u0001\u0000\u0000\u00d8!\u0001\u0000\u0000\u0000\u00d9"+
		"\u00da\u0005\u0012\u0000\u0000\u00da\u00db\u0003H$\u0000\u00db\u00e1\u0003"+
		"\u0016\u000b\u0000\u00dc\u00df\u0005\u0013\u0000\u0000\u00dd\u00e0\u0003"+
		"\"\u0011\u0000\u00de\u00e0\u0003\u0016\u000b\u0000\u00df\u00dd\u0001\u0000"+
		"\u0000\u0000\u00df\u00de\u0001\u0000\u0000\u0000\u00e0\u00e2\u0001\u0000"+
		"\u0000\u0000\u00e1\u00dc\u0001\u0000\u0000\u0000\u00e1\u00e2\u0001\u0000"+
		"\u0000\u0000\u00e2#\u0001\u0000\u0000\u0000\u00e3\u00e4\u0005\u0014\u0000"+
		"\u0000\u00e4\u00e5\u0003H$\u0000\u00e5\u00e9\u0005\t\u0000\u0000\u00e6"+
		"\u00e8\u0003&\u0013\u0000\u00e7\u00e6\u0001\u0000\u0000\u0000\u00e8\u00eb"+
		"\u0001\u0000\u0000\u0000\u00e9\u00e7\u0001\u0000\u0000\u0000\u00e9\u00ea"+
		"\u0001\u0000\u0000\u0000\u00ea\u00ed\u0001\u0000\u0000\u0000\u00eb\u00e9"+
		"\u0001\u0000\u0000\u0000\u00ec\u00ee\u0003(\u0014\u0000\u00ed\u00ec\u0001"+
		"\u0000\u0000\u0000\u00ed\u00ee\u0001\u0000\u0000\u0000\u00ee\u00ef\u0001"+
		"\u0000\u0000\u0000\u00ef\u00f0\u0005\n\u0000\u0000\u00f0%\u0001\u0000"+
		"\u0000\u0000\u00f1\u00f2\u0005\u0015\u0000\u0000\u00f2\u00f3\u0003\n\u0005"+
		"\u0000\u00f3\u00f7\u0005\u0016\u0000\u0000\u00f4\u00f6\u0003\u0018\f\u0000"+
		"\u00f5\u00f4\u0001\u0000\u0000\u0000\u00f6\u00f9\u0001\u0000\u0000\u0000"+
		"\u00f7\u00f5\u0001\u0000\u0000\u0000\u00f7\u00f8\u0001\u0000\u0000\u0000"+
		"\u00f8\'\u0001\u0000\u0000\u0000\u00f9\u00f7\u0001\u0000\u0000\u0000\u00fa"+
		"\u00fb\u0005\u0017\u0000\u0000\u00fb\u00ff\u0005\u0016\u0000\u0000\u00fc"+
		"\u00fe\u0003\u0018\f\u0000\u00fd\u00fc\u0001\u0000\u0000\u0000\u00fe\u0101"+
		"\u0001\u0000\u0000\u0000\u00ff\u00fd\u0001\u0000\u0000\u0000\u00ff\u0100"+
		"\u0001\u0000\u0000\u0000\u0100)\u0001\u0000\u0000\u0000\u0101\u00ff\u0001"+
		"\u0000\u0000\u0000\u0102\u0103\u0005\u0018\u0000\u0000\u0103\u0109\u0003"+
		",\u0016\u0000\u0104\u0105\u0005\u0018\u0000\u0000\u0105\u0109\u00036\u001b"+
		"\u0000\u0106\u0107\u0005\u0018\u0000\u0000\u0107\u0109\u00038\u001c\u0000"+
		"\u0108\u0102\u0001\u0000\u0000\u0000\u0108\u0104\u0001\u0000\u0000\u0000"+
		"\u0108\u0106\u0001\u0000\u0000\u0000\u0109+\u0001\u0000\u0000\u0000\u010a"+
		"\u010e\u0003.\u0017\u0000\u010b\u010e\u00030\u0018\u0000\u010c\u010e\u0003"+
		"2\u0019\u0000\u010d\u010a\u0001\u0000\u0000\u0000\u010d\u010b\u0001\u0000"+
		"\u0000\u0000\u010d\u010c\u0001\u0000\u0000\u0000\u010d\u010e\u0001\u0000"+
		"\u0000\u0000\u010e\u0110\u0001\u0000\u0000\u0000\u010f\u0111\u0003H$\u0000"+
		"\u0110\u010f\u0001\u0000\u0000\u0000\u0110\u0111\u0001\u0000\u0000\u0000"+
		"\u0111\u0112\u0001\u0000\u0000\u0000\u0112\u0115\u0005\u0019\u0000\u0000"+
		"\u0113\u0116\u00032\u0019\u0000\u0114\u0116\u00034\u001a\u0000\u0115\u0113"+
		"\u0001\u0000\u0000\u0000\u0115\u0114\u0001\u0000\u0000\u0000\u0115\u0116"+
		"\u0001\u0000\u0000\u0000\u0116\u0117\u0001\u0000\u0000\u0000\u0117\u0118"+
		"\u0003\u0016\u000b\u0000\u0118-\u0001\u0000\u0000\u0000\u0119\u011a\u0005"+
		"\u0001\u0000\u0000\u011a\u011b\u0003\b\u0004\u0000\u011b\u011e\u0003B"+
		"!\u0000\u011c\u011d\u0005\u0002\u0000\u0000\u011d\u011f\u0003\n\u0005"+
		"\u0000\u011e\u011c\u0001\u0000\u0000\u0000\u011e\u011f\u0001\u0000\u0000"+
		"\u0000\u011f/\u0001\u0000\u0000\u0000\u0120\u0121\u0003\b\u0004\u0000"+
		"\u0121\u0122\u0005\u0003\u0000\u0000\u0122\u0123\u0003\n\u0005\u0000\u0123"+
		"1\u0001\u0000\u0000\u0000\u0124\u0125\u0003\u001e\u000f\u0000\u0125\u0126"+
		"\u0003\u001c\u000e\u0000\u0126\u0127\u0003H$\u0000\u01273\u0001\u0000"+
		"\u0000\u0000\u0128\u0129\u0003\u001e\u000f\u0000\u0129\u012a\u0007\u0001"+
		"\u0000\u0000\u012a5\u0001\u0000\u0000\u0000\u012b\u012c\u0003H$\u0000"+
		"\u012c\u012d\u0003\u0016\u000b\u0000\u012d7\u0001\u0000\u0000\u0000\u012e"+
		"\u012f\u0003\u0016\u000b\u0000\u012f9\u0001\u0000\u0000\u0000\u0130\u0131"+
		"\u0005\u001a\u0000\u0000\u0131;\u0001\u0000\u0000\u0000\u0132\u0133\u0005"+
		"\u001b\u0000\u0000\u0133=\u0001\u0000\u0000\u0000\u0134\u0136\u0005\u001c"+
		"\u0000\u0000\u0135\u0137\u0003\n\u0005\u0000\u0136\u0135\u0001\u0000\u0000"+
		"\u0000\u0136\u0137\u0001\u0000\u0000\u0000\u0137?\u0001\u0000\u0000\u0000"+
		"\u0138\u0139\u0003Z-\u0000\u0139A\u0001\u0000\u0000\u0000\u013a\u0142"+
		"\u0005\u001d\u0000\u0000\u013b\u0142\u0005\u001e\u0000\u0000\u013c\u0142"+
		"\u0005\u001f\u0000\u0000\u013d\u0142\u0005 \u0000\u0000\u013e\u0142\u0005"+
		"!\u0000\u0000\u013f\u0142\u0003D\"\u0000\u0140\u0142\u0003F#\u0000\u0141"+
		"\u013a\u0001\u0000\u0000\u0000\u0141\u013b\u0001\u0000\u0000\u0000\u0141"+
		"\u013c\u0001\u0000\u0000\u0000\u0141\u013d\u0001\u0000\u0000\u0000\u0141"+
		"\u013e\u0001\u0000\u0000\u0000\u0141\u013f\u0001\u0000\u0000\u0000\u0141"+
		"\u0140\u0001\u0000\u0000\u0000\u0142C\u0001\u0000\u0000\u0000\u0143\u0144"+
		"\u0005\"\u0000\u0000\u0144\u0145\u0003H$\u0000\u0145\u0146\u0005#\u0000"+
		"\u0000\u0146\u0147\u0003B!\u0000\u0147E\u0001\u0000\u0000\u0000\u0148"+
		"\u0149\u0005\u000f\u0000\u0000\u0149\u014a\u0003B!\u0000\u014aG\u0001"+
		"\u0000\u0000\u0000\u014b\u014c\u0003J%\u0000\u014cI\u0001\u0000\u0000"+
		"\u0000\u014d\u0152\u0003L&\u0000\u014e\u014f\u0005$\u0000\u0000\u014f"+
		"\u0151\u0003L&\u0000\u0150\u014e\u0001\u0000\u0000\u0000\u0151\u0154\u0001"+
		"\u0000\u0000\u0000\u0152\u0150\u0001\u0000\u0000\u0000\u0152\u0153\u0001"+
		"\u0000\u0000\u0000\u0153K\u0001\u0000\u0000\u0000\u0154\u0152\u0001\u0000"+
		"\u0000\u0000\u0155\u015a\u0003N\'\u0000\u0156\u0157\u0005%\u0000\u0000"+
		"\u0157\u0159\u0003N\'\u0000\u0158\u0156\u0001\u0000\u0000\u0000\u0159"+
		"\u015c\u0001\u0000\u0000\u0000\u015a\u0158\u0001\u0000\u0000\u0000\u015a"+
		"\u015b\u0001\u0000\u0000\u0000\u015bM\u0001\u0000\u0000\u0000\u015c\u015a"+
		"\u0001\u0000\u0000\u0000\u015d\u0162\u0003P(\u0000\u015e\u015f\u0007\u0002"+
		"\u0000\u0000\u015f\u0161\u0003P(\u0000\u0160\u015e\u0001\u0000\u0000\u0000"+
		"\u0161\u0164\u0001\u0000\u0000\u0000\u0162\u0160\u0001\u0000\u0000\u0000"+
		"\u0162\u0163\u0001\u0000\u0000\u0000\u0163O\u0001\u0000\u0000\u0000\u0164"+
		"\u0162\u0001\u0000\u0000\u0000\u0165\u016a\u0003R)\u0000\u0166\u0167\u0007"+
		"\u0003\u0000\u0000\u0167\u0169\u0003R)\u0000\u0168\u0166\u0001\u0000\u0000"+
		"\u0000\u0169\u016c\u0001\u0000\u0000\u0000\u016a\u0168\u0001\u0000\u0000"+
		"\u0000\u016a\u016b\u0001\u0000\u0000\u0000\u016bQ\u0001\u0000\u0000\u0000"+
		"\u016c\u016a\u0001\u0000\u0000\u0000\u016d\u0172\u0003T*\u0000\u016e\u016f"+
		"\u0007\u0004\u0000\u0000\u016f\u0171\u0003T*\u0000\u0170\u016e\u0001\u0000"+
		"\u0000\u0000\u0171\u0174\u0001\u0000\u0000\u0000\u0172\u0170\u0001\u0000"+
		"\u0000\u0000\u0172\u0173\u0001\u0000\u0000\u0000\u0173S\u0001\u0000\u0000"+
		"\u0000\u0174\u0172\u0001\u0000\u0000\u0000\u0175\u017a\u0003V+\u0000\u0176"+
		"\u0177\u0007\u0005\u0000\u0000\u0177\u0179\u0003V+\u0000\u0178\u0176\u0001"+
		"\u0000\u0000\u0000\u0179\u017c\u0001\u0000\u0000\u0000\u017a\u0178\u0001"+
		"\u0000\u0000\u0000\u017a\u017b\u0001\u0000\u0000\u0000\u017bU\u0001\u0000"+
		"\u0000\u0000\u017c\u017a\u0001\u0000\u0000\u0000\u017d\u017e\u0007\u0006"+
		"\u0000\u0000\u017e\u0181\u0003V+\u0000\u017f\u0181\u0003X,\u0000\u0180"+
		"\u017d\u0001\u0000\u0000\u0000\u0180\u017f\u0001\u0000\u0000\u0000\u0181"+
		"W\u0001\u0000\u0000\u0000\u0182\u018b\u0003^/\u0000\u0183\u018b\u0005"+
		"5\u0000\u0000\u0184\u018b\u0003Z-\u0000\u0185\u018b\u0003\\.\u0000\u0186"+
		"\u0187\u0005\u0007\u0000\u0000\u0187\u0188\u0003H$\u0000\u0188\u0189\u0005"+
		"\b\u0000\u0000\u0189\u018b\u0001\u0000\u0000\u0000\u018a\u0182\u0001\u0000"+
		"\u0000\u0000\u018a\u0183\u0001\u0000\u0000\u0000\u018a\u0184\u0001\u0000"+
		"\u0000\u0000\u018a\u0185\u0001\u0000\u0000\u0000\u018a\u0186\u0001\u0000"+
		"\u0000\u0000\u018bY\u0001\u0000\u0000\u0000\u018c\u018d\u00055\u0000\u0000"+
		"\u018d\u018f\u0005\u0007\u0000\u0000\u018e\u0190\u0003\n\u0005\u0000\u018f"+
		"\u018e\u0001\u0000\u0000\u0000\u018f\u0190\u0001\u0000\u0000\u0000\u0190"+
		"\u0191\u0001\u0000\u0000\u0000\u0191\u019b\u0005\b\u0000\u0000\u0192\u0193"+
		"\u00055\u0000\u0000\u0193\u0194\u0005:\u0000\u0000\u0194\u0195\u00055"+
		"\u0000\u0000\u0195\u0197\u0005\u0007\u0000\u0000\u0196\u0198\u0003\n\u0005"+
		"\u0000\u0197\u0196\u0001\u0000\u0000\u0000\u0197\u0198\u0001\u0000\u0000"+
		"\u0000\u0198\u0199\u0001\u0000\u0000\u0000\u0199\u019b\u0005\b\u0000\u0000"+
		"\u019a\u018c\u0001\u0000\u0000\u0000\u019a\u0192\u0001\u0000\u0000\u0000"+
		"\u019b[\u0001\u0000\u0000\u0000\u019c\u01a1\u00055\u0000\u0000\u019d\u019e"+
		"\u0005\"\u0000\u0000\u019e\u019f\u0003H$\u0000\u019f\u01a0\u0005#\u0000"+
		"\u0000\u01a0\u01a2\u0001\u0000\u0000\u0000\u01a1\u019d\u0001\u0000\u0000"+
		"\u0000\u01a2\u01a3\u0001\u0000\u0000\u0000\u01a3\u01a1\u0001\u0000\u0000"+
		"\u0000\u01a3\u01a4\u0001\u0000\u0000\u0000\u01a4]\u0001\u0000\u0000\u0000"+
		"\u01a5\u01a6\u0007\u0007\u0000\u0000\u01a6_\u0001\u0000\u0000\u0000\'"+
		"bdls~\u0086\u0093\u0097\u00a0\u00ad\u00b2\u00b8\u00c8\u00d4\u00df\u00e1"+
		"\u00e9\u00ed\u00f7\u00ff\u0108\u010d\u0110\u0115\u011e\u0136\u0141\u0152"+
		"\u015a\u0162\u016a\u0172\u017a\u0180\u018a\u018f\u0197\u019a\u01a3";
	public static final ATN _ATN =
		new ATNDeserializer().deserialize(_serializedATN.toCharArray());
	static {
		_decisionToDFA = new DFA[_ATN.getNumberOfDecisions()];
		for (int i = 0; i < _ATN.getNumberOfDecisions(); i++) {
			_decisionToDFA[i] = new DFA(_ATN.getDecisionState(i), i);
		}
	}
}