<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
  <title>Big Deal Ventures</title>
  <link rel="icon" href="img/logo.png" type="image/png">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href="https://fonts.cdnfonts.com/css/sf-pro-display" rel="stylesheet">
                
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Figtree:ital,wght@0,300..900;1,300..900&family=Gugi&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body class="article-page">
  <section class="container-fluid p-0">
     <div class="nav1">
    <nav class="navbar navbar-expand-md navbar-light bg-white">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="#">Products</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Solutions</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Community</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Resources</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark" href="#">Link</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <a class="navbar-brand" href="#">
      <img src="img/logo.png" alt="Big Deal Ventures Logo" />
    </a>
    </div>
    </section>

    <div class="container">
      <div class="row">
        <div class="nav-tabs-custom mx-auto">
          <button class="active" type="button">Buy</button>
          <button type="button">Rent</button>
          <button type="button">Commercial</button>
          <button type="button">PG/Co Living</button>
          <button type="button">1BHK/Studio</button>
          <button type="button">Plot</button>
        </div>
      </div>

      <!-- Select city -->
      <div class="custom-select-wrapper">
        <select class="custom-select" name="city" id="city-select" aria-label="Select city">
          <option disabled selected>Select city</option>
          <option value="newyork">New York</option>
          <option value="losangeles">Los Angeles</option>
          <option value="chicago">Chicago</option>
          <option value="houston">Houston</option>
          <option value="miami">Miami</option>
        </select>
      </div>
    </div>
  </section>

  <!-- Property Listing Section -->
  <section class="property-listing-section container ">
    <div class="row d-flex">

      <!-- Sidebar Filters -->
      <div class="col-md-4">
       
        <aside class="filter-sidebar" aria-label="Property filters">

    <!-- Applied Filters + Clear All -->
    <div class="filter-header">
      <h2>Applied Filters</h2>
      <button class="clear-btn" id="clearAllBtn">Clear All</button>
    </div>

    <!-- Applied filters tags container -->
    <div class="applied-filters" id="appliedFiltersContainer"></div>

    <!-- Budget Section -->
    <section class="filter-section" id="budgetSection">
      <div class="filter-section-header" tabindex="0" data-toggle-target="budgetSection">
        Budget
        <span class="caret"></span>
      </div>
      <div class="filter-section-content">
          <div class="double-range" id="doubleRange1">
    <input type="range" id="minRange1" min="0" max="5000" step="50" value="500" />
    <input type="range" id="maxRange1" min="0" max="5000" step="50" value="4000" />
    <div class="slider-track"></div>
    <div class="slider-range" id="sliderRange1"></div>
  </div>
  <div class="range-labels" id="rangeLabels1">
    <span id="minLabel1">500</span>
    <span id="maxLabel1">4000</span>
  </div>


      </div>
    </section>

    <!-- Types of property -->
    <section class="filter-section" id="propertyTypeSection">
      <div class="filter-section-header" tabindex="0" data-toggle-target="propertyTypeSection">
        Types of property
        <span class="caret"></span>
      </div>
      <div class="filter-section-content">
        <div class="tag-list" id="propertyTypeTags">
          <div class="tag" data-filter="propertyType" data-value="Residential Apartment">Residential Apartment   <span class="add-icon">+</span></div>
          <div class="tag" data-filter="propertyType" data-value="Residential Land">Residential Land <span class="add-icon">+</span></div>
          <div class="tag" data-filter="propertyType" data-value="Incorporated House/Villa">Incorporated House/Villa <span class="add-icon">+</span></div>
          <div class="tag" data-filter="propertyType" data-value="Residential Lands">Residential Lands <span class="add-icon">+</span></div>
          <div class="tag" data-filter="propertyType" data-value="Independent/Duplex Floor">Independent/Duplex Floor <span class="add-icon">+</span></div>
        </div>
      </div>
    </section>

    <!-- No of Bedrooms -->
    <section class="filter-section" id="bedroomsSection">
      <div class="filter-section-header" tabindex="0" data-toggle-target="bedroomsSection">
        No of Bedrooms
        <span class="caret"></span>
      </div>
      <div class="filter-section-content">
        <div class="tag-list bedroom-tags" id="bedroomTags">
          <div class="tag" data-filter="bedrooms" data-value="1 RK/1 BHK"><span class="add-icon">+</span> 1 RK/1 BHK </div>
          <div class="tag" data-filter="bedrooms" data-value="2 BHK"><span class="add-icon">+</span> 2 BHK </div>
          <div class="tag" data-filter="bedrooms" data-value="3 BHK"><span class="add-icon">+</span> 3 BHK </div>
        </div>
      </div>
    </section>

    <!-- Construction status -->
    <section class="filter-section" id="constructionStatusSection">
      <div class="filter-section-header" tabindex="0" data-toggle-target="constructionStatusSection">
        Construction status
        <span class="caret"></span>
      </div>
      <div class="filter-section-content">
        <div class="tag-list" id="constructionStatusTags">
          <div class="tag" data-filter="constructionStatus" data-value="New Launch">New Launch <span class="add-icon">+</span></div>
          <div class="tag" data-filter="constructionStatus" data-value="Under Construction">Under Construction <span class="add-icon">+</span></div>
          <div class="tag" data-filter="constructionStatus" data-value="Ready to Move">Ready to Move <span class="add-icon">+</span></div>
        </div>
      </div>
    </section>

    <!-- Area Section -->
    <section class="filter-section" id="areaSection">
      <div class="filter-section-header" tabindex="0" data-toggle-target="areaSection">
        Area
        <span class="caret"></span>
      </div>
       <div class="filter-section-content">
          <div class="double-range" id="doubleRange2">
    <input type="range" id="minRange2" min="0" max="5000" step="50" value="500" />
    <input type="range" id="maxRange2" min="0" max="5000" step="50" value="4000" />
    <div class="slider-track"></div>
    <div class="slider-range" id="sliderRange2"></div>
  </div>
  <div class="range-labels" id="rangeLabels2">
    <span id="minLabel2">500</span>
    <span id="maxLabel2">4000</span>
  </div>


      </div>
    </section>

    <!-- Localities Section -->
    <section class="filter-section" id="localitiesSection">
      <div class="filter-section-header" tabindex="0" data-toggle-target="localitiesSection">
        Localities
        <span class="caret"></span>
      </div>
      <div class="filter-section-content">
        <div class="locality-list" id="localitiesList">
          <label><input type="checkbox" data-filter="localities" value="Kadri" /> Kadri</label>
          <label><input type="checkbox" data-filter="localities" value="Bejai" /> Bejai</label>
          <label><input type="checkbox" data-filter="localities" value="Surathkal" /> Surathkal</label>
          <label><input type="checkbox" data-filter="localities" value="Ujire" /> Ujire</label>
          <label><input type="checkbox" data-filter="localities" value="Mangalore" /> Mangalore</label>
        </div>
        <div class="more-localities" id="toggleMoreLocalities">+ More Localities</div>
        <div class="locality-list" id="extraLocalities" style="display:none; margin-top: 12px;">
          <label><input type="checkbox" data-filter="localities" value="Puttur" /> Puttur</label>
          <label><input type="checkbox" data-filter="localities" value="Moodbidri" /> Moodbidri</label>
          <label><input type="checkbox" data-filter="localities" value="Kankanady" /> Kankanady</label>
          <label><input type="checkbox" data-filter="localities" value="Deralakatte" /> Deralakatte</label>
        </div>
      </div>
    </section>
  </aside>  


      </div>

      <!-- Property Results -->
      <div  class="col-md-8 aproperty">
        <h2>1085 results | Property in <span class="highlight-city">Mangaluru</span> for Sale</h2>

        <div class="aproperty-cards">
              
         <div class="aproperty-card" style="display: flex; align-items: center; gap: 20px;">
            <img src="img/prop/aprop1.png" alt="Pooja Apartment" class="property-image" />
            <div class="property-info" style="flex: 1;">
              <h3>Pooja Apartment <br>
              <span>3 BHK House in kadri, Mangaluru</span></h3>
              <p>Nearby: St Theresa's ICSE School - 0.1 km • KMC Hospital Mangaluru - 0.4 km • Machali - 0.1 km • City Centre Mall - 0.1 km</p>
              <div class="property-details" style="display: flex; justify-content: space-between; max-width: 600px;">
                <span>3 BHK ₹98 L</span>
                <span>1000 sq.ft Builtup area</span>
                <span>Ready to move Possession status</span>
              </div>
              <div class="property-actions" style="display: flex; justify-content: space-between; align-items: center; max-width: 600px;">
                <p class="property-time">3mo ago</p>
                  <div class="btn-grp" style="display: flex; gap: 10px;">
                      <button class="btn btn-share">Share</button>
                    <button class="btn btn-contact">Contact us</button>
                  </div>
              </div>
           </div>
          </div>
       
          <div class="aproperty-card" style="display: flex; align-items: center; gap: 20px;">
            <img src="img/prop/aprop1.png" alt="Pooja Apartment" class="property-image" />
            <div class="property-info" style="flex: 1;">
              <h3>Pooja Apartment <br>
              <span>3 BHK House in kadri, Mangaluru</span></h3>
              <p>Nearby: St Theresa's ICSE School - 0.1 km • KMC Hospital Mangaluru - 0.4 km • Machali - 0.1 km • City Centre Mall - 0.1 km</p>
              <div class="property-details" style="display: flex; justify-content: space-between; max-width: 600px;">
                <span>3 BHK ₹98 L</span>
                <span>1000 sq.ft Builtup area</span>
                <span>Ready to move Possession status</span>
              </div>
              <div class="property-actions" style="display: flex; justify-content: space-between; align-items: center; max-width: 600px;">
                <p class="property-time">3mo ago</p>
                  <div class="btn-grp" style="display: flex; gap: 10px;">
                      <button class="btn btn-share">Share</button>
                    <button class="btn btn-contact">Contact us</button>
                  </div>
              </div>
           </div>
          </div>
          
          <div class="aproperty-card" style="display: flex; align-items: center; gap: 20px;">
            <img src="img/prop/aprop2.png" alt="Pooja Apartment" class="property-image" />
            <div class="property-info" style="flex: 1;">
              <h3>Pooja Apartment <br>
              <span>3 BHK House in kadri, Mangaluru</span></h3>
              <p>Nearby: St Theresa's ICSE School - 0.1 km • KMC Hospital Mangaluru - 0.4 km • Machali - 0.1 km • City Centre Mall - 0.1 km</p>
              <div class="property-details" style="display: flex; justify-content: space-between; max-width: 600px;">
                <span>3 BHK ₹98 L</span>
                <span>1000 sq.ft Builtup area</span>
                <span>Ready to move Possession status</span>
              </div>
              <div class="property-actions" style="display: flex; justify-content: space-between; align-items: center; max-width: 600px;">
                <p class="property-time">3mo ago</p>
                  <div class="btn-grp" style="display: flex; gap: 10px;">
                      <button class="btn btn-share">Share</button>
                    <button class="btn btn-contact">Contact us</button>
                  </div>
              </div>
           </div>
          </div>
          <div class="aproperty-card" style="display: flex; align-items: center; gap: 20px;">
            <img src="img/prop/aprop3.png" alt="Pooja Apartment" class="property-image" />
            <div class="property-info" style="flex: 1;">
              <h3>Pooja Apartment <br>
              <span>3 BHK House in kadri, Mangaluru</span></h3>
              <p>Nearby: St Theresa's ICSE School - 0.1 km • KMC Hospital Mangaluru - 0.4 km • Machali - 0.1 km • City Centre Mall - 0.1 km</p>
              <div class="property-details" style="display: flex; justify-content: space-between; max-width: 600px;">
                <span>3 BHK ₹98 L</span>
                <span>1000 sq.ft Builtup area</span>
                <span>Ready to move Possession status</span>
              </div>
              <div class="property-actions" style="display: flex; justify-content: space-between; align-items: center; max-width: 600px;">
                <p class="property-time">3mo ago</p>
                  <div class="btn-grp" style="display: flex; gap: 10px;">
                      <button class="btn btn-share">Share</button>
                    <button class="btn btn-contact">Contact us</button>
                  </div>
              </div>
           </div>
          </div>

          <div class="aproperty-card" style="display: flex; align-items: center; gap: 20px;">
            <img src="img/prop/aprop4.png" alt="Pooja Apartment" class="property-image" />
            <div class="property-info" style="flex: 1;">
              <h3>Pooja Apartment <br>
              <span>3 BHK House in kadri, Mangaluru</span></h3>
              <p>Nearby: St Theresa's ICSE School - 0.1 km • KMC Hospital Mangaluru - 0.4 km • Machali - 0.1 km • City Centre Mall - 0.1 km</p>
              <div class="property-details" style="display: flex; justify-content: space-between; max-width: 600px;">
                <span>3 BHK ₹98 L</span>
                <span>1000 sq.ft Builtup area</span>
                <span>Ready to move Possession status</span>
              </div>
              <div class="property-actions" style="display: flex; justify-content: space-between; align-items: center; max-width: 600px;">
                <p class="property-time">3mo ago</p>
                  <div class="btn-grp" style="display: flex; gap: 10px;">
                      <button class="btn btn-share">Share</button>
                    <button class="btn btn-contact">Contact us</button>
                  </div>
              </div>
           </div>
          </div>

  


          



          </div>
        </div>
      </div >
    
  </section>

  

 <!-- contact  -->
    <section class="contact-section ">
      <h2 class="blac2 col-md-6 sfpro">
        Connect With Our Experts
      </h2>
      <p class="blac2-sub poppins">
        Our team is here to help you find your perfect home.
      </p>
       <div class="btn-stack">
    <button class="btn-black"></button>
    <button class="btn-red">Contact Us Now</button>
  </div>
      <div class="d-flex align-items-center flex-column flex-md-row">
        <hr class="section-divider">
        <img class="house-img" src="img/prop/prop4.png" alt="Modern House" />
      </div>
    </section>



    
  <!-- about section  -->


    <section class="about-section container">
  <div class="about-image">
    <img src="img/prop/bhouse2.png" alt="aboutimg" />
  </div>
  <div class="about-content">
    <h1>
      Hello City We are <br> leader in <span class="highlight">properties.</span>
       <img src="img/ARROW.png" alt="arrow" class="arrow">
    </h1>
     <p>
      Your dream home isn’t just a vision — it’s a reality waiting for you. As leaders in real estate, we specialize in crafting experiences where luxury meets comfort, and investment meets trust. Explore our handpicked collection of properties designed for modern lifestyles and lasting value.
    </p>
    <button class="btn-arrow">
      View More <span>→</span>
    </button>
    <div class="about-stats">
      <div><span class="stat-number">100+</span><br>Project</div>
      <div><span class="stat-number">100+</span><br>Project</div>
      <div><span class="stat-number">100+</span><br>Project</div>
      <div><span class="stat-number">100+</span><br>Project</div>
    </div>
  </div>
    </section>


     
<footer class="container">
  <hr class="section-divider">
  <div class="row ">

    <div class="col-md-4 footer">
    <img src="img/logo.png" alt="footer logo">
  <p>Big Deal Real Estate is your trusted partner in buying, selling, and investing in properties. 
    We focus on transparency, professionalism, and making your real estate journey simple and hassle-free.</p>

    <div>
      <a href="https://facebook.com"><img src="https://img.icons8.com/material-rounded/25/facebook-new.png" clxass="social-icon"></a>
      <a href="https://instagram.com"><img src="https://img.icons8.com/material-rounded/25/instagram-new.png" class="social-icon"></a>
      <a href="https://linkedin.com"><img src="https://img.icons8.com/material-rounded/25/linkedin--v1.png" class="social-icon"></a>
      <a href="https://youtube.com"><img src="https://img.icons8.com/material-rounded/25/youtube-play.png" class="social-icon"></a>
    </div>
  </div>



    <div class=" col-md-2 footer-column">
                        <h3>Navigation</h3>
                        <ul class="footer-links">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Home</a></li>
                            
                        </ul>
      </div>

      <div class=" col-md-3 footer-column">
                        <h3>Contact</h3>
                        <ul class="footer-links">
                            <li>+918197458962</li>
                            <li>info@bigdeal.com</li>
                            <li>Kankanady Gate building, Mangalore</li>  
                        </ul>
      </div>

      <div class=" col-md-3 footer-column">
          <h3>Get the latest information</h3>
        <div id="search-wrapper">

  
<input type="email" id="search" placeholder="Email address">
<button id="search-button"><img src="img/icon/sendw.png" alt="send"></button>

  </div>
  </div>

  <hr class="section-divider">

   <div class="col-md-12 d-flex justify-content-between align-items-center">

            <p >
   &copy;<script>document.write(new Date().getFullYear());</script> Big Deal Real Estate
 </p>
 <p >
   Developed by
 </p>
          </div>

</footer>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scripts.js" defer></script>
</body>
</html>
