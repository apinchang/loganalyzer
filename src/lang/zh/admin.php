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
$content['LN_ADMINMENU_HOMEPAGE'] = "返回显示事件";
$content['LN_ADMINMENU_GENOPT'] = "设置";
$content['LN_ADMINMENU_SOURCEOPT'] = "数据源";
$content['LN_ADMINMENU_VIEWSOPT'] = "视图";
$content['LN_ADMINMENU_SEARCHOPT'] = "搜索";
$content['LN_ADMINMENU_USEROPT'] = "用户";
$content['LN_ADMINMENU_GROUPOPT'] = "组";
$content['LN_ADMINMENU_CHARTOPT'] = "图表";
$content['LN_ADMINMENU_FIELDOPT'] = "字段";
$content['LN_ADMINMENU_DBMAPPINGOPT'] = "数据映射";
$content['LN_ADMINMENU_MSGPARSERSOPT'] = "消息分析器";
$content['LN_ADMINMENU_REEPORTSOPT'] = "报表模块";
$content['LN_ADMIN_CENTER'] = "管理中心";
$content['LN_ADMIN_UNKNOWNSTATE'] = "未知状态";
$content['LN_ADMIN_ERROR_NOTALLOWED'] = "您的用户级别不允许访问此页面.";
$content['LN_DELETEYES'] = "是";
$content['LN_DELETENO'] = "否";
$content['LN_GEN_ACTIONS'] = "可用操作";
$content['LN_ADMIN_SEND'] = "发送修改";
$content['LN_GEN_USERONLY'] = "只用户";
$content['LN_GEN_GROUPONLY'] = "只组";
$content['LN_GEN_GLOBAL'] = "全局";
$content['LN_GEN_USERONLY_LONG'] = "只用户 <br>(只提供给你的用户)";
$content['LN_GEN_GROUPONLY_LONG'] = "只这组<br>(只提供给选定的组)";
$content['LN_GEN_GROUPONLYNAME'] = "组 '%1'";
$content['LN_ADMIN_POPUPHELP'] = "关于此功能的详细说明";
$content['LN_ADMIN_DBSTATS'] = "显示数据库的统计数据.";
$content['LN_ADMIN_CLEARDATA'] = "如果您需要删除旧的数据记录，使用此功能。";
$content['LN_UPDATE_AVAILABLE'] = "可用更新";
$content['LN_UPDATE_INSTALLEDVER'] = "安装版: ";
$content['LN_UPDATE_AVAILABLEVER'] = "可用版本: ";
$content['LN_UPDATE_LINK'] = "点击这里获取更新";

// General Options
$content['LN_ADMIN_GLOBFRONTEND'] = "全局前端选项";
$content['LN_ADMIN_USERFRONTEND'] = "特定用户的前端选项";
$content['LN_ADMIN_MISC'] = "其他选项";
$content['LN_GEN_SHOWDEBUGMSG'] = "显示调试消息";
$content['LN_GEN_DEBUGGRIDCOUNTER'] = "显示调试表格计数器";
$content['LN_GEN_SHOWPAGERENDERSTATS'] = "显示页面生成统计";
$content['LN_GEN_ENABLEGZIP'] = "启用gzip压缩输出";
$content['LN_GEN_DEBUGUSERLOGIN'] = "调试用户登陆";
$content['LN_GEN_WEBSTYLE'] = "默认显示风格";
$content['LN_GEN_SELLANGUAGE'] = "默认显示语言";
$content['LN_GEN_PREPENDTITLE'] = "页面额外附加标题";
$content['LN_GEN_USETODAY'] = "使用今天和昨天的时间字段";
$content['LN_GEN_DETAILPOPUPS'] = "使用弹出漂浮窗口显示完整的详细信息";
$content['LN_GEN_MSGCHARLIMIT'] = "限制显示在主视图中的消息字符数";
$content['LN_GEN_STRCHARLIMIT'] = "限制显示字段字符串名的字符数";
$content['LN_GEN_ENTRIESPERPAGE'] = "每页条目数";
$content['LN_GEN_AUTORELOADSECONDS'] = "开启自动记录刷新(秒)";
$content['LN_GEN_ADMINCHANGEWAITTIME'] = "管理面板超时时间";
$content['LN_GEN_IPADRRESOLVE'] = "使用DNS解析IP地址";
$content['LN_GEN_CUSTBTNCAPT'] = "自定义搜索标题";
$content['LN_GEN_CUSTBTNSRCH'] = "自定义搜索字符串";
$content['LN_GEN_SUCCESSFULLYSAVED'] = "配置已成功保存";
$content['LN_GEN_INTERNAL'] = "内部";
$content['LN_GEN_DISABLED'] = "禁用功能";
$content['LN_GEN_CONFIGFILE'] = "配置文件";
$content['LN_GEN_ACCESSDENIED'] = "拒绝访问该功能";
$content['LN_GEN_DEFVIEWS'] = "默认选中视图";
$content['LN_GEN_DEFSOURCE'] = "默认选择的源";
$content['LN_GEN_SUPPRESSDUPMSG'] = "过滤重复的日志消息";
$content['LN_GEN_TREATFILTERSTRUE'] = "处理没有找到的过滤器字段";
$content['LN_GEN_INLINESEARCHICONS'] = "在字段内显示在线搜索图标";
$content['LN_GEN_OPTIONNAME'] = "选项名称";
$content['LN_GEN_GLOBALVALUE'] = "全局值";
$content['LN_GEN_PERSONALVALUE'] = "个人（用户）的设置";
$content['LN_GEN_DISABLEUSEROPTIONS'] = "单击这里关闭个人设置选项";
$content['LN_GEN_ENABLEUSEROPTIONS'] = "单击这里开启个人设置选项";
$content['LN_ADMIN_GLOBALONLY'] = "只使用全局选项";
$content['LN_GEN_DEBUGTOSYSLOG'] = "发送调试日志到本机syslog 服务器";
$content['LN_GEN_POPUPMENUTIMEOUT'] = "弹出";
$content['LN_ADMIN_SCRIPTTIMEOUT'] = "PHP 脚本超时（秒）";
$content['LN_GEN_INJECTHTMLHEADER'] = "注入这个HTML代码码到 &lt;head&gt; 区域.";
$content['LN_GEN_INJECTBODYHEADER'] = "注入这个HTML代码码到开始的 &lt;body&gt; 区域.";
$content['LN_GEN_INJECTBODYFOOTER'] = "注入这个HTML代码码到结束的 &lt;body&gt; 区域.";
$content['LN_ADMIN_PHPLOGCON_LOGOURL'] = "自定义 LogAnalyzer Logo URL. 留空使用默认的.";
$content['LN_ADMIN_ERROR_READONLY'] = "这是一个只读用户，你不能进行任何的更改操作。";
$content['LN_ADMIN_ERROR_NOTALLOWEDTOEDIT'] = "你不允许编辑此配置项.";
$content['LN_ADMIN_USEPROXYSERVER'] = "代理服务器，如果你不想使用代理服务器请留空！如果设置为有效的代理服务器(例子: '127.0.0.1:8080'), LogAnalyzer 也将使用此服务器，如远程检查更新等.";
$content['LN_ADMIN_DEFAULTENCODING'] = "默认的字符编码"; 
$content['LN_GEN_CONTEXTLINKS'] = "启用 Contextlinks (问号)";

// User Center
$content['LN_USER_CENTER'] = "用户选项";
$content['LN_USER_ID'] = "ID";
$content['LN_USER_NAME'] = "用户名";
$content['LN_USER_ADD'] = "添加用户";
$content['LN_USER_EDIT'] = "编辑用户";
$content['LN_USER_DELETE'] = "删除用户";
$content['LN_USER_PASSWORD1'] = "密码";
$content['LN_USER_PASSWORD2'] = "确认密码";
$content['LN_USER_ERROR_IDNOTFOUND'] = "错误，用户 ID '%1' , 未找到";
$content['LN_USER_ERROR_DONOTDELURSLF'] = "错误，你不能删除自己！";
$content['LN_USER_ERROR_DELUSER'] = "删除ID为 '%1' 的用户失败!";
$content['LN_USER_ERROR_INVALIDID'] = "错误，无效的用户ID，用户没找到";
$content['LN_USER_ERROR_HASBEENDEL'] = "这个用户 '%1' 已成功删除!";
$content['LN_USER_ERROR_USEREMPTY'] = "错误，用户名空的";
$content['LN_USER_ERROR_USERNAMETAKEN'] = "错误，这个用户名已经被占用!";
$content['LN_USER_ERROR_PASSSHORT'] = "错误，密码太短或和确认密码不匹配";
$content['LN_USER_ERROR_HASBEENADDED'] = "用户 '%1' 已成功添加";
$content['LN_USER_ERROR_HASBEENEDIT'] = "用户 '%1' 已成功编辑";
$content['LN_USER_ISADMIN'] = "是管理员?";
$content['LN_USER_ADDEDIT'] = "添加/编辑用户";
$content['LN_USER_WARNREMOVEADMIN'] = "您将要吊销自己的系统管理员权限。您确定要删除您的管理权限状态?";
$content['LN_USER_WARNDELETEUSER'] = "你确定你要删除 '%1'? 用户以及他所有的个人设置都将被删除.";
$content['LN_USER_ERROR_INVALIDSESSIONS'] = "无效的用户会话。";
$content['LN_USER_ERROR_SETTINGFLAG'] = "错误设置标志，无效的ID或用户未找到";
$content['LN_USER_WARNRADYONLYADMIN'] = "您将要设置您的帐户为只读权限！这将阻止您更改任何设置！您确定要继续?";
$content['LN_USER_ISREADONLY'] = "只读用户?";
$content['LN_USER_'] = "";

// Group center
$content['LN_GROUP_CENTER'] = "组中心";
$content['LN_GROUP_ID'] = "ID";
$content['LN_GROUP_NAME'] = "组名称";
$content['LN_GROUP_DESCRIPTION'] = "组的描述";
$content['LN_GROUP_TYPE'] = "组类型";
$content['LN_GROUP_ADD'] = "添加组";
$content['LN_GROUP_EDIT'] = "编辑组";
$content['LN_GROUP_DELETE'] = "删除组";
$content['LN_GROUP_NOGROUPS'] = "没有组可供加入";
$content['LN_GROUP_ADDEDIT'] = "添加/编辑组";
$content['LN_GROUP_ERROR_GROUPEMPTY'] = "该组名不能为空.";
$content['LN_GROUP_ERROR_GROUPNAMETAKEN'] = "该组名已被占用.";
$content['LN_GROUP_HASBEENADDED'] = "该组 '%1' 已成功添加.";
$content['LN_GROUP_ERROR_IDNOTFOUND'] = "该组 ID '%1' 无法找到.";
$content['LN_GROUP_ERROR_HASBEENEDIT'] = "该组 '%1' 已成功编辑.";
$content['LN_GROUP_ERROR_INVALIDGROUP'] = "错误，无效的ID ，组没有找到";
$content['LN_GROUP_WARNDELETEGROUP'] = "您确定要删除该 '%1'? 组 以及.所有组设置将被删除.";
$content['LN_GROUP_ERROR_DELGROUP'] = "删除该id '%1' 组失败!";
$content['LN_GROUP_ERROR_HASBEENDEL'] = "该组 '%1' 已成功删除!";
$content['LN_GROUP_MEMBERS'] = "组成员: ";
$content['LN_GROUP_ADDUSER'] = "添加用户到组";
$content['LN_GROUP_ERROR_USERIDMISSING'] = "这个用户ID丢失。";
$content['LN_GROUP_USERHASBEENADDEDGROUP'] = "这个用户 '%1' 已成功添加到组 '%2'";
$content['LN_GROUP_ERRORNOMOREUSERS'] = "没有可以被添加到该组的用户 '%1'";
$content['LN_GROUP_USER_ADD'] = "添加用户到组";
$content['LN_GROUP_USERDELETE'] = "从组中删除用户";
$content['LN_GROUP_ERRORNOUSERSINGROUP'] = "没有用户从这个组'%1' 删除";
$content['LN_GROUP_ERROR_REMUSERFROMGROUP'] = "这个用户 '%1' 无法从组中删除 '%2'";
$content['LN_GROUP_USERHASBEENREMOVED'] = "这个用户 '%1' 已成功从组中删除 '%2'";
$content['LN_GROUP_'] = "";

// Custom Searches center
$content['LN_SEARCH_CENTER'] = "自定义搜索";
$content['LN_SEARCH_ADD'] = "添加新的自定义搜索";
$content['LN_SEARCH_ID'] = "ID";
$content['LN_SEARCH_NAME'] = "搜索名称";
$content['LN_SEARCH_QUERY'] = "搜索查询";
$content['LN_SEARCH_TYPE'] = "分配给";
$content['LN_SEARCH_EDIT'] = "编辑自定义搜索";
$content['LN_SEARCH_DELETE'] = "删除自定义搜索";
$content['LN_SEARCH_ADDEDIT'] = "添加/编辑自定义搜索";
$content['LN_SEARCH_SELGROUPENABLE'] = ">> 选择组启用 <<";
$content['LN_SEARCH_ERROR_DISPLAYNAMEEMPTY'] = "显示名称不能为空.";
$content['LN_SEARCH_ERROR_SEARCHQUERYEMPTY'] = "查询字串不能为空.";
$content['LN_SEARCH_HASBEENADDED'] = "自定义搜索 '%1' 已成功添加.";
$content['LN_SEARCH_ERROR_IDNOTFOUND'] = "无法找到搜索ID '%1'.";
$content['LN_SEARCH_ERROR_INVALIDID'] = "无效搜索ID.";
$content['LN_SEARCH_HASBEENEDIT'] = "自定义搜索'%1' 已成功编辑.";
$content['LN_SEARCH_WARNDELETESEARCH'] = "你确定你要删除的自定义搜索'%1'? 这个动作不能被撤销!";
$content['LN_SEARCH_ERROR_DELSEARCH'] = "删除的自定义搜索ID '%1' 失败!";
$content['LN_SEARCH_ERROR_HASBEENDEL'] = "自定义搜索 '%1' 已成功删除!";
$content['LN_SEARCH_'] = "";

// Custom Views center
$content['LN_VIEWS_CENTER'] = "视图选项";
$content['LN_VIEWS_ID'] = "ID";
$content['LN_VIEWS_NAME'] = "显示名";
$content['LN_VIEWS_COLUMNS'] = "显示列";
$content['LN_VIEWS_TYPE'] = "分配给";
$content['LN_VIEWS_ADD'] = "添加新的视图";
$content['LN_VIEWS_EDIT'] = "编辑视图";
$content['LN_VIEWS_ERROR_IDNOTFOUND'] = "视图ID '%1' 无法找到.";
$content['LN_VIEWS_ERROR_INVALIDID'] = "视图 ID '%1' 不是一个有效的.";
$content['LN_VIEWS_WARNDELETEVIEW'] = "你确定你要删除的视图 '%1'? 这个动作不能被撤销!";
$content['LN_VIEWS_ERROR_DELSEARCH'] = "删除视图 id '%1' 失败!";
$content['LN_VIEWS_ERROR_HASBEENDEL'] = "视图 '%1' 已成功删除!";
$content['LN_VIEWS_ADDEDIT'] = "添加/编辑视图";
$content['LN_VIEWS_COLUMNLIST'] = "配置列";
$content['LN_VIEWS_ADDCOLUMN'] = "添加列到清单";
$content['LN_VIEWS_ERROR_DISPLAYNAMEEMPTY'] = "显示名称不能为空.";
$content['LN_VIEWS_COLUMN'] = "列";
$content['LN_VIEWS_COLUMN_REMOVE'] = "删除列";
$content['LN_VIEWS_HASBEENADDED'] = "自定义视图'%1' 已成功添加.";
$content['LN_VIEWS_ERROR_NOCOLUMNS'] = "您需要至少添加一列，才能添加新的自定义视图.";
$content['LN_VIEWS_HASBEENEDIT'] = "自定义视图 '%1' 已成功编辑.";
$content['LN_VIEWS_'] = "";

// Custom DBMappings center
$content['LN_DBMP_CENTER'] = "数据库字段映射";
$content['LN_DBMP_ID'] = "ID";
$content['LN_DBMP_NAME'] = "数据库字段映射名";
$content['LN_DBMP_DBMAPPINGS'] = "数据库映射";
$content['LN_DBMP_ADD'] = "添加新的数据库映射";
$content['LN_DBMP_EDIT'] = "编辑数据库的映射";
$content['LN_DBMP_ERROR_IDNOTFOUND'] = "数据库映射ID '%1' 无法找到.";
$content['LN_DBMP_ERROR_INVALIDID'] = "数据库映射 ID '%1' 不是一个有效的数据库的映射.";
$content['LN_DBMP_WARNDELETEMAPPING'] = "您确定要删除该数据库的映射'%1'? 这动作不能被撤销!";
$content['LN_DBMP_ERROR_DELSEARCH'] = "删除数据库映射'%1' 失败!";
$content['LN_DBMP_ERROR_HASBEENDEL'] = "数据库映射 '%1' 已成功删除!";
$content['LN_DBMP_ADDEDIT'] = "添加/编辑数据库的映射";
$content['LN_DBMP_DBMAPPINGSLIST'] = "配置映射";
$content['LN_DBMP_ADDMAPPING'] = "添加字段映射到列表";
$content['LN_DBMP_ERROR_DISPLAYNAMEEMPTY'] = "显示名称不能为空.";
$content['LN_DBMP_MAPPING'] = "映射";
$content['LN_DBMP_MAPPING_REMOVE'] = "删除映射";
$content['LN_DBMP_MAPPING_EDIT'] = "编辑映射";
$content['LN_DBMP_HASBEENADDED'] = "自定义数据库映射 '%1' 已成功添加.";
$content['LN_DBMP_ERROR_NOCOLUMNS'] = "您需要至少添加一列，才能添加新的自定义数据库映射.";
$content['LN_DBMP_HASBEENEDIT'] = "自定义数据库映射 '%1' 已成功编辑.";
$content['LN_DBMP_ERROR_MISSINGFIELDNAME'] = "失效的映射 '%1' 字段.";
$content['LN_SOURCES_FILTERSTRING'] = "自定义搜索过滤器";
$content['LN_SOURCES_FILTERSTRING_HELP'] = "使用相同的语法搜索字段。 例如，如果你想从 'server1'显示消息, 使用搜索过滤: source:=server1";

// Custom Sources center
$content['LN_SOURCES_CENTER'] = "来源选项";
$content['LN_SOURCES_EDIT'] = "编辑源";
$content['LN_SOURCES_DELETE'] = "删除源";
$content['LN_SOURCES_ID'] = "ID";
$content['LN_SOURCES_NAME'] = "源名称";
$content['LN_SOURCES_TYPE'] = "来源类型";
$content['LN_SOURCES_ASSIGNTO'] = "分配给";
$content['LN_SOURCES_DISK'] = "磁盘文件";
$content['LN_SOURCES_DB'] = "MySQL 数据库";
$content['LN_SOURCES_PDO'] = "PDO 数据源";
$content['LN_SOURCES_MONGODB'] = "MongoDB 数据源";
$content['LN_SOURCES_ADD'] = "添加新的源";
$content['LN_SOURCES_ADDEDIT'] = "添加/编辑源";
$content['LN_SOURCES_TYPE'] = "来源类型";
$content['LN_SOURCES_DISKTYPEOPTIONS'] = "磁盘文件相关选项";
$content['LN_SOURCES_ERROR_MISSINGPARAM'] = "这个参数 '%1' 丢失.";
$content['LN_SOURCES_ERROR_NOTAVALIDFILE'] = "无法打开syslog文件'%1'! 检查文件是否存在或者LogAnalyzer是否具有足够的权限";
$content['LN_SOURCES_ERROR_UNKNOWNSOURCE'] = "发现未知来源 '%1' ";
$content['LN_SOURCE_HASBEENADDED'] = "这个新源 '%1' 已成功添加.";
$content['LN_SOURCES_EDIT'] = "编辑源";
$content['LN_SOURCES_ERROR_INVALIDORNOTFOUNDID'] = "源-ID 无效或无法找到.";
$content['LN_SOURCES_ERROR_IDNOTFOUND'] = "源-ID 无法在数据库中找到.";
$content['LN_SOURCES_HASBEENEDIT'] = "源 '%1' 已成功编辑.";
$content['LN_SOURCES_WARNDELETESEARCH'] = "您确定要删除源 '%1'? 这个动作不能被撤销!";
$content['LN_SOURCES_ERROR_DELSOURCE'] = "删除源ID '%1' 失败!";
$content['LN_SOURCES_ERROR_HASBEENDEL'] = "源'%1' 已成功删除！";
$content['LN_SOURCES_DESCRIPTION'] = "来源说明（可选）";
$content['LN_SOURCES_ERROR_INVALIDVALUE'] = "错误的参数值 '%1'.";
$content['LN_SOURCES_STATSNAME'] = "名称";
$content['LN_SOURCES_STATSVALUE'] = "值";
$content['LN_SOURCES_DETAILS'] = "日志流源的详细说明";
$content['LN_SOURCES_STATSDETAILS'] = "这个日志流源详细统计信息 ";
$content['LN_SOURCES_ERROR_NOSTATSDATA'] = "无法找到这个日志流源的有关信息.";
$content['LN_SOURCES_ERROR_NOCLEARSUPPORT'] = "这个日志流源不支持删除数据.";
$content['LN_SOURCES_ROWCOUNT'] = "行数总计";
$content['LN_SOURCES_CLEARDATA'] = "数据库维护选项";
$content['LN_SOURCES_CLEAROPTIONS'] = "选择您希望如何清除数据。";
$content['LN_SOURCES_CLEARALL'] = "清除（删除）的所有数据。";
$content['LN_SOURCES_CLEAR_HELPTEXT'] = "注意！要小心删除数据，在这里执行任何操作无法撤消！";
$content['LN_SOURCES_CLEARSINCE'] = "清除时间日期节点之前所有旧数据 ... ";
$content['LN_SOURCES_CLEARDATE'] = "清除这日期前的旧数据 ... ";
$content['LN_SOURCES_CLEARDATA_SEND'] = "清除选定范围的数据";
$content['LN_SOURCES_ERROR_INVALIDCLEANUP'] = "无效的数据清除型";
$content['LN_SOURCES_WARNDELETEDATA'] = "您确定要清除日志数据在 '%1' 源? 这个动作不能被撤销!";
$content['LN_SOURCES_ERROR_DELDATA'] = "无法删除数据 '%1' 源";
$content['LN_SOURCES_HASBEENDELDATA'] = "成功删除数据 '%1' 源, '%2' 行受到影响. ";

// Database Upgrade
$content['LN_DBUPGRADE_TITLE'] = "LogAnalyzer 数据库更新";
$content['LN_DBUPGRADE_DBFILENOTFOUND'] = "数据库升级文件 '%1' 无法在包含文件夹中找到！请检查是否所有文件都上传成功.";
$content['LN_DBUPGRADE_DBDEFFILESHORT'] = "数据库升级文件为空或不包含任何SQL命令! 请检查是否所有文件已成功上传。";
$content['LN_DBUPGRADE_WELCOME'] = "欢迎使用数据库升级";
$content['LN_DBUPGRADE_BEFORESTART'] = "在您开始升级你的数据库时，你应该创建一个 <b>完整数据库的备份</b>. 这个动作不会被升级脚本自动完成.";
$content['LN_DBUPGRADE_CURRENTINSTALLED'] = "当前安装的数据库版本";
$content['LN_DBUPGRADE_TOBEINSTALLED'] = "要将安装的数据库版本";
$content['LN_DBUPGRADE_HASBEENDONE'] = "数据库更新已完成，请参见下面的结果";
$content['LN_DBUPGRADE_SUCCESSEXEC'] = "语句成功执行";
$content['LN_DBUPGRADE_FAILEDEXEC'] = "失败的语句";
$content['LN_DBUPGRADE_ONESTATEMENTFAILED'] = "至少有一个语句失败，您可能需要纠正和手动修复这个问题。请参阅下面的错误详细信息";
$content['LN_DBUPGRADE_ERRMSG'] = "错误信息";
$content['LN_DBUPGRADE_ULTRASTATSDBVERSION'] = "LogAnalyzer 数据库版本";

// Charts Options
$content['LN_CHARTS_CENTER'] = "图表选项";
$content['LN_CHARTS_EDIT'] = "编辑图表";
$content['LN_CHARTS_DELETE'] = "删除图表";
$content['LN_CHARTS_ADD'] = "添加新的图表";
$content['LN_CHARTS_ADDEDIT'] = "添加/编辑图表";
$content['LN_CHARTS_NAME'] = "图表名称";
$content['LN_CHARTS_ENABLED'] = "图表启用";
$content['LN_CHARTS_ENABLEDONLY'] = "启用";
$content['LN_CHARTS_ERROR_INVALIDORNOTFOUNDID'] = "图表 ID 无效或无法找到.";
$content['LN_CHARTS_WARNDELETESEARCH'] = "你确定你要删除的图表 '%1'? 这个动作不能被撤销!";
$content['LN_CHARTS_ERROR_DELCHART'] = "删除图表ID: '%1' 失败!";
$content['LN_CHARTS_ERROR_HASBEENDEL'] = "图表 '%1' 已成功删除！";
$content['LN_CHARTS_ERROR_MISSINGPARAM'] = "这个参数 '%1' 没找到.";
$content['LN_CHARTS_HASBEENADDED'] = "新图表 '%1' 已成功添加.";
$content['LN_CHARTS_ERROR_IDNOTFOUND'] = "这个图表无法在数据库中找到";
$content['LN_CHARTS_HASBEENEDIT'] = "图表'%1' 已成功编辑.";
$content['LN_CHARTS_ID'] = "ID";
$content['LN_CHARTS_ASSIGNTO'] = "分配给";
$content['LN_CHARTS_PREVIEW'] = "在新窗口中查看图表";
$content['LN_CHARTS_FILTERSTRING'] = "自定义过滤器";
$content['LN_CHARTS_FILTERSTRING_HELP'] = "使用相同搜索语法在字段里。例如，如果你想生成 'server1'的图表,使用过滤器: source:=server1";
$content['LN_CHARTS_ERROR_CHARTIDNOTFOUND'] = "错误， 图表ID 为 '%1' ,未找到";
$content['LN_CHARTS_ERROR_SETTINGFLAG'] = "错误设置标志，无效图表ID或操作.";

// Fields Options
$content['LN_FIELDS_CENTER'] = "字段选项";
$content['LN_FIELDS_EDIT'] = "字段选项";
$content['LN_FIELDS_DELETE'] = "删除字段";
$content['LN_FIELDS_ADD'] = "添加新字段";
$content['LN_FIELDS_ID'] = "字段ID";
$content['LN_FIELDS_NAME'] = "显示名称";
$content['LN_FIELDS_DEFINE'] = "内部字段ID";
$content['LN_FIELDS_DELETE_FROMDB'] = "从数据库删除字段";
$content['LN_FIELDS_ADDEDIT'] = "添加/编辑字段";
$content['LN_FIELDS_TYPE'] = "字段类型";
$content['LN_FIELDS_ALIGN'] = "列表视图对齐";
$content['LN_FIELDS_SEARCHONLINE'] = "启用在线搜索";
$content['LN_FIELDS_DEFAULTWIDTH'] = "列表视图列宽";
$content['LN_FIELDS_ERROR_IDNOTFOUND'] = "无法在数据库中找到字段ID, 或者是预设的常量.";
$content['LN_FIELDS_ERROR_INVALIDID'] = "字段 ID '%1' 不是一个有效字段.";
$content['LN_FIELDS_SEARCHFIELD'] = "搜索过滤器名";
$content['LN_FIELDS_WARNDELETESEARCH'] = "您确定要删除字段 '%1'? 这个动作不能被撤销!";
$content['LN_FIELDS_ERROR_DELSEARCH'] = "字段ID 无法在数据库中找到.";
$content['LN_FIELDS_ERROR_HASBEENDEL'] = "字段 '%1' 已成功删除！";
$content['LN_FIELDS_ERROR_FIELDCAPTIONEMPTY'] = "字段标题为空。 ";
$content['LN_FIELDS_ERROR_FIELDIDEMPTY'] = "ID字段为空。 ";
$content['LN_FIELDS_ERROR_SEARCHFIELDEMPTY'] = "搜索过滤器为空. ";
$content['LN_FIELDS_ERROR_FIELDDEFINEEMPTY'] = "内部字段ID为空. ";
$content['LN_FIELDS_HASBEENEDIT'] = "对于该字段的配置 '%1' 已成功编辑.";
$content['LN_FIELDS_HASBEENADDED'] = "对于该字段的配置 '%1' 已成功添加.";
$content['LN_FIELDS_'] = "";
$content['LN_ALIGN_CENTER'] = "居中";
$content['LN_ALIGN_LEFT'] = "左边";
$content['LN_ALIGN_RIGHT'] = "右边";
$content['LN_FILTER_TYPE_STRING'] = "字符串";
$content['LN_FILTER_TYPE_NUMBER'] = "数值";
$content['LN_FILTER_TYPE_DATE'] = "日期";

// Parser Options  分析选项
$content['LN_PARSERS_EDIT'] = "编辑消息分析器";
$content['LN_PARSERS_DELETE'] = "删除消息分析器";
$content['LN_PARSERS_ID'] = "消息分析器ID";
$content['LN_PARSERS_NAME'] = "消息分析器名称";
$content['LN_PARSERS_DESCRIPTION'] = "消息分析器说明";
$content['LN_PARSERS_ERROR_NOPARSERS'] = "安装时发现没有有效的消息分析器. ";
$content['LN_PARSERS_HELP'] = "帮助";
$content['LN_PARSERS_HELP_CLICK'] = "点击这里查看详细说明";
$content['LN_PARSERS_INFO'] = "显示此消息分析器的更多详细信息.";
$content['LN_PARSERS_INIT'] = "初始化设置此消息分析器.";
$content['LN_PARSERS_REMOVE'] = "删除此消息分析器设置.";
$content['LN_PARSERS_ERROR_IDNOTFOUND'] = "没有消息分析器ID '%1' 找到.";
$content['LN_PARSERS_ERROR_INVALIDID'] = "无效的消息分析器.";
$content['LN_PARSERS_DETAILS'] = "该分析器的详细信息";
$content['LN_PARSERS_CUSTOMFIELDS'] = "下面的这个消息分析器需要自定义字段.";
$content['LN_PARSERS_WARNREMOVE'] = "您将要删除 自定义字段 '%1' 消息分析器。 然而如果你改变主意，你可以再次添加这些字段.";
$content['LN_PARSERS_ERROR_HASBEENREMOVED'] = "所有设置 ('%2' 自定义字段) 该消息分析器 '%1' 已被删除. ";
$content['LN_PARSERS_ERROR_HASBEENADDED'] = "所有必需的设置 ('%2' 自定义字段) 该消息分析器 '%1' 已添加. ";
$content['LN_PARSERS_ERROR_NOFIELDS'] = "消息分析器 '%1'没有添加任何自定义字段.";
$content['LN_PARSERSMENU_LIST'] = "列出已安装的消息分析器";
$content['LN_PARSERS_ONLINELIST'] = "所有可用的分析器";
$content['LN_PARSERS_'] = "";

// Command Line stuff
$content['LN_CMD_NOOP'] = "操作参数丢失";
$content['LN_CMD_NOLOGSTREAM'] = "该日志源参数丢失";
$content['LN_CMD_LOGSTREAMNOTFOUND'] = "日志源 ID '%1' 无法在数据库中找到!";
$content['LN_CMD_COULDNOTGETROWCOUNT'] = "无法从日志源源获取的行数 '%1'";
$content['LN_CMD_SUBPARAM1MISSING'] = "子参数1丢失,它应被设置为 'all', 'since' or 'date'. 欲了解更多详情，请参阅本文档.";
$content['LN_CMD_WRONGSUBOPORMISSING'] = "子操作错误，或一个参数丢失";
$content['LN_CMD_FAILEDTOCLEANDATA'] = "日志源无法清除数据 '%1'.";
$content['LN_CMD_CLEANINGDATAFOR'] = "清洁数据日志源 '%1'.";
$content['LN_CMD_ROWSFOUND'] = "连接日志源成功, '%1' 行.";
$content['LN_CMD_DELETINGOLDERTHEN'] = "执行删除旧数据'%1'.";
$content['LN_CMD_DELETEDROWS'] = "成功删除 '%1' 行,于日志源.'";
$content['LN_CMD_'] = "";

// Report Options
$content['LN_REPORTS_EDIT'] = "编辑报表";
$content['LN_REPORTS_DELETE'] = "删除报表";
$content['LN_REPORTS_REQUIREDFIELDS'] = "必填字段";
$content['LN_REPORTS_ERROR_NOREPORTS'] = "在安装时发现没有有效的报表.";
$content['LN_REPORTS_INIT'] = "初始化设置";
$content['LN_REPORTS_REMOVE'] = "删除设置";
$content['LN_REPORTS_ERROR_IDNOTFOUND'] = "报表ID '%1' 没找到.";
$content['LN_REPORTS_ERROR_INVALIDID'] = "无效的报表id.";
$content['LN_REPORTS_DETAILS'] = "本报表详细信息";
$content['LN_REPORTS_WARNREMOVE'] = "将要删除自定义设置 '%1' 报表 然而如果你改变主意，你可以再次添加这些设置.";
$content['LN_REPORTS_ERROR_HASBEENREMOVED'] = "所有报表设置 '%1' 已被删除.";
$content['LN_REPORTS_ERROR_HASBEENADDED'] = "所有需要设置的报表 '%1' 已添加.";
$content['LN_REPORTS_ERROR_NOFIELDS'] = "报表 '%1' 没有添加任何自定义设置.";
$content['LN_REPORTS_ERROR_REPORTDOESNTNEEDTOBEREMOVED'] = "报表 '%1' 被删除或未初始化.";
$content['LN_REPORTS_REMOVESAVEDREPORT'] = "删除报表模板";
$content['LN_REPORTS_CUSTOMTITLE'] = "报表标题";
$content['LN_REPORTS_CUSTOMCOMMENT'] = "注释/说明";
$content['LN_REPORTS_FILTERSTRING'] = "过滤器字符串";
$content['LN_REPORTS_OUTPUTFORMAT'] = "输出格式";
$content['LN_REPORTS_OUTPUTTARGET'] = "输出目标";
$content['LN_REPORTS_HASBEENADDED'] = "报表模板 '%1' 已成功添加.";
$content['LN_REPORTS_HASBEENEDIT'] = "报表模板 '%1' 已成功编辑.";
$content['LN_REPORTS_SOURCEID'] = "日志流源";
$content['LN_REPORTS_ERROR_SAVEDREPORTIDNOTFOUND'] = "没有找到报表模板 ID '%1' .";
$content['LN_REPORTS_ERROR_INVALIDSAVEDREPORTID'] = "无效的报表模板 id.";
$content['LN_REPORTS_RUNNOW'] = "运行报表模板!";
$content['LN_REPORTS_WARNDELETESAVEDREPORT'] = "您确定要删除报表模板 '%1'?";
$content['LN_REPORTS_ERROR_DELSAVEDREPORT'] = "删除报表模板ID '%1' 失败!";
$content['LN_REPORTS_ERROR_HASBEENDEL'] = "报表模板 '%1' 已成功删除！";
$content['LN_REPORTS_ERROR_ERRORCHECKINGSOURCE'] = "错误，检查报表模板的来源: %1";
$content['LN_REPORTS_FILTERLIST'] = "过滤器列表";
$content['LN_REPORTS_FILTER'] = "过滤器";
$content['LN_REPORTS_ADDFILTER'] = "添加过滤器";
$content['LN_REPORTS_FILTER_EDIT'] = "编辑过滤器";
$content['LN_REPORTS_FILTER_MOVEUP'] = "向上移动过滤器";
$content['LN_REPORTS_FILTER_MOVEDOWN'] = "向下移动过滤器";
$content['LN_REPORTS_FILTER_REMOVE'] = "移除过滤器";
$content['LN_REPORTS_FILTEREDITOR'] = "过滤器编辑器";
$content['LN_REPORTS_FILTERSTRING_ONLYEDITIF'] = "编辑原始过滤器字符串,过滤器编辑器所做的更改将会丢失!";
$content['LN_REPORTS_ADVANCEDFILTERS'] = "高级过滤器";
$content['LN_REPORTS_ADVANCEDFILTERLIST'] = "高级报表过滤器列表";
$content['LN_REPORTS_OUTPUTTARGET_DETAILS'] = "输出目标选项";
$content['LN_REPORTS_OUTPUTTARGET_FILE'] = "输出路径和文件名";
$content['LN_REPORTS_CRONCMD'] = "本地报表命令";
$content['LN_REPORTS_LINKS'] = "相关链接";
$content['LN_REPORTS_INSTALLED'] = "安装";
$content['LN_REPORTS_NOTINSTALLED'] = "未安装";
$content['LN_REPORTS_DOWNLOAD'] = "下载链接";
$content['LN_REPORTS_SAMPLELINK'] = "报表例子";
$content['LN_REPORTS_DETAILSFOR'] = "报表 '%1' 详细信息";
$content['LN_REPORTS_PERFORMANCE_WARNING'] = "日志流性能警告";
$content['LN_REPORTS_OPTIMIZE_LOGSTREAMSOURCE'] = "是的，优化日志流源!";
$content['LN_REPORTS_OPTIMIZE_INDEXES'] = "数据源 '%1' 不能报表优化. 至少需要一个索引. 创建索引会加速报表生成. <br><br>你想LogAnalyzer现在创造必要的索引?这可能会花费更多时间,少则几分钟，请耐心等待!";
$content['LN_REPORTS_ERROR_FAILED_CREATE_INDEXES'] = "数据源无法建立索引 '%1' 错误代码 '%2'";
$content['LN_REPORTS_INDEX_CREATED'] = "创建日志流索引";
$content['LN_REPORTS_INDEX_CREATED_SUCCESS'] = "创建日志流索引成功,数据源 '%1'.";
$content['LN_REPORTS_OPTIMIZE_TRIGGER'] = "数据源'%1' 没有安装自动生成的插入消息校验触发器。 创建触发器将加速报表生成. <br><br>你想LogAnalyzer现在创建触发器吗? ";
$content['LN_REPORTS_TRIGGER_CREATED'] = "创建日志源触发器";
$content['LN_REPORTS_TRIGGER_CREATED_SUCCESS'] = "创建日志源触发器完成,数据源: '%1'.";
$content['LN_REPORTS_ERROR_FAILED_CREATE_TRIGGER'] = "无法创建触发器 数据源 '%1' 错误代码 '%2'";
$content['LN_REPORTS_CHANGE_CHECKSUM'] = "校验字段数据源 '%1' 没有被设置为 UNSIGNED INT. 要该报表正常工作，必须修改校验字段为 UNSIGNED INT! <br><br>你想LogAnalyzer改变现在的校验字段? 这可能会花费更多时间,少则几分钟，请耐心等待!";
$content['LN_REPORTS_ERROR_FAILED_CHANGE_CHECKSUM'] = "未能改变校验字段 数据源: '%1' 错误代码 '%2'";
$content['LN_REPORTS_CHECKSUM_CHANGED'] = "修改校验字段";
$content['LN_REPORTS_CHECKSUM_CHANGED_SUCCESS'] = "成功修改校验字段 数据源:'%1'.";
$content['LN_REPORTS_LOGSTREAM_WARNING'] = "日志流警告";
$content['LN_REPORTS_ADD_MISSINGFIELDS'] = "数据源'%1' 至少有一个数据字段缺失. <br><br>你想LogAnalyzer现在就创建丢失的字段?";
$content['LN_REPORTS_ERROR_FAILED_ADDING_FIELDS'] = "没有添加缺少的数据字段 数据源: '%1' 错误代码 '%2'";
$content['LN_REPORTS_FIELDS_CREATED'] = "添加丢失的数据字段 ";
$content['LN_REPORTS_FIELDS_CREATED_SUCCESS'] = "添加丢失的数据字段成功 数据源: '%1'.";
$content['LN_REPORTS_RECHECKLOGSTREAMSOURCE'] = "你想再次检查当前日志流源?";
$content['LN_REPORTS_ADDSAVEDREPORT'] = "添加报表模板并保存更改";
$content['LN_REPORTS_EDITSAVEDREPORT'] = "编辑报表模板";
$content['LN_REPORTS_ADDSAVEDREPORTANDRETURN'] = "添加报表模板并返回报表列表";
$content['LN_REPORTS_EDITSAVEDREPORTANDRETURN'] = "保存更改并返回报表列表";
$content['LN_REPORTS_SOURCE_WARNING'] = "日志源警告";	
$content['LN_REPORTS_ERROR_FAILED_SOURCE_CHECK'] = "无法检查数据源: '%1' 错误代码 '%2'";
$content['LN_REPORTS_'] = "";


?>