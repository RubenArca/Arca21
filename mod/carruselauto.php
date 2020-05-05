<div id="carrusel">
    <a href="#" class="left-arrow"><i class="fas fa-angle-double-left"></i></a>
    <a href="#" class="right-arrow"><i class="fas fa-angle-double-right"></i></a>
    <div class="carrusel"
    width=<?php $width = count($imgcarrusel) * 560; echo '"' . $width . 'px"';?>
    >
      <?php
        $tablename = "images";
        $imgname = "";
        $contenido = "";
        $img = "";
        foreach ($imgcarrusel as $key => $value) {
          $imgname = $value;
          $contenido .= '<div class="product" id="product_' . $key . '"><img src="';
          require($urlabsoluta . $url . "inc/base64bis.php");
          $contenido .= $img;
          $contenido .= '"/></div>';
        }
        echo $contenido;
       ?>
    </div>
</div>
<script>
var current = 0;
var imagenes = new Array();

$(document).ready(function() {
    var numImages = <?php echo count($imgcarrusel); ?>;
    if (numImages <= 1) {
        $('.right-arrow').css('display', 'none');
        $('.left-arrow').css('display', 'none');
    }
    // Auto pasar a la siguiente imagen
    setInterval(function() {
        if (numImages > current + 1) {
            current = current + 1;
        } else {
            current = 0;
        }
        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);
        return false;
    },3000);

    $('.left-arrow').on('click',function() {
        if (current > 0) {
            current = current - 1;
        } else {
            current = numImages - 1;
        }

        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);

        return false;
    });

    $('.left-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });

    $('.right-arrow').on('hover', function() {
        $(this).css('opacity','0.5');
    }, function() {
        $(this).css('opacity','1');
    });

    $('.right-arrow').on('click', function() {
        if (numImages > current + 1) {
            current = current + 1;
        } else {
            current = 0;
        }

        $(".carrusel").animate({"left": -($('#product_'+current).position().left)}, 600);

        return false;
    });
 });
</script>
