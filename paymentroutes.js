const express = require('express');
const router = express.Router();
const Payment = require('../models/Payment');

router.post('/process-payment', async (req, res) => {
    try {
        const { userId, amount, paymentMethod } = req.body;
        const newPayment = new Payment({ userId, amount, paymentMethod, status: 'Completed' });
        await newPayment.save();
        res.status(201).json({ message: 'Payment successful', payment: newPayment });
    } catch (error) {
        res.status(500).json({ message: 'Payment failed', error });
    }
});

module.exports = router;
