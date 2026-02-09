const express = require('express');
const router = express.Router();
const Room = require('../models/Room');

router.get('/available-rooms', async (req, res) => {
    try {
        const availableRooms = await Room.find({ isAvailable: true });
        res.status(200).json(availableRooms);
    } catch (error) {
        res.status(500).json({ message: 'Error fetching rooms', error });
    }
});

module.exports = router;
