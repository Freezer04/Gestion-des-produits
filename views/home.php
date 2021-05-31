




    <style type="text/css">
    .image-grid-cover {
    width: 100%;
    background-size: cover;
    min-height: 180px;
    position: relative;
    margin-bottom: 30px;
    text-shadow: rgba(0,0,0,.8) 0 1px 0;
    border-radius: 4px;
}
.image-grid-clickbox {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    display: block;
    width: 100%;
    height: 100%;
    z-index: 20;
    background: rgba(0,0,0,.45);
}
.cover-wrapper {
    font-size: 18px;
    text-align: center;
    display: block;
    color: #fff;
    text-shadow: rgba(0,0,0,.8) 0 1px 0;
    z-index: 21;
    position: relative;
    top: 80px;
}
a, a:focus, a:hover {
    text-decoration: none;
    outline: 0;
}    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    <div class="container">
<div class="row">
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url(https://cdn.beam.usnews.com/dims4/USNEWS/59f1d50/2147483647/thumbnail/970x647/quality/90/?url=http%3A%2F%2Fcom-usnews-beam-media.s3.amazonaws.com%2F28%2F21%2F37a23a5f40048594e7e1209a842d%2F150427-networking-stock.jpg	);" class="image-grid-cover">
								<a href="" class="image-grid-clickbox"></a>
								<a href="<?php echo BASE_URL;?>products" class="cover-wrapper">Products</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url(https://cdn.bolgegundem.com/d/news/333778.jpg	);" class="entry-cover image-grid-cover has-image">
								<a href="" class="image-grid-clickbox"></a>
								<a href="<?php echo BASE_URL;?>category" class="cover-wrapper">Category</a>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-md-4 image-grid-item">
							<div style="background-image: url(https://www.trthaber.com/resimler/218000/218798.jpg	);" class="entry-cover image-grid-cover has-image">
								<a href="#" class="image-grid-clickbox"></a>
								<a href="<?php echo BASE_URL;?>brand" class="cover-wrapper">Brand</a>
							</div>
						</div>
						
					</div>
</div>	<script type="text/javascript">
		</script>



   

