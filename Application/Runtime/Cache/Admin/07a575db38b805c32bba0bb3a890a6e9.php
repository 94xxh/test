<?php if (!defined('THINK_PATH')) exit(); $weather_daily =json_decode($weather_daily);?>
<?php $location=$weather_daily->results[0]->location;?>
<?php $daily=$weather_daily->results[0]->daily;?> 
<!--<?php $weather_now =json_decode($weather_now);?> -->
<div class="col-md-4">
    <div class="panel panel-default weather-widget">
        <div class="panel-body bg-success text-white">
            <div class="h4 text-white text-center">今天</div>

            <div class="m-top-md m-bottom-md text-center">
                <!--< if condition="$weather_now->results[0]->now->code eq true">
                <img src="/Uploads/3d_180/<?php echo ($weather_now->results[0]->now->code); ?>.png" />
                < else/>
                <img src="/Uploads/3d_180/<?php echo ($daily[0]->code_day); ?>.png" />
                < /if>-->
                <img src="/Uploads/3d_180/<?php echo ($daily[0]->code_day); ?>.png" />
            </div>

            <div class="degree-text text-center"><?php echo ($daily[0]->low); ?>° ~ <?php echo ($daily[0]->high); ?>°</div>
        </div> 
        <div class="panel-footer bg-white text-center padding-md">
            <div class="h4 text-upper"><!--当前温度：<font color="red"><?php echo ($weather_now->results[0]->now->temperature); ?>°　<?php echo ($weather_now->results[0]->now->text); ?></font>-->　　<?php echo ($location->name); ?> <i class="fa fa-map-marker"></i></div>
            <div class="text-muted font-12 m-top-xs">白天：<?php echo ($daily[0]->text_day); ?>　晚间：<?php echo ($daily[0]->text_night); ?></div>
            <div class="text-muted font-12 m-top-xs">降水概率（0~100）：<?php echo ($daily[0]->precip); ?></div>
            <div class="text-muted font-12 m-top-xs">风速（km/h）：<?php echo ($daily[0]->wind_speed); ?>　风力等级：<?php echo ($daily[0]->wind_scale); ?></div>
        </div>
    </div><!-- ./panel -->
</div>

<div class="col-md-4">
    <div class="panel panel-default weather-widget">
        <div class="panel-body bg-success text-white">
            <div class="h4 text-white text-center">明天</div>

            <div class="m-top-md m-bottom-md text-center">
                <img src="/Uploads/3d_180/<?php echo ($daily[1]->code_day); ?>.png" />
            </div>

            <div class="degree-text text-center"><?php echo ($daily[1]->low); ?>° ~ <?php echo ($daily[1]->high); ?>°</div>
        </div>
        <div class="panel-footer bg-white text-center padding-md">
            <div class="h4 text-upper"><?php echo ($location->name); ?> <i class="fa fa-map-marker"></i></div>
            <div class="text-muted font-12 m-top-xs">白天：<?php echo ($daily[1]->text_day); ?>　晚间：<?php echo ($daily[1]->text_night); ?></div>
            <div class="text-muted font-12 m-top-xs">降水概率（0~100）：<?php echo ($daily[1]->precip); ?></div>
            <div class="text-muted font-12 m-top-xs">风速（km/h）：<?php echo ($daily[1]->wind_speed); ?>　风力等级：<?php echo ($daily[1]->wind_scale); ?></div>
        </div>
    </div><!-- ./panel -->
</div>
 

<div class="col-md-4">
    <div class="panel panel-default weather-widget">
        <div class="panel-body bg-success text-white">
            <div class="h4 text-white text-center">后天</div>

            <div class="m-top-md m-bottom-md text-center">
                <img src="/Uploads/3d_180/<?php echo ($daily[2]->code_day); ?>.png" />
            </div>

            <div class="degree-text text-center"><?php echo ($daily[2]->low); ?>° ~ <?php echo ($daily[2]->high); ?>°</div>
        </div>
        <div class="panel-footer bg-white text-center padding-md">
            <div class="h4 text-upper"><?php echo ($location->name); ?> <i class="fa fa-map-marker"></i></div>
            <div class="text-muted font-12 m-top-xs">白天：<?php echo ($daily[2]->text_day); ?>　晚间：<?php echo ($daily[2]->text_night); ?></div>
            <div class="text-muted font-12 m-top-xs">降水概率（0~100）：<?php echo ($daily[2]->precip); ?></div>
            <div class="text-muted font-12 m-top-xs">风速（km/h）：<?php echo ($daily[2]->wind_speed); ?>　风力等级：<?php echo ($daily[2]->wind_scale); ?></div>
        </div>
    </div><!-- ./panel -->
</div>