async function fetchAvailableRooms() {
    const response = await fetch('/available-rooms');
    const rooms = await response.json();

    if (response.ok) {
        console.log(rooms);
        let roomList = document.getElementById('roomList');
        roomList.innerHTML = rooms.map(room => `<li>${room.roomNumber} - ${room.type} ($${room.price})</li>`).join('');
    } else {
        alert('Error fetching available rooms');
    }
}
