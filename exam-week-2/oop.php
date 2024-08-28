<?php
class Book
{
    // TODO: Add properties as Private
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies)
    {
        // TODO: Initialize properties
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }


    // TODO: Add getTitle method
    public function getTitle()
    {
        return $this->title;
    }


    // TODO: Add getAvailableCopies method
    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }


    // TODO: Add borrowBook method
    public function borrowBook()
    {
        if ($this->availableCopies <= 0) {
            return "Invalid request.";
        } else {
            return $this->availableCopies - 1;
        }
    }


    // TODO: Add returnBook method
    public function returnBook()
    {
        return $this->availableCopies + 1;
    }
}


class Member
{
    // TODO: Add properties as Private
    private $name;

    public function __construct($name)
    {
        // TODO: Initialize properties
        $this->name = $name;
    }



    // TODO: Add getName method
    public function getName()
    {
        return $this->name;
    }


    // TODO: Add borrowBook method
    public function borrowBook($book)
    {
        availableCopies($book);
    }


    // TODO: Add returnBook method
    public function returnBook($book)
    {
        $book->returnBook();
    }
}



// Usage


// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.


// TODO: Create 2 books with the following properties
// Book 1 - Name: The Great Gatsby, Available Copies: 5.
// Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.

$bookObj1 = new Book('The Great Gatsby', 5);
$bookObj2 = new Book('To Kill a Mockingbird', 3);



// TODO: Create 2 members with the following properties
// Member 1 - Name: John Doe
// Member 2 - Name: Jane Smith

$memberObj1 = new Member('John Doe');
$memberObj2 = new Member('Jane Smith');



// TODO: Apply Borrow book method to each member
$memberObj1->borrowBook($bookObj1);
$memberObj2->borrowBook($bookObj2);

$memberObj1->returnBook($bookObj1);
$memberObj2->returnBook($bookObj2);


// TODO: Print Available Copies with their names:

function availableCopies($bookObj)
{
    echo "Available Copies of '" . $bookObj->getTitle() . "': " . $bookObj->borrowBook() . "\n";
}

// availableCopies($bookObj1);
// availableCopies($bookObj2);

?>