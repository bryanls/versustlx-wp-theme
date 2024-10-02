function updateClockDisplay() {
    const date = new Date();

    // Get the day of the week in Spanish
    const dayOfWeek = date.toLocaleDateString('es-ES', { weekday: 'long' });

    // Get the day of the month
    const dayOfMonth = date.getDate();

    // Get the month in Spanish
    const month = date.toLocaleDateString('es-ES', { month: 'long' });

    // Get the year
    const year = date.getFullYear();

    // Get the hours, minutes, and seconds
    let hours = date.getHours();
    const minutes = date.getMinutes().toString().padStart(2, '0');
    const seconds = date.getSeconds().toString().padStart(2, '0');

    // Convert to 12-hour format
    let ampm = hours >= 12 ? 'pm' : 'am';
    hours = hours % 12;
    hours = hours ? hours : 12; // the hour '0' should be '12'

    // Concatenate all the parts
    const formattedDate = `${dayOfWeek}, ${dayOfMonth} de ${month} de ${year} &middot; ${hours}:${minutes} ${ampm}`;

    //console.log(formattedDate);
    document.getElementById('clock').innerHTML = formattedDate;
}

// Update the clock every second
setInterval(updateClockDisplay, 1000);

// Initialize the clock display
updateClockDisplay();