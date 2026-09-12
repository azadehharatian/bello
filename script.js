document.getElementById('orderForm').addEventListener('submit', async (e) => {
    e.preventDefault();
    
    const form = e.target;
    const submitBtn = form.querySelector('.btn-submit');
    const statusDiv = document.getElementById('formStatus');
    
    submitBtn.textContent = 'Sending...';
    submitBtn.disabled = true;

    try {
        const formData = new FormData(form);
        const response = await fetch(form.action, {
            method: 'POST',
            body: formData
        });

        const result = await response.json();

        if (result.success) {
            statusDiv.textContent = 'Thank you! We will contact you soon.';
            statusDiv.style.color = '#00cec9';
            form.reset();
        } else {
            statusDiv.textContent = result.message || 'An error occurred. Please try again.';
            statusDiv.style.color = '#ff7675';
        }
    } catch (error) {
        statusDiv.textContent = 'A network error occurred. Please try again later.';
        statusDiv.style.color = '#ff7675';
    } finally {
        submitBtn.textContent = 'Submit Request';
        submitBtn.disabled = false;
    }
});
