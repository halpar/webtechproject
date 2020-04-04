<?php include ("includes/config.php");
if(!isset($_SESSION['uname']))
{
	header("location:login.php");
}
?>
<?php include ("includes/header.php")?>
<?php error_reporting(E_ALL ^ E_NOTICE);?>	

<html>
  <center>
  </article>
	<article>
		<img src="alpersarper.jpg" width="200" height="200" alt=""/>
		<div style="background-color: #1d89aa;color:white;padding:5px; margin-left:240px; margin-top:50px;">
              <h1>Ben Kimim?</h1>
                <p><b>Ben Alper Sarper</b> , 04.10.1996 tarihinde Istanbul'da doğdum.İstanbul'da ikamet etmekteyim .Sakarya Üniversitesi'ndeki 6. senem
				<p>Bu dönemin sonunda  Sakaya Üniversitesi'nden mezun olacağım ve lisans eğitim hayatım sona erecek.</p>
        </div>
		<p></p>
		<p></p>
		<p></p>
		<p></p>
		<p></p>
		<p></p>
		<p></p>
		<div style = "background-color: #1d89aa;color:white;padding:5px; margin-top:50px ;margin-right : 240px;">
			<h2> Hobilerim </h2>
		   <div >
		      <p>Yaklaşık 6 senedir Masaüstü Rol Yapma Oyunları (FRP) ile hobi olarak ilgileniyorum</p>
              <p>Bunun yanı sıra ilkokuldan beri satranç oynamaktayım.Daha önceden lastik kurmalı model uçak yapma ile ilgileniyordum fakat üniversiteye geçtiğimden beri
              bu hobimi kaybettim.</p>
			  <p>Bunun haricinde zengin hikayeye sahip bilgisayar oyunları uzun zamandır ilgimi çekmekte umarım bir gün o kadar zengin içeriğe sahip
              bir oyun geliştirme ekibinde yer alabilirim.</p>
		    </div>
		<div>
	</article>
	<article>
	<div style = "color:#1d89aa;padding:5px; margin-top:50px; margin-bottom:50px">
		<header>
			<h1>Hobilerim ile ilgili fotograflar ve web siteleri</h1>
		</header>
		<p><a href="https://frpnet.net/rehber/frp-nedir-v2">Detaylı bilgi için , Frp Nedir?</a></p>
		<img src="frp.jpg" width="200" height="200" alt=""/>
		<div style = " margin-top: 10px;">
		<p><a href="https://tr.wikipedia.org/wiki/Satran%C3%A7">Detaylı bilgi için , Satranç Nedir?</a></p>
		<img src="chess.jpg" width="200" height="200" alt=""/>
		</div>
		<div style = " margin-top: 10px;">
		<p><a href="https://www.thk.org.tr/egitim/kurslarimiz/itemlist/category/130-amator_sportif_havacilik_egitimleri_model_ucak">Detaylı bilgi için , Model uçak yapma Nedir?</a></p>
		<img src="lastikkurmali.jfif" width="200" height="200" alt=""/>
		</div>
	</article>
	</div>
</section>
</body>
</center>
</html>


<?php include ("includes/footer.php")?>