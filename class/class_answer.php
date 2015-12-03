<?php

class Answer
{

    private $content;

    private $idQuestion;
    
    private $idAuthor;

    public function create()
    {

        $pdo =  new PDO('mysql:host=109.11.48.39;dbname=BIND_DB, root, rootMySQLItendstonight');

        $sql = 'INSERT INTO ANSWER(content, idQuestion, idAuthor) VALUES(:content, :idQuestion, :idAuthor);';
        $sth = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));

        $sth->execute(array(':content' => $this->content,
                            ':idQuestion' => $this->idQuestion,
                            ':idAuthor' => $this->idAuthor));

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
     * Gets the value of idQuestion.
     *
     * @return mixed
     */
    public function getIdQuestion()
    {
        return $this->idQuestion;
    }

    /**
     * Sets the value of idQuestion.
     *
     * @param mixed $idQuestion the idQuestion
     *
     * @return self
     */
    public function setIdQuestion($idQuestion)
    {
        $this->idQuestion = $idQuestion;

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
     * @param mixed $idQuestion the idAuthor
     *
     * @return self
     */
    public function setIdAuthor($idAuthor)
    {
        $this->idAuthor = $idAuthor;

        return $this;
    }
}