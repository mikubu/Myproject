<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href=http://localhost/test/css-table.css>
    
<meta charset="utf-8">
</head>
<body>
<center>


<!-- INSERT DATA -->
<table id="travel">

    
    
            
            <th scope="col" colspan="6">INSERT DATA</th>
        
    
        <tr>
          <th scope="col" width="6.5%">ID</th>
            <th scope="col" width="29%">NAME</th>
            <th scope="col" width="7%">AGE</th>
            <th scope="col" width="27%">E-MAIL</th>
            <th scope="col">TELEPHONE</th>
            <th scope="col">OK</th>
        </tr>        
    </thead>
    
    <tfoot>
    </tfoot>
    
    <tbody>
        <tr>
            <form action="./insert" method="post">
            <td><input name="in_id" type="text"style="width:100%;border:none;"/></td>
            <td><input name="in_name" type="text"style="width:100%;border:none;"/></td>
            <td><input name="in_age" type="text"style="width:100%;border:none;"/></td>
            <td><input name="in_email" type="text"style="width:100%;border:none;"/></td>
            <td><input name="in_tel" type="text"style="width:100%;border:none;"/></td>
            <td><input name="del_name" type="submit"style="width:100%;border:none;" value="OK"/></td>
            </form>
        </tr>
        
    </tbody>

</table>

<!-- ___________________________________________________________________________ -->



<!-- UPDATE DATA -->
<table id="travel">

    
    
            
            <th scope="col" colspan="6">UPDATE DATA</th>
        
        
        <tr>
            <th scope="col" width="6.5%">ID</th>
            <th scope="col" width="29%">NAME</th>
            <th scope="col" width="7%">AGE</th>
            <th scope="col" width="27%">E-MAIL</th>
            <th scope="col">TELEPHONE</th>
            <th scope="col">OK</th>
        </tr>        
    </thead>
    
    <tfoot>
    </tfoot>
    
    <tbody>
        <tr>
            <form action="./update" method="post">
            <td><input name="up_id" type="text"style="width:100%;border:none;"/></td>
            <td><input name="up_name" type="text"style="width:100%;border:none;"/></td>
            <td><input name="up_age" type="text"style="width:100%;border:none;"/></td>
            <td><input name="up_email" type="text"style="width:100%;border:none;"/></td>
            <td><input name="up_tel" type="text"style="width:100%;border:none;"/></td>
            <td><input type="submit"style="width:100%;border:none;" value="OK"/></td>
            </form>
        </tr>
        
    </tbody>

</table>

<!-- ___________________________________________________________________________ -->

<!-- DELETE DATA -->
<table id="travel" >

    
    
            
            <th scope="col" colspan="6">DELETE DATA</th>
        
        
        <tr>
            <th scope="col" width="6.5%">ID</th>
           <!--  <th scope="col" width="29%">NAME</th>
            <th scope="col" width="7%">AGE</th>
            <th scope="col" width="27%">E-MAIL</th>
            <th scope="col">TELEPHONE</th> -->
            <th scope="col" width="6.5%">OK</th>
        </tr>        
    </thead>
    
    <tfoot>
    </tfoot>
    
    <tbody>
        <tr>
            <form action="./delete_user" method="post">
           <td><input name="del_id" type="text"style="width:100%;border:none;"/></td>
           <!--  <td><input name="del_name" type="text"style="width:100%;border:none;"/></td>
            <td><input name="del_age" type="text"style="width:100%;border:none;"/></td>
            <td><input name="del_email" type="text"style="width:100%;border:none;"/></td>
            <td><input name="del_tel" type="text"style="width:100%;border:none;"/></td> -->
            <td><input type="submit"style="width:100%;border:none;" value="OK"/></td>
            </form>
        </tr>
        
    </tbody>

</table>

<!-- ___________________________________________________________________________ -->




<!-- SEARCH DATA -->
<table id="travel" >

    
    
            
            <th scope="col" colspan="8">SEARCH DATA</th>
        
        
        <tr>
            <th scope="col" width="6.5%">ID</th>
           <!--  <th scope="col" width="29%">NAME</th>
            <th scope="col" width="7%">AGE</th>
            <th scope="col" width="27%">E-MAIL</th>
            <th scope="col">TELEPHONE</th> -->
            <th scope="col" width="6.5%">SEARCH</th>
        </tr>        
    </thead>
    
    <tfoot>
    </tfoot>
    
    <tbody>
        <tr>
            <form action="./search_keyword" method="post">
           <td><input name="keyword" type="text"style="width:100%;border:none;"/></td>
            <td><input type="submit"style="width:100%;border:none;" value="OK"/></td>
            </form>
        </tr>
        
    </tbody>

</table>

<!-- ___________________________________________________________________________ -->

 <!-- Show DATA -->

  




















 <!-- Show DATA -->

    <table id="travel">
         <th scope="col" colspan="5">SHOW DATA</th>
        <tr align="center">
            <th scope="col">ID </th>
            <th scope="col">NAME</th>
            <th scope="col">AGE</th>
            <th scope="col" >E-MAIL</th>
            <th scope="col">TELEPHONE</th>
            
        </tr>      

    
    <?php
        foreach($users->result() as $users){
            echo '<tr>';
            echo '<td align="center">'.$users->id. '</td>';
            echo'<td>'.$users->name. '</td>';
            echo'<td align="center">'.$users->age. '</td>';
            echo'<td >'.$users->email. '</td>';
            echo'<td align="center" >'.$users->tel. '</td>';
            echo '</tr>';
        }
    ?>

<!-- ___________________________________________________________________________ -->







  
        
 

</table>


</body>
</html>