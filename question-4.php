<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php include "inc/head_styles.php" ?>
        <title>question-2</title>
    </head>
    <body>
            
              
            <?php include 'inc/menü.php';?>
            <?php include 'inc/data-collector.php';?>
                
                
            
        <form action="question-5.php" method="post" onsubmit="return validateQuestion('');">       
            <div class="container-fluid  bg-warning text-center text-dark">
                <div class="container col-12">
                    <h5>Frage 4</h5>
                    <h3>Welche zusätzliche körperliche Aktivität betreibst du am meisten?</h3>

                </div>

            </div>




            <div class="container-fluid bg-primary text-center text-warning">
                <div class="container pt-3 col-12">

                        <input type="checkbox" value="Keine zusätzliche körperliche Aktivität" name="Act1" onChange="saveSelection(this)"><p>Keine zusätzliche körperliche Aktivität</p>
                       
                        <input type="checkbox" value="Gewichte heben" name="Act2" onChange="saveSelection(this)"> Gewichte heben
                        <input type="checkbox" value="Kampfsport" name="Act3" onChange="saveSelection(this)"> Kampfsport 
                        <input type="checkbox" value="Wandern" name="Act4" onChange="saveSelection(this)"> Wandern 
                        <input type="checkbox" value="Joggen" name="Act5" onChange="saveSelection(this)"> Joggen<br>
                        <input type="checkbox" value="Rennen" name="Act6" onChange="saveSelection(this)"> Rennen
                        <input type="checkbox" value="Schwimmen" name="Act7" onChange="saveSelection(this)"> Schwimmen
                        <input type="checkbox" value="Tanzen" name="Act8" onChange="saveSelection(this)"> Tanzen
                        <input type="checkbox" value="Pilates " name="Act9" onChange="saveSelection(this)"> Pilates 
                        <input type="checkbox" value="Team Sport" name="Act10" onChange="saveSelection(this)"> Joggen
                        <input type="checkbox" value="Aerobics" name="Act11" onChange="saveSelection(this)"> Joggen
                        <input type="checkbox" value="Spazieren" name="Act12" onChange="saveSelection(this)"> Spazieren
                        <br>
                        Anderes: 
                        <input type="checkbox" value="Freitext" name="Act9" onChange="saveSelection(this)"> 
                        <br> 
                        Freitext:<input size="60" name="Freitext" onChange="saveSelection(this)"> 
                        <hr>                     

                </div>
                        <input type="hidden" name="lastPageID" value="question-4">
                        <p id="validation-warning" class="warning"></p>
                        <input type="reset" value="Zurücksetzen"><br><br>
                        <button type="submit" class="btn btn-warning">Weiter</button> 
                        <p class="spacer"></p>
                
            </div>
                
        </form>


    </body>                     
        <?php include 'inc/footer.php';?>  
</html> 