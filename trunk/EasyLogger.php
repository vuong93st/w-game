<?php
/**
 * Class for creating basic web application logs.
 *
 * @license	GNU General Public License 
 * @author Nikola Posa, www.nikolaposa.in.rs
 */
class EasyLogger
{
	const EMERG = 0; //Emergency states
    const ALERT = 1; //Alerts
    const ERR   = 2; //Errors
    const WARN  = 3; //Some warnings
    const INFO  = 4; //Informational messages

	/**
	 * Log file resource.
	 *
	 * @var resource
	 */
	protected $logFileHandler;
	
	/**
	 * Path to the file.
	 *
	 * @var string
	 */
	protected $logFilePath;
	
	/**
	 * Date format that'll be used in log file.
	 *
	 * @var string
	 */
	protected $dateFormat;
	
	/**
	 * Time format that'll be used in log file.
	 *
	 * @var string
	 */
	protected $timeFormat;
	
	/**
	 * Helper array which holds names of priorites.
	 *
	 * @var array
	 */
	protected $priorities = array
	(
		'EMERG',
		'ALERT',
		'ERR',
		'WARN',
		'INFO'
	);
	
	/**
	 * Constructor
	 *
	 * @param string Path to file which will be used as a log file.
	 * @param string Date format in log file.
	 * @param string Time format in log file.
	 */
	public function EasyLogger($logFilePath, $dateFormat = 'd.m.Y.', $timeFormat = 'H:i')
	{
		$this->__construct($logFilePath, $dateFormat, $timeFormat);
	}
	
	public function __construct($logFilePath, $dateFormat = 'd.m.Y.', $timeFormat = 'H:i')
	{		
		$this->logFileHandler = @ fopen($logFilePath, 'ab');
		
		if (!is_resource($this->logFileHandler)) {
			throw new Exception('EasyLogger Exception: Cannot open file on path: ' . $logFilePath . '.');
		}	
		elseif (!is_string($dateFormat) || !preg_match('/^[djmnYy][\.\-][djmnYy][\.\-][djmnYy]\.?$/', $dateFormat)) {
			throw new Exception('EasyLogger Exception: Invalid date format. Only \'.\' and \'-\' are allowed as date separators.');
		}
		elseif (!is_string($timeFormat)) {
			throw new Exception('EasyLogger Exception: Invalid time format.');
		}
		
		$this->logFilePath = $logFilePath;
		$this->dateFormat = $dateFormat;
		$this->timeFormat = $timeFormat;
	}
		
	/**
	 * Main function which process user request by getting log 
	 * message and priority, and forwarding those data to 
	 * preparation and formating. After that, generated text will 
	 * be written in the log file.
	 *
	 * @param string Message that'll be logged.
	 * @param int Priority level (emergency, alert, error, warning, info).
	 * @return void
	 */
	public function log($message, $priority)
	{
		if (!($this->priorities[$priority])) {
            throw new Exception('EasyLogger Exception: That log priority doesn\'t exists.');
        }
		
		$text = $this->prepareText($message, $priority);
		
		$this->writeLog($text);
	}
	
	/**
	 * Function that does the preparation and formating of the text 
	 * that will be written in the log file.
	 *
	 * @param string Message that'll be logged.
	 * @param int Priority level (emergency, alert, error, warning, info).
	 * @return string
	 */
	protected function prepareText($message, $priority)
	{	
		$text = ''; //Text that will be written in log file.
		
		$logDate = date($this->dateFormat); //Generating current date.
		$logTime = date($this->timeFormat); //Generating current time.
		
		$logContent = file_get_contents($this->logFilePath);
		
		$text = $logTime . ' ' . $this->priorities[$priority] . ': ' . $message . "\n";
		
		if (preg_match_all('/#\s([0-9]{1,4}[\.\-][0-9]{1,4}[\.\-][0-9]{1,4}\.?)\s#/', $logContent, $dateArray) != 0) {
			$lastLogDate = $dateArray[1][count($dateArray[1])-1]; //Getting last log date.	
				
			if (strtotime($logDate) != strtotime($lastLogDate)) { //If current date is different than last log date, new log date will be entered.
				$text = "\n" . '# ' . $logDate . ' #' . "\n" . $text;
			}
		}
		else { //Logging for the first time.
			$text = '# ' . $logDate . ' #' . "\n" . $text;
		}
		
		return $text;
	}
	
	/**
	 * Function for doing the actual writing of contents to the 
	 * log file.
	 *
	 * @param string Text that will be appended.
	 * @return void
	 * @access protected
	 */
	protected function writeLog($text)
	{		
		if (false === @fwrite($this->logFileHandler, $text)) {
            throw new Exception("EasyLogger Exception: Unable to write to log file.");
        }
			
		@ fclose($this->logFileHandler);
	}
}
?>