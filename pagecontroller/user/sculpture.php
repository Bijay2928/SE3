<script>
	function viewType(){//type
		var xmlHttp = new XMLHttpRequest();//xmlhttp request		
		xmlHttp.open('POST', '../view/user/filter.php', true);
		var data = new FormData();//variable data
		data.append('furniture_cond', this.value);//append
		xmlHttp.send(data);//send data

		xmlHttp.onreadystatechange = function(){//change funciton
			if(xmlHttp.readyState == 4){
				var furnitureAll = document.getElementById('furniture_list');//get emeletnt by id
				furnitureAll.innerHTML = xmlHttp.responseText;//xml response
			}
		}
	}
	function changeSculpture(){//change funciton
		var ele = document.getElementsByClassName('furniture_condition')[0];
		ele.addEventListener('change', viewType);//event lliseterner
	}

	document.addEventListener('DOMContentLoaded', changeSculpture);//event lisetenre
</script>
<?php

 	$furnitureQuery=$sculpture_table->limitView(10);//sculpture _table

 	$categoryQuery=$furniture_cat->findAll();//find recoreds

	$vars = [
		'furnitureQuery'=>$furnitureQuery, //vaibale furniteure
		'sculpture_table'=>$sculpture_table,//vairbale suclputre
		'furniture_cat'=> $furniture_cat,//varibale funitcate
		'categoryQuery'=> $categoryQuery
	];
 $title = "All sculptures";//set title
 $content = loadTemplate("../view/user/sculpture_view.php", $vars);//laoding template
?>


		