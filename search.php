<?php
if(isset($_GET["text"]))
{
    $text = $_GET["text"];
}
else{
    exit("you must enter a search term") ;
}
if(isset($_GET["type"])){
    $type=$_GET["type"];
}
else{
    $type="sites";
}
?>
<html>
    <head>
        <title>search engine</title>
        <style>
            .container{
                padding-top:24px;
                padding-left:25px;
                background-color:#fafafa;
                height:100px;
                top:0;
                left:0;
                width:100%;
            }
            .search{
                display:flex;
                width: 70%;
                max-width: 630px;
                box-sizing:border-box;
                height:44px;
                background-color:#fff;
                box-shadow: 0px 1px 1px 0px rgba(0,0,0,0.16);
                 
            }
            .searchbox{
                border-radius:2px;
                flex:1;
                border:none;
                padding:12px;
                font-size:16px;
            }
            ul li{
                display:inline-block;
                padding:0 16px 12px 16px;
                color:#777;
                font-size:16px;
                margin-top:10px;
            }
            ul li a{
                text-decoration:none;
                font-weight:bold;
                color:gray;
            }
            ul .active a{
                padding-bottom: 10px;
                border-bottom:3px solid #1A73EB;
                font:bold;
                color:#1A73EB;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div>
            <form class="search" method="GET" action="search.php">
                <input type="text" class="searchbox" name="text">
                <button>Search</button>
            </form>
            </div>
            <div>
                <ul>
                    <li class="<?php echo $type == 'sites' ? 'active': '' ?>">
                        <a href='<?php echo"search.php?type=sites&&text=$text;" ?>'>
                        Sites
                        </a>
                    </li>
                    <li class="<?php echo $type=='images' ? 'active': '' ?>">
                        <a href='<?php echo"search.php?type=images&&text=$text;" ?>'>
                        Images
                        </a>
                    </li>
        </ul>
            </div>
        </div>
    </body>
</html>