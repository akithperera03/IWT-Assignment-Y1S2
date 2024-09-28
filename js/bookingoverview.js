function displayDateTime() {
    const now = new Date();
    const dateTimeString = now.toLocaleString(); // Format date and time
    document.getElementById('dateTime').innerText = dateTimeString;
}
window.onload = displayDateTime;

document.addEventListener("DOMContentLoaded", () => {
    const guestListBody = document.getElementById('guest-list-body');
    const addGuestBtn = document.getElementById('add-guest-btn');
    const orderIdDropdown = document.getElementById('order-id-dropdown');
    
    addGuestBtn.addEventListener('click', () => {
        const orderId = orderIdDropdown.value;
        if (orderId) {
            const newRow = document.createElement('tr');
            newRow.innerHTML = `
                <td>${guestListBody.children.length + 1}</td>
                <td>NewID</td>
                <td>New Guest</td>
                <td>NewNIC</td>
                <td>${orderId}</td>
                <td><button class="edit-btn"><i class="fas fa-edit"></i>Edit</button></td>
                <td><button class="delete-btn"><i class="fas fa-trash"></i>Delete</button></td>
            `;
            guestListBody.appendChild(newRow);
            orderIdDropdown.value = ''; // Clear dropdown
        } else {
            alert("Please select an Order ID.");
        }
    });

   
});


// JavaScript for delete functionality with confirmation
const deleteButtons = document.querySelectorAll('.delete-btn');

deleteButtons.forEach(button => {
    button.addEventListener('click', function () {
        const row = this.closest('tr');
        const isConfirmed = confirm('Are you sure you want to delete this entry?');

        if (isConfirmed) {
            row.remove();  // Remove row if the user confirms
        }
    });
});