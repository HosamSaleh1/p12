<?php

class data {
    private $secureData;
    public function getSecureData()
    {
        return sha1($this->secureData);
    }
    public function setSecureData($secureData)
    {
        if(!is_string($secureData)){
            echo "error";die;
        }
       $this->secureData = $secureData;
    }
}

// $data = new data;
// $data->setSecureData('galal');
// echo $data->getSecureData();

// set gender => [m,f]
// get gender =>[male,female]

class user {
    private $gender;

    public function getGender()
    {
        if($this->gender == 'm'){
            $this->gender = 'male';
        }else{
            $this->gender = 'female';
        }

        return $this->gender;
    }

    public function setGender($gender)
    {
        $availableGenders = ['m','f'];
        if(!in_array($gender,$availableGenders)){
            echo "available genders is :". implode(',',$availableGenders);die;
        }
        $this->gender = $gender;
    }
}

// $user1 = new user;
// $user1->setGender('m');
// echo $user1->getGender();
// $user1->setGender('f');
// echo $user1->getGender();


class empolyee {
    private $name;
    private $age;
    private $email;
    private $password;
    private $phone;
    private $partion;

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

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
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set the value of phone
     *
     * @return  self
     */ 
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get the value of partion
     */ 
    public function getPartion()
    {
        return $this->partion;
    }

    /**
     * Set the value of partion
     *
     * @return  self
     */ 
    public function setPartion($partion)
    {
        $this->partion = $partion;

        return $this;
    }
}