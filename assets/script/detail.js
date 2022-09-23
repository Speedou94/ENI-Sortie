const btns = document.getElementsByClassName('registration-button');

for (const btn of btns) {
        btn.addEventListener('click', () => {
            document.getElementById('titleModal').innerHTML ='Ecrire à' + " " + btn.getAttribute('data-user-registration')
            document.getElementById('mail').value = btn.getAttribute('data-registration');
        });
    }
