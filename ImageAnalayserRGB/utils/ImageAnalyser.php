<?php 


class ImageAnalyser {

    public $src; //path of the image file
    public $arrayOfRGB; //array of all RGB pixel from Image 
    public $mostPopularArray; //array of all x's popular RGB from Image

    //init 
    function __construct( $src ) {
		$this->src = $src;
		$this->arrayOfRGB = array();
		$this->mostPopularArray = array();
    }
    
    //convert image to array of all the RGB from the image
    function convertImageToRGB(){
        $im     = imagecreatefromjpeg($this->src);
        $size   = getimagesize($this->src);
        $width  = $size[0];
        $height = $size[1];
    
        $arr = array();
        for($x=0;$x<$width;$x++)
        {
            for($y=0;$y<$height;$y++)
            {
                $rgb = imagecolorat($im, $x, $y);
            
                $r = ($rgb >> 16) & 0xFF;
                $g = ($rgb >> 8) & 0xFF;
                $b = $rgb & 0xFF;
            
                $fullRGB = "R-$r G-$g B-$b";
                array_push($arr,$fullRGB);
            }
        }
        $this->arrayOfRGB = $arr;
    }

    //sort the popular RGB numbers from high to low 
    function sortRGBPopularArray(){
        $sortedArray = array();
    
        for($i=0; $i<count($this->arrayOfRGB); $i++){
            $key = $this->arrayOfRGB[$i];
            if(array_key_exists($key, $sortedArray)){
                $sortedArray[$key]++;
            }else{
                $sortedArray[$key] = 1;
            }
        }
        arsort($sortedArray);
        $this->arrayOfRGB = $sortedArray;
    }

    //get x as number of how many popular RGB color of the image you want to see
    function xPopularRGB($x){
        $xArrayPopular = array();
    
        $key = array_keys($this->arrayOfRGB);
        for($i=0; $i<$x; $i++){
            $xArrayPopular[$i] = $key[$i];
        }
        $this->mostPopularArray = $xArrayPopular;
    }

    //return the x's popular RGB and how much present of the image they cover
    function popularRGBCoverImage(){
        $sum = 0;
        $RGBArrayCoverImage = array();
        foreach ($this->arrayOfRGB as $subject => $marks){  
            $sum = $sum + $marks;  
        } 
        for($i=0; $i<count($this->mostPopularArray); $i++){
            $RGBArrayCoverImage[$this->mostPopularArray[$i]] = ($this->arrayOfRGB[$this->mostPopularArray[$i]]/ $sum) * 100;
        }
        return $RGBArrayCoverImage;
    }

    //check if the file is image or not
    function is_image(){
        $a = getimagesize($this->src);
        $image_type = $a[2];
        
        if(in_array($image_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP))){
            return true;
        }
	    return false;
    }
}

?>