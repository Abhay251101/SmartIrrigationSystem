document.addEventListener("DOMContentLoaded", function () {
    const text = "Our smart irrigation system revolutionizes traditional farming practices by leveraging intelligent automation and data-driven insights. Tailored for sustainable agriculture, it optimizes water distribution based on crop requirements, soil conditions, and weather forecasts. This precision irrigation approach ensures each plant receives the ideal amount of water for healthy growth while conserving valuable resources.";
    const autoTypeElement = document.getElementById("auto-type");

    function autoType(text, element, delay = 50) {
        let charIndex = 0;
        const intervalId = setInterval(() => {
            element.textContent += text[charIndex];
            charIndex++;
            if (charIndex === text.length) {
                clearInterval(intervalId);
            }
        }, delay);
    }

    autoType(text, autoTypeElement); // Start auto-typing effect
});


document.addEventListener("DOMContentLoaded", function () {
    const cropInfoDivs = document.querySelectorAll('.crop-info');

    const fetchCropInfo = async (cropName, divId) => {
        const response = await fetch(`/crop/${cropName}`);
        const data = await response.json();

        const cropDiv = document.getElementById(divId);
        if (cropDiv) {
            cropDiv.innerHTML = `
                <h2>${cropName}</h2>
                <p><strong>Fertilizer Needed:</strong> ${data.fertilizer}</p>
                <p><strong>Water Needs:</strong> ${data.water_need}</p>
                <p><strong>Optimal Temperature:</strong> ${data.temperature}</p>
                <div id="weather-${cropName}"></div> <!-- Weather info container -->
            `;
            
            // Fetch weather info and update the DOM
            fetchWeatherInfo(cropName);
        }
    };

    const fetchWeatherInfo = async (cropName) => {
        const apiKey = '0bfb344f32200b87f1368732ed6b7d36';
        const city = 'Mussoorie'; // Update with your city name
        const apiUrl = 'https://api.openweathermap.org/data/3.0/onecall?lat=35.1234&lon=-105.5678&exclude=hourly&appid=0bfb344f32200b87f1368732ed6b7d36';
        
        try {
            const response = await fetch(apiUrl);
            const weatherData = await response.json();
            const weatherDiv = document.getElementById(`weather-${cropName}`);
            if (weatherDiv) {
                weatherDiv.innerHTML = `
                    <p><strong>Weather:</strong> ${weatherData.weather[0].description}</p>
                    <p><strong>Temperature:</strong> ${weatherData.main.temp}°C</p>
                    <p><strong>Humidity:</strong> ${weatherData.main.humidity}%</p>
                `;
            }
        } catch (error) {
            console.error('Error fetching weather data:', error);
        }
    };

    cropInfoDivs.forEach((div) => {
        const cropName = div.id.replace("-info", ""); // Get crop name from div ID
        fetchCropInfo(cropName, div.id);
    });
});
setInterval(() => {
    const price1 = Math.floor(Math.random() * 1000) + 100; // Example random price
    const price2 = Math.floor(Math.random() * 1000) + 100; // Example random price
    document.getElementById('headline1').textContent = `Live Price: $${price1} (Crop 1)`;
    document.getElementById('headline2').textContent = `Live Price: $${price2} (Crop 2)`;
    // Update more headlines as needed
}, 3000); // Update every 3 seconds (adjust as needed)


