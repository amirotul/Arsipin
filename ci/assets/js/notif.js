
document.addEventListener('DOMContentLoaded', function () {

    const notifListElement = document.querySelector('#notif-list');
    const notifCountertElement = document.querySelector('.noti-icon-badge');

    $('#notif-list').on('click', function (e) {
        e.stopPropagation();
      });

    async function getData(url) {
        try {
            const response = await fetch(url);
            const responseJson = await response.json();
            return responseJson;
        } catch (error) {
            return error;
        }
    }

    function deleteNotif() {
        
            const notifItemElement = notifListElement.querySelectorAll('.notif-item');
            const deleteBtnElement = notifListElement.querySelectorAll('a.btn-delete-notif');
            for (let key = 0; key < deleteBtnElement.length; key++) {
                let idNotif = deleteBtnElement[key].getAttribute('data-id-notif');
                deleteBtnElement[key].addEventListener('click', function (e) {
                    getData(`http://localhost/Arsipin/ci/Notif/delete/${idNotif}`).then(result => {
                        if (result.status == 1) {
                            notifItemElement[key].remove();
                        }
                        notifCountertElement.textContent = result.count;
                    });
                });
            }
        
    }

    getData('http://localhost/Arsipin/ci/Notif/get_unread').then(function (data) {
        for (const key in data) {
            notifListElement.insertAdjacentHTML('afterbegin',
                `<div class="notif-item d-flex">
        <a class="dropdown-item text-wrap" href="">
            <strong>${data[key].judul}</strong><br>
            ${data[key].pengirim} pada ${data[key].tgl_notif}
        </a>
        <a class="btn-delete-notif px-3 pt-3 text-dark" data-id-notif="${data[key].id}">
            <i class="far fa-times-circle"></i>
        </a>
    </div>`);
        }
        notifCountertElement.textContent = data.length;
    }).then(deleteNotif).catch(error => {
        console.error(error);
    });

    // deleteNotif();
});
