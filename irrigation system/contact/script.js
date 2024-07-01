// Get the compass needle element
const needle = document.querySelector('.compass-needle');

// Function to update compass direction based on alpha angle
function updateDirection(alpha) {
    const direction = document.getElementById('direction');
    let angle = alpha;

    if (alpha >= 0 && alpha <= 360) {
        angle = 360 - alpha; // Convert alpha to compass angle
    }

    // Update compass direction text (optional)
    let compassDirection = getCompassDirection(angle);
    direction.textContent = compassDirection;

    // Rotate the compass needle
    needle.style.transform = `translateX(-50%) rotate(${angle}deg)`;
}

// Function to get compass direction based on angle
function getCompassDirection(angle) {
    const directions = ['N', 'NE', 'E', 'SE', 'S', 'SW', 'W', 'NW'];
    const index = Math.round(angle / 45) % 8;
    return directions[index];
}

// Event listener for device orientation change
window.addEventListener('deviceorientation', handleOrientation);

// Function to handle device orientation change
function handleOrientation(event) {
    // Check for absolute alpha (0 to 360) values
    if (event.absolute === true && event.alpha !== null) {
        updateDirection(event.alpha);
    }
}
