<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>Antrian</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- ** CSS /Plugins Needed for the Project ** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="/plugins/bootstrap/bootstrap.min.css">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="/plugins/themify-icons/themify-icons.css">
	<!--Favicon-->
	<link rel="icon" href="/images/favicon.png" type="image/x-icon">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<!-- Main Stylesheet -->
	<link href="/assets/style.css" rel="stylesheet" media="screen" />
</head>

<body>
	<!-- header -->
	<header class="banner overlay bg-cover" data-background="/images/banner.jpg">
	
	</header>
	<!-- /header -->

	<!-- topics -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h2 class="section-title">sistem antrian</h2>
				</div>
				<!-- topic-item -->
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="cs()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-panel icon text-primary d-block mb-4"></i>
                        <p>{{$antri_cs}}</p>
						<h3 class="mb-3 mt-0">costomor serviice</h3>
                        @if ($antri = "cs")
                            <audio controls autoplay hidden>
                                <source src="/{{$antri_cs}}.oog" type="audio/oog">
                                <source src="/{{$antri_cs}}.mp3" type="audio/mp3">
                            </audio>
                        @endif
						{{-- <p class="mb-0">Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet</p> --}}
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="teller1()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-credit-card icon text-primary d-block mb-4"></i>
                        <p>{{$antri_teller_1}}</p>
						<h3 class="mb-3 mt-0">teller &amp; 1</h3>
						{{-- <p class="mb-0">Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet</p> --}}
                         @if ($antri = "teller1")
                            <audio>
                                <source src="/{{$antri_teller_1}}.oog" type="audio/oog">
                                <source src="/{{$antri_teller_1}}.mp3" type="audio/mp3">
                            </audio>
                        @endif
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a onclick="teller2()" class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-package icon text-primary d-block mb-4"></i>
                        <p>{{$antri_teller_2}}</p>
						<h3 class="mb-3 mt-0">teller 2</h3>
						{{-- <p class="mb-0">Lorem ipsum dolor sit amet ipsum dolor sit amet ipsum dolor sit amet</p> --}}
                         @if ($antri = "teller2")
                            <audio>
                                <source src="/{{$antri_teller_2}}.oog" type="audio/oog">
                                <source src="/{{$antri_teller_2}}.mp3" type="audio/mp3">
                            </audio>
                        @endif
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /topics -->

	<!-- ** JS /Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="/plugins/jquery/jquery-1.12.4.js"></script>
	<!-- Bootstrap JS -->
	<script src="/plugins/bootstrap/bootstrap.min.js"></script>
	<!-- match-height JS -->
	<script src="/plugins/match-height/jquery.matchHeight-min.js"></script>
	<!-- Main Script -->
	<script src="/assets/script.js"></script>

    <script>
        function cs(){
            var audio = new Audio('/1.mp3')
            audio.play()
            audio.addEventListener('edded', function(){
                location.href = "/antrian_cs/"+{{$antri_cs}}
            })
        }
        function teller1(){
            var audio = new Audio('/1cs.mp3')
            audio.play()
                audio.addEventListener('edded', function(){
                location.href = "/antrian_teller_1/"+{{$antri_teller_1}}
            })
        }

        function teller2(){
            var audio = new Audio('/1cs.mp3')
            audio.play()
                audio.addEventListener('edded', function(){
                location.href = "/antrian_teller_2/"+{{$antri_teller_2}}
            })
        }
    </script>
</body>

</html>