<body style="margin:20;padding:0">
<?php
include("header.php");

include("$lib_path/view-tabs.php");

?>


<h4>JSON source view:</h4>


<div id="tab-source">

<!--table formatting for the document -->
<!--<table class="TFtable";>-->
<?php 
foreach($contents as $n) {
        list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);

if(preg_match('/\[(.+?)\]/', $v, $matches)) {
 
   if(strlen($k) > 0){
     $vlink = "{\"/\": \"$v</a>\"}" ;//don't wrap in link for JSON view
	  echo "\"$k\" : $vlink , <br><br>"; 
   }
   else{ 
     $vlink = "{\"/\": \"$v</a>\"}"; //don't wrap in link for JSON view
     echo "$vlink , <br><br>"; 
   }
}


elseif(isset($v)) { 
	  $vhtml =  htmlspecialchars(json_encode($v));
	  echo "\"$k\" : $vhtml , <br><br>"; 
	}

        else { 
	  echo "<th height='10' style='text-align:right'></th><td width='20'></td><td>$k</td>"; 
	}
        echo "</tr>";
}


?>
</table>

</div>


</div>




</div></div>

</div>
