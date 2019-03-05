<?php



if($_GET['exploit']){}
else{
		echo("<script>document.write('<center><h1>Please use the correct syntax</h1></center>');</script>");
		return;
}

function get_client_ip_env() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
 
    return $ipaddress;
}

$hourMin = date('H');

$algorithm = hash("ripemd160", get_client_ip_env() . $hourMin . $_GET['exploit']);
?>

<style>
.center {
  margin: auto;
}
</style>

<html>
<script src='https://www.google.com/recaptcha/api.js'></script>
<head>
</script>
<html lang="en">
	<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <title><?php echo($_GET['exploit']); ?> Key System</title>
	</head>
	<body style="background-color:rgb(247, 247, 247);">
		
            <div id="wrapper">
                <div class="jumbotron" style="margin-bottom:0;min-height:100%;min-height:100vh;display:-webkit-box;display:-moz-box;display:-ms-flexbox;display:-webkit-flex;display:flex;-webkit-box-align:center;-webkit-align-items:center;-moz-box-align:center;-ms-flex-align:center;align-items:center;width:100%;-webkit-box-pack:center;-moz-box-pack:center;-ms-flex-pack:center;-webkit-justify-content:center;justify-content:center;">
                    <div class="container" style="width:550px;">
                        <div class="card">
                            <div class="card-header">
                                <i class="far"></i><b style="margin-left:8px;"><?php echo($_GET['exploit']); ?> Key System</b>
                            </div>
                            <b style="margin-left:15px;margin-right:15px;margin-top:25px;margin-bottom:25px;font-size:12px;">This key is only for you, and should not be shared.  Each key is unique for every IP and changes every hour.</b>
                            <div class="col-auto">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fas fa-key"></i></div>
                                    </div>
                                    <input type="text" class="form-control" name="copykeytxtbx" id="inlineFormInputGroup" value="Complete The Captcha To Get Your Key">
                                </div>
                                <div class="text-right">
                                    <button name="copykeybtn" onclick="CopyLicenseKey()" type="button" class="btn btn-success" style="margin-bottom:25px;margin-top:10px;"><div style="font-size:13px;">Copy</div></button>
                                    <button onclick="RegenerateLicense()" type="button" class="btn btn-primary" style="margin-bottom:25px;margin-top:10px;"><div style="font-size:13px;">Refresh</div></button>
                                  <center>  <div class="g-recaptcha" data-sitekey="6Ldlto0UAAAAABt-j45aU1OULr3x8iYRIRW3Q4p1"></div></center>
                               <center>   <button onclick="submit();" type="button" class="btn btn-success" style="margin-bottom:25px;margin-top:10px;"><div style="font-size:13px;">Submit Captcha</div></button></center>
                                </div>
                            </div>
                        </div>
                        <center><b style="font-size:12px;">Created By RoboMat.</b></center>
                    </div>
                </div>
            </div>
                    <script>
            function CopyLicenseKey() {
                document.getElementsByName("copykeytxtbx")[0].select();
                document.execCommand("copy");
            }
        </script>
        <script>
        
        function submit(){
            document.getElementById("inlineFormInputGroup").value = "<?php echo($algorithm); ?>";
        }
        
            function RegenerateLicense() {
                location.reload();
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	</body>
