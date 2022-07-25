var contactBtn = document.getElementById("contactbtn");
var resaBtn = document.getElementById("reservationbtn");
var recrutBtn = document.getElementById('recrutementbtn');
var contact = document.getElementById('contact');
var resa = document.getElementById('reservation');
var recrut = document.getElementById('recrutement');

contactBtn.addEventListener("click", showContact);
resaBtn.addEventListener("click", showResa);
recrutBtn.addEventListener("click", showRecrut);

function showContact() {
    contact.style.display = "block";
    resa.style.display = "none";
    recrut.style.display = "none";
};

function showResa() {
    contact.style.display = "none";
    resa.style.display = "block";
    recrut.style.display = "none";
};

function showRecrut() {
    contact.style.display = "none";
    resa.style.display = "none";
    recrut.style.display = "block";
};
