<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
     <div class="w3-top">
  <div class="w3-bar w3-card navbar-container" id="myNavbar">
    
    <!-- Logo and Brand Name -->
    <a href="#home" class="w3-bar-item w3-button w3-wide">
      <!-- <img src="#"> -->
      <span class="brand-name">Comfort Zone</span>
    </a>
    

    <!-- Search Bar -->
    <!-- <div class="search-container">
      <input type="text" class="search-box" id="searchBox" placeholder="Product ka naam likho (Mobile, Laptop, Fan, Computer...)">
      <button class="search-btn" onclick="searchAmazon()">🔎 Search</button>
    </div> -->
     <div class="search-container">
        <div class="search-wrapper">
            <span class="search-icon">🔍</span>
            <input type="text" class="search-box" id="searchBox" placeholder="Product ka naam likho (Mobile, Laptop, Fan, Computer...)" onkeypress="handleKeyPress(event)">
            <span class="clear-icon" onclick="clearSearch()">❌</span>
        </div>
        <button class="search-btn" onclick="searchAmazon()">Search</button>
    </div>

    <!-- Navbar Links -->
    <div class="nav-links">
      <a id="https" href="#about" class="nav-item about">ABOUT</a>
      <a id="shyam" href="#team" class="nav-item shopping">SHOPPING</a>
      <a id="home" href="#work" class="nav-item work">WORK</a>
      <a id="ram" href="#pricing" class="nav-item pricing">PRICING</a>
      <a id="mahadev" href="#contact" class="nav-item contact">CONTACT</a>
    </div>

  </div>
</div>

<style>
 
  .navbar-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 12px 20px;
    position: relative;
    background: #222; 
    border-radius: 10px;
    box-shadow: 0 0 15px rgba(255, 87, 51, 0.8); 
    border: 3px solid transparent;
    animation: blinkBorder 1.5s infinite alternate;
  }

  
  @keyframes blinkBorder {
    0% {
      border-color: #ff5733;
    }
    50% {
      border-color: #33ff57;
    }
    100% {
      border-color: #3357ff;
    }
  }

  
  .brand-name {
    font-size: 24px;
    font-weight: bold;
    color: #ff5733;
    text-transform: uppercase;
    margin-left: 10px;
    transition: 0.3s;
  }

  .brand-name:hover {
    color: #33ff57;
  }

  
  .search-container {
    display: flex;
    align-items: center;
    flex-grow: 1;
    justify-content: center;
    margin: 0 20px;
  }

  /*.search-box {
    width: 450px;
    padding: 12px;
    font-size: 16px;
    border: 2px solid #ff5733;
    border-radius: 5px;
    background: #333;
    color: white;
    transition: 0.3s;
  }

  .search-box:focus {
    border-color: #33ff57;
    outline: none;
  }
*/ 

  
  .search-box {
    width: 450px;
    padding: 12px;
    font-size: 16px;
    font-weight: bold;
    border: 2px solid #ff5733;
    border-radius: 5px;
    background: white; 
    color: #ff5733; 
    transition: 0.3s;
  }

  
  .search-box::placeholder {
    color: #888;
    font-style: italic;
    font-weight: bold;
  }

 
  .search-box:focus {
    border-color: #33ff57;
    outline: none;
    color: #3357ff; 
    font-size: 17px;
  }


  .search-btn {
    padding: 12px 20px;
    margin-left: 10px;
    background: linear-gradient(45deg, #ff5733, #3357ff);
    color: white;
    font-size: 16px;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
  }

  .search-btn:hover {
    background: linear-gradient(45deg, #3357ff, #ff5733);
    transform: scale(1.05);
  }

  
  .nav-links {
    display: flex;
    gap: 15px;
  }

  .nav-item {
    padding: 12px 18px;
    font-size: 16px;
    font-weight: bold;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    transition: 0.3s;
  }

  
  .about {
    background: linear-gradient(45deg, #ff5733, #ff8c33);
  }

  .shopping {
    background: linear-gradient(45deg, #33ff57, #57ff8c);
  }

  .work {
    background: linear-gradient(45deg, #3357ff, #57a3ff);
  }

  .pricing {
    background: linear-gradient(45deg, #ff33a3, #ff57c3);
  }

  .contact {
    background: linear-gradient(45deg, #a333ff, #c357ff);
  }

  /* Hover Effects */
  .nav-item:hover {
    transform: scale(1.1);
    box-shadow: 0 0 10px rgba(255, 255, 255, 0.7);
  }
</style>

<style>
        /* Search Bar Styling */
        .search-container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            margin: 0 20px;
        }

        /* Wrapper for Input & Icons */
        .search-wrapper {
            position: relative;
            display: flex;
            align-items: center;
        }

        /* Search Box */
        .search-box {
            width: 450px;
            padding: 12px 40px 12px 35px; /* Space for the icon */
            font-size: 16px;
            font-weight: bold;
            border: 2px solid #ff5733;
            border-radius: 5px;
            background: white;
            color: #ff5733;
            transition: 0.3s;
        }

        /* Placeholder Text Styling */
        .search-box::placeholder {
            color: #888;
            font-style: italic;
            font-weight: bold;
        }

        /* Search Box Focus Effect */
        .search-box:focus {
            border-color: #33ff57;
            outline: none;
            color: #3357ff;
            font-size: 17px;
        }

        /* Search Icon Styling */
        .search-icon {
            position: absolute;
            left: 10px;
            font-size: 18px;
            color: #ff5733;
        }

        /* Clear Icon Styling */
        .clear-icon {
            position: absolute;
            right: 10px;
            font-size: 18px;
            color: #ff5733;
            cursor: pointer;
            display: none; /* Hidden by default */
        }

        .search-box:not(:placeholder-shown) + .clear-icon {
            display: block; /* Show when input is not empty */
        }

        /* Search Button */
        .search-btn {
            padding: 12px 20px;
            margin-left: 10px;
            background: linear-gradient(45deg, #ff5733, #3357ff);
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        /* Button Hover Effect */
        .search-btn:hover {
            background: linear-gradient(45deg, #3357ff, #ff5733);
            transform: scale(1.05);
        }
    </style>

    <script>
        // ✅ Function to Handle Search
        function searchAmazon() {
            var query = document.getElementById("searchBox").value.toLowerCase();

            var links = {
                "watch": "http://localhost/College_life_project.php/Sweta1.php",
                "smart watch":"http://localhost/College_life_project.php/Sweta1.php",
                "fastrackewatch":"http://localhost/College_life_project.php/product%20card8.php",
                "watch for women":"http://localhost/College_life_project.php/product%20card8.php",
                "fastrackiwatch":"http://localhost/College_life_project.php/product%20card8.php",
                "fastrac ki watch":"http://localhost/College_life_project.php/product%20card8.php",
                "fastrac ki ghari":"http://localhost/College_life_project.php/product%20card8.php",
                "fastrackighari":"http://localhost/College_life_project.php/product%20card8.php",
                "boat watch":"http://localhost/College_life_project.php/product%20card8.php",
                "boatkewatch":"http://localhost/College_life_project.php/product%20card8.php",
                "boat ki watch":"http://localhost/College_life_project.php/product%20card8.php",
                "smartwatchno.1":"http://localhost/College_life_project.php/Sweta1.php",
                "smart watch no.1":"http://localhost/College_life_project.php/Sweta1.php",





                "keyboard": "http://localhost/College_life_project.php/anjali1.php",

                "smart keyboard":"http://localhost/College_life_project.php/anjali1.php",

                "Wireless keyboard":"http://localhost/College_life_project.php/anjali1.php",

                "best keyboard":"http://localhost/College_life_project.php/anjali1.php",

                "zebronics ki keyboard":"http://localhost/College_life_project.php/anjali1.php",

                "asus ki keyboard":"http://localhost/College_life_project.php/anjali1.php",

                "hp ki keyboard":"http://localhost/College_life_project.php/anjali1.php",

                "goodkeyboard":"http://localhost/College_life_project.php/anjali1.php",

                "led keyboard":"http://localhost/College_life_project.php/anjali1.php",

                "lenvo ki keyboard":"http://localhost/College_life_project.php/anjali1.php",

                " ki keyboard":"http://localhost/College_life_project.php/anjali1.php",

                "smart keyboard sabe best":"http://localhost/College_life_project.php/anjali1.php",

                "smart keyboard no.1":"http://localhost/College_life_project.php/anjali1.php",






               //  "bottle": "http://localhost/College_life_project.php/anjali2.php",

               //  "smart bottle": "http://localhost/College_life_project.php/anjali2.php",

               //  "still ki bottle": "http://localhost/College_life_project.php/anjali2.php",

               //  "good bottle": "http://localhost/College_life_project.php/anjali2.php",

               //  "best bottle": "http://localhost/College_life_project.php/anjali2.php",

               //  "water bottle": "http://localhost/College_life_project.php/anjali2.php",

               // "strong bottle": "http://localhost/College_life_project.php/anjali2.php",

/*---------------------------1--------------------------------*/

                "smart camra no.1":"http://localhost/College_life_project.php/product%20card2.php",
                "Smart Camra No.1":"http://localhost/College_life_project.php/product%20card2.php",
                "smart camra":"http://localhost/College_life_project.php/product%20card2.php",
                "Smart Camra":"http://localhost/College_life_project.php/product%20card2.php",
                "camra":"http://localhost/College_life_project.php/product%20card2.php",
                "Camra":"http://localhost/College_life_project.php/product%20card2.php",

/*---------------------------2--------------------------------*/


                "smart bottle":"http://localhost/College_life_project.php/anjali2.php",
                "Smart bottle":"http://localhost/College_life_project.php/anjali2.php",  
                "bottle":"http://localhost/College_life_project.php/anjali2.php",
                "bottle":"http://localhost/College_life_project.php/anjali2.php",
                "bottle no.1":"http://localhost/College_life_project.php/anjali2.php",
                "bottle No.1":"http://localhost/College_life_project.php/anjali2.php",

/*---------------------------3--------------------------------*/


                "Smart Shirt":"http://localhost/College_life_project.php/anjali3.php",
                "smart shirt":"http://localhost/College_life_project.php/anjali3.php",
                "Shirt":"http://localhost/College_life_project.php/anjali3.php",
                "shirt":"http://localhost/College_life_project.php/anjali3.php",
                "best quality of shirt":"http://localhost/College_life_project.php/anjali3.php",
                "Best quality Of Shirt":"http://localhost/College_life_project.php/anjali3.php",

/*---------------------------4--------------------------------*/

                

/*---------------------------5--------------------------------*/



                "Hot Bag":"http://localhost/College_life_project.php/anjali5.php",
                "hot bag":"http://localhost/College_life_project.php/anjali5.php",
                "Smart Bag":"http://localhost/College_life_project.php/anjali5.php",
                "smart bag":"http://localhost/College_life_project.php/anjali5.php",

                "best quality ki bag":"http://localhost/College_life_project.php/anjali5.php",
                "Best Qulity Ki Bag":"http://localhost/College_life_project.php/anjali5.php",
                "Bag":"http://localhost/College_life_project.php/anjali5.php",
                "bag":"http://localhost/College_life_project.php/anjali5.php",

/*---------------------------6--------------------------------*/


                "medicine":"http://localhost/College_life_project.php/anjali4.php",
                "Medicine":"http://localhost/College_life_project.php/anjali4.php",
                "Good medicine":"http://localhost/College_life_project.php/anjali4.php",
                "dava":"http://localhost/College_life_project.php/anjali4.php",

                "Dava":"http://localhost/College_life_project.php/anjali4.php",
                "Medical":"http://localhost/College_life_project.php/anjali4.php",

/*---------------------------7--------------------------------*/

                "sunscreen":"http://localhost/College_life_project.php/Sweta2.php",
                "Sunscreen":"http://localhost/College_life_project.php/Sweta2.php",
                "Sun Screen":"http://localhost/College_life_project.php/Sweta2.php",
                "sun screen":"http://localhost/College_life_project.php/Sweta2.php",

                "cream":"http://localhost/College_life_project.php/Sweta2.php",
                "Cream":"http://localhost/College_life_project.php/Sweta2.php",
                "Sun Screen Cream":"http://localhost/College_life_project.php/Sweta2.php",
                "sun screen cream":"http://localhost/College_life_project.php/Sweta2.php",

/*---------------------------8--------------------------------*/


                "Laptop":"http://localhost/College_life_project.php/Sweta3.php",
                "laptop":"http://localhost/College_life_project.php/Sweta3.php",
                "best laptop":"http://localhost/College_life_project.php/Sweta3.php",
                "Best Laptop":"http://localhost/College_life_project.php/Sweta3.php",

                "Asus ki Laptop":"http://localhost/College_life_project.php/Sweta3.php",
                "asus ki laptop":"http://localhost/College_life_project.php/Sweta3.php",
                "HP ki Laptop":"http://localhost/College_life_project.php/Sweta3.php",
                "hp ki laptop":"http://localhost/College_life_project.php/Sweta3.php",
                "Hp ki Laptop":"http://localhost/College_life_project.php/Sweta3.php",
                "Lenvo ki laptop":"http://localhost/College_life_project.php/Sweta3.php",
                "lenvo ki Laptop":"http://localhost/College_life_project.php/Sweta3.php",
                "Musi ki laptop":"http://localhost/College_life_project.php/Sweta3.php",

/*---------------------------9--------------------------------*/


                "Trolly Bag":"http://localhost/College_life_project.php/Sweta4.php",
                "trolly bag":"http://localhost/College_life_project.php/Sweta4.php",
                "Best Trolly Bag":"http://localhost/College_life_project.php/Sweta4.php",
                "best trolly bag":"http://localhost/College_life_project.php/Sweta4.php",

                "Bags":"http://localhost/College_life_project.php/Sweta4.php",
                "bags":"http://localhost/College_life_project.php/Sweta4.php",
/*---------------------------10--------------------------------*/


                "Lipstic":"http://localhost/College_life_project.php/Sweta5.php",
                "lipstic":"http://localhost/College_life_project.php/Sweta5.php",
                "good lipstic":"http://localhost/College_life_project.php/Sweta5.php",
                "Good Lipstic":"http://localhost/College_life_project.php/Sweta5.php",

                "No.1 Lipstic":"http://localhost/College_life_project.php/Sweta5.php",
                "no.1 lipstic":"http://localhost/College_life_project.php/Sweta5.php",
/*---------------------------11--------------------------------*/


               
                "Fashion":"http://localhost/College_life_project.php/all_fashon_item.php",
                "fashion":"http://localhost/College_life_project.php/all_fashon_item.php",
                "All Fashion Product":"http://localhost/College_life_project.php/all_fashon_item.php",
                "all fashion product":"http://localhost/College_life_project.php/all_fashon_item.php",

                "all fashion":"http://localhost/College_life_project.php/all_fashon_item.php",
                "All Fashion":"http://localhost/College_life_project.php/all_fashon_item.php",
/*---------------------------12--------------------------------*/

                
                 "Electronic":"http://localhost/College_life_project.php/all_electronic_item.php",
                "electronic":"http://localhost/College_life_project.php/all_electronic_item.php",
                "All Electronic Product":"http://localhost/College_life_project.php/all_electronic_item.php",
                "all electronic product":"http://localhost/College_life_project.php/all_electronic_item.php",

                "all electronic":"http://localhost/College_life_project.php/all_electronic_item.php",
                "All Electronic":"http://localhost/College_life_project.php/all_electronic_item.php"

/*---------------------------13--------------------------------*/


                "":"",
                "":"",
                "":"",
                "":"",

                "":"",
                "":"",
/*---------------------------14--------------------------------*/


                "":"",
                "":"",
                "":"",
                "":"",

                "":"",
                "":"",
/*---------------------------15--------------------------------*/


                "":"",
                "":"",
                "":"",
                "":"",

                "":"",
                "":"",
/*---------------------------16--------------------------------*/


                "":"",
                "":"",
                "":"",
                "":"",

                "":"",
                "":"",
/*---------------------------17--------------------------------*/


                "":"",
                "":"",
                "":"",
                "":"",

                "":"",
                "":"",
/*---------------------------18--------------------------------*/


                "":"",
                "":"",
                "":"",
                "":"",

                "":"",
                "":"",
/*---------------------------19--------------------------------*/


                "":"",
                "":"",
                "":"",
                "":"",

                "":"",
                "":"",
/*---------------------------20--------------------------------*/


                "":"",
                "":"",
                "":"",
                "":"",

                "":"",
                "":"",

/*---------------------------21--------------------------------*/


                "":"",
                "":"",
                "":"",
                "":"",

                "":"",
                "":"",
/*---------------------------22--------------------------------*/


                "":"",
                "":"",
                "":"",
                "":"",

                "":"",
                "":"",
                
                
/*==============================================================*/                

            };

            if (links[query]) {
                window.location.href = links[query];
            } else {
                var searchURL = "http://localhost/College_life_project.php/anjali1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/anjali1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/anjali1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/anjali1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/anjali1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/anjali1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/anjali1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/anjali1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/anjali1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali1.php" + encodeURIComponent(query);
                window.location.href = searchURL;




                var searchURL = "http://localhost/College_life_project.php/Sweta1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/Sweta1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/product%20card8.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/product%20card8.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/product%20card8.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/product%20card8.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/product%20card8.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/product%20card8.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/product%20card8.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/product%20card8.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/product%20card8.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta1.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta1.php" + encodeURIComponent(query);
                window.location.href = searchURL;

/*---------------------------1--------------------------------*/

                 var searchURL = "http://localhost/College_life_project.php/product%20card2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/product%20card2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/product%20card2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/product%20card2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/product%20card2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/product%20card2.php" + encodeURIComponent(query);
                window.location.href = searchURL;



/*---------------------------2--------------------------------*/

                 var searchURL = "http://localhost/College_life_project.php/anjali2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/anjali2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali2.php" + encodeURIComponent(query);
                window.location.href = searchURL;


/*---------------------------3--------------------------------*/

                 var searchURL = "http://localhost/College_life_project.php/anjali3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/anjali3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali3.php" + encodeURIComponent(query);
                window.location.href = searchURL;

/*---------------------------4--------------------------------*/


                

/*---------------------------5--------------------------------*/

                 var searchURL = "http://localhost/College_life_project.php/anjali5.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/anjali5.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali5.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali5.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali5.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali5.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/anjali5.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali5.php" + encodeURIComponent(query);
                window.location.href = searchURL;


/*---------------------------6--------------------------------*/



                var searchURL = "http://localhost/College_life_project.php/Sweta2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/Sweta2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/Sweta2.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta2.php" + encodeURIComponent(query);
                window.location.href = searchURL;

/*---------------------------7--------------------------------*/


                var searchURL = "http://localhost/College_life_project.php/anjali4.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/anjali4.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali4.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali4.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali4.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/anjali4.php" + encodeURIComponent(query);
                window.location.href = searchURL; 


/*---------------------------8--------------------------------*/



                 var searchURL = "localhost/College_life_project.php/Sweta3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "localhost/College_life_project.php/Sweta3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "localhost/College_life_project.php/Sweta3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "localhost/College_life_project.php/Sweta3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "localhost/College_life_project.php/Sweta3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "localhost/College_life_project.php/Sweta3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "localhost/College_life_project.php/Sweta3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "localhost/College_life_project.php/Sweta3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "localhost/College_life_project.php/Sweta3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "localhost/College_life_project.php/Sweta3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "localhost/College_life_project.php/Sweta3.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "localhost/College_life_project.php/Sweta3.php" + encodeURIComponent(query);
                window.location.href = searchURL;  

/*---------------------------9--------------------------------*/

                  var searchURL = "http://localhost/College_life_project.php/Sweta4.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/Sweta4.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta4.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta4.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta4.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta4.php" + encodeURIComponent(query);
                window.location.href = searchURL;  


/*---------------------------10--------------------------------*/


                  var searchURL = "http://localhost/College_life_project.php/Sweta5.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/Sweta5.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta5.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta5.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta5.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/Sweta5.php" + encodeURIComponent(query);
                window.location.href = searchURL;  


/*---------------------------11--------------------------------*/

                 var searchURL = "http://localhost/College_life_project.php/all_fashon_item.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/all_fashon_item.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/all_fashon_item.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/all_fashon_item.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/all_fashon_item.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/all_fashon_item.php" + encodeURIComponent(query);
                window.location.href = searchURL;  
/*---------------------------12--------------------------------*/

               
                var searchURL = "http://localhost/College_life_project.php/all_electronic_item.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "http://localhost/College_life_project.php/all_electronic_item.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/all_electronic_item.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/all_electronic_item.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/all_electronic_item.php" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "http://localhost/College_life_project.php/all_electronic_item.php" + encodeURIComponent(query);
                window.location.href = searchURL;

 

/*---------------------------13--------------------------------*/

                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;  

/*---------------------------14--------------------------------*/

                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;  

/*---------------------------15--------------------------------*/

                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;  

/*---------------------------16--------------------------------*/

                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;  

/*---------------------------17--------------------------------*/

                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;  

/*---------------------------18--------------------------------*/

                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;
                 var searchURL = "" + encodeURIComponent(query);
                window.location.href = searchURL;  

/*---------------------------19--------------------------------*/
/*---------------------------20--------------------------------*/
/*---------------------------21--------------------------------*/
/*---------------------------22--------------------------------*/


            }

            // After search, clear the input and hide the cross
            document.getElementById("searchBox").value = "";
            document.querySelector(".clear-icon").style.display = "none"; // Hide the cross after search
        }

        // ✅ Trigger Search on Enter Key
        function handleKeyPress(event) {
            if (event.key === "Enter") {
                searchAmazon();
            }
        }

        // ✅ Clear Search Box
        function clearSearch() {
            document.getElementById("searchBox").value = "";
            document.querySelector(".clear-icon").style.display = "none"; // Hide cross when cleared
        }

        // Show/hide the clear icon when there's input
        document.getElementById("searchBox").addEventListener("input", function() {
            const clearIcon = document.querySelector(".clear-icon");
            if (this.value) {
                clearIcon.style.display = "block";
            } else {
                clearIcon.style.display = "none";
            }
        });
    </script>




<!------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Category Images</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    .category-container {
      display: flex;
      justify-content: center;
      gap: 20px; /* Space between images */
      padding: 20px;
      flex-wrap: no-wrap;
    }
    .category-item {
      text-align: center;
    }
    .category-item img {
      width: 50px; /* Small image size */
      height: 50px; /* Small image size */
      object-fit: contain;
    }
    .category-item p {
      margin-top: 10px;
      font-size: 14px;
    }
  </style>
</head>
<body>

  <div class="category-container">
    <div class="category-item">
      <img src="https://rukminim2.flixcart.com/flap/80/80/image/29327f40e9c4d26b.png?q=100" alt="Mobile">
      <p><a href="#"><b>Kilos</b></a></p>
    </div>
    <div class="category-item">
      <img src="https://rukminim2.flixcart.com/flap/80/80/image/22fddf3c7da4c4f4.png?q=100" alt="Fashion">
      <p style="color: blue;"><a href="#"><b>Mobile</b></a></p>
    </div>
    <div class="category-item">
      <img src="https://rukminim2.flixcart.com/fk-p-flap/80/80/image/0139228b2f7eb413.jpg?q=100" alt="Electronics">
      <p style="color: black;"><a href="#"><b>Appliances</b></a></p>
    </div>
    <div class="category-item">
      <img src="https://rukminim2.flixcart.com/fk-p-flap/80/80/image/fc40c9436e5aa480.png?q=100" alt="Flight Booking">
      <p style="color: red;"><a href="http://localhost/College_life_project.php/company_login_form.php"><b>Flight Booking</b></a></p>
    </div>
    <div class="category-item">
      <img src="https://tse4.mm.bing.net/th?id=OIP.VwC1QmawuUIepWdDtu_SWwHaHa&pid=Api&P=0&h=180" alt="Mobile">
      <p style="color: #000080;"><a href="#"><b>Fashion</b></a></p>
    </div>
    <div class="category-item">
      <img src="https://tse3.mm.bing.net/th?id=OIP.6jN2A2UC6trfhZGJrFXm2wHaHa&pid=Api&P=0&h=180" alt="Fashion">
      <p style="color: red;"><a href="#"><b>Beauty,Toys&More</b></a></p>
    </div>
    <div class="category-item">
      <img src="https://tse3.mm.bing.net/th?id=OIP.wLRyxXpkc90DkDdW3jQLXAAAAA&pid=Api&P=0&h=180" alt="Electronics">
      <p style="color: black;"><a href="#"><b>Two Wheelers</b></a></p>
    </div>
    <div class="category-item">
      <img src="https://i.ytimg.com/vi/AjYhTQfst_s/maxresdefault.jpg" alt="Flight Booking">
      <p style="color: blue;"><a href="#"><b>Electronics</b></a></p>
    </div>
    <div class="category-item">
      <img src="https://tse4.mm.bing.net/th?id=OIP.J3FnQ0jPAXezLfHus4I7OwHaFz&pid=Api&P=0&h=180" alt="Mobile">
      <p style="color: brown;"><a href="#"><b>Home,Furniture</b></a></p>
    </div>
    <div class="category-item">
      <img src="https://tse4.mm.bing.net/th?id=OIP.kG-BluXf2rXygfiRxJnjxQHaDt&pid=Api&P=0&h=180" alt="Fashion">
      <p style="color: red;"><a href="#"><b>Hotel Booking</b></a></p>
    </div>
    <div class="category-item">
      <img src="https://tse2.mm.bing.net/th?id=OIP.gOg3xq5W6715ei5FAHTO4QHaFp&pid=Api&P=0&h=180" alt="Electronics">
      <p style="color: black;"><a href="#"><b>Books</b></a></p>
    </div>
    <div class="category-item">
      <img src="https://tse2.mm.bing.net/th?id=OIP.bhhvAiO0SSxHN62oGDqwwQHaHa&pid=Api&P=0&h=180" alt="Flight Booking">
      <p style="color: blue;"><a href="#"><b>Zym Machine</b></a></p>
    </div>
  </div>

</body>
</html>


<!----------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Carousel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Carousel custom styling */
        .carousel {
            position: relative;
            width: 100%;
            overflow: hidden;
/*            margin-bottom: 60px;*/
        }

        .carousel-inner {
            display: flex;
            transition: transform 0.3s ease-in-out; /* Faster transition */
        }

        .carousel-item {
            min-width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-item img {
            width: 90%; 
            height: auto; 
            margin-left: auto;
            margin-right: auto; 
        }

        .carousel-caption {
            bottom: 20%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            color: #fff;
            font-size: 1.5em;
/*            background-color: rgba(0, 0, 0, 0.5); /* Added background for text visibility */*/
        }

        /* Control buttons styling */
        .carousel-control-prev, .carousel-control-next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
/*          background-color: rgba(0, 0, 0, 0.5); /* Added background */
            padding: 10px;
            border-radius: 50%;
        }

        .carousel-control-prev-icon, .carousel-control-next-icon {
            filter: invert(100%);
        }

        /* Hover effect on indicators */
        .carousel-indicators button {
            background-color: rgba(0, 0, 0, 0.5);
        }

        .carousel-indicators .active {
            background-color: #f8f9fa;
        }

        /* Media Query for smaller screens */
        @media (max-width: 768px) {
            .carousel-caption {
                font-size: 1.2em;
                bottom: 15%;
            }
        }

        /* Slide number display */
        .slide-number {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 1em;
        }
 

    </style>
</head>
<body>

    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>

        <div class="carousel-inner">
            <!-- 5 slides (you can add more as needed) -->
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="https://rukminim2.flixcart.com/fk-p-flap/1620/270/image/86ca366fe0681050.jpg?q=20" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h2 style="text-align: center;"><b><a href="http://localhost/College_life_project.php/company_login_form.php" class="buy-button">BOOKING NOW</a></b></h2>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="https://rukminim2.flixcart.com/fk-p-flap/1620/270/image/1a3676a1fc80e225.jpg?q=20" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                   <!--  <h5><b>Second Slide</b></h5>
                    <p><b>Description for the second slide</b></p> -->
                     <h2 style="text-align: center;"><b><a href="#" class="buy-button">APPLY NOW</a></b></h2>
                </div>
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="https://rukminim2.flixcart.com/fk-p-flap/1620/270/image/ba7f29f7ecb4c88b.jpg?q=20" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5><b>Third Slide</b></h5>
                    <p><b>Description for the third slide</b></p> -->
                </div>     
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="https://rukminim2.flixcart.com/fk-p-flap/1620/270/image/a6d74b7e7af9bcdc.jpg?q=20" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5><b>Fourth Slide</b></h5>
                    <p><b>Description for the fourth slide</b></p> -->
                </div>     
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="https://rukminim2.flixcart.com/fk-p-flap/1620/270/image/f8dae5ce006b7d54.jpg?q=20" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                   <!--  <h5><b>Fifth Slide</b></h5>
                    <p><b>Description for the fifth slide</b></p> -->
                </div>     
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden"><b>Previous</b></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"><b>Next</b></span>
        </button>

        <!-- Slide counter -->
        <div id="slideNumber" class="slide-number"><b>1 / 5</b></div>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const carouselElement = document.querySelector('#carouselExampleDark');
            const carousel = new bootstrap.Carousel(carouselElement, {
                interval: 3000,
                ride: 'carousel',
                pause: false,
                wrap: true,
                touch: true,
            });

            const totalSlides = document.querySelectorAll('.carousel-item').length;
            const slideNumberDisplay = document.getElementById('slideNumber');

            // Update slide number when slide changes
            carouselElement.addEventListener('slide.bs.carousel', function (event) {
                const currentSlideIndex = event.to + 1; // Index is zero-based
                slideNumberDisplay.textContent = `${currentSlideIndex} / ${totalSlides}`;
            });

            // Initial update of slide number
            slideNumberDisplay.textContent = `1 / ${totalSlides}`;
        });
    </script>
</body>
</html>



<!--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=--=-=--->
<!--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=--=-=--->
<!--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=--=-=--->
<!--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=--=-=--->
<!--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=--=-=--->
<!--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=--=-=--->
<!--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=--=-=--->
<!--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=--=-=--->
<!--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=--=-=--->
<!--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=--=-=--->
<!--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=--=-=--->
<!--=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=--=-=-=-=-=-=-=-=-=-=-=--=-=--->

<!----------===================PRODUCT CARD========================---------->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>card_1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: auto;
            padding: 20px 0;
            text-align: center;
        }

        h1 {
            color: orange;
            margin-bottom: 10px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            padding: 20px;
            transition: grid-template-columns 0.3s ease;
        }

        /* Product Card Styling */
        .product-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            margin-bottom: 20px;
            padding: 15px;
        }

        .product-card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        /* Blinking Border Animation */
        @keyframes blink {
            0% { border: 3px solid red; }
            25% { border: 3px solid yellow; }
            50% { border: 3px solid green; }
            75% { border: 3px solid blue; }
            100% { border: 3px solid purple; }
        }

        .product-card {
            animation: blink 2s infinite;
        }

        /* Image Styling */
        .product-card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
            transition: opacity 0.3s ease;
        }

        .product-card img:hover {
            opacity: 0.8;
        }

        /* Product Info Styling */
        .product-info {
            padding: 10px;
        }

        .product-info h3 {
            color: #333;
            margin: 10px 0;
        }

        .product-info p {
            color: #777;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .product-info h2 {
            color: #e67e22;
            font-size: 20px;
            margin: 10px 0;
        }

        /* Buy Button Styling */
        .buy-button {
            display: inline-block;
            background: #ff5733;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .buy-button:hover {
            background: #e84118;
        }

        /* Responsive Layout Tweaks */
        @media (max-width: 768px) {
            .product-grid {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 24px;
            }
            .buy-button {
                font-size: 14px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Shopping Store</h1>
        <p>The best collection of smart electronic items</p>
        <div class="product-grid">
            <!-- product 1 -->
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/41x6p-E3IhL._SX300_SY300_QL70_FMwebp_.jpg"alt="keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>Portronics Bubble 2.0 Wireless Keyboard with Bluetooth + 2.4 GHz Receiver, Connect 3 Devices, Compact TKL Size, 10m Working Range, Function Shortcut Keys, for Laptop, PC, Smartphone, Tablet (White)</p>
                    <h2>₹1,050 <del style="color: #000080;">₹300%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
            </div>
            <!-- product 2 -->
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/51CZUBHDksL._SX300_SY300_QL70_FMwebp_.jpg" alt="keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>Portronics Chicklet Foldable QWERTY Keyboard, Mini Pocket Sized, Rechargeable, Bluetooth Wireless, One Touch Connect Button, for iOS, Android and Windows Tabs, Smartphones, Black</p>
                    <h2>₹1,400 <del style="color: #000080;">₹200%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
            </div>
            <!-- product 3 -->
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/616idSqXY0L._SX679_.jpg" alt="keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>Logitech Pebble Keys 2 K380s, Multi-Device Bluetooth Wireless Keyboard with Customisable Shortcuts, Slim and Portable, Easy-Switch for Windows, macOS, iPadOS, Android, Chrome OS - Tonal Graphite
</p>
                    <h2>₹1,000 <del style="color: #000080;">₹50%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
            </div>
            <!-- product 4 -->
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/41tPdE7ol1L._SX300_SY300_QL70_FMwebp_.jpg" alt="keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>Portronics Chicklet Foldable QWERTY Keyboard, Mini Pocket Sized, Rechargeable, Bluetooth Wireless, One Touch Connect Button, for iOS, Android and Windows Tabs, Smartphones, Black</p>
                    
                    <h2> ₹2,999<del style="color: #000080;">₹70%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
            </div>
            <!-- product 5 -->
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/31hkFvpaSSL._SY300_SX300_QL70_FMwebp_.jpg" alt="keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>i Gear KeyBee Retro Typewriter Inspired 2.4GHz Wireless Keyboard with Mouse Combo for Desktop/Laptop and Devices with USB Support, Single Nano Receiver, Round Keycaps, Cleaning Brush (Blue)</p>
                    <h2>₹2,300 <del style="color: #000080;">₹100%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
            </div>
            <!-- product 6 -->
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/71qnf6HhgOL._SX679_.jpg" alt="Smart Watch">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <pi>Gear KeyBee Interchangeable/Customizeable Typewriter Inspired 2.4GHz Wireless Keyboard with Mouse for Desktop/Laptop, Single Nano Receiver, Round Keycaps, Cleaning Brush (White and Blue)
</p>
                    <h2>₹7,000 <del style="color: #000080;">₹900%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
                <!-- product 7 -->
            </div>
            <div class="product-card">
                <img src="https://images-na.ssl-images-amazon.com/images/I/41X6hey-ExL._SX300_SY300_QL70_FMwebp_.jpg" alt="keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>Logitech MK270r Wireless Keyboard and Mouse Combo for Windows, 2.4 GHz Wireless, Spill-resistant Design, 8 Multimedia & Shortcut Keys, 2-Year Battery Life, PC/Laptop- Black</p>
                    <h2>₹2,000<del style="color: #000080;"> ₹700%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
                <!-- product 8 -->
            </div>
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/41PX8-7HG0L._SX300_SY300_QL70_FMwebp_.jpg" alt="keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>Amkette Optimus BT 4 in 1 Wireless Keyboard 2.4 GHz & Bluetooth 5.0 Connectivity with 3 Bluetooth and 1 USB Device, Compact Bluetooth Keyboard, On/Off Switch, Silent Keys, Shortcut Multimedia Keys</p>
                    <h2>₹1,099 <del style="color: #000080;">₹50%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
                <!-- product 9 -->
            </div>
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/41W8IktjrzL._SX300_SY300_QL70_FMwebp_.jpg" alt="Keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>Dr Luxur Mysterio Wired Typewriter Style Keyboard and Mouse Combo, 104 Keys, 2.4 GHz, Colourful Round Keycaps, for Windows, Mac, PC, Laptop, Desktop (Pink Colourful)</p>
                    <h2>₹1,199 <del style="color: #000080;">₹100%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
                <!-- product 10 -->
            </div>
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/31pISPMjJhL._SX300_SY300_QL70_FMwebp_.jpg" alt="keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>Logitech Keys-to-Go 2 Portable Bluetooth Keyboard for Tablet with Built-in Cover, Slim and Compact Wireless Keyboard for Windows, Android, Linux, iPad, iPhone, Mac, Apple TV - Graphite
s</p>
                    <h2>₹1,200 <del style="color: #000080;">₹200%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
                <!-- product 11 -->
            </div>
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/712bKAiYQML._SX679_.jpg" alt="keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>cimetech Wireless Keyboard and Mouse Combo, EasyTyping KF10 Keyboard with High-end Laptop Keyboard Technology, Say Goodbye to Typing Trouble - Type with Ease and Double Efficiency (Grey)
</p>
                    <h2>₹4,000<del style="color: #000080;">₹150%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
                <!-- product 12 -->
            </div>
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/416VYp2W4HL._SX300_SY300_QL70_FMwebp_.jpg" alt="keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>cimetech Wireless Keyboard and Mouse Combo, 2.4G Comfortable Ultra Slim Ergonomic Keyboard, Plug and Play Compact Full Size Keyboard for Mac, Windows, Laptop, Tablet, Computer (Green)
</p>
                    <h2> ₹999 <del style="color: #000080;"> ₹50%</del></h2>
                    <a href="#" class="buy-button">Shop Now</a>
                </div>
            </div>
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/61aAxNiFGDL._SX679_.jpg" alt="keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>seenda Wireless Keyboard and Mouse Combo, 2.4GHz Cordless Quiet Keyboard Mouse with USB Receiver, Full Size Cute Purple Combo, Compatible for Windows Laptop Computer Desktop PC, Purple</p>
                    <h2> ₹2,999<del style="color: #000080;">₹80%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
            </div>
            <!-- product 5 -->
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/411we8vAklL._SX300_SY300_QL70_FMwebp_.jpg" alt="keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>cimetech Wireless Keyboard Mouse Combo, Ergonomic Silent Comfortable Typing Keys 2.4G Stylish Keyboard for Windows, Mac, Computer, PC - Blue
</p>
                    <h2>₹2,399 <del style="color: #000080;">₹60%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
            </div>
            <!-- product 6 -->
            <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/71HHSNpzpmL._SX679_.jpg" alt="keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>MOTOSPEED CK61 60% Mechanical Keyboard Portable 61 Keys RGB LED Backlit Type-C USB Wired Office/Gaming Keyboard for Mac, Android, Windowsï¼ˆRed Switch＀°
ss</p>
                    <h2>₹5000<del style="color: #000080;">₹90%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
                <!-- product 7 -->
            </div>
             <div class="product-card">
                <img src="https://m.media-amazon.com/images/I/616idSqXY0L._SX679_.jpg" alt="keyboard">
                <div class="product-info">
                    <h3>keyboard</h2>
                    <p>Logitech Pebble Keys 2 K380s, Multi-Device Bluetooth Wireless Keyboard with Customisable Shortcuts, Slim and Portable, Easy-Switch for Windows, macOS, iPadOS, Android, Chrome OS - Tonal Graphite
</p>
                    <h2>₹1,000 <del style="color: #000080;">₹50%</del></h2>
                    <a href="#"class="buy-button">Shop Now</a>
                </div>
            </div>
            
        </div>
    </div> 
</body>
</html>
<!---------==========================Footer=======================----------->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Footer and Navigation</title>

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        footer {
            padding: 30px 0;
            background-color: #343a40;
            color: white;
        }

        footer h5 {
            margin-bottom: 20px;
            font-size: 1.2rem;
            font-weight: bold;
        }

        footer p {
            font-size: 0.9rem;
            line-height: 1.6;
        }

        footer a {
            color: #ffffff;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: #ff6347;
        }

        footer .list-unstyled {
            padding-left: 0;
            list-style-type: none;
        }

        footer .list-unstyled li {
            margin-bottom: 10px;
        }

        /* Footer Sections */
        footer .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Quick Links and Social Media */
        footer .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        footer .col-md-4 {
            width: 100%;
            padding: 15px;
        }

        @media (min-width: 768px) {
            footer .col-md-4 {
                width: 32%;
            }
        }

        footer .text-center {
            text-align: center;
        }

        footer .border-top {
            border-top: 1px solid #ffffff;
        }

        /* Back to Top Button - Centered */
        #navFooter {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 100;
            text-align: center;
        }

        #navBackToTop {
            background-color: #ff6347;
            padding: 10px 20px;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            display: none; /* Initially hidden */
        }

        #navBackToTop:hover {
            background-color: #e5533f;
        }

        /* Responsiveness for Small Screens */
        @media (max-width: 767px) {
            footer .col-md-4 {
                width: 100%;
                text-align: center;
            }

            footer .navFooterBackToTopText {
                font-size: 1rem;
            }
        }

        /* Custom colors for social media icons */
        .social-facebook {
            color: #3b5998;
        }

        .social-twitter {
            color: #1da1f2;
        }

        .social-instagram {
            color: #e4405f;
        }

        .social-tiktok {
            color: #000000;
        }

        footer a i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        /* New flexbox for 3 columns in the last row */
        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            padding-top: 20px;
            border-top: 1px solid #ffffff;
        }

        .footer-bottom div {
            width: 30%;
            text-align: center;
        }

        @media (max-width: 767px) {
            .footer-bottom div {
                width: 100%;
                text-align: center;
                margin-bottom: 10px;
            }
        }

        /* Center Contact Us Section */
        footer .col-md-4.text-center {
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Footer Section -->
    <footer class="footer bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5>About Us</h5>
                    <p>Your trusted source for electric appliances, providing quality products and excellent service.</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white">Home</a></li>
                        <li><a href="#" class="text-white">Products</a></li>
                        <li><a href="#" class="text-white">Contact Us</a></li>
                        <li><a href="#" class="text-white">Privacy Policy</a></li>
                    </ul>
                </div>
                <!-- Centered Contact Us -->
                <div class="col-md-4 mb-4 text-center">
                    <h5>Connect with Us</h5>
                    <ul class="list-unstyled">
                        <li>
                            <a href="#" class="text-white social-facebook"><i class="fab fa-facebook-f"></i> Facebook</a>
                        </li>
                        <li>
                            <a href="#" class="text-white social-twitter"><i class="fab fa-twitter"></i> Twitter</a>
                        </li>
                        <li>
                            <a href="#" class="text-white social-instagram"><i class="fab fa-instagram"></i> Instagram</a>
                        </li>
                        <li>
                            <a href="#" class="text-white social-tiktok"><i class="fab fa-tiktok"></i> TikTok</a>
                        </li>
                         <li>
                            <a href="https://wa.me/1234567890" class="text-white social-whatsapp"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <!-- Footer Bottom Row: About Us, Connect with Us, and Footer Text -->
            <div class="footer-bottom">
                <div>
                    <p>&copy; 2024 Electric Shop. All Rights Reserved.</p>
                </div>
                <div>
                    <p>Email: support@electricshop.com | Phone: +1 234 567 890</p>
                </div>
            </div>
        </div>
    </footer>
    <br>
    <br>
    <br>
    <br>
    
    <!-- Back to Top Button -->
    <nav id="noor">
        <div class="navLeftFooter nav-sprite-v1 text-center" id="navFooter" data-cel-widget="navFooter">
            <a href="javascript:void(0)" id="navBackToTop" aria-label="Back to top">
                <div class="navFooterBackToTop">
                    <span class="navFooterBackToTopText"><b>Back to top</b></span>
                </div>
            </a>
        </div>
    </nav>

    <script>
        // JavaScript to show the "Back to Top" button when scrolling down
        window.onscroll = function() {
            var backToTopButton = document.getElementById("navBackToTop");
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                backToTopButton.style.display = "block";
            } else {
                backToTopButton.style.display = "none";
            }
        };

        // Scroll to top when the button is clicked
        document.getElementById("navBackToTop").addEventListener("click", function() {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    </script>
</body>
</html>