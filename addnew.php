 if(isset($_FILES['item_image']['name']))
        {
        $file_name=$_FILES['item_image']['name'];
		$path_address="img/$file_name";
		$path_address_db="img/$file_name";
		$img_confirm=1;
$file_type=pathinfo($_FILES['item_image']['name'],PATHINFO_EXTENSION);
		if($_FILES['item_image']['size']>2000000){
			$img_confirm=0;
			echo '<script>alert("this size is very big")</script>';
		}
		
