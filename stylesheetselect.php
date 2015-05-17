<?php
    $styles=array('style.css','stylebluegreen.css','styleredgreen.css','styleyellowblue.css');
    $names=array('DOMYŚLNE', 'BLUE-GREEN', 'RED-GREEN', 'YELLOW-BLUE');
    //header('Location: '.$_SERVER['REQUEST_URI']);
?>

<form action="" method="post">
    <select name='stylechoose' onchange="this.form.submit()" style="float:right; margin-top:20px;">
        <?php
        for($i=0; $i<count($styles); ++$i) {
            if ($styles[$i] == getCookieValue('sitestyle'))
                $temp = 'selected';
            else
                $temp = '';
            print('<option ' . $temp . ' value=' . $styles[$i] . ' >' . $names[$i] . '</option>');
        }
        ?>
    </select>
</form>