# Image-Analyser

Image analyser is a pogram that browser image in html form and can get number that the user choice of popular RGB color from the image  

## How To Use

open Image-Analyser/ImageAnalayserRGB/html/MostPopularRGB.html 
then press on the submit button and choice a image to analyse.
after that a new page will open with the image you choice and a list of severl number that u choice that give the most popular RGB colors

## How It Work

MostPopularRGB.html have a form with a submit button when u press it is send the data to index.php.  
 index.php is inculde the main class ImageAnalyser.php . 
 <br/> ImageAnalyser.php is a class in php that take a image and convert the image to array of pixel. 
<br/>any pixel have a RGB color and that we sort from high to low and take the 5 (more or less is the user choice) popular RGB color in the image and how much eny one of them
cover the image.
<br/>in index.php after we use ImageAnalyser class we use Smarty to display all the data in a html page.  Smarty is a template that help to display and use php in html pages.
then all the data we want to display pass to showPopular.html page and in there we see all the popular RGB color and out image
