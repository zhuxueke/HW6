<!DOCTYPE html>
<html>
<meta charset="utf-8">
<head>
	<title></title>
	<style type="text/css">
		.size{
			width: 100px;
			height: 100px;
			float: left;
		}
	</style>
</head>
<body>
    <?php 
        function colorDiv($Array){

        	foreach ($Array as $key) {
        		echo '<div class="size" style="background: '.$key.'">'.$key."</div>";
        		
        	}
        }
        $colors=array("red","yellow","blue");
        	
        colorDiv($colors);
     ?>
</body>
</html>