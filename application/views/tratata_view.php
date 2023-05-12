<h1><u> TraTaTa </u></h1>
<a href='tratata/test'> link to test </a><br>
<a href='/avtoriz'> link to authorization </a>
<br>

<?php
foreach ($data as $row){
    echo $row['name'];
    echo "<br>";
}
?>