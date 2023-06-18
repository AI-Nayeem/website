<head>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>

    <footer>
            <div class="footer-content" style='color:black;'>
                <div class="footer-brand">
                    <h3 style="font-size: 35px;" class="footer-img">FilmFiesta</h3>
                    <p class="slogan" >Experience the magic of movies like never before. Join our community of movie enthusiasts today.</p>
                    <div class="social-link">
                        <a href="https://www.facebook.com/" ><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="https://twitter.com/" ><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="https://www.instagram.com/" ><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="https://www.youtube.com/" ><ion-icon name="logo-youtube"></ion-icon></a>
                        <a href="https://www.tiktok.com/en/"><ion-icon name="logo-tiktok"></ion-icon></a>
                    </div>
                </div>
            </div>
            <div class="footer-copyright" style='color:black;'>
                <div class="copyright">
                    <p>&copy; copyright 2023 FilmFiesta</p>
                </div>
                <div class="wrapper">
                    <a href="disclaimer.php">Disclaimer</a>
                    <a href="privacy.php">Privacy policy</a>
                </div>
            </div>
        </footer>
    </div>
</body>
</html>


<style>

footer{
  background: white;
  padding: 40px 70px 40px;
}
.footer-content{
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  border-bottom: 1px solid hsla(218, 39%, 14%, 0.8);
  padding-bottom: 80px;
}
.footer-brand{
  max-width: 250px;
  margin-right: 130px;
}
.footer-brand .footer-img{
  padding-right: 120px;
}
.footer-logo{
  width: 100px;
  margin-bottom: 30px;
}
.slogan{
  font-size: 17px;
  line-height: 20px;
  margin-bottom: 20px;
}
.social-link a {display: inline-block;}

.social-link ion-icon{
  font-size: 25px;
  margin-right: 20px;
}
.footer-links{
  width: 20%;
  display: grid;
  align-items: flex-end;
}

.link-heading{margin-bottom: 20px;}

.link-item{font-size: 14px;}

ul .link-item:not(:last-child){margin-bottom: 10px;}

.link-item:hover a{ color: hsl(214, 84%, 56%);}

.footer-copyright{
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 40px;
}

.footer-copyright p,
.wrapper a{ font-size: 17px; color: black;}

.wrapper a:hover{ color: hsl(214, 84%, 56%);}

.wrapper{display: flex;}

.wrapper a:not(:last-child) {margin-right: 30px;}


</style>