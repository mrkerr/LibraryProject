I went at this assignment a little differently than what the spec dictates and I hope you can forgive me.

index.html and login.js are the files for the login page

My books text file is set up in a way that goes "Book Code" : "Book Name" , "Availability Marker"

My getBooks.php is the file used to show the library for the administrator. 
    Here, I import the text file and create the table.
    I created a helper php file which adds the inputted book into the text file.
        For some reason this is adding 2 book for the click and adds a new book on every refresh.
           I couldn't figure out why this was happening and was unable to debug it.
    I created getBooks.js for printing information of the book on click

getBooksUndergrad.php does the same thing as getBooks.php but for the undergrad login
    getBooksUndergrad.js contains a function for changing the color of the books rented by the undergrad


