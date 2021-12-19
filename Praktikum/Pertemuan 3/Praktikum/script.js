function tampil(){
    alert("Yo Ndak Tau Ko Tanya Saya");
}

let warna = document.getElementById('warna');

warna.addEventListener('change', (event) =>{document.body.style.backgroundColor = warna.value});

let x = window.prompt("Siapa Anda?");
window.alert('Hai ' + x + '!');