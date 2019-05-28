# Image-Analyser

Image analyzer is a program that browser image in html form and can get number that the user choice of popular RGB color from the image

## How To Use

Open /ImageAnalayserRGB/html/MostPopularRGB.html then press on the submit button and choice an image to analyze. After that a new page will open with the image you choice and a list of most popular RGB colors.

## How It Work

MostPopularRGB.html have a form with a submit button when u press it is send the data to index.php.
<br/>index.php is include the main class ImageAnalyser.php . 
ImageAnalyser.php is a class in php that take an image and convert the image to array of pixel.<br/> 
Any pixel has a RGB color that we put in array and sort it from high to low, then we take the 5 (more or less is the user choice) popular RGB color in the image and calculate how much any one of them cover the image. <br/>
In index.php after we use ImageAnalyser class we use Smarty to display all the data in a html page.<br/> 
Smarty is a template that help to display and use php in html pages.<br/>
 Then all the data we want to display pass to showPopular.html page and in there we see all the popular RGB color and out image

