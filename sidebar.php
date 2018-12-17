<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Promo 21</title>

    <?php wp_head(); ?>

</head>
<body>
    <div class="sidebar" id="sidebar">
        <div class="side_menu">
            <ul>
                
                <?php wp_nav_menu( array( 'theme_location' => 'menu-principal' ) ); ?>
                
            </ul>
            <div class="logo_div">
                <img src="<?= get_template_directory_uri() . '/screenshot.png' ?>" alt="">
            </div>
            
        </div>
    </div>
    
    <button class="menu_hamburger" id="menu_hamburger" onclick="sidebarDisplay()">&#x039E;</button>
    <!--menu hamburger icon &#9776 / &#x0416; close icon-->

    <script>
    
        function sidebarDisplay() {
            var a = "\u039E";
            let sidebar = document.querySelector('#sidebar');
            let menu_icon = document.querySelector('#menu_hamburger');
            sidebar.classList.add('menu_hide');
            if(sidebar.classList.contains('menu_show')) {
                sidebar.classList.add('menu_hide');
                sidebar.classList.remove('menu_show');
            }
            else if(sidebar.classList.contains('menu_hide')) {
                sidebar.classList.add('menu_show');
                sidebar.classList.remove('menu_hide');
            }
            if(menu_icon.innerText == a) {
                menu_icon.innerHTML = "\u0425";
            }
            else {
                menu_icon.innerHTML = "\u039E";  
            }
            
        }
    
    </script>