<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 5px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
        }

        input {
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[readonly] {
            background-color: #eee;
        }

        button {
            padding: 10px 16px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
    <title>User Form</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4">
                <form action="{{ route('add_user') }}" method="POST">
                    @csrf
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name">

                    <label for="age">Age:</label>
                    <input type="text" id="age" name="age" >

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" >

                    <label for="created_at">address:</label>
                    <input type="text" id="created_at" name="address">

                    <!-- Additional hidden input for user ID if needed -->
                    <input type="hidden" name="user_id" >

                    <!-- Submit button -->
                    <button type="submit">add user</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
