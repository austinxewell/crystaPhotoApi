<html>
<body>

<h2> My First PHP Webpage </h2>

<?php
    class Fruit {
        
        public $name;
        public $color;

        function set_name($name) {
            $this->name = $name;
        }

        function get_name() {
            return $this->name;
        }
    }
?>

</body>
</html>