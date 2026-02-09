async function processPayment(userId, amount, paymentMethod) {
    const response = await fetch('/process-payment', {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ userId, amount, paymentMethod })
    });

    const data = await response.json();
    if (response.ok) {
        alert('Payment Successful');
    } else {
        alert('Payment Failed: ' + data.message);
    }
}
