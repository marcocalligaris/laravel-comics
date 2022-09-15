<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DC Comics | {{ $title }}</title>
</head>
<body>
    <header>
        <div class="container">
            <figure>
                <a href="#"><img src="../assets/img/dc-logo.png" alt="DC Comics logo"></a>
            </figure>
            <nav>
                <ul>
                    <li v-for="link in links" :key="link.id">
                        <a
                            :href="link.url"
                            :class="{'active': link.active }"
                            >
                            {{ link.text }}</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>