<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['file'];
            // echo $name;
            if($name == 'agra'){
                header("location:https://dj.000.pe/frontpage/agra");
            }
            if($name == 'rbs'){
                header("location:https://dj.000.pe/frontpage/rbs");
            }
    }
    else{
        echo'
            <script>
                alert("Kyo, maje lene he!!");
            </script>
        ';
        header("refresh:0;url=http://dj.000.pe/frontpage");
    }
?>
