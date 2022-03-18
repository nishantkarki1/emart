<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" type = "image/png" href = "logo.png">
    <title>Online Shopping in Nepal</title>
    <link rel="stylesheet" href="style99.css">
    <link rel="stylesheet" href="utils.css">
    <link rel="stylesheet" href="responsive.css">
    <style>
#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 20px;
  border: none;
  outline: none;
  background-color: #ddd;
  color: black;
  cursor: pointer;
  padding: 5px 10px;
  border-radius: 10px;
}
#myBtn:hover {
  background-color:#5e8f95 ;
}
        </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <img src="logo.png" alt="">
            </div>
            <ul>
                <li> <a href="emart.php">Home</a></li>
                <li><a href="register.php">Login</a></li>
                <li><a href="aboutus.php">About Us</a></li>
            </ul>
            <div class="search">
                <input type="text" name="text" id="" placeholder="Search Here">
                <button class="btn">Search</button>
               
            </div>
    </nav>
    </header>
    <button onclick="topFunction()" id="myBtn" title="Go to top">TOP<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><g data-name="up android app aplication phone"><path d="M16 31a15 15 0 1 1 15-15 15 15 0 0 1-15 15zm0-28a13 13 0 1 0 13 13A13 13 0 0 0 16 3z"/><path d="M18.5 26h-5a2 2 0 0 1-2-2v-7H9a1 1 0 0 1-.82-1.57l7-10a1 1 0 0 1 1.64 0l7 10A1 1 0 0 1 23 17h-2.5v7a2 2 0 0 1-2 2zm-7.58-11h1.58a1 1 0 0 1 1 1v8h5v-8a1 1 0 0 1 1-1h1.58L16 7.74z"/></g></svg></button>

    <script>
var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>
    <main>
        <div class="container">
            <div class="slider">
                <img src="https://source.unsplash.com/1600x500/?shopping, ecommerce" alt="">
            </div>
            <div class="card">
                <h2 class="my-2">Sports & Outdoor</h2>
                <div class="cards">
                    <div class="card-item">
                        <img src="1.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                            <h4 class="text-center"> Meditation Mat</h4><br>
                            <div class="text-center">
                            <div class="price py-2">
                                <span>Rs.521</span><br>
                                <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="card-item">
                        <img src="2.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Safety Goggles</h4><br>
                            <div class="text-center">
                                <div class="price py-2">
                                    <span>Rs.500</span><br>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/b22487cd72a9a08b09b62cc15d19ef62.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Swimming Cap</h4><br>
                            <div class="text-center">
                                <div class="price py-2">
                                    <span>Rs.200</span><br>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/23bc5f5885659f9bde5621f25ba2e09f.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Life Jacket</h4><br>
                            <div class="text-center">
                                <div class="price py-2">
                                    <span>Rs.1,500</span><br>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/7ca8d5fc00fcd4fd026b7c6cefaaa21c.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Badminton Racket </h4><br>
                            <div class="text-center">
                                <div class="price py-2">
                                    <span>Rs.900</span><br>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src=" https://static-01.daraz.com.np/p/e4d1353b2bf66b2e07d48169b0ba114f.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Table Tennis Bats</h4><br>
                           
                            <div class="text-center">
                                <div class="price py-2">
                                    <span>Rs.499</span><br>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/7756bdae5f5b1eb441855701f265feae.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                            <h4 class="text-center"> Table Tennis Net</h4><br>
                          
                            <div class="text-center">
                                <div class="price py-2">
                                    <span>Rs.1,350</span><br>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/bda154540c1f027b5af5b80c24f452d6.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Basketball</h4><br>
                         
                            <div class="text-center">
                                <div class="price py-2">
                                    <span>Rs.2,025</span><br>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/3d72bf632549d6015b940bce132ac05a.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Volleyball</h4><br>
                           
                            <div class="text-center">
                                <div class="price py-2">
                                    <span>Rs.1,875</span><br>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                </div>
                                </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/f6516bfea1257f220e6a93b38b0c20f5.jpg " alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Neck Pillow</h4><br>
                            <div class="text-center">
                                <div class="price py-2">
                                    <span>Rs.949</span><br>
                                    <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                </div>
                                </div>
                        </div>  
                </div>
                </div>
                </div>
                </div>
                <div class="card">
                    <h2 class="my-2">Automotive & Motorbike</h2>
                    <div class="cards">
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/128890de45796c8924455c68d26946b3.png" alt="" width="160px" height="160px">
                            <div class="lines">
                                 <h4 class="text-center">Bike Cover Waterproof With Lock</h4><br>
                                
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.1,694</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/mdc/4f9c16a85b6c425b87db94eb735da768.jpg" alt="" width="160px" height="160px">
                            <div class="lines">
                                 <h4 class="text-center">Black Solid Chest Guard </h4><br>
                               
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.330</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/aebcf923016c85a030dbeee876bc3cb6.jpg" alt="" width="160px" height="160px">
                            <div class="lines">
                                 <h4 class="text-center">Being Human E-cycles</h4><br>
                              
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.17,500</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/mdc/75158c6ea4ed35f18eeab8a6becca896.png" alt="" width="160px" height="160px">
                            <div class="lines">
                                <h4 class="text-center"> Single Seater Electric Scooter</h4><br>
                               
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.235,000</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/27a6546e0125b612976903f3442f6de9.jpg" alt="" width="160px" height="160px">
                            <div class="lines">
                                 <h4 class="text-center">Yadea G5 Electric Scooter</h4><br>
                              
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.199,999</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/d45a27c72d79dc275e37253a614d13bc.jpg" alt="" width="160px" height="160px">
                            <div class="lines">
                                 <h4 class="text-center">Beon Mask For Rider ㅤ</h4><br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.5,000</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/e59a6fd117dc46890275e6e0234d4e1d.jpg" alt="" width="160px" height="160px">
                            <div class="lines">
                                 <h4 class="text-center">KPI Full Face Single Visor Helmet</h4><br>
                             
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.11,000</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/669153545dd8287ac27c6d81b429595c.jpg" alt="" width="160px" height="160px">
                            <div class="lines">
                                 <h4 class="text-center">Beon Helmet Goggles and Night Vision Glass</h4>
                                 <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.5,500</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src=" https://static-01.daraz.com.np/p/6a029a14e4830dffc552fc2814e38893.jpg" alt="" width="160px" height="160px">
                            <div class="lines">
                                 <h4 class="text-center">Tactical Half Fingered Gloves</h4>
                                 <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.799</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/8d0792473d248788d7ca92202af22eee.jpg" alt="" width="160px" height="160px">
                            <div class="lines">
                                 <h4 class="text-center">Motomax Dashboard and Tyre Polish</h4><br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.500</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
             <h2 class="my-2">Electronic Devices</h2>
                <div class="cards">
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/a9bb67855e3caa1c959ce99134a5b8a2.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Nokia 105 Dual Sim</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.1,500</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/a97f2f34e1d834eb0509e7cab3ec2493.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Xiaomi Pad 5</h4>                       
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.25,000</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/a64575a4c293b83931f860fd66f54977.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Lenovo M10</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.19,000</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/e332fdeaa96ce164a951615e2c4d9706.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Apple iPad Pro 11</h4>                        
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.29,000</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/53725f517b83ed9df34957fac60e8b9a.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Asus ROG STRIX</h4>                         
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.135,000</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/805b307602b023ded5d2a5561291786d.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">DELL Laptop</h4>                        
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.235,000</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/296e4376ef083924b030a001639d71e4.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">PS4 Controller</h4> 
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.2,999</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/2fd370804997f6749af843d5c5be74ff.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Canon EOS 3000D</h4>                      
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.50,000</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/1287ca23b4a46bf48c913f1fdd9ddd63.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Canon Pixma E410</h4>                       
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.45,000</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/b91fa9c2d48249b640a34a7524c114e8.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Acer Nitro 5</h4>                        
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.122,000</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h2 class="my-2">TV & Home Appliances</h2>
                    <div class="cards">
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/f2f1b5f1df2f4f5a2c44da721b768a94.jpg" alt="" width="160px">
                            <div class="lines">
                                <h4 class="text-center"> Mi TV 4A Full HD Android Smart TV</h4>                             
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.54,999</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/f4122842a347ae3820768be899aff7a2.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Haier 49" 4K Led Television</h4>                           
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.54,999</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/88539940b81ab06e87ab0584e9639ae7.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Konka 24 Inch HD LED TV</h4>                              
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.19,999</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/6a4553ee4c7b87b01f6bed8b156e4e90.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Mini Projector YG300 Pro</h4>                             
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.5,625</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/5c47dcb702e9f955bd2b0cb132df8d3a.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">T8 3000 Lumens Projector</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.59,000</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/6af35fba37cca626941ac001fa4afe33.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Samsung Washing Machine</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.65,691</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/de051edba752e1a9aab1d3e8f1055325.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Baltra Froster Electric Oven</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.9,299</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/c4e81258b83d13df2b3b32ef0a9c5732.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Smile Electric Fan Heater</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.1,111</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/2be027f21f922ada48f4a37a3b78d093.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Mini Handy Sewing Machine</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.699</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/0280931e67eb2b1e06b150cc97e0bf4c.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Philips  Bagless Vacuum Cleaner</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.9,747</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <h2 class="my-2">Health & Beauty</h2>
                <div class="cards">
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/40e0491de93c4b6b94a2114662e6d710.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">SUNISA Waterproof Foundation</h4>                      
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.2,000</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/0dd8e9c506970b03dc2627dc2ffba026.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Digital Personal Weighing Machine</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.800</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/f95e70508beb16fc30266d46b2adc758.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Silicone Body Back Scrubber</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.150</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/1d33b307a1fd66a31fef82e9bfacebbe.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Philips 3 Setting Hair Dryer</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.1,250</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/1bf25d67098ab2cb726fce02b06e41f0.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Rechargeable Electric Beard Trimmer</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.1,999</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/4371dc519cd26554758439d60cfdbf7a.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Philips Electric Toothbrush</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.999</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/124d480a4f893cabe62a216e0ba08f45.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">CITIZEN Digital Thermometer</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.400</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/40a3fa7e98180bc2c31d50279e7d7ac7.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Certified Fingertip Pulse Oximeter</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.250</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/c256c55fa9d94af6ba8acb9d2925c045.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Kama Sutra Urge Deodorant </h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.400</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/a16c691a343b6b39d0c156debef41a89.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">DIDI Beauty Wet Wipes</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.356</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h2 class="my-2">Babies & Toys</h2>
                    <div class="cards">
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/ba4977e9b1fed4bb77aedc16e27ca0ec.jpg" alt="" width="160px" height="160px">
                            <div class="lines">
                                <h4 class="text-center"> Mamy Poko Pant  Diapers</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.124</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/44ce23c68f1ca45dc6f419ab6b607fad.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Inflatable Horse Hopper</h4><br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.925</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/567db53fb78356515da08c9b0ed5fd08.jpg" alt="" width="160px">
                            <div class="lines">
                                <h4 class="text-center"> Bagmati Red Baby Bathtub</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.803</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/fe695f7fc5471abf758251b1625bb6ba.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">IntexSuperior Quality Kids Swimming Pool</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.1,299</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/eb819bdd3010e2610c303dd1d953248d.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Bagmati Green Baby Potty Chair</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.999</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/115050d94e23326dc78ec59b7e1d45c5.png" alt="" width="160px" height="160px">
                            <div class="lines">
                                 <h4 class="text-center">Shooting Shots Toys For Kids</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.500</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/2311c0480774e1ef89c7b5ab1ae79fa5.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Rings Tower Duck Toy For Kids</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.235</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/824027a0955c1f30a61afb7bd542fbc2.jpg " alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Remote Control Transformer Car</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.1,569</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/9479f2e30d7759e2e7a77d1659cd5fb5.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Yellow Solid Plastic Bus For Kids</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.800</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/168268a6f9b9cb41592097bb1d005d18.jpg " alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Bpa Free Fruits Feeder</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.498</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <h2 class="my-2">Home & Lifestyle</h2>
                <div class="cards">
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/004215275e5f811cd15d1c5966674c89.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">White Stripe Pillow (King Size)</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.500</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/7c4c4238eec7693ec04366fabaeb36f9.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Tulip White Ultrasonic Mattress Protector</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.999</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/fdcb22ae7423866bf3e5ba0e3a18df7a.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Sonam Analog Wall Clock</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.2,300</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/4f271fdd061605ed7922e9a6a9bfc3f2.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Fumo Classic Fur Bean Bag</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.1,500</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/66decc845fbab0173a7ec6a966d25a36.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Simple Multi Layer Bookshelf</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.1,350</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/a4f1aec19d6578a35826963f7fd2d3c3.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Foldable Multipurpose Laptop Table</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.805</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/76b08c36d180ee3d630ba91c513def8c.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">60W Table Lamp For Study</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.499</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/c8f1387b78af600fa17db2416b949399.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Multi Type Manual Soap Dispenser</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.400</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/178ecc8dfdf2ee35deb9dca98da05e64.jpg" alt="" width="160px">
                        <div class="lines">
                             <h4 class="text-center">Signature Matte Black Venus Guitar</h4>
                             <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.3,599</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                    <div class="card-item">
                        <img src="https://static-01.daraz.com.np/p/be5be4840ce13333fd248b25e0bcd730.jpg" alt="" width="160px" height="160px">
                        <div class="lines">
                             <h4 class="text-center">Hawkins Non-stick Fry Pan</h4>
                            <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.1,100</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <h2 class="my-2">Watches & Accessories</h2>
                    <div class="cards">
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/61481e77d6e7064f0d84bf85179f34c2.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Rich Club Analogue Black Watch</h4>                            
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.2,125</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/98c711800f3756e7a91ed5d86e2faf76.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center" class="text-center">Dash Watch Waterproof Watch</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.499</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/d54c96aaf94e91fdb876f2e921aea15e.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4  class="text-center">Vills Laurrens Analogue Men's Watch</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.1,500</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/32197ab39085e619228052ab7b46d6ba.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Digital LED Band Watch</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.1,950</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/9be1e115cd16e9165297b42f164db79e.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Mi Watch Lite LCD Display</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.4,000</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/03b570971669899c754ea854417c1e67.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">NAVIFORCE Luxury Female Watch</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.1,127</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/7bfe4ec2c40b433cb4a58bdc9250574f.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Butterfly Pendant Necklace For Women</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.1,127</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/71ae33cd84f136e68820f1ed8283178e.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Black Sunglasses For Kids</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.141</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div> 
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/91154c978bdfcdd6664b6ae5f888d62e.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Night Vision Glass For Men</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.232</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                        <div class="card-item">
                            <img src="https://static-01.daraz.com.np/p/27bb08bcfb88aebe0222526517247aa4.jpg" alt="" width="160px">
                            <div class="lines">
                                 <h4 class="text-center">Stylish Fashion Thug Life Sunglasses</h4>
                                <br>
                                <div class="text-center">
                                    <div class="price py-2">
                                        <span>Rs.300</span><br>
                                        <button type="submit" class="btn btn-warning font-size-12">Add to cart</button>
                                    </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="flex-all-center">
         <h4>Copyright &copy; E-MART.com</h4>
    </footer>
</body>
</html>