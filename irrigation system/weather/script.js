document.addEventListener('DOMContentLoaded', () => {
    // Function to fetch weather data
    async function fetchData(cityName) {
      const apiKey = '40f0cee054mshe591ef8d8183973p12c799jsn6a3399ef932b';
      const url = `https://weather-api138.p.rapidapi.com/weather?city_name=${cityName}`;
      const options = {
        method: 'GET',
        headers: {
          'X-RapidAPI-Key': apiKey,
          'X-RapidAPI-Host': 'weather-api138.p.rapidapi.com'
        }
      };
  
      try {
        const response = await fetch(url, options);
        if (!response.ok) {
          throw new Error('Network response was not ok');
        }
        const data = await response.json();
        updateWeatherUI(data, cityName); // Pass cityName to updateWeatherUI
      } catch (error) {
        console.error('Error fetching data:', error);
        alert('Error fetching weather data. Please try again later.');
      }
    }
  
    // Function to update weather UI
    function updateWeatherUI(data, cityName) {
      const temp = data.main?.temp;
      const humidity = data.main?.humidity;
      const temp_min = data.main?.temp_min;
      const temp_max = data.main?.temp_max;
      const pressure = data.main?.pressure;
      const feels_like = data.main?.feels_like;
      const speed = data.wind?.speed;
      const deg = data.wind?.deg;
      const country = data.sys?.country;
      const sunrise = new Date(data.sys?.sunrise * 1000).toLocaleTimeString();
      const sunset = new Date(data.sys?.sunset * 1000).toLocaleTimeString();
      const timezone = data?.timezone;
  
      document.getElementById('temp').textContent = `${temp} °C`;
      document.getElementById('humidity').textContent = `${humidity} %`;
      document.getElementById('temp_min').textContent = `${temp_min} °C`;
      document.getElementById('temp_max').textContent = `${temp_max} °C`;
      document.getElementById('pressure').textContent = `${pressure} hPa`;
      document.getElementById('feels_like').textContent = `${feels_like} °C`;
      document.getElementById('speed').textContent = `${speed} kmph`;
      document.getElementById('deg').textContent = `${deg} °`;
      document.getElementById('country').textContent = country;
      document.getElementById('sunrise').textContent = sunrise;
      document.getElementById('sunset').textContent = sunset;
      document.getElementById('timezone').textContent = timezone;
      document.getElementById('cityName').textContent = `Showing results for ${cityName}`;
    }
  
    // Handle search button click event
    const searchBtn = document.getElementById('searchBtn');
    searchBtn.addEventListener('click', () => {
      const cityInput = document.getElementById('cityInput').value.trim();
      if (!cityInput) {
        alert('Please enter a city name.');
        return;
      }
      fetchData(cityInput); // Fetch weather data for the entered city
    });
  
    // Load weather data for default city (Delhi) when the page loads
    fetchData('Delhi');
  });
  