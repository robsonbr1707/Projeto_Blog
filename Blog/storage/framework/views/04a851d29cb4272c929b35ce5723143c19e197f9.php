<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <title>Blog</title>

<style>
    *{
        margin: 0;
        padding: 0;
        font-family: 'Roboto Slab', serif;
        text-decoration: none;
        outline: none;
        list-style-type: none;

    }

    body{
        background-color: black;
        min-width: 600px;
    }

    textarea{
        resize:none;
        font-size: 20px;
        padding: 10px;
        outline: none;
        margin: auto;
        
    }

    /*-----Nav-Links------*/

    .nav-link{
        font-size: 17px;
        border-bottom:1px solid rgba(255, 255, 255, 0.335);

    }

    .nav-link a{
        text-decoration: none;
        color: #FFF;
    }

    .dropdown-menu{
        background-color:rgb(17, 17, 17);
        padding: 5px;
    }

    .dropdown-menu .link-right a{
        padding: 5px;
        font-size: 17px;
    }

    .dropdown-menu .link-right a:hover{
        color: rgb(241, 237, 237);
        background-color:black;
    }


    .dropdown-item{
        text-align: center;
        color: #FFF;
    }


    .ul-link li{
        display: inline-block;
        padding: 5px;
        margin: 10px 5px 0px 10px;
    }

    .link-center{
        text-align: center;
        width: 50%;
    }

    .link-center form{
        margin: auto;
        width: 100%;
    }

    .link-center input{
        width: 50%;
        height: 40px;
        padding: 5px;
        border-radius: 5px;
        font-size: 18px;
        border: 1px solid black;
    }

    .link-center .btn-search{
        width: 50px;
        height: 40px;
        border: none;
        outline: none;
        background-color: rgb(14, 14, 14);
        border-radius: 20px;
    }

    .link-right{
        text-align: right;
        float: right;
        color: rgb(0, 0, 0);
    }

    .link-left{
        text-align: left;
        font-size: 25px;
    }

    /*---DropDowns---*/

    .dropdown-menu{
    }
    /*----------Main--------*/

    main{
        margin-bottom: 100px;
        padding: 20px;
        background: rgba(128, 128, 128, 0.103);
    }

    /*------Section-Post-----*/

    .section-post{
        width: 80%;
        margin: 10px auto;
        padding-top: 14px;
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        flex-direction: row;
    }

    .section-post h1{
        text-transform: capitalize;
        color: #FFF;
    }

    .link-post{
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
        margin:10px auto;
        text-decoration: none;
        color: #FFF;
        width: 100%;
        border-top: 1px solid rgba(255, 255, 255, 0.164);

    }

    .link-post:hover{
        color:#FFF;
    }

    .div-post-search{
        width: 250px;
        height:200px;
        margin:10px auto;
        border: 1px solid rgba(255, 255, 255, 0.082);
        text-align: center;
    }


    .div-post-search h5{
        text-transform: capitalize;

    }

    .div-post-search img{
        width: 80%;
        height: 150px; 
    }

    .div-post{
        margin: 5px;
        width: 280px;
        height: 260px;
        text-align: center;
        border: 1px solid rgba(255, 255, 255, 0.048);
        text-decoration: none;
        color: #FFF;
        border-radius: 10px;
    }

    .div-post h5{
        font-size: 25px;
        font-weight: bold;
        color: #FFF;
        position: relative;
        top: 80px;
        background-color: rgba(10, 10, 10, 0.63);
        text-transform: capitalize;
    }
    
    .div-post img{
        width: 80%;
        height: 130px;
        object-fit: cover;
        border-radius: 10px;
    }

    .div-post p{
        margin: auto;
        padding:5px;
        width: 90%;
        border-radius: 10px;
        font-size: 17px;
        background-color: rgba(34, 34, 34, 0.164);
        text-transform: capitalize;

    }

    /*------Section-Records-And-Comments-----*/

    .section-record{
        width: 88%;
        margin: 10px auto;
        padding-top: 14px;
        background-color: rgba(7, 7, 7, 0.918);

    }

    .div-record{
        margin:15px auto;
        padding: 10px;
        width: 100%;
        height: 100%;
        border-radius: 20px;
        
    }

    .div-record-image{
        height: 100%;
        width: 80%;
        margin: auto;
        padding: 10px;
        text-align: center;
    }

    .div-record img{
        max-width: 50%;
        height: 300px;
        text-align: left;
        margin: auto;
        border-radius:15px;
    }

    .div-record-description{        
        width: 80%;    
        border-radius: 20px 20px 0 0;
        margin: auto;
        padding: 10px;
        background-color: rgba(7, 7, 7, 0.918);

    }

    .div-record-description h3{
        text-align: center;
        color: rgba(255, 255, 255, 0.774);
        text-transform: capitalize;
    }

    .div-record-description p{
        font-size: 20px;
        text-align: center;
        color: rgba(255, 255, 255, 0.774);

    }

    .div-record-description span{
        color: rgba(255, 255, 255, 0.774);
        text-align: center;
        margin: auto;
    }

    /*----Comments----*/

    #section-form-comment{
        width: 90%;
        margin: 10px auto;
        margin-bottom: 30px;
        padding: 14px 0 20px 0;
        text-align: center;
        background-color: rgba(7, 7, 7, 0.561);
        color: #FFF;
    }

    #section-form-comment form{
        width: 40%;
        margin: auto;
    }

    #section-form-comment textarea{
        width: 100%;
        padding: 5px;
        border: 2px solid rgba(5, 212, 212, 0.746);
        border-radius: 10px;
        outline: none;
        font-size: 20px;
        background-color: rgb(255, 255, 255);
    }

    #section-comment{
        width: 50%;
        margin: 10px auto;
        padding-top: 14px;
        text-align: center;
        
    }

    .div-comment{
        color: #FFF;
        margin: 20px;
        text-align: left;
        padding: 5px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.233);
        position: relative;

    }

    .div-comment h4{
        text-align: left;
    }

    .div-comment p{
        text-align: left;
        padding: 5px;
        font-size: 17px;
        margin: 2px;

    }

    .div-comment span{
        margin: 0;
    }

    .div-comment .comment-icon{
        position: absolute;
        top: 0;
        right: 0;
        cursor: pointer;
    }

    .div-comment .comment-icon button{
        background-color: black;
        border: none;
        border-radius: 15px;
    }

    /*-----------Create-Posts-And-Records------------*/

    .form{
        width: 50%;
        margin: auto;
        text-align: left;
    }

    .form form{
        margin: auto;
    }

    .form form input{
        font-size: 20px;
        width: 60%;
        height: 40px;
    }

    .form label{
        color: #FFF;
        font-size: 20px;
        margin: 10px;
    }

    .form select {
        padding: 5px;
        margin: 10px;
        font-size: 20px;
        border-radius: 5px;
    }

    .form select option{
        padding: 10px;
        margin: 10px;
        font-size: 20px;
    }

    .form textarea{
        font-size: 20px;
        padding: 20px;
    }

    .form input[type='file']{
        color: #FFF;
    }

    /*--------Messages_Success-------*/

    .message-success{
        color: #FFF;
        font-size: 22px;
        padding: 5px;
        text-align: center;
        margin: auto;
    }

    /*----Messages_Error----*/

    .message-error{
        color: red;
        font-size: 13px;
        text-align: center;
    }

    /*--------Edit-Table--------*/

    #table-content{
        width: 80%;
        margin: auto;
        color: #FFF;
    }

    #table-content table{
        width: 100%;
    }

    #table-content table th{
        margin: 5px;
        padding: 15px;
        text-align: center;
        font-size: 20px;
    }

    #table-content table td{
        margin: 5px;
        padding: 15px;
        text-align: center;
        font-size: 18px;
        width: 30%;
    }

    #table-content .td-buttons{
       display: flex;
       justify-content: space-around;
       margin: 5px;
       width: 100%;
    }

    #table-content td.buttons .btn{
        margin: 5px;
        padding: 5px;
    }

    #table-content table img{
        width: 100px;
        height: 100px;
        object-fit: cover;
    }

    /*-----Card-Edit------*/

    #card-edit{
        height: 100%;
        margin: auto;
        padding: 10px;
    }

    .card-edit{
        width: 60%;
        height: 90%;
        margin: auto;
        padding: 10px;
    }

    .card-edit form input{
        margin: auto;
        width: 70%;
        font-size: 20px;
    }

    .card-edit .image-edit{
        margin: auto;
        text-align: center; 
        width: 80%;
    }

    .card-edit img{
        margin: auto;
        text-align: center;
        max-width: 50%;
    }

    .card-edit .input-edit{
        font-size: 20px;
        color: #FFF;
        margin: auto;
        padding: 10px;
    }

    .card-edit textarea{
        width: 80%;
    }

    .card-edit .btn-success{
        margin: 10px;
        padding: 5px;
        height: 50px;
        font-size: 20px;
    }

    .card-edit .btn-danger{
        width: 100%;
        height: 60px;
        padding: 10px;
        font-size: 24px;
    }

    /*------Rodape-----*/

    footer{
        border-top: 1px solid rgba(255, 255, 255, 0.431);

    }

    .footer-dev{
        border-top: 1px solid rgba(255, 255, 255, 0.205);
        margin: 15px;
        background-color: rgba(0, 0, 0, 0.918);

    }

    footer p{
        color: #FFF;
        font-size: 20px;
        text-align: center;
        margin: 5px;
    }

    .footer-box{
        width: 70%;
        margin: auto;
        display: flex;
        justify-content: space-evenly;
        flex-wrap: wrap;
    }

    .footer-div{
        margin:0 30px;
        padding: 15px;
        text-align: right;
    }

    .footer-div h2{
        color: #FFF;
    }

    .footer-div ul li a{
        color: #FFF;
        text-decoration: none;
        font-size: 17px;
    }

    .footer-div.social{
        text-align: center;
    }

    .footer-div.social ul li{
        display: inline-block;
        margin: 5px;
    }

</style>

</head>
<body>
    <header>
        <nav class="nav-link">
            <ul class="ul-link">
                <li class="link-left"> <a href="/">Blog</a>  </li>
                <li class="link-center">
                    <form action="<?php echo e(route('search')); ?>" method="GET">
                        <?php echo csrf_field(); ?>

                        <input type="search" name="search" placeholder="Pesquise Algum Assunto">
                        <button type="submit" class="btn-search"><img src="<?php echo e(url('icons/search.svg')); ?>" alt="Procurar"></button>
                    </form>
                </li>
            <?php if(auth()->guard()->guest()): ?>
                <li class="link-right"> <a href="/register">Registrar</a> </li>
                <li class="link-right"> <a href="/login">Login</a> </li>
            <?php endif; ?>

            <?php if(auth()->guard()->check()): ?>
                <li class="link-right">
                    <a class="dropdown-toggle" href="#" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php echo e(ucwords(Auth::user()->name)); ?>

                    </a>

                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <?php if(auth()->user()->autorize == 'admin'): ?>
                    <li class="link-right"> 
                        <a href="<?php echo e(route('create-record-index')); ?>">Criar Registros</a>
                    </li>
                    <li class="link-right"> 
                        <a href="<?php echo e(route('create-post-index')); ?>">Criar Post</a>
                    </li>
                    <li class="link-right"> 
                        <a href="<?php echo e(route('edit-records')); ?>">Editar Registros</a>
                    </li>
        
                <?php elseif(auth()->user()->autorize == 'mod'): ?>
                    <li class="link-right"> 
                        <a href="<?php echo e(route('edit-records')); ?>">Editar Registros</a> 
                    </li>
                <?php endif; ?>
                    <form action="/logout" method="POST">
                        <?php echo csrf_field(); ?>
                        <button type="submit" class="dropdown-item">Sair Da Conta</button>
                    </form>
                </ul>
                </li> 
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <div class="footer-box">
            <div class="footer-div">
                <h2>Sobre Nós</h2>
                <ul>
                    <li><a href="#">Empresa</a></li>
                    <li><a href="#">Contato</a></li>
                </ul>
            </div>
            <div class="footer-div">
                <h2>Suporte</h2>
                <ul>
                    <li><a href="#">Chat Ao Vivo</a></li>
                    <li><a href="#">Falar Com Atentente</a></li>
                    <li><a href="#">Duvidas Frequentes</a></li>
                </ul>
            </div>
            <div class="footer-div social">
                <h2>Siga-Nos</h2>
                <ul>
                    <li><a href="#"><img src="<?php echo e(url('icons/facebook.svg')); ?>" alt="Facebook"></a></li>
                    <li><a href="#"><img src="<?php echo e(url('icons/whatsapp.svg')); ?>" alt="WhatsApp"></a></li>
                    <li><a href="#"><img src="<?php echo e(url('icons/github.svg')); ?>" alt="Github"></a></li>
                    <li><a href="#"><img src="<?php echo e(url('icons/linkedin.svg')); ?>" alt="Linkedin"></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-dev">
            <p>Desenvolvido Por Robson Luiz &copy;</p>
        </div>
    </footer>

<script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Laravel-Sites\Blog\resources\views/layouts/app.blade.php ENDPATH**/ ?>