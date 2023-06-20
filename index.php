<html>
    <head>
        <title>search engine</title>
        <style>
            .searchbox{
                margin-top:17%;
                width: 100%;
            }
            .searchbox form{
               display:flex;
               flex-direction:column;
               align-items:center;
               
            }
            .searchbox .search{
                width:46%;
                height:50px;
                border: 2px solid gray;
                border-radius:22px;
                padding-left:2%;
                box-shadow: 0px 2px 2px 0px skyblue; 
                font-weight:bold;
                font-size:16px;
            }
            .searchbox .send{
                width:11%;
                margin-top:20px;
                height:45px;
                border-radius:10px;
                font-size:18px;
                border:none;
                font-weight:bold;
                cursor:pointer;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div></div>
            <div class='searchbox'>
                <form method="GET" action="search.php">
                <input type="text" name="text" class="search" placeholder="search...">
                <input type="submit" name="send" class="send" value="search">
                </form>
            </div>
        </div>
    </body>
</html>