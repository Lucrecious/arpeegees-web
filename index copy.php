<?php 
  $title = 'Arpeegees';
  $description = "Inspired by the classic video game RPG's everyone loves, these adorable Hard Enamel pins come in randomly selected packs of 3 (three)!!";
  include('template/head.php');
?>

<body>
<style>

#wave2title{
width:100%;

height:auto;
left:50%;
transform:translateX(-50%);
position:absolute;
z-index:1000;
top: -200px;
text-align:center;
}
#wave2title img{
margin:0 auto;
display:block;
  max-width: 514px;
width:90%;
}
#introduction{
margin-top:70px;
}

#wave2title .blue-button{
padding:20px;
    /* margin: 0 auto; */
    display: block;
    /* width: auto; */
    margin: 20px auto 0 auto;
    float: none;
width:auto;
max-width:90%;


}
@media only screen and (min-width: 747px){
#wave2title{
position:relative;
left:0;
transform:translateX(0%);
    top: -100px;
}
#wave2title .blue-button{
	display:inline-block;
}
#introduction{
margin-top:0;
}

}
</style>
  <div class="wrapper">
    <div class="top-leaves"><?php echo file_get_contents('images/top-leaves.svg'); ?></div>
    <header id="site-stage">
      <div class="stage-content">
        <img class="intro-image" alt="Arpeegees" src="images/intro-image-3.png" srcset="images/intro-image-3@2x.png 2x">
		 
      </div>
      <?php echo file_get_contents('images/background-intro.svg'); ?>
    </header>
	
    <div id="page-content" class="container">
<div id="wave2title">
<img src="images/wave-2-title.png">
<a href="#shop" class="blue-button">Purchase Below</a>
</div>
      <div class="container-container">
        <section id="introduction">
          <article class="text-box text-box-style-1">
            <div class="content">
              <img src="images/introduction-graphic.png" width="389px" class="text-box-header-image">
              <h1>Introducing Arpeegees!!</h1>
              <p>Inspired by the classic video game RPG's everyone loves, these adorable Hard Enamel pins come in randomly selected packs of 3 (three)!! </p>
              <p>Fully designed by Arin Hanson, these pins are meant to evoke the nostalgic feeling of staying up late, battling monsters and becoming fully immersed in a fun, colorful, fantasy world!! Line them up as if they are engaged in a classic turn based RPG battle!</p>
              <?php echo file_get_contents('images/text-box-style-1-arrow.svg'); ?>
            </div>
            <div class="presentation-footer"></div>
          </article>
        </section>
      </div>

      <section id="explainer">
        <article class="text-box text-box-style-2">
          <div class="content">
            <h2>Each bag contains 3 (three) randomly selected pins.</h2>
            <p><b>The entire set of Wave 1 and Wave 2 pins consist of:</b></p>
            <p class="pack-details">
              <strong>7</strong> Hero Pins (facing left)</br>
              <strong>7</strong> Monster Pins (facing right)</br>
              <strong>4</strong> Menu Pins</br>
              <strong>2</strong> ULTRA RARE Mystery Pins</br>
            </p>
            <p><b>Each pack of 3 pins contains AT LEAST 1 (one) UNCOMMON OR HIGHER rarity pin! Try for your favorite one!</b></p>
          </div>
          <div class="presentation-footer"></div>
        </article>
        <div class="presentation-characters"></div>
      </section>

      <section id="shop">
        <article class="content">
          <div class="row" >
            <div class="wave-title">Wave 1</div> <div class="wave-title">Wave 2</div>
          </div>
          <Div class="row">
            <div class="blue-button">
              <div id='product-component-ee8cdd79226'></div>
              <script type="text/javascript">
              /*<![CDATA[*/

              (function() {
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

                  ShopifyBuy.UI.onReady(client).then(function(ui) {
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
     
          <div class="blue-button">
             <div id='product-component-1581002821092'></div>
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
        node: document.getElementById('product-component-1581002821092'),
        moneyFormat: '%24%7B%7Bamount%7D%7D',
        options: {
  "product": {
    "styles": {
      "product": {
        "max-width": "100%",
         "font-size": "18px",
        "@media (min-width: 601px)": {
          "max-width": "100%",
       
        },
        "text-align": "left"
      },
      "title": {
        "font-size": "20px"
      },
      
      "button": {

        "font-weight": "bold",
"font-family": "Rubik, sans-serif ",
                              "font-size": "1em",
                              "width": "100%",
                              "padding-top": "15px",
                              "padding-bottom": "15px",
        ":hover": {
          "background-color": "#007aff"
        },
        "background-color": "#007aff",
        ":focus": {
          "background-color": "#007aff"
        },
        "border-radius": "20px",
        "padding-left": "0",
        "padding-right": "0"
      },
      "quantityInput": {
        "font-size": "18px",
        "padding-top": "17px",
        "padding-bottom": "17px"
      },
      "price": {
        "font-family": "Droid Sans, sans-serif",
        "font-weight": "bold",
        "font-size": "18px"
      },
      "compareAt": {
        "font-family": "Droid Sans, sans-serif",
        "font-weight": "bold",
        "font-size": "15.299999999999999px"
      },
      "unitPrice": {
        "font-family": "Droid Sans, sans-serif",
        "font-weight": "bold",
        "font-size": "15.299999999999999px"
      },
      "description": {
        "font-family": "Droid Sans, sans-serif",
        "font-weight": "bold"
      }
    },
    "contents": {
      "img": false,
      "title": false,
      "price": false
    },
    "googleFonts": [
      "Droid Sans",
      "Montserrat"
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
  },
  "modalProduct": {
    "contents": {
      "img": false,
      "imgWithCarousel": true,
      "button": false,
      "buttonWithQuantity": true
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
        "font-family": "Montserrat, sans-serif",
        "font-weight": "bold",
        "font-size": "18px",
        "padding-top": "17px",
        "padding-bottom": "17px",
      
        ":hover": {
          "background-color": "#006ee6"
        },
        "background-color": "#007aff",
        ":focus": {
          "background-color": "#006ee6"
        },
        "border-radius": "20px",
        "padding-left": "26px",
        "padding-right": "26px"
      },
      "quantityInput": {
        "font-size": "18px",
        "padding-top": "17px",
        "padding-bottom": "17px"
      },
      "price": {
        "font-family": "Droid Sans, sans-serif",
        "font-weight": "bold"
      },
      "compareAt": {
        "font-family": "Droid Sans, sans-serif",
        "font-weight": "bold"
      },
      "unitPrice": {
        "font-family": "Droid Sans, sans-serif",
        "font-weight": "bold"
      },
      "description": {
        "font-family": "Droid Sans, sans-serif",
        "font-weight": "bold"
      }
    },
    "googleFonts": [
      "Droid Sans",
      "Montserrat"
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
      "Droid Sans"
    ]
  },
  "cart": {
    "styles": {
      "button": {
        "font-family": "Montserrat, sans-serif",
        "font-weight": "bold",
        "font-size": "18px",
        "padding-top": "17px",
        "padding-bottom": "17px",
        ":hover": {
          "background-color": "#006ee6"
        },
        "background-color": "#007aff",
        ":focus": {
          "background-color": "#006ee6"
        },
        "border-radius": "20px"
      },
      "title": {
        "color": "#4c4c4c"
      },
      "header": {
        "color": "#4c4c4c"
      },
      "lineItems": {
        "color": "#4c4c4c"
      },
      "subtotalText": {
        "color": "#4c4c4c"
      },
      "subtotal": {
        "color": "#4c4c4c"
      },
      "notice": {
        "color": "#4c4c4c"
      },
      "currency": {
        "color": "#4c4c4c"
      },
      "close": {
        "color": "#4c4c4c",
        ":hover": {
          "color": "#4c4c4c"
        }
      },
      "empty": {
        "color": "#4c4c4c"
      },
      "noteDescription": {
        "color": "#4c4c4c"
      },
      "discountText": {
        "color": "#4c4c4c"
      },
      "discountIcon": {
        "fill": "#4c4c4c"
      },
      "discountAmount": {
        "color": "#4c4c4c"
      }
    },
    "googleFonts": [
      "Montserrat"
    ]
  },
  "toggle": {
    "styles": {
      "toggle": {
        "font-family": "Montserrat, sans-serif",
        "font-weight": "bold",
        "background-color": "#007aff",
        ":hover": {
          "background-color": "#006ee6"
        },
        ":focus": {
          "background-color": "#006ee6"
        }
      },
      "count": {
        "font-size": "18px"
      }
    },
    "googleFonts": [
      "Montserrat"
    ]
  },
  "lineItem": {
    "styles": {
      "variantTitle": {
        "color": "#4c4c4c"
      },
      "title": {
        "color": "#4c4c4c"
      },
      "price": {
        "color": "#4c4c4c"
      },
      "fullPrice": {
        "color": "#4c4c4c"
      },
      "discount": {
        "color": "#4c4c4c"
      },
      "discountIcon": {
        "fill": "#4c4c4c"
      },
      "quantity": {
        "color": "#4c4c4c"
      },
      "quantityIncrement": {
        "color": "#4c4c4c",
        "border-color": "#4c4c4c"
      },
      "quantityDecrement": {
        "color": "#4c4c4c",
        "border-color": "#4c4c4c"
      },
      "quantityInput": {
        "color": "#4c4c4c",
        "border-color": "#4c4c4c"
      }
    }
  }
},
      });
    });
  }
})();
/*]]>*/
</script>

            </div>
          </div>
         <p class="shipping">Orders will be processed within 14 days</p>
        </article>
        <div class="row product-wrapper">
        <div class="product">
          <img src="images/packet-image.png" width="196px">
          <p class="price">$25</p>
        </div>
        <div class="product">
          <img src="images/packet-image-wave-2.png" width="196px">
          <p class="price">$25</p>
        </div>
        </div>
        <div class="bg"></div>
        <div class="decoration-footer"><?php echo file_get_contents('images/leaves.svg'); ?></div>
  
      </section>

      <section id="ending" style="position:relative;z-index:20;">
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
  </div>

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