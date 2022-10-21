<?php
class factory{
    public function getInputText($id, $text, $name, $type, $return, $returnErr){
        echo '<p>
            <label for="'.$id.'">'.$text.'<sup>*</sup></label>
            <input type="'.$type.'" name="'.$name.'" id="'.$id.'" value="<?php echo '.$return.'; ?>">
            <span class="error"><?php echo '.$returnErrErr.'; ?></span>
        </p>';
    }
    public function getInputSubmit(){
        echo '<input type="submit"/><br>';
    }
    public function getList(){
        echo '';
    }
}
?>