<script>
	function viewType(){//view type
		var xmlHttp = new XMLHttpRequest();	//xmlhtttp request	
		xmlHttp.open('POST', '../view/user/filter.php', true);
		var data = new FormData();//varibale data
		data.append('furniture_cond', this.value);//append
		xmlHttp.send(data);//send data

		xmlHttp.onreadystatechange = function(){//cnage funciton
			if(xmlHttp.readyState == 4){
				var furnitureAll = document.getElementById('furniture_list');
				furnitureAll.innerHTML = xmlHttp.responseText;//xmll response
			}
		}
	}
	function changeFurniture(){//function change
		var ele = document.getElementsByClassName('furniture_condition')[0];//get elemet doucment
		ele.addEventListener('change', viewType);//add event liseter
	}

	document.addEventListener('DOMContentLoaded', changeFurniture);//event lisetenr
</script>
<?php

 	$furnitureQuery=$painting_table->limitView(10);//paiting talble
 	$categoryQuery=$furniture_cat->findAll();//find records

	$vars = [
		'furnitureQuery'=>$furnitureQuery,//furniture varibale
		'furniture_table'=>$painting_table,//painting_table varibale
		'furniture_cat'=> $furniture_cat,//furnituer_cat varibale
		'categoryQuery'=> $categoryQuery//cate varibale
	];
 $title = "All Furnitures";//title
 $content = loadTemplate("../view/user/furniture_view.php", $vars);//loading template
?>


		