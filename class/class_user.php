<?php

class User
{

    private $name;

    private $mail;

    private $photo;

    private $role;

    public function create()
    {

        $pdo =  new PDO('mysql:host=109.11.48.39;dbname=BIND_DB, root, rootMySQLItendstonight');

        $sql = 'INSERT INTO DISASTER(name, mail, photo, role) VALUES(:name, :mail, :photo, :role);';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        $sth->execute(array(':name' => $this->name,
                            ':mail' => $this->mail,
                            ':photo' => $this->photo,
                            ':role' => $this->role));

    }

    /**
     * Gets the value of name.
     *
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the value of name.
     *
     * @param mixed $name the name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Gets the value of mail.
     *
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Sets the value of mail.
     *
     * @param mixed $mail the mail
     *
     * @return self
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Gets the value of photo.
     *
     * @return mixed
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Sets the value of photo.
     *
     * @param mixed $photo the date event
     *
     * @return self
     */
    public function setDateEvent($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Gets the value of role.
     *
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets the value of role.
     *
     * @param mixed $role the role
     *
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}

