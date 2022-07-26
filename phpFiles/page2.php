<html>
    <body>
        <top>
            <h1>result page</h1>
                <?php
                    $SERVER ="localhost";
                    $username="root";
                    $password="";
                    $dbname="yazeed";

                    $conn=mysqli_connect($SERVER,$username,$password,$dbname);
                   if(empty($_GET['value']))
                   {
                    echo "u should give vaule <br>";
                    echo " not submit";
                   }
                   else
                   {
                    $value=$_GET['value'];
                    echo "the value is:" . $_GET['value'];
                    echo " successfully submit";
                   }

                   

                   $query= "insert into yazeed values($value)" ;
                   $run=mysqli_query($conn,$query) 

                   
                ?>
            </form>
        </top>

    </body>
</html>