const username = document.getElementById('username');
const password = document.getElementById('password');
const nama_dokter = document.getElementById('nama_dokter');
const form_login = document.getElementById('form_login');
const form_create = document.getElementById('form_create');

form.addEventListener('submit', (e) => {
    let masssages = []
    if(form_login){
        if (username === '' || username == null){
            masssages.push("Username harus diisi")
        }
    }

    e.preventDefault();
})
