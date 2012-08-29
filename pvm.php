
<html>
    <body>


        alotuspvm =>        

        <select name="ap">
            <?php
            for ($i = 1; $i < 32; $i++) {
                echo " <option ";
                if ($_POST['ap'] == $i)
                    echo ' selected = "selected" ';
                echo ">$i</option>";
            }
            ?>

        </select>
        <select name="akk">
            <?php
            for ($k = 1; $k < 13; $k++) {
                echo " <option ";
                if ($_POST['akk'] == $k)
                    echo ' selected = "selected" ';
                echo ">$k</option>";
            }
            ?>
        </select>

        <select name="avuosi">
            <?php
            for ($v = 2012; $v < 2015; $v++) {
                echo " <option ";
                if ($_POST['avuosi'] == $v)
                    echo ' selected = "selected" ';
                echo ">$v</option>";
            }
            ?>
        </select>

        <?php
        echo "  ";
        ?>





        päättymispvm =>



        <select name="lp">
            <?php
            for ($i = 1; $i < 32; $i++) {
                echo " <option ";
                if ($_POST['lp'] == $i)
                    echo ' selected = "selected" ';
                echo ">$i</option>";
            }
            ?>

        </select>
        <select name="lkk">
            <?php
            for ($k = 1; $k < 13; $k++) {
                echo " <option ";
                if ($_POST['lkk'] == $k)
                    echo ' selected = "selected" ';
                echo ">$k</option>";
            }
            ?>
        </select>

        <select name="lvuosi">
            <?php
            for ($v = 2012; $v < 2015; $v++) {
                echo " <option ";
                if ($_POST['lvuosi'] == $v)
                    echo ' selected = "selected" ';
                echo ">$v</option>";
            }
            ?>
        </select>



        <?php
        $apvm = "$_POST[avuosi]" . "-" . "$_POST[akk]" . "-" . "$_POST[ap]";
        $lpvm = "$_POST[lvuosi]" . "-" . "$_POST[lkk]" . "-" . "$_POST[lp]";

        $GLOBALS["apvm"] = $apvm;
        $GLOBALS["lpvm"] = $lpvm;
        ?>

    </body>
</html>
