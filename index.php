
<html>
    <head>
        <title>::FarmKit</title>
        
<meta charset="UTF-8">       
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-2.1.3.min.js>"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
       
    </head>
    
    <body>
         <div class="gt__box">
            <div class="gt__select">
              <div id="google_translate_element"></div>
            </div>
        </div>
        
       
        <div id="head">
            <div class="sticky">
        <header>
            
            <nav class="navbar navbar-expand-md navbar-dark bg-success fixed-top">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
                    <span class="navbar-toggler-icon"></span>   
                </button>
                
                <div class="collapse navbar-collapse" id="collapse_target">
                <span class="navbar-text" style="color: aqua; height: 40px; font-weight: 500" >FarmKit</span>
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a class="nav-link "  href="index.html">Home</a>
                    </li>
                   
    <div class="nav-item">           
   <div class="dropdown">
  <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown" style="background-color: transparent; color: rgba(125, 206, 160 ,0.7);">
    Products
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="veges.html">Vegetables</a>
    <a class="dropdown-item" href="fruits.html">Fruits</a>
    <a class="dropdown-item" href="pulses.html">Pulses & Grains</a>
    <a class="dropdown-item" href="dairy.html">Dairy & eggs</a>
  </div>
</div>
</div>
                    <li class="nav-item">
                       <a class="nav-link "  href="about.html">About</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" href="login.php" style="float: right"> User Login</a>
                    </li>

                    <li class="nav-item">
                       <a class="nav-link" href="alogin.php" style="float: right"> Admin Login</a>
                    </li>
                </ul>
                
                </div>
                    </nav>
                </header>
            </div>
        </div>
                <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search Here" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color: skyblue;">Search</button>
  </form>
            
        
    
        <script>
            var i=0;
            var images=[];
            var time=4000;
            
            images[0]='images/rice.png';
            images[1]='images/vegetables.png';
            images[2]='images/egg.png';
            images[3]='images/fruits.png';
            images[4]='images/wheat1.png';
            
        function changeImg(){
            
            document.slide.src=images[i];
            
            if(i<images.length-1){
                i++;
                
            }else{
                i=0;
            }
            
            setTimeout("changeImg()",time);
            
        }
            window.onload=changeImg;
        </script>
     
        <img name="slide" width="1370" height ="450">
        <script>
            
           
	
    
   // function googleTranslateElementInit() {
// new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
// }

function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}

(function(){var gtConstEvalStartTime = new Date();function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk=eval('((function(){var a\x3d814543065;var b\x3d2873925779;return 414629+\x27.\x27+(a+b)})())');var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();

/*
console.log($('goog-te-gadget').html('Powered by ').replace('test'));

$(".goog-te-gadget:contains('Powered by ')").text("test");


$('.goog-te-gadget').each(function() {
   var text = $(this).html();
   $(this).html(text.replace('Powered by ', 'I love this text')); 

});
*/ 
        </script>
        
        
        
       <div class="welcome_text">
           <div class="container">
        <h1>WELCOME TO FARMKIT,</h1>
           </div>
        </div>
        
        <div class="product">
            <div class="container">
                <div class="product_section_title">Most ordered products</div>
                
                    </div>
                </div>
            <div class="product_item">
                <div class="item">
                <div class="item-image">
                    <img src="images/onion.jpg">
                    <div class="item-button">
                        <a href="#">Add To Cart</a>
                        
                    </div>
                    </div>
                    <div class="item-title">
                        <a href="#"><h5>Onion - Medium/Kanda- Madhyam</h5></a>
                        <p> 1 kg- Rs. 20.90</p>
                        
                    </div>
                </div>
                 
               <div class="item">
                <div class="item-image">
                    <img src="images/rice.jpg">
                    <div class="item-button">
                        <a href="#">Add To Cart</a>
                        
                    </div>
                    </div>
                    <div class="item-title">
                        <a href="#"><h5>White Rice</h5></a>
                        <p>1 kg-Rs.40</p>
                        
                    </div>
                </div>
                <div class="item">
                <div class="item-image">
                    <img src="images/carrot.jpg">
                    <div class="item-button">
                        <a href="#">Add To Cart</a>
                        
                    </div>
                    </div>
                    <div class="item-title">
                        <a href="#"><h5>Carrot English/Gajar</h5></a>
                        <p>1 kg-Rs.40.90</p>
                        
                    </div>
                </div>
                     
                
                <div class="item">
                <div class="item-image">
                    <img src="images/apple.jpg">
                    <div class="item-button">
                        <a href="#">Add To Cart</a>
                        
                    </div>
                    </div>
                    <div class="item-title">
                        <a href="#"><h5>Apples</h5></a>
                        <p> 1 kg- Rs.139</p>
                        
                    </div>
                </div>
        
       <div class="item">
                <div class="item-image">
                    <img src="images/capsicum.jpg">
                    <div class="item-button">
                        <a href="#">Add To Cart</a>
                        
                    </div>
                    </div>
                    <div class="item-title">
                        <a href="#"><h5>Capsicum Hybrid Green/ Dhobli Mirchi</h5></a>
                       <p>1 kg-Rs.22.25</p>
                        
                    </div>
                </div>
                          
                <div class="item">
                <div class="item-image">
                    <img src="images/moong.jpg">
                    <div class="item-button">
                        <a href="#">Add To Cart</a>
                        
                    </div>
                    </div>
                    <div class="item-title">
                        <a href="#"><h5>Moong Dal</h5></a>
                        <p> kg-Rs.90</p>
                        
                   
                </div>
                    
                    </div>
                <div class="item">
                <div class="item-image">
                    <img src="images/tomato.jpg">
                    <div class="item-button">
                        <a href="#">Add To Cart</a>
                        
                    </div>
                    </div>
                    <div class="item-title">
                        <a href="#"><h5>Tomato Hybrid/Tomato Sankarit</h5></a>
                        <p>1 kg-Rs.18.90</p>
                        
                    </div>
                </div>
                <div class="item">
                <div class="item-image">s 
                    <img src="images/potato.jpg">
                    <div class="item-button">
                        <a href="#">Add To Cart</a>
                        
                    </div>
                    </div>
                    <div class="item-title">
                        <a href="#"><h5>Potato/Batate</h5></a>
                       <p>1 kg-Rs.30.90</p>
                    </div>
                    </div>
                </div>
  
        
         
 <iframe src="https://en.wikipedia.org/wiki/W3Schools" width="1350" height="350">
     
     
        </iframe>
        
        
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3772.669434283395!2d73.12548141489991!3d18.990200987137168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7e866de88667f%3A0xc1c5d5badc610f5f!2sPillai+College+of+Engineering%2C+New+Panvel!5e0!3m2!1sen!2sin!4v1539495585713" width="1350" height="350" frameborder="0" style="border:0; margin-top: 10%" allowfullscreen></iframe>
        
        <footer>
            <br>
            <br>
        <p style="text-align:center; text-color: white;"> All rights reserved | This website is made  <i class="icon-heart" aria-hidden="true"></i> by PCE </p>
</footer>
                    
       
    </body>
</html>


