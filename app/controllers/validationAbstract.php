<!-- //validationAbstract.php -->

<?php


abstract class ValidateAbstract {

    /**
     * required
     * 
     * @param mixed $value
     * @return boolean
     */
    protected function required($value) {
        $val = trim($value);
        return (empty($val)) ? 0 : 1;
    }

    /**
     * numeric
     * 
     * @param int $value
     * @return boolean
     */
    protected function numeric($value) {
        return !(empty($value)) ? (preg_match("/^([0-9]*)$/", $value)) ? 1 : 0 : 0;
    }

    /**
     * email
     * 
     * @param mixed $value
     * @return boolean
     */
    protected function email($value) {
        return !(empty($value)) ? (filter_var($value, FILTER_VALIDATE_EMAIL)) ? 1 : 0 : 0;
    }

    /**
     * alphabetic
     * 
     * @param mixed $value
     * @return boolean
     */
    protected function alphabetic($value) {
        return !(empty($value)) ? (preg_match("/^[a-zA-Z ]*$/", $value)) ? 1 : 0 : 0;
    }

    /**
     * alphanumeric
     * 
     * @param mixed $value
     * @return boolean
     */
    protected function alphanumeric($value) {
        return !(empty($value)) ? (preg_match("/^[-_a-zA-Z0-9. ]*$/", $value)) ? 1 : 0 : 0;
    }

    /**
     * url
     * 
     * @param mixed $value
     * @return boolean
     */
    protected function url($value) {
        return !(empty($value)) ? (filter_var($value, FILTER_VALIDATE_URL)) ? 1 : 0 : 0;
    }

    /**
     * phone
     * 
     * @param int $value
     * @return boolean
     */
    protected function phone($value) {
        return !(empty($value)) ? (preg_match("/^\+?[0-9\-]+\*?$/", $value)) ? 1 : 0 : 0;
    }

    /**
     * date
     * 
     * @param date $value
     * @return boolean
     */
    protected function date($value) {
        $val = date("Y-m-d", strtotime($value));
        return ($val == "1970-01-01" || $val == "0000-00-00") ? 0 : 1;
    }

    /**
     * equalTo
     * 
     * @param mixed $value1
     * @param mixed $value2
     * @return boolean
     */
    protected function equalTo($value1, $value2) {
        return !(empty($value1)) ? ($value1 == $value2) ? 1 : 0 : 0;
    }

    /**
     * min_length
     * 
     * @param int $value1
     * @param int $value2
     * @return boolean
     */
    protected function min_length($value1, $value2) {
        return !(empty($value1)) ? (strlen($value1) <= $value2) ? 1 : 0 : 0;
    }

    /**
     * max_length
     * 
     * @param int $value1
     * @param int $value2
     * @return boolean
     */
    protected function max_length($value1, $value2) {
        return !(empty($value1)) ? (strlen($value1) >= $value2) ? 1 : 0 : 0;
    }

}
?>