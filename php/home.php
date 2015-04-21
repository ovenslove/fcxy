	<script src="../js/home.js" type="text/javascript" ></script>

	 <link rel="stylesheet" type="text/css" href="../css/webuploader.css">
    
    <link rel="stylesheet" type="text/css" href="../css/imgupload.css">




	<style type="text/css" media="screen">
		*{
			margin:0;
			border:0;
		}
		ul,li {
			list-style:none;
			
		}
		.mainbox1{min-height:1000px; width: 650px; margin:0 auto;}
		.simbox{ 
			min-height:80px; 
			width: 100%; 
			background:#E4E4E4; 
			margin-bottom: 10px; 
			border:1px solid #909090;
			box-shadow: 0px 1px 2px black ;
		}
		.contentbox { min-height:300px;}
		.topinput{height:80px; width: 100%; border-bottom:1px solid #909090;}
		.home_input { height:70px; width: 590px; float:left; padding:5px; overflow-y: auto; line-height:20px;}
		.home_input img { display:inline-block;}
		.imagebtn{height:100%; min-width: 30px; float:left; border-left:1px solid #909090; line-height:90px; padding: 0 8px; color:#414448;}
		.topadd{ display:none; height:30px; width: 100%; line-height:30px; padding-left:10px; position:relative;}
		 .seaarea{position: absolute; right:100px; min-height:24px; width: 150px; margin:2px 5px; display:inline-block;font-size:14px;}
		 .topadd input{position: absolute; right:10px;height:24px; width: 70px; margin:3px 5px; background:#598BEC;}
		  .seaarea ul { display:none;}
		 .seaarea li{ border:1px solid #B0B0B0; width: 80px; margin-left: 65px; background:#FFFFFF;}
		  .seaarea li i { margin:0 8px;}
		  #areasel{ margin-left:15px;}
		  #imagefacebox{  display:none;position: absolute; height:200px; width: 335px; border:1px solid black; left:0px; background:#fff; overflow-y: auto;} 
		  #imagefacebox img { margin:0px 1px; height:24px; width: 24px; }
		  .picadd {min-height: 200px; width: 100%; border:1px solid black;}
		  .file-item{ height:250px;  margin:5px ; display:inline-block;}
		  .info{ width: 150px; overflow-x: hidden;}
	</style>

	<!--    <script type="text/javascript">
    // 添加全局站点信息
    var BASE_URL = '/webuploader';
    </script>


	<script>

	


// 初始化Web Uploader
var uploader = WebUploader.create({

    // 选完文件后，是否自动上传。
    auto: true,

    // swf文件路径
    swf: BASE_URL + '/Uploader.swf',

    // 文件接收服务端。
    server: 'simpletalk.php',

    // 选择文件的按钮。可选。
    // 内部根据当前运行是创建，可能是input元素，也可能是flash.
    pick: '#filePicker',

    // 只允许选择图片文件。
    accept: {
        title: 'Images',
        extensions: 'gif,jpg,jpeg,bmp,png',
        mimeTypes: 'image/*'
    }
});

// 当有文件添加进来的时候
uploader.on( 'fileQueued', function( file ) {
    var $li = $(
            '<div id="' + file.id + '" class="file-item thumbnail">' +
                '<img>' +
                '<div class="info">' + file.name + '</div>' +
            '</div>'
            ),
        $img = $li.find('img');


    // $list为容器jQuery实例
    var list=$("#uploader-demo");
    list.append( $li );

    // 创建缩略图
    // 如果为非图片文件，可以不用调用此方法。
    // thumbnailWidth x thumbnailHeight 为 100 x 100
    var thumbnailWidth=150;
    var thumbnailHeight=200;
    uploader.makeThumb( file, function( error, src ) {
        if ( error ) {
            $img.replaceWith('<span>不能预览</span>');
            return;
        }

        $img.attr( 'src', src );
    }, thumbnailWidth, thumbnailHeight );
});


// 文件上传过程中创建进度条实时显示。
uploader.on( 'uploadProgress', function( file, percentage ) {
    var $li = $( '#'+file.id ),
        $percent = $li.find('.progress span');

    // 避免重复创建
    if ( !$percent.length ) {
        $percent = $('<p class="progress"><span></span></p>')
                .appendTo( $li )
                .find('span');
    }

    $percent.css( 'width', percentage * 100 + '%' );
});

// 文件上传成功，给item添加成功class, 用样式标记上传成功。
uploader.on( 'uploadSuccess', function( file ) {
    $( '#'+file.id ).addClass('upload-state-done');
});

// 文件上传失败，显示上传出错。
uploader.on( 'uploadError', function( file ) {
    var $li = $( '#'+file.id ),
        $error = $li.find('div.error');

    // 避免重复创建
    if ( !$error.length ) {
        $error = $('<div class="error"></div>').appendTo( $li );
    }

    $error.text('上传失败');
});

// 完成上传完了，成功或者失败，先删除进度条。
uploader.on( 'uploadComplete', function( file ) {
    $( '#'+file.id ).find('.progress').remove();
});







	</script> -->

	<div class="mainbox1">
		<div class="simbox top1">
			<form action="simpletalk.php" method="POST" accept-charset="utf-8">
				
				
			<div class="topinput">
					
					<div class="home_input" contenteditable="true" id="home_input"></div>
					<div class="imagebtn" >
						<i class="fa fa-camera-retro fa-2x"></i>
					</div>
					
					
					
			</div>
			<div class="topadd">
						<i class="fa fa-meh-o fa-lg" id="imagefacebtn"></i>
						
						<div class="seaarea">	

						<span>可见范围：</span><span id="areasel"><oven>所有人</oven><i class="fa fa-angle-down fa-lg "></i></span>
						<ul>
							<li><i class="fa fa-lock "></i>所有人</li>
							<li><i class="fa fa-lock "></i>仅自己</li>
						</ul>
						
						</div>

						<input type="submit" value="发表" class="submitbtn">
						<div id="imagefacebox"></div>
			</div>

			<div class="picadd">
				<!-- <div id="uploader-demo">
   			 
   						 <div id="fileList" class="uploader-list"></div>
    						<div id="filePicker">选择图片</div>
					</div>
 -->


<div id="uploader" class="wu-example">
    <div class="queueList">
        <div id="dndArea" class="placeholder">
            <div id="filePicker" class="webuploader-container"><div class="webuploader-pick">点击选择图片</div><div id="rt_rt_19jbh7ui01ki1r7c13pvarmnkb1" style="position: absolute; top: 0px; left: 448px; width: 168px; height: 44px; overflow: hidden; bottom: auto; right: auto;"><input type="file" name="file" class="webuploader-element-invisible" multiple="multiple" accept="image/*"><label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label></div></div>
            <p>或将照片拖到这里，单次最多可选300张</p>
        </div>
    <ul class="filelist"></ul></div>
    <div class="statusBar" style="display:none;">
        <div class="progress" style="display: none;">
            <span class="text">0%</span>
            <span class="percentage" style="width: 0%;"></span>
        </div><div class="info">共0张（0B），已上传0张</div>
        <div class="btns">
            <div id="filePicker2" class="webuploader-container"><div class="webuploader-pick">继续添加</div><div id="rt_rt_19jbh7ui819tt59k10jt12vpnn46" style="position: absolute; top: 0px; left: 0px; width: 1px; height: 1px; overflow: hidden;"><input type="file" name="file" class="webuploader-element-invisible" multiple="multiple" accept="image/*"><label style="opacity: 0; width: 100%; height: 100%; display: block; cursor: pointer; background: rgb(255, 255, 255);"></label></div></div><div class="uploadBtn state-pedding">开始上传</div>
        </div>
    </div>
</div>









            
			</div>




			</form>

		</div>
		<div class="simbox contentbox">
			
		</div>
		<div class="simbox contentbox">
			
		</div>
		<div class="simbox contentbox">
			
		</div>
		<div class="simbox contentbox">
			
		</div>
	</div>

