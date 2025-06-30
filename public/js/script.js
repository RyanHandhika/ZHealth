const loginButton = document.querySelector(".login");
const loginPage = document.querySelector(".loginPage");
const closeButton = document.querySelector(".closeButton");
const backButton = document.querySelector(".backButton");
const registerPage = document.querySelector(".registerPage");
const daftarLink = document.querySelector(".daftarLink");
const registerToLogin = document.querySelector(".registerToLogin");
const pCard1 = document.querySelector(".pCard1");
const pCard2 = document.querySelector(".pCard2");

pCard1.addEventListener("click", () => {
    window.location.href = "bmi";
});

pCard2.addEventListener("click", () => {
    window.location.href = "stressMeter";
});

//login
loginButton.addEventListener("click", () => {
    loginPage.style.display = "block";
});

daftarLink.addEventListener("click", () => {
    registerPage.style.display = "block";
});

closeButton.addEventListener("click", () => {
    loginPage.style.display = "none";
});

//register
backButton.addEventListener("click", () => {
    registerPage.style.display = "none";
});

registerToLogin.addEventListener("click", () => {
    registerPage.style.display = "none";
});
