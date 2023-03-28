<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data['page_title']; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="<?=ASSETS?>css/styles.css">
    <script src="<?=ASSETS?>/js/jQuery_uncom.js" type="module"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top navbarScroll">
        <div class="container">
            <a class="navbar-brand" href="#">John Doe</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=ROOT?>home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=ROOT?>about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=ROOT?>services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?=ROOT?>contact">Contact</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
