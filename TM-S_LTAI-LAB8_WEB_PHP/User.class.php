<?php

class User
{
    const STATUS_USER = 1;
    const STATUS_ADMIN = 2;

    private $userName; // user_name
    private $passwordHash; // passwd
    private $fullName; // full_name
    private $emailAddress; // email
    private $creationDate;
    private $userStatus; // session_status

    function __construct($userName, $fullUserName, $emailAddress, $rawPassword)
    {
        $this->userName = $userName;
        $this->passwordHash = sha1($rawPassword); // hash('sha1', ...)
        $this->fullUserName = $fullUserName;
        $this->emailAddress = $emailAddress;
        $this->creationDate = new DateTime('now');
    }

    public function Show() 
    {
        printf('
        Pełna nazwa użytkownika: %s<br>
        Nazwa użytkownika: %s<br>
        Adres email: %s<br>
        Data utworzenia: %s<br>
        Hash hasła: %s
        ',
        $this->fullUserName,
        $this->userName,
        $this->emailAddress,
        $this->creationDate->format('d-m-Y H:i:s'),
        $this->passwordHash
        );
    }

    public static function CheckFormUser()
    {
        $args = [
            'userName' => FILTER_SANITIZE_STRING,
            'password' => FILTER_SANITIZE_STRING,
            'fullName' => FILTER_SANITIZE_STRING,
            'email' => FILTER_VALIDATE_EMAIL,       
        ];

        $form = filter_input_array(INPUT_POST, $args);

        if ($form == NULL || $form == false) return NULL;
        else return new User(
            $form['userName'],
            $form['fullName'],
            $form['email'],
            $form['password']);
    }
}