const btnModals = document.querySelectorAll('button[data-toggle=modal]');
const btnDeleteLink = document.querySelector('a.btn-hapus');

btnModals.forEach(btn => {
    btn.addEventListener('click', function () {
        btnDeleteLink.setAttribute('href', `http://localhost/Arsipin/ci/Jenis_Divisi/hapus_jenis_divisi/${btn.getAttribute('data-id-jenisdivisi')}`)
    });
});