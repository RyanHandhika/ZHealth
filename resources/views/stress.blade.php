<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zHealth - Stress Meter</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/stress.css">
</head>
<body>

    <div class="quiz-wrapper">
        
        <div id="quizContainer">
            <div class="quiz-header">
                <h1>Stress Meter</h1>
                <div class="progress-container">
                    <div class="progress-bar" id="progressBar"></div>
                    <span class="progress-text" id="progressText"></span>
                </div>
            </div>
            
            <div class="quiz-body">
                <h2 id="questionText"></h2>
                <div id="optionsContainer">
                    </div>
            </div>

            <div class="quiz-footer">
                <button id="nextButton" disabled>Selanjutnya</button>
            </div>
        </div>

        <div id="resultContainer" class="hidden">
            <h2>Hasil Tes Stres Anda</h2>
            <p id="finalScore"></p>
            <p id="stressLevelDescription"></p>
            <button id="restartButton">Ulangi Tes</button>
            <a id="exitButton" href="/main.html">Keluar</a>
        </div>

    </div>

    <script src="js/stress.js"></script>
</body>
</html>