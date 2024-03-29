<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upfate Book Details</title>
</head>
<body>
    <div class="headingcontainers">
        <a href=""class="headingmains">Book Update </a>
        </div>
<fieldset style="margin-top: 25px;">
    <legend><strong>Update Book</strong></legend>
   <ul type="none">
    <li style="margin-top: 5px;">
        <label for="Bookuniqueid"><strong>Book Idno : </strong></label>
        <input type="text" id="book">&nbsp;&nbsp;
       <li>
        <button style="background-color: red; color: white; border-radius: 2px; margin-top: 12px;">Search</button>
       </li>
    <li>
        <label for="bookname"><strong>Book Name</strong></label>
        <input type="text" id="bookname">&nbsp;&nbsp;&nbsp;
        <label for="booktype"><strong>Book Category</strong></label>
         <select>
            <option value="0">Select Book Type</option>
            <option value="Story">Story</option>
            <option value="Science">Science</option>
            <option value="Humanities">Humanities</option>
            <option value="Commerce">Commerce</option>
            <option value="Story">Story Book</option>
            <option value="Others">Others</option>
         </select>&nbsp;&nbsp;&nbsp;
         <label for="author"><strong>Authour </strong></label>
        <input type="text" id="author">&nbsp;&nbsp;&nbsp;&nbsp;
        <label for="publication"><strong>Publication Name </strong></label>
        <input type="text" id="publication">
    </li>
    <li style="margin-top: 5px;">
        
        <label for="Bookimage"><strong>Image</strong></label>
        <input type="file" id="Bookimage">
        
    </li>
    <li>
        <button style="background-color: red; color: white; border-radius: 2px; margin-top: 12px;">Update</button>
    </li>
    </ul>
</fieldset> 
</body>
</html>