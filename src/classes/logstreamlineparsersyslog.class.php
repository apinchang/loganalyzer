<?php
/*
	*********************************************************************
	* Copyright by Adiscon GmbH | 2008!									*
	* -> www.phplogcon.org <-											*
	*																	*
	* Use this script at your own risk!									*
	* -----------------------------------------------------------------	*
	* LogStream Parser is used to split syslog messages into fields		*
	*																	*
	* All directives are explained within this file						*
	*********************************************************************
*/

// --- Avoid directly accessing this file! 
if ( !defined('IN_PHPLOGCON') )
{
	die('Hacking attempt');
	exit;
}
// --- 

// --- Basic Includes
require_once($gl_root_path . 'classes/enums.class.php');
require_once($gl_root_path . 'include/constants_errors.php');
require_once($gl_root_path . 'include/constants_logstream.php');
// --- 


class LogStreamLineParsersyslog extends LogStreamLineParser {
//	protected $_arrProperties = null;

	// Constructor
	public function LogStreamLineParsersyslog() {
		return; // Nothing
	}

	/**
	* ParseLine
	*
	* @param arrArguments array in&out: properties of interest. There can be no guarantee the logstream can actually deliver them.
	* @return integer Error stat
	*/
	public function ParseLine($szLine, &$arrArguments)
	{
		// Sample (Syslog): Mar 10 14:45:44 debandre anacron[3226]: Job `cron.daily' terminated (mailing output)
		if ( preg_match("/(... [0-9]{1,2} [0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}) (.*?) (.*?)\[(.*?)\]:(.*?)$/", $szLine, $out ) )
		{
			// Copy parsed properties!
			$arrArguments[SYSLOG_DATE] = $this->GetEventTime($out[1]);
			$arrArguments[SYSLOG_HOST] = $out[2];
			$arrArguments[SYSLOG_SYSLOGTAG] = $out[3];
			$arrArguments[SYSLOG_PROCESSID] = $out[4];
			$arrArguments[SYSLOG_MESSAGE] = $out[5];
		}
		// Sample (Syslog): Mar 10 14:45:39 debandre syslogd 1.4.1#18: restart.
		else if ( preg_match("/(... [0-9]{1,2} [0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}) (.*?) (.*?):(.*?)$/", $szLine, $out ) )
		{
			// Copy parsed properties!
			$arrArguments[SYSLOG_DATE] = $this->GetEventTime($out[1]);
			$arrArguments[SYSLOG_HOST] = $out[2];
			$arrArguments[SYSLOG_SYSLOGTAG] = $out[3];
			$arrArguments[SYSLOG_MESSAGE] = $out[4];
		}
		// Sample (RSyslog): 2008-03-28T11:07:40+01:00 localhost rger: test 1
		else if ( preg_match("/([0-9]{4,4}-[0-9]{1,2}-[0-9]{1,2}T[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}\+[0-9]{1,2}:[0-9]{1,2}) (.*?) (.*?):(.*?)$/", $szLine, $out ) )
		{
			// Copy parsed properties!
			$arrArguments[SYSLOG_DATE] = $this->GetEventTime($out[1]);
			$arrArguments[SYSLOG_HOST] = $out[2];
			$arrArguments[SYSLOG_SYSLOGTAG] = $out[3];
			$arrArguments[SYSLOG_MESSAGE] = $out[4];
		}
		// Sample (RSyslog): 2008-03-28T11:07:40.591633+01:00 localhost rger: test 1
		else if ( preg_match("/([0-9]{4,4}-[0-9]{1,2}-[0-9]{1,2}T[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}\.[0-9]{1,6}\+[0-9]{1,2}:[0-9]{1,2}) (.*?) (.*?):(.*?)$/", $szLine, $out ) )
		{
			// Copy parsed properties!
			$arrArguments[SYSLOG_DATE] = $this->GetEventTime($out[1]);
			$arrArguments[SYSLOG_HOST] = $out[2];
			$arrArguments[SYSLOG_SYSLOGTAG] = $out[3];
			$arrArguments[SYSLOG_MESSAGE] = $out[4];
		}
		else if ( preg_match("/([0-9]{4,4}-[0-9]{1,2}-[0-9]{1,2}T[0-9]{1,2}:[0-9]{1,2}:[0-9]{1,2}\.[0-9]{1,6}\+[0-9]{1,2}:[0-9]{1,2}),(.*?)$/", $szLine, $out ) )
		{
			// Some kind of debug message or something ...
			// Sample: 2008-03-28T15:17:05.480876+01:00,**NO MATCH**
			$arrArguments[SYSLOG_DATE] = $this->GetEventTime($out[1]);
			$arrArguments[SYSLOG_MESSAGE] = $out[2];
		}

		else
		{
			if ( strlen($arrArguments[SYSLOG_MESSAGE]) > 0 ) 
			{
				// TODO: Cannot Parse Syslog message with this pattern!
				echo ("wtf syslog - '" . $arrArguments[SYSLOG_MESSAGE] . "' <br>");
			}
		}
		
		// Return success!
		return SUCCESS;
	}


}

?>