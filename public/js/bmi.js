// Elemen UI
const priaBtn = document.getElementById('pria');
const wanitaBtn = document.getElementById('wanita');
const heightInput = document.getElementById('height');
const weightInput = document.getElementById('weight');
const calculateBtn = document.getElementById('calculate');
const repeatBtn = document.getElementById('repeat-btn');

// Elemen Layar
const inputScreen = document.getElementById('input-screen');
const resultScreen = document.getElementById('result-screen');

// Elemen Hasil
const resultDisplay = document.querySelector('.result-display');
const bmiValueEl = document.getElementById('bmi-value');
const bmiCategoryEl = document.getElementById('bmi-category');

// Palet Warna
const themes = {
    pria: { primary: '#20c997', secondary: '#1aa07a' },
    wanita: { primary: '#e83e8c', secondary: '#c21a68' }
};

function setTheme(gender) {
    const theme = themes[gender];
    document.documentElement.style.setProperty('--primary-color', theme.primary);
    document.documentElement.style.setProperty('--secondary-color', theme.secondary);
}

// Event Listeners Gender
priaBtn.addEventListener('click', () => {
    priaBtn.classList.add('active');
    wanitaBtn.classList.remove('active');
    setTheme('pria');
});

wanitaBtn.addEventListener('click', () => {
    wanitaBtn.classList.add('active');
    priaBtn.classList.remove('active');
    setTheme('wanita');
});

// Event Listener Tombol Hitung
calculateBtn.addEventListener('click', () => {
    const height = parseFloat(heightInput.value);
    const weight = parseFloat(weightInput.value);

    if (isNaN(height) || isNaN(weight) || height <= 0 || weight <= 0) {
        alert("Mohon masukkan tinggi dan berat badan yang valid.");
        return;
    }

    const heightInMeters = height / 100;
    const bmi = weight / (heightInMeters * heightInMeters);
    bmiValueEl.textContent = bmi.toFixed(1);

    let category = '';
    resultDisplay.className = 'result-display'; // Reset kelas warna

    if (bmi < 18.5) {
        category = 'Kekurangan berat badan';
        resultDisplay.classList.add('bmi-underweight');
    } else if (bmi >= 18.5 && bmi <= 24.9) {
        category = 'Berat badan ideal (Normal)';
        resultDisplay.classList.add('bmi-normal');
    } else if (bmi >= 25 && bmi <= 29.9) {
        category = 'Kelebihan berat badan';
        resultDisplay.classList.add('bmi-overweight');
    } else {
        category = 'Obesitas';
        resultDisplay.classList.add('bmi-obese');
    }
    
    bmiCategoryEl.textContent = category;
    
    // Tukar layar
    inputScreen.style.display = 'none';
    resultScreen.style.display = 'flex';
});

// Event Listener Tombol Ulangi
repeatBtn.addEventListener('click', () => {
    // Tukar layar kembali
    resultScreen.style.display = 'none';
    inputScreen.style.display = 'block';
});