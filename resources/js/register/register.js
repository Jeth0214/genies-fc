const registrationForm = document.getElementById('registrationForm');
const lang = document.documentElement.lang;

if (registrationForm) {

    // form-controls
    const playerInput = registrationForm.elements['player'];
    const idInput = registrationForm.elements['id'];
    const phoneInput = registrationForm.elements['phone'];
    const bloodTypeInput = registrationForm.elements['bloodType'];
    const ageInput = registrationForm.elements['age'];
    const agreedInput = registrationForm.elements['agreed'];
    const submitButton = document.getElementById('registrationButton');

    // validation elements
    const playerFeedback = document.getElementById('player-feedback');
    const idFeedback = document.getElementById('id-feedback');
    const phoneFeedback = document.getElementById('phone-feedback');
    const bloodTypeFeedback = document.getElementById('bloodType-feedback');
    const ageFeedback = document.getElementById('age-feedback');
    const agreedFeedback = document.getElementById('agreed-feedback');

    // On Submit 
    registrationForm.onsubmit = (event) => {
        event.preventDefault();

        // toaster elements
        const successToastElement = document.getElementById('successToaster');
        const successToast = bootstrap.Toast.getOrCreateInstance(successToastElement);
        const faliedToastElement = document.getElementById('failedToaster');
        const failedToast = bootstrap.Toast.getOrCreateInstance(faliedToastElement);
        const errorStatus= document.getElementById('error-status');
        const playerName= document.getElementById('player-name');

        // form values
         const playerValue = playerInput.value.trim();
        const idValue = idInput.value;
        const phoneValue = phoneInput.value.substring(0, 3) == "966" ? `+${phoneInput.value}` : phoneInput.value;
        const bloodTypeValue = bloodTypeInput.value;
        const ageValue = ageInput.value;
        const agreedValue = +agreedInput.value;


        // clear all invalid feedbacks
        playerFeedback.textContent = '';
        idFeedback.textContent = '';
        phoneFeedback.textContent = '';
        bloodTypeFeedback.textContent = '';
        ageFeedback.textContent = '';
        agreedFeedback.textContent = '';
        submitButton.setAttribute('disabled', true);
        submitButton.textContent = lang == 'en' ? 'Loading...' : 'تحميل';

        // data to send

        let data = {
            player: playerValue,
            id: idValue,
            phone: phoneValue,
            bloodType: bloodTypeValue,
            age: ageValue,
            agreed: agreedValue,
            date: dateData()
        }


         axios.post('/register-player', data)
            .then(
                (response) => {
                    // reset all values
                    playerInput.value ="";
                    idInput.value ="";
                    phoneInput.value ="";
                    bloodTypeInput.value ="";
                    ageInput.value ="";
                    agreedInput.value ="";

                    successToast.show();
                    playerName.textContent = response.data['player'];
                },
                (error) => {
                    if (error.response.status === 422) {
                        const errors = error.response.data.errors;

                        if (errors.hasOwnProperty('player')) {
                            playerFeedback.textContent = errors.player[0];
                        }

                        if (errors.hasOwnProperty('id')) {
                            idFeedback.textContent = errors.id[0];
                        }

                        if (errors.hasOwnProperty('phone')) {
                            phoneFeedback.textContent = errors.phone[0];
                        }

                        if (errors.hasOwnProperty('bloodType')) {
                            bloodTypeFeedback.textContent = errors.bloodType[0];
                        }
                        if (errors.hasOwnProperty('age')) {
                            ageFeedback.textContent = errors.age[0];
                        }
                        if (errors.hasOwnProperty('agreed')) {
                            agreedFeedback.textContent = errors.agreed[0];
                        }
                    } else {
                        failedToast.show();
                        errorStatus.textContent = error.response.status;
                    }
                }
            )
            .finally(() => {
                submitButton.removeAttribute('disabled');
                submitButton.textContent = lang == 'en' ? 'Submit' : 'رسال الطلب';
            });

        return false;

    }

    function dateData() {
    const today = new Date();
    const day = String(today.getDate()).padStart(2, '0');
    const month = String(today.getMonth() + 1).padStart(2, '0');
    const year = today.getFullYear();
    return `${day}-${month}-${year}`;

    }


}
