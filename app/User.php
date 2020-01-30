<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 08:58
 */
namespace OOP;

class User
{
    private $name;
    private $email;
    private $phone;
    private $comment;

    public function __construct(string $name, string $email, string $phone)
    {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
    }

    public function show()
    {
        $data[] = $this->name;
        $data[] = $this->email;
        $data[] = $this->phone;
        $data[] = $this->comment;
        return $data;
    }

    public function addComment(string $comment)
    {
        if (strlen($comment) < 4) {
            echo "Comment is too short";
        }
        $this->comment = $comment;
    }
}
