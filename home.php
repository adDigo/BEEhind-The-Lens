<!-- pink color: rgb(221, 170, 170) -->

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="style.css">
      <style>
      *{
          box-sizing: border-box;
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
          top: 85%;
          width: auto;
          padding: 16px;
          margin-top:-22px;
          color: white;
          font-weight: bold;
          font-size: 18px;
          border-radius: 100px;
          user-select: none; 
          transition: 0.5s ease;
      }

      .next{
          right: 0px;
          border-radius: 70px;
      }

      /*background color of arrows*/
      .prev:hover, .next:hover{
        background-color: #FFDF00;
      }

      .dot{
          cursor: pointer;
          height: 7px;
          width: 7px;
          margin: 0 2px;
          background-color: #bbb;
          border-radius: 50%;
          display: inline-block;
          transition: background-color 0.5s ease;
          
      }

      .active{
          background-color: #FFDF00;
      }

      </style>
    </head>
    <body>

        <?php include('header.html')?>

        <div class="slideshow-container">
            <!--img1-->
            <div class="dynamic-slides">
                <img src="pics/purple-baby-basket.png" alt = "baby in basket" style ="width:100%" class="slide-pics">
            </div>
            <!--img2-->
            <div class="dynamic-slides">
                <img src="pics/family2.png" alt = "family" style ="width: 100%" class="slide-pics">
            </div>
            <!--img3-->
            <div class="dynamic-slides">
                <img src="pics/siblings-bee-strong.png" alt = "siblings" style ="width: 100%" class="slide-pics">
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>

        <div style ="text-align: center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <script>
            var slideIndex = 0;
            showSlides();
            var slides,dots,timer; /* timer vars */

            function showSlides(){
                var i;
                var slides = document.getElementsByClassName("dynamic-slides");
                var dots = document.getElementsByClassName("dot");

                for (i = 0; i <slides.length; i++){
                    /*each slide will not take up space on screen when displayed */
                    slides[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > slides.length){
                    slideIndex = 1
                }
                for (i=0; i<dots.length; i++){
                    dots[i].className= dots[i].className.replace(" active", "");
                }
                /*display current slide as a block element"*/
                slides[slideIndex-1].style.display= "block";
                dots[slideIndex-1].className += " active";
               timer = setTimeout(showSlides, 4000);
            }

            function plusSlides(position){
                clearTimeout(timer);
                slideIndex +=position;
                if(slideIndex>slides.length){
                    slideIndex=1
                } else if(slideIndex<1){
                    slideIndex = slides.length
                    }

                for(i = 0; i<slides.length; i++){
                    slides[i].style.display="none";
                }
                for (i = 0; i <dots.length; i++){
                    dots[i].className=dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display="block";
                dots[slideIndex-1].className += " active";
                timer = setTimeout(showSlides, 4000);
             
            }

            function currentSlide(index){
                clearTimeout(timer);
                if (index>slides.length){
                    index = 1
                }else if(index<1){
                    index = slides.length
                    }
                slideIndex = index; /*setting slideIndex with the index of the function*/
                for (i=0; i<slides.length;i++){
                    slides[i].style.display="none";
                }

                for (i=0; i<dots.length;i++){
                    dots[i].className=dots[i].className.replace(" active", "");
                }
                slides[index-1].style.display = "block";
                dots[index-1].className += " active";
                timer = setTimeout (showSlides, 4000);
            }            
            </script>

        
        <?php include('footer.html')?>
    </body>
</html>

