  <?php

include_once ('../../config.php');

if($_POST['save'] == TRUE){
 
 
  
       $c_id = $_POST['c_id'];           
         $c_title = $_POST['c_title'];           
                   
    
          
    
         $a = $_FILES["fileToUpload"]["name"];
        if($a!='')
           {
            
             $img_name = str_replace(' ', '_', $a);
            $image1 = uniqid()."_".$img_name;
            
              $target_dir = ROOT."image/cultures/";// specifies the directory where the file is going to be placed
            $target_file = $target_dir . $image1; //specifies the path of the file to be uploaded
            $uploadOk = 1; //is not used yet (will be used later)
            $imageFileType = pathinfo($_FILES["fileToUpload"]["name"],PATHINFO_EXTENSION); // holds the file extension of the file
            // Check if image file is a actual image or fake image
            if( $target_file == TRUE ) {
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    $_SESSION['error'] =  "Sorry, your picture is not uploded because file is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                // echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000) {
               $_SESSION['error'] =  "Sorry, your picture is not uploded because file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "jpg" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "jpg" && $imageFileType != "JPEG" && $imageFileType != "GIF" ) {
                $_SESSION['error'] =  "Sorry, only JPG, JPEG, jpg & GIF files are allowed.";
                $uploadOk = 0;
            }

           
            if ($uploadOk == 0) {
               
            } else {
                  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                 $upload_image = $image1 ;
                
                } else {
                    $_SESSION['error'] = "Sorry, there was an error uploading your picture.";
                }
            }
          } 
       
           $b = $_FILES["fileToUpload_2"]["name"];
        if($b!='')
           {
            
            $img_name2 = str_replace(' ', '_', $b);
            $image2 = uniqid()."_".$img_name2;
            
            $target_dir = ROOT."image/cultures/";// specifies the directory where the file is going to be placed
            $target_file = $target_dir . $image2; //specifies the path of the file to be uploaded
            $uploadOk = 1; //is not used yet (will be used later)
            $imageFileType = pathinfo($_FILES["fileToUpload_2"]["name"],PATHINFO_EXTENSION); // holds the file extension of the file
            // Check if image file is a actual image or fake image
            if( $target_file == TRUE ) {
                $check = getimagesize($_FILES["fileToUpload_2"]["tmp_name"]);
                if($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    $_SESSION['error'] =  "Sorry, your picture is not uploded because file is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                // echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload_2"]["size"] > 500000) {
               $_SESSION['error'] =  "Sorry, your picture is not uploded because file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "jpg" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "jpg" && $imageFileType != "JPEG" && $imageFileType != "GIF" ) {
                $_SESSION['error'] =  "Sorry, only JPG, JPEG, jpg & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
               // $_SESSION['error'] = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                  if (move_uploaded_file($_FILES["fileToUpload_2"]["tmp_name"], $target_file)) {
                $upload_image2 = $image2 ;
                // $_SESSION['success'] = $target_file ;
                    // echo "The file ". basename($_FILES["fileToUpload_2"]["name"]). " has been uploaded.";
                } else {
                    $_SESSION['error'] = "Sorry, there was an error uploading your picture.";
                   
                }
            }
          }
            
           $c = $_FILES["fileToUpload_3"]["name"];
        if($c!='')
           {
            

            $img_name3 = str_replace(' ', '_', $c);
            $image3 = uniqid()."_".$img_name3;
            
            $target_dir = ROOT."image/cultures/";// specifies the directory where the file is going to be placed
            $target_file = $target_dir . $image3; //specifies the path of the file to be uploaded
            $uploadOk = 1; //is not used yet (will be used later)
            $imageFileType = pathinfo($_FILES["fileToUpload_3"]["name"],PATHINFO_EXTENSION); // holds the file extension of the file
            // Check if image file is a actual image or fake image
            if( $target_file == TRUE ) {
                $check = getimagesize($_FILES["fileToUpload_3"]["tmp_name"]);
                if($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    $_SESSION['error'] =  "Sorry, your picture is not uploded because file is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                // echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload_3"]["size"] > 500000) {
               $_SESSION['error'] =  "Sorry, your picture is not uploded because file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "jpg" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "jpg" && $imageFileType != "JPEG" && $imageFileType != "GIF" ) {
                $_SESSION['error'] =  "Sorry, only JPG, JPEG, jpg & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
               // $_SESSION['error'] = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                  if (move_uploaded_file($_FILES["fileToUpload_3"]["tmp_name"], $target_file)) {
                $upload_image3 = $image3 ;
                // $_SESSION['success'] = $target_file ;
                    // echo "The file ". basename($_FILES["fileToUpload_3"]["name"]). " has been uploaded.";
                } else {
                    $_SESSION['error'] = "Sorry, there was an error uploading your picture.";
                }
            }
          }

           $d = $_FILES["fileToUpload_4"]["name"];
        if($d!='')
           {
            
            
             $img_name4 = str_replace(' ', '_', $d);
            $image4 = uniqid()."_".$img_name4;

            $target_dir = ROOT."image/cultures/";// specifies the directory where the file is going to be placed
            $target_file = $target_dir . $image4; //specifies the path of the file to be uploaded
            $uploadOk = 1; //is not used yet (will be used later)
            $imageFileType = pathinfo($_FILES["fileToUpload_4"]["name"],PATHINFO_EXTENSION); // holds the file extension of the file
            // Check if image file is a actual image or fake image
            if( $target_file == TRUE ) {
                $check = getimagesize($_FILES["fileToUpload_4"]["tmp_name"]);
                if($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    $_SESSION['error'] =  "Sorry, your picture is not uploded because file is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                // echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload_4"]["size"] > 500000) {
               $_SESSION['error'] =  "Sorry, your picture is not uploded because file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "jpg" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "jpg" && $imageFileType != "JPEG" && $imageFileType != "GIF" ) {
                $_SESSION['error'] =  "Sorry, only JPG, JPEG, jpg & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
               // $_SESSION['error'] = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                  if (move_uploaded_file($_FILES["fileToUpload_4"]["tmp_name"], $target_file)) {
                $upload_image4 = $image4 ;
                // $_SESSION['success'] = $target_file ;
                    // echo "The file ". basename($_FILES["fileToUpload_4"]["name"]). " has been uploaded.";
                } else {
                    $_SESSION['error'] = "Sorry, there was an error uploading your picture.";
                }
            }
          }
      
           $e = $_FILES["fileToUpload_5"]["name"];
        if($e!='')
           {
           
             $img_name5 = str_replace(' ', '_', $e);
            $image5 = uniqid()."_".$img_name5;
            
            $target_dir = ROOT."image/cultures/";// specifies the directory where the file is going to be placed
            $target_file = $target_dir . $image5; //specifies the path of the file to be uploaded
            $uploadOk = 1; //is not used yet (will be used later)
            $imageFileType = pathinfo($_FILES["fileToUpload_5"]["name"],PATHINFO_EXTENSION); // holds the file extension of the file
            // Check if image file is a actual image or fake image
            if( $target_file == TRUE ) {
                $check = getimagesize($_FILES["fileToUpload_5"]["tmp_name"]);
                if($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    $_SESSION['error'] =  "Sorry, your picture is not uploded because file is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                // echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload_5"]["size"] > 500000) {
               $_SESSION['error'] =  "Sorry, your picture is not uploded because file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "jpg" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "jpg" && $imageFileType != "JPEG" && $imageFileType != "GIF" ) {
                $_SESSION['error'] =  "Sorry, only JPG, JPEG, jpg & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
               // $_SESSION['error'] = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                  if (move_uploaded_file($_FILES["fileToUpload_5"]["tmp_name"], $target_file)) {
                $upload_image5 = $image5 ;
                
                } else {
                    $_SESSION['error'] = "Sorry, there was an error uploading your picture.";
                }
            }
          }

         
           $f = $_FILES["fileToUpload_6"]["name"];
        if($f!='')
           {
            

             $img_name6 = str_replace(' ', '_', $f);
            $image6 = uniqid()."_".$img_name6;
            
            $target_dir = ROOT."image/cultures/";// specifies the directory where the file is going to be placed
            $target_file = $target_dir . $image6; //specifies the path of the file to be uploaded
            $uploadOk = 1; //is not used yet (will be used later)
            $imageFileType = pathinfo($_FILES["fileToUpload_6"]["name"],PATHINFO_EXTENSION); // holds the file extension of the file
            // Check if image file is a actual image or fake image
            if( $target_file == TRUE ) {
                $check = getimagesize($_FILES["fileToUpload_6"]["tmp_name"]);
                if($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    $_SESSION['error'] =  "Sorry, your picture is not uploded because file is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                // echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload_6"]["size"] > 500000) {
               $_SESSION['error'] =  "Sorry, your picture is not uploded because file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "jpg" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "jpg" && $imageFileType != "JPEG" && $imageFileType != "GIF" ) {
                $_SESSION['error'] =  "Sorry, only JPG, JPEG, jpg & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
               // $_SESSION['error'] = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                  if (move_uploaded_file($_FILES["fileToUpload_6"]["tmp_name"], $target_file)) {
                $upload_image6 = $image6 ;
             
                } else {
                    $_SESSION['error'] = "Sorry, there was an error uploading your picture.";
                }
            }
          }
       

           $g = $_FILES["fileToUpload_7"]["name"];
        if($g!='')
           {

             $img_name7 = str_replace(' ', '_', $g);
            $image7 = uniqid()."_".$img_name7;
           
            $target_dir = ROOT."image/cultures/";// specifies the directory where the file is going to be placed
            $target_file = $target_dir . $image7; //specifies the path of the file to be uploaded
            $uploadOk = 1; //is not used yet (will be used later)
            $imageFileType = pathinfo($_FILES["fileToUpload_7"]["name"],PATHINFO_EXTENSION); // holds the file extension of the file
            // Check if image file is a actual image or fake image
            if( $target_file == TRUE ) {
                $check = getimagesize($_FILES["fileToUpload_7"]["tmp_name"]);
                if($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    $_SESSION['error'] =  "Sorry, your picture is not uploded because file is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                // echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload_7"]["size"] > 500000) {
               $_SESSION['error'] =  "Sorry, your picture is not uploded because file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "jpg" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "jpg" && $imageFileType != "JPEG" && $imageFileType != "GIF" ) {
                $_SESSION['error'] =  "Sorry, only JPG, JPEG, jpg & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
               // $_SESSION['error'] = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                  if (move_uploaded_file($_FILES["fileToUpload_7"]["tmp_name"], $target_file)) {
                $upload_image7 = $image7 ;
                // $_SESSION['success'] = $target_file ;
                    // echo "The file ". basename($_FILES["fileToUpload_7"]["name"]). " has been uploaded.";
                } else {
                    $_SESSION['error'] = "Sorry, there was an error uploading your picture.";
                }
            }
          }

          $h = $_FILES["fileToUpload_8"]["name"];
        if($h!='')
           {

             $img_name8 = str_replace(' ', '_', $h);
            $image8 = uniqid()."_".$img_name8;
           
            $target_dir = ROOT."image/cultures/";// specifies the directory where the file is going to be placed
            $target_file = $target_dir . $image8; //specifies the path of the file to be uploaded
            $uploadOk = 1; //is not used yet (will be used later)
            $imageFileType = pathinfo($_FILES["fileToUpload_8"]["name"],PATHINFO_EXTENSION); // holds the file extension of the file
            // Check if image file is a actual image or fake image
            if( $target_file == TRUE ) {
                $check = getimagesize($_FILES["fileToUpload_8"]["tmp_name"]);
                if($check !== false) {
                    // echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    $_SESSION['error'] =  "Sorry, your picture is not uploded because file is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                // echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["fileToUpload_8"]["size"] > 500000) {
               $_SESSION['error'] =  "Sorry, your picture is not uploded because file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "jpg" && $imageFileType != "jpeg"
            && $imageFileType != "gif" && $imageFileType != "JPG" && $imageFileType != "jpg" && $imageFileType != "JPEG" && $imageFileType != "GIF" ) {
                $_SESSION['error'] =  "Sorry, only JPG, JPEG, jpg & GIF files are allowed.";
                $uploadOk = 0;
            }

            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
               // $_SESSION['error'] = "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {
                  if (move_uploaded_file($_FILES["fileToUpload_8"]["tmp_name"], $target_file)) {
                $upload_image8 = $image8 ;
                // $_SESSION['success'] = $target_file ;
                    // echo "The file ". basename($_FILES["fileToUpload_7"]["name"]). " has been uploaded.";
                } else {
                    $_SESSION['error'] = "Sorry, there was an error uploading your picture.";
                }
            }
          }

          if (isset($_POST['c_id']) && $_POST['c_id'] > 0 ) {
           
          
      
          $query = "SELECT * FROM cultures WHERE id = '".$c_id."'" ;

          $results = mysqli_query($conn, $query);


          if(mysqli_num_rows($results) > 0 ){
             $qry = [];
            if($upload_image != '' ){
             echo    $qry[] = "`image_1` = '".$upload_image."' ";
            
            }
            if($upload_image2 != '' ){

                $qry[] = "`image_2` = '".$upload_image2."' ";

                            }
            if($upload_image3 != '' ){


                $qry[] = "`image_3` = '".$upload_image3."' ";

                            }
            if($upload_image4 != '' ){

                $qry[] = "`image_4` = '".$upload_image4."' ";



                            }
            if($upload_image5 != '' ){
                $qry[] = "`image_5` = '".$upload_image5."' ";



                            }
            if($upload_image6 != '' ){

                $qry[] = "`image_6` = '".$upload_image6."' ";

                            }
            if($upload_image7 != '' ){

                $qry[] = "`image_7` = '".$upload_image7."' ";

            }
             if($upload_image8 != '' ){

                $qry[] = "`image_8` = '".$upload_image8."' ";

            }

           if(count($qry) > 0) {
              $qry = implode(', ', $qry);
              $sql = "UPDATE cultures SET $qry , culture_title = '".$c_title."' WHERE id = '".$c_id."'";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_array($result);

                $_SESSION['success'] = 'Images updated successfully';
            
            if(headers_sent() ) {
            echo "<script> window.location.assign('".BASE_ADMIN_URL."home.php?page=cultureedit&c_id=".$c_id."'); </script>";
            }else{
            header('Location: '.BASE_ADMIN_URL.'home.php?page=cultureedit&c_id='.$c_id.'');
            }

           }
          
           
          
            if(headers_sent() ) {
            echo "<script> window.location.assign('".BASE_ADMIN_URL."home.php?page=cultureedit&c_id=".$c_id."'); </script>";
            }else{
            header('Location: '.BASE_ADMIN_URL.'home.php?page=cultureedit&c_id='.$c_id.'');
            }
         

       }
   }
   else {
      
          if($upload_image != '' || $upload_image2 != '' || $upload_image3 != '' || $upload_image4 != '' || $upload_image5 != '' || $upload_image6 != '' || $upload_image7 != '' || $upload_image8 != '') {

        

         $query = "INSERT INTO `cultures`(`culture_title`, `image_1`, `image_2`, `image_3`, `image_4`, `image_5`, `image_6`, `image_7`, `image_8`) VALUES ('".$c_title."','".$upload_image."','".$upload_image2."','".$upload_image3."','".$upload_image4."','".$upload_image5."','".$upload_image6."','".$upload_image7."','".$upload_image8."')";

         		$sql = mysqli_query($conn, $query);
                 
                if ($sql == TRUE)
                    {
                        $cu_id = mysqli_insert_id();

                    $_SESSION['success'] = 'Images inserted successfully';

             if(headers_sent() ) {

            echo "<script> window.location.assign('".BASE_ADMIN_URL."home.php?page=cultureedit&c_id=".$cu_id."'); </script>";
            }else{
            header('Location: '.BASE_ADMIN_URL.'home.php?page=cultureedit&c_id='.$cu_id.'');
            }
                    } 
                    else {
                     $_SESSION['error'] = mysqli_error();
                    if(headers_sent() ) {
            echo "<script> window.location.assign('".BASE_ADMIN_URL."home.php?page=cultureedit'); </script>";
            }else{
            header('Location: '.BASE_ADMIN_URL.'home.php?page=cultureedit');
            }
                    }
            

            }


            }
            
          }
    
 

                        

?>