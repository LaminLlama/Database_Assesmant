<?php include "head_nav.php" ;

$showall_sql="SELECT * FROM `book_reviews` WHERE `Title` LIKE '%hitch%' ORDER BY `Title` ASC ";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);

?>

<div class="box main">

    <h2>Title Search</h2>

    <?php

        if ($count <1)
        {}
           
        ?>
    <!-- Results go here -->
    <div class="results">

        <p>Title: <span class="sub_heading"><?php echo $showall_rs['Title']; ?></span></p>

        <p>Author: <span class="sub_heading"><?php echo $showall_rs['Author']; ?></span></p>

        <p>Genre: <span class="sub_heading"><?php echo $showall_rs['Genre']; ?></span></p>

        <p>Rating: <span class="sub_heading">
                    <?php
                    for ($x=0; $x < $showall_rs['Rating']; $x++)
                    {
                        echo "&#128077;";
                    }

                    ?>

                    </span></p>

        <p><span class="sub_heading">Review / Responce</span></p>

                    <p><?php echo $showall_rs['Review']; ?></p>

        

    </div> <!-- / results -->

    <br />

    <br/>

    <?php

                {
                while($showall_rs=mysqli_fetch_assoc($showall_query));

            }

    ?>

</div> <!-- / main -->

<?php include "bottom_bit.php" ; ?>