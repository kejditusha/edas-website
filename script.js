document.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector('#appointment-form');

    form.addEventListener('submit', (e) => {
        e.preventDefault();

        const name = form.querySelector('#name').value;
        const phone = form.querySelector('#phone').value;
        const hour = form.querySelector('#hour').value;

        const data = new URLSearchParams();
        data.append('name', name);
        data.append('phone', phone);
        data.append('hour', hour);

        fetch(form.action, {
            method: 'POST',
            body: data,
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded'
            }
        }).then(() => {
            alert('Appointment request submitted successfully!');
            form.reset();
        }).catch((error) => {
            alert('Error submitting appointment request. Please try again later.');
            console.error(error);
        });
    });

})
