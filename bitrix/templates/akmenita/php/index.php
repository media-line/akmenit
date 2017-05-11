<?php

class Form
{
    public $name = null;
    public $phone = null;
    public $target = null;
    public $money = null;
    public $file = null;
    public $email = null;
    public $comment = null;


    public function SendMail($name, $phone, $target, $money)
    {
        $to = 'akravchenko@medialine.by';

        $subject = 'Форма обратной связи';

        $name = "ФИО - " . $this->name . "<br/>";
        $phone = "Телефон - " . $this->phone . "<br/>";
        $target = "Кому дарят - " . $this->target . "<br/>";
        $money = "Бюджет - " . $this->money . "<br/>";
        /*       $email = "E-mail - ".$this->email."<br/>";
               $comment= "Комментарий - ".$this->comment."<br/>";*/


        $message = $name . $phone . $target . $money;


        $headers = 'Content-Type: text/html';

        mail($to, $subject, $message, $headers);
    }
}