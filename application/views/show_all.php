<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title></title>

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
<body>
<center>
	<table style="width:600px" align="center" border="20">
	  <tr bgcolor="#0066FF">
	    <th>ID</th>
	    <th>NAME</th>		
	    <th >AGE</th>
        <th>EMAIL</th>
        <th>TELOPHONE</th>
	  </tr>
    <?php
    	foreach($users->result() as $users){
    		echo '<tr>';
    		echo '<td align="center" bgcolor="#0066FF">'.$users->id. '</td>';
    		echo'<td align="left">'.$users->name. '</td>';
            echo'<td align="center">'.$users->age. '</td>';
            echo'<td align="left">'.$users->email. '</td>';
            echo'<td align="center">'.$users->tel. '</td>';
    		echo '</tr>';
	    }
    ?>
    </table>
</body>
</html>