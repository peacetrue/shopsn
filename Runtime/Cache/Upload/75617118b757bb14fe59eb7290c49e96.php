<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Uploadify</title>
<link rel="stylesheet" type="text/css" href="http://www.shopsn.xyz/Public/Common/uploadify/uploadify.css" />
</head>
<body>
<div class="W">
	<div class="Bg"></div>
	<div class="Wrap" id="Wrap">
		<div class="Title">
			<h3 class="MainTit" id="MainTit"><?php echo ($info["title"]); ?></h3>
			<a href="javascript:Close();" title="关闭" class="Close"></a>
		</div>
		<div class="Cont">
			<p class="Note">最多上传<strong><?php echo ($info["uploadNum"]); ?></strong>个附件,单文件最大<strong><?php echo ($info["size"]); ?></strong>,类型<strong><?php echo ($info["type"]); ?></strong>宽度：<strong><?php echo ($info[0]); ?>~<?php echo ($info[1]); ?></strong>, 高度：<strong><?php echo ($info[2]); ?>~<?php echo ($info[3]); ?></strong></p>
			<div class="flashWrap">
				<input name="uploadify" id="uploadify" type="file" multiple="true" />
				<!-- <span><input type="checkbox" name="iswatermark" id="iswatermark" /><label>是否添加水印</label></span>-->
			</div>
			<div class="fileWarp">
				<fieldset>
					<legend>列表</legend>
					<ul>
					</ul>
					<div id="fileQueue">
					</div>
				</fieldset>
			</div>
			<div class="btnBox">
				<button class="btn" id="SaveBtn">保存</button>
				&nbsp;
				<button class="btn" id="CancelBtn">取消</button>
			</div>
		</div>
		<!--[if IE 6]>
		<iframe frameborder="0" style="width:100%;height:100px;background-color:transparent;position:absolute;top:0;left:0;z-index:-1;"></iframe>
		<![endif]-->
	</div>
</div>
<script src="http://www.shopsn.xyz/Public/Common/js/jquery-1.11.3.min.js?a=<?php echo time();?>" type="text/javascript"></script> 
<script src='http://www.shopsn.xyz/Public/Common/uploadify/jquery.uploadify.js?a=<?php echo time();?>'></script>
<script src="http://www.shopsn.xyz/Public/Common/uploadify/uploadify-move.js?a=<?php echo time();?>" type="text/javascript"></script> 
<script src='http://www.shopsn.xyz/Public/Common/js/upload.js?a=<?php echo time();?>'></script>
<script type="text/javascript">
var num = <?php echo ($_GET['uploadNum']); ?>;
var size = parseInt('<?php echo ($info["size"]); ?>'.substring(-1))*1000+'KB';
console.log(size);
var input = "<?php echo ($_GET['input']); ?>";
var callBack = "<?php echo ($info["callBack"]); ?>";
$(function() {
	$('#uploadify').uploadify({
		'auto'			  : true,
		'method'   		  : 'post',
		'multi'   		  : true,
		'swf'      		  : 'http://www.shopsn.xyz/Public/Common/uploadify/uploadify.swf?a=<?php echo time();?>',
      	'uploader'        : "<?php echo U('uploadImageToLocal', array('path' => $info['path'], 'sId' => $sId, 'min_width' => $info[0],'max_width'=> $info[1], min_height => $info[2], 'max_height' => $info[3] ));?>",
   		'progressData'    : 'all',
		'queueSizeLimit'  : num,
        'uploadLimit'     : num,
		'fileSizeLimit'   : size,
        'fileTypeDesc' 	  : 'Image Files',
        'fileTypeExts'    : '*.jpeg; *.jpg; *.png; *.gif',
		'buttonImage'     : 'http://www.shopsn.xyz/Public/Common/uploadify/select.png',
		'queueID'         : 'fileQueue',
		'onUploadStart'   : function(file){
			$('#uploadify').uploadify('settings', 'formData', {'iswatermark':$("#iswatermark").is(':checked')});				
		},
		'onUploadSuccess' : function(file, data, response){
			var data = (eval('('+data+')'));
			$(".fileWarp ul").append(SetImgContent(data, 'http://www.shopsn.xyz/Public/Common/uploadify/nopic.png'));
			
			var data =  $('#uploadify').data('uploadify').settings;
			var uploadLimit = data.uploadLimit;
			
			$('#uploadify').uploadify('settings','uploadLimit', ++uploadLimit)//重置
			
			return SetUploadFile("<?php echo U('deleteFile');?>");
		},
		'onUploadError' : function(file, errorCode, errorMsg, errorString) {
			
			
			
            alert('The file ' + file.name + ' could not be uploaded: ' + errorString);
        },
        //检测FLASH失败调用  
        'onFallback': function () {  
            alert("您未安装FLASH控件，无法上传！请安装FLASH控件后再试。");  
        }  
	});
});
</script>
</body>
</html>