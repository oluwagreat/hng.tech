
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Mercy Ikpe</title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Catamaran|Comfortaa');
        *{
            padding: 0;
            margin: 0;
            font-family: 'Catamaran', sans-serif;
        }
        .wrapper {
            margin: 90px auto;
            width: 80%;
            display: grid;
            grid-template-columns: 1fr 3fr;
            /*grid-template: 700px / 1.5fr 4fr;*/
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        .box-a {
            display: inline-grid;
            /*grid-template-rows: 50px 100px;*/
            background-color: #EDF5FF;
        }

        .box-b {
            background-color: #fff;
            font-size: 1.2rem;
        }
        .profile-div {
            /*text-align: center;*/
            margin: 15px auto;
        }
        .profile-pic {
            width: 200px;
            height: 250px;
            border-radius: 50%;
        }

        .center {
            margin: auto;
            padding: 70px 10%;

        }
        .center>h2,h5 {
            margin-bottom: 3%;
        }
        .icons {
            margin-top: 3%;
        }
        .icon {
            margin-left: 5px;
        }
        .icon:hover {
            width: 20px;
        }
        a {
            text-decoration: none;
        }

        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }

        /* Change the link color on hover */
        li a:hover {
            font-size: 1.3rem
        }

    </style>
</head>

<body>

<div class="wrapper">
    <div class="box-a">
        <div class="profile-div">
            <img src="https://res.cloudinary.com/mercyikpe/image/upload/v1554279034/IMG-20180724-WA0022_neohq2.jpg" class="profile-pic">
        </div>
        <ul>
            <li><a href="#home">About</a></li>
            <li><a href="#news">Projects</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>

    </div>

    <div class="box-b">

        <div class="center">
            <h2>Mercy Ikpe<img src="https://res.cloudinary.com/mercyikpe/image/upload/v1554280590/icons8-user_female_skin_type_5_zhyrmf.png"></h2>
            <h5>Hullo! </h5>
            <p>I'm a Software Developer who likes building things for the Web.</p>

            <p>A backend guy once said he prefers spending time solving an
                unsolvable problem at backend than connectings dots on frontend  
                <img src="https://res.cloudinary.com/mercyikpe/image/upload/v1554280590/icons8-smiling_lpxxsb.png">
                <img src="https://res.cloudinary.com/mercyikpe/image/upload/v1554280590/icons8-smiling_lpxxsb.png">
                <img src="https://res.cloudinary.com/mercyikpe/image/upload/v1554280590/icons8-smiling_lpxxsb.png">
                </br></br>That’s quite opposite of me, If the froentend ain’t cool, I won’t leave it.
                I prefer to get my interface beautiful before I begin work on backend.   </p>
            <div class="icons">
                <a href="https://www.facebook.com/mercy.ikpe.79">
                    <img src="https://res.cloudinary.com/mercyikpe/image/upload/v1528927628/facebook_zaifte.png" alt="facebook icon" class="icon">
                </a>
                <a href="https://twitter.com/mercyikpee">
                    <img src="https://res.cloudinary.com/mercyikpe/image/upload/v1528927629/twitter_a0knpt.png" alt="twitter icon" class="icon">
                </a>
            </div>
        </div>
    </div>
</div>

</body>

</html>
