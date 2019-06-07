<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <link rel="stylesheet" type="text/css" href="registration.css">
        <script type="text/javascript">
        function emailvalidation()
            {
                var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("POST", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }

            
        </script>
        
    <meta name="viewport" content="width=device-width",initial-scale="1.0">
    </head>
    <body>
        <div class="gt__box">
  
    <div class="gt__select">
      <div id="google_translate_element"></div>
    </div>
  </div>
        <div class="simple-form">
            
            <form id="registration" action="registration.php" method="post">
                <h1>Register Here</h1>
                <p>First Name:</p>
                <input type="text" name="fname" id="button" placeholder="Enter your first name" required><br>
                <p>Last Name:</p>
                <input type="text" name="lname" id="button" placeholder="Enter your last name" required><br>
                <p>Email Id:</p>
                <input type="text" name="email" id="txtEmail"  onchange="Javascript:validate_email();" placeholder="Enter your email" required><br>
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
         <script language="javascript">
        function validate_email() {
            var xmlhttp = new XMLHttpRequest();

            var email = document.getElementById('txtEmail');
            var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

            if (!filter.test(email.value)) {
                alert('Please provide a valid email address');
                email.focus;
                return false;
            }
            else{
                value = $("#txtEmail").val(); 
                console.log(value);
               
                  var dataString = 'q=' +value;

                  $.ajax({
                    type: "GET",
                    url: "process_otp.php",
                    data: dataString,
                    cache: false,
                    success: function(responce){
                      //check if what response is   
                        if (responce == "Email already taken"){
                            
                            alert("Email already taken");
                            $("#txtEmail").focus();
                            $("#txtEmail").val("");
                            
                        }
                        else if(responce == "Mail sent!"){
                            alert("Mail sent!");
                            
                        }
                        else {
                            alert("mail not send");
                        }
                    } 
                  
                  });
            
                
            }
        }
        
       /* function validate_otp() {
            
            var xmlhttp = new XMLHttpRequest();
            

            value = $("#otp").val();
            var dataString = 'q=' +value;
            
            if (value.length == 6){
                console.log("validate");
                $.ajax({
                    type: "GET",
                    url: "verify_otp.php",
                    data: dataString,
                    cache: false,
                    success: function(responce){
                        console.log(responce);
                        if (responce == "valid otp"){
                            $("#otp").css('color','green');
                            $("#otp").val("otp validate");
                            $("#otp").attr("disabled", true);
                            $("#Register").attr("disabled", false);
                        }
                        
                        if (responce == "invalid otp"){
                            $("#otp").css('color','red');
                            $("#otp").val("otp invalid");
                        }
                        
                        if (responce == "false"){
                            alert("please select resend otp option!!");
                        }
                    }
                });
            }
            
        }
    
    */
    </script>
    
    </body>
</html>

<?php include "registrationphp.php"; ?>