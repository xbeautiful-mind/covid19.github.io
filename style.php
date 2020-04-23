<style type="text/css">

* {
	margin: 0;
	padding: 0;
	box-sizing: border-box;
}
html {
	scroll-behavior: smooth;
}

.navbar-toggler {
	border-color: rgba(255,255,255,0.3);
}
navbar-toggler-icon {
	color: black!important;
}
.navbar-style .navbar-brand {
	font-size: 30px;
}
navbar-brand {
	color: white;
}
ul li a {
	color: rgba(255,255,255,0.8);
}
ul li a:hover {
	color: rgba(255,255,255,1);
}



#header {
	background: orange;
	padding: 25px 0;
}
.rightside h1 {
	font-size: 2.5rem;
}
.rightside img {
	animation: gocorona 3s linear infinite;
}
@keyframes gocorona {
	0% {
		transform: rotate(-360deg);
	}
}
.leftside img {
	animation: heartbeat 4s linear infinite;
}
@keyframes heartbeat {
	0% {
		transform: scale(0.75);
	}
	20% {
		transform: scale(1);
	}
	40% {
		transform: scale(0.75);
	}
	60% {
		transform: scale(1);
	}
	80% {
		transform: scale(0.75);
	}
	100% {
		transform: scale(1);
	}
}





.corona-update {
	margin: 0 0 30px 0;
	text-align: center;
}

.border {
	position: absolute;
	width: 50%;
	height: 50%;
	border
	border-right: 8px solid #007bcc;
	animation: borderMove 4s linear infinite;
}

#aboutid img {
}

@keyframes borderMove {
	0% {
		transform: rotate(360deg);
	}
}






#footer {
	background: #007bff;
	padding: 10px 0 0 0;
	color: white;
	font-size: 18px;
}



.scroll-top {
	position: fixed;
	bottom: 30px;
	right: 30px;
	z-index: 100;
	background: #007bff;
	color: white;
	font-size: 22px;
	border: 0;
	outline: 0;
	border-radius: 10px;
	padding: 10px 18px;
	cursor: pointer;
	box-shadow: 0px 0px 3px 3px black;
	transition: .2s;
	display: none;
}
.scroll-top:hover {
	box-shadow: 0px 0px 0px 0px black;
	transition: .2s;
}

















</style>