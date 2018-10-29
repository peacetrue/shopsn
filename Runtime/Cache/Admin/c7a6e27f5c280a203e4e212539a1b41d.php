<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html  >
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=">
<title><?php echo ($title); ?></title>

<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Admin/css/css.css?a=1546545633">
<link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/dist/css/AdminLTE.css">
<script src="http://www.shopsn.xyz/Public/Common/js/jquery-1.11.3.min.js"></script>
<script src="http://www.shopsn.xyz/Public/Common/js/layer/layer.js"></script>
</head>
<body>



    <link href="http://www.shopsn.xyz/Public/Common/daterangepicker/daterangepicker-bs3.css"
          rel="stylesheet" type="text/css" />
    <script src="http://www.shopsn.xyz/Public/Common/daterangepicker/moment.min.js"
            type="text/javascript"></script> <script
        src="http://www.shopsn.xyz/Public/Common/daterangepicker/daterangepicker.js"
        type="text/javascript"></script>
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="http://www.shopsn.xyz/Public/Common/bootstrap/css/font-awesome.min.css" />
    <div class="wrapper">
        <section class="content ">
            <!-- Main content -->
            <div class="container-fluid">
                <div class="pull-right">
                    <a href="javascript:history.go(-1)" data-toggle="tooltip" title=""
                       class="btn btn-default" data-original-title="返回"><i
                            class="fa fa-reply"></i></a>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <i class="fa fa-list"></i> 修改热卖商品导航的热卖商品
                        </h3>
                    </div>
                    <div class="panel-body ">
                        <!--表单数据-->

                        <!--通用信息-->
                        <div class="tab-content col-md-10">
                            <div class="tab-pane active" id="tab_tongyong">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td class="col-sm-2"  colspan="2">第一块图片上传：（注意图片要求：宽：100px,高：100px）</td>
                                    </tr>
                                    <tr>
                                        <td> <input onclick="GetUploadify(1,'img1','superpop');" type="button" value="上传图片1"/></td>
                                        <td><img src="<?php echo ($result_one["img_url"]); ?>" <?php if($result_one['img_url']): ?>class="nav-spec-img-xs"<?php else: ?>class="nav-spec-img-yc"<?php endif; ?> id="img1"  width="100" height="100"/><br/></td>
                                    </tr>
                                    <tr>
                                        <td>选择商品1:</td>
                                        <td>
                                            <div class="form-group">
                                                <div class="col-xs-2">
                                                    <a class="btn btn-primary" href="javascript:void(0);" onclick="selectGoods('goods_list1')" ><i class="fa fa-search"></i>添加商品</a>
                                                </div>
                                                <div class="col-xs-2">
                                                    <span id="err_goods" style="color: #F00; display: none;">请添加下单商品</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th style="display:none">选择</th>
                                                        <th class="text-left">id</th>
                                                        <th class="text-left">商品名称</th>
                                                        <th class="text-left">价格</th>
                                                        <th class="text-left">库存</th>
                                                        <th class="text-left">操作</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="goods_list1" class="img1-radio">
                                                    <?php if($result_goods_two): ?><tr>
                                                            <td style="display:none"><input type="radio" class="xz-radio" name="goods_id" value="<?php echo ($result_goods_one["id"]); ?>"/></td>
                                                            <td class="text-left"><?php echo ($result_goods_one["id"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_one["title"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_one["price_market"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_one["stock"]); ?></td>
                                                            <td class="text-left"><a href="javascript:void(0)" onclick="javascript:$(this).parent().parent().remove();">删除</a></td>
                                                        </tr><?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <input onclick="GetUploadify(1,'img2','superpop');" type="button" value="上传图片2"/></td>
                                        <td><img src="<?php echo ($result_two["img_url"]); ?>" id="img2" <?php if($result_two['img_url']): ?>class="nav-spec-img-xs"<?php else: ?>class="nav-spec-img-yc"<?php endif; ?> width="100" height="100"/><br/></td>
                                    </tr>
                                    <tr>
                                        <td>选择商品2:</td>
                                        <td>
                                            <div class="form-group">
                                                <div class="col-xs-2">
                                                    <a class="btn btn-primary" href="javascript:void(0);" onclick="selectGoods('goods_list2')" ><i class="fa fa-search"></i>添加商品</a>
                                                </div>
                                                <div class="col-xs-2">
                                                    <span id="err_goods" style="color: #F00; display: none;">请添加下单商品</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th style="display:none">选择</th>
                                                        <th class="text-left">id</th>
                                                        <th class="text-left">商品名称</th>
                                                        <th class="text-left">价格</th>
                                                        <th class="text-left">库存</th>
                                                        <th class="text-left">操作</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="goods_list2" class="img2-radio">
                                                    <?php if($result_goods_two): ?><tr>
                                                            <td style="display:none"><input type="radio" class="xz-radio" name="goods_id" value="<?php echo ($result_goods_two["id"]); ?>"/></td>
                                                            <td class="text-left"><?php echo ($result_goods_two["id"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_two["title"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_two["price_market"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_two["stock"]); ?></td>
                                                            <td class="text-left"><a href="javascript:void(0)" onclick="javascript:$(this).parent().parent().remove();">删除</a></td>
                                                        </tr><?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td class="col-sm-2"  colspan="2">第二块图片上传：（注意图片要求：宽：209px,高：209px）</td>
                                    </tr>
                                    <tr>
                                        <td> <input onclick="GetUploadify(1,'img3','superpop');" type="button" value="上传图片"/></td>
                                        <td><img src="<?php echo ($result_three["img_url"]); ?>" <?php if($result_three['img_url']): ?>class="nav-spec-img-xs"<?php else: ?>class="nav-spec-img-yc"<?php endif; ?> id="img3"  width="100" height="100"/><br/></td>
                                    </tr>
                                    <tr>
                                        <td>选择商品:</td>
                                        <td>
                                            <div class="form-group">
                                                <div class="col-xs-2">
                                                    <a class="btn btn-primary" href="javascript:void(0);" onclick="selectGoods('goods_list3')" ><i class="fa fa-search"></i>添加商品</a>
                                                </div>
                                                <div class="col-xs-2">
                                                    <span id="err_goods" style="color: #F00; display: none;">请添加下单商品</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th style="display:none">选择</th>
                                                        <th class="text-left">id</th>
                                                        <th class="text-left">商品名称</th>
                                                        <th class="text-left">价格</th>
                                                        <th class="text-left">库存</th>
                                                        <th class="text-left">操作</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="goods_list3" class="img3-radio">
                                                    <?php if($result_goods_three): ?><tr>
                                                            <td style="display:none"><input type="radio" class="xz-radio" name="goods_id" value="<?php echo ($result_goods_three["id"]); ?>"/></td>
                                                            <td class="text-left"><?php echo ($result_goods_three["id"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_three["title"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_three["price_market"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_three["stock"]); ?></td>
                                                            <td class="text-left"><a href="javascript:void(0)" onclick="javascript:$(this).parent().parent().remove();">删除</a></td>
                                                        </tr><?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td class="col-sm-2"  colspan="2">第3块图片上传：（注意图片要求：宽：158px,高：158px）</td>
                                    </tr>
                                    <tr>
                                        <td> <input onclick="GetUploadify(1,'img4','superpop');" type="button" value="上传图片1"/></td>
                                        <td><img src="<?php echo ($result_four["img_url"]); ?>" id="img4" <?php if($result_four['img_url']): ?>class="nav-spec-img-xs"<?php else: ?>class="nav-spec-img-yc"<?php endif; ?> width="100" height="100"/><br/></td>
                                    </tr>
                                    <tr>
                                        <td>选择商品:</td>
                                        <td>
                                            <div class="form-group">
                                                <div class="col-xs-2">
                                                    <a class="btn btn-primary" href="javascript:void(0);" onclick="selectGoods('goods_list4')" ><i class="fa fa-search"></i>添加商品</a>
                                                </div>
                                                <div class="col-xs-2">
                                                    <span id="err_goods" style="color: #F00; display: none;">请添加下单商品</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th style="display:none">选择</th>
                                                        <th class="text-left">id</th>
                                                        <th class="text-left">商品名称</th>
                                                        <th class="text-left">价格</th>
                                                        <th class="text-left">库存</th>
                                                        <th class="text-left">操作</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="goods_list4" class="img4-radio">
                                                    <?php if($result_goods_four): ?><tr>
                                                            <td style="display:none"><input type="radio" class="xz-radio" name="goods_id" value="<?php echo ($result_goods["four"]["id"]); ?>"/></td>
                                                            <td class="text-left"><?php echo ($result_goods_four["id"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_four["title"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_four["price_market"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_four["stock"]); ?></td>
                                                            <td class="text-left"><a href="javascript:void(0)" onclick="javascript:$(this).parent().parent().remove();">删除</a></td>
                                                        </tr><?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td> <input onclick="GetUploadify(1,'img5','superpop');" type="button" value="上传图片2"/></td>
                                        <td><img src="<?php echo ($result_five["img_url"]); ?>" id="img5" <?php if($result_five['img_url']): ?>class="nav-spec-img-xs"<?php else: ?>class="nav-spec-img-yc"<?php endif; ?> width="100" height="100"/><br/></td>
                                    </tr>
                                    <tr>
                                        <td>选择商品:</td>
                                        <td>
                                            <div class="form-group">
                                                <div class="col-xs-2">
                                                    <a class="btn btn-primary" href="javascript:void(0);" onclick="selectGoods('goods_list5')" ><i class="fa fa-search"></i>添加商品</a>
                                                </div>
                                                <div class="col-xs-2">
                                                    <span id="err_goods" style="color: #F00; display: none;">请添加下单商品</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th style="display:none">选择</th>
                                                        <th class="text-left">id</th>
                                                        <th class="text-left">商品名称</th>
                                                        <th class="text-left">价格</th>
                                                        <th class="text-left">库存</th>
                                                        <th class="text-left">操作</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="goods_list5" class="img5-radio">
                                                    <?php if($result_goods_five): ?><tr>
                                                            <td style="display:none"><input type="radio" class="xz-radio" name="goods_id" value="<?php echo ($result_goods_five["id"]); ?>"/></td>
                                                            <td class="text-left"><?php echo ($result_goods_five["id"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_five["title"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_five["price_market"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_five["stock"]); ?></td>
                                                            <td class="text-left"><a href="javascript:void(0)" onclick="javascript:$(this).parent().parent().remove();">删除</a></td>
                                                        </tr><?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td class="col-sm-2"  colspan="2">第4块图片上传：（注意图片要求：宽：222px,高：371px）</td>
                                    </tr>
                                    <tr>
                                        <td> <input onclick="GetUploadify(1,'img6','superpop');" type="button" value="上传图片"/></td>
                                        <td><img src="<?php echo ($result_six["img_url"]); ?>" id="img6" <?php if($result_six['img_url']): ?>class="nav-spec-img-xs"<?php else: ?>class="nav-spec-img-yc"<?php endif; ?> width="100" height="100"/><br/></td>
                                    </tr>
                                    <tr>
                                        <td>选择商品:</td>
                                        <td>
                                            <div class="form-group">
                                                <div class="col-xs-2">
                                                    <a class="btn btn-primary" href="javascript:void(0);" onclick="selectGoods('goods_list6')" ><i class="fa fa-search"></i>添加商品</a>
                                                </div>
                                                <div class="col-xs-2">
                                                    <span id="err_goods" style="color: #F00; display: none;">请添加下单商品</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">
                                            <div class="form-group">
                                                <table class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th style="display:none">选择</th>
                                                        <th class="text-left">id</th>
                                                        <th class="text-left">商品名称</th>
                                                        <th class="text-left">价格</th>
                                                        <th class="text-left">库存</th>
                                                        <th class="text-left">操作</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="goods_list6" class="img6-radio">
                                                    <?php if($result_goods_six): ?><tr>
                                                            <td style="display:none"><input type="radio" class="xz-radio" name="goods_id" value="<?php echo ($result_goods_six["id"]); ?>"/></td>
                                                            <td class="text-left"><?php echo ($result_goods_six["id"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_six["title"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_six["price_market"]); ?></td>
                                                            <td class="text-left"><?php echo ($result_goods_six["stock"]); ?></td>
                                                            <td class="text-left"><a href="javascript:void(0)" onclick="javascript:$(this).parent().parent().remove();">删除</a></td>
                                                        </tr><?php endif; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>

                                <input type="hidden" id="nav_title" value="热卖商品"/>
                                <button id="submit" class="btn btn-primary text-right  ">提交</button>
                            </div>
                        </div>

                        <!--表单数据-->
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/jquery-form.js"></script>
    <script type="text/javascript" src="http://www.shopsn.xyz/Public/Common/js/alert.js?a=<?php echo time();?>"></script>
    <script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/goods/ueditor.config.js"></script>
    <script type="text/javascript" src="http://www.shopsn.xyz/Public/Admin/js/promation/promation.js?a=<?php echo time();?>"></script>
    <script>
        /*
         * 上传图片 后台专用
         * @access  public
         * @null int 一次上传图片张图
         * @elementid string 上传成功后返回路径插入指定ID元素内
         * @path  string 指定上传保存文件夹,默认存在Public/upload/temp/目录
         * @callback string  回调函数(单张图片返回保存路径字符串，多张则为路径数组 )
         */
        function GetUploadify(num,elementid,path,callback)
        {
            if (typeof(callback) == 'undefined') {
                callback = 'setUploadImgPath';
            }
            var upurl ='/adminprov.php?m=Admin&c=Uploadify&a=upload&num='+num+'&input='+elementid+'&path='+path+'&func='+callback;
            var iframe_str='<iframe frameborder="0" ';
            iframe_str=iframe_str+'id=uploadify ';
            iframe_str=iframe_str+' src='+upurl;
            iframe_str=iframe_str+' allowtransparency="true" class="uploadframe" scrolling="no"> ';
            iframe_str=iframe_str+'</iframe>';
            $("body").append(iframe_str);
            $("iframe.uploadframe").css("height",$(document).height()).css("width","100%").css("position","absolute").css("left","0px").css("top","0px").css("z-index","999999").show();
            $(window).resize(function(){
                $("iframe.uploadframe").css("height",$(document).height()).show();
            });

        }

        /**
         * 图片上传,回调函数
         */
        function setUploadImgPath(data, elementid)
        {
            $('#'+elementid).attr('src', '/'+data).css('display', 'block');
            $('.'+elementid).val( '/'+data);
        }


        //提交按钮的检测
        $("#submit").on("click",function(){
            //获取导航的名字
            var nav_title = $("#nav_title").val();

            var img1 = $("#img1").attr("src");
            var img2 = $("#img2").attr("src");
            var img3 = $("#img3").attr("src");
            var img4 = $("#img4").attr("src");
            var img5 = $("#img5").attr("src");
            var img6 = $("#img6").attr("src");
            var img1_goods_id  =  parseInt($(".img1-radio .xz-radio").val())?parseInt($(".img1-radio .xz-radio").val()):0;
            var img2_goods_id  =  parseInt($(".img2-radio .xz-radio").val())?parseInt($(".img2-radio .xz-radio").val()):0;
            var img3_goods_id  =  parseInt($(".img3-radio .xz-radio").val())?parseInt($(".img3-radio .xz-radio").val()):0;
            var img4_goods_id  =  parseInt($(".img4-radio .xz-radio").val())?parseInt($(".img4-radio .xz-radio").val()):0;
            var img5_goods_id  =  parseInt($(".img5-radio .xz-radio").val())?parseInt($(".img5-radio .xz-radio").val()):0;
            var img6_goods_id  =  parseInt($(".img6-radio .xz-radio").val())?parseInt($(".img6-radio .xz-radio").val()):0;
            var img_spec_value =[
                {img_type:1,nav_type:nav_title,img_url:img1,goods_id:img1_goods_id},
                {img_type:2,nav_type:nav_title,img_url:img2,goods_id:img2_goods_id},
                {img_type:3,nav_type:nav_title,img_url:img3,goods_id:img3_goods_id},
                {img_type:4,nav_type:nav_title,img_url:img4,goods_id:img4_goods_id},
                {img_type:5,nav_type:nav_title,img_url:img5,goods_id:img5_goods_id},
                {img_type:6,nav_type:nav_title,img_url:img6,goods_id:img6_goods_id},
            ];


            var img_spec_value = JSON.stringify(img_spec_value);

            var edit_url='<?php echo U("SuperPop/edit");?>';

                submitForm(edit_url,img_spec_value,nav_title);


        });

        /**
         * js模拟表单post提交
         * @param action
         * @param params
         */
        function submitForm(action, params,nav_title) {
            var form = $("<form></form>");
            form.attr('action', action);
            form.attr('method', 'post');
            form.attr('target', '_self');
            var input1 = $("<input type='hidden' name='spec_value' value='' />");
            var input2 = $("<input type='hidden' name='nav_type' value=''>");
            input1.attr('value', params);
            input2.attr('value',nav_title);
            form.append(input1);
            form.append(input2);
            form.appendTo("body");
            form.css('display', 'none');
            form.submit();
        }
    </script>
    <script>
        var temp = null;
        function selectGoods(elementid){
            temp = elementid;
            var goods_id = [];
            //过滤选择重复商品
            $('input[name*="goods_id"]').each(function(i,o){
                goods_id.push($(o).val());
            });
            var url = '/adminprov.php?m=Admin&c=NavImg&a=search_goods&goods_id='+goods_id;
            layer.open({
                type: 2,
                title: '选择商品',
                shadeClose: true,
                shade: 0.3,
                area: ['70%', '80%'],
                content: url,
            });
        }

        function call_back(table_html)
        {
            layer.closeAll('iframe');
            $('#'+temp).html(table_html);
            temp = null;
        }

    </script>




</body>
</html>