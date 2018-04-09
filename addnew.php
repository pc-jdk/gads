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
if($file_type != 'jpg' && $file_type != 'png' && $file_type != 'gif' )
		{
			$img_confirm=0;
			echo '<script>alert("this is not matching")</script>';
		}
		if($img_confirm==0){
			echo '<script>alert("this is not matching")</script>';
			
		}else
        {
			if(move_uploaded_file($_FILES['item_image']['tmp_name'],$path_address))
            {
		
