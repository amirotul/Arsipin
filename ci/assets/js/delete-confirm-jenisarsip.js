const btnModals = document.querySelectorAll('button[data-toggle=modal]');
const btnDeleteLink = document.querySelector('a.btn-hapus');

btnModals.forEach(btn => {
    btn.addEventListener('click', function () {
        btnDeleteLink.setAttribute('href', `http://localhost/Arsipin/ci/Jenis_Arsip/hapus_jenisarsip/${btn.getAttribute('data-id-jenisarsip')}`)
    });
});