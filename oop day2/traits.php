<?php



trait media {
    public function uploadPhoto()
    {
        echo "upload";
    }
    public function deletePhoto()
    {
        echo "delete";
    }
}

trait operations {
    public function insertData()
    {
        echo "insert";
    }
    public function deleteData()
    {
        echo "delete";
    }
}

trait x {
    public function x()
    {
       echo 'x';
    }
}

trait generalTrait {
    use media , operations , x;
}

class user1 {
    use generalTrait;
    
}

class admin {
    use generalTrait;
}

class product {
    use generalTrait;
}

$user = new user1;

$user->insertData();