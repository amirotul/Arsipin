document.addEventListener('DOMContentLoaded', function () {
    const btnModals = document.querySelectorAll('button[data-toggle=modal]');
    const btnDeleteLink = document.querySelector('a#btn-hapus-modal');
    
    btnModals.forEach(btn => {
        btn.addEventListener('click', function (e) {
            console.log("saya diklik");
            btnDeleteLink.setAttribute('href', `http://localhost/Arsipin/ci/Surat_Masuk/hapus_surat_masuk/${btn.getAttribute('data-id-suratmasuk')}`)
        });
    });
});