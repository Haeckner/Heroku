<!DOCTYPE html>
<html>
<head>
<title> Sample php app for Analytics, Ads and GTM implementation training</title>
</head>
  
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-192604322-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-192604322-2');
</script>
  
  <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WB5SBNS');</script>
<!-- End Google Tag Manager -->
  
<body>
  
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WB5SBNS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
  <center><?php echo "The purpose of this app is purely educational. This time I am practicing implementation of Ads, Analytics and GTM."; ?></center>
  
  <button id="triggerButton"><h1>Press this button to fire an event-based tag</h1></button>
   
</body>
   
<footer style="margin-top:2cm">
  <center> Copyright &copy; 2021 Me </center>
</footer>
   
</html>
