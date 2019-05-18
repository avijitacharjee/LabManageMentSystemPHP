<?php
include_once 'connect.php';

class user {

    public $name;


    public $db;
    public $loggedIn=false;
    public function __construct() {
        $this->db=new connect();
        $this->db=$this->db->dbConnect();
    }

    public function login($uname,$pass)
    {
        if(!empty($uname)&&!empty($pass))
            {
                $st= $this->db->prepare("select * from admin where email=? and pass =?");
                $st->bindParam(1,$uname);
                $st->bindParam(2,$pass);

                $st->execute();





                if($st->rowCount()!=0)
                    {
                        $loggedIn=true;
                        echo 'Logged In';
                        $result=$st->fetchAll();
                        $index="Location:../php/admin/index.php";
                        header($index);
                       // print_r([$result);
                    }
                else
                    {
                      $st= $this->db->prepare("select * from students where email=? and pass =?");
                      $st->bindParam(1,$uname);
                      $st->bindParam(2,$pass);

                      $st->execute();





                      if($st->rowCount()!=0)
                          {
                              $loggedIn=true;
                              echo 'Logged In';
                              $result=$st->fetchAll();
                              $index="Location: ../index.php";
                              header($index);
                             // print_r([$result);
                          }

                    }
            }
    }
    public function register($name,$email,$pass)
        {
          $result=0;

            if(true)
                {
                  echo "hello";
                $st= $this->db->prepare("insert into students values(?,?,?,?,?);");
                $st->bindParam(1,$email);
                $st->bindParam(2,$name);
                $st->bindParam(3,$email);
                $st->bindParam(4,$pass);
                $st->bindParam(5,$result);

                echo "Hi";
                $st->execute();
                echo "done";
                }
        }

        public function addTeacher($name,$email,$pass,$mobileno)
        {
          if(!empty($name)&&!empty($email)&&!empty($pass)&&!empty($mobileno))
              {
              $st= $this->db->prepare("insert into teachers(t_id,name,email,pass,phoneno) values('$email','$name','$email','$pass','$mobileno');");


              $st->execute();
              }

        }

}
