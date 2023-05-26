<?php include "head_nav.php" ;

$showall_sql="SELECT * FROM `movie_reviews` ORDER BY `movie_reviews`.`Title` ASC";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);

?>

<div class="box main">

    <h2>All Items</h2>

    <?php

        if ($count <1)
        {
            ?>
            <div class="error">
            No results match for that search.
            Use the search box to try again.
            </div>

            <?php
        }

        else {
                do {

        ?>
        
    <!-- Results go here -->
    <div class="results">

        <p>Title: <span class="sub_heading"><?php echo $showall_rs['Title']; ?></span></p>

        <p>Series: <span class="sub_heading"><?php echo $showall_rs['Series']; ?></span></p>

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

                }
                while($showall_rs=mysqli_fetch_assoc($showall_query));

            }

    ?>

</div> <!-- / main -->

<?php include "bottom_bit.php" ; ?>
<!--
_________  _______   ___  ___       ___           ___    ___
|\   __  \|\  ___ \ |\  \|\  \     |\  \         |\  \  /  /|
\ \  \|\  \ \   __/|\ \  \ \  \    \ \  \        \ \  \/  / /
 \ \   _  _\ \  \_|/_\ \  \ \  \    \ \  \        \ \    / / 
  \ \  \\  \\ \  \_|\ \ \  \ \  \____\ \  \____    \/  /  /  
   \ \__\\ _\\ \_______\ \__\ \_______\ \_______\__/  / /    
    \|__|\|__|\|_______|\|__|\|_______|\|_______|\___/ /     
                                                \|___|/      
                                                             
-->