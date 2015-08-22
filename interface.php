<?php
// class MyClass {
//  public function __construct() {
//    echo "I've just been created!<br>";
//  }
// }

// $randObj = new MyClass();
// $myObject = new MyClass();  // отобразит "I've just been created!"
//=======================================
// class Member {

//  private $username;
//  private $location;
//  private $homepage;

//  public function __construct( $username, $location, $homepage ) {
//    $this->username = $username;
//    $this->location = $location;
//    $this->homepage = $homepage;
//  }
  
//  public function showProfile() {
//    echo "<dl>";
//    echo "<dt>Username:</dt><dd>$this->username</dd>";
//    echo "<dt>Location:</dt><dd>$this->location</dd>";
//    echo "<dt>Homepage:</dt><dd>$this->homepage</dd>";
//    echo "</dl>";
//  }
// }

// $aMember = new Member( "fred", "Chicago", "http://example.com/" );
// $aMember->showProfile();
// $bMember = new Member("Viktor", "Kyev", "http://sydorenkovd.at.ua");
// $bMember->showProfile();
//=======================================
// class MyClass {
//  public function __destruct() {
//    echo "I'm about to disappear - bye bye!";
//    // (очистить память)
//  }
// }

// $myObject = new MyClass(); 
// exit;    // отобразит "I'm about to disappear - bye bye!"

// class Member {

//  private $username;
//  public static $numMembers = 0;

//  public function __construct( $username ) {
//    $this->username = $username;
//    self::$numMembers++;
//  }
// }

// echo Member::$numMembers . "<br>";  // отобразит "0"
// $aMember = new Member( "fred" );
// echo Member::$numMembers . "<br>";  // отобразит "1"
// $anotherMember = new Member( "mary" );
// echo Member::$numMembers . "<br>";  // отобразит "2"
// $thirdMember = new Member("Kate");
// echo Member::$numMembers . "<br>";
// $thirdMember = new Member("John");
// echo Member::$numMembers . "<br>";
// echo $thirdMember->username; 
// Частное поле, длступно только внутри класса,
// protected жоступно внутри класа и внутри классов наследников
//this - ссылается на текущий обьект, тогда как SELF ссылается на текущий класс
//Чтобы получить доступ к статискому полю класса применяется оператор '::'
//================================================
// class Member {

//  private $username;
//  private static $numMembers = 0;

//  public function __construct( $username ) {
//    $this->username = $username;
//    self::$numMembers++;
//  }

//  public static function getNumMembers() {
//    return self::$numMembers;
//  }
// }

// echo Member::getNumMembers() . "<br>";  // отобразит "0"
// $aMember = new Member( "fred" );
// echo Member::getNumMembers() . "<br>";  // отобразит "1"
// $anotherMember = new Member( "mary" );
// echo Member::getNumMembers() . "<br>";  // отобразит "2"
// Можно вызывать статические методы без создания обьекта класса
//=================================================
// class MyClass {
//  const CONSTANT_NAME = "value";
// }
// echo Myclass::CONSTANT_NAME;
//=================================================
// class Member {

//  const MEMBER = 1;
//  const MODERATOR = 2;
//  const ADMINISTRATOR = 3;

//  private $username;
//  private $level;

//  public function __construct( $username, $level ) {
//    $this->username = $username;
//    $this->level = $level;
//  }

//  public function getUsername() {
//    return $this->username;
//  }

//  public function getLevel() {
//    if ( $this->level == self::MEMBER ) return "a member";
//    if ( $this->level == self::MODERATOR ) return "a moderator";
//    if ( $this->level == self::ADMINISTRATOR ) return "an administrator";
//    return "unknown";
//  }
// }

// $aMember = new Member( "fred", Member::MEMBER );
// $anotherMember = new Member( "mary", Member::ADMINISTRATOR );
// echo $aMember->getUsername() . " is " . $aMember->getLevel() . "<br>";  // отобразит "fred is a member"
// echo $anotherMember->getUsername() . " is " . $anotherMember->getLevel() . "<br>";
//====================================================================
// class Member {

//  private $username;

//  public function __construct( $username ) {
//    $this->username = $username;
//  }

//  public function getUsername() {
//    return $this->username;
//  }
// }

// class Topic {

//  private $member;
//  private $subject;

//  public function __construct( Member $member, $subject ) {
//    $this->member = $member;
//    $this->subject = $subject;
//  }

//  public function getUsername() {
//    return $this->member->getUsername();
//  }
// }

// $aMember = new Member( "fred" );
// $aTopic = new Topic( $aMember, "Hello everybody!" );
// echo $aTopic->getUsername(); // отобразит "fred"


// class Widget {

//  private $colour;

//  public function __construct( $colour ) {
//    $this->colour = $colour;
//  }

//  public function getColour() {
//    return $this->colour;
//  }
// }


// $aWidget = new Widget( "blue" );
// $anotherTopic = new Topic( $aWidget, "Oops!" );

// отобразит "Fatal error: Call to undefined method Widget::getUsername()"
// echo $anotherTopic->getUsername(); 
//==================================
// class Member {

//  private $username;
//  private $data = array();

//  public function __get( $property ) {
//    if ( $property == "username" ) {
//      return $this->username;
//    } else {
//      if ( array_key_exists( $property, $this->data ) ) {
//        return $this->data[$property];
//      } else {
//        return null;
//      }
//    }
//  }

//  public function __set( $property, $value ) {
//    if ( $property == "username" ) {
//      $this->username = $value;
//    } else {
//      $this->data[$property] = $value;
//    }
//  }
// }

// $aMember = new Member();
// $aMember->username = "fred";
// $aMember->location = "San Francisco";
// echo $aMember->username . "<br>";  // отобразит "fred"
// echo $aMember->location . "<br>";  // отобразит "San Francisco"
//===============================================
class Member {

 private $username;

 public function __construct( $username ) {
   $this->username = $username;
 }

 public function getUsername() {
   return $this->username;
 }
}

class Topic {

 private $member;
 private $subject;

 public function __construct( $member, $subject ) {
   $this->member = $member;
   $this->subject = $subject;
 }

 public function getSubject() {
   return $this->subject;
 }

 public function __call( $method, $arguments ) {
   return $this->member->$method( $arguments );
 }
}

$aMember = new Member( "fred" );
$aTopic = new Topic( $aMember, "Hello everybody!" );
echo $aTopic->getSubject() . "<br>"; // отобразит "Hello everybody!"
echo $aTopic->getUsername() . "<br>"; // отобразит "fred"