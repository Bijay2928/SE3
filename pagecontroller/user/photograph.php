<script>
	function viewType(){//view tupe
		var xmlHttp = new XMLHttpRequest();//xmlhttop request		
		xmlHttp.open('POST', '../view/user/filter.php', true);//
		var data = new FormData();//data variable
		data.append('furniture_cond', this.value);//append
		xmlHttp.send(data);//send data

		xmlHttp.onreadystatechange = function(){//change funciotns
			if(xmlHttp.readyState == 4){
				var furnitureAll = document.getElementById('furniture_list');//get element by id
				furnitureAll.innerHTML = xmlHttp.responseText;//response
			}
		}
	}
	function changePhotograph(){//funciton chnge
		var ele = document.getElementsByClassName('furniture_condition')[0];//get element by id
		ele.addEventListener('change', viewType);//event lisetenre
	}

	document.addEventListener('DOMContentLoaded', changePhotograph);//event listener
</script>
<?php

 	$furnitureQuery=$photograph_table->limitView(10);//photograph_table

 	$categoryQuery=$furniture_cat->findAll();//find records

	$vars = [
		'furnitureQuery'=>$furnitureQuery, //varibale furnitre
		'photograph_table'=>$photograph_table,//photgraph_table vaigel
		'furniture_cat'=> $furniture_cat,
		'categoryQuery'=> $categoryQuery
	];
 $title = "All Furnitures";//setting title
 $content = loadTemplate("../view/user/photograph_view.php", $vars);//loading tempalte
?>


		