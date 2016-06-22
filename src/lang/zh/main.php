<?php
/*
	*********************************************************************
	* LogAnalyzer - http://loganalyzer.adiscon.com
	* -----------------------------------------------------------------
	*
	* Copyright (C) 2008-2010 Adiscon GmbH.
	*
	* This file is part of LogAnalyzer.
	*
	* LogAnalyzer is free software: you can redistribute it and/or modify
	* it under the terms of the GNU General Public License as published by
	* the Free Software Foundation, either version 3 of the License, or
	* (at your option) any later version.
	*
	* LogAnalyzer is distributed in the hope that it will be useful,
	* but WITHOUT ANY WARRANTY; without even the implied warranty of
	* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	* GNU General Public License for more details.
	*
	* You should have received a copy of the GNU General Public License
	* along with LogAnalyzer. If not, see <http://www.gnu.org/licenses/>.
	*
	* A copy of the GPL can be found in the file "COPYING" in this
	* distribution.
	* 中文语言包 v 1.0 by rEgSpy LanEast  2014.3.19
	*********************************************************************
*/
global $content;

// Global Stuff
$content['LN_MAINTITLE'] = "Main LogAnalyzer";
$content['LN_MAIN_SELECTSTYLE'] = "选择风格";
$content['LN_GEN_LANGUAGE'] = "选择语言";
$content['LN_GEN_SELECTSOURCE'] = "选择源";
$content['LN_GEN_MOREPAGES'] = "More than one Page available";
$content['LN_GEN_FIRSTPAGE'] = "第一面页";
$content['LN_GEN_LASTPAGE'] = "最后一页";
$content['LN_GEN_NEXTPAGE'] = "下一页";
$content['LN_GEN_PREVIOUSPAGE'] = "上一页";
$content['LN_GEN_RECORDCOUNT'] = "一共找到记录";
$content['LN_GEN_PAGERSIZE'] = "每页";
$content['LN_GEN_PAGE'] = "页";
$content['LN_GEN_PREDEFINEDSEARCHES'] = "预定义搜索";
$content['LN_GEN_SOURCE_DISK'] = "磁盘文件";
$content['LN_GEN_SOURCE_DB'] = "MYSQL Native";
$content['LN_GEN_SOURCE_PDO'] = "数据库 (PDO)";
$content['LN_GEN_SOURCE_MONGODB'] = "MongoDB Native";
$content['LN_GEN_RECORDSPERPAGE'] = "每页";
$content['LN_GEN_PRECONFIGURED'] = "预配置";
$content['LN_GEN_AVAILABLESEARCHES'] = "Available searches";
$content['LN_GEN_DB_MYSQL'] = "Mysql 服务器";
$content['LN_GEN_DB_MSSQL'] = "Microsoft SQL 服务器";
$content['LN_GEN_DB_ODBC'] = "ODBC 数据源";
$content['LN_GEN_DB_PGSQL'] = "PostgreSQL";
$content['LN_GEN_DB_OCI'] = "Oracle Call Interface";
$content['LN_GEN_DB_DB2'] = "	IBM DB2";
$content['LN_GEN_DB_FIREBIRD'] = "Firebird/Interbase 6";
$content['LN_GEN_DB_INFORMIX'] = "IBM Informix Dynamic Server";
$content['LN_GEN_DB_SQLITE'] = "SQLite 2";
$content['LN_GEN_SELECTVIEW'] = "选择视图";
$content['LN_GEN_CRITERROR_UNKNOWNTYPE'] = "The source type '%1' is not supported by LogAnalyzer yet. This is a critical error, please fix your configuration.";
$content['LN_GEN_ERRORRETURNPREV'] = "点击此处返回前一页面.";
$content['LN_GEN_ERRORDETAILS'] = "错误详细信息:";
$content['LN_SOURCES_ERROR_WITHINSOURCE'] = "这个源 '%1' 检查返回错误:<br>%2";
$content['LN_SOURCES_ERROR_EXTRAMSG'] = "额外的错误详细信息:<br>%1";
$content['LN_ERROR_NORECORDS'] = "发现没有系统日志记录";
$content['LN_ERROR_FILE_NOT_FOUND'] = "Syslog 文件无法找到";
$content['LN_ERROR_FILE_NOT_READABLE'] = "Syslog 文件无法读取，读取访问权限可能会被拒绝";
$content['LN_ERROR_UNKNOWN'] = "未知或无法处理的错误发生 (Error Code '%1')";
$content['LN_ERROR_FILE_EOF'] = "到达文件尾";
$content['LN_ERROR_FILE_BOF'] = "到达文件开始处";
$content['LN_ERROR_FILE_CANT_CLOSE'] = "不能关闭文件";
$content['LN_ERROR_UNDEFINED'] = "未定义错误";
$content['LN_ERROR_EOS'] = "到达流的末尾";
$content['LN_ERROR_FILTER_NOT_MATCH'] = "过滤器不匹配任何结果";
$content['LN_ERROR_DB_CONNECTFAILED'] = "连接到数据库服务器失败";
$content['LN_ERROR_DB_CANNOTSELECTDB'] = "找不到配置的数据库";
$content['LN_ERROR_DB_QUERYFAILED'] = "Dataquery未能执行";
$content['LN_ERROR_DB_NOPROPERTIES'] = "没有找到数据库属性";
$content['LN_ERROR_DB_INVALIDDBMAPPING'] = "无效的数据字段映射";
$content['LN_ERROR_DB_INVALIDDBDRIVER'] = "选择的数据库驱动程序无效";
$content['LN_ERROR_DB_TABLENOTFOUND'] = "找不到配置表，也许拼错,表名区分大小写";
$content['LN_ERROR_DB_DBFIELDNOTFOUND'] = "找不到数据库字段映射至少一个字段。";
$content['LN_GEN_SELECTEXPORT'] = "&gt; 选择 Exportformat &lt;";
$content['LN_GEN_EXPORT_CVS'] = "CSV (逗号分隔)";
$content['LN_GEN_EXPORT_XML'] = "XML";
$content['LN_GEN_EXPORT_PDF'] = "PDF";
$content['LN_GEN_ERROR_EXPORING'] = "错误导出数据";
$content['LN_GEN_ERROR_INVALIDEXPORTTYPE'] = "选择无效的导出格式，或其它参数错误.";
$content['LN_GEN_ERROR_SOURCENOTFOUND'] = " ID '%1' 的源没有找到.";
$content['LN_GEN_MOREINFORMATION'] = "更多信息";
$content['LN_FOOTER_PAGERENDERED'] = "中文语言包  by rEgSpy LanEast  页面生成";
$content['LN_FOOTER_DBQUERIES'] = "数据查询";
$content['LN_FOOTER_GZIPENABLED'] = "GZIP 开启";
$content['LN_FOOTER_SCRIPTTIMEOUT'] = "脚本超时";
$content['LN_FOOTER_SECONDS'] = "秒 ";
$content['LN_WARNING_LOGSTREAMTITLE'] = "日志流警告";
$content['LN_WARNING_LOGSTREAMDISK_TIMEOUT'] = "While reading the logstream, the php script timeout forced me to abort at this point.<br><br> If you want to avoid this, please increase the LogAnalyzer script timeout in your config.php. If the user system is installed, you can do that in Admin center.";
$content['LN_ERROR_FILE_NOMORETIME'] = "No more time for processing left";
$content['LN_WARNING_DBUPGRADE'] = "Database Upgrade required";
$content['LN_WARNING_DBUPGRADE_TEXT'] = "The current installed database version is '%1'.<br>An update to version '%2' is available.";
$content['LN_ERROR_REDIRECTABORTED'] = 'Automatic redirect to the <a href="%1">page</a> was aborted, as an internal error occured. Please see the error details above and contact our support forums if you need assistance.';
$content['LN_DEBUGLEVEL'] = "Debug 等级";
$content['LN_DEBUGMESSAGE'] = "Debug 消息";
$content['LN_GEN_REPORT_OUTPUT_HTML'] = "HTML 格式";
$content['LN_GEN_REPORT_OUTPUT_PDF'] = "PDF 格式";
$content['LN_GEN_REPORT_TARGET_STDOUT'] = "直接输出";
$content['LN_GEN_REPORT_TARGET_FILE'] = "保存到文件";
$content['LN_GEN_REPORT_TARGET_EMAIL'] = "以电子邮件发送";
$content['LN_GEN_UNKNOWN'] = "未知";
$content['LN_GEN_AUTH_INTERNAL'] = "内部认证";
$content['LN_GEN_AUTH_LDAP'] = "LDAP 认证";

// Topmenu Entries
$content['LN_MENU_SEARCH'] = "搜索";
$content['LN_MENU_SHOWEVENTS'] = "显示事件";
$content['LN_MENU_HELP'] = "帮助";
	$content['LN_MENU_DOC'] = "文档";
	$content['LN_MENU_FORUM'] = "支持论坛";
	$content['LN_MENU_WIKI'] = "LogAnalyzer Wiki";
	$content['LN_MENU_PROSERVICES'] = "专业服务";
$content['LN_MENU_SEARCHINKB'] = "在知识库搜索";
$content['LN_MENU_LOGIN'] = "登录";
$content['LN_MENU_ADMINCENTER'] = "管理中心";
$content['LN_MENU_LOGOFF'] = "登出";
$content['LN_MENU_LOGGEDINAS'] = "登录为";
$content['LN_MENU_MAXVIEW'] = "最大化显示";
$content['LN_MENU_NORMALVIEW'] = "正常显示";
$content['LN_MENU_STATISTICS'] = "统计";
$content['LN_MENU_CLICKTOEXPANDMENU'] = "单击该图标可显示菜单";
	$content['LN_MENU_REPORTS'] = "报表";

// Main Index Site
$content['LN_ERROR_INSTALLFILEREMINDER'] = "Warning! You still have NOT removed the 'install.php' from your LogAnalyzer main directory!";
$content['LN_TOP_NUM'] = "No.";
$content['LN_TOP_UID'] = "uID";
$content['LN_GRID_POPUPDETAILS'] = "详细日志系统ID '%1'";

$content['LN_SEARCH_USETHISBLA'] = "Use the form below and your advanced search will appear here";
$content['LN_SEARCH_FILTER'] = "搜索(过滤):";
$content['LN_SEARCH_ADVANCED'] = "高级搜索";
$content['LN_SEARCH'] = "搜索";
$content['LN_SEARCH_RESET'] = "重新搜索";
$content['LN_SEARCH_PERFORMADVANCED'] = "执行高级搜索";
$content['LN_VIEW_MESSAGECENTERED'] = "返回此消息未过滤前的视图";
$content['LN_VIEW_RELATEDMSG'] = "查看相关的系统日志消息";
$content['LN_VIEW_FILTERFOR'] = "过滤消息";
$content['LN_VIEW_SEARCHFOR'] = "在线搜索";
$content['LN_VIEW_SEARCHFORGOOGLE'] = "谷歌搜索";
$content['LN_GEN_MESSAGEDETAILS'] = "详细信息";
	$content['LN_VIEW_ADDTOFILTER'] = "增加 '%1' 到过滤设置";
	$content['LN_VIEW_EXCLUDEFILTER'] = "排除 '%1' 从过滤设置";
	$content['LN_VIEW_FILTERFORONLY'] = "只过滤 '%1' ";
	$content['LN_VIEW_SHOWALLBUT'] = "显示所有除 '%1'以外";
	$content['LN_VIEW_VISITLINK'] = "在新的窗口打开 '%1'连接";

$content['LN_HIGHLIGHT'] = "高亮>>";
$content['LN_HIGHLIGHT_OFF'] = "高亮 <<";
$content['LN_HIGHLIGHT_WORDS'] = "高亮显示逗号分隔的单词";

$content['LN_AUTORELOAD'] = "设置页面自动重载";
$content['LN_AUTORELOAD_DISABLED'] = "禁用自动重载";
$content['LN_AUTORELOAD_PRECONFIGURED'] = "预先配置自动重载 ";
$content['LN_AUTORELOAD_SECONDS'] = "秒";
$content['LN_AUTORELOAD_MINUTES'] = "分";

// Filter Options  过滤器选项
$content['LN_FILTER_DATE'] = "日期时间范围";
$content['LN_FILTER_DATEMODE'] = "选择模式";
$content['LN_DATEMODE_ALL'] = "所有时间";
$content['LN_DATEMODE_RANGE'] = "时间范围";
$content['LN_DATEMODE_LASTX'] = "最近日期时间";
$content['LN_FILTER_DATEFROM'] = "日期范围从";
$content['LN_FILTER_DATETO'] = "日期范围";
$content['LN_FILTER_TIMEFROM'] = "时间范围从";
$content['LN_FILTER_TIMETO'] = "时间范围";
$content['LN_FILTER_DATELASTX'] = "时间起始点";
$content['LN_FILTER_ADD2SEARCH'] = "添加到搜索";
$content['LN_DATE_LASTX_HOUR'] = "最后一小时";
$content['LN_DATE_LASTX_12HOURS'] = "最近12小时";
$content['LN_DATE_LASTX_24HOURS'] = "最近24小时";
$content['LN_DATE_LASTX_7DAYS'] = "最近7天";
$content['LN_DATE_LASTX_31DAYS'] = "最近31天";
$content['LN_FILTER_FACILITY'] = "Syslog 特性";
$content['LN_FILTER_SEVERITY'] = "Syslog 严重性";
$content['LN_FILTER_OTHERS'] = "其它过滤器";
$content['LN_FILTER_MESSAGE'] = "Syslog 消息";
$content['LN_FILTER_SYSLOGTAG'] = "Syslog标记";
$content['LN_FILTER_SOURCE'] = "源 (主机名)";
$content['LN_FILTER_MESSAGETYPE'] = "消息类型";

// Install Page
$content['LN_CFG_DBSERVER'] = "Database Host";
$content['LN_CFG_DBPORT'] = "Database Port";
$content['LN_CFG_DBNAME'] = "Database Name";
$content['LN_CFG_DBPREF'] = "Table prefix";
$content['LN_CFG_DBUSER'] = "Database User";
$content['LN_CFG_DBPASSWORD'] = "Database Password";
$content['LN_CFG_PARAMMISSING'] = "The following parameter were missing: ";
$content['LN_CFG_SOURCETYPE'] = "Source Type";
$content['LN_CFG_DISKTYPEOPTIONS'] = "Disk Type Options";
$content['LN_CFG_LOGLINETYPE'] = "Logline type";
$content['LN_CFG_SYSLOGFILE'] = "Syslog file";
$content['LN_CFG_DATABASETYPEOPTIONS'] = "Database Type Options";
$content['LN_CFG_DBTABLETYPE'] = "Table type";
$content['LN_CFG_DBSTORAGEENGINE'] = "Database Storage Engine";
$content['LN_CFG_DBTABLENAME'] = "Database Tablename";
$content['LN_CFG_NAMEOFTHESOURCE'] = "Name of the Source";
$content['LN_CFG_FIRSTSYSLOGSOURCE'] = "First Syslog Source";
$content['LN_CFG_DBROWCOUNTING'] = "Enable Row Counting";
$content['LN_CFG_VIEW'] = "Select View";
$content['LN_CFG_DBUSERLOGINREQUIRED'] = "Require user to be logged in";
$content['LN_CFG_MSGPARSERS'] = "Message Parsers (comma seperated)";
$content['LN_CFG_NORMALIZEMSG'] = "Normalize Message within Parsers";
$content['LN_CFG_SKIPUNPARSEABLE'] = "Skip unparseable messages (Only works if msgparsers are configured!)";
$content['LN_CFG_DBRECORDSPERQUERY'] = "Recordcount for database queries";
$content['LN_CFG_LDAPServer'] = "LDAP Server Hostname/IP";
$content['LN_CFG_LDAPPort'] = "LDAP Port, default 389 (636 for SSL)";
$content['LN_CFG_LDAPBaseDN'] = "Base DN for LDAP Search";
$content['LN_CFG_LDAPSearchFilter'] = "Basic Search filter";
$content['LN_CFG_LDAPUidAttribute'] = "LDAP Username attribute";
$content['LN_CFG_LDAPBindDN'] = "Privilegied user used to LDAP queries";
$content['LN_CFG_LDAPBindPassword'] = "Password of the privilegied user";
$content['LN_CFG_LDAPDefaultAdminUser'] = "Default administrative LDAP Username";
$content['LN_CFG_AUTHTYPE'] = "Authentication method";
$content['LN_GEN_AUTH_LDAP_OPTIONS'] = "LDAP Authentication Options";

// Details page
$content['LN_DETAILS_FORSYSLOGMSG'] = "系统日志消息的详细信息ID";
$content['LN_DETAILS_DETAILSFORMSG'] = "消息ID的详细信息";
$content['LN_DETAIL_BACKTOLIST'] = "返回列表视图";
$content['LN_DETAIL_DYNAMIC_FIELDS'] = "动态信息";


// Login Site
$content['LN_LOGIN_DESCRIPTION'] = "使用此来登录到LogAnalyzer. ";
$content['LN_LOGIN_TITLE'] = "登录";
$content['LN_LOGIN_USERNAME'] = "用户名";
$content['LN_LOGIN_PASSWORD'] = "密码";
$content['LN_LOGIN_SAVEASCOOKIE'] = "Stay logged on";
$content['LN_LOGIN_ERRWRONGPASSWORD'] = "错误的用户名或密码!";
$content['LN_LOGIN_USERPASSMISSING'] = "没有给出用户名或密码";
$content['LN_LOGIN_LDAP_USERNOTFOUND'] = "用户 '%1' 没有找到";
$content['LN_LOGIN_LDAP_USERCOULDNOTLOGIN'] = "无法登录用户 '%1', LDAP 错误: %2";
$content['LN_LOGIN_LDAP_PASSWORDFAIL'] = "用户 '%1' 的密码不能登录";
$content['LN_LOGIN_LDAP_SERVERFAILED'] = "无法连接到LDAP服务器 '%1'";
$content['LN_LOGIN_LDAP_USERBINDFAILED'] = "无法与搜索用户DN绑定 '%1'";


// Install Site
$content['LN_INSTALL_TITLETOP'] = "Installing LogAnalyzer Version %1 - Step %2";
$content['LN_INSTALL_TITLE'] = "Installer Step %1";
$content['LN_INSTALL_ERRORINSTALLED'] = 'LogAnalyzer is already configured!<br><br> If you want to reconfigure LogAnalyzer, either delete the current <B>config.php</B> or replace it with an empty file.<br><br>Click <A HREF="index.php">here</A> to return to pgpLogCon start page.';
$content['LN_INSTALL_FILEORDIRNOTWRITEABLE'] = "At least one file or directory (or more) is not writeable, please check the file permissions (chmod 666)!";
$content['LN_INSTALL_SAMPLECONFIGMISSING'] = "The sample configuration file '%1' is missing. You have not fully uploaded LogAnalyzer.";
$content['LN_INSTALL_ERRORCONNECTFAILED'] = "Database connect to '%1' failed! Please check Servername, Port, User and Password!";
$content['LN_INSTALL_ERRORACCESSDENIED'] = "Cannot use the database  '%1'! If the database does not exists, create it or check user access permissions!";
$content['LN_INSTALL_ERRORINVALIDDBFILE'] = "Error, invalid Database definition file (to short!), the file name is '%1'! Please check if the file was correctly uploaded.";
$content['LN_INSTALL_ERRORINSQLCOMMANDS'] = "Error, invalid Database definition file (no sql statements found!), the file name is '%1'!<br> Please check if the file was not correctly uploaded, or contact the LogAnalyzer forums for assistance!";
$content['LN_INSTALL_MISSINGUSERNAME'] = "Username needs to be specified";
$content['LN_INSTALL_PASSWORDNOTMATCH'] = "Either the password does not match or is to short!";
$content['LN_INSTALL_FAILEDTOOPENSYSLOGFILE'] = "Failed to open the syslog file '%1'! Check if the file exists and LogAnalyzer has sufficient rights to it<br>";
$content['LN_INSTALL_FAILEDCREATECFGFILE'] = "Coult not create the configuration file in '%1'! Please verify the file permissions!";
$content['LN_INSTALL_FAILEDREADINGFILE'] = "Error reading the file '%1'! Please verify if the file exists!";
$content['LN_INSTALL_ERRORREADINGDBFILE'] = "Error reading the default database definition file in '%1'! Please verify  if the file exists!";
$content['LN_INSTALL_STEP1'] = "Step 1 - Prerequisites";
$content['LN_INSTALL_STEP2'] = "Step 2 - Verify File Permissions";
$content['LN_INSTALL_STEP3'] = "Step 3 - Basic Configuration";
$content['LN_INSTALL_STEP4'] = "Step 4 - Create Tables";
$content['LN_INSTALL_STEP5'] = "Step 5 - Check SQL Results";
$content['LN_INSTALL_STEP6'] = "Step 6 - Creating the Main Useraccount";
$content['LN_INSTALL_STEP7'] = "Step 7 - Create the first source for syslog messages";
$content['LN_INSTALL_STEP8'] = "Step 8 - Done";
$content['LN_INSTALL_STEP1_TEXT'] = 'Before you start installing LogAnalyzer, the Installer setup has to check a few things first.<br>You may have to correct some file permissions first. <br><br>Click on <input type="submit" value="Next"> to start the Test!';
$content['LN_INSTALL_STEP2_TEXT'] = "The following file permissions have been checked. Verify the results below! <br>You may use the <B>configure.sh</B> script from the <B>contrib</B> folder to set the permissions for you.";
$content['LN_INSTALL_STEP3_TEXT'] = "In this step, you configure the basic configurations for LogAnalyzer.";
$content['LN_INSTALL_STEP4_TEXT'] = 'If you reached this step, the database connection has been successfully verified!<br><br> The next step will be to create the necessary database tables used by the LogAnalyzer User System. This might take a while!<br> <b>WARNING</b>, if you have an existing LogAnalyzer installation in this database with the same tableprefix, all your data will be <b>OVERWRITTEN</b>! Make sure you are using a fresh database, or you want to overwrite your old LogAnalyzer database. <br><br><b>Click on <input type="submit" value="Next"> to start the creation of the tables</b>';
$content['LN_INSTALL_STEP5_TEXT'] = "Tables have been created. Check the List below for possible Error's";
$content['LN_INSTALL_STEP6_TEXT'] = "You are now about to create the initial LogAnalyzer User Account.<br> This will be the first administrative user, which will be needed to login into LogAnalyzer and access the Admin Center!";
$content['LN_INSTALL_STEP8_TEXT'] = 'Congratulations! You have successfully installed LogAnalyzer :)! <br><br>Click <a href="index.php">here</a> to go to your installation.';
$content['LN_INSTALL_PROGRESS'] = "Install Progress: ";
$content['LN_INSTALL_FRONTEND'] = "Frontend Options";
$content['LN_INSTALL_NUMOFSYSLOGS'] = "Number of syslog messages per page";
$content['LN_INSTALL_MSGCHARLIMIT'] = "Message character limit for the main view";
$content['LN_INSTALL_STRCHARLIMIT'] = "Character display limit for all string type fields";
$content['LN_INSTALL_SHOWDETAILPOP'] = "Show message details popup";
$content['LN_INSTALL_AUTORESOLVIP'] = "Automatically resolved IP Addresses (inline)";
$content['LN_INSTALL_USERDBOPTIONS'] = "User Database Options";
$content['LN_INSTALL_ENABLEUSERDB'] = "Enable User Database";
$content['LN_INSTALL_SUCCESSSTATEMENTS'] = "Successfully executed statements:";
$content['LN_INSTALL_FAILEDSTATEMENTS'] = "Failed statements:";
$content['LN_INSTALL_STEP5_TEXT_NEXT'] = "You can now proceed to the <B>next</B> step adding the first LogAnalyzer Admin User!";
$content['LN_INSTALL_STEP5_TEXT_FAILED'] = "At least one statement failed,see error reasons below";
$content['LN_INSTALL_ERRORMSG'] = "Error Message";
$content['LN_INSTALL_SQLSTATEMENT'] = "SQL Statement";
$content['LN_INSTALL_CREATEUSER'] = "Create User Account";
$content['LN_INSTALL_PASSWORD'] = "Password";
$content['LN_INSTALL_PASSWORDREPEAT'] = "Repeat Password";
$content['LN_INSTALL_SUCCESSCREATED'] = "Successfully created User";
$content['LN_INSTALL_RECHECK'] = "ReCheck";
$content['LN_INSTALL_FINISH'] = "Finish!";
$content['LN_INSTALL_LDAPCONNECTFAILED'] = "Failed to connect to your LDAP Server '%1'.";
$content['LN_INSTALL_WARNINGMYSQL'] = "A MYSQL database Server is required for this feature. Other database engines are not supported for the User Database System. However for logsources, there is support for other database systems.";
$content['LN_INSTALL_'] = "";

// Converter Site
$content['LN_CONVERT_TITLE'] = "Configuration Converter Step %1";
$content['LN_CONVERT_NOTALLOWED'] = "Login";
$content['LN_CONVERT_ERRORINSTALLED'] = 'LogAnalyzer is not allowed to convert your settings into the user database.<br><br> If you want to convert your convert your settings, add the variable following into your config.php: <br><b>$CFG[\'UserDBConvertAllowed\'] = true;</b><br><br> Click <A HREF="index.php">here</A> to return to pgpLogCon start page.';
$content['LN_CONVERT_STEP1'] = "Step 1 - Informations";
$content['LN_CONVERT_STEP2'] = "Step 2 - Create Tables";
$content['LN_CONVERT_STEP3'] = "Step 3 - Check SQL Results";
$content['LN_CONVERT_STEP4'] = "Step 4 - Creating the Main Useraccount";
$content['LN_CONVERT_STEP5'] = "Step 5 - Import Settings into UserDB";
$content['LN_CONVERT_TITLETOP'] = "Converting LogAnalyzer configuration settings - Step ";
$content['LN_CONVERT_STEP1_TEXT'] = 'This script allows you to import your existing configuration from the <b>config.php</b> file. This includes frontend settings, data sources, custom views and custom searches. Do only perform this conversion if you did install LogAnalyzer without the UserDB System, and decided to enable it now. <br><br><b>ANY EXISTING INSTANCE OF A USERDB WILL BE OVERWRITTEN!</b><br><br><input type="submit" value="Click here"> to start the first conversion step!';
$content['LN_CONVERT_STEP2_TEXT'] = 'The database connection has been successfully verified! <br><br>The next step will be to create the necessary database tables for the LogAnalyzer User System. This might take a while! <br><b>WARNING</b>, if you have an existing LogAnalyzer installation in this database with the same tableprefix, all your data will be <b>OVERWRITTEN</b>!<br> Make sure you are using a fresh database, or you want to overwrite your old LogAnalyzer database.<br><br><b>Click on <input type="submit" value="Next"> to start the creation of the tables</b>';
$content['LN_CONVERT_STEP5_TEXT'] = '<input type="submit" value="Click here"> to start the last step of the conversion. In this step, your existing configuration from the <b>config.php</b> will be imported into the database.';
$content['LN_CONVERT_STEP6'] = "Step 8 - Done";
$content['LN_CONVERT_STEP6_TEXT'] = 'Congratulations! You have successfully converted your existing LogAnalyzer installation :)!<br><br>Important! Don\'t forget to REMOVE THE VARIABLES <b>$CFG[\'UserDBConvertAllowed\'] = true;</b> from your config.php file! <br><br>You can click <a href="index.php">here</a> to get to your LogAnalyzerinstallation.';
$content['LN_CONVERT_PROCESS'] = "Conversion Progress:";
$content['LN_CONVERT_ERROR_SOURCEIMPORT'] = "Critical Error while importing the sources into the database, the SourceType '%1' is not supported by this LogAnalyzer Version.";

// Stats Site
	$content['LN_STATS_CHARTTITLE'] = "Top %1 '%2' sorted by messagecount";
	$content['LN_STATS_COUNTBY'] = "消息记数 '%1'";
	$content['LN_STATS_OTHERS'] = "所有其他";
	$content['LN_STATS_TOPRECORDS'] = "最大记录数: %1";
	$content['LN_STATS_GENERATEDAT'] = "生成在: %1";
//	$content['LN_STATS_COUNTBYSYSLOGTAG'] = "Messagecount by SyslogTag";
	$content['LN_STATS_GRAPH'] = "图表";
	$content['LN_GEN_ERROR_INVALIDFIELD'] = "无效的字段名";
	$content['LN_GEN_ERROR_MISSINGCHARTFIELD'] = "丢失的字段名";
	$content['LN_GEN_ERROR_INVALIDTYPE'] = "无效的或未知的图表类型.";
	$content['LN_ERROR_CHARTS_NOTCONFIGURED'] = "没有配置的图表.";
	$content['LN_CHART_TYPE'] = "图表类型";
	$content['LN_CHART_WIDTH'] = "图表的宽度";
	$content['LN_CHART_FIELD'] = "图表字段";
	$content['LN_CHART_MAXRECORDS'] = "最高记录计数";
	$content['LN_CHART_SHOWPERCENT'] = "显示百分比数据";
	$content['LN_CHART_TYPE_CAKE'] = "饼状(Pie)";
	$content['LN_CHART_TYPE_BARS_VERTICAL'] = "垂直柱面";
	$content['LN_CHART_TYPE_BARS_HORIZONTAL'] = "水平柱面";
	$content['LN_STATS_WARNINGDISPLAY'] = "目前产生的大量数据非常耗时的。这将在以后的版本中得到解决。如果处理时间过长，请取消请求.";
// asktheoracle site
$content['LN_ORACLE_TITLE'] = "Asking the oracle for '%1'";
$content['LN_ORACLE_HELP_FOR'] = "These are the links the oracle got for you";
$content['LN_ORACLE_HELP_TEXT'] = "<br><h3>You asked the oracle to find more information about the '%1' value '%2'.</h3>
<p align=\"left\">This pages enables you do a a search over multiple log sources. %3
<br>The overall idea is to make it easy to find information about a specific subject in all places where it may exist.
</p>
<p align=\"left\">A useful use case may be a hack attempt you see in a web log. Click on the attacker's IP, which brings up this search page here. Now you can both lookup information about the IP range as well as check your other logs (e.g. firewall or mail) if they contain information about the attacker. We hope that this facilitates your analysis process.
</p>
";
$content['LN_ORACLE_HELP_TEXT_EXTERNAL'] = "It also enables you to perform canned searches over some external databases";
$content['LN_ORACLE_HELP_DETAIL'] = "Link matrix for the '%1' value '%2'";
$content['LN_ORACLE_SEARCH'] = "Search"; // in '%1' Field";
$content['LN_ORACLE_SOURCENAME'] = "Source name";
$content['LN_ORACLE_FIELD'] = "Field";
$content['LN_ORACLE_ONLINESEARCH'] = "Online Search";
$content['LN_ORACLE_WHOIS'] = "WHOIS Lookup for '%1' value '%2'";

// Report Strings
$content['LN_GEN_ERROR_INVALIDOP'] = "无效或缺少操作类型";
$content['LN_GEN_ERROR_INVALIDREPORTID'] = "无效或缺少报表ID";
$content['LN_GEN_ERROR_MISSINGSAVEDREPORTID'] = "无效或缺少报表模板 ID";
$content['LN_GEN_ERROR_REPORTGENFAILED'] = "产生报告失败 '%1' 错误原因: %2";
$content['LN_GEN_ERROR_WHILEREPORTGEN'] = "生成报告时发生错误"; 
$content['LN_GEN_ERROR_REPORT_NODATA'] = "未找到数据生成报表"; 
$content['LN_GEN_ALL_OTHER_EVENTS'] = "所有其他事件";
$content['LN_REPORT_FOOTER_ENDERED'] = "报告生成";
$content['LN_REPORT_FILTERS'] = "使用过滤器列表";
$content['LN_REPORT_FILTERTYPE_DATE'] = "日期";
$content['LN_REPORT_FILTERTYPE_NUMBER'] = "数字";
$content['LN_REPORT_FILTERTYPE_STRING'] = "字符串";
$content['LN_GEN_SUCCESS_WHILEREPORTGEN'] = "报告已成功生成";
$content['LN_GEN_ERROR_REPORTFAILEDTOGENERATE'] = "无法生成报告，错误的详细信息: %1";
$content['LN_GEN_SUCCESS_REPORTWASGENERATED_DETAILS'] = "成功生成报告: %1";
$content['LN_ERROR_PATH_NOT_ALLOWED'] = "该文件不在允许目录列表 (By 只允许 default /var/log )."; 
$content['LN_ERROR_PATH_NOT_ALLOWED_EXTRA'] = "这个 '%1' 文件不位于目录: '%2' 中"; 

$content['LN_CMD_RUNREPORT'] = "生成报表模板 '%1'";
$content['LN_CMD_REPORTIDNOTFOUND'] = "无效的报表ID '%1'";
$content['LN_CMD_SAVEDREPORTIDNOTFOUND'] = "无效的报表模板 ID '%1'";
$content['LN_CMD_NOREPORTID'] = "缺少报表 ID";
$content['LN_CMD_NOSAVEDREPORTID'] = "缺少报表模板 ID";
$content['LN_CMD_NOCMDPROMPT'] = "错误，该脚本只能从命令提示符下运行。";
$content['LN_REPORT_GENERATEDTIME'] = "报表生成在: ";

$content['LN_REPORT_ACTIONS'] = "运行报表操作";
$content['LN_REPORTS_CAT'] = "报表类别";
$content['LN_REPORTS_ID'] = "报表编号";
$content['LN_REPORTS_NAME'] = "报表名称";
$content['LN_REPORTS_DESCRIPTION'] = "报表说明";
$content['LN_REPORTS_HELP'] = "帮助";
$content['LN_REPORTS_HELP_CLICK'] = "点击这里详细的报表说明";
$content['LN_REPORTS_INFO'] = "显示更多信息";
$content['LN_REPORTS_SAVEDREPORTS'] = "报表模板";
$content['LN_REPORTS_ADMIN'] = "管理报表";
$content['LN_REPORTMENU_LIST'] = "列出已安装的报表";
$content['LN_REPORTMENU_ONLINELIST'] = "所有可用报表";
$content['LN_REPORTS_INFORMATION'] = "这个页面显示已安装的和可用的报表，包括已保存的报表配置列表.
<br/>要运行报表，请点击右边的保存的报表的按钮.
<br/>注意! 生成报表是非常耗时的取决于你的数据库的大小.
";
$content['LN_REPORTS_CHECKLOGSTREAMSOURCE'] = "验证Logstream优化";


?>
