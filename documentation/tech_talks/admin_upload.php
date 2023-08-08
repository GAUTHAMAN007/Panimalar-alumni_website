<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Admin Upload - Alumni Information Center</title>
</head>
<body>
    <div class="container">
        <h1>Admin Upload - Alumni Information Center</h1>
        
        <form action="add_info.php" method="post" enctype="multipart/form-data">
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
            
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
            
            <label for="content">Content:</label>
            <textarea id="content" name="content" required></textarea>
            
            <button type="submit">Add Information</button>
        </form>
    </div>
</body>
</html>
