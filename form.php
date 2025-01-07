
<!DOCTYPE php>
<php>
    <head>
        <meta charset="utf-8">
        <title>Engineering Consultancy</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicon -->
        <link rel="shortcut icon" href="img/logo2.png">
        <!-- Web Fonts -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
        <link href="js/jquery.signaturepad.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rajdhani:400,500,600,700" rel="stylesheet">
        <link href="css/form-style.css" rel="stylesheet">
    </head>
    <body class="front" style="font-family: 'Rajdhani', sans-serif;">
    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop"><i class="fa fa-angle-double-up"></i></div>
     <body>
     <div class="innerpage contact-page">
    <div class="container">
      <div class="row clearfix">
      <div class="col-md-2 offset-md-2"></div>
      <div class="col-md-8">
      <div class="form-part">
      <h1 class="text-center">APPLICATION FORM</h1>
          <b>Please fill up the (*) requireds form.</b>
          <hr/>
			<form class="contact-form mt-20" role="form">
                            <div class="form-group">
                                <label>Name<sup>*</sup></label>
                                <input type="text" class="form-control" required >
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email<sup>*</sup></label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone<sup>*</sup></label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" class="form-control" >
                            </div>
                            <div class="form-group">
                                <label>Message<sup>*</sup></label>
                                <textarea class="form-control" id="message" rows="4" required></textarea>
                            </div>
                              <div class="sigPad" id="linear" style="width:404px;">
</div>
                           <div class="form-group">
                                <button type="submit" class="btn btn-base">
                                        <span>Send message</span>
                                    </button>
                            </div>
                           
                        </form>
</div>
</div>
<div class="col-md-2 offset-md-2"></div>
        </div>    
    </div>
  </div>
 
  
  
 
<!-- page-wrapper end -->
<!-- JavaScript files placed at the end of the document so the pages load faster
		================================================== -->
<!-- Jquery and Bootstap core js files -->
<script src="js/bootstrap.min.js"></script>
<script src="css/jquery.signaturepad.min.js"></script>
 <script src="js/json2.min.js"></script>
</body>
<script>
    $(document).ready(function() {
      $('.sigPad').signaturePad();
    });
  </script>
   <script>
      var onFail = function(e) {
        console.log('Rejected!', e);
      };

      var onSuccess = function(s) {
        stream = s;
      }

      window.URL = window.URL || window.webkitURL;
      navigator.getUserMedia  = navigator.getUserMedia || navigator.webkitGetUserMedia || navigator.mozGetUserMedia || navigator.msGetUserMedia;

      var stream;
      var audio = document.querySelector('audio');

      function startRecording() {
        if (navigator.getUserMedia) {
          navigator.getUserMedia({audio: true}, onSuccess, onFail);
        } else {
          console.log('navigator.getUserMedia not present');
        }
      }

      function stopRecording() {
        audio.src = window.URL.createObjectURL(stream);
      }
    </script> 
</php>
