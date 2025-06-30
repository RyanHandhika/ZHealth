document.addEventListener('DOMContentLoaded', () => {

    const questions = [
        {
            question: "Bagaimana perasaanmu saat bangun tidur pagi ini?",
            options: [
                { text: "Sangat segar dan bersemangat", score: 1 },
                { text: "Cukup segar, siap memulai hari", score: 2 },
                { text: "Kurang bersemangat, ada sedikit beban", score: 3 },
                { text: "Lelah dan enggan beraktivitas", score: 4 }
            ]
        },
        {
            question: "Seberapa sering kamu merasa cemas tanpa alasan jelas dalam seminggu terakhir?",
            options: [
                { text: "Tidak pernah", score: 1 },
                { text: "Jarang (1-2 kali)", score: 2 },
                { text: "Kadang-kadang (3-4 kali)", score: 3 },
                { text: "Sering (hampir setiap hari)", score: 4 }
            ]
        },
        // ... (Tambahkan 8 pertanyaan lainnya di sini, sama seperti kode aslimu)
        {
            question: "Bagaimana kemampuanmu untuk berkonsentrasi pada tugas?",
            options: [
                { text: "Sangat fokus dan produktif", score: 1 },
                { text: "Cukup baik, kadang terganggu", score: 2 },
                { text: "Sulit fokus, sering melamun", score: 3 },
                { text: "Sangat sulit berkonsentrasi sama sekali", score: 4 }
            ]
        },
        {
            question: "Seberapa mudah kamu merasa jengkel atau marah akhir-akhir ini?",
            options: [
                { text: "Sangat jarang", score: 1 },
                { text: "Kadang-kadang", score: 2 },
                { text: "Cukup sering", score: 3 },
                { text: "Sangat mudah marah", score: 4 }
            ]
        },
        {
            question: "Bagaimana kualitas tidurmu dalam seminggu terakhir?",
            options: [
                { text: "Sangat baik, pulas dan cukup", score: 1 },
                { text: "Cukup baik, kadang terganggu", score: 2 },
                { text: "Kurang nyenyak, sering terbangun", score: 3 },
                { text: "Sangat buruk, sulit tidur atau tidur berlebihan", score: 4 }
            ]
        },
        {
            question: "Apakah kamu sering merasakan sakit kepala atau tegang otot tanpa sebab medis jelas?",
            options: [
                { text: "Tidak pernah", score: 1 },
                { text: "Jarang", score: 2 },
                { text: "Kadang-kadang", score: 3 },
                { text: "Sering atau hampir setiap hari", score: 4 }
            ]
        },
        {
            question: "Seberapa besar minatmu pada hobi atau aktivitas yang dulunya kamu nikmati?",
            options: [
                { text: "Sama seperti biasanya, menikmati penuh", score: 1 },
                { text: "Sedikit berkurang", score: 2 },
                { text: "Cukup berkurang, kurang bergairah", score: 3 },
                { text: "Tidak ada minat sama sekali", score: 4 }
            ]
        },
        {
            question: "Bagaimana pandanganmu terhadap masa depanmu saat ini?",
            options: [
                { text: "Optimis dan bersemangat", score: 1 },
                { text: "Cukup positif, ada harapan", score: 2 },
                { text: "Agak pesimis atau tidak yakin", score: 3 },
                { text: "Sangat pesimis dan putus asa", score: 4 }
            ]
        },
        {
            question: "Apakah kamu merasa kewalahan dengan tanggung jawab atau pekerjaanmu?",
            options: [
                { text: "Tidak, saya bisa mengelolanya dengan baik", score: 1 },
                { text: "Kadang-kadang, tapi masih bisa diatasi", score: 2 },
                { text: "Cukup sering, merasa tertekan", score: 3 },
                { text: "Sangat sering, merasa tidak mampu", score: 4 }
            ]
        },
        {
            question: "Seberapa sering kamu merasa kesepian atau terisolasi?",
            options: [
                { text: "Tidak pernah", score: 1 },
                { text: "Jarang", score: 2 },
                { text: "Kadang-kadang", score: 3 },
                { text: "Sering atau hampir setiap saat", score: 4 }
            ]
        }
    ];

    let currentQuestionIndex = 0;
    let totalScore = 0;
    let selectedOptionElement = null;

    const quizContainer = document.getElementById('quizContainer');
    const resultContainer = document.getElementById('resultContainer');
    const questionTextElement = document.getElementById('questionText');
    const optionsContainer = document.getElementById('optionsContainer');
    const nextButton = document.getElementById('nextButton');
    const restartButton = document.getElementById('restartButton');
    
    const progressBar = document.getElementById('progressBar');
    const progressText = document.getElementById('progressText');

    const finalScoreElement = document.getElementById('finalScore');
    const stressLevelDescriptionElement = document.getElementById('stressLevelDescription');

    function startQuiz() {
        currentQuestionIndex = 0;
        totalScore = 0;
        resultContainer.classList.add('hidden');
        quizContainer.classList.remove('hidden');
        displayQuestion();
    }

    function displayQuestion() {
        resetState();
        const currentQuestion = questions[currentQuestionIndex];
        questionTextElement.textContent = currentQuestion.question;

        currentQuestion.options.forEach(option => {
            const button = document.createElement('button');
            button.classList.add('option-button');
            button.textContent = option.text;
            button.dataset.score = option.score;
            button.addEventListener('click', handleOptionClick);
            optionsContainer.appendChild(button);
        });

        updateProgress();
    }

    function resetState() {
        nextButton.disabled = true;
        selectedOptionElement = null;
        optionsContainer.innerHTML = '';
        if (currentQuestionIndex === questions.length - 1) {
            nextButton.textContent = "Lihat Hasil";
        } else {
            nextButton.textContent = "Selanjutnya";
        }
    }

    function updateProgress() {
        const progressPercentage = ((currentQuestionIndex + 1) / questions.length) * 100;
        progressBar.style.width = `${progressPercentage}%`;
        progressText.textContent = `Pertanyaan ${currentQuestionIndex + 1} dari ${questions.length}`;
    }

    function handleOptionClick(event) {
        if (selectedOptionElement) {
            selectedOptionElement.classList.remove('selected');
        }
        selectedOptionElement = event.target;
        selectedOptionElement.classList.add('selected');
        nextButton.disabled = false;
    }

    function showResults() {
        quizContainer.classList.add('hidden');
        resultContainer.classList.remove('hidden');

        let stressLevel = "";
        let description = "";
        
        // Sesuaikan rentang skor jika perlu
        if (totalScore <= 17) {
            stressLevel = "Level Stres Rendah";
            description = "Kamu tampaknya mengelola stres dengan sangat baik. Pertahankan pola hidup sehatmu!";
        } else if (totalScore <= 25) {
            stressLevel = "Level Stres Sedang";
            description = "Ada beberapa indikator stres, tapi masih dalam batas wajar. Coba perhatikan pemicu stresmu dan kelola dengan lebih baik.";
        } else if (totalScore <= 33) {
            stressLevel = "Level Stres Cukup Tinggi";
            description = "Kamu menunjukkan tanda-tanda stres yang signifikan. Penting untuk mulai mencari cara meredakan tekanan dan menjaga kesejahteraan mentalmu.";
        } else {
            stressLevel = "Level Stres Tinggi";
            description = "Tingkat stresmu sangat tinggi. Sangat disarankan untuk menerapkan strategi manajemen stres yang serius atau mencari dukungan profesional.";
        }
        
        finalScoreElement.textContent = `Skor Total Anda: ${totalScore}`;
        stressLevelDescriptionElement.innerHTML = `<strong>${stressLevel}</strong><br>${description}`;
    }

    nextButton.addEventListener('click', () => {
        const score = parseInt(selectedOptionElement.dataset.score);
        totalScore += score;
        currentQuestionIndex++;

        if (currentQuestionIndex < questions.length) {
            displayQuestion();
        } else {
            showResults();
        }
    });

    restartButton.addEventListener('click', startQuiz);

    startQuiz();
});