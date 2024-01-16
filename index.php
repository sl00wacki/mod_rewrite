<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Page</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            text-align: center;
            background-color: #1e1e1e;
            color: #00ff00;
            padding: 20px;
            white-space: pre-line;
        }

        .terminal-text {
            display: inline-block;
            overflow: hidden;
            border-right: 0.08em solid #00ff00;
            white-space: nowrap;
            margin-bottom: 1em;
            animation: typing 15s steps(60) forwards;
        }

        @keyframes typing {
            from {
                width: 0;
            }
            to {
                width: 100%;
            }
        }

        h1 {
            color: #ff0000;
        }

        h2 {
            color: #00ff00;
        }

        p {
            font-size: 18px;
        }

        img {
            max-width: 50%;
            height: auto;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <h1>Error Page</h1>
    <h2>UWAGA</h2>
    <?php
        $errorCode = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : 'Unknown';
        echo "<script>document.title = 'ERROR $errorCode';</script>"; 
        echo "<p>Error $errorCode - Something went wrong.</p>";
    ?>
    <p>Przepraszamy za błąd... A może to ty powinieneś nas przeprosić? Nie umiesz korzystać z strony?</p>
    
    <div class="terminal-text">
        <p>/b a n    @ u s e r</p>
    </div>
    
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/31/Police_man_ganson.svg/1200px-Police_man_ganson.svg.png" alt="Error Image">
</body>
</html>
