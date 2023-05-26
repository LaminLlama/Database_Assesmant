<div class="box side">
            <h3>Search | <a class="side" href="show_all.php" style="color:light_grey">Show All</a></h3>

            <i>Type part of the title / series name and then search</i>

            <hr />     


            <!-- Start of Title Search -->
            
            <form method="post" action="title_search.php" enctype="multipart/form-data"> 

                <input class="search" type="text" name="title" size="40" value="" required placeholder="Title..." />

                <input class="submit" type="submit" name="find_title" value="&#xf002" />

            </form>

            <!-- End of Title Search -->

            
            <!-- Start of series Search -->
            
            <form method="post" action="series_search.php" enctype="multipart/form-data"> 

                <input class="search" type="text" name="series" size="40" value="" required placeholder="Series..." />

                <input class="submit" type="submit" name="find_series" value="&#xf002" />

            </form>

            <!-- End of series Search -->

                <hr />

                <i>
                    Use the dropdown menus to search by genre or rating
                <i>

                <hr />


             <!-- Start of genre Search -->
            
            <form class="search" method="post" action="genre_search.php" enctype="multipart/form-data"> 

                <select class="genre" name="genre" required>
                    <option value="" disabled selected>Genre...</option>
                    <option value="Superhero">Superhero</option>
                    <option value="Comedy">Comedy</option>
                    <option value="Fantasy">Fantasy</option>
                    <option value="Drama">Drama</option>
                </select>

                <input class="submit" type="submit" name="find_genre" value="&#xf002" />


            </form>

            <!-- End of genre Search -->

            <hr />

            <!-- Start of rating form -->
            
            <form method="post" action="rating_search.php" enctype="multipart/form-data"> 

                <select class="half_width" name="amount">
                    <option value="exactly" selected>Exactly...</option>
                    <option value="more">At least...</option>
                    <option value="less">At most...</option>
                </select>

                <select class="half_width" name="stars">
                    <option value=1 selected>&#128077;</option>
                    <option value=2>&#128077;&#128077;</option>
                    <option value=3>&#128077;&#128077;&#128077;</option>
                    <option value=4>&#128077;&#128077;&#128077;&#128077;</option>
                    <option value=5>&#128077;&#128077;&#128077;&#128077;&#128077;</option>
                </select>

                <input class="submit" type="submit" name="find_rating" value="&#xf002" />

            <!-- end of rating form -->
</div>

<div class="box footer">
    Database Assesment 2023
</div>
        </div> <!-- / side bar -->
</body>
</html>
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