const kode_penyakit = document.getElementById('kode_penyakit');
const name_Penyakit = documtment.getElementById('nama_penyakit');
const penjelasan_penyakit = document.getElementById('penjelasan_penyakit');
const penanganan_penyakit = document.getElementById('penanganan_penyakit');
const form = document.getElementById('text_form');
const errorElement = document.getElementById('error');

form.addEventListener('btn_simpan'), (e) =>{
    let masssages = []
    if(kode_penyakit.value ==='' || kode_penyakit == null){
        masssages.push('Harus terisi')
    }
    if(name_Penyakit.value==='' || name_Penyakit==null){
        masssages.push('Harus diisi nama penyakit')
    }
    if(penjelasan_penyakit.value==='' || penjelasan_penyakit==null){
        masssages.push('Harus memasukan untuk penjelasan penyakit')
    }

    if (masssages.length > 0){
        e.preventDefault();
    }
    e.preventDefault();
}