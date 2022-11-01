<?php
    require_once "functions.php";
    // User input name
    $name = '';

    if(isset($_POST['name'])) {
        $name = htmlspecialchars($_POST['name']);
    }

    // Single check box
    $checkbox = '';

    if(isset($_POST['cb'])) {
        $checkbox = "checked";
    }

    // Multiple option
    $colors = array('red', 'Green', 'blue', 'Yellow');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Input data retainig</title>

    <!-- milligram css style link -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">

    <!-- custom css style -->
    <style>

        body {
            margin: 50px;
        }
        h2 {
            text-align: center;
            margin-bottom: 50px;
        }

    </style>
</head>
<body>
    <!-- main section start -->
    <div class="container">
        <div class="row">
            <div class="column column-50 column-offset-20">
                <h2>PHP Input data retaining</h2>
                <form action="" method="POST">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="<?php echo $name ?>">

                    <label for="">Single checkbox data retain</label>
                    <input type="checkbox" name="cb" id="cb" <?php echo $checkbox ?>>
                    <label class="label-inline" for="cb">Checkbox sample</label>

                    <label for="">Multiple checkbox data retain</label>
                    <input type="checkbox" name="checkbox[]" id="checkbox" value="checkbox1" <?php isChecked('checkbox1') ?>>
                    <label class="label-inline" for="checkbox">Checkbox sample 1</label></br>
                    <input type="checkbox" name="checkbox[]" id="checkbox" value="checkbox2" <?php isChecked('checkbox2') ?>>
                    <label class="label-inline" for="checkbox">Checkbox sample 2</label></br>
                    <input type="checkbox" name="checkbox[]" id="checkbox" value="checkbox3" <?php isChecked('checkbox3') ?>>
                    <label class="label-inline" for="checkbox">Checkbox sample 3</label>
                    <!-- submited data-->
                    <?php $selectedColors = $_POST['scolors'] ?? array(); ?>
                    
                    <label for="">Multiple option data retaining</label>
                    <select name='scolors[]' multiple>
                        <option value="" disabled selected>Select some colors</option>
                        <?php 
                            
                            options($colors, $selectedColors); 
                            
                        ?>
                    </select>
                    
                    <input type="submit" value="submit">
                </form>
            </div>
        </div>
    </div>
    <!-- main section end -->
</body>
</html>