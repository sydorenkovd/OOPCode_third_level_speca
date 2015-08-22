<?php
// class Member {
 
//   public $username = "";
//   private $loggedIn = false;
 
//   public function login() {
//     $this->loggedIn = true;
//   }
 
//   public function logout() {
//     $this->loggedIn = false;
//   }
 
//   public function isLoggedIn() {
//     return $this->loggedIn;
//   }
// }
 
// class Administrator extends Member {
 
//   public function createForum( $forumName ) {
//     echo "$this->username created a new forum: $forumName<br>";
//   }
 
//   public function banMember( $member ) {
//     echo "$this->username banned the member: $member->username<br>";
//   }
 
// }
// $aMember = new Member();
// $aMember->username = "Vasya";
// $aAdmin = new Administrator();
// $aAdmin->username = "Admin";
// $aAdmin->createForum("SuperPuperForum");
// $aAdmin->banMember($aMember);
// создаем участника форума и логиним его
// $aMember = new Member();
// $aMember->username = "Fred";
// $aMember->login();
// echo $aMember->username . " is " . ( $aMember->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
 
// // создаем администратора и логиним его
// $admin = new Administrator();
// $admin->username = "sydorenkovd";
// $admin->login();
// echo $admin->username . " is " . ( $aMember->isLoggedIn() ? "logged in" : "logged out" ) . "<br>";
 
// // отобразит "Mary created a new forum: Teddy Bears"
// $admin->createForum( "Iron Metal" );
 
// // отобразит "Mary banned the member: Fred"
// $admin->banMember( $aMember );
//========================================
// class Member {
 
//   public $username = "";
//   private $loggedIn = false;
 
//   public function login() {
//     $this->loggedIn = true;
//   }
   
//   public function logout() {
//     $this->loggedIn = false;
//   }
// }
 
// class Administrator extends Member {
 
//   public function login() {
//     $this->loggedIn = true;
//     echo "Log entry: $this->username logged in<br>";
//   }
 
// }
 
// // создаем нового пользователя и логиним его
// $member = new Member();
// $member->username = "Fred";
// $member->login();
// $member->logout();
 
// // создаем нового администратора и логиним его
// $admin = new Administrator();
// $admin->username = "Mary";
// $admin->login();         // отобразит "Log entry: Mary logged in"
// $admin->logout();
//===================================
// abstract class Person{
// 	abstract function showWelcomeMessage();
// }
// class Member extends Person {
 
//   public function showWelcomeMessage() {
//     echo "Hi " . $this->getName() . ", welcome to the forums!<br>";
//   }
 
//   public function newTopic( $subject ) {
//     echo "Creating new topic: $subject<br>";
//   }
// }
 
// class Shopper extends Person {
 
//   public function showWelcomeMessage() {
//     echo "Hi " . $this->getName() . ", welcome to our online store!<br>";
//   }
 
//   public function addToCart( $item ) {
//     echo "Adding $item to cart<br>";
//   }
// }
// $aMember = new Member();
// $aMember->setName( "John", "Smith" );
// $aMember->showWelcomeMessage();
// $aMember->newTopic( "Teddy bears are great" );
 
// $aShopper = new Shopper();
// $aShopper->setName( "Mary", "Jones" );
// $aShopper->showWelcomeMessage();
// $aShopper->addToCart( "Ornate Table Lamp" );
//=====================================
class Topic implements Persistable {
  
  private $subject;
  private $author;
  private $createdTime;
  
  public function __construct( $subject, $author ) {
    $this->subject = $subject;
    $this->author = $author;
    $this->createdTime = time();
  }
    
  public function showHeader() {
    $createdTimeString = date( 'l jS M Y h:i:s A', $this->createdTime );
    $authorName = $this->author->getUsername();
    echo "$this->subject (created on $createdTimeString by $authorName)<br>";
  }
 
  public function save() {
    echo "Saving topic to database<br>";
  }
 
  public function load() {
    echo "Loading topic from database<br>";
  }
 
  public function delete () {
    echo "Deleting topic from database<br>";
  }
 
}