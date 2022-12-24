<style>
	
	/*start of the css for footer section*/
.footer{
	background: #303036;
	color: #d3d3de;
	height: 400px;
	position: relative;
}
.footer .main-content{
	border: 1px solid red;
}
.footer .footer-bottom{
	background: #343a40;
	color: 68686B;
	height: 50px;
	width: 100%;
	text-align: center;
	position: absolute;
	bottom: 0px;
	left: 0px;
	padding-top:20px;


}
.main-content{
	display: flex;
}
.main-content .box{
	flex-basis: 50%;
	padding: 10px 20px;
}
.box h2{
	font-size: 1.12rem;
	font-weight: 600;
	text-transform: uppercase;

}
.box .content{
	margin: 20px 0 0 0;
}
.left .content .social{
	margin: 20px 0 0 0;

}
.left .content p{
	text-align: justify;
}
.left .content .social a{
	padding: 0 2px;
	color: #fff;
}
.left .content .social a span{
	height: 40px;
	width: 40px;
	background: #1a1a1a1a;
	line-height: 40px;
	text-align: center;
	font-size: 18px;
	border-radius: 5px;
	transition: 0.3s;


}
.left .content .social a span:hover{
	background: #f12020;
}
.center {
	
	line-height: 40px;
}
.right {
	
	line-height: 40px;
}
.btn button{
	font-size: 30px;
	color: red;
	font-weight: 600;
	border-radius: 6px;
	cursor: pointer;
	
}
.btn button:hover{
	background: aqua;
}
/*end of of the css for footer section*/
</style>


<!-- footer start -->
<div class="footer">
	<div class="main-content">
		<div class="left box">
			<h2>About Us</h2>
			<div class="content">
				<p>We are providing your health related services to your home only at any time and any place .</p>
				<div class="social">
					<a href="https://www.facebook.com"><span class="fab fa-facebook-f"></span></a>
					<a href="https://www.twitter.com"><span class="fab fa-twitter"></span></a>
					<a href="https://www.instagram.com"><span class="fab fa-instagram"></span></a>
					<a href="https://www.youtube.com"><span class="fab fa-youtube"></span></a>
				</div>
			</div>
		</div>
		<div class="center box">
			<h2>Address</h2>
			<div class="content">
				<div class="place">
					<span class="fas fa-map-marker-alt"></span>
					<span class="text">Mahendranagar,Kanchanpur</span>

				</div>
				<div class="phone">
					<span class="fas fa-phone"></span>
					<span class="text">+9779865645488</span>
					
				</div>
				<div class="email">
					<span class="fas fa-envelope"></span>
					<span class="text">yogendradhami6@gmail.com</span>
					
				</div>
			</div>
		</div>

		<div class="right box">
			<h2>contact Us</h2>
				<div class="content">
					<form action="#">
						<div class="email">
							<div class="text">
								Email *
							</div>
							<input type="email" name="" required>
						</div>
						<div class="msg">
							<div class="text">Message *</div>
							<textarea rows="2" cols="25"  required ></textarea>
						</div>
						<div class="btn">
							<button type="submit">send</button>
						</div>
					</form>
				</div>
		</div>


	</div>
		<div class="footer-bottom">
			@copy; codingnepal.com | Designed by Yogendra Dhami 2021		</div>
	
</div>



<!-- footer end -->