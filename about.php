<!DOCTYPE html>
<html>
    <head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Tenor+Sans&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="style.css">
<style>
    body{
        overflow-x:hidden;
    }
    .about-name{
        /*font-family: 'Tenor Sans', sans-serif;?*/
         font-family: 'Raleway', sans-serif;
        text-align: center;
        letter-spacing: 30px;
        margin-top: 40px;
        color: #4d4d4d;
        font-size: 35px;
        
    }

    #about-taylor-img{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 30%;
        height: auto;
    }

    .p-bio{
        text-align: center;
        color: #4d4d4d;
        font-family: 'Raleway', sans-serif;
    }

    .taylor-bio-intro{
        font-family: 'Cedarville Cursive', cursive;
        font-size: 22px;
        text-align: center;
        
    }
    .taylor-bio-wrapper1{
        text-align: center;
        margin: auto;
        width: 85%;
        padding: 10px;
    }
    .bio-wrapper{
        text-align: center;
        margin: auto;
        width: 50%;
        padding-top: 0px;
    }
    hr.about-line{
        border: 0px; 
        border-top: 1px solid grey;
        width: 300px;
        margin: auto;
    }

    img.paint1, img.paint2{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 40%;
        height: auto;
      
    }
    .centered, .centered2{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .taylor-container, .michael-container2{
        position: relative;
        text-align: center;
        margin-bottom: -100px;
    }
    .michael-bio{
        text-align: center;
        font-size: 22px;
        font-family: 'Raleway', sans-serif;
    }

    .about-michael-img{
        width: 100%;
        height: auto; 
        display: inline-block;
        margin-left: 150px;
    }

    #michael-name{
        font-family: 'Cedarville Cursive', cursive;
        font-size: 40px;
        text-align: center;
        position: inline-block;
    }
    .michael-bio-wrapper{
        padding: 30px;
        position: inline-block;
    }
    .michael-container{
        display: flex;
        align-items: center;
        flex-direction: row;
        text-align: center;
    }

    img.paint3{
        display: inline-block;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        height: auto;
      
    }

    .buzz-section{
        font-family: 'Cedarville Cursive', cursive;
        font-size: 30px;
        text-align:center;
    }

    .buzz-section-span{
        font-family: 'Raleway', sans-serif;
        letter-spacing: 30px;
        font-size: 35px;
    }

    #about-bees-img{
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 200px;
        height: auto;
    }

    #p-bio-span{
        font-style: italic;
    }

 

    


</style>
</head>
<body>
    <?php include('header.html')?>

    <div class ="taylor-container">
        <img src="pics/paint2.png" class = "paint1">
        <div class ="centered">
            <p class = "about-name"> TAYLOR </p>
        </div>
    </div>
    <img src="pics/taylor.png" alt= "Taylor Halperin" id = "about-taylor-img">
    <div class= "taylor-bio-wrapper1">
        <p class ="taylor-bio-intro"> My name is Taylor Halperin and I'm a 20 year old nursing student from the West Island of Montreal.</p> 
    </div>
    <div class= "bio-wrapper">
        <br>
        <p class="p-bio"> While I have no formal post-secondary training in the field, photography has been an integral 
           part of my life for as long as I can remember. I have always loved snapping pictures of family and friends, 
           but this passion grew when I lost my grandfather in 2010 to cancer. 
           He was a well-known professional photographer/videographer and taught me everything I know today about 
           composing and editing pictures. When he passed away, I inherited his high quality Nikon camera which I am in 
           the process of mastering the use of.</p>
        <br> 
        <p class= "p-bio"> Taking pictures has not only allowed me to maintain a connection with my grandfather, thereby keeping his spirit alive, 
            but to create connections with the people and places around me, capturing breathtaking moments that will last a lifetime for my clients.</p> 
    </div>
    <br> 

    <hr class ="about-line">

    <br><br><br>
    <div class ="michael-container">
        <div class= "michael-bio-wrapper">
            <img src="pics/Michael-Miller.png" alt="Michael Miller" class="about-michael-img" >
        </div>
        <div class = michael-container2>
            <img src="pics/paint3.png" class="paint3">
            <div class="michael-bio-wrapper">
                <div class ="centered2">
                    <p class = "michael-bio"> In honor of... </p>
                    <p id="michael-name"> Michael Miller</p>
                    <p class = "michael-bio"> 1940-2010 </p>
                </div>
            </div>
        </div>
    </div>
    <br>

    <hr class ="about-line">

    <br><br><br>

    <p class = "buzz-section"> What's all the <span class = "buzz-section-span">BUZZ</span>about?</p> 
    <p class= "buzz-section"> Significance of the Bees</p>
    <img src="pics/bee-transparent.png" id="about-bees-img">

    <div class ="bio-wrapper">
        <p class ="p-bio">Bees as a whole represent family, community and nurturing, and life. 
            They represent the co-existence of all living beings as well as the continuation of life.</p>
  

        <br><br>
        <p class ="p-bio">  <span id="p-bio-span">"Aside from the unique way they insure continuation of colonies, 
            the bee provides life for a huge faction within nature... flowers. Bees flit from flower to flower 
            gathering pollen for their purposes. Pollen clings to their fuzzy legs, and when the bee visits another 
            nearby flower, the pollen rubs off, thus pollinating the plant and assuring its continued survival. In this 
            light, the bee asks us what we are doing to insure the growth of our inner gardens. If our heart is a garden, 
            how are we pollinating it? What kinds of beauty can we visit in order to allow growth in our hearts, dreams, 
            minds and emotions? What are we feeding ourselves in order to feed our dreams?"</span></p>
        <br><br>

  
        <p class ="p-bio">  Bees symbolize trusting in miracles and taking the necessary steps to achieve your goals. 
            Their hard work ethic and dedication to their family unit are qualities to be admired and perfect to build a business upon.</p>
   
    </div>

    
    

    


        





        <?php include('footer.html')?>
    </body>