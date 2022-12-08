<html>

<head>
    <meta charset="utf-8">
    <title>課題テンプレート</title>
    <style>
        /* CSSを書く */
        html{
            color: gray;
            width: 500px;
        }
        form{
            background-color: #ffefd5;
        }
        input{
            background-color: #ffefd5;
            border: none; 
        }
        #icon{
            font-size: 1.5rem;
            /* 上 | 右 | 下 | 左 */
            margin:5px 0px 5px 0px;
        }
        #title{
            font-size: 2.0rem;
            width: 100%;
            /* 上 | 右 | 下 | 左 */
            margin:5px 0px 5px 0px;
        }
        #name{
            /* 上 | 右 | 下 | 左 */
            margin:5px 0px 5px 0px;
        }
        #date{
            /* 上 | 右 | 下 | 左 */
            margin:5px 0px 5px 0px;
        }
        textarea{
            background-color: #ffeff5;
            width: 100%;
            border: none;
            /* 上 | 右 | 下 | 左 */
            margin:5px 0px 5px 0px;
        }
        #btn{
            border: solid;
        }
    </style>
</head>

<body>
    <h1>notion風チケットメモ</h1>
    <form action="write.php" method="post">
    <input type="text" name="icon" id="icon" placeholder="☻アイコンを追加"><br>
        <input type="text" name="title" id="title" placeholder="無題"><br>
        起票者 <input type="text" name="name" id="name" placeholder="未入力"><br>
        起票日 <input type="date" name="date" id="date" placeholder="未入力"><br>
        <textarea name="detail" id="" cols="30" rows="10"  placeholder="未入力"></textarea>
        <input type="submit" value="送信" id="btn">
    </form>
</body>
</html>
