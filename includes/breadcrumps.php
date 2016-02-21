<div class="breadcrumps">
<?php 
	$path = $_SERVER["PHP_SELF"];
	
        $parts = explode('/',$path);
         
        if($parts[1] == 'HTML_HW')
        {
          echo "<a href=\"index.php\">home</a>";
          $parts[1] = '';          
        }
        

                  
        if($parts[2] == 'index.php')
        {
        $parts[2] = '.';   
        }
        
        

	for ($i = 1; $i < count($parts); $i++)
    	{
    	if (!strstr($parts[$i],"."))
        	{
        	echo("<a href=\"");
        	for ($j = 0; $j <= $i; $j++) {echo $parts[$j]."/";};
        	echo("\">". str_replace('-', ' ', $parts[$i]).' . '."</a>");
        	}
    	else
        	{
       	 	$str = $parts[$i];
        	$pos = strrpos($str,".");
        	$parts[$i] = substr($str, 0, $pos);
        	echo str_replace('-', ' ', $parts[$i]);
        	};
    	};
	//};  
?>
</div>