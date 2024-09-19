<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ibexstack Email Template</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .header {
            background: #f1f1f1;
            color: #ffffff;
            padding: 20px;
            text-align: center;
        }

        .header img {
            max-width: 150px;
            /* Adjust as needed */
            height: auto;
            margin-bottom: 10px;
        }

        .header h1 {
            color: black;
        }

        .content {
            padding: 20px;
        }

        .content p {
            text-align: justify;
        }

        .footer {
            background: #f1f1f1;
            text-align: center;
            padding: 10px;
            font-size: 13px;
            color: #777777;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background: #28a745;
            color: #ffffff;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        .button:hover {
            background: #218838;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <img src="{{ $message->embed('assets/images/creative/logo.png') }}" alt="Ibexstack Logo">
        </div>
        <div class="content">
            <h2>Hello Atif Rehman,</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="footer">
            <p>&copy; 2024 Ibexstack. All rights reserved.</p>
            <p>needhelp@ibexstack.com | (+92) 343-4417145</p>
        </div>
    </div>
</body>

</html>
