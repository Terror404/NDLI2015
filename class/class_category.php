<?php

class Category
{

    private $name;

    private $description;

    private $picture;

    public function create()
    {

        $pdo =  new PDO('mysql:host=109.11.48.39;dbname=BIND_DB, root, rootMySQLItendstonight');

        $sql = 'INSERT INTO CATEGORY(name, description, picture) VALUES(:name, :description, :picture);';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        $sth->execute(array(':name' => $this->name,
                            ':description' => $this->descritption,
                            ':picture' => $this->picture));

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
     * Gets the value of description.
     *
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the value of description.
     *
     * @param mixed $description the description
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Gets the value of picture.
     *
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets the value of picture.
     *
     * @param mixed $picture the date event
     *
     * @return self
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

}