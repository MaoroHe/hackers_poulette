export let visualVerification = () => {

    const button = document.getElementById('submit');
    const emailLabel = document.getElementById('emaiLabel');

    button.addEventListener('click', (e) =>  {
        const email = document.getElementById('email');

        if (!email.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{1,4}$/)) {
            e.preventDefault();
        }
    })

    const email = document.getElementById('email');

    email.addEventListener('keypress', (e) => {
        if (email.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{1,4}$/)) {
            const emailText = 'Email valide';

            emailLabel.textContent = emailText;
            emailLabel.style.color = 'green';
        } else {
            const emailText = 'Email non valide';

            emailLabel.textContent = emailText;
            emailLabel.style.color = 'red';
        }
    }) 

    const firstName = document.getElementById('first-name');
    const firstNameLabel = document.getElementById('first-nameLabel')

    firstName.addEventListener('keypress', (e) => {
        if (firstName.value.length < 2) {
            firstNameLabel.style.color = 'red';
        } else {
            firstNameLabel.style.color = 'green';
        }
    })

    const Name = document.getElementById('last-name');
    const NameLabel = document.getElementById('last-nameLabel')

    Name.addEventListener('keypress', (e) => {
        if (Name.value.length < 2) {
            NameLabel.style.color = 'red';
        } else {
            NameLabel.style.color = 'green';
        }
    })

    const desc = document.getElementById('message');
    const descLabel = document.getElementById('messageLabel')

    desc.addEventListener('keypress', (e) => {
        if (desc.value.length < 2) {
            descLabel.style.color = 'red';
        } else {
            descLabel.style.color = 'green';
        }
    })

    const fileInput = document.getElementById('file');

    function fileValid() {
        const fileValue = fileInput.value;

        const allowed = /(\.jpg|\.png|\.gif|\.jpeg)$/i;

        if(!allowed.exec(fileValue)) {
            fileInput.value = '';
            alert('file not valid!')
        } else {
            alert('ok')
        }
    }

    fileInput.addEventListener('change', (e) => {
        fileValid();
    })
}