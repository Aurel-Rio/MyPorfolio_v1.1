
<?php
    include 'head.php';
?>
<body>
<?php
    include 'navbar.php';
    include 'anim.php';
    include 'home.php';
?>

    <section id="flexbox_editor">
        <div id="change_color">Color: &nbsp;
        <select id="stateSelect" > 
            <option value="navbarColor">&nbsp;Navbar Color</option>
            <option value="bgColor">&nbsp;Background Color</option>
            <option value="footerColor">&nbsp;Footer Color</option>
            <option value="link4">&nbsp;Font Color</option>
            <option value="link5">&nbsp;Text Shadow Color</option>
        </select>
        <div id="red"></div>
        <div id="green"></div>
        <div id="blue"></div>
        </div>

    </section>

<?php
    include 'my_porfolio_generator.php';  
    include 'my_realisations.php';
    include 'my_cv.php';
    include 'my_title.php';
    include 'footer.php';
?>
</body>
<script defer src="../script/scriptPorfolioGenerator.js"></script>