<?php
   include "header.php";
 ?>

        <form method="POST" action="contactFormResponse.php" id="form">
            
            <h1> Contact Us </h1>
            <table>
                <tr>
                    <td><label for="fname">First name:</label></td>
                    <td><input type="text" id="fname" name="fname" placeholder="John" required></td>
                </tr>
                
                <tr>
                    <td><label for="lname">Last name:</label></td>
                    <td><input type="text" id="lname" name="lname" placeholder="Doe" required></td>
                </tr>
                
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="text" id="email" name="email" placeholder="johndoe@example.com" required>
            </td>
                </tr>
                
            </table>
  
            <label for="comments">Questions or comments: </label><br><br> 
            <textarea name="comments" rows="10" cols="70"required> </textarea><br><br>
            
            <input type="checkbox" id="notifications" name="notifictions" checked>
            <label for="notifications">I would like to receive notifications</label><br>

             <br>
            <input type="submit" value="Submit" id="submit">

        </form> 
<?php
   include "footer.php";
 ?>