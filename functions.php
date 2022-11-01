<?php 
    // Multiple checkbox
    function isChecked($inputValue){
        if(isset($_POST['checkbox']) && is_array($_POST['checkbox']) && in_array($inputValue, $_POST['checkbox'])) {
            echo 'checked';
        }  
    }

    // Options
    function options($colors, $selectedColors) {
        foreach($colors as $color) {
            
            $color = strtolower($color);
            $selected = '';
            if(in_array($color, $selectedColors)) {
                $selected = 'selected';
            }

            printf("<option value='%s' %s>%s</option>", $color, $selected, ucwords($color));
        }
        
    }
?>