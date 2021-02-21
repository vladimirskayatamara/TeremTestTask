<?php
        if(isset($_POST['submit'])) {
        $file = "data.json";
        $arr = array(
            'number 1' => $_POST['Number-1'],
            'number 2' => $_POST['Number-2'],
            'number 3' => $_POST['Number-3'],
            'number 4' => $_POST['Number-4'],
            'number 5' => $_POST['Number-5'],
            'data 1' => $_POST['data-1'],
            'data 2' => $_POST['data-2'],
        );
        $json_string = json_encode($arr);
        file_put_contents($file, $json_string, FILE_APPEND);
        echo $json_string;
        }
    ?>