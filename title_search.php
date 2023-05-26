<?php include "head_nav.php" ;


// if find button pushed...
if(isset($_POST['find_title']))

{

//retrieves title and sanitizes it.
$title=test_input(mysqli_real_escape_string($dbconnect,$_POST['title']));

$showall_sql="SELECT * FROM `movie_reviews` WHERE `Title` LIKE 
'%$title%' ORDER BY `Title` ASC ";
$showall_query=mysqli_query($dbconnect, $showall_sql);
$showall_rs=mysqli_fetch_assoc($showall_query);
$count=mysqli_num_rows($showall_query);

?>

<div class="box main">

    <h2>Title Search</h2>

    <?php

        if ($count<1)

        {
           
        ?>

        <div class="error">
            Sorry! There are no results that match your search.
            Please use the search box in the sidebar to try again.

    </div>

    <?php

    } // end count 'if'

    //if there are any results, output an error
    else {

        do {
        
    ?>

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

        

    </div> 

    <br />

    <?php

                } // end of 'do'

                while($showall_rs=mysqli_fetch_assoc($showall_query));

            } // end 'else'

        } // end 'isset'

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