<!DOCTYPE html>
<html lang="en">

<head>
    <base href="<?= URL; ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> -->
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    
    <link rel="stylesheet" href="public/css/font-awesome.min.css">
    <link rel="stylesheet" href="public/css/style4.css">
    <style>
       .side{padding:0px !important;}
       .header{direction: rtl;}
       span{margin-left: auto;padding:5px;border:none}
       i{color: #808080de;font-size: 20px;margin: 0px 3px;}
       ul{padding:5px;margin:0px;border-radius:0px;}
       li{display: flex;border-bottom: 1px solid #e5a8a861;background: #c7d7d545;align-items: center !important;padding:5px;border-radius:0px;margin:0px;right:0;width:100%;}
   .chatboxright{display:flex;align-items: center !important;padding:5px;background: #c7d7d545;flex-direction:column;width: 60%;margin-bottom:5px;}
   .chatboxleft{display:flex;align-items: center !important;padding:5px;float:left;flex-direction:column;background: #c7d7d545;width:20%;}
   .time{font-size:9px;}
   .fa-send{font-size:22px;}
   .fa-plus ,.fa-refresh ,.edite2{font-size: 22px;margin: 0px 5px;}
   </style>
   
</head>

<body>
    <div class="container">
        <div class="col-md-4 side">
            <div class="header" >
                <span >فراوین</span>
                <a><i class="fa fa-plus" ></i></a>
                <a><i class="fa fa-refresh" ></i></a>
                
            </div>
            <ul style=" ">
                <li style=""> 
                <span >احمد کریمی</span>
                <a><i class="fa fa-edit" ></i></a>
                <a><i class="fa fa-trash" ></i></a>
                </li>
                
            </ul>

        </div>
        <div class="col-md-8 chat">
            <div class="header">
                <span >احمد کریمی</span>
                <a><i class="fa fa-edit edite2" ></i></a>
                <a><i class="fa fa-refresh"></i></a>
            </div>
            <div class="body">
                <div class="chatboxright" > 
                     <span >سلام خوبی؟</span>
                    <span class="time">   11:29</span>
                </div>
                <div class="chatboxright"> 
                    <span >پروزه رو تا کجا رسوندی؟</span>
                    <span class="time">   11:30</span>
                </div>
                <div class="chatboxleft"> 
                    <span ><prev>
                        سلام.ممنون.

خوب پیش میرم و اخراشه..
                    </prev></span>
                    <span class="time"> 12:10</span>
                </div>
            </div>
            <div class="footer">
                <span >پیام ...</span>
                <a><i class="fa fa-send" ></i></a>

            </div>
        </div>


    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="public/js/demo.js"></script>
</body>

</html>