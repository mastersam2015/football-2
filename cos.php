<? ob_start(); ?>
<script type="text/javascript" src="jquery.js"></script>
	<meta name="viewport" content="width=device-width">
<body >

<center>
	 
	<br>
 <canvas id="myCanvas" width="300" height="500"  >
</canvas> <br>
	 
	 		 <?
	 	$resetuj=$_GET["resetuj"];
	
	?>
	 <script>
		 //----------------------------------var
	var akx=160;
	var aky=100;
	var first=1;
	var str = new Array();
	var dotab;
	var loncz;
	var pom;
	var pom2;
	var rx;
	var ry;
	var tab = new Array();
	var start=0;
	var notway;
	//------------------------------------------------------canvas
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");
		 
ctx.fillStyle = "#000000";
		 for (var i=2;i<=12;i++){
			 for(var j=2;j<=16;j++){
				 ctx.fillRect(i*20,j*20,5,5);
			 }
		 }
	 ctx.fillRect(120,20,5,5);
		  ctx.fillRect(120,20,5,5);
		 ctx.fillRect(140,20,5,5);
		 ctx.fillRect(160,20,5,5);
		  ctx.fillRect(120,340,5,5);
		 ctx.fillRect(140,340,5,5);
		  ctx.fillRect(160,340,5,5);
		  ctx.beginPath();;
		 <? 
		 $akx=$_GET["akx"];
		 $aky=$_GET["aky"]; 

		 if(!empty($akx)){
			 echo "
			 
			
ctx.beginPath();
ctx.rect(".$akx.",".$aky.",5,5);
ctx.fillStyle = \"blue\";
ctx.fill();
ctx.stroke();

";
		 }
		 
		 ?>


ctx.beginPath();
ctx.rect(140,180,5,5);
ctx.fillStyle = "red";
ctx.fill();
ctx.stroke();
document.addEventListener("DOMContentLoaded", init, false);

//------------------------cookie



//----------------------------------------init
      function init()
      {
        var canvas = document.getElementById("myCanvas");
        canvas.addEventListener("mousedown", getPosition, false);
      }
//--------------------------------------onclick
	  function getPosition(event)
      {
		  obtocz=$("#obtocz").val();
        var x = new Number();
        var y = new Number();
        var canvas = document.getElementById("canvas");
        if (event.x != undefined && event.y != undefined)
        {
          x = event.x;
          y = event.y;
        }
        else // Firefox method to get the position
        {
          x = event.clientX + document.body.scrollLeft +
              document.documentElement.scrollLeft;
          y = event.clientY + document.body.scrollTop +
              document.documentElement.scrollTop;
        }
        x -= myCanvas.offsetLeft;
        y -= myCanvas.offsetTop;
       rx=x;
		ry=y;
		  rx=rx/20;
		  ry=ry/20;
		  rx=Math.round(rx);
		  ry=Math.round(ry);
		  rx=rx*20;
		  ry=ry*20;
		 /*
		 if(start==1){
		  akx=readCookie("akxc");
		  aky=readCookie("akyc");
		  }
		  */
		 start=1; 
		 first=1;
		//alert(rx+" "+ry);
		 <?
		 
$fp=fopen("tabela.txt", "r");
while (!feof($fp)){
$list = fgets($fp);  

  }
  
  fclose($fp);
			  
	$tab = explode("a", $list);		  
	
		  	foreach ($tab as $key) {
				$n2++;
			}

		 
		 $ry=$_GET["ry"];
		 $rx=$_GET["rx"];
		 $akx=$_GET["akx"];
		 $aky=$_GET["aky"];
		 
		 if(empty($_GET["akx"])){
		 
		 $pakax=120;
		 $pakay=20;
		 }else{
			 //if(($ry==$akx-20 and $rx==$aky+20)or($ry==$akx and $rx==$aky+20)or($ry==$akx+20 and $rx==$aky+20)or($ry==$akx+20 and $rx==$aky)or($ry==$akx+20 and $rx==$aky-20)or($ry==$akx and $rx==$aky-20)or($ry==$akx-20 and $rx==$aky-20)or($ry==$akx-20 and $rx==$aky)){
		 $pakax=$_GET["akx"];
		 $pakay=$_GET["aky"];
		 //}
		 }
		 echo "akx=".$pakax.";";
		 echo "aky=".$pakay.";";
		 ?>
		 
		 if((rx==akx-20 && ry==aky+20)||(rx==akx && ry==aky+20)||(rx==akx+20 && ry==aky+20)||(rx==akx+20 && ry==aky)||(rx==akx+20 && ry==aky-20)||(rx==akx && ry==aky-20)||(rx==akx-20 && ry==aky-20)||(rx==akx-20 && ry==aky)){
	<?
	$ready=$_GET["ready"];
	if(!empty($ready)){
		echo "window.location.href='cos.php?akx='+". $pakax ."+'&aky='+". $pakay ."+'&rx='+rx+'&ry='+ry+'&ready=1';";
	}
		 
		 ?>
		 }
		 

		  	  }
		  
	  <?
	  	 $fp=fopen("tabela.txt", "r");
while (!feof($fp)){
$line = fgets($fp);  
  }
	 // echo $line;
	 ?>
	 
	 
var kolej;
	 function reflesh(){
	 $.get("ready.txt", {  },  function(data) {
kolej=data.split("a");
	// console.log(kolej[0]);	
	 if(kolej[0]==1){
		window.location.href='cos.php?akx='+kolej[1]+'&aky='+kolej[2]+'&ready=1';
	 
	 }
});
	 }
	
	setInterval(reflesh, 3000); 
	 
	 
	 </script>
	 
	 <?


	  	 $fp=fopen("ready.txt", "r");
while (!feof($fp)){
$read = fgets($fp);  
  }

	// if($read==1){
		  
		  $clickx=$_GET["rx"];
		  $clicky=$_GET["ry"];
		  $lasty=$_GET["aky"];
		  $lastx=$_GET["akx"];
		  $n=0;
		//silnik  ------------------------------------------------
		  if (!empty($clickx)){
			  
			  	  	 $fp=fopen("tabela.txt", "r");
while (!feof($fp)){
$list = fgets($fp);  

  }
  
  fclose($fp);
			  
	$tab = explode("a", $list);		  
	
		  	foreach ($tab as $key) {
    
	$dane = explode("b", $key);
	
	$ax=$dane[0];
	$ay=$dane[1];
	$bx=$dane[2];
	$by=$dane[3];
	echo "<br>".$ax;
	echo "<br>".$ay;
	echo "<br>".$bx;
	echo "<br>".$by."<br>";
	if ($clickx==$bx and $clicky==$by and $lastx==$ax and $lasty==$ay){
		
		//echo "<script>alert(\"blok\");</script>";
		//cos.php?akx='+". $pakax ."+'&aky='+". $pakay;
		header("Location: cos.php?akx=".$pakax."&aky=".$pakay."&ready=1");
		
	}else {
		if((($clickx+20)==$bx and ($clicky+20)==$by and $clickx==$ax and $clicky==$ay)){
			$w1=1;
		}
		if(($clickx)==$bx and ($clicky+20)==$by and $clickx==$ax and $clicky==$ay){
			$w2=1;
		}
		if(($clickx+20)==$bx and ($clicky)==$by and $clickx==$ax and $clicky==$ay){
			$w3=1;
		}
		if(($clickx+20)==$bx and ($clicky-20)==$by and $clickx==$ax and $clicky==$ay){
			$w4=1;
		}
		if(($clickx-20)==$bx and ($clicky+20)==$by and $clickx==$ax and $clicky==$ay){
			$w5=1;
		}
		if(($clickx-20)==$bx and ($clicky-20)==$by-20 and $clickx==$ax and $clicky==$ay){
			$w6=1;
		}
		if(($clickx-20)==$bx and ($clicky)==$by and $clickx==$ax and $clicky==$ay){
			$w7=1;
		}
		if(($clickx)==$bx and ($clicky-20)==$by and $clickx==$ax and $clicky==$ay){
			$w8=1;
		}
			  
	//if((($clickx+20)==$bx and ($clicky+20)==$by)or(($clickx)==$bx and ($clicky+20)==$by)or(($clickx+20)==$bx and ($clicky)==$by)or(($clickx+20)==$bx and ($clicky-20)==$by)or(($clickx-20)==$bx and ($clicky+20)==$by)or(($clickx-20)==$bx and ($clicky-20)==$by)or(($clickx-20)==$bx and ($clicky)==$by)or(($clickx)==$bx and ($clicky-20)==$by)){
	if($w1==1 or $w2==1 or $w3==1 or $w4==1 or $w5==1 or $w6==1 or $w7==1 or $w8==1){
		
		$odbil++;
		$n++;
		//echo "<script>alert(\"".$odbil."\");</script>";
	}else{
		$tura=1;
	}
	
	//else{
		
		//echo "<script>alert(\"a\");</script>";
		//if($tura!=1){$tura=1;}
	//}
	
	
//	if(($clickx!=$bx+20 and $clicky!=$by+20 )or($clickx!=$bx and $clicky!=$by+20 )or($clickx!=$bx+20 and $clicky!=$by)or($clickx!=$bx+20 and $clicky!=$by-20 )or($clickx!=$bx-20 and $clicky!=$by+20 )or($clickx!=$bx-20 and $clicky!=$by-20 )or($clickx!=$bx and $clicky!=$by-20 )or($clickx!=$bx and $clicky!=$by-20 )){
		
	//echo "<script>alert(\"a\");</script>";	$tura=1;
	//}
	
	
	
	
	//if((($clickx+20)!=$bx and ($clicky+20)!=$by)and(($clickx)!=$bx and ($clicky+20)!=$by)and(($clickx+20)!=$bx and ($clicky)!=$by)and(($clickx+20)!=$bx and ($clicky-20)!=$by)and(($clickx-20)!=$bx and ($clicky+20)!=$by)and(($clickx-20)!=$bx and ($clicky-20)!=$by-20)and(($clickx-20)!=$bx and ($clicky)!=$by)and(($clickx)!=$bx and ($clicky-20)!=$by)){
	
	
	//$tura=1;
	//}
	
	}
	}
	
	
}


		if($ready==1){
		
		  		 $fp = fopen("ready.txt", "w");

fputs($fp,"3a".$pakax."a".$pakay);


fclose($fp);
	}
//var_dump($list);
if($odbil>0){
	//echo "<script>alert(\"odbil\");</script>";
	
	  	 $fp=fopen("tabela.txt", "r");
while (!feof($fp)){
$line = fgets($fp);  
  }
  
  		 $fp = fopen("tabela.txt", "w");
$pom=$line."a".$lastx."b".$lasty."b".$clickx."b".$clicky;
$pom.="a".$clickx."b".$clicky."b".$lastx."b".$lasty;
fputs($fp,$pom);


fclose($fp);
  
  echo "<script>window.location.href='cos.php?akx=".$clickx."&aky=".$clicky."&ready=1';</script>";

}

if($tura==1){
	
	$fp=fopen("tabela.txt", "r");
while (!feof($fp)){
$line = fgets($fp);  
  }
  
  		 $fp = fopen("tabela.txt", "w");
$pom=$line."a".$lastx."b".$lasty."b".$clickx."b".$clicky;
$pom.="a".$clickx."b".$clicky."b".$lastx."b".$lasty;
fputs($fp,$pom);


fclose($fp);
//echo "<script>alert(\"tura przeciwnika\");</script>";


  		 $fp = fopen("ready.txt", "w");

fputs($fp,"2a".$rx."a".$ry);


fclose($fp);

//header('Location: http://www.example.com/');
echo "<script>window.location.href='cos.php?akx=".$clickx."&aky=".$clicky."';</script>";

}

	// }
	 
				  	  	 $fp=fopen("tabela.txt", "r");
while (!feof($fp)){
$list = fgets($fp);  
  } 
	 echo "<script>";
	 	$tab = explode("a", $list);		  
	
		  	foreach ($tab as $key) {
    
	$dane = explode("b", $key);
	
	$ax=$dane[0];
	$ay=$dane[1];
	$bx=$dane[2];
	$by=$dane[3];
	if(!empty($ax)){
	echo "ctx.beginPath(); ctx.lineWidth=\"2\"; ctx.strokeStyle=\"black\"; ctx.moveTo(".$ax.",".$ay."); ctx.lineTo(".$bx.",".$by."); ctx.stroke();";
	}	}
	 echo "</script>";
	 //var_dump($tura);
	 //echo "<script>alert('n".$odbil." n2".$n2."');</script>";
	
	ob_end_flush();
	?>
	<input type="text" id="ridi">
	<?
	if($ready==1){echo "<script>$('#ridi').val('ready');</script>";}
	
	?>