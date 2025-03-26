<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background: url('https://source.unsplash.com/1600x900/?store,products') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
        }

        /* Center the form */
        .container {
            width: 40%;
            margin: 50px auto;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
        }

        /* Form Title */
        h2 {
            text-align: center;
            color: #333;
        }

        /* Input Fields */
        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Submit Button */
        button {
            width: 100%;
            background:rgb(227, 161, 30);
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background:#b66549;
        }

        /* Links */
        a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Add Product</h2>
        <form action="add_product.php" method="POST">
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="category">Category:</label>
            <input type="text" id="category" name="category" required>

            <label for="price">Price:</label>
            <input type="number" id="price" name="price" required>

            <label for="quantity">Quantity:</label>
            <input type="number" id="quantity" name="quantity" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4"></textarea>

            <button type="submit">Add Product</button>
        </form>
        <a href="view_product.php">View Products</a>
    </div>

</body>
</html>
