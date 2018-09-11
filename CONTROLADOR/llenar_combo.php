<?php
$id=$_POST["id_region"];
$cone=  mysqli_connect("localhost", "root", "", "bd_mis_perris");
$reg=  mysqli_query($cone, "select * from provincias where region_id=$id");
while ($row=  mysqli_fetch_array($reg)){
    echo '<option value='.$row[0].'>'.$row[1].'<option>';
}

