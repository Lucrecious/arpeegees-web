<?php 
  $title = 'Arpeegees';
  $description = "Inspired by the classic video game RPG's everyone loves, these adorable Hard Enamel pins come in randomly selected packs of 3 (three)!!";
  include('template/head.php');
?>

<body>  


<style>

#wave2title{
  margin-top:-70px;
}
#wave2title img{
margin:0 auto 20px auto;
display:block;
  max-width: 80%;
}
#introduction{
margin-top:70px;
}

#wave2title .blue-button{
padding:20px;
    /* margin: 0 auto; */
    display: block;
    /* width: auto; */
    margin: 10px auto 0 auto;
    float: none;
width:auto;
max-width:90%;
}

#header{
  background-color:#FFFFFF;
  background-position: bottom center;
  background-repeat: no-repeat;
  background-size:100% auto, auto 60%, 100% auto;
  border-bottom:1px solid #168B67;
  box-shadow: inset 0px -4px #168B67;
}

#arpeegees-game-frame {
  overflow: hidden;
  display:flex;
  flex-direction: column;
  width: 100%;
  height: 720px;
}

#header img{
  display:block;
  margin:0 auto;
}
#header img#title{
  margin:20px auto;
}
#header-details{
    max-width:60%;
    display:block;
    margin:0 auto;
}
#intro-box{
  margin-bottom:40px;
}
@media only screen and (min-width: 747px){
  #header{
  }
#intro-box{
  margin-bottom:80px;
  margin-top:-120px;
}
}
</style>
<div>
<div id="header">
  <iframe id="arpeegees-game-frame" scrolling="no" frameBorder="0" title="Arpeegees - The Game" src="game.html">
  </iframe>
</div>

  <div id="intro-box" class="container">
     <div class="container-container">
        <section id="introduction">
          <article class="text-box text-box-style-1">
            <div class="content">
              <img src="images/overview-image.png" width="318" class="text-box-header-image">
              <h1>Introducing Arpeegees!!</h1>
              <p>Inspired by the classic video game RPG's everyone loves, these adorable Hard Enamel pins and die-cut vinyl stickers come in randomly selected packs of 3 (three)!! </p>
              <p>Fully designed by Arin Hanson, these pins and stickers are meant to evoke the nostalgic feeling of staying up late, battling monsters and becoming fully immersed in a fun, colorful, fantasy world!! Line them up as if they are engaged in a classic turn based RPG battle!</p>
              <?php echo file_get_contents('images/text-box-style-1-arrow.svg'); ?>
            </div>
            <div class="presentation-footer"></div>
          </article>
        </section>
      </div>
      </div>
      </div>
  <style>
    html {
      box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
      box-sizing: inherit;
    }

    body {
      background: #168B67;
      margin: 0;
      padding: 0;
    }

    #scroll svg {
      width: 100%;
      height: auto;
      display: block;
    }

    #post {
      display: block;
      width: 100%;
      position: absolute;
      margin-top: 19%;
      margin-bottom: 19%;
      top: 0;
      bottom: 0;
      background: url(images/scroll-bg.svg) 0 0;
      background-size: 100% 100%;
    }

    #scroll {
      max-width: 1126px;
      width: 100%;
      margin: 0 auto;
       width: 120%;
      margin-left:-10%;
      position: relative;
    }

    #inner-scroll {
      margin-top: -1%;
      margin-bottom: -1%;
    }

    #scroll-top {
      position: relative;
    }

    #post-content {
      width: 100%;
      margin: -20% auto;
      position: relative;
      min-height: 500px;
    }

    #scroll-container {
      display: block;
      position: relative;
      width: 70%;
      max-width: 820px;
      margin: 0 auto;
      text-align: center;
    }

    .flex {
      padding: 10px 6%;
      display: block;
      width: 100%;
    }

    .side img {
      max-width: 80%;
      height: auto;
      margin: 20px auto 0 auto;
    }

    .scroll-logo {
      max-width: 90%;
      height: auto;
      margin-bottom: 10px;
    }


    #scroll-bg {
      background: url(images/new-shop-top.jpg) center bottom no-repeat;
      background-size: 200% auto;
      overflow-x:hidden;
    }

    @media only screen and (min-width: 760px) {

    #scroll-bg {
      background-size: 100% auto;
      overflow-x:visible;
    }
      #scroll{
        width:100%;
        margin:0 auto;
      }
      #scroll-container {
        width: 75%;

        text-align: left;
      }

      .flex {
        padding: 20px 40px;
        align-items: center;
        display: flex;
      }

      .flex article {
        width: 60%;
        padding-left: 20px;
      }

      .flex .side {
        width: 40%;
      }

      .flex.order-odd article {
        order: 1;

      }

      .side img {
        max-width: 100%;
        margin-top: 0;
      }

      #scroll p {
        font-size: 17px;
        text-align: left;
      }

      .scroll-logo {
        max-width: 100%;
        height: auto;
        margin-bottom: 20px;
      }
    }

    h5 {
      font-size: 19px;
      margin: 0 0 20px 0;
    }

  </style>
  <section id="scroll-bg">
    <div id="scroll">
      <div id="scroll-top">
        <?php echo file_get_contents('images/scroll-top.svg'); ?>
      </div>
      <div id="inner-scroll">
        <?php echo file_get_contents('images/scroll-inner-top.svg'); ?>

        <div id="post-content">
          <div id="post"></div>
          <div id="scroll-container">
            <div class="flex order-odd">
              <article>
                <img alt="Arpeegees New Stickers" class="scroll-logo" src="images/arpeegee-pack-logo.png" srcset="images/arpeegee-pack-logo@2x.png 2x">
                <h5>Each bag contains 3 (three) randomly selected pins.</h5>
                <p>The entire set of Wave 1 and Wave 2 pins consist of:<br>
                  <b>7</b> Hero Pins (facing left)<br>
                  <b>7</b> Monster Pins (facing right)<br>
                  <b>4</b> Menu Pins<br>
                  <b>2</b> ULTRA RARE Mystery Pins</p>
                <p>
                  Each pack of 3 pins contains AT LEAST 1 (one) UNCOMMON OR HIGHER rarity pin! Try for your favorite one!</p>
              </article>
              <div class="side"><img alt="Arpeegees" src="images/pin-examples.png" srcset="images/pin-examples@2x.png 2x"></div>
            </div>
            <div class="flex">
              <article>
                <img alt="Arpeegees New Stickers" class="scroll-logo" src="images/about-stickers-logo.png" srcset="images/about-stickers-logo@2x.png 2x">
                <h5>Each bag contains 3 (three) randomly selected stickers.</h5>
                <p>The entire set of Wave 1 stickers consist of:<br>
                  <b>7</b> Common Stickers<br>
                  <b>6</b> Uncommon Stickers<br>
                  <b>5</b> Rare Holofoil Stickers!<br>
                  <b>2</b> ULTRA RARE Holofoil Stickers!!</p>
                <p>
                  Each pack of 3 pins contains AT LEAST 1 (one) UNCOMMON OR HIGHER rarity sticker! Try for your favorite one!
                </p>
              </article>
              <div class="side"><img alt="Arpeegees" src="images/sticker-examples.png" srcset="images/sticker-examples@2x.png 2x"></div>
            </div>

          </div>
        </div>

        <?php echo file_get_contents('images/scroll-inner-bottom.svg'); ?>
      </div>
      <?php echo file_get_contents('images/scroll-top.svg'); ?>
    </div>
  </section>
  <style>
    #new-shop {
      background: #18002D url(images/new-shop-bottom.jpg) top center no-repeat;
      background-size: 200% auto;
      color: #fff;
      padding-bottom: 40px;
    }

    #new-shop-title {
      position: relative;
      margin-top: 20px;
      margin-bottom: 20px;
      max-width:68%;
    }

    .shop-listing {
      background: #79554F url(images/wood-bg.jpg) center center;
      background-size: 504px auto;
      padding: 20px 10px;
      max-width: 100%;
      margin: 0 auto;
      border: 3px solid #C48363;
      box-shadow: 0 3px 0 0 #18002D, 0 0 0 3px #18002D;
      border-radius: 17px;
      background-color: #79554F;
      min-height: 92px;
      background-image: url(images/wood-pin.svg), url(images/wood-pin.svg), url(images/wood-pin.svg), url(images/wood-pin.svg), url(images/wood-bg.jpg);
      background-position: top left, top right, bottom left, bottom right, center center;
      background-size: auto auto, auto auto, auto auto, auto auto, 504px auto;
      background-repeat: no-repeat, no-repeat, no-repeat, no-repeat, repeat;

    }

    .price {
      margin-top: 5px;
      display: inline-block;
      background: url(images/coin.svg) 0 0 no-repeat;
      padding-left: 50px;
      font-weight: 500;
      line-height: 44px;
      font-size: 33px;
      color: #FFE55B;
      -webkit-text-stroke: 8px #5A0F1C;


      letter-spacing: 0.2px;
      position: relative;
    }

    .price:before {
      -webkit-text-stroke: 0 #080607;
      content: attr(data-text);
      position: absolute;
      right: 0;
      height: 100%;
      top: 0;
      z-index: 1;
    }

    .price:after {
      opacity: 0.5;
      content: attr(data-text);
      position: absolute;
      right: -2px;
      height: 100%;
      top: 2px;
    }

    h6 {
      margin: 10px 0 0 0;
      font-weight: 600;
      font-size: 30px;
      color: #fff;
      letter-spacing: 0.78px;
      text-shadow: 3px 3px 0 rgba(0, 0, 0, 0.50);
    }

    .item p {
      font-weight: 500;
      font-size: 22px;
      color: #C8FEFF;
      margin: 0 0 0 0;
      letter-spacing: 0.65px;
      text-shadow: 2px 2px 0 rgba(0, 0, 0, 0.50);
    }

    .item {
      margin: 30px 0;
      padding:0 20px;
    }
     .item .blue-button{
       width:100%;
        margin:20px auto 20px auto;
      }
      #new-shop .container.mini-container{
        padding:0 30px;
      }
      #ending{
  position:relative;z-index:20;
  margin:60px 0;
}
    @media only screen and (min-width: 760px) {
      #new-shop {

      background-size: 100% auto;
      }
#new-shop-title{
   margin-top: -20px;
   max-width:auto;
}
      .shop-listing {
        max-width:100%;
        display:flex;
        margin-top:200px;

      padding:40px;
      }
      .item{
        width:100%;
        padding:0 20px;
      }
      #new-shop .container{
        max-width:950px;
      }
      #new-shop .container.mini-container{
        max-width:800px;
      }
      .item .blue-button{
        margin:20px 0 0 0;
      }
      .item{
        margin-bottom:0;
        position:relative;
      }
      .item img{
        position:absolute;
        left:50%;
        bottom:102%;
        transform:translateX(-50%);
        
      }
      #ending{
margin:70px 0;
}
    }
  </style>
  <section id="new-shop">
    <img alt="shop" id="new-shop-title" src="images/shop-title.png" srcset="images/shop-title@2x.png 2x">
    <div class="container">
      <div class="shop-listing">
        <div class="item">
          <img alt="Arpeegees" src="images/product-pins-wave1.png" srcset="images/product-pins-wave1@2x.png 2x">
          <div>
            <div class="price" data-text="$25">$25</div>
          </div>
          <h6>Pins</h6>
          <p>Wave 1</p>
          <div class="blue-button">
            <div id='product-component-ee8cdd79226'></div>
            <script type="text/javascript">
              /*<![CDATA[*/

              (function () {
                var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
                if (window.ShopifyBuy) {
                  if (window.ShopifyBuy.UI) {
                    ShopifyBuyInit();
                  } else {
                    loadScript();
                  }
                } else {
                  loadScript();
                }

                function loadScript() {
                  var script = document.createElement('script');
                  script.async = true;
                  script.src = scriptURL;
                  (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
                  script.onload = ShopifyBuyInit;
                }

                function ShopifyBuyInit() {
                  var client = ShopifyBuy.buildClient({
                    domain: 'game-grumps.myshopify.com',
                    storefrontAccessToken: 'cf3d97b64d1f1f98ff52cf2e0be4439e',
                  });

                  ShopifyBuy.UI.onReady(client).then(function (ui) {
                    ui.createComponent('product', {
                      id: [2037630107707],
                      node: document.getElementById('product-component-ee8cdd79226'),
                      moneyFormat: '%24%7B%7Bamount%7D%7D',
                      options: {
                        "product": {
                          "variantId": "all",
                          "width": "100%",
                          "contents": {
                            "img": false,
                            "imgWithCarousel": false,
                            "title": false,
                            "variantTitle": false,
                            "price": false,
                            "description": false,
                            "buttonWithQuantity": false,
                            "quantity": false
                          },
                          "styles": {
                            "product": {
                              "text-align": "left",
                              "max-width": "100%",
                              "font-size": "18px",
                              "@media (min-width: 601px)": {
                                "max-width": "100%",

                                "max-width": "100%",
                                "margin-left": "0",
                                "margin-bottom": "0px"
                              },
                            },
                            "button": {
                              "background-color": "#007aff",
                              "font-family": "Rubik, sans-serif ",
                              "font-size": "1em",
                              "padding": "0px",
                              "width": "100%",
                              "padding-top": "15px",
                              "padding-bottom": "15px",
                              ":hover": {
                                "background-color": "#007aff"
                              },
                              "border-radius": "16px",
                              ":focus": {
                                "background-color": "#006ee6"
                              },
                              "font-weight": "bold"
                            },
                            "variantTitle": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "title": {
                              "font-size": "26px"
                            },
                            "description": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "price": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-size": "18px",
                              "font-weight": "bold"
                            },
                            "quantityInput": {
                              "font-size": "18px",
                              "padding-top": "17px",
                              "padding-bottom": "17px"
                            },
                            "compareAt": {
                              "font-size": "15px",
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            }
                          },
                          "googleFonts": [
                            "Rubik:700",
                            "Montserrat",
                            "Droid Sans",
                            "Droid Sans",
                            "Droid Sans",
                            "Droid Sans"
                          ]
                        },
                        "cart": {
                          "contents": {
                            "button": true
                          },
                          "styles": {
                            "button": {
                              "background-color": "#007aff",
                              "font-family": "Montserrat, sans-serif",
                              "font-size": "18px",
                              "padding-top": "17px",
                              "padding-bottom": "17px",
                              ":hover": {
                                "background-color": "#006ee6"
                              },
                              "border-radius": "16px",
                              ":focus": {
                                "background-color": "#006ee6"
                              },
                              "font-weight": "bold"
                            },
                            "footer": {
                              "background-color": "#ffffff"
                            }
                          },
                          "googleFonts": [
                            "Montserrat"
                          ]
                        },
                        "modalProduct": {
                          "contents": {
                            "img": false,
                            "imgWithCarousel": true,
                            "variantTitle": false,
                            "buttonWithQuantity": true,
                            "button": false,
                            "quantity": false
                          },
                          "styles": {
                            "product": {
                              "@media (min-width: 601px)": {
                                "max-width": "100%",
                                "margin-left": "0px",
                                "margin-bottom": "0px"
                              }
                            },
                            "button": {
                              "background-color": "#007aff",
                              "font-family": "Montserrat, sans-serif",
                              "font-size": "18px",
                              "padding-top": "17px",
                              "padding-bottom": "17px",
                              ":hover": {
                                "background-color": "#006ee6"
                              },
                              "border-radius": "16px",
                              ":focus": {
                                "background-color": "#006ee6"
                              },
                              "font-weight": "bold"
                            },
                            "variantTitle": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "description": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "price": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "quantityInput": {
                              "font-size": "18px",
                              "padding-top": "17px",
                              "padding-bottom": "17px"
                            },
                            "compareAt": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            }
                          },
                          "googleFonts": [
                            "Montserrat",
                            "Droid Sans",
                            "Droid Sans",
                            "Droid Sans",
                            "Droid Sans"
                          ]
                        },
                        "toggle": {
                          "styles": {
                            "toggle": {
                              "font-family": "Rubik, sans-serif",
                              "background-color": "#000",
                              ":hover": {
                                "background-color": "#000"
                              },
                              ":focus": {
                                "background-color": "#006ee6"
                              },
                              "font-weight": "bold"
                            },
                            "count": {
                              "font-size": "18px"
                            }
                          },
                          "googleFonts": [
                            "Montserrat",
                            "Rubik:700"
                          ]
                        },
                        "option": {
                          "styles": {
                            "label": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "select": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            }
                          },
                          "googleFonts": [
                            "Droid Sans",
                            "Droid Sans"
                          ]
                        },
                        "productSet": {
                          "styles": {
                            "products": {
                              "@media (min-width: 601px)": {
                                "margin-left": "-20px"
                              }
                            }
                          }
                        }
                      }
                    });
                  });
                }
              })();
              /*]]>*/
            </script>

          </div>
        </div>
        <div class="item">
          <img alt="Arpeegees" src="images/product-pins-wave2.png" srcset="images/product-pins-wave2@2x.png 2x">
          <div>
            <div class="price" data-text="$25">$25</div>
          </div>
          <h6>Pins</h6>
          <p>Wave 2</p>
          <div class="blue-button">
          <div id='product-component-1593539442695'></div>
<script type="text/javascript">
/*<![CDATA[*/
(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }
  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'game-grumps.myshopify.com',
      storefrontAccessToken: 'cf3d97b64d1f1f98ff52cf2e0be4439e',
    });
    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: '4377666093099',
        node: document.getElementById('product-component-1593539442695'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
         options: {
                        "product": {
                          "variantId": "all",
                          "width": "100%",
                          "contents": {
                            "img": false,
                            "imgWithCarousel": false,
                            "title": false,
                            "variantTitle": false,
                            "price": false,
                            "description": false,
                            "buttonWithQuantity": false,
                            "quantity": false
                          },
                          "styles": {
                            "product": {
                              "text-align": "left",
                              "max-width": "100%",
                              "font-size": "18px",
                              "@media (min-width: 601px)": {
                                "max-width": "100%",

                                "max-width": "100%",
                                "margin-left": "0",
                                "margin-bottom": "0px"
                              },
                            },
                            "button": {
                              "background-color": "#007aff",
                              "font-family": "Rubik, sans-serif ",
                              "font-size": "1em",
                              "padding": "0px",
                              "width": "100%",
                              "padding-top": "15px",
                              "padding-bottom": "15px",
                              ":hover": {
                                "background-color": "#007aff"
                              },
                              "border-radius": "16px",
                              ":focus": {
                                "background-color": "#006ee6"
                              },
                              "font-weight": "bold"
                            },
                            "variantTitle": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "title": {
                              "font-size": "26px"
                            },
                            "description": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "price": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-size": "18px",
                              "font-weight": "bold"
                            },
                            "quantityInput": {
                              "font-size": "18px",
                              "padding-top": "17px",
                              "padding-bottom": "17px"
                            },
                            "compareAt": {
                              "font-size": "15px",
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            }
                          },
                          "googleFonts": [
                            "Rubik:700",
                            "Montserrat",
                            "Droid Sans",
                            "Droid Sans",
                            "Droid Sans",
                            "Droid Sans"
                          ]
                        },
                        "cart": {
                          "contents": {
                            "button": true
                          },
                          "styles": {
                            "button": {
                              "background-color": "#007aff",
                              "font-family": "Montserrat, sans-serif",
                              "font-size": "18px",
                              "padding-top": "17px",
                              "padding-bottom": "17px",
                              ":hover": {
                                "background-color": "#006ee6"
                              },
                              "border-radius": "16px",
                              ":focus": {
                                "background-color": "#006ee6"
                              },
                              "font-weight": "bold"
                            },
                            "footer": {
                              "background-color": "#ffffff"
                            }
                          },
                          "googleFonts": [
                            "Montserrat"
                          ]
                        },
                        "modalProduct": {
                          "contents": {
                            "img": false,
                            "imgWithCarousel": true,
                            "variantTitle": false,
                            "buttonWithQuantity": true,
                            "button": false,
                            "quantity": false
                          },
                          "styles": {
                            "product": {
                              "@media (min-width: 601px)": {
                                "max-width": "100%",
                                "margin-left": "0px",
                                "margin-bottom": "0px"
                              }
                            },
                            "button": {
                              "background-color": "#007aff",
                              "font-family": "Montserrat, sans-serif",
                              "font-size": "18px",
                              "padding-top": "17px",
                              "padding-bottom": "17px",
                              ":hover": {
                                "background-color": "#006ee6"
                              },
                              "border-radius": "16px",
                              ":focus": {
                                "background-color": "#006ee6"
                              },
                              "font-weight": "bold"
                            },
                            "variantTitle": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "description": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "price": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "quantityInput": {
                              "font-size": "18px",
                              "padding-top": "17px",
                              "padding-bottom": "17px"
                            },
                            "compareAt": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            }
                          },
                          "googleFonts": [
                            "Montserrat",
                            "Droid Sans",
                            "Droid Sans",
                            "Droid Sans",
                            "Droid Sans"
                          ]
                        },
                        "toggle": {
                          "styles": {
                            "toggle": {
                              "font-family": "Rubik, sans-serif",
                              "background-color": "#000",
                              ":hover": {
                                "background-color": "#000"
                              },
                              ":focus": {
                                "background-color": "#006ee6"
                              },
                              "font-weight": "bold"
                            },
                            "count": {
                              "font-size": "18px"
                            }
                          },
                          "googleFonts": [
                            "Montserrat",
                            "Rubik:700"
                          ]
                        },
                        "option": {
                          "styles": {
                            "label": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "select": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            }
                          },
                          "googleFonts": [
                            "Droid Sans",
                            "Droid Sans"
                          ]
                        },
                        "productSet": {
                          "styles": {
                            "products": {
                              "@media (min-width: 601px)": {
                                "margin-left": "-20px"
                              }
                            }
                          }
                        }
                      }
      });
    });
  }
})();
/*]]>*/
</script>
          </div>
        </div>
        <div class="item">
          <img alt="Arpeegees" src="images/product-stickers-wave1.png" srcset="images/product-stickers-wave1@2x.png 2x">
          <div>
            <div class="price" data-text="$10">$10</div>
          </div>
          <h6>Stickers</h6>
          <p>Wave 1</p>
          <div class="blue-button">
       <div id='product-component-1593536815652'></div>
<script type="text/javascript">
/*<![CDATA[*/
(function () {
  var scriptURL = 'https://sdks.shopifycdn.com/buy-button/latest/buy-button-storefront.min.js';
  if (window.ShopifyBuy) {
    if (window.ShopifyBuy.UI) {
      ShopifyBuyInit();
    } else {
      loadScript();
    }
  } else {
    loadScript();
  }
  function loadScript() {
    var script = document.createElement('script');
    script.async = true;
    script.src = scriptURL;
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(script);
    script.onload = ShopifyBuyInit;
  }
  function ShopifyBuyInit() {
    var client = ShopifyBuy.buildClient({
      domain: 'game-grumps.myshopify.com',
      storefrontAccessToken: 'cf3d97b64d1f1f98ff52cf2e0be4439e',
    });
    ShopifyBuy.UI.onReady(client).then(function (ui) {
      ui.createComponent('product', {
        id: '4483368288299',
        node: document.getElementById('product-component-1593536815652'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
     options: {
                        "product": {
                          "variantId": "all",
                          "width": "100%",
                          "contents": {
                            "img": false,
                            "imgWithCarousel": false,
                            "title": false,
                            "variantTitle": false,
                            "price": false,
                            "description": false,
                            "buttonWithQuantity": false,
                            "quantity": false
                          },
                          "styles": {
                            "product": {
                              "text-align": "left",
                              "max-width": "100%",
                              "font-size": "18px",
                              "@media (min-width: 601px)": {
                                "max-width": "100%",

                                "max-width": "100%",
                                "margin-left": "0",
                                "margin-bottom": "0px"
                              },
                            },
                            "button": {
                              "background-color": "#007aff",
                              "font-family": "Rubik, sans-serif ",
                              "font-size": "1em",
                              "padding": "0px",
                              "width": "100%",
                              "padding-top": "15px",
                              "padding-bottom": "15px",
                              ":hover": {
                                "background-color": "#007aff"
                              },
                              "border-radius": "16px",
                              ":focus": {
                                "background-color": "#006ee6"
                              },
                              "font-weight": "bold"
                            },
                            "variantTitle": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "title": {
                              "font-size": "26px"
                            },
                            "description": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "price": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-size": "18px",
                              "font-weight": "bold"
                            },
                            "quantityInput": {
                              "font-size": "18px",
                              "padding-top": "17px",
                              "padding-bottom": "17px"
                            },
                            "compareAt": {
                              "font-size": "15px",
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            }
                          },
                          "googleFonts": [
                            "Rubik:700",
                            "Montserrat",
                            "Droid Sans",
                            "Droid Sans",
                            "Droid Sans",
                            "Droid Sans"
                          ]
                        },
                        "cart": {
                          "contents": {
                            "button": true
                          },
                          "styles": {
                            "button": {
                              "background-color": "#007aff",
                              "font-family": "Montserrat, sans-serif",
                              "font-size": "18px",
                              "padding-top": "17px",
                              "padding-bottom": "17px",
                              ":hover": {
                                "background-color": "#006ee6"
                              },
                              "border-radius": "16px",
                              ":focus": {
                                "background-color": "#006ee6"
                              },
                              "font-weight": "bold"
                            },
                            "footer": {
                              "background-color": "#ffffff"
                            }
                          },
                          "googleFonts": [
                            "Montserrat"
                          ]
                        },
                        "modalProduct": {
                          "contents": {
                            "img": false,
                            "imgWithCarousel": true,
                            "variantTitle": false,
                            "buttonWithQuantity": true,
                            "button": false,
                            "quantity": false
                          },
                          "styles": {
                            "product": {
                              "@media (min-width: 601px)": {
                                "max-width": "100%",
                                "margin-left": "0px",
                                "margin-bottom": "0px"
                              }
                            },
                            "button": {
                              "background-color": "#007aff",
                              "font-family": "Montserrat, sans-serif",
                              "font-size": "18px",
                              "padding-top": "17px",
                              "padding-bottom": "17px",
                              ":hover": {
                                "background-color": "#006ee6"
                              },
                              "border-radius": "16px",
                              ":focus": {
                                "background-color": "#006ee6"
                              },
                              "font-weight": "bold"
                            },
                            "variantTitle": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "description": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "price": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "quantityInput": {
                              "font-size": "18px",
                              "padding-top": "17px",
                              "padding-bottom": "17px"
                            },
                            "compareAt": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            }
                          },
                          "googleFonts": [
                            "Montserrat",
                            "Droid Sans",
                            "Droid Sans",
                            "Droid Sans",
                            "Droid Sans"
                          ]
                        },
                        "toggle": {
                          "styles": {
                            "toggle": {
                              "font-family": "Rubik, sans-serif",
                              "background-color": "#000",
                              ":hover": {
                                "background-color": "#000"
                              },
                              ":focus": {
                                "background-color": "#006ee6"
                              },
                              "font-weight": "bold"
                            },
                            "count": {
                              "font-size": "18px"
                            }
                          },
                          "googleFonts": [
                            "Montserrat",
                            "Rubik:700"
                          ]
                        },
                        "option": {
                          "styles": {
                            "label": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            },
                            "select": {
                              "font-family": "Droid Sans, sans-serif",
                              "font-weight": "bold"
                            }
                          },
                          "googleFonts": [
                            "Droid Sans",
                            "Droid Sans"
                          ]
                        },
                        "productSet": {
                          "styles": {
                            "products": {
                              "@media (min-width: 601px)": {
                                "margin-left": "-20px"
                              }
                            }
                          }
                        }
                      }
  
      });
    });
  }
})();
/*]]>*/
</script>
          </div>
        </div>

      </div>
    </div>
    <p class="shipping">Orders will be processed within 14 days</p>
    </div>
 
  <div class="container mini-container">
 <section id="ending">
        <article class="text-box text-box-style-3">
          <div class="content">
            <h2>Collect them all!! Trade them!</h2>
            <p>We hope you <?php echo file_get_contents('images/heart.svg'); ?>Arpeegees!<br>We are SO EXCITED to be sharing these with the world! </p>
            <a href="arpeegees_checklist.pdf" target="_blank" class="inline-button"> <?php echo file_get_contents('images/pointer.svg'); ?> PRINT YOUR WAVE 1 CHECKLIST</a>
            <br>
             <a href="arpeegees_checklist_2.pdf" target="_blank" class="inline-button"> <?php echo file_get_contents('images/pointer.svg'); ?> PRINT YOUR WAVE 2 CHECKLIST</a>
          </div>
        </article>
      </section>
  </div>
   </section>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

     

      // Select all links with hashes
      $('a[href*="#"]')
        // Remove links that don't actually link to anything
        .not('[href="#"]')
        .not('[href="#0"]')
        .click(function (event) {
          // On-page links
          if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
          ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
              // Only prevent default if animation is actually gonna happen
              event.preventDefault();
              $(".nav").removeClass("open");
              $('html, body').animate({
                scrollTop: target.offset().top 
              }, 1000, function () {
                // Callback after animation
                // Must change focus!
              });
            }
          }
        });
    
</script>

</body>

</html>