<!DOCTYPE html>
<html>
<link rel="stylesheet" href="popup.css">

<head>
    <title>Title of the document</title>

</head>

<body>
    <div class="openBtn">
        <button class="openclose" onclick="opencloseForm()"><strong>Open</strong></button>
    </div>
    <div class="loginPopup">
        <div class="formPopup" id="popupForm">
            <div class="formContainer">
                <h2>Your Score</h2>
                <label for="email">
                    <strong>10000</strong>
                </label>
                <br><br><br>
                <button type="submit" class="btn" id="retryornot" onclick="retryornot()">Retry</button>
                <button type="button" class="btn cancel" id="openclose" onclick="opencloseForm()">Close</button>
            </div>
        </div>
    </div>
    <script src="popup.js"></script>
</body>

</html>