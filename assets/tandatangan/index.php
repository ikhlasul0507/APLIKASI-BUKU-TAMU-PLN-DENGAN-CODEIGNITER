
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>TANDA TANGAN</title>
  <meta name="description" content="Signature Pad - HTML5 canvas based smooth signature drawing using variable width spline interpolation.">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">

  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <link rel="stylesheet" href="css/signature-pad.css">
  <script src="jquery-2.1.3.min.js"></script>
  
</head>
<body onselectstart="return false">


  <div id="signature-padi" class="m-signature-pad">
    <div class="m-signature-pad--body">
      <canvas></canvas>
    </div>
    <div class="m-signature-pad--footer">
      <button class="button clear" data-action="clear">BERSIHKAN</button>
      <button id="save" class="button save" data-action="save">SIMPAN</button>
    </div>
    <div id="anoyaro">ISIKAN TANDA TANGAN MENGGUNAKN KURSOR MOUSE</div>
  </div>
  <script>
$("#save").click(function(){
window.open(signaturePad.toDataURL())
});
  </script>

  <script src="js/signature_pad.js"></script>
  <script src="js/app.js"></script>
</body>
</html>
