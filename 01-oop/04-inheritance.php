<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>04- Inheritance</title>
    <link rel="stylesheet" href="css/master.css">
    <style>
        section {
            background-color: #0009;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
            padding: 10px;

            h2 {
                margin: 0;
            }

            button {
                background-color: #994bde;
                border: 2px solid #fff6;
                border-radius: 8px;
                color: #fff9;
                cursor: pointer;
                font-size: 1rem;
                width: 300px;
                padding: 1rem;
            }

        }
    </style>
</head>

<body>
    <nav class="controls">
        <a href="index.html">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#ffffff" d="M512 256A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM231 127c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-71 71L376 232c13.3 0 24 10.7 24 24s-10.7 24-24 24l-182.1 0 71 71c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0L119 273c-9.4-9.4-9.4-24.6 0-33.9L231 127z" />
            </svg>
        </a>
    </nav>
    <main>
        <h1>04- Inheritance</h1>
        <section>
            <form action="" method="post">
                <button name="Igglybuff">Igglybuff</button>
                <button name="Jigglybuff">Jigglybuff</button>
                <button name="Wigglytuff">Wigglytuff</button>
            </form>
            <?php
            class Pokemon
            {
                //Atrributes
                protected $name;
                protected $type;
                protected $healt;
                protected $img;
                //protected $image;

                //Methods
                public function __construct($name, $type, $healt, $img)
                {
                    $this->name = $name;
                    $this->type = $type;
                    $this->healt = $healt;
                    $this->img = $img;
                }

                public function attack()
                {
                    $sms = $this->name . "Igglybuff" . $this->img;
                    return $sms;
                }
                public function defense()
                {
                    $sms = $this->name . "Jigglybuff" . $this->img;
                    return $sms;
                }

                public function tres()
                {
                    $sms = $this->name . "Wigglytuff" . $this->img;
                    return $sms;
                }
                public function show()
                {
                    return $this->name . " | " . $this->type . " | " . $this->healt . $this->img;
                }

                public function evolution()
                {
                    return $this->name . " | " . $this->type . " | " . $this->healt . $this->img;
                }
            }

            class Evolve extends Pokemon
            {
                public function levelUp($name, $type, $healt, $img)
                {
                    parent::__construct($name, $type, $healt, $img);
                }
            }

            $pk = new Pokemon('Igglybuff', 'Sing', 150, '<img height="300" width="300" src="./img/1.png" alt="">');
            if ($_POST) {
                if (isset($_POST['Igglybuff'])) {
                    $pk1 = new Evolve('Igglybuff', 'Sing', 150, '<img height="300" width="300" src="./img/1.png" alt="">');
                    echo $pk1->show();
                } elseif (isset($_POST['Jigglybuff'])) {
                    $pk2 = new Evolve('Jigglybuff', 'Sing', 150, '<img height="300" width="300" src="./img/2.png" alt="">');
                    echo $pk2->show();
                } elseif (isset($_POST['Wigglytuff'])) {
                    $pk3 = new Evolve('Wigglytuff', 'Sing', 150, '<img height="300" width="300" src="./img/3.png" alt="">');
                    echo $pk3->show();
                }
            } else {
                $pk1 = new Evolve('Igglybuff', 'Sing', 150, '<img height="300" width="300" src="./img/1.png" alt="">');
                echo $pk1->show();
            }
            ?>
            <h2>Evolve your Pokemon</h2>

        </section>
    </main>
</body>

</html>
Wigglytuff
Jigglybuff