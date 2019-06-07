<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <link rel="stylesheet" type="text/css" href="registration.css">
  
        
    <meta name="viewport" content="width=device-width",initial-scale="1.0">
    </head>
    <body>
        <div class="gt__box">
  
    <div class="gt__select">
      <div id="google_translate_element"></div>
    </div>
  </div>
        <div class="simple-form">
            
            <form id="registration" action="areg.php" method="post">
                <h1>ADMIN Register Here</h1>
                <p>First Name:</p>
                <input type="text" name="fname" id="button" placeholder="Enter your first name" required><br>
                <p>Last Name:</p>
                <input type="text" name="lname" id="button" placeholder="Enter your last name" required><br>
                <p>Email Id:</p>
                <input type="text" name="email" id="txtEmail"  placeholder="Enter your email" required><br>
                <p>Password:</p>
                <input type="password" name="pwd" id="button" placeholder="Enter your password" required><br> 
                <p>Confirm Password:</p>
                <input type="password" name="cpwd" id="button" placeholder="Re-enter password" required><br>
                <p>Gender:</p>
                <input type="radio" name="gender" id="rd" required><span id="but">Male</span><input type="radio" name="gender" id="rd" required><span id="but">Female</span><br><br>
                <input type="submit" value="Register" id="button" name="signup">
            
            </form>
        
        </div>
         <script>
    
    
   // function googleTranslateElementInit() {
// new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
// }

function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}

(function(){var gtConstEvalStartTime = new Date();function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk=eval('((function(){var a\x3d814543065;var b\x3d2873925779;return 414629+\x27.\x27+(a+b)})())');var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.ata png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();

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

<?php include "aregphp.php"; ?>