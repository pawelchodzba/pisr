
<?php

session_start();
require_once "lacznoscGmin.php";
$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
$polaczenie->set_charset("utf8");

$pow=$_GET['id'];
$_SESSION['powiat']=$pow;

$sql=$polaczenie->query("SELECT nazwa FROM $pow WHERE powiat='$pow'");


////////////////////////////////nawa unikalna/////////////////////////////
$nazwa_all=[];
 while($one_nazwa=mysqli_fetch_array($sql)){
	
 array_push($nazwa_all,$one_nazwa['nazwa']);
	
 }

$nazwa_tab=(array_values(array_unique($nazwa_all)));///tablica unikatow

//print_r (array_change_key_case($nazwa_tab,CASE_UPPER));
//print_r ($nazwa_tab);




$nazwa_liczba= count($nazwa_tab );//liczba unikatow

echo'<svg id="svgwielobok"width="1000" height="1000">';



	for($i=0;$i<$nazwa_liczba;$i++){
		$a=$nazwa_tab[$i];
	echo $a;
		$sql_nazwa=$polaczenie->query("SELECT x_p,y_p FROM $pow WHERE nazwa='$a'");
	

	
	
		echo '<polygon id="';
		echo $a;
		echo '"class="pow_a"points="';
		
				while($one_nazwa=mysqli_fetch_array($sql_nazwa)){
				$x_p=$one_nazwa['x_p'];
				$y_p=$one_nazwa['y_p'];
				$x_y_p= $x_p.",".$y_p." ";
				
					echo $x_y_p;
				}
				
	
			
			
		echo'"fill="url(#lg_p)"/>';
	

	
	
	}
		$sql->close();	
		$sql_nazwa->close();	
	
	
		echo ' <defs>

<linearGradient id ="lg_p">
<stop offset="18%" stop-color="#2f4f4f"/>
<stop offset="18%" stop-color="#2f4f4f"/>
<stop offset="230%" stop-color="#0d2d2d"/>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																							

</linearGradient>																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																					
</defs>  ';
	
	
echo '</svg>'; 
echo '<script>    
				var id_tool="";
				$(".pow_a").mouseover(function(){
				var id_gmin=this.getAttribute("id");
					 id_tool="#"+id_gmin; 					';
					
	 echo  	'$.get("pt_gmin_solo.php",{id_gmin:id_gmin},function(data){
				$("#info_gmin").html(data);});	});
					
					
			</script>';

	//echo ';$("#info_gmin").load(id_gmin+".php")	;});
		

//$sql_gmin=$polaczenie->query("SELECT x_p,y_p, FROM bie WHERE nazwa='$pow'");

?>
