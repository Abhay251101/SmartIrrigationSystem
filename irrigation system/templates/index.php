

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Irrigation System</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    body{
        background-image: url('/loginsignup/irrigation system/images/3543885.jpg'); /* Add your image path */
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    }
</style>
</head>
<body>
    <div class="navbar">
        <div class="container-navbar">
            <div class="brand">
                <!-- <a href="#">Smart Irrigation System</a> -->
            </div>
            <div class="navbar-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="/loginsignup/irrigation system/weather/index.html">services</a></li>
                    <li><a href="/loginsignup/irrigation system/contact/contact.html">Contact</a></li>
                </ul>
                <div class="search-form">
                    <input type="text" placeholder="Search...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="weather-info">
                <?php
                    session_start();
                    if(isset($_SESSION['name'])) {
                        // User is logged in
                        echo '<p><i class="fas fa-user fa-2x"></i>Welcome, ' . $_SESSION['name'] . '</p>';

                    } else {
                        // User is not logged in
                        echo '<a href="login.php">Login</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="moving-headline-container">
        <div class="moving-headline">
            <span>Live Stock Prices:</span>
            <marquee behavior="scroll" direction="left">Corn(CBOT): 457$ | Wheat(CBOT): 638.25$ | Oats(CBOT): $400.00 | Cocoa(ICE): 8721.00$ | Coffee 'C'(ICE): 200.40$ | Rubber(Singapore): 163.10$ | Live Cattle(CME): 176.15$</marquee>
        </div>
    </div>

    <div class="container main-content">
        <div class="left-content">
            <h1>Smart Irrigation System</h1>
            <p id="auto-type"></p>
        </div>
        <div class="right-content">
            <!-- <img class="smart" src="/images/smartirrigation.jpg" alt="Smart Irrigation System Image"> -->
            <video class="smart" src="/loginsignup/irrigation%20system/images/I Could Watch Time Lapses Of Seeds Growing All Day.mp4" controls></video>
        </div>
    </div>

    <div class="container crops">
        <h2 style="text-decoration: underline;">Crops Information</h2>

        <div class="crop-info">
            <img src="/loginsignup/irrigation%20system/images/tomato.jpg" alt="Tomato">

            <h2>Tomato</h2>
            <p><strong>Fertilizer Needed:</strong> NPK (Nitrogen, Phosphorus, Potassium)</p>
            <p><strong>Water Needs:</strong> Regular watering, avoid waterlogging</p>
            <p><strong>Optimal Temperature:</strong> 18-30°C</p>
        </div>

        <div class="crop-info">
            <img src="/loginsignup/irrigation%20system/images/corn.jpg" alt="Corn">
            <h2>Corn</h2>
            <p><strong>Fertilizer Needed:</strong> NPK with higher nitrogen content</p>
            <p><strong>Water Needs:</strong> Regular watering during growth stages</p>
            <p><strong>Optimal Temperature:</strong> 21-32°C</p>
        </div>

        <div class="crop-info">
            <img src="/loginsignup/irrigation%20system/images/wheat.jpg" alt="Wheat">
            <h2>Wheat</h2>
            <p><strong>Fertilizer Needed:</strong> NPK with balanced nutrients</p>
            <p><strong>Water Needs:</strong> Moderate watering, avoid overwatering</p>
            <p><strong>Optimal Temperature:</strong> 12-24°C</p>
        </div>

        <div class="crop-info">
            <img src="/loginsignup/irrigation%20system/images/potato.jpg" alt="Potato">
            <h2>Potato</h2>
            <p><strong>Fertilizer Needed:</strong> High in potassium and phosphorus</p>
            <p><strong>Water Needs:</strong> Regular watering, maintain soil moisture</p>
            <p><strong>Optimal Temperature:</strong> 15-25°C</p>
        </div>

        <div class="crop-info">
            <img src="/loginsignup/irrigation%20system/images/carrot.jpg" alt="Carrot">
            <h2>Carrot</h2>
            <p><strong>Fertilizer Needed:</strong> Balanced fertilizer with higher phosphorus</p>
            <p><strong>Water Needs:</strong> Regular watering, keep soil moist</p>
            <p><strong>Optimal Temperature:</strong> 10-25°C</p>
        </div>

        <div class="crop-info">
            <img src="/loginsignup/irrigation%20system/images/lattuce.jpg" alt="Lettuce">
            <h2>Lettuce</h2>
            <p><strong>Fertilizer Needed:</strong> Balanced fertilizer with higher nitrogen</p>
            <p><strong>Water Needs:</strong> Regular watering, keep soil moist</p>
            <p><strong>Optimal Temperature:</strong> 10-20°C</p>
        </div>

        <div class="crop-info">
            <img src="/loginsignup/irrigation%20system/images/bell pepper.jpg" alt="Bell Pepper">
            <h2>Bell Pepper</h2>
            <p><strong>Fertilizer Needed:</strong> NPK with higher potassium</p>
            <p><strong>Water Needs:</strong> Regular watering, avoid water stress</p>
            <p><strong>Optimal Temperature:</strong> 18-32°C</p>
        </div>

        <div class="crop-info">
            <img src="/loginsignup/irrigation%20system/images/cucumber.jpg" alt="Cucumber">
            <h2>Cucumber</h2>
            <p><strong>Fertilizer Needed:</strong> NPK with micronutrients</p>
            <p><strong>Water Needs:</strong> Regular watering, maintain soil moisture</p>
            <p><strong>Optimal Temperature:</strong> 21-32°C</p>
        </div>

        <div class="crop-info">
            <img src="/loginsignup/irrigation%20system/images/onion.jpg" alt="Onion">
            <h2>Onion</h2>
            <p><strong>Fertilizer Needed:</strong> Balanced fertilizer with higher phosphorus</p>
            <p><strong>Water Needs:</strong> Moderate watering, avoid waterlogging</p>
            <p><strong>Optimal Temperature:</strong> 10-24°C</p>
        </div>

        <div class="crop-info">
            <img src="/loginsignup/irrigation%20system/images/spinach.jpg" alt="Spinach">
            <h2>Spinach</h2>
            <p><strong>Fertilizer Needed:</strong> Organic fertilizer with higher nitrogen</p>
            <p><strong>Water Needs:</strong> Regular watering, keep soil moist</p>
            <p><strong>Optimal Temperature:</strong> 10-24°C</p>
        </div>

        <!-- Add more crop-info divs with images for other crops -->

    </div>

    <!-- map -->
 <div class="map">
    <div class="map-img">
        <img src="/loginsignup/irrigation%20system/images/soilmap.png" alt="Soil Map">
    </div>
    <div class="mapdetails">
        <p>India's soil map paints a vibrant picture of diversity, showcasing a tapestry of soils that play a crucial role in the nation's agricultural landscape.This map tells about the different types of soils in different parts of India.The soil map of India reveals a spectrum of soils ranging from the red and yellow soils of the peninsular region to the sandy soils of coastal areas, each with unique characteristics and agricultural suitability.</p>
    </div>
    <div class="map2">
        <img class="map2-img" src="/loginsignup/irrigation%20system/images/map2.jpg" alt="Map-2">
        <p class="map2-details">India's agricultural map is a canvas painted with a diverse palette of crops across its states. From Punjab's golden wheat fields to Maharashtra's lush sugarcane plantations, each state contributes uniquely to the country's agricultural wealth. West Bengal's rice paddies, Karnataka's coffee plantations, and Uttar Pradesh's vast sugarcane fields stand as testaments to India's agricultural diversity and productivity. The agricultural tapestry extends to Bihar's maize fields, Tamil Nadu's horticultural wonders, and Rajasthan's resilient millets, showcasing the nation's ability to cultivate a wide range of crops across varied climates and terrains. This mosaic of crops not only feeds the nation but also sustains livelihoods and embodies India's agricultural resilience and ingenuity.</p>
    </div>
</div>
<div class="father-img">
                <ul>
                    <li><img src="/loginsignup/irrigation%20system/images/Albert.jpg" class="d-block father" alt="...">
                        <h2>Albert Howard</h2>
                        <p>Father of Organic Farming</p>
                        </li>
                        <li><img src="/loginsignup/irrigation%20system/images/hugh-bennett.jpg" class="d-block father" alt="...">
                            <h2>Bennet</h2>
                            <p>Father of Soil Erosion</p>
                        </li>
                        <li><img src="/loginsignup/irrigation%20system/images/Swaminathan.jpg" class="d-block father" alt="...">
                            <h2>MS Swaminathan</h2>
                            <p>Father of Green Revolution (India)</p>
                        </li>
                        <li><img src="/loginsignup/irrigation%20system/images/Borlaug.jpg" class="d-block father" alt="...">
                            <h2> NE Borlaug</h2>
                            <p>Father of Green Revolution (World)</p>
                        </li>
                        <li><img src="/loginsignup/irrigation%20system/images/Marigowda.jpg" class="d-block father" alt="...">
                            <h2>M.H. Marigowda</h2>
                            <p>Father of Soil Science (India)</p>
                        </li>
                        <li><img src="/loginsignup/irrigation%20system/images/pietro.jpg" class="d-block father" alt="...">
                            <h2>Pietro de' Crescenzi</h2>
                            <P>Father of Agronomy</P>
                        </li>
                </ul>
            </div>
            <!-- FOTTER -->
            <footer class="footer">
                <div class="social-icons">
                    <!-- Instagram -->
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    <!-- WhatsApp -->
                    <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    <!-- Twitter -->
                    <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                    <!-- Facebook -->
                    <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                </div>
                <div class="footer-text">
                    <p>&copy; 2024.</p>
                </div>
            </footer>
<script src="/loginsignup/irrigation system/static/script.js"></script>
</body>
</html>
