<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <title>Wilder Checker</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/n2oid.png">
    <script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/dist/sweetalert.css">
<style>
body{background:black; background-size: fixed;}
</style>
 <script type="text/javascript" src="css/dist/sweetalert.min.js"></script>

</head>
<body>
  <div class="col-lg-8" style="margin: 0px auto;float:none;">
     <div class="row">
        <div class="panel panel-default">
           <div class="panel-body" style="background-color: black; border: 2px solid limegreen; box-shadow: 1px 2px 17px limegreen;">
              <div class="row">
                 <textarea name="mailpass" id="mailpass" placeholder="example@email | password" class="form-control" rows="7"
                  style="color: limegreen; background-color: black; border: 2px solid limegreen; box-shadow: 1px 2px 10px limegreen;"
                  ></textarea>
                   </div>
                     <br>
                        <div class="row">
                           <div style="text-align: center;">
                        <button type="button" class="btn btn-primary" id="submit" style="background-color: limegreen; box-shadow: 1px 2px 5px limegreen; border:1px limegreen;">Start</button>
                     <button type="button" class="btn btn-default" id="stop" style="box-shadow: 1px 2px 5px limegreen; border:1px limegreen;">Stop</button>&nbsp;
                  Delim: <input name="delim" id="delim" style="text-align: center;display:inline;width: 40px;margin-right: 8px;padding: 4px;" value="|" class="form-control" type="text"><br><br>
            <!-- <img id="loading"> -->
          <span id="checkStatus" style="color:limegreen"></span>
         </div>
      </div>
    </div>
  </div>
</div>
<div id="result" style="display: none;">
<center>
LIVE : <span id="acc_live_count" class="label label-success">0</span> 
DIE : <span id="acc_die_count" class="label label-danger">0</span> 
WRONG : <span id="wrong_count" class="label label-warning">0</span> 
 Checking/Total : <span id="checkdata" class="label label-default">0</span></center><br/>
                    <div class="panel panel-default" style="background-color: black; color: limegreen; border:1px limegreen; box-shadow: 1px 1px 10px limegreen;">
                        <div class="panel-heading">
                            <i class="icon-list-ul"></i>
                            <span class="label label-success"style="color:white">ACCOUNT LIVE&nbsp;</span>
                            <span class="pull-right">
                                <button type="button" onclick="selectText('acc_live')" class="btn btn-xs btn-primary">Select All</button>
                                <button type="button" id="live" class="btn btn-xs btn-primary">Hide</button>
                            </span>
                        </div>
                        <div class="panel-body">
                            <div id="acc_live"></div>
                        </div>
                    </div>
                    <div class="panel panel-default" style="background-color: black; color: limegreen; border:1px limegreen; box-shadow: 1px 1px 10px limegreen;">
                        <div class="panel-heading">
                          <i class="icon-list-ul"></i>
                            <span class="label label-danger"style="color:white">ACCOUNT DIE&nbsp;</span>
                              <span class="pull-right">
                                <button type="button" onclick="selectText('acc_die')" class="btn btn-xs btn-primary">Select All</button>
                                <button type="button" id="die" class="btn btn-xs btn-primary">Hide</button>
                                  </span>
                              </div>
                          <div class="panel-body">
                        <div id="acc_die"></div>
                    </div>
                </div>
                    <div class="panel panel-default" style="background-color: black; color: limegreen; border:1px limegreen; box-shadow: 1px 1px 10px limegreen;">
                        <div class="panel-heading">
                           <i class="icon-list-ul"></i>
                             <span class="label label-warning"style="color:white">ACCOUNT WRONG&nbsp;</span>
                               <span class="pull-right">
                                 <button type="button" id="wrong-hide" class="btn btn-xs btn-primary">Hide</button>
                               </span>
                           </div>
                        <div class="panel-body">
                      <div id="wrong"></div>
                   </div>
                 </div>
              </div>
           </div>
            </div>
        </div>
	<script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
	<script type="text/javascript" src="js/saknufgifisagf.js"></script>
	 <script>
             swal({
            title: "Wellcome!",
            type: "info",
            allowEscapeKey: true,
            allowOutsideClick: false,
            text: "Terimakasih sudah berkunjung",
            confirmButtonText: "Continue"
                    });
  </script>
        <script type="text/javascript">
            function selectText(containerid) {
                if (document.selection) {
                    var range = document.body.createTextRange();
                    range.moveToElementText(document.getElementById(containerid));
                    range.select();
                } else if (window.getSelection()) {
                    var range = document.createRange();
                    range.selectNode(document.getElementById(containerid));
                    window.getSelection().removeAllRanges();
                    window.getSelection().addRange(range);
                }
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#live').click(function() {
                    $('#acc_live').toggle(1000);
                });
                $('#die').click(function() {
                    $('#acc_die').toggle(1000);
                });
                $('#wrong-hide').click(function() {
                    $('#wrong').toggle(1000);
                });
            });
        </script>
</head>
</body>
</html>