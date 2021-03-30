<!DOCTYPE html>
<html>
<head>
<title> Sample php app for Analytics, Ads and GTM implementation training</title>

  <link rel="stylesheet" href="herokuapp-style.css">
  
  <!-- Google Tag Manager -->
<script>
  (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({
    'gtm.start': new Date().getTime(),
    event:'gtm.js'
  });
    var f=d.getElementsByTagName(s)[0], j=d.createElement(s), dl=l!='dataLayer'?'&l='+l:'';
                       j.async=true;
                       j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;
                       f.parentNode.insertBefore(j,f);
                      })(window,document,'script','dataLayer','GTM-WB5SBNS');
  
  </script>
<!-- End Google Tag Manager -->
  
  </head>
  
  
<body>
  
  <!-- Google Tag Manager (noscript) -->
<!--
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WB5SBNS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
-->
<!-- End Google Tag Manager (noscript) -->
  
  <center>
      <div>
        <?php
            echo "The purpose of this app is purely educational. <br>
                This time I am practicing implementation of Ads, Analytics and GTM.";
        ?>
      </div>
      
      <div>
  
      <button id="triggerButton" onclick="showAlert(1)"><h1>Press this button to fire an event-based tag</h1></button>
          
      </div>
    
      <div>
        <p> Number below is supposed to be random and for test purposes only. </p>
      <a href="tel:123133111"><button id="callButton" onclick="showAlert(2)"><h1>12 31 33 111</h1></button></a>
          
      </div>
  
  </center>
    
    <!-- Function to display alert in pop-up box-->
    <script>
        function showAlert(x) {
          if (x==1) alert("Thank you for clicking the button! Now check Analytics");
          else if (x==2) alert("Thank you for clicking call button");
        }
    </script>
    
</body>
   
<footer style="margin-top:2cm">
  <center> Copyright &copy; 2021 Me </center>
</footer>
   
</html>
