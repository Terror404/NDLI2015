<?php

class Question
{

    private $content;

    private $idCategory;

    public function create()
    {

        $pdo =  new PDO('mysql:host=109.11.48.39;dbname=BIND_DB, root, rootMySQLItendstonight');

        $sql = 'INSERT INTO QUESTION(content, idCategory) VALUES(:content, :idCategory);';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        $sth->execute(array(':content' => $this->content,
                            ':idCategory' => $this->idCategory));

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
     * Gets the value of idCategory.
     *
     * @return mixed
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * Sets the value of idCategory.
     *
     * @param mixed $idCategory the idCategory
     *
     * @return self
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;

        return $this;
    }
}
