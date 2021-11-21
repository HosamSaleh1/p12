<?php

class RegisterRequest {
    private $email;
    private $password;
    private $confirmPassword;


    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of confirmPassword
     */ 
    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }

    /**
     * Set the value of confirmPassword
     *
     * @return  self
     */ 
    public function setConfirmPassword($confirmPassword)
    {
        $this->confirmPassword = $confirmPassword;

        return $this;
    }

    public function emailValidation()
    {
        
        $errors = [];
        $pattern = "/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/";
        // required
        if(empty($this->email)){
            $errors['email-required'] = "<div class='alert alert-danger'> Email Is Required </div>";
        }else{
            // check on regex
            // pattern = rules => @ , .com
            // string => email => galal@galal
            // func => 
            if(!preg_match($pattern,$this->email)){
                $errors['email-regex'] = "<div class='alert alert-danger'> Wrong Email format</div>";
            }
        }
        return $errors;
        // [] => no errors
        // array has values => errors
    }

    public function passwordValidation()
    {
        $errors = [];
        $pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/";
        // required
        if(empty($this->password)){
            $errors['password-required'] = "<div class='alert alert-danger'> Password Is Required </div>";
        }
        if(empty($this->confirmPassword)){
            $errors['confirm_password-required'] = "<div class='alert alert-danger'> Confirm Password Is Required </div>";
        }
        if(empty($errors)){
            // password = confrim
            if($this->password != $this->confirmPassword){
                $errors['password-confirm'] = "<div class='alert alert-danger'> Password Not Confirmed </div>";
            }else{
                // password regex
                if(!preg_match($pattern,$this->password)){
                    $errors['password-regex'] = "<div class='alert alert-danger'>  Minimum eight and maximum 20 characters, at least one uppercase letter, one lowercase letter, one number and one special character: </div>";
                }
            }
        }
        return $errors;
    }

}


