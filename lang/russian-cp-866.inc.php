<?php
/* $Id$ */

/**
 * Translated by Gosha Sakovich <gt2 at users.sourceforge.net>
 *               Artyom Rabzonov <tyomych at gmx.net>
 *               Nicolay Zakharov <info at melody.org.ru> 16-Dec-2002
 */

$charset = 'cp-866';
$text_dir = 'ltr';
$left_font_family = 'sans-serif';
$right_font_family = 'sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
//$byteUnits = array('����', '��', '��', '��');
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('��', '��', '��', '��', '��', '��', '��');
$month = array('���', '���', '���', '���', '���', '��', '��', '���', '���', '���', '���', '���');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d %Y �., %H:%M';
$timespanfmt = '%s ����, %s �ᮢ, %s ����� � %s ᥪ㭤';

$strAPrimaryKey = '�� �������� ��ࢨ�� ���� � %s';
$strAbortedClients = '�⬥����';
$strAbsolutePathToDocSqlDir = '������ ��᮫��� ���� �� �ࢥ� � ��४�ਨ docSQL, ��������';
$strAccessDenied = '� ����㯥 �⪠����';
$strAccessDeniedExplanation = 'phpMyAdmin ����⠫�� ᮥ�������� � �ࢥ஬ MySQL, �� �ࢥ� �⢥� ᮥ�������. �஢���� ��� ���, ���짮��⥫� � ��஫� � config.inc.php.';
$strAction = '����⢨�';
$strAddAutoIncrement = '�������� ���祭�� AUTO_INCREMENT';
$strAddDeleteColumn = '��������/㤠���� �⮫��� �����';
$strAddDeleteRow = '��������/㤠���� �� �����';
$strAddDropDatabase = '�������� DROP DATABASE';
$strAddIntoComments = '�������� � �������ਨ';
$strAddNewField = '�������� ����� ����';
$strAddPrivilegesOnDb = '�������� �ਢ������ �� ᫥������ ����';
$strAddPrivilegesOnTbl = ' �������� �ਢ������ �� ᫥������ ⠡����';
$strAddSearchConditions = '�������� �᫮��� ���᪠ (⥫� ��� �᫮��� "where"):';
$strAddToIndex = '�������� � �������&nbsp;%s&nbsp;�������(�)';
$strAddUser = '�������� ������ ���짮��⥫�';
$strAddUserMessage = '�� �������� ���� ���짮��⥫�.';
$strAddedColumnComment = '���������� �������਩ ��� �⮫��';
$strAddedColumnRelation = '����������� ��� ��� �⮫��';
$strAdministration = '���������஢����';
$strAffectedRows = '���஭��� ���:';
$strAfter = '��᫥ %s';
$strAfterInsertBack = '������';
$strAfterInsertNewInsert = '��⠢��� ����� ������';
$strAll = '��';
$strAllTableSameWidth = '�������� �� ⠡���� � ⠪�� �ਭ��?';
$strAlterOrderBy = '�������� ���冷� ⠡����';
$strAnIndex = '�� �������� ������ ��� %s';
$strAnalyzeTable = '������ ⠡����';
$strAnd = '�';
$strAny = '��';
$strAnyHost = '�� ���';
$strAnyUser = '�� ���짮��⥫�';
$strArabic = '�ࠡ᪨�';
$strArmenian = '���᪨�';
$strAscending = '�� �����⠭��';
$strAtBeginningOfTable = '� ��砫� ⠡����';
$strAtEndOfTable = '� ����� ⠡����';
$strAttr = '��ਡ���';
$strAutodetect = '��⮤�⥪�';
$strAutomaticLayout = '��⮬���᪠� �᪫����';

$strBack = '�����';
$strBaltic = '���⨩᪨�';
$strBeginCut = 'BEGIN CUT';
$strBeginRaw = 'BEGIN RAW';
$strBinary = ' ������ ';
$strBinaryDoNotEdit = ' ������ ����� - �� ।��������� ';
$strBookmarkAllUsers = '���� ������� ���짮��⥫� �ᯮ�짮���� ��� ��������';
$strBookmarkDeleted = '�������� �뫠 㤠����.';
$strBookmarkLabel = '��⪠';
$strBookmarkOptions = '��樨 ��������';
$strBookmarkQuery = '�������� �� SQL-�����';
$strBookmarkThis = '�������� �� ����� SQL-�����';
$strBookmarkView = '���쪮 ��ᬮ��';
$strBrowse = '�����';
$strBrowseForeignValues = 'Browse foreign values';
$strBulgarian = '������᪨�';
$strBzError = 'phpMyAdmin �� ����� ᦠ�� ���� ��-�� �஡��� � Bz2 extension � ⥪�饩 ���ᨨ PHP. ��ண� ४��������� ��⠭����� ��६����� <code>$cfg[\'BZipDump\']</code> � ��襬 ���䨣��樮���� 䠩�� phpMyAdmin ���祭�� <code>FALSE</code>. �᫨ �� ��� �ᯮ�짮���� Bz2-��������, ��� ����室��� �������� PHP. ������ PHP bug report %s ��� ����� ���஡��� ���ଠ樨.';
$strBzip = '��娢�஢��� � bzip';

$strCSVOptions = '��樨 CSV';
$strCannotLogin = '���������� ���� � MySQL';
$strCantLoad = '�� ���� ����㧨�� ���७�� %s,<br />�஢���� ���䨣���� PHP, ��������';
$strCantLoadRecodeIconv = '�� ���� ����㧨�� iconv ��� recode, ����室��� ��� ��४���஢���� ᨬ�����. �஢���� php-���䨣���� � ࠧ��� �� �ᯮ�짮����� ��� ������ ��४���஢���� ᨬ����� � phpMyAdmin.';
$strCantRenameIdxToPrimary = '���������� ��२�������� ������ � PRIMARY!';
$strCantUseRecodeIconv = '�� ���� �ᯮ�짮���� iconv �㭪樨: �� libiconv, �� recode_string, ���� �� ���� ����㦥�� extension reports. �஢���� php-���䨣����.';
$strCardinality = '������⢮ ������⮢';
$strCarriage = '������ ���⪨: \\r';
$strCaseInsensitive = '�����⢨⥫�� � ॣ�����';
$strCaseSensitive = '���⢨⥫�� � ॣ����� ';
$strCentralEuropean = '����ࠫ쭮-��ய��᪨�';
$strChange = '��������';
$strChangeCopyMode = '������� ������ ���짮��⥫� � ⠪��� �� �ਢ�����ﬨ � ...';
$strChangeCopyModeCopy = '... ��࠭��� ��ண�.';
$strChangeCopyModeDeleteAndReload = ' ... 㤠���� ��ண� �� ⠡��� ���짮��⥫�� � ��१���㧨�� �ਢ������.';
$strChangeCopyModeJustDelete = ' ... 㤠���� ��ண� �� ⠡��� ���짮��⥫��.';
$strChangeCopyModeRevoke = ' ... �⬥���� �� ��⨢�� �ਢ������ ��ண� � ��⥬ 㤠���� ���.';
$strChangeCopyUser = '�������� ���ଠ�� ������/ ����஢��� ���짮��⥫�';
$strChangeDisplay = '�롥�� ���� ��� �⮡ࠦ����';
$strChangePassword = '�������� ��஫�';
$strCharset = '����஢��';
$strCharsetOfFile = '����஢�� 䠩��:';
$strCharsets = '����஢��';
$strCharsetsAndCollations = '����஢�� � �ࠢ�����';
$strCheckAll = '�⬥��� ��';
$strCheckPrivs = '�஢���� �ਢ������';
$strCheckPrivsLong = '�஢���� �ਢ������ ��� ���� &quot;%s&quot;.';
$strCheckTable = '�஢���� ⠡����';
$strChoosePage = '�롥�� ��࠭��� ��� ।���஢����';
$strColComFeat = '�������� ��������� �⮫�殢';
$strCollation = '�ࠢ�����';
$strColumnNames = '�������� �������';
$strColumnPrivileges = '�ਢ������, ᯥ���� ��� �⮫��';
$strCommand = '�������';
$strComments = '�������ਨ';
$strCompleteInserts = '������ ��⠢��';
$strCompression = '���⨥';
$strConfigFileError = 'phpMyAdmin �� ����� ������ ����� �� ���䨣��樮����� 䠩��!  <br />��������� ��稭� - ᨭ⠪��᪠� �訡��.<br />�맮��� ��� 䠩� (config.inc.php) �����।�⢥��� �� ��㧥�. �᫨ ���� ᮮ�饭�� �� �訡��� - ��ࠢ�� ��. �᫨ ����� ��࠭�� - �� � ���浪�';
$strConfigureTableCoord = '������� ���न���� ⠡���� %s';
$strConnections = '����������';
$strConstraintsForDumped = 'Constraints for dumped tables';
$strConstraintsForTable = 'Constraints for table';
$strCookiesRequired = 'Cookies ������ ���� ����祭� ��᫥ �⮣� ����.';
$strCopyTable = '�����஢��� ⠡���� � (���� ������<b>.</b>⠡���):';
$strCopyTableOK = '������ %s �뫠 ᪮��஢��� � %s.';
$strCopyTableSameNames = ' �� ���� ᪮��஢��� ⠡���� ᠬ� � ᥡ� !';
$strCouldNotKill = 'phpMyAdmin �� ᬮ� 㤠���� thread %s. ��������, �� 㦥 ������.';
$strCreate = '�������';
$strCreateIndex = '������� ������ ��&nbsp;%s&nbsp;��������';
$strCreateIndexTopic = '������� ���� ������';
$strCreateNewDatabase = '������� ����� ��';
$strCreateNewTable = '������� ����� ⠡���� � �� %s';
$strCreatePage = '������� ����� ��࠭���';
$strCreatePdfFeat = '�������� PDF-�奬�';
$strCriteria = '���਩';
$strCroatian = '��ࢠ�᪨�';
$strCyrillic = '��ਫ���᪨�';
$strCzech = '���᪨�';

$strDBComment = '�������਩ ��: ';
$strDBGContext = '���⥪��';
$strDBGContextID = '���⥪�� ID';
$strDBGHits = 'Hits';
$strDBGLine = 'Line';
$strDBGMaxTimeMs = '���ᨬ��쭮� �६�, ms';
$strDBGMinTimeMs = '�������쭮� �६�, ms';
$strDBGModule = '�����';
$strDBGTimePerHitMs = 'Time/Hit, ms';
$strDBGTotalTimeMs = '�⮣���� �६�, ms';
$strDanish = '���᪨�';
$strData = '�����';
$strDataDict = '������� ������';
$strDataOnly = '���쪮 �����';
$strDatabase = '��';
$strDatabaseExportOptions = '��樨 ��ᯮ�� ��';
$strDatabaseHasBeenDropped = '���� ������ %s �뫠 㤠����.';
$strDatabaseNoTable = '�� �� �� ᮤ�ন� ⠡���!';
$strDatabases = '���� ������';
$strDatabasesDropped = '%s �� �뫨 �ᯥ譮 㤠����.';
$strDatabasesStats = '����⨪� ��� ������';
$strDatabasesStatsDisable = '�⪫���� ����⨪�';
$strDatabasesStatsEnable = '������� ����⨪�';
$strDatabasesStatsHeavyTraffic = '����砭��: ����祭�� ����⨪� ���� ������ ����� �஢��஢��� ����让 ��䨪 ����� ���-�ࢥ஬ � �ࢥ஬ MySQL.';
$strDbPrivileges = ' �ਢ������, ᯥ���� ��� ���� ������';
$strDbSpecific = 'ᯥ��筮 ��� ��';
$strDefault = '�� 㬮�砭��';
$strDefaultValueHelp = '��� ���祭�� �� 㬮�砭�� ���� ������ �����⢥���� ���祭�� ��� ��࠭�஢���� � ����஢����, �ᯮ���� ��� �ଠ�: a';
$strDelOld = '� ⥪�饩 ��࠭�� ���� ��뫪� �� ⠡����, ����� ����� �� ��������. �� ��� 㤠���� �� ��뫪�?';
$strDelete = '�������';
$strDeleteAndFlush = '������� ��� ���짮��⥫�� � ��१���㧨�� �ਢ������.';
$strDeleteAndFlushDescr = '�� ���訩 ᯮᮡ, �� ��१���㧪� �ਢ������ ����� ������ �����஥ �६�.';
$strDeleted = '�� �� 㤠���';
$strDeletedRows = '������騥 ��� �뫨 㤠����:';
$strDeleting = '�������� %s';
$strDescending = '�� �뢠���';
$strDescription = '���ᠭ��';
$strDictionary = '᫮����';
$strDisabled = '������㯭�';
$strDisplayFeat = '�������� �������⥫�� ����������';
$strDisplayOrder = '���冷� ��ᬮ��:';
$strDisplayPDF = '�������� PDF-�奬�';
$strDoAQuery = '�믮����� "����� �� �ਬ���" (ᨬ��� ����⠭����: "%")';
$strDoYouReally = '�� ����⢨⥫쭮 ������ ';
$strDocu = '���㬥����';
$strDrop = '����⮦���';
$strDropSelectedDatabases = '������� ��࠭�� ��';
$strDropUsersDb = '������� ����, ����� ����� ⠪�� �� ����� ��� � ���짮��⥫�.';
$strDumpSaved = '���� ��࠭� � 䠩� %s.';
$strDumpXRows = '���� %s ����ᥩ, ��稭�� � %s.';
$strDumpingData = '���� ������ ⠡����';
$strDynamic = '�������᪨�';

$strEdit = '�ࠢ��';
$strEditPDFPages = '�������� PDF-��࠭���';
$strEditPrivileges = '������஢���� �ਢ������';
$strEffective = '��䥪⨢�����';
$strEmpty = '������';
$strEmptyResultSet = 'MySQL ���㫠 ���⮩ १���� (�.�. ���� �冷�).';
$strEnabled = '����㯭�';
$strEnd = '�����';
$strEndCut = 'END CUT';
$strEndRaw = 'END RAW';
$strEnglish = '������᪨�';
$strEnglishPrivileges = ' �ਬ�砭��: �ਢ������ MySQL �������� ��-������᪨ ';
$strError = '�訡��';
$strEstonian = '��⮭᪨�';
$strExcelOptions = '��樨 Excel';
$strExecuteBookmarked = '�믮���� �⬥祭�� �����';
$strExplain = '������ SQL';
$strExport = '��ᯮ��';
$strExtendedInserts = '����७�� ��⠢��';
$strExtra = '�������⥫쭮';

$strFailedAttempts = '��㤠�� ����⪨';
$strField = '����';
$strFieldHasBeenDropped = '���� %s �뫮 㤠����';
$strFields = '����';
$strFieldsEmpty = ' ���⮩ ���稪 �����! ';
$strFieldsEnclosedBy = '���� �����祭� �';
$strFieldsEscapedBy = '���� ��࠭�������';
$strFieldsTerminatedBy = '���� ࠧ������';
$strFileAlreadyExists = '���� %s 㦥 ������� �� �ࢥ�, ������� ��� ��� ��ᯮ������ ��樥� ��१����.';
$strFileCouldNotBeRead = '���� �� ����� ���� ���⠭';
$strFileNameTemplate = '������ ����� 䠩��';
$strFileNameTemplateHelp = '�ᯮ���� __DB__ ��� ����� ��, __TABLE__ ��� ����� ⠡���� � %s ��� strftime%s ��樨 ��� ������� �६���, ���७�� �㤥� ��������� ��⮬���᪨. �� ��㣮� ⥪�� �㤥� ��࠭�.';
$strFileNameTemplateRemember = '��������� 蠡���';
$strFixed = '䨪�஢����';
$strFlushPrivilegesNote = '����砭��: phpMyAdmin ����砥� ���짮��⥫�᪨� �ਢ������ ��אַ �� ⠡��� �ਢ������ MySQL. ����ন��� ��� ⠡��� ����� �⫨����� �� �� �ਢ������, ����� �ᯮ���� �ࢥ�, �᫨ ��������� �뫨 ���ᥭ� ������. � �⮬ ��砥 �� ������ %s��१���㧨�� �ਢ������%s ��। �த�������� ࠡ���.';
$strFlushTable = '������ ��� ⠡���� ("FLUSH")';
$strFormEmpty = '�ॡ���� ���祭�� ��� ���!';
$strFormat = '��ଠ�';
$strFullText = '����� ⥪���';
$strFunction = '�㭪��';

$strGenBy = '��������';
$strGenTime = '�६� ᮧ�����';
$strGeneralRelationFeat = '�᭮��� ���������� �痢�';
$strGerman = '����檨�';
$strGlobal = 'global';
$strGlobalPrivileges = '�������� �ਢ������';
$strGlobalValue = '������쭮� ���祭��';
$strGo = '��襫';
$strGrantOption = '�।��⠢����';
$strGreek = '���᪨�';
$strGzip = '��娢�஢��� � gzip';

$strHasBeenAltered = '�뫠 ��������.';
$strHasBeenCreated = '�뫠 ᮧ����.';
$strHaveToShow = '�� ������ ����� �� ����� ����� ������� ��� �⮡ࠦ����';
$strHebrew = '����';
$strHome = '� ��砫�';
$strHomepageOfficial = '��樠�쭠� ��࠭�� phpMyAdmin';
$strHost = '����';
$strHostEmpty = '���⮥ ��� ���!';
$strHungarian = '������᪨�';

$strId = 'ID';
$strIdxFulltext = '���������';
$strIfYouWish = '�᫨ �� ������ ����㧨�� ⮫쪮 ������� �⮫��� ⠡����, 㪠��� ࠧ������� �����묨 ᯨ᮪ �����.';
$strIgnore = '�����஢���';
$strIgnoringFile = '�������� 䠩� %s';
$strImportDocSQL = '������ docSQL 䠩���';
$strImportFiles = '������ 䠩���';
$strImportFinished = '������ ������';
$strInUse = '�ᯮ������';
$strIndex = '������';
$strIndexHasBeenDropped = '������ %s �� 㤠���';
$strIndexName = '��� ������&nbsp;:';
$strIndexType = '��� ������&nbsp;:';
$strIndexes = '�������';
$strInnodbStat = 'InnoDB �����';
$strInsecureMySQL = '��� ���䨣��樮��� 䠩� ᮤ�ন� ����ன�� (���짮��⥫� root ��� ��஫�), ����� �⭮����� � �ਢ�����஢������ ���짮��⥫� MySQL (�� 㬮�砭��). ��� MySQL �ࢥ� ����饭 � �⨬� ����ன���� �� 㬮�砭��, ������ ��� ��থ���, ���⮬� ��� �����⥫쭮 ४��������� ���࠭��� ��� ���� � ������᭮��.';
$strInsert = '��⠢���';
$strInsertAsNewRow = '��⠢��� ���� ��';
$strInsertNewRow = '��⠢��� ���� ��';
$strInsertTextfiles = '��⠢��� ⥪�⮢� 䠩�� � ⠡����';
$strInsertedRowId = '��⠢��� id �鸞:';
$strInsertedRows = '��������� ���:';
$strInstructions = '������樨';
$strInternalNotNecessary = '* ����७��� ��� �� ��易⥫쭠, ����� ��� ⠪�� ������� � InnoDB.';
$strInternalRelations = '����७��� �裡';

$strJapanese = '����᪨�';
$strJumpToDB = '��३� � ���� &quot;%s&quot;.';
$strJustDelete = '���� 㤠���� ���짮��⥫�� �� ⠡��� �ਢ������.';
$strJustDeleteDescr = '&quot;������&quot; ���짮��⥫� ��� ��� ᬮ��� ࠡ���� � � �ࢥ஬ ��� ���筮 �� ��१���㧪� �ਢ������.';

$strKeepPass = '�� ������ ��஫�';
$strKeyname = '��� ����';
$strKill = '�����';
$strKorean = '��३᪨�';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = '��樨 LaTeX';
$strLandscape = '�������';
$strLatexCaption = '��������� ⠡����';
$strLatexContent = '����ন��� ⠡���� __TABLE__';
$strLatexContinued = '(�த������)';
$strLatexContinuedCaption = '�த������� ��������� ⠡����';
$strLatexIncludeCaption = '������� ��������� ⠡����';
$strLatexLabel = 'Label key';
$strLatexStructure = '������� ⠡���� __TABLE__';
$strLengthSet = '�����/���祭��*';
$strLimitNumRows = '����ᥩ �� ��࠭���';
$strLineFeed = '������ ����砭�� �����: \\n';
$strLinesTerminatedBy = '��ப� ࠧ������';
$strLinkNotFound = '���� �� �������';
$strLinksTo = '���� �';
$strLithuanian = '��⢨�᪨�';
$strLoadExplanation = '���訩 ��⮤ �⬥祭 �� 㬮�砭��, �� �� ����� ����� ��㣮�, �᫨ ��� �� �ࠡ�⠥�.';
$strLoadMethod = '��⮤ LOAD';
$strLocalhost = 'Local';
$strLocationTextfile = '�����ᯮ������� ⥪�⮢��� 䠩��';
$strLogPassword = '��஫�:';
$strLogServer = '��ࢥ�';
$strLogUsername = '���짮��⥫�:';
$strLogin = '�室 � ��⥬�';
$strLoginInformation = '���ଠ�� ������';
$strLogout = '��� �� ��⥬�';

$strMIME_MIMEtype = 'MIME-⨯';
$strMIME_available_mime = '����㯭� MIME-⨯�';
$strMIME_available_transform = '����㯭� �࠭��ଠ樨';
$strMIME_description = '���ᠭ��';
$strMIME_nodescription = '��� ����㯭�� ���ᠭ�� ��� �⮩ �࠭��ଠ樨.<br />��������, ���� ���� �� ������ %s.';
$strMIME_transformation = '�࠭��ଠ�� ��㧥�';
$strMIME_transformation_note = '��� ᯨ᪠ ����㯭�� ��権 �࠭��ଠ樨 � �࠭��ଠ権 �� MIME-⨯�� ������� �� %s���ᠭ�� �࠭��ଠ権%s';
$strMIME_transformation_options = '��樨 �࠭��ଠ樨';
$strMIME_transformation_options_note = '������ᨠ, ������ ���祭�� ��� �࠭��ଠ樨, �ᯮ���� ��� �ଠ�: \'a\',\'b\',\'c\'...<br />�᫨ ��� �㦭� ���⠢��� ������("\") ��� ������("\'"), ��࠭���� �� (���ਬ�� \'\\\\xyz\' or \'a\\\'b\').';
$strMIME_without = 'MIME-⨯�, �뤥����� ���ᨢ��, �� ����� �⤥�쭮� �㭪樨 �࠭��ଠ樨';
$strModifications = '����䨪�樨 �뫨 ��࠭���';
$strModify = '��������';
$strModifyIndexTopic = '�������� ������';
$strMoreStatusVars = '��㣨� ������ ��६����';
$strMoveTable = '��६����� ⠡���� � (���� ������<b>.</b>⠡���):';
$strMoveTableOK = '������ %s �뫠 ��६�饭� � %s.';
$strMoveTableSameNames = '�� ���� ��६����� ⠡���� ᠬ� � ᥡ�!';
$strMultilingual = '���������';
$strMustSelectFile = '�� ������ ����� 䠩� ��� ��⠢��.';
$strMySQLCharset = 'MySQL-����஢��';
$strMySQLReloaded = 'MySQL ��१���㦥��.';
$strMySQLSaid = '�⢥� MySQL: ';
$strMySQLServerProcess = 'MySQL %pma_s1% �� %pma_s2% ��� %pma_s3%';
$strMySQLShowProcess = '�������� ������';
$strMySQLShowStatus = '�������� ���ﭨ� MySQL';
$strMySQLShowVars = '�������� ��⥬�� ��६���� MySQL';

$strName = '���';
$strNext = '�����';
$strNo = '���';
$strNoDatabases = '�� ����������';
$strNoDatabasesSelected = '�� ���� �� �� ��࠭�.';
$strNoDescription = '��� ���ᠭ��';
$strNoDropDatabases = '������� "������� ��" �⪫�祭�.';
$strNoExplain = '�४���� ���ᠭ�� SQL';
$strNoFrames = '��� ࠡ��� phpMyAdmin �㦥� ��㧥� � �����প�� <b>�३���</b>.';
$strNoIndex = '������ �� ��।����!';
$strNoIndexPartsDefined = '���� ������ �� ��।�����!';
$strNoModification = '��� ���������';
$strNoOptions = '� �⮬ �ଠ� ��� ��権';
$strNoPassword = '��� ��஫�';
$strNoPermission = '���-�ࢥ�� �� 墠⠥� �ࠢ ��� ��࠭���� 䠩�� %s.';
$strNoPhp = '��� PHP-����';
$strNoPrivileges = '��� �ਢ������';
$strNoQuery = '��� SQL-�����!';
$strNoRights = '�� �� ����� �����筮 �ࠢ ��� �⮣�!';
$strNoSpace = '�� 墠⠥� ��᪮���� ����࠭�⢠ ��� ��࠭���� 䠩�� %s.';
$strNoTablesFound = '� �� �� �����㦥�� ⠡���.';
$strNoUsersFound = '�� ������ ���짮��⥫�.';
$strNoValidateSQL = '�� �஢����� SQL';
$strNone = '���';
$strNotNumber = '�� �� �᫮!';
$strNotOK = '�� ��⮢�';
$strNotSet = '������ <b>%s</b> �� �������';
$strNotValidNumber = ' �������⨬�� ������⢮ �冷�!';
$strNull = '����';
$strNumSearchResultsInTable = '%s �����(��) � ⠡��� <i>%s</i>';
$strNumSearchResultsTotal = '<b>�⮣�:</b> <i>%s</i> �����(��)';
$strNumTables = '������';

$strOK = '��⮢�';
$strOftenQuotation = '���筮 ����窨. "�� �롮��" ����砥�, �� ⮫쪮 ���� char � varchar ���������� � ����窨.';
$strOperations = '����樨';
$strOptimizeTable = '��⨬���஢��� ⠡����';
$strOptionalControls = '�� �롮��. ����஫���� ��� ���� ��� ����� ᯥ樠��� ᨬ����.';
$strOptionally = '�� �롮��';
$strOr = '���';
$strOverhead = '�������� ��室�';
$strOverwriteExisting = '��१������ �������騩(�) 䠩�(�)';

$strPHP40203 = '�� �ᯮ���� ����� PHP 4.2.3, ����� ᮤ�ন� ��쥧�� �訡�� �� ࠡ�� � �����-���⮢묨 ��ப��� (mbstring). ������ PHP bug report 19404. ������ ����� PHP �� ४��������� ��� �ᯮ�짮����� � phpMyAdmin.';
$strPHPVersion = '����� PHP';
$strPageNumber = '����� ��࠭���:';
$strPaperSize = '������ �㬠��';
$strPartialText = '������ ⥪���';
$strPassword = '��஫�';
$strPasswordChanged = '��஫� ��� %s �� �ᯥ譮 ������.';
$strPasswordEmpty = '���⮩ ��஫�!';
$strPasswordNotSame = '��஫� �� ���������!';
$strPdfDbSchema = '������� ���� "%s" - ��࠭�� %s';
$strPdfInvalidTblName = '������ "%s" �� �������!';
$strPdfNoTables = '��� ⠡���';
$strPerHour = '� ��';
$strPerMinute = '� ������';
$strPerSecond = '� ᥪ㭤�';
$strPhoneBook = '⥫�䮭��� �����';
$strPhp = '������� PHP-���';
$strPmaDocumentation = '���㬥���� �� phpMyAdmin';
$strPmaUriError = '��४⨢� <tt>$cfg[\'PmaAbsoluteUri\']</tt> ������ ���� ��⠭������ � ��襬 ���䨣��樮���� 䠩��!';
$strPortrait = '������';
$strPos1 = '��砫�';
$strPrevious = '�����';
$strPrimary = '��ࢨ��';
$strPrimaryKeyHasBeenDropped = '��ࢨ�� ���� �� 㤠���';
$strPrimaryKeyName = '��� ��ࢨ筮�� ���� ������ ���� PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>������</b> ���� �ਧ����� <b>⮫쪮</b> ��ࢨ筮�� ����!)';
$strPrint = '�����';
$strPrintView = '����� ��� ����';
$strPrintViewFull = '��ᯥ���� (� �ᥬ ⥪�⮬)';
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.';
$strPrivDescAlter = '�������� ��������� �������� ��������� ⠡���.';
$strPrivDescCreateDb = '�������� ᮧ����� ����� ��� ������ � ⠡���.';
$strPrivDescCreateTbl = '�������� ᮧ����� ����� ⠡���.';
$strPrivDescCreateTmpTable = '�������� ᮧ����� �६����� ⠡���.';
$strPrivDescDelete = '�������� 㤠����� ������.';
$strPrivDescDropDb = '�������� 㤠����� ';
$strPrivDescDropTbl = '�������� 㤠����� ⠡���.';
$strPrivDescExecute = '�������� ����� �࠭���� ��楤��; �� ࠡ�⠥� � �⮩ ���ᨨ MySQL.';
$strPrivDescFile = '�������� ������஢���� � ��ᯮ��஢���� ������ � 䠩��.';
$strPrivDescGrant = '�������� ���������� ���짮��⥫�� � �ਢ������ ��� ��१���㧪� ⠡��� �ਢ������.';
$strPrivDescIndex = '�������� ᮧ����� � 㤠����� �����ᮢ.';
$strPrivDescInsert = '�������� ��⠢�� � ������ ������.';
$strPrivDescLockTables = '�������� �����஢�� ⠡��� ��� ⥪�饣� ��⮪�.';
$strPrivDescMaxConnections = '��࠭�稢��� ������⢮ ᮥ�������, ����� ���짮��⥫� ����� ������ � �祭�� ��.';
$strPrivDescMaxQuestions = '��࠭�稢��� ������⢮ ����ᮢ, ����� ���짮��⥫� ����� ��ࠢ�� � �祭�� ��.';
$strPrivDescMaxUpdates = '��࠭�稢��� ������⢮ ������, ��������� ���� ⠡���� ��� ���� ������, ����� ���짮��⥫� ����� �믮����� �� ��.';
$strPrivDescProcess3 = '�������� 㡨���� ������ ��㣨� ���짮���⥫��.';
$strPrivDescProcess4 = '�������� ��ᬮ�� ������ ����ᮢ � ᯨ᪥ ����ᮢ.';
$strPrivDescReferences = '�� ࠡ�⠥� � �⮩ ���ᨨ MySQL.';
$strPrivDescReload = '�������� ��१���㧪� ����஥� �ࢥ� � ����� ��� ��襩.';
$strPrivDescReplClient = '���� ���짮��⥫� �ࠢ� ��訢��� ��� ��室����� slaves / masters.';
$strPrivDescReplSlave = '�㦥� ��� ९����樨 slaves.';
$strPrivDescSelect = '�������� �⥭�� ������.';
$strPrivDescShowDb = '���� ����� � ������� ᯨ�� ��� ������.';
$strPrivDescShutdown = '�������� ��⠭���� �ࢥ�.';
$strPrivDescSuper = '�������� ᮥ��������, ���� �᫨ ���⨣��� ���ᨬ��쭮� ������⢮ ᮥ�������; ����室��� ��� ����設�⢠ ���������⨢��� �����, ⠪�� ��� ��⠭���� ��������� ��६����� ��� ��⠭���� ����ᮢ ��㣨� ���짮��⥫��.';
$strPrivDescUpdate = '�������� ��������� ������.';
$strPrivDescUsage = '��� �ਢ������.';
$strPrivileges = '�ਢ������';
$strPrivilegesReloaded = '�ਢ������ �뫨 �ᯥ譮 ��१���㦥��.';
$strProcesslist = '���᮪ ����ᮢ';
$strPutColNames = '������ ������������ ����� � ��ࢮ� ��ப�';

$strQBE = '�����&nbsp;��&nbsp;�ਬ���';
$strQBEDel = '�������';
$strQBEIns = '��⠢���';
$strQueryFrame = '���� �����';
$strQueryOnDb = 'SQL-����� �� <b>%s</b>:';
$strQuerySQLHistory = '����� SQL';
$strQueryStatistics = '<b>����⨪� ����ᮢ</b>: �� �६��� ����᪠ %s ����ᮢ �뫮 ��᫠�� �� �ࢥ�.';
$strQueryTime = '����� ���� %01.4f ᥪ';
$strQueryType = '��� �����';
$strQueryWindowLock = '�� ��१����뢠�� ��� ����� ��� ����';

$strReType = '���⢥ত����';
$strReceived = '�ਭ��';
$strRecords = '�����';
$strReferentialIntegrity = '�஢���� 楫��⭮��� ������:';
$strRelationNotWorking = '�������⥫�� ���������� ��� ࠡ��� � �易��묨 ⠡��栬� ������㯭�. ��� ��।������ ��稭� ������ %s�%s.';
$strRelationView = '��易��� ���';
$strRelationalSchema = '����樮���� �奬�';
$strRelations = '��裡';
$strReloadFailed = '�� 㤠���� ��१���㧨�� MySQL.';
$strReloadMySQL = '��१���㧨�� MySQL';
$strReloadingThePrivileges = '��१���㧪� �ਢ������';
$strRemoveSelectedUsers = '������� �뤥������ ���짮��⥫��';
$strRenameTable = '��२�������� ⠡���� �';
$strRenameTableOK = '������ %s �뫠 ��२�������� � %s';
$strRepairTable = '��稭��� ⠡����';
$strReplace = '��������';
$strReplaceNULLBy = '�������� NULL ��';
$strReplaceTable = '�������� ����� ⠡���� ����묨 �� 䠩��';
$strReset = '�����⠭�����';
$strResourceLimits = '�।�� ����ᮢ';
$strRevoke = '�⬥����';
$strRevokeAndDelete = '�⬥���� �� ��⨢�� �ਢ������ ���짮��⥫�� � ��⥬ 㤠���� ��.';
$strRevokeAndDeleteDescr = '���짮��⥫� ��� ��� ���� ����� USAGE �ਢ������ �� ��१���㧪� �ਢ������.';
$strRevokeMessage = '�� �������� �ਢ������ ��� %s';
$strRowLength = '����� �鸞';
$strRowSize = ' ������ �鸞 ';
$strRows = '���';
$strRowsFrom = '�冷� ��';
$strRowsModeFlippedHorizontal = '��ਧ��⠫쭮(�������� ���������)';
$strRowsModeHorizontal = '��ਧ��⠫쭮�';
$strRowsModeOptions = '� %s ०���, ��������� ��᫥ ������ %s �祥�';
$strRowsModeVertical = '���⨪��쭮�';
$strRowsStatistic = '����⨪� �鸞';
$strRunQuery = '�믮����� �����';
$strRunSQLQuery = '�믮����� SQL �����(�) �� �� %�';
$strRunning = '�� %s';
$strRussian = '���᪨�';

$strSQL = 'SQL';
$strSQLOptions = '��樨 SQL';
$strSQLParserBugMessage = '�������� � ��� �訡�� � SQL-�����. ��������, �஢���� �����⥫쭮 ��� ����� � ᮮ⢥��⢨� ����祪. �������� ⠪��, �� �� ��⠥��� ������� ������ 䠩� ��� ���� quoted text area. �� ����� ���஡����� �믮����� ᢮� ����� �१ ����䥩� ��������� ��ப� MySQL. ���ᠭ�� �訡�� MySQL �ࢥ� ���� ����, �������� ��� ������� ������, �� �� �ந��諮. �᫨ � ��� �� ࠢ�� ��������� �஡���� ��� �᫨ ����� �뤠�� �訡�� ⠬, ��� ����䥩� ��������� ��ப� ࠡ�⠥� �ᯥ譮, ���஡�� �������� ᢮� SQL ����� �� ������ ����ᮢ � ��।�����, ����� ������ ��뢠�� �஡����. �� ����� ⠪�� ��᫠�� ���� �� �訡�� ����� � ������ ������ (ᥪ�� CUT):';
$strSQLParserUserError = '������� �������� �訡�� � ��襬 SQL �����. ���ᠭ�� �訡�� �� MySQL �ࢥ� ���� ����, ��������, ��� ������� ��� ࠧ�������';
$strSQLQuery = 'SQL-�����';
$strSQLResult = 'SQL-१����';
$strSQPBugInvalidIdentifer = '���ࠢ���� �����䨪���';
$strSQPBugUnclosedQuote = '��������� ����窠';
$strSQPBugUnknownPunctuation = '�������⭠� ��ப� � �㭪��樥�';
$strSave = '���࠭���';
$strSaveOnServer = '���࠭��� �� �ࢥ� � ��४�ਨ %s';
$strScaleFactorSmall = '����⠡ ᫨誮� �����쪨� ��� �⮡ࠦ���� �ᥩ ⠡���� �� ����� ��࠭��';
$strSearch = '�᪠��';
$strSearchFormTitle = '�᪠�� � ���� ������';
$strSearchInTables = '� ⠡���(��):';
$strSearchNeedle = '�����(�) ��� ���祭��(�) ��� ���᪠ (������ "%") �:';
$strSearchOption1 = '��� ���� ᫮��';
$strSearchOption2 = '�� ᫮��';
$strSearchOption3 = '�筮� ᮮ⢥��⢨�';
$strSearchOption4 = 'ॣ��୮� ��ࠦ����';
$strSearchResultsFor = '�᪠�� � "<i>%s</i>" %s:';
$strSearchType = '�᪠��:';
$strSecretRequired = '���䨣��樮����� 䠩�� ᥩ�� �㦭� ᥪ�⭠� �ࠧ� (blowfish_secret).';
$strSelectADb = '�롥�� ��';
$strSelectAll = '�⬥��� ��';
$strSelectFields = '����� ���� (������ ����):';
$strSelectNumRows = '�� ������';
$strSelectTables = '�롥�� ⠡����(�)';
$strSend = '��᫠��';
$strSent = '��᫠��';
$strServer = '��ࢥ�';
$strServerChoice = '�롮� �ࢥ�';
$strServerStatus = '������ ���ଠ��';
$strServerStatusUptime = '��� MySQL �ࢥ� ࠡ�⠥� %s. �� �� ����饭 %s.';
$strServerTabProcesslist = '������';
$strServerTabVariables = '��६����';
$strServerTrafficNotes = '<b>��䨪</b>: �� ⠡���� �����뢠�� ����⨪� �� �⥢��� ��䨪� MySQL �ࢥ� � �६��� ��� ����᪠.';
$strServerVars = '��६���� � ����ன�� �ࢥ�';
$strServerVersion = '����� �ࢥ�';
$strSessionValue = '���祭�� ��ᨨ';
$strSetEnumVal = '��� ⨯�� ���� "enum" � "set", ������ ���祭�� �� �⮬� �ଠ��: \'a\',\'b\',\'c\'...<br />�᫨ ��� ������������ ����� ������ ����� ���� ("\"") ��� �������� ������ ("\'") �।� ��� ���祭��, ���⠢�� ��। ���� ������ ����� ���� (���ਬ��, \'\\\\xyz\' ��� \'a\\\'b\').';
$strShow = '��������';
$strShowAll = '�������� ��';
$strShowColor = '�������� 梥�';
$strShowDatadictAs = '��ଠ� ᫮���� ������';
$strShowFullQueries = '�����뢠�� ����� ������';
$strShowGrid = '�������� ���';
$strShowPHPInfo = '�������� ���ଠ�� � PHP';
$strShowTableDimension = '�������� ࠧ��୮��� ⠡����';
$strShowTables = '�������� ⠡����';
$strShowThisQuery = ' �������� ����� ����� ᭮�� ';
$strShowingRecords = '�����뢠�� ����� ';
$strSimplifiedChinese = '������ ��⠩᪨�';
$strSingly = '(�⤥�쭮)';
$strSize = '������';
$strSort = '�����஢���';
$strSortByKey = '����஢��� �� �����';
$strSpaceUsage = '�ᯮ��㥬�� ����࠭�⢮';
$strSplitWordsWithSpace = '�����, ࠧ������� �஡���� (" ").';
$strStatCheckTime = '��᫥���� �஢�ઠ';
$strStatCreateTime = '��������';
$strStatUpdateTime = '��᫥���� ����������';
$strStatement = '��ࠦ����';
$strStatus = '�����';
$strStrucCSV = 'CSV �����';
$strStrucData = '������� � �����';
$strStrucDrop = '�������� 㤠����� ⠡����';
$strStrucExcelCSV = 'CSV ��� ������ MS Excel';
$strStrucOnly = '���쪮 ��������';
$strStructPropose = '�।�������� ������� ⠡����';
$strStructure = '�������';
$strSubmit = '�믮�����';
$strSuccess = '��� SQL-����� �� �ᯥ譮 �믮����';
$strSum = '�ᥣ�';
$strSwedish = '����᪨�';
$strSwitchToTable = '��४������� �� ᪮��஢����� ⠡����';

$strTable = '⠡��� ';
$strTableComments = '�������਩ � ⠡���';
$strTableEmpty = '���⮥ �������� ⠡����!';
$strTableHasBeenDropped = '������ %s �뫠 㤠����';
$strTableHasBeenEmptied = '������ %s �뫠 ��饭�';
$strTableHasBeenFlushed = '�� ��襭 ��� ⠡���� %s';
$strTableMaintenance = '���㦨����� ⠡����';
$strTableOfContents = '����������';
$strTableOptions = '��樨 ⠡����';
$strTableStructure = '������� ⠡����';
$strTableType = '��� ⠡����';
$strTables = '%s ⠡���(�)';
$strTblPrivileges = ' �ਢ������, ᯥ���� ��� ⠡����';
$strTextAreaLength = ' ��-�� ����让 �����,<br /> �� ���� �� ����� ���� ��।���஢���� ';
$strThai = '���';
$strTheContent = '����ন��� 䠩�� �뫮 ������஢���.';
$strTheContents = '����ন��� 䠩�� ����頥� ᮤ�ন��� ⠡���� ��� �冷� � ������묨 ��ࢨ�묨 ��� 㭨����묨 ���砬�.';
$strTheTerminator = '������ ����砭�� �����.';
$strThisHost = '��� ���';
$strThisNotDirectory = '�� �뫠 �� ��४���';
$strThreadSuccessfullyKilled = 'Thread %s �� 㤠���.';
$strTime = '�६�';
$strToggleScratchboard = 'toggle scratchboard';
$strTotal = '�ᥣ�';
$strTotalUC = '�ᥣ�';
$strTraditionalChinese = '�ࠤ�樮��� ��⠩᪨�';
$strTraffic = '��䨪';
$strTransformation_image_jpeg__inline = '�⮡ࠦ��� �।��ᬮ��, �� ����� ����� ��������; ��樨: �ਭ�,���� � ���ᥫ�� (��࠭�� ��室�� ����⠡)';
$strTransformation_image_jpeg__link = '�⮡ࠦ��� ��뫪� �� �� ����ࠦ����(direct blob download, i.e.).';
$strTransformation_image_png__inline = 'See image/jpeg: inline';
$strTransformation_text_plain__dateformat = '����� ���� TIME, TIMESTAMP ��� DATETIME � �ଠ���� ��� � ᮮ⢥��⢨� � ��訬 ������� �ଠ⮬ ����. ��ࢠ� ���� - �� ᤢ�� (� ���), ����� �㤥� �������� � timestamp (�� 㬮�砭��: 0). ���� ���� - �� ��㣮� �ଠ� ���� � ᮮ⢥��⢨� � ��ࠬ��ࠬ�, ����㯭묨 ��� �㭪樨 PHP strftime().';
$strTransformation_text_plain__external = '������ LINUX: ����᪠�� ���譥� �ਫ������ � ������� ���� �१ �⠭����� ����. �����頥� �⠭����� �뢮� �ਫ������. �� 㬮�砭�� Tidy, ��� �ଠ�஢���� HTML ����. �� ᮮ�ࠦ���� ������᭮��, �� ������ ������ ��।���஢��� 䠩� libraries/transformations/text_plain__external.inc.php � ������ �ணࠬ��, ����� �� ��� ����᪠��. ��ࢠ� ���� - �� ����� �ணࠬ��, ������ �� ��� �ᯮ�짮����, ���� - ��ࠬ���� ��� �ணࠬ��. ��⨩ ��ࠬ��� �� ���祭�� 1 �㤥� �������஢��� �뢮�, �ᯮ���� htmlspecialchars() (�� 㬮�砭�� 1). ������� ��ࠬ��� �� ���祭�� 1 ���⠢�� NOWRAP, ⠪ �� ���� �뢮� �㤥� �⮡ࠦ� ��� ����ଠ�஢���� (�� 㬮�砭�� 1)';
$strTransformation_text_plain__formatted = '���࠭�� ��室��� �ଠ�஢���� ����. ��࠭�஢���� �� �ந��������.';
$strTransformation_text_plain__imagelink = '�����뢠�� ����ࠦ���� � ��뫪�, ���� ᮤ�ন� ��� 䠩��; ��ࢠ� ���� - �� ��䨪� �த� "http://domain.com/", ���� - �ਭ� � ���ᥫ��, ����� - ����.';
$strTransformation_text_plain__link = '�⮡ࠦ��� ��뫪�, ���� ᮤ�ন� ��� 䠩��; ��ࢠ� ���� - �� ��䨪� �த� "http://domain.com/", ���� - ��������� ��� ��뫪�.';
$strTransformation_text_plain__substr = '�����뢠�� ⮫쪮 ���� ��ப�. ��ࢠ� ���� - �� ᤢ��, ��।����騩 ��� ��稭����� �뢮� ⥪�� (�� 㬮�砭�� 0). ���� ���� - �� ������⢮ �����頥���� ⥪��. �᫨ �� ��।�����, � �����頥��� ���� ����騩�� ⥪��. ����� ���� ��।���� ᨬ����, ����� ���� ��������� � �뢮��, ����� �����頥��� �����ப�. (�� 㬮�砭��: ...) .';
$strTransformation_text_plain__unformatted = '�⮡ࠦ��� HTML-��� � ���� HTML �����. HTML �ଠ�஢���� �� �ந��������.';
$strTruncateQueries = '��१��� ��������� ������';
$strTurkish = '���檨�';
$strType = '���';

$strUkrainian = '��ࠨ�᪨�';
$strUncheckAll = '����� �⬥�� � ���';
$strUnicode = '������';
$strUnique = '������쭮�';
$strUnknown = '�������⭮';
$strUnselectAll = '����� �⬥�� � ���';
$strUpdComTab = '��������, ��ᬮ��� ��� �������� Column_comments ������� � ���㬥��樨';
$strUpdatePrivMessage = '�뫨 �������� �ਢ������ ���';
$strUpdateProfileMessage = '��䨫� �� ��������.';
$strUpdateQuery = '��������� �����';
$strUpgrade = '�� ������ �������� %s �� ���ᨨ %s ��� ���.';
$strUsage = '�ᯮ�짮�����';
$strUseBackquotes = '����� ����窨 � ��������� ⠡��� � �����';
$strUseHostTable = '�ᯮ�짮���� ⠡���� ��⮢';
$strUseTables = '�ᯮ�짮���� ⠡����';
$strUseTextField = '�ᯮ�짮���� ⥪�⮢�� ����';
$strUseThisValue = '�ᯮ�짮���� �� ���祭��';
$strUser = '���짮��⥫�';
$strUserAlreadyExists = '���짮��⥫� %s 㦥 �������!';
$strUserEmpty = '���⮥ ��� ���짮��⥫�!';
$strUserName = '��� ���짮��⥫�';
$strUserNotFound = '�뤥����� ���짮��⥫� �� �� ������ � ⠡��� �ਢ������.';
$strUserOverview = 'User overview';
$strUsersDeleted = '��࠭�� ���짮��⥫� �뫨 �ᯥ譮 㤠����.';
$strUsersHavingAccessToDb = '���짮��⥫� � �ࠢ��� ����㯠 � &quot;%s&quot;';

$strValidateSQL = '�஢���� SQL';
$strValidatorError = '�஢�ઠ SQL �� ����� ���� ���樠����஢���. �஢����, ��⠭������ �� ����室��� ���㫨 ���७�� ��� PHP, ���ᠭ�� � %s���㬥��樨%s.';
$strValue = '���祭��';
$strVar = '��६�����';
$strViewDump = '��ᬮ���� ���� ⠡����';
$strViewDumpDB = '��ᬮ���� ���� ��';
$strViewDumpDatabases = '��ᬮ���� ���� (�奬�) ��';

$strWebServerUploadDirectory = '��४���, �㤠 ��������� ����砭�� 䠩�� �� web-�ࢥ�';
$strWebServerUploadDirectoryError = '��४���, ������ �� ��⠭����� ��� "upload" �� ����� ���� �����';
$strWelcome = '���� ���������� � %s';
$strWestEuropean = '�������-��ய��᪨�';
$strWildcard = '蠡���';
$strWindowNotFound = '������� ���� ��㧥� �� ����� ���� ���������. ��������, �� ����뫨 த�⥫�᪮� ���� ��� ��� ��㧥� �������� ��������� ���������� ��-�� ����஥� ������᭮��';
$strWithChecked = '� �⬥祭�묨:';
$strWritingCommentNotPossible = '����ᠭ�� ��������� ����������';
$strWritingRelationNotPossible = '���������� �裡 ����������';
$strWrongUser = '�訡��� �����/��஫�. � ����㯥 �⪠����.';

$strXML = 'XML';

$strYes = '��';

$strZeroRemovesTheLimit = '����砭��: ��⠭���� ��� ��権 �  0 (����) 㤠��� �����.';
$strZip = '��娢�஢��� � zip';
// To translate

$strCreationDates = 'Creation/Update/Check dates';  //to translate
$strCheckOverhead = 'Check overheaded';  //to translate
$strExcelEdition = 'Excel edition';  //to translate
$strDelayedInserts = 'Use delayed inserts';  //to translate
$strSQLExportType = 'Export type';  //to translate
$strAddConstraints = 'Add constraints';  //to translate
$strGeorgian = 'Georgian';  //to translate
$strCzechSlovak = 'Czech-Slovak';  //to translate
$strTransformation_application_octetstream__download = 'Display a link to download the binary data of a field. First option is the filename of the binary file. Second option is a possible fieldname of a table row containing the filename. If you provide a second option you need to have the first option set to an empty string';  //to translate
$strMaximumSize = 'Maximum size: %s%s';  //to translate
$strConnectionError = 'Cannot connect: invalid settings.';  //to translate
$strDropDatabaseStrongWarning = 'You are about to DESTROY a complete database!';  //to translate
$strAddHeaderComment = 'Add custom comment into header (\\n splits lines)';  //to translate
$strNeedPrimaryKey = 'You should define a primary key for this table.';  //to translate
$strIgnoreInserts = 'Use ignore inserts';  //to translate
$strAddIfNotExists = 'Add IF NOT EXISTS';  //to translate
$strCommentsForTable = 'COMMENTS FOR TABLE';  //to translate
$strMIMETypesForTable = 'MIME TYPES FOR TABLE';  //to translate
$strRelationsForTable = 'RELATIONS FOR TABLE';  //to translate
$strAfterInsertSame = 'Go back to this page';  //to translate
$strRenameDatabaseOK = 'Database %s has been renamed to %s';  //to translate
$strDatabaseEmpty = 'The database name is empty!';  //to translate
$strDBRename = 'Rename database to';  //to translate
$strOperator = 'Operator';  //to translate
$strEncloseInTransaction = 'Enclose export in a transaction';  //to translate
$strCalendar = 'Calendar';  //to translate
$strRefresh = 'Refresh';  //to translate
$strDefragment = 'Defragment table';  //to translate
$strNoRowsSelected = 'No rows selected';  //to translate
$strSpanish = 'Spanish';  //to translate
$strStrucNativeExcel = 'Native MS Excel data';  //to translate
$strDisableForeignChecks = 'Disable foreign key checks';  //to translate
$strServerNotResponding = 'The server is not responding';  //to translate
$strTheme = 'Theme / Style';  //to translate
$strTakeIt = 'take it';  //to translate
$strHexForBinary = 'Use hexadecimal for binary fields';  //to translate
$strIcelandic = 'Icelandic';  //to translate
$strLatvian = 'Latvian';  //to translate
$strPolish = 'Polish';  //to translate
$strRomanian = 'Romanian';  //to translate
$strSlovenian = 'Slovenian';  //to translate
$strTraditionalSpanish = 'Traditional Spanish';  //to translate
$strSlovak = 'Slovak';  //to translate
$strMySQLConnectionCollation = 'MySQL connection collation';  //to translate
$strPersian = 'Persian';  //to translate
$strAddFields = 'Add %s field(s)';  //to translate
$strInsertBookmarkTitle = 'Please insert bookmark title';  //to translate
$strNoThemeSupport = 'No themes support, please check your configuration and/or your themes in directory %s.';  //to translate
$strUseTabKey = 'Use TAB key to move from value to value, or CTRL+arrows to move anywhere';  //to translate
$strEscapeWildcards = 'Wildcards _ and % should be escaped with a \ to use them literally';  //to translate
$strBinLogName = 'Log name';  //to translate
$strBinLogPosition = 'Position';  //to translate
$strBinLogEventType = 'Event type';  //to translate
$strBinLogServerId = 'Server ID';  //to translate
$strBinLogOriginalPosition = 'Original position';  //to translate
$strBinLogInfo = 'Information';  //to translate
$strBinaryLog = 'Binary log';  //to translate
$strSelectBinaryLog = 'Select binary log to view';  //to translate
$strDBCopy = 'Copy database to';  //to translate
$strCopyDatabaseOK = 'Database %s has been copied to %s';  //to translate
$strSwitchToDatabase = 'Switch to copied database';  //to translate
$strPasswordHashing = 'Password Hashing';  //to translate
$strCompatibleHashing = 'MySQL&nbsp;4.0 compatible';  //to translate
?>
