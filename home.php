<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
      <style>
      body{
          background-color: #FAF0E6;
      } 
      .slideshow-container{
          max-width: 1000px;
          position: relative;
          margin: auto;
      }

      /*arrow buttons*/
      .prev, .next{
          cursor: pointer;
          position: absolute;
          top: 
      }
      </style>
    </head>
    <body>
        <div class="slideshow-container">
            
            <div class="dynamic-slides fade">
                <div class= "number-slide"> 1 / 5 </div>
                <img src="pics/purple-baby-basket.png" alt = "baby in basket" style ="width:100%">
            <div>

            <div class="dynamic-slides fade">
                <div class="number-slide"> 2 / 5 </div>
                <img src="pics/family2.png" alt = "family" style ="width: 100%">
            </div>

            <div class="dynamic-slides fade">
                <div class="number-slide"> 3 / 5 </div>
                <img src="pics/siblings-bee-strong.png" alt = "siblings" style ="width: 100%">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

         <br>

        <div style ="text-align: center">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>

        <script>
            var slideIndex = 0;
            showSlide();

            function showSlide(){
                var i;
                var slides = document.getElementsByClassName("dynamic-slides");
                var dots = document.getElementsByClassName("dot");

                for (i = 0; i <slides.length){
                    /*each slide will not take up space on screen when displayed */
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length){
                    slideIndex = 1
                }
                for (i=0; i<dots.length; i++){
                    dots[i].className= dots[i].className.replace(" active", "";)
                }
                /*display current slide as a block element"*/
                slides[slideIndex-1].style.display="block";
                dots[slideIndex-1].classname += " active";
                setTimeout(showSlides, 4000)
            }
            </script>

        <?php include('header.html')?>
        <?php include('footer.html')?>
    </body>
</html>

