<div class="row-fluid">
    <div class="span12">
        <ul class="breadcrumb">
        <li>
            <a href="<?php echo site_url('thread'); ?>">Home</a> <span class="divider">/</span>
        </li>
        <?php $cat_total = count($cat); foreach ($cat as $key => $c): ?>
        <li>
            <a href="<?php echo site_url('thread/category/'.$c['slug']); ?>"><?php echo $c['name']; ?></a> 
            <?php if ($key+1 != $cat_total): ?>
            <span class="divider">/</span>
            <?php endif; ?>
        </li>
        <?php endforeach; ?>
        </ul>
    </div>
</div>

<div class="row-fluid">
    <div class="span9">
        <?php if (isset($tmp_success)): ?>
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert" href="#">&times;</a>
            <h4 class="alert-heading">Reply posted!</h4>
        </div>
        <?php endif; ?>
        <?php if (isset($tmp_success_new)): ?>
        <div class="alert alert-success">
            <a class="close" data-dismiss="alert" href="#">&times;</a>
            <h4 class="alert-heading">New thread created!</h4>
        </div>
        <?php endif; ?>

        <div class="page-header">
            <h3><?php echo $thread->title; ?></h3>
        </div>
        
        <?php
        function time_ago($date) {

            if(empty($date)) {
                return "No date provided";
            }

            $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");
            $lengths = array("60","60","24","7","4.35","12","10");
            $now = time();
            $unix_date = strtotime($date);

            // check validity of date

            if(empty($unix_date)) {
                return "Bad date";
            }

            // is it future date or past date
            if($now > $unix_date) {
                $difference = $now - $unix_date;
                $tense = "ago";
            } else {
                $difference = $unix_date - $now;
                $tense = "from now";
            }
            for($j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++) {
                $difference /= $lengths[$j];
            }
            $difference = round($difference);
            if($difference != 1) {
                $periods[$j].= "s";
            }

            return "$difference $periods[$j] {$tense}";
        }
        ?>
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/jquery/forum/jquery.wysiwyg.css"/>
        <script src="<?php echo base_url(); ?>assets/jquery/forum/jquery.wysiwyg.js" charset="utf-8"></script>
        <script src="<?php echo base_url(); ?>assets/jquery/forum/controls/wysiwyg.link.js" charset="utf-8"></script>
        
        <script>
            controlValue = {
                    justifyLeft: { visible : false },
                    justifyCenter: { visible : false },
                    justifyRight: { visible : false },
                    justifyFull: { visible : false },
                    insertHorizontalRule: { visible: false },
                    insertTable: { visible: false },
                    insertImage: { visible: false },
                    h1: { visible: false },
                    h2: { visible: false },
                    h3: { visible: false }
                };
                cssValue = {
                    fontFamily: 'Verdana',
                    fontSize: '13px'
                };
            $(document).ready(function(){
                $('#textpost').wysiwyg({
                    initialContent: '', html: '',
                    controls: controlValue,
                    css: cssValue,
                    autoGrow: true
                });
                
                $('.textpostreply').wysiwyg({
                    initialContent: '', html: '',
                    controls: controlValue,
                    css: cssValue
                });
            });
        </script>
        <?php foreach ($posts as $post): ?>
            <div class="well" style="font-family: Verdana;">
                <?php echo $post->post; ?><br/><br/>    
                
                <ul class="nav nav-pills" style="float:left;">
                <li class="dropdown" id="menu<?php echo $post->id; ?>">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#menu<?php echo $post->id; ?>" style="border: 1px solid #d9d9d9;font-size: 11px;">
                Quote / Reply
                <b class="caret"></b>
                </a>
                <ul class="active dropdown-menu">
                    <script>
                    $(document).ready(function() {
                        $("#replypost<?php echo $post->id; ?>").wysiwyg("setContent", "<div style='font-size:11px; background: #e3e3e3;padding:5px;'>posted by <b>@<?php echo $post->username; ?></b><p><i><?php echo preg_replace("/&#?[a-z0-9]+;/i","", strip_tags($post->post)); ?></i></p></div><br/><br/>");
                    });
                    </script>
                <li><form class="well" action="" method="post" style="margin: 5px 10px;width: 600px;text-align: left;">
                        <input type="hidden" name="row[thread_id]" value="<?php echo $thread->id; ?>"/>
                        <input type="hidden" name="row[reply_to_id]" value="<?php echo $post->id; ?>"/>
                        <input type="hidden" name="row[author_id]" value="<?php echo $this->session->userdata('cibb_user_id'); ?>"/>
                        <input type="hidden" name="row[date_add]" value="<?php echo date('Y-m-d H:i:s'); ?>"/>
                        <textarea name="row[post]" id="replypost<?php echo $post->id; ?>" class="textpostreply" cols="72" style="height:180px;" class="span12">
                        </textarea>
                        <input type="submit" style="margin-top:15px;font-weight: bold;" name="btn-post" class="btn btn-primary" value="Reply Post"/>
                    </form></li>
                </ul>
                </li>
                </ul>
                
                <span style="font-size:11px;float:right;position: relative;top:14px;">
                    posted by <?php echo $post->username; ?>, <?php echo time_ago($post->date_add); ?>
                </span>
                <div class="clearfix" style="height: 30px;"></div>

            </div>
        <?php endforeach; ?>


        <div class="pagination" style="text-align:center;">
            <ul><?php echo $page; ?></ul>
        </div>

        <div class="page-header">
            <h4>Reply Thread</h4>
        </div>
        
        <form class="well" action="" method="post" style="margin: 5px 10px;">
            <input type="hidden" name="row[thread_id]" value="<?php echo $thread->id; ?>"/>
            <input type="hidden" name="row[reply_to_id]" value="0"/>
            <input type="hidden" name="row[author_id]" value="<?php echo $this->session->userdata('cibb_user_id'); ?>"/>
            <input type="hidden" name="row[date_add]" value="<?php echo date('Y-m-d H:i:s'); ?>"/>
            <textarea name="row[post]" class="span12" id="textpost" style="height:150px;"></textarea>
            <input type="submit" style="margin-top:15px;font-weight: bold;" name="btn-post" class="btn btn-primary" value="Reply Post"/>
        </form>
    </div>

    <div class="span3">
        <ul class="nav nav-tabs nav-stacked">
            <li class="active">
            <a href="javascript://"><b>Categories</b></a>
            </li>
            <?php foreach($categories as $cat): ?>
            <li><a href="<?php echo site_url('thread/category/'.$cat['slug']); ?>"><?php echo $cat['name']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
