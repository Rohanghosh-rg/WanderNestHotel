<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "wander_nest");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wander Nest Hotel - Reviews</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            text-align: center;
        }
        .container {
            width: 50%;
            margin: auto;
            background: white;
            padding: 20px;
            box-shadow: 0px 0px 10px gray;
            border-radius: 10px;
        }
        input, select, textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background: #27ae60;
            color: white;
            padding: 10px;
            border: none;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
        }
        button:hover {
            background: #219150;
        }
        .review {
            background: #eee;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
            text-align: left;
        }
        .review strong {
            color: #333;
        }
        .review span {
            color: #f39c12;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Guest Reviews</h2>

        <!-- Review Form -->
        <form id="reviewForm">
            <input type="text" id="name" name="name" placeholder="Your Name" required>
            <select id="rating" name="rating" required>
                <option value="">Rate Us</option>
                <option value="5">★★★★★</option>
                <option value="4">★★★★☆</option>
                <option value="3">★★★☆☆</option>
                <option value="2">★★☆☆☆</option>
                <option value="1">★☆☆☆☆</option>
            </select>
            <textarea id="comment" name="comment" placeholder="Your Review" required></textarea>
            <button type="submit">Submit Review</button>
        </form>

        <!-- Review List -->
        <div id="reviews">
            <?php include 'fetch_reviews.php'; ?>
        </div>
    </div>

    <script>
        document.getElementById("reviewForm").addEventListener("submit", function(event) {
            event.preventDefault();

            let formData = new FormData(this);

            fetch("submit_review.php", {
                method: "POST",
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
                location.reload();
            })
            .catch(error => console.error("Error:", error));
        });
    </script>

</body>
</html>