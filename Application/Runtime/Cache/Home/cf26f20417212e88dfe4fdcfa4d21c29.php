<?php if (!defined('THINK_PATH')) exit();?><aside class="col-md-3 col-sm-4">
    <section class="panel">
        <div class="panel-heading">
            <h3 class="panel-title">他们正在招聘</h3>
        </div>
        <div class="panel-body">
            <ul class="list-unstyled">
            <?php if(is_array($top)): foreach($top as $key=>$vo): ?><li>
                    <dl>
                        <dd class="avatar"><a href="<?php echo U('Index/details',array('id'=>$vo[id]));?>">
                            <img src="/zhaopin/Public/Home/config/images/default.png"></a></dd>
                        <dt><a href="<?php echo U('Index/details',array('id'=>$vo[id]));?>" title="<?php echo ($vo["job_name"]); ?>"><?php echo ($vo["job_name"]); ?></a></dt>
                        <dd class="description"><?php echo ($vo["company_name"]); ?></dd>
                    </dl>
                </li><?php endforeach; endif; ?>
            </ul>
        </div>
    </section>

</aside>
</div>
</div>

</div>



<div class="col-md-5 col-md-offset-4">
<div class="center1">
© 2018 <em>226safe team</em> All Rights Reserved
<br>
</div>
</div>

<script src="/zhaopin/Public/Home/job.js"></script>
<script src="/zhaopin/Public/Home/base.js"></script>
<script src="/zhaopin/Public/Home/jquery.js"></script>
<script type="text/javascript" src="/zhaopin/Public/Home/bootstrap.js"></script>
</form>


</body></html>