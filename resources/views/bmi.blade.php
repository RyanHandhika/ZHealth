<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Kalkulator BMI</title>
        <link rel="stylesheet" href="css/bmi.css">
    </head>
    <body>
        <div class="bmi-calculator">
            <div class="calculator-screen" id="input-screen">
                <h1>Kalkulator BMI</h1>

                <div class="gender-selector">
                    <div class="gender-option active" id="pria">Pria</div>
                    <div class="gender-option" id="wanita">Wanita</div>
                </div>

                <div class="input-group">
                    <label for="height">Tinggi Badan (cm)</label>
                    <input
                        type="number"
                        id="height"
                        placeholder="Masukkan tinggi badan Anda"
                    />
                </div>

                <div class="input-group">
                    <label for="weight">Berat Badan (kg)</label>
                    <input
                        type="number"
                        id="weight"
                        placeholder="Masukkan berat badan Anda"
                    />
                </div>

                <button class="btn btn-primary btn-full" id="calculate">
                    Hitung BMI
                </button>
            </div>

            <div class="calculator-screen" id="result-screen">
                <div class="result-display">
                    <h2>Indeks Massa Tubuh Anda</h2>
                    <p id="bmi-value">0.0</p>
                    <p id="bmi-category">Kategori</p>
                </div>

                <div class="action-buttons">
                    <button class="btn btn-primary" id="repeat-btn">
                        Ulangi
                    </button>
                    <a href="/main.html" class="btn btn-secondary">Keluar</a>
                </div>
            </div>
        </div>

        <script src="js/bmi.js"></script>
    </body>
</html>
