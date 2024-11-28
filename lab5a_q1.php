<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <title>Lab 5a Q1</title> 
    </head> 
    <body> 
        <?php  
            $name = "Che Azfar Syakirin Bin Cik Anuar"; 
            $matricNumber  = "CI230095"; 
            $course = "BIW"; 
            $yearOfStudy = "3.5 years"; 
            $address = "No.14 Jalan Permai 2 Taman Permai, 86400 Parit Raja, Johor Darul Takzim"; 
        ?> 
        <table> 
            <tr> 
                <td>Name</td> 
                <td><?php echo ": $name"; ?></td>
            </tr>
            <tr> 
                <td>Matric Number</td> 
                <td><?php echo ": $matricNumber"; ?></td>
            </tr> 
            <tr> 
                <td>Course</td> 
                <td><?php echo ": $course"; ?></td>
            </tr> 
            <tr> 
                <td>Year of Study</td> 
                <td><?php echo ": $yearOfStudy"; ?></td>
            </tr> 
            <tr> 
                <td>Address</td> 
                <td><?php echo ": $address"; ?></td>
            </tr> 
        </table> 
    </body> 
</html>