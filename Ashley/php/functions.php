<?php
//Some functions I use often
//some of these require global variables

function backup_File($folder, $i)
{		
	$pathIn = createPathIn($folder, $i);
	$pathOut = createPathOut($folder, $i);
	if(file_exists($pathOut))
	{
		return false;		
	}
	else
	{
		if($pathIn != false)
		{	
			copy($pathIn, $pathOut);
			return true;
		}
	}
}

function createPathIn($folder, $i)//requires SS_PATH as a global variable
{
	if(strlen(strval($i)) == 5)
	{
		$pathIn = (SS_PATH.$folder.'/0'.$i.'.ss');
	}
	else
	{
		$pathIn = (SS_PATH.$folder.'/'.$i.'.ss');
	}
	
	if(file_exists($pathIn))
	{
		return $pathIn;
	}
	else
	{
		return false;
	}
}

function createPathOut($folder, $i)//requires SS_PATH as a global variable
{
	if(strlen(strval($i)) == 5)
	{
		$pathOut = (SS_PATH.$folder.'/backup/0'.$i.'.ss');
	}
	else
	{
		$pathOut = (SS_PATH.$folder.'/backup/'.$i.'.ss');
	}
	return $pathOut;
}

function explodeImplodeDate($dateStr)
{
	$dateArr = explode("/", $dateStr);
	$dateStr = implode($dateArr);
	
	return $dateStr;
}

function crop_dots($array){
	$array = array_reverse($array);

	unset($array[count($array) - 1]);
	unset($array[count($array) - 1]);
	$array = array_reverse($array);

	return $array;
}

function check_user($username, $password, $URL)
{
	if(file_exists($URL.$username))
	{
		$pass = file_get_contents($URL.$username);
		if($pass == $password)
		{
			return "OK";
		}
		else
		{
			return "Password incorrect";
		}
	}
	else
	{
		return "Username incorrect";
	}
}

function check_user_json($username, $password, $URL)
{
	if(file_exists($URL.$username))
	{
		$jsonArr = json_decode(file_get_contents($URL.$username), true);
		$pass = $jsonArr['p'];
		if($pass == $password)
		{
			return "OK";
		}
		else
		{
			return "Password incorrect";
		}
	}
	else
	{
		return "Username incorrect";
	}
}


function logAccess($url, $identifier){
	$log = date('ymd-H:i:s')."|IP:".@$_SERVER['REMOTE_ADDR']."|".$identifier."\r\n";
	
	if(file_exists($url)){
		file_put_contents($url, $log, FILE_APPEND);
	}else{
		file_put_contents($url, $log);
	}
}

function storelist($filter=null)
{
	$fil = scandir(DATA_DIR,0);
	$arr = null;
	foreach($fil as $f)
	{
		if(strlen($f) != 6 || $f == '000000' || $f == '123457')continue;
		$s = setting($f);
			
			
		if(!file_exists(DATA_DIR.$f."/phonelist.txt"))continue;
			
		if(file_get_contents(DATA_DIR.$f."/phonelist.txt") == "")continue;
			
		if($filter != null){
			if($s[0] == $filter){
				if($s[0] == null)continue;
				$arr[$s[0]][] = array($s[1],$f);
			}
		}else{
			if($s[0] == null)continue;
			if($f == "000009")$s[0] = "Pick n Pay Family";
			$arr[$s[0]][] = array($s[1],$f);
		}
	}
	return $arr;
}

function storelist_regions($filter=null)
{
	$fil = scandir(DATA_DIR,0);
	$arr = null;
	foreach($fil as $f)
	{
		if(!file_exists(DATA_DIR.$f."/phonelist.txt"))continue;
		if(file_get_contents(DATA_DIR.$f."/phonelist.txt") == "")continue;
		if(strlen($f) != 6 || $f == '000000' || $f == '123457')continue;
		$s = setting($f, 'REGION');

		if($filter != null){
			if($s[0] == $filter){
				if($s[0] == null)continue;
				$arr[$s[0]][] = array($s[1],$f, $s[2]);
			}
		}else{
			if($s[0] == null)continue;
			if($f == "000009")$s[0] = "Pick n Pay Family";
			$arr[$s[0]][] = array($s[1],$f);
		}
	}
	return $arr;
}

function setting($f, $filterKey=null)
{
	$file = DATA_DIR.$f.'/setup.txt';
	if(file_exists($file))
	{
		$arr = array();
		$lines = file($file,FILE_SKIP_EMPTY_LINES);
		foreach ($lines as $line)
		{
			$def = explode('|',$line);
			if(trim($def[0]) == 'GROUP')$arr[0] = trim($def[1]);
			else if(trim($def[0]) == 'NAME')
			{
				$e = explode(' - ',$def[1]);
				$arr[1] = trim($e[1]);
			}
			else if(trim($def[0]) == $filterKey){
				if(trim($def[1]) != "")$arr[2] = trim($def[1]);
			}
		}
		return $arr;
	}
	return null;
}

function encode_pass($pass)
{
	return sha1('85812!@#$%^&*()<>?:'.$pass.'85812!@#$%^&*()<>?:');
}

function browser_check()
{
	if(preg_match('/(?i)msie [1-8]\.[0-8]/',$_SERVER['HTTP_USER_AGENT']) && !preg_match('/chromeframe/i',$_SERVER['HTTP_USER_AGENT']))
	{
		return false;
	}else{
		return true;
	}
}

function makeThisDir(){
	chdir(dirname(__FILE__));
}

?>
