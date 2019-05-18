<?php
/**
 * Description of connect
 *
 * @author Avijit
 */
class connect {
    public function dbConnect()
    {
        return new PDO("mysql:host=localhost; dbname=lab management","root","");
    }
}
