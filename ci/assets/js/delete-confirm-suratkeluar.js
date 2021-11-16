const btnModals = document.querySelectorAll('button[data-toggle=modal]');
const btnDeleteLink = document.querySelector('a.btn-hapus');

btnModals.forEach(btn => {
    btn.addEventListener('click', function () {
        btnDeleteLink.setAttribute('href', `http://localhost/Arsipin/ci/Surat_Keluar/hapus_surat_keluar/${btn.getAttribute('data-id-suratkeluar')}`)
    });
});