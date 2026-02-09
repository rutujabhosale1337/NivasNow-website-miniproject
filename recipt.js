async function generateReceipt(paymentId) {
    const response = await fetch(`/generate-receipt/${paymentId}`);
    const data = await response.json();

    if (response.ok) {
        alert(data.receipt);
    } else {
        alert('Error generating receipt');
    }
}
