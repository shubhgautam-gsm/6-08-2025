<!DOCTYPE html>
<html>
    <style>
        .demo{
            height:300px;
            width:150px;
            background:purple;
            color:white;
            border-radius:20px;
            text-align:center;
            overflow:hidden;
            float:left;
            margin-right:20px;
            text-shadow:0px 0px 6px orange,2px 2px 2px green;
        }
        img{
         height:70%;
         width: 100%;   
        }
    </style>
<body>

<?php
$mobile=["iphone12","laptop","mac"];//database
$image_url=["faceonmoon.jpeg","items.jpg","mac.jpg"];//database
// refrence of $lang at echo

for($i=0;$i<3;$i++){
    echo "
    <div class='demo'>
        <img src='./images/$image_url[$i]'>
        <h2>$mobile[$i]</h2>
       
     </div>
    ";
    }
?> 
<!-- <div>
    <h2></h2>
    <img src="" alt="">
</div> -->
</body>
<h1>hello</h1>

<!-- document

ambani=500
ambani=ambani+50 550
h1+='world' -->
</html>
