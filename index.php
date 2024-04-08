
<?php
$conn = mysqli_connect("localhost", "root", "", "db");

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $comment = $_POST["comment"];
  $date = date('F d, h:i');
  $palette = $_POST["colors"];

  $query = "INSERT INTO tb_data VALUES('', '$name', '$comment', '$palette', '$date')";
  mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colooor</title>
    <link rel="stylesheet" href="style.css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/classic.min.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    
    <div class="py-6 sm:py-8 lg:py-12">
        <div class="mx-auto max-w-screen-2xl px-4 md:px-8">
        
            <h2 class="mb-4 text-center text-2xl font-bold text-gray-800 md:mb-6 lg:text-3xl">Color Palette Explorer</h2>
        
            <p class="mx-auto max-w-screen-md text-center text-gray-500 md:text-lg">This is a project aimed to assist in exploring color palette. (<a href="https://www.github.com" class="font-medium text-blue-600 underline dark:text-blue-500 hover:no-underline">Github</a>) 
                <br>Click these buttons below to choose the background color.</p>
        </div>
    </div>

    <div class="grid grid-cols-5">
        <div class="color-picker1"> </div>
        <div class="color-picker2"> </div>
        <div class="color-picker3"> </div>
        <div class="color-picker4"> </div>
        <div class="color-picker5"> </div>
        <div id="panel1" class="panel" style="background-color: deepskyblue;"></div>
        <div id="panel2" class="panel" style="background-color: blue;"></div>
        <div id="panel3" class="panel" style="background-color: brown;"></div>
        <div id="panel4" class="panel" style="background-color: crimson;"></div>
        <div id="panel5" class="panel" style="background-color: coral;"></div>
    </div>

    <form action = ""  method = "post" class="py-6 max-w-sm mx-auto">
        <input type="text" name="name" placeholder="Your name">
        <textarea name="comment" placeholder="Your comment"></textarea>
        <button id="btn" name="submit" type="submit" class="submit text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm py-2 px-4 mt-3 rounded">Post</button>
        <input type="hidden" id="colors" name="colors">
    </form>

    <?php
    $datas = mysqli_query($conn, "SELECT * FROM tb_data"); // only select comment and not select reply
    foreach($datas as $data) {
        require 'comment.php';
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
    <script>
        var colors = ["#FFFFFF", "000000", "#FFFFFF", "000000", "#FFFFFF", "000000"];
        document.getElementById('colors').value = colors; 

        var panel1 = document.getElementById('panel1')    
        const pickr1 = Pickr.create({
            el: '.color-picker1',
            theme: 'classic', 

            swatches: [
                'rgba(244, 67, 54, 1)',
                'rgba(233, 30, 99, 0.95)',
                'rgba(156, 39, 176, 0.9)',
                'rgba(103, 58, 183, 0.85)',
                'rgba(63, 81, 181, 0.8)',
                'rgba(33, 150, 243, 0.75)',
                'rgba(3, 169, 244, 0.7)',
                'rgba(0, 188, 212, 0.7)',
                'rgba(0, 150, 136, 0.75)',
                'rgba(76, 175, 80, 0.8)',
                'rgba(139, 195, 74, 0.85)',
                'rgba(205, 220, 57, 0.9)',
                'rgba(255, 235, 59, 0.95)',
                'rgba(255, 193, 7, 1)'
            ],

            components: {

                // Main components
                preview: true,
                opacity: true,
                hue: true,

                // Input / output Options
                interaction: {
                    hex: true,
                    rgba: true,
                    hsla: true,
                    hsva: true,
                    cmyk: true,
                    input: true,
                    save: true
                }
            }
        });
        pickr1.on('init', instance => {
        }).on('save', (color, instance) => {
            colors[0] = color.toHEXA()
        }).on('change', (color, source, instance) => {
            this.panel1.style.backgroundColor = color.toRGBA()
        });
        
        //

        let panel2 = document.getElementById('panel2')
        const pickr2 = Pickr.create({
            el: '.color-picker2',
            theme: 'classic', 

            swatches: [
                'rgba(244, 67, 54, 1)',
                'rgba(233, 30, 99, 0.95)',
                'rgba(156, 39, 176, 0.9)',
                'rgba(103, 58, 183, 0.85)',
                'rgba(63, 81, 181, 0.8)',
                'rgba(33, 150, 243, 0.75)',
                'rgba(3, 169, 244, 0.7)',
                'rgba(0, 188, 212, 0.7)',
                'rgba(0, 150, 136, 0.75)',
                'rgba(76, 175, 80, 0.8)',
                'rgba(139, 195, 74, 0.85)',
                'rgba(205, 220, 57, 0.9)',
                'rgba(255, 235, 59, 0.95)',
                'rgba(255, 193, 7, 1)'
            ],

            components: {

                // Main components
                preview: true,
                opacity: true,
                hue: true,

                // Input / output Options
                interaction: {
                    hex: true,
                    rgba: true,
                    hsla: true,
                    hsva: true,
                    cmyk: true,
                    input: true,
                    save: true
                }
            }
        });
        pickr2.on('init', instance => {
        }).on('save', (color, instance) => {
            colors[1] = color.toHEXA()
        }).on('change', (color, source, instance) => {
            this.panel2.style.backgroundColor = color.toRGBA()
        });
        
        //

        let panel3 = document.getElementById('panel3')
        const pickr3 = Pickr.create({
            el: '.color-picker3',
            theme: 'classic', 

            swatches: [
                'rgba(244, 67, 54, 1)',
                'rgba(233, 30, 99, 0.95)',
                'rgba(156, 39, 176, 0.9)',
                'rgba(103, 58, 183, 0.85)',
                'rgba(63, 81, 181, 0.8)',
                'rgba(33, 150, 243, 0.75)',
                'rgba(3, 169, 244, 0.7)',
                'rgba(0, 188, 212, 0.7)',
                'rgba(0, 150, 136, 0.75)',
                'rgba(76, 175, 80, 0.8)',
                'rgba(139, 195, 74, 0.85)',
                'rgba(205, 220, 57, 0.9)',
                'rgba(255, 235, 59, 0.95)',
                'rgba(255, 193, 7, 1)'
            ],

            components: {

                // Main components
                preview: true,
                opacity: true,
                hue: true,

                // Input / output Options
                interaction: {
                    hex: true,
                    rgba: true,
                    hsla: true,
                    hsva: true,
                    cmyk: true,
                    input: true,
                    save: true
                }
            }
        });
        pickr3.on('init', instance => {
        }).on('save', (color, instance) => {
            colors[2] = color.toHEXA()
        }).on('change', (color, source, instance) => {
            this.panel3.style.backgroundColor = color.toRGBA()
        });      

        //

        let panel4 = document.getElementById('panel4')
        const pickr4 = Pickr.create({
            el: '.color-picker4',
            theme: 'classic', 

            swatches: [
                'rgba(244, 67, 54, 1)',
                'rgba(233, 30, 99, 0.95)',
                'rgba(156, 39, 176, 0.9)',
                'rgba(103, 58, 183, 0.85)',
                'rgba(63, 81, 181, 0.8)',
                'rgba(33, 150, 243, 0.75)',
                'rgba(3, 169, 244, 0.7)',
                'rgba(0, 188, 212, 0.7)',
                'rgba(0, 150, 136, 0.75)',
                'rgba(76, 175, 80, 0.8)',
                'rgba(139, 195, 74, 0.85)',
                'rgba(205, 220, 57, 0.9)',
                'rgba(255, 235, 59, 0.95)',
                'rgba(255, 193, 7, 1)'
            ],

            components: {

                // Main components
                preview: true,
                opacity: true,
                hue: true,

                // Input / output Options
                interaction: {
                    hex: true,
                    rgba: true,
                    hsla: true,
                    hsva: true,
                    cmyk: true,
                    input: true,
                    save: true
                }
            }
        });
        pickr4.on('init', instance => {
        }).on('save', (color, instance) => {
            colors[3] = color.toHEXA()
        }).on('change', (color, source, instance) => {
            this.panel4.style.backgroundColor = color.toRGBA()
        });
                
        //

        let panel5 = document.getElementById('panel5')
        const pickr5 = Pickr.create({
            el: '.color-picker5',
            theme: 'classic', 

            swatches: [
                'rgba(244, 67, 54, 1)',
                'rgba(233, 30, 99, 0.95)',
                'rgba(156, 39, 176, 0.9)',
                'rgba(103, 58, 183, 0.85)',
                'rgba(63, 81, 181, 0.8)',
                'rgba(33, 150, 243, 0.75)',
                'rgba(3, 169, 244, 0.7)',
                'rgba(0, 188, 212, 0.7)',
                'rgba(0, 150, 136, 0.75)',
                'rgba(76, 175, 80, 0.8)',
                'rgba(139, 195, 74, 0.85)',
                'rgba(205, 220, 57, 0.9)',
                'rgba(255, 235, 59, 0.95)',
                'rgba(255, 193, 7, 1)'
            ],

            components: {

                // Main components
                preview: true,
                opacity: true,
                hue: true,

                // Input / output Options
                interaction: {
                    hex: true,
                    rgba: true,
                    hsla: true,
                    hsva: true,
                    cmyk: true,
                    input: true,
                    save: true
                }
            }
        });
        pickr5.on('init', instance => {
        }).on('save', (color, instance) => {
            colors[4] = color.toHEXA()
        }).on('change', (color, source, instance) => {
            this.panel5.style.backgroundColor = color.toRGBA()
        });

    </script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>
</html>
