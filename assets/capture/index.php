<!doctype html>
<html>
<head>
    <title>WebcamJS Test Page</title>
    <style>
        input {
            margin-top: 10px;
        }
    </style>
 
</head>
<body>
    <p>Ambil Gambar</p>
    <div id="camera">Capture</div>
    
    <div id="webcam">
        <input type=button value="Capture" onClick="preview()">
    </div>
    <div id="simpan" style="display:none">
        <input type=button value="Remove" onClick="batal()">
        <input type=button value="Save" onClick="simpan()" style="font-weight:bold;">
    </div>
 
    <div id="hasil"></div>
 
    <script src="webcam.min.js"></script>
    <script language="Javascript">
        // konfigursi webcam
        Webcam.set({
            width: 220,
            height: 140,
            image_format: 'jpg',
            jpeg_quality: 100
        });
        Webcam.attach( '#camera' );
 
        function preview() {
            // untuk preview gambar sebelum di upload
            Webcam.freeze();
            // ganti display webcam menjadi none dan simpan menjadi terlihat
            document.getElementById('webcam').style.display = 'none';
            document.getElementById('simpan').style.display = '';
        }
        
        function batal() {
            // batal preview
            Webcam.unfreeze();
            
            // ganti display webcam dan simpan seperti semula
            document.getElementById('webcam').style.display = '';
            document.getElementById('simpan').style.display = 'none';
        }
        
        function simpan() {
            // ambil foto
            Webcam.snap( function(data_uri) {
                
                // upload foto
                Webcam.upload( data_uri, 'upload.php', function(code, text) {} );
 
                // tampilkan hasil gambar yang telah di ambil
                document.getElementById('hasil').innerHTML = 
                    '<p>Hasil : </p>' + 
                    '<img src="'+data_uri+'"/>';
                
                Webcam.unfreeze();
            
                document.getElementById('webcam').style.display = '';
                document.getElementById('simpan').style.display = 'none';
            } );
        }
    </script>
    
</body>
</html>