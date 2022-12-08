<html>
    <body>
        <h1>data table</h1>
        <table border="1">
            <tr>
                <th>timestamp</th>
                <th>icon</th>
                <th>title</th>
                <th>name</th>
                <th>date</th>
                <th>detail</th>
            </tr>
    
        <?php
        // ファイルを開く
        $openFile = fopen('./data/data.txt', 'r');

        // ファイル内容を1行ずつ読み込んで出力
        // fgets($openFile)で、1行を読み込み、それを$strに代入
        // 何も読み込むものがなくなると、while文が終了する
        while ($str = fgets($openFile)) {
            $ary = explode("/", $str); //文字列を配列に変換
            echo '<tr>';
            for($i = 0; $i < sizeof($ary); $i++){
                echo "<td> {$ary[$i]} </td>";
            }
            echo '</tr>';


            // nl2br ... textファイルの改行を<br>に変換する関数
            // echo nl2br($str);
            // var_dump($ary);
        };
        fclose($openFile);
        ?>
        </table>
    </body>
</html>