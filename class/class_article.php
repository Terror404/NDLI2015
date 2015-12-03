<?php


class Article
{

    private $title;

    private $content;

    private $idAuthor;

    private $idDisaster;
    
    private $dateCreation;

    public function create()
    {

        $pdo =  new PDO('mysql:host=109.11.48.39;dbname=BIND_DB, root, rootMySQLItendstonight');

        $sql = 'INSERT INTO ARTICLE(title, content,idAuthor, idDisaster, dateCreation) VALUES(:title, :content, :idAuthor, :idDisaster, :dateCreation);';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        $sth->execute(array(':title' => $this->title,
                            ':content' => $this->content,
                            ':idAuthor' => $this->idAuthor,
                            ':idDisaster' => $this->Disaster,
                            ':dateCreation' => $this->dateCreation));

    }

    /**
     * Gets the value of title.
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the value of title.
     *
     * @param mixed $title the title
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Gets the value of content.
     *
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Sets the value of content.
     *
     * @param mixed $content the content
     *
     * @return self
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Gets the value of date_creation.
     *
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * Sets the value of date_creation.
     *
     * @param mixed $date_creation the date creation
     *
     * @return self
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    /**
     * Gets the value of idAuthor.
     *
     * @return mixed
     */
    public function getIdAuthor()
    {
        return $this->idAuthor;
    }

    /**
     * Sets the value of idAuthor.
     *
     * @param mixed $idAuthor the idAuthor
     *
     * @return self
     */
    public function setIdAuthor($idAuthor)
    {
        $this->idAuthor = $idAuthor;

        return $this;
    }
    /**
     * Gets the value of idAuthor.
     *
     * @return mixed
     */
    public function getIdDisaster()
    {
        return $this->idDisaster;
    }

    /**
     * Sets the value of idDisaster.
     *
     * @param mixed $idDisaster the idDisaster
     *
     * @return self
     */
    public function setIdDisaster($idDisaster)
    {
        $this->idDisaster = $idDisaster;

        return $this;
    }
}

