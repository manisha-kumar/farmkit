   <html>
 <head>
        <title>Contact</title>
        <link rel="stylesheet" href="contact.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    </head>
    
    <body>
        <div class="gt__box">
  
    <div class="gt__select">
      <div id="google_translate_element"></div>
    </div>
  </div>
        <meta charset="UTF-8">       
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-2.1.3.min.js>"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    

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
                    <li class="nav-item">
                   <select name="products" class="nav-link">
                        <option class="box">Products</option>
                       <a href="veges.html"><option>Vegetables</option></a>
                        <option><a href="fruits.html">Fruits</a></option>
                        <option><a href="dairy.html">Dairy and eggs</a></option>
                        <option><a href="pulses.html">Pulses and Grains</a></option>
                                        
                                    </select>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link "  href="about.html">About</a>
                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php" style="float: right">Login</a>
                    </li>
                </ul>
                
                </div>
                <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search Here" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="background-color: skyblue;">Search</button>
  </form>
            </nav>
        </header>
            </div>
        </div>
        
    <div class="container">  
  <form id="contact" action="contact.php" method="post">
    <h3>Contact Us</h3>
    <h4>Contact us for any query..</h4>
    <fieldset>
      <input placeholder="Your name" name="name" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Your Email Address" name="email" type="email" tabindex="2" required>
    </fieldset>
    <fieldset>
      <input placeholder="Your Phone Number" name="phnumber" type="number" tabindex="3" required>
    </fieldset>
    
    <fieldset>
      <textarea placeholder="Type your message here...." name="comment" tabindex="5" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
  </form>
</div>
        
   <footer>
<br>
    

<p style="text-align:center; ">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made  <i class="icon-heart" aria-hidden="true"></i> by PCE </p>
</footer><br>
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
        
    </body>

</html>

<?php 
include "contactus.php";

 ?>