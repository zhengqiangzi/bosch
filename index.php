<?php
	$version=4;
	echo "<script> var version=".$version."</script>"
?>
<!doctype>
<html>
<head>
	<meta charset='utf-8'/>
	<link type="text/css" rel="styleSheet" href="dist/css/main.min.css?rand=<?php echo $version;?>"/>


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/minified/TweenMax.min.js"></script>
	<script type="text/javascript" src="js/handlebars.min.js"></script>
	<script type="text/javascript" src="js/meta.js"></script>
	<script type="text/javascript" src="js/touch-0.2.14.min.js"></script>
	<script type="text/javascript" src="js/preloadjs.min.js"></script>
<title>BOSCH</title>

</head>
<body>

	<div class='page'>
  	

	</div>
		
	<div class="loading">
		<div class="footer-ball">
			<div><img src="img/loading/footer-ball.png?rand=<?php echo $version;?>"/></div>
		</div>

		<div class="progress">Loading...90%</div>
		
		<div class="logo">
			<img src="img/loading/logo.png?rand=<?php echo $version;?>"/>
		</div>
	</div>


	<script id="page1" type="text/x-handlebars-template">

		<div class='page1'>
			<div class='f1'><img src="img/frame1/f1.jpg?rand=<?php echo $version;?>"/></div>
			<div class='f2'>
				<img src="img/frame1/f2.png?rand=<?php echo $version;?>"/>
				<div class='g1'><img src="img/frame1/topg.png?rand=<?php echo $version;?>"/></div>
				<div class='g2'><img src="img/frame1/bottomg.png?rand=<?php echo $version;?>"/></div>
			</div>


			<div class='f3'><img src="img/frame1/f3.png?rand=<?php echo $version;?>"/></div>
			<div class='f4'><img src="img/frame1/f4.png?rand=<?php echo $version;?>"/></div>
		</div>

	</script>



	<script id="page2" type="text/x-handlebars-template">
		<div class='page2'>
			<div class='f1'><img src="img/frame2/f1.png?rand=<?php echo $version;?>"/></div>
			<div class='f2'><img src="img/frame2/f2.png?rand=<?php echo $version;?>"/></div>
			<div class='f3'><img src="img/frame2/f3.png?rand=<?php echo $version;?>"/></div>
			<div class='f4'><img src="img/frame2/f4.png?rand=<?php echo $version;?>"/></div>
			<div class="downBtn"></div>
		</div>
	</script>

	<script id="page3" type="text/x-handlebars-template">
		<div class='page3'>
			<div class='f1'><img src="img/frame3/f1.jpg?rand=<?php echo $version;?>"/></div>
			<div class='f2'><img src="img/frame3/f2.png?rand=<?php echo $version;?>"/></div>
			<div class='f3'>

				<div class='circle1'><div class='circle'></div></div>
				<div class='circle2'><div class='circle'></div></div>


			</div>
			<div class='f4'><img src="img/frame3/f4.png?rand=<?php echo $version;?>"/></div>
			<div class='f5'><img src="img/frame3/f5.png?rand=<?php echo $version;?>"/></div>
		</div>
	</script>

	<script id="page4" type="text/x-handlebars-template">
		<div class='page4'>
			<div class='f1'><img src="img/frame4/f1.jpg?rand=<?php echo $version;?>"/></div>
			<div class='f2'><img src="img/frame4/f2.png?rand=<?php echo $version;?>"/></div>
			<div class='f3'><img src="img/frame4/f3.png?rand=<?php echo $version;?>"/></div>
			<div class="downBtn"><img src="img/downBtn.png?rand=<?php echo $version;?>"/></div>
		</div>
	</script>
	<script id="page5" type="text/x-handlebars-template">
		<div class='page5'>
			<div class="page5F">
				<div class='f1'><img src="img/frame5/f1.jpg?rand=<?php echo $version;?>"/></div>
				<div class='f2'><img src="img/frame5/f2.png?rand=<?php echo $version;?>"/></div>
				<div class='f3'><img src="img/frame5/f3.png?rand=<?php echo $version;?>"/></div>
				<div class='f4'><img src="img/frame5/f4.png?rand=<?php echo $version;?>"/></div>
				<div class='f5'><img src="img/frame5/f5.png?rand=<?php echo $version;?>"/></div>
				{{!<div class="downBtn"><img src="img/downBtn.png?rand=<?php echo $version;?>"/></div>}}
				<div class='sz'><img src="img/frame5/sz.png?rand=<?php echo $version;?>"/></div>
			</div>
		</div> 
	</script>

	<script id="page6" type="text/x-handlebars-template">

		<div class='page6'>
			<div class='f1'><img src="img/frame6/f1.jpg?rand=<?php echo $version;?>"/></div>
			<div class='f2'><img src="img/frame6/f2.png?rand=<?php echo $version;?>"/></div>
			{{!<div class='f3'><img src="img/frame6/f3.png?rand=<?php echo $version;?>"/></div>}}
			<div class="downBtn"><img src="img/downBtn.png?rand=<?php echo $version;?>"/></div>


		</div>

	</script>
	<script id="page7" type="text/x-handlebars-template">

		<div class='page7'>
			<div class='f2'><img src="img/frame7/f2.jpg?rand=<?php echo $version;?>"/></div>
			<div class='f1'><img src="img/frame7/f1.png?rand=<?php echo $version;?>"/></div>
			<div class='f3'><img src="img/frame7/f2.png?rand=<?php echo $version;?>"/></div>
			<div class='f4'><img src="img/frame7/f3.png?rand=<?php echo $version;?>"/></div>
			<div class='f5'><img src="img/frame7/f4.png?rand=<?php echo $version;?>"/></div>
			<div class="downBtn"><img src="img/downBtn.png?rand=<?php echo $version;?>"/></div>


		</div>
 

	</script>

	<script id="page8" type="text/x-handlebars-template">

		<div class='page8'>
			<div class='f1'><img src="img/frame8/f1.png?rand=<?php echo $version;?>"/></div>
			<div class='f2'><img src="img/frame8/f2.png?rand=<?php echo $version;?>"/></div>
			<div class='f3'><img src="img/frame8/f3.png?rand=<?php echo $version;?>"/></div>
			<div class='f4'><img src="img/frame8/f4.png?rand=<?php echo $version;?>"/></div>
			<div class='f5'><img src="img/frame8/f5.png?rand=<?php echo $version;?>"/></div>
			<div class='f6'><img src="img/frame8/f6.png?rand=<?php echo $version;?>"/></div>
			<div class='f7'><img src="img/frame8/f7.png?rand=<?php echo $version;?>"/></div>
			<div class='f8'><img src="img/frame8/f8.png?rand=<?php echo $version;?>"/></div>
			<div class='f9'><img src="img/frame8/tips.png?rand=<?php echo $version;?>"/></div>
			<div class='f10'><img src="img/figer.png?rand=<?php echo $version;?>"/></div>
		</div>
	</script>

	<script id="page9" type="text/x-handlebars-template">

		<div class='page9'>
			<div class="page9F">
			<div class='f1'><img src="img/frame9/f1.jpg?rand=<?php echo $version;?>"/></div>
			<div class='m1'><img src="img/frame9/m1.png?rand=<?php echo $version;?>"/></div>
			<div class='m2'><img src="img/frame9/m2.png?rand=<?php echo $version;?>"/></div>
			<div class='f2'><img src="img/frame9/f1.png?rand=<?php echo $version;?>"/></div>
			<div class='f3'><img src="img/frame9/f2.png?rand=<?php echo $version;?>"/></div>
			<div class='f4'><img src="img/frame10/f2.png?rand=<?php echo $version;?>"/></div>
			<div class='f5'><img src="img/frame12/f1.png?rand=<?php echo $version;?>"/></div>
			<div class='downBtn'><img src="img/downBtn.png?rand=<?php echo $version;?>"/></div>
			</div>
		</div>
	</script>


	<script id="page10" type="text/x-handlebars-template">

	 <div class='page10'>
			<div class='f1'><img src="img/frame10/f1.jpg?rand=<?php echo $version;?>"/></div>
			<div class='f2'><img src="img/frame10/f2.png?rand=<?php echo $version;?>"/></div>
			<div class='f3'><img src="img/frame12/f1.png?rand=<?php echo $version;?>"/></div>
			<div class='downBtn'><img src="img/downBtn.png?rand=<?php echo $version;?>"/></div>


		</div>

	</div>
	</script>
	<script id="page11" type="text/x-handlebars-template">

    	<div class='page11'>
    		<div class="page11F">
				<div class='f1'><img src="img/frame11/f1.jpg?rand=<?php echo $version;?>"/></div>
				<div class='f2'><img src="img/frame12/f1.png?rand=<?php echo $version;?>"/></div>
				<div class="downBtn"><img src="img/downBtn.png?rand=<?php echo $version;?>"/></div>
			</div>
		</div>
	</script>

	<script id="page12" type="text/x-handlebars-template">

	    <div class='page12'>

			<div class="f1" id="bb">
				<img src="img/frame12/f1.png?rand=<?php echo $version;?>"/>
				<canvas id="cas"  style="position:absolute;left:0px;top:0px;right:0px;bottom:0px;z-index:2;"></canvas>
			</div>


			<div class="f2"><img src="img/frame12/fire1.png?rand=<?php echo $version;?>"/></div>
			<div class="f3"><img src="img/frame12/f3.png?rand=<?php echo $version;?>"/></div>
			<div class="f4"><img src="img/figer.png?rand=<?php echo $version;?>"/></div>
			<div class="f5"><img src="img/frame12/f5.png?rand=<?php echo $version;?>"/></div>
			<div class="f6"><img src="img/frame12/f4.png?rand=<?php echo $version;?>"/></div>
			<div class="downBtn"><img src="img/downBtn.png?rand=<?php echo $version;?>"/></div>


		</div>
 	</script>
	<script id="page13" type="text/x-handlebars-template">

	   <div class='page13'>
			<div class='f1'><img src="img/frame13/f1.png?rand=<?php echo $version;?>"/></div>
			 <div class='f2'><img src="img/frame13/f2.png?rand=<?php echo $version;?>"/></div>
			<div class='f3'><img src="img/frame13/f3.png?rand=<?php echo $version;?>"/></div>
			<div class='f4'><img src="img/frame13/f4.png?rand=<?php echo $version;?>"/></div>
			<div class='f5'><img src="img/frame13/f5.png?rand=<?php echo $version;?>"/></div>
			<div class='f6'><img src="img/frame13/f6.png?rand=<?php echo $version;?>"/></div>
			{{!<div class="downBtn"><img src="img/downBtn.png?rand=<?php echo $version;?>"/></div>}}
			<div class='figer'><img src="img/figer.png?rand=<?php echo $version;?>"/></div>



		</div> 
 	</script>
	<script id="page14" type="text/x-handlebars-template">
 		<div class='page14'>
			<div class='f1'><img src="img/frame14/f1.png?rand=<?php echo $version;?>"/></div>
		 	<div class='f2'><img src="img/frame14/f2.png?rand=<?php echo $version;?>"/></div>
			<div class='f3'><img src="img/frame14/f3.png?rand=<?php echo $version;?>"/></div>
			<div class='f4'><img src="img/frame14/f5.png?rand=<?php echo $version;?>"/></div>
			<div class='f5'><img src="img/frame14/f4.png?rand=<?php echo $version;?>"/></div>
			<div class='f6'><img src="img/frame14/f8.png?rand=<?php echo $version;?>"/></div>
			<div class='f7'><img src="img/frame14/f6.png?rand=<?php echo $version;?>"/></div>
			<div class='f8'><img src="img/frame14/f7.png?rand=<?php echo $version;?>"/></div>
			<div class='f9'><img src="img/frame14/tips.png?rand=<?php echo $version;?>"/></div>
		</div>
 	</script>

	<script id="page15" type="text/x-handlebars-template">

		<div class='page15'>
			<div class='f2'><img src="img/frame15/f2.jpg?rand=<?php echo $version;?>"/></div>
			<div class='f1'><img src="img/frame15/f1.png?rand=<?php echo $version;?>"/></div>
			<div class='f3'><img src="img/frame15/f3.png?rand=<?php echo $version;?>?rand=1"/></div>
			<div class='figer'><img src="img/figer.png?rand=<?php echo $version;?>"/></div>

		</div>
	</script>

	<script id="page16" type="text/x-handlebars-template">

			<div class='page16'>
			<div class='f3'><img src="img/frame16/f4.jpg?rand=<?php echo $version;?>"/></div>
			<div class='f4'><img src="img/frame16/f3.jpg?rand=<?php echo $version;?>"/></div>
			<div class='f2'><img src="img/frame16/f2.png?rand=<?php echo $version;?>"/></div>
			<div class='f1'><img src="img/frame16/f1.png?rand=<?php echo $version;?>"/></div>
			<div class="downBtn"><img src="img/downBtn.png?rand=<?php echo $version;?>"/></div>


		</div>
	</script>

	<script id="page17" type="text/x-handlebars-template">
		<div class='page17'>
			<div class='f1'><img src="img/frame17/f1.jpg?rand=<?php echo $version;?>"/></div>
			<div class='f2'><img src="img/frame17/f2.jpg?rand=<?php echo $version;?>"/></div>
			<div class='f3'><img src="img/frame17/f3.jpg?rand=<?php echo $version;?>"/></div>
			<div class='f4'><img src="img/frame17/f4.jpg?rand=<?php echo $version;?>"/></div>
			<div class="downBtn"><img src="img/downBtn.png?rand=<?php echo $version;?>"/></div>


		</div>

	</script>

	<script id="page18" type="text/x-handlebars-template">
		<div class='page18'>
			<div class='f1'><img src="img/frame18/f1.jpg?rand=<?php echo $version;?>"/></div>
			<div class='m'><img src="img/frame18/m.png?rand=<?php echo $version;?>"/></div>
			<div class='f2'><img src="img/frame18/f1.png?rand=<?php echo $version;?>"/></div>
			<div class='f3'><img src="img/frame18/f2.png?rand=<?php echo $version;?>"/></div>
			<div class='f4'><img src="img/frame18/f3.png?rand=<?php echo $version;?>"/></div>
			<div class='f5'><img src="img/frame18/f19-f1.png?rand=<?php echo $version;?>"/></div>
			<div class='f6'><img src="img/frame18/f19-f3.png?rand=<?php echo $version;?>"/></div>
			<div class="downBtn"><img src="img/downBtn.png?rand=<?php echo $version;?>"/></div>


		</div>
	</script>

	<script id="page19" type="text/x-handlebars-template">
		<div class="page19">
		<div class='page19F'>
			<div class='f1'><img src="img/frame19/f1.jpg?rand=<?php echo $version;?>"/></div>
			<div class='f2'><img src="img/frame19/f1.png?rand=<?php echo $version;?>"/></div>
			<div class='f3'><img src="img/frame19/f3.png?rand=<?php echo $version;?>"/></div>
			<div class="downBtn"><img src="img/downBtn.png?rand=<?php echo $version;?>"/></div>
		</div>
		</div>

	</script>

	<script id="page20" type="text/x-handlebars-template">
		<div class="page20">
					
			<div class='f1'><img src="img/frame20/f1.png?rand=<?php echo $version;?>"/></div>

			<div class='f4'>
				<div class='leftButton'><img src="img/frame20/f2.png?rand=<?php echo $version;?>"/></div>
				<div class="scroll"></div>
				<div class='rightButton'><img src="img/frame20/f3.png?rand=<?php echo $version;?>"/></div>
			</div>
			<div class='f2'><img src="img/frame20/f2.jpg?rand=<?php echo $version;?>"/></div>
			<div class='shareBtn'><img src="img/frame20/shareBtn.jpg?rand=<?php echo $version;?>"/></div>
			<div class="p20Themes">
			</div>

		</div>
	</script>


	<script id="themes" type="text/x-handlebars-template">
		<div class="title"><img src="img/frame20/t1.png?rand=<?php echo $version;?>"/></div>

		<div class="themes-container">
			<div class='leftButton'><img src="img/frame20/f2.png?rand=<?php echo $version;?>"/></div>
				<div class="scroll"></div>
			<div class='rightButton'><img src="img/frame20/f3.png?rand=<?php echo $version;?>"/></div>
		</div>
		<div class="info">
			<div class="info-content">

			</div>
		</div>
		<div class="backButton">
			<img src="img/frame20/t2.png?rand=<?php echo $version;?>"/>
		</div>


	</script>


	<script id="themesInfo" type="text/x-handlebars-template">

		<ul>
			{{#if hgfs}}
			
				<li><div>颜色</div><div>安装尺寸<span>(高x宽x厚)(毫米)</span></div></li>
				<li><div>{{color}}</div><div>{{asize}}</div></li>
				<li><div>最大干衣量<span>(公斤)</span></div><div>显示屏</div></li>
				<li><div>{{max}}</div><div>{{scree}}</div></li>
				<li><div>烘干方式</div><div>面板按键</div></li>
				<li><div>{{hgfs}}</div><div>{{press}}</div></li>
				<li><div>机器尺寸<span>(高x宽x厚)(毫米)</span></div><div>产地</div></li>
				<li><div>{{size}}</div><div>{{from}}</div></li>

			{{else}}


				<li class='min'><div>颜色</div><div>显示屏</div></li>
				<li class='min'><div>{{color}}</div><div>{{scree}}</div></li>
				<li class='min'><div>最大洗涤量<span>(公斤)</div><div>面板按键</div></li>
				<li class='min'><div>{{max}}</div><div>{{press}}</div></li>
				<li class='min'><div>最高脱水转速<span>(转/分)</span></span></div><div>能效等级</div></li>
				<li class='min'><div>{{maxZ}}</div><div>{{effect}}</div></li>
				<li class='min'><div>机器尺寸<span>(高x宽x厚)(毫米)</span></div><div>产地</div></li>
				<li class='min'><div>{{size}}</div><div>{{from}}</div></li>
				<li class='min'><div>安装尺寸<span>(高x宽x厚)(毫米)</span></div><div></div></li>
				<li class='min'><div>{{asize}}</div><div></div></li>


			{{/if}}
		</ul>
	</script>

	<script id="share" type="text/x-handlebars-template">

		<div class="share">
			<div><img src="img/share.png?rand=<?php echo $version;?>"/></div>

		</div>
	</script>

<!-- 
	<div style="width:300px;height:300px;background-color:#778899;color:red;position:absolute;left:0px;top:0px;z-index:1000;overflow:scroll" id="info"></div> -->
	<script type="text/javascript" src="dist/js/main.js?rand=<?php echo $version;?>"></script>

</body>
</html>