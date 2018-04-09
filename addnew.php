 if(isset($_FILES['item_image']['name']))
        {
        $file_name=$_FILES['item_image']['name'];
		$path_address="img/$file_name";
		$path_address_db="img/$file_name";
		$img_confirm=1;
		
