<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="sign.css">
</head>
<body>
    <div class="box">
        <span class="borderline"></span>
        <form action="handle_fp.php" method="POST">
            <h1>Forgot Password</h1>
            <br>
            <div class="inputbox">
                <input type="email" required="required" name="email">
                <span>Email</span>
                <i></i>
            </div>
            <br><br><BR>
            <center><input class="btn btn-primary" type="submit" value="Send Link" name="send_reset_link" style="width:50%;"></center>
        </form>
    </div>
<script>
    const words = ["Login", "Register", "Home", "Quiz", "Page", "Welcome"];

    function getRandomPosition() {
        const x = Math.floor(Math.random() * window.innerWidth);
        const y = Math.floor(Math.random() * window.innerHeight);
        return { x, y };
    }

    function createFloatingText(word) {
        const textElement = document.createElement("div");
        textElement.textContent = word;
        textElement.className = "floating-text";
        document.body.appendChild(textElement);

        const position = getRandomPosition();
        textElement.style.left = `${position.x}px`;
        textElement.style.top = `${position.y}px`;

        setTimeout(() => {
            textElement.style.opacity = 5;
            setTimeout(() => {
                document.body.removeChild(textElement);
            }, 1000);
        }, 3000);
    }

    function startAnimation() {
        setInterval(() => {
            const randomWord = words[Math.floor(Math.random() * words.length)];
            createFloatingText(randomWord);
        }, 800);
    }

    startAnimation();
</script>

</body>
</html>
