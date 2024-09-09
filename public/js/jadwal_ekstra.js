document.addEventListener('DOMContentLoaded', function() {
    fetch('/path/to/api/ekstrakurikuler')
        .then(response => response.json())
        .then(data => {
            const ul = document.getElementById('aktif-ekstra');
            if (data.length > 0) {
                data.forEach(ekstra => {
                    let li = document.createElement('li');
                    li.textContent = ekstra['Nama ekstrakurikuler'];
                    ul.appendChild(li);
                });
            } else {
                let li = document.createElement('li');
                li.textContent = 'Tidak ada ekstrakurikuler aktif hari ini.';
                ul.appendChild(li);
            }
        });
});
