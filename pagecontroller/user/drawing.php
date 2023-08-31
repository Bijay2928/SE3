<script>
	function viewType(){//view type
		var xmlHttp = new XMLHttpRequest();//xmlhttp request		
		xmlHttp.open('POST', '../view/user/filter.php', true);
		var data = new FormData();//varibel data
		data.append('furniture_cond', this.value);//append
		xmlHttp.send(data);//send data

		xmlHttp.onreadystatechange = function(){//function
			if(xmlHttp.readyState == 4){//xmlhttp
				var furnitureAll = document.getElementById('furniture_list');
				furnitureAll.innerHTML = xmlHttp.responseText;//innerHTML for repsponser
			}
		}
	}
	function changeDrawing(){//function varibale
		var ele = document.getElementsByClassName('furniture_condition')[0];
		ele.addEventListener('change', viewType);//event lliseterner
	}

	document.addEventListener('DOMContentLoaded', changeDrawing);//dom content loaded
</script>
<?php

 	$furnitureQuery=$drawing_table->limitView(10);
 	$categoryQuery=$furniture_cat->findAll();//find records

	$vars = [//varibale
		'furnitureQuery'=>$furnitureQuery, //varibale
		'drawing_table'=>$drawing_table,//varibale
		'furniture_cat'=> $furniture_cat,//varibale
		'categoryQuery'=> $categoryQuery//varibale
	];
 $title = "All Drawings";//title
 $content = loadTemplate("../view/user/drawing_view.php", $vars);//lading template
?>


		