<?php

class Disaster
{

    private $ville;

    private $type;

    private $date_event;

    private $message;

    public function create()
    {
        $dsn = 'mysql:dbname=BIND_BD;host=localhost';
        $user = 'root';
        $password = '';

        $pdo = new PDO($dsn, $user, $password);
        
        $sql = 'INSERT INTO DISASTER(ville, type, date_event, message) VALUES(:ville, :type, :date_event, :message);';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        $sth->execute(array(':ville' => $this->ville,
                            ':type' => $this->type,
                            ':date_event' => $this->date_event,
                            ':message' => $this->message));

    }
    public function load(){
         $pdo =  new PDO('mysql:host=109.11.48.39;dbname=BIND_DB, root, rootMySQLItendstonight');
         $sql = 'SELECT * FROM DISASTER WHERE idDisaster;';
         $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

         
    }

    /**
     * Gets the value of ville.
     *
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Sets the value of ville.
     *
     * @param mixed $ville the ville
     *
     * @return self
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Gets the value of type.
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the value of type.
     *
     * @param mixed $type the type
     *
     * @return self
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Gets the value of date_event.
     *
     * @return mixed
     */
    public function getDateEvent()
    {
        return $this->date_event;
    }

    /**
     * Sets the value of date_event.
     *
     * @param mixed $date_event the date event
     *
     * @return self
     */
    public function setDateEvent($date_event)
    {
        $this->date_event = $date_event;

        return $this;
    }

    /**
     * Gets the value of message.
     *
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Sets the value of message.
     *
     * @param mixed $message the message
     *
     * @return self
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}