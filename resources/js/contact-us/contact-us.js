const contactUsForm = document.getElementById('contact-us-form');
const lang = document.documentElement.lang;

if (contactUsForm) {
    const messageMaxCharacters = 2000;
    const nameInput = contactUsForm.elements['fullname'];
    const emailInput = contactUsForm.elements['email'];
    const messageInput = contactUsForm.elements['message'];
    const phoneInput = contactUsForm.elements['phone'];
    const submitButton = document.getElementById('contact-us-submit-button');

    // validation elements
    const fullnameFeedback = document.getElementById('fullname-feedback');
    const emailFeedback = document.getElementById('email-feedback');
    const phoneFeedback = document.getElementById('phone-feedback');
    const messageFeedback = document.getElementById('message-feedback');

    contactUsForm.onsubmit = (evt) => {
        evt.preventDefault();

                // toaster elements
        const successToastElement = document.getElementById('successToaster');
        const successToast = bootstrap.Toast.getOrCreateInstance(successToastElement);
        const faliedToastElement = document.getElementById('failedToaster');
        const failedToast = bootstrap.Toast.getOrCreateInstance(faliedToastElement);
        const errorStatus = document.getElementById('error-status');
        

        const fullname = nameInput.value;
        const email = emailInput.value;
        const message = messageInput.value;
        const phone =  phoneInput.value.substring(0, 3) === "966" ? `+${phoneInput.value}` : phoneInput.value;

        // clear all invalid feedbacks
        fullnameFeedback.textContent = '';
        emailFeedback.textContent = '';
        messageFeedback.textContent = '';
        phoneFeedback.textContent = '';
        submitButton.setAttribute('disabled', true);
        submitButton.textContent = lang == 'en' ? 'Loading...' : 'تحميل';

        axios.post('/send-contact-us', {fullname, email, phone, message})
            .then(
                (response) => {
                    nameInput.value = '';
                    emailInput.value = '';
                    phoneInput.value = '';
                    messageInput.value = '';

                   successToast.show();
                },
                (error) => {
                    console.log(error);
                    if (error.response.status === 422) {
                        const errors = error.response.data.errors;

                        if (errors.hasOwnProperty('fullname')) {
                            fullnameFeedback.textContent = errors.fullname[0];
                        }

                        if (errors.hasOwnProperty('email')) {
                            emailFeedback.textContent = errors.email[0];
                        }

                        if (errors.hasOwnProperty('phone')) {
                            phoneFeedback.textContent = errors.phone[0];
                        }

                        if (errors.hasOwnProperty('message')) {
                            messageFeedback.textContent = errors.message[0];
                        }
                    }else {
                        failedToast.show();
                        errorStatus.textContent = error.response.status;
                    }
                }
            )
            .finally(() => {
                submitButton.removeAttribute('disabled');
                submitButton.textContent = lang == 'en' ? 'Submit' : 'الطلب';
            });

        return false;
    }

    if (messageInput) {
        const messageMaxChar = document.getElementById('message-max-char');

        messageInput.onkeyup = (evt) => {
            const messageLength = messageInput.value ? messageInput.value.length : 0;
            const remChar = messageMaxCharacters - messageLength;

            messageMaxChar.textContent = remChar.toString();
        }
    }
}
