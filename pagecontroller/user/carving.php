<script>
	function viewType(){//function
		var xmlHttp = new XMLHttpRequest();	//makign request varibale	
		xmlHttp.open('POST', '../view/user/filter.php', true);//if ture
		var data = new FormData();//making varibale
		data.append('furniture_cond', this.value);
		xmlHttp.send(data);//send data

		xmlHttp.onreadystatechange = function(){//function laod
			if(xmlHttp.readyState == 4){//if condiotn
				var furnitureAll = document.getElementById('furniture_list');//get ellemetn doucumet by id
				furnitureAll.innerHTML = xmlHttp.responseText;
			}
		}
	}
	function changeCarving(){//varibale functon
		var ele = document.getElementsByClassName('furniture_condition')[0];
		ele.addEventListener('change', viewType);//event lislerener
	}

	document.addEventListener('DOMContentLoaded', changeCarving);//event listener
</script>
<?php

 	$furnitureQuery=$carving_table->limitView(10);//carving table

 	$categoryQuery=$furniture_cat->findAll();//find the reocrd

	$vars = [
		'furnitureQuery'=>$furnitureQuery, 
		'carving_table'=>$carving_table,//table varibale
		'furniture_cat'=> $furniture_cat,//furniture cat varibael
		'categoryQuery'=> $categoryQuery
	];
 $title = "All Furnitures";//setting title
 $content = loadTemplate("../view/user/carving_view.php", $vars);//loading template
?>


		