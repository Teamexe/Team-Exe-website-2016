<?php
	$file_name = 'counting.txt';
	function count_fans($file_name)
	{
		if(file_exists($file_name))
		{
			/*//open file in read and write mode .. if file do not exist it w+ mode creates file
			$handle = fopen($file_name, 'r');
			//read value
			$count = (int)fread($handle,5);
			//increment value
			$count += 1;
			//write value back to file
			$handle = fopen($file_name, 'w');
			fwrite($handle, $count);
			//close file
			fclose($handle);
			//return count
			return $count;*/

			//Another method do the same thing as above..........................

			$count = (int)file_get_contents($file_name) + 1;
			file_put_contents($file_name, $count);
			return $count;

		}
		else
		{
			//create file
			$handle = fopen($file_name, 'w+');
			//set value to 1
			fwrite($handle, 1);
			//close file
			fclose($handle);
			//return count
			return($count = 1);
		}
	}
	$count = count_fans($file_name);
	require "index.tmpl.php";
?>