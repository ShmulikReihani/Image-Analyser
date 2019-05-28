<?php 


require '../libs/Smarty.class.php';
include("./utils/ImageAnalyser.php");


if(isset($_POST['submit'])){ //check if in the form cliced on submit button

    $smarty = new Smarty; //smarty object
    $filepath = "uploads/".$_FILES['file']['name']; //file path
    move_uploaded_file($_FILES['file']['tmp_name'], $filepath); 
    $image = new ImageAnalyser($filepath); //object of ImageAnalyser class that can analyse the mosr popular color's RGB 
    $xPopularRGBArray = array(); //init xPopularRGBArray as array that save the x popular RGB from image
    $PopularRGBCover = array(); //init PopularRGBCover as array that have the precent of how much cover they take of image
    if($image->is_image()){ //check if the file is image or not
        $image->convertImageToRGB(); 
        $image->sortRGBPopularArray();
        $xPopularRGBArray = $image->xPopularRGB(5);
        $PopularRGBCover = $image->popularRGBCoverImage($xPopularRGBArray);
    }else{
        echo 'Image should be uploaded !';
    }
    
    $smarty->assign('array',$PopularRGBCover); //assign $PopularRGBCover array as var that call array
    $smarty->assign('imagepath',$filepath); //assign $filepath array as var that call imagepath
    $smarty->display('./html/showPopular.html'); //display in showPopular the xPopularRGBArray

}else{
    echo 'Please upload a image';
}


?>
