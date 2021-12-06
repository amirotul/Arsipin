const btnModals = document.querySelectorAll('button[data-toggle=modal]');
const btnDeleteLink = document.querySelector('a.btn-hapus');

btnModals.forEach(btn => {
    btn.addEventListener('click', function () {
        btnDeleteLink.setAttribute('href', `http://localhost/Arsipin/ci/Surat_Masuk/hapus_surat_masuk/${btn.getAttribute('data-id-suratmasuk')}`)
    });
});