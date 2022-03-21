<!DOCTYPE html>
<html lang="en">
    <head>
        
        <?php include "inc/head_styles.php" ?>
        <title>question-2</title>
    </head>
    <body>
            
              
            <?php include 'inc/menu.php';?>
            <?php include 'inc/data-collector.php';?>
                
                
            
        <form action="question-5.php" method="post" onsubmit="return validateCheckboxes();">       
            <div class="container-fluid  bg-warning text-center text-dark">
                <div class="container pt-3 col-12">
                    <h5>Frage 4</h5>
                    <h3>Welche zusätzliche körperliche Aktivität betreibst du am meisten?</h3>

                    <p class="spacer"></p>

                </div>

            </div>




            <div class="container-fluid bg-primary text-center text-warning">
                <div class="container pt-3 col-12">

                    
                        <input type="checkbox" value="Gewichte heben" id="act1" name="act1" onChange="saveSelection(this)"> Gewichte heben
                        <input type="checkbox" value="Kampfsport" id="act2" name="act2" onChange="saveSelection(this)"> Kampfsport 
                        <input type="checkbox" value="Wandern" id="act3" name="act3" onChange="saveSelection(this)"> Wandern 
                        <input type="checkbox" value="Joggen" id="act4" name="act4" onChange="saveSelection(this)"> Joggen<br>
                        <input type="checkbox" value="Rennen" id="act5" name="act5" onChange="saveSelection(this)"> Rennen
                        <input type="checkbox" value="Schwimmen" id="act6" name="act6" onChange="saveSelection(this)"> Schwimmen
                        <input type="checkbox" value="Tanzen" id="act7" name="act7" onChange="saveSelection(this)"> Tanzen
                        <input type="checkbox" value="Pilates " id="act8" name="act8" onChange="saveSelection(this)"> Pilates 
                        <input type="checkbox" value="Team Sport" id="act9" name="act9" onChange="saveSelection(this)"> Team Sport
                        <input type="checkbox" value="Aerobics" id="act10" name="act10" onChange="saveSelection(this)"> Aerobics
                        <input type="checkbox" value="Spazieren" id="act11" name="act11" onChange="saveSelection(this)"> Spazieren
                        <br>

                        Anderes: 
                        <input type="checkbox" value="Freitext" id="act12" name="act12" onChange="saveSelection(this)"> 
                        <br> 
                        Andere Aktivitäten:<input size="60" id="freetext" name="Freetext" onChange="saveSelection(this)"> 
                        <hr>                     

                </div>
                        <input type="hidden" name="lastPageID" value="question-4">
                        <input type="hidden" name="checkboxValues" id="checkboxValues">
                        <p id="validation-warning" class="warning"></p>
                        <input type="reset" value="Zurücksetzen"><br><br>
                        <a class="btn btn-warning" href="question-3.php" role="button">❮ Zurück</a>
                        <input class="btn btn-warning" type="submit" value="Weiter ❯">
                        <p class="spacer"></p>
                
            </div>
                
        </form>


    </body>                     
        <?php include 'inc/footer.php';?>  
</html> 