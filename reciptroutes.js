const express = require('express');
const router = express.Router();
const Payment = require('../models/Payment');

router.get('/generate-receipt/:paymentId', async (req, res) => {
    try {
        const payment = await Payment.findById(req.params.paymentId).populate('userId');
        if (!payment) return res.status(404).json({ message: 'Payment not found' });

        const receipt = `
            Receipt for Payment
            -----------------------
            Name: ${payment.userId.name}
            Amount Paid: $${payment.amount}
            Payment Method: ${payment.paymentMethod}
            Status: ${payment.status}
            Date: ${payment.date}
        `;

        res.status(200).json({ receipt });
    } catch (error) {
        res.status(500).json({ message: 'Receipt generation failed', error });
    }
});

module.exports = router;
